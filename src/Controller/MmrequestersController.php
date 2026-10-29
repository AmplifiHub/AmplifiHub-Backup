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
class MmrequestersController extends AppController
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
        $cart = $this->Carts->getCount();
        
      $this->autoRender = false;
      $mixeruser_id = $this->request->getparam('user_id');
      $user_id = $this->Auth->user('id');

      $mmrequest = $this->Mmrequesters->newEntity();
      if ($this->request->is('post')) {
      $orderid = 'mmr'.round(microtime(true));
      $mxuser=$this->request->data['user_id'] = $this->request->data['user_id'];
      $this->request->data['requester_id'] = $user_id;
      $this->request->data['status'] = 'pending';
      $this->request->data['orderid'] = $orderid;
      $mmrequester = $this->Mmrequesters->patchEntity($mmrequest, $this->request->getData());
      $recipient = $this->Users->find()->where(['Users.id'=>$user_id])->first();
    //   print_r($recipient);exit;
        
        //create notification
          $this->loadModel('Messages');
          $messagedata['messager_id'] = $user_id;
          $messagedata['user_id'] = $this->request->data['user_id'];
          $messagedata['orderid'] = $orderid;
          $messagedata['message'] = 'Mixing and Mastering Service Order placement';
          $messagedata['service'] = 'Mmrequesters';
          $messagedata['messager'] = $recipient['firstname'] . ' '. $recipient['lastname'];
          $messagedata['service'] = 'Mmrequesters';
          $message = $this->Messages->newEntity();
          $message = $this->Messages->patchEntity($message,$messagedata);
          $this->Messages->save($message);
            
          if ($this->Mmrequesters->save($mmrequester)) {
//print_r($mmrequester);exit;
            $this->loadModel('Users');
            $user = $this->Users->find()->where(['Users.id'=>$mxuser])->first();
            //print_r($user);exit;
            $user['service'] = 'Mixing and Mastering';
            
            $email = new Email('noreply');
                        //$email->to('m.bilaluog1@gmail.com')
                        $email->to($user['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($messagedata)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Great! New Mixing and Mastering Order on AmplifiHub');
                        $sent = $email->send();
            //$this->getMailer('User')->send('requests',[$user]);
              $this->Flash->success(__('Cool! Your mixing and mastering request has been placed. The mixer will be notified.'));
              //return $this->redirect(['action' => 'requestedgigs']);
              return $this->redirect($this->referer());
          }
          $this->Flash->error(__('The request could not be placed. Please, try again.'));
      }
      $users = $this->Mmrequesters->Users->find('list', ['limit' => 200]);
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
    public function listgigs()
    {
        $user_id = $this->Auth->user('id');
        $this->paginate = [
          'conditions' => ['Mmrequesters.requester_id'=>$user_id],
            'contain' => ['Users','Requester'],
            'order' => ['Mmrequesters.id' => 'DESC']
        ];
        $mmrequesters = $this->paginate($this->Mmrequesters);
        $title="Place Mixing and Mastering Order";
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
        $mmrequesters = $this->paginate($this->Mmrequesters);
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
      $this->loadModel('Mmrequesters');
      $this->loadModel('Offer');
      $this->loadModel('Uploadfile');
      $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$id]);
      $mmrequester = $this->Mmrequesters->find()->contain(['Users'])->where(['orderid'=>$id])->first();
      //$mmrequester = $this->Mmrequesters->find()->contain(['Users'])->where(['orderid'=>$id])->first();
      $msgid = $this->Mmrequesters->Users->find()->where(['id'=>$mmrequester->requester_id])->first();
        $messages = $this->Mmrequesters->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->toArray();
        $uploadfile = $this->Uploadfile->find()->order(['Uploadfile.timestamp'=>'DESC'])->where(['clientemail'=>$id])->toArray();
        //$offers = $this->Mmrequesters->Offer->find()->order(['Offer.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Offer'])->toArray();
        $offers = $conn->execute("SELECT *, custom_offers.id as id, custom_offers.status as oStatus, custom_offers.amount as amount, custom_offers.payment as payment, custom_offers.user_id as user_id, custom_offers.requester_id as requester_id FROM custom_offers LEFT JOIN mmrequesters ON mmrequesters.orderid = custom_offers.order_id WHERE custom_offers.order_id = '".$id."' order by custom_offers.id DESC")->fetchAll('assoc');
        $offerLimit = $conn->execute("SELECT count(id) as total FROM custom_offers WHERE custom_offers.order_id = '".$id."'")->fetchAll('assoc');
        $message = $this->Mmrequesters->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->first();
        $status = $this->Mmrequesters->find()->order(['Mmrequesters.created'=>'DESC'])->where(['orderid'=>$id])->first()->toArray();
        //$offers = $this->Offer->find()->order(['Offer.created'=>'DESC'])->where(['order_id'=>$id])->toArray();
        //print_r($status);exit;
        if($message == ""){
            $message = $message;
        }else{
            $message = $message->toArray();
        }
        
        $title="Order Chat Page - " .$msgid->aka;
        $this->set(compact('mmrequester','messages', 'message', 'offers', 'offerLimit', 'status', 'userid','msgid', 'id', 'uploadfile','title'));
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
            $this->loadModel('Offer');
        $cart = $this->Carts->getCount();
        
        $this->autoRender = false;
        //$this->request->data['status'] = 'unread';       
        $offer = $this->Offer->newEntity();
        //print_r($offer);exit;
     // echo json_encode( $this->request->getData());
            $offer = $this->Offer->patchEntity($offer, $this->request->getData());
            //print_r($offer);exit;
            //echo json_encode($message);
            if ($this->Offer->save($offer)) {
//print_r($offer);exit;
                //$this->Flash->success(__('The message has been saved.'));
        //just to get messager name
        $messager = $this->Offer->Users->find()->where(['Users.id'=>$this->request->getData('requester_id')])->first();

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
        $chats = $this->Offer->find()->where(['order_id'=>$this->request->getData('order_id')])->contain(['Offers'])->toArray();
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

        return $this->redirect(['controller' => 'Mmrequesters' ,'action' => 'view', $this->request->getData('order_id')]);
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
        $this->loadModel('Offer');
        $this->autoRender = false;
        $id = $this->request->data['id'];
        $amount = $this->request->data['amount'];
        //echo $amount;exit;
        
        $offerDone = $this->Offer->updateAll(
        array('status' => "completed"),
            array('id' => $id)
        );
        
        //$mmrequest_table= $conn->execute("UPDATE mmrequesters SET status='completed' WHERE orderid= '".$orderId."' ");
        $seller_id = $conn->execute("SELECT * FROM custom_offers WHERE id= '".$id."' LIMIT 1 ")->fetchAll('assoc');
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
        $this->loadModel('Mmrequesters');

        $offerInfo = $this->Offer->find('all', ['limit' => 1])->where(['id' => $session->read('offerId')])->toArray();
        //print_r($offerInfo);exit;
        $offerId = $offerInfo[0]['id'];
        $orderId = $offerInfo[0]['order_id'];
        
        
        //echo $offerId;
        //exit;
         //$beatstopromote_table = TableRegistry::get('offer');
        //$beatstopromote = $beatstopromote_table->get($offerId);
        //$beatstopromote->payment = "paid";
        //$beatstopromote->tnx_reference = $respdata['data']['reference'];
        
        $offer_table= $conn->execute("UPDATE custom_offers SET payment='paid',tnx_reference = '".$respdata['data']['reference']."', status = 'active' WHERE id='".$offerId."' ");
        $mmrequest_table= $conn->execute("UPDATE mmrequesters SET status='active' WHERE orderid= '".$orderId."' ");
         
        //$mmrequest_table = TableRegistry::get('mmrequesters');
        //$mmrequest = $mmrequest_table->get($offerInfo[0]['orderid']);
        //$mmrequest->status = "active";

        if ($offer_table && $mmrequest_table) {

            $this->Flash->success(__('Your Payment has been received. We will get back to you shortly'));
            return $this->redirect(['controller' => 'mmrequesters', 'action' => 'listgigs']);
        } else {

            $this->Flash->error(__('There was an error with your Payment'));
            return $this->redirect(['controller' => 'mmrequesters', 'action' => 'listgigs']);
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
        
        $this->loadModel('Uploadfile');
        $store = $this->Uploadfile->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        //print_r($formData['orderid']);exit;
        
        if ($this->request->is('post')) {
            
            if(isset($_FILES["name"]) && isset($_POST["messager_id"]) && isset($_POST["orderid"]) && $_POST["user_id"] != ''){
                 
            $this->request->accepts();
            $accepts = $this->request->accepts();
            
             $store = $this->Uploadfile->patchEntity($store, $this->request->getData());
             //print_r($store);exit; 
                if ($this->Uploadfile->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The file has been saved.']);
                    $this->Flash->success(__('The attachment is sent.'));
                    return $this->redirect(['controller' => 'mmrequesters','action' => 'view', $formData['orderid']]);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }else{
                $this->Flash->success(__('Please select file.'));
                    return $this->redirect(['controller' => 'mmrequesters','action' => 'view', $formData['orderid']]);
            }
        }
    }

}
