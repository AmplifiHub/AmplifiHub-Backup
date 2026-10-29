<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use function GuzzleHttp\debug_resource;


/**
 * Membershiplevels Controller
 *
 * @property \App\Model\Table\SubscriptionsTable $Subscriptions
 *
 * @method \App\Model\Entity\Subscriptions[] paginate($object = null, array $settings = [])
 */
class SubscriptionsController extends AppController
{


  public function initialize()
    {
      parent::initialize();
      $this->loadComponent('Paystack');

    }

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
            'contain' => ['Users','Plans']
        ];
        $id = $this->Auth->user('id');
        $query = "";

        if($id == 1){
        $query = $this->Subscriptions->find('all');
        }else if($id > 1){

        $query = $this->Subscriptions->find('all')->where(['user_id' => $id]);
        }



        $subscriptions = $this->paginate($query);

        //debug($subscriptions);

        $usersquery = $this->Subscriptions->find('all',[
            'fields' => array('Subscriptions.id','Users.email','Plans.name'),
            'contain' => ['Users','Plans'],
            'conditions' => [
                'Users.id > ' => 1
            ]
        ]);

        $users = $usersquery->toArray();

        $plansquery = $this->Plans->find('all',[
            'fields' => array('Plans.id','Plans.name')
        ]);

        $plans = $plansquery->toArray();

     // debug($users);

        $this->set(compact('subscriptions','cart','users','plans'));
        $this->set('_serialize', ['subscriptions']);
    }

    public function changeSub(){
          $this->autoRender = false;

        $userId = $this->request->data['userId'];
        $levelId = $this->request->data['levelId'];

       // debug($userId);
        $date = date('Y-m-d');
        $expirydate = date('Y-m-d', strtotime('+1 years'));

        //debug($expirydate);



       $subscription_table = TableRegistry::get('subscriptions');
           $subscription = $subscription_table->get($userId);
           $subscription->level_id = $levelId;
            $subscription->created = $date;
            $subscription->expiry = $expirydate;

            if($subscription_table->save($subscription)){
                  $this->Flash->success(__("Successfully updated user's package ."));
                  return $this->redirect($this->referer());

            }



    }

    public function stopSubscription($id = null){

        $this->request->allowMethod(['post', 'delete']);

        $subscription_table = TableRegistry::get('subscriptions');
           $subscription = $subscription_table->get($id);


            $subscription->expiry = date('Y-m-d',strtotime("-1 days"));

            if($subscription_table->save($subscription)){
                  $this->Flash->success(__("Successfully stopped user's subscription."));
                  return $this->redirect($this->referer());

            }

    }

    public function addsub($respdata = null){
        $result = $this->paystackcallback($respdata);
    }

    /**
     * View method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
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
    private function paystackcallback($reference){

      $respdata = $this->Paystack->verifytransaction($reference);

      //check if status is true, else redirect with error message
     if (!$respdata['status']) {
        $errmsg = $respdata['message'];
        $this->Flash->error(__('Payment verification error '.$respdata['message']));
        return $this->redirect(['controller' => 'plans','action' => 'subscribe']);
    }

    //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client
    if ($respdata['data']['status'] == "success") {

          //give user value/save into subscription
          $result = $this->_add($respdata);
    }

  }

    /**
     * _Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    protected function _add($respdata = null)
    {

        $subscription = $this->Subscriptions->newEntity();


          $formdata = [];
          $formdata['user_id'] = $this->Auth->user('id'); //get users id
          $formdata['email'] = $respdata['data']['customer']['email'];
          $form = $this->Subscriptions->Plans->find('all', ['limit' => 1])->where(['plan_code' => $respdata['data']['plan']])->toArray();
          $formdata['level_id'] = $form[0]['id'];
          $formdata['tnx_reference'] = $respdata['data']['reference'];
          $formdata['created'] = date('Y-m-d',strtotime($respdata['data']['transaction_date']));
          $formdata['status'] = 'active';
          $formdata['expiry'] = date('Y-m-d',strtotime("+1 month",strtotime($respdata['data']['transaction_date'])));


          //set expiry date
         // $trans_date = strtotime($respdata['data']['transaction_date']);
          //$expiry_date = strtotime("+1 month", $trans_date);
          //$formdata['expiry'] = date('Y-m-d', $expiry_date);

          //check if user already have a value in subscription db before giving value
          $check = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id']]);
          $checked = $check->first();

          //check if same plan by user and update renewal period
          $checkrenewal = $this->Subscriptions->find('all')->where(['level_id' => $form[0]['id'], 'user_id' => $formdata['user_id']]);
          $checkedrn = $checkrenewal->first();

          if(is_null($checked) && $respdata['data']['status'] === 'success'){
            //save subscription
            $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
            if ($this->Subscriptions->save($subscribe)) {
                $this->Flash->success(__('Your Payment has been verified and subscription approved'));
                    return $this->redirect(['action' => 'index']);
                }

           }elseif (null !== $checkedrn && $respdata['data']['status'] === 'success') {
             //renew subscription
             //$trans_date = strtotime($checkedrn->expiry);
            // $expiry_date = strtotime("+1 month", $trans_date);
            $formdata['expiry'] = date('Y-m-d',strtotime("+1 month",strtotime($respdata['data']['transaction_date'])));

             $subscribe = $this->Subscriptions->patchEntity($checkedrn, $formdata);
             if ($this->Subscriptions->save($subscribe)) {
                 $this->Flash->success(__('Your Payment has been verified and subscription renewed'));
                     return $this->redirect(['action' => 'index']);
                 }

           }
           elseif (null === $checkedrn && $respdata['data']['status'] === 'success') {
             //upgrade or downgrade subscription

             //set expiry date
             //$trans_date = strtotime($respdata['data']['transaction_date']);
             //$expiry_date = strtotime("+1 month", $trans_date);
        $formdata['expiry'] = date('Y-m-d',strtotime("+1 month",strtotime($respdata['data']['transaction_date'])));


             $subscribe = $this->Subscriptions->patchEntity($subscription, $formdata);
             if ($this->Subscriptions->save($subscribe)) {
                 $this->Flash->success(__('Your Payment has been verified and subscription plan changed'));
                     return $this->redirect(['action' => 'index']);
                 }

           }
           else{
            $this->Flash->error(__('Your subscription failed. Try again or contact the admin.'));
            return $this->redirect(['controller'=>'plans','action' => 'subscribe']);
          }

    }

    /**
     * Edit method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
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
        $this->set(compact('subscription', 'users','cart'));
        $this->set('_serialize', ['subscription']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
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
    public function webhook(){

        // Retrieve the request's body
        $body = @file_get_contents("php://input");
        $signature = (isset($_SERVER['HTTP_X_PAYSTACK_SIGNATURE']) ? $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] : '');

        /* It is a good idea to log all events received. Add code *
         * here to log the signature and body to db or file       */

        if (!$signature) {
            // only a post with paystack signature header gets our attention
            exit();
        }

        define('PAYSTACK_SECRET_KEY','sk_test_a5f08ca803dfffd53a521bfda552684c2a795539');
        // confirm the event's signature
        if( $signature !== hash_hmac('sha512', $body, PAYSTACK_SECRET_KEY) ){
          // silently forget this ever happened
          exit();
        }

        http_response_code(200);
        // parse event (which is json string) as object
        // Give value to your customer but don't give any output
        // Remember that this is a call from Paystack's servers and
        // Your customer is not seeing the response here at all
        $event = json_decode($body);
        switch($event->event){
            // charge.success
            case 'charge.success':
                // TIP: you may still verify the transaction
            		// before giving value.
                break;
        }
        exit();
    }
}
