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

//var_dump($title);exit();
$cakeTitle = 'AmplifiHub : Dashboard';
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
<meta itemprop="image" content="https://amplifihub.com/img/amplifihubseo.jpg">

<!-- Twitter Card data -->
<meta name="twitter:title" content="AmplifiHub">
<meta name="twitter:description" content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
<meta name="twitter:image" content="https://amplifihub.com/img/amplifihubseo.jpg">
<meta name="twitter:card" content="summary_large_image">

<!-- Facebook -->
<meta property="og:title" content="AmplifiHub">
<meta property="og:description" content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
<meta property="og:image" content="https://amplifihub.com/img/amplifihubseo.jpg">
<meta property="og:url" content="https://amplifihub.com/">
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
      '/bower_components/bootstrap/dist/css/bootstrap.min',
      '/bower_components/font-awesome/css/font-awesome.min',
      '/bower_components/Ionicons/css/ionicons.min',
      '/dist/css/AdminLTE.min',
       '/dist/css/demo',
        '/dist/css/component',
      '/dist/css/skins/_all-skins.min',
      '/bower_components/jvectormap/jquery-jvectormap',
      '/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min',
      '/bower_components/bootstrap-daterangepicker/daterangepicker',
      '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
      'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700",
      'custom',
      'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'])
       ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style type="text/css">
        .col-md-9{
            background-color: #ffffff;
        }
        
        #edit .form-group{
            margin-top: 25px!important;
        }
       .table-striped>tbody>tr{
    word-break: break-word;
}
    </style>
<meta name="theme-color" content="#E30D40" />

</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top white" style="background-color: rgb(0,0,0); margin-left:0px">
        <div class="container-fluid">
          <!-- Logo -->
<div class="navbar-header">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle mobnav" data-toggle="push-menu" role="button" style="background-color: rgb(0,0,0)">
        <span class="sr-only">Toggle navigation</span>
      </a>
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
  </header>
  <!-- Left side column. contains the logo and sidebar -->
         <?= $this->element('sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>


      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="">
      <!-- Small boxes (Stat box) -->
      <div class="">

        <?= $this->Flash->render() ?>
        <div class=" clearfix">
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
</div>
    </section>
    <section id="music_player" class="<?= $display ?>">
      <div class="row no-gutters">
        <!--div class="col-lg-1">
        <img class="cover" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-cover.png" alt="">
      </div-->
        <div class="col-xs-12 col-lg-12">
            <div class="audio-player">
                <h1>Demo - Preview Song</h1>
                <audio id="audio-player" src="" type="audio/mp3" controls="controls"></audio>
            </div>
       </div>
     </div>
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
  '/bower_components/Flot/jquery.flot',
  '/bower_components/Flot/jquery.flot.categories',
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
  '/dist/js/demo',
  '/dist/js/custom-file-input',  
  '/build/mediaelement-and-player.min'
  ]) ?>

<script type="text/javascript">
    $('#freeAccess').change(function(){
        $this = $(this);
        $value = $this.val();
        //alert($value);
        if($this.prop('checked')){
            
            $('#leasePriceHolder').hide();
            $('#leasePrice').removeAttr('required');;
        }else{
            
            $('#leasePriceHolder').show();
            $('#leasePrice').attr('required','required');
            
        }
    });
    $('#beatId, #noOfDays').change(function(){
        $beatValue = $('#beatId').val();
        $days = $('#noOfDays').val();
        
        if($beatValue !== "" && $days !== ""){
            $('#totalAmount').val(Number($days) * 500);
        }
    });
    
    $('#editBeat').submit(function(e){
    e.preventDefault();
    $beatId =  $('#storeId').attr('data-id');
    //alert('Am here');
   // console.log(new FormData(this));
   console.log($beatId);
    
    $.ajax({
    url: "editbeats", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
        //console.log(data);
        var value1 = jQuery.parseJSON(data);
          
       // var value = data;
        console.log(Object.keys(value1).length);
        
        
        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);
            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);
        }else if(value1.validation){
           
        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4); 
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);
   
    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                }, 100);
            }, 500);
   // console.log(key1, value4);
    });   
});            
    //console.log(key, value);
});
       
        }
        setTimeout(function (){
          location.reload();  
        }, 3000);
    },
    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }
});
});


$('#addBeats').submit(function(e){
    e.preventDefault();
    //alert('Am here');
    console.log(new FormData(this));
    
    $.ajax({
    url: "addbeats", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
        //console.log(data);
        var value1 = jQuery.parseJSON(data);
          
       // var value = data;
        console.log(Object.keys(value1).length);
        
        
        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);
            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);
        }else if(value1.validation){
           
        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4); 
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);
   
    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                }, 100);
            }, 500);
   // console.log(key1, value4);
    });   
});            
    //console.log(key, value);
});
       
        }
        setTimeout(function (){
          location.reload();  
        }, 3000);
    },
    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }
});
});


$('#addArtiste').submit(function(e){
    e.preventDefault();
   // alert("Am here");
   
       $.ajax({
    url: "addArtiste", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
        //console.log(data);
        var value1 = jQuery.parseJSON(data);
          
       // var value = data;
        console.log(Object.keys(value1).length);
        
        
        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);
            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);
        }else if(value1.validation){
           
        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4); 
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);
   
    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                }, 100);
            }, 500);
   // console.log(key1, value4);
    });   
});            
    //console.log(key, value);
});
       
        }
        setTimeout(function (){
          location.reload();  
        }, 3000);
    },
    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }
});
    
});

$('#addSongwriter').submit(function(e){
    e.preventDefault();
      $.ajax({
    url: "addSongwriter", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
       // console.log(data);
        var value1 = jQuery.parseJSON(data);
          
       // var value = data;
        //console.log(Object.keys(value1).length);
//       / console.log(value1);
        
        
        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);
            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);
        }else if(value1.validation){
           
        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4); 
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);
   
    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                }, 100);
            }, 500);
   // console.log(key1, value4);
    });   
});            
    //console.log(key, value);
});
       
        }
        setTimeout(function (){
          location.reload();  
        }, 3000);
    },
    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }
});
});

$('#addMixmastering').submit(function(e){
    e.preventDefault();
          $.ajax({
    url: "addMixmastering", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
        //console.log(data);
        var value1 = jQuery.parseJSON(data);
          
       // var value = data;
        console.log(Object.keys(value1).length);
        
        
        if(value1.error === "yes"){
            var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value2);
                }, 100);
            }, 500);
            //alert("Am here");
           // location.href = 'logout';
        }else if(value1.error === "no" ){
            var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('#my-box').html(value3);
                }, 100);
            }, 500);
        }else if(value1.validation){
           
        $.each(value1, function(key, value) {
            console.log(key, value);
$.each(value, function(key1, value4) {
      console.log(key1, value4); 
    $.each(value4, function(key2, value5) {
      console.log(key2, value5);
   
    $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                setTimeout(function(){
                    $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                   
             
                }, 100);
            }, 500);
   // console.log(key1, value4);
    }); 
    
 
});            
    //console.log(key, value);
});
       
        }
        setTimeout(function (){
          location.reload();  
        }, 3000);
           
    },
    error: function(request, status, err) {
        console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
    }
});
});

</script>

  <script type="text/javascript">

  	$(function() {

  		var data = <?php  echo $chartplot ?  $chartplot : '""' ; ?>;

  		$.plot("#placeholder", [data], {
        series: {
          bars: {
            show: true,
					  align: "center"
          }
        },
			xaxis: {
				mode: "categories",
				tickLength: 0
			}
  		});

  		// Add the Flot version string to the footer

  		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
  	});

  	</script>

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

  $(document).ready(function(){
    $('.nav-tabs a').click(function(){
        $(this).tab('show');
    })
    /*$('.nav-tabs a[href="#withdrawal"]').tab('show');
$('.nav-tabs a[href="#listwithdrawal"]').tab('show');*/
$('#listwithdrawal').load('/withdrawals/index');
$('#listaccount').load('/accounts/index');

  })

var like = function(){
      //$('#commentsresult').text('Sending comments ...');
      var user_id = $('#mixeruser-id').val(),
          type = $('#type').val(),
          url = '/likes/add';
      $.post(url,{liker_id:user_id,type:type}).done(function(data){
          $('.like').addClass('fa-thumbs-up').removeClass('fa-thumbs-o-up');
          //$('.dl').addClass('disabled')

      });
  }

$('.comment').click(function(e){
    e.preventDefault();
    $('#commentresult').text('Sending comments ...');
    var comment = $('#comment').val(),
        user_id = $('#mixeruser-id').val(),
        type = $('#type').val(),
        url = '/comments/add';
    $.post(url,{comment:comment,commentee_id:user_id,type:type}).done(function(data){
        $('#commentresult').text('Comment has been posted');
        $('#comment').val('');

    });
});

$('.complaint').click(function(e){
    e.preventDefault();
    $('#complaintresult').text('Sending your rant to admin ...');
    var rant = $('#rant').val(),
        accused_id = $('#complaintmixeruser-id').val(),
        type = $('#type').val(),
        url = '/complaints/add';
    $.post(url,{rant:rant,accused_id:accused_id,type:type}).done(function(data){
        $('#complaintresult').text('Rant has been logged');
        $('#rant').val('');

    });
});

$('.view-comment').click(function(e){
  e.preventDefault();
  $('#loadcomments').toggle();
  $('#commentsdiv').text('loading comments ...');
  var user_id = $('#mixeruser-id').val(),
  type = $('#type').val(),
      url = '/comments/loadcomments';
      $.post(url,{user_id:user_id, type:type},function(data){
        $('#commentsdiv').html(data);
      });
})

$("input[name='rating']").click(function(e){
  //e.preventDefault();
  var user_id = $('#mixeruser-id').val(),
      rating = $(this).val(),
      type = $('#type').val(),
      url = '/ratings/add';
      $.post(url,{user_id:user_id,rating:rating, type:type},function(data){
        $('#rated').html(data);
      });
});

  var count = 1;
  $('#add').click(function(){
    //alert(count);
    if(count < 4){
      $('.video').append('<div class="'+ count +'"><div class="form-group" style="margin-bottom: 10px"><?= $this->Form->control('videos_url[]',['placeholder'=>'Youtube video url', 'label' => false, 'class' => 'form-control','size'=>'50']);
        ?></div> <div class="form-group" style="margin-bottom: 10px"><?= $this->Html->link('<span class="fa fa-minus"></span> add more','#',['class'=>'btn btn-sm btn-danger', 'id'=>'remove', 'escape' =>false]) ?></div></div>');
        count++;
      }
    });


$('.video').on('click' , 'a#remove' ,function(){
  $(this).parent('div').parent('div').remove();
  count--;
});

var audio = document.getElementsByTagName("audio")[0];
var player = new MediaElementPlayer(audio, {
    alwaysShowControls: true,
    features: ['playpause','progress','volume',],
    audioVolume: 'horizontal',
    audioWidth: 800,
    audioHeight: 67,
    success: function(player) {
        $('#type').html(player.pluginType);
    }
});

var msg = function(){
      //$('#commentsresult').text('Sending comments ...');
      var messager_id = $('#messager-id').val(),
          user_id = $('#user-id').val(),
          message = $('#messagecanvas').val(),
          orderid = $('#orderid').val(),
          service = $('#service').val(),
          clientemail = $('#clientemail').val(),
          url = '/messages/add';
      $.post(url,{messager_id:messager_id,user_id:user_id,message:message,orderid:orderid,service:service, clientemail: clientemail}).done(function(data){
        //alert(data)
          $('#messages').prepend(data);
          $('#messagecanvas').val('');

      });
  }

$(document).ready(function(){
   
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top',
        html:true
    });

  $('.load').click(function(){
  $(this).addClass('hide').next().removeClass('hide');
  var x = $( this ).attr('id');
  player.setSrc(x);
  });

$('.pause').click(function(){
  $(this).addClass('hide').next().removeClass('hide');
})

$('.play').click(function(){
  $(this).addClass('hide').parent().find('.pause').removeClass('hide');
})})
</script>
<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "5f173526-d8d1-417f-9882-2fe71677c32d",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>
</body>
</html>
