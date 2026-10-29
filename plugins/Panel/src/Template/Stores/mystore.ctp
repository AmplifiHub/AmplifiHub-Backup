<!--fiverr.com/ameerhamzanawaz-->
<?php
    //var_dump( count($promoted) );exit();

    shuffle( $promoted);
    $promoted = array_slice($promoted, 0, 6);
    ?>
    
    <head><meta name="keywords" content="Afrobeat Instrumental for sale, Afro beat, Afro instrumental beats, buy afrobeat instrumentals, naija beats download, afro pop beats, download afrobeat instrumentals, download Nigerian beats, Nigerian Afrobeat Instrumental, African beats, buy African beats, afro trap beats, afro hip hop beats download, 9ja beats instrumental, Nigerian beats, South African beats, Afrobeat Instrumental,music production"></head>
    
<style>
    @media (min-width: 360px) and (max-width: 399px){
        .fa{
        /*    font-size: 20px;
            color: #E40D40;*/
        }
        .menu li.light-blue {
	        background-color: #666;
	        padding-top: 10px;
        }
        .menu li {
	     -webkit-box-flex: 1;
	     -ms-flex-positive: 1;
	     flex-grow: 1;
	     padding: 20px 32px 10px 20px;
	     text-align: center;
	     position: relative;
        }
}

    }
    @media (min-width: 400px) and (max-width: 599px){
        .fa{
            /*font-size: 20px;
            color: #E40D40;*/
        }
        .menu li.light-blue {
	        background-color: #666;
	        padding-top: 10px;
        }
        .menu li {
	     -webkit-box-flex: 1;
	     -ms-flex-positive: 1;
	     flex-grow: 1;
	     padding: 20px 32px 10px 20px;
	     text-align: center;
	     position: relative;
        }
}
    }
          @media only screen and (min-width: 300px) and (max-width: 481px) {
  div.img-holder-promoted-right {
        height:177px!important;
        overflow: hidden!important;
    }
            }
                @media only screen and (min-width: 1040px) and (max-width: 1400px) {
   div.img-holder-promoted-right {
        height:78px!important;
        overflow: hidden!important;
    }
            }
            
    @media (min-width: 320px) and (max-width: 1030px){
		div#storeHolder, div#mystoreHolder {
    max-height: 700px;
    overflow: auto;
    height: 500px !important;
    border-radius: 10px;
    
		    }
		}
</style>
<div id="preloder">
    <div class="loader"></div>
</div>

<section class="booking-block container-fluid">
    <div class="bg style2">
        <div class="user-box style2">
            <div class="user style2">
                <div class="img-holder">
                  <!-- <img src="/images/img12.jpg" alt="image description"> -->
                    <?php $profilePhoto = $userProfile->photo; ?>
                    <?= $this->Html->image("https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/$profilePhoto", ['class' => [], 'id' => 'd']); ?>
                </div>
                <div class="info">
                    <input type="hidden" name="storeName" id="storeName" value="<?php echo $userProfile->aka; ?>">
                    <div class="name"><?php echo $userProfile->aka; ?><?php if (!empty($userProfile->is_verified)) { ?><span class="icon"><img src="/images/badge.svg" alt="amplifihub african afro beat music producer beat store instrumental image"></span><?php } ?></div>
                    <a href="#" class="btn gold">MUSIC PRODUCER</a>
                    <div class="social-networks" style="display: none;">
                        <div class="rating" >
                          <!-- <span class>Rate User</span> -->
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                            <input type="radio" id="star3" name="rating"  value="3" /><label for="star3" title="Meh">3 stars</label>
                            <input type="radio" id="star2" name="rating"  value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                            <input type="radio" id="star1" name="rating"  value="1" /><label for="star1" title="Sucks big time">1 star</label>
                        </div>
                        <ul class="rating-list" style="display: none;">
                            <li><a onclick="rating(1)" ><i class="fa fa-star"></i></a></li>
                            <li><a onclick="rating(2)"><i class="fa fa-star"></i></a></li>
                            <li><a onclick="rating(3)"><i class="fa fa-star"></i></a></li>
                            <li><a onclick="rating(4)"><i class="fa fa-star"></i></a></li>
                            <li><a onclick="rating(5)"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <a href="#" class="comment"><i class="fa fa-star"></i> <?= h($countraters) ?></a>
                    </div>
                </div>
            </div>
            <div class="text-holder">
                <p><?php echo $userProfile->bio; ?></p>
            </div>
        </div>
    </div>
</section>
<section class="beatstore-block container-fluid" style="margin-bottom:80px;">
    <div class="row">
        <div class="col">

            <?= $this->Form->create(null, ['url' => "/mystore/$userProfile->aka", 'type' => 'get', 'class' => "search-form", 'style' => "background:none;"]) ?>
            <div class="form-group">
                <div class="input-wrap">
                    <button style="border: none;" href="#" class="search"><i class="fa fa-search fa-2x" style="opacity:0.1; color:#666;font-size:40px;"></i></button>
                    <input type="searach" name="beats" class="form-control" placeholder="Search Beats and Genre">
                </div>
            </div>
            <?= $this->Form->end() ?>
            <ul class="menu">
                <li>
                    <select class="form-control" id="genre1" style="background-color:#666;">
                        <option value="0">Or Sort by Genre</option>
                        <?php if (!empty($genres)) foreach ($genres as $genre): ?>
                            <option <?php
                            if ($genreId == $genre->id) {
                                echo 'selected';
                            }
                            ?> value="<?= h($genre->id); ?>"><?= h($genre->genre); ?></option>
                            <?php endforeach; ?>

                    </select>
                </li>
                <?php if (!empty($genres)) foreach ($genres as $key => $genre):
                    if ($key > 3) {
                        continue;
                    }
                    ?>
                    <li><a href="/mystore/<?= $userProfile->aka ?>/?genre=<?= $genre->id ?>"><?= h($genre->genre); ?></a></li>
                <?php endforeach; ?>

            <!--    <li class="light-blue" style="border-radius:10px"><a href="/mixer/<?= $userProfile->id ?>">Mix</a></li> -->
            </ul>
            <div style="text-align:center;margin-bottom: 20px;border: 1px solid #333;background: #202020;border-radius: 10px;">
               
               <p style="font-size: 14px;line-height: 2; padding: 25px;margin-bottom: 0; color:yellow;">NB: Pricing is in Nigerian Naira (₦). You can pay in USD with PayPal at the checkout page.</p>
            </div>
            <div class="table-wrapper" style="height:600px; scrollbar-width: none;" id="mystoreHolder">
                <table class="beat-table">
                    <tbody>
                    <?php if($substatus == 'active'){ ?>
                        <?php if(!empty($stores)) foreach ($stores as $store): ?>
                        <?php //if(!empty($exclusive)) foreach ($exclusive as $exc){ if($store->id != $exc['beat_id'] ){ ?>
                            <tr class="beatslist"    id="<?php echo $store->id; ?>">
                                <td>
                                    <div class="control-wrap">
                                        <a href="javascript:void(0)"
                                           data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($store->sample_name); ?>"
                                           data-type="<?= h($store->lease_type); ?>"
                                           data-name="<?= h(substr($store->name, 0, 10)); ?>"
                                           data-user="<?= h(substr($store->user->aka, 0, 10)); ?>"
                                           class="play-wrap show play">
                                            <i class="fa fa-play" style="color:#E30D40;font-size:40px"></i>
                                        </a>
                                        <a class="pause-wrap hide play">
                                            <i class="fa fa-pause" style="color:#E30D40;font-size:40px"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="img-holder">
                                        <img src="<?= "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-" . $store->cover ?>" alt="amplifihub african afro beat instrumental image">
                                    </div>
                                </td>
                                <?php if($store->user->aka){
                                $string=$store->user->aka;
                                $string1=str_replace(' ', '-', $string);
                                ?>
                                <td>
                                    <span class="beat"><a href="/beat-hub-detail/<?=  $store->id; ?>">
                                        <?php echo (strlen($store->name) > 8) ? substr($store->name, 0, 8) . ".." : $store->name; ?>
                                      </a>
                                      </span>
                                    <span class="beat-info"><?= (isset($store->_matchingData['Genres']->genre)) ? h($store->_matchingData['Genres']->genre) : h($store->genre->genre); ?> ||  <?= h($store->bpm) ?>bpm</h6></span>
                                    <span class="product"><?= $this->Html->link(h($store->user->aka), '/mystore/' . $string1); ?></span>
                                </td>
                                <td>
                                    <span class="product"><?= $this->Html->link(h($store->user->aka), '/mystore/' . $string1); ?></span>

                                </td>
                                <?php } ?>
                                <td>
                                    <span>
							<button class="like" data="<?php echo $store->id; ?>"><i class="fa fa-thumbs-up"></i>
                                        <span class="likes<?php echo $store->id; ?>"><?= $store->likes; ?></span>
                                                                  </button>
                                                          
                                <button class="share" data-id="<?php echo $store->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </span>
                                </td>
                                <td>

                                    <?php if ($store->lease_price) { ?>
                                        <a class="btn addtocart" data-id="<?php echo $store->id; ?>" >
                                            <i class="fa fa-shopping-cart"></i> ₦<?= $store->lease_price ? h(number_format($store->lease_price)) : h(0) ?>+
                                        </a>
                                    <?php } else { ?>

                                        <a class="btn freedownload">
                                            <i class="fa fa-download"></i> Free Beat
                                        </a>
                                        <div class="download-link">
                                            <?php
											    $userid = $this->request->session()->read('Auth.User.id');
											    if(!empty($userid)){ ?>
                                            <a store-id="<?php echo $store->id; ?>"  class="btn-free-download" download="download" href="<?= $this->Url->build('/freebeats/download/lease_name/'. $store->lease_name) ?>" style="font-size:11px;" >
                                                Download<i class="fa fa-download"></i>
                                            </a>
                                            <?php }else{ ?>
												<a style="font-size:11px; color:red;" href="/login" >Please login first to download free beat</a>
												<?php } ?>
                                        </div>

                                    <?php } ?>
                                </td>
                            </tr>
                        <?php //} } ?>
                        <?php endforeach; ?>
                    <?php } ?>
                    </tbody>
                </table>
                <div id="noBeats" style="display:none">
                    <p>No more Beats</p>
                </div>
            </div>
        </div>
        <div class="col">
      <!--      <div class="cart">
                <div class="bg">
                    <span class="title">beat cart</span>
                    <div id="cart-wrap"></div>
                    <a href="/carts/view" class="btn green">checkout</a>
                </div>
            </div>
            <!--
                        <div class="cart" style='display:none'>
                            <div class="bg">
                            <span class="title">beat cart</span>
                                <a href="/carts/view" class="btn green">
                                    <div id="cart-wrap"></div>
                                </a>
                            </div>
                        </div>
            -->
            <div class="beats-block">
                <div class="holder">
                    <span class="heading">PROMOTED BEATS</span>
                    <div class="row">

                        <?php if(empty($exclusive)){ foreach($promoted as $promo){ ?>
                            <div class="col">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="img-holder control-wrap img-holder-promoted-right"  style="overflow: hidden;" >
                                            <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/' . $promo['cover'], ['class' => ' ', 'style' => 'width:177px!important;border:2px solid #666; border-radius: 10px;']); ?>
                                            <a href="javascript:void(0)"
                                               data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($promo['sample_name']); ?>"
                                               song_type="<?= h($promo['lease_type']); ?>"
                                               data-name="<?= h(substr($promo['name'], 0, 10)); ?>"
                                               data-user="<?= h(substr($promo['user']['aka'], 0, 10)); ?>"
                                               class="play-wrap show play">
                                                <i class="fa fa-play" style="color:#E30D40;font-size:50px"></i>
                                            </a>
                                            <a class="pause-wrap hide play">
                                                <i class="fa fa-pause" style="color:#E30D40;font-size:50px"></i>
                                            </a>
                                        </div>
                                        <div class="text-holder">
                                            <span class="name"><span style="color:yellow;font-size:12px;">Ad</span><a href="/beat-hub-detail/<?=  $promo->id; ?>" >
                                  <?php
                                                if (strlen($promo->user->aka) > 8) {
                                                    echo substr($promo->user->aka, 0, 8) . "..";
                                                } else {
                                                    echo $promo->user->aka;
                                                }
                                                ?></span>
                                        </div>
                                        <?php if(!empty($promo->lease_price)){ ?>
                                        <a class="btn addtocart" data-id="<?php echo $promo['id'];?>" >
                                            <i class="fa fa-shopping-cart"></i> ₦<?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                            <?php }else{ ?>

                                                <?php if(!empty($userid)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn" download="download" href="<?= $this->Url->build('/freebeats/download/lease_name/'. $promo->lease_name) ?>" style="color:#41aa5e;" ><i class="fa fa-download"></i>  Download
                                            </a>
                                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn"><i class="fa fa-download"></i> Free Beat</a><?php } ?>

                                            <?php } ?>
                                    </div>
                                </a>
                            </div>

                        <?php } }else{ ?>

                        <?php if (!empty($promoted)) foreach ($promoted as $promo) { ?>
                        <?php if (!empty($exclusive)) foreach ($exclusive as $exc){ if($promo['id'] != $exc['beat_id'] ){ ?>
                            <div class="col">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="img-holder control-wrap img-holder-promoted-right"  style="overflow: hidden;" >
                                            <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/' . $promo['cover'], ['class' => ' ', 'style' => 'width:177px!important;border:2px solid #666; border-radius: 10px;']); ?>
                                            <a href="javascript:void(0)"
                                               data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($promo['sample_name']); ?>"
                                               song_type="<?= h($promo['lease_type']); ?>"
                                               data-name="<?= h(substr($promo['name'], 0, 10)); ?>"
                                               data-user="<?= h(substr($promo['user']['aka'], 0, 10)); ?>"
                                               class="play-wrap show play">
                                                <i class="fa fa-play" style="color:#E30D40;font-size:50px"></i>
                                            </a>
                                            <a class="pause-wrap hide play">
                                                <i class="fa fa-pause" style="color:#E30D40;font-size:50px"></i>
                                            </a>
                                        </div>
                                        <div class="text-holder">
                                            <span class="name"><span style="color:yellow;font-size:12px;">Ad</span><a href="/beat-hub-detail/<?=  $promo->id; ?>" >
                                  <?php
                                                if (strlen($promo->user->aka) > 8) {
                                                    echo substr($promo->user->aka, 0, 8) . "..";
                                                } else {
                                                    echo $promo->user->aka;
                                                }
                                                ?></span>
                                        </div></a>
                                        <div>
							<button class="likecontainer like" data="<?php echo $promo->id; ?>" ><i class="fa fa-thumbs-up"></i>  
                                                            <span class="likes<?php echo $promo->id; ?>"><?= $promo->likes; ?></span>
                                                          </button>
                                                          
                                <button class="sharecontainer share" data-id="<?php echo $promo->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </div>
                                        <?php if(!empty($promo->lease_price)){ ?>
                                        <a class="btn addtocart" data-id="<?php echo $promo['id'];?>" >
                                            <i class="fa fa-shopping-cart"></i> ₦<?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                            <?php }else{ ?>

                                                <?php if(!empty($userid)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn" download="download" href="<?= $this->Url->build('/freebeats/download/lease_name/'. $promo->lease_name) ?>" style="color:#41aa5e;" ><i class="fa fa-download"></i>  Download
                                            </a>
                                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn"><i class="fa fa-download"></i> Free Beat</a><?php } ?>

                                            <?php } ?>
                                    </div>
                                </a>
                            </div>
                        <?php } } ?>

                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .cart a {
        /* padding: 0px !important; */
        height: unset !important;;
        width:  unset !important;
    }


    .cart {
        background-color: #333 !important
    }
    .cart a:hover {
        background-color: #5abaa7 !important;
    }
    .download-link{
        display: none;
    }
    .beat-table .play{
	color:#E30D40;
	font-size:40px;
	}
</style>
<script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#preloder").hide();
                $(".loader").hide();
            }, 3500);
        });
    </script>