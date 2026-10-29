<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;

/**
 * Withdrawals Controller
 *
 * @property \App\Model\Table\WithdrawalsTable $Withdrawals
 *
 * @method \App\Model\Entity\Withdrawal[] paginate($object = null, array $settings = [])
 */
class WithdrawalsController extends AppController
{
  use MailerAwareTrait;

  /**
   * Admin method
   *
   * @return \Cake\Http\Response|void
   */
  public function admin()
  {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();
      $this->paginate = [
          'contain' => ['Users']
      ];
      $withdrawals = $this->paginate($this->Withdrawals);
      $this->set(compact('withdrawals','cart'));
      $this->set('_serialize', ['withdrawals']);
  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
            $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $id = $this->Auth->user('id');
        $this->paginate = [
            'conditions'=> ['user_id'=>$id],
            'contain' => ['Users']
        ];
        $withdrawals = $this->paginate($this->Withdrawals);

        $this->set(compact('withdrawals','cart'));
        $this->set('_serialize', ['withdrawals']);
    }

    /**
     * View method
     *
     * @param string|null $id Withdrawal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $withdrawal = $this->Withdrawals->get($id, [
            'contain' => ['Users'=>['Accounts']]
        ]);
        //debug($withdrawal->user['accounts']);


        $this->set('withdrawal', $withdrawal);
        $this->set('cart', $cart);
        $this->set('_serialize', ['withdrawal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
            $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $userid = $this->Auth->user('id');
        $this->loadModel('Accounts');
        $this->loadModel('Bankbalances');
        $bankbal = $this->Bankbalances->find()->select(['Bankbalances.balance','Bankbalances.id'])->where(['Bankbalances.User_id'=>$userid])->first();
        $account = $this->Accounts->find()->where(['Accounts.User_id'=>$userid])->first();



        $withdrawal = $this->Withdrawals->newEntity();
        if ($this->request->is('post')) {
          $this->request->data['user_id'] = $this->Auth->user('id');
            $withdrawal = $this->Withdrawals->patchEntity($withdrawal, $this->request->getData());

            //check account balance of user before withdrawing
            if ($bankbal->balance < $withdrawal['amount']) {
              // code...
              $this->Flash->error(__('You don\'t have enough money in your account to withdraw this amount'));
            } else {
              // code...
              if($bankbal->balance !== null){
                   if ($this->request->is(['post', 'put'])) {
                if ($this->Withdrawals->save($withdrawal)) {
                  $nubal['balance'] = $bankbal->balance - $withdrawal['amount'];
                  
                  $nubalsave = $this->Bankbalances->patchEntity($bankbal,$nubal);
                  
                  if($this->Bankbalances->save($nubalsave))

                //   $user['email'] =  $this->Auth->user('email');
                //   $user['fullname'] =  $this->Auth->user('fullname');
                //   $user['firstname'] =  $this->Auth->user('firstname');
                //   $user['lastname'] =  $this->Auth->user('lastname');
                //   $user['amount'] = $withdrawal['amount'];
                  
                  $user_data['firstname'] = $this->Auth->user('firstname');
                  $user_data['lastname'] = $this->Auth->user('lastname');
                  $user_data['fullname'] = $this->Auth->user('fullname');
                  $user_data['accounttype'] = $this->Auth->user('accounttype');
                  $user_data['amount'] = $withdrawal['amount'];
                  
                 
                  $user_data['bank'] = $account->bank_name;
                  $user_data['accountname'] = $account->account_name;
                  $user_data['accountnumber'] = $account->account_number;
                   //debug($user_data);exit;
                  $email = new Email('noreply');
                    $email->to($this->Auth->user('email'))
                            ->template('Panel.withdrawalapproved', 'Panel.withdrawalapproved')
                            ->viewVars($user_data)
                            ->emailFormat('html')
                            //->sender('noreply@amplifihub.com', 'AmplifiHub')
                            ->sender('noreply@amplifihub.com', 'AmplifiHub')
                            ->from('noreply@amplifihub.com', 'AmplifiHub')
                            ->subject('Withdrawal Notification');
                    $sent = $email->send();
                  
                  //debug(json_decode(json_encode($user))); to convert array to object easily
                //   $this->getMailer('User')->send('withdrawal',[$user]);
                //   $this->getMailer('User')->send('withdrawalnotifyadmin');
                    $this->Flash->info(__('Your withdrawal is under processing.'));

                    return $this->redirect('/withdrawal/#listwithdrawal');
                }
                   }
                $this->Flash->error(__('The withdrawal could not be completed. Please, try again.'));
              }
              $this->Flash->error(__('You can not withdrawal because you have no fund in your account.'));
            }
        }
        //$users = $this->Withdrawals->Users->find('list', ['limit' => 200]);

        $title="Withdraw Money";
        $this->set(compact('withdrawal','bankbal','cart','account', 'title'));
        $this->set('_serialize', ['withdrawal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Withdrawal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

            $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $withdrawals = $this->Withdrawals->get($id, [
            'contain' => ['Users'=>['Accounts']]
        ]);
        $user = [];
        $user['role'] = $this->Auth->user('role');

        if ($this->request->is(['patch', 'post', 'put']) && $this->isAuthorize($user)) {
            $withdrawal = $this->Withdrawals->patchEntity($withdrawals, $this->request->getData());
            if ($this->Withdrawals->save($withdrawal)) {
              //debug($withdrawal);exit;
              
              $user_data['firstname'] = $withdrawal->user->firstname;
              $user_data['lastname'] = $withdrawal->user->lastname;
              $user_data['fullname'] = $withdrawal->user->fullname;
              $user_data['accounttype'] = $withdrawal->user->accounttype;
              $user_data['amount'] = $withdrawal->amount;
              $user_data['bank'] = $withdrawal->user->accounts[0]->bank_name;
              $user_data['accountname'] = $withdrawal->user->accounts[0]->account_name;
              $user_data['accountnumber'] = $withdrawal->user->accounts[0]->account_number;
              
              $email = new Email('noreply');
                $email->to($withdrawal->user->email)
                        ->template('Panel.withdrawalapproved', 'Panel.withdrawalapproved')
                        ->viewVars($user_data)
                        ->emailFormat('html')
                        //->sender('noreply@amplifihub.com', 'AmplifiHub')
                        ->sender('noreply@amplifihub.com', 'AmplifiHub')
                        ->from('noreply@amplifihub.com', 'AmplifiHub')
                        ->subject('Withdrawal Notification');
                $sent = $email->send();
              
              //$this->getMailer('User')->send('withdrawalapproved', [$withdrawal]);
                $this->Flash->info(__('The withdrawal is under processing.'));

                return $this->redirect(['action' => 'edit',$id]);
            }
            //debug($this->Withdrawals->errors());
            $this->Flash->error(__('The withdrawal could not be saved. Please, try again.'));
        }
        $users = $this->Withdrawals->Users->find('list', ['limit' => 200]);
        $this->set(compact('withdrawals', 'users','cart'));
        $this->set('_serialize', ['withdrawal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Withdrawal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->loadModel('Withdrawals');
        $this->loadModel('Bankbalances');
        $this->request->allowMethod(['post', 'delete']);
        $withdrawal = $this->Withdrawals->get($id);
        //echo $id;exit;
        
        //withdrawal
        $with = $this->Withdrawals->find('all', array(
        'conditions' => array('Withdrawals.id' => $id)
    ));
        $row = $with->first();
        $userid=$row->user_id;
        $amount=$row->amount;
        
         $totalAmount = $this->Bankbalances->find('all', array(
        'conditions' => array('Bankbalances.user_id' => $userid)
    ));
        $row2 = $totalAmount->first();
        $userAmount=$row2->balance;
        
        $updatedAmount=$amount+$userAmount;
        
        $this->Bankbalances->updateAll(
            array('balance' => $updatedAmount),
            array('user_id' => $userid)
        );
        
        //exit;
        
        if ($this->Withdrawals->delete($withdrawal)) {
            $this->Flash->success(__('The withdrawal has been deleted.'));
        } else {
            $this->Flash->error(__('The withdrawal could not be deleted. Please, try again.'));
        }

        return  $this->redirect('/withdrawal/#listwithdrawal');
    }
}
