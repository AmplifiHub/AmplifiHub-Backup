<style>
    * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
/*body {
    font-family: "proxima-nova", sans-serif;
    font-weight: 400;t
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}*/
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.toggle, .toggler {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
}

.toggler {
  color: #ddd;
  transition: .2s;
  font-weight: bold;
}

.toggler--is-active {
  color: #ef5a5c;
}

.b {
  display: block;
}

.toggle {
  position: relative;
  width: 80px;
  height: 35px;
  border-radius: 100px;
  background-color: #ef5a5c;
  overflow: hidden;
  box-shadow: inset 0 0 2px 1px rgba(0, 0, 0, 0.05);
}

.check {
  position: absolute;
  display: block;
  cursor: pointer;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 6;
}

.check:checked ~ .switch {
  right: 2px;
  left: 57.5%;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: .08s, 0s;
}

.switch {
  position: absolute;
  left: 2px;
  top: 2px;
  bottom: 2px;
  right: 57.5%;
  background-color: #fff;
  border-radius: 36px;
  z-index: 1;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: 0s, .08s;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.pricing-section {

    float: left;
    width: 100%;
    text-align: center;
}
.pricing-columns .wrapper-full {
    position: relative;
    width: 1170px;
    margin: 0 auto;
}
.pricing-columns #pricing-chart, .pricing-columns-both #pricing-chart {
    margin-top: 100px;
    float: left;
    position: relative;
}
.pricing-columns #pricing-chart #smaller-plans, .pricing-columns-both #pricing-chart #smaller-plans {
    display: block;
}
.pricing-columns #pricing-chart .plan, .pricing-columns-both #pricing-chart .plan {
    float: left;
    background-color: #fafafa;
    position: relative;
    color: #454545;
    padding: 14px;
    border-right: 1px solid #e1e1e1;
    border-bottom: 1px solid #e1e1e1;
    width: 207px;
}
.pricing-columns #pricing-chart .plan:first-child, .pricing-columns-both #pricing-chart .plan:first-child {
    border-left: 1px solid #e1e1e1;
}
.pricing-columns #pricing-chart .plan:before,
.pricing-columns-both #pricing-chart .plan:before {
    content: "";
    position: absolute;
    height: 5px;
    left: -1px;
    top: 0;
    background-color: #233E48;
    width: 207px;
}
.pricing-columns #pricing-chart .plan .price, .pricing-columns-both #pricing-chart .plan .price {
    font-size: 26px;
    float: left;
    width: 100%;
    margin-bottom: 35px;
    margin-top: 17px;
}
.pricing-columns #pricing-chart .plan .price .dollar, .pricing-columns-both #pricing-chart .plan .price .dollar {
    top: -10px;
    letter-spacing: -1px;
    left: 3px;
}
.pricing-columns #pricing-chart .plan .price .amount, .pricing-columns-both #pricing-chart .plan .price .amount {
    font-size: 30px;
    font-weight: 600;
}
.pricing-columns #pricing-chart .plan .price .slash, .pricing-columns-both #pricing-chart .plan .price .slash {
    font-weight: 600;
    left: -2px;
}
.pricing-columns #pricing-chart .plan .price .month, .pricing-columns-both #pricing-chart .plan .price .month {
    font-weight: 600;
    left: -7px;
}
.pricing-columns #pricing-chart .plan ul, .pricing-columns-both #pricing-chart .plan ul {
    padding: 0 18px;
    margin-bottom: 40px;
}
.pricing-columns #pricing-chart .plan ul li, .pricing-columns-both #pricing-chart .plan ul li {
    font-weight: 600;
    font-size: 15px;
    text-align: left;
    margin-bottom: 20px;
}
.pricing-columns #pricing-chart .plan ul li span, .pricing-columns-both #pricing-chart .plan ul li span {
    color: #9e9e9e;
    display: inline-block;
    margin-left: 7px;
    font-weight: 400;
    font-size: 14px;
}
.pricing-columns #pricing-chart .plan a.sign-up, .pricing-columns-both #pricing-chart .plan a.sign-up {
  width: 100%;
    padding: 13px;
    background-color: white;
    border: 1px solid #e1e1e1;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    color: #9e9e9e;
    display: block;
    margin-bottom: 5px;
    font-size: 15px;
    clear: left;
    letter-spacing: 1.5px;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.pricing-section .sign-up {
    padding: 17px 50px;
    text-transform: uppercase;
    background-color: #93cc76;
    color: white;
    letter-spacing: 0.1em;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    white-space: pre;
    padding-left: 100px;
    padding-right: 100px;
    margin-top: 30px;
}

.pricing-columns #pricing-chart .popular, .pricing-columns-both #pricing-chart .popular {
    width: 274px;
    position: relative;
    top: -30px;
    background-color: white;
    margin-left: -2px;
    right: 0;
    border-left: 1px solid #e1e1e1;
    border-right: 1px solid #e1e1e1;
}
.pricing-columns #pricing-chart .popular:before, .pricing-columns-both #pricing-chart .popular:before {
    width: 274px;
    background-color: #9D1726;
    height: 7px;
}
.pricing-columns #pricing-chart .popular a.sign-up, .pricing-columns-both #pricing-chart .popular a.sign-up {
    background-color: #9D1726;
    border: none;
    color: #ffffff;
}
.pricing-columns #pricing-chart .popular .price .amount, .pricing-columns-both #pricing-chart .popular .price .amount {
    font-size: 60px;
}
.bandwidth {
    display: block;
    color: #9e9e9e;
    font-size: 16px;
    position: absolute;
    right: 0;
    bottom: -90px;
}
.pricing-columns #pricing-chart .popular p.pop-plan, .pricing-columns-both #pricing-chart .popular p.pop-plan {
    color: #454545;
    font-size: 16px;
    margin-bottom: 45px;
}
.pricing-columns #pricing-chart .popular .price, .pricing-columns-both #pricing-chart .popular .price {
    margin-bottom: 0px;
}
.pricing-columns #pricing-chart .plan a.sign-up:hover, .pricing-columns-both #pricing-chart .plan a.sign-up:hover {
    border: 0;
    color: #fff;
    opacity: 0.8;
}
.hide{
  display: none;
}

</style>

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
        
        <section class="pricing-columns pricing-section">
          
        <div id="monthly" class="row">


    			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4">

					  
					<div class="panel price panel-red" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading  text-center">
						<h3>Free</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>1 month free</strong></p>
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
                        if (!in_array('PLN_sbju40wymoksqcf', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_sbju40wymoksqcf'); ?>" id="subscribe" onclick="tester('<?= h('PLN_sbju40wymoksqcf'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					  


				</div>

			</div>

			</section>
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
      key: 'pk_test_f6d51ecf105c2b10d5baf365a156ffad1f6c7116',
    //   key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'". $user['email'] ."',
      plan: plan,
      ref: 'membership-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        console.log(response);
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

    <script>
  var e = document.getElementById("filt-monthly"),
    d = document.getElementById("filt-hourly"),
    t = document.getElementById("switcher"),
    m = document.getElementById("monthly"),
    y = document.getElementById("hourly");

e.addEventListener("click", function(){
  t.checked = false;
  e.classList.add("toggler--is-active");
  d.classList.remove("toggler--is-active");
  m.classList.remove("hide");
  y.classList.add("hide");
});

d.addEventListener("click", function(){
  t.checked = true;
  d.classList.add("toggler--is-active");
  e.classList.remove("toggler--is-active");
  m.classList.add("hide");
  y.classList.remove("hide");
});

t.addEventListener("click", function(){
  d.classList.toggle("toggler--is-active");
  e.classList.toggle("toggler--is-active");
  m.classList.toggle("hide");
  y.classList.toggle("hide");
})

</script>
