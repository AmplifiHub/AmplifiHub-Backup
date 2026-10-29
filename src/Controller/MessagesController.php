<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[] paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{
    
    
     public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
         $this->Auth->allow(['add']);
    }

  use MailerAwareTrait;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
      //list orders received and made
      $id = $this->Auth->user('id');
      //debug($id);
        $this->paginate = [
          'conditions'=>['user_id'=>$id],
          'contain' => ['Users','Messagers'],
          'order' => ['created'=>'DESC']
        ];
        $messages = $this->paginate($this->Messages);
        $title="Chat room";
        //debug($messages);
        $this->set(compact('messages','id','cart', 'title'));
        $this->set('_serialize', ['messages']);
    }



    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);

        $this->set('message', $message);
        $this->set('cart', $cart);
        $this->set('_serialize', ['message']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $cart = $this->Carts->getCount();
        $id = $this->Auth->user('id');
        
        $this->autoRender = false;
        $this->request->data['status'] = 'unread';       
        $message = $this->Messages->newEntity();
        
        // $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        
     // echo json_encode( $this->request->getData());
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            // print_r($message);exit;
            //echo json_encode($message);
            if ($this->Messages->save($message)) {

                //$this->Flash->success(__('The message has been saved.'));
        //just to get messager name
        $messager = $this->Messages->Users->find()->where(['Users.id'=>$this->request->getData('messager_id')])->first();
        // print_r($message->service);exit;
        //just to get $recipient name
       // echo $this->request->getData('user_id');
        $recipient = $this->Users->find()->where(['Users.id'=>$this->request->getData('user_id')])->first();

        //$offer = $conn->execute("SELECT * FROM custom_offers WHERE custom_offers.order_id = '".$this->request->getData('orderid')."' LIMIT 1")->fetchAll('assoc');
        
    
    
        //if messager is not logged in user, send an email notification
        
          //var_dump();exit();
          
          if($id == $this->request->getData('messager_id')){
          //if($id == $this->request->getData('messager_id')){
          $emailnotification1['orderid'] = $this->request->getData('orderid');
          $emailnotification1['useremail'] =$this->request->getData('clientemail');
          $emailnotification1['aka'] = $recipient['firstname'] . " " . $recipient['lastname'];
          $emailnotification1['messager'] = $messager['aka'] . " " . $messager['lastname'] ;
          $emailnotification1['service'] = $message->service;
          
        //   //echo json_encode($emailnotification);

        //   $this->getMailer('User')->send('notify',[$emailnotification]);
          
          $email = new Email('noreply');
                        //$email->to('it.professional.bi@gmail.com')
                        $email->to($recipient['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($emailnotification1)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Order Update Notification On AmplifiHub');
                        $sent = $email->send();
        
          }elseif($id == $this->request->getData('user_id')){
        $emailnotification['orderid'] = $this->request->getData('orderid');
          $emailnotification['useremail'] =$this->request->getData('clientemail');
          $emailnotification['aka'] = $messager['aka'] . " " . $messager['lastname'];
          $emailnotification['messager'] = $recipient['firstname'] . " " . $recipient['lastname'] ;
          $emailnotification['service'] = $message->service;
          
        $emailSeller = new Email('noreply');
                        //$email->to('ameerhamzanawazbutt@gmail.com')
                        $emailSeller->to($messager['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($emailnotification)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Order Update Notification');
                        $sentSeller = $emailSeller->send();
          }        

        //get unread messages to display on the chat section
        $chats = $this->Messages->find()->where(['orderid'=>$this->request->getData('orderid'),'status'=>'unread'])->order(['Messages.created'=>'DESC'])->contain(['Messagers'])->toArray();

        $userid = $this->request->getData('user_id');
        // print_r($chats);exit;
        foreach ($chats as $chat) {
          # code...
          $align = '' ;
          //echo date_default_timezone_get();
          //echo 'success';
          echo  '<blockquote style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px; border-top: 3px solid #f39c12;
" class="box box-warning direct-chat direct-chat-warning '.$align.'"><p>'.$chat['message'].'</p><footer>'. ucfirst($chat['messager']['aka']) .' | <cite> '.$chat['created'] .'</cite></blockquote>';

         // if( $userid !== $chat['messager_id']){
           // $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$this->request->getData('orderid')]);
          //}
        }

        //return $this->redirect(['action' => 'index']);
            }else{
                //echo $emailnotification['email'];
            echo $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }

   
    }
    
        public function addhire()
    {
        $conn = ConnectionManager::get('default');
            $this->loadModel('Carts');
            $this->loadModel('Users');
            $this->loadModel('Messageshire');
            $this->loadModel('Hire');
        $cart = $this->Carts->getCount();
        $id = $this->Auth->user('id');
        
        $this->autoRender = false;
      $this->request->data['status'] = 'unread';       
        $message = $this->Messageshire->newEntity();
        
     // echo json_encode( $this->request->getData());
            $message = $this->Messageshire->patchEntity($message, $this->request->getData());
            //echo json_encode($message);
            if ($this->Messageshire->save($message)) {

                //$this->Flash->success(__('The message has been saved.'));
        //just to get messager name
        $messager = $this->Messageshire->Users->find()->where(['Users.id'=>$this->request->getData('messager_id')])->first();

        //just to get $recipient name
       // echo $this->request->getData('user_id');
        $recipient = $this->Users->find()->where(['Users.id'=>$this->request->getData('user_id')])->first();

        //$offer = $conn->execute("SELECT * FROM custom_offers WHERE custom_offers.order_id = '".$this->request->getData('orderid')."' LIMIT 1")->fetchAll('assoc');
        
    
    
        //if messager is not logged in user, send an email notification
        
          //var_dump();exit();
          
          if($id == $this->request->getData('messager_id')){
          //if($id == $this->request->getData('messager_id')){
          $emailnotification1['orderid'] = $this->request->getData('orderid');
          $emailnotification1['useremail'] =$this->request->getData('clientemail');
          $emailnotification1['aka'] = $recipient['firstname'] . " " . $recipient['lastname'];
          $emailnotification1['messager'] = $messager['aka'] . " " . $messager['lastname'] ;
          
        //   //echo json_encode($emailnotification);

        //   $this->getMailer('User')->send('notify',[$emailnotification]);
          
          $email = new Email('noreply');
                        // $email->to('it.professional.bi@gmail.com')
                        $email->to($recipient['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($emailnotification1)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Work For Hire Notification');
                        $sent = $email->send();
        
          }elseif($id == $this->request->getData('user_id')){
        $emailnotification['orderid'] = $this->request->getData('orderid');
          $emailnotification['useremail'] =$this->request->getData('clientemail');
          $emailnotification['aka'] = $messager['aka'] . " " . $messager['lastname'];
          $emailnotification['messager'] = $recipient['firstname'] . " " . $recipient['lastname'] ;
          
        $emailSeller = new Email('noreply');
                        //$email->to('ameerhamzanawazbutt@gmail.com')
                        $emailSeller->to($messager['email'])
                                ->template('Panel.notify', 'Panel.notify')
                                ->viewVars($emailnotification)
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Work For Hire Notification');
                        $sentSeller = $emailSeller->send();
          }        

        //get unread messages to display on the chat section
        // $chats = $this->Messageshire->find()->where(['orderid'=>$this->request->getData('orderid'),'status'=>'unread'])->group(['Messageshire.id'])->order(['Messageshire.created'=>'DESC'])->contain(['Messagers'])->toArray();
        $chats = $this->Hire->Messageshire->find()->order(['Messageshire.created'=>'DESC'])->group(['Messageshire.id'])->where(['orderid'=>$this->request->getData('orderid')])->contain(['Users','Messagers'])->toArray();
        // print_r($messages);exit;
        // $chats = $this->Messageshire->find()->where(['orderid'=>$this->request->getData('orderid'),'status'=>'unread'])->group(['Messageshire.id'])->order(['Messageshire.created'=>'DESC'])->contain(['Messagers'])->toArray();
        $userid = $this->request->getData('user_id');
        //debug($chats);
        foreach ($chats as $chat) {
          # code...
          $align = ($chat['messager_id'] != $userid) ? '' : 'blockquote-reverse';
        //   $align = "($chat['messager_id'] === $userid ) ? '' : 'blockquote-reverse' " ;
          //echo date_default_timezone_get();
          //echo 'success';
          
          echo  '<blockquote style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px; border-top: 3px solid #f39c12;
" class="box box-warning direct-chat direct-chat-warning '.$align.'"><p>'.$chat['message'].'</p><footer>'. ucfirst($chat['messager']['aka']) .' | <cite> '.$chat['created'] .'</cite></blockquote>';
        
        
        
         // if( $userid !== $chat['messager_id']){
           // $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$this->request->getData('orderid')]);
          //}
        }

        //return $this->redirect(['action' => 'index']);
            }else{
                //echo $emailnotification['email'];
            echo $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }

   
    }

    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message','cart'));
        $this->set('_serialize', ['message']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
