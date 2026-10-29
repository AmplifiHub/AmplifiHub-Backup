<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\ORM\TableRegistry;
use Cake\Network\Session;
use Cake\I18n\Time;
use Cake\View\Helper\PaginatorHelper;
use Cake\Datasource\ConnectionManager;

/**
 * Stores Controller
 *
 *
 * @method \App\Model\Entity\Store[] paginate($object = null, array $settings = [])
 */
class FpdfController extends AppController {

    public $paginate = [
        'limit' => 10,
    ];

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paystack');
        $this->Auth->allow(['searchresult']);
    }

    public function index(){
        echo "hkkdf";
    }
    
    function viewpdf($id = null) {

    $this->viewBuilder()->theme('Panel')->layout('pdf'); //this will use the pdf.ctp layout
    $this->render();
    }
    
    public function invoicepdf(){
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Stores');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        
        $userid = $this->Auth->user('id');
        $invoiceid = $this->request->query('id');
        $licence = $this->request->query('licence');
        
         $this->viewBuilder()->setLayout('empty');
        
					    $userid = $this->Auth->user('id');
					    
					//exit;
        $query = $this->Carts->find('all', array(
        'conditions' => array('Carts.id' => $invoiceid),
        'limit'=>1
    ));
    
        
            foreach($query as $cart){
                //print_r($qq);
                
                
                
        $query = $this->Users->find('all', array(
        'conditions' => array('Users.id' => $cart->buyer_id),
        'limit'=>1
    ));
    
        
            foreach($query as $user){
               // print_r($qqq);
        
                /*$query = $this->Stores->find('all', array(
                    'conditions' => array('Stores.id' => $cart->beat_id),
                    'limit'=>1
                ));*/
                
                if($licence == "lease" || $licence == "exclusive"){    
                    $query = $this->Stores->find('all', array(
                        'conditions' => array('Stores.id' => $cart->beat_id),
                        'limit' => 1
                    ));
                    }elseif($licence == "sample" || $licence == "playlist"){
                    $query = $this->SampleStore->find('all', array(
                        'conditions' => array('id' => $cart->sample_id),
                        'limit' => 1
                    ));    
                    }elseif($licence == "pack"){
                    $query = $this->PacksStore->find('all', array(
                        'conditions' => array('id' => $cart->pack_id),
                        'limit' => 1
                    ));    
                    }
    
        
            foreach($query as $store){
                //print_r($qqq);
            
       // exit;
        
                          
        
        //$invoicepdf = $this->paginate($decode);
        //debug($download);
        
        
            }
                
            }
            }
        // print_r($store);exit;
        $this->set(compact('invoicepdf', 'user', 'cart', 'store', 'licence'));
        $this->set('_serialize', ['invoicepdf', 'user']);
 
    }
    
    public function admingiveaway()
    {
    $this->loadModel('Addrating');
    $this->loadModel('Admingiveaway');
    $conn = ConnectionManager::get('default');
    
        $user = $this->Auth->user('id');
        $id = 1;
        if(!is_null($this->request->getQuery('start_date')) && !is_null($this->request->getQuery('end_date'))) {
            
            $start_date = $this->request->getQuery('start_date');
            $end_date = $this->request->getQuery('end_date');
             
        $today=date('Y-m-d');
        $expired=0;
         $this->Admingiveaway->updateAll(
            array('start_date' => $start_date, 'end_date' => $end_date, 'user_id' => $user),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully Schedule Updated."));
            
        return $this->redirect($this->referer());
            
        }
        
        $admingiveaway = $conn->execute("SELECT * FROM admingiveaway WHERE id = 1 ")->fetchAll('assoc');
        
        // $admingiveaway = $Admingiveaway[0]['start_date'];
        // print_r($admingiveaway);exit;
        $title="Beat Competition Schedule";
        
        $this->set(compact('permissionusers', 'admingiveaway', 'users', 'orders', 'title'));
        $this->set('_serialize', ['arRatings']);
    
    }
    
    public function licencepdf(){
        
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $this->loadModel('SampleStore');
        $this->loadModel('PacksStore');
        $this->loadModel('Contract');
        $userid = $this->Auth->user('id');
        $invoiceid = $this->request->query('id');
        $licence = $this->request->query('licence');
        
        $this->viewBuilder()->setLayout('contract');
        
        $query = $this->Carts->find('all', array(
        'conditions' => array('Carts.id' => $invoiceid),
        'limit'=>1
    ));
        foreach($query as $cart){
            
        //print_r($cart);
        
                    $buyers = $this->Users->find('all', array(
                        'conditions' => array('Users.id' => $cart->buyer_id),
                        'limit' => 1
                    ));
                        foreach($buyers as $buyer){
                            //print_r($buyer);
                        
                        
                    if($licence == "lease" || $licence == "exclusive"){    
                    $stores = $this->Stores->find('all', array(
                        'conditions' => array('Stores.id' => $cart->beat_id),
                        'limit' => 1
                    ));
                    }elseif($licence == "sample" || $licence == "playlist"){
                    $stores = $this->SampleStore->find('all', array(
                        'conditions' => array('id' => $cart->sample_id),
                        'limit' => 1
                    ));    
                    }elseif($licence == "pack"){
                    $stores = $this->PacksStore->find('all', array(
                        'conditions' => array('id' => $cart->pack_id),
                        'limit' => 1
                    ));    
                    }
                        foreach($stores as $store){
                            //print_r($store);
                            
                        $sellers = $this->Users->find('all', array(
                        'conditions' => array('Users.id' => $store->user_id),
                        'limit' => 1
                    ));
                        foreach($sellers as $seller){
                            //print_r($seller);
                            
                    //inserting for lease
                    if($licence == "lease"){
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                    
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a non-exclusive license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 1000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a non-exclusive license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.   </span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 500,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.   </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a non-exclusive license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    // for sample
                    }elseif($licence == "sample" || $licence == "playlist"){
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                    
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 15,000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a premium rights license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.  </span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 10,000,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    
                    }elseif($licence == "pack"){
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                    
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 15,000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a premium rights license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.</span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 10,000,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to  '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder.</span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee.</span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.</span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    
                    }elseif($licence == "exclusive"){
                        // echo "ok";exit;
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease" || $licence == "exclusive"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                        $data="
                    	
		
			<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective 
Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, 
professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if 
applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical 
rights in and to the copyrighted musical works entitled <mark>$store->name</mark> ('Composition') as of and 
prior to the date first written above. The Composition, including the music thereof, was 
composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License an exclusive license (this 'License') to 
	record vocal synchronization to the Composition partly or in its entirety and substantially in its 
	original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee an exclusive license to use Master 
Recording in the reproduction, duplication, manufacture, and distribution of phonograph records,
cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital 
recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 
'Recordings') worldwide for unlimited copies of such Recordings or any combination of such 
Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee an exclusive license to use the 
Master Recording in unlimited for-profit performances, shows, or concerts.   </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or 
air the Master Recording in unlimited amounts of radio stations. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately 
and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay 
to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, 
payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to 
account to the Licensor, timely complete the payments provided for hereunder, or perform its 
other obligations hereunder, including having insufficient bank balance, the licensor shall have 
the right to terminate License upon written notice to the Licensee. Such termination shall render 
the recording, manufacture and/or distribution of Recordings for which monies have not been 
paid subject to and actionable infringements under applicable law, including, without limitation, 
the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via The AmplifiHub platform and email to an 
email address that Licensee provided when making their payment to Licensor. Licensee shall 
receive an email containing an attachment or link from which they can download the 
Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from 
and against any and all claims, losses, damages, costs, expenses, including, without limitation, 
reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's 
representations, warranties or agreements hereunder.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified 
above, constitutes the entire agreement between the Licensor and the Licensee relating to the 
Composition, and shall be binding upon both the Licensor and the Licensee and their respective 
successors, assigns, and legal representatives.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State 
of <mark>Lagos, Nigeria</mark>, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                    }
                        }
                        }
                        }
        }
        
        
                    $this->set(compact('licencepdf', 'cart', 'buyer', 'store', 'seller', 'licence', 'data', 'data2', 'data3'));
                    $this->set('_serialize', ['licencepdf']);
       
        
       
        
    }
    
    public function contractpdf(){
        
        $this->loadModel('Carts');
        $this->loadModel('Stores');
        $this->loadModel('SampleStore');
        $this->loadModel('Musicstorage');
        $this->loadModel('PacksStore');
        $this->loadModel('Generatecontract');
        $this->loadModel('Contract');
        $userid = $this->Auth->user('id');
        $invoiceid = $this->request->query('id');
        $licence = $this->request->query('licence');
        $percent = $this->request->query('percent');
        $orderid = $this->request->query('orderid');
        // print_r($invoiceid);exit;
        $this->viewBuilder()->setLayout('contractGC');
        
        $query = $this->Generatecontract->find('all', array(
        'conditions' => array('Generatecontract.orderid' => $orderid),
        'limit'=>1
        ));
        foreach($query as $cart){
            
        // print_r($cart);
                    $percent = $cart->percent;
                    $rem = 100 - $percent;
        
                    $buyers = $this->Users->find('all', array(
                        'conditions' => array('Users.id' => $cart->receiver_id),
                        'limit' => 1
                    ));
                        foreach($buyers as $buyer){
                            // print_r($buyer);exit;
                        
                        
                    if($licence == "lease" || $licence == "exclusive"|| $licence == "premium"){    
                    $stores = $this->Musicstorage->find('all', array(
                        'conditions' => array('Musicstorage.id' => $cart->music_id),
                        'limit' => 1
                    ));
                    }
                        foreach($stores as $store){
                            // print_r($store);
                            
                        $sellers = $this->Users->find('all', array(
                        'conditions' => array('Users.id' => $store->user_id),
                        'limit' => 1
                    ));
                    
                        foreach($sellers as $seller){
                            // print_r($seller);
                            // 
                    //inserting for lease
                    if($licence == "lease" || $licence == "exclusive" || $licence == "premium"){
                        // echo $store->name;exit;
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease" || $licence == "exclusive" || $licence == "premium"){    
                    $sname = $store->name;
                    }
                    // echo $sname;exit;
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a non-exclusive license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 1000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a non-exclusive license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.   </span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 500,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.   </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a non-exclusive license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    // for sample
                    }elseif($licence == "sample" || $licence == "playlist"){
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                    
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 15,000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a premium rights license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.  </span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 10,000,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    
                    }elseif($licence == "pack"){
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                    
                    $data="<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical rights in and to the copyrighted musical works entitled <mark>$sname</mark> ('Composition') as of and prior to the date first written above. The Composition, including the music thereof, was composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License a non-exclusive license (this 'License') to record vocal synchronization to the Composition partly or in its entirety and substantially in its original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to use Master Recording in the reproduction, duplication, manufacture, and distribution of phonograph records, cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 'Recordings') worldwide for up to the pressing or selling a total of 15,000 copies of such Recordings or any combination of such Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee a premium rights license to use the Master Recording in unlimited non-profit performances, shows, or concerts. Licensee may not receive compensation from performances with this license.</span>
	
	<br>
	<span style='color:#dfa844;'><b>Synchronization Rights: </b></span><span style='color:black;'>The Licensor hereby grants limited synchronization rights for one (1) music video streamed online (Youtube, Vimeo, etc..) for up to 10,000,000 streams total on all websites. A separate synchronization license will need to be purchased for distribution of video to Television, Film or Video game.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee a premium rights license to broadcast or air the Master Recording in two (2) radio stations through two (2) station channels, respectively. The Licensee shall not be permitted to receive compensation for such broadcasting. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, payable to  '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to account to the Licensor, timely complete the payments provided for hereunder, or perform its other obligations hereunder, including having insufficient bank balance, the licensor shall have the right to terminate License upon written notice to the Licensee. Such termination shall render the recording, manufacture and/or distribution of Recordings for which monies have not been paid subject to and actionable infringements under applicable law, including, without limitation, the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via the AmplifiHub platform or email to an email address that Licensee provided to Licensor. Licensee shall receive an email from containing an attachment or link from which they can download the Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from and against any and all claims, losses, damages, costs, expenses, including, without limitation, reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's representations, warranties or agreements hereunder.</span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee.</span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified above, does not convey or grant any right of public performance for profit, constitutes the entire agreement between the Licensor and the Licensee relating to the Composition, and shall be binding upon both the Licensor and the Licensee and their respective successors, assigns, and legal representatives.</span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State of Lagos, Nigeria, without regard to the conflicts of laws principles thereof.</span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                             
                    
                    }elseif($licence == "exclusive"){
                        // echo "ok";exit;
                        $cday = date_format($cart->created, 'd');
                        $cmonth = date_format($cart->created, 'F');
                        $cyear = date_format($cart->created, 'Y');
                    
                    if($licence == "lease" || $licence == "exclusive"){    
                    $sname = $store->name;
                    }elseif($licence == "sample" || $licence == "playlist" || $licence == "pack"){
                    $sname = $store->sample_name;   
                    }
                        $data="
                    	
		
			<p style='color:black;'>THIS LICENCE AGREEMENT is made on $cday of $cmonth, $cyear ('Effective 
Date') by and between <mark> $buyer->firstname $buyer->lastname </mark> (hereinafter referred to as the 'Licensee') also, if applicable, 
professionally known as <mark>$buyer->aka</mark>, whose principle address is <mark>$buyer->address</mark>, and <mark>$seller->firstname $seller->lastname </mark> (hereinafter referred to as the 'Licensor') also, if 
applicable, professionally known as $seller->aka, whose principle address is $seller->address. Licensor warrants that it controls the mechanical 
rights in and to the copyrighted musical works entitled <mark>$store->name</mark> ('Composition') as of and 
prior to the date first written above. The Composition, including the music thereof, was 
composed by <mark>$seller->firstname $seller->lastname</mark> ('Songwriter') managed under the Licensor. </p>

	<span style='color:#dfa844;'><b>Master Use: </b></span><span style='color:black;'> The Licensor hereby grants to License an exclusive license (this 'License') to 
	record vocal synchronization to the Composition partly or in its entirety and substantially in its 
	original form ('Master Recording'). </span>
	<br>
	<br>
	<span style='color:#dfa844;'><b>Mechanical Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee an exclusive license to use Master 
Recording in the reproduction, duplication, manufacture, and distribution of phonograph records,
cassette tapes, compact disk, digital downloads, other miscellaneous audio and digital 
recordings, and any lifts and versions thereof (collectively, the 'Recordings', and individually, a 
'Recordings') worldwide for unlimited copies of such Recordings or any combination of such 
Recordings, condition upon the payment to the Licensor a sum of <mark>₦$cart->amount Nigerian Naira</mark>, 
receipt of which is confirmed.  </span>
<br>


	<br>
	<span style='color:#dfa844;'><b>Performance Rights: </b></span><span style='color:black;'>The Licensor here by grants to Licensee an exclusive license to use the 
Master Recording in unlimited for-profit performances, shows, or concerts.   </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Broadcast Rights: </b></span><span style='color:black;'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or 
air the Master Recording in unlimited amounts of radio stations. </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Credit: </b></span><span style='color:black;'>Licensee shall acknowledge the original authorship of the Composition appropriately 
and reasonably in all media and performance formats under the name <mark>'$seller->aka'</mark> in writing 
where possible and vocally otherwise.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Consideration: </b></span><span style='color:black;'>In consideration for the rights granted under this agreement, Licensee shall pay 
to licensor the sum of <mark>₦$cart->amount Nigerian Naira</mark> and other good and valuable consideration, 
payable to '<mark> $seller->firstname $seller->lastname</mark>', receipt of which is hereby acknowledged. If the Licensee fails to 
account to the Licensor, timely complete the payments provided for hereunder, or perform its 
other obligations hereunder, including having insufficient bank balance, the licensor shall have 
the right to terminate License upon written notice to the Licensee. Such termination shall render 
the recording, manufacture and/or distribution of Recordings for which monies have not been 
paid subject to and actionable infringements under applicable law, including, without limitation, 
the <mark>Nigerian</mark> Copyright Act, as amended. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Delivery: </b></span><span style='color:black;'>The Composition shall be delivered via The AmplifiHub platform and email to an 
email address that Licensee provided when making their payment to Licensor. Licensee shall 
receive an email containing an attachment or link from which they can download the 
Composition. </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Indemnification: </b></span><span style='color:black;'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from 
and against any and all claims, losses, damages, costs, expenses, including, without limitation, 
reasonable attorney's fees, arising of or resulting from a claimed breach of any of Licensee's 
representations, warranties or agreements hereunder.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Audio Samples: </b></span><span style='color:black;'>3rd party sample clearance is the responsibility of the Licensee. </span>

	
	<br>
	<br>
	<span style='color:#dfa844;'><b>Miscellaneous: </b></span><span style='color:black;'>This license is non-transferable and is limited to the Composition specified 
above, constitutes the entire agreement between the Licensor and the Licensee relating to the 
Composition, and shall be binding upon both the Licensor and the Licensee and their respective 
successors, assigns, and legal representatives.  </span>

<br>
	<br>
	<span style='color:#dfa844;'><b>Governing Law: </b></span><span style='color:black;'>This License is governed by and shall be construed under the law of the State 
of <mark>Lagos, Nigeria</mark>, without regard to the conflicts of laws principles thereof.  </span>


<br>
	<br>
	<span style='color:#dfa844;'><b>Publishing.: </b></span><br><span style='color:black;'><mark>$buyer->firstname &nbsp; $buyer->lastname</mark>,";
	$data3="<br>$seller->firstname &nbsp; $seller->lastname";
$data2="
<br><br>
THE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written 
above. <br><br>

  </span>




		</div>
		
	</section>
                    ";
                    }
                        }
                        }
                        }
        }
        
        // print_r($data);exit;
                    $this->set(compact('licencepdf', 'cart', 'buyer', 'store', 'seller', 'licence', 'data', 'data2', 'data3', 'percent', 'rem'));
                    $this->set('_serialize', ['licencepdf']);
       
        
       
        
    }
    
    public function permissionusers()
    {
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Plans');
        $this->loadModel('Subscriptions');
  
        $permissions = $this->Users->find('all', array(
        'conditions' => array('Users.role !=' => 'admin'),
        'order'=> 'Users.id DESC'
    ));
        
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
            $permissions = $this->Users->find('all')->where(['id IN' => $us]);
            //print_r($query);exit;
        }
        
        $title="Permission Users";
        $permissionusers = $this->paginate($permissions);
        $this->set(compact('permissionusers', 'cart', 'users', 'permissions', 'title'));
        $this->set('_serialize', ['permissionusers']);
    }
    
    public function changePermissionTrial($id= null)
    {
       
        $this->loadModel('Users');
        $today=date('Y-m-d h:i:s');
        $expired=0;
         $this->Users->updateAll(
            array('role' => 'trial', 'created' => $today, 'expired' => $expired),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully account type changed to Trial Account."));
            
        return $this->redirect($this->referer());
    }
    
    public function changePermissionOther($id= null)
    {
        
        $this->loadModel('Users');
        $today=date('Y-m-d h:i:s');
        $expired=0;
         $this->Users->updateAll(
            array('role' => 'user', 'created' => $today, 'expired' => $expired),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully account type changed to Other Account."));
            
        return $this->redirect($this->referer());
    }
    
    public function permissionusersar()
    {
        $this->loadModel('Carts');
        $this->loadModel('Users');
        $this->loadModel('Plans');
        $this->loadModel('Subscriptions');
  
        $permissions = $this->Users->find('all', array(
        'conditions' => array('Users.role !=' => 'admin'),
        'order'=> 'Users.id DESC'
    ));
        
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
            $permissions = $this->Users->find('all')->where(['id IN' => $us]);
            //print_r($query);exit;
        }
        
        $title="Permission Users";
        $permissionusers = $this->paginate($permissions);
        $this->set(compact('permissionusers', 'cart', 'users', 'permissions', 'title'));
        $this->set('_serialize', ['permissionusers']);
    }
    
    public function changePermissionAr($id= null)
    {
       
        $this->loadModel('Users');
        $today=date('Y-m-d h:i:s');
        $expired=0;
         $this->Users->updateAll(
            array('ar' => 1),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully, You make this user as A&R User."));
            
        return $this->redirect($this->referer());
    }
    
    public function changePermissionOtherAr($id= null)
    {
        
        $this->loadModel('Users');
        $today=date('Y-m-d h:i:s');
        $expired=0;
         $this->Users->updateAll(
             array('ar' => 0),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully you disabled user from A&$."));
            
        return $this->redirect($this->referer());
    }
    
    public function arprofile() {
        $this->loadModel('Users');
        $this->autoRender = false;
        $id = $this->request->query('id'); //$this->request->data['id'];
        //echo "hello";

        $storeId = $this->Users->findById($id);
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
    
    public function arOrders()
    {
        $conn = ConnectionManager::get('default');
    
        $this->loadModel('Users');
        $this->loadModel('Track');
        
         
   
        $orders = $this->Track->find('all', array(
        'order'=> 'Track.id DESC'
    ));
        
        if(!is_null($this->request->getQuery('search'))) {
            $q = $this->request->getQuery('search');
            $us = TableRegistry::get('track')->find('all',[
                'conditions'=>[
                    "OR"=>[

                        "track.ar_name1 LIKE"=>"%$q%",
                        "track.ar_name3 LIKE"=>"%$q%",
                        "track.song_title LIKE"=>"%$q%",
                        "track.ar_name2 LIKE"=>"%$q%",
                    ]
                ]
            ])
                ->select(['track.id']);
            $orders = $this->Track->find('all')->where(['id IN' => $us]);
            
        }
        
        $title="A&R Orders";
        $permissionusers = $this->paginate($orders);
        $this->set(compact('permissionusers', 'cart', 'users', 'orders', 'title'));
        $this->set('_serialize', ['arOrders']);
    
    }
    
    public function arRatings()
    {
    $this->loadModel('Addrating');
        $id=1;
        if(!is_null($this->request->getQuery('rating'))) {
            $rating = $this->request->getQuery('rating');
             
        $today=date('Y-m-d h:i:s');
        $expired=0;
         $this->Addrating->updateAll(
            array('rating' => $rating),
            array('id' => $id)
            );
        $this->Flash->success(__("Successfully Rating Updated."));
            
        return $this->redirect($this->referer());
            
        }
        $rating = $this->Addrating->find('all', array(
        'order'=> 'Addrating.id DESC'
        ));
        
        $rating = $rating->first();
        
        $title="A&R Ratings";
        
        $this->set(compact('permissionusers', 'rating', 'users', 'orders', 'title'));
        $this->set('_serialize', ['arRatings']);
    
    }
    
   public function userAr()
    {
        $conn = ConnectionManager::get('default');
    
        $this->loadModel('Users');
        $this->loadModel('AddBooking');
        $this->loadModel('Addrating');
        $this->loadModel('ArRating');
        $this->loadModel('Track');
        $booking = $this->AddBooking->newEntity();
        $store = $this->ArRating->newEntity();
        $user = $this->Auth->user('id');
        $username = $this->Auth->user('aka');
        $track_id=$this->request->getData('tracking_id');
        $instrumental=$this->request->getData('instrumental');
        $vocals=$this->request->getData('vocals');
        $feedback=$this->request->getData('feedback');
        $delivery=$this->request->getData('delivery');
        $lyrics=$this->request->getData('lyrics');
        $composition=$this->request->getData('composition');
        $mixing=$this->request->getData('mixing');
        $target=$this->request->getData('target');
        $street=$this->request->getData('street');
        $commercial=$this->request->getData('commercial');
        $overall=$this->request->getData('overall');
        
        //for add booking
        $trackid=$this->request->getData('track_id');
        $date=$this->request->getData('date');
        $information=$this->request->getData('information');
        
        //end add booking
        
        $data= array(
                'track_id' => $track_id,
                'instrumental' => $instrumental,
                'vocals' => $vocals,
                'feedback' => $feedback,
                'delivery' => $delivery,
                'lyrics' => $lyrics,
                'composition' => $composition,
                'mixing' => $mixing,
                'target' => $target,
                'street' => $street,
                'commercial' => $commercial,
                'overall' => $overall,
                'user_id' => $user
                );
                
        $data2= array(
                'user_id' => $user,
                'track_id' => $trackid,
                'date' => $date,
                'information' => $information
                );
                
        if(!empty($this->request->getData('instrumental')))
        {
            $query = $conn->execute("SELECT user_id FROM ar_rating WHERE track_id = '".$track_id."' AND user_id = '".$user."' ")->fetchAll('assoc');
            if($query[0]['user_id'] > 0 ){ 
            
            echo "<script>alert('Sorry!, You have already given rating.');</script>";
                
            }else{
            
             $store = $this->ArRating->patchEntity($store, $data);
                //print_r($store);
                if ($this->ArRating->save($store)) {
                    echo "<script>alert('Success!, You have rated now.');</script>";
                }
            }
        }
        
        if(!empty($this->request->getData('date')))
        {
            $query = $conn->execute("SELECT user_id FROM add_booking WHERE track_id = '".$trackid."' AND user_id = '".$user."' ")->fetchAll('assoc');
            if($query[0]['user_id'] > 0 ){ 
            
            echo "<script>alert('Sorry!, You have already booked.');</script>";
                
            }else{
            
             $booking = $this->AddBooking->patchEntity($booking, $data2);
                //print_r($store);
                if ($this->AddBooking->save($booking)) {
                    echo "<script>alert('Success!, You have booked now.');</script>";
                }
            }
        }
        //exit;
        /*
        $stmt = $conn->execute('SELECT * FROM track WHERE ar_name1=".$username." OR ar_name2=".$username." OR ar_name3=".$username." ORDER BY id DESC');
        $orders = $stmt ->fetchAll('object');
    */
        $orders = $this->Track->find()
        ->where([
            'OR' => [['ar_name1' => $username], ['ar_name2' => $username], ['ar_name3' => $username]],
        ])->order(['id' => 'DESC']);
        
        if(!is_null($this->request->getQuery('search'))) {
            $q = $this->request->getQuery('search');
            $us = TableRegistry::get('track')->find('all',[
                'conditions'=>[
                    "OR"=>[

                        "track.ar_name1 LIKE"=>"%$q%",
                        "track.ar_name3 LIKE"=>"%$q%",
                        "track.song_title LIKE"=>"%$q%",
                        "track.ar_name2 LIKE"=>"%$q%",
                    ]
                ]
            ])
                ->select(['track.id']);
            $orders = $this->Track->find('all')->where(['id IN' => $us]);
            
        }
        
        $rating = $this->Addrating->find('all', array(
        'order'=> 'Addrating.id DESC'
        ));
        
        $ratingCount = $rating->first();
        
        $title="A&R Orders";
        $permissionusers = $this->paginate($orders);
        $this->set(compact('permissionusers', 'cart', 'user', 'orders', 'title', 'username', 'ratingCount'));
        $this->set('_serialize', ['userAr']);
    
    }
   
   public function orderGiven()
    {
        $conn = ConnectionManager::get('default');
    
        $this->loadModel('Users');
        $this->loadModel('AddBooking');
        $this->loadModel('Addrating');
        $this->loadModel('ArRating');
        $this->loadModel('Track');
        $booking = $this->AddBooking->newEntity();
        $store = $this->ArRating->newEntity();
        $user = $this->Auth->user('id');
        $username = $this->Auth->user('aka');
        $track_id=$this->request->getData('tracking_id');
        $instrumental=$this->request->getData('instrumental');
        $vocals=$this->request->getData('vocals');
        $feedback=$this->request->getData('feedback');
        $delivery=$this->request->getData('delivery');
        $lyrics=$this->request->getData('lyrics');
        $composition=$this->request->getData('composition');
        $mixing=$this->request->getData('mixing');
        $target=$this->request->getData('target');
        $street=$this->request->getData('street');
        $commercial=$this->request->getData('commercial');
        $overall=$this->request->getData('overall');
        
        //for add booking
        $trackid=$this->request->getData('track_id');
        $date=$this->request->getData('date');
        $information=$this->request->getData('information');
        
        //end add booking
        
        $data= array(
                'track_id' => $track_id,
                'instrumental' => $instrumental,
                'vocals' => $vocals,
                'feedback' => $feedback,
                'delivery' => $delivery,
                'lyrics' => $lyrics,
                'composition' => $composition,
                'mixing' => $mixing,
                'target' => $target,
                'street' => $street,
                'commercial' => $commercial,
                'overall' => $overall,
                'user_id' => $user
                );
                
        $data2= array(
                'user_id' => $user,
                'track_id' => $trackid,
                'date' => $date,
                'information' => $information
                );
                
        if(!empty($this->request->getData('instrumental')))
        {
            $query = $conn->execute("SELECT user_id FROM ar_rating WHERE track_id = '".$track_id."' AND user_id = '".$user."' ")->fetchAll('assoc');
            if($query[0]['user_id'] > 0 ){ 
            
            echo "<script>alert('Sorry!, You have already given rating.');</script>";
                
            }else{
            
             $store = $this->ArRating->patchEntity($store, $data);
                //print_r($store);
                if ($this->ArRating->save($store)) {
                    echo "<script>alert('Success!, You have rated now.');</script>";
                }
            }
        }
        
        if(!empty($this->request->getData('date')))
        {
            $query = $conn->execute("SELECT user_id FROM add_booking WHERE track_id = '".$trackid."' AND user_id = '".$user."' ")->fetchAll('assoc');
            if($query[0]['user_id'] > 0 ){ 
            
            echo "<script>alert('Sorry!, You have already booked.');</script>";
                
            }else{
            
             $booking = $this->AddBooking->patchEntity($booking, $data2);
                //print_r($store);
                if ($this->AddBooking->save($booking)) {
                    echo "<script>alert('Success!, You have booked now.');</script>";
                }
            }
        }
        //exit;
        $userid = $this->Auth->user('id');
        $stmt = $conn->execute("SELECT *, track.id as tid FROM track LEFT JOIN ar_rating ON track.id=ar_rating.track_id WHERE track.user_id='".$userid."' ORDER BY track.id DESC" );
        $orders = $stmt ->fetchAll('assoc');
        //print_r($orders);exit;
        $order = $this->Track->find()
        ->where([
            'OR' => [['user_id' => $user]],
        ]);
      
        if(!is_null($this->request->getQuery('search'))) {
            $q = $this->request->getQuery('search');
            $us = TableRegistry::get('track')->find('all',[
                'conditions'=>[
                    "OR"=>[

                        "track.ar_name1 LIKE"=>"%$q%",
                        "track.ar_name3 LIKE"=>"%$q%",
                        "track.song_title LIKE"=>"%$q%",
                        "track.ar_name2 LIKE"=>"%$q%",
                    ]
                ]
            ])
                ->select(['track.id']);
            $orders = $this->Track->find('all')->where(['id IN' => $us]);
            
        }
        
        $rating = $this->Addrating->find('all', array(
        'order'=> 'Addrating.id DESC'
        ));
        
        $ratingCount = $rating->first();
        
        $title="A&R Orders";
        $permissionusers = $this->paginate($order);
        $this->set(compact('permissionusers', 'cart', 'user', 'orders', 'title', 'username', 'ratingCount'));
        $this->set('_serialize', ['orderGiven']);
    
    }
    
    
    
}
