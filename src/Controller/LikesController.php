<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likes Controller
 *
 * @property \App\Model\Table\LikesTable $Likes
 *
 * @method \App\Model\Entity\Like[] paginate($object = null, array $settings = [])
 */
class LikesController extends AppController
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
            'contain' => ['Users', 'Likers']
        ];
        $likes = $this->paginate($this->Likes);

        $this->set(compact('likes','cart'));
        $this->set('_serialize', ['likes']);
    }

    /**
     * View method
     *
     * @param string|null $id Like id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $like = $this->Likes->get($id, [
            'contain' => ['Users', 'Likers']
        ]);

        $this->set('like', $like);
        $this->set('cart', $cart);
        $this->set('_serialize', ['like']);
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
        
        $like = $this->Likes->newEntity();
        $id = $this->Auth->user('id');
        $this->request->data['user_id'] = $id;
        if ($this->request->isAjax('post')) {
            $like = $this->Likes->patchEntity($like, $this->request->getData());
            $type = $this->request->getData('type');

            //like per user should not be more than once
            $query = $this->Likes->find('all')->where(['Likes.liker_id'=>$id, 'Likes.type'=> $type]);

            $check = $query->count();
            if($check < 1){
            if ($this->Likes->save($like)) {
                exit();
              }
            $this->Flash->error(__('The like could not be saved. Please, try again.'));
        }
      }
        $users = $this->Likes->Users->find('list', ['limit' => 200]);
        $likers = $this->Likes->Likers->find('list', ['limit' => 200]);
        $this->set(compact('like', 'users', 'likers','cart'));
        $this->set('_serialize', ['like']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Like id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $like = $this->Likes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $like = $this->Likes->patchEntity($like, $this->request->getData());
            if ($this->Likes->save($like)) {
                $this->Flash->success(__('The like has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The like could not be saved. Please, try again.'));
        }
        $users = $this->Likes->Users->find('list', ['limit' => 200]);
        $likers = $this->Likes->Likers->find('list', ['limit' => 200]);
        $this->set(compact('like', 'users', 'likers','cart'));
        $this->set('_serialize', ['like']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Like id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $like = $this->Likes->get($id);
        if ($this->Likes->delete($like)) {
            $this->Flash->success(__('The like has been deleted.'));
        } else {
            $this->Flash->error(__('The like could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
