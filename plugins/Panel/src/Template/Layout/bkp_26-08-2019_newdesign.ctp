<?php 
$cakeTitle = isset($userProfile->aka) ? 'AmplifiHub : '. $userProfile->aka . ' Beat Store' : 'AmplifiHub :';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
?>
<!DOCTYPE html>
<html lang="en">
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
        <?= $this->Html->css('mainv2') ?>
        <?= $this->Html->script('/vendor/jquery/jquery.min') ?>
        <meta name="theme-color" content="#E30D40" />
    </head>
    <body>
        <div id="wrapper">
            <header id="header" class="main-header">
                <nav class="navbar navbar-static-top white" style="background-color: rgb(0,0,0); margin-left:0px">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?= $this->Html->link($this->Html->image('amplifihublogo.png', ['class' => 'img-responsive', 'id' => 'amplifiLogo']), '/', ['class' => '', 'style' => 'display:inline-block', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-shopping-cart fa-2x"></i><span class="badge" id="cart-mob">0</span>', ["controller" => "carts", "action" => "view"], ["class" => "pad showcart", "escape" => false]) ?>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?= $this->element('fronttopmenu') ?>
                        </div>
                    </div>
                </nav>
            </header>
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
                <div class="previous"></div>

                <div class="play-pause-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                    <path fill="#fff" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-btn__icon"/>
                    </svg>
                </div>
                <div class="next"></div>
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
                            <strong>Select a Package</strong>
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
                                <div class="col-xs-6 col-md-4" style="padding: 0px" id="premium">
                                </div>
                                <div class="col-xs-6 col-md-4" style="padding: 0px" id="exclusive">
                                </div>
                            </div>

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

                                                                $('#mystoreHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" data-user="' + val.user.fullname.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span> <span class="product"><a href="/mystore/' + val.user.aka + '">' + val.user.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + val.user.aka + '">' + val.user.aka + '</a></span> </td><td> <a class="btn addtocart" data-id="' + val.id + '"> <i class="fa fa-shopping-cart"></i>' + val.lease_price + '+</a> </td></tr>');
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
                                            if ($contentLoadTriggered == false) {
                                                $contentLoadTriggered = true;
                                                var url = $('#infinitystore').val();
                                                var last_id = $(".beatslist:last").attr("id");
                                                //var url = 'infinity-scroll?id='+ last_id + '&store=' + store_name;
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
                                                        if (value.length > 0) {
                                                            jQuery.each(value, function (i, val) {
                                                                if (!val.cover) {
                                                                    var coverImage = "/img/default_cover_image.jpg";
                                                                } else {
                                                                    var coverImage = 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-' + val.cover;
                                                                }
                                                                if (!val.lease_price) {
                                                                    $('#storeHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + val._matchingData.Users.aka + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + val._matchingData.Users.aka + '">' + val._matchingData.Users.aka + '</a></span> </td><td> <a class="btn freedownload"><i class="fa fa-download"></i> Free Beat</a><div class="download-link"><a download="download" href="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" >Download<i class="fa fa-download"></i></a></div> </td></tr>');
                                                                } else {
                                                                    $('#storeHolder table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + val._matchingData.Users.aka + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + val._matchingData.Users.aka + '">' + val._matchingData.Users.aka + '</a></span> </td><td> <a class="btn addtocart" data-id="' + val.id + '"> <i class="fa fa-shopping-cart"></i>' + val.lease_price + '+</a> </td></tr>');
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
                                                            $('#lease').html("<strong> Lease:</strong> &#8358;" + value[0]['lease_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['lease_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                                                        }
                                                        if (value[0]['premium_price'].length) {
                                                            $('#premium').html("<strong> Premium:</strong> &#8358;" + value[0]['premium_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['premium_price'] + "' data1 = 'premium'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
                                                        }

                                                        if (value[0]['exclusive_price'].length) {
                                                            $('#exclusive').html("<strong> Exclusive:</strong> &#8358;" + value[0]['exclusive_price'] + "<br/><span class='badge addcart1' id='" + value[0]['id'] + "' data='" + value[0]['exclusive_price'] + "' data1 = 'lease'><i class='fa fa-cart-plus' aria-hidden='true'></i> add to cart</span><br>");
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
    </script>
</html>
