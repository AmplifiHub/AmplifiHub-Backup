<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Mailer\Email;

/**
 * Complaints Controller
 *
 * @property \App\Model\Table\ComplaintsTable $Complaints
 *
 * @method \App\Model\Entity\Complaint[] paginate($object = null, array $settings = [])
 */
class ComplaintsController extends AppController
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
            'contain' => ['Users']
        ];
        $complaints = $this->paginate($this->Complaints);

        $this->set(compact('complaints','cart'));
        $this->set('_serialize', ['complaints']);
    }

    /**
     * View method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $complaint = $this->Complaints->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('complaint', $complaint);
        $this->set('_serialize', ['complaint']);
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
      $complaint_id = $this->request->getparam('user_id');
        $complaint = $this->Complaints->newEntity();
        if ($this->request->isAjax('post')) {
          $this->request->data['plaintiff_id'] = $this->Auth->user('id');
            $complaint = $this->Complaints->patchEntity($complaint, $this->request->getData());
            $saved = $this->Complaints->save($complaint);
            $this->loadModel('Users');
            $complainer = $this->Users->find()->where(['id'=>$complaint['plaintiff_id']])->first();
            $complainee = $this->Users->find()->where(['id'=>$complaint['accused_id']])->first();
            switch ($complaint['type']) {
              case 'mm':
                $service = 'Mixing and Mastering';
                break;
              case 'ac':
                  $service = 'Artiste Boooking';
                break;
              case 'sw':
                    $service = 'Song Writer';
                break;
              case 'vd':
                    $service = 'Video Director';
                break;
              default:
                    $service = 'Non';
                break;
            }

            //send email
            $email = new Email('default');
            $email->to('support@amplifihub.com')
            ->template('Panel.complain','Panel.complain')
            ->viewVars(['complainer'=>$complainer['fullname'], 'complainer_email'=>$complainer['email'], 'complainee'=>$complainee['fullname'],'complainee_email'=>$complainee['email'], 'service'=>$service, 'rant'=>$complaint['rant']])
            ->emailFormat('html')
            //->sender($complaint['email'] ,$complaint['fullname'])
            ->from([$complainer['email']])
            ->subject('Amplifihub Client Complaint')
            ->send();
            //debug($complaint);
            if($saved) {
                //return $this->Flash->success(__('The complaint has been saved.'));
                die();
                //return $saved;
            }
            $this->Flash->error(__('The complaint could not be saved. Please, try again.'));
        }
        //$users = $this->Complaints->Users->find('list', ['limit' => 200]);
        $this->set(compact('complaint', 'users','cart'));
        $this->set('_serialize', ['complaint']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
            $this->loadModel(Carts);
        $cart = $this->Carts->getCount();
        
        $complaint = $this->Complaints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $complaint = $this->Complaints->patchEntity($complaint, $this->request->getData());
            if ($this->Complaints->save($complaint)) {
                $this->Flash->success(__('The complaint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The complaint could not be saved. Please, try again.'));
        }
        $users = $this->Complaints->Users->find('list', ['limit' => 200]);
        $this->set(compact('complaint', 'users','cart'));
        $this->set('_serialize', ['complaint']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Complaint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $complaint = $this->Complaints->get($id);
        if ($this->Complaints->delete($complaint)) {
            $this->Flash->success(__('The complaint has been deleted.'));
        } else {
            $this->Flash->error(__('The complaint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
