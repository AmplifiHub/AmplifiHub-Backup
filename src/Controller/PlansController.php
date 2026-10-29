<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;

/**
 * Plans Controller
 *
 * @property \App\Model\Table\PlansTable $Plans
 *
 * @method \App\Model\Entity\Plan[] paginate($object = null, array $settings = [])
 */
class PlansController extends AppController
{

  public function initialize()
    {
      parent::initialize();
      $this->loadComponent('Paystack');
      $this->Auth->allow(['']);
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
        
        $Plans = $this->paginate($this->Plans);

        $this->set(compact('Plans'));
        $this->set('cart', $cart);
        $this->set('_serialize', ['Plans']);
    }

    /**
    * Subscribe method
    *
    */
    public function subscribe()
    {
        $date = date('Y-m-d');
        $this->loadModel('Subscriptions');
        $currentUserSubscription = $this->Subscriptions->find('list', [
                    'keyField' => 'id',
                    'valueField' => 'plan_id'
                ])->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active', 'user_id' => $this->Auth->user('id')])->hydrate(false)->toArray();
        
      $this->viewBuilder()->theme('Panel')->layout('register1');
      $plans = $this->paginate($this->Plans);
      $title = "AmplifiHub - Subscribe";
      $this->set(compact('currentUserSubscription','plans','cart','title'));
      $this->set('_serialize', ['plans', 'title']);
    }

    /**
     * View method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $Plan = $this->Plans->get($id, [
            'contain' => []
        ]);

        $this->set('Plan', $Plan);
        $this->set('cart', $cart);
        $this->set('_serialize', ['Plan']);
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
        
        $Plan = $this->Plans->newEntity();
        if ($this->request->is('post')) {

            //create paystack membership plan for Subscriptions and then save in system db from api response

            $plans = $this->request->getData();
            //$data = [];
            $data["name"] = $plans["name"];
            $data["interval"] = 'monthly';
            $data["amount"] = $plans["amount"] * 100;
            //debug(json_encode($data));
            $respdata = $this->Paystack->createplan($data);

            //check if status is true from paystack api and save into database
            if($respdata['status']){
              $plans['status'] = $respdata['status'];
              $plans['message'] = $respdata['message'];
              $plans['plan_code'] = $respdata['data']['plan_code'];
              $plans['created'] = date('Y-M-d', strtotime($respdata['data']['createdAt']));
              $plans['modified'] = date('Y-M-d',strtotime($respdata['data']['updatedAt']));
              $plansave = $this->Plans->patchEntity($Plan, $plans);
              //debug($plans);
              if ($this->Plans->save($plansave))
              {
                  $this->Flash->success(__('The Plan has been saved.'));

                  return $this->redirect(['action' => 'add']);
              }
            }

            $this->Flash->error(__('The Plan could not be saved. Please, try again.'));
        }
        $this->set(compact('Plan','cart'));
        $this->set('_serialize', ['Plan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $Plan = $this->Plans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plans = $this->Plans->patchEntity($Plan, $this->request->getData());

            //send to paystack api for update
            $data["name"] = $plans["name"];
            $data["amount"] = $plans["amount"] * 100;

            //debug($plans['plan_code']);
            $respdata = $this->Paystack->editplan($reference);

            if($respdata['status']){
              if ($this->Plans->save($Plan)) {
                  $this->Flash->success(__('The Plan has been saved.'));

                  return $this->redirect(['action' => 'edit',$id]);
              }
            }

            $this->Flash->error(__('The Plan could not be saved. Please, try again.'));
        }
        $this->set(compact('Plan', 'cart'));
        $this->set('_serialize', ['Plan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Plan = $this->Plans->get($id);
        if ($this->Plans->delete($Plan)) {
            $this->Flash->success(__('The Plan has been deleted.'));
        } else {
            $this->Flash->error(__('The Plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
