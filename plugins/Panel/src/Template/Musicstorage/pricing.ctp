<!DOCTYPE html>
<html lang="en" class="no-js">
    
    <?= $this->Html->css([
      
      '/dist/css/AdminLTE.min',
      
      ]) ?>

<style>

.div-playlist-btn{position: absolute;margin-top:5px;}
        .div-playlist-btn span a{
                    background-repeat: no-repeat;
                    border: 0px solid #ccc;
                    overflow: hidden;
                    outline: none;
                    background: rgba(227, 13, 64, 0.3);
                }
        @media only screen and (min-width: 300px) and (max-width: 321px) {
 .div-playlist-btn{margin-left:42%;}
            }
             @media only screen and (min-width: 322px) and (max-width: 370px) {
 .div-playlist-btn{margin-left:45%;}
            }
              @media only screen and (min-width: 371px) and (max-width: 410px) {
 .div-playlist-btn{margin-left:48%;}
            }
                @media only screen and (min-width: 411px) and (max-width: 480px) {
 .div-playlist-btn{margin-left:54%;}
            }
                @media only screen and (min-width: 481px) and (max-width: 770px) {
 .div-playlist-btn{margin-left:74%;}
            }
                @media only screen and (min-width: 770px) and (max-width: 1030px) {
 .div-playlist-btn{margin-left:78%;}
            }
                  @media only screen and (min-width: 1030px) and (max-width: 1400px) {
 .div-playlist-btn{margin-left:82%;}
            }

form, fieldset {
    margin: 0;
    padding: 0;
    border-style: none;
    background: transparent;
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

[type="submit"], [type="reset"], button, html [type="button"] {
    -webkit-appearance: button;
}
button.navbar-toggle {
    float: left !important;
}
.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

button, input[type="button"], input[type="reset"], input[type="file"], input[type="submit"] {
    -webkit-appearance: none;
    -webkit-border-radius: 0;
    cursor: pointer;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
button, select {
    text-transform: none;
}
button, input {
}
button, input, optgroup, select, textarea {
    font-family: sans-serif;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}
button, hr, input {
    overflow: visible;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
* {
    max-height: 1000000px;
}
*, ::before, ::after {
    box-sizing: inherit;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    color: #fff;
    font: 16px/1.2 "Open Sans", "Arial", "Helvetica Neue", "Helvetica", sans-serif;
}
body, html {
    font-size: 12px;
    color: #131313;
}
.footer .current-time, .footer .duration, body, html {
    font-family: "Open Sans", sans-serif;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
}
body {
    font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-weight: 400;
}

.paragraphcon{
    color: #ccc;
    font-size:17px;
}

.feature-imagenow{
    width: 20%;
}

h1, h2, .h1, .h2 {
    margin-top: 0px;
    margin-bottom: 16px;
}

.dropdown-menu > li > a {
    color: #fff;
}

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 25px;
  border-radius: 10px;
}

.columnsmall {
  float: left;
  width: 33.33%;
  padding: 25px;
  border-radius: 10px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    
    margin-top: 10px;
    padding: 25px;
    border-radius: 10px;
  }
  
  @media screen and (max-width: 500px) {
  .columnsmall {
    
    margin-top: 10px;
    padding: 5px;
    border-radius: 10px;
  }
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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solid Template</title>
    
    
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="body-wrap">
        

        <main>
            <section class="hero" style="padding-top:104px;">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Never Skip A Beat! Manage Your Music On AmplifiHub.</h1>
	                        
	                        <p class="paragraphcon">Store your unreleased music and lyrics online | Collab with other musicians on AmplifiHub and generate split sheets. Subscribe now to take control of your catalogue.</p>
	                        <div class="hero-cta"><a class="btn green btnmarg" href="/sign-up">Take Control Now</a> <a class="btn green btnmarg" href="#section2"><i class="fa fa-arrow-down"></i> Go To Price List</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>
            
            <section class="features section">
                <div class="container" style="margin-top: 40px;">
                    <h2 style="text-align:center;">Why You Should Manage Your Music Catalogue With AmplifiHub</h2>
					<div class="features-inner section-inner has-bottom-divider" style="padding: 30px">
                        <div class="features-wrap">
                            
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="/pricingland/dist/images/cloud-computing.svg" alt="upload music on AmplifiHub" class="feature-imagenow" >
                                    </div>
                                    <h3 class="feature-title mt-24">Keep Your Unreleased Music Safe</h3>
                                    <p class="paragraphcon">Never loose unreleased songs alongside your lyrics to phone misplacement or hard drive failure.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="/pricingland/dist/images/friends.svg" alt="collab with musicians" class="feature-imagenow">
                                    </div>
                                    <h3 class="feature-title mt-24">Collab With Artistes Remotely</h3>
                                    <p class="paragraphcon">Share your songs with other users, get feedback, features and generate split sheets with the click of a button.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="/pricingland/dist/images/shield.svg" alt="Offer Mixing and Mastering services on AmplifiHub" class="feature-imagenow">
                                    </div>
                                    <h3 class="feature-title mt-24">No More Leaks</h3>
                                    <p class="paragraphcon">With AmplifiHub, no one has access to your files, but you. You also get to choose who has the right to download your shared music and files.</p>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            

        <div class="page-text-container" style="background-color: transparent; padding: 0; margin-top: 50px;">
            <div style="padding: 20px;">
                <h2 style="text-align:center;" id="section2" >Music Management Pricing</h2>
            
            </div>
            
            <section class="pricing-columns pricing-section">
          
        <div class="pricing-tables-wrap">
        <div id="yearly" class="row">


   
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

					  
					<div class="panel price panel-grey" style="border:1px solid #262626 !important;background-color:#262626; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
						<div class="panel-heading arrow_box text-center">
						<h3>SILVER</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:37px"><strong>₦5,000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 5 GB Drive Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Upload and Store Lyrics</li>
							
                            <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Collab</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Generate Split Sheets</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
                            
						</ul>
						<div class="panel-footer">
						<?php
						
                        if (!in_array('PLN_ec5l0s8gs9h6giv', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_ec5l0s8gs9h6giv'); ?>" id="subscribe" onclick="tester('<?= h('PLN_ec5l0s8gs9h6giv'); ?>', 'yearly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
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
							<p class="lead" style="font-size:37px"><strong>₦8,000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 10 GB Drive Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Upload and Store Lyrics</li>
							
                            <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Collab</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Generate Split Sheets</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						    <?php
                        if (!in_array('PLN_lfw54gwvj1rcz85', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_lfw54gwvj1rcz85'); ?>" id="subscribe" onclick="tester('<?= h('PLN_lfw54gwvj1rcz85'); ?>', 'monthly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
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
							<p class="lead" style="font-size:37px"><strong>₦15,000 / year</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 20 GB Drive Limit</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Upload and Store Lyrics</li>
							
                            <li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Collab</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Private Messages</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; Generate Split Sheets</li>
							<li class="list-group-item" style="border: 0 !important;"><i class="fa fa-check text-success"></i>&nbsp; 24/7 support</li>
						</ul>
						<div class="panel-footer">
						     <?php
                        if (!in_array('PLN_k6h1hh2nevezii3', $currentUserSubscription)) {
                            ?>
                            <?=
                            $this->Form->create(null, [
                                'url' => ['controller' => 'plans', 'action' => 'subscribe']
                            ]);
                            ?>
                            <button type="button" value="<?= h('PLN_k6h1hh2nevezii3'); ?>" id="subscribe" onclick="tester('<?= h('PLN_k6h1hh2nevezii3'); ?>', 'monthly')"  class="subscribe1 btn btn-lg btn-block btn-primary">Subscribe Now!</button>
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

			
			</div>
			</div>
			</section>

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner" style="margin-bottom: 30px;">
						<h3 class="section-title mt-0">Got More Questions? We are happy to answer them</h3>
						<div class="cta-cta">
							<a class="btn green" href="mailto:support@amplifihub.com">Get in touch</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        
    </div>

    <script src="pricingland/dist/js/main.min.js"></script>
    
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
          window.location = '/subscriptions/addsubmusic/'+response.reference+'/'+type;
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
//   var e = document.getElementById("filt-monthly"),
//     d = document.getElementById("filt-hourly"),
//     t = document.getElementById("switcher"),
//     m = document.getElementById("monthly"),
//     y = document.getElementById("hourly");

// e.addEventListener("click", function(){
//   t.checked = false;
//   e.classList.add("toggler--is-active");
//   d.classList.remove("toggler--is-active");
//   m.classList.remove("hide");
//   y.classList.add("hide");
// });

// d.addEventListener("click", function(){
//   t.checked = true;
//   d.classList.add("toggler--is-active");
//   e.classList.remove("toggler--is-active");
//   m.classList.add("hide");
//   y.classList.remove("hide");
// });

// t.addEventListener("click", function(){
//   d.classList.toggle("toggler--is-active");
//   e.classList.toggle("toggler--is-active");
//   m.classList.toggle("hide");
//   y.classList.toggle("hide");
// })

</script>

</body>
</html>
