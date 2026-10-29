<style>
		@media (min-width: 360px) and (max-width: 399px){
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

		/*	.control-wrap {
				margin-top: 10px;
			}*/

			.producer-block .col{
				width: 50% !important;
			}

			.fa{
				/*font-size: 20px;
				color: #E40D40;*/
			}

			.producer-block .name {
				font-size: 13px;
			}

			.producer-block .btn{
				min-width: 100%;
			}
		}
		@media (min-width: 400px){
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

		/*	.control-wrap {
				margin-top: 10px;
			}*/

			.producer-block .col{
				width: 50% !important;
			}

			.fa{
				/*font-size: 20px;
				color: #E40D40;*/
			}

			.producer-block .name {
				font-size: 13px;
			}

			.producer-block .btn{
				min-width: 100%;
			}
		}
	div.img-holder-promoted-center {
       height:124px;
        overflow: hidden;
    }

    div.img-holder-promoted-right {
       
        overflow: hidden;
    }
    @media (min-width: 400px) and (max-width: 599px){
		div#storeHolder, div#mystoreHolder {
    max-height: 700px;
    overflow: auto;
    height: 500px !important;
    border-radius: 10px;
		    }
		 div.img-holder-promoted-right {
       height:177px;
        overflow: hidden;
    }
		}
	@media (min-width: 300px) and (max-width: 399px){
	
	div.img-holder-promoted-right {
     height:120px;
    overflow: hidden;
    }
		}
</style>
<!--fiverr.com/ameerhamzanawaz-->
<?php shuffle($promoted); //randomize the promoted?>
<div id="preloder">
        <div class="loader"></div>
    </div>
<section class="booking-block container-fluid">
        <?= $this->Flash->render(); ?>
    <div class="bg" style="padding-bottom:5px;">
        <div class="user-box">
            <div class="user">
                <div class="img-holder">
                                    <?= (null !== $user['photo'] )? $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$user['photo'],['class'=>' '],['fullbase' => true]) : '<img src="/img/default.png" class="img-circle" alt="Upload Image" style="
    color: #f4f4f4;
">'; ?>
                </div>
                <div class="info">
                    <div class="name"><?= substr($user['aka'],0,15) ?><?php if (!empty($user['is_verified'])) { ?><span class="icon"><img src="/images/badge.png" alt="amplifihub african afro beat music producer beat store instrumental image"></span><?php } ?></div>
                    <a href="#" class="btn gold">SOUND ENGINEER</a>
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

                <p>
                            <?= h($user['bio']) ?>
                </p>

            </div>
        </div>
        </div>
        <aside class="aside">
            <div class="row">
                <div class="comments-block">











                    <ul class="game-info" style="
    background: #202020;
    border: 1px solid #333;
    border-radius: 10px;
">
                        <li class="li">

                             <div class="control-wrap">
                      <a href="javascript:void(0)"
                            data-id="<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/original/'.$beat_sample->original ?>"
                           song_type="<?= h(@$user->sample_song_type); ?>"
                           data-name="<?= h(@$user->song_title); ?>"
                           data-user="<?= h(substr(@$user['user']['aka'], 0, 10)); ?>"
                           class="play-wrap show play">
                            <i class="fa fa-play"></i>
                        </a>
                        <a class="pause-wrap hide play">
                            <i class="fa fa-pause"></i>
                        </a>
                    </div>





                            <span class="title" style="text-transform:none;"><i class="fa  fa-volume-off"></i>  Before Mixing</span>
                        </li>
                        <li class="li">



                                <div class="control-wrap">
                      <a href="javascript:void(0)"
                            data-id="<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/Mixmasterings/after/'.$beat_sample->after ?>"
                           song_type="<?= h(@$user->sample_song_type); ?>"
                           data-name="<?= h(@$user->song_title); ?>"
                           data-user="<?= h(substr(@$user['user']['aka'], 0, 10)); ?>"
                           class="play-wrap show play">
                            <i class="fa fa-play"></i>
                        </a>
                        <a class="pause-wrap hide play">
                            <i class="fa fa-pause"></i>
                        </a>
                    </div>




                            <span class="title" style="text-transform:none;"><i class="fa  fa-volume-up"></i>  After Mixing</span>
                        </li>
                    </ul>
                    <!-- tabs structure example -->
                    <ul class="tabset tabs">
                        <li>
                            <a href="#tab1-0" style="text-transform:none;"><i class="fa fa-edit"></i>  Book</a>
                        </li>
                        <li>
                            <a href="#tab2-0" style="text-transform:none;"><i class="fa fa-comments-o"></i>  Comments</a>
                        </li>
                        <li>
                            <a href="#tab3-0" style="text-transform:none;"><i class="fa fa-bullhorn"></i>  Complaints</a>
                        </li>
                    </ul>
                    <div class="tab-content tabs-body" style="margin-bottom:80px;">
                        <div id="tab1-0">
                        <?php if($this->request->session()->read('Auth.User')){ ?>
                            <div class="form-horizontal">
                  <?= $this->Form->create($mmrequester,['url'=>['controller'=>'mmrequesters','action'=>'book']]) ?>
                  <?= $this->Form->Control('user_id',['type'=>'hidden', 'default'=>$mixeruser_id]) ?>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label" style="color:#f4f4f4;">Artist/Band Name</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="artist_band_name" id="inputArtistName" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label" style="color:#f4f4f4;">Project Name</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="project_name" id="inputProjectName" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-3 control-label" style="color:#f4f4f4;"></label>
                                    <div class="col-sm-7"><span>Please enter each song title, followed by the number of tracks that comprise the song's multitrack file</span>
                                        <textarea class="form-control" id="inputExperience" name="song_description" placeholder="" style="color:#000;"></textarea>
                                        <span>Eg. Sky High (16), Moon Walk (32), Money Talk (8) etc.</span>
                                    </div>
                                </div>
                                <!-- radio -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" style="color:#f4f4f4;">Service Requested</label>
                                    <div class="col-sm-7">
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios1" value="mixing" checked>
                                                Mixing
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios2" value="Mastering">
                                                Mastering
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios3" value="mixing and mastering" >
                                                Mixing and Mastering
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios4" value="album mixing" >
                                                Album  Mixing
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios5" value="album mastering">
                                                Album Mastering
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label style="color:#f4f4f4;">
                                                <input type="radio" name="service_request" id="optionsRadios66" value="album mixing and mastering" >
                                                Album Mixing and Mastering
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-3 control-label" style="color:#f4f4f4;"></label>

                                    <div class="col-sm-7"><span>Paste File Download Links Here</span>
                                        <textarea class="form-control" id="file_download_link_mixing_mastering" name="download_link" style="color:#000;"></textarea>
                                        <span>Upload the files to a file sharing service and paste the download links here. Examples of some popular file sharing services are Wetransfer, Dropbox, Google drive etc.</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div id="deadline"> <label class="col-sm-3 control-label" style="color:#f4f4f4;">Project Deadline</label></div>
                                    <div class="input-group date col-sm-7" id="deadlinedate">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="datepicker" name="deadline">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                      <?= $this->Form->button(__('Place Order'),['class'=>'btn btn-primary center-block text-center','style'=>'background-color:#3bb75e;margin-top:50px;']) ?>
                                    </div>
                                </div>
                  <?= $this->Form->end() ?>
                            </div>

 <?php }else{ ?>
                                <h4 style="text-align: center;">
                                   <a href="/login" style="
    border: 1px solid #E40D40;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 13px;
    background: #333;
"><i class="fa fa-sign-in"></i>  Login To Place An Order</a>
                                </h4>
                            <?php } ?>

                        </div>
                        <div id="tab2-0">


<?php if($this->request->session()->read('Auth.User')){ ?>

                            <!-- Post -->
                            <div class="post clearfix">
                                <div id="commentresult"></div>
                                <!--?= $this->Form->create('add') ?-->
                                <!--form for getting comment in the mmrequesters profile-->
                                <div class="form-group margin-bottom-none">
                                    <div class="col-sm-12">
                                        <textarea rows="5" id ="comment" name="comment" class="form-control input-sm" style="color: #000; background: #ccc;" ></textarea>
                <?= $this->Form->Control('mixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                                    </div>

                                </div>

                                <div class="col-sm-12" style="margin-top: 0;">
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary pull-right comment', 'style'=>'background-color:#333;margin-top:5px;border: 1px solid #E40D40;']) ?>
                  
                  <ul class="list-inline">
                                    <li style="margin-top:12px;"><span class="dl link-black text-sm" onclick="like()" style="color:#fff;"><i class="fa fa-thumbs-o-up margin-r-5 like"></i> Like</span>
                                    </li>
                                    <li class="pull-right"><a href="#"  class="btn btn-warning btn-flat btn-xs view-comment" style="margin-top:5px;background-color:#202020;color:#3bb75e;border-radius:5px;">View comments</a></li>
                                </ul>
                                </div>
                                <!--?= $this->Form->end() ?-->

                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post">
                                <!-- /.row -->

                                <ul class="list-inline">
                                    
                                    <li class="pull-right">
                                        <span class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (<?= $countcomment ?>)</span></li>
                                    
                                </ul>
                                <div id='commentsdiv' style="color:#fff;margin-top: 70px;"></div>
                            </div>








 <?php }else{ ?>
                                <h4 style="text-align: center;">
                                   <a href="/login" style="
    border: 1px solid #E40D40;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 13px;
    background: #333;
"><i class="fa fa-sign-in"></i>  Login To Comment</a>
                                </h4>
                            <?php } ?>




                        </div>
                        <div id="tab3-0">






<?php if($this->request->session()->read('Auth.User')){ ?>





                            <!-- Post -->
                            <div id="complaintresult"></div>
                            <!-- Post -->
                            <div class="post clearfix" style="border-bottom: 1px solid #333;">
                    <?= $this->Form->create('complain',['class'=>'form-horizontal']) ?>
                                <div class="form-group margin-bottom-none">
                                    <div class="col-sm-12">
                                        <textarea rows="5" id ="rant" name="rant" class="form-control input-sm" style="color:#000;" ></textarea>
                        <?= $this->Form->Control('complaintmixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                        <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 20px;">
                        <?= $this->Form->button(__('Send'),['class'=>'btn btn-danger pull-right complaint','style'=>'background-color:#3bb75e;']) ?>
                                    </div>
                                </div>
                    <?= $this->Form->end() ?>
                            </div>
                            <!-- /.post -->

                            <!-- END timeline item -->
                            <!-- timeline item -->



                            <div class="timeline-item">


                                <div class="timeline-body">

                                </div>
                                <div class="timeline-footer">

                                </div>
                            </div>

                            <!-- END timeline item -->
                            <!-- timeline time label -->





                            <div class="timeline-item">
                                <span class="time"></span>


                                <div class="timeline-body">

                                </div>
                            </div>









 <?php }else{ ?>
                                <h4 style="text-align: center;">
                                   <a href="/login" style="
    border: 1px solid #E40D40;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 13px;
    background: #333;
"><i class="fa fa-sign-in"></i>  Login To Leave A Complaint</a>
                                </h4>
                            <?php } ?>








                        </div>
                    </div>
                </div>
                <div class="beats-block" style="margin-bottom:80px;">
                    <div class="holder">
                        <span class="heading">PROMOTED BEATS</span>
                        <div class="row">
                            <?php foreach ($promoted as $promo){ ?>
                            <div class="col">
                                <a href="javascript:void(0)">
                                    <div class="box">
                                        <div class="img-holder control-wrap img-holder-promoted-right" >
                                           <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px!important;border:2px solid #666; border-radius: 10px;']);?>
                                            <a href="javascript:void(0)"
                                               data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/<?=h($promo['lease_name']);?>"
                                               song_type="<?=h($promo['lease_type']);?>"
                                               data-name="<?=h(substr($promo['name'],0,10));?>"
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
                                            <span class="name"><span style="color:yellow;font-size:12px;">Ad</span><a href="/beat-hub-detail/<?=  $promo->id; ?>" >
                                  <?php
                                                if (strlen($promo->user->aka) > 8) {
                                                    echo substr($promo->user->aka, 0, 8) . "..";
                                                } else {
                                                    echo $promo->user->aka;
                                                }
                                                ?></span>
                                       </a> </div>
                                        
                                        <div>
							<button class="likecontainer like" data="<?php echo $promo->id; ?>" ><i class="fa fa-thumbs-up"></i> Like 
                                                            <span class="likes<?php echo $promo->id; ?>"><?= $promo->likes; ?></span>
                                                          </button>
                                                          
                                <button class="sharecontainer share" data-id="<?php echo $promo->id; ?>" ><i class="fa fa-share"></i></button> 
                                       </div>
                                       
                                        <?php if(!empty($promo->lease_price)){ ?>
                                        <a class="btn addtocart" data-id="<?php echo $promo['id'];?>" >
                                            <i class="fa fa-shopping-cart"></i> ₦<?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                            <?php }else{ ?>

                                                <?php if(!empty($mixeruser_id)){ ?><a  store-id="<?php echo $promo->id; ?>"  class="btn-free-download btn" download="download" href="<?= "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/" . $promo->lease_name ?>" style="color:#41aa5e;" ><i class="fa fa-download"></i>  Download
                                            </a>
                                            <?php }else{ ?><a style="color:#41aa5e;" href="/login" class="btn"><i class="fa fa-download"></i> Free Beat</a><?php } ?>

                                            <?php } ?>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    
</section>





















<script>


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

    function rating(rating){
       var user_id = $('#mixeruser-id').val(),

        type = $('#type').val(),
        url = '/ratings/add';
        $.post(url,{user_id:user_id,rating:rating, type:type},function(data){
            $('#rated').html(data);
        });
    }


</script>

<!--<script>
    var count = 1;
    $.ajax({
        url:'/addusercount',
        data: {'count':count},
        type:'POST',
        success: function(res)
        {
            console.log(res);
        },
        error: function(res)
        {
            console.log(res);
        }
    });
</script>
-->

<script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#preloder").hide();
                $(".loader").hide();
            }, 3500);
        });
    </script>