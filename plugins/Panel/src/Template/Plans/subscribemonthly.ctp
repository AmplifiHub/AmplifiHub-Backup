<?php
/**
 * @var \App\View\AppView $this
 */
 $this->assign('title','Pricing');
?>
<?= $this->Html->script([
  '/bower_components/jquery/dist/jquery.min']);?>
<script src="https://js.paystack.co/v1/inline.js"></script>

<div class=""> 
    <div class ="page-text-container" style="background-color: transparent; padding: 0; margin-top: 50px;" >
        <? /*
        	<div class="row">
                    
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="panel-heading arrow_box text-center">
						<h3>ARTIST</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦1000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Demo Tracks</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; YouTube Monetization</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Track Distribution</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Profile Page</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Artiste Gigs</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; 24/7 Support</li>
                                                        <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>

                                                </ul>
						<div class="panel-footer">
                                                      <?= $this->Form->create(null,[
    'url' => ['controller'=>'plans', 'action'=>'subscribe']
]); ?>
    <button type="button" value="<?= h('PLN_eatcvjb7yrenzej'); ?>" id="subscribe" onclick="tester('<?= h('PLN_eatcvjb7yrenzej'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
 <?= $this->Form->end() ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="panel-heading arrow_box text-center">
						<h3>VIDEO DIRECTOR</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦1000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Demo Clips</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Profile Page</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Video Directing Gigs</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
                                                          <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>
                                                            <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>
                                                              <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>
						</ul>
						<div class="panel-footer">
							 <?= $this->Form->create(null,[
    'url' => ['controller'=>'plans', 'action'=>'subscribe']
]); ?>
    <button type="button" value="<?= h('PLN_1zavvhynnox5s8n'); ?>" id="subscribe" onclick="tester('<?= h('PLN_1zavvhynnox5s8n'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
 <?= $this->Form->end() ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="panel-heading arrow_box text-center">
						<h3>SONG WRITER</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦1000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Demo Tracks</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Profile Page</li>
							<li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Songwriting Gigs</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
                                                        <li class="list-group-item"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
                                                             <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>
                                                               <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>
                                                                 <li class="list-group-item"><i class="fa fa-times text-danger"></i>&nbsp; </li>

                                                </ul>
						<div class="panel-footer">
							 <?= $this->Form->create(null,[
    'url' => ['controller'=>'plans', 'action'=>'subscribe']
]); ?>
    <button type="button" value="<?= h('PLN_hmvrbggaw811fzb'); ?>" id="subscribe" onclick="tester('<?= h('PLN_hmvrbggaw811fzb'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
 <?= $this->Form->end() ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
                    
                </div>*/?>
        <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey" style="border:1px solid #262626 !important;background-color:#262626;">
						<div class="panel-heading arrow_box text-center">
						<h3>PRODUCER SILVER</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦1500 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 10 Beats Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 85% of Sales</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Instant Payments</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Full Statistics</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
                                                          <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-times text-danger"></i>&nbsp; </li>
                                                            <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-times text-danger"></i>&nbsp; </li>
						</ul>
						<div class="panel-footer">
						<?php
                        if (!in_array('PLN_x4pycaeyn4hp7lo', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_x4pycaeyn4hp7lo'); ?>" id="subscribe" onclick="tester('<?= h('PLN_x4pycaeyn4hp7lo'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
                    
    			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-red" style="border:1px solid #262626 !important;background-color:#262626;">
						<div class="panel-heading  text-center">
						<h3>PRODUCER GOLD</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦3000 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 30 Beats Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 90% of Sales</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Instant Payments</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Full Statistics</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						    <?php
                        if (!in_array('PLN_1aolpmm4rlzsv19', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_1aolpmm4rlzsv19'); ?>" id="subscribe" onclick="tester('<?= h('PLN_1aolpmm4rlzsv19'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-blue" style="border:1px solid #262626 !important;background-color:#262626;">
						<div class="panel-heading arrow_box text-center">
						<h3>PRODUCER PLATINUM</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦8000 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Unlimited Beats</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 90% of Sales</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Instant Payments</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Full Statistics</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						     <?php
                        if (!in_array('PLN_59gb0gsmu5ace70', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_59gb0gsmu5ace70'); ?>" id="subscribe" onclick="tester('<?= h('PLN_59gb0gsmu5ace70'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				
				
				
				
				
				
			</div>
        </div>
            <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
               <h1>Cannot Pay Online Using Your Card? Pay offline</h1>
              
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: left;margin-top: 10px; padding-left: 37px;"> 
            <h4><strong>Bank Name: </strong> Fidelity Bank Nigeria Plc</h4>
            <h4><strong>Bank Swift Code: </strong>FIDTNGLA</h4>
            <h4><strong>Account Number: </strong>5600382663</h4>
            <h4><strong>Account Name: </strong> AmplifiHub</h4>
            <h3>How to Pay Offline</h3>
            <p style="font-size:1.1em;">Make a 6 months or 1 year payment of the package you are interested in via bank deposit or transfer.</p>
            <p style="font-size:1.1em;">Then Email us via banksub@amplifihub.com by sending a snapshot of the payment receipt along with your full name, phone number, email address and the package you want to subscribe to</p>
            <p style="font-size:1.1em;">We will complete the upgrade in approximately 12 hours time.</p>
            </div>
        </div>
 </div>
<?php
$userEmail = $this->request->session()->read('Auth.User');
?>
<span id="userEmail" style="display: none;"><?php echo $userEmail['email'];?> </span>
<script>
var userEmail = $('#userEmail').text() ;
//alert(userEmail);   
function tester(plan){
   
  if(userEmail != ' '){
 payWithPaystack(plan);   
  }else{
      window.location = '/login';
  }
  
}

</script>
<?php
$user = $this->request->session()->read('Auth.User');

echo "<script>
  function payWithPaystack(plan){
    var plan = plan;
  // alert(plan);
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'". $user['email'] ."',
      plan: plan,
      ref: 'membership-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        //console.log(response);
          window.location = '/subscriptions/addsub/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>";

 ?>
