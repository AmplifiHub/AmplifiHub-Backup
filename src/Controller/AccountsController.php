<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Accounts Controller
 *
 * @property \App\Model\Table\AccountsTable $Accounts
 *
 * @method \App\Model\Entity\Account[] paginate($object = null, array $settings = [])
 */
class AccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();
        $this->paginate = [
            'contain' => ['Users'],
            'conditions' =>['user_id'=>$this->Auth->user('id')]
        ];
        $accounts = $this->paginate($this->Accounts);

        $this->set(compact('accounts','cart'));
        $this->set('_serialize', ['accounts']);
    }

    /**
     * View method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    
    public function view($id = null)
    {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        $account = $this->Accounts->get($id, [
            'contain' => ['Users']
        ]);
    
        $this->set('account', $account);
        $this->set('cart', $cart);
        $this->set('_serialize', ['account']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Carts');
        $this->loadModel('Accounts');
        
        $userid = $this->Auth->user('id');
        $query = $this->Accounts->find('all', array(
        'conditions' => array('Accounts.user_id' => $userid)
         ));
      
        $row = $query->first();
        
        
        $cart = $this->Carts->getCount();
        
        $account = $this->Accounts->newEntity();
            
        if ($this->request->is('post')) {
            
          $this->request->data['user_id'] = $this->Auth->user('id');
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            //print_r($this->Accounts->save($account));exit;
            if ($this->Accounts->save($account)) {
                //print_r($this->Accounts->save($account));exit;
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }
        $title="Add Bank Account";
        $users = $this->Accounts->Users->find('list', ['limit' => 200]);
        $this->set(compact('account','cart', 'row', 'title'));
        $this->set('_serialize', ['account']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        $account = $this->Accounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            print_r($account);exit;
            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }
        $users = $this->Accounts->Users->find('list', ['limit' => 200]);
        $this->set(compact('account', 'users','cart'));
        $this->set('_serialize', ['account']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $account = $this->Accounts->get($id);
        if ($this->Accounts->delete($account)) {
            $this->Flash->success(__('The account has been deleted.'));
        } else {
            $this->Flash->error(__('The account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
