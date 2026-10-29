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
$cakeTitle = 'AmplifiHub : Amplifihub';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
// admin dashboard layout
?>
<!DOCTYPE html>
<html>
 
 <style>
     
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle !important;
    border-top: 1px solid #ddd;
}
     
 </style>   

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78232309-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-78232309-2');
    </script>
    <?= $this->Html->charset() ?>

    <title><?php if (isset($title)) {
            echo $title;
        } else {
            echo $cakeTitle;
        } ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php if (isset($description)) {
        echo $description;
    } else {
        echo $cakeDescription;
    } ?>"/>
    <meta name="keyword" content="<?php if (isset($AmpKeyword)) {
        echo $AmpKeyword;
    } ?>">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="AmplifiHub">
    <meta itemprop="description"
          content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
    <meta itemprop="image" content="https://amplifihub.com/img/amplifihub-social.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="AmplifiHub">
    <meta name="twitter:description"
          content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
    <meta name="twitter:image" content="https://amplifihub.com/img/amplifihub-social.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Facebook -->
    <meta property="og:title" content="AmplifiHub">
    <meta property="og:description"
          content="AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services.">
    <meta property="og:image" content="https://amplifihub.com/img/amplifihub-social.jpg">
    <meta property="og:url" content="https://amplifihub.com/">
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        '/newDash/css/slicknav.min.css',
        //'/newDash/css/bootstrap.min.css',
        '/newDash/css/all.min.css',
        '/newDash/css/style.css',
        '/newDash/css/responsive.css',

         '/bower_components/bootstrap/mixins/less/vendor-prefixes.less',
        '/bower_components/bootstrap/dist/css/bootstrap.min',
        '/bower_components/font-awesome/css/font-awesome.min',
        '/bower_components/Ionicons/css/ionicons.min',
        '/bower_components/select2/dist/css/select2.min',
        '/dist/css/AdminLTE.min',
        '/dist/css/demo',
        '/dist/css/component',
        '/dist/css/skins/skin-blue.min',
        '/bower_components/jvectormap/jquery-jvectormap',
        '/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min',
        
        '/bower_components/bootstrap-daterangepicker/daterangepicker',
        '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700",
        'custom',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',
        '/css/croppie.min'
    ])
    ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
     <style>
     @media (min-width: 993px){
         .content-wrapper {
        overflow: auto; 
            
         }
     }
     
        img.croppie-cropped-img{width:200px; height:200px;}
    </style>
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
<meta name="theme-color" content="#E30D40" />
</head>
<body class="hold-transition fixed skin-blue sidebar-mini">
<div id="main-warp" style="height: auto; min-height: 100%;">

    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">

            <!-- logo for regular state and mobile devices -->
            <img src="/img/400x60amp.png" class="logo-lg" alt="User Image" style="width: 200px;">

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <img src="/img/mini-logo.png" class="logo-mini"
                 style="width: 30px;max-width: none;position: absolute;left: 24px;top: 4px" alt="User Image">
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            
            
            <div class="navbar-custom-menu">
                <?= $this->element('topmenu') ?>
            </div>
          
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <?= $this->element('sidebar') ?>
    <div class="content-wrapper" style="background-color: #e0e0e0;">

        <section class="content-header">
            <h1 >
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </h1>
             <?php
     $session = $this->request->session();
     $profilestate=$session->read('Profile.state');
     if($profilestate =="Incomplete"){
          $message = h('Please Complete Your Profile. Click here');
         echo '<div class="message success alert alert-info" style="background-color:yellow !important;text-align:center; border-radius:5px;" ><a href="https://amplifihub.com/profile" style="
    color: black;
    text-decoration: none;
    text-align: center;
    font-weight: bolder;
" >Please Complete Your Profile. Click Here</a></div>';
     }
    ?>
            <ol style="background:none" class="breadcrumb">
                <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>-->
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="row">
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
            </div>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>



            <!-- /.content-wrapper -->
        </section>
    </div>
    <!-- /.content -->

    <footer class="main-footer" style="box-sizing: content-box;">
        <div class="pull-right hidden-xs">

        </div>
        <strong>Copyright © 2022 <a href="#">AmplifiHub</a>.</strong> All rights
        reserved.
    </footer>
</div>

<!-----croppie modal starts------>
     <div id="uploadimageModal" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
       <div class="col-md-8 text-center">
        <div id="image_demo" style="width:350px; margin-top:30px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <button class="btn btn-success crop_image">Crop & Upload Image</button>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
     </div>
    </div>
</div>
<!-----croppie modal ends------>


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
    '/bower_components/select2/dist/js/select2.full.min',
    '/dist/js/adminlte.min',
    '/dist/js/demo',
    '/dist/js/custom-file-input',
    '/build/mediaelement-and-player.min',
    '/js/croppie.min'
]) ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script>
      $('#lyrics').summernote({
        placeholder: 'Enter Lyrics',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

</script>
<script type="text/javascript">


    function getUrlAction(){
        var url = $(location).attr('href');
        var action = null;
        if(url.indexOf('profile') != -1){
            action = 'profile';
        }else{
            action = 'sell_beat';
        }
        return action;
    }


$( document ).ready(function() {
    // select2
    $('.select2-country').select2({
        
    });
  
 if($("#freeAccessEdit").prop("checked") == true){

             $('#leasePriceHolder').hide();
               //  	$('#lease-price').val(0);

            $('#lease-price').removeAttr('required');
            $('#lease-price').attr("disabled", true);

            }
            else {
            $('#leasePriceHolder').show()
            $('#lease-price').attr('required', 'required');
            $('#lease-price').removeAttr("disabled");


            }


});
    $('#freeAccess').change(function () {
        $this = $(this);
        $value = $this.val();
        //alert($value);
        if ($this.prop('checked')) {

            $('#leasePriceHolder').hide();
            $('#leasePrice').removeAttr('required');
            ;
        } else {

            $('#leasePriceHolder').show();
            $('#leasePrice').attr('required', 'required');

        }
    });

     $('#freeAccessEdit').click(function(){
            if($(this).prop("checked") == true){

             $('#leasePriceHolder').hide();
               //  	$('#lease-price').val(0);

            $('#lease-price').removeAttr('required');
            $('#lease-price').attr("disabled", true);

            }
            else if($(this).prop("checked") == false){
            $('#leasePriceHolder').show();
            $('#lease-price').attr('required', 'required');
            $('#lease-price').removeAttr("disabled");


            }
    });

    $('#beatId, #noOfDays').change(function () {
        $beatValue = $('#beatId').val();
        $days = $('#noOfDays').val();

        if ($beatValue !== "" && $days !== "") {
            $('#totalAmount').val(Number($days) * 500);
        }
    });

    $('#editBeat').submit(function (e) {
        e.preventDefault();
        $beatId = $('#storeId').attr('data-id');
          var formData = new FormData(this);
        $.ajax({
            url: "editbeats", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            beforeSend: function () {
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function (data) {
                //console.log(data);
                var value1 = jQuery.parseJSON(data);

                // var value = data;
                console.log(Object.keys(value1).length);


                if (value1.error === "yes") {
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                    // location.href = 'logout';
                } else if (value1.error === "no") {
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                } else if (value1.validation) {

                    $.each(value1, function (key, value) {
                        console.log(key, value);
                        $.each(value, function (key1, value4) {
                            console.log(key1, value4);
                            $.each(value4, function (key2, value5) {
                                console.log(key2, value5);

                                $('.progress-bar').animate({width: "100%"}, 100);
                                setTimeout(function () {
                                    $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                                    setTimeout(function () {
                                        $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                                    }, 100);
                                }, 500);
                                // console.log(key1, value4);
                            });
                        });
                        //console.log(key, value);
                    });

                }
                setTimeout(function () {
                    location.reload();
                }, 3000);
            },
            error: function (request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });
    });



$('#addBeats').submit(function(e){
    e.preventDefault();
    //alert('Am here');
    console.log(new FormData(this));

     var formData = new FormData(this);
    $.ajax({
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {

                        var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
    url: "addbeats", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $(".progress-bar").width('0%');
        //$('#uploadStatus').html('<img src="images/loading.gif"/>');
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        //$('.progress-bar').animate({width: "30%"}, 100);
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
            localStorage.setItem("upload", "uploaded");
            localStorage.setItem("upload_id", value1.data_id);
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


$('#addShare').submit(function(e){
    e.preventDefault();
    //alert('Am here');
    console.log(new FormData(this));

     var formData = new FormData(this);
    $.ajax({
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {

                        var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
    url: "addshare", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,
    beforeSend: function(){
        $(".progress-bar").width('0%');
        //$('#uploadStatus').html('<img src="images/loading.gif"/>');
        $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        //$('.progress-bar').animate({width: "30%"}, 100);
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
            localStorage.setItem("upload", "uploaded");
            localStorage.setItem("upload_id", value1.data_id);
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

$('#editMusic').submit(function (e) {
        e.preventDefault();
        $beatId = $('#storeId').attr('data-id');
          var formData = new FormData(this);
        $.ajax({
            url: "/editmusic", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            beforeSend: function () {
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function (data) {
                //console.log(data);
                var value1 = jQuery.parseJSON(data);

                // var value = data;
                console.log(Object.keys(value1).length);


                if (value1.error === "yes") {
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                    // location.href = 'logout';
                } else if (value1.error === "no") {
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                } else if (value1.validation) {

                    $.each(value1, function (key, value) {
                        console.log(key, value);
                        $.each(value, function (key1, value4) {
                            console.log(key1, value4);
                            $.each(value4, function (key2, value5) {
                                console.log(key2, value5);

                                $('.progress-bar').animate({width: "100%"}, 100);
                                setTimeout(function () {
                                    $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                                    setTimeout(function () {
                                        $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                                    }, 100);
                                }, 500);
                                // console.log(key1, value4);
                            });
                        });
                        //console.log(key, value);
                    });

                }
                setTimeout(function () {
                    location.reload();
                }, 3000);
            },
            error: function (request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });
    });

    $('#addArtiste').submit(function (e) {
        e.preventDefault();
        // alert("Am here");

        $.ajax({
            url: "addArtiste", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            beforeSend: function () {
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function (data) {
                //console.log(data);
                var value1 = jQuery.parseJSON(data);

                // var value = data;
                console.log(Object.keys(value1).length);


                if (value1.error === "yes") {
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                    // location.href = 'logout';
                } else if (value1.error === "no") {
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                } else if (value1.validation) {

                    $.each(value1, function (key, value) {
                        console.log(key, value);
                        $.each(value, function (key1, value4) {
                            console.log(key1, value4);
                            $.each(value4, function (key2, value5) {
                                console.log(key2, value5);

                                $('.progress-bar').animate({width: "100%"}, 100);
                                setTimeout(function () {
                                    $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                                    setTimeout(function () {
                                        $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                                    }, 100);
                                }, 500);
                                // console.log(key1, value4);
                            });
                        });
                        //console.log(key, value);
                    });

                }
                setTimeout(function () {
                    location.reload();
                }, 3000);
            },
            error: function (request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });

    });

    $('#addSongwriter').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "addSongwriter", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            beforeSend: function () {
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function (data) {
                // console.log(data);
                var value1 = jQuery.parseJSON(data);

                // var value = data;
                //console.log(Object.keys(value1).length);
//       / console.log(value1);


                if (value1.error === "yes") {
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                    // location.href = 'logout';
                } else if (value1.error === "no") {
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                } else if (value1.validation) {

                    $.each(value1, function (key, value) {
                        console.log(key, value);
                        $.each(value, function (key1, value4) {
                            console.log(key1, value4);
                            $.each(value4, function (key2, value5) {
                                console.log(key2, value5);

                                $('.progress-bar').animate({width: "100%"}, 100);
                                setTimeout(function () {
                                    $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                                    setTimeout(function () {
                                        $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                                    }, 100);
                                }, 500);
                                // console.log(key1, value4);
                            });
                        });
                        //console.log(key, value);
                    });

                }
                setTimeout(function () {
                    location.reload();
                }, 3000);
            },
            error: function (request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });
    });

    $('#addMixmastering').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "addMixmastering", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            beforeSend: function () {
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function (data) {
                //console.log(data);
                var value1 = jQuery.parseJSON(data);

                // var value = data;
                console.log(Object.keys(value1).length);


                if (value1.error === "yes") {
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                    // location.href = 'logout';
                } else if (value1.error === "no") {
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function () {
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function () {
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                } else if (value1.validation) {

                    $.each(value1, function (key, value) {
                        console.log(key, value);
                        $.each(value, function (key1, value4) {
                            console.log(key1, value4);
                            $.each(value4, function (key2, value5) {
                                console.log(key2, value5);

                                $('.progress-bar').animate({width: "100%"}, 100);
                                setTimeout(function () {
                                    $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                                    setTimeout(function () {
                                        $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");


                                    }, 100);
                                }, 500);
                                // console.log(key1, value4);
                            });


                        });
                        //console.log(key, value);
                    });

                }
                setTimeout(function () {
                    location.reload();
                }, 3000);

            },
            error: function (request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });
    });

</script>

<script type="text/javascript">

    $(function () {

        var data = <?php  echo $chartplot ? $chartplot : '""'; ?>;

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
        features: ['playpause', 'volume', 'progress'],
        audioVolume: 'horizontal',
        audioWidth: 800,
        audioHeight: 67,
        success: function (player) {
            $('#type').html(player.pluginType);
        }
    });

    $(document).ready(function () {
        $('.nav-tabs a').click(function () {
            $(this).tab('show');
        })
        /*$('.nav-tabs a[href="#withdrawal"]').tab('show');
    $('.nav-tabs a[href="#listwithdrawal"]').tab('show');*/
        $('#listwithdrawal').load('/withdrawals/index');
        $('#listaccount').load('/accounts/index');

    })

    var like = function () {
        //$('#commentsresult').text('Sending comments ...');
        var user_id = $('#mixeruser-id').val(),
            type = $('#type').val(),
            url = '/likes/add';
        $.post(url, {liker_id: user_id, type: type}).done(function (data) {
            $('.like').addClass('fa-thumbs-up').removeClass('fa-thumbs-o-up');
            //$('.dl').addClass('disabled')

        });
    }

    $('.comment').click(function (e) {
        e.preventDefault();
        $('#commentresult').text('Sending comments ...');
        var comment = $('#comment').val(),
            user_id = $('#mixeruser-id').val(),
            type = $('#type').val(),
            url = '/comments/add';
        $.post(url, {comment: comment, commentee_id: user_id, type: type}).done(function (data) {
            $('#commentresult').text('Comment has been posted');
            $('#comment').val('');

        });
    });

    $('.complaint').click(function (e) {
        e.preventDefault();
        $('#complaintresult').text('Sending your rant to admin ...');
        var rant = $('#rant').val(),
            accused_id = $('#complaintmixeruser-id').val(),
            type = $('#type').val(),
            url = '/complaints/add';
        $.post(url, {rant: rant, accused_id: accused_id, type: type}).done(function (data) {
            $('#complaintresult').text('Rant has been logged');
            $('#rant').val('');

        });
    });

    $('.view-comment').click(function (e) {
        e.preventDefault();
        $('#loadcomments').toggle();
        $('#commentsdiv').text('loading comments ...');
        var user_id = $('#mixeruser-id').val(),
            type = $('#type').val(),
            url = '/comments/loadcomments';
        $.post(url, {user_id: user_id, type: type}, function (data) {
            $('#commentsdiv').html(data);
        });
    })

    $("input[name='rating']").click(function (e) {
        //e.preventDefault();
        var user_id = $('#mixeruser-id').val(),
            rating = $(this).val(),
            type = $('#type').val(),
            url = '/ratings/add';
        $.post(url, {user_id: user_id, rating: rating, type: type}, function (data) {
            $('#rated').html(data);
        });
    });

    var count = 1;
    $('#add').click(function () {
        //alert(count);
        if (count < 4) {
            $('.video').append('<div class="' + count + '"><div class="form-group" style="margin-bottom: 10px"><?= $this->Form->control('videos_url[]', ['placeholder' => 'Youtube video url', 'label' => false, 'class' => 'form-control', 'size' => '50']);
                ?></div> <div class="form-group" style="margin-bottom: 10px"><?= $this->Html->link('<span class="fa fa-minus"></span> add more', '#', ['class' => 'btn btn-sm btn-danger', 'id' => 'remove', 'escape' => false]) ?></div></div>');
            count++;
        }
    });


    $('.video').on('click', 'a#remove', function () {
        $(this).parent('div').parent('div').remove();
        count--;
    });

    var audio = document.getElementsByTagName("audio")[0];
    var player = new MediaElementPlayer(audio, {
        alwaysShowControls: true,
        features: ['playpause', 'progress', 'volume',],
        audioVolume: 'horizontal',
        audioWidth: 800,
        audioHeight: 67,
        success: function (player) {
            $('#type').html(player.pluginType);
        }
    });

    var msg = function () {
        //$('#commentsresult').text('Sending comments ...');
        var messager_id = $('#messager-id').val(),
            user_id = $('#user-id').val(),
            message = $('#messagecanvas').val(),
            orderid = $('#orderid').val(),
            service = $('#service').val(),
            clientemail = $('#clientemail').val(),
            music_id = $('#music-id').val(),
            url = '/messages/add';
        $.post(url, {
            messager_id: messager_id,
            user_id: user_id,
            message: message,
            orderid: orderid,
            service: service,
            clientemail: clientemail,
            music_id:music_id
        }).done(function (data) {
            //alert(data)
            $('#messages').prepend(data);
            $('#messagecanvas').val('');

        });
    }

    var msghire = function () {
        //$('#commentsresult').text('Sending comments ...');
        var messager_id = $('#messager-id').val(),
            user_id = $('#user-id').val(),
            message = $('#messagecanvas').val(),
            orderid = $('#orderid').val(),
            service = $('#service').val(),
            clientemail = $('#clientemail').val(),
            url = '/messages/add';
        $.post(url, {
            messager_id: messager_id,
            user_id: user_id,
            message: message,
            orderid: orderid,
            service: service,
            clientemail: clientemail
        }).done(function (data) {
            //alert(data)
            // $('#messages').html('');
            $('#messages').prepend(data);
            $('#messagecanvas').val('');
            /*var url = window.location.href;
            window.location = url;*/
        });
    }

    $(document).ready(function () {

        $('[data-toggle="tooltip"]').tooltip({
            placement: 'top',
            html: true
        });

        $('.load').click(function () {
            $(this).addClass('hide').next().removeClass('hide');
            var x = $(this).attr('id');
            player.setSrc(x);
        });

        $('.pause').click(function () {
            $(this).addClass('hide').next().removeClass('hide');
        })

        $('.play').click(function () {
            $(this).addClass('hide').parent().find('.pause').removeClass('hide');
        })
    })
</script>
<script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://amplifihub.ladesk.com/scripts/track.js',
function(e){ LiveAgent.createButton('rgd81ls6', e); });
</script>


<script>
$(document).ready(function(){


 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type: 'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#file-5').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'width: 500, height: 500'
    }).then(function(response){
          $('#new_croppie_img').val(response);
      if(getUrlAction() == 'profile'){
          $('#prof-image').attr('src', response);
      }else{
        var img = '<img class="croppie-cropped-img" src="'+response+'" class="img-thumbnail" />';
        $('#uploaded_image').html(img);
      }
        $('#uploadimageModal').modal('hide');

    //   $.ajax({
    //     url:"upload.php",
    //     type: "POST",
    //     data:{"image": response},
    //     success:function(data)
    //     {
    //       $('#uploadimageModal').modal('hide');
    //       $('#uploaded_image').html(data);
    //     }
    //   });
    })
  });

});
</script>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $play_chart; ?>],
 xkey:'year_number',
 ykeys:['plays', 'week_number'],
 labels:['Plays', 'Weeks'],
 hideHover:'auto',
 barColors:['#E30D40'],
 stacked:true
});
</script>

<script>
Morris.Bar({
 element : 'prof',
 data:[<?php echo $profile_chart; ?>],
 xkey:'month_name',
 ykeys:['prof', 'week_number'],
 labels:['Profile Views', 'Weeks'],
 hideHover:'auto',
barColors:['#E30DCC'],

});
</script>

<script>
Morris.Bar({
             element : 'sales',
             data:[<?php echo $sale_chart; ?>],
             xkey:'month_name',
             ykeys:['sales'],
             labels:['Sales'],
             hideHover:'auto',
             barColors:['#ff8a33'],
             stacked:true
});
</script>

<script>

    $("#sYear").on("change", function(){
 	var year = $("#sYear").val();
//  	alert(year);

 	$.ajax({
 		type: "POST",
 		url: "salesbyyear",
 		data: {year:year},
 		dataType: 'json',
 		success: function(data){
 			console.log(data);
 			$("#sales").empty();
 			Morris.Bar({
             element : 'sales',
             data:data,
             xkey:'month_name',
             ykeys:['sales'],
             labels:['Sales'],
             hideHover:'auto',
             stacked:true,
             barColors:['#ff8a33'],
             redraw: true
            });
 		}
 	});
 });
   </script>

   <script>

    $("#pYear").on("change", function(){
 	var year = $("#pYear").val();
//  	alert(year);

 	$.ajax({
 		type: "POST",
 		url: "profilebyyear",
 		data: {year:year},
 		dataType: 'json',
 		success: function(data){
 			console.log(data);
 			$("#prof").empty();
 			Morris.Bar({
             element : 'prof',
             data:data,
             xkey:'month_name',
             ykeys:['prof', 'week_number'],
             labels:['Profile Views', 'Weeks'],
             hideHover:'auto',
             stacked:true,
             barColors:['#E30DCC'],
             redraw: true
            });
 		}
 	});
 });
   </script>
   <script>
     $(document).ready(function() {
        if ($('input.check').is(':checked')) {
                $("#swt1").css("background-color", "green");
             }else{
                 $("#swt1").css("background-color", "transparent");
             }
         $("#swt1").click(function () {
             if (!$('input.check').is(':checked')) {
             if ($(this).hasClass('btn2')){
                 $('#swt1').removeClass('btn2').addClass('btn1');
                 $(this).addClass('btn1').removeClass('btn2');
                 $("#swt1").css("background-color", "");
                 $("#swt1").css("background-color", "transparent");

             }
             }else{
                //  if ($(this).hasClass('btn1')){
                 $('#swt1').removeClass('btn1').addClass('btn2');
                 $(this).addClass('btn2').removeClass('btn1');
                 $("#swt1").css("background-color", "");
                 $("#swt1").css("background-color", "green");

            //  }
             }


         })
     });
     
     $(document).on('click', 'a.play-wrap, path.play-pause-btn__icon', function(){
            
            setTimeout( function(){ 
            var currentTime = $('.current-time').text();
            var aud = new GreenAudioPlayer('.ready-player-1');
            aud.pause();
            // alert(currentTime);
            
            }  , 47000 );
            
        });
    </script>
    <script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'https://support.amplifihub.com/scripts/track.js',
function(e){ LiveAgent.createButton('qfoqpm43', e); });
</script>


<script>
$(document).ready(function(){
    
    $(document).on("click", ".chatwithme", function () {
     var myBookId = $(this).attr('data-id');
    //  alert(myBookId);
     $("#music_id").val(myBookId);
     
    });
    
    $(document).on("click", ".shares", function () {
     var mid = $(this).attr('data-id');
    //  alert(mid);
     $("#mus_id").val(mid);
     
    });
  
    $(document).on("change", "#search-box", function () {
     var searchbox = $("#search-box").val();
     var music_id = $("#music_id").val();
    //  alert(searchbox);
    var url = "musician/"+music_id+"?search="+searchbox;
    $("#mform").attr('action', '');
    $("#mform").attr('action', url);
     
    });
    /////////////////////
    
	$("#search-box").keyup(function(){
// 	$("#country-list").html();
		$.ajax({
		type: "POST",
		url: "/musicians",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(/images/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
	       // console.log(data);
			$("#suggesstion-box").show();
			$("#suggesstion-box").html();
			
			var json = jQuery.parseJSON(data);
			var html = '<ul id="country-list" style="z-index:1;">';
			$.each(json, function(key, val){
			 //   alert(val.seller_name);
			    html += '<li onClick="selectCountrym(';
			    html += "'";
			    html += val.aka;
			    html += "'";
			    html += ');">'+val.aka+'</li>';
			});
			html += '</ul>';
			$("#suggesstion-box").html(html);
			$("#search-box").css("background","#FFF");
		}
		});
	    });
	    
	    $("#musician").keyup(function(){
        // alert('ok');
		$.ajax({
		type: "POST",
		url: "/musicians",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#musician").css("background","#FFF url(/images/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
	       // console.log(data);
			$("#suggesstion").show();
			$("#suggesstion").html();
			
			var json = jQuery.parseJSON(data);
			var html = '<ul id="country-list" style="z-index:1;">';
			$.each(json, function(key, val){
			 //   alert(val.seller_name);
			    html += '<li class="selectshare" onClick="selectCountry(';
			    html += "'";
			    html += val.aka;
			    html += "'";
			    html += ');">'+val.aka+'</li>';
			});
			html += '</ul>';
			$("#suggesstion").html(html);
			$("#musician").css("background","#FFF");
		}
		});
	    });
	    
	    
    });


        function selectCountry(val) {
            // alert('pk');
        $("#musician").val(val);
        var id = $("#music_id").val();
        var name = $("#musician").val();
        var url = "musician/"+id+"?search="+name
        $("#mform").attr('action', url);
        $("#suggesstion").hide();
        }
        
        function selectCountrym(val) {
            // alert('pk');
        $("#search-box").val(val);
        var id = $("#music_id").val();
        var name = $("#search-box").val();
        var url = "musician/"+id+"?search="+name
        $("#mform").attr('action', url);
        $("#suggesstion-box").hide();
        }
</script>

<script>
    $(document).ready(function(){
        $(document).on('click', ".selectshare", function(event){
        var mname = $(this).text();
        // alert(mname);
		$.ajax({
		type: "POST",
		url: "/musicstorage/musicianid",
		data:'keyword='+mname,
		
		success: function(data){
	        console.log(data);
			$("#musician_id").val(data);
			
			
		}
		});
	    });
    });
</script>
</div>
</body>
<script data-ad-client="ca-pub-7189947815738869" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
