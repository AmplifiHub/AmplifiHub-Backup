<?= $this->Html->css([
      
      '/dist/css/AdminLTE.min',
      
      ]) ?>

<style>

form, fieldset {
    margin: 0;
    padding: 0;
    border-style: none;
    background: transparent;
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
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
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class ="page-text-container" style="background-color: transparent; padding: 0; margin-top: 50px;" >
        <? /*
        	<div class="row">

                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					 PRICE ITEM 
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
					 /PRICE ITEM 


				</div>
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					 PRICE ITEM 
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
					 /PRICE ITEM 


				</div>
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					 PRICE ITEM 
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
					 /PRICE ITEM 


				</div>

                </div>*/?>
        <section class="pricing-columns pricing-section">
          <label class="toggler toggler--is-active" id="filt-monthly">Monthly</label>
          <div class="toggle">
            <input type="checkbox" id="switcher" class="check">
            <b class="b switch"></b>
          </div>
          <label class="toggler" id="filt-hourly">Yearly <i class="fa fa-star" style="color:yellow;"></i></label>
        <div id="monthly" class="row">



             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-grey" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading arrow_box text-center">
						<h3>SILVER</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦1,500 / month</strong></p>
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
                                                 <!--      <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-times text-danger"></i>&nbsp; </li> -->
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
                            <button type="button" value="<?= h('PLN_x4pycaeyn4hp7lo'); ?>" id="subscribe" onclick="tester('<?= h('PLN_x4pycaeyn4hp7lo'); ?>', 'monthly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
		 


				</div>

    			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-red" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading  text-center">
						<h3>GOLD</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦3,000 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 30 Beats Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
					<!--		<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li> -->
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
                            <button type="button" value="<?= h('PLN_1aolpmm4rlzsv19'); ?>" id="subscribe" onclick="tester('<?= h('PLN_1aolpmm4rlzsv19'); ?>', 'monthly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					  


				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-blue" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading arrow_box text-center">
						<h3>PLATINUM</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦8,000 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Unlimited Beats</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
					<!--		<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li> -->
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
                            <button type="button" value="<?= h('PLN_59gb0gsmu5ace70'); ?>" id="subscribe" onclick="tester('<?= h('PLN_59gb0gsmu5ace70'); ?>', 'monthly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
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

			<div id="hourly" class="row hide">


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-grey" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading arrow_box text-center">
						<h3>SILVER</h3>
						</div>
						<div class="panel-body text-center"><h2><strong style="color: yellow;">30% Off!</strong></h2>
							<p class="lead" style="font-size:37px"><strong>₦12,600 / year</strong></p>
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
                                                     <!--       <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-times text-danger"></i>&nbsp; </li> -->
						</ul>
						<div class="panel-footer">
						<?php
                        if (!in_array('PLN_brgaofxfgxyqx1p', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_brgaofxfgxyqx1p'); ?>" id="subscribe" onclick="tester('<?= h('PLN_brgaofxfgxyqx1p'); ?>', 'yearly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					


				</div>

    			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					 
					<div class="panel price panel-red" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading  text-center">
						<h3>GOLD</h3>
						</div>
						<div class="panel-body text-center"><h2><strong style="color: yellow;">30% Off!</strong></h2>
							<p class="lead" style="font-size:37px"><strong>₦25,200 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 30 Beats Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
					<!--		<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li> -->
                      <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 90% of Sales</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Instant Payments</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Full Statistics</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						    <?php
                        if (!in_array('PLN_fl30uhkrfetgdyu', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_fl30uhkrfetgdyu'); ?>" id="subscribe" onclick="tester('<?= h('PLN_fl30uhkrfetgdyu'); ?>', 'yearly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
                            <?= $this->Form->end() ?>
                        <?php } else {
                            ?>
                            <button type="button" class="subscribe1 btn btn-lg btn-block btn-primary" disabled="disabled">Already Subscribed!</button>
                        <?php }
                        ?>
						</div>
					</div>
					  


				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-blue" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading arrow_box text-center">
						<h3>PLATINUM</h3>
						</div>
						<div class="panel-body text-center"><h2><strong style="color: yellow;">30% Off!</strong></h2>
							<p class="lead" style="font-size:37px"><strong>₦67,200 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Unlimited Beats</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Personal Beat Store</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Beat Sale Contracts</li>
				<!--			<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Mixing & Mastering</li> -->
                    <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 90% of Sales</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Instant Payments</li>
                                                        <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Full Statistics</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						     <?php
                        if (!in_array('PLN_yru59bwi99gz537', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_yru59bwi99gz537'); ?>" id="subscribe" onclick="tester('<?= h('PLN_yru59bwi99gz537'); ?>', 'yearly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
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
            <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <h1 style="
    text-align: center;
">Cannot Pay Online?</h1>

        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: left;margin-top: 10px; padding-left: 37px;">
            <h4 style="
    text-align: center;
"><a href="https://amplifihub.freshdesk.com/support/solutions/articles/48000773135-how-to-subscribe-to-a-plan-on-amplifihub" style="
    border: 2px solid white;
    padding: 5px;
    border-radius: 10px;
    color: white;
    background: #3bb75e;
">Pay Offline <i class="fa fa-bank"></i></a></h4>
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
function tester(plan, type){

  if(userEmail != ' '){
 payWithPaystack(plan, type);
  }else{
      window.location = '/login';
  }

}

</script>
<?php
$user = $this->request->session()->read('Auth.User');

echo "<script>
  function payWithPaystack(plan, type){
    var plan = plan;
  // alert(plan);
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'". $user['email'] ."',
      plan: plan,
      ref: 'membership-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        console.log(response);
          window.location = '/subscriptions/addsub/'+response.reference+'/'+type;
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
