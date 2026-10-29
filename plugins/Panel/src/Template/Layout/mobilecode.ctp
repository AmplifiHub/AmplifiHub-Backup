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
$cakeTitle = 'AmplifiHub - Sign Up';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
?>
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <?= $this->Html->link($this->Html->image('amplifihub-logo.png'), '/', ['class' => 'logo', 'escape' => false]) ?>
        <a href="/carts/view" class="my-cart on-lg">
            <i class="fa fa-shopping-cart fa-2x text-dark"></i>
            <span class="badge"><?php
                $cart = $this->request->session()->read('cart');
                echo count($cart);?></span>
        </a>
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="headermenu">
            <?= $this->element('fronttopmenunew') ?>
        </ul>
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
  <script src="https://snippets.freshchat.com/js/fc-pre-chat-form-v2.js"></script>
<script>
  var preChatTemplate = {
    //Form header color and Submit button color.
    mainbgColor: '#e30d40',
    //Form Header Text and Submit button text color.
    maintxColor: '#fff',
    //Chat Form Title
    heading: 'AmplifiHub Live Chat Support',
    //Chat form Welcome Message
    textBanner: 'We can\'t wait to talk to you. But first, please take a couple of moments to tell us a bit about yourself.',
    //Submit Button Label.
    SubmitLabel: 'Start Chat',
    //Fields List - Maximum is 5
    //All the values are mandatory and the script will not work if not available.
    fields : {
      field1 : {
        //Type can be either text or title
        type: "title",
        //Label for Field Title, can be in any language
        label: "Subject",
        //Field ID for Title
        fieldId: "title",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid Subject"
      },
      field2 : {
        //Type for Name - Do not Change
        type: "name",
        //Label for Field Name, can be in any language
        label: "Name",
        //Default - Field ID for Name - Do Not Change
        fieldId: "name",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid name"
      },
      field3 : {
        //Type for Email - Do Not Change
        type: "email",
        //Label for Field Email, can be in any language
        label: "Email",
        //Default - Field ID for Email - Do Not Change
        fieldId: "email",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid Email"
      },
      field4 : {
        //Type for Phone - Do Not Change
        type: "phone",
        //Label for Field Phone, can be in any language
        label: "Phone",
        //Default - Field ID for Phone - Do Not Change
        fieldId: "phone",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid Phone Number"
      }
    }
  };
  window.fcSettings = {
    token: "5f173526-d8d1-417f-9882-2fe71677c32d",
    host: "https://wchat.freshchat.com",
    config: {
      cssNames: {
        //The below element is mandatory. Please add any custom class or leave the default.
        widget: 'custom_fc_frame',
        //The below element is mandatory. Please add any custom class or leave the default.
        expanded: 'custom_fc_expanded'
      }
    },
    onInit: function() {
      console.log('widget init');
      fcPreChatform.fcWidgetInit(preChatTemplate);
    }
  };
</script>
<script src="https://wchat.freshchat.com/js/widget.js" async></script>
</body>
<script data-ad-client="ca-pub-7189947815738869" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
