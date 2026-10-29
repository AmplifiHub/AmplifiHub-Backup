<?php
$cakeTitle = isset($userProfile->aka) ? 'AmplifiHub : '. $userProfile->aka . ' Beat Store' : 'AmplifiHub :';
$cakeDescription = 'AmplifiHub is an online African music making marketplace that allows music producers to license / sell beats online, alongside other professionals who make and offer professional African music making services. Sign up today and earn while you entertain.';
//exit;
// new layout 
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <title>AmplifiHub</title>

        <link href="/img/fave-icon.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="/css/bootstrap1.min.css">
        <link rel="stylesheet" href="/css/slicknav1.min.css">
        <link rel="stylesheet" href="/css/all1.min.css">
        <link href="/css/style1.css" rel="stylesheet">
        <link href="/css/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/responsive1.css" rel="stylesheet">
        <link href="/css/musicbar.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
        
    <?=
        $this->Html->css([
            '/bower_components/font-awesome/css/font-awesome.min',
            '/bower_components/Ionicons/css/ionicons.min',
            '/dist/css/AdminLTE.min',
            '/dist/css/skins/_all-skins.min',
            //'/css/custom',
            '/css/shadow3',
            '/css/shadow2',
            
        ]);
        ?>
        
        <?= $this->Html->css('animate') ?>
        <?= $this->Html->css('rmodal') ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css') ?>
        
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css'>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <? // =$this->Html->css('mainv2') ?>
        <?php echo $this->Html->css('headerstyle.css?'.time()); ?>
        <link rel="stylesheet" type="text/css" href="/css/mainv2.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <style>
    .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 85px 0px 85px 20%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}

      </style>
    </head>
    <body>

<script src="https://js.paystack.co/v1/inline.js"></script>
<?php echo "<script>
function payWithPaystack()
  {
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'ejitexflow@yahoo.com',
      amount: '10000',
      currency: 'NGN',
      ref: 'test-reference-199',
      callback: function(response){
          window.location = '/carts/paymentconfirm/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
  </script>"; ?>
      <div class="wrap-area">
        <div id="mobile-menu"></div>
        <div class="meanu-area">
             <div class="logo">
                 <a href="https://amplifihub.com/"><img src="/img/logo1.png" alt="logo"></a>
             </div>
             <div class="main-menu" id="menu">
                 <ul>
                     <li><a href="/beat-hub">Buy Beats</a></li>
                     <li><a href="/pricing">Sell Beats</a></li>
                     <li><a href="/mixing-and-mastering-hub">Mixing &amp; Mastering</a></li>
                     
                     <?php if($this->request->session()->read('Auth.User.id')){ ?>
                     <li><a href="/dashboard" class="singup">Dashboard</a></li>
                     <?php }else{ ?>
                     <li><a href="/login">Login</a></li>
                     <li><a href="/sign-up" class="singup">Sign Up</a></li>
                     <?php } ?>
                     <li class="mobview">
                        <a href="/carts/view" class="pad">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            <span class="badge" id="cart-counter"><?php
                         $cart = $this->request->session()->read('cart');
                         echo count($cart);?></span>
                        </a>
                    </li>
                   
                 </ul>
             </div>
             <div class="mobile-menu">
                <a href="carts/viewsample" class="my-cart on-lg">
                    <i class="fa fa-shopping-cart fa-2x text-dark"></i>
                    <span class="badge" id="">0</span>
                </a>
             </div>

         </div>
         
         
         <div class="hero-area">
             <div class="container">
                 <div class="row">
                     <div class="col col-sm-12 col-lg-10 offset-lg-1 text-center">
                         <div class="content-area">
                             <h2>Release Consumer-Ready Songs. Get Your Song Analyzed By The Best A&amp;Rs In The African Music Industry.</h2>
                             <p style="line-height:24px;font-weight:bold;">We at AmplifiHub know that creativity is lost when it does not end in the ears of the right audience. Our Artist and Repertoire division is set up to help budding artist gain easy access to industry professionals who would score your works, give feedback on how to improve your craft and also provide platforms for exceptional creative to be discovered.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
         <div class="testimonial-area">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col text-center">
                         <h4>Our Top A&amp;Rs</h4>
                     </div>
                 </div>
                 <div class="row">
                     <?php if(!empty($ar)){ foreach($ar as $user){ ?>
                     <div class="col-sm-6 col-lg-3 text-center">
                         <div class="testimonial-gallery">
                             <div class="testimonial-single-img">
                                 <img src="/img/default.png" alt="image">
                             </div>
                             <span onmouseover="" style="cursor: pointer;"><a class="detail" data-id="<?php echo $user['id']; ?>"><?=$user['aka'] ?></a></span>
                         </div>
                     </div>
                     <?php } } ?>
                     
                 </div>
             </div>
         </div>
         
         <div class="cta-rae">
             <div class="container">
                 <div class="row">
                     <div class="col text-center">
                         <a class="our-top-btn track" style="color:#fff;font-weight:bold;cursor:pointer">Submit Track</a>
                     </div>
                 </div>
             </div>
         </div>
         
        <div id="modald" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <form class="form-horizontal" method="get">
                        <div class="modal-header">
                            <strong style="text-align:center;">A&R Profile </strong>
                        </div>

                        <div class="modal-body">
                            
                            <div class="row" style="padding: 0px 15px;">

                                <div class="col-xs-6 col-md-6" style="padding: 0px" id="ar">
                                </div>
                               
                            </div>

                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modald.close();return false;">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div id="modaltrack" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <?= $this->Form->create('track', ['type' => 'file','id'=> 'addTrack']) ?>
                        <div class="modal-header">
                            <strong style="text-align:center;">Fill Form To Get Started</strong>
                        </div>

                        <div class="modal-body">
                            
                            <div class="row" id="tr">

                               
                                        <div class="col-md-4">
                                            <span>First AR</span><br>
                                            <select name="ar_name1" id="1st" required style="background-color:#262626;font-size:14px; border-radius:5px;">
                                                <option value="">Select AR</option>
                                                <?php foreach($ar as $first){ ?>
                                                <option value="<?=$first['aka'] ?>"><?=$first['aka'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span>Second AR</span><br>
                                            <select name="ar_name2" id="2nd" required style="background-color:#262626;font-size:14px; border-radius:5px;">
                                                <option value="">Select AR</option>
                                                <?php foreach($ar as $first){ ?>
                                                <option value="<?=$first['aka'] ?>"><?=$first['aka'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span>Third AR</span><br>
                                            <select name="ar_name3" id="3rd" required style="background-color:#262626;font-size:14px; border-radius:5px;">
                                                <option value="">Select AR</option>
                                                <?php foreach($ar as $first){ ?>
                                                <option value="<?=$first['aka'] ?>"><?=$first['aka'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <br>
                                       
                            </div>
                            <br>
                             <div class="row" style="padding: 0px 15px;">
                                            
                                                <span>Amount</span><br>
                                                <input type="number" class="form-control" value="0" name="amount" id="amount" style="color: white;background-color: #e30d40;margin-top: 10px; border-radius:5px;" readonly/>
                                            
                            </div>
                            <br>
                            <!--<div class="row" style="padding: 0px 15px;">
                                            
                                                <h4>Total Payable</h4><br><br>
                                                <span class="buy-btn" id="payable">₦ 0</span>
                                            
                            </div>-->
                            
                            <br>
                             <div class="row" style="padding: 0px 15px;">
                                           
                                                <div class="checkbox">
                                                     <!--<span>Get Booked For A Show</span><br><br>-->
                                  <strong><label><input type="checkbox" value="1" name="booking" id="booking"> Get Booked For A Show </label></strong>
                                </div>
                                            
                            </div>
                            
                            <br>
                             <div class="row" style="padding: 0px 15px;">
                                            
                                                <!--<span>Song Title</span><br>-->
                                                <input type="text" class="form-control" name="song_title" placeholder="Enter Song Title" required style="background-color: #666; color:white; margin-top: 20px; text-align:center;"/>
                                            
                            </div>
                            
                            <br>
                            <!--
                             <div class="row" style="padding: 0px 15px;">
                                            
                                <?php// $this->Form->control('song',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'], 'style' => 'display:none; color:white;', 'id' => 'file','label'=> false,'required'=>true]); ?>
                                
                                
                                <div class="upload-area"  id="uploadfile" style="color:white; width: 70%;height: 200px;border: 2px solid lightgray;border-radius: 3px;margin: 0 auto;margin-top: 10px;text-align: center;">
                                    <h1 style="text-align: center;font-weight: normal;font-family: sans-serif;line-height: 50px;color: darkslategray;">Drag and Drop MP3 here<br/>Or<br/>Click to select MP3</h1>
                                </div>
        
                                            
                            </div>
                            -->
                            <div class="row" style="padding: 0px 15px;">
                                 <div class="col-md-12">
                        	          <div class="form-group files">
                                        <label>Upload Your Song </label>
                                        <?= $this->Form->control('song',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'], 'style' => 'color:white;background:#333;', 'id' => 'file','label'=> false,'required'=>true]); ?>
                                
                                      </div>
                                  
                        	  </div>
                            </div>
                            <div ><?=   $this->form->control('user_id',['type'=>'hidden','default' => $user,'class'=>'form-control']); ?></div><br>
                            <br>
                             <div class="row">
                                            
                                               
                                                <div class="col-md-12">
                                                     <span>Genre</span><br>
                                            <select name="genre" style="width:100%; height:100%; background-color:#333; border-radius:5px;">
                                                <?php foreach($genres as $genre){ ?>
                                                <option value="<?=$genre->genre ?>"><?=$genre->genre ?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                            
                            </div>
                            <br>
                            <br>
                            <br>
                             <div class="cta-rae">
             <div class="container">
                 <div class="row">
                     <div class="col text-center">
                          <script src="https://js.paystack.co/v1/inline.js"></script>
                         <a onclick="payWithPaystack()"><?= $this->Form->button(__('Pay'),['class'=>'our-top-btn track']) ?></a>
                     </div>
                 </div>
             </div>
         </div>
                  
                        </div>
                        
                        <div id="my-box">
        
                        </div>
                         
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modaltrack.close();return false;">
                                Close
                            </button>
                        </div>
                    <?= $this->Form->end() ?> 
                </div>
                
            </div>
        </div>
         
         <div class="footer-area">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-sm-3">
                        <div class="link-area">
                            <h4>SERVICES</h4>
                            <ul>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Beat hub</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Mixing and mastering hub</a></li>
                            </ul>
                        </div>
                     </div>
                     <div class="col-12 col-sm-3">
                        <div class="link-area">
                            <h4>ABOUT US</h4>
                            <ul>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; What is AmplifiHub</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; The team players</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Affliates</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Blog</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Forum</a></li>
                            </ul>
                        </div>
                     </div>
                     <div class="col-12 col-sm-3">
                        <div class="link-area">
                            <h4>SERVICES</h4>
                            <ul>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; How the website works</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Contact Us</a></li>
                            </ul>
                        </div>
                     </div>
                     <div class="col-12 col-sm-3">
                        <div class="link-area">
                            <h4>SERVICES</h4>
                            <ul>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Terms of service</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Privacy policy</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Refund policy</a></li>
                                <li><a href=""> <i class="fa fa-caret-right"></i> &nbsp; Pricing</a></li>
                            </ul>
                        </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col text-center">
                         <div class="social-icon-area">
                             <ul>
                                 <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                 <li><a href=""><i class="fa fa-youtube"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom-area">
             <div class="container">
                 <div class="row">
                     <div class="col text-center">
                         <p class="copy-c">Copyright © 2019 AmplifiHub</p>
                     </div>
                 </div>
             </div>
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
        
    </body>
</html>

         <script src="/js/jquery1.min.js"></script>
        <script src="/js/popper1.min.js"></script>
        <script src="/js/bootstrap1.min.js"></script>
        <script src="/js/jquery1.slicknav.min.js"></script>
        <script src="/js/jquery1.sticky.js"></script>
        <script src="/js/main1.js"></script>
        <script src="/js/musicbar.js"></script>
        <script src="/js/new-design.js" defer></script>
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
        '/js/musicbar','/js/rmodal'
    ])
    ?>
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
                                        var modald = new RModal(
                                                document.getElementById('modald')

                                                );
                                        var modaltrack = new RModal(
                                                document.getElementById('modaltrack')

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
                                        
                                        function allAr()
                                        {
                                        var first, second, third;
                                        
                                        $("#1st").on("change", function(){
                                            var val1=$("#1st").val();
                                            first=val1;
                                            //alert(first);
                                            
                                            if(first != ""){
                                            var amount1=30000;
                                            var currency="₦";
                                            payable=currency+amount1;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount1);
                                            $("#payable").text(payable);
                                            
                                            }else if(first == ""){
                                            
                                            var amount1=0;
                                            var currency="₦";
                                            payable=currency+amount1;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount1);
                                            $("#payable").text(payable);
                                            }
                                        });
                                        
                                        $("#2nd").on("change", function(){
                                            var val2=$("#2nd").val();
                                            second=val2;
                                            
                                            //var firstAmonut=parseFloat($("#amount").val(), 4);
                                            var firstAmonut=parseFloat(30000, 4);
                                            
                                            if(firstAmonut != "" && first != "" && val2 != ""){
                                            var amount2=parseFloat(30000, 4);
                                            amount2=parseFloat(amount2+firstAmonut, 4);
                                            var currency="₦";
                                            payable=currency+amount2;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount2);
                                            $("#payable").text(payable);
                                            
                                            }else if(firstAmonut != "" && first != "" && val2 == ""){
                                            
                                            amount2=parseFloat(firstAmonut, 4);
                                            var currency="₦";
                                            payable=currency+amount2;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount2);
                                            $("#payable").text(payable);
                                            
                                            }
                                            if(first == undefined){
                                                alert("Please select first AR for select second AR");
                                                amount2=parseFloat(0, 4);
                                            //alert(amount3);
                                            var currency="₦";
                                            payable=currency+amount2;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount2);
                                            $("#payable").text(payable);
                                            
                                            }
                                        });
                                        
                                        $("#3rd").on("change", function(){
                                            var val3=$("#3rd").val();
                                            third=val3;
                                            //alert(first);
                                            //alert(second);
                                            
                                            var secondAmonut=parseFloat(60000, 4);
                                            
                                            if(secondAmonut != "" && second != "" && first != ""){
                                            var amount3=parseFloat(30000, 4);
                                            amount3=parseFloat(amount3+secondAmonut, 4);
                                            var currency="₦";
                                            payable=currency+amount3;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount3);
                                            $("#payable").text(payable);
                                            }
                                            
                                            if(second == undefined){
                                                alert("Please select first and second AR for select third AR");
                                                amount3=parseFloat(0, 4);
                                            //alert(amount3);
                                            var currency="₦";
                                            payable=currency+amount3;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount3);
                                            $("#payable").text(payable);
                                            
                                            }else if(first == undefined){
                                                alert("Please select first and second AR for select third AR");
                                                amount3=parseFloat(0, 4);
                                            //alert(amount3);
                                            var currency="₦";
                                            payable=currency+amount3;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount3);
                                            $("#payable").text(payable);
                                            
                                            }else if(secondAmonut != "" && second != "" && first != "" && val3 == ""){
                                            
                                            amount3=parseFloat(secondAmonut, 4);
                                            //alert(amount3);
                                            var currency="₦";
                                            payable=currency+amount3;
                                            //payable=number_format(payable);
                                            $("#amount").val(amount3);
                                            $("#payable").text(payable);
                                            }
                                            
                                        });
                                        
                                        $("#booking").click(function(){
                                        var book = $(this).is(':checked');
                                        var amount=$("#amount").val();
                                        amount=parseFloat(amount, 4);
                                        var bookingFee=parseFloat(20000, 4);
                                        var currency="₦";
                                        //alert(amount);
                                        if(book)
                                            {
                                                $('#booking').attr('checked', true);
                                                alert("Selected A & R Will Get You A Show");
                                                var add = amount+bookingFee;
                                                payable=currency+add;
                                                $("#amount").val(add);
                                                
                                                $("#payable").text(payable);
                                                
                                             //alert(amount);
                                            }else{
                                                $('#booking').attr('checked', false);
                                                var add = amount-bookingFee;
                                                payable=currency+add;
                                                $("#amount").val(add);
                                                
                                                $("#payable").text(payable);
                                            }
                                            
                                        });    
                                            
                                            
                                        }
                                        
                                        
                                        
                                        function addToCartEventD() {
                                            $(".detail").click(function () {
                                                var url = "fpdf/arprofile";
                                                var id = $(this).attr('data-id');
                                            //     alert(id);exit;
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
                                                        //alert(value[0]['aka']);exit;
                                                        if (value[0]['aka'].length) {
                                                            $('#ar').html("<div class='single'><img class='img img-responsive' src='img/default.png'></div><br><br><strong style='text-align:center;'> Name: </strong>" + value[0]['aka'] + "<br/><strong style='text-align:center;'> Bio: </strong>" + value[0]['bio'] + "<br/><strong style='text-align:center;'> Address: </strong>" + value[0]['state'] + value[0]['country'] + "<br/><br>");
                                                            
                                                        }
                                                        

                                                        setTimeout(function () {
                                                            modald.open();

                                                        }, 1000);
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }
                                        
                                        function addToCartEventTrack() {
                                            $(".track").click(function () {
                                                var url = "fpdf/arprofile";
                                                var id = $(this).attr('data-id');
                                            //     alert(id);exit;
                                                setTimeout(function () {
                                                            modaltrack.open();

                                                        }, 1000);
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
                                        addToCartEventD();
                                        addToCartEventTrack();
                                        addToCartFreeDownload();
                                        allAr();

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
                                    
                              
                                    
                                
    </script>
    
    
<?php
$user = $this->request->session()->read('Auth.User');
$username = $user['firstname'] . ' ' . $user['lastname'];
?>
<script type='text/javascript'>

function submitForm(formObj){
    $.ajax({
        url: "addtrack", // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: new FormData(formObj), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
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
}

function payWithPaystack(formObj)
  {
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:"<?php echo $user['email']; ?>",
      amount: $("#amount").val() * 100,
     // ref: '" . @$products[0]['count']['trans_ref'] . "',
      callback: function(response){
         // window.location = '/carts/paymentconfirm/'+response.reference;
         if(response.reference){
             submitForm(formObj);
         }else{
          alert('payment failed');
         }
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }


    $(document).ready(function(){
    // $('.usd').hide();
    // $('.ngn').hide();
    // $('#checkbox').change(function(){
    //     if(this.checked)
    //         $('.usd, .ngn').fadeIn('slow');
    //     else
    //         $('.usd, .ngn').fadeOut('slow');

    // });


              $('#addTrack').submit(function(e){
                    e.preventDefault();
                    //alert('Am here');
                    console.log(new FormData(this));

                    payWithPaystack(this);
          });


    });
</script>
