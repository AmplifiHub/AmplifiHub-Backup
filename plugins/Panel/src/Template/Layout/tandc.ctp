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
      'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
      'custom',
      'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'])
       ?>

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
  fbq('init', '280493543037204');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=280493543037204&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#333333","text":"#cccccc","border":"#cccccc"},"button":{"background":"#e30d40","text":"#ffffff"}},"content":{"href":"https://amplifihub.com/privacy-policy","message":"AmplifiHub uses cookies to ensure you get the best experience on our website."}})});</script>
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <header class="main-header">

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top white" style="background-color: rgb(0,0,0); margin-left:0px">
        <div class="container-fluid">
          <!-- Logo -->
<div class="navbar-header">
      <!-- Sidebar toggle button-->
      <!--a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: rgb(0,0,0)">
        <span class="sr-only">Toggle navigation</span>
      </a-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <?= $this->Html->link($this->Html->image('amplifihublogo.png',['class' => 'img-responsive','id' => 'amplifiLogo']),'/',['class'=>'','escape'=>false]) ?>

</div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?= $this->element('topmenu') ?>
      </div>
    </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>


      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

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

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?= $this->element('footer') ?>

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
  $('document').ready(function(){

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
  })
//document.getElementById("here").innerHTML="what";
  </script>
</body>
<script data-ad-client="ca-pub-7189947815738869" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
