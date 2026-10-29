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
    
    <style>
        .video-wrapper {
        	position: relative;
        	padding-bottom: 56.25%; /* 16:9 */
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
        
        @media screen and (max-width: 960px){
         
            .video-wrapper video {
                top: 30px;
            }
            
        }
        
        @media screen and (max-width: 600px){
            
            .video-wrapper video {
                
                   width: 200% !important;
                   height: auto;
                   top: 75px !important;
                    margin-left: -44%;
            }
        }
    </style>


    <main id="main">
            <section class="banner-block">
            <!-- slick gallery structure example -->
                <div class="slick-slider">


                    <?php foreach($banner as $image){ ?>
                    <!--div class="slide" style="background-image: url(<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/PageBanner/file_name/'.$image->file_name ?>);" -->
                    <div class="slide">
                        <div class="video-wrapper">
                            <video autoplay muted loop style="width: 100%;"> <source src="https://amplifihub.s3.us-east-2.amazonaws.com/PageBanner/file_name/amplifihub-afrobeat-instrumentals-video.mp4" type="video/mp4">
                                    Your browser does not support HTML5 video.</video>
                        </div>
                        <div class="align">
                            <h1><?= $image->header_text  ?></h1>
                            <!-- <span class="slogan">Upload, Sell, Buy and Meet Professionals</span> -->
                            <form class="search-form" action="/beat-hub">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <input name="term" type="search" placeholder="Search for beats, genre or producer" class="form-control">
                                        <button class="search" style="border: none;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                     <?php } ?>
                     
                     
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
                                        <div class="img-holder control-wrap">
                                           <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px!important;']);?>
                                            <a href="javascript:void(0)" 
                                            data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?=h($promo['sample_name']);?>"
                                            song_type="<?=h($promo['lease_type']);?>" 
                                            data-name="<?=h(substr($promo['name'],0,10));?>"
                                            data-user="<?= h(substr($promo['user']['aka'], 0, 10));?>"
                                            bit-id="<?=h($promo['id']);?>" 
                                            class="play-wrap show play">
                                    <i class="fa fa-play"></i>
                            </a>
                            <a class="pause-wrap hide play">
                                <i class="fa fa-pause"></i>
                                <?php // $this->Html->image('pause-128.png', ['class' => ['img-responsive', 'pause'], 'style' => 'width: 34px;height: 34px;margin-top: 12px;margin-left: 10px;']); ?>
                            </a>
                                        </div>
                                        <div class="text-holder">
                                            <span class="name"><?php if(strlen($promo->user->aka) > 8){ echo substr($promo->user->aka,0,8). "..";}else{echo $promo->user->aka;}?></span>
                                        </div>
                                        <a class="btn addtocart" data-id="<?php echo $promo['id'];?>" >
                                            <i class="fa fa-shopping-cart"> ₦</i><?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                    </div>
                                </a>
                            </div>
                         <?php endforeach;  ?>
                    </div>
                </div>
            </section>
            <section class="beats-block container-fluid">
                <div class="holder">
                    <span class="heading">RECENT UPLOADS</span>
                    <div class="row">
                         
                        <?php foreach ($recent as $promo):?>
                         <div class="col">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="img-holder control-wrap">
                                           <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px!important;height:116px!important;']);?>
                                            <a href="javascript:void(0)" 
                                            data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?=h($promo['sample_name']);?>"
                                            song_type="<?=h($promo['lease_type']);?>" 
                                            data-name="<?=h(substr($promo['name'],0,10));?>"
                                            bit-id="<?=h($promo['id']);?>" 
                                            data-user="<?= h(substr($promo['user']['aka'], 0, 10));?>"
                                            class="play-wrap show play">
                                    <i class="fa fa-play"></i>
                            </a>
                            <a class="pause-wrap hide play">
                                <i class="fa fa-pause"></i>
                                <?php // $this->Html->image('pause-128.png', ['class' => ['img-responsive', 'pause'], 'style' => 'width: 34px;height: 34px;margin-top: 12px;margin-left: 10px;']); ?>
                            </a>
                                        </div>
                                        <div class="text-holder">
                                            <span class="name"><?php if(strlen($promo->user->aka) > 8){ echo substr($promo->user->aka,0,8). "..";}else{echo $promo->user->aka;}?></span>
                                        </div>
                                        <a class="btn addtocart" data-id="<?php echo $promo['id'];?>" >
                                            <i class="fa fa-shopping-cart"> ₦</i><?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                    </div>
                                </a>
                            </div>
                         <?php endforeach;  ?>
                    </div>
                    <a href="https://amplifihub.com/beat-hub">CLICK FOR MORE BEATS</a>
                </div>
            </section>
            <section class="intro-block container-fluid">
                <div class="bg" style="background-image: url(/images/img06.png);">
                    <div class="text-wrapper">
                        <h1>Earn While You Create.</h1>
                        <div class="text">
                            <p>With AmplifiHub it's easy for music makers in Africa to get paid while doing what they love. So whether you are a music producer, sound engineer, artiste, songwriter or video director, AmplifiHub is the right place for you.</p>
                        </div>
                        <h1>Who Are We?</h1>
                        <div class="text">
                            <p>AmplifiHub is home to many professionals who make good African music. You can sell African beats, buy African beats and offer professional African music making services here.</p>
                        </div>
                    </div>
                    <div class="img-holder">
                        <img src="/images/africamap-1.png" alt="african map with flags">
                    </div>
                    <a href="/sign-up" class="btn">Sign Up</a>
                </div>
            </section>
            <section class="info-block container-fluid">
                <div class="bg">
                    <div class="text-wrapper">
                        <h1>AmplifiHub's</h1>
                        <span class="slogan"><span class="red">Main</span> Features</span>
                        <ul class="feature-list">
                            <li><a href="#">African Music Making Service Hub</a></li>
                            <li><a href="#">Main African Beat Store</a></li>
                            <li><a href="#">Personal Beat Store For African Music Producers</a></li>
                            <li><a href="#">Html5 Beat Stores For Music Producers</a></li>
                            <li><a href="#">Personal Music Making Service Hub For Every User</a></li>
                            <li><a href="#">Instant Payment</a></li>
                        </ul>
                    </div>
                    <div class="img-holder">
                        <img src="/images/clipp.png" alt="amplifihub features">
                    </div>
                </div>
            </section>
            <section class="join-block container-fluid">
                <div class="bg" style="background-image: url(images/img09.jpg);">
                    <h1>Join The New Wave</h1>
                    <div class="text">
                        <p>African music has gone beyond the streets of Africa. Don't be left out.</p>
                    </div>
                    <div class="video-holder">
                        <iframe src="<?= $youtubeVideo->videolink ?>" allow="autoplay; encrypted-media" allowfullscreen="" width="650" height="415" frameborder="0"></iframe>
                    </div>
                    <a href="/sign-up" class="btn">Sign Up</a>
                </div>
            </section>
            <section class="beathub-block container-fluid">
                <div class="bg" style="background-image: url(images/img10.jpg);">
                    <h1>Buy African Beats, Meet African Music Producers and Sound Engineers</h1>
                    <div class="text">
                        <p>Looking for really cool African beats and professional African music producers for your next project? Look no further because we got the best African beats, music producers and sound engineers in the game.</p>
                    </div>
                    <a href="/beat-hub" class="btn">Visit Our Beat Hub</a>
                </div>
            </section>
            <section class="user-info container-fluid">
                <div class="bg">
                    <h1>AmplifiHub's Power Users</h1>
                    <div class="row">
                       
                        <?php foreach($powerUser as $pUser){ 



                        ?>
                        <div class="col">
                            <div class="img-holder">
                                <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/<?= $pUser->photo ?>" alt="amplifihub afrobeat power users">
                            </div>
                            <span class="user-name"><?= $pUser->aka ?> <span class="icon"><?php if (!empty($pUser->is_verified)) { ?><img src="/images/img13.png" alt="verification tag"><?php } ?></span> </span>
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
                <div class="bg" style="background-image: url(images/img11.jpg);">
                    <h1>Take Your Studio Online Today</h1>
                    <a href="/sign-up" class="btn">Join Us</a>
                </div>
            </section>
        </main>