<?php //$promoted = shuffle($promoted); ?>
<?php
    //var_dump( count($promoted) );exit();
    shuffle( $promoted);
    $promoted = array_slice($promoted, 0, 6);

    //var_dump(array_keys($promoted) );exit();


    // $data[] = array(
    //                 'id' => $promo['id'],
    //                 'image' => $promo['cover'],
    //                 'sample_name' => $promo['sample_name'],
    //                 'lease_type' => $promo['lease_type'],
    //                 'name' => $promo['name'],
    //                 'user_aka' => $promo['user']['aka'],
    //                 'lease_price' => $promo->lease_price
    //             );

    ?>
<head><meta name="keywords" content="sell african beats, beats, sell beats, buy african beats, buy afrobeats, buy beats, instrumentals, selling your beats, beat selling, hip hop beats, download beats, selling beats, sell my beats, instrumental music, rap beats, music production, sell instrumentals, sell music, royalty free beats, tracks

"></head>
<style>
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 */
        padding-top: 25px;
        height: 0;
    }

    .video-wrapper video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 960px) {

        .video-wrapper video {
            top: 30px;
        }

    }

    @media screen and (max-width: 600px) {

        .video-wrapper video {

            width: 200% !important;
            height: 400px;
            top: 75px !important;
            margin-left: -44%;
        }
    }
</style>
<style>
    /*@media (min-width: 360px) and (max-width: 399px){
        .fa{
            font-size: 20px;
            color: #E40D40;
        }

    }
    @media (min-width: 400px){
        .fa{
            font-size: 20px;
            color: #E40D40;
        }*/

    }
</style>
<style>
    div.img-holder-promoted-center {
        height: 177px;
        overflow: hidden;
    }
</style>
<main id="main">
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="banner-block">
        <!-- slick gallery structure example -->
        <div class="slick-slider">


            <?php foreach($banner as $image){ ?>
            <!--div class="slide" style="background-image: url(<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/PageBanner/file_name/'.$image->file_name ?>);" -->
            <div class="slide">
                <div class="video-wrapper">
                    <!--<video autoplay muted loop style="width: 100%;">-->
                    <!--    <source-->
                    <!--        src="https://amplifihub.s3.us-east-2.amazonaws.com/PageBanner/file_name/amplifihub-afrobeat-instrumentals-video.mp4"-->
                    <!--        type="video/mp4">-->
                    <!--    Your browser does not support HTML5 video.</video>-->
                </div>
                <div class="align">
                    <h1 data-aos="fade"><?= $image->header_text  ?></h1>
                    <!-- <span class="slogan">Upload, Sell, Buy and Meet Professionals</span> -->
                    <form class="search-form" action="/search-result" data-aos="fade-up">
                        <div class="form-group">
                            <div class="input-wrap">
                                <input name="term" type="search" placeholder="Search for beats, genre or producer"
                                    class="form-control">
                                <button class="search" style="border: none;">
                                    <i class="fa fa-search" style="color:#E30D40"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>


        </div>
    </section>
    <section class="info-block container-fluid">
        <div class="bg">
            <div class="text-wrapper">
                <h2>AmplifiHub's</h2>
                <span class="slogan"><span class="red">Main</span> Features</span>
                <ul class="feature-list">
                    <li><a href="#">Personal Online Beat Store For African Music Producers</a></li>
                    <li><a href="#">Html5 Beat Stores For Music Producers To Use On Personal Websites</a></li>
                    <li><a href="#">African Instrumentals & Beat Store Database</a></li>
                  <!--  <li><a href="#">African Mixing & Mastering Service Hub</a></li> -->
                    <li><a href="#">Artiste Music Distribution Service</a></li>
                    <li><a href="#">Sample / Loop Sales</a></li>
                    <li><a href="#">Instant Payment & Withdrawals</a></li>
                </ul>
            </div>
            <div class="img-holder">
                <img src="/images/amplifihub-showcase1.png" alt="amplifihub features">
            </div>
        </div>
    </section>
    <section class="intro-block container-fluid">
        <div class="bg" style="background-image: url(/images/img06.png); min-height:0px !important;" alt="amplifihub container">
            <a href="/sign-up" class="btn red">Start Selling Your Beats For Free</a>
        </div>
    </section>
    <section class="how-it-works-c">
        <div class="container-fluid">
            <h2 class="how-it-works-c__title" data-aos="fade">How AmplifiHub Works - Music Producers</h2>
            <div class="row">
                <div class="how-it-works-c__item col-sm-12 col-md-4" data-aos="fade-right">
                    <img class="how-it-works-c__item--thumb" src="images/upload.svg" alt="upload beats on amplifihub">
                    <h5 class="how-it-works-c__item--title">Upload Beats -</h5>
                    <p class="how-it-works-c__item--desc">Sign up on AmplifiHub for free to own a personal online beat store, upload and manage your beats hassle free.</p>
                </div>
                <div class="how-it-works-c__item col-sm-12 col-md-4" data-aos="fade-up">
                    <img class="how-it-works-c__item--thumb item--thumb-2" src="images/sell.svg" alt="sell beats on amplifihub">
                    <h5 class="how-it-works-c__item--title">Sell beats -</h5>
                    <p class="how-it-works-c__item--desc">With AmplifiHub, you can now sell your beats online to customers based anywhere in the world. All you need to do is just share your personal Beat store link with your customers and you're good to sell :).</p>
                </div>
                <div class="how-it-works-c__item col-sm-12 col-md-4" data-aos="fade-left">
                    <img class="how-it-works-c__item--thumb" src="images/atm.svg" alt="withdraw earning on amplifihub">
                    <h5 class="how-it-works-c__item--title">Withdraw -</h5>
                    <p class="how-it-works-c__item--desc">Withdraw your beat sale / work for hire earnings easily directly to your bank account. Just visit your withdrawal page.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-block container-fluid">
        <div class="bg" style="background-image: url(/images/img06.png); min-height:0px !important;" alt="amplifihub container">
            <a href="/sign-up" class="btn red">Start Selling Your Beats</a>
        </div>
    </section>
    
  <section class="contact-block container-fluid" data-aos="fade">
        <div class="bg" style="background-image: url(images/perc_drum.jpg);" alt="amplifihub bottom banner image">
            <h2>Purchase African Samples / Loops On AmplifiHub</h2>
            <p style="width: 80%;font-size: 18px;line-height: 2;">We are making available, samples and loops off of African hit songs by legendary African musicians like Saheed Osupa, K1 De Ultimate, Tope Alabi etc. from the 80s, 90s and 2000s. Now you can make use of a looped sound or sample from your favourite songs of the past in your next beat making session.</p>
            <a href="/samples" class="btn red">Buy Samples and Loops</a>
        </div>
    </section>
    
    <section class="contact-block container-fluid" data-aos="fade">
        <div class="bg" style="background-image: url(images/guitar.jpg);" alt="amplifihub bottom banner image">
            <h2>Distribute Your Music For Free On AmplifiHub</h2>
            
           <p style="width: 80%;font-size: 18px;line-height: 2;">You make music? Got an album or a single to release? Can't afford music distribution fees? Amplifihub will pay the cost for you, while you distribute Free.</p>
            <a href="/music-distribution" class="btn red">Distribute Your Music</a>
        </div>
    </section>
    
    <section class="beats-block container-fluid">
        <div class="holder">
            <span class="heading">PROMOTED BEATS</span>
            <div class="row">


                <?php foreach ($promoted as $promo):?>
                <div class="col">
                    <a href="javascript:void(0)">
                        <div class="box">
                            <div class="img-holder control-wrap  img-holder-promoted-center">
                                <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px !important; border:2px solid #666; border-radius: 10px;','alt'=>'AmplifiHub Recent Beats images']);?>
                                <a href="javascript:void(0)"
                                    data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?=h($promo['sample_name']);?>"
                                    song_type="<?=h($promo['lease_type']);?>"
                                    data-name="<?=h(substr($promo['name'],0,10));?>"
                                    data-user="<?= h(substr($promo['user']['aka'], 0, 10));?>"
                                    bit-id="<?=h($promo['id']);?>" class="play-wrap show play">
                                    <i class="fa fa-play" style="color:#E30D40;font-size:50px"></i>
                                </a>
                                <a class="pause-wrap hide play">
                                    <i class="fa fa-pause" style="color:#E30D40;font-size:50px"></i>
                                    <?php // $this->Html->image('pause-128.png', ['class' => ['img-responsive', 'pause'], 'style' => 'width: 34px;height: 34px;margin-top: 12px;margin-left: 10px;']); ?>
                                </a>
                            </div>
                            <div class="text-holder">
                                <span class="name"> <span style="color:yellow;">Ad</span><a
                                        href="/beat-hub-detail/<?=  $promo->id; ?>">
                                        <?php if(strlen($promo->user->aka) > 8){ echo substr($promo->user->aka,0,8). "..";}else{echo $promo->user->aka;}?></span></a>
                            </div>
                            <div>
							<button class="likecontainer like" data="<?php echo $promo->id; ?>" ><i class="fa fa-thumbs-up"></i> Like 
                                                            <span class="likes<?php echo $promo->id; ?>"><?= $promo->likes; ?></span>
                                                          </button></a>
                                                          
                                <button class="sharecontainer share" data="<?php echo $promo->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </div>
                            <?php if(!empty($promo->lease_price)){ ?>
                            <a class="btn addtocart" data-id="<?php echo $promo['id'];?>">
                                <i class="fa fa-shopping-cart"></i>
                                ₦<?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                            <?php }else{ ?>

                            <?php if(!empty($userid)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn" download="download"
                                href="<?= "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" . $promo->lease_name ?>"
                                style="color:#41aa5e;">
                                Download <i class="fa fa-download"></i>
                            </a>
                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn">Free Beat</a><?php } ?>

                            <?php } ?>
                        </div>
                    </a>
                </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </section>
    <section class="intro-block container-fluid">
        <div class="bg" style="background-image: url(/images/img06.png); min-height:0px !important;" alt="amplifihub container">
            <a href="/sign-up" class="btn red">Sign Up Now</a>
        </div>
    </section>
    <section class="buy-from-amplifihub">
        <div class="container-fluid">
            <h2 class="buy-from-amplifihub__title" data-aos="fade-right">Why Buy Beats From AmplifiHub?</h2>
            <div class="row">
                <div class="buy-from-amplifihub__reasons col-sm-12 col-md-6 col-lg-4">
                    <img class="buy-from-amplifihub__reasons--thumb" src="images/test.svg" alt="listen to African beats before buying beats on amplifihub" data-aos="fade-up">
                    <h6 class="buy-from-amplifihub__reasons--title" data-aos="fade-right">Try before buy</h6>
                    <p class="buy-from-amplifihub__reasons--desc" data-aos="fade-left">You get to listen to the beats before you even touch your wallet or credit card to make any purchase.</p>
                </div>
                <div class="buy-from-amplifihub__reasons col-sm-12 col-md-6 col-lg-4">
                    <img class="buy-from-amplifihub__reasons--thumb" src="images/africa.svg" alt="african music instrumental map on amplifihub" data-aos="fade-up">
                    <h6 class="buy-from-amplifihub__reasons--title reasons--title-2" data-aos="fade-right">We are the sound of Africa in ones and zeroes</h6>
                    <p class="buy-from-amplifihub__reasons--desc reasons--desc-2" data-aos="fade-left">Our producers got the best of African sounds so be rest assured that you're getting value for money.</p>
                </div>
                <div class="buy-from-amplifihub__reasons col-sm-12 col-md-6 col-lg-4">
                    <img class="buy-from-amplifihub__reasons--thumb" src="images/law.svg" alt="we handle split sheets and legal stuff on amplifihub" data-aos="fade-up">
                    <h6 class="buy-from-amplifihub__reasons--title" data-aos="fade-right">The boring Legal stuff</h6>
                    <p class="buy-from-amplifihub__reasons--desc" data-aos="fade-left">You know the license type you're paying for before you pay for anything and a contract is generated for every purchase. So no worries about what happens when anything happens.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="beats-block container-fluid">
        <div class="holder" style="margin-top:60px;">
            <span class="heading">RECENT UPLOADS</span>
            <div class="row">

                <?php foreach ($recent as $promo):?>
                <div class="col">
                    <a href="javascript:void(0)">
                        <div class="box">
                            <div class="img-holder control-wrap img-holder-promoted-center">
                                <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px!important; border:2px solid #666; border-radius: 10px;','alt'=>'AmplifiHub Recent Beats images']);?>
                                <a href="javascript:void(0)"
                                    data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?=h($promo['sample_name']);?>"
                                    song_type="<?=h($promo['lease_type']);?>"
                                    data-name="<?=h(substr($promo['name'],0,10));?>" bit-id="<?=h($promo['id']);?>"
                                    data-user="<?= h(substr($promo['user']['aka'], 0, 10));?>"
                                    class="play-wrap show play">
                                    <i class="fa fa-play" style="color:#E30D40;font-size:50px"></i>
                                </a>
                                <a class="pause-wrap hide play">
                                    <i class="fa fa-pause" style="color:#E30D40;font-size:50px"></i>
                                    <?php // $this->Html->image('pause-128.png', ['class' => ['img-responsive', 'pause'], 'style' => 'width: 34px;height: 34px;margin-top: 12px;margin-left: 10px;']); ?>
                                </a>
                            </div>
                            <div class="text-holder">
                                <span class="name"> <a href="/beat-hub-detail/<?=  $promo->id; ?>">
                                        <?php if(strlen($promo->user->aka) > 8){ echo substr($promo->user->aka,0,8). "..";}else{echo $promo->user->aka;}?></span>
                            </div>
                            <div>
							<button class="likecontainer like" data="<?php echo $promo->id; ?>" ><i class="fa fa-thumbs-up"> Like</i> 
                                                            <span class="likes<?php echo $promo->id; ?>"><?= $promo->likes; ?></span>
                                                          </button></a>
                                                          
                                <button class="sharecontainer share" data="<?php echo $promo->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </div>
                            <?php if(!empty($promo->lease_price)){ ?>
                            <a class="btn addtocart" data-id="<?php echo $promo['id'];?>">
                                <i class="fa fa-shopping-cart"></i>
                                ₦<?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                            <?php }else{ ?>

                            <?php if(!empty($userid)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn"  download="download"
                                href="<?= "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" . $promo->lease_name ?>"
                                style="color:#41aa5e;">
                                Download <i class="fa fa-download"></i>
                            </a>
                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn">Free Beat</a><?php } ?>

                            <?php } ?>
                        </div>
                    </a>
                </div>
                <?php endforeach;  ?>
            </div>
            <a class="btn red click-beats-btn" href="https://amplifihub.com/beat-hub">CLICK FOR MORE BEATS</a>
        </div>
    </section>
    <section class="intro-block container-fluid">
        <div class="bg" style="background-image: url(/images/img06.png);" alt="amplifihub container">
            <div class="text-wrapper">
                <h2 style="font-size:35px;">Earn While You Create.</h2>
                <div class="text">
                    <p>With AmplifiHub it's easy for music makers in Africa to get paid while doing what they love. So
                        whether you are a music producer, sound engineer, artiste, songwriter or video director,
                        AmplifiHub is the right place for you.</p>
                </div>
                <h2 style="font-size:35px;">Who Are We?</h2>
                <div class="text">
                    <p>AmplifiHub is home to many professionals who make good African music. You can sell African beats,
                        buy African beats and offer professional African music making services here.</p>
                </div>
            </div>
            <div class="img-holder">
                <img src="/images/music-studio.svg" alt="music studio">
            </div>
            <a href="/sign-up" class="btn red">Sign Up</a>
        </div>
    </section>
    
    <section class="join-block container-fluid">
        <div class="bg" style="background-image: url(images/img09.jpg);" alt="amplifihub afrobeat features">
            <h2 style="color:#fff;">Join The New Wave</h2>
            <div class="text">
                <p>African music has gone beyond the streets of Africa. Don't be left out.</p>
            </div>
            <div class="video-holder">
                <iframe src="<?= $youtubeVideo->videolink ?>" allow="autoplay; encrypted-media" allowfullscreen=""
                    width="650" height="415" frameborder="0" defer></iframe>
            </div>
            <a href="/sign-up" class="btn red">Sign Up</a>
        </div>
    </section>
    <section class="amplifihub-faq">
        <div class="container-fluid">
            <h2 class="amplifihub-faq__title">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>What Is The Guarantee I Will Sell Beats Here?</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">Every market place is competitive and so is AmplifiHub. We provide the platform for the beat buyers to find your beats but we also recommend you put in some work as well to promote your store via social media, email etc. so it's up to your beats to be suitable enough to convince an artiste / beat buyer to purchase. If you find out you are not making sales then it's largely due to the fact that you have to get better at making beats. Bottomline? We guarantee you ears for your beats. it's up to the listeners to purchase.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>What Are The License Types?</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">Glad you asked. Ampilifihub operates on three license types: Lease Tier (Non-exclusive), Exclusive licenses Tier and Premium Tier (work for hire).</b>

You can read more on our license types here.</b>

A <strong> Non-exclusive license (Lease)</strong> where the beat owner creates a beat that can be used by more than one user who purchases the beat. None of the users in this regard can claim sole rights to the beat created. This license will also be determinant on various factors which include but not limited to: Time of lease(period), exploitations. This will be determined between the beat producer and user.</b>

An <strong>Exclusive license</strong>  where the user pays to the beat owner an higher price than the non exclusive option to have the option to use the beat alone to the exclusion of other users. The beat producer shall retain all title, rights and interests contained in the beat created and earn continued royalties from the same accordingly. </b>

A <strong>Premium License (Work for Hire)</strong> includes where a beat Producer creates a beat tailored specifically for a user who then purchases the beat and executes all agreements to transfer title, rights and interest contained in the composition created to the user and can claim sole rights to the beat. This is a royalty free option. </b>
</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>I Can't Find The Beats I Just Purchased</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">Check your <a href="https://amplifihub.com/downloads">"My Purchases"</a> page or email support@amplifihub.com</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>What can I use the beats for?</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">The majority of licenses on AmplifiHub are recording licenses. This means you are most likely licensing the beats to use to record a new song and make a music video. While this is the
                            case for most licenses, some licenses will include using the beat for other use cases, like TV or video.

                            If you are looking for licenses for sync or gaming, please contact us directly.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>When can I make withdrawal?</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">You can make a withdrawal seven (7) days after you make an earning and it has been recorded as such.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="amplifihub__content">
                        <h6 class="quest">
                            <span>Do African music producers sell globally here?</span> <img class="arrow-pst"
                                src="images/arrow-down.svg" alt="arrow-down">
                        </h6>
                        <p class="ans">Yes, we offer our services globally. So, with AmplifiHub all African music producers / beat makers have the opportunity to get lots of ears and eyes on their beat catalogue.
</p>
                    </div>
                </div>

        </div>
    </section>
    <section class="beathub-block container-fluid">
        <div class="bg" style="background-image: url(images/img10.jpg);" alt="africn percusions">
            <h2 style="font-size:30px;color:#fff;line-height:1.5;">Buy African Beats, Meet African Music Producers and Sound Engineers
            </h2>
            <div class="text">
                <p>Looking for really cool African beats and professional African music producers for your next project?
                    Look no further because we got the best African beats, music producers and sound engineers in the
                    game.</p>
            </div>
            <a href="/beat-hub" class="btn red">Visit Our Beat Hub</a>
        </div>
    </section>
    <section class="user-info container-fluid">
        <div class="bg">
            <h2 style="font-size:35px;color:#fff;line-height:1.5;">AmplifiHub's Power Users</h2>
            <div class="row">

                <?php foreach($powerUser as $pUser){



                        ?>
                <div class="col">
                    <div class="img-holder">
                        <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/<?= $pUser->photo ?>"
                            alt="amplifihub afrobeat power users">
                    </div>
                    <span class="user-name"><?= $pUser->aka ?> <span
                            class="icon"><?php if (!empty($pUser->is_verified)) { ?><img src="/images/badge.svg"
                                alt="verification tag"><?php } ?></span> </span>
                    <span class="user-detail">

                        <?php
                                    if(count($pUser->directors)){

                                    }elseif(count($pUser->songwriters)){

                                    }elseif(count($pUser->mix_masterings)){

                                    }elseif(count($pUser->artistes)){

                                    }else{

                                    }


                                ?>


                    </span>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <section class="contact-block container-fluid">
        <div class="bg" style="background-image: url(images/amplifihub-bottom-img.jpg);" alt="amplifihub bottom banner image">
            <h2>Take Your Studio Online Today</h2>
            <a href="/sign-up" class="btn red">Join Us</a>
        </div>
    </section>
</main>

<script>
    $(document).ready(function () {
        
        var flag = 0;
        $(".quest").click(function () {
            if (flag == 0) {
                $(this).next('.ans').slideDown();
                $(this).children('.arrow-pst').attr("src", "images/arrow-up.svg");
                flag = 1;
            } else {
                $(this).next('.ans').slideUp();
                $(this).children('.arrow-pst').attr("src", "images/arrow-down.svg");
                flag = 0;
            }
        });
    });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            // offset: 400,
            duration: 1000
        });
    </script>
