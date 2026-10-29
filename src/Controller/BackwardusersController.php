<?php

namespace App\Controller;
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/twilio/vendor/autoload.php');
use Twilio\Rest\Client;
use App\Controller\AppController;
use App\Model\Table\UsersTable;
use Cake\Collection\Collection;
use Cake\Database\Expression\QueryExpression;
use Cake\Database\Query;
use Cake\Event\Event;
use Cake\Controller\Component\FlashComponent;
use Cake\Network\Session;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class BackwardusersController extends AppController {

    use MailerAwareTrait;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['verify', 'register', 'add', 'logout', 'resetpassword', 'reset','testemail', 'mobilecode']);
    }

    public function initialize() {

        parent::initialize();
    }

    public function isAuthorize($user) {

        //users can only edit their profile
        if (in_array($this->request->getParam['action'], ['edit'])) {
            if ($user['role'] === $this->Auth->user('role') && $user['id'] === $this->Auth->user('id')) {
                return true;
            }
        }

        //users can only edit their store

        return parent::isAuthorize($user);
    }


    public function updatetimeonsites($type){
      $user_id = $this->Auth->user('id');
       $this->loadModel('Timeonsites');

       $login_logout_record = array();
       $query = $this->Timeonsites->find();
       $userTimes =  $query->where(['user_id' => $user_id, 'date'=>date ("Y-m-d")])->first();
       if($userTimes && !empty($userTimes->login_logout_record)){
         $login_logout_record = json_decode($userTimes->login_logout_record);
         if($type == 'login'){
           $login_logout_record[]["login"] = time();
         }else{
           $login_logout_record[count($login_logout_record)-1]->logout =  time();
         }
         $userTimes->login_logout_record = json_encode($login_logout_record);
         $userTimes->updated_at = time();
         $this->Timeonsites->save($userTimes);
         //$query = $articles->query();
          // $query->update()
          //     ->set(['login_logout_record' => $login_logout_record])
          //     ->where(['id' => $id])
          //     ->execute();
       }else{
         $userTimes = $this->Timeonsites->newEntity();
         $userTimes->user_id = $user_id;
         $userTimes->date = date ("Y-m-d");
           if($type == 'login'){
           $login_logout_record[]["login"] = time();
         }else{
            $login_logout_record[]["logout"] = time();
         }
         $userTimes->login_logout_record = json_encode($login_logout_record);
         $this->Timeonsites->save($userTimes);
       }
    }
    
    function downloadcsv()
  {
      $this->loadModel('Freebeatsdownloads');
      $this->loadModel('Stores');
      $conn = ConnectionManager::get('default');
      
      if($this->Auth->user('role') == 'admin'){
        $result = $this->Freebeatsdownloads->find("all",array(
                                 'fields' => array('downloader_id'=>'Freebeatsdownloads.downloader_id'), // retrieving fileds

                               'order' => array('Freebeatsdownloads.id' => 'ASC')
                             ));
    }else{
        $result = $this->Freebeatsdownloads->find("all",array(
                                 'fields' => array('downloader_id'=>'Freebeatsdownloads.downloader_id'), // retrieving fileds
                                'conditions' => array(['Freebeatsdownloads.uploader_id' => $this->Auth->user('id')]),
                               'order' => array('Freebeatsdownloads.id' => 'ASC')
                             ));
    }
    $result = $result->toArray();
    
    foreach($result as $res){
        $query = $this->Users->find();
        if($res['downloader_id'] > 0){
        // $email = $query->select(['email' => 'Users.email'])->where(['id' => $res['downloader_id']]);
        $id = $res['downloader_id'];
        $email = $conn->execute("SELECT email FROM `users` WHERE id = $id LIMIT 1")->fetchAll('assoc');
        
        if(isset($email[0]['email'])){
        //   print_r($email->first()->email); 
        $email = $email[0]['email'];
        $email = array($email);
        // print_r($email); 
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=free-download-emails.csv');
        $f = fopen("php://output", "w");
        fputcsv($f, $email);
        
        }
        }
    }
    fclose($f);
    exit;
    
  }

    public function login() {
        
        $this->loadModel('Carts');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $cart = $this->Carts->getCount();
        
        $this->loadModel('Stores');
        $display = 'hide';
        $shop = 'hide';
        $item = 0;
        // $carts = $this->Stores->readProduct();
        $carts = $this->Carts->readProduct();
        
        $this->viewBuilder()->theme('Panel')->layout('login');
        
        if (null != $carts) {
            $shop = 'show';
            $item = count($carts);
        }

        
        
        /*if ($this->Auth->User('id') !== null) {
            return $this->redirect($this->Auth->redirectUrl());
        }*/

        if ($this->request->is('post')) {
        //print_r($_POST);
        if($this->request->getData('rememberme')){
             $escapedRemember = $this->request->getData('rememberme');

         $cookie_time = 60 * 60 * 24 * 30; // 30 days
          $cookie_time_Onset=$cookie_time+ time();
          if (isset($escapedRemember)) {
            /*
             * Set Cookie from here for one hour
             * */
            setcookie("username", $this->request->getData('email'), $cookie_time_Onset);
            setcookie("password", $this->request->getData('password'), $cookie_time_Onset);
        
          } else {
        
              $cookie_time_fromOffset=time() -$cookie_time;
                setcookie("username", '',$cookie_time_fromOffset );
                setcookie("password", '', $cookie_time_fromOffset);
        
          }
        }


            $user = $this->Auth->identify();
            if ($user) {
                
                $this->Auth->setUser($user);
                if(($this->Auth->user('phone')== ' ' || $this->Auth->user('phone')== '') && ($this->Auth->user('firstname')== ' ' ||$this->Auth->user('firstname')== '') && ($this->Auth->user('lastname') ==' ' || $this->Auth->user('lastname') =='')){
                $this->request->session()->write('Profile.state', 'Incomplete');
                
                
                
                }
                else{
                    $this->request->session()->write('Profile.state', 'complete');
                }
                
                //start cart
                // print_r($carts);exit;
                $products = [];
                if (null != $carts) {
        
                    foreach ($carts as $productId => $count) {
        
                        if($count['license'] == "lease" || $count['license'] == "exclusive" || $count['license'] == "premium"){
                        $product = $this->Stores->get($count['id']);
                        $product['count'] = $count;
                        $product['price'] = $count['price'];
                        $product['license'] = $count['license'];
                        $products[] = $product;
        
                        //Save cart item to db
                        // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                        
                        $this->Carts->updateOrCreate(['status' => 'unpaid', 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                        
                        // $savecart['buyer_id'] = $this->Auth->user('id');
                        // $savecart['beat_id'] = $count['id'];
                        // $savecart['amount'] = $count['price'];
                        // $savecart['beat_type'] = $count['license'];
                        // $savecart['trans_ref'] = $count['trans_ref'];
                        // $this->Carts->save($savecart);
        
        
                        }elseif($count['license'] == "sample"){
                        $product = $this->SampleStore->get($count['id']);
                        $product['count'] = $count;
                        $product['price'] = $count['price'];
                        $product['license'] = $count['license'];
                        $products[] = $product;
        
                         //print_r($product);exit;
                        //Save cart item to db
                        // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                        
                        $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                        
                        // $savecart['buyer_id'] = $this->Auth->user('id');
                        // $savecart['beat_id'] = "";
                        // $savecart['sample_id'] = $count['id'];
                        // $savecart['pack_id'] = "";
                        // $savecart['seller_id'] = $product['user_id'];
                        // $savecart['beat_name'] = $product['sample_name'];
                        // $savecart['amount'] = $count['price'];
                        // $savecart['beat_type'] = $count['license'];
                        // $savecart['trans_ref'] = $count['trans_ref'];
                        // //print_r($savecart);exit;
                        // $this->Carts->save($savecart);
        
                    }elseif($count['license'] == "pack"){
                        $product = $this->PacksStore->get($count['id']);
                        $product['count'] = $count;
                        $product['price'] = $count['price'];
                        $product['license'] = $count['license'];
                        $products[] = $product;
        
                         //print_r($product);exit;
                        //Save cart item to db
                        // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                        
                        $this->Carts->updateOrCreate(['status' => 'unpaid', 'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                        
                        // $savecart['buyer_id'] = $this->Auth->user('id');
                        // $savecart['beat_id'] = "";
                        // $savecart['sample_id'] = "";
                        // $savecart['pack_id'] = $count['id'];
                        // $savecart['seller_id'] = $product['user_id'];
                        // $savecart['beat_name'] = $product['sample_name'];
                        // $savecart['amount'] = $count['price'];
                        // $savecart['beat_type'] = $count['license'];
                        // $savecart['trans_ref'] = $count['trans_ref'];
                        // //print_r($savecart);exit;
                        // $this->Carts->save($savecart);
                    }elseif($count['license'] == "playlist"){
                        $product = $this->SampleStore->get($count['id']);
                        $product['count'] = $count;
                        $product['price'] = $count['price'];
                        $product['license'] = $count['license'];
                        $products[] = $product;
        
                         //print_r($product);exit;
                        //Save cart item to db
                        // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                        
                        $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                        
                        // $savecart['buyer_id'] = $this->Auth->user('id');
                        // $savecart['beat_id'] = "";
                        // $savecart['sample_id'] = $count['id'];
                        // $savecart['pack_id'] = "";
                        // $savecart['seller_id'] = $product['user_id'];
                        // $savecart['beat_name'] = $product['sample_name'];
                        // $savecart['amount'] = $count['price'];
                        // $savecart['beat_type'] = $count['license'];
                        // $savecart['trans_ref'] = $count['trans_ref'];
                        // //print_r($savecart);exit;
                        // $this->Carts->save($savecart);
                    }
        
        
                    }
                }
                
                //end cart
                
                //add carts items 
                
                // $session = new Session();
                // $session->destroy('cart');
                
                $cartsA = $this->Carts->find('all', [
                    'conditions' => ['Carts.buyer_id'=>$this->Auth->user('id'), 'status' => 'unpaid'],
                    'order' => ['id' => 'DESC']
                ])->all();
                // $cartsA = $cartsA->toArray();
                // print_r($cartsA);exit;
                $buyer_id = $this->Auth->user('id');
                if(!empty($carts)){
                    foreach($carts as $ac){
                        
                        // $del = $this->Carts->remove($ac['id'], $ac['license']); //deleteAll
                        // switch ($ac['license']) {
                        //     case 'sample':
                        //     case 'playlist':
                        //         $delc = ['sample_id' => $ac['id'], 'beat_type' => $ac['license'], 'buyer_id' => $buyer_id, 'status' => 'unpaid'];
                        //         break;
                        //     case 'pack':
                        //         $delc = ['pack_id' => $ac['id'], 'beat_type' => $ac['license'], 'buyer_id' => $buyer_id, 'status' => 'unpaid'];
                        //         break;
                            
                        //     default:
                        //         $cartitem['id'] = $cart->beat_id;
                        //         $delc = ['beat_id' => $ac['id'], 'beat_type' => $ac['license'], 'buyer_id' => $buyer_id, 'status' => 'unpaid'];
                        //         break;
                        // }
                        
                        // if($this->Carts->delete($this->Carts->get($del[0]['id']))){
                        // $del = $this->Carts->deleteAll($delc);
                        // if($del > 0){
                            $readcart = $this->Carts->readProduct();
                            $key = false;
                            foreach ($readcart as $k => $v) {
                                // print_r($v['id']);exit;
                                if ($v['id'] == $ac['id'] && $v['license'] == $ac['license']) {
                                    $key = $k;
                                    // key found - break the loop
                                    break;
                                }
                            }
                            unset($readcart[$key]);
                        // print_r($readcart);exit;
                        $this->Carts->saveProduct($readcart);
                    }
                }
                // print_r($cartsA);exit;
                // exit;
                
                foreach($cartsA as $cart){
                
                    $cartitem = [];
                    switch ($cart->beat_type) {
                        case 'sample':
                        case 'playlist':
                            $cartitem['id'] = $cart->sample_id;
                            break;
                        case 'pack':
                            $cartitem['id'] = $cart->pack_id;
                            break;
                        
                        default:
                            $cartitem['id'] = $cart->beat_id;
                            break;
                    }
                    $cartitem['price'] = $cart->amount;
                    $cartitem['license'] = $cart->beat_type;
                    $cartitem['trans_ref'] = $cart->trans_ref;
                    // $cartitem['beat_id'] = $cart->beat_id;
                    //print_r($cartitem);exit;
                    
                    $this->Carts->addProduct($cartitem);
                }
                
                // print_r($session->read('cart'));
                //echo $cnt = $this->Carts->getCount();
                // echo "<script>$('#cart-counter').text('.$cnt.'); $('#cart-mob').text('.$cnt.');</script>";
                //end carts items
                // exit;
                $this->updatetimeonsites('login');
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid email or password, try again'));
        }
    }

    public function logout() {
        
        //start cart
        $this->loadModel('Carts');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $cart = $this->Carts->getCount();
        
        $this->loadModel('Stores');
        $display = 'hide';
        $shop = 'hide';
        $item = 0;
        $carts = $this->Stores->readProduct();
        if (null != $carts) {
            $shop = 'show';
            $item = count($carts);
        }

        $carts = $this->Carts->readProduct();
        
        if ($this->Auth->user('id')) {
            $products = [];
            if (null != $carts) {
    
                foreach ($carts as $productId => $count) {
    
                    if($count['license'] == "lease" || $count['license'] == "exclusive" || $count['license'] == "premium"){
                    $product = $this->Stores->get($count['id']);
                    $product['count'] = $count;
                    $product['price'] = $count['price'];
                    $product['license'] = $count['license'];
                    $products[] = $product;
    
    
                    //Save cart item to db
                    // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                    
                    $this->Carts->updateOrCreate(['status' => 'unpaid', 'beat_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                    
                    // $savecart['buyer_id'] = $this->Auth->user('id');
                    // $savecart['beat_id'] = $count['id'];
                    // $savecart['amount'] = $count['price'];
                    // $savecart['beat_type'] = $count['license'];
                    // $savecart['trans_ref'] = $count['trans_ref'];
                    // $this->Carts->save($savecart);
    
    
                    }elseif($count['license'] == "sample"){
                    $product = $this->SampleStore->get($count['id']);
                    $product['count'] = $count;
                    $product['price'] = $count['price'];
                    $product['license'] = $count['license'];
                    $products[] = $product;
    
                     //print_r($product);exit;
                    //Save cart item to db
                    // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'beat_id' => "",'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                    
                    $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                    
                    // $savecart['buyer_id'] = $this->Auth->user('id');
                    // $savecart['beat_id'] = "";
                    // $savecart['sample_id'] = $count['id'];
                    // $savecart['pack_id'] = "";
                    // $savecart['seller_id'] = $product['user_id'];
                    // $savecart['beat_name'] = $product['sample_name'];
                    // $savecart['amount'] = $count['price'];
                    // $savecart['beat_type'] = $count['license'];
                    // $savecart['trans_ref'] = $count['trans_ref'];
                    // //print_r($savecart);exit;
                    // $this->Carts->save($savecart);
    
                }elseif($count['license'] == "pack"){
                    $product = $this->PacksStore->get($count['id']);
                    $product['count'] = $count;
                    $product['price'] = $count['price'];
                    $product['license'] = $count['license'];
                    $products[] = $product;
    
                     //print_r($product);exit;
                    //Save cart item to db
                    // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'beat_id' => "",'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                    
                    $this->Carts->updateOrCreate(['status' => 'unpaid', 'pack_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                    
                    // $savecart['buyer_id'] = $this->Auth->user('id');
                    // $savecart['beat_id'] = "";
                    // $savecart['sample_id'] = "";
                    // $savecart['pack_id'] = $count['id'];
                    // $savecart['seller_id'] = $product['user_id'];
                    // $savecart['beat_name'] = $product['sample_name'];
                    // $savecart['amount'] = $count['price'];
                    // $savecart['beat_type'] = $count['license'];
                    // $savecart['trans_ref'] = $count['trans_ref'];
                    // //print_r($savecart);exit;
                    // $this->Carts->save($savecart);
                }elseif($count['license'] == "playlist"){
                    $product = $this->SampleStore->get($count['id']);
                    $product['count'] = $count;
                    $product['price'] = $count['price'];
                    $product['license'] = $count['license'];
                    $products[] = $product;
    
                     //print_r($product);exit;
                    //Save cart item to db
                    // $savecart = $this->Carts->findOrCreate(['status' => 'unpaid', 'beat_id' => "",'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price']]);
                    
                    $this->Carts->updateOrCreate(['status' => 'unpaid', 'sample_id' => $count['id'], 'buyer_id' => $this->Auth->user('id'), 'amount' => $count['price'], 'seller_id' => $product['user_id'], 'beat_name' => $product['sample_name'], 'beat_type' => $count['license']], ['trans_ref' => $count['trans_ref']]);
                    
                    // $savecart['buyer_id'] = $this->Auth->user('id');
                    // $savecart['beat_id'] = "";
                    // $savecart['sample_id'] = $count['id'];
                    // $savecart['pack_id'] = "";
                    // $savecart['seller_id'] = $product['user_id'];
                    // $savecart['beat_name'] = $product['sample_name'];
                    // $savecart['amount'] = $count['price'];
                    // $savecart['beat_type'] = $count['license'];
                    // $savecart['trans_ref'] = $count['trans_ref'];
                    // //print_r($savecart);exit;
                    // $this->Carts->save($savecart);
                }
    
    
                }
            }
                
            //end cart
            $session = new Session();
            $session->destroy('cart');
            $this->updatetimeonsites('logout');
        }
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null, $status = 0, $verify = 0) {

        $this->loadModel('Carts');
        $this->loadModel('Plans');
        $this->loadModel('Timeonsites');
        $this->loadModel('Users');
        $conn = ConnectionManager::get('default');
        if ($this->request->is('post')) {
            $articlesTable = TableRegistry::get('users');
            $article = $articlesTable->get($id); // Return article with id 12
            $article->power_users = $status;
            $article->is_verified = $verify;
            $articlesTable->save($article);
            return $this->redirect(['action' => 'index']);
        }
        $cart = $this->Carts->getCount();

        $id = $this->Auth->user('id');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $plansquery = $this->Plans->find('all', [
            'fields' => array('Plans.id', 'Plans.name')
        ]);

        $plans = $plansquery->toArray();

        //check if user is authorized to view page. Only admin should view page
        if ($this->isAuthorize($user)):
            if(!is_null($this->request->getQuery('search'))){
                $q= $this->request->getQuery('search');
                $users=TableRegistry::get('users')->find('all',[
                    'conditions'=>[
                        "OR"=>[
                            "users.email LIKE"=>"%$q%",
                            "users.firstname LIKE"=>"%$q%",
                            "users.lastname LIKE"=>"%$q%",
                        ]
                    ]
                ]);


                $this->paginate($users);
            }else{
                $users = $this->paginate($this->Users);
            }

        else:
            $this->Flash->error(__('You not authorized to visit that page.'));
            return $this->redirect('/profile');
        endif;

        $powerUsers = $this->Users->find()->where(['power_users' => 1])->all();

        $topProducer = $this->Users->find()->where(['top_producer' => 1])->all();
        $today = date('Y-m-d');
        $lastThreeMonth = date("Y-m-d", strtotime("-3 month"));
        $lastThreeYear = date("Y-m-d", strtotime("-3 year"));
        
        // $lastThreeMonth = date(strtotime("-3 month"));
        // $lastThreeYear = date(strtotime("-3 year"));
        $now = Time::now();
        
        // print_r($lastThreeYear);exit;
        // $backwardUsers = $this->Timeonsites->find('all')
        // ->select(['Timeonsites.id, users.aka, users.email, users.phone, users.accounttype, users.role, users.created, users.modified'])
        //     ->join([
        //         'users' => [
        //             'table' => 'users',
        //             'type' => 'left',
        //             'conditions' => 'users.id = Timeonsites.user_id',
        //         ]
        //     ])
        //     // ->where(['timeonsites.date' => $now])
            
        //     ->where(['Timeonsites.date >=' => $lastThreeYear, 'Timeonsites.date <' => $lastThreeMonth])
        //     // ->andWhere(['Timeonsites.date <' => $lastThreeMonth])
        //     // ->andWhere(['users.role !=' => 'admin'])
        //     // ->bind(':now', $now, 'datetime')
        //     ->group('Timeonsites.user_id')
        //     ->toArray();
            
            $backwardUsers = $conn->execute("SELECT *, timeonsites.id as id FROM `timeonsites` INNER JOIN users ON users.id=timeonsites.user_id WHERE timeonsites.user_id IN (SELECT user_id FROM timeonsites GROUP BY user_id HAVING MAX(timeonsites.date) <= DATE_ADD('$lastThreeMonth', INTERVAL -3 MONTH)) GROUP BY timeonsites.user_id ORDER BY timeonsites.id DESC")->fetchAll('assoc');
        
        // print_r($backwardUsers);exit;
        $this->set(compact('users', 'cart', 'plans', 'powerUsers', 'topProducer', 'backwardUsers'));
        $this->set('_serialize', ['users']);
    }

    public function subUser() {

        $this->autoRender = false;
        $this->loadModel('Subscriptions');

        $userId = $this->request->data['userId'];
        // print_r($userId); exit;
        $levelId = $this->request->data['levelId'];
        $date = date('Y-m-d');
        $expirydate = date('Y-m-d', strtotime('+1 years'));
        $this->loadModel('Plans');
        $plan = $this->Plans->get($levelId);
        $subscriptionTable = TableRegistry::get('Subscriptions');

        $checkexpiry = $subscriptionTable->find('all')->where(['user_id' => $userId, 'expiry >=' => $date, 'level_id' => $levelId]);

        // print_r($checkexpiry->isEmpty()); exit;

        if ($checkexpiry->isEmpty()) {
            $subscription = $subscriptionTable->findOrCreate(['user_id' => $userId, 'level_id' => $levelId]);
            $subscription->user_id = $userId;
            $subscription->plan_id = $plan->plan_code;
            $subscription->level_id = $levelId;
            $subscription->tnx_reference = "manual-membership";
            $subscription->subscription_status = "active";
            $subscription->created = $date;
            $subscription->expiry = $expirydate;
            // print_r("HERE"); exit;
            if ($subscriptionTable->save($subscription)) {
                $this->Flash->success(__("Successfully subscribed user to a package. Please check view membership under subscriptions menu"));
                return $this->redirect($this->referer());
            }
        } else {
            $this->Flash->success(__("User Alredy Subscribed this plan."));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Dashboard method
     * Shows users profile pix, profile bio, store beats, beats sold
     * @param string/null $id user id
     * @return \Cake\Http\Response\void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException
     * */
    public function dashboard($id = null) {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $cart = $this->Carts->getCount();

        $id = $this->Auth->user('id');
        //check user expiry
         $trial = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $id)
    ));
        $countSubs = $trial->count();

        $users = $this->Users->find('all', [
            'conditions' => ['Users.id'=>$id]
        ]);
        $user = $users->first();
        $title="Edit profile";

        //for 6 month
        $subsMonth6 = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $id)
    ));
        $countSubs6 = $subsMonth6->count();



        $query = $this->Subscriptions->find('all');
        $maxExpireDate=$query->select(['expire' => $query->func()->max('Subscriptions.expiry')])
        ->where(['Subscriptions.user_id' => $id, 'Subscriptions.subscription_status' => 'active']);


        $maxExpireDate1 = $maxExpireDate->first();
        $maxExpireDate1 = $maxExpireDate1->expire;


        $today=date('Y-m-d');
        $createDate = new \DateTime($user->created);

        $currentDate = $createDate->format('Y-m-d');
        $date = strtotime($currentDate);
        $date = strtotime("+7 day", $date);
        $expiretrial7= date('Y-m-d', $date);




        //$date = strtotime($currentDate);
        if($countSubs == 0 && $expiretrial7 < $today ){

            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $id)
        );

        }elseif($countSubs > 0 && $maxExpireDate1 < $today){
            // echo $maxExpireDate1 < $today;
         //print_r($maxExpireDate1);



        }


        //suspend user when date expire
         $afterExpired = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $id, 'expiry <' => $today)
    ));
         $countExpired = $afterExpired->count();

        //count all subcription of a user
         $allSubsUser = $this->Subscriptions->find('all', array(
        'conditions' => array('Subscriptions.user_id' => $id)
    ));
         $countAllUserSubs = $allSubsUser->count();


        if($countAllUserSubs == $countExpired ){

            $this->Users->updateAll(
            array('expired' => 1),
            array('id' => $id)
        );
        }




        $money = null;
        $dash = $this->Users->find();
        $dashboard = $this->Users->find()->contain(['bankbalances'])->matching('Stores.carts', function($x) {
                    return $x
                                    ->where(['Carts.status' => 'paid']);
                })->where(['Users.id' => $id])->toArray();

        //debug(count($dashboard));
        //money made
        $money = (!empty($dashboard[0]['Bankbalances']['balance'])) ? $dashboard[0]['Bankbalances']['balance'] : "";
        foreach ($dashboard as $record) {
            # code...//
            $charts[] = date("Y-m", strtotime($record['Carts']['created']));
            $records = array_count_values($charts);
        }
        if(!empty($records)) {
            foreach ($records as $key => $value) {
                # code...
                $chart[] = [$key, $value];
            }
        }

        $chartplot = (!empty($chart)) ? json_encode($chart) : "";
        //debug($dashboard);
        //sales record
        $sales = count($dashboard);
        /* foreach ($dashboard['stores'] as $cart) {
          # code...
          foreach ($cart['carts'] as $amount) {
          # code...
          $sales = $sales + 1;
          }
          } */

        if($user['role'] == 'admin'){
        $playCount=$conn->execute("SELECT SUM(play_count) as count FROM `stores`")->fetchAll('assoc');
        
        $playCountSample=$conn->execute("SELECT SUM(play_count) as count FROM `sample_store`")->fetchAll('assoc');
        
        $countLikes=$conn->execute("SELECT SUM(likes) as likes FROM `stores`")->fetchAll('assoc');
        
          }else{
              $playCount=$conn->execute("SELECT SUM(play_count) as count FROM `stores` WHERE user_id=$id")->fetchAll('assoc');
          }
        //inbox messages
        $messages = $this->Users->Messages->find()->where(['User_id' => $id, 'Status' => 'unread']);
        $notifications = $messages->count();

        // start beat plays
        if($user['role'] == 'admin'){

        $playCount1=$conn->execute("SELECT SUM(play_count) AS plays, YEAR(created) AS year_number, WEEKOFYEAR(created) AS week_number FROM stores GROUP BY year_number, week_number ORDER BY year_number, week_number")->fetchAll('assoc');
        $play_chart = '';
        foreach($playCount1 as $play){

        $play_chart .= "{ year_number:'".$play["year_number"]."', plays:".$play["plays"].", week_number:".$play["week_number"]."}, ";

        }
        $play_chart = substr($play_chart, 0, -2);
        // print_r($play_chart);exit;
        }else{
        $playCount1=$conn->execute("SELECT SUM(play_count) AS plays, YEAR(created) AS year_number, WEEKOFYEAR(created) AS week_number FROM stores WHERE user_id = $id GROUP BY year_number, week_number ORDER BY year_number, week_number")->fetchAll('assoc');

        $play_chart = '';
        foreach($playCount1 as $play){

        $play_chart .= "{ year_number:'".$play["year_number"]."', plays:".$play["plays"].", week_number:".$play["week_number"]."}, ";

        }
         $play_chart = substr($play_chart, 0, -2);

        }

        //end beat plays

        // start profile chart
        if($user['role'] == 'admin'){

        // $profileCount=$conn->execute("SELECT SUM(count) AS prof, YEAR(created) AS year_number, WEEKOFYEAR(created) AS week_number FROM user_profileview GROUP BY year_number, week_number ORDER BY year_number, week_number")->fetchAll('assoc');
        $profileCount=$conn->execute("SELECT SUM(count) AS prof, MONTHNAME(created) AS month_name, WEEKOFYEAR(created) AS week_number FROM user_profileview WHERE YEAR(created) = YEAR(CURDATE()) GROUP BY month_name, week_number ORDER BY month_name")->fetchAll('assoc');

        $profile_chart = '';
        foreach($profileCount as $play){

        $profile_chart .= "{ month_name:'".$play["month_name"]."', prof:".$play["prof"].", week_number:".$play["week_number"]."}, ";

        }
        $profile_chart = substr($profile_chart, 0, -2);
        // print_r($profile_chart);exit;
        }else{
        $profileCount=$conn->execute("SELECT SUM(count) AS prof, MONTHNAME(created) AS month_name, WEEKOFYEAR(created) AS week_number FROM user_profileview WHERE YEAR(created) = YEAR(CURDATE()) AND user_id = $id GROUP BY month_name, week_number ORDER BY month_name")->fetchAll('assoc');

        $profile_chart = '';
        foreach($profileCount as $play){

        $profile_chart .= "{ month_name:'".$play["month_name"]."', prof:".$play["prof"].", week_number:".$play["week_number"]."}, ";

        }
         $profile_chart = substr($profile_chart, 0, -2);

        }



        // end profile views


        // start sales chart
        if($user['role'] == 'admin'){
            /*$sale= $this->Carts->find('all', array(
        'conditions' => array('Carts.status' => 'Paid', 'Carts.seller_id' => $userid),
        'order'=>array('Carts.id' => 'DESC'),
    ));*/
        $saleCount=$conn->execute("SELECT COUNT(id) AS sales, MONTHNAME(created) AS month_name FROM carts WHERE status='Paid' AND YEAR(created) = YEAR(CURDATE()) GROUP BY month_name ORDER BY month_name")->fetchAll('assoc');
        $sale_chart = '';
        // print_r($saleCount);exit;
        foreach($saleCount as $play){

        $sale_chart .= "{ month_name:'".$play["month_name"]."', sales:".$play["sales"]."}, ";

        }
        $sale_chart = substr($sale_chart, 0, -2);
        // print_r($sale_chart);exit;
        }else{
        $saleCount=$conn->execute("SELECT COUNT(id) AS sales, MONTHNAME(created) AS month_name FROM carts WHERE status='Paid' AND YEAR(created) = YEAR(CURDATE()) AND seller_id=$id GROUP BY month_name ORDER BY month_name")->fetchAll('assoc');

        $sale_chart = '';
        foreach($saleCount as $play){

        $sale_chart .= "{ year_number:'".$play["year_number"]."', sales:".$play["sales"].", week_number:".$play["week_number"]."}, ";

        }
         $sale_chart = substr($sale_chart, 0, -2);

        }

        $allYears=$conn->execute("SELECT YEAR(created) AS year FROM carts WHERE status='Paid' GROUP BY year ORDER BY year DESC")->fetchAll('assoc');

        // end sales views

        //booking requests
        $artiste = $this->Users->Artistesrequesters->find()->where(['User_id' => $id])->count();
        $director = $this->Users->Directorequests->find()->where(['User_id' => $id])->count();
        $mixmaster = $this->Users->Mmrequesters->find()->where(['User_id' => $id])->count();
        $swriter = $this->Users->Swriterequests->find()->where(['User_id' => $id])->count();
        $bookings = $artiste + $director + $mixmaster + $swriter;
        //debug($artiste + $director + $mixmaster + $swriter);
        //debug($dashboard);
        
        //AI weekly beat
        $weeklyDate = $conn->execute('SELECT * FROM weekly_aibeat')->fetchAll('assoc');
        $weeklyDate = $weeklyDate[0]['date'];
        $today = date('Y-m-d');
        $nextWeek = date("Y-m-d", strtotime("+1 week"));
        
        $randomBeats = $conn->execute("SELECT *, stores.id as id, users.aka as uName, stores.name as bName FROM stores LEFT JOIN users ON users.id = stores.user_id ORDER BY RAND() LIMIT 1 ")->fetchAll('assoc');
        
        if($weeklyDate == $today){
            $usrs = $conn->execute("SELECT email FROM users WHERE email != ''")->fetchAll('assoc');
            // $usrs = $this->Users->find()->all();
            
            foreach($usrs as $usr){
                $email = new Email('noreply');
                        $email->to($usr['email'])
                                ->template('Panel.every2day', 'Panel.every2day')
                                ->viewVars(['id' => $randomBeats[0]['id'], 'bname' => $randomBeats[0]['bName'], 'uname' => $randomBeats[0]['uName']])
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('AmplifiHub AI Beat Of The Week');
                        $sent = $email->send();
                
            }
            $update= $conn->execute("UPDATE weekly_aibeat SET date='".$nextWeek."' ");
        }
        
        $title= "AmplifiHub Dashboard";
        $this->set(compact('users', 'pix', 'sale_chart', 'allYears', 'play_chart', 'profile_chart', 'bio', 'beats','playCount', 'countLikes', 'playCountSample', 'chartplot', 'beat_sold', 'dashboard', 'money', 'sales', 'notifications', 'bookings', 'cart', 'title', 'user'));
        $this->set('_serialize', true);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


     public function salesbyyear($id = null)
    {
        $conn = ConnectionManager::get('default');

        $id = $this->Auth->user('id');
        if ($this->request->is('post')) {
        $users = $this->Users->find('all', [
            'conditions' => ['Users.id'=>$id]
        ]);
        $user = $users->first();

            $year = $this->request->getData();
            // print_r($year['year']);exit;
            $year = $year['year'];
            // print_r($user);exit;
        if($user['role'] == 'admin'){
        // echo $year;exit;
        $saleCount=$conn->execute("SELECT COUNT(id) AS sales, MONTHNAME(created) AS month_name FROM carts WHERE status='Paid' AND YEAR(created) = $year GROUP BY month_name ORDER BY month_name")->fetchAll('assoc');
        // $sale_chart = '';
        // print_r($saleCount);exit;
        foreach($saleCount as $play){

        // $sale_chart .= "{ month_name => '".$play["month_name"]."', sales => ".$play["sales"]."}, ";
        $sale_chart []= array('month_name' => $play["month_name"], 'sales' => $play["sales"]);

        }
        // $sale_chart = substr($sale_chart, 0, -2);
        // print_r($sale_chart);exit;
        echo json_encode($sale_chart);exit;

        }else{
        $saleCount=$conn->execute("SELECT COUNT(id) AS sales, MONTHNAME(created) AS month_name FROM carts WHERE status='Paid' AND YEAR(created) = $year AND seller_id=$id GROUP BY month_name ORDER BY month_name")->fetchAll('assoc');

        // $sale_chart = '';
        foreach($saleCount as $play){

        $sale_chart []= array('month_name' => $play["month_name"], 'sales' => $play["sales"]);

        }
        echo json_encode($sale_chart);exit;

        }
        }
    }

    public function profilebyyear($id = null)
    {
        $conn = ConnectionManager::get('default');

        $id = $this->Auth->user('id');
        if ($this->request->is('post')) {
        $users = $this->Users->find('all', [
            'conditions' => ['Users.id'=>$id]
        ]);
        $user = $users->first();

            $year = $this->request->getData();
            // print_r($year['year']);exit;
            $year = $year['year'];
            // print_r($user);exit;
        if($user['role'] == 'admin'){
        // echo $year;exit;
        // $profileCount=$conn->execute("SELECT SUM(count) AS prof, YEAR(created) AS year_number, WEEKOFYEAR(created) AS week_number FROM user_profileview GROUP BY year_number, week_number ORDER BY year_number, week_number")->fetchAll('assoc');

        $saleCount=$conn->execute("SELECT SUM(count) AS prof, MONTHNAME(created) AS month_name, WEEKOFYEAR(created) AS week_number FROM user_profileview WHERE YEAR(created) = $year GROUP BY month_name, week_number ORDER BY month_name")->fetchAll('assoc');
        // $sale_chart = '';
        // print_r($saleCount);exit;
        foreach($saleCount as $play){

        // $sale_chart .= "{ month_name => '".$play["month_name"]."', sales => ".$play["sales"]."}, ";
        $sale_chart []= array('month_name' => $play["month_name"], 'prof' => $play["prof"], 'week_number' => $play["week_number"]);

        }
        // $sale_chart = substr($sale_chart, 0, -2);
        // print_r($sale_chart);exit;
        echo json_encode($sale_chart);exit;

        }else{
        $saleCount=$conn->execute("SELECT SUM(count) AS prof, MONTHNAME(created) AS month_name, WEEKOFYEAR(created) AS week_number FROM user_profileview WHERE YEAR(created) = $year AND user_id=$id GROUP BY month_name, week_number ORDER BY month_name")->fetchAll('assoc');

        // $saleCount=$conn->execute("SELECT COUNT(id) AS sales, MONTHNAME(created) AS month_name FROM carts WHERE status='Paid' AND YEAR(created) = $year AND seller_id=$id GROUP BY month_name ORDER BY month_name")->fetchAll('assoc');

        // $sale_chart = '';
        foreach($saleCount as $play){

        $sale_chart []= array('month_name' => $play["month_name"], 'prof' => $play["prof"], 'week_number' => $play["week_number"]);

        }
        echo json_encode($sale_chart);exit;

        }
        }
    }

    public function view($id = null) {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('cart', $cart);
        $this->set('_serialize', ['user']);
    }

    /**
     * Register method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $this->viewBuilder()->theme('Panel')->layout('register');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user_data = $this->request->getData();

            $check = $this->Users->find('all', ['conditions' => ['Users.email' => $user_data['email']]
            ]);
            //debug($check);
            if ($check->isEmpty()):
                $emailtoken = $this->Users->tokenize($user_data['email']);
                $email = new Email('noreply');
                $email->to($user_data['email'])
                        ->template('Panel.token', 'Panel.token')
                        ->viewVars(['token' => $emailtoken['token'], 'ameerhamzanawaz_user' => $check ])
                        ->emailFormat('html')
                        ->sender('noreply@amplifihub.com', 'AmplifiHub')
                        ->from('noreply@amplifihub.com', 'AmplifiHub')
                        ->subject('AmplifiHub Email Registration Confirmation');
                $sent = $email->send();

                //debug($sent);
                if ($sent):
                    $this->Flash->info(__('Thank you for registering. An activation link has been sent to the email you provided. Click the link in the email to verify your account before you can login.'));
                else:
                    $this->Flash->error(__('Couldn\'t send email. Please try again.'));
                endif;
            else:
                $this->Flash->info(__('This email is already in use'));
            endif;
        }
        $this->set(compact('user', 'cart'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Verifyemail method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function verify($token = null) {
        $this->loadModel('Referrals');
        $this->loadModel('Users');
        $conn = ConnectionManager::get('default');
        // return $this->redirect(['controller' => 'plans', 'action' => 'subscribe']);
        $email = $this->request->query('email');
        $email1 = $this->request->query('email');
        // print_r($email);exit;
        try {
            $verify = $this->Users->Tokens->verify($token);

            if ($verify):
                
            $users = $this->Users->find('all', [
            'conditions' => ['Users.email'=>$email]
            ]);
            $users = $users->first();
            $user_id = $users->id;
            $user_aka = $users->aka;
            
            $referral = $this->Referrals->find('all', [
            'conditions' => ['Referrals.user_id' => $user_id]
            ]);
            $referral = $referral->first();
            
            $referral_id = $this->Users->find('all', [
            'conditions' => ['Users.id' => $referral->referral_id]
            ]);
            $referral_id = $referral_id->first();
            
            
            
            if(!empty($referral->user_id) && $referral_id->refferal_permission == 1){
                // print_r($referral);exit;
                $now = date('Y-m-d');
                $nextMonth = date('Y-m-d', strtotime('+1 month'));
                $add = $conn->execute("INSERT INTO subscriptions (plan_id, user_id, status, subscription_status, level_id, created, expiry) VALUES('PLN_1monthfree', $user_id, 'active', 'active', 27, '$now', '$nextMonth')");
                
                $email = new Email('noreply');
                    $email->to($email1)
                          ->template('Panel.signup')
                          ->viewVars(["aka" => $user_aka])
                          ->emailFormat('html')
                          //->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject('Welcome To AmplifiHub! Here Is Your Starter Pack');
                $send = $email->send();
                    
                $this->Flash->success(__('Email Verification and Registration successful and you have subscribe 1 month free subscription.'));
                $this->Flash->Info(__('Please Subscribe Free Plan for 1 month free'));
                return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);
            }else{
                
                // email 
            // print_r($email);exit;
            $email = new Email('noreply');
                    $email->to($email1)
                          ->template('Panel.signup')
                          ->viewVars(["aka" => $user_aka])
                          ->emailFormat('html')
                          //->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->sender('noreply@amplifihub.com', 'AmplifiHub')
                          ->from('noreply@amplifihub.com', 'AmplifiHub')
                          ->subject('Welcome To AmplifiHub! Here Is Your Starter Pack');
                    $send = $email->send();
                // exit;
                $this->Flash->success(__('Email Verification and Registration successful.'));
                $this->Flash->Info(__('Please Complete Your Profile...'));
                return $this->redirect(['controller' => 'plans', 'action' => 'subscribe']);
            }
            
            
            
            endif;
            
        } catch (\Exception $e) {

            $this->Flash->error(__('Verification error. Either token has expired or used. Try registering again'));
            return $this->redirect(['action' => 'register']);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function register() {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Carts');
        $this->loadModel('Referrals');
        $cart = $this->Carts->getCount();

        if ($this->Auth->User('id') !== null) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        $this->viewBuilder()->theme('Panel')->layout('register');

        $user = $this->Users->newEntity();
        $referral = $this->Referrals->newEntity();

        if ($this->request->is('post')) {
            if(empty($this->request->data['firstname'])){
                        $this->request->data['firstname']='';
                    }
                    if(empty($this->request->data['lastname'])){
                        $this->request->data['lastname']='';
                    }
                    if(empty($this->request->data['phone'])){
                        $this->request->data['phone']='';
                    }
                    if(empty($this->request->data['country'])){
                        $this->request->data['country']='';
                    }
            if ($this->request->getQuery('ref')) {
                $ref = $this->request->getQuery('ref');

                $user_data = $this->request->getdata();



                $user_data['role'] = 'user';
                $user_save = $this->Users->patchEntity($user, $user_data);






                //debug($user_save);
                if ($this->Users->save($user_save)) {
                    $options = [
                        'foreign_key' => $user->id
                    ];
                    $referral_id = preg_replace('/\D/', '', $ref); // Get digits
                    $referral_data['referral_id'] = $referral_id;
                    $referral_data['user_id'] = $user->id;
                    $referral_save = $this->Referrals->patchEntity($referral, $referral_data);

                    if ($this->Referrals->save($referral_save)) {

                        $emailtoken = $this->Users->Tokens->find('all', ['conditions' => ['Tokens.foreign_key' => $user->id], 'fields' => 'Tokens.token'])->first();
                        //debug($emailtoken->token);
                        $email = new Email('noreply');
                        $email->to($user_data['email'])
                                ->template('Panel.token', 'Panel.token')
                                ->viewVars(['token' => $emailtoken->token, 'email' => $user_data['email']])
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('AmplifiHub Email Registration Confirmation');
                        $sent = $email->send();

                        //debug($sent);
                        if ($sent):

                            $this->Flash->info(__('Thank you for registering. An activation link has been sent to the email you provided. Click the link in the email to verify your account before you can login.'));
                        else:
                            $this->Flash->error(__('Couldn\'t send email. Please try again.'));
                        endif;
                    }
                    else {
                        $this->Flash->error(__('Oops an Error occured saving your referral. Please, try again.'));
                    }
                } else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
            } else {

                $user_data = $this->request->getdata();



                $user_data['role'] = 'user';
                $user_save = $this->Users->patchEntity($user, $user_data);


                 //sms API;
                $phone=$user_save['phone'];

                //$number="123456";
                $count= strlen((string) $phone);

                if($count == 11){
                    $phone = substr($phone, 1, 10);
                }else{
                    $phone=$phone;
                }
                //echo $phone;exit;
                $phone_code=$user_save['phone_code'];
                $country=$user_save['country'];
                $email=$user_save['email'];

                if($country == "Nigeria"){

                     //print_r($email);exit;
                    $user_data1 = $this->request->getdata();
                    //print_r($user_data1);exit;
                    //$user_data1['code'] = '1234';
                    $user_data1['role'] = 'user';
                    $user_data1['temp'] = $email;
                    /*
                    $sid = 'AC92101898c03cbb9772d94dc83bab539c';
                    $token = '8984622f71d95a8c4b3c94a5772afa01';
                    // A Twilio number you own with SMS capabilities (you need to buy from twilio.com while signup)
                    $twilio_number = "+17344028690";  // replace +000000000 to yours
                    $client = new Client($sid, $token);
                    $message = $client->messages->create(
                            $phone, array(
                        'from' => $twilio_number,
                        'body' => $user_data1['code']
                            )
                    );
                    */


                    $user_save1 = $this->Users->patchEntity($user, $user_data1);





                //exit;

                    //echo $country;exit;
                    if ($this->Users->save($user_save1)) {
                    $options = [
                        'foreign_key' => $user->id
                    ];
                    $emailtoken = $this->Users->Tokens->find('all', ['conditions' => ['Tokens.foreign_key' => $user->id], 'fields' => 'Tokens.token'])->first();
                    //debug($emailtoken->token);exit;
                    $email = new Email('noreply');
                    $email->to($user_data['email'])
                            ->template('Panel.token', 'Panel.token')
                            ->viewVars(['token' => $emailtoken->token, 'ameerhamzanawaz_user' => $user, 'email' => $user_data['email'] ])
                            ->emailFormat('html')
                            ->sender('noreply@amplifihub.com', 'AmplifiHub')
                            ->from('noreply@amplifihub.com', 'AmplifiHub')
                            ->subject('AmplifiHub Email Registration Confirmation');
                    $sent = $email->send();

                    //sms
                    $emailVerifyLink ="https://amplifihub.com/users/verify/".$emailtoken;
                    $account_sid = 'AC92101898c03cbb9772d94dc83bab539c';
                    $auth_token = '8984622f71d95a8c4b3c94a5772afa01';
                    // In production, these should be environment variables. E.g.:
                    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

                    // A Twilio number you own with SMS capabilities
                    $twilio_number = "+17344028690";
                    $amplifihub = "Thanks for registering on Amplifihub, your verification code is ";
                    $client = new Client($account_sid, $auth_token);


                    $message=$client->messages->create(
                        // Where to send a text message (your cell phone?)
                        $phone_code.$phone,
                        array(
                            'from' => "AmplifiHub",
                            'body' => $amplifihub.$user_data1['code'].". And email verification link is ".$emailVerifyLink
                        )
                    );

                    if ($message->sid) {


                    //debug($sent);
                    if ($sent):

                        $this->Flash->info(__('Thank you for registering. An activation link has been sent to the email you provided and an OTP has been sent to your provided number. Input the OTP to verify your account and login or click on the link in your email to verify and login.'));
                    return $this->redirect(array('controller' => 'users', 'action' => 'mobilecode', 'phone' =>$phone));
                    else:
                        $this->Flash->error(__('Couldn\'t send email / token. Please try again.'));

                    endif;
                    }
                    }

                }


                //debug($user_save);
                if ($this->Users->save($user_save)) {
                    $options = [
                        'foreign_key' => $user->id
                    ];
                    $emailtoken = $this->Users->Tokens->find('all', ['conditions' => ['Tokens.foreign_key' => $user->id], 'fields' => 'Tokens.token'])->first();
                   // debug($emailtoken->token);exit;
                    $email = new Email('noreply');
                    $email->to($user_data['email'])
                            ->template('Panel.token', 'Panel.token')
                            ->viewVars(['token' => $emailtoken->token, 'ameerhamzanawaz_user' => $user, "email" => $user_data['email'] ])
                            ->emailFormat('html')
                            ->sender('noreply@amplifihub.com', 'AmplifiHub')
                            ->from('noreply@amplifihub.com', 'AmplifiHub')
                            ->subject('AmplifiHub Email Registration Confirmation');
                    $sent = $email->send();

                    //debug($sent);
                    if ($sent):

                        $this->Flash->info(__('Thank you for registering. An activation link has been sent to the email you provided. Click the link in the email to verify your account before you can login.'));
                    else:
                        $this->Flash->error(__('Couldn\'t send email. Please try again.'));
                    endif;
                }else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }
            }
        }


        $code = rand(245257, 746224);
        $cCode = $conn->execute("SELECT * FROM country")->fetchAll('assoc');
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

        $this->set(compact('user', 'email', 'cart', 'countries', 'code', 'cCode'));
        $this->set('_serialize', ['user']);
    }

    public function mobilecode()
    {
        $conn = ConnectionManager::get('default');
        $this->loadModel('Users');
        $this->loadModel('Carts');
        $this->loadModel('Referrals');
        $cart = $this->Carts->getCount();

        if ($this->Auth->User('id') !== null) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        $phone1=$this->request->query['phone'];

        //$detail = $conn->execute("SELECT * FROM users WHERE phone = '".$phone."' LIMIT 1")->fetchAll('assoc');
        $detail = $this->Users->find('all', [
            'conditions' => ['Users.phone' => $phone1],
            'limit' => 1
        ]);
        $row = $detail->first();
        $code =$row['code'];
        $phone =$row['phone'];
        $phone_code =$row['phone_code'];
        $email =$row['temp'];
        $id =$row['id'];
        //print_r($row['code']);exit;
        $this->viewBuilder()->theme('Panel')->layout('mobilecode');

        if ($this->request->is('post'))
        {

            $user_data = $this->request->getdata();
            //print_r($user_data);
            $uCode=$user_data['code'];
            if($code == $uCode)
            {

                /*$update = $this->Users->updateAll(
                    array('phone' => "'$phone'"),
                    array('email' => "'$email'")
                );*/
                //UPDATE users SET email=$email WHERE id=$id;
               $update= $conn->execute("UPDATE users SET email='".$email."' WHERE id=$id");
                if($update){
                 $this->Flash->info(__('Thank you for verifying. Now, you can login.'));
                    return $this->redirect(array('controller' => 'users', 'action' => 'login'));
                }
            }else{
                $this->Flash->error(__('Sorry! Your provided code is wrong. Also check that your registered number does not include the first digit. Kindly remove the first digit of your phone number when registering. Please, try again.'));
            }

        }

        $user = $this->Users->newEntity();
        $referral = $this->Referrals->newEntity();



        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

        $this->set(compact('user', 'email', 'cart', 'countries', 'code', 'phone', 'phone1', 'phone_code'));
        $this->set('_serialize', ['mobilecode']);
    }

    /**
     * resetPassword recovery method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function resetpassword($email = null) {
        $this->viewBuilder()->theme('Panel')->layout('register');

        //check user is in system
        if ($this->request->is('post')) {
            $query = $this->Users->findByEmail($this->request->data['email'])->first();

            if (is_null($query)) {
                $this->Flash->error(__('Can\'t find your account in our system. Email does not exist'));
            } else {
                $query->email = $this->request->data['email'];
                $recover = $this->Users->save($query);

                if ($recover) {
                    $options = [
                        'foreign_key' => $query->id
                    ];
                    $emailtoken = $this->Users->Tokens->find('all', ['conditions' => ['Tokens.foreign_key' => $query->id, 'Tokens.status' => false], 'fields' => 'Tokens.token'])->last();
                    //debug($emailtoken->token);
                    //$sent = $this->getMailer('User')->send('resetPassword', [$query, $emailtoken]);

                    $email = new Email('noreply');
                        $email->to($query->email)
                                ->template('Panel.resetpassword', 'Panel.resetpassword')
                                ->viewVars(['token' => $emailtoken->token])
                                ->emailFormat('html')
                                //->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->sender('noreply@amplifihub.com', 'AmplifiHub')
                                ->from('noreply@amplifihub.com', 'AmplifiHub')
                                ->subject('Reset Password Email');
                        $sent = $email->send();

                    //debug($sent);
                    if ($sent):
                        $this->Flash->info(__('Password reset link has been sent to the email you provided'));
                    else:
                        $this->Flash->error(__('Couldn\'t send password reset email. Please try again.'));
                    endif;
                }
            }
        }
    }

    /**
     * Confirm password reset recovery method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function reset($token = null) {
        $this->viewBuilder()->theme('Panel')->layout('register');

        if ($this->request->is('post')) {
            # code...
            $data = $this->request->getData();
            $token = $this->request->getParam('token');

            try {
                $verify = $this->Users->Tokens->verify($token);
                $user = $this->Users->find('all', ['conditions' => ['Users.id' => $verify->foreign_key]])->first();
                $save = $this->Users->patchEntity($user, $data);

                if ($verify):
                    $this->Flash->success(__('New Password has been saved.'));
                    $this->Users->save($save);
                    $sent = $this->getMailer('User')->send('confirmresetPassword', [$user]);
                //($sent);
                endif;
            } catch (\Exception $e) {
                $this->Flash->error(__('Verification error. Either token has expired or used. Try registering again'));
                //return $this->redirect(['action'=>'register']);
            }
        }
        //$this->set(compact('user','token'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        //var_dump('12');exit;
        $this->loadModel('Carts');
        $this->loadModel('Referrals');
        $cart = $this->Carts->getCount();
        $id == '' ? $id = $this->Auth->user('id') : '';
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->paginate = [
            'conditions' => ['referral_id' => $user->id],
            'contain' => ['Users.Subscriptions'],
            'order' => ['created' => 'DESC']
        ];
        $referrals = $this->paginate($this->Referrals);
        if(isset($_FILES["photo"]) && isset($_POST["new_croppie_img"]) && $_POST["new_croppie_img"] != ''){
            $data = $_POST["new_croppie_img"];
            $image_array_1 = explode(";", $data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $cover_new = base64_decode($image_array_2[1]);
            file_put_contents($_FILES["photo"]["tmp_name"], $cover_new);
        }
        if ($this->isAuthorize($user)) {//check to see if user has authorization to edit account
            if ($this->request->is(['patch', 'post', 'put'])) {
                debug($this->request->getData());
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Profile Successfully updated'));

                    return $this->redirect($this->referer());
                }

                $this->Flash->error(__('Profile could not be saved. Please, try again.'));
            }
        } else if (!$this->isAuthorize($user) && $user['id'] === $this->Auth->user('id')) {
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Profile Successfully updated.'));
                    return $this->redirect($this->referer());
                }

                $this->Flash->error(__('Profile could not be saved. Please, try again.'));
            }
        } else if ($id != $this->Auth->user('id') && $this->isAuthorize($user) == false) { //allow ony user or admin to access this method and their profile
            return $this->redirect($this->referer());
        }

        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        $title="Edit profile";
        $this->set(compact('user', 'cart', 'countries', 'referrals', 'title'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Admin Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function adminedit($id = null) {

        $this->loadModel('Carts');
        $cart = $this->Carts->getCount();

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        //debug($user);

        if ($this->isAuthorize($user)) {//check to see if user has authorization to edit account
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        } else if (!$this->isAuthorize($user) && $user['id'] === $this->Auth->user('id')) {
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect($this->referer());
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        } else if ($id != $this->Auth->user('id') && $this->isAuthorize($user) == false) { //allow ony user or admin to access this method and their profile
            return $this->redirect($this->referer);
        }

        $this->set(compact('user', 'cart'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {

        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        if ($this->isAuthorize($user)) {//check to see if user has authorization to edit account
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        } else if (!$this->isAuthorize($user) && $user['id'] === $this->Auth->user('id')) {
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
        }

        return $this->redirect(['controller' => 'users', 'action' => 'logout']);
    }

    public function producerprofile() {
        $this->viewBuilder()->theme('Panel')->layout('register');
    }

    public function topseller() {

    }

    public function topProducer($id = null, $status = 0) {
        if ($this->request->is('post')) {

            $articlesTable = TableRegistry::get('users');
            $article = $articlesTable->get($id); // Return article with id 12

            $article->top_producer = $status;
            $articlesTable->save($article);

            return $this->redirect(['action' => 'index']);
        }
    }

    public function downloads(){
        
        
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="BackwardusersList.csv";');
        $conn = ConnectionManager::get('default');

        // $this->loadModel('Users');
        //     $rec = $this->Users->find('all', [
        //     'fields' => array('id', 'email','aka')
        // ]);
        
        $today = date('Y-m-d');
        $lastThreeMonth = date("Y-m-d", strtotime("-3 month"));
        $lastThreeYear = date("Y-m-d", strtotime("-3 year"));

        $users = $conn->execute("SELECT *, timeonsites.id as id FROM `timeonsites` INNER JOIN users ON users.id=timeonsites.user_id WHERE timeonsites.user_id IN (SELECT user_id FROM timeonsites GROUP BY user_id HAVING MAX(timeonsites.date) <= DATE_ADD('$lastThreeMonth', INTERVAL -3 MONTH)) GROUP BY timeonsites.user_id ORDER BY timeonsites.id DESC")->fetchAll('assoc');
        // print_r($users);exit;
            $f = fopen("tmp.csv", "w");
            
            if(!empty($users)){
               foreach($users as $user){
                   if(!empty($user['email'])){
                   echo trim($user['aka']).','.trim($user['email']).','.trim($user['accounttype']).','.trim($user['phone']).PHP_EOL;
    
                }
           }


           }


       // echo " i m here ";
        exit;

    }


  public function transactionsExcelExport(){

     $connection = ConnectionManager::get('default');
     $this->loadModel('Carts');
      $this->loadModel('Stores');

      header("Content-Type: application/xls");
      header("Content-Disposition: attachment; filename=filename.xls");
      header("Pragma: no-cache");
      header("Expires: 0");


      echo '<table border="1">';
      //make the column headers what you want in whatever order you want
      echo '<tr><th>Sr.No</th><th>Username</th><th>Sales</th><th>Purchases</th><th>Play Count</th><th>Profile Visits</th><th>Free Downloads</th><th>Mix Masterings</th></tr>';

      $result = $this->Users->find("all",array(
                'fields' => array('user_id'=>'Users.id', 'username'=>'Users.aka' ), // retrieving fileds

              'order' => array('Users.id' => 'ASC')
            ));
            $i = 1;
            foreach ($result as $value) {
              $query = $this->Carts->find();
             $value->sales =  $query->select(['count' => $query->func()->count('*')])->where(['seller_id' => $value->user_id])->first()->count;
             $value->purchases =  $query->select(['count' => $query->func()->count('*')])->where(['buyer_id' => $value->user_id])->first()->count;

             $query = $this->Stores->find();
             $value->play_count =  $query->select(['sum' => $query->func()->sum('play_count')])->where(['user_id' => $value->user_id])->first()->sum;

              // name of your database connection
             $profile_visits =  $connection->execute('SELECT  SUM(count) as profile_visits  FROM `user_profileview` WHERE user_id='.$value->user_id)
                     ->fetchAll('assoc');
             $value->profile_visits = $profile_visits[0]["profile_visits"];

             $free_downloads = $connection->execute('SELECT  COUNT(*) as free_downloads  FROM `freebeatsdownloads` WHERE uploader_id='.$value->user_id)
                     ->fetchAll('assoc');
             $value->free_downloads = $free_downloads[0]["free_downloads"];

             $mixmasterings = $connection->execute('SELECT  COUNT(*) as mix_masterings  FROM `mixmasterings` WHERE user_id='.$value->user_id)
                     ->fetchAll('assoc');
             $value->mix_masterings = $mixmasterings[0]["mix_masterings"];
             echo "<tr><td>".$i++."</td><td>".$value->username."</td><td>".$value->sales."</td><td>".$value->purchases."</td><td>".$value->play_count."</td><td>".$value->profile_visits."</td><td>".$value->free_downloads."</td><td>".$value->mix_masterings."</td></tr>";
           //   $query;
              //$value->sales = $this->Users->find("all",array('fields' => array('Users.id', 'Users.aka' ), 'order' => array('Users.id' => 'ASC')));
            }
    echo '</table>';die;
  return true;
  }

  public function transactionrecords(){
    if($this->Auth->user('role') == 'admin'){
      if(isset($_POST["type"]) && $_POST["type"] == "export"){
        $this->transactionsExcelExport();
      }
       $connection = ConnectionManager::get('default');

             $this->loadModel('Carts');
              $this->loadModel('Stores');
                   $result = $this->Users->find("all",array(
                             'fields' => array('user_id'=>'Users.id', 'username'=>'Users.aka' ), // retrieving fileds

                           'order' => array('Users.id' => 'ASC')
                         ));
          //   echo '<pre>';print_r($result);die;
          $result = $this->paginate($result);
             foreach ($result as $value) {
               $query = $this->Carts->find();
              $value->sales =  $query->select(['count' => $query->func()->count('*')])->where(['seller_id' => $value->user_id])->first()->count;
              $value->purchases =  $query->select(['count' => $query->func()->count('*')])->where(['buyer_id' => $value->user_id])->first()->count;

              $query = $this->Stores->find();
              $value->play_count =  $query->select(['sum' => $query->func()->sum('play_count')])->where(['user_id' => $value->user_id])->first()->sum;

               // name of your database connection
              $profile_visits =  $connection->execute('SELECT  SUM(count) as profile_visits  FROM `user_profileview` WHERE user_id='.$value->user_id)
                      ->fetchAll('assoc');
              $value->profile_visits = $profile_visits[0]["profile_visits"];

              $free_downloads = $connection->execute('SELECT  COUNT(*) as free_downloads  FROM `freebeatsdownloads` WHERE uploader_id='.$value->user_id)
                      ->fetchAll('assoc');
              $value->free_downloads = $free_downloads[0]["free_downloads"];

              $mixmasterings = $connection->execute('SELECT  COUNT(*) as mix_masterings  FROM `mixmasterings` WHERE user_id='.$value->user_id)
                      ->fetchAll('assoc');
              $value->mix_masterings = $mixmasterings[0]["mix_masterings"];
            //   $query;
               //$value->sales = $this->Users->find("all",array('fields' => array('Users.id', 'Users.aka' ), 'order' => array('Users.id' => 'ASC')));
             }
             // foreach ($result as $value) {
             //   echo $value ? $value->profile_visits.'<br/>' : '';
             // }
             // die;
            $this->set('transRecords', $result);
          }else{
              return $this->redirect(['action' => 'index']);
          }
    }

  public function freebeatdownloads(){
    $this->loadModel('Freebeatsdownloads');
    $this->loadModel('Stores');
    if($this->Auth->user('role') == 'admin'){
        $result = $this->Freebeatsdownloads->find("all",array(
                                 'fields' => array('id'=>'Freebeatsdownloads.id', 'store_id'=>'Freebeatsdownloads.store_id', 'uploader_id'=>'Freebeatsdownloads.uploader_id', 'downloader_id'=>'Freebeatsdownloads.downloader_id', 'created_at'=>'Freebeatsdownloads.created_at' ), // retrieving fileds

                               'order' => array('Freebeatsdownloads.id' => 'ASC')
                             ));
    }else{
        $result = $this->Freebeatsdownloads->find("all",array(
                                 'fields' => array('id'=>'Freebeatsdownloads.id', 'store_id'=>'Freebeatsdownloads.store_id', 'uploader_id'=>'Freebeatsdownloads.uploader_id', 'downloader_id'=>'Freebeatsdownloads.downloader_id', 'created_at'=>'Freebeatsdownloads.created_at' ), // retrieving fileds
                                'conditions' => array(['Freebeatsdownloads.uploader_id' => $this->Auth->user('id')]),
                               'order' => array('Freebeatsdownloads.id' => 'ASC')
                             ));
    }
       //echo '<pre>';print_r($result);die;
    $result = $this->paginate($result);
    foreach ($result as $value) {
     $query = $this->Users->find();
    $value->uploader =  $query->select(['uploader' => 'Users.aka'])->where(['id' => $value->uploader_id])->first()->uploader;

    $query = $this->Users->find();
    $downloader =  $query->select(['downloader' => 'Users.aka', 'downloader_mail'=>'Users.email'])->where(['id' => $value->downloader_id])->first();
    $value->downloader = $downloader->downloader;
    $value->downloader_mail = $downloader->downloader_mail;


    $query = $this->Stores->find();
    $value->beat_name =  $query->select(['beat_name' => 'Stores.name'])->where(['id' => $value->store_id])->first()->beat_name;

    }
     $title="Contact Customers";
        $this->set(compact('title'));
     $this->set('records', $result);
  }

  function timeonsites(){
   if($this->Auth->user('role') == 'admin'){
    $this->loadModel('Timeonsites');
        $result = $this->Timeonsites->find("all",array(
                                 'fields' => array('id'=>'Timeonsites.id', 'user_id'=>'Timeonsites.user_id', 'date'=>'Timeonsites.date', 'login_logout_record'=>'Timeonsites.login_logout_record', 'created_at'=>'Timeonsites.created_at', 'updated_at'=>'Timeonsites.updated_at' ), // retrieving fileds

                               'order' => array('Timeonsites.created_at' => 'DESC')
                             ));

       //echo '<pre>';print_r($result);die;
    $result = $this->paginate($result);
    foreach ($result as $value) {
     $query = $this->Users->find();
    $value->username =  $query->select(['username' => 'Users.aka'])->where(['id' => $value->user_id])->first()->username;
    }

     $this->set('records', $result);
   }
  }


}
