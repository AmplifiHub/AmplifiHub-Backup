<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\Event\Event;
use Cake\Controller\Component\FlashComponent;
use Cake\Network\Session;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    public function beforeFilter() {
    $this->Auth->allow(array('about','affiliates','ourteam','refundpolicy','privacypolicy','termsandconditions','samplePage', 'searchresult', 'moresamplepacks', 'searchresultpacks', 'packdetail', 'musicdistribution', 'home', 'loadlicense', 'pricing','contact'));
}
    
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
     
     
    public function display(...$path) {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }

        $this->loadModel('Stores');
        $query = $this->Stores->find('All', [
            'limit' => 12,
            'order' => ['Stores.created' => 'DESC']
        ]);
        $recent = $this->paginate($query);
        //debug($recent);
        $this->set(compact('recent'));
        $this->set('_serialize', ['recent']);
    }

    public function home() {
        //$this->layout = "newdesign";
        $conn = ConnectionManager::get('default');
        $this->loadModel('HomeYoutubeVideo');
        $youtubeVideo = $this->HomeYoutubeVideo->get(1);
        $this->viewBuilder()->theme('Panel')->layout('home');
        $this->loadModel('Stores');
        $this->loadModel('Carts');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        $this->loadModel('Users');
        $date = date('Y-m-d');
        $userid = $this->Auth->user('id');
        
        
        
        
        //searching for beats
        $bquery = $this->Genres->find('list');
        $genre = $this->paginate($bquery);

        //for recent beats uploaded
        $query = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            //'conditions' => ['Stores.promoted'=>1],
            'limit' => 6,
            'order' => ['Stores.created' => 'DESC']
        ]);
        $recent = $query->toArray();

        $powerUser = $this->Users->find('all', [
            'contain' => ['Artistes', 'MixMasterings', 'Songwriters', 'Directors'],
            'conditions' => ['Users.power_users' => 1],
            'limit' => 3,
        ]);


        //for promoted beats by Admin
        $promotedquery = $this->Stores->find('all', [
            'contain' => ['Users', 'Genres'],
            'conditions' => array ('OR' => array(array('Stores.promoted' => 'yes'),array('Stores.promote_permission' => 1),)),
            /* 'limit' => 8, */
            'order' => ['Stores.created' => 'ASC']
        ]);
        $promoted = $promotedquery->toArray();
        //debug($recent);
        //for mixmastering
        /* $mmquery = $this->Mixmasterings->find('all',[
          'contain' => ['Users'],
          //'conditions' => ['Mixmasterings.promoted'=>1],
          'limit' => 4,
          'order' => ['Mixmasterings.created' => 'DESC']
          ]);
          $mm = $mmquery->toArray(); */

        //for artiste listing on page
        /* $subquery = $this->Users->Subscriptions->find('all',[
          'contain' => ['Users','Plans'],
          'conditions' => ['Subscriptions.status' => 'active','Subscriptions.level_id' => 'artist'],
          'limit' => 6,
          'order' => ['Subscriptions.created' => 'DESC']
          ]); */
        //$subscription = $subquery->toArray();
        $mmlistn = $this->Subscriptions->find()->limit(6)->contain(['Users' => ['Mixmasterings']])->where(['Subscriptions.expiry >=' => $date, 'OR' => [['Subscriptions.level_id' => 20], ['Subscriptions.level_id' => 21], ['Subscriptions.level_id' => 22]]])->toArray();

        $artistelistn = $this->Subscriptions->find()->limit(6)->contain(['Users' => ['Artistes']])->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.level_id' => 25])->toArray();

        $recentlistn = $this->Stores->find('all')->limit(12)->contain(['Users'])->matching('Subscriptions', function($x) use($date) {
                    return $x
                                    ->where(['expiry >=' => $date, 'OR' => [['level_id' => 20], ['level_id' => 21], ['level_id' => 22]]]);
                })->toArray();

        //debug($recentlistn);
        
        
        // print_r($nextWeek);exit;
        // exit;
        $title = "AmplifiHub - Sell African Beats Online | Buy African Beats Online";
        $description = "AmplifiHub is an online music marketplace that allows music producers in Africa to license and sell beats and give away free beats.";
        $AmpKeyword = "AmplifiHub, African music makers, African music making market, Sell beats online, Afrobeat Instrumentals for sale, Afro beat, Afro instrumental beats, buy afrobeats instrumentals";
        $banner = $this->PageBanner->find('all', ['conditions' => ['status' => 1, 'page' => 1]])->all();
        $this->set(compact('userid','AmpKeyword', 'title', 'description', 'recent', 'promoted', 'mm', 'subscriptions', 'genre', 'artistelistn', 'mmlistn', 'banner', 'youtubeVideo', 'powerUser','beatId','pUser','genrevalue','cart','number','today'));
        $this->set('_serialize', ['recent']);
    }

    public function about($id = null) {
        $this->viewBuilder()->theme('Panel')->layout('front');
    }
    public function mobilecode($id = null) {
        $this->viewBuilder()->theme('Panel')->layout('mobilecode');
    }

    public function pricing($id = null) {
        $date = date('Y-m-d');
        $this->loadModel('Subscriptions');
        $currentUserSubscription = $this->Subscriptions->find('list', [
                    'keyField' => 'id',
                    'valueField' => 'plan_id'
                ])->where(['Subscriptions.expiry >=' => $date, 'Subscriptions.status' => 'active', 'user_id' => $this->Auth->user('id')])->hydrate(false)->toArray();
                
        $title="Sell African Beat Instrumentals | Offer Mixing and Mastering Services - AmplifiHub Pricing ";
        $description = "Sell African beats and offer Mixing and Mastering services on AmplifiHub. See our pricing and sign up today to get started";
        $AmpKeyword = "Afrobeat mixing, mixing and mastering, Afrobeat mastering, AmplifiHub, African music makers, African music making market, Sell beats online, Afrobeat Instrumentals for sale, Afro beat, Afro instrumental beats, buy afrobeats instrumentals";
        $this->set(compact('currentUserSubscription', 'title','description','AmpKeyword'));
        $this->viewBuilder()->theme('Panel')->layout('pricing');
    }
    
    public function contact($id = null) {
        $title="AmplifiHub - Contact Us";
        $this->set(compact('title'));
        $this->viewBuilder()->theme('Panel')->layout('pricing');
    }

    public function ourteam($id = null) {

        $this->viewBuilder()->theme('Panel')->layout('front');
    }

    public function privacypolicy($id = null) {
        $this->viewBuilder()->theme('Panel')->layout('front');
    }

    public function termsandconditions() {
        $this->viewBuilder()->theme('Panel')->layout('front');
    }

    public function refundpolicy($id = null) {
        $this->viewBuilder()->theme('Panel')->layout('front');
    }

    public function affiliates() {
        $this->viewBuilder()->theme('Panel')->layout('front');
    }
    public function musicdistribution($id = null) {
        $this->viewBuilder()->theme('Panel')->layout('musicdist');
    }
    
    public function samplePage()
    {
    $conn = ConnectionManager::get('default');
    $this->loadModel('SampleStore');
    $this->loadModel('PacksStore');
    $this->loadModel('Carts');
    $this->loadModel('Stores');
    $this->loadModel('Genres');
    $this->viewBuilder()->theme('Panel')->layout('sample_page');
    
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

   
    $stmt = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND() LIMIT 8');
    $sample = $stmt ->fetchAll('assoc');
    
    $stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND() LIMIT 4');
    $packs = $stmt1 ->fetchAll('assoc');
    
    $stmt2 = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND()');
    $lists = $stmt2 ->fetchAll('assoc');
    
    $stmt3 = $conn->execute('SELECT * FROM genres ');
    $genres = $stmt3 ->fetchAll('assoc');
    
    $type=array(
            'Drums' => 'Drums',
            'Percussion' => 'Percussion',
            'Synth' => 'Synth',
            'Loop' => 'Loop',
            'Vocals' => 'Vocals',
            );
            
    //$this->set('genre', $this->Stores->Genres->find('list'));
        
    /*
    foreach($years as $year){
    print_r(date('Y', strtotime($year['created'])));    
    }
    */
    //exit;
    
    $this->set(compact('sample', 'packs', 'lists', 'type', 'years', 'genres'));
    $this->set('_serialize', ['sample_page']);
    }
    
    public function moresamplepacks()
    {
    $conn = ConnectionManager::get('default');
    $this->loadModel('SampleStore');
    $this->loadModel('PacksStore');
    $this->loadModel('Carts');
    $this->loadModel('Stores');
    $this->loadModel('Genres');
    $this->viewBuilder()->theme('Panel')->layout('moresamplepacks');
    
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
            
                
                /*$product = $this->Stores->get($count['id']);
                $product['count'] = $count;
                $product['price'] = $count['price'];
                $product['license'] = $count['license'];
                $products[] = $product;*/
            }
            }
        }

    $g = $this->PacksStore->find('all')->select(['id', 'user_id', 'sample_image', 'cover_path', 'cover_size', 'cover_type', 'packs_zip', 'packs_path', 'sample_name', 'sample_price', 'packs_description', 'packs_information', 'sample_genre', 'sample_year', 'created', 'packs_size', 'packs_type']);
    $packs = $this->paginate($g);
//   print_r($packs);exit;
    /*$stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND()');
    $packs = $stmt1 ->fetchAll('assoc');
    */
    $stmt3 = $conn->execute('SELECT * FROM genres ');
    $genres = $stmt3 ->fetchAll('assoc');
    
    $type=array(
            'Drums' => 'Drums',
            'Percussion' => 'Percussion',
            'Synth' => 'Synth',
            'Loop' => 'Loop',
            'Vocals' => 'Vocals',
            );
    
    // print_r($packs);exit;  
    //$this->set('genre', $this->Stores->Genres->find('list'));
        
    /*
    foreach($years as $year){
    print_r(date('Y', strtotime($year['created'])));    
    }
    */
    //exit;
    
    $this->set(compact('sample', 'packs', 'lists', 'type', 'years', 'genres'));
    $this->set('_serialize', ['moresamplepacks']);
    }
    
    public function loadlicense() {
            $this->loadModel('SampleStore');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->SampleStore->findById($id);
        //print_r($storeId);exit;
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
    
    public function loadlicenset() {
            $this->loadModel('PacksStore');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->PacksStore->findById($id);
        
        echo json_encode($storeId);
    }
    
    public function loadlicensep() {
        $this->loadModel('PacksStore');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->PacksStore->findById($id);
        //print_r($storeId);exit;
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
    
    public function packdetail() {
        
        $this->loadModel('PacksStore');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->PacksStore->findById($id);
        //print_r($storeId);exit;
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
    
    public function ratingDetail() {
        
        $this->loadModel('Track');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        
        $storeId = $this->Track->findById($id);
       
        echo json_encode($storeId);
       
   
    }
    
    public function rating() {
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('Track');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        $user = $this->Auth->user('id');
        
        $ratingData = $conn->execute("SELECT * FROM ar_rating WHERE track_id = '".$id."' LIMIT 1")->fetchAll('assoc');
        
        //$storeId = $this->Track->findById($id);
       
        echo json_encode($ratingData);
       
   
    }
    
    public function viewRating() {
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('ArRating');
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $id = $this->request->query('id'); 
        
        $ratingData = $conn->execute("SELECT id, COUNT(instrumental) as ins, COUNT(vocals) as voc, COUNT(delivery) as del, COUNT(lyrics) as lyr, COUNT(composition) as com, COUNT(mixing) as mix, COUNT(target) as tar, COUNT(street) as str, COUNT(commercial) as comm, COUNT(overall) as ove, feedback, FORMAT((SUM(instrumental) / COUNT(instrumental)),0) as ins1, FORMAT((SUM(vocals) / COUNT(vocals)),0) as voc1, FORMAT((SUM(delivery) / COUNT(delivery)),0) as del1, FORMAT((SUM(lyrics) / COUNT(lyrics)),0) as lyr1, FORMAT((SUM(composition) / COUNT(composition)),0) as com1, FORMAT((SUM(mixing) / COUNT(mixing)),0) as mix1, FORMAT((SUM(target) / COUNT(target)),0) as tar1, FORMAT((SUM(street) / COUNT(street)),0) as str1, FORMAT((SUM(commercial) / COUNT(commercial)),0) as comm1, FORMAT((SUM(overall) / COUNT(overall)),0) as ove1 FROM ar_rating WHERE track_id = '".$id."' GROUP BY id ")->fetchAll('assoc');
        /*
        $query = $this->ArRating->find();
        $ratingData=$query->select([
            'ins' => $query->func()->count('instrumental'),
            'ins1' => $query->func()->avg('instrumental')
        ])->where(['user_id' => $user, 'track_id' => $id]); 
        */
       
        echo json_encode($ratingData);
       
   
    }
    
    public function viewAllComments() {
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('Track');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        $user = $this->Auth->user('id');
        
        $feedbacks = $conn->execute("SELECT feedback FROM ar_rating WHERE track_id = '".$id."' ")->fetchAll('assoc');
        $count =1;
        foreach($feedbacks as $feedback){
        $data="<div class='form-group'><label for='comment'>Feedback:</label><textarea name='feedback' class='form-control' rows='5' id='comment' readonly> ".$feedback['feedback']."</textarea>";
        echo $data;
        
            
        }
       
       
   
    }
    
    public function viewBooking() {
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('Track');
        $this->loadModel('AddBooking');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        $user = $this->Auth->user('id');
        
        $data = $this->AddBooking->find('all', [
           
            'conditions' => ['track_id' => $id]
        ]);
        echo json_encode($data);
       
       
   
    }
    
    public function addRating()
    {
        $conn = ConnectionManager::get('default');
         $this->loadModel('ArRating');
         $store = $this->ArRating->newEntity();
        $this->autoRender = false;
        $user = $this->Auth->user('id');
        $formData=$this->request->getData();
        $substatus = null;
         //echo json_encode($user);
         
        // Get posted data 
         $postID = $this->request->query('postID'); 
         $ratingNum = $this->request->query('ratingNum'); 
         $rtype = $this->request->query('rtype'); 
    
         //print_r($store);
         
        
        $data= array(
                'track_id' => $postID,
                'rating_number' => $ratingNum,
                'user_id' => $user,
                'rtype' => $rtype
                );
                
        $query = $conn->execute("SELECT rating_number FROM ar_rating WHERE track_id = '".$postID."' AND user_id = '".$user."' AND rtype='".$rtype."' ")->fetchAll('assoc');
         
           
        if($query[0]['rating_number'] > 0 ){ 
            // Status 
           echo  $status = 2; 
        }else{ 
            $store = $this->ArRating->patchEntity($store, $data);
                //print_r($store);
                if ($this->ArRating->save($store)) {
                    echo $status = 1; 
                }
            
        
             
        }
         
        // Fetch rating details from the database 
        //$query = "SELECT COUNT(rating_number) as rating_num, FORMAT((SUM(rating_number) / COUNT(rating_number)),1) as average_rating FROM rating WHERE track_id = $postID GROUP BY (track_id)"; 
        //$result = $db->query($query); 
        //$ratingData = $result->fetch_assoc(); 
        
        $ratingData = $conn->execute("SELECT COUNT(rating_number) as rating_num, FORMAT((SUM(rating_number) / COUNT(rating_number)),1) as average_rating FROM ar_rating WHERE track_id = '".$postID."' GROUP BY (track_id)")->fetchAll('assoc');
        //foreach($ratingData as $ratingDataa){
        $response = array( 
            'data' => $ratingData, 
            'status' => $status 
        ); 
         
        // Return response in JSON format 
        
        
        //}
    
          
            
      
    
    echo json_encode($response);
    }

    
    public function samplePageTest()
    {
    $this->viewBuilder()->theme('Panel')->layout('sampledesign');
    }
    
    public function aAndR($reference = null)
    {
        
        if (!empty($this->request->query['item_number']) && empty($reference)) {
            $this->loadModel('Stores');
            $cart = $this->Carts->getCount();
            $display = 'hide';
            $req = $this->request->getQuery('item_number');
            $readcart = $this->Carts->readProduct();
            unset($readcart);
            $del = $this->request->getsession()->delete('cart');

            $user = $this->request->session()->read('Auth.User');
            $query = $this->Carts->find('all', ['conditions' => ['trans_ref' => $this->request->query['item_number'], 'buyer_id' => $user['id']],
                'contain' => ['Stores']]);
            
            $download = $this->paginate($query);
            
            $this->set(compact('download', 'display', 'cart'));
            $this->set('_serialize', ['download']);
            
            $downloads = $download->first();
            $reference=$downloads->trans_ref; 
            $beatid=$downloads->beat_id; 
            $buyerid=$downloads->buyer_id; 
            
            $query1 = $this->Stores->find('all', ['conditions' => ['id' => $beatid],
                ]);
            $store = $query1->first();
             $beatname=$store->name;
             $sellerid=$store->user_id;
                 
            $paid = $this->Carts->paidPaypal($reference, $beatname, $sellerid, $buyerid);
            if($paid){
                 $this->Flash->success(__('Your beat store transaction has been confirmed.'));
            }
        }
        
    $conn = ConnectionManager::get('default');
    $this->loadModel('Genres');
     $this->viewBuilder()->theme('Panel')->layout('a_and_r');
    
    //$ar = $this->Users->find('all')->where(['ar' => 1])->limit(4);
    //$ar = $query = "SELECT * FROM users WHERE ar = 1 ORDER BY RAND() LIMIT 4"; 
    $ar=$conn->execute("SELECT * FROM users WHERE ar = 1 ORDER BY RAND() LIMIT 4")->fetchAll('assoc');
        
        
    $genres = $this->Genres->find('all');
    
    $user = $this->Auth->user('id');
    
    $this->set(compact('ar', 'genres', 'user'));
    $this->set('_serialize', ['a_and_r']);  
    }
    
    public function featuredSample()
    {
        
        $this->loadModel('Stores');
        $this->loadModel('SampleStore');
        $this->loadModel('Users');
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $cart = $this->Carts->getCount();

        $store = $this->SampleStore->newEntity();
        //print_r($store);exit;
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        
        //permission change user account
       
        if($this->request->is('post')){
          $formData=$this->request->getdata();
         $formData['sample_beat']['name'] = str_replace (' ', '_', $formData['sample_beat']['name'] );
        $path1 = $formData['sample_beat']['tmp_name'];
        $path2 = $formData['sample_beat']['name'];
        $mp31 = $path1;
        $webroot = '/home/amplifih/public_html/webroot/files/';
        $out = $webroot.time().$path2;
        $mp32 = 'https://amplifihub.s3.us-east-2.amazonaws.com/Stores/ar_upload_mp3/ampwatermark.mp3';
             $combined = shell_exec('ffmpeg -i '.$mp31.' -i /home/amplifih/public_html/webroot/files/a.mp3 -filter_complex "[0:0][1:0] amix=inputs=2:duration=longest" '.$out.' 2>&1');
        $formData['sample_beat']['tmp_name'] = $out;
          $store = $this->SampleStore->patchEntity($store, $formData);
          if($this->SampleStore->save($store)){
               $this->Flash->success(__('The Sample beat has been Uploaded.'));
            } else {
                $this->Flash->error(__('The Sample beat could not be Uploaded. Please, try again.'));
            };
        }

        $title="Featured Samples";
        $this->loadModel('Users');
        $userid = $this->Users->find()->where(['id' => $user])->first();
        //debug($userid);
        //debug(json_encode($genre, JSON_PRETTY_PRINT));
        //$this->set('user', $this->Stores->Users->find('list'));
        $type=array(
            'Drums' => 'Drums',
            'Percussion' => 'Percussion',
            'Synth' => 'Synth',
            'Loop' => 'Loop',
            'Vocals' => 'Vocals',
            );
            
            $years=array(
            '60s' => '60s',
            '70s' => '70s',
            '80s' => '80s',
            '90s' => '90s',
            '2000s' => '2000s',
            );
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('user'));
        $this->set(compact('store'));
        $this->set(compact('pUser','type', 'years', 'genrevalue', 'xclusive', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today'));
        $this->set('_serialize', ['samplePage']);
    }
    
    public function featuredSampleView()
    {
        $this->loadModel('SampleStore');
        $query = $this->SampleStore->find('all', [
            
            
           
            'order' => ['SampleStore.id' => 'DESC']
        ]);
        $store = $query->toArray();

        $stores = $this->paginate($query);
        $role = $this->Auth->user('admin');
        $title="Featured Uploaded Music";
        
        
        $this->set(compact('title', 'stores', 'role'));
        $this->set('_serialize', ['featuredSampleView']);
    }
    
    public function edit($id = null) {
        $this->loadModel('SampleStore');
        $this->loadModel('Stores');
       
       $type=array(
            'Drums' => 'Drums',
            'Percussion' => 'Percussion',
            'Synth' => 'Synth',
            'Loop' => 'Loop',
            'Vocals' => 'Vocals',
            );
            
            $years=array(
            '60s' => '60s',
            '70s' => '70s',
            '80s' => '80s',
            '90s' => '90s',
            '2000s' => '2000s',
            );
            
        $user = $this->Auth->user();
        $store = $this->SampleStore->get($id, [
            'contain' => []
        ]);

        //debug($user);
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart', 'type', 'years'));
        $this->set('_serialize', ['store']);
    }
    
    public function editBeats() {
        $this->loadModel('SampleStore');
        
        $this->autoRender = false;
        $id = $this->request->data['storeId'];
        $store = $this->SampleStore->get($id, [
            'contain' => []
        ]);

        $store = $this->SampleStore->patchEntity($store, $this->request->getData());
        if ($this->SampleStore->save($store)) {
            echo json_encode(['error' => "no", 'message' => 'Your Sample Music has successfully been updated']);
        } else {
            echo json_encode(['validation' => $store->errors()]);
        }
    }
        public function delete($id = null) {
        $this->loadModel('SampleStore');
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->SampleStore->get($id);
        if ($this->SampleStore->delete($store)) {
            $this->Flash->success(__('The beat has been deleted.'));
        } else {
            $this->Flash->error(__('The beat could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
    public function samplePacks()
    {
        $this->loadModel('Stores');
        $this->loadModel('PacksStore');
        $this->loadModel('Users');
        $this->loadModel('Carts');
        $this->loadModel('Subscriptions');
        $cart = $this->Carts->getCount();

        $store = $this->PacksStore->newEntity();
       
        $user = $this->Auth->user('id');
        $now = date('Y-m-d');
        $now1 = new \DateTime('-30 days');
        
        //permission change user account
       if($this->request->is('post')){
          $formData=$this->request->getdata();
          $store = $this->PacksStore->patchEntity($store, $this->request->getData());
          if($this->PacksStore->save($store)){
               $this->Flash->success(__('The Sample pack has been Uploaded.'));
            } else {
                $this->Flash->error(__('The Sample pack could not be Uploaded. Please, try again.'));
            };
        }
        

        $title="Packs Samples";
        $this->loadModel('Users');
        $userid = $this->Users->find()->where(['id' => $user])->first();
        //debug($userid);
        //debug(json_encode($genre, JSON_PRETTY_PRINT));
        //$this->set('user', $this->Stores->Users->find('list'));
        $type=array(
            'Drums' => 'Drums',
            'Percussion' => 'Percussion',
            'Synth' => 'Synth',
            'Loop' => 'Loop',
            'Vocals' => 'Vocals',
            );
            
            $years=array(
            '60s' => '60s',
            '70s' => '70s',
            '80s' => '80s',
            '90s' => '90s',
            '2000s' => '2000s',
            );
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('user'));
        $this->set(compact('store'));
        $this->set(compact('pUser','type', 'years', 'genrevalue', 'xclusive', 'premium', 'lease', 'substatus', 'userid', 'cart', 'title', 'number', 'beatcount', 'expiretrial1', 'expired', 'currentDate', 'expiretrial', 'today'));
        $this->set('_serialize', ['samplePacks']);
    }
    
    public function updateSample()
        {
         $this->loadModel('SampleStore');
        $user = $this->Auth->user('id');
        $this->autoRender = false;
        $id = $this->request->data['storeId'];
        $store = $this->SampleStore->get($id, [
            'contain' => []
        ]);

        $store = $this->SampleStore->patchEntity($store, $this->request->getData());
        if ($this->SampleStore->save($store)) {
            echo json_encode(['error' => "no", 'message' => 'Your beat has successfully been updated']);
        } else {
            echo json_encode(['validation' => $store->errors()]);
        }
    }
    
    public function samplePacksView()
    {
         $this->loadModel('PacksStore');
        $query = $this->PacksStore->find('all', [
            
           
            'order' => ['PacksStore.id' => 'DESC']
        ]);
        $store = $query->toArray();

        $stores = $this->paginate($query);
        $role = $this->Auth->user('admin');
        $title="Sample Packs";
        
        
        $this->set(compact('title', 'stores', 'role'));
        $this->set('_serialize', ['samplePacksView']);
    }
    
    public function editPacks($id = null) {
        $this->loadModel('PacksStore');
        $this->loadModel('Stores');
       
    
        $user = $this->Auth->user();
        $store = $this->PacksStore->get($id, [
            'contain' => []
        ]);

        //debug($user);
        $this->set('genre', $this->Stores->Genres->find('list'));
        $this->set(compact('store', 'user', 'cart', 'type', 'years'));
        $this->set('_serialize', ['editPacks']);
    }
    
        public function updatePacks()
        {
         $this->loadModel('PacksStore');
        $user = $this->Auth->user('id');
        $this->autoRender = false;
        $id = $this->request->data['storeId'];
        $store = $this->PacksStore->get($id, [
            'contain' => []
        ]);

        $store = $this->PacksStore->patchEntity($store, $this->request->getData());
        if ($this->PacksStore->save($store)) {
            echo json_encode(['error' => "no", 'message' => 'Your Packs has successfully been updated']);
        } else {
            echo json_encode(['validation' => $store->errors()]);
        }
    }
    
     public function deletep($id = null) {
        $this->loadModel('PacksStore');
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->PacksStore->get($id);
        if ($this->PacksStore->delete($store)) {
            $this->Flash->success(__('The Pack has been deleted.'));
        } else {
            $this->Flash->error(__('The Pack could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
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
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('SampleStore');
        $this->loadModel('Genres');
        $this->viewBuilder()->theme('Panel')->layout('searchresult');
       
        $search = $this->request->query('sample');
        $genrelist = $this->request->query('genrelist');
        $yearlist = $this->request->query('yearlist');
        $typelist = $this->request->query('typelist');
        
        if(!empty($search))
        {
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_name LIKE '$search%' ORDER BY RAND() LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        $stmt1 = $conn->execute("SELECT * FROM packs_store WHERE sample_name LIKE '$search%' LIMIT 4");
        $packs = $stmt1 ->fetchAll('assoc');
        
        $stmt2 = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_name LIKE '$search%'");
        $lists = $stmt2 ->fetchAll('assoc');
        
        }elseif(!empty($genrelist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_genre = $genrelist LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        }elseif(!empty($yearlist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_year = '$yearlist' LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        }elseif(!empty($typelist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_type = '$typelist' LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        
        }else{
        $stmt = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND() LIMIT 8');
        $sample = $stmt ->fetchAll('assoc');
        
        $stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND() LIMIT 4');
        $packs = $stmt1 ->fetchAll('assoc');
        }
        
        //$stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND() LIMIT 4');
        //$packs = $stmt1 ->fetchAll('assoc');
        
        //$stmt2 = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND()');
        //$lists = $stmt2 ->fetchAll('assoc');
        
        $stmt3 = $conn->execute('SELECT * FROM genres ');
        $genres = $stmt3 ->fetchAll('assoc');  
        
        $title="AmplifiHub - Samples Search Results";
        $this->set(compact('sample', 'packs', 'lists', 'genres','title'));
        $this->set('_serialize', ['searchresult']);
    }
    
    public function searchresultpacks(){

        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('Mixmasterings');
        $this->loadModel('Subscriptions');
        $this->loadModel('Genres');
        $this->loadModel('Artistes');
        $this->loadModel('PageBanner');
        $this->loadModel('Users');
        
        $conn = ConnectionManager::get('default');
        $this->loadModel('SampleStore');
        $this->loadModel('Genres');
        $this->viewBuilder()->theme('Panel')->layout('searchresultpacks');
       
        $search = $this->request->query('sample');
        /*$genrelist = $this->request->query('genrelist');
        $yearlist = $this->request->query('yearlist');
        $typelist = $this->request->query('typelist');*/
        
        if(!empty($search))
        {
        /*$stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_name LIKE '$search%' ORDER BY RAND() LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        */
        $stmt1 = $conn->execute("SELECT * FROM packs_store WHERE sample_name LIKE '$search%'");
        $packs = $stmt1 ->fetchAll('assoc');
        
        /*$stmt2 = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_name LIKE '$search%'");
        $lists = $stmt2 ->fetchAll('assoc');
        */
        }elseif(!empty($genrelist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_genre = $genrelist LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        }elseif(!empty($yearlist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_year = '$yearlist' LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        }elseif(!empty($typelist)){
            
        $stmt = $conn->execute("SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre WHERE sample_store.sample_type = '$typelist' LIMIT 8");
        $sample = $stmt ->fetchAll('assoc');
        
        
        }else{
        // $stmt = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND() LIMIT 8');
        // $sample = $stmt ->fetchAll('assoc');
        
        $stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND()');
        $packs = $stmt1 ->fetchAll('assoc');
        }
        
        
        //$stmt1 = $conn->execute('SELECT * FROM packs_store ORDER BY RAND() LIMIT 4');
        //$packs = $stmt1 ->fetchAll('assoc');
        
        //$stmt2 = $conn->execute('SELECT *, sample_store.id as sid FROM sample_store LEFT JOIN genres ON genres.id=sample_store.sample_genre ORDER BY RAND()');
        //$lists = $stmt2 ->fetchAll('assoc');
        
        $stmt3 = $conn->execute('SELECT * FROM genres ');
        $genres = $stmt3 ->fetchAll('assoc');  
        
        $title="AmplifiHub - Sample Packs Search Results";
        $this->set(compact('sample', 'packs', 'lists', 'genres', 'title'));
        $this->set('_serialize', ['searchresultpacks']);
    }
    
    
}
