<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 *
 * @method \App\Model\Entity\Comment[] paginate($object = null, array $settings = [])
 */
class CommentsController extends AppController
{

    public function initialize(){
      $this->autoRender = false;

      parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $this->paginate = [
            'contain' => ['Commentees', 'Commenters']
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments','cart'));
        $this->set('_serialize', ['comments']);
    }


    public function loadcomments(){
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
      $this->autoRender = false;
      $user_id = $this->request->getData('user_id');
      $type = $this->request->getData('type');
      if($this->request->isAjax('post')){
        $comments = $this->Comments->find('all',['conditions'=>['Comments.commentee_id'=>$user_id,'Comments.type'=>$type],'order'=>['Comments.created'=>'DESC']])->contain(['Users'])->toArray();
        //debug($comments);

        foreach ($comments as $key) {
          # code...
          $newDate = new Time($key['created']);
          echo "<blockquote><p>".$key['comment']."</p><footer>".$key['user']['fullname']." <em>". $newDate->format('d-m-Y')."</em></footer></blockquote>";
        }
      }
    }

    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $comment = $this->Comments->get($id, [
            'contain' => ['Commentees', 'Commenters']
        ]);

        $this->set('comment', $comment);
        $this->set('_serialize', ['comment']);
        $this->set('cart', $cart);
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
      $commentuser_id = $this->request->getparam('user_id');
        $comment = $this->Comments->newEntity();
        if ($this->request->isAjax('post')) {
          //$this->request->data['comment'] = $this->request->getparam('comment');
          //$this->request->data['commentee_id'] = $commentuser_id;
          $this->request->data['commenter_id'] = $this->Auth->user('id');
          //$this->request->data['type'] = 'mm';
          $comment = $this->Comments->patchEntity($comment, $this->request->getData());
          $saved = $this->Comments->save($comment);
          //debug($saved->error());
            if ($saved) {
              //return  $this->Flash->success(__('The comment has been saved.'));
              exit();
              //return $saved;
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        //$commentees = $this->Comments->Commentees->find('list', ['limit' => 200]);
        //$commenters = $this->Comments->Commenters->find('list', ['limit' => 200]);
        $this->set(compact('comment','cart'));
        $this->set('_serialize', ['comment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $comment = $this->Comments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $commentees = $this->Comments->Commentees->find('list', ['limit' => 200]);
        $commenters = $this->Comments->Commenters->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'commentees', 'commenters','cart'));
        $this->set('_serialize', ['comment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
