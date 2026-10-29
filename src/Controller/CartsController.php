<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Controller\Component\FlashComponent;
use Cake\Network\Session;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\Datasource\ConnectionManager;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 *
 * @method \App\Model\Entity\Cart[] paginate($object = null, array $settings = [])
 */
class CartsController extends AppController {

    public function beforeFilter(Event $event) {
        // allow all action
        $this->Auth->allow(['add']);
    }

    public $paginate = [
        'limit' => 10,

    ];


    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paystack');
        $this->loadComponent('Common');
    }

    public function add() {
        $this->autoRender = false;
        if ($this->request->isAjax('post')) {
            //set transaction ref
            $ref = $this->Carts->readProduct();

            if (!isset($ref[0]['trans_ref'])) {
                $cart_ref = $this->request->data['trans_ref'];
            } else {
                $cart_ref = $ref[0]['trans_ref'];
            }

            $cartitem = [];
            $cartitem['id'] = $this->request->data['id'];
            $cartitem['price'] = $this->request->data['price'];
            $cartitem['license'] = $this->request->data['license'];
            $cartitem['trans_ref'] = $cart_ref;
            //print_r($cartitem);exit;
            $this->Carts->addProduct($cartitem);
        }
        echo $this->Carts->getCount();
    }

    public function addp() {
        $this->autoRender = false;
        if ($this->request->isAjax('post')) {
            //set transaction ref
            $ref = $this->Carts->readProduct();

            if (!isset($ref[0]['trans_ref'])) {
                $cart_ref = $this->request->data['trans_ref'];
            } else {
                $cart_ref = $ref[0]['trans_ref'];
            }

            $cartitem = [];
            $cartitem['id'] = $this->request->data['id'];
            $cartitem['sample_id'] = $this->request->data['sample_id'];
            $cartitem['pack_id'] = $this->request->data['pack_id'];
            $cartitem['price'] = $this->request->data['price'];
            $cartitem['license'] = $this->request->data['license'];
            $cartitem['trans_ref'] = $cart_ref;
            //print_r($cartitem);exit;
            $this->Carts->addProduct($cartitem);
        }
        echo $this->Carts->getCount();
    }

    public function paypalsample() {
        $cartitems = $this->Carts->readProduct();
        //print_r($cartitems);
        $total_price = 0;
        $this->loadModel('Stores');
        $details_array = [];
        foreach ($cartitems as $key => $value) {
            $total_price += $cartitems[$key]['price'];

            $productobj = [];
            $finddetails = $this->Stores->find()->where(['id' => $cartitems[$key]['id']])->first();
            $productobj['name'] = $finddetails['name'];
            $productobj['quantity'] = 1;
            $productobj['price'] = $cartitems[$key]['price'];
            $productobj['sku'] = 'BEATID' . $cartitems[$key]['id'];
            $productobj['currency'] = 'USD';
            $productobjfinal = json_decode(json_encode($productobj), FALSE);
            array_push($details_array, $productobjfinal);
        }
        $ch = curl_init();
        $clientId = "AVsidGp8_2lWgU4KI8eXj5d5ixd3ugR4ibsEDWRsHkF3zKj02EqFapq3mQWbkjgpmvl-l7d-7CYPIcq5";
        $secret = "EGGuF89tzBP_nfffPf3rLC40k9QwyxHqBy4wCWnwZC1lEu9gDUefI3Ktjg8VCkPSumjz9mUxeBA7_hem";
//    $clientId = "ATA2wLy0lWaVAtUOy8CewhsR_foLHtbTPAfxYxSTMll3pCy2Zh4qmf1-RjDUJxQ10My9MW6oZJBXsnB0";
//    $secret = "ECeGB8nDV3nf1xNjA-nTYU2XDnFb3yCJ2Wl03my9a2C0bU8CgYcgv9SDiQ_WDv0VxiKK9OdWOtMvi7Aj";
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $result1 = curl_exec($ch);
        $err = curl_error($ch);
        $access_token = "";
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $json = json_decode($result1);

            $access_token = $json->access_token;
        }




        $data = '{
	"intent": "sale",
	"payer": {
		"payment_method": "paypal"
	},
	"transactions": [{
		"amount": {
			"total": "' . $total_price . '",
			"currency": "USD",
			"details": {
				"subtotal": "' . $total_price . '",
				"tax": "0",
				"shipping": "0",
				"handling_fee": "0",
				"shipping_discount": "0",
				"insurance": "0"
			}
		},
		"description": "The payment transaction description.",
		"payment_options": {
			"allowed_payment_method": "INSTANT_FUNDING_SOURCE"
		},
		"item_list": {
			"items":' . json_encode($details_array) . '
		}
	}],
	"note_to_payer": "Contact us for any questions on your order.",
	"redirect_urls": {
		"return_url": "http://amplifihub.local/carts/paymentconfirm",
		"cancel_url": "http://amplifihub.local/carts/view"
	}
}';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payment");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer " . $json->access_token . "",
            "Content-length: " . strlen($data))
        );
        $result = curl_exec($ch);
        //$user = $this->request->session()->read('Auth.User');
        //$username = $user['firstname'].' '.$user['lastname'];


        if (empty($result))
            die("Error: No response.");
        else {
            $json = json_decode($result);
            // print_r($json->links);
            /* for ($x = 0; 0 < $json.lengh; $x++) {
              echo "The number is: $x <br>";
              } */

            die($json);
        }
    }

        public function paypal() {
        $cartitems = $this->Carts->readProduct();
        //print_r($cartitems);
        $total_price = 0;
        $this->loadModel('Stores');
        $details_array = [];
        foreach ($cartitems as $key => $value) {
            $total_price += $cartitems[$key]['price'];

            $productobj = [];
            $finddetails = $this->Stores->find()->where(['id' => $cartitems[$key]['id']])->first();
            $productobj['name'] = $finddetails['name'];
            $productobj['quantity'] = 1;
            $productobj['price'] = $cartitems[$key]['price'];
            $productobj['sku'] = 'BEATID' . $cartitems[$key]['id'];
            $productobj['currency'] = 'USD';
            $productobjfinal = json_decode(json_encode($productobj), FALSE);
            array_push($details_array, $productobjfinal);
        }
        $ch = curl_init();
        $clientId = "AVsidGp8_2lWgU4KI8eXj5d5ixd3ugR4ibsEDWRsHkF3zKj02EqFapq3mQWbkjgpmvl-l7d-7CYPIcq5";
        $secret = "EGGuF89tzBP_nfffPf3rLC40k9QwyxHqBy4wCWnwZC1lEu9gDUefI3Ktjg8VCkPSumjz9mUxeBA7_hem";
//    $clientId = "ATA2wLy0lWaVAtUOy8CewhsR_foLHtbTPAfxYxSTMll3pCy2Zh4qmf1-RjDUJxQ10My9MW6oZJBXsnB0";
//    $secret = "ECeGB8nDV3nf1xNjA-nTYU2XDnFb3yCJ2Wl03my9a2C0bU8CgYcgv9SDiQ_WDv0VxiKK9OdWOtMvi7Aj";
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $result1 = curl_exec($ch);
        $err = curl_error($ch);
        $access_token = "";
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $json = json_decode($result1);

            $access_token = $json->access_token;
        }




        $data = '{
	"intent": "sale",
	"payer": {
		"payment_method": "paypal"
	},
	"transactions": [{
		"amount": {
			"total": "' . $total_price . '",
			"currency": "USD",
			"details": {
				"subtotal": "' . $total_price . '",
				"tax": "0",
				"shipping": "0",
				"handling_fee": "0",
				"shipping_discount": "0",
				"insurance": "0"
			}
		},
		"description": "The payment transaction description.",
		"payment_options": {
			"allowed_payment_method": "INSTANT_FUNDING_SOURCE"
		},
		"item_list": {
			"items":' . json_encode($details_array) . '
		}
	}],
	"note_to_payer": "Contact us for any questions on your order.",
	"redirect_urls": {
		"return_url": "http://amplifihub.local/carts/paymentconfirm",
		"cancel_url": "http://amplifihub.local/carts/view"
	}
}';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payment");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer " . $json->access_token . "",
            "Content-length: " . strlen($data))
        );
        $result = curl_exec($ch);
        //$user = $this->request->session()->read('Auth.User');
        //$username = $user['firstname'].' '.$user['lastname'];


        if (empty($result))
            die("Error: No response.");
        else {
            $json = json_decode($result);
            // print_r($json->links);
            /* for ($x = 0; 0 < $json.lengh; $x++) {
              echo "The number is: $x <br>";
              } */

            die($json);
        }
    }

    public function sendMailToArtist($buyername = null, $producername = null, $buyeremail = null) {
        $email = new Email();
        $email->template('default')
                ->setViewVars(['username' => $buyername, 'producername' => $producername])
                ->attachments(['PremiumLicense.pdf' => 'files/cart/Premiumlicense.pdf'])
                ->emailFormat('html')
                ->to('vishal29051995@gmail.com')
                ->from('noreply@amplifihub.com', 'Amplifihub')
                ->subject('You just purchased a beat! Congratulations!');


        $sent = $email->send();

        if ($sent):
            return true;
        else:
            return false;
        endif;
    }

    public function sendMailTobuyer($buyername = null, $producername = null, $selleremail = null) {
        /*  $email = new Email();
          $email->template('beatseller')
          ->setViewVars(['username' => $buyername,'producername'=>$producername])
          ->emailFormat('html')
          //->to($selleremail)
          ->to('admin@amplifihub.com')
          ->from('noreply@amplifihub.com', 'Amplifihub')
          ->subject('You just purchased a beat! Congratulations!');
          $sent = $email->send(); */

        //debug($sent);
        //if ($sent):
        return true;
        //else:
        //return false;
        //endif;
    }

    public function paymentconfirm($reference = null) {
        if (!empty($this->request->query['item_number']) && empty($reference)) {
            $this->loadModel('Stores');
            $cart = $this->Carts->getCount();
            $display = 'hide';
            $req = $this->request->getQuery('item_number');
            $readcart = $this->Carts->readProduct();
            unset($readcart);
            $del = $this->request->getsession()->delete('cart');

            $user = $this->request->session()->read('Auth.User');
            $userid = $this->Auth->user('id');
            
            $paid = $this->Carts->paidPaypal($req, $userid);
            if($paid){
                
                $beatsellers = $this->Carts->find()->select(['Carts.amount'])
                        ->select(['Stores.user_id'])
                        ->select(['SampleStore.user_id'])
                        ->select(['PacksStore.user_id'])
                        ->where(['Carts.trans_ref' => $req, 'Carts.buyer_id' => $userid])
                        ->contain(['Stores', 'SampleStore', 'PacksStore'])
                        ->hydrate(false)
                        ->toArray();

                foreach ($beatsellers as $beatseller) {
                    
                    switch ($beatseller['beat_type']) {
                        case 'sample':
                        case 'playlist':
                            $bseller = $beatseller['sample_store']['user_id'];
                            break;
                        case 'pack':
                            $bseller = $beatseller['packs_store']['user_id'];
                            break;
                        
                        default:
                            $bseller = $beatseller['store']['user_id'];
                            break;
                    }
                    
                    //save to money made
                    $this->loadModel('Bankbalances');

                    //check if user already has record on the database
                    //else save or update
                    $check = $this->Bankbalances->find()->where(['user_id' => $bseller]);
                    $amount = $beatseller['amount'];
                    if ($check->isEmpty()):
                        $baldata['user_id'] = $bseller;
                        $baldata['balance'] = $amount;
                        $bank = $this->Bankbalances->newEntity();
                        $balsave = $this->Bankbalances->patchEntity($bank, $baldata);
                        $this->Bankbalances->save($balsave);
                    else:
                        $bankbal = $check->first();
                        $baldata = [];
                        $baldata['user_id'] = $bseller;
                        $baldata['balance'] = $amount + $bankbal->balance;
                        $balsave = $this->Bankbalances->patchEntity($bankbal, $baldata);
                        $this->Bankbalances->save($balsave);
                    endif;
                }

                 $this->Flash->success(__('Your beat store transaction has been confirmed.'));
            }
            
            // $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $this->request->query['item_number'], 'buyer_id' => $userid],
            $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $req, 'status' => 'paid', 'buyer_id' => $userid],
                'contain' => ['Stores','SampleStore','PacksStore']]);

            $download = $this->paginate($query);

            $this->set(compact('download', 'display', 'cart'));
            $this->set('_serialize', ['download']);

            $downloads = $download->first();
            $reference=$downloads->trans_ref;
            $buyerid=$downloads->buyer_id;
            
            // $beatid=$downloads->beat_id;

            // $query1 = $this->Stores->find('all', ['conditions' => ['id' => $beatid],
            //     ]);
            // $store = $query1->first();
            //  $beatname=$store->name;
            //  $sellerid=$store->user_id;




//            $user = $this->request->session()->read('Auth.User');
//            $firstnameBuyer = $user['firstname'];
//            $lastnameBuyer = $user['firstname'];
//            $niknameBuyer = $user['aka'];
//            $addressBuyer = $user['address'] . ' ' . $user['state'] . ' ' . $user['country'] . ',' . $user['zip'];
//
//            $total_price = 0;
//            $this->loadModel('Stores');
//            $this->loadModel('Users');
//            $details_array = [];
//            $users_details = [];
//
//            foreach ($cartitems as $key => $value) {
//
//                $finddetails = $this->Stores->find()->where(['id' => $cartitems[$key]['id']])->first();
//                $user_details = $this->Users->find()->where(['id' => $finddetails['user_id']])->first();
//                $selleremail = $user_details['email'];
//                $sellername = $user_details['fullname'];
//                if (!in_array($finddetails['name'], $users_details)) {
//                    $buyername = $user['firstname'] . ' ' . $user['lastname'];
//                    $buyeremail = $user['email'];
//
//                    $myemail = $this->sendMailToArtist($buyername, $sellername, $buyeremail);
//
//                    $myemailas = $this->sendMailTobuyer($buyername, $sellername, $selleremail);
//
//                    if (!$this->sendMailToArtist($buyername, $sellername, $buyeremail)) {
//
//                    }
//                    if (!$this->sendMailTobuyer($buyername, $sellername, $selleremail)) {
//
//                    }
//                    $emailtoken = $this->Users->tokenize($buyeremail);
//                    $email = new Email('default');
//                    $email->to('vishal29051995@gmail.com')
////                            ->to($buyeremail)
//                            ->template('mytemplates')
//                            ->viewVars(['token' => $emailtoken['token']])
//                            ->emailFormat('html')
//                            ->attachments(['PremiumLicense.pdf' => 'files/cart/Premiumlicense.pdf'])
//                            ->sender('noreply@amplifihub.com', 'Amplifihub')
//                            ->from('noreply@amplifihub.com', 'Amplifihub')
//                            ->subject('Amplifihub Email Registration Confirmation')
//                            ->send();
//                }
//            }
        } else {
            $cart = $this->Carts->getCount();
            $display = 'hide';
            $respdata = $this->Paystack->verifytransaction($reference);
            $this->log($respdata);
            $readcart = $this->Carts->readProduct();
            unset($readcart);
            $del = $this->request->getsession()->delete('cart');

            //check if status is true, else redirect with error message
            if (!$respdata['status']) {
                $errmsg = $respdata['message'];
                $this->Flash->error(__('Beat store transaction confirmation error' . $respdata['message'] . '. Contact Support '));
                //return $this->redirect(['controller' => 'plans','action' => 'subscribe']);
            }

            //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client

            if ($respdata['data']['status'] == 'success') {
                $userid = $this->Auth->user('id');
                $this->loadModel('Stores');

                // $beatseller = $this->Carts->find()->select()->where(['Carts.trans_ref' => $reference])->where(['Carts.buyer_id' => $userid])->contain(['Stores','SampleStore','PacksStore'])->first();
                
                // $bseller; //= $beatseller->store->user_id;
                // switch ($beatseller->beat_type) {
                //     case 'sample':
                //     case 'playlist':
                //         $bseller = $beatseller->sample_store->user_id;
                //         break;
                //     case 'pack':
                //         $bseller = $beatseller->packs_store->user_id;
                //         break;
                    
                //     default:
                //         $bseller = $beatseller->store->user_id;
                //         break;
                // }

                $amount = $respdata['data']['amount'] / 100;
                $paid = $this->Carts->paid($reference, $userid);
                //print_r($paid);
                //exit;
                if ($paid) {

                    $this->Flash->success(__('Your beat store transaction has been confirmed.'));

                    $beatsellers = $this->Carts->find()->select(['Carts.amount'])
                            ->select(['Stores.user_id'])
                            ->select(['SampleStore.user_id'])
                            ->select(['PacksStore.user_id'])
                            ->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $userid])
                            ->contain([
                                    'Stores.Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']], 
                                    'SampleStore.Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']], 
                                    'PacksStore.Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']], 
                                    'Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']]
                                ])
                            ->hydrate(false)
                            ->toArray();
                            

                    foreach ($beatsellers as $beatseller) {
                        
                        switch ($beatseller['beat_type']) {
                            case 'sample':
                            case 'playlist':
                                $bseller = $beatseller['sample_store']['user_id'];
                                $sellerName = !empty($beatseller['sample_store']['user']['firstname']) ? $beatseller['sample_store']['user']['firstname'] . ' ' . $beatseller['sample_store']['user']['lastname'] : $beatseller['sample_store']['user']['fullname'];
                                
                                $sellerEmail = !empty($beatseller['sample_store']['user']['email']) ? $beatseller['sample_store']['user']['email'] : '';
                                break;
                            case 'pack':
                                $bseller = $beatseller['packs_store']['user_id'];
                                $sellerName = !empty($beatseller['packs_store']['user']['firstname']) ? $beatseller['packs_store']['user']['firstname'] . ' ' . $beatseller['packs_store']['user']['lastname'] : $beatseller['packs_store']['user']['fullname'];
                                
                                $sellerEmail = !empty($beatseller['packs_store']['user']['email']) ? $beatseller['packs_store']['user']['email'] : '';
                                break;
                            
                            default:
                                $bseller = $beatseller['store']['user_id'];
                                $sellerName = !empty($beatseller['store']['user']['firstname']) ? $beatseller['store']['user']['firstname'] . ' ' . $beatseller['store']['user']['lastname'] : $beatseller['store']['user']['fullname'];
                                
                                $sellerEmail = !empty($beatseller['store']['user']['email']) ? $beatseller['store']['user']['email'] : '';
                                break;
                        }
                        
                        //save to money made
                        $this->loadModel('Bankbalances');
    
                        //check if user already has record on the database
                        //else save or update
                        $check = $this->Bankbalances->find()->where(['user_id' => $bseller])->first();
                        $amount = $beatseller['amount'];
                        if (empty($check) || $check === null) {
                            $baldata['user_id'] = $bseller;
                            $baldata['balance'] = $amount;
                            $bank = $this->Bankbalances->newEntity();
                            $balsave = $this->Bankbalances->patchEntity($bank, $baldata);
                            $this->Bankbalances->save($balsave);
                        } else {
                            $bankbal = $check;
                            $baldata = [];
                            $baldata['user_id'] = $bseller;
                            $baldata['balance'] = $amount + $bankbal->balance;
                            $balsave = $this->Bankbalances->patchEntity($bankbal, $baldata);
                            $this->Bankbalances->save($balsave);
                        }

                        $buyerName = !empty($beatseller['Users']['firstname']) ? $beatseller['user']['firstname'] . ' ' . $beatseller['user']['lastname'] : $beatseller['user']['fullname'];
                        $buyerEmail = !empty($beatseller['user']['email']) ? $beatseller['user']['email'] : '';
                        if (!empty($buyerEmail)) {
                            $this->Common->sendBeatsBuyersEmail($buyerEmail, $buyerName, $sellerName);
                        }
                        if (!empty($sellerEmail)) {
                            $this->Common->sendBeatsSellersEmail($sellerEmail, $buyerName, $sellerName);
                        }
                    }
                }


                $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $reference, 'status' => 'paid', 'buyer_id' => $userid],
                    'contain' => ['Stores','SampleStore','PacksStore']]);

                $download = $this->paginate($query);
                //debug($download);
                $this->set(compact('download', 'display', 'cart'));
                $this->set('_serialize', ['download']);
                //give user value/save into subscription
                //$result = $this->_add($respdata);
            }
        }
    }

    public function paymentconfirmsample($reference = null) {
        if (!empty($this->request->query['item_number']) && empty($reference)) {
            $this->loadModel('Stores');
            $this->loadModel('SampleStore');
            $cart = $this->Carts->getCount();
            $display = 'hide';
            $req = $this->request->getQuery('item_number');
            $readcart = $this->Carts->readProduct();
            unset($readcart);
            $del = $this->request->getsession()->delete('cart');

            $user = $this->request->session()->read('Auth.User');
            $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $this->request->query['item_number'], 'buyer_id' => $user['id']],
                'contain' => ['Stores']]);

            $download = $this->paginate($query);

            $this->set(compact('download', 'display', 'cart'));
            $this->set('_serialize', ['download']);

            $downloads = $download->first();
            $reference=$downloads->trans_ref;
            $beatid=$downloads->beat_id;
            $buyerid=$downloads->buyer_id;

            $query1 = $this->Stores->find('all', ['conditions' => ['id' => $beatid],
                ]);
            $store = $query1->first();
             $beatname=$store->name;
             $sellerid=$store->user_id;

            $paid = $this->Carts->paidPaypal($reference, $beatname, $sellerid, $buyerid);
            if($paid){
                 $this->Flash->success(__('Your beat store transaction has been confirmed.'));
            }



//            $user = $this->request->session()->read('Auth.User');
//            $firstnameBuyer = $user['firstname'];
//            $lastnameBuyer = $user['firstname'];
//            $niknameBuyer = $user['aka'];
//            $addressBuyer = $user['address'] . ' ' . $user['state'] . ' ' . $user['country'] . ',' . $user['zip'];
//
//            $total_price = 0;
//            $this->loadModel('Stores');
//            $this->loadModel('Users');
//            $details_array = [];
//            $users_details = [];
//
//            foreach ($cartitems as $key => $value) {
//
//                $finddetails = $this->Stores->find()->where(['id' => $cartitems[$key]['id']])->first();
//                $user_details = $this->Users->find()->where(['id' => $finddetails['user_id']])->first();
//                $selleremail = $user_details['email'];
//                $sellername = $user_details['fullname'];
//                if (!in_array($finddetails['name'], $users_details)) {
//                    $buyername = $user['firstname'] . ' ' . $user['lastname'];
//                    $buyeremail = $user['email'];
//
//                    $myemail = $this->sendMailToArtist($buyername, $sellername, $buyeremail);
//
//                    $myemailas = $this->sendMailTobuyer($buyername, $sellername, $selleremail);
//
//                    if (!$this->sendMailToArtist($buyername, $sellername, $buyeremail)) {
//
//                    }
//                    if (!$this->sendMailTobuyer($buyername, $sellername, $selleremail)) {
//
//                    }
//                    $emailtoken = $this->Users->tokenize($buyeremail);
//                    $email = new Email('default');
//                    $email->to('vishal29051995@gmail.com')
////                            ->to($buyeremail)
//                            ->template('mytemplates')
//                            ->viewVars(['token' => $emailtoken['token']])
//                            ->emailFormat('html')
//                            ->attachments(['PremiumLicense.pdf' => 'files/cart/Premiumlicense.pdf'])
//                            ->sender('noreply@amplifihub.com', 'Amplifihub')
//                            ->from('noreply@amplifihub.com', 'Amplifihub')
//                            ->subject('Amplifihub Email Registration Confirmation')
//                            ->send();
//                }
//            }
        } else {
            $cart = $this->Carts->getCount();
            $display = 'hide';
            $respdata = $this->Paystack->verifytransaction($reference);
            $readcart = $this->Carts->readProduct();

            unset($readcart);
            $del = $this->request->getsession()->delete('cart');

            //check if status is true, else redirect with error message
            if (!$respdata['status']) {
                $errmsg = $respdata['message'];
                $this->Flash->error(__('Sample store transaction confirmation error' . $respdata['message'] . '. Contact Support '));
                //return $this->redirect(['controller' => 'plans','action' => 'subscribe']);
            }

            //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client

            if ($respdata['data']['status'] == 'success') {
                $userid = $this->Auth->user('id');
                $this->loadModel('Stores');
                $this->loadModel('SampleStore');

                $beatsellers = $this->Carts->find()->select()->where(['Carts.buyer_id' => $userid])->contain(['SampleStore'])->first();
                print_r($beatsellers);
                exit;
                $beseller = $beatsellers->store->user_id;
                $naseller = $beatsellers->store->name;

                $beatseller = $this->Carts->find()->select()->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $userid])->contain(['Stores'])->first();
                $bseller = $beatseller->store->user_id;

                $amount = $respdata['data']['amount'] / 100;
                $paid = $this->Carts->paid($reference, $userid, $amount, $bseller, $naseller);
                print_r($beatsellers);
                exit;
                //debug($paid);
                if ($paid) {

                    //$beatseller = $this->Carts->find()->select()->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $userid])->contain(['Stores'])->first();
                    //$bseller = $beatseller->store->user_id;

                    $this->Flash->success(__('Your beat store transaction has been confirmed.'));
                    //save to money made
                    $this->loadModel('Bankbalances');

                    //check if user already has record on the database
                    //else save or update
                    $check = $this->Bankbalances->find()->where(['user_id' => $bseller]);

                    if ($check->isEmpty()):
                        $baldata['user_id'] = $bseller;
                        $baldata['balance'] = $amount;
                        $bank = $this->Bankbalances->newEntity();
                        $balsave = $this->Bankbalances->patchEntity($bank, $baldata);
                        $this->Bankbalances->save($balsave);
                    else:
                        $bankbal = $check->first();
                        $baldata = [];
                        $baldata['user_id'] = $bseller;
                        $baldata['balance'] = $amount + $bankbal->balance;
                        $balsave = $this->Bankbalances->patchEntity($bankbal, $baldata);
                        $this->Bankbalances->save($balsave);
                    endif;

                    $beatsellers = $this->Carts->find()
                            ->select(['Stores.user_id'])
                            ->where(['Carts.trans_ref' => $reference, 'Carts.buyer_id' => $userid])
                            ->contain(['Stores.Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']], 'Users' => ['fields' => ['id', 'email', 'firstname', 'lastname', 'fullname']]])
                            ->hydrate(false)
                            ->toArray();

                    foreach ($beatsellers as $beatseller) {
                        $buyerName = !empty($beatseller['Users']['firstname']) ? $beatseller['Users']['firstname'] . ' ' . $beatseller['Users']['lastname'] : $beatseller['Users']['fullname'];
                        $sellerName = !empty($beatseller['Stores']['user']['firstname']) ? $beatseller['Stores']['user']['firstname'] . ' ' . $beatseller['Stores']['user']['lastname'] : $beatseller['Stores']['user']['fullname'];
                        $buyerEmail = !empty($beatseller['Users']['email']) ? $beatseller['Users']['email'] : '';
                        $sellerEmail = !empty($beatseller['Stores']['user']['email']) ? $beatseller['Stores']['user']['email'] : '';

                        if (!empty($buyerEmail)) {
                            $this->Common->sendBeatsBuyersEmail($buyerEmail, $buyerName, $sellerName);
                        }
                        if (!empty($sellerEmail)) {
                            $this->Common->sendBeatsSellersEmail($sellerEmail, $buyerName, $sellerName);
                        }
                    }
                }


                $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $reference, 'status' => 'paid', 'buyer_id' => $userid],
                    'contain' => ['Stores']]);

                $download = $this->paginate($query);
                //debug($download);
                $this->set(compact('download', 'display', 'cart'));
                $this->set('_serialize', ['download']);
                //give user value/save into subscription
                //$result = $this->_add($respdata);
            }
        }
    }



    public function downloads() {

        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Payments');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $cart = $this->Carts->getCount();
        $userid = $this->Auth->user('id');

        $loggedinUser = $this->Auth->user();
        if ($loggedinUser['role'] == 'admin') {
            $query = $this->Carts->find()->contain(['Stores.Users', 'Users','SampleStore.Users','PacksStore.Users'])->where(['status' => 'paid'])->order(['Carts.id' => 'DESC']);
        } else {
            $query = $this->Carts->find()->contain(['Stores.Users', 'Users','SampleStore.Users','PacksStore.Users'])->where(['status' => 'paid', 'buyer_id' => $loggedinUser['id']])->order(['Carts.id' => 'DESC']);
        }
        $download = $this->paginate($query);

        $samples=$conn->execute("SELECT *,sample_store.sample_name as sampleName, users.aka as producer, sample_store.sample_beat as sampleBeat, carts.modified as modifiedd FROM carts LEFT JOIN sample_store ON sample_store.id=carts.sample_id LEFT JOIN users ON users.id=sample_store.user_id WHERE carts.status='paid' AND carts.buyer_id = '".$userid."' AND carts.beat_type='playlist' ORDER BY carts.id DESC ")->fetchAll('assoc');
        $packs=$conn->execute("SELECT *, users.aka as producer, carts.modified as modifiedd FROM carts LEFT JOIN packs_store ON packs_store.id=carts.pack_id LEFT JOIN users ON users.id=packs_store.user_id WHERE carts.status='paid' AND carts.buyer_id = '".$userid."' AND carts.beat_type='pack' ORDER BY carts.id DESC ")->fetchAll('assoc');
        //print_r($samples);exit;
         $query1 = $this->Payments->find('all', array(
        'conditions' => array('Payments.user_id' => $userid)
    ));
        $title="My Purchases";
        $downloadpdf = $this->paginate($query1);
        //debug($download);
        $this->set(compact('download', 'cart', 'downloadpdf', 'title', 'samples', 'packs'));
        $this->set('_serialize', ['download']);
    }

     public function downloadpdf() {
        $this->loadModel('Carts');
         $userid = $this->Auth->user('id');
        //exit;

        $loggedinUser = $this->Auth->user();
        if ($loggedinUser['role'] == 'admin') {

            $query = $this->Carts->find('all', array(
        'conditions' => array('Carts.status' => 'Paid'),
        'order'=>array('Carts.id' => 'DESC'),
    ));

         $downloadpdf = $this->paginate($query);
        }else{


    $query = $this->Carts->find('all', array(
        'conditions' => array('Carts.buyer_id' => $userid, 'Carts.status' => 'Paid'),
        'order'=>array('Carts.id' => 'DESC'),
    ));

    $downloadpdf = $this->paginate($query);
        }

        $title="My Purchases Paperwork";
        //debug($download);
        $this->set(compact('downloadpdf', 'cart', 'title'));
        $this->set('_serialize', ['downloadpdf']);



    }

     public function sales(){

        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $userid = $this->Auth->user('id');
        //exit;

        $loggedinUser = $this->Auth->user();
        if ($loggedinUser['role'] == 'admin') {

            $join = $this->Carts->find('all', array(
        'conditions' => array('Carts.status' => 'Paid'),
        'order'=>array('Carts.id' => 'DESC'),
    ));

         $downloadpdf = $this->paginate($join);
        }else{


    $sales= $this->Carts->find('all', array(
        'conditions' => array('Carts.status' => 'Paid', 'Carts.seller_id' => $userid),
        'order'=>array('Carts.id' => 'DESC'),
    ));








     $downloadpdf = $this->paginate($sales);

        }


        $title="Your Beat Sales";
        //debug($download);
        $this->set(compact('store', 'cart', 'table', 'downloadpdf', 'sales', 'title'));
        $this->set('_serialize', ['sales']);



    }




    public function view() {
        $this->loadModel('Carts');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $conn = ConnectionManager::get('default');
        $cart = $this->Carts->getCount();
        $session = new Session();
        // $session->destroy('cart');exit;
//its was store2 before
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $this->loadModel('Stores');
        $display = 'hide';
        $shop = 'hide';
        $item = 0;
        // $carts = $this->Stores->readProduct();
        $carts = $this->Carts->readProduct();
        if (null != $carts) {
            $shop = 'show';
            $item = count($carts);
        }

        
        // print_r($carts);exit;
        // print_r($session->read('cart'));exit;
        /*
        //debug($carts[0]['license']);
        if($carts[0]['license'] == 'playlist'){
            echo "<script>window.location.href ='https://amplifihub.com/carts/viewsample'; </script>";
        }elseif($carts[0]['license'] == 'pack'){
            echo "<script>window.location.href ='https://amplifihub.com/carts/viewsample'; </script>";
        }elseif($carts[0]['license'] == 'sample'){
            echo "<script>window.location.href ='https://amplifihub.com/carts/viewsample'; </script>";
        }
        */
        $buyer_id = $this->Auth->user('id');
        // print_r($buyer_id);exit;
        $firstCart = $this->Carts->find()->where(['status' => 'unpaid', 'buyer_id' => $buyer_id])->order(['id' => 'DESC'])->first();
        $ref = '';
        if($firstCart !== null && !empty($firstCart)) {$ref = $firstCart->trans_ref;}
                
        // print_r($allCarts);exit;
        $products = [];
        if (null != $carts) {

            foreach ($carts as $productId => $count) {
                if ($ref === '' || empty($ref)) {$ref = $count['trans_ref'];}
                
                if($count['license'] == "lease" || $count['license'] == "exclusive" || $count['license']){
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
                // print_r($products);exit;

                //Save cart item to db
                $this->Carts->updateOrCreate(['status' => 'unpaid', 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['name'], 'beat_type' => $count['license']], ['trans_ref' => $ref]);
                
                
                /*if(!empty($allCarts)){
                    foreach($allCarts as $ac){
                        if($ac['beat_id'] == $count['id'] && $ac['beat_type'] == $count['license'] && $ac['buyer_id'] == $buyer_id && $ac['amount'] == $count['price'] && $ac['trans_ref'] == $count['trans_ref']){
                        // echo "ok";
                        echo $delc = $conn->execute("DELETE FROM carts where beat_id = $id AND beat_type = '$license' AND buyer_id = $buyer_id AND status = 'unpaid'");
                    
                        }
                    }
                }*/
                // exit;


                }elseif($count['license'] == "sample"){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $ref]);
                
            }elseif($count['license'] == "pack"){
                $product = $this->PacksStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $this->Carts->updateOrCreate(['status' => 'unpaid', 'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $ref]);
                
            }elseif($count['license'] == "playlist"){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $ref]);
                
            }
            
            
            }
        }
        $title="AmplifiHub - Checkout Page";
        $this->set(compact('products', 'display', 'shop', 'item', 'cart','title'));
    }

    public function viewsample() {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

//its was store2 before
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $display = 'hide';
        $shop = 'hide';
        $item = 0;
        $carts = $this->SampleStore->readProduct();
        $cartp = $this->PacksStore->readProduct();

        if (null != $carts) {
            $shop = 'show';
            $item = count($carts);
        }

        if (null != $cartp) {
            $shop = 'show';
            $item = count($cartp);
        }

        $carts = $this->Carts->readProduct();
       //print_r($carts);exit;
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                if($count['license'] == 'sample'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $savecart = $this->Carts->findOrCreate(['trans_ref' => $count['trans_ref'], 'beat_id' => "",'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                $savecart['buyer_id'] = $this->Auth->user('id');
                $savecart['beat_id'] = "";
                $savecart['sample_id'] = $count['id'];
                $savecart['pack_id'] = "";
                $savecart['seller_id'] = $product['user_id'];
                $savecart['beat_name'] = $product['sample_name'];
                $savecart['amount'] = $count['price'];
                $savecart['beat_type'] = $count['license'];
                $savecart['trans_ref'] = $count['trans_ref'];
                //print_r($savecart);exit;
                $this->Carts->save($savecart);

            }elseif($count['license'] == 'pack'){
                $product = $this->PacksStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $savecart = $this->Carts->findOrCreate(['trans_ref' => $count['trans_ref'], 'beat_id' => "",'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                $savecart['buyer_id'] = $this->Auth->user('id');
                $savecart['beat_id'] = "";
                $savecart['sample_id'] = "";
                $savecart['pack_id'] = $count['id'];
                $savecart['seller_id'] = $product['user_id'];
                $savecart['beat_name'] = $product['sample_name'];
                $savecart['amount'] = $count['price'];
                $savecart['beat_type'] = $count['license'];
                $savecart['trans_ref'] = $count['trans_ref'];
                //print_r($savecart);exit;
                $this->Carts->save($savecart);
            }elseif($count['license'] == 'playlist'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $savecart = $this->Carts->findOrCreate(['trans_ref' => $count['trans_ref'], 'beat_id' => "",'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                $savecart['buyer_id'] = $this->Auth->user('id');
                $savecart['beat_id'] = "";
                $savecart['sample_id'] = $count['id'];
                $savecart['pack_id'] = "";
                $savecart['seller_id'] = $product['user_id'];
                $savecart['beat_name'] = $product['sample_name'];
                $savecart['amount'] = $count['price'];
                $savecart['beat_type'] = $count['license'];
                $savecart['trans_ref'] = $count['trans_ref'];
                //print_r($savecart);exit;
                $this->Carts->save($savecart);
            }
            }
        }
        /*
        $carts = $this->Carts->readProduct();
       //print_r($carts);exit;
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->PacksStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

                 //print_r($product);exit;
                //Save cart item to db
                $savecart = $this->Carts->findOrCreate(['trans_ref' => $count['trans_ref'], 'beat_id' => "",'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                $savecart['buyer_id'] = $this->Auth->user('id');
                $savecart['beat_id'] = "";
                $savecart['sample_id'] = "";
                $savecart['pack_id'] = $count['id'];
                $savecart['seller_id'] = $product['user_id'];
                $savecart['beat_name'] = $product['sample_name'];
                $savecart['amount'] = $count['price'];
                $savecart['beat_type'] = $count['license'];
                $savecart['trans_ref'] = $count['trans_ref'];
                //print_r($savecart);exit;
                $this->Carts->save($savecart);
            }
        }
        */
        $this->set(compact('products', 'display', 'shop', 'item', 'cart'));
    }
    /*
        public function viewpack() {
            $this->loadModel('Carts');
            $cart = $this->Carts->getCount();
    //its was store2 before
            $this->viewBuilder()->theme('Panel')->layout('newdesign');
            $this->loadModel('PacksStore');
            $display = 'hide';
            $shop = 'hide';
            $item = 0;
            $carts = $this->PacksStore->readProduct();
            if (null != $carts) {
                $shop = 'show';
                $item = count($carts);
            }

            $carts = $this->Carts->readProduct();

            //debug($carts);
            $products = [];
            if (null != $carts) {
                foreach ($carts as $productId => $count) {
                    $product = $this->PacksStore->get($count['id']);
                    $product['count'] = $count;
                    $product['price'] = $count['price'];
                    $product['license'] = $count['license'];
                    $products[] = $product;

                     //print_r($product);exit;
                    //Save cart item to db
                    $savecart = $this->Carts->findOrCreate(['trans_ref' => $count['trans_ref'], 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                    $savecart['buyer_id'] = $this->Auth->user('id');
                    $savecart['beat_id'] = $count['id'];
                    $savecart['seller_id'] = $product['user_id'];
                    $savecart['beat_name'] = $product['sample_name'];
                    $savecart['amount'] = $count['price'];
                    $savecart['beat_type'] = $count['license'];
                    $savecart['trans_ref'] = $count['trans_ref'];
                    $this->Carts->save($savecart);
                }
            }
            $this->set(compact('products', 'display', 'shop', 'item', 'cart'));
        }
*/
    public function update($id = null, $license = null) {

        //$this->autoRender = false;
        $conn = ConnectionManager::get('default');
        if ($this->request->is('post')) {
            //$cart = ;


            $del = $this->Carts->remove($id, $license);

            if (!isset($del[0]['id'])) {
                $this->Flash->error(__('No record found. Maybe you have already removed this item'));
                return $this->redirect(['action' => 'view']);
                /* $readcart = $this->Carts->readProduct();
                  debug($readcarts); */
            }
            // print_r($del);exit;
            // if ($this->Carts->delete($this->Carts->get($del[0]['id']))) {

                //read Session
                $search = [];
                $search['id'] = $id;
                $search['license'] = $license;
                $readcart = $this->Carts->readProduct();
                $key = false;
                foreach ($readcart as $k => $v) {
                    if ($v['id'] == $search['id'] && $v['license'] == $search['license']) {
                        $key = $k;
                        // key found - break the loop
                        break;
                    }
                }
                
                $buyer_id = $this->Auth->user('id');
                unset($readcart[$key]);
                // print_r($readcart);exit;
                $this->Carts->saveProduct($readcart);
                switch ($license) {
                    case 'sample':
                    case 'playlist':
                        $delc = $conn->execute("DELETE FROM carts where sample_id = $id AND beat_type = '$license' AND buyer_id = $buyer_id AND status = 'unpaid'");
                        break;
                    case 'pack':
                        $delc = $conn->execute("DELETE FROM carts where pack_id = $id AND beat_type = '$license' AND buyer_id = $buyer_id AND status = 'unpaid'");
                        break;
                    
                    default:
                        $delc = $conn->execute("DELETE FROM carts where beat_id = $id AND beat_type = '$license' AND buyer_id = $buyer_id AND status = 'unpaid'");
                        break;
                }
                // print_r($delc);exit;
                $this->Flash->success(__('Item removed'));
                return $this->redirect(['action' => 'view']);
            // }
        }
        return $this->redirect(['action' => 'view']);
    }

    public function updatesample($id = null, $license = null) {

        //$this->autoRender = false;
        if ($this->request->is('post')) {
            //$cart = ;


            $del = $this->Carts->remove($id, $license);

            if (!isset($del[0]['id'])) {
                $this->Flash->error(__('No record found. Maybe you have already removed this item'));
                return $this->redirect(['action' => 'viewsample']);
                /* $readcart = $this->Carts->readProduct();
                  debug($readcarts); */
            }

            if ($this->Carts->delete($this->Carts->get($del[0]['id']))) {

                //read Session
                $search = [];
                $search['id'] = $id;
                $search['license'] = $license;
                $readcart = $this->Carts->readProduct();
                $key = false;
                foreach ($readcart as $k => $v) {
                    if ($v['id'] == $search['id'] && $v['license'] == $search['license']) {
                        $key = $k;
                        // key found - break the loop
                        break;
                    }
                }

                unset($readcart[$key]);
                $this->Carts->saveProduct($readcart);
                $this->Flash->success(__('Item removed'));
                return $this->redirect(['action' => 'viewsample']);
            }
        }
        return $this->redirect(['action' => 'viewsample']);
    }

    /**
     * sendfile method
     *
     * @return \Cake\Http\Response|void
     */
    public function sendFile($beattype, $beat) {
        $filePath = "https://s3.us-east-2.amazonaws.com/amplifihub". DS . 'Stores' . DS . $beattype . DS . $beat;
        $this->response->file(
                $filePath, ['download' => true, 'name' => $beat]
        );
        if (!file_exists($filePath)) {
            $this->Flash->error(__('Beat File not available. Contact Support'));
            return $this->redirect(['action' => 'paymentconfirm']);
            ;
        }
        // Return the response to prevent controller from trying to render
        // a view.
        return $this->response;
    }

}
