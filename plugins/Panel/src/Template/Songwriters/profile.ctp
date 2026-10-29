 <?php ?>

<section class="booking-block container-fluid">
    <div class="bg">
        <div class="user-box">
            <div class="user">
                <div class="img-holder">
                    <?php 
                      //  print_r($user);
                    ?>
<!--                    <img src="/images/img12.jpg" alt="image description">-->
                    <?= (null !== $user['user']['photo'] )? $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-'.$user['user']['photo'],['class'=>' '],['fullbase' => true]) : $this->Html->image('/img/default.png',['class'=>['img-responsive','img-circle'],'style' =>['margin: 0 auto']],['fullbase' => true]);?>
                </div>
                <div class="info">
                    <div class="name">

                        <?= h($user['user']['aka']) ?> 
                        <span class="icon">
                            <img src="/images/img13.png" alt="amplifihub songwriter and songwriting image">
                        </span>
                    </div>
                    <a href="#" class="btn gold">songwriter</a>
                    <div class="social-networks">
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
                
                <p><?=  @$user->user->bio ?></p>
                
            </div>
        </div>
        <aside class="aside">
            <div class="row">
                <div class="comments-block">
                    
                    <ul class="game-info">
                        <li class="li">
                            <div class="control-wrap">


                        <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Songwriters/sample_song/<?= h(@$user->sample_song); ?>"
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
                            <span class="title"><?= h($user->song_title) ?></span>
                            <span class="info">genre</span>
                        </li>
                    </ul>
                    <!-- tabs structure example -->
                    <ul class="tabset tabs">
                        <li>
                            <a href="#tab1-0">book</a>
                        </li>
                        <li>
                            <a href="#tab2-0">comments</a>
                        </li>
                        <li>
                            <a href="#tab3-0">complaints</a>
                        </li>
                    </ul>
                    <div class="tab-content tabs-body">
                        <div id="tab1-0">
<?php if($this->request->session()->read('Auth.User')){ ?>

                            <div class="songwriters form large-9 medium-8 columns content">
                                <div class="panel-body">

    <?= $this->Form->create('Book',['url'=>['controller' => 'swriterequests','action'=>'book']]) ?>
                                    <fieldset>
                                        <!--div class="form-group" >
         <?php //echo $this->Form->control('artiste_id', ['options' => $artistes,'class'=>'form-control']); ?></div-->

                                        <div class="form-group">
         <?php echo $this->Form->control('songwriter_id',['type'=>'hidden', 'default'=>$mixeruser_id]) ?>
                                        </div>
                                        <div class="form-group"><?php echo $this->Form->control('song_title', ['class'=>'form-control', 'label'=>'Song title','required' => true]); ?></div>
                                        <div class="form-group">
           <?php echo $this->Form->input('job_descriptions', array('templates' => ['inputContainer' => '{{content}}'],
    'label' => 'What can we help you with?',
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => $jobDescriptions));?>
                                        </div>
                                        <div class="form-group">
        <?php echo $this->Form->control('reference_link', ['class'=>'form-control', 'label'=>'Paste Download Links to Instrumental Or Partially Recorded Track Here','required' => true]); ?>   
                                        </div>
                                        <p>If you got the beat or like a roughly recorded version of the track. We need this information to give you want you want.</p>

                                        <div class="form-group">
           <?php echo $this->Form->control('project', ['class'=>'form-control', 'label'=>'Tell us about what you are working on','type'=> 'textarea','required' => true]); ?>
                                        </div>
                                        </

                                        <div class="form-group">
                 <?= $this->Form->button(__('Submit Request'),['class'=>'btn btn-primary center-block text-center']) ?>
                                        </div>
                                    </fieldset>

                  <?= $this->Form->end() ?>
                                </div>



<?php }else{ ?>
                                <h4>
                                    <a href="/login"> Please Login To Place Order, Comment Or Leave A Complaint. </a>
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
                                            <textarea rows="5" id ="comment" name="comment" class="form-control input-sm"></textarea>
                <?= $this->Form->Control('mixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                                        </div>

                                    </div>

                                    <div class="col-sm-12" style="margin-top: 20px;">
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary pull-right comment']) ?>
                                    </div>
                                    <!--?= $this->Form->end() ?-->

                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <!-- /.row -->

                                    <ul class="list-inline">
                                        <li><span class="dl link-black text-sm" onclick="like()"><i class="fa fa-thumbs-o-up margin-r-5 like"></i> Like</span>
                                        </li>
                                        <li class="pull-right">
                                            <span class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (<?= $countcomment ?>)</span></li>
                                        <li class="pull-right"><a href="#"  class="btn btn-warning btn-flat btn-xs view-comment">View comment</a></li>
                                    </ul>
                                    <div id='commentsdiv' ></div>
                                </div>









<?php }else{ ?>
                                <h4>
                                    <a href="/login"> Please Login To Place Order, Comment Or Leave A Complaint. </a>
                                </h4>
                            <?php } ?>


                            </div>
                            <div id="tab3-0">







<?php if($this->request->session()->read('Auth.User')){ ?>





                                <!-- Post -->
                                <div id="complaintresult"></div>
                                <!-- Post -->
                                <div class="post clearfix">
                    <?= $this->Form->create('complain',['class'=>'form-horizontal']) ?>
                                    <div class="form-group margin-bottom-none">
                                        <div class="col-sm-12">
                                            <textarea rows="5" id ="rant" name="rant" class="form-control input-sm" ></textarea>
                        <?= $this->Form->Control('complaintmixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                        <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px;">
                        <?= $this->Form->button(__('Send'),['class'=>'btn btn-danger pull-right complaint']) ?>
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
                                <h4>
                                    <a href="/login"> Please Login To Place Order, Comment Or Leave A Complaint. </a>
                                </h4>
                            <?php } ?>







                            </div>
                        </div>




                    </div>
                    <div class="beats-block">
                        <div class="holder">
                            <span class="heading">PROMOTED BEATS</span>
                            <div class="row">
                            <?php foreach ($promoted as $promo){ ?>
                                <div class="col">
                                    <a href="javascript:void(0)">
                                        <div class="box">
                                            <div class="img-holder control-wrap">
                                           <?php echo $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/'.$promo['cover'],['class'=>'img-fluid','style'=> 'width:177px!important;height:116px!important;']);?>
                                                <a href="javascript:void(0)" 
                                                   data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/<?=h($promo['lease_name']);?>"
                                                   song_type="<?=h($promo['lease_type']);?>" 
                                                   data-name="<?=h(substr($promo['name'],0,10));?>"
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
                                                <i class="fa fa-shopping-cart"></i><?= $promo->lease_price ? h(number_format($promo->lease_price)): h(0) ?>+</a>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </aside>
    </div>
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























 
    
