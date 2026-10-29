<!DOCTYPE html>
<html lang="en" class="no-js">
    
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
    <div class="body-wrap">
        
<div id="preloder">
        <div class="loader"></div>
    </div>
        <main>
            <section class="hero" style="padding-top:104px;padding-bottom: 0;">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Got Questions? Got Enquiries?</h1>
	                        <p class="paragraphcon">Contact us using the below form</p>
	                        
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
         
         <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            
                        </div>
						<div class="pricing-tables-wrap">
                            <script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://amplifihub.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createForm('k75f44dd', e); });
</script>
                    </div>
                </div>
            </section>
         
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

<script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://amplifihub.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createKbSearchWidget('gjwmpe7a', e); });
</script>

</body>
</html>
