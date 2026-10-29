<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Mixmasterings Controller
 *
 * @property \App\Model\Table\MixmasteringsTable $Mixmasterings
 *
 * @method \App\Model\Entity\Mixmastering[] paginate($object = null, array $settings = [])
 */
class MixmasteringsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->loadModel(Carts);
        $this->loadModel('Users');
        $cart = $this->Carts->getCount();

        $this->paginate = [
            'contain' => ['Users', 'Genres']
        ];
        $display = 'show';
        $id = $this->Auth->user('id');
        $query = $this->Mixmasterings->find('all')->where(['user_id' => $id]);
        $mixmasterings = $this->paginate($query);
        $userProfile = $this->Users->find('all', [
                    'contain' => [],
                    'conditions' => ['Users.aka' => $id]
                ])->first();
        $this->set(compact('mixmasterings', 'display', 'cart'));
        $this->set('_serialize', ['mixmasterings']);
    }

    public function getAllMixers() {

        $this->autoRender = false;

        $resultsA = [];

        $name = $this->request->query['term'];
        $date = date('Y-m-d');


        $results1 = $this->Mixmasterings->find('all', [
            'contain' => ['Users', 'Subscriptions']
                //'fields' => ['DISTINCT Users.fullname'], 
//            'conditions' => [
//               // 'Stores.name LIKE' => $name . '%',
//                //'Subscriptions.expiry' => $date,
//                'OR' => array(
//            array('plan_code' => 'PLN_1aolpmm4rlzsv19'),
//            array('plan_code' => 'PLN_59gb0gsmu5ace70'),
//        )
//            ]
        ]);
        // debug($results1);



        foreach ($results1 as $result) {
            $resultsA[] = $result['DISTINCT Users']['fullname'];
        }

        //echo json_encode($resultsA);
    }

    /**
     * Listing method
     *
     * @return \Cake\Http\Response|void
     */
    public function listing() {
        $this->loadModel('PageBanner');
        $this->loadModel('Users');
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $cart = $this->Carts->getCount();

        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $this->paginate = [
            'contain' => []
        ];
       
        if($this->request->query['mixer']){
         $name = $this->request->query['mixer'];


           $query = $this->Users->find('all', [
            'fields' => ['Users.fullname','Users.id','Users.aka', 'Users.photo'],
            'conditions' => [
                  'OR' => [
                 'Users.fullname LIKE' => $name . '%',
                 'Users.aka LIKE' => $name . '%',
                ],
            'Users.role'=> 'user',
            ]
        ]);
        $searchusers= $this->paginate($query);
        }
     //   print_r($searchusers);
        
        

        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'limit' => 12,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();

        $display = 'show';
        $date = date('Y-m-d');

        $query = $this->Mixmasterings->find();
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_fl30uhkrfetgdyu'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
                            })
            ;
        });
        $query->contain(['Users' => ['Likes' => function ($y) use ($query) {
                    return $y
                                    ->select(['user_id'])
                                    ->select(['type' => $query->func()->count('type')])
                                    ->where(['type' => 'mm'])
                                    ->group(['group' => '`Likes`.`id`']);
                }],
            'Genres']);

        $mixmasterings = $this->paginate($query);

        $topArtists = $this->Mixmasterings->find();
        $topArtists->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_fl30uhkrfetgdyu'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
                            });
        });
        $topArtistes = $topArtists->contain('Users')->where(['featured' => 1])->limit(5)->all();
        //debug($mixmasterings);
        $title = "Sound Engineers In Africa | Book A Sound Engineer | Get Professional African Mixing And Mastering - AmplifiHub Mixing And Mastering Hub";
        $description = "Get professional African mixing and mastering / sound engineering services here on AmplifiHub. Check us out today and have no regrets! We make good African music";
        $AmpKeyword = "Mixing and mastering, Mixing music in Africa, Mastering music in Africa, Sound engineering, Sound engineers, audio engineering, audio engineers, audio mixing, audio mastering";
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 3]])->first();
        $this->set(compact('AmpKeyword', 'title', 'description', 'mixmasterings', 'display', 'cart', 'promoted', 'banner', 'topArtistes','searchusers'));
        $this->set('_serialize', ['mixmasterings']);
    }

    /**
     * Profile method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function profile() {
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $cart = $this->Carts->getCount();
        $conn = ConnectionManager::get('default');
        //exit;
        $mmrequester = $this->Mixmasterings->newEntity();
     //   exit;
        
        $mixeruser_id = $this->request->getparam('user_id');
        $user_id = $this->Auth->user('id');
       
        $beat_sample = $this->Mixmasterings->find()->where(['user_id' => $mixeruser_id])->contain(['genres'])->first();

        //Producers Rating and counting of number of raters
        $this->loadmodel('Ratings');
        $query = $this->Ratings->find('all', ['conditions' => ['user_id' => $mixeruser_id]]);

        $countraters = $query->count();
        $ratingsum = $query->select(['rating' => $query->func()->sum('rating')])->first();

        $rating = @number_format($ratingsum['rating'] / $countraters);
        // if ($this->request->is('post')) {
        //   $this->request->data['user_id'] = $mixeruser_id;
        //   $this->request->data['requester_id'] = $user_id;
        //   $this->request->data['status'] = 'pending';
        //     $mmrequester = $this->Mixmasterings->patchEntity($mmrequester, $this->request->getData());
        //     //debug($mmrequester);
        //     if ($this->Mixmasterings->save($mmrequester)) {
        //       $this->loadModel('Users');
        //       $user = $this->Users->find()->where(['Users.id'=>$mmrequester->requester_id])->first();
        //       $user['service'] = 'Mixing and Mastering';
        //       $this->getMailer('User')->send('requests',[$user]);
        //         $this->Flash->success(__('Your request has been placed.'));
        //         return $this->redirect(['action' => 'requestedgigs']);
        //     }
        //     $this->Flash->error(__('The request could not be placed. Please, try again.'));
        // }
        $user = $this->Mixmasterings->Users->find('all', ['conditions' => ['Users.id' => $mixeruser_id]])->first();
        $countcomment = $this->Mixmasterings->Users->Comments->find('all', ['conditions' => ['Comments.Commentee_id' => $mixeruser_id, 'Comments.type' => 'mm']])->count();
        $display = 'show';
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => array ('Users.expired' => 0, 'OR' => array(array('Stores.promoted' => 'yes'),array('Stores.promote_permission' => 1),)),
            'limit' => 6,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();
        
          $name = $this->Users->find('all', [
          
          'conditions' => ['Users.id' => $mixeruser_id]
          
      ]);
      
      $row=$name->first();
      $title="Get Pro Mixing and Mastering On AmplifiHub - Hire ".$row->aka;
      
        /*$getCount = $conn->execute("SELECT * FROM user_profileview WHERE user_id = $mixeruser_id")->fetchAll('assoc');
        // print_r($getCount);exit;
        foreach($getCount as $gc){
            $getC = $gc['count'];
            // echo $getC;exit;
            $update = $getC + 1;
        $getCount = $conn->execute("UPDATE user_profileview SET count = $update WHERE user_id = $mixeruser_id");
        }*/
        
        $conn->execute("INSERT INTO user_profileview (count, user_id) VALUES(1, $mixeruser_id)");
        
        //debug($beat_sample);
        $this->set(compact('mmrequester', 'user', 'mixeruser_id', 'countcomment', 'countraters', 'rating', 'beat_sample', 'display', 'cart', 'promoted', 'title'));
        $this->set('_serialize', ['mmrequester']);
    }
    /**
     * Admin method
     *
     * @return \Cake\Http\Response|void
     */
    public function admin() {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $this->paginate = [
            'contain' => ['Users', 'Genres']
        ];
        $mixmasterings = $this->paginate($this->Mixmasterings);
        //debug($mixmasterings);
        $this->set(compact('mixmasterings', 'cart'));
        $this->set('_serialize', ['mixmasterings']);
    }

    /**
     * Profile method
     *
     * @param string|null $id Mixmastering id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*     * public function profile($id = null)
      {
      //$this->loadModel('Users');
      //$mixmastering = $this->Users->get($id, [
      //  'contain' => ['MixMasterings'=>['Genres']]
      //]);

      $this->set('mixmastering', $mixmastering);
      $this->set('_serialize', ['mixmastering']);

      } */

    /**
     * View method
     *
     * @param string|null $id Mixmastering id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $mixmastering = $this->Mixmasterings->get($id, [
            'contain' => ['Users', 'Genres']
        ]);

        $this->set('mixmastering', $mixmastering);
        $this->set('cart', $cart);
        $this->set('_serialize', ['mixmastering']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $display = "hide";

        $mixmastering = $this->Mixmasterings->find()->where(['User_id' => $this->Auth->user('id')])->first();

        //debug($query);
        $substatus = null;


        //check if user subscribe as an artiste and account still active
        $check = $this->Mixmasterings->Subscriptions->find('all')->where(['Subscriptions.user_id' => $this->Auth->user('id'), 'Subscriptions.expiry >' => Time::Now()])->contain(['plans' => function($q) {
                return $q
                                ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_fl30uhkrfetgdyu'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
            }]);
        $checkexpiry = $check->first();

        //if not null save else warn user to behave and subscribe
        if (!$check->isEmpty()) {
            # code...
            $substatus = 'active';
        } elseif (!$check->isEmpty() && $checkexpiry['expiry'] < Time::Now()) {
            # code...
            $this->Flash->error(__('You need to resubscribe because your subscription has expired'));
            //return $this->redirect('/subscribe');
        } else {
            # code...
            $this->Flash->error(__('You need to subscribe to be able to set up a Mixing and Mastering profile'));
            //return $this->redirect('/subscribe');
        }
    
        $title="Upload Mixing and Mastering Samples";
        $genres = $this->Mixmasterings->Genres->find('list', ['limit' => 200]);
        $this->set(compact('mixmastering', 'genres', 'display', 'substatus', 'cart', 'title'));
        $this->set('_serialize', ['mixmastering']);
    }

    public function addMixmastering() {
        $this->autoRender = false;
        $mixmastering = $this->Mixmasterings->find()->where(['User_id' => $this->Auth->user('id')])->first();

        //debug($query);
        $substatus = null;


        //check if user subscribe as an artiste and account still active
        $check = $this->Mixmasterings->Subscriptions->find('all')->where(['Subscriptions.user_id' => $this->Auth->user('id'), 'Subscriptions.expiry >' => Time::Now()])->contain(['plans' => function($q) {
                return $q
                                ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_fl30uhkrfetgdyu'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
            }]);
        $checkexpiry = $check->first();

        //if not null save else warn user to behave and subscribe
        if (!$check->isEmpty()) {
            # code...
            $substatus = 'active';
            if ($this->request->is('ajax')) {
                $user_data = $this->request->getData();
                $user_data['user_id'] = $this->Auth->user('id');
                $user_data['work_status'] = 'in progress';
                $user_data['payment_status'] = 'unpaid';
                if ((is_null($mixmastering))) {
                    $mixmastering = $this->Mixmasterings->newEntity();
                }
                $mixmastering = $this->Mixmasterings->patchEntity($mixmastering, $user_data);

                if ($this->Mixmasterings->save($mixmastering)) {
                    echo json_encode(['error' => "no", 'message' => 'Mixing and Mastering profile has been saved.']);
                    //$this->Flash->success(__(' Mixing and Mastering profile has been saved.'));
                    //return $this->redirect(['action' => 'add']);
                } else {

                    echo json_encode(['validation' => $mixmastering->errors()]);
                }
            }
        } elseif (!$check->isEmpty() && $checkexpiry['expiry'] < Time::Now()) {
            # code...
            echo json_encode(['error' => "yes", 'message' => 'You need to resubscribe because your subscription has expired']);
            // $this->Flash->error(__('You need to resubscribe because your subscription has expired'));
            //return $this->redirect('/subscribe');
        } else {
            # code...
            echo json_encode(['error' => "yes", 'message' => 'You need to subscribe to be able to set up a Mixing and Mastering profile']);

            // $this->Flash->error(__('You need to subscribe to be able to set up a Mixing and Mastering profile'));
            //return $this->redirect('/subscribe');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Mixmastering id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $mixmastering = $this->Mixmasterings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mixmastering = $this->Mixmasterings->patchEntity($mixmastering, $this->request->getData());
            if ($this->Mixmasterings->save($mixmastering)) {
                $this->Flash->success(__('The mixmastering has been saved.'));

                return $this->redirect(['action' => 'edit', $id]);
            }
            $this->Flash->error(__('The mixmastering could not be saved. Please, try again.'));
        }
        $users = $this->Mixmasterings->Users->find('list', ['limit' => 200]);
        $genres = $this->Mixmasterings->Genres->find('list', ['limit' => 200]);
        $this->set(compact('mixmastering', 'users', 'genres', 'cart'));
        $this->set('_serialize', ['mixmastering']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mixmastering id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $mixmastering = $this->Mixmasterings->get($id);
        if ($this->Mixmasterings->delete($mixmastering)) {
            $this->Flash->success(__('The mixmastering has been deleted.'));
        } else {
            $this->Flash->error(__('The mixmastering could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function featured($id = null, $status = 0) {

        if ($this->request->is('post')) {



            $articlesTable = TableRegistry::get('Mixmasterings');
            $article = $articlesTable->get($id); // Return article with id 12

            $article->featured = $status;
            $articlesTable->save($article);

            return $this->redirect(['action' => 'featured']);
        }

        $topArtistes = $this->Mixmasterings->find()->contain('Users')->where(['featured' => 1])->all();
        $this->paginate = [
            'contain' => [
                'Users',
            //'Booked'
            ]
        ];
        $query = $this->Mixmasterings->find('all');
        $artistes = $this->paginate($query);
        // print_r($artistes);
        //die();

        $this->set(compact('artistes', 'topArtistes'));
    }

}
