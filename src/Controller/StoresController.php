<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\ORM\TableRegistry;
use Cake\Network\Session;
use Cake\I18n\Time;
use Cake\View\Helper\PaginatorHelper;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;

/**
 * Stores Controller
 *
 *
 * @method \App\Model\Entity\Store[] paginate($object = null, array $settings = [])
 */
class StoresController extends AppController {

    public $paginate = [
        'limit' => 10,
    ];

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paystack');
        $this->Auth->allow(['searchresult']);
        $this->Auth->allow(['freebeats']);
        $this->Auth->allow(['infinityStoreList']);
        $this->Auth->allow(['bitPlayont']);
        $this->Auth->allow(['bitPlayontSample']);
        $this->Auth->allow(['addLike']);
        $this->Auth->allow(['giveaway']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function beats() {

        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        $this->loadModel('Users');

        $topProducer = $this->Users->find('all', [
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors', 'Stores'],
            'conditions' => ['Users.top_producer' => 1],
            'limit' => 1,
        ]);

        $topProducer1 = $this->Users->find('all', [
            //'fields' => ['COUNT(Users.id) AS total'],
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors', 'Stores'],

            'conditions' => ['Users.accounttype' =>'Music Producer' ],
            //'order' => ['Stores.play_count' => 'DESC'],
            'limit' => 1,

        ]);

        $userid = $this->Auth->user('id');
        $cart = $this->Carts->getCount();

        $this->loadModel('Genres');
        $this->loadModel('PageBanner');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $display = 'show';
        $paginate = [
            'limit' => 10,
        ];
        $shop = 'hide';
        $item = 0;

        $carts = $this->Carts->readProduct();
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                if($count['license'] == 'sample'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;


            }elseif($count['license'] == 'pack'){
                $product = $this->PacksStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;


            }elseif($count['license'] == 'playlist'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

            }else{


                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
            }
        }



        //users

        $userquery = $this->Users->find('all', [
            'contain' => ['Stores'],
            'conditions' => ['Users.id' => $userid, 'Users.expired' => 0]
        ]);
        $userquery1 = $userquery->toArray();

        //trial account subcription

        $trial = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $userid)
    ));
        $countSubs = $trial->count();

       //total beats for trial account

        $beats = $this->Stores->find('all', array(
        'conditions' => array('Stores.user_id' => $userid)
    ));
        $beatcount = $beats->count();

        //user created date trial account

         $userCreated = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $userid)
    ));
        $userRow = $userCreated->first();

        $userCreatedDate=$userRow->created;

        $createDate = new \DateTime($userCreatedDate);

        $currentDate = $createDate->format('m/d/y');

        $date = strtotime($currentDate);
        $date = strtotime("+7 day", $date);
        $expiretrial7= date('m/d/y', $date);

        //for 6 month
         $subsMonth6 = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $userid)
    ));
        $countSubs6 = $subsMonth6->count();



        $query = $this->Subscriptions->find('all');
        $maxExpireDate=$query->select(['expire' => $query->func()->max('Subscriptions.expiry')])
        ->where(['Subscriptions.user_id' => $userid, 'Subscriptions.subscription_status' => 'active']);


        $maxExpireDate1 = $maxExpireDate->first();
        $maxExpireDate1=$maxExpireDate1->expire;
        //print_r($maxExpireDate1->expire);






        //exit;
        $today=date('m/d/y');

        /*
        if($countSubs == 0 && $today > $expiretrial7){
        $promotedquery=null;

        $promoted = $promotedquery->toArray();
        }elseif($maxExpireDate1 > $today && $countSubs6 >0){

        }
        */
            $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => array ('OR' => array(array('Stores.promoted' => 'yes'),array('Stores.promote_permission' => 1),)),
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();
        //exit;
       // print_r($userquery1);exit;
        $trendingQuery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.created between' => 'date_sub(now(),INTERVAL 1 WEEK)', 'and' => 'now()'],
            'order' => ['Stores.play_count' => 'DESC'],
            'limit' => 6
        ]);
        $trendingBid = $trendingQuery->toArray();


        // $usid = $conn->execute("SELECT id FROM users WHERE aka = '$id' limit 1")->fetchAll('assoc');

        // $usid = $usid[0]['id'];
        // $conn->execute("INSERT INTO user_profileview (count, user_id) VALUES(1, $usid)");

        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $userid],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();

        //trending beats
        //print_r($maxExpireDate1);exit;
        /*
        if($countSubs == 0 && $today > $expiretrial7){
        $trendingQuery=null;

        $trendingBid = $trendingQuery->toArray();
        } */
        //}elseif($maxExpireDate1 > $today && $countSubs6 >0){
        /*
        $trendingQuery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.trending' => 1, 'Users.expired' => 0],
            'limit' => 7,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $trendingBid = $trendingQuery->toArray();
        */
        //print_r($trendingBid);exit;


        //}

        $carts = $this->Stores->readProduct();
        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);
        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active', 'Users.expired' => 0])      //here
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $query->where(['Users.expired' => 0]);
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = $this->request->query('beats');
            $query->where(['Stores.name Like' => $search . '%']);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->orWhere(['Users.aka LIKE' => $term . '%'])
                    ->orWhere(['Genres.genre LIKE' => $term . '%']);
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $stores = $query; //$this->paginate($query,$paginate);
        }
        $query1 = $this->Stores->find('all');
        $query1->contain(['Genres', 'Users']);
        $query1->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query1->order(['Stores.created' => 'DESC'])
        ;
        $promoted1 = $query1->toArray();
        $role = $this->Auth->user('role');
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 2]])->first();

        $exclusiveBeatHubQuery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid'],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusiveBeatHub = $exclusiveBeatHubQuery->toArray();
        // print_r($exclusiveBeatHub);exit;

        //debug($products);
        $title = "Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap - AmplifiHub";
        $description = "African Afrobeat Instrumentals For Sale | Dancehall | Afropop | Afro Trap | Download Nigerian Beats. AmplifiHub got the coolest African dancehall Beats.";
        $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental";
        $this->set(compact('today', 'exclusiveBeatHub', 'expiretrial7','topProducer', 'exclusive', 'topProducer1', 'trendingBid', 'AmpKeyword', 'title', 'description', 'stores', 'role', 'display', 'shop', 'item', 'genres', 'genreId', 'cart', 'promoted', 'promoted1', 'products', 'banner', 'userid'));
        $this->set('_serialize', ['stores', 'newdesign']);
    }

    public function beatHubDetail($id = null){
      $this->loadModel('Carts');
      $this->loadModel('Users');
      $this->loadModel('Stores');
      $this->loadModel('Mixmasterings');
      $this->loadModel('Subscriptions');
      $this->loadModel('Genres');
      $this->loadModel('Artistes');
      $this->loadModel('PageBanner');
      $this->loadModel('Users');
      $id=str_replace("-", ' ', $id);

    //get current URL
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


        $id = $this->request->getParam('id');
        $beatHubData = $this->Stores->get($id, [
            'contain' => ['Users', 'Genres'],
            'order' => ['Stores.created' => 'ASC']
        ]);
      $beatHubData = $beatHubData->toArray();

      $userBeats = $this->Stores->find('all', [
          'contain' => ['Users', 'Genres'],
          'conditions' => ['Stores.user_id' => $beatHubData["user_id"]],
          'limit' =>  3,
          'order' => ['Stores.created' => 'ASC'],
          'recursive' => 1,
      ]);
    $userBeats = $userBeats->toArray();

      $allBeats = $this->Stores->find('all', [
          'contain' => ['Users', 'Genres'],
          'order' => 'rand()',
          'limit' =>  12
          //'order' => ['Stores.created' => 'ASC']
      ]);
      $allBeats = $allBeats->toArray();

      $cart = $this->Carts->getCount();

      $this->loadModel('Genres');
      $this->loadModel('PageBanner');
      //$this->viewBuilder()->theme('Panel')->layout('store');
      $this->viewBuilder()->theme('Panel')->layout('viewbeat');
      $display = 'show';
      $paginate = [
          'limit' => 10,
      ];
      $shop = 'hide';
      $item = 0;

      $carts = $this->Carts->readProduct();
      //debug($carts);
      $products = [];
      if (null != $carts) {
          foreach ($carts as $productId => $count) {
              $myprice = substr($count['price'],0,1);
              $okprice =$myprice.','.substr($count['price'],1,strlen($count['price']-1));
              //$ok = $count['price'];
             // echo "<script>alert($okprice);</script>";
              $product = $this->Stores->get($count['id']);
              $product['count'] = $count;
              $product['price'] = $count['price'];
             // $product['price'] = $okprice;
              $product['license'] = $count['license'];
              $products[] = $product;
          }
      }

      $carts = $this->Stores->readProduct();
      if (count($carts) < 1) {
          $shop = 'show';
          $item = count($carts);
      }

      $genres = $this->Genres->find('all', [
          'order' => ['Genres.genre' => 'ASC']
      ]);
      $date = date('Y-m-d');
      $query = $this->Stores->find('all');
      $query->matching(
              'Users.Subscriptions', function($q) use($date) {
          return $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                          ->matching('Plans', function($x) {
                              return $x
                                      ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                          });
      });
      $query->contain(['Genres', 'Users']);
      $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
      $query->order(['Stores.created' => 'DESC'])->limit(10);
      $genreId = "";
      if (!empty($this->request->query('beats'))) {
          $search = $this->request->query('beats');
          $query->where(['Stores.name Like' => $search . '%']);

          $stores = $query; //$this->paginate($query,$paginate);
      } elseif (!empty($this->request->query('genre'))) {
          $genreId = $this->request->query('genre');
          $query->where(['Genres.id ' => $genreId]);
          $stores = $query; //$this->paginate($query,$paginate);
      } elseif (!empty($this->request->query('term'))) {
          $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
          $query->where(['Stores.name LIKE' => $term . '%'])
                  ->orWhere(['Users.aka LIKE' => $term . '%'])
                  ->orWhere(['Genres.genre LIKE' => $term . '%']);
          $stores = $query; //$this->paginate($query,$paginate);
      } else {
          $stores = $query; //$this->paginate($query,$paginate);
      }

      $role = $this->Auth->user('role');
      $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 2]])->first();

        $beatName = $this->Stores->find('all', [

          'conditions' => ['Stores.id' => $id]

      ]);

      $row=$beatName->first();

      $title = "Download $row->name | Buy African Beat Instrumentals - AmplifiHub";
      $description = "Checkout $row->name instrumental beat. African Afrobeat Instrumentals For Sale | Dancehall | Afropop | Afro Trap | Download Nigerian Beats. AmplifiHub got the coolest African dancehall Beats.";
      $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental";
      $this->set(compact('actual_link', 'beatHubData', 'userBeats', 'allBeats', 'AmpKeyword', 'title', 'description', 'stores', 'role', 'display', 'shop', 'item', 'genres', 'genreId', 'cart', 'products', 'banner'));
      $this->set('_serialize', ['stores']);
    }

    public function searchresult(){

        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        $this->loadModel('Users');

        $topProducer = $this->Users->find('all', [
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors', 'Stores'],
            'conditions' => ['Users.top_producer' => 1],
            'limit' => 1,
        ]);


        $cart = $this->Carts->getCount();

        $this->loadModel('Genres');
        $this->loadModel('PageBanner');
        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $display = 'show';
        $paginate = [
            'limit' => 10,
        ];
        $shop = 'hide';
        $item = 0;

        $carts = $this->Carts->readProduct();
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
        }
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();

        $exclusiveBeatHubQuery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid'],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusiveBeatHub = $exclusiveBeatHubQuery->toArray();

        $trendingQuery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.trending' => 1],
            'limit' => 6,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $trendingBid = $trendingQuery->toArray();
        $carts = $this->Stores->readProduct();
        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);
        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $query->where(['Users.expired' => 0]);
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = $this->request->query('beats');
            $query->where(['Stores.name Like' => $search . '%']);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->orWhere(['Users.aka LIKE' => $term . '%'])
                    ->orWhere(['Genres.genre LIKE' => $term . '%']);
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $stores = $query; //$this->paginate($query,$paginate);
        }
        $query1 = $this->Stores->find('all');
        $query1->contain(['Genres', 'Users']);
        $query1->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query1->order(['Stores.created' => 'DESC'])
        ;
        $promoted1 = $query1->toArray();
        $role = $this->Auth->user('role');
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 2]])->first();

        //debug($products);
        $title = "Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap - AmplifiHub";
        //var_dump($genreId);exit;
        foreach($genres as $genre){
            if($genre->id == $genreId){
                $title = "Download $genre->genre Beats and Instrumentals on AmplifiHub";
                break;
            }
        }
        //var_dump($title);exit;
        $description = "$genre->genre genre beats Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap | Download Nigerian Beats. Buy afro beats today, we got the coolest African dancehall Beats";
        $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental";
        $this->set(compact('topProducer', 'trendingBid', 'exclusiveBeatHub', 'AmpKeyword', 'title', 'description', 'stores', 'role', 'display', 'shop', 'item', 'genres', 'genreId', 'cart', 'promoted', 'promoted1', 'products', 'banner'));
        $this->set('_serialize', ['stores']);
    }

    //free beats

    public function freebeats(){
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        $this->loadModel('Users');

        $topProducer = $this->Users->find('all', [
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors', 'Stores'],
            'conditions' => ['Users.top_producer' => 1],
            'limit' => 1,
        ]);


        $exclusiveBeatHubQuery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid'],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusiveBeatHub = $exclusiveBeatHubQuery->toArray();

        $cart = $this->Carts->getCount();

        $this->loadModel('Genres');
        $this->loadModel('PageBanner');
        $this->loadModel('PacksStore');
        $this->loadModel('SampleStore');
        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $display = 'show';
        $paginate = [
            'limit' => 10,
        ];
        $shop = 'hide';
        $item = 0;

        $carts = $this->Carts->readProduct();
        //debug($carts);

        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
               // echo $count['license'];exit;
                if($count['license'] == 'sample'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;


            }elseif($count['license'] == 'pack'){
                $product = $this->PacksStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;


            }elseif($count['license'] == 'playlist'){
                $product = $this->SampleStore->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;

            }else{


                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
            }
        }
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();

        $trendingQuery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.trending' => 1],
            'limit' => 6,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $trendingBid = $trendingQuery->toArray();
        $carts = $this->Stores->readProduct();
        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);
        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                            ->matching('Plans', function($x) {
                                return $x->where(['Plans.plan_code IN' => ['PLN_x4pycaeyn4hp7lo', 'PLN_1aolpmm4rlzsv19', 'PLN_59gb0gsmu5ace70', 'PLN_brgaofxfgxyqx1p', 'PLN_fl30uhkrfetgdyu', 'PLN_yru59bwi99gz537', 'PLN_1monthfree']]);
                                // return $x
                                //         ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                //         ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->where(['Users.expired' => 0]);
        $query->where(['Stores.lease_price' => ""]);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = $this->request->query('beats');
            $query->where(['Stores.name Like' => $search . '%']);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->orWhere(['Users.aka LIKE' => $term . '%'])
                    ->orWhere(['Genres.genre LIKE' => $term . '%']);
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $stores = $query; //$this->paginate($query,$paginate);
        }
        $query1 = $this->Stores->find('all');
        $query1->contain(['Genres', 'Users']);
        $query1->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query1->order(['Stores.created' => 'DESC'])
        ;
        $promoted1 = $query1->toArray();
        $role = $this->Auth->user('role');
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 2]])->first();

        //debug($products);
        $title = "Download Free Beats | Instrumentals | Free Afro Beats - AmplifiHub";

        foreach($genres as $genre){
            if($genre->id == $genreId){
                $title = "Download Free $genre->genre Genre Beats and Instrumentals - AmplifiHub";
                break;
            }
        }

        $description = "Get royalty free $genre->genre african beats here. Download the best of African beats instrumental on AmplifiHub. Check us out now and download freebeats. Free African beats | Free Afrobeat Instrumentals | Free beats |Free Instrumentals.";
        $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental,Free Instrumentals, free beats, download free beats, freebeats download";
        $this->set(compact('topProducer', 'trendingBid', 'exclusiveBeatHub', 'AmpKeyword', 'title', 'description', 'stores', 'role', 'display', 'shop', 'item', 'genres', 'genreId', 'cart', 'promoted', 'promoted1', 'products', 'banner'));
        $this->set('_serialize', ['stores']);
    }

    //Set Freebeat

      public function searchresults(){

        $this->loadModel('Carts');
        $this->loadModel('Beatstopromote');

        $cart = $this->Carts->getCount();
       // $user = $this->Auth->user();


        $beatsToPromote = array();

        //if ($user['role'] == 'user') {

            $this->paginate = [
                'conditions' => ['Stores.user_id' => $user['id']],
                'contain' => ['Stores'],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];
            $beatsToPromote = $this->paginate($this->Beatstopromote);
       // } else {
            $this->paginate = [
                'contain' => ['Stores'],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];
            $beatsToPromote = $this->paginate($this->Beatstopromote);
      //  }


        $userBeats = $this->Stores->find('all')
                ->select(['Stores.id', 'Stores.name'])
                ->order(['Stores.created' => 'DESC'])
                ->where(['Stores.user_id' => $user['id']]);



        $title="Promote Beats";
        //debug($beatsToPromote->toArray());
        $this->set(compact('cart', 'user', 'beatsToPromote', 'userBeats', 'title'));
        $this->set('_serialize', ['beatsToPromote']);
    }

        public function promotebeats() {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Beatstopromote');

        $cart = $this->Carts->getCount();
        $user = $this->Auth->user();


        $beatsToPromote = array();

        if ($user['role'] == 'user' || $user['role'] == 'role') {

            $this->paginate = [
                'conditions' => ['Stores.user_id =' => $user['id']],
                //'conditions' => ['Stores.user_id =' => $user['id'], 'Stores.id =' => 'Beatstopromote.store_id'],
                'contain' => ['Stores'],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];
            $beatsToPromote = $this->paginate($this->Beatstopromote);
        } else {
            $this->paginate = [
                'contain' => ['Stores'],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];
            $beatsToPromote = $this->paginate($this->Beatstopromote);
        }

        //print_r($beatsToPromote);exit;
        $userBeats = $this->Stores->find('all')
                ->select(['Stores.id', 'Stores.name'])
                ->order(['Stores.created' => 'DESC'])
                ->where(['Stores.user_id' => $user['id']]);


        foreach($beatsToPromote as $Key => $value)
        {
        $days=$value->days;
        $startDate=$value->modified;
        $startDate1= date('Y-m-d', strtotime($startDate));
        $addDays="+".$days." day";
        $endDate= date('m/d/y, g:i A', strtotime($addDays, strtotime($startDate)));
        $endDate1= date('Y-m-d', strtotime($endDate));
        $permission=0;
        $id=$value->id;
        $storeid=$value->store_id;

        if(date('Y-m-d') > $endDate1)
        {
            $update= $conn->execute("UPDATE beatstopromote SET permission='".$permission."' WHERE id=$id");
            $update= $conn->execute("UPDATE stores SET promote_permission='".$permission."' WHERE id=$storeid");

        }
        }
        //print_r($beatsToPromote);
        //exit;
        $title="Promote Beats";
        //debug($beatsToPromote->toArray());
        $this->set(compact('cart', 'user', 'beatsToPromote', 'userBeats', 'title'));
        $this->set('_serialize', ['beatsToPromote']);
    }

    public function promotedbeatslist() {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Beatstopromote');
        $this->loadModel('Stores');
        $this->loadModel('Genres');
        $this->loadModel('Users');

        $cart = $this->Carts->getCount();
        $user = $this->Auth->user();

$promotedquery = $this->Stores->find('all', [
            //'contain' => ['Beatstopromote'],

            'conditions' => array ('OR' => array(array('Stores.promoted' => 'yes'),array('Stores.promote_permission' => 1),)),
            //'conditions' => ['Stores.promoted' => 'yes', ['Stores.promote_permission' => 1]],
            'order' => ['Stores.created' => 'ASC']
        ]);

        $beatsToPromote = $promotedquery->toArray();
        /*
        $beatsToPromote = array();


            $this->paginate = [
                'contain' => ['Stores', 'Users','Genres'],
                'conditions' => ['OR' => [['Stores.promoted' => 'yes'],['Stores.promote_permission' => 1],]],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];

            $beatsToPromote = $this->paginate($this->Beatstopromote);
            /*
            $promotes=$conn->execute("SELECT *, stores.name as sname, beatstopromote.days as days, stores.name as sname, beatstopromote.modified as modified, stores.name as sname, beatstopromote.created as created FROM `stores` LEFT JOIN beatstopromote ON beatstopromote.store_id=stores.id WHERE stores.promoted = 'yes' OR stores.promote_permission=1")->fetchAll('assoc');

            $beatsToPromote = $promotes;

        $this->paginate = [
                'contain' => ['Stores'],
                //'conditions' => ['Stores.promote_permission' => 1],
                'order' => ['Beatstopromote.created' => 'DESC']
            ];
            $beatsToPromote = $this->paginate($this->Beatstopromote);
        */
        //print_r($beatsToPromote);exit;
        $userBeats = $this->Stores->find('all')
                ->select(['Stores.id', 'Stores.name'])
                ->order(['Stores.created' => 'DESC'])
                ->where(['Stores.user_id' => $user['id']]);



        $title="Promoted Beats List";
        //debug($beatsToPromote->toArray());
        $this->set(compact('cart', 'user', 'beatsToPromote', 'userBeats', 'title'));
        $this->set('_serialize', ['beatsToPromote']);
    }

    public function permission()
    {
        $conn = ConnectionManager::get('default');
        $id = $this->request->query('id');
        $permission = $this->request->query('permission');
        $store = $this->request->query('store');


        if($permission == 1){
           $update= $conn->execute("UPDATE beatstopromote SET permission='".$permission."' WHERE id=$id");
           $update1= $conn->execute("UPDATE stores SET promote_permission='".$permission."' WHERE id=$store");
                if($update && $update1){
                 $this->Flash->info(__('You have allowed this user to promote beat.'));
                    return $this->redirect(array('controller' => 'stores', 'action' => 'promotebeats'));
                }

        }elseif($permission == 0){

            $update= $conn->execute("UPDATE beatstopromote SET permission='".$permission."' WHERE id=$id");
            $update1= $conn->execute("UPDATE stores SET promote_permission='".$permission."' WHERE id=$store");
                if($update && $update1){
                 $this->Flash->error(__('You have denied this user to promote beat.'));
                    return $this->redirect(array('controller' => 'stores', 'action' => 'promotebeats'));
                }
        }
    }

    public function loadCart() {

        $this->autoRender = false;
        $this->loadModel('Carts');
        $carts = $this->Carts->readProduct();
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }

            //debug($products);

            foreach ($products as $product) {
                echo " <div class='col-xs-6 col-md-4' style='margin-bottom:10px;'>     <div style='padding:5px;border:1px solid #333;border-radius: 10px;background:#262626'>
                            <div class='cartImgWrap'>
                            <img src='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/" . $product->cover . "'class='img-responsive' style='width:45px; height: 45px;display: block;margin-left: auto;margin-right: auto;'>
                                <p style='font-size:10px;text-align:center;'>" . substr($product->name, 0, 10) . "..</p>
                                <p style='font-size:10px;text-align:center;'>" . $product->license . "</p>
                                <p style='font-weight:bold;font-size:12px;text-align:center;'>₦" . $product->price . "</p>
                                
                            </div>
                            </div>
                        </div> ";
            }
        }
    }

    public function loadlicense() {
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->Stores->findById($id);

        //$this->Stores->find('all', [
        //'contain' => false,
        //'fields' => ['Stores.id','Stores.lease_price','Stores.premium_price','Stores.exclusive_price'],
        //'conditions' => [
        // 'Stores.id' => $id
        //],
        //'order' => ['Stores.id' => 'DESC']
        //]);
        // $row = $storeId->first();

        echo json_encode($storeId);
    }

    public function getAllBeats() {

        //  if ($this->requrest->is('ajax')) {
        $this->autoRender = false;

        $resultsA = [];

        $name = $this->request->query['term'];


        $results1 = $this->Stores->find('all', [
            'fields' => ['DISTINCT Stores.name'],
            'conditions' => [
                'Stores.name LIKE' => $name . '%',
            ]
        ]);


        foreach ($results1 as $result) {
            $resultsA[] = $result['DISTINCT Stores']['name'];
        }

        echo json_encode($resultsA);
    }

    public function getAllUserBeats() {

        $this->autoRender = false;

        $resultsA = [];

        $name = $this->request->query['term'];
        $query = $this->request->query['name'];


        $results1 = $this->Stores->find('all', [
            'contain' => ['Users'],
            'fields' => ['DISTINCT Stores.name'],
            'conditions' => [
                'Stores.name LIKE' => $name . '%',
                'Users.aka' => $query
            ]
        ]);


        foreach ($results1 as $result) {
            $resultsA[] = $result['DISTINCT Stores']['name'];
        }

        echo json_encode($resultsA);
    }

    public function getAll() {
        $this->loadModel('Genres');
        $this->loadModel('Users');
        //  if ($this->requrest->is('ajax')) {
        $this->autoRender = false;
        $resultsArr = [];
        $resultsA = [];
        $resultsB = [];
        $resultsC = [];
        $name = $this->request->query['term'];


        $results1 = $this->Users->find('all', [
            'fields' => ['DISTINCT Users.fullname'],
            'conditions' => [
                'Users.fullname LIKE' => $name . '%',
            ]
        ]);


        foreach ($results1 as $result) {
            $resultsA[] = $result['DISTINCT Users']['fullname'];
        }

        //debug($resultsA);



        $results2 = $this->Stores->find('all', [
            'fields' => ['DISTINCT Stores.name'],
            'conditions' => [
                'Stores.name LIKE' => $name . '%'
            ]
        ]);

        foreach ($results2 as $result) {
            $resultsB[] = $result['DISTINCT Stores']['name'];
        }


        $results3 = $this->Genres->find('all', [
            'fields' => ['DISTINCT Genres.genre'],
            'conditions' => [
                'Genres.genre LIKE' => $name . '%',
            ]
        ]); //->all();
        //debug($results3);


        foreach ($results3 as $results) {
            $resultsC[] = $results['DISTINCT Genres']['genre'];
        }

        //debug($resultsC);
        //foreach ($results as $result) {
        //      $resultsArr[] =['label' => $result['full_name'], 'value' => $result['id']];
        //}
        // print_r($results2);


        $resultsArr = array_merge($resultsA, $resultsB, $resultsC);

        echo json_encode($resultsArr);
        //      echo json_encode($results);
        //  }
    }

    /**
     * Mystore method
     *
     * @return \Cake\Http\Response|void
     */
    public function mystore($id = null) {

        $conn = ConnectionManager::get('default');
        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $id = $this->request->getParam('id');
        $this->loadModel('Genres');
        $id=str_replace("-", ' ', $id);

        $store = $this->Stores->newEntity();
        //print_r($store);exit;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');

        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Mixmasterings');
        $cart = $this->Carts->getCount();

        $carts = $this->Carts->readProduct();
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
        }


        $display = 'show';
        $paginate = [
            'limit' => 10
        ];

        $shop = 'hide';
        $item = 0;

        $carts = $this->Stores->readProduct();

        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $userProfile = $this->Users->find('all', [
                    'contain' => [],
                    'conditions' => ['Users.aka' => $id]
                ])->first();

        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'order' => ['Stores.created' => 'ASC']
        ]);

        $promoted = $promotedquery->toArray();
        // print_r($promoted);exit;
        $usid = $conn->execute("SELECT id FROM users WHERE aka = '$id' limit 1")->fetchAll('assoc');
        $usid = $usid[0]['id'];

        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $usid],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();



        /*$promoted1 = "";
        foreach($promoted as $prom)
        {
            foreach($exclusive as $exc){
                if($prom['id'] != $exc['beat_id'] ){
                    print_r($prom);
                    $promoted = $prom;
                }
            }
        }*/

        // exit;
        // $prom = $conn->execute("SELECT *, stores.id as id, stores.cover as cover, stores.name as name, users.aka as uname FROM stores LEFT JOIN users ON users.id = stores.user_id LEFT JOIN genres ON stores.music_genre = genres.id LEFT JOIN carts ON carts.beat_id = stores.id WHERE stores.promoted = 'yes' GROUP BY carts.id ORDER BY stores.created ASC")->fetchAll('assoc');
        // print_r($promoted);exit;

        $query1 = $this->Stores->find();
        $query1->matching(
                'Users', function($x) use($id) {
            return

                    $x->where(['OR' => [['Users.id ' => $id], ['Users.aka' => $id]]]);
        });
        $query1->contain(['Users', 'Genres']);



        $stores = $query1->all();
       // print_r($stores);exit;
        $mixmasterings = $this->Mixmasterings->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Users.aka' => $id, 'Users.expired' => 0]
        ]);

        //debug($query2);



        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);

        $query = $this->Stores->find('all');
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC'])->limit(10);

        //debug(trim($this->request->query('genre')));
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = trim($this->request->query('beats'));
            $query->where(['Stores.name LIKE' => '%' . $search . '%'])
                    ->orWhere(['Users.aka LIKE' => '%' . $search . '%'])
                    ->orWhere(['Genres.genre LIKE' => '%' . $search . '%']);
            $query->where(['Users.aka' => $id]);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId])
                    ->where(['Users.aka' => $id]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->where(['Users.aka' => $id]);
            ;
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $query->where(['Users.aka' => $id, 'Users.expired' => 0]);
            $stores = $query; //$this->paginate($query,$paginate);
            //debug($stores);
        }


        /* HERE is to check if the user's subscription is active or not */
        $users = TableRegistry::get('users');
        $user = $users->find('all')->where(['aka' => $id]);
        $user = $user->toArray();
        $user_id = $user[0]->id;

        $subscriptionTable = TableRegistry::get('Subscriptions');

        $checkexpiry = $subscriptionTable->find('all')->where(['user_id' => $user_id, 'subscription_status' => 'active']);
        $count = $checkexpiry->toArray();
        // print_r($count); exit;

        $query5 = $this->Stores->find('all');
        $query5->contain(['Genres', 'Users']);
        $query5->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query5->where(['Users.aka' => $id]);
        $query5->order(['Stores.created' => 'DESC']);
        $promoted1 = $query5->toArray();

        $stores = (!empty($count)) ? $stores : null;
        //debug($userProfile);
        //$this->set('genre', $this->Stores->Genres->find());
        $title = "$userProfile->aka Beat Store - AmplifiHub";
        foreach($genres as $genre){
            //var_dump($genre->id);exit;
            if($genre->id == $genreId){
                $title = "Download $genre->genre Genre Beats and Instrumentals By $userProfile->aka on AmplifiHub";
                break;
            }
        }
        
        $description = "Check out beats from $userProfile->aka. Visit AmplifiHub to listen to more African Afro beats.";

        $conn->execute("INSERT INTO user_profileview (count, user_id) VALUES(1, $usid)");

        // start subscription
        
        $substatus = null;
        //check the subscription
        //check if it is still active
        /*$checksilver = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_e3ole3awykdjxlx']);
        });*/
        
        $userid = $conn->execute("SELECT * FROM users WHERE aka = '$id'")->fetchAll('assoc');
        
        $userid = $userid[0]['id'];
        // print_r($userid[0]['id']);exit;
        
        $checksilver = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_x4pycaeyn4hp7lo' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checksilver)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checksilver = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_brgaofxfgxyqx1p' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checksilver)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkgold = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_1aolpmm4rlzsv19' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkgold)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkgold = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_fl30uhkrfetgdyu' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkgold)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkplatinum = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_59gb0gsmu5ace70' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkplatinum)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkplatinum = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_yru59bwi99gz537' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkplatinum)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkfree = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_1monthfree' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkfree)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        // end subscription


        // print_r($substatus);exit;

        $this->set(compact('title', 'stores', 'prom', 'role', 'exclusive', 'display', 'shop', 'genres', 'genreId', 'item', 'id', 'promoted', 'promoted1', 'cart', 'products', 'userProfile', 'mixmasterings', 'substatus','description'));
        $this->set('_serialize', ['stores']);
    }

    public function personalstore($id = null) {

        $this->viewBuilder()->theme('Panel')->layout('personalstore');

        $id = $this->request->getParam('id');
        $id=str_replace("-", ' ', $id);
        $this->loadModel('Genres');


        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Mixmasterings');
        $cart = $this->Carts->getCount();

        $carts = $this->Carts->readProduct();
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
        }


        $display = 'show';
        $paginate = [
            'limit' => 10
        ];

        $shop = 'hide';
        $item = 0;

        $carts = $this->Stores->readProduct();

        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $userQuery = $this->Users->find('all', [
            'contain' => [],
            'conditions' => ['Users.aka' => $id]
        ]);

        $userProfile = $userQuery->toArray();



        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'limit' => 6,
            'order' => ['Stores.created' => 'ASC']
        ]);

        $promoted = $promotedquery->toArray();


        $query1 = $this->Stores->find();
        $query1->matching(
                'Users', function($x) use($id) {
            return

                    $x->where(['OR' => [['Users.id ' => $id], ['Users.aka' => $id]]]);
        });
        $query1->contain(['Users', 'Genres']);



        $stores = $query1->all();

        $mixmasterings = $this->Mixmasterings->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Users.aka' => $id, 'Users.expired' => 0]
        ]);

        //debug($query2);



        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);

        $query = $this->Stores->find('all');
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC']);

        //debug(trim($this->request->query('genre')));
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = $this->request->query('beats');
            $query->where(['Stores.name Like' => $search . '%'])
                    ->where(['Users.aka' => $id]);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId])
                    ->where(['Users.aka' => $id]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->where(['Users.aka' => $id]);
            ;
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $query->where(['Users.aka' => $id, 'Users.expired' => 0]);
            $stores = $query; //$this->paginate($query,$paginate);
            //debug($stores);
        }

        $query5 = $this->Stores->find('all');
        $query5->contain(['Genres', 'Users']);
        $query5->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query5->where(['Users.aka' => $id]);
        $query5->order(['Stores.created' => 'DESC']);
        $promoted1 = $query5->toArray();
        //debug($userProfile);
        //$this->set('genre', $this->Stores->Genres->find());
        $user_id = $userProfile[0]['id'];
        $subscriptionTable = TableRegistry::get('Subscriptions');
        $checkexpiry = $subscriptionTable->find('all')->where(['user_id' => $user_id, 'subscription_status' => 'active']);
        $count = $checkexpiry->toArray();
        // print_r($count);exit;
        $stores = (!empty($count)) ? $stores : null;
        $this->set(compact('stores', 'role', 'display', 'shop', 'genres', 'genreId', 'item', 'id', 'promoted', 'promoted1', 'cart', 'products', 'userProfile', 'mixmasterings'));
        $this->set('_serialize', ['stores']);
    }

        public function infinityMyStore() {

        $this->autoRender = false;
        $id = $this->request->query('id');
        $storeName = $this->request->query('store');
        $this->loadModel('Carts');
        $conn = ConnectionManager::get('default');

        $usid = $conn->execute("SELECT id FROM users WHERE aka = '$storeName' limit 1")->fetchAll('assoc');
        $usid = $usid[0]['id'];

        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $usid],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();

        $query = $this->Stores->find('all');
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.expired', 'Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.likes', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->where(['Users.aka' => $storeName, 'Users.expired' => '0']);
        $query->where(['Stores.id <' => $id]);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $stores = $query;

        /*foreach($stores as $st){
            foreach ($exclusive as $exc){
                if($st->id != $exc['beat_id'] ){
                    // echo $st->id;
                    // print_r($st);
                echo json_encode($st);
                }
            }

        }*/

        echo json_encode($stores);
    }

    public function infinityStore() {
        $this->autoRender = false;
        $id = $this->request->query('id');

        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->where(['Stores.id  <' => $id]);
        $query->order(['Stores.created' => 'DESC'])->limit(10);

        $stores = $query;
        echo json_encode($stores);
    }

    public function infinityStoreList() {
        $this->autoRender = false;
        $id = $this->request->query('id');

        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return
                            $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->where(['Stores.id  <' => $id, 'Stores.lease_price' => ""]);
        $query->order(['Stores.created' => 'DESC'])->limit(10);

        $stores = $query;
        echo json_encode($stores);
    }

    /**
     * User Store method
     *
     * @return \Cake\Http\Response|void
     */
    public function userstore() {

        $this->loadModel('Carts');
        $this->loadModel('Beatcompetition');
        $this->loadModel('Admingiveaway');
        $conn = ConnectionManager::get('default');
        $cart = $this->Carts->getCount();
        $user = $this->Auth->user('id');

        $g = $this->Stores->find('all')->select(['Users.email', 'Users.aka', 'Stores.play_count', 'Stores.id','Stores.likes', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre'])->contain(['Genres', 'Users'])->where(['Stores.user_id' => $this->Auth->user('id')]);
        $stores = $this->paginate($g);
        $role = $this->Auth->user('role');
        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $user],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();

        $beatCompetition = $this->Beatcompetition->find('all', array(
            'conditions' => array('Beatcompetition.user_id' => $user)
        ));
        $beatCompetition=$beatCompetition->first();
        $beatCompetition = $beatCompetition->user_id;
        
        // $admingiveaway = $this->Admingiveaway->find('all', array(
        //     'conditions' => array('id' => 1)
        // ));
        // $admingiveaway=$admingiveaway->first()->toArray();
        
        $admingiveaway = $conn->execute("SELECT * FROM admingiveaway WHERE id = 1")->fetchAll('assoc');
        
        $start_date = $admingiveaway[0]['start_date'];
        $end_date = $admingiveaway[0]['end_date'];
        
        $today = date('Y-m-d');
        
        // $betweenDate = $conn->execute("SELECT * FROM admingiveaway WHERE end_date <= '".$today."'")->fetchAll('assoc');
        
        // print_r($end_date);exit;
        $title="My Uploaded Beats";
        $this->set(compact('stores', 'role', 'cart', 'title', 'exclusive', 'beatCompetition', 'user', 'admingiveaway', 'today', 'start_date', 'end_date'));
        $this->set('_serialize', ['stores']);
    }
    
    public function resetCompetition() {
        $this->loadModel('Beatcompetition');
        // $this->request->allowMethod(['post', 'delete']);
        // $store = $this->Beatcompetition->get('all');
        $conn = ConnectionManager::get('default');
        $del=$conn->execute("DELETE FROM beatcompetition");
        if ($del) {
            $this->Flash->success(__('Competition has been reset.'));
        } else {
            $this->Flash->error(__('Competition could not be reset. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
    
    public function choose($id = null) {
        $this->loadModel('Beatcompetition');
        $user = $this->Auth->user('id');
        
        $this->request->data['user_id'] = $user;
        $this->request->data['beat_id'] = $id;
        
        $existingBeat = $this->Beatcompetition->find()->where(['user_id' => $user])->first();
        // print_r($existingBeat);exit;
        if(!empty($existingBeat->user_id)){
            $Beatcompetition = $this->Beatcompetition->find()->where(['user_id' => $user])->first();
            // print_r($Beatcompetition);exit;
            if ($this->Beatcompetition->delete($Beatcompetition)) {
                
            }
        }
        // exit;
        $store = $this->Beatcompetition->newEntity();
        $store = $this->Beatcompetition->patchEntity($store, $this->request->getData());
        // print_r($store);exit;
        if ($this->Beatcompetition->save($store)) {
            $this->Flash->success(__('Your beat is selected for competition.'));
            // echo json_encode(['error' => "no", 'message' => 'Your beat is selected for competition.']);
            return $this->redirect(['action' => 'userstore']);
        } else {
            echo json_encode(['validation' => $store->errors()]);
        }
        // print_r($store->hire);exit;
        //debug($user);
        
        $title="Edit Your Beat";
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart','title'));
        $this->set('_serialize', ['store']);
    }

    
     /**
     * User Tracks method
     *
     * @return \Cake\Http\Response|void
     */
    public function mytracks() {

        $this->loadModel('Carts');
        $this->loadModel('Track');
        $cart = $this->Carts->getCount();
        $user = $this->Auth->user('id');

        $g = $this->Track->find('all')->select(['Track.id','user_id','Users.id','Users.email', 'Users.aka', 'amount', 'song_title', 'song', 'song_path', 'booking', 'song_size', 'song_type', 'genre', 'created'])->contain(['Users'])->where(['Track.user_id' => $this->Auth->user('id')]);
        $stores = $this->paginate($g);
        
        
        $genres=$this->Stores->Genres->find('list')->toArray();
        
        
        foreach($stores as $store)
        {
            if(is_numeric($store['genre']))
            {
                for($i=0;$i<=$store['genre'];$i++)
                {
                    if($store['genre']==$i)
                     $store['genre']=$genres[$i];
                }
            }
        }
        
        
        
       $tracks = TableRegistry::getTableLocator()->get('Track');
        $query = $tracks
    ->find()
    ->select(['remarks', 'links','uploaded_to'])
    ->where(['user_id' => $this->Auth->user('id')]);
    $i=0;
    
    //echo "<pre>";  print_r($stores); die;
    foreach ($query as $track) {
        $stores->toArray()[$i]->remarks=$track->remarks;
        $stores->toArray()[$i]->links=$track->links;
        $stores->toArray()[$i]->uploaded_to=$track->uploaded_to;
        $i++;
        }
    
    
        $role = $this->Auth->user('role');
        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $user],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();

        $title="My Uploaded Tracks";
        $this->set(compact('stores', 'role', 'cart', 'title', 'exclusive'));
        $this->set('_serialize', ['stores']);
    }
    
    
    
     public function tracks() {

        $this->loadModel('Carts');
        $this->loadModel('Track');
        $cart = $this->Carts->getCount();
        $user = $this->Auth->user('id');
        $role = $this->Auth->user('Genres');
        $role = $this->Auth->user('role');
        if($role!='admin')
        {
            $this->redirect(array(
            'controller' => 'Stores', 'action' => 'mytracks'
            ));
        }

        $g = $this->Track->find('all')->select(['Track.id','user_id','Users.id','Users.email', 'Users.aka', 'amount', 'song_title', 'song', 'song_path', 'booking', 'song_size', 'song_type', 'genre', 'created'])->contain(['Users']);
        $stores = $this->paginate($g);
        
        $genres=$this->Stores->Genres->find('list')->toArray();
        foreach($stores as $store)
        {
            if(is_numeric($store['genre']))
            {
                for($i=0;$i<=$store['genre'];$i++)
                {
                    if($store['genre']==$i)
                     $store['genre']=$genres[$i];
                }
            }
        }
        
        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $user],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();

        $title="All Uploaded Tracks";
        $this->set(compact('stores', 'role', 'cart', 'title', 'exclusive'));
        $this->set('_serialize', ['stores']);
    }

    /**
     * Admin Store method
     *
     * @return \Cake\Http\Response|void
     */
    public function admin($id = null, $status = 0) {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();






        //if(!empty($keyword)){

          //  $this->paginate=['conditions' => ['name' => $keyword]
        //    ];



        /*
        $result=$this->Stores->find("all", array(
        "joins" => array(
            array(
                "table" => "users",
                "alias" => "usersTable",
                "type" => "LEFT",
                "conditions" => array(
                    "users.id = stores.user_id"
                )
            ),
            array(
                "table" => "stores",
                "alias" => "storesTable",
                "type" => "LEFT",
                "conditions" => array(
                    "stores.user_id = users.id"
                )
            )
        ),
        'conditions' => array(
            'Stores.approved' => 1,
            'stores.name' => $keyword,
        )
    ));

    print_r($result);
    */
      //  }
         //$users=$this->paginate($this->Users);

        if ($this->request->is('post')) {
            $articlesTable = TableRegistry::get('Stores');
            $article = $articlesTable->get($id);
            $article->trending = $status;
            $articlesTable->save($article);
            return $this->redirect(['action' => 'admin']);
        }


        $trendingModel = $this->Stores->find()->contain(['Genres', 'Users'])->where(['trending' => 1])->all();

         $keyword = $this->request->query('keyword');

        if(!empty($keyword)){

         $this->paginate= [
             'conditions' => ['name LIKE' => '%'.$keyword.'%']
             ];

        }

        $g = $this->Stores->find('all')->select(['Users.email', 'Users.aka', 'Stores.id', "Stores.play_count", 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre'])->contain(['Genres', 'Users']);
        $stores = $this->paginate($g);
        $role = $this->Auth->user('role');
        $this->set(compact('stores', 'role', 'cart', 'trendingModel'));
        $this->set('_serialize', ['stores']);
    }

    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $store = $this->Stores->get($id, [
            'contain' => ['Genres']
        ]);

        $this->set('store', $store);
        $this->set('cart', $cart);
        $this->set('_serialize', ['store']);
    }
    
    
    
    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewTrack($id = null) {
        
        $this->loadModel('Carts');
        $this->loadModel('Track');
        $this->loadModel('Genres');
        $cart = $this->Carts->getCount();

        $store = $this->Track->get($id, [
            'contain' => ['Users']
        ]);
        
       $tracks = TableRegistry::getTableLocator()->get('Track');
        $query = $tracks
    ->find()
    ->select(['remarks', 'links','uploaded_to'])
    ->where(['id' => $id]);
        foreach ($query as $track) {
        $store->remarks=$track->remarks;
        $store->links=$track->links;
        $store->uploaded_to=$track->uploaded_to;
        }
       
       
        $genres=$this->Stores->Genres->find('list')->toArray();
        
          if(is_numeric($store['genre']))
            {
                for($i=0;$i<=$store['genre'];$i++)
                {
                    if($store['genre']==$i)
                     $store['genre']=$genres[$i];
                }
            }

       
        $title="Music Upload Information / Tracking Page";
        $this->set(compact('title'));
        $this->set('store', $store);
        $this->set('tracks', $tracks);
        $this->set('cart', $cart);
        $this->set('_serialize', ['store']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->loadModel('Users');
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $this->loadModel('Subscriptions');
        $conn = ConnectionManager::get('default');
        $cart = $this->Carts->getCount();

        $store = $this->Stores->newEntity();
        //print_r($store);exit;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');

        //permission change user account
        $changePermission = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $user)
    ));
        $pUser=$changePermission->first();


        //trial account subcription

        $trial = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $user)
    ));
        $number = $trial->count();

       //total beats for trial account

        $beats = $this->Stores->find('all', array(
        'conditions' => array('Stores.user_id' => $user)
    ));
        $beatcount = $beats->count();

        //user created date trial account

         $userCreated = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $user)
    ));
        $userRow = $userCreated->first();

        $userCreatedDate=$userRow->created;

        $createDate = new \DateTime($userCreatedDate);

        $currentDate = $createDate->format('m/d/y');

        $date = strtotime($currentDate);
        $date = strtotime("+7 day", $date);
        $expiretrial= date('m/d/y', $date);

        $today=date('m/d/y');

        $expiretrial1 = $today <= $expiretrial;

        //expired date
        $expday=date('m/d/y');
        $expired = $expiretrial > $expday;



      // exit;
        $substatus = null;
        //check the subscription
        //check if it is still active
        $checksilver = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_brgaofxfgxyqx1p']]]);
        });
        if (!$checksilver->isEmpty()) {
            $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkgold = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_fl30uhkrfetgdyu']]]);
        });
        if (!$checkgold->isEmpty()) {
            $tnx_reference = $checkgold->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkplatinum = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
        });
        if (!$checkplatinum->isEmpty()) {
            $tnx_reference = $checkplatinum->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkfree = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_1monthfree']);
        });
        if (!$checkfree->isEmpty()) {
            $tnx_reference = $checkfree->last()->tnx_reference;
            $substatus = 'active';
        }


        //   exit;
        
        $freeMonthCount = $this->Stores->find('all', ['conditions' => ['Stores.user_id' => $user]])->count();
        $freeMonthExpire = $this->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now, 'plan_id' => 'PLN_1monthfree']])->count();
        $otherSubscriptions = $this->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now, 'plan_id !=' => 'PLN_1monthfree']])->count();
        
        // $freemonth = $conn->execute("SELECT COUNT(id) as total FROM subscriptions WHERE user_id = $user AND expiry >= $now AND plan_id = 'PLN_1monthfree'")->fetchAll('assoc');
        // print_r($otherSubscriptions);exit;

        //end all user to email

        $title="Upload Beats";
        $this->loadModel('Users');
        $userid = $this->Users->find()->where(['id' => $user])->first();
        //debug($userid);
        //debug(json_encode($genre, JSON_PRETTY_PRINT));
        //$this->set('user', $this->Stores->Users->find('list'));
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('user'));
        $this->set(compact('store'));
        $this->set(compact('pUser', 'genrevalue' ,'otherSubscriptions', 'freeMonthCount', 'freeMonthExpire', 'xclusive', 'beatId', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today'));
        $this->set('_serialize', ['store']);
    }
    
    
    
    
    
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addTrack() {
        
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $this->loadModel('Track');
        $conn = ConnectionManager::get('default');
        
        $title="Upload Beats";
        $this->loadModel('Users');
        $user = $this->Auth->user('id');
        $userid = $this->Users->find()->where(['id' => $user])->first();
        $userData=$this->Auth->user();
        
        
        if ($this->request->is('ajax')) {
            //debug($checkgold->first()->expiry);
            
            $track = $this->Track->newEntity();
            @$this->request->data['user_id'] = $user;
            @$this->request->data['label']=$this->request->data['label'];
            @$this->request->data['advisory']=$this->request->data['advisory'];
            @$this->request->data['production_year']=$this->request->data['production_year'];
            @$this->request->data['authors']=$this->request->data['authors'];
            @$this->request->data['composers']=$this->request->data['composers'];
            $data=$this->request->getData();
              
                $track = $this->Track->patchEntity($track,$data);
                 
                if ($this->Track->save($track)) {
                    echo json_encode(['error' => "no", 'message' => 'Success! Your Upload Has Been Submitted.']);
                    die;
                    //  $this->Flash->success(__('The beat has been saved to store.'));
                    //return $this->redirect(['action' => 'add']);
                } else {
                    echo json_encode(['validation' => $track->errors()]);
                }
            }
            
       
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('user'));
        $this->set(compact('track'));
        $this->set(compact('pUser','genrevalue', 'xclusive', 'beatId', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today'));
        $this->set('_serialize', ['store']);
    }
    
    
    
    
    

    public function setCroppedCoverImage(){
        $data = $_POST["new_croppie_img"];
        $image_array_1 = explode(";", $data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $cover_new = base64_decode($image_array_2[1]);
        file_put_contents($_FILES["cover"]["tmp_name"], $cover_new);
        return true;
    }

    public function sendNewBeatMail($beat){
      return true;
      $base_domain = 'https://amplifihub.com';
      $allBeats = $this->Stores->find('all', [
          'contain' => ['Users', 'Genres'],
          'order' => 'rand()',
          'limit' =>  4
          //'order' => ['Stores.created' => 'ASC']
      ]);
      $allBeats = $allBeats->toArray();
      $user = $this->Auth->user();
      $userEmails = $this->Users->find('all')->select(["Users.email"])->toArray();
      $emailArr = array();
      foreach ($userEmails as $usr) {
        if (filter_var($usr->email, FILTER_VALIDATE_EMAIL)){
          $emailArr[] = $usr->email;
        }
      }
      $email = new Email('noreply');
      $email->to($emailArr)
              ->template('Panel.new_upload')
              ->viewVars(['beat' => $beat, 'user'=>$user, 'allBeats'=>$allBeats, 'base_domain'=>$base_domain])
              ->emailFormat('html')
              //->sender('noreply@amplifihub.com', 'AmplifiHub')
              ->sender('noreply@amplifihub.com', 'AmplifiHub')
              ->from('noreply@amplifihub.com', 'AmplifiHub')
              ->subject('New Beats Uploaded On AmplifiHub By '.$user["aka"]);
        return $email->send();
    }

    //This method adds beats using ajax
        //This method adds beats using ajaxz
    public function addBeats() {
        $this->loadModel('Subscriptions');
        $this->loadModel('Stores');
        $this->loadModel('Users');
        $conn = ConnectionManager::get('default');
        $store = $this->Stores->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        $formData=$this->request->getData();
        $substatus = null;
        //check the subscription
        //check if it is still active
        $checksilver = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_brgaofxfgxyqx1p']]]);
        });
        if (!$checksilver->isEmpty()) {
            $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkgold = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_fl30uhkrfetgdyu']]]);
        });
        if (!$checkgold->isEmpty()) {
            $tnx_reference = $checkgold->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkplatinum = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['OR' => [['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_yru59bwi99gz537']]]);
        });
        if (!$checkplatinum->isEmpty()) {
            $tnx_reference = $checkplatinum->last()->tnx_reference;
            $substatus = 'active';
        }

        $trial = $this->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->count();
        //print_r($trial);exit;
        if ($trial == 0) {
            $tnx_reference = 0;
            $substatus = 'active';
        }
        
        $checkfree = $this->Stores->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_1monthfree']);
        });
        if (!$checkfree->isEmpty()) {
            $tnx_reference = $checkfree->last()->tnx_reference;
            $substatus = 'active';
        }
        // print_r($substatus);exit; 
        $freemonth = $this->Subscriptions->find('all', ['conditions' => ['Subscriptions.user_id' => $user, 'Subscriptions.expiry >=' => $now, 'plan_id' => 'PLN_1monthfree']])->count();
        // print_r($freemonth);exit;
        if ($freemonth == 1) {
            $tnx_reference = 0;
            $substatus = 'active';
        }
        // print_r($freemonth);exit;
        

        if ($this->request->is('ajax')) {

             if(isset($_FILES["cover"]) && isset($_POST["new_croppie_img"]) && $_POST["new_croppie_img"] != ''){
                 $this->setCroppedCoverImage();
            }
            //check to see if user has exceeded or reached the required upload
            $check = $this->Stores->find('all', ['conditions' => ['user_id' => $user, 'created + INTERVAL 30 DAY > ' => Time::Now(), 'tnx_reference' => @$tnx_reference]]);
            
            //debug($checkgold->first()->expiry);
            
            $this->request->accepts();
              @$this->request->data['tnx_reference'] = $tnx_reference;
             @$this->request->data['exclusive_price'] = (int) $this->request->data['exclusive_price'];
            //   echo '<pre>';print_r($this->request->getData());exit;
            $accepts = $this->request->accepts();
            //echo json_encode($this->request->data['exclusive_price']);
            //echo json_encode([$checksilver,$checkgold, $checkplatinum, $check->count(),$checkgold->first()->expiry,Time::Now(),$checkgold->first()->expiry >= Time::Now()]);

            // if (($trial == 0 && empty($tnx_reference))  ) {
            //     //echo json_encode(['error' => "yes", 'message' => 'You are not allowed to upload beats because you don\'t have an active Producer Subscription.']);
            //     // $this->Flash->error(__('You are not allowed to upload beats because you don\'t have an active Producer Subscription.'));
            //     //return $this->redirect('/subscribe');
            //     //$store1 = $this->Stores->newEntity();
            //     $store = $this->Stores->patchEntity($store, $this->request->getData());
                
            //     if ($storeSaved = $this->Stores->save($store)) {
            //       $this->sendNewBeatMail($store);
            //         echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.', 'data_id' => $storeSaved->id]);
            //         //  $this->Flash->success(__('The beat has been saved to store.'));
            //         //return $this->redirect(['action' => 'add']);
            //     } else {
            //         echo json_encode(['validation' => $store->errors()]);
            //     }
            // }
            
            // if (!$checkfree->isEmpty() && $check->count() >= 5 && $checkfree->first()->expiry >= Time::Now()) {
            //     echo json_encode(['error' => true, 'message' => 'You have reached your maximum allowed uploads for 1 month free subscription.']);
            //     //$this->Flash->error(__('You have reached your maximum allowed uploads for SILVER subscription.'));
            // } elseif (!$checkfree->isEmpty() && $check->count() <= 5 && $checkfree->first()->expiry <= Time::Now()) {
            //     echo json_encode(['error' => "yes", 'message' => 'Your 1 month free subscription has expired. Subscribe your a new plan <a href="/subscribe">Click here to subscribe<a>']);
            //     //$this->Flash->error(__('Your SILVER subscription has expired. Renew your plan <a href="/subscribe">Click here to subscribe<a> '));
            // } elseif (!$checkfree->isEmpty() && $check->count() <= 5 && $checkfree->first()->expiry >= Time::Now()) {
            //     $store = $this->Stores->patchEntity($store, $this->request->getData());
            //     if ($storeSaved = $this->Stores->save($store)) {
            //       $this->sendNewBeatMail($store);
            //         echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.', 'data_id' => $storeSaved->id]);

            //         //$this->Flash->success(__('The beat has been saved to store.'));
            //     } else {
            //         echo json_encode(['validation' => $store->errors()]);
            //     }
            // }
            
            
            // if (!$checksilver->isEmpty() && $check->count() >= 20 && $checksilver->first()->expiry >= Time::Now()) {
            //     echo json_encode(['error' => true, 'message' => 'You have reached your maximum allowed uploads for SILVER subscription.']);
            //     //$this->Flash->error(__('You have reached your maximum allowed uploads for SILVER subscription.'));
            // } elseif (!$checksilver->isEmpty() && $check->count() <= 20 && $checksilver->first()->expiry <= Time::Now()) {
            //     echo json_encode(['error' => "yes", 'message' => 'Your SILVER subscription has expired. Renew your plan <a href="/subscribe">Click here to subscribe<a>']);
            //     //$this->Flash->error(__('Your SILVER subscription has expired. Renew your plan <a href="/subscribe">Click here to subscribe<a> '));
            // } elseif (!$checksilver->isEmpty() && $check->count() <= 20 && $checksilver->first()->expiry >= Time::Now()) {
            //     $store = $this->Stores->patchEntity($store, $this->request->getData());
            //     if ($storeSaved = $this->Stores->save($store)) {
            //       $this->sendNewBeatMail($store);
            //         echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.', 'data_id' => $storeSaved->id]);

            //         //$this->Flash->success(__('The beat has been saved to store.'));
            //     } else {
            //         echo json_encode(['validation' => $store->errors()]);
            //     }
            // }


            
            // if (!$checkgold->isEmpty() && $check->count() >= 50 && $checkgold->first()->expiry >= Time::Now()) {
            //     echo json_encode(['error' => "yes", 'message' => 'You have reached your maximum allowed uploads for GOLD subscription.']);
            //     // $this->Flash->error(__('You have reached your maximum allowed uploads for GOLD subscription.'));
            // } elseif (!$checkgold->isEmpty() && $check->count() <= 50 && $checkgold->first()->expiry <= Time::Now()) {

            //     echo json_encode(['error' => "yes", 'message' => 'Your GOLD subscription has expired. Renew your plan <a href="/subscribe">Click here to subscribe<a>']);
            //     // $this->Flash->error(__('Your GOLD subscription has expired. Renew your plan <a href="/subscribe">Click here to subscribe<a> '));
            // } elseif (!$checkgold->isEmpty() && $check->count() <= 20 && $checkgold->first()->expiry >= Time::Now()) {
            //     $store = $this->Stores->patchEntity($store, $this->request->getData());
                
            //     if ($storeSaved = $this->Stores->save($store)) {
            //       $this->sendNewBeatMail($store);
            //         echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.', 'data_id' => $storeSaved->id]);
            //         //  $this->Flash->success(__('The beat has been saved to store.'));
            //         //return $this->redirect(['action' => 'add']);
            //     } else {
            //         echo json_encode(['validation' => $store->errors()]);
            //     }
            // }

            // if (!$checkplatinum->isEmpty() && $checkplatinum->first()->expiry >= Time::Now()) {
                $store = $this->Stores->patchEntity($store, $this->request->getData());
                if ($storeSaved = $this->Stores->save($store)) {
                  $this->sendNewBeatMail($store);
                    echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.', 'data_id' => $storeSaved->id]);
                    //$this->Flash->success(__('The beat has been saved to store.'));
                    //return $this->redirect(['action' => 'add']);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            // }
            
            //start user to email
        $beatName = $this->Stores->find('all', array(
        'conditions' => array('Stores.user_id' => $user),
        'order' => array('id' => 'DESC'),
        'limit' => 1
    ));
        $beatRow = $beatName->first();

        $userName = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $user),
        'order' => array('id' => 'DESC'),
        'limit' => 1
    ));
        $userRow = $userName->first();

        $allUser = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $user),

        ));
        $allUsers = $allUser->first();
        //  print_r($allUsers);exit;
        $producerName = $userRow['aka'];
        $producerId = $userRow['id'];
        $beatName = $beatRow['name'];
        $beatId = $beatRow['id'];
        // print_r($allUsers);
        $randomBeats = $conn->execute("SELECT *, stores.id as id, genres.genre as gName, users.aka as uName, stores.name as bName FROM stores LEFT JOIN genres ON genres.id = stores.music_genre LEFT JOIN users ON users.id = stores.user_id ORDER BY RAND() LIMIT 4 ")->fetchAll('assoc');
        // exit;
        // print_r($allUsers['email']);
            if(!empty($allUsers['email'])){
            //  print_r($allUsers['email']);exit;
            //  echo $beatLink;exit;
            $email = new Email('noreply');
                        $email->to($allUsers['email'])
                        //  $email->to('it.professional.bi@gmail.com')
                                ->template('Panel.new_upload', 'Panel.new_upload')
                                ->viewVars(['pname' => $producerName, 'bname' => $beatName, 'pid' => $producerId, 'bid' => $beatId, 'allBeats' => $randomBeats])
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('New Beats "'.$beatName.'" Uploaded On AmplifiHub');
                        $sent = $email->send();


        }
        }
    }
    
    public function downloadFile($file="") {
        
        $filepath=urldecode($file);
        echo "<script>console.log('$filepath');</script>";
        if(is_file($filepath))
        die("yes");
        die("No");
		$this->response = $this->response->withFile($file_path, array(
    ‘download’ => true,
    ‘name’ => ‘123.mp3’,
));
    
         exit(); 
}

    public function addBeatsSample() {
        $this->loadModel('SampleStore');
        $store = $this->SampleStore->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        //check the subscription
        //check if it is still active



        if ($this->request->is('ajax')) {

            //debug($checkgold->first()->expiry);

             @$this->request->data['sample_price'] = (int) $this->request->data['sample_price'];
             @$this->request->data['year'] = date('Y');
            //   echo '<pre>';print_r($this->request->getData());exit;
                $store = $this->SampleStore->patchEntity($store, $this->request->getData());
                if ($this->SampleStore->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The beat has been saved to store.']);
                    //  $this->Flash->success(__('The beat has been saved to store.'));
                    //return $this->redirect(['action' => 'add']);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }


    }

    public function add2() {
       $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $this->loadModel('Track');
        $this->loadModel('Country');
        $conn = ConnectionManager::get('default');
        
        $title="Upload Tracks For Distribution";
        $this->loadModel('Users');
        $user = $this->Auth->user('id');
        $userid = $this->Users->find()->where(['id' => $user])->first();

        if ($this->request->is('ajax')) {

            if($this->request->data['advisory']===NULL)
                $this->request->data['advisory']=0;
            //debug($checkgold->first()->expiry);
            @$this->request->data['user_id'] = $user;
            @$this->request->data['label']=$this->request->data['label'];
            @$this->request->data['advisory']=$this->request->data['advisory'];
            @$this->request->data['production_year']=$this->request->data['production_year'];
            @$this->request->data['authors']=$this->request->data['authors'];
            @$this->request->data['composers']=$this->request->data['composers'];
            $store = $this->Track->newEntity($this->request->getData());
            //  
                $store = $this->Track->patchEntity($store, $this->request->getData());
             
                if ($this->Track->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'Your Track request has been sent to AR.']);
                    $this->loadModel('Genres');
                    $store->genre = $this->Genres->get($store->genre)->genre;
                    $trackLink = \Cake\Routing\Router::url(['action' => 'viewTrack', $store->id], true);
                    $email = new Email();
                    $email->to('distribution@amplifihub.com')
                          ->template('track')
                          ->viewVars(['content' => 'New track submitted. Click <a href="'.$trackLink.'">here</a> to view track. \n Or follow the link: '.$trackLink, 'trackData'=>$store->toArray()])
                          ->emailFormat('html')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject('New Track submitted On AmplifiHub By '.$userid->aka);
                    $email->send();
                    
                    die;
                    //  $this->Flash->success(__('The beat has been saved to store.'));
                    //return $this->redirect(['action' => 'add']);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }
        
            
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set('countries', $this->Country->find('list', [
            'keyField' => 'nicename',
            'valueField' => 'nicename'
        ])->toArray());
        $this->set(compact('user'));
        $this->set(compact('track'));
        $this->set(compact('pUser','genrevalue', 'xclusive', 'beatId', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today'));
        $this->set('_serialize', ['store']);


    }


        public function addPacks() {
        $this->loadModel('PacksStore');
        $store = $this->PacksStore->newEntity();
        //print_r($store);exit;
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        //check the subscription
        //check if it is still active



        if ($this->request->is('ajax')) {

            //debug($checkgold->first()->expiry);

            // @$this->request->data['packs_price'] = (int) $this->request->data['packs_price'];
            //   echo '<pre>';print_r($this->request->getData());exit;
                $store = $this->PacksStore->patchEntity($store, $this->request->getData());
                if ($this->PacksStore->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The Pack has been saved to store.']);
                    //  $this->Flash->success(__('The beat has been saved to store.'));
                    //return $this->redirect(['action' => 'add']);
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }


    }

    /**
     * Admin Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function adminadd() {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $store = $this->Stores->newEntity();
        if ($this->request->is('post')) {
            $store = $this->Stores->patchEntity($store, $this->request->getData());
            if ($this->Stores->save($store)) {
                $this->Flash->success(__('The store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store could not be saved. Please, try again.'));
        }

        $this->set('user', $this->Stores->Users->find('list'));
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'cart'));
        $this->set('_serialize', ['store', 'user', 'genre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();
        $user = $this->Auth->user();
        $store = $this->Stores->get($id, [
            'contain' => []
        ]);
        // print_r($store->hire);exit;
        //debug($user);
        
        $title="Edit Your Beat";
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart','title'));
        $this->set('_serialize', ['store']);
    }
    
    
    public function accept($id = null) {
        $this->loadModel('Track');
        $user = $this->Auth->user();
        $track = $this->Track->get($id);
        $track->booking =1;
        if ($this->Track->save($track)) {
            $this->Flash->success(__('Accepted.'));
        }
        else
            $this->Flash->error(__('Unable to Accept.'));
        return $this->redirect(['action' => 'tracks']);
    
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart'));
        $this->set('_serialize', ['store']);
    }
    
     public function reject($id = null) {
        $this->loadModel('Track');
        $user = $this->Auth->user();
        $track = $this->Track->get($id);
        $track->booking =2;
        if ($this->Track->save($track)) {
            $this->Flash->success(__('Rejected.'));
        }
        else
            $this->Flash->error(__('Unable to Accept.'));
        return $this->redirect(['action' => 'tracks']);
    
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart'));
        $this->set('_serialize', ['store']);
    }
    
    
     public function trackRemarks() {
        $this->loadModel('Track');
        $tracks = TableRegistry::getTableLocator()->get('Track');
    $query = $tracks->query();
    //print_r($query); die;
    $id=$_POST['track_id'];
    $links=implode(',',$_POST['link']);
    $uploaded_to=implode(',',$_POST['name']);
    $remarks =$_POST['remarks'];
    $graph =$_POST['graph'];
    if(
    $query->update()
    ->set(['remarks' => $remarks])
    ->set(['links' => $links])
    ->set(['uploaded_to' => $uploaded_to])
    ->set(['graph' => $graph])
    ->where(['id' => $id])
    ->execute()
        )
     {
            $this->Flash->success(__('Remarks Added.'));
        }
        else
            $this->Flash->error(__('Unable to Add Remarks.'));
        return $this->redirect(['action' => "view-track/$id"]);
    }

    //THis method edits beats via ajax request

    public function editBeats() {
        if(isset($_FILES["cover"]) && isset($_POST["new_croppie_img"]) && $_POST["new_croppie_img"] != ''){
             $this->setCroppedCoverImage();
        }

        if($this->request->getData('lease_access') && $this->request->getData('lease_access') == 1){
            // do operation
            $this->request->data['lease_price'] = "";
        }
        // print_r($this->request->getData('hire'));exit;
        $this->autoRender = false;
        $id = $this->request->data['storeId'];
        $store = $this->Stores->get($id, [
            'contain' => []
        ]);
        
        if($this->request->getData('hire') == "" || $this->request->getData('hire') == null){
            $this->request->data['hire'] = 0;
        }
        
        $store = $this->Stores->patchEntity($store, $this->request->getData());
        // print_r($store);exit;
        if ($this->Stores->save($store)) {
            echo json_encode(['error' => "no", 'message' => 'Your beat has successfully been updated']);
        } else {
            echo json_encode(['validation' => $store->errors()]);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Store id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->Stores->get($id);
        if ($this->Stores->delete($store)) {
            $this->Flash->success(__('The beat has been deleted.'));
        } else {
            $this->Flash->error(__('The beat could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }

    public function addBeatToPromote() {
        $this->autoRender = false;

        $storeId = $this->request->data['beatId'];
        $days = $this->request->data['noOfDays'];
        $totalFee = (int) $days * 500;



        $beatstopromote_table = TableRegistry::get('beatstopromote');
        $beatstopromote_details = $beatstopromote_table->newEntity();
        $beatstopromote_details->store_id = $storeId;
        $beatstopromote_details->days = $days;
        $beatstopromote_details->status = "No payment yet";
        $beatstopromote_details->fee = $totalFee;



        if ($beatstopromote_table->save($beatstopromote_details)) {
            $this->Flash->success(__("Beat Successfully added. Click on Pay now to promote beat"));
            return $this->redirect($this->referer());
        }
    }

    public function addBeatId() {
        $this->autoRender = false;
        $id = $this->request->data['id'];
        $session = $this->request->session();
        $session->write('promoteBeatId', $id);

        echo "ok";
    }

    public function approvePromotedBeat($id = null) {
        $this->loadModel('Beatstopromote');
        $beatPromoteInfo = $this->Beatstopromote->find('all', ['limit' => 1])->where(['id' => $id])->toArray();
        $beatId = $beatPromoteInfo[0]['id'];
        $days = $beatPromoteInfo[0]['days'];
        $beatstopromote_table = TableRegistry::get('beatstopromote');
        $beatstopromote = $beatstopromote_table->get($beatId);
        $beatstopromote->status = "Activated";
        $beatstopromote->start_date = date('Y-m-d');
        $beatstopromote->end_date = date('Y-m-d', strtotime(" + " . $days . " days"));



        if ($beatstopromote_table->save($beatstopromote)) {

            $this->Flash->success(__('Beat successfully approved'));
            return $this->redirect(['action' => 'promotebeats']);
        } else {

            $this->Flash->error(__('There was an error approving promoted beat'));
        }
    }

    public function addBeatPayment($respdata = null) {
        $result = $this->paystackcallback($respdata);
    }

    private function paystackcallback($reference) {

        $respdata = $this->Paystack->verifytransaction($reference);

        //check if status is true, else redirect with error message
        if (!$respdata['status']) {
            $errmsg = $respdata['message'];
            $this->Flash->error(__('Payment verification error ' . $respdata['message']));
            return $this->redirect(['controller' => 'stores', 'action' => 'promotebeats']);
        }

        //if data result is success, then save and active user's reference after confirming it is not yet saved and give value to the client
        if ($respdata['data']['status'] == "success") {

            //give user value/save into subscription
            $result = $this->_add($respdata);
        }
    }

    protected function _add($respdata = null) {
        $session = $this->request->session();

        $this->loadModel('Beatstopromote');

        $beatPromoteInfo = $this->Beatstopromote->find('all', ['limit' => 1])->where(['id' => $session->read('promoteBeatId')])->toArray();
        $beatId = $beatPromoteInfo[0]['id'];
        $beatstopromote_table = TableRegistry::get('beatstopromote');
        $beatstopromote = $beatstopromote_table->get($beatId);
        $beatstopromote->status = "Payment made";
        $beatstopromote->amount_paid = substr($respdata['data']['amount'], 0, -2);
        $beatstopromote->tnx_reference = $respdata['data']['reference'];


        if ($beatstopromote_table->save($beatstopromote)) {

            $this->Flash->success(__('Your Payment has been received. We will get back to you shortly'));
            return $this->redirect(['action' => 'promotebeats']);
        } else {

            $this->Flash->error(__('There was an error with your Payment'));
            return $this->redirect(['action' => 'promotebeats']);
        }
    }

    /**
     * webhook method
     * integrated to paystack api
     */
    public function webhook() {

        // Retrieve the request's body
        $body = @file_get_contents("php://input");
        $signature = (isset($_SERVER['HTTP_X_PAYSTACK_SIGNATURE']) ? $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] : '');

        /* It is a good idea to log all events received. Add code *
         * here to log the signature and body to db or file       */

        if (!$signature) {
            // only a post with paystack signature header gets our attention
            exit();
        }

        define('PAYSTACK_SECRET_KEY', 'sk_test_a5f08ca803dfffd53a521bfda552684c2a795539');
        // confirm the event's signature
        if ($signature !== hash_hmac('sha512', $body, PAYSTACK_SECRET_KEY)) {
            // silently forget this ever happened
            exit();
        }

        http_response_code(200);
        // parse event (which is json string) as object
        // Give value to your customer but don't give any output
        // Remember that this is a call from Paystack's servers and
        // Your customer is not seeing the response here at all
        $event = json_decode($body);
        switch ($event->event) {
            // charge.success
            case 'charge.success':
                // TIP: you may still verify the transaction
                // before giving value.
                break;
        }
        exit();
    }

    public function bitPlayont() {
        $listing_id = $this->request->query('id');
        if ($listing_id) {
            $query = $this->Stores->query();
            $result = $query->update()->set($query->newExpr('play_count = play_count + 1'))->where(['id' => $listing_id])->execute();
        }
        die();
    }
    
    public function bitPlayontSample() {
        $this->loadModel('SampleStore');
        $listing_id = $this->request->query('id');
        if ($listing_id) {
            $query = $this->SampleStore->query();
            $result = $query->update()->set($query->newExpr('play_count = play_count + 1'))->where(['id' => $listing_id])->execute();
        }
        die();
    }
    
    public function addLike() {
        $conn = ConnectionManager::get('default');
        $user = $this->Auth->user('id');
        if($this->Auth->user('id') == ""){
            echo "notlogin";
            die();
        }
        $ip = $_SERVER['SERVER_ADDR'];
        $listing_id = $this->request->query('id');
        
        $checkIP = $conn->execute("SELECT * FROM beatlikes WHERE beat_id = $listing_id AND user_id = $user limit 1")->fetchAll('assoc');
        // print_r($checkIP[0]['ip']);exit;
        if($checkIP[0]['user_id'] == ""){
            if ($listing_id) {
            $query = $this->Stores->query();
            $result = $query->update()->set($query->newExpr('likes = likes + 1'))->where(['id' => $listing_id])->execute();
            $conn->execute("INSERT INTO beatlikes (beat_id, user_id, likes) VALUES($listing_id, $user, 1)");
        }
        $usid = $conn->execute("SELECT likes FROM stores WHERE id = $listing_id limit 1")->fetchAll('assoc');
        echo $usid[0]['likes'];
        }else{
            echo "liked";
        }
        
        die();
    }

    public function samplePage()
    {
        $title = "AmplifiHub Sample Page";
        $this->set(compact('userid','AmpKeyword', 'title', 'description', 'recent', 'promoted', 'mm', 'subscriptions', 'genre', 'artistelistn', 'mmlistn', 'banner', 'youtubeVideo', 'powerUser'));
        $this->set('_serialize', ['samplePage']);
    }

     public function aAndR()
    {
        $title = "AmplifiHub A and R";
        $this->set(compact('userid','AmpKeyword', 'title', 'description', 'recent', 'promoted', 'mm', 'subscriptions', 'genre', 'artistelistn', 'mmlistn', 'banner', 'youtubeVideo', 'powerUser'));
        $this->set('_serialize', ['aAndR']);
    }
    
    public function giveaway(){

        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        
        $conn = ConnectionManager::get('default');

        $topProducer = $this->Users->find('all', [
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors', 'Stores'],
            'conditions' => ['Users.top_producer' => 1],
            'limit' => 1,
        ]);


        $cart = $this->Carts->getCount();

        $this->loadModel('Genres');
        $this->loadModel('PageBanner');
        //$this->viewBuilder()->theme('Panel')->layout('store');
        $this->viewBuilder()->theme('Panel')->layout('newdesign');
        $display = 'show';
        $paginate = [
            'limit' => 10,
        ];
        $shop = 'hide';
        $item = 0;

        $carts = $this->Carts->readProduct();
        //debug($carts);
        $products = [];
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;
            }
        }
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.promoted' => 'yes'],
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();

        $exclusiveBeatHubQuery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid'],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusiveBeatHub = $exclusiveBeatHubQuery->toArray();

        $trendingQuery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => ['Stores.trending' => 1],
            'limit' => 6,
            'order' => ['Stores.created' => 'ASC']
        ]);
        $trendingBid = $trendingQuery->toArray();
        $carts = $this->Stores->readProduct();
        if (count($carts) < 1) {
            $shop = 'show';
            $item = count($carts);
        }

        $genres = $this->Genres->find('all', [
            'order' => ['Genres.genre' => 'ASC']
        ]);
        $date = date('Y-m-d');
        $query = $this->Stores->find('all');
        $query->matching(
                'Users.Subscriptions', function($q) use($date) {
            return $q->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active'])      //here
                            ->matching('Plans', function($x) {
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_x4pycaeyn4hp7lo'], ['plan_code' => 'PLN_1aolpmm4rlzsv19'], ['plan_code' => 'PLN_59gb0gsmu5ace70'], ['plan_code' => 'PLN_brgaofxfgxyqx1p'],  ['plan_code' => 'PLN_fl30uhkrfetgdyu'],  ['plan_code' => 'PLN_yru59bwi99gz537'],
                                        ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $query->where(['Users.expired' => 0]);
        $genreId = "";
        if (!empty($this->request->query('beats'))) {
            $search = $this->request->query('beats');
            $query->where(['Stores.name Like' => $search . '%']);

            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('genre'))) {
            $genreId = $this->request->query('genre');
            $query->where(['Genres.id ' => $genreId]);
            $stores = $query; //$this->paginate($query,$paginate);
        } elseif (!empty($this->request->query('term'))) {
            $term = $this->request->query('term');

//            $query->where(function (QueryExpression $exp) {
//        $orConditions = $exp->or_(['Stores.name LIKE' => $term . '%'])
//            ->eq(['Users.fullname LIKE' => $term . '%'])
//                ->eq(['Genres.genre LIKE' => $term . '%']);
//        return $exp
//        ->add($orConditions);
//        });
            $query->where(['Stores.name LIKE' => $term . '%'])
                    ->orWhere(['Users.aka LIKE' => $term . '%'])
                    ->orWhere(['Genres.genre LIKE' => $term . '%']);
            $stores = $query; //$this->paginate($query,$paginate);
        } else {
            $stores = $query; //$this->paginate($query,$paginate);
        }
        $query1 = $this->Stores->find('all');
        $query1->contain(['Genres', 'Users']);
        $query1->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query1->order(['Stores.created' => 'DESC'])
        ;
        $promoted1 = $query1->toArray();
        $role = $this->Auth->user('role');
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 2]])->first();

        //debug($products);
        $title = "AmplifiHub Giveaway For Producers - AmplifiHub";
        //var_dump($genreId);exit;
        foreach($genres as $genre){
            if($genre->id == $genreId){
                $title = "Download $genre->genre Beats and Instrumentals on AmplifiHub";
                break;
            }
        }
        
        //competition
        $stores = $conn->execute("SELECT *, stores.id as id, stores.likes as likes FROM `beatcompetition` LEFT JOIN stores ON beatcompetition.beat_id=stores.id LEFT JOIN users ON users.id = beatcompetition.user_id LEFT JOIN genres ON genres.id = stores.music_genre")->fetchAll('assoc');
        
        
        // print_r($stores);exit;
        $description = "$genre->genre genre beats Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap | Download Nigerian Beats. Buy afro beats today, we got the coolest African dancehall Beats";
        $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental";
        $this->set(compact('topProducer', 'trendingBid', 'exclusiveBeatHub', 'AmpKeyword', 'title', 'description', 'stores', 'role', 'display', 'shop', 'item', 'genres', 'genreId', 'cart', 'promoted', 'promoted1', 'products', 'banner'));
        $this->set('_serialize', ['stores']);
    }


            //This method adds Freebeatsdownloads records using ajax
    public function downloadfreebeat() {
        $user = $this->Auth->user('id');
        $post_data = $this->request->getData();
         $this->loadModel('Freebeatsdownloads');
        $error = "yes";
        $message = 'Something error occured';
        if ($this->request->is('ajax')) {
          $freebeat = $this->Freebeatsdownloads->newEntity();
          $freebeat = $this->Freebeatsdownloads->patchEntity($freebeat, $post_data);
          $freebeat->uploader_id =  $this->Stores->find()->select(['user_id'])->where(['id' => $post_data["store_id"]])->first()->user_id;
          $freebeat->downloader_id = $user;
          if ($this->Freebeatsdownloads->save($freebeat)) {
            $error = "no";
            $message = 'You can download the beat.';
          }
        }
        echo json_encode(['error' => $error, 'message' => $message]);
    }
    
    public function freebeatDownload($key = null, $value = null, $free = true, $license = 'lease')
    {
        if ($key !== null && !empty($key) && $value !== null && !empty($value)) {
            switch ($license) {
                case 'sample':
                case 'playlist':
                    $this->loadModel('SampleStore');
                    $priceKey = 'sample_price';
                    $store = $this->SampleStore->find()->select(['id', $priceKey, $key])->where([$key => $value])->first();
                    break;
                case 'pack':
                    $this->loadModel('PacksStore');
                    $priceKey = 'sample_price';
                    $store = $this->PacksStore->find()->select(['id', $priceKey, $key])->where([$key => $value])->first();
                    break;
                
                default:
                    $priceKey = 'lease_price';
                    $store = $this->Stores->find()->select(['id', $priceKey, $key])->where([$key => $value])->first();
                    break;
            }
            $message = '';
            
            if ($store) {
                if ($free === true) {
                    if (!$store->{$priceKey}) {
                        $file_link = "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/$key/" . $store->{$key};
                        $this->autoRender = false;
                        return $this->response
                            ->withType(pathinfo($file_link, \PATHINFO_EXTENSION))
                            ->withDownload(basename($file_link))
                            ->withLength(filesize($file_link))
                            ->withBody(new \Cake\Http\CallbackStream(function () use ($file_link) {
                                ob_end_flush();
                                ob_implicit_flush();
                                readfile($file_link);
                            }));
                    }
                    $message = "Requested file is not for free";
                } else {
                    $this->loadModel('Carts');
                    switch ($license) {
                        case 'sample':
                        case 'playlist':
                            $cond = ['sample_id' => $store->id, 'buyer_id' => $this->Auth->user('id'), 'status' => 'paid'];
                            $file_link = "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/" . $store->{$key};
                            break;
                        case 'pack':
                            $cond = ['pack_id' => $store->id, 'buyer_id' => $this->Auth->user('id'), 'status' => 'paid'];
                            $file_link = "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/" . $store->{$key};
                            break;
                        
                        default:
                            $cond = ['beat_id' => $store->id, 'buyer_id' => $this->Auth->user('id'), 'status' => 'paid'];
                            $file_link = "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/$key/" . $store->{$key};
                            break;
                    }
                    
                    if ($this->Carts->exists($cond)) {
                        $this->autoRender = false;
                        return $this->response
                            ->withType(pathinfo($file_link, \PATHINFO_EXTENSION))
                            ->withDownload(basename($file_link))
                            ->withLength(filesize($file_link))
                            ->withBody(new \Cake\Http\CallbackStream(function () use ($file_link) {
                                ob_end_flush();
                                ob_implicit_flush();
                                readfile($file_link);
                            }));
                    }
                    $message = "Requested file not in your purchases";
                }
            } else {
                $message = "Invalid file request";
            }
            $this->Flash->error("Error: $message");
        }
        return $this->redirect($this->referer());
    }

}
