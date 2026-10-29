<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

/**
 * Songwriters Controller
 *
 * @property \App\Model\Table\SongwritersTable $Songwriters
 *
 * @method \App\Model\Entity\Songwriter[] paginate($object = null, array $settings = [])
 */
class SongwritersController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $this->paginate = [
            'contain' => ['Users']
        ];
        $songwriters = $this->paginate($this->Songwriters);

        $this->set(compact('songwriters', 'cart'));
        $this->set('_serialize', ['songwriters']);
    }

    /**
     * Listing method
     *
     * @return \Cake\Http\Response|void
     */
    public function listing() {
        $this->loadModel('PageBanner');
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        //$this->viewBuilder()->theme('Panel')->layout('songwriter');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $this->paginate = [
        ];
        $display = 'hide';
        $date = date('Y-m-d');

        $query = $this->Songwriters->find();
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['plan_code' => 'PLN_hmvrbggaw811fzb']);
                            });
        });
        $query->contain(['Users' => ['Likes' => function ($y) use ($query) {
                    return $y
                                    ->select(['user_id'])
                                    ->select(['type' => $query->func()->count('type')])
                                    ->where(['type' => 'sw']);
                }]]);
        $songwriters = $this->paginate($query);

        $topArtists = $this->Songwriters->find();
        $topArtists->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['plan_code' => 'PLN_hmvrbggaw811fzb']);
                            });
        });
        $topArtistes = $topArtists->contain('Users')->where(['featured' => 1])->limit(5)->all();
        $title = "Songwriters In Africa | Book A Songwriter | Write African Music - AmplifiHub Songwriters Hub";
        $description = "Get Professional songwriting services in Africa here on AmplifiHub. Check us out today and have no regrets! We make good African music.";
        $AmpKeyword = "Songwriters in Africa, Professional Song writers, Get songwriting services, African songwriting services, Songwriters, Nigerian songwriters, Work with a songwriter, make Nigerian music";
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 6]])->first();
        $this->set(compact('AmpKeyword', 'title', 'description', 'songwriters', 'display', 'cart', 'banner', 'topArtistes'));
        $this->set('_serialize', ['songwriters']);
    }

    /**
     * Profile method
     *
     * @param string|null $id Mixmastering id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function profile($user_id = null) {
        $this->viewBuilder()->setLayout("newdesign");
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $cart = $this->Carts->getCount();

        $profile = $this->Songwriters->newEntity();
        $this->loadModel('Users');
        $mixeruser_id = $this->request->getparam('user_id');
        $id = $this->request->getparam('user_id');
        $user_id = $this->Auth->user('id');


        try {
            $songwriter = $this->Users->get($id, [
                'contain' => ['songwriters']
            ]);
        } catch (\Exception $e) {
            $this->Flash->error('SongWriter\'s profile not found');
            return $this->redirect('/songwriter');
        }

        //Producers Rating and counting of number of raters
        $this->loadmodel('Ratings');
        $query = $this->Ratings->find('all', ['conditions' => ['user_id' => $id]]);

        $countraters = $query->count();
        $ratingsum = $query->select(['rating' => $query->func()->sum('rating')])->first();

        $rating = @number_format($ratingsum['rating'] / $countraters);

        $countcomment = $this->Songwriters->Users->Comments->find('all', ['conditions' => ['Comments.Commentee_id' => $id, 'Comments.type' => 'sw']])->count();

        $jobDescriptions = [
            'Toplining/Songwriting' => 'Toplining/Songwriting',
            'Vocal Features On Track' => 'Vocal Features On Track',
            'Consultation/Strategy' => 'Consultation/Strategy'
        ];
        $display = 'show';


        $user = $this->Songwriters->find('all', ['conditions' => ['user_id' => $id]])->contain(['Users'])->first();
        //debug($user);
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'limit' => 12,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();


        $this->set(compact('jobDescriptions', 'mixeruser_id', 'rating', 'options', 'id', 'user_id', 'songwriter', 'countraters', 'countcomment', 'profile', 'display', 'user', 'cart', 'promoted'));
        $this->set('_serialize', ['songwriter']);
    }

    /**
     * View method
     *
     * @param string|null $id Songwriter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $songwriter = $this->Songwriters->get($id, [
            'contain' => ['Users', 'Songwriters']
        ]);

        $this->set('songwriter', $songwriter);
        $this->set('cart', $cart);
        $this->set('_serialize', ['songwriter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();


        $songwriter = $this->Songwriters->find()->where(['User_id' => $this->Auth->user('id')])->first();
        $substatus = null;

        //check if user subscribe as an artiste and account still active
        $check = $this->Songwriters->Subscriptions->find('all')->where(['Subscriptions.user_id' => $this->Auth->user('id'), 'Subscriptions.expiry >' => Time::Now()])->contain(['plans' => function($q) {
                return $q
                                ->where(['plan_code' => 'PLN_hmvrbggaw811fzb']);
            }]);
        $checkexpiry = $check->first();

        //if not null save else warn user to behave and subscribe
        if (!$check->isEmpty()) {
            $substatus = 'active';
        } elseif (!$check->isEmpty() && $checkexpiry['expiry'] < Time::Now()) {
            # code...
            $this->Flash->error(__('You need to resubscribe because your subscription has expired'));
            //return $this->redirect('/subscribe');
        } else {
            # code...
            $this->Flash->error(__('You need to subscribe to be able to set up a Songwriter profile'));
            //return $this->redirect('/subscribe');
        }



        $this->set(compact('songwriter', 'users', 'substatus', 'cart'));
        $this->set('_serialize', ['songwriter']);
    }

    public function book($id = null) {
        $this->loadModel('Carts');
        $this->loadModel('Swriterequests');
        $cart = $this->Carts->getCount();

        $this->autoRender = false;
        $Swriterequest = $this->Swriterequests->newEntity();
        $user_id = $this->Auth->user('id');
        //save to internal notification module
        $songWriterId = $this->request->data['songwriter_id'];

        if ($this->request->is('post')) {
            $orderid = 'swr' . round(microtime(true));
            $this->request->data['user_id'] = $user_id;
            $this->request->data['songwriter_id'] = $this->request->data['songwriter_id'];
            $this->request->data['status'] = 'pending';
            $this->request->data['orderid'] = $orderid;
            $this->request->data['song_title'] = $this->request->data['song_title'];
            $this->request->data['job_description'] = implode(", ", $this->request->data['job_descriptions']);
            $this->request->data['project'] = $this->request->data['project'];
            $this->request->data['reference_link'] = $this->request->data['reference_link'];


            $swriterequester = $this->Swriterequests->patchEntity($Swriterequest, $this->request->getData());

            $this->loadModel('Messages');
            $messagedata['user_id'] = $this->request->data['songwriter_id'];
            $messagedata['messager_id'] = $user_id;
            $messagedata['orderid'] = $orderid;
            $messagedata['message'] = 'Song Writer Service Order placement';
            $messagedata['service'] = 'Swriterequests';
            $messagedata['status'] = 'unread';
            $message = $this->Messages->newEntity();
            $message = $this->Messages->patchEntity($message, $messagedata);
            $this->Messages->save($message);

            if ($this->Swriterequests->save($swriterequester)) {

                $this->Flash->success(__('Your request has been placed.'));
                $this->loadModel('Users');
                $user = $this->Users->find()->where(['Users.id' => $songWriterId])->first();
                $user['service'] = 'Song Writer';
                $this->getMailer('User')->send('requests', [$user]);
                return $this->redirect($this->referer());
                //return $this->redirect('/artisterequest/'.$this->request->data['artisterequester_id']);
            }
            //debug($artisterequester->errors());
            if ($swriterequester->errors()) {
                $error_msg = [];
                foreach ($swriterequester->errors() as $errors) {
                    if (is_array($errors)) {
                        foreach ($errors as $error) {
                            $error_msg[] = $error;
                        }
                    } else {
                        $error_msg[] = $errors;
                    }
                }

                if (!empty($error_msg)) {
                    $this->Flash->error(
                            __("Please fix the following error(s):" . implode("\n \r", $error_msg))
                    );
                }

                //return $this->redirect('/artisterequest/'.$this->request->data['artisterequester_id']);
            }
            $this->set(compact('swriterequester', 'user', 'mixeruser_id', 'countcomment', 'countraters', 'rating', 'beat_sample', 'display', 'carts'));
            $this->set('_serialize', ['swriterequester']);
        }
    }

    public function addSongwriter() {
        $this->autoRender = false;
        $songwriter = $this->Songwriters->find()->where(['User_id' => $this->Auth->user('id')])->first();
        $substatus = null;

        //check if user subscribe as an artiste and account still active
        $check = $this->Songwriters->Subscriptions->find('all')->where(['Subscriptions.user_id' => $this->Auth->user('id'), 'Subscriptions.expiry >' => Time::Now()])->contain(['plans' => function($q) {
                return $q
                                ->where(['plan_code' => 'PLN_hmvrbggaw811fzb']);
            }]);
        $checkexpiry = $check->first();
        // echo $check->isEmpty(); 
        // echo "Here";
        //if not null save else warn user to behave and subscribe
        if (!$check->isEmpty()) {

            // echo "Here again";

            $substatus = 'active';
            //echo json_encode($this->request);
            //  if ($this->request->is('post')) {
            //  echo "Here again1";
            //echo $this->Auth->user('id');
            //echo $songwriter;
            $this->request->data['user_id'] = $this->Auth->user('id');
            if ((is_null($songwriter))) {
                // echo "is null";
                $songwriter = $this->Songwriters->newEntity($this->request->getData());
            } else {
                // echo "Not null";
                $songwriter = $this->Songwriters->patchEntity($songwriter, $this->request->getData());
            }
            //echo json_encode($this->request->getData());
            # code...
            if ($this->Songwriters->save($songwriter)) {
                //$this->getMailer('User')->send('requests',[$user]);
                echo json_encode(['error' => "no", 'message' => 'Songwriter profile has been saved.']);
                //$this->Flash->success(__('Songwriter profile has been saved.'));
                //return $this->redirect(['action' => 'add']);
            } else {
                //  echo json_encode(['error'=> "no",'message'=>'Songwriter profile has been saved.']);
                echo json_encode(['validation' => $songwriter->errors()]);
            }
            //debug($songwriter->errors());
            //  $this->Flash->error(__('The Songwriter could not be saved. Please, try again.'));
            // }
        } elseif (!$check->isEmpty() && $checkexpiry['expiry'] < Time::Now()) {
            # code...
            echo json_encode(['error' => "yes", 'message' => 'You need to resubscribe because your subscription has expired']);
            // $this->Flash->error(__('You need to resubscribe because your subscription has expired'));
            //return $this->redirect('/subscribe');
        } else {
            # code...
            //echo "Am here";
            echo json_encode(['error' => "yes", 'message' => 'You need to subscribe to be able to set up a Songwriter profile']);
            //$this->Flash->error(__('You need to subscribe to be able to set up a Songwriter profile'));
            //return $this->redirect('/subscribe');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Songwriter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->loadModel(Carts);
        $cart = $this->Carts->getCount();

        $songwriter = $this->Songwriters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $songwriter = $this->Songwriters->patchEntity($songwriter, $this->request->getData());
            if ($this->Songwriters->save($songwriter)) {
                $this->Flash->success(__('The songwriter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The songwriter could not be saved. Please, try again.'));
        }
        $users = $this->Songwriters->Users->find('list', ['limit' => 200]);
        $this->set(compact('songwriter', 'users', 'cart'));
        $this->set('_serialize', ['songwriter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Songwriter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $songwriter = $this->Songwriters->get($id);
        if ($this->Songwriters->delete($songwriter)) {
            $this->Flash->success(__('The songwriter has been deleted.'));
        } else {
            $this->Flash->error(__('The songwriter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function featured($id = null, $status = 0) {

        if ($this->request->is('post')) {



            $articlesTable = TableRegistry::get('Songwriters');
            $article = $articlesTable->get($id); // Return article with id 12

            $article->featured = $status;
            $articlesTable->save($article);

            return $this->redirect(['action' => 'featured']);
        }

        $topArtistes = $this->Songwriters->find()->contain('Users')->where(['featured' => 1])->all();
        $this->paginate = [
            'contain' => [
                'Users',
            //'Booked'
            ]
        ];
        $query = $this->Songwriters->find('all');
        $artistes = $this->paginate($query);
        // print_r($artistes);
        //die();

        $this->set(compact('artistes', 'topArtistes'));
    }

}
