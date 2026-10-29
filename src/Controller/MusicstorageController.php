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
class MusicstorageController extends AppController {

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
                                        ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy'], ['plan_code' => 'PLN_1monthfree']]]);
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
        $title = "African Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap - AmplifiHub Beat Hub";
        $description = "African Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap | Download Nigerian Beats. Buy afro beats today, we got the coolest African dancehall Beats";
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
                                      ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy'], ['plan_code' => 'PLN_1monthfree']]]);
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

      $title = "Download Mp3 Free Afro Beats | Buy African Instrumentals - Listen to ".$row->name;
      $description = "Checkout $row->name instrumental beat. African Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap | Download Nigerian Beats. Buy afro beats / download free african beats today, we got the coolest African dancehall Beats";
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
                                        ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy'], ['plan_code' => 'PLN_1monthfree']]]);
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
        $title = "African Afrobeat Instrumentals For Sale | Dancehall | Beats | Afropop | Afro Trap - AmplifiHub Beat Hub";
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
                                return $x
                                        ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy'], ['plan_code' => 'PLN_1monthfree']]]);
                            });
        });
        $query->contain(['Genres', 'Users']);
        $query->select(['Users.id', 'Users.email', 'Users.fullname', 'Users.aka', 'Stores.id', 'Stores.name', 'Stores.length','Stores.likes', 'Stores.bpm', 'Stores.lease_price', 'Stores.premium_price', 'Stores.exclusive_price', 'Stores.cover', 'Stores.created', 'Stores.sample_name', 'Stores.lease_path', 'Stores.premium_path', 'Stores.exclusive_path', 'Stores.lease_name', 'Stores.lease_type', 'Stores.premium_name', 'Stores.exclusive_name', 'Genres.genre']);
        $query->order(['Stores.created' => 'DESC'])->limit(10);
        $query->where(['Users.expired' => 0]);
        $query->where(['Stores.lease_price' => ""]);
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
        $title = "Download free African afro beats instrumental on AmplifiHub - Freebeats Download | Free Afro Instrumentals | Free Afropop Beats | Afrosoul instrumentals | Afrobeat";

        foreach($genres as $genre){
            if($genre->id == $genreId){
                $title = "Download $genre->genre Genre Beats and Instrumentals Mp3 For Free on AmplifiHub";
                break;
            }
        }

        $description = "Get royalty free $genre->genre african beats here. Download the best of African beats instrumental on AmplifiHub. Check us out now and download freebeats. Free African beats | Free Afrobeat Instrumentals | Free beats.";
        $AmpKeyword = "Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental";
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
        $title = "$userProfile->aka Beat Store On AmplifiHub - Sell Beats Online In Africa";
        foreach($genres as $genre){
            //var_dump($genre->id);exit;
            if($genre->id == $genreId){
                $title = "Download $genre->genre Genre Beats and Instrumentals By $userProfile->aka on AmplifiHub";
                break;
            }
        }

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
        
        $checksilver = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_qfrvqam60i0n7es' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checksilver)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkgold = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_me9kluzjz7yklkh' AND expiry >= '$now'")->fetchAll('assoc');
        
        // print_r($checksilver);exit;
        
        if (!empty($checkgold)) {
            // echo "ok";
            // $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }
        
        $checkplatinum = $conn->execute("SELECT * FROM subscriptions WHERE user_id= $userid AND plan_id = 'PLN_fmiz4z0xpo93zuy' AND expiry >= '$now'")->fetchAll('assoc');
        
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

        $this->set(compact('title', 'stores', 'prom', 'role', 'exclusive', 'display', 'shop', 'genres', 'genreId', 'item', 'id', 'promoted', 'promoted1', 'cart', 'products', 'userProfile', 'mixmasterings', 'substatus'));
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
                                        ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy'], ['plan_code' => 'PLN_1monthfree']]]);
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
                                        ->where(['OR' => [['plan_code' => 'PLN_qfrvqam60i0n7es'], ['plan_code' => 'PLN_me9kluzjz7yklkh'], ['plan_code' => 'PLN_fmiz4z0xpo93zuy']]]);
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
    public function drive() {

        $this->loadModel('Carts');
        $this->loadModel('Musicians');
        $cart = $this->Carts->getCount();
        $user = $this->Auth->user('id');
        
        if($this->Auth->user('role') == "admin"){
        $g = $this->Musicstorage->find('all')->select(['Users.email', 'Users.aka', 'Users.role', 'Musicstorage.lyrics', 'Musicstorage.id', 'Musicstorage.name','Musicstorage.music_genre', 'Musicstorage.sample_name', 'Musicstorage.sample_path', 'Musicstorage.user_id', 'Genres.genre'])->contain(['Genres', 'Users']);
        $stores = $this->paginate($g);
        }else{
            $g = $this->Musicstorage->find('all')->select(['Users.email', 'Users.aka', 'Users.role', 'Musicstorage.lyrics', 'Musicstorage.id', 'Musicstorage.name','Musicstorage.music_genre', 'Musicstorage.sample_name', 'Musicstorage.sample_path', 'Musicstorage.user_id', 'Genres.genre'])->contain(['Genres', 'Users'])->where(['Musicstorage.user_id' => $this->Auth->user('id')]);
        $stores = $this->paginate($g);
        }
        $role = $this->Auth->user('role');
        // print_r($role);exit;
        $exclusivequery = $this->Carts->find('all', [
            // 'contain' => ['Users', 'Genres'],
            'conditions' => ['Carts.beat_type' => 'exclusive', 'Carts.status' => 'paid', 'Carts.buyer_id' => $user],
            'order' => ['Carts.created' => 'ASC']
        ]);

        $exclusive = $exclusivequery->toArray();
        // $musicians = $this->Musicians->find('all')->order('requester_name')->toArray();
        /*$musician = [];
        foreach($musicians as $mus){
            // print_r($mus->requester_name);
            $musician = $mus['requester_name'];
        }*/
        // print_r($musicians);exit;
        // exit;
        $this->set('musicians', $this->Musicians->find('list', [
            'keyField' => 'seller_name',
            'valueField' => 'seller_name'
        ])->group('seller_name')->toArray());
        $title="My Music Management Drive";
        $this->set(compact('stores', 'role', 'cart', 'title', 'exclusive', 'musician', 'user'));
        $this->set('_serialize', ['stores']);
    }
    
       public function sharemusic() {
        $this->loadModel('Subscriptions');
        $this->loadModel('Stores');
        $this->loadModel('Musicstorage');
        $this->loadModel('Musicshare');
        $this->loadModel('Users');
        $this->loadModel('Musicians');
        $conn = ConnectionManager::get('default');
        $store = $this->Musicshare->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        $formData=$this->request->getData();
        $substatus = null;
        
        $musician_id = $formData['musician_id'];
        $musician_email = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $musician_id)
        ));
        $musician_email=$musician_email->first();
        $musician_email = $musician_email->email;
        
        $requester_id = $formData['user_id'];
        $requester_aka = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $requester_id)
        ));
        $requester_aka = $requester_aka->first();
        $requester_aka = $requester_aka->aka;
        
        $music_id = $formData['music_id'];
        $music_name = $this->Musicstorage->find('all', array(
        'conditions' => array('Musicstorage.id' => $music_id)
        ));
        $music_name = $music_name->first();
        $music_name = $music_name->name;
        
        if ($this->request->is('post')) {
            
            $accepts = $this->request->accepts();
        //  print_r($musician_email);exit;
            if ($accepts) {
                
                $store = $this->Musicshare->patchEntity($store, $this->request->getData());
                // print_r($store);exit;
                if ($storeSaved = $this->Musicshare->save($store)) {
                
                $email = new Email('noreply');
                  $email->to($musician_email)
                          ->template('Panel.music_share')
                          ->viewVars(['music_id' => $music_id, 'requester_aka'=>$requester_aka, 'music_name'=>$music_name])
                          ->emailFormat('html')
                          ->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject('A Music is Shared with You');
                $email->send();
                
                    $this->Flash->success(__('Your music has been shared.'));
                    return $this->redirect(['controller' => 'musicstorage','action' => 'drive']);
                    
                } else {
                    $this->Flash->error(__('Something went wrong.'));
                    return $this->redirect(['controller' => 'musicstorage','action' => 'drive']);
                }
            }
            
           
        
        }
    }
    
    
    
    public function musicianid() {
        
        $this->loadModel('Musicstorage');
        $this->loadModel('Musicshare');
        $this->loadModel('Users');
        $this->loadModel('Musicians');
        $conn = ConnectionManager::get('default');
        $store = $this->Musicshare->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        $formData=$this->request->getData();
        $substatus = null;
        // print_r($formData);exit;
        $musician_id = $this->Users->find('all', array(
        'conditions' => array('Users.aka' => $formData['keyword'])
        ));
        $musician_id=$musician_id->first();
        // print_r($musician_id->id);exit;
        echo $musician_id->id;
        
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
        $this->loadModel('Musicstorage');
        $this->loadModel('Sharebeats');
        $this->loadModel('Subscriptions');
        $this->loadModel('Subscriptionmusic');
        $conn = ConnectionManager::get('default');
        $cart = $this->Carts->getCount();

        $store = $this->Musicstorage->newEntity();
        // print_r($store);exit;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');

        //permission change user account
        $changePermission = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $user)
        ));
        $pUser=$changePermission->first();


        //trial account subcription

        /*$trial = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $user)
        ));
        $number = $trial->count();*/

       //total beats for trial account

        $beats = $this->Musicstorage->find('all', array(
        'conditions' => array('Musicstorage.user_id' => $user)
    ));
        $beatcount = $beats->count();
        
        $storagesize = $this->Musicstorage->find('all', array(
        'conditions' => array('Musicstorage.user_id' => $user)
    ));
        $storagesize = $storagesize->sumOf('sample_size');
        $storagesize = round($storagesize / pow(1024, 3));
        // print_r($storagesize);exit;
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
        $checksilver = $this->Musicstorage->Subscriptionmusic->find('all', ['conditions' => ['Subscriptionmusic.user_id' => $user, 'Subscriptionmusic.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_ec5l0s8gs9h6giv']);
        });
        if (!$checksilver->isEmpty()) {
            $tnx_reference = $checksilver->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkgold = $this->Musicstorage->Subscriptionmusic->find('all', ['conditions' => ['Subscriptionmusic.user_id' => $user, 'Subscriptionmusic.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_lfw54gwvj1rcz85']);
        });
        if (!$checkgold->isEmpty()) {
            $tnx_reference = $checkgold->last()->tnx_reference;
            $substatus = 'active';
        }


        $checkplatinum = $this->Musicstorage->Subscriptionmusic->find('all', ['conditions' => ['Subscriptionmusic.user_id' => $user, 'Subscriptionmusic.expiry >=' => $now]])->matching('Plans', function($x) {
            return $x
                            ->where(['plan_code' => 'PLN_k6h1hh2nevezii3']);
        });
        if (!$checkplatinum->isEmpty()) {
            $tnx_reference = $checkplatinum->last()->tnx_reference;
            $substatus = 'active';
        }
        $checksilver1 = "";
        $checkgold1 = "";
        $checkplatinum1 = "";
        
        if (!$checksilver->isEmpty()) {
        $checksilver = $checksilver->toArray();
        $checksilver1 = $checksilver[0]['status'];
        
        }
        
        if (!$checkgold->isEmpty()) {
        $checkgold = $checkgold->toArray();
        $checkgold1 = $checkgold[0]['status'];
        }
        
        if (!$checkplatinum->isEmpty()) {
        $checkplatinum = $checkplatinum->toArray();
        $checkplatinum1 = $checkplatinum[0]['status'];
        }
        
        // print_r($checksilver1);exit;

        //end all user to email

        $title="Upload Your Music & Lyrics To Your Drive";
        $this->loadModel('Users');
        $userid = $this->Users->find()->where(['id' => $user])->first();
        //debug($userid);
        //debug(json_encode($genre, JSON_PRETTY_PRINT));
        //$this->set('user', $this->Stores->Users->find('list'));
        $this->set('genre', $this->Musicstorage->Genres->find('list'));
        $this->set(compact('user'));
        $this->set(compact('store'));
        $this->set(compact('pUser', 'genrevalue' ,'checksilver1', 'freeMonthCount', 'freeMonthExpire', 'xclusive', 'beatId', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today', 'checkgold1', 'checkplatinum1', 'storagesize'));
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
    public function addShare() {
        $this->loadModel('Subscriptions');
        $this->loadModel('Stores');
        $this->loadModel('Musicstorage');
        $this->loadModel('Users');
        $conn = ConnectionManager::get('default');
        $store = $this->Musicstorage->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        $formData=$this->request->getData();
        $substatus = null;
        
        // print_r($this->request->getData('lyrics'));exit;

        if ($this->request->is('ajax')) {
            
            $accepts = $this->request->accepts();
         
            if ($accepts) {
                
                $store = $this->Musicstorage->patchEntity($store, $this->request->getData());
                
                if ($storeSaved = $this->Musicstorage->save($store)) {
                
                    echo json_encode(['error' => "no", 'message' => 'The music has been saved to storage.', 'data_id' => $storeSaved->id]);
                    
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }
            
           
        
        }
    }
    
    public function listmusicians()
    {
        $this->loadModel('Musicians');
        $this->loadModel('Stores');
        $this->loadModel('Users');
        $user_id = $this->Auth->user('id');
        $user = $this->request->session()->read('Auth.User');
        // print_r($user['role']);exit;
        if($user['role'] == 'admin'){
        $g = $this->Musicians->find('all')->select(['Musicians.id', 'Musicians.seller_id', 'Musicians.requester_id', 'Musicians.music_id', 'Musicians.seller_name', 'Musicians.requester_name', 'Musicians.music_name', 'Musicians.created', 'Musicians.status']);
        }else{
        $g = $this->Musicians->find('all')->select(['Musicians.id', 'Musicians.seller_id', 'Musicians.requester_id', 'Musicians.music_id', 'Musicians.seller_name', 'Musicians.requester_name', 'Musicians.music_name', 'Musicians.created', 'Musicians.status'])->where(['Musicians.requester_id' => $this->Auth->user('id')]);
            
        }
        $mmrequesters = $this->paginate($g);
        // print_r($mmrequesters);exit;
        // $mmrequesters = $this->paginate($this->Stores);
        $title= "Collab Section - Musicians You Have Connected With";
        $this->set(compact('mmrequesters', 'title'));
        $this->set('_serialize', ['mmrequesters']);
    }
    
    public function musician($id = null)
    {
      $conn = ConnectionManager::get('default');
      $userid = $this->Auth->user('id');
      $aka = $this->Auth->user('aka');
      $this->loadModel('Messages');
      $this->loadModel('Messageshire');
      $this->loadModel('Mmrequesters');
      $this->loadModel('Hire');
      $this->loadModel('Musicstorage');
      $this->loadModel('Generatecontract');
      $this->loadModel('Musicshare');
      $this->loadModel('Musicians');
      $this->loadModel('Offer');
      $this->loadModel('Uploadfilemusicians');
      
      //search musician
      $search = $this->request->getQuery('search');
    //   $id = $this->request->getQuery('music_id');
      $checkNum = is_numeric($search);
      
        
            
    //   print_r($id);exit;
      if($checkNum == 1){
        $messanger = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $search)
        ));
        $messanger = $messanger->first();
        $messanger_name = $messanger->aka;
        $search = $messanger_name;
        $search = strtolower($search);
        
        return $this->redirect(['controller' => 'musicstorage/','action' => 'musician/'.$id.'?search='.$search]);
      }
      $search = strtolower($search);
    //   print_r($search);exit;
    // $search = "mb";
        if(!is_null($search)){
                
                $q = $this->request->getQuery('search');
                $users=TableRegistry::get('users')->find('all',[
                    'conditions'=>[
                        "OR"=>[
                            "users.email LIKE"=>"%$q%",
                            "users.firstname LIKE"=>"%$q%",
                            "users.lastname LIKE"=>"%$q%",
                            "users.aka LIKE"=>"%$q%",
                        ]
                    ]
                ]);
                
                

            $searchedUser = $users->toArray();
            // print_r($searchedUser);exit;
            $requester_id = $userid;
            $seller_id = $searchedUser[0]['id'];
            
            $requester = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $requester_id)
            ));
            $requester = $requester->first();
            $requester_name = $requester->aka;
            
            
            $Generatecontract = $this->Generatecontract->find('all', array(
            'conditions' => array('Generatecontract.id' => $userid)
            ));
            $generatecontract = $Generatecontract->toArray();
            // print_r($generatecontract);exit;
            
            $seller = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $seller_id)
            ));
            $seller = $seller->first();
            $seller_name = $seller->aka;
            $seller_id = $seller->id;
            
            
            
            // print_r($seller_id);exit;
            
            $music = $this->Musicstorage->find('all', array(
            'conditions' => array('Musicstorage.id' => $id)
            ));
            $music = $music->first();
            $music_name = $music->name;
            $music_creator = $music->user_id;
            
            
            $checkRecord = $this->Musicians->find('all', array(
            'conditions' => array('Musicians.music_id' => $id, 'Musicians.seller_id' => $seller_id,  'Musicians.requester_id' => $requester_id)
            ));
            $checkRecord = $checkRecord->first();
            
            $checkRecord1 = $this->Musicians->find('all', array(
            'conditions' => array('Musicians.music_id' => $id, 'Musicians.seller_id' => $requester_id,  'Musicians.requester_id' => $seller_id)
            ));
            
            $checkRecord1 = $checkRecord1->first();
            
            
            // print_r($checkRecord1);exit;
            // $orderid = 'msc'.round(microtime(true));
            // $orderid = "";
            if(empty($checkRecord)){
            $orderid = 'msc'.round(microtime(true));
            $conn->execute("INSERT INTO musicians (seller_id, requester_id, music_id, orderid, seller_name, requester_name, music_name, status) VALUES($seller_id, $requester_id, $id, '".$orderid."', '".$seller_name."', '".$requester_name."', '".$music_name."', 'active')");
            
            $checkRecord = $this->Musicians->find('all', array(
            'conditions' => array('Musicians.music_id' => $id, 'Musicians.seller_id' => $seller_id,  'Musicians.requester_id' => $requester_id)
            ));
            $checkRecord = $checkRecord->first();
            
            $orderid = $checkRecord->orderid;
                $conn->execute("INSERT INTO musicians (seller_id, requester_id, music_id, orderid, seller_name, requester_name, music_name, status) VALUES($requester_id, $seller_id, $id, '".$orderid."', '".$requester_name."', '".$seller_name."', '".$music_name."', 'active')");
                
                //email 
            
            $musician_id1 = $search;
            $musician_email1 = $this->Users->find('all', array(
            'conditions' => array('Users.aka' => $musician_id1)
            ));
            $musician_email1 = $musician_email1->first();
            $musician_email1 = $musician_email1->email;
            
            $requester_aka1 = $this->Auth->user('aka');;
            
            $music_name1 = $this->Musicstorage->find('all', array(
            'conditions' => array('Musicstorage.id' => $id)
            ));
            $music_name1 = $music_name1->first();
            $music_name1 = $music_name1->name;
            // print_r($requester_aka1);exit;
            $email = new Email('noreply');
                  $email->to($musician_email1)
                          ->template('Panel.chatwithme')
                          ->viewVars(['music_id' => $id, 'requester_aka'=>$requester_aka1, 'music_name'=>$music_name1])
                          ->emailFormat('html')
                          ->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject($requester_aka1.' Want To Chat with You');
            $send = $email->send();
            
            //end email
            }
            }
            
            if(!empty($checkRecord1)){
                $orderid = $checkRecord1->orderid;
            }else if(!empty($checkRecord)){
                $orderid = $checkRecord->orderid;
            }
            
            if(!empty($checkRecord1)){
                $music_id = $checkRecord1->music_id;
            }else if(!empty($checkRecord)){
                $music_id = $checkRecord->music_id;
            }
      
      //end musician search
        $saved = $this->Messages->updateAll(['status'=>'read'],['orderid'=>$orderid]);
      
            $msc_creator = $this->Users->find('all', array(
            'conditions' => array('Users.id' => $music_creator)
            ));
            $msc_creator = $msc_creator->first();
            $msccreator_name = $msc_creator->aka;
            // $seller_id = $seller->id;
            
      $mmrequester = $this->Musicstorage->find('all', array(
            'conditions' => array('Musicstorage.id' => $id)
        ));
      $mmrequester = $mmrequester->first();
    //   print_r($id);exit;
      //$mmrequester = $this->Mmrequesters->find()->contain(['Users'])->where(['orderid'=>$id])->first();
      $msgid = $this->Musicstorage->Users->find()->where(['id'=>$mmrequester->user_id])->first();
        // print_r($seller_id);exit;
        if($seller_id == $userid){
        $messages = $this->Messages->find()->order(['Messages.created'=>'DESC'])->group(['Messages.id'])->where(['Messages.orderid'=>$id])->contain(['Users','Messagers'])->toArray();
        }else if($requester_id == $userid){
        $messages = $this->Messages->find()->order(['Messages.created'=>'DESC'])->group(['Messages.id'])->where(['Messages.orderid'=>$orderid])->contain(['Users','Messagers'])->toArray();
        }
        // print_r($messages);exit;
        // print_r($requester_id);exit;
        // print_r($seller_id);exit;
        $uploadfile = $this->Uploadfilemusicians->find()->order(['Uploadfilemusicians.timestamp'=>'DESC'])->where(['orderid'=>$orderid])->toArray();
        
        // $allow = $this->Musicshare->find()->order(['Musicshare.created'=>'DESC'])->where(['Musicshare.musician_id'=>$userid, 'allow' => '1'])->toArray();
        
        
        // print_r($seller_id);
        // print_r($id);
        // print_r($userid);
        
        // exit;
        
        $sharesS = $conn->execute("SELECT * FROM musicshare LEFT JOIN musicstorage ON musicshare.music_id = musicstorage.id WHERE musicshare.musician_id = '".$seller_id."' AND musicshare.music_id = '".$id."' AND musicshare.user_id = '".$userid."' ORDER BY musicshare.created DESC")->fetchAll('assoc');
        
        $sharesR = $conn->execute("SELECT * FROM musicshare LEFT JOIN musicstorage ON musicshare.music_id = musicstorage.id WHERE musicshare.musician_id = '".$userid."' AND musicshare.music_id = '".$id."' AND musicshare.user_id = '".$seller_id."' ORDER BY musicshare.created DESC")->fetchAll('assoc');
        
        
        // print_r($sharesS);exit;
        
        $cntGeneratorR = $conn->execute("SELECT  *, generatecontract.id as id, generatecontract.created as created FROM generatecontract LEFT JOIN users ON generatecontract.sender_id = users.id WHERE generatecontract.receiver_id = '".$userid."' AND music_id = '".$id."' AND orderid = '".$orderid."' ORDER BY generatecontract.id DESC")->fetchAll('assoc');
        
        $cntGeneratorS = $conn->execute("SELECT *, generatecontract.id as id, generatecontract.created as created FROM generatecontract LEFT JOIN users ON generatecontract.sender_id = users.id WHERE generatecontract.sender_id = '".$userid."' AND music_id = '".$id."' AND orderid = '".$orderid."' ORDER BY generatecontract.id DESC")->fetchAll('assoc');
        
        // print_r($cntGenerator);exit;
        // $this->Musicshare->Musicstorage->where(['Musicshare.musician_id'=>$userid])->order(['Musicshare.created'=>'DESC'])->toArray();
        
        //$offers = $this->Mmrequesters->Offer->find()->order(['Offer.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Offer'])->toArray();
        // print_r($shares);exit;
        $offers = $conn->execute("SELECT *, hire_offers.id as id, hire_offers.status as oStatus, hire_offers.amount as amount, hire_offers.payment as payment, hire_offers.user_id as user_id, hire_offers.requester_id as requester_id FROM hire_offers LEFT JOIN hire ON hire.id = hire_offers.order_id WHERE hire_offers.order_id = '".$id."' order by hire_offers.id DESC")->fetchAll('assoc');
        $offerLimit = $conn->execute("SELECT count(id) as total FROM custom_offers WHERE custom_offers.order_id = '".$id."'")->fetchAll('assoc');
        // $message = $this->Messages->find()->order(['Messages.created'=>'DESC'])->where(['orderid'=>$id])->contain(['Users','Messagers'])->first();
        $status = $checkRecord;
        //$offers = $this->Offer->find()->order(['Offer.created'=>'DESC'])->where(['order_id'=>$id])->toArray();
        // print_r($message);exit;
        // if($message == ""){
        //     $message = $message;
        // }else{
        //     $message = $message->toArray();
        // }
        $offers = "";
        $title="Collab / Chat Page - " .$msgid->aka;
        $this->set(compact('mmrequester','messages', 'message', 'offers', 'offerLimit', 'status', 'userid','msgid', 'id', 'uploadfile', 'title', 'searchedUser', 'shares', 'seller_id', 'generatecontract', 'music_creator', 'msccreator_name', 'cntGeneratorR', 'cntGeneratorS', 'requester_id', 'seller_id', 'orderid', 'music_id', 'aka', 'sharesS', 'sharesR'));
        $this->set('_serialize', ['mmrequester']);
    }
    
    public function searchMusicians()
    {
        $formData=$this->request->getData();
        
        $q = $formData['keyword'];
        // echo $q= $this->request->query('keyword');
                $users=TableRegistry::get('users')->find('all',[
                    'conditions'=>[
                        "OR"=>[
                            "users.aka LIKE"=>"%$q%",
                        ]
                        
                    ]
                ]);
                $users = $users->toArray();
                // print_r($users);exit;
                echo json_encode($users);
               
    }
    
    public function pricing($id = null) {
        $date = date('Y-m-d');
        $this->loadModel('Subscriptionmusic');
        $currentUserSubscription = $this->Subscriptionmusic->find('list', [
                    'keyField' => 'id',
                    'valueField' => 'plan_id'
                ])->where(['Subscriptionmusic.expiry >=' => $date, 'Subscriptionmusic.status' => 'active', 'user_id' => $this->Auth->user('id')])->hydrate(false)->toArray();
                
        $title="Manage Your Music Online In Africa | Generate Split Sheets - AmplifiHub Music Management Pricing ";
        $description = "Store your unreleased music and lyrics online | Collab with other musicians on AmplifiHub and generate split sheets. Subscribe now to take control of your catalogue.";
        $AmpKeyword = "Music Management, generate split sheets, generate music contracts,Store music online, AmplifiHub, African music makers, African music making market, Sell beats online, Afrobeat Instrumentals for sale, Afro beat, Afro instrumental beats, buy afrobeats instrumentals";
        $this->set(compact('currentUserSubscription', 'title','description','AmpKeyword'));
        $this->viewBuilder()->theme('Panel')->layout('musicpricing');
    }
    
    public function uploadFile() {
        
        $this->loadModel('Uploadfilemusicians');
        $store = $this->Uploadfilemusicians->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        // print_r($store);exit;
        
        if ($this->request->is('post')) {
            
            if(isset($_FILES["name"]) && isset($_POST["messager_id"]) && isset($_POST["orderid"]) && $_POST["user_id"] != ''){
                 
            $this->request->accepts();
            $accepts = $this->request->accepts();
            
             $store = $this->Uploadfilemusicians->patchEntity($store, $this->request->getData());
            //  print_r($store);exit; 
                if ($this->Uploadfilemusicians->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The file has been saved.']);
                    $this->Flash->success(__('The attachment is sent.'));
                    return $this->redirect($this->referer());
                } else {
                    echo json_encode(['validation' => $store->errors()]);
                }
            }else{
                $this->Flash->success(__('Please select file.'));
                    return $this->redirect($this->referer());
            }
        }
    }
    
    public function generateContract() {
        
        $this->loadModel('Generatecontract');
        $store = $this->Generatecontract->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
        // print_r($formData);exit;
        
        if ($this->request->is('post')) {
                 
            $this->request->accepts();
            $accepts = $this->request->accepts();
            
             $store = $this->Generatecontract->patchEntity($store, $this->request->getData());
            //  print_r($store);exit; 
                if ($this->Generatecontract->save($store)) {
                    echo json_encode(['error' => "no", 'message' => 'The file has been saved.']);
                    $this->Flash->success(__('Your Contract request is generated.'));
                    return $this->redirect($this->referer());
                } else {
                    echo json_encode(['validation' => $store->errors()]);
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
        $store = $this->Musicstorage->get($id, [
            'contain' => []
        ]);
        // print_r($store->hire);exit;
        //debug($user);
        
        $title="Edit Your Music";
        $this->set('genre', $this->Musicstorage->Genres->find('list'));
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
       
        // print_r($this->request->getData('hire'));exit;
        $this->autoRender = false;
        $id = $this->request->data['storeId'];
        // print_r($id);exit;
        $store = $this->Musicstorage->get($id, [
            'contain' => []
        ]);
        
        
        $store = $this->Musicstorage->patchEntity($store, $this->request->getData());
        // print_r($store);exit;
        if ($this->Musicstorage->save($store)) {
            echo json_encode(['error' => "no", 'message' => 'Your music has successfully been updated']);
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
        $store = $this->Musicstorage->get($id);
        if ($this->Musicstorage->delete($store)) {
            $this->Flash->success(__('The music has been deleted.'));
        } else {
            $this->Flash->error(__('The music could not be deleted. Please, try again.'));
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
