<!--fiverr.com/ameerhamzanawaz-->
<?php
    shuffle($promoted); // randomize the promoted
    $promoted = array_slice($promoted, 0, 8);

    ?>
    
    <head><meta name="keywords" content="freebeats, download freebeats, download instrumentals, free instrumentals, free beats, download free beats, 9ja free beats, naija free beats, free african beats, free afro beats, nigerian beats free download, royalty free beats, tracks, free afrosoul beats, afrotrap beats, instrumentals

"></head>
<style>
    @media (min-width: 360px){
        .tranding-beats .tranding-list li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .tranding-beats .tranding-list li .beat-info{
            display: contents;
        }

        .tranding-beats .tranding-list li .beat{
            margin: 0px;
        }

        .control-wrap {
            margin-top: 10px;
        }

        .producer-block .col{
            width: 50% !important;
        }

        /*.fa{
            font-size: 20px;*/
        }

        .producer-block .name {
            font-size: 13px;
        }

        .producer-block .btn{
            min-width: 100%;
        }
    }
      div.img-holder-promoted-right {
        height:78px;
        overflow: hidden;
    }
    
    @media (min-width: 320px) and (max-width: 599px){
		div#storeHolder, div#mystoreHolder {
    max-height: 700px !important;
    overflow: auto;
    height: 500px !important;
    border-radius: 10px;
		    }
	div.img-holder-promoted-right {
        height:177px;
        overflow: hidden;
    }
		}
</style>
<div id="preloder">
<div class="loader"></div>
</div>
<section class="producer-block container-fluid" style="padding-bottom:30px">
    <div class="bg">

    </div>
    <div class ="page-text-container1" style= "padding-top:80px;" >
<h1>Download Free African Beats / Instrumentals Here On AmplifiHub.</h1>
</div>
</section>

<div id="461561224">
    <script type="text/javascript">
        try {
            window._mNHandle.queue.push(function (){
                window._mNDetails.loadTag("461561224", "728x90", "461561224");
            });
        }
        catch (error) {}
    </script>
</div>

<section>
    <div class="bg" style="text-align:center;margin-bottom: 20px;border: 1px solid #333;background: #202020;border-radius: 10px;">
            <a href="/beat-hub" class="btn freedownloads" style="text-align:center;margin: 20px; border: 1px solid #E30D40;">Click Here To Buy Beats</a></div>
</section>
<section class="beatstore-block container-fluid">
    <div class="row">
        <div class="col">
            <?= $this->Form->create(null, ['url' => '/freebeats', 'type' => 'get', 'class' => "search-form" , 'style'=>"background:none;"]) ?>

            <div class="form-group">
                <div class="input-wrap">
                    <button class="search" style="border: none;">
                        <i class="fa fa-search" style="opacity:0.1;color:#666;font-size:40px;"></i>
                    </button>
                    <input name="term" type="searach" class="form-control" placeholder="Search Beats and Genre">
                </div>
            </div>
            <?= $this->Form->end() ?>
            <ul class="menu">
                <li>
                    <select class="form-control" id="genresearch-freebeats" style="background-color:#666;">
                        <option value="">Or Sort by Genre</option>
                        <?php foreach ($genres as $genre): ?>
                            <option <?php
                            if ($genreId == $genre->id) {
                                echo 'selected';
                            }
                            ?> value="<?= h($genre->id); ?>"><?= h($genre->genre); ?></option>
                            <?php endforeach; ?>

                    </select>
                </li>
                <?php
                foreach ($genres as $key => $genre):
                    if ($key > 3) {
                        continue;
                    }
                    ?>
                    <li><a href="/freebeats?genre=<?= $genre->id ?>"><?= h($genre->genre); ?></a></li>
                <?php endforeach; ?>

            </ul>
            <div class="table-wrapper" style="height:500px;scrollbar-width: none;" id="storeHolderFree" >
                <table class="beat-table">
                    <tbody>
                        <?php

                        $userid = $this->request->session()->read('Auth.User.id');
                         foreach ($stores as $store): ?>
                            <tr class="beatslist"    id="<?php echo $store->id; ?>">
                                <td>
                                    <div class="control-wrap">
                                        <a href="javascript:void(0)"
                                           data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($store->sample_name); ?>"
                                           data-type="<?= h($store->lease_type); ?>"
                                           data-name="<?= h(substr($store->name, 0, 10)); ?>"
                                           bit-id="<?= h($store['id']); ?>"
                                           data-user="<?= h(substr($store->_matchingData['Users']->aka, 0, 10)); ?>"
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
                                        <?php
                                        $coverImage = !empty($store->cover) ? "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/thumbnail-" . $store->cover : '/img/default_cover_image.jpg';
                                        ?>
                                        <img src="<?= $coverImage ?>" alt="amplifihub african afro beat instrumental image">
                                    </div>
                                </td>
                                <?php if($store->_matchingData['Users']->aka){
                                $string=$store->_matchingData['Users']->aka;
                                $string1=str_replace(' ', '-', $string);
                                ?>
                                <td>
                                    <span class="beat"><a href="/beat-hub-detail/<?=  $store->id; ?>">
                                        <?php echo (strlen($store->name) > 8) ? substr($store->name, 0, 8) . ".." : $store->name; ?>
                                      </a>
                                      </span>
                                    <span class="beat-info"><?= (isset($store->_matchingData['Genres']->genre)) ? h($store->_matchingData['Genres']->genre) : h($store->genre->genre); ?> ||  <?= h($store->bpm) ?>bpm</h6></span>
                                    <span class="product"><?= $this->Html->link(h($store->_matchingData['Users']->aka), '/mystore/' . $string1); ?></span>
                                </td>
                                <td>
                                    <span class="product"><?= $this->Html->link(h($store->_matchingData['Users']->aka), '/mystore/' . $string1); ?></span>
                                </td>
                                <?php } ?>
                                <td></a>
                                    <div>
							<button class="like" data="<?php echo $store->id; ?>" ><i class="fa fa-thumbs-up"></i>
                                                            <span class="likes<?php echo $store->id; ?>"><?= $store->likes; ?></span>
                                                          </button>
                                                          
                                <button class="share" data-id="<?php echo $store->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </div>
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
											    if(!empty($userid)){ ?>
                                            <!--<a store-id="<?php echo $store->id; ?>"  class="btn-free-download" download href="<?= "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" . $store->lease_name ?>" style="font-size:11px;" >-->
                                            <a store-id="<?php echo $store->id; ?>"  class="btn-free-download" download href="<?= $this->Url->build('/freebeats/download/lease_name/'. $store->lease_name) ?>" style="font-size:11px;" >
                                                Download<i class="fa fa-download"></i>
                                            </a>
                                            <?php }else{ ?>
												<a style="font-size:11px; color:red;" href="/login" >Please login first to download free beat</a>
												<?php } ?>
                                        </div>

                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div id="noBeats" style="display:none">
                    <p>No more Beats</p>
                </div>
            </div>
            
            
        </div>
        
        <div class="col">
           <div class="bg" style="text-align:center;margin-bottom: 20px;border: 1px solid #333;background: #202020;border-radius: 10px;">
               <h2 style="text-align: center;margin: 0;padding-top: 15px;">Need to purchase African beats?</h2>
               <p style="font-size: 14px;line-height: 2; padding: 25px;margin-bottom: 0;">Listen before you buy beats. AmplifiHub got the best African music producers and African afro beats in the game!</p>
            <a href="/beat-hub" class="btn freedownloads" style="text-align:center;margin: 20px;border: 1px solid #E30D40;">Click Here To Buy Beats</a></div>
            <div class="cart">
              <!--  <div class="bg">
                    <span class="title">beat cart</span>
                    <div id="cart-wrap"></div>
                    <a href="/carts/view" class="btn green">checkout</a>
                </div>
            </div>-->
            <div class="beats-block" style="padding-top:0;margin-bottom:80px;background:#262626;">
                <div class="holder">
                    <h2 class="heading">PROMOTED BEATS</h2>
                    <div class="row">
						    <?php if(empty($exclusiveBeatHub)){ foreach($promoted as $promo){ ?>
                            <div class="col">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="img-holder control-wrap img-holder-promoted-right"  style="height:124px;overflow: hidden;" >
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

                                                <?php if(!empty($userid)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn" download="download" href="<?= $this->Url->build('/freebeats/download/lease_name/'. $promo->lease_name) ?>" style="color:#41aa5e;" ><i class="fa fa-download"></i> Download
                                            </a>
                                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn"><i class="fa fa-download"></i> Free Beat</a><?php } ?>

                                            <?php } ?>
                                    </div>
                                </a>
                            </div>

                        <?php } }else{ ?>


							<?php $promoted= array_slice($promoted, 0, 6);?>
							<?php foreach ($promoted as $promo) { ?>
								<?php foreach ($exclusiveBeatHub as $exc){ if($promo['id'] != $exc['beat_id'] ){ ?>

								<div class="col">
									<a href="javascript:void(0)">
										<div class="box">
											<div class="img-holder control-wrap img-holder-promoted-right">
												<?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/' . $promo['cover'], ['class'=>'img-fluid','style'=> 'width:177px;border:2px solid #666; border-radius: 10px;']);?>
												<a href="javascript:void(0)"
												   data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/<?= h($promo['sample_name']); ?>"
												   song_type="<?= h($promo['lease_type']); ?>"
												   data-name="<?= h(substr($promo['name'], 0, 10)); ?>"
												   bit-id="<?= h($promo['id']); ?>"
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

                                                <?php if(!empty($userid)){ ?><a   store-id="<?php echo $promo->id; ?>"  class="btn-free-download  btn" download="download" href="<?= $this->Url->build('/freebeats/download/lease_name/'. $promo->lease_name) ?>" style="color:#41aa5e;" ><i class="fa fa-download"></i>  Download
                                            </a>
                                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn"><i class="fa fa-download"></i> Free Beat</a><?php } ?>

                                            <?php } ?>
										</div>
									
								</div>
							<?php } } } } ?>
						</div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    header#header {
        height: 65px;
    }
    .download-link{
        display: none;
    }
    .cart a {
        /* padding: 0px !important; */
        height: unset !important;;
        width:  unset !important;
    }


    .cart {
        background-color: #333 !important
        box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
    }
    .cart a:hover {
        background-color: #5abaa7 !important;
    }
	.beat-table .play{
	color:#E30D40;
	font-size:40px;
	}
</style>
<?php $this->start('scriptBlock') ?>
<script>
var loggedInUserId = "<?php echo $userid; ?>";
$(document).ready(function(){
    console.log('-- Loaded')
  $('#genresearch-freebeats').change(function () {
     var value = $(this).val(); // get selected value
     if (value) { // require a URL
         window.location = 'freebeats?genre=' + value; // redirect
     } else {
         window.location = 'freebeats'; // redirect

     }
 });

 var $contentLoadTriggered = false;
 $("#storeHolderFree").on('scroll', function () {
    console.log('-- Started')
    if ($contentLoadTriggered == false) {
        console.log('-- Started scroll load')
         $contentLoadTriggered = true;
        // var url = $('#infinitystore').val();
        var url = '/stores/infinity-store-list'
         var last_id = $(".beatslist:last").attr("id");
         //var url = 'infinity-scroll-list?id='+ last_id + '&store=' + store_name;
         $('#ajax-load').show();

         $.ajax({
             url: url + '?id=' + last_id,
             error: function () {
                 console.log('-- Error scroll load')
             },

             success: function (data) {
                 $('#ajax-load').delay(1000).hide();
                 console.log('-- Success scroll load')
                 var value = jQuery.parseJSON(data);
                 if (value.length > 0) {
                     jQuery.each(value, function (i, val) {
                         if (!val.cover) {
                             var coverImage = "/img/default_cover_image.jpg";
                         } else {
                             var coverImage = 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/' + val.cover;
                         }
                         if (!val.lease_price) {
                            var oldString=val._matchingData.Users.aka;
                            //var oldString="my test";
                            //alert(oldString);
                            var string1=oldString.replace(" ", "-");
                            //alert(string1);
                            if(loggedInUserId){
                             $('#storeHolderFree table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat"><a href="/beat-hub-detail/'+val.id+'">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</a></span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span> </td> <td><span><button class="like" data="' + val.id + '" ><i class="fa fa-thumbs-up"></i> '+val.likes+'<span class="likes'+val.id+'"></span> </button> <button class="share" data-id="'+val.id+'" ><i class="fa fa-share"></i></button></span></td> <td> <a class="btn freedownload"><i class="fa fa-download"></i> Free Beat</a><div class="download-link"><a style="font-size:11px; color:red;"  store-id="'+val.id+'"  class="btn-free-download"  href="<?= $this->Url->build('/freebeats/download/lease_name/') ?>' + val.lease_name + '" >Download</a></div> </td></tr>'); 
                            }else{
                             $('#storeHolderFree table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat"><a href="/beat-hub-detail/'+val.id+'">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</a></span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span> </td> <td><span><button class="like" data="' + val.id + '" ><i class="fa fa-thumbs-up"></i> '+val.likes+'<span class="likes'+val.id+'"></span> </button> <button class="share" data-id="'+val.id+'" ><i class="fa fa-share"></i></button></span></td> <td> <a class="btn freedownload"><i class="fa fa-download"></i> Free Beat</a><div class="download-link"><a style="font-size:11px; color:red;" href="/login" >Please login first to download free beat</a></div> </td></tr>');
                             }
                         } else {
                              var oldString=val._matchingData.Users.aka;
                            //var oldString="my test";
                            //alert(oldString);
                            var string1=oldString.replace(" ", "-");
                             $('#storeHolderFree table tbody').append('<tr class="beatslist" id="' + val.id + '"> <td> <div class="control-wrap"> <div tabindex="0" class="plyr plyr--a"><a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' + val.sample_name + '" data-type="' + val.lease_type + '" data-name="' + val.name.substr(0, 10) + '" bit-id="' + val.id + '" data-user="' + val._matchingData.Users.aka.substr(0, 10) + '" class="play-wrap show play"> <i class="fa fa-play"></i> </a></div><a class="pause-wrap hide play"> <i class="fa fa-pause"></i> </a> </div></td><td> <div class="img-holder"> <img src="' + coverImage + '" alt="image description"> </div></td><td> <span class="beat"><a href="/beat-hub-detail/'+val.id+'">' + ((val.name.length > 8) ? val.name.substr(0, 8) + '..' : val.name) + '</a></span> <span class="beat-info">' + val.genre.genre + ' || ' + val.bpm + 'bpm</span><span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span>  </td><td> <span class="product"><a href="/mystore/' + string1 + '">' + val._matchingData.Users.aka + '</a></span> </td><td><span><button class="like" data="' + val.id + '" ><i class="fa fa-thumbs-up"></i> <span class="likes'+val.id+'"></span> </button> <button class="share" data-id="'+val.id+'" ><i class="fa fa-share"></i></button></span></td><td> <a class="btn addtocart" data-id="' + val.id + '"> <i class="fa fa-shopping-cart"> </i> ₦' + number_format(val.lease_price) + '+</a> </td></tr>');
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



});
</script>
<?php $this->end() ?>

