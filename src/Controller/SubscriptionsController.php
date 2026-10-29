<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Database\Expression\QueryExpression;
use Cake\Database\Query;
use Cake\Http\Client;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;
use Cake\Log\Log;

/**
 * Membershiplevels Controller
 *
 * @property \App\Model\Table\SubscriptionsTable $Subscriptions
 *
 * @method \App\Model\Entity\Subscriptions[] paginate($object = null, array $settings = [])
 */
class SubscriptionsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paystack');
    }
    
    public function test() {}

    /**
     * membership method
     *
     * @return \Cake\Http\Response|void
     */
     
     public function membership()
{
    $this->loadModel('Carts');
    $this->loadModel('Users');
    $this->loadModel('Plans');
    $cart = $this->Carts->getCount();
    $this->paginate = [
        'contain' => ['Users', 'Plans']
    ];
    $id    = $this->Auth->user('id');
    $email = $this->Auth->user('email');
    $role  = $this->Auth->user('role');
    $user = $this->request->session()->read('Auth.User');
    $query = "";
    
    
    if ($id == 1) {
        $query = $this->Subscriptions->find('all')->contain(['Users', 'Plans']);
        // $activeSubs = $this->Subscriptions->find()->where(['Subscriptions.subscription_status' => 'active', 'Subscriptions.expiry >' => date("Y-m-d"), 'Subscriptions.subscription_code' => '', ])->contain(['Users']);
        // $subs = [];
        // foreach ($activeSubs as $sub) {
        //     $customerData = $this->Paystack->fetchCustomer($sub->user->email);
        //     $plan = $this->Paystack->fetchPlan($sub->plan_id);
        //     $subdata = $this->Paystack->fetchSubscriptions([
        //         'plan' => $plan['data']['id'],
        //         'customer' => $customerData['data']['id'],
        //         'perPage' => 1
        //     ]);
        //     if ($subdata['meta']['total'] > 0) {
        //         // if ($subdata['data'][0]['status'] == 'active') {
        //             // $sub->subscription_code = $subdata['data'][0]['subscription_code'];
        //             // $this->Subscriptions->save($sub);
        //             // $subdata;
        //             echo '<pre>';
        //             print_r($subdata);
        //             print_r('------');
        //             echo '</pre>';
        //         // }
        //     }
        // }
    } else if ($id > 1) {
        $query = $this->Subscriptions->find('all')->where(['user_id' => $id])->contain(['Plans']);
    }

    if(!is_null($this->request->getQuery('search'))) {
        $q = $this->request->getQuery('search');
        $us = TableRegistry::get('users')->find('all',[
            'conditions'=>[
                "OR"=>[

                    "users.email LIKE"=>"%$q%",
                    "users.firstname LIKE"=>"%$q%",
                    "users.lastname LIKE"=>"%$q%",
                ]
            ]
        ])
            ->select(['users.id']);
        $query = $this->Subscriptions->find('all')->where(['user_id IN' => $us]);

    }
    $subscriptions = $this->paginate($query);
    $activeSub = count(collection($query)->filter(function ($sub) {
        return $sub->subscription_status == 'active' && strtotime(date('Y-M-d')) <= strtotime($sub->expiry);
    })->toArray()) > 0;

    $plansquery = $this->Plans->find('all', [
        'fields' => array('Plans.id', 'Plans.name')
    ]);
    $title="View Membership";
    $plans = $plansquery->toArray();
    $this->set(compact('subscriptions', 'cart', 'users', 'plans', 'title', 'activeSub'));
    $this->set('_serialize', ['subscriptions']);
}

    public function membershipmusic()
    {
    $this->loadModel('Carts');
    $this->loadModel('Users');
    $this->loadModel('Subscriptionmusic');
    $this->loadModel('Plans');
    $cart = $this->Carts->getCount();
    $this->paginate = [
        'contain' => ['Users', 'Plans']
    ];
    $id    = $this->Auth->user('id');
    $email = $this->Auth->user('email');
    $role  = $this->Auth->user('role');
    $user = $this->request->session()->read('Auth.User');
    $query = "";
    
    if ($id == 1) {
        $query = $this->Subscriptionmusic->find('all')->contain(['Users']);
    } else if ($id > 1) {
        $query = $this->Subscriptionmusic->find('all')->where(['user_id' => $id]);
    }

    if(!is_null($this->request->getQuery('search'))) {
        $q = $this->request->getQuery('search');
        $us = TableRegistry::get('users')->find('all',[
            'conditions'=>[
                "OR"=>[

                    "users.email LIKE"=>"%$q%",
                    "users.firstname LIKE"=>"%$q%",
                    "users.lastname LIKE"=>"%$q%",
                ]
            ]
        ])
            ->select(['users.id']);
        $query = $this->Subscriptionmusic->find('all')->where(['user_id IN' => $us]);

    }
    $subscriptions = $this->paginate($query);
    $activeSub = count(collection($query)->filter(function ($sub) {
        return $sub->subscription_status == 'active' && strtotime(date('Y-M-d')) <= strtotime($sub->expiry);
    })->toArray()) > 0;

    $plansquery = $this->Plans->find('all', [
        'fields' => array('Plans.id', 'Plans.name'),
        'conditions' => array('Plans.plan_schedule' => 'music')
    ]);
    $title="Music Storage Subscription Manager";
    $plans = $plansquery->toArray();
    $this->set(compact('subscriptions', 'cart', 'users', 'plans', 'title', 'activeSub', 'subs', 'activeSubs'));
    $this->set('_serialize', ['subscriptions']);
    
        
    }
    
    public function changeSubMusic() {
        $conn = ConnectionManager::get('default');
         
        $this->autoRender = false;
        $this->loadModel('Subscriptionmusic');
        
        $period = $this->request->data['period'];
        switch ($period) {
            case '1 month':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+1 month")));
                break;
            case '6 month':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+6 month")));
                break;
            case '1 year':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+1 year")));
                break;
            default:
                $this->Flash->error(__("Invalid period submitted."));
                return $this->redirect($this->referer());
        }
        
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        $userId = $this->request->data['userId'];
        $update = $conn->execute("UPDATE subscriptions SET subscription_status = 'disable', expiry = '$yesterday' WHERE user_id = $userId");
        
        // print_r($update); exit;
        if(!empty($userId)){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userId)
        );
        }
        $levelId = $this->request->data['levelId'];

        // print_r($this->request->data); exit;

        $date = date('Y-m-d');
        $this->loadModel('Plans');
        $plan = $this->Plans->get($levelId);
        $subscriptionTable = TableRegistry::get('Subscriptionmusic');

        $checkexpiry = $subscriptionTable->find('all')->where(['user_id' => $userId, 'expiry >=' => $date, 'level_id' => $levelId]);

        if ($checkexpiry->isEmpty()) {
            $subscription = $subscriptionTable->findOrCreate(['user_id' => $userId, 'level_id' => $levelId]);
            $subscription = $subscriptionTable->get($subscription->id);
            // echo "<pre>"; print_r($subscription); exit;


            $subscription->user_id = $userId;
            $subscription->plan_id = $plan->plan_code;
            $subscription->level_id = $levelId;
            // $subscription->tnx_reference = "manual-membership";
            $subscription->subscription_status = "active";
            $subscription->created = $date;
            $subscription->expiry = $expirydate;
            // try {
            //     $subscriptionTable->save($subscription);
            //     throw new Exception($subscriptionTable);
            // } catch (\Exception $ex) {
            //     echo $ex->getMessage();
            // }
            // exit;
            if ($subscriptionTable->save($subscription)) {
                $this->Flash->success(__("Successfully subscribed user to a package. Please check view membership under music storage menu"));

                //update user for active
                 $this->Users->updateAll(
                    array('expired' => 0),
                    array('id' => $userId)
                );

                return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
            }
        } else {
            $this->Flash->success(__("User Already Subscribed this plan."));
            return $this->redirect($this->referer());
        }



    }
    
    public function stopSubscriptionmusic($id = null) {

        $this->request->allowMethod(['post', 'delete']);
        $this->loadModel('Subscriptionmusic');
        $subscription_table = TableRegistry::get('subscriptionmusic');
        $subscription = $subscription_table->get($id);
        $userid= $subscription->user_id;
        // print_r($userid);exit;
        $today=date('Y-m-d');

        $subs = $this->Subscriptionmusic->find('all', [
            'conditions' => ['Subscriptionmusic.subscription_status'=> 'active', 'Subscriptionmusic.user_id' => $userid]
        ]);
        $subcount = $subs->count();

        $subsEx = $this->Subscriptionmusic->find('all', [
            'conditions' => ['Subscriptionmusic.subscription_status'=> 'active', 'Subscriptionmusic.user_id' => $userid, 'Subscriptionmusic.expiry <' => $today]
        ]);
        $subcountEx = $subsEx->count();
        //echo $subcount;
        //exit;



       /* echo "<pre>";
        print_r($subscription);
        die();*/
        $subscription->expiry = date('Y-m-d',strtotime("-1 days"));
        $subscription->subscription_status = 'disable';
        if (!empty($subscription->subscription_code)) {
            $respdata = $this->Paystack->fetchSubscription($subscription->subscription_code);
            $data['code'] = $subscription->subscription_code;
            $data['token'] = $respdata['data']['email_token'];
            $this->Paystack->cancelSubscription($data);
        }

        //echo $subcount;exit;
        if ($subscription_table->save($subscription)) {

            if(!empty($userid) && $subcount == 0){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userid)
        );
        }elseif($subcount == 1 || $subcountEx == 1){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userid)
            );
        }
            $this->Flash->success(__("Successfully stopped user's subscription."));

            return $this->redirect($this->referer());
        }
    }
    
    public function addsubmusic($respdata = null, $subType = 'monthly') {

        $result = $this->paystackcallbackmusic($respdata, $subType);
    }
    
    private function paystackcallbackmusic($reference, $subType = 'monthly') {
        
        $conn = ConnectionManager::get('default');
         
        
        $respdata = $this->Paystack->verifytransaction($reference);
     //   (array) $respdata';
        //$respdata = json_decode($response->body, true)
        //check if status is true, else redirect with error message
        // print_r($respdata);exit;
        if (!$respdata['status']) 
        {
            $errmsg = $respdata['message'];
            $this->Flash->error(__('Payment verification error ' . $respdata['message']));
            return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
        }
        
        
        $this->loadModel('Subscriptionmusic');
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        $userId = $this->Auth->user('id');
        $update = $conn->execute("UPDATE subscriptionmusic SET subscription_status = 'disable', expiry = '$yesterday' WHERE user_id = $userId");
        
        // print_r($respdata);exit;
        $subscription = $this->Subscriptionmusic->newEntity();

        $formdata = [];
        if ($subType === 'yearly') {
            $expires = date('Y-m-d H:i:s', strtotime("+2 day", strtotime("+1 year", strtotime($respdata['data']['transaction_date']))));
        } else {
            $expires = date('Y-m-d H:i:s', strtotime("+2 day", strtotime("+1 month", strtotime($respdata['data']['transaction_date']))));
        }

       //echo $respdata['data']['plan'];exit;
        $formdata['customer_id'] = $respdata['data']['customer']['customer_code'];
        $formdata['plan_id'] = $respdata['data']['plan'];
        // $formdata['subscription_code'] = '';
        $formdata['user_id'] = $this->Auth->user('id');
        $form = $this->Subscriptionmusic->Plans->find('all', ['limit' => 1])->where(['plan_code' => $respdata['data']['plan']])->toArray();
        $formdata['level_id'] = isset($form[0]['id'])?$form[0]['id']:"PLN_qys67kh1z1w0558";
        $formdata['status'] = 'active';
        $formdata['subscription_status'] = 'active';
        //$formdata['tnx_reference'] = $respdata['data']['reference'];
        $formdata['created'] = date('Y-m-d H:i:s', strtotime($respdata['data']['transaction_date']));
        //check if user already have a value in subscription db before giving value
        $check = $this->Subscriptionmusic->find('all')->where(['level_id' => $form[0]['id']]);
        $checked = $check->first();

        //        check if same plan by user and update renewal period
        $checkrenewal = $this->Subscriptionmusic->find('all')->where(['level_id' => $form[0]['id'], 'user_id' => $formdata['user_id']]);
        $checkedrn = $checkrenewal->first();
      // exit;
        if (is_null($checked) && $respdata['data']['status'] === 'success')
        {
            $formdata['expiry'] = $expires;
            //save subscription
            $subscribe = $this->Subscriptionmusic->patchEntity($subscription, $formdata);
             
    
            if ($this->Subscriptionmusic->save($subscribe)) 
            {
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
            

                 $this->Flash->success(__('Your Payment has been verified and subscription approved for music'));

            }
            return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
        } elseif (null !== $checkedrn && $respdata['data']['status'] === 'success') {
            //renew subscription
            $formdata['expiry'] = $expires;
            $subscribe = $this->Subscriptionmusic->patchEntity($checkedrn, $formdata);
            if ($this->Subscriptionmusic->save($subscribe)) {
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
                $this->Flash->success(__('Your Payment has been verified and subscription renewed'));
                return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
            }
        } elseif (null === $checkedrn && $respdata['data']['status'] === 'success') {
            //upgrade or downgrade subscription
            $formdata['expiry'] = $expires;
            $subscribe = $this->Subscriptionmusic->patchEntity($subscription, $formdata);
            if ($this->Subscriptionmusic->save($subscribe)) {
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
                $this->Flash->success(__('Your Payment has been verified and subscription plan changed'));
                return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
            }
        } else {
            $this->Flash->error(__('Your subscription failed. Try again or contact the admin.'));
            return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
        }

        return $this->redirect(['controller' => 'subscriptions', 'action' => 'membershipmusic']);
        //exit;
       /* //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client
        if ($respdata['data']['status'] == "success") {
            $this->Flash->success(__('Your Payment has been verified and subscription approved'));
            $result = $this->_add($respdata);
            //return $this->redirect(['action' => 'index']);

        }
        exit;
        */
    }


    public function changeSub() {
        $conn = ConnectionManager::get('default');
         /*$this->autoRender = false;

        $userId = $this->request->data['userId'];
        $levelId = $this->request->data['levelId'];
        // debug($userId);
        $date = date('Y-m-d');
        $expirydate = date('Y-m-d', strtotime('+1 years'));
        $subscription_table = TableRegistry::get('subscriptions');
        $subscription = $subscription_table->get($userId);
        $subscription->level_id = $levelId;
        $subscription->created = $date;
        $subscription->expiry = $expirydate;
        $subscription->subscription_status = 'active';
        if ($subscription_table->save($subscription)) {
            $this->Flash->success(__("Successfully updated user's package ."));
            return $this->redirect($this->referer());
        } */
        $this->autoRender = false;
        $this->loadModel('Subscriptions');
        
        $period = $this->request->data['period'];
        switch ($period) {
            case '1 month':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+1 month")));
                break;
            case '6 month':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+6 month")));
                break;
            case '1 year':
                $expirydate = date('Y-m-d', strtotime("+2 day", strtotime("+1 year")));
                break;
            default:
                $this->Flash->error(__("Invalid period submitted."));
                return $this->redirect($this->referer());
        }
        
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        $userId = $this->request->data['userId'];
        $update = $conn->execute("UPDATE subscriptions SET subscription_status = 'disable', expiry = '$yesterday' WHERE user_id = $userId");
        
        // print_r($update); exit;
        if(!empty($userId)){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userId)
        );
        }
        $levelId = $this->request->data['levelId'];

        // print_r($this->request->data); exit;

        $date = date('Y-m-d');
        // $expirydate = date('Y-m-d', strtotime('+6 month'));
        $this->loadModel('Plans');
        $plan = $this->Plans->get($levelId);
        $subscriptionTable = TableRegistry::get('Subscriptions');

        $checkexpiry = $subscriptionTable->find('all')->where(['user_id' => $userId, 'expiry >=' => $date, 'level_id' => $levelId]);

        if ($checkexpiry->isEmpty()) {
            $subscription = $subscriptionTable->findOrCreate(['user_id' => $userId, 'level_id' => $levelId]);
            $subscription = $subscriptionTable->get($subscription->id);
            // echo "<pre>"; print_r($subscription); exit;


            $subscription->user_id = $userId;
            $subscription->plan_id = $plan->plan_code;
            $subscription->level_id = $levelId;
            // $subscription->tnx_reference = "manual-membership";
            $subscription->subscription_status = "active";
            $subscription->created = $date;
            $subscription->expiry = $expirydate;
            // try {
            //     $subscriptionTable->save($subscription);
            //     throw new Exception($subscriptionTable);
            // } catch (\Exception $ex) {
            //     echo $ex->getMessage();
            // }
            // exit;
            if ($subscriptionTable->save($subscription)) {
                $this->Flash->success(__("Successfully subscribed user to a package. Please check view membership under subscriptions menu"));

                //update user for active
                 $this->Users->updateAll(
                    array('expired' => 0),
                    array('id' => $userId)
                );

                return $this->redirect($this->referer());
            }
        } else {
            $this->Flash->success(__("User Already Subscribed this plan."));
            return $this->redirect($this->referer());
        }



    }

public function stopSubscription($id = null) {

        $this->request->allowMethod(['post', 'delete']);

        $subscription_table = TableRegistry::get('subscriptions');
        $subscription = $subscription_table->get($id);
        $userid= $subscription->user_id;
        // print_r($userid);exit;
        $today=date('Y-m-d');

        $subs = $this->Subscriptions->find('all', [
            'conditions' => ['Subscriptions.subscription_status'=> 'active', 'Subscriptions.user_id' => $userid]
        ]);
        $subcount = $subs->count();

        $subsEx = $this->Subscriptions->find('all', [
            'conditions' => ['Subscriptions.subscription_status'=> 'active', 'Subscriptions.user_id' => $userid, 'Subscriptions.expiry <' => $today]
        ]);
        $subcountEx = $subsEx->count();
        //echo $subcount;
        //exit;



       /* echo "<pre>";
        print_r($subscription);
        die();*/
        $subscription->expiry = date('Y-m-d',strtotime("-1 days"));
        $subscription->subscription_status = 'disable';
        if (!empty($subscription->subscription_code)) {
            $respdata = $this->Paystack->fetchSubscription($subscription->subscription_code);
            $data['code'] = $subscription->subscription_code;
            $data['token'] = $respdata['data']['email_token'];
            $this->Paystack->cancelSubscription($data);
        }

        //echo $subcount;exit;
        if ($subscription_table->save($subscription)) {

            if(!empty($userid) && $subcount == 0){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userid)
        );
        }elseif($subcount == 1 || $subcountEx == 1){
            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $userid)
            );
        }
            $this->Flash->success(__("Successfully stopped user's subscription."));

            return $this->redirect($this->referer());
        }
    }

    public function addsub($respdata = null, $subType = 'monthly') {

        $result = $this->paystackcallback($respdata, $subType);
    }

    /**
     * View method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $subscription = $this->Subscriptions->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('subscription', $subscription);
        $this->set('cart', $cart);
        $this->set('_serialize', ['subscription']);
    }

    /**
     * Confirm Payment from Paystack
     */
    private function paystackcallback($reference, $subType = 'monthly') {
        
        $conn = ConnectionManager::get('default');
         
        $respdata = $this->Paystack->verifytransaction($reference);
     //   (array) $respdata';
        //$respdata = json_decode($response->body, true)
        //check if status is true, else redirect with error message
        if (!$respdata['status']) 
        {
            $errmsg = $respdata['message'];
            $this->Flash->error(__('Payment verification error ' . $respdata['message']));
            return $this->redirect(['controller' => 'plans', 'action' => 'subscribe']);
        }
        $this->loadModel('Subscriptions');
        $yesterday = date('Y-m-d',strtotime("-1 days"));
        $userId = $this->Auth->user('id');
        $update = $conn->execute("UPDATE subscriptions SET subscription_status = 'disable', expiry = '$yesterday' WHERE user_id = $userId");
        
        // print_r($respdata);exit;
        $subscription = $this->Subscriptions->newEntity();

        $formdata = [];
        if ($subType === 'yearly') {
            $expires = date('Y-m-d H:i:s', strtotime("+2 day", strtotime("+1 year", strtotime($respdata['data']['transaction_date']))));
        } else {
            $expires = date('Y-m-d H:i:s', strtotime("+2 day", strtotime("+1 month", strtotime($respdata['data']['transaction_date']))));
        }

       //echo $respdata['data']['plan'];exit;
        $formdata['customer_id'] = $respdata['data']['customer']['customer_code'];
        $formdata['plan_id'] = $respdata['data']['plan'];
        // $formdata['subscription_code'] = '';
        $formdata['user_id'] = $this->Auth->user('id');
        $form = $this->Subscriptions->Plans->find('all', ['limit' => 1])->where(['plan_code' => $respdata['data']['plan']])->toArray();
        $formdata['level_id'] = isset($form[0]['id'])?$form[0]['id']:"PLN_qys67kh1z1w0558";
        $formdata['status'] = 'active';
        $formdata['subscription_status'] = 'active';
        //$formdata['tnx_reference'] = $respdata['data']['reference'];
        $formdata['created'] = date('Y-m-d H:i:s', strtotime($respdata['data']['transaction_date']));
        $formdata['expiry'] = $expires;
        //check if user already have a value in subscription db before giving value
        $check = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id']]);
        $checked = $check->first();

        //        check if same plan by user and update renewal period
        $checkrenewal = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id'], 'user_id' => $formdata['user_id']]);
        $checkedrn = $checkrenewal->first();
      // exit;
        if (is_null($checked) && $respdata['data']['status'] === 'success')
        {
            //save subscription
            $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
             
    
            if ($this->Subscriptions->save($subscribe)) 
            {

                
                
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
            

                 $this->Flash->success(__('Your Payment has been verified and subscription approved'));

            }
            return $this->redirect(['action' => 'index']);
        } elseif (null !== $checkedrn && $respdata['data']['status'] === 'success') {
            //renew subscription
            $formdata['expiry'] = $expires;
            $subscribe = $this->Subscriptions->patchEntity($checkedrn, $formdata);
            if ($this->Subscriptions->save($subscribe)) {
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
                $this->Flash->success(__('Your Payment has been verified and subscription renewed'));
                return $this->redirect(['action' => 'index']);
            }
        } elseif (null === $checkedrn && $respdata['data']['status'] === 'success') {
            //upgrade or downgrade subscription
            $formdata['expiry'] = $expires;
            $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
            if ($this->Subscriptions->save($subscribe)) {
                  $this->Users->updateAll(
                 array('expired' => 0),
                 array('id' => $this->Auth->user('id'))
             );
                $this->Flash->success(__('Your Payment has been verified and subscription plan changed'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->Flash->error(__('Your subscription failed. Try again or contact the admin.'));
            return $this->redirect(['controller' => 'plans', 'action' => 'subscribe']);
        }

        return $this->redirect(['action' => 'index']);
        //exit;
       /* //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client
        if ($respdata['data']['status'] == "success") {
            $this->Flash->success(__('Your Payment has been verified and subscription approved'));
            $result = $this->_add($respdata);
            //return $this->redirect(['action' => 'index']);

        }
        exit;
        */
    }

    /**
     * _Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    protected function _add($respdata = null) {

        $subscription = $this->Subscriptions->newEntity();
        $formdata = [];
        $formdata['user_id'] = $this->Auth->user('id'); //get users id
        $formdata['customer_id'] = $respdata['data']['customer']['customer_code'];
        $formdata['plan_id'] = $respdata['data']['plan'];
        $formdata['email'] = $respdata['data']['customer']['email'];
        $form = $this->Subscriptions->Plans->find('all', ['limit' => 1])->where(['plan_code' => $respdata['data']['plan']])->toArray();
        $formdata['level_id'] = $form[0]['id'];
        $formdata['tnx_reference'] = $respdata['data']['reference'];
        $formdata['created'] = date('Y-m-d', strtotime($respdata['data']['transaction_date']));
        $formdata['status'] = 'disable';
        $formdata['expiry'] = date('Y-m-d', strtotime("+2 day", strtotime("+1 month", strtotime($respdata['data']['transaction_date']))));
        //check if user already have a value in subscription db before giving value
        $check = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id']]);
        $checked = $check->first();
//
//        check if same plan by user and update renewal period
        $checkrenewal = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id'], 'user_id' => $formdata['user_id']]);
        $checkedrn = $checkrenewal->first();
          //
        if (is_null($checked) && $respdata['data']['status'] === 'success') {
            $this->Flash->success(__('Your Payment has been verified and subscription approved'));
            return $this->redirect(['action' => 'index']);
            //save subscription
            $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
            if ($this->Subscriptions->save($subscribe)) {

            }
        } elseif (null !== $checkedrn && $respdata['data']['status'] === 'success') {
            //renew subscription
            $formdata['expiry'] = date('Y-m-d', strtotime("+2 day", strtotime("+1 month", strtotime($respdata['data']['transaction_date']))));
            $subscribe = $this->Subscriptions->patchEntity($checkedrn, $formdata);
            if ($this->Subscriptions->save($subscribe)) {
                $this->Flash->success(__('Your Payment has been verified and subscription renewed'));
                return $this->redirect(['action' => 'index']);
            }
        } elseif (null === $checkedrn && $respdata['data']['status'] === 'success') {
            //upgrade or downgrade subscription
            $formdata['expiry'] = date('Y-m-d', strtotime("+2 day", strtotime("+1 month", strtotime($respdata['data']['transaction_date']))));
            $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
            if ($this->Subscriptions->save($subscribe)) {
                $this->Flash->success(__('Your Payment has been verified and subscription plan changed'));
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->Flash->error(__('Your subscription failed. Try again or contact the admin.'));
            return $this->redirect(['controller' => 'plans', 'action' => 'subscribe']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $subscription = $this->Subscriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subscription = $this->Subscriptions->patchEntity($subscription, $this->request->getData());
            if ($this->Subscriptions->save($subscription)) {
                $this->Flash->success(__('The subscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subscription could not be saved. Please, try again.'));
        }
        $users = $this->Subscriptions->Users->find('list', ['limit' => 200]);
        $this->set(compact('subscription', 'users', 'cart'));
        $this->set('_serialize', ['subscription']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $subscription = $this->Subscriptions->get($id);
        if ($this->Subscriptions->delete($subscription)) {
            $this->Flash->success(__('The subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The subscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * webhook method
     * integrated to paystack api
     */
    public function webhookPaystackSubscription() {

        // only a post with paystack signature header gets our attention
        if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER))
            exit();

        // Retrieve the request's body
        $input = @file_get_contents("php://input");
        define('PAYSTACK_SECRET_KEY', 'sk_live_c76e9a8953ad69a3d7271d824389c46c38f5ac5f');

        // validate event do all at once to avoid timing attack
        if ($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))
            exit();

        http_response_code(200);
        // parse event (which is json string) as object
        // Do something - that will not take long - with $event
        $event = json_decode($input);
        $this->log('Webhook --- ');
        $this->log($event);
        switch ($event->event) {
            case 'subscription.create':
                $this->createSubscription($event);
                break;
            case 'charge.success':
                $this->chargeSubscription($event);
                break;
            case 'invoice.payment_failed':
                $this->invoiceFailSubscription($event);
                break;
        }
        http_response_code(200);
        exit();
    }

    public function createSubscription($event = null) {
        $this->loadModel('Users');
        $respdata = $this->Paystack->fetchSubscription($event->data->subscription_code);
        $subscriptionStartDate = date("Y-m-d", strtotime($event->data->created_at));
        $users = $this->Users->find()->select('id')->where(['email' => $respdata['data']['customer']['email']])->first();
        $subscription = $this->Subscriptions->newEntity();
        $formdata = [];
        $formdata['user_id'] = $users->id; //get users id
        $formdata['subscription_code'] = $event->data->subscription_code;
        $formdata['customer_id'] = $event->data->customer->customer_code;
        $formdata['plan_id'] = $event->data->plan->plan_code;
        $form = $this->Subscriptions->Plans->find('all')->where(['plan_code' => $event->data->plan->plan_code])->first();
        $formdata['level_id'] = $form->id;
        $formdata['tnx_reference'] = 'SUB_q9jxdoz27xmeyqb';
        $formdata['status'] = 'active';
        $formdata['subscription_status'] = 'active';
        $formdata['created'] = $subscriptionStartDate;
        $nextPaymentDate = date("Y-m-d", strtotime("+2 day", strtotime($respdata['data']['next_payment_date'])));
        $formdata['expiry'] = $nextPaymentDate;
        $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
        if ($this->Subscriptions->save($subscribe)) {
            return true;
        } else {
            return false;
        }
    }

    public function chargeSubscription($event = null) {
        $subscription = $this->Subscriptions->find()->select(['expiry', 'subscription_code'])->where(['plan_id' => $event->data->plan->plan_code,
                    'customer_id' => $event->data->customer->customer_code])->first();

        if (!empty($subscription->subscription_code)) {
            $respdata = $this->Paystack->fetchSubscription($subscription->subscription_code);
            if (!empty($respdata)) {
                $nextPaymentDate = date("Y-m-d", strtotime("+2 day", strtotime($respdata['data']['next_payment_date'])));
                $this->Subscriptions->updateAll(['expiry' => $nextPaymentDate], ['plan_id' => $event->data->plan->plan_code, 'customer_id' => $event->data->customer->customer_code]);
            }
        }

        return true;
    }

    public function invoiceFailSubscription($event = null) {

        $this->Subscriptions->updateAll(['subscription_status' => 'disable', 'updated_at' => date("Y-m-d H:i:s")], ['plan_id' => $event->data->plan->plan_code, 'customer_id' => $event->data->customer->customer_code, 'subscription_code' => $event->data->customer->customer_code]);
        $respdata = $this->Paystack->fetchSubscription($subscription->subscription_code);

        $data['code'] = $subscription->subscription_code;
        $data['token'] = $respdata['data']['email_token'];
        $this->Paystack->cancelSubscription($data);

        return true;
    }

}
