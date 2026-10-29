<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\Event\Event;
use Cake\Controller\Component\FlashComponent;
use Cake\Network\Session;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * CakePHP ReferralsController
 * @author SONY
 */
class ReferralsController extends AppController {

    public function view() {
          $this->paginate = [
           'contain' => ['Users.Subscriptions'],
          'order' => ['created' =>'DESC']
        ];
        $referrals = $this->paginate($this->Referrals);
        
        $this->set(compact('referrals'));

    }
    
    public function permission() {
        
        $permissions = $this->Users->find('all', array(
        'conditions' => array('Users.role !=' => 'admin'),
        'order'=> 'Users.id ASC'
        ));
        
        $referrals = $this->paginate($permissions);
        // print_r($referrals);exit;
        $this->set(compact('referrals'));

    }
    
    public function allow($id = null)
    {
        // $id = $this->request->getParam['id'];
        // echo $id;exit;
        $this->loadModel('Users');
        
         $this->Users->updateAll(
            array('refferal_permission' => 1),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully!, referral permission updated."));
            
        return $this->redirect($this->referer());
    }
    
    public function disallow($id = null)
    {
        // $id = $this->request->getParam['id'];
        // echo $id;exit;
        $this->loadModel('Users');
        
         $this->Users->updateAll(
            array('refferal_permission' => 0),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully!, referral permission updated."));
            
        return $this->redirect($this->referer());
    }
    
    public function subscribe()
    {
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $cart = $this->Carts->getCount();
        
        $user_id = $this->Auth->User('id');
        
        $subscriptions = $this->Subscriptions->find('all', [
        'conditions' => ['Subscriptions.user_id' => $user_id]
        ]);
        $subscriptions = $subscriptions->first();
        if(!empty($subscriptions->user_id)){
            return $this->redirect('/subscriptions');
        }
        // print_r($subscriptions);exit;
      $this->viewBuilder()->theme('Panel')->layout('register1');
    //   $plans = $this->paginate($this->Plans);
      $title = "Music Distribution";
      $this->set(compact('plans','cart'));
      $this->set('_serialize', ['plans', 'title']);
    }

}
