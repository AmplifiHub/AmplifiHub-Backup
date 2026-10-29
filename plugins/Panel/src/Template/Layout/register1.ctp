<!--
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */-->

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78232309-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78232309-2');
</script>
   <?= $this->Html->charset() ?>

     <title><?php if(isset($title)){ echo $title; }else{ echo $cakeTitle; }?></title>
    
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php if(isset($description)){ echo $description; }else{ echo $cakeDescription; }?>" />
<meta name="keyword" content="<?php if(isset($AmpKeyword)){ echo $AmpKeyword;}?>">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="AmplifiHub">
<meta itemprop="description" content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
<meta itemprop="image" content="https://amplifihub.com/img/amplifihub-social.jpg">

<!-- Twitter Card data -->
<meta name="twitter:title" content="AmplifiHub">
<meta name="twitter:description" content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
<meta name="twitter:image" content="https://amplifihub.com/img/amplifihub-social.jpg">
<meta name="twitter:card" content="summary_large_image">

<!-- Facebook -->
<meta property="og:title" content="AmplifiHub">
<meta property="og:description" content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
<meta property="og:image" content="https://amplifihub.com/img/amplifihub-social.jpg">
<meta property="og:url" content="https://amplifihub.com/">
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" type="text/css" href="/css/mainv2.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

    <?= $this->Html->css([
      '/bower_components/bootstrap/dist/css/bootstrap.min',
      '/bower_components/font-awesome/css/font-awesome.min',
      '/bower_components/Ionicons/css/ionicons.min',
      '/dist/css/AdminLTE.min',
      '/dist/css/skins/_all-skins.min',
      '/bower_components/morris.js/morris',
      '/bower_components/jvectormap/jquery-jvectormap',
      '/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min',
      '/bower_components/bootstrap-daterangepicker/daterangepicker',
      '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
      'custom',
        'pricing',
      'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
      ]) ?>

    <?php echo $this->Html->css('headerstyle.css?'.time()); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
        <?= $this->Html->script('/js/jquery.min') ?>
<meta name="theme-color" content="#E30D40" />
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '280493543037204');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=280493543037204&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#333333","text":"#cccccc","border":"#cccccc"},"button":{"background":"#e30d40","text":"#ffffff"}},"content":{"href":"https://amplifihub.com/privacy-policy","message":"AmplifiHub uses cookies to ensure you get the best experience on our website."}})});</script>
<style>
    @media (min-width: 768px) and (max-width: 1030px) {
  .navbar-form .form-control {
    display: none;
    width: auto;
    vertical-align: middle;
     }
}
</style>
</head>
<body class="skin-blue layout-top-nav">
<div class="wrapper" id="wrapper">

<!--  <header class="main-header">-->
<!--    <nav class="navbar navbar-static-top white" style="background-color: rgb(0,0,0); margin-left:0px">-->
<!--        <div class="container-fluid">-->
<!--<div class="navbar-header">-->
<!--      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--        <span class="sr-only">Toggle navigation</span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--      </button>-->
<!--  --><?//= $this->Html->link($this->Html->image('amplifihublogo.png',['class' => 'img-responsive','id' => 'amplifiLogo']),'/',['class'=>'','escape'=>false]) ?>
<!--</div>-->
<!--      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--      --><?//= $this->element('loginmenu') ?>
<!--      </div>-->
<!--    </div>-->
<!--    </nav>-->
<!--  </header>-->
    <header class="main-header">
    <nav class="navbar navbar-static-top" style="padding-bottom: 0 !important;">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b><img src="panel/img/amplifihub-logo-newscaled.png" alt="amplifihub logo" style="width:100px !important; margin-top: 2px !important; margin-left: 0 !important;"></a></b>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="    float: right!important;
    margin-bottom: 0;
    margin-right: 0;
    /* margin: 0; */
    margin-top: 6px;">
            <i class="fa fa-bars" style="
    font-size: 20px;
"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            
                    <?= $this->element('navmenu') ?>
                
          </ul>
          <form class="navbar-form navbar-left" role="search" action="/search-result" style="margin-top: 11px; background:none;">
            <div class="form-group">
              <input name="term" type="search" class="form-control" id="navbar-search-input" placeholder="Search beats, genre or producer" style="height:20px;">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
    </li>
            <!-- User Account Menu -->
            <?php
$user = $this->request->session()->read('Auth.User');
if(!$user){
    ?>
    <li class="dropdown messages-menu" style="
    margin-right: 5px;
"><?=  $this->Html->link('Login','/login',['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: transparent!important;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
    <li class="dropdown notifications-menu"><?= $this->Html->link(__('Sign Up'),'/sign-up',['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: #3bb75e !important;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
<?php }else{ ?>
    <li class="dropdown notifications-menu"><?= $this->Html->link('Dashboard',['controller' => 'Users', 'action' => 'dashboard'],['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: #3bb75e !important;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
<!--    <li class="dropdown">-->
<!--	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Account <b class="caret"></b></a>-->
<!--	        <ul class="dropdown-menu">-->
<!--	          <li>-->
<!--                  --><?//= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard']); ?>
<!--                  </li>-->
<!--	          <li>--><?//= $this->Html->link(__('My Profile'),['controller' => 'Users', 'action' => 'edit']) ?><!--</li>-->
<!--	          <li>--><?//= $this->Html->link(__('Messages'),'/messages') ?><!--</li>-->
<!--	          <li>--><?//= $this->Html->link(__('Logout'),'/logout') ?><!--</li>-->
<!--	        </ul>-->
<!--	</li>-->
      <?php  }   ?>
      
      <!-- Cart: style can be found in dropdown.less-->
            
            <li class="dropdown tasks-menu">
        <a href="/carts/view" class="dropdown-toggle" style="
    padding-bottom: 0;
">
            <i class="fa fa-shopping-cart fa-2x"></i>
    <span class="badge" id="cart-counter"><?php 
     $cart = $this->request->session()->read('cart');
    echo count($cart);?></span>
        </a>
    </li>
        </ul>
        
    </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <!--<div class="content-wrapper reglogin" id="authWrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>


      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

          <p></p>


        <div class="container clearfix">
            <?= $this->fetch('content') ?>


        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>

    <section id="music_player" class="<?= $display ?>">
      <div class="row no-gutters">
        <!--div class="col-lg-1">
        <img class="cover" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-cover.png" alt="">
      </div-->
        <div class="col-xs-12 col-lg-12">
          <div class="audio-player">
          <h1>Demo - Preview Song</h1>
        <audio id="audio-player" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/beat_name/Kiss-Daniel-Sofa.mp3" type="audio/mp3" controls="controls"></audio>
      </div>
       </div>
     </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
 <footer id="footer">
                <?= $this->element('newfooter1') ?>
        </footer>
<!-- ./wrapper -->
<?= $this->Html->script([
  '/bower_components/jquery/dist/jquery.min',
  '/bower_components/jquery-ui/jquery-ui.min',
  '/bower_components/moment/min/moment.min',
  '/bower_components/bootstrap/dist/js/bootstrap.min',
  '/bower_components/raphael/raphael.min',
  '/bower_components/morris.js/morris.min',
  '/bower_components/jquery-sparkline/dist/jquery.sparkline.min',
  '/plugins/jvectormap/jquery-jvectormap-1.2.2.min',
  '/plugins/jvectormap/jquery-jvectormap-world-mill-en',
  '/bower_components/jquery-knob/dist/jquery.knob.min',
  '/bower_components/moment/min/moment.min',
  '/bower_components/bootstrap-daterangepicker/daterangepicker',
  '/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min',
  '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
  
  '/bower_components/fastclick/lib/fastclick',
  '/dist/js/adminlte.min',
  '/dist/js/pages/dashboard',
  '/dist/js/demo',
  '/build/mediaelement-and-player.min'
  ]) ?>
  <script>
  var audio = document.getElementsByTagName("audio")[0];
  var player = new MediaElementPlayer(audio, {
      alwaysShowControls: true,
      features: ['playpause','volume','progress'],
      audioVolume: 'horizontal',
      audioWidth: 800,
      audioHeight: 67,
      success: function(player) {
          $('#type').html(player.pluginType);
      }
  });

//$('#accept').prop('checked',false);

$('#accept').click(function(){
  //e.preventDefault();
  $(this).prop('checked',function(i,value){
    if(value){
      $('.regbtn').removeClass('disabled');
    }else if(!value){
      $('.regbtn').addClass('disabled');
    }

  });
})


  </script>
 
<script>
    setTimeout(function () {
            $("#preloder").hide();
            $(".loader").hide();
        }, 3500);
</script>

<script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://amplifihub.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createKbSearchWidget('gjwmpe7a', e); });
</script>
</body>
<script data-ad-client="ca-pub-7189947815738869" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
