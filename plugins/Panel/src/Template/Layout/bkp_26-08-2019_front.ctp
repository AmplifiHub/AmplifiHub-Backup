
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

$cakeDescription = 'AmplifiHub';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
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
        'pricing',
      'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
      ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
<meta name="theme-color" content="#E30D40" />
</head>
<body class="hold-transition skin-blue sidebar-mini">
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
  <?= $this->Html->link($this->Html->image('amplifihublogo.png',['class' => 'img-responsive']),'/',['class'=>'','escape'=>false]) ?>

</div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?= $this->element('fronttopmenu') ?>
      </div>
    </div>
    </nav>
    
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper reglogin">
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

 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?= $this->element('footerlinks') ?>
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
  <script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://amplifihub.kayako.com/api/v1",messengerUrl:"https://amplifihub.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>
</body>
</html>
