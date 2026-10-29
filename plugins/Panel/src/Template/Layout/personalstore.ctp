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
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-78232309-2');
        </script>
        <?= $this->Html->charset() ?>

        <title><?php
            if (isset($title)) {
                echo $title;
            } else {
                echo $cakeTitle;
            }
            ?></title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php
        if (isset($description)) {
            echo $description;
        } else {
            echo $cakeDescription;
        }
        ?>" />
        <meta name="keyword" content="<?php
        if (isset($AmpKeyword)) {
            echo $AmpKeyword;
        }
        ?>">


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

        <?=
        $this->Html->css([
            '/bower_components/font-awesome/css/font-awesome.min',
            '/dist/css/AdminLTE.min',
            '/dist/css/skins/_all-skins.min',
            '/bower_components/morris.js/morris',
            '/bower_components/jvectormap/jquery-jvectormap',
            '/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min',
            '/bower_components/bootstrap/dist/css/bootstrap.min',
            '/bower_components/bootstrap-daterangepicker/daterangepicker',
            'custom',
            'shadow3',
            'shadow2',
            'musicbar',
            'personalstore',
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
        ])
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
    
    <style>
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: #202020;
    border-color: #333;
}

a {
    color: #ffffff;
    text-decoration: none;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #202020;
}

.nav>li>a:hover, .nav>li>a:active, .nav>li>a:focus {
    color: #f4f4f4;
    background: #202020;
}

.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 0;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
    </style>
    <body class="hold-transition layout-top-nav">
        <div>

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
                                <a href="/" class="navbar-brand"><b><img src="/img/mini-logo.png" alt="amplifihub logo" style="width:20px;"></a></b>
                          
                            <?= $this->Html->link('<i class="fa fa-shopping-cart fa-2x"></i>
<span class="badge" id="cart-mob">0</span>', ["controller" => "carts", "action" => "view"], ["class" => "pad showcart", "escape" => false]) ?>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?= $this->element('fronttopmenu2') ?>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- Content Wrapper. Contains page content -->
            <div class="african-beat-block container-fluid">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <?= $this->fetch('content') ?>
                        <!-- ./col -->
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
            <?= $this->Form->hidden('carturl', ['id' => 'carturl', 'default' => $this->Url->build(['controller' => 'carts', 'action' => 'add'])]); ?>
            <?= $this->Form->hidden('cartload', ['id' => 'cartload', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'loadcart'])]); ?>
            <?= $this->Form->hidden('licenseurl', ['id' => 'licenseurl', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'loadlicense'])]); ?>
            <?= $this->Form->hidden('infinitymystore', ['id' => 'infinitymystore', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'infinityMyStore'])]); ?>
            <?= $this->Form->hidden('infinitystore', ['id' => 'infinitystore', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'infinityStore'])]); ?>

            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
                        <div class="control-sidebar-bg"></div>
                    </div>
                    <div class="row" id="playerfooter">
                        <div class="holder-footer footer">
                            <div class="audio green-audio-player ready-player-1">
                                <div class="btn-controller"></div>
                                <div class="loading">
                                </div>
                                <a id="btnPrev" class="previous"></a>
            
                                <div class="play-pause-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                                    <path fill="#fff" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-btn__icon"/>
                                    </svg>
                                </div>
                                <a id="btnNext" class="next"></a>
                                <span class="controls__current-time current-time">0:00</span>
            
                                <div class="controls">
                                    <div class="controls__slider slider" data-direction="horizontal">
                                        <div class="controls__progress btn_progress">
                                            <div class="pin progress__pin" data-method="rewind"></div>
                                        </div>
                                    </div>
                                </div>
            
                                <span class="controls__total-time total-time">0:00</span>
            
                                <div class="volume">
                                    <div class="volume__button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path class="volume__speaker" fill="#fff" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z"/>
                                        </svg>
                                    </div>
                                    <div class="volume__controls hidden">
                                        <div class="volume__slider slider" data-direction="vertical">
                                            <div class="volume__progress btn_progress">
                                                <div class="pin volume__pin" data-method="changeVolume"></div>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                                <audio>
                                    <source id="audio1" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>

<!--            <div class="row" id="playerfooter">
                <div class="col-lg-1">
                    <img class="cover" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-cover.png" alt="">
                </div
                <div class="col-xs-12 col-lg-12">
                    <div id="mainwrap">
                        <div id="nowPlay">
                            <span class="left" id="npAction">Paused...</span>
                            <span class="right" id="npTitle"></span>
                        </div>
                        <div id="audiowrap">
                            <div id="audio0">
                                <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                            </div>

                            <a id="btnPrev"><i class="fa fa-backward"></i></a>
                            <a id="btnNext"><i class="fa fa-forward"></i></a>

                        </div>
                        <div id="plwrap">

                        </div>
                    </div>
                    <div class="audio-player">
                        <audio id="audio-player" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/beat_name/Kiss-Daniel-Sofa.mp3" type="audio/mp3" controls="controls"></audio>
                    </div>
                </div>-->
            </div>


            <!-- ./wrapper -->
            <?=
            $this->Html->script([
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
                '/bower_components/jquery-slimscroll/jquery.slimscroll.min',
                '/bower_components/fastclick/lib/fastclick',
                '/dist/js/adminlte.min',
                '/dist/js/pages/dashboard',
                '/js/musicbar',
                '/dist/js/demo'
            ])
            ?>
            <script type="text/javascript">
                function cartBtn(e) {
                    $(e).parent().next().toggle(300);
                }
                function playBtn(e) {
                    var $this = $(e);
                    var data = $(e).attr('data-id');
                    var dataType = $(e).attr('data-type');
                    var dataName = $(e).attr('data-name');
                    var dataUser = $(e).attr('data-user');
                    var title = document.getElementById('npTitle');
                    var titleContent = dataName + ".. By " + dataUser + "..";
                    $(title).html(titleContent);
                    var audio = document.getElementById('audio1');
                    $(audio).attr('src', data);
                    var aud = new GreenAudioPlayer('.ready-player-1');
                    aud.play();
                    //                audio.currentTime = 0;
                    $('.play-wrap').removeClass('hide').addClass('show');
                    $('.pause-wrap').removeClass('show').addClass('hide');
                    $this.removeClass('show').addClass('hide');
                    $this.closest('.control-wrap').find('.pause-wrap').removeClass('hide').addClass('show');
                }

                function pauseBtn(e) {
                    var $this = $(e);
                    var audio = document.getElementById('audio1');
                    audio.pause();
                    $this.removeClass('show').addClass('hide');
                    $this.closest('.control-wrap').find('.play-wrap').removeClass('hide').addClass('show');
                }
                function addToCart(e) {
                    var tis = $(e),
                            url = $('#carturl').val(),
                            id = tis.attr('id'),
                            price = tis.attr('data'),
                            license = tis.attr('data1'),
                            trans_ref = 'beatstore-' + Math.floor((Math.random() * 1000000000) + 1);
                    $.post(url, {id: id, price: price, license: license, trans_ref: trans_ref}, function (data) {
                        $('#cart-counter').text(data);
                        $('#cart-mob').text(data);
                    });

                }
                $('#mystoreHolder').scroll(function () {
                    if ($(this)[0].scrollHeight - $(this).scrollTop() == $(this).outerHeight()) {
                        var url = $('#infinitymystore').val();
                        var last_id = $(".beatslist:last").attr("id");
                        var store_name = $('#storeName').text();
                        $('#ajax-load').show();
                        $.ajax({
                            url: url + '?id=' + last_id + '&store=' + store_name,
                            error: function () {
                                // $('#info').html('<p>An error has occurred</p>');
                            },
                            // dataType: 'jsonp',
                            success: function (data) {
                                //console.log(data);
                                $('#ajax-load').delay(1000).hide();
                                var value = jQuery.parseJSON(data);
                                console.log(value.length);
                                if (value.length > 0) {
                                    jQuery.each(value, function (i, val) {
                                        console.log(val.user.fullname);
                                        $('#mystoreHolder')
                                                .append(
                                                        "<div class='row shopList beatslist'\n\
                                                            id=" + val.id + " style='padding: 0px 30px 0px 0px;'><div class='row white'>" +
                                                        "<div class='col-xs-2 col-sm-1 col-md-1 beat_image'>" +
                                                        "<div class='control-wrap'><a onclick='playBtn(this)' data-id='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" + val.lease_name + "' data-type='"
                                                        + val.lease_type + "' data-name='" + val.name.substr(0, 10) + "' data-user='" +
                                                        val.user.fullname.substr(0, 10) + "' class='play-wrap show'>" +
                                                        "<img src='/img/video-play-128.png' class='img-responsive play'</a>" +
                                                        "<a class='pause-wrap hide' onclick='pauseBtn(this)'><img src='/img/pause-128.png' class='img-responsive pause'/></a>"
                                                        + "</div></div><div class='col-xs-5 col-md-2 coverImage'>"
                                                        + "<img src='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/" + val.cover + "' class='img-responsive'></div>" +
                                                        "<div class='col-xs-6 col-sm-5 col-md-6 beat_name'><div class='row'>\n\
                                                            <div class='col-xs-12 col-sm-12 col-md-6'><h4 style='margin-top:11px'>" +
                                                        ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + "</h4><h6 class='remove-pad' style='margin-top: 15px;padding: 0px;color: #959595;'>"
                                                        + val.genre.genre + "||" + val.bpm + "bpm</h6></div> <div class='col-xs-12 col-sm-12 col-md-6'>" +
                                                        "<div class='priceAndCart'><div class='col-xs-6 col-sm-6 col-md-3 genre'>"
                                                        + "<h6>" + "<a href='/mystore/" + val.user.aka + "'> By " + val.user.aka + "</a>"
                                                        + "</h6></div></div></div></div></div>"
                                                        + "<div class='col-xs-4 col-md-3 cartbuy cart_and_price'>" + ""
                                                        + "<a class='btn btn-primary btn-danger btn-cart' onclick='cartBtn(this)'><span class='glyphicon glyphicon-shopping-cart'></span> &nbsp; &#8358;" + (val.lease_price ? val.lease_price.toLocaleString() : '0') + "+ </a>" + "</div>"
                                                        + "<div class='col-xs-12 col-md-12 licence' style='display:none;margin-top: 21px;'>"
                                                        + "<div class='row'>" +
                                                        "<div class='col-xs-6 col-md-4' style='padding: 0px'>\n\
                                                        <div class='invisiblePrices'>"
                                                        + ((val.lease_price === "") ? '<strong class="priceHolderList"> Lease:</strong> free<br/>' + "<a href='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" + val.lease_name + "' target='_blank' download> Free download </a>" : '<strong class="priceHolderList"> Lease:</strong> &#8358;' + val.lease_price +
                                                                '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id + '" data=" ' + val.lease_price +
                                                                '" data1 = "lease"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>') +
                                                        "</div></div>"
                                                        + "<div class='col-xs-6 col-md-4' style='padding: 0px'>" +
                                                        "<div class=" + ((val.premium_price === "" || val.premium_price === "0") ? '' : 'invisiblePrices') + ">" +
                                                        ((val.premium_price === "") ? '' : '<strong class="priceHolderList"> Premium:</strong> &#8358;' +
                                                                val.premium_price + '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id
                                                                + '" data=" ' + val.premium_price +
                                                                '" data1 = "premium"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>')
                                                        + "</div></div>" +
                                                        "<div class='col-xs-6 col-md-4' style='padding: 0px'>" +
                                                        "<div class="
                                                        + ((val.exclusive_price === "" || val.exclusive_price === "0") ? '' : 'invisiblePrices')
                                                        + ">" +
                                                        ((val.exclusive_price === "") ? '' : '<strong class="priceHolderList"> Exclusive:</strong> &#8358;' +
                                                                val.exclusive_price + '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id
                                                                + '" data=" ' + val.exclusive_price +
                                                                '" data1 = "exclusive"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br/>')
                                                        + "</div></div>" +
                                                        "</div></div></div></div>");
                                    });
                                } else {
                                    $('#noBeats').show().delay(2000).fadeOut();
                                }
                            },
                            type: 'GET'
                        });


                    }
                });

                $('#storeHolder').scroll(function () {
                    if ($(this)[0].scrollHeight - $(this).scrollTop() == $(this).outerHeight()) {
                        var url = $('#infinitystore').val();
                        var last_id = $(".beatslist:last").attr("id");
                        //var url = 'infinity-scroll?id='+ last_id + '&store=' + store_name;
                        console.log(url + '?id=' + last_id);
                        $('#ajax-load').show();

                        $.ajax({
                            url: url + '?id=' + last_id,
                            error: function () {
                                // $('#info').html('<p>An error has occurred</p>');
                            },
                            // dataType: 'jsonp',
                            success: function (data) {
                                $('#ajax-load').delay(1000).hide();
                                var value = jQuery.parseJSON(data);
                                console.log(value.length);
                                if (value.length > 0) {
                                    jQuery.each(value, function (i, val) {
                                        $('#storeHolder')
                                                .append(
                                                        "<div class='row shopList beatslist'\n\
     id=" + val.id + " style='padding: 0px 30px 0px 0px;'><div class='row white'>" +
                                                        "<div class='col-xs-2 col-sm-1 col-md-1 beat_image'>" +
                                                        "<div class='control-wrap'><a onclick='playBtn(this)' data-id='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" + val.lease_name + "' data-type='"
                                                        + val.lease_type + "' data-name='" + val.name.substr(0, 10) + "' data-user='" +
                                                        val.user.fullname.substr(0, 10) + "' class='play-wrap show'>" +
                                                        "<img src='/img/video-play-128.png' class='img-responsive play'</a>" +
                                                        "<a class='pause-wrap hide' onclick='pauseBtn(this)'><img src='/img/pause-128.png' class='img-responsive pause'/></a>"
                                                        + "</div></div><div class='col-xs-5 col-md-2 coverImage'>"
                                                        + "<img src='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/" + val.cover + "' class='img-responsive'></div>" +
                                                        "<div class='col-xs-6 col-sm-5 col-md-6 beat_name'><div class='row'>\n\
         <div class='col-xs-12 col-sm-12 col-md-6'><h4 style='margin-top:11px'>" +
                                                        ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + "</h4><h6 class='remove-pad' style='margin-top: 15px;padding: 0px;color: #959595;'>"
                                                        + val.genre.genre + "||" + val.bpm + "bpm</h6></div> <div class='col-xs-12 col-sm-12 col-md-6'>" +
                                                        "<div class='priceAndCart'><div class='col-xs-6 col-sm-6 col-md-3 genre'>"
                                                        + "<h6>" + "<a href='/mystore/" + val.user.aka + "'> By " + val.user.aka + "</a>"
                                                        + "</h6></div></div></div></div></div>"
                                                        + "<div class='col-xs-4 col-md-3 cartbuy cart_and_price'>" + ""
                                                        + "<a class='btn btn-primary btn-danger btn-cart' onclick='cartBtn(this)'><span class='glyphicon glyphicon-shopping-cart'></span> &nbsp; &#8358;" + (val.lease_price ? val.lease_price.toLocaleString() : '0') + "+ </a>" + "</div>"
                                                        + "<div class='col-xs-12 col-md-12 licence' style='display:none;margin-top: 21px;'>"
                                                        + "<div class='row'>" +
                                                        "<div class='col-xs-6 col-md-4' style='padding: 0px'>\n\
                   <div class='invisiblePrices'>"
                                                        + ((val.lease_price === "") ? '<strong class="priceHolderList"> Lease:</strong> free<br/>' + "<a href='https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" + val.lease_name + "' target='_blank' download> Free download </a>" : '<strong class="priceHolderList"> Lease:</strong> &#8358;' + val.lease_price +
                                                                '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id + '" data=" ' + val.lease_price +
                                                                '" data1 = "lease"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>') +
                                                        "</div></div>"
                                                        + "<div class='col-xs-6 col-md-4' style='padding: 0px'>" +
                                                        "<div class=" + ((val.premium_price === "" || val.premium_price === "0") ? '' : 'invisiblePrices') + ">" +
                                                        ((val.premium_price === "") ? '' : '<strong class="priceHolderList"> Premium:</strong> &#8358;' +
                                                                val.premium_price + '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id
                                                                + '" data=" ' + val.premium_price +
                                                                '" data1 = "premium"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>')
                                                        + "</div></div>" +
                                                        "<div class='col-xs-6 col-md-4' style='padding: 0px'>" +
                                                        "<div class="
                                                        + ((val.exclusive_price === "" || val.exclusive_price === "0") ? '' : 'invisiblePrices')
                                                        + ">" +
                                                        ((val.exclusive_price === "") ? '' : '<strong class="priceHolderList"> Exclusive:</strong> &#8358;' +
                                                                val.exclusive_price + '<br/><span onclick="addToCart(this)" class="badge addcart" id="' + val.id
                                                                + '" data=" ' + val.exclusive_price +
                                                                '" data1 = "exclusive"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br/>')
                                                        + "</div></div>" +
                                                        "</div></div></div></div>");
                                    });
                                } else {
                                    $('#noBeats').show().delay(2000).fadeOut();
                                }
                            },
                            type: 'GET'
                        });


                    }
                });
            </script>

            <script type="text/javascript">

                $('#beatbtn').click(function () {
                    //("Am here beats");
                    $("#mixbtn").removeClass("btn-black-active");
                    $(this).addClass("btn-black-active");
                    $('#mixingcontent').hide();
                    $('#beatscontent').show();
                });

                $('#mixbtn').click(function () {
                    //alert("Am here mix");
                    $('#beatbtn').removeClass("btn-black-active");
                    $(this).addClass("btn-black-active");
                    $('#beatscontent').hide();
                    $('#mixingcontent').show();
                });

                setInterval(function () {
                    var url = $('#cartload').val();
                    //console.log(url);
                    $('#cart-wrap').load(url).fadeIn('slow');
                }, 1000);


                $(".addtocart").click(function () {
                    var url = $('#licenseurl').val();
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url: url,
                        data: {
                            id: id
                        },
                        error: function () {
                            // $('#info').html('<p>An error has occurred</p>');
                        },
                        // dataType: 'jsonp',
                        success: function (data) {
                            //console.log(data);
                            var value = jQuery.parseJSON(data);
                            //   console.log(value);
                            if (value[0]['lease_price'].length) {
                                $('#lease').html("<strong> Lease:</strong> &#8358;" + value[0]['lease_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['lease_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                            }
                            if (value[0]['premium_price'].length) {
                                $('#premium').html("<strong> Premium:</strong> &#8358;" + value[0]['premium_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['premium_price'] + "' data1 = 'premium'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                            }

                            if (value[0]['exclusive_price'].length) {
                                $('#exclusive').html("<strong> Exclusive:</strong> &#8358;" + value[0]['exclusive_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['exclusive_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                            }
                            //console.log(value);
                            //console.log(value[0]['id']);

                            setTimeout(function () {
                                $("#myModal").modal();

                            }, 1000);
                        },
                        type: 'GET'
                    });





                });



                $('#genre').change(function () {
                    var value = $(this).val(); // get selected value
                    if (value) { // require a URL
                        window.location = 'beat-hub?genre=' + value; // redirect
                    } else {
                        window.location = 'beat-hub'; // redirect

                    }
                });


                $('#genre1').change(function () {
                    var value = $(this).val(); // get selected value
                    var winLocation = window.location.href;
                    if (value) { // require a URL
                        window.location = location.protocol + "//" + location.host + location.pathname + '?genre=' + value; // redirect
                    } else {
                        window.location = winLocation; // redirect

                    }
                });



                $(".pause-wrap").each(function (index) {
                    $(this).on("click", function (e) {
                        e.preventDefault();
                        var $this = $(this);
                        var audio = document.getElementById('audio1');
                        audio.pause();

                        $this.removeClass('show').addClass('hide');
                        $this.closest('.control-wrap').find('.play-wrap').removeClass('hide').addClass('show');


                    });

                });

                $(".play-wrap").each(function (index) {
                    $(this).on("click", function (e) {
                        e.preventDefault();
                        var $this = $(this);
                        var data = $(this).attr('data-id');
                        var dataType = $(this).attr('data-type');
                        var dataName = $(this).attr('data-name');
                        var dataUser = $(this).attr('data-user');
                        var title = document.getElementById('npTitle');
                        var titleContent = dataName + ".. By " + dataUser + "..";

                        $(title).html(titleContent);


                        var audio = document.getElementById('audio1');
                        $(audio).attr('src', data);
                        var aud = new GreenAudioPlayer('.ready-player-1');
                        aud.play();

                        //$('.play-wrap').removeClass('hide').addClass('show');
                        //$('.pause-wrap').removeClass('show').addClass('hide');
                        //$this.removeClass('show').addClass('hide');
                        $this.closest('.control-wrap').find('.pause-wrap').removeClass('hide').addClass('show');

                    });
                });
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script type="text/javascript">
                jQuery('#term').autocomplete({
                    source: 'Stores/getAllBeats',
                    minLength: 2
                });

                jQuery('#term1').autocomplete({
                    source: 'Mixmasterings/getAllMixers',
                    minLength: 2
                });


                jQuery('#term2').autocomplete({
                    source: 'Stores/getAllUserBeats?name=<?php echo $userProfile[0]['aka']; ?>',
                    minLength: 2
                });





            </script>

            <script>




                $(document).ready(function () {
                    $('.load').click(function () {
                        $(this).addClass('hide').next().removeClass('hide');
                        var x = $(this).attr('id');
                        player.setSrc(x);
                    });

                    //  $('.pause').click(function(){
                    //    $(this).addClass('hide').next().removeClass('hide');
                    //  })
                    //
                    //  $('.play').click(function(){
                    //    $(this).addClass('hide').parent().find('.pause').removeClass('hide');
                    //  })

                    //                $('.licence').hide();
                    $('.cartbuy').on('click', toggleWrapper)
                    function toggleWrapper() {
                        var div = $(this).parents('.beat-row-wrapper')[0];
                        // console.log(div,);
                        if ($(div).hasClass('expanded')) {
                            $('.beat-row-wrapper').removeClass('expanded');
                            $('.license-drawer').removeClass('license-drawer-open');
                        } else {

                            $('.beat-row-wrapper').removeClass('expanded');
                            $('.license-drawer').removeClass('license-drawer-open');
                            $(div).addClass('expanded');
                            $(div).children('.license-drawer').addClass('license-drawer-open');
                        }
                    }
                    //                $('.cartbuy').click(function (e) {
                    //                    e.preventDefault();
                    //                    $(this).parent().find('.licence').toggle(300);
                    //                });



                    if (true) {

                    } else {

                    }

                    //  $('.addcart').click(function(e){
                    //    e.preventDefault();
                    //    $('.cart').addClass('show').removeClass('hide');
                    //  })




                    $('.addtocart').click(function (e) {
                        e.preventDefault();
                        console.log("am in here cart");

                        var tis = $(this),
                                url = $('#carturl').val(),
                                id = tis.attr('id'),
                                price = tis.attr('data'),
                                license = tis.attr('data1'),
                                trans_ref = 'beatstore-' + Math.floor((Math.random() * 1000000000) + 1);
                        //alert(id);
                        $.post(url, {id: id, price: price, license: license, trans_ref: trans_ref}, function (data) {
                            $('#cart-counter').text(data);
                            $('#cart-mob').text(data);
                        });
                    });


                });


                $(document).on('click', '.addcart1', function () {

                    console.log("Am in here like now");
                    var tis = $(this),
                            url = $('#carturl').val(),
                            id = tis.attr('id'),
                            price = tis.attr('data'),
                            license = tis.attr('data1'),
                            trans_ref = 'beatstore-' + Math.floor((Math.random() * 1000000000) + 1);
                    //alert(id);
                    $.post(url, {id: id, price: price, license: license, trans_ref: trans_ref}, function (data) {
                        console.log("Am here too");
                        $('#cart-counter').text(data);
                        $('#cart-mob').text(data);
                        $('#message').fadeIn(100).delay(1000).fadeOut(100);
                    });
                });


            </script>
            <script type="text/javascript">
                $('.tabgroup > div').hide();
                $('.tabgroup > div:first-of-type').show();
                $('.tabs a').click(function (e) {
                    e.preventDefault();
                    var $this = $(this),
                            tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
                            others = $this.closest('li').siblings().children('a'),
                            target = $this.attr('href');
                    others.removeClass('active');
                    $this.addClass('active');
                    $(tabgroup).children('div').hide();
                    $(target).show();

                });
                $(document).on('click', '#addacomment', function (e) {

                    $('#addcomment').toggle();
                });

            </script>

            <script type="text/javascript">


                //            jQuery(function ($) {
                //                'use strict'
                //                var supportsAudio = !!document.createElement('audio').canPlayType;
                //<?php
            $tracks = [];
            foreach ($promoted1 as $key => $promo) {
                $tracks[] = array('track' => ($key + 1), 'name' => substr($promo->name, 0, 10) . " by " . substr($promo->user->fullname, 0, 10), 'duration' => $promo->length, 'file' => pathinfo($promo->lease_name, PATHINFO_FILENAME));
            }
            ?>//
                //                if (supportsAudio) {
                //                    var index = 0,
                //                            playing = false,
                //                            mediaPath = 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/',
                //                            extension = '',
                //                            tracks = <?php echo json_encode($tracks); ?>,
                //                            buildPlaylist = $(tracks).each(function (key, value) {
                //                        var trackNumber = value.track,
                //                                trackName = value.name,
                //                                trackDuration = value.duration;
                //                        if (trackNumber.toString().length === 1) {
                //                            trackNumber = '0' + trackNumber;
                //                        }
                //                        $('#plList').append('<li><div class="plItem"><span class="plNum">' + trackNumber + '.</span><span class="plTitle" id="plt">' + trackName + '</span><span class="plLength">' + trackDuration + '</span></div></li>');
                //                    }),
                //                            trackCount = tracks.length,
                //                            npAction = $('#npAction'),
                //                            npTitle = $('#npTitle'),
                //                            audio = $('#audio1').on('play', function () {
                //                        playing = true;
                //                        npAction.text('Now Playing...');
                //                    }).on('pause', function () {
                //                        playing = false;
                //                        npAction.text('Paused...');
                //                    }).on('ended', function () {
                //                        npAction.text('Paused...');
                //                        if ((index + 1) < trackCount) {
                //                            index++;
                //                            loadTrack(index);
                //                            audio.play();
                //                        } else {
                //                            audio.pause();
                //                            index = 0;
                //                            loadTrack(index);
                //                        }
                //                    }).get(0),
                //                            btnPrev = $('#btnPrev').on('click', function () {
                //                        if ((index - 1) > -1) {
                //                            index--;
                //                            loadTrack(index);
                //                            if (playing) {
                //                                audio.play();
                //                            }
                //                        } else {
                //                            audio.pause();
                //                            index = 0;
                //                            loadTrack(index);
                //                        }
                //                    }),
                //                            btnNext = $('#btnNext').on('click', function () {
                //                        if ((index + 1) < trackCount) {
                //                            index++;
                //                            loadTrack(index);
                //                            if (playing) {
                //                                audio.play();
                //                            }
                //                        } else {
                //                            audio.pause();
                //                            index = 0;
                //                            loadTrack(index);
                //                        }
                //                    }),
                //                            li = $('#plList li').on('click', function () {
                //                        var id = parseInt($(this).index());
                //                        if (id !== index) {
                //                            playTrack(id);
                //                        }
                //                    }),
                //                            loadTrack = function (id) {
                //                                $('.plSel').removeClass('plSel');
                //                                $('#plList li:eq(' + id + ')').addClass('plSel');
                //                                if (id) {
                //                                    npTitle.text(tracks[id].name);
                //                                }
                //                                npTitle.text("No Audio selected yet");
                //                                index = id;
                //                                audio.src = mediaPath + tracks[id].file + extension;
                //                            },
                //                            playTrack = function (id) {
                //                                loadTrack(id);
                //                                audio.play();
                //                            };
                //                    extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
                //                    loadTrack(index);
                //                }
                //            });

                // initialize plyr
                //            plyr.setup($('#audio1'), {});



            </script>
    </body>
</html>

