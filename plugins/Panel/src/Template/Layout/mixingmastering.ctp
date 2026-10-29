<?php
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
 */

$cakeTitle = 'AmplifiHub';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
?>
<!DOCTYPE html>
<html>
<head>
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
    <meta charset="utf-8">
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
      'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
      ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
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
  fbq('init', '650707138710411');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=650707138710411&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#333333","text":"#cccccc","border":"#cccccc"},"button":{"background":"#e30d40","text":"#ffffff"}},"content":{"href":"https://amplifihub.com/privacy-policy","message":"AmplifiHub uses cookies to ensure you get the best experience on our website."}})});</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <?= $this->Html->link($this->Html->image('amplifihublogo.png',['class' => 'img-responsive','id' => 'amplifiLogo']),'/',['class'=>'logo','escape'=>false]) ?>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top white" style="background-color: rgb(0,0,0);">
      <!-- Sidebar toggle button-->
      <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: rgb(0,0,0)">
        <span class="sr-only">Toggle navigation</span>
      </a-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav nav-right">

          <?php
          $user = $this->request->session()->read('Auth.User');
          //debug($user);
          if(!$user){
            ?>
            <li><?= $this->Html->link(__('<i class="fa fa-home"></i> Home'),'/',['escape'=>false]) ?></li>
            <li><?= $this->Html->link(__('Buy Beats'),'/marketplace') ?></li>
            <li><?= $this->Html->link(__('Mixing and Mastering'),'/mixing') ?></li>
            <li><?= $this->Html->link(__('Book an Artiste'),'/bookartiste') ?></li>
            <li><?= $this->Html->link(__('Video Director'),'/#') ?></li>
            <li><?= $this->Html->link(__('Song Writer'),'/songwriter') ?></li>
            <li><?= $this->Html->link(__('Register'),'/register') ?></li>
            <li><?= $this->Html->link('Login','/login') ?></li>
            <?php }else{
              echo '<li class="align-middle" style="padding:15px;color:rgb(255,255,255);"><span class="font-weight-normal text-secondary"> Yo! '.$user['fullname'].'</span> </li><li style="padding:8px"><button type="button" class="btn btn-danger">
  Notifications <span class="badge badge-danger">4</span>
</button></li>';
              ?>
              <li>
                <?= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard']) ?>
              </li>
              <li>
                <?= $this->Html->link(__('My Profile'),['controller' => 'Users', 'action' => 'edit']) ?>
              </li>
          <li><?= $this->Html->link(__('Logout'),'/logout') ?></li>
        <?php  }   ?>

        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mixmasteringbg">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>


      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

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
  '/bower_components/jquery-slimscroll/jquery.slimscroll.min',
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

  $('.comment').click(function(e){
      e.preventDefault();
      var tis = $(this),
          url = 'comments/add',
          id = tis.attr('id');
      //alert(id);
      $.post(url,{id:id,price:price},function(data){
          $('#commentresult').text(data);
      });
  });
  </script>
  <script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://amplifihub.kayako.com/api/v1",messengerUrl:"https://amplifihub.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>
</body>
</html>
