<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;

/**
 * Artistesrequesters Controller
 *
 * @property \App\Model\Table\ArtistesrequestersTable $Artistesrequesters
 *
 * @method \App\Model\Entity\Artistesrequester[] paginate($object = null, array $settings = [])
 */
class ArtistesrequestersController extends AppController
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
          'contain' =>['Users','Artistes'],
          'conditions' => ['user_id' => $id]
      ];

      $artistesrequesters = $this->paginate($this->Artistesrequesters);
      //debug($artistesrequesters);
      $this->set(compact('artistesrequesters','cart'));
      $this->set('_serialize', ['artistesrequesters']);
  }

    /**
     * Admin method
     *
     * @return \Cake\Http\Response|void
     */
    public function admin()
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $this->paginate = [
            'contain' => ['Users', 'Artistes']
        ];
        $artistesrequesters = $this->paginate($this->Artistesrequesters);

        $this->set(compact('artistesrequesters','cart'));
        $this->set('_serialize', ['artistesrequesters']);
    }

    /**
     * Profile method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function profile()
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $artisterequester = $this->Artistesrequesters->newEntity();
        $mixeruser_id = $this->request->getparam('user_id');
        $user_id = $this->Auth->user('id');

        //load MixMasterings to show work done by Producer
        $this->loadModel('Artistes');
        $beat_sample = $this->Artistes->find()->where(['Artistes.user_id'=>$mixeruser_id])->contain(['Genres'])->first();

        //Producers Rating and counting of number of raters
        $this->loadmodel('Ratings');
        $query = $this->Ratings->find('all',['conditions'=>['ratings.user_id'=>$mixeruser_id]]);

        $countraters = $query->count();
        $ratingsum = $query->select(['rating'=>$query->func()->sum('rating')])->first();

        $rating = @number_format($ratingsum['rating'] / $countraters);

        $user = $this->Artistes->find('all',['conditions'=>['Artistes.user_id'=>$mixeruser_id]])->contain(['Genres'])->first();
        //debug($user);
          $countcomment = $this->Artistesrequesters->Users->Comments->find('all',['conditions'=>['Comments.Commentee_id'=>$mixeruser_id, 'Comments.type'=>'ac']])->count();
          $display = 'show';
        $this->set(compact('artisterequester', 'user','mixeruser_id', 'countcomment', 'countraters', 'rating', 'beat_sample', 'display','cart'));
        $this->set('_serialize', ['artisterequester']);
    }

    /**
     * BookArtiste method
     *
     * @param string|null $id Artistesrequester id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function book($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
      $this->autoRender = false;
      $artisterequester = $this->Artistesrequesters->newEntity();
      $user_id = $this->Auth->user('id');
      //save to internal notification module


      if ($this->request->is('post')) {
        $orderid = 'art'.round(microtime(true));
        $this->request->data['user_id'] = $user_id;
        $this->request->data['artiste_id'] = $this->request->data['artisterequester_id'];
        $this->request->data['status'] = 'pending';
        $this->request->data['orderid'] = $orderid;
        $artisterequester = $this->Artistesrequesters->patchEntity($artisterequester, $this->request->getData());

          $this->loadModel('Messages');
          $messagedata['user_id'] = $this->request->data['artisterequester_id'];
          $messagedata['messager_id'] =$user_id; 
          $messagedata['orderid'] = $orderid;
          $messagedata['message'] = 'Artist Service Order placement';
          $messagedata['service'] = 'Artistesrequesters';
          $message = $this->Messages->newEntity();
          $message = $this->Messages->patchEntity($message,$messagedata);
          $this->Messages->save($message);

          if($this->Artistesrequesters->save($artisterequester)){

              $this->Flash->success(__('Your request has been placed.'));
              $this->loadModel('Users');
              $user = $this->Users->find()->where(['Users.id'=>$artisterequester->artiste_id])->first();
              $user['service'] = 'Artiste';
              $this->getMailer('User')->send('requests',[$user]);
              return $this->redirect($this->referer());
              //return $this->redirect('/artisterequest/'.$this->request->data['artisterequester_id']);
          }
          //debug($artisterequester->errors());
          if($artisterequester->errors()){
                $error_msg = [];
                foreach( $artisterequester->errors() as $errors){
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
      $this->set(compact('artisterequester', 'user','mixeruser_id', 'countcomment', 'countraters', 'rating', 'beat_sample', 'display','carts'));
      $this->set('_serialize', ['artisterequester']);
    }
  }

    /**
     * View method
     *
     * @param string|null $id Artistesrequester id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
      $userid = $this->Auth->user('id');
      $this->loadModel('Messages');
      $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$id]);
      //debug($saved);
        $artistesrequester = $this->Artistesrequesters->find()->contain(['Users'=>['Messages'], 'Artistes'])->where(['orderid'=>$id])->first();

        $messages = $this->Artistesrequesters->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->toArray();

     //debug($artistesrequester);
        $this->set(compact('artistesrequester', 'messages','userid','cart'));
        $this->set('_serialize', ['artistesrequester']);
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
        
        $artistesrequester = $this->Artistesrequesters->newEntity();
        if ($this->request->is('post')) {
            $artistesrequester = $this->Artistesrequesters->patchEntity($artistesrequester, $this->request->getData());
            if ($this->Artistesrequesters->save($artistesrequester)) {
                $this->Flash->success(__('The artistesrequester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artistesrequester could not be saved. Please, try again.'));
        }
        $users = $this->Artistesrequesters->Users->find('list', ['limit' => 200]);
        $artistes = $this->Artistesrequesters->Artistes->find('list', ['limit' => 200]);
        $this->set(compact('artistesrequester', 'users', 'artistes','cart'));
        $this->set('_serialize', ['artistesrequester']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Artistesrequester id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $artistesrequester = $this->Artistesrequesters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artistesrequester = $this->Artistesrequesters->patchEntity($artistesrequester, $this->request->getData());
            if ($this->Artistesrequesters->save($artistesrequester)) {
                $this->Flash->success(__('The artistesrequester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artistesrequester could not be saved. Please, try again.'));
        }
        $users = $this->Artistesrequesters->Users->find('list', ['limit' => 200]);
        $artistes = $this->Artistesrequesters->Artistes->find('list', ['limit' => 200]);
        $this->set(compact('artistesrequester', 'users', 'artistes','cart'));
        $this->set('_serialize', ['artistesrequester']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Artistesrequester id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artistesrequester = $this->Artistesrequesters->get($id);
        if ($this->Artistesrequesters->delete($artistesrequester)) {
            $this->Flash->success(__('The artistesrequester has been deleted.'));
        } else {
            $this->Flash->error(__('The artistesrequester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
