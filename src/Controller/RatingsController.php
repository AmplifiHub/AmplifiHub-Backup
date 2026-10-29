<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ratings Controller
 *
 * @property \App\Model\Table\RatingsTable $Ratings
 *
 * @method \App\Model\Entity\Rating[] paginate($object = null, array $settings = [])
 */
class RatingsController extends AppController
{

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
            'contain' => ['Users']
        ];
        $ratings = $this->paginate($this->Ratings);

        $this->set(compact('ratings','cart'));
        $this->set('_serialize', ['ratings']);
    }

    /**
     * View method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $rating = $this->Ratings->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('rating', $rating);
        $this->set('cart', $cart);
        $this->set('_serialize', ['rating']);
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
        $rating = $this->Ratings->newEntity();
        if ($this->request->isAjax('post')) {

        /*  try {

          } catch (\Exception $e) {

          }*/
          //check if user has been rated before and stop from rating
          //check if user is rating himself/herself
          $check = $this->Ratings->find('all',['conditions'=>['Ratings.user_id'=>$this->request->data['user_id'],'Ratings.rater'=>$this->Auth->user('id'), 'Ratings.type'=>$this->request->data['type']]])->count();

          if($check < 1 && $this->request->data['user_id'] !== $this->Auth->user('id') ){
            $this->request->data['rater'] = $this->Auth->user('id');
              $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
              if ($this->Ratings->save($rating)){
                die();
                  //return $this->Flash->success(__('The rating has been saved.'));
              }
              $this->Flash->error(__('The rating could not be saved. Please, try again.'));
          }
        }
        $users = $this->Ratings->Users->find('list', ['limit' => 200]);
        $this->set(compact('rating', 'users','cart'));
        $this->set('_serialize', ['rating']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $rating = $this->Ratings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
            if ($this->Ratings->save($rating)) {
                $this->Flash->success(__('The rating has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        }
        $users = $this->Ratings->Users->find('list', ['limit' => 200]);
        $this->set(compact('rating', 'users','cart'));
        $this->set('_serialize', ['rating']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rating = $this->Ratings->get($id);
        if ($this->Ratings->delete($rating)) {
            $this->Flash->success(__('The rating has been deleted.'));
        } else {
            $this->Flash->error(__('The rating could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
