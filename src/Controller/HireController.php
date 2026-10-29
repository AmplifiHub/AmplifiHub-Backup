<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Mmrequesters Controller
 *
 * @property \App\Model\Table\MmrequestersTable $Mmrequesters
 *
 * @method \App\Model\Entity\Mmrequester[] paginate($object = null, array $settings = [])
 */
class HireController extends AppController
{
  use MailerAwareTrait;

  /**
   * Book method
   *
   * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
   */
   
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paystack');
    }
    
  public function book()
  {
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $this->loadModel('Users');
        $this->loadModel('Hire');
        $cart = $this->Carts->getCount();
        $conn = ConnectionManager::get('default');
        
        $this->autoRender = false;
    //   $id = $this->request->getparam('id');
        $beat_id = $this->request->query('id') ? $this->request->query('id') : "";
        $fid = $this->request->query('fid') ? $this->request->query('fid') : "";
        $redirect = $this->request->query('redirect') ? $this->request->query('redirect') : "";
        $requester_id = $this->Auth->user('id') ? $this->Auth->user('id') : "";
        
        if($redirect == "view"){
            
        $freebeat = $conn->execute("SELECT * FROM freebeatsdownloads WHERE id = $fid ")->fetchAll('assoc');
        $upid = $freebeat[0]['uploader_id'] ? $freebeat[0]['uploader_id'] : 0;
        $did = $freebeat[0]['downloader_id'] ? $freebeat[0]['downloader_id'] : 0;
        
        $store = $this->Stores->find('all', array(
            'conditions' => array('Stores.id' => $beat_id)
        ));
        
        $sUser = $store->first() ? $store->first(): "";
        
        $rName = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $did)
        ));
        $rName = $rName->first() ? $rName->first(): "";
        $rName = $rName->firstname." ".$rName->lastname;
        
        $sName = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $upid)
        ));
        $sName = $sName->first() ? $sName->first() : "";
        $sName = $sName->firstname." ".$sName->lastname;
            
        
        // print_r($freebeat);exit;
        $add = $conn->execute("INSERT INTO hire (seller_id, requester_id, beat_id, beat_name, requester_name, seller_name) VALUES($upid, $did, $beat_id, '$sUser->name', '$rName', '$sName')");
        // print_r($add);exit;
        $lastId = $conn->execute("SELECT * FROM hire WHERE seller_id = $upid AND requester_id = $did AND beat_id = $beat_id order by id DESC LIMIT 1")->fetchAll('assoc');
        
        $buyerEmail = $conn->execute("SELECT * FROM users WHERE id = $did LIMIT 1")->fetchAll('assoc');
        $buyerEmail = $buyerEmail[0]['email'] ? $buyerEmail[0]['email'] : "";
        
        if ($add && $buyerEmail) {
              if($redirect == 'view'){
                  
                    $email = new Email('noreply');
                    $email->to($buyerEmail)
                          ->template('Panel.freedownload')
                          ->viewVars(['base_domain'=>$base_domain, 'id' => $lastId[0]['id']])
                          ->emailFormat('html')
                          //->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject('Hey! A Music Producer From AmplifiHub Has Messaged You');
                    $send = $email->send();
        
        
                  $this->Flash->success(__('Cool, You have successfully started a conversation. Type in something below to get started.'));
                  return $this->redirect(array('controller' => 'hire', 'action' => 'view', $lastId[0]['id']));
            //   return $this->redirect("hire/view/$lastId[0]['id']");
                }
            }
        }
        
        
        $hire = $this->Hire->newEntity();
        // print_r($user_id);exit;
    
        $store = $this->Stores->find('all', array(
            'conditions' => array('Stores.id' => $beat_id)
        ));
        $sUser = $store->first();
        
        $rName = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $requester_id)
        ));
        $rName = $rName->first();
        $rName = $rName->firstname." ".$rName->lastname;
        
        $sName = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $sUser->user_id)
        ));
        $sName = $sName->first();
        $sName = $sName->firstname." ".$sName->lastname;
        
        // print_r($sUser->user_id);exit;
        
        // print_r($data);exit;
        // exit;
      
        //create notification
          
         
        //   $this->Hire->save($data);
        $add = $conn->execute("INSERT INTO hire (seller_id, requester_id, beat_id, beat_name, requester_name, seller_name) VALUES($sUser->user_id, $requester_id, $beat_id, '$sUser->name', '$rName', '$sName')");
        $lastId = $conn->execute("SELECT * FROM hire WHERE seller_id = $sUser->user_id AND requester_id = $requester_id AND beat_id = $beat_id order by id DESC LIMIT 1")->fetchAll('assoc');
        $lid = $lastId[0]['id'];
        
        $sId = $sUser->user_id;
        $sellerEmail = $conn->execute("SELECT * FROM users WHERE id = $sId LIMIT 1")->fetchAll('assoc');
        $sellerEmail = $sellerEmail[0]['email'];
        // print_r($sellerEmail);exit;
        if ($add) {
        $base_domain = 'https://amplifihub.com';
        
        $email = new Email('noreply');
        $email->to($sellerEmail)
              ->template('Panel.hire')
              ->viewVars(['base_domain'=>$base_domain, 'id' => $lastId[0]['id']])
              ->emailFormat('html')
              //->sender('noreply@amplifihub.com', 'AmplifiHub')
              ->sender('noreply@amplifihub.com', 'AmplifiHub')
              ->from('noreply@amplifihub.com', 'AmplifiHub')
              ->subject('Great! You Have A New Work For Hire Order On AmplifiHub');
        $send = $email->send();
        
//print_r($mmrequester);exit;
          $this->Flash->success(__('Cool! The work for hire order has been saved and sent to the seller. Type in something below to get started.'));
              return $this->redirect("hire/view/$lid");
          }
          $this->Flash->error(__('The request could not be placed. Please, try again.'));
      
    //   $users = $this->Mmrequesters->Users->find('list', ['limit' => 200]);
      //$requesters = $this->Mmrequesters->Mixmasterings->find('list', ['limit' => 200]);
      $this->set(compact('mmrequest', 'users', 'requesters','cart'));
      $this->set('_serialize', ['mmrequest']);
  }


    /**
     * admin method
     *
     * @return \Cake\Http\Response|void
     */
    public function admin()
    {
        $this->paginate = [
            'contain' => ['Users','Requester']
        ];
        $mmrequesters = $this->paginate($this->Mmrequesters);
        //debug($mmrequesters);
        $this->set(compact('mmrequesters'));
        $this->set('_serialize', ['mmrequesters']);
    }

    /**
     * listgigs method
     * Request logged in user has made
     * @return \Cake\Http\Response|void
     */
    public function listorder()
    {
        $this->loadModel('Hire');
        $this->loadModel('Stores');
        $this->loadModel('Users');
        $user_id = $this->Auth->user('id');
        $user = $this->request->session()->read('Auth.User');
        // print_r($user['role']);exit;
        if($user['role'] == 'admin'){
        $g = $this->Hire->find('all')->select(['Hire.id', 'Hire.seller_id', 'Hire.requester_id', 'Hire.beat_id', 'Hire.seller_name', 'Hire.requester_name', 'Hire.beat_name', 'Hire.created', 'Hire.status']);
        }else{
        $g = $this->Hire->find('all')->select(['Hire.id', 'Hire.seller_id', 'Hire.requester_id', 'Hire.beat_id', 'Hire.seller_name', 'Hire.requester_name', 'Hire.beat_name', 'Hire.created', 'Hire.status'])->where(['Hire.requester_id' => $this->Auth->user('id')]);
            
        }
        $mmrequesters = $this->paginate($g);
        // print_r($mmrequesters);exit;
        // $mmrequesters = $this->paginate($this->Stores);
        $title="Buyer Section - Work For Hire";
        $this->set(compact('mmrequesters', 'title'));
        $this->set('_serialize', ['mmrequesters']);
    }
    
    public function listsales()
    {
        $this->loadModel('Hire');
        $this->loadModel('Stores');
        $this->loadModel('Users');
        $user_id = $this->Auth->user('id');
        $user = $this->request->session()->read('Auth.User');
        // print_r($user['role']);exit;
        if($user['role'] == 'admin'){
        $g = $this->Hire->find('all')->select(['Hire.id', 'Hire.seller_id', 'Hire.requester_id', 'Hire.beat_id', 'Hire.seller_name', 'Hire.requester_name', 'Hire.beat_name', 'Hire.created', 'Hire.status']);
        }else{
        $g = $this->Hire->find('all')->select(['Hire.id', 'Hire.seller_id', 'Hire.requester_id', 'Hire.beat_id', 'Hire.seller_name', 'Hire.requester_name', 'Hire.beat_name', 'Hire.created', 'Hire.status'])->where(['Hire.seller_id' => $this->Auth->user('id')]);
        }
        $mmrequesters = $this->paginate($g);
        // print_r($mmrequesters);exit;
        // $mmrequesters = $this->paginate($this->Stores);
        $title="Seller Section - Work For Hire";
        $this->set(compact('mmrequesters', 'title'));
        $this->set('_serialize', ['mmrequesters']);
    }


    /**
     * index method
     * Request from users
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
      $user_id = $this->Auth->user('id');
        $this->paginate = [
          'conditions' => ['Mmrequesters.user_id'=>$user_id],
            'contain' => ['Users','Requester'],
            'order' => ['Mmrequesters.id'=> 'DESC']
        ];
        // $mmrequesters = $this->paginate($this->Mmrequesters);
        //debug($user_id);
        $title="Manage Mixing And Mastering Sales";
        $this->set(compact('mmrequesters', 'title'));
        $this->set('_serialize', ['mmrequesters']);
    }


    /**
     * View method
     *
     * @param string|null $id Mmrequester id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conn = ConnectionManager::get('default');
      $userid = $this->Auth->user('id');
      $this->loadModel('Messages');
      $this->loadModel('Messageshire');
      $this->loadModel('Mmrequesters');
      $this->loadModel('Hire');
      $this->loadModel('Offer');
      $this->loadModel('Uploadfilehire');
      $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$id]);
      
      $mmrequester = $this->Hire->find('all', array(
            'conditions' => array('Hire.id' => $id)
        ));
      $mmrequester = $mmrequester->first();
    //   print_r($mmrequester);exit;
      //$mmrequester = $this->Mmrequesters->find()->contain(['Users'])->where(['orderid'=>$id])->first();
      $msgid = $this->Mmrequesters->Users->find()->where(['id'=>$mmrequester->requester_id])->first();
        $messages = $this->Messages->find()->order(['Messages.created'=>'DESC'])->group(['Messages.id'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->toArray();
        $uploadfile = $this->Uploadfilehire->find()->order(['Uploadfilehire.timestamp'=>'DESC'])->where(['orderid'=>$id])->toArray();
        //$offers = $this->Mmrequesters->Offer->find()->order(['Offer.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Offer'])->toArray();
        $offers = $conn->execute("SELECT *, hire_offers.id as id, hire_offers.status as oStatus, hire_offers.amount as amount, hire_offers.payment as payment, hire_offers.user_id as user_id, hire_offers.requester_id as requester_id FROM hire_offers LEFT JOIN hire ON hire.id = hire_offers.order_id WHERE hire_offers.order_id = '".$id."' order by hire_offers.id DESC")->fetchAll('assoc');
        $offerLimit = $conn->execute("SELECT count(id) as total FROM custom_offers WHERE custom_offers.order_id = '".$id."'")->fetchAll('assoc');
        $message = $this->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->first();
        $status = $this->Hire->find()->order(['Hire.created'=>'DESC'])->where(['id'=>$id])->first()->toArray();
        //$offers = $this->Offer->find()->order(['Offer.created'=>'DESC'])->where(['order_id'=>$id])->toArray();
        // print_r($messages);exit;
        if($message == ""){
            $message = $message;
        }else{
            $message = $message->toArray();
        }
        $title="Order Chat Page - " .$msgid->aka;
        $this->set(compact('mmrequester','messages', 'message', 'offers', 'offerLimit', 'status', 'userid','msgid', 'id', 'uploadfile', 'title'));
        $this->set('_serialize', ['mmrequester']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mmrequester id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mmrequester = $this->Mmrequesters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mmrequester = $this->Mmrequesters->patchEntity($mmrequester, $this->request->getData());
            if ($this->Mmrequesters->save($mmrequester)) {
                $this->Flash->success(__('The mmrequester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mmrequester could not be saved. Please, try again.'));
        }
        $users = $this->Mmrequesters->Users->find('list', ['limit' => 200]);
        $this->set(compact('mmrequester', 'users'));
        $this->set('_serialize', ['mmrequester']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mmrequester id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mmrequester = $this->Mmrequesters->get($id);
        if ($this->Mmrequesters->delete($mmrequester)) {
            $this->Flash->success(__('The mmrequester has been deleted.'));
        } else {
            $this->Flash->error(__('The mmrequester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function createOffer()
    {
            $this->loadModel('Carts');
            $this->loadModel('Users');
            $this->loadModel('Offerhire');
        $cart = $this->Carts->getCount();
        
        $this->autoRender = false;
        //$this->request->data['status'] = 'unread';       
        $offer = $this->Offerhire->newEntity();
        //print_r($offer);exit;
     // echo json_encode( $this->request->getData());
            $offer = $this->Offerhire->patchEntity($offer, $this->request->getData());
            //print_r($offer);exit;
            //echo json_encode($message);
            if ($this->Offerhire->save($offer)) {
//print_r($offer);exit;
                //$this->Flash->success(__('The message has been saved.'));
        //just to get messager name
        $messager = $this->Offerhire->Users->find()->where(['Users.id'=>$this->request->getData('requester_id')])->first();

        //just to get $recipient name
       // echo $this->request->getData('user_id');
        $recipient = $this->Users->find()->where(['Users.id'=>$this->request->getData('user_id')])->first();

        //print_r($recipient);exit;
    
    
        //if messager is not logged in user, send an email notification
        
          //var_dump();exit();
          $emailnotification['orderid'] = $this->request->getData('order_id');
          $emailnotification['useremail'] =$this->request->getData('clientemail');
          $emailnotification['fullname'] = $recipient['firstname'] . " " . $recipient['lastname'];
          $emailnotification['messager'] = $messager['firstname'] . " " . $messager['lastname'] ;
        //   //echo json_encode($emailnotification);

        //   $this->getMailer('User')->send('notify',[$emailnotification]);
          /*
          $email = new Email('noreply');
                        //$email->to('ameerhamzanawazbutt@gmail.com')
                        $email->to($recipient['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($emailnotification)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Custom Offer Created Notification');
                        $sent = $email->send();
        */

        //get unread messages to display on the chat section
        $chats = $this->Offerhire->find()->where(['order_id'=>$this->request->getData('order_id')])->contain(['Offers'])->toArray();
        //print_r($chats);exit;
        $userid = $this->request->getData('user_id');
        //debug($chats);
        foreach ($chats as $chat) {
          # code...
          $align = '' ;
          //echo date_default_timezone_get();
          //echo 'success';
          echo  '<blockquote class="box box-warning direct-chat direct-chat-warning '.$align.'"><p>'.$chat['description'].'</p><footer>'. ucfirst($chat['offer']['fullname']) .' | <cite> '.$chat['created'] .'</cite></blockquote>';

         // if( $userid !== $chat['messager_id']){
           // $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$this->request->getData('orderid')]);
          //}
        }

        return $this->redirect(['controller' => 'Hire' ,'action' => 'view', $this->request->getData('order_id')]);
            }else{
                //echo $emailnotification['email'];
            echo $this->Flash->error(__('The offer could not be saved. Please, try again.'));
        }

   
    }
    
    public function addOfferId() {
        $this->autoRender = false;
        $id = $this->request->data['id'];
        
        $session = $this->request->session();
        $session->write('offerId', $id);
        

        echo "ok";
    }
    
    public function offerDone() {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Offerhire');
        $this->loadModel('Hire');
        $this->autoRender = false;
        $id = $this->request->data['id'];
        $amount = $this->request->data['amount'];
        //echo $amount;exit;
        
        $offerDone = $this->Offerhire->updateAll(
        array('status' => "completed"),
            array('id' => $id)
        );
        
        
        //$mmrequest_table= $conn->execute("UPDATE mmrequesters SET status='completed' WHERE orderid= '".$orderId."' ");
        $seller_id = $conn->execute("SELECT * FROM hire_offers WHERE id= '".$id."' LIMIT 1 ")->fetchAll('assoc');
        //print_r($seller_id);exit;
        //echo $seller_id[0]['user_id'];exit;
        $getSellerBalance = $conn->execute("SELECT * FROM bankbalances WHERE user_id= '".$seller_id[0]['user_id']."' ")->fetchAll('assoc');
        $updateBalance = $getSellerBalance[0]['balance'] + $amount;
        $balanceUser = $getSellerBalance[0]['id'];
        //print_r($getSellerBalance[0]['user_id']);exit;
        //echo $seller_id['user_id'];exit;
        $date = date('Y-d-m H:i:s');
        if(!empty($balanceUser)){
        $payment1 = $conn->execute("UPDATE bankbalances SET balance='".$updateBalance."' WHERE id= '".$balanceUser."' ");
        echo "ok";
            
        }else{
        $payment2 = $conn->execute("INSERT INTO bankbalances (`user_id`, `balance`, `created`, `modified`) VALUES ('".$seller_id[0]['user_id']."', '".$amount."', '".$date."', '".$date."') "); 
        echo "ok";
            
        }
        
    }
    public function addOfferPayment($respdata = null) {
        $result = $this->paystackcallback($respdata);
    }

    private function paystackcallback($reference) {
        
        $respdata = $this->Paystack->verifytransaction($reference);
        //print_r($respdata);exit;
        //check if status is true, else redirect with error message
        /*
        if (!$respdata['status']) {
            $errmsg = $respdata['message'];
            $this->Flash->error(__('Payment verification error ' . $respdata['message']));
            return $this->redirect(['controller' => 'mmrequesters', 'action' => 'listgigs']);
        }
        */
        //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client
        //if ($respdata['data']['status'] == "success") {

            //give user value/save into subscription
            $result = $this->_add($respdata);
        //}
    }

    protected function _add($respdata = null) {
        $conn = ConnectionManager::get('default');
        $session = $this->request->session();
        //print_r($session->read('offerId'));exit;
        $this->loadModel('Offer');
        $this->loadModel('Offerhire');
        $this->loadModel('Mmrequesters');
        $this->loadModel('Hire');

        $offerInfo = $this->Offerhire->find('all', ['limit' => 1])->where(['id' => $session->read('offerId')])->toArray();
        // print_r($offerInfo);exit;
        $offerId = $offerInfo[0]['id'];
        $orderId = $offerInfo[0]['order_id'];
        
        
        // echo $orderId;
        // exit;
         //$beatstopromote_table = TableRegistry::get('offer');
        //$beatstopromote = $beatstopromote_table->get($offerId);
        //$beatstopromote->payment = "paid";
        //$beatstopromote->tnx_reference = $respdata['data']['reference'];
        
        $offer_table= $conn->execute("UPDATE hire_offers SET payment='paid',tnx_reference = '".$respdata['data']['reference']."', status = 'active' WHERE id='".$offerId."' ");
        $mmrequest_table= $conn->execute("UPDATE hire SET status='active' WHERE id= '".$orderId."' ");
         
        //$mmrequest_table = TableRegistry::get('mmrequesters');
        //$mmrequest = $mmrequest_table->get($offerInfo[0]['orderid']);
        //$mmrequest->status = "active";

        if ($offer_table && $mmrequest_table) {

            $this->Flash->success(__('Your Payment has been received. We will get back to you shortly'));
            return $this->redirect(['controller' => 'hire', 'action' => 'listorder']);
        } else {

            $this->Flash->error(__('There was an error with your Payment'));
            return $this->redirect(['controller' => 'hire', 'action' => 'listorder']);
        }
    }

    /**
     * webhook method
     * integrated to paystack api
     */
    public function webhook() {

        // Retrieve the request's body
        $body = @file_get_contents("php://input");
        $signature = (isset($_SERVER['HTTP_X_PAYSTACK_SIGNATURE']) ? $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] : '');

        /* It is a good idea to log all events received. Add code *
         * here to log the signature and body to db or file       */

        if (!$signature) {
            // only a post with paystack signature header gets our attention
            exit();
        }

        define('PAYSTACK_SECRET_KEY', 'sk_test_a5f08ca803dfffd53a521bfda552684c2a795539');
        // confirm the event's signature
        if ($signature !== hash_hmac('sha512', $body, PAYSTACK_SECRET_KEY)) {
            // silently forget this ever happened
            exit();
        }

        http_response_code(200);
        // parse event (which is json string) as object
        // Give value to your customer but don't give any output
        // Remember that this is a call from Paystack's servers and
        // Your customer is not seeing the response here at all
        $event = json_decode($body);
        switch ($event->event) {
            // charge.success
            case 'charge.success':
                // TIP: you may still verify the transaction
                // before giving value.
                break;
        }
        exit();
    }
    
    public function uploadFile() {
        
        $this->loadModel('Uploadfilehire');
        $store = $this->Uploadfilehire->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        // print_r($formData['orderid']);exit;
        
        if ($this->request->is('post')) {
            
            if(isset($_FILES["name"]) && isset($_POST["messager_id"]) && isset($_POST["orderid"]) && $_POST["user_id"] != ''){
                 
            $this->request->accepts();
            $accepts = $this->request->accepts();
            
             $store = $this->Uploadfilehire->patchEntity($store, $this->request->getData());
             //print_r($store);exit; 
                if ($this->Uploadfilehire->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The file has been saved.']);
                    $this->Flash->success(__('The attachment is sent.'));
                    return $this->redirect(['controller' => 'hire','action' => 'view', $formData['orderid']]);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }else{
                $this->Flash->success(__('Please select file.'));
                    return $this->redirect(['controller' => 'hire','action' => 'view', $formData['orderid']]);
            }
        }
    }

}
