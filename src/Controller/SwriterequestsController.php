<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Swriterequests Controller
 *
 * @property \App\Model\Table\SwriterequestsTable $Swriterequests
 *
 * @method \App\Model\Entity\Swriterequest[] paginate($object = null, array $settings = [])
 */
class SwriterequestsController extends AppController
{
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
        
        $id = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Songwriters'],
            'conditions' => ['songwriter_id'=>$id],
            'order' => ['created'=>'DESC']
        ];
        $swriterequests = $this->paginate($this->Swriterequests);

        $this->set(compact('swriterequests','cart'));
        $this->set('_serialize', ['swriterequests']);
    }

    /**
     * View method
     *
     * @param string|null $id Swriterequest id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
            $this->loadModel('Swriterequests');
        $cart = $this->Carts->getCount();
        
      $userid = $this->Auth->user('id');
      $this->loadModel('Messages');
      $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$id]);
      $swriterequest = $this->Swriterequests->find()->contain(['Users', 'Songwriters'])->where(['orderid'=>$id])->first();
      $msgid = $this->Swriterequests->Users->find()->where(['id'=>$swriterequest->songwriter_id])->first();
      //debug($id);
      //debug($swriterequest);
      $messages = $this->Swriterequests->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->toArray();

      $this->set(compact('swriterequest','messages','userid','cart','msgid'));
      $this->set('_serialize', ['swriterequest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
      $this->autoRender = false;
        $swriterequest = $this->Swriterequests->newEntity();
        if ($this->request->is('post')) {
          $orderid = 'swr'.round(microtime(true));
          $user_id = $this->Auth->user('id');
          $this->request->data['orderid'] = $orderid;
          $this->request->data['status'] = 'pending';
          $sw = $this->request->getData();
          $sw['job_description'] = json_encode($this->request->getData('job_description'));
          //debug($this->request->job_description);


            $swriterequest = $this->Swriterequests->patchEntity($swriterequest, $sw);
            //debug($swriterequest);

            //create notification
              $this->loadModel('Messages');
              $messagedata['messager_id'] = $user_id;
              $messagedata['user_id'] = $this->request->data['songwriter_id'];
              $messagedata['orderid'] = $orderid;
              $messagedata['message'] = 'Song Writer Service Order placement';
              $messagedata['service'] = 'Swriterequests';
              $message = $this->Messages->newEntity();
              $message = $this->Messages->patchEntity($message,$messagedata);
              $this->Messages->save($message);

            if ($this->Swriterequests->save($swriterequest) ) {
                $this->Flash->success(__('The swriterequest has been saved.'));
                $this->loadModel('Users');
                $user = $this->Users->find()->where(['Users.id'=>$swriterequest->songwriter_id])->first();
                $user['service'] = 'Song Writer';
                $this->getMailer('User')->send('requests',[$user]);
                return $this->redirect($this->referer());
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The swriterequest could not be saved. Please, try again.'));
        }
        $users = $this->Swriterequests->Users->find('list', ['limit' => 200]);
        $songwriters = $this->Swriterequests->Songwriters->find('list', ['limit' => 200]);
        $this->set(compact('swriterequest', 'users', 'songwriters','cart'));
        $this->set('_serialize', ['swriterequest']);
    }
    
    
    
        public function book($id = null)
    {
            $this->loadModel('Carts');
        $cart = $this->Carts->getCount();
        
      $this->autoRender = false;
      $Swriterequest = $this->Swriterequests->newEntity();
      $user_id = $this->Auth->user('id');
      //save to internal notification module
   $songWriterId = $this->request->data['songwriter_id'];

      if ($this->request->is('post')) {
        $orderid = 'swr'.round(microtime(true));
        $this->request->data['user_id'] = $user_id;
        $this->request->data['songwriter_id'] = $this->request->data['songwriter_id'];
        $this->request->data['status'] = 'pending';
        $this->request->data['orderid'] = $orderid;
        $this->request->data['song_title'] = $this->request->data['song_title'];
        $this->request->data['job_description'] = implode(", ",$this->request->data['job_descriptions']);
        $this->request->data['project'] = $this->request->data['project'];
        
        
        $swriterequester = $this->Swriterequests->patchEntity($Swriterequest, $this->request->getData());

          $this->loadModel('Messages');
          $messagedata['user_id'] = $this->request->data['songwriter_id'];
          $messagedata['messager_id'] = $user_id; 
          $messagedata['orderid'] =  $orderid;
          $messagedata['message'] = 'Song Writer Service Order placement';
          $messagedata['service'] = 'Swriterequests';
          $messagedata['status'] = 'unread';
          $message = $this->Messages->newEntity();
          $message = $this->Messages->patchEntity($message,$messagedata);
          $this->Messages->save($message);

          if($this->Swriterequests->save($swriterequester)){

              $this->Flash->success(__('Your request has been placed.'));
              $this->loadModel('Users');
              $user = $this->Users->find()->where(['Users.id'=> $songWriterId])->first();
              $user['service'] = 'Song Writer';
              $this->getMailer('User')->send('requests',[$user]);
              return $this->redirect($this->referer());
              //return $this->redirect('/artisterequest/'.$this->request->data['artisterequester_id']);
          }
          //debug($artisterequester->errors());
          if($swriterequester->errors()){
                $error_msg = [];
                foreach( $swriterequester->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[]    =   $error;
                        }
                    }else{
                        $error_msg[]    =   $errors;
                    }
                }

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("Please fix the following error(s):".implode("\n \r", $error_msg))
                    );
                }

            //return $this->redirect('/artisterequest/'.$this->request->data['artisterequester_id']);

      }
      $this->set(compact('swriterequester', 'user','mixeruser_id', 'countcomment', 'countraters', 'rating', 'beat_sample', 'display','carts'));
      $this->set('_serialize', ['swriterequester']);
    }
  }

    /**
     * Edit method
     *
     * @param string|null $id Swriterequest id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $swriterequest = $this->Swriterequests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $swriterequest = $this->Swriterequests->patchEntity($swriterequest, $this->request->getData());
            if ($this->Swriterequests->save($swriterequest)) {
                $this->Flash->success(__('The swriterequest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The swriterequest could not be saved. Please, try again.'));
        }
        $users = $this->Swriterequests->Users->find('list', ['limit' => 200]);
        $songwriters = $this->Swriterequests->Songwriters->find('list', ['limit' => 200]);
        $this->set(compact('swriterequest', 'users', 'songwriters','cart'));
        $this->set('_serialize', ['swriterequest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Swriterequest id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $swriterequest = $this->Swriterequests->get($id);
        if ($this->Swriterequests->delete($swriterequest)) {
            $this->Flash->success(__('The swriterequest has been deleted.'));
        } else {
            $this->Flash->error(__('The swriterequest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
