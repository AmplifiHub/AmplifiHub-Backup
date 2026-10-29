<?php
$cakeTitle = isset($userProfile->aka) ? 'AmplifiHub : '. $userProfile->aka . ' Beat Store' : 'AmplifiHub :';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
//exit;
// new layout
?>
<!DOCTYPE html>
<html lang="en">
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
        <title>Checkout Page - AmplifiHub</title>

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
            '/bower_components/Ionicons/css/ionicons.min',
            '/dist/css/AdminLTE.min',
            '/dist/css/skins/_all-skins.min',
            '/bower_components/bootstrap/dist/css/bootstrap.min',
            'custom',
            'shadow3',
            'shadow2',
            'musicbar',
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
        ]);
        ?>
        <?= $this->Html->script('rmodal') ?>
        <?= $this->Html->css('animate') ?>
        <?= $this->Html->css('rmodal') ?>
        <?= $this->Html->script('rmodal') ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css') ?>

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css'>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <? // =$this->Html->css('mainv2') ?>
        <?php echo $this->Html->css('headerstyle.css?'.time()); ?>
        <link rel="stylesheet" type="text/css" href="/css/mainv2.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
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
    </style>
    </head>
    <body>
        <div id="wrapper">
             <header class="header" style="position: relative;max-height: 100px;z-index: 1030;position: fixed;">
                <input class="menu-btn" type="checkbox" id="menu-btn">
                <?= $this->Html->link($this->Html->image('amplifihub-logo.png'), '/', ['class' => 'logo', 'alt' =>'amplifihub logo', 'escape' => false]) ?>
                 <a href="/carts/view" class="my-cart on-lg">
                     <i class="fa fa-shopping-cart fa-2x text-dark"></i>
                     <span class="badge" id=""><?php
                         $cart = $this->request->session()->read('cart');
                         echo count($cart);?></span>
                 </a>
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul class="headermenu">
                    <?= $this->element('fronttopmenusample') ?>
                </ul>
                 <?php
                $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                if($uriSegments[1] == 'beat-hub'):
                ?>
                 <div class="div-playlist-btn">
                     <span>
                <a href="javascript:void(0);" id="btn-scroll-playlist" class="btn btn-secondary" style="font-size:12px; margin-left:50px;">Go-To Playlist <i class="fa fa-arrow-down" aria-hidden="true"></i>
</a>
                     </span>
                </div>
                <?php endif; ?>
              </header>
<!--                <header id="header" class="main-header">-->
<!--                    <nav class="navbar navbar-static-top white 5" style="background-color: rgb(0,0,0); margin-left:0px">-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="navbar-header">-->
<!--                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--                                    <span class="sr-only">Toggle navigation</span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                    <span class="icon-bar"></span>-->
<!--                                </button>-->
<!--                                --><?//= $this->Html->link($this->Html->image('amplifihublogo.png', ['class' => 'img-responsive', 'id' => 'amplifiLogo']), '/', ['class' => '', 'style' => 'display:inline-block', 'escape' => false]) ?>
<!--                                --><?//= $this->Html->link('<i class="fa fa-shopping-cart fa-2x"></i><span class="badge" id="cart-mob">0</span>', ["controller" => "carts", "action" => "view"], ["class" => "pad showcart", "escape" => false]) ?>
<!--                            </div>-->
<!--                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--                                --><?//= $this->element('fronttopmenu') ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </nav>-->
<!--                </header>-->
            <main id="main">


                <?= $this->fetch('content') ?>
            </main>
            <footer id="footer">
                <?= $this->element('newfooter') ?>
            </footer>

        </div>
        <div class="holder-footer footer">
            <div class="audio green-audio-player ready-player-1">
                <div class="btn-controller"></div>
                <div class="loading">
                    <!--<div class="loading__spinner"></div>-->
                </div>
                <div class="previous previous-btn">

                </div>

                <div class="play-pause-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path fill="#fff" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-btn__icon"/>
                    </svg>
                </div>

                <div class="next next-btn" onclick="nextMusic()">

                </div>
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
        <?= $this->Form->hidden('carturl', ['id' => 'carturl', 'default' => $this->Url->build(['controller' => 'carts', 'action' => 'add'])]); ?>
        <?= $this->Form->hidden('cartload', ['id' => 'cartload', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'loadcart'])]); ?>
        <?= $this->Form->hidden('licenseurl', ['id' => 'licenseurl', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'loadlicense'])]); ?>
        <?= $this->Form->hidden('infinitymystore', ['id' => 'infinitymystore', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'infinityMyStore'])]); ?>
        <?= $this->Form->hidden('infinitystore', ['id' => 'infinitystore', 'default' => $this->Url->build(['controller' => 'stores', 'action' => 'infinityStore'])]); ?>
        <div id="modal" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        <div class="modal-header">
                            <strong>Select a Package </strong>
                        </div>

                        <div class="modal-body">
                            <div id="message" style="display: none;">
                                <div class="alert alert-success">
                                    <p>Successfully added you can continue shopping</p>

                                </div>
                            </div>
                            <div class="row" style="padding: 0px 15px;">

                                <div class="col-xs-6 col-md-4" style="padding: 0px" id="lease">
                                </div>
                                <!--<div class="col-xs-6 col-md-4" style="padding: 0px" id="premium">
                                </div>-->
                                <div class="col-xs-6 col-md-4" style="padding: 0px;" id="exclusive">
                                </div>
                                <div class="col-xs-6 col-md-4" style="padding: 0px;" id="work_hire">
                                </div>
                            </div>
                            
                            <!--<div class="row" style="padding: 20px 15px 0px 15px;" id="work_hire">
                                
                            </div>-->
                            
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modal.close();return false;">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="modal2" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        <?php if($this->request->data['contract'] == 1){ ?>
                        <div class="modal-header">
                            <strong>Success</strong>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="padding: 0px 15px;">
                                <div class="col-xs-12 col-md-12" style="padding: 0px">
                                    Successfully added beat to cart
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modal2.close();return false;">
                                Close
                            </button>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="modal3" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        
                        <div class="modal-header">
                            <strong>Work For Hire</strong>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="padding: 0px 15px;">
                                <div class="col-xs-12 col-md-12" style="padding: 0px">
                                    Negotiate with the producer to come up with a comfortable fee and agreement. 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modal3.close();return false;">
                                Close
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <div id="modal4" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        
                        <div class="modal-header">
                            <strong>Non-Exclusive</strong>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="padding: 0px 15px;">
                                <div class="col-xs-12 col-md-12" style="padding: 0px">
                                    A Non-Exclusive Licence grants to the Buyer(licensee) the right to use the beat, but means that the Producer(licensor) remains free to exploit the same beat and to allow any number of other Buyers(licensees) to also exploit the same beat. 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modal4.close();return false;">
                                Close
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
        <div id="modal5" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        
                        <div class="modal-header">
                            <strong>Exclusive</strong>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="padding: 0px 15px;">
                                <div class="col-xs-12 col-md-12" style="padding: 0px">
                                    An Exclusive Licence means that no person or company other than the named Buyer(licensee) can exploit the beat rights.  Importantly, the Producer(licensor) is also excluded from exploiting the beat rights.
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modal5.close();return false;">
                                Close
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </body>
    <?=
    $this->Html->script([
        '/bower_components/jquery-ui/jquery-ui.min',
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',
        '/bower_components/moment/min/moment.min',
        '/bower_components/bootstrap/dist/js/bootstrap.min',
        '/bower_components/raphael/raphael.min',
        '/bower_components/morris.js/morris.min',
        '/bower_components/jquery-sparkline/dist/jquery.sparkline.min',
        '/bower_components/jquery-slimscroll/jquery.slimscroll.min',
        '/bower_components/fastclick/lib/fastclick',
        '/dist/js/adminlte.min',
        '/js/musicbar',
    ])
    ?>

    <script src="/js/new-design.js" defer></script>
    <script type="text/javascript">
                                        $(document).ready(function () {
                                            initFitVids();
                                            $('.load').click(function () {
                                                $(this).addClass('hide').next().removeClass('hide');
                                                var x = $(this).attr('id');
                                                player.setSrc(x);
                                            });
                                            $('.licence').hide();
                                            $('.cartbuy').click(function (e) {
                                                e.preventDefault();
                                                $(this).parent().find('.licence').toggle(300);
                                            });
                                        });
                                        function playMusic() {
                                            $("a.play-wrap").on('click', function (e) {
                                                e.preventDefault();
                                                var $this = $(this);
                                                var data = $(this).attr('data-id');
                                                var dataType = $(this).attr('data-type');
                                                var dataName = $(this).attr('data-name');
                                                var dataUser = $(this).attr('data-user');
                                                var title = document.getElementById('npTitle');
                                                var titleContent = dataName + ".. By " + dataUser + "..";
                                                var bitId = $(this).attr('bit-id');
                                                //alert(bitId);
                                                bitPlayont(bitId);
                                                $(title).html(titleContent);
                                                var audio = document.getElementById('audio1');
                                                $(audio).attr('src', data);

                                                var aud = new GreenAudioPlayer('.ready-player-1');
                                                aud.togglePlay();
                                                $('.play-wrap').removeClass('hide').addClass('show');
                                                $('.pause-wrap').removeClass('show').addClass('hide');
                                                $this.removeClass('show').addClass('hide');
                                                $this.closest('.control-wrap').find('.pause-wrap').removeClass('hide').addClass('show');

                                            });
                                        }

                                        function pauseMusic() {
                                            $("a.pause-wrap").on('click', function (e) {
                                                e.preventDefault();

                                                var $this = $(this);
                                                var aud = new GreenAudioPlayer('.ready-player-1');
                                                aud.pause();
                                                $this.removeClass('show').addClass('hide');
                                                $this.closest('.control-wrap').find('.play-wrap').removeClass('hide').addClass('show');
                                            });
                                        }

                                        function nextMusic() {
                                            $(".next-btn").on('click', function (e) {
                                               e.preventDefault();

                                                var $this = $(this);
                                                var aud = new GreenAudioPlayer('.ready-player-1');
                                                //alert(aud);
                                                $this.removeClass('show').addClass('hide');
                                                $this.closest('.control-wrap').find('.play-wrap').removeClass('hide').addClass('show');
                                            });
                                        }

                                        function cartBtn(e) {
                                            $(e).parent().next().toggle(300);
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
                                        var $contentLoadTriggered = false;
                                        $('#mystoreHolder').scroll(function () {
                                            if ($contentLoadTriggered == false) {
                                                $contentLoadTriggered = true;
                                                var url = $('#infinitymystore').val();
                                                var last_id = $(".beatslist:last").attr("id");
                                                var store_name = $('#storeName').text();
                                                var store_name = $('#storeName').val();
                                                //var url = 'infinity-scroll?id='+ last_id + '&store=' + store_name;
                                                $('#ajax-load').show();

                                                $.ajax({
                                                    url: url + '?id=' + last_id + '&store=' + store_name,
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                    // dataType: 'jsonp',
                                                    success: function (data) {
                                                        $('#ajax-load').delay(1000).hide();
                                                        var value = jQuery.parseJSON(data);
                                                        if (value.length > 0) {
                                                            jQuery.each(value, function (i, val) {
                                                                if (!val.cover) {
                                                                    var coverImage = "/img/default_cover_image.jpg";
                                                                } else {
                                                                    var coverImage = 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-' + val.cover;
                                                                }
                                                                var oldString=val.user.aka;
                                                                   //var oldString="my test";
                                                                   //alert(oldString);
                                                                   var string1=oldString.replace(" ", "-");
                                                                   //alert(string1);
                                                                $('#mystoreHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" data-user="' + val.user.fullname.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span> <span class="product"><a href="/mystore/' + string1 + '">' + val.user.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val.user.aka + '</a></span> </td><td> <a class="btn addtocart" data-id="' + val.id + '"> <i class="fa fa-shopping-cart"> </i> ₦' + number_format(val.lease_price) + '+</a> </td></tr>');
                                                            });
                                                            $contentLoadTriggered = false;
                                                            playMusic();
                                                            pauseMusic();
                                                            addToCartEvent();
                                                            addToCartFreeDownload();
                                                        } else {
                                                            $('#noBeats').show().delay(2000).fadeOut();
                                                        }
                                                    },
                                                    type: 'GET'
                                                });
                                            }
                                        });
                                        var $contentLoadTriggered = false;
                                        $("#storeHolder").on('scroll', function () {
                                            <?php
                                                $userid = $this->request->session()->read('Auth.User.id');
                                             ?>
                                            if ($contentLoadTriggered == false) {
                                                $contentLoadTriggered = true;
                                                var url = $('#infinitystore').val();
                                                var last_id = $(".beatslist:last").attr("id");
                                                //var url = 'infinity-scroll?id='+ last_id + '&store=' + store_name;
                                                $('#ajax-load').show();

                                                $.ajax({
                                                    url: url + '?id=' + last_id,
                                                    error: function () {
                                                    },

                                                    success: function (data) {
                                                        $('#ajax-load').delay(1000).hide();
                                                        var value = jQuery.parseJSON(data);
                                                        if (value.length > 0) {
                                                            jQuery.each(value, function (i, val) {
                                                                if (!val.cover) {
                                                                    var coverImage = "/img/default_cover_image.jpg";
                                                                } else {
                                                                    var coverImage = 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-' + val.cover;
                                                                }
                                                                if (!val.lease_price) {
                                                                   var oldString=val._matchingData.Users.aka;
                                                                   //var oldString="my test";
                                                                   //alert(oldString);
                                                                   var string1=oldString.replace(" ", "-");
                                                                   //alert(string1);
                                                                    $('#storeHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat"><a href="/beat-hub-detail/'+val.id+'">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</a></span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span> </td><td> <a class="btn freedownload"><i class="fa fa-download"></i> Free Beat</a><div class="download-link"><?php if(!empty($userid)){ ?><a download="download" href="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" >Download<i class="fa fa-download"></i></a><?php }else{ ?><a style="font-size:11px; color:red;" href="/login" >Please login first to download free beat</a><?php } ?></div> </td></tr>');
                                                                } else {
                                                                     var oldString=val._matchingData.Users.aka;
                                                                   //var oldString="my test";
                                                                   //alert(oldString);
                                                                   var string1=oldString.replace(" ", "-");
                                                                    $('#storeHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat"><a href="/beat-hub-detail/'+val.id+'">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</a></span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span> </td><td> <a class="btn addtocart" data-id="' + val.id + '"> <i class="fa fa-shopping-cart"> </i> ₦' + number_format(val.lease_price) + '+</a> </td></tr>');
                                                                }
                                                            });
                                                            $contentLoadTriggered = false;
                                                            playMusic();
                                                            pauseMusic();
                                                            addToCartEvent();
                                                            addToCartFreeDownload();
                                                        } else {
                                                            $('#noBeats').show().delay(2000).fadeOut();
                                                        }

                                                    },
                                                    type: 'GET'
                                                });
                                            }
                                        });

                                        $('#beatbtn').click(function () {
                                            $("#mixbtn").removeClass("btn-black-active");
                                            $(this).addClass("btn-black-active");
                                            $('#mixingcontent').hide();
                                            $('#beatscontent').show();
                                        });

                                        $('#mixbtn').click(function () {
                                            $('#beatbtn').removeClass("btn-black-active");
                                            $(this).addClass("btn-black-active");
                                            $('#beatscontent').hide();
                                            $('#mixingcontent').show();
                                        });

                                        setInterval(function () {
                                            var url = $('#cartload').val();
                                            $('#cart-wrap').load(url).fadeIn('slow');
                                        }, 10000);

                                        var modal = new RModal(
                                                document.getElementById('modal')

                                                );

                                        var modal2 = new RModal(
                                                document.getElementById('modal2')

                                                );
                                                
                                        var modal3 = new RModal(
                                                document.getElementById('modal3')

                                                );
                                        var modal4 = new RModal(
                                                document.getElementById('modal4')

                                                );
                                        var modal5 = new RModal(
                                                document.getElementById('modal5')

                                                );
                                                
                                        function addToCartEvent() {
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
                                                        var value = jQuery.parseJSON(data);
                                                        if (value[0]['lease_price'].length) {
                                                            $('#lease').html("<strong> Non-Exclusive:</strong> &#8358;" + value[0]['lease_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['lease_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><span class='linfo' id='" + value[0]['id'] + "' data='" + value[0]['lease_price'] + "' data1 = 'lease'><i class='fa fa-info-circle ninfo' title='Info' aria-hidden='true' style='margin-left: 10px;'></i></span><br>");
                                                            // $('#lease').html("<strong> Lease:</strong> &#8358;" + value[0]['lease_price'] + "<br/><span class='btn red click-beats-btn addcart1' id='" + value[0]['id'] + "' data='" + value[0]['lease_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i><a >add to cart</a></span><br>");
                                                        }
                                                        /*if (value[0]['premium_price'].length) {
                                                            $('#premium').html("<strong> Premium:</strong> &#8358;" + value[0]['premium_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['premium_price'] + "' data1 = 'premium'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                                                        }*/

                                                        if (value[0]['exclusive_price'].length) {
                                                            $('#exclusive').html("<strong> Exclusive:</strong> &#8358;" + value[0]['exclusive_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['exclusive_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><i class='fa fa-info-circle einfo' title='Info' aria-hidden='true' style='margin-left: 10px;'></i><br>");
                                                        }
                                                        
                                                        if(value[0]['hire'] == 1){
                                                            $("#work_hire").html('');
                                                            $("#work_hire").html('<strong> Contact For Price</strong><div class="col-md-12" style="padding: 0px; " id="hire"><a href="/hire?id='+id+'" class="badge" style="color: white; background-color: #E30D40!important;"><i class ="fa fa-user-plus"></i>Work for hire</a> <i class="fa fa-info-circle winfo" title="Info" aria-hidden="true" style="margin-left: 10px;"></i></div>');
                                                            
                                                        }else{
                                                            $("#work_hire").html('');
                                                        }

                                                        setTimeout(function () {
                                                            modal.open();

                                                        }, 1000);
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }
                                        function addToCartFreeDownload() {
                                            $(".freedownload").click(function () {
                                                $(this).next('.download-link').show();
                                            });
                                        }
                                     /*   $('#genre').change(function () {
                                            var value = $(this).val(); // get selected value
                                            if (value) { // require a URL
                                                window.location = 'beat-hub?genre=' + value; // redirect
                                            } else {
                                                window.location = 'beat-hub'; // redirect

                                            }
                                        }); */
                                          $('#genre').change(function () {
                                            var value = $(this).val(); // get selected value
                                            if (value) { // require a URL
                                                window.location = 'search-result?genre=' + value; // redirect
                                            } else {
                                                window.location = 'search-result'; // redirect

                                            }
                                        });

                                         $('#genresearch').change(function () {
                                            var value = $(this).val(); // get selected value
                                            if (value) { // require a URL
                                                window.location = 'search-result?genre=' + value; // redirect
                                            } else {
                                                window.location = 'search-result'; // redirect

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
                                        jQuery('#term').autocomplete({
                                            source: 'Stores/getAllBeats',
                                            minLength: 2
                                        });
                                        jQuery('#term1').autocomplete({
                                            source: 'Mixmasterings/getAllMixers',
                                            minLength: 2
                                        });
                                        jQuery('#term2').autocomplete({
                                            source: 'Stores/getAllUserBeats?name=<?php echo!empty($userProfile[0]['aka']) ? $userProfile[0]['aka'] : ''; ?>',
                                            minLength: 2
                                        });

                                        $(document).on('click', '.addcart1', function () {
                                            var tis = $(this),
                                                    url = $('#carturl').val(),
                                                    id = tis.attr('id'),
                                                    price = tis.attr('data'),
                                                    license = tis.attr('data1'),
                                                    trans_ref = 'beatstore-' + Math.floor((Math.random() * 1000000000) + 1);
                                            $.post(url, {id: id, price: price, license: license, trans_ref: trans_ref}, function (data) {
                                                $('#cart-counter').text(data);
                                                $('#cart-mob').text(data);
                                                $('#message').fadeIn(100).delay(1000).fadeOut(100);
                                            });
                                        });
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
                                        function bitPlayont(id) {
                                            $.ajax({
                                                url: "/stores/bitPlayont",
                                                type: 'GET',
                                                data: {
                                                    id: id
                                                },
                                                error: function () {
                                                },
                                                success: function (data) {

                                                }
                                            });
                                        }
                                        playMusic();
                                        pauseMusic();
                                        nextMusic();
                                        addToCartEvent();
                                        addToCartFreeDownload();

                                        $("input[name='rating']").click(function (e) {
                                            var user_id = $('#mixeruser-id').val(),
                                                    rating = $(this).val(),
                                                    type = $('#type').val(),
                                                    url = '/ratings/add';
                                            $.post(url, {user_id: user_id, rating: rating, type: type}, function (data) {
                                                $('#rated').html(data);
                                            });
                                        });


										function number_format(number, decimals, dec_point, thousands_point) {

    if (number == null || !isFinite(number)) {
        throw new TypeError("number is not valid");
    }

    if (!decimals) {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }

    if (!dec_point) {
        dec_point = '.';
    }

    if (!thousands_point) {
        thousands_point = ',';
    }

    number = parseFloat(number).toFixed(decimals);

    number = number.replace(".", dec_point);

    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);

    return number;
}

$('#btn-scroll-playlist').click(function () {
    var divID = '#my-beats-list';
    $('html, body').animate({
        scrollTop: $(divID).offset().top  -150
    }, 2000);
});

$(document).ready(function(){
  $(function(){
  $('body').on('click', '.btn-free-download', function(e){
    e.preventDefault();
    var beat_url = $(this).attr('href');
    $.ajax({
        url: "/freebeats/download", // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: {store_id: $(this).attr('store-id')}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        beforeSend: function () {
            $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
            $('.progress-bar').animate({width: "30%"}, 100);
        },
        success: function (data) {
            var value1 = jQuery.parseJSON(data);
            if (value1.error === "yes") {
                alert(value1.message);
            }else{
              location.href=beat_url;
            }
        },
        error: function (request, status, err) {
            console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            alert("error: " + request + status + err);
        }
    });
  });
 });
});
    </script>

 <script>
        $(document).on('click', '.winfo', function(){
            
            setTimeout(function () {
                modal3.open();

                }, 500);
        });
        
        $(document).on('click', '.einfo', function(){
            
            setTimeout(function () {
                modal5.open();

                }, 500);
        });
        
        $(document).on('click', '.ninfo', function(){
            
            setTimeout(function () {
                modal4.open();

                }, 500);
        });
    </script>
<script data-ad-client="ca-pub-7189947815738869" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</html>
