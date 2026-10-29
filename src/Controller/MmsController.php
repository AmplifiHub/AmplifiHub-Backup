<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mms Controller
 *
 * @property \App\Model\Table\MmsTable $Mms
 *
 * @method \App\Model\Entity\Mm[] paginate($object = null, array $settings = [])
 */
class MmsController extends AppController
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
        $mms = $this->paginate($this->Mms);

        $this->set(compact('mms','cart'));
        $this->set('_serialize', ['mms']);
    }

    /**
     * View method
     *
     * @param string|null $id Mm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $mm = $this->Mms->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('mm', $mm);
        $this->set('cart', $cart);
        $this->set('_serialize', ['mm']);
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
        
        $mm = $this->Mms->newEntity();
        if ($this->request->is('post')) {
            $mm = $this->Mms->patchEntity($mm, $this->request->getData());
            if ($this->Mms->save($mm)) {
                $this->Flash->success(__('The mm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mm could not be saved. Please, try again.'));
        }
        $users = $this->Mms->Users->find('list', ['limit' => 200]);
        $this->set(compact('mm', 'users','cart'));
        $this->set('_serialize', ['mm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $mm = $this->Mms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mm = $this->Mms->patchEntity($mm, $this->request->getData());
            if ($this->Mms->save($mm)) {
                $this->Flash->success(__('The mm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mm could not be saved. Please, try again.'));
        }
        $users = $this->Mms->Users->find('list', ['limit' => 200]);
        $this->set(compact('mm', 'users','cart'));
        $this->set('_serialize', ['mm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mm = $this->Mms->get($id);
        if ($this->Mms->delete($mm)) {
            $this->Flash->success(__('The mm has been deleted.'));
        } else {
            $this->Flash->error(__('The mm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
