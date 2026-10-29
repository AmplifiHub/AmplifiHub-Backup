<?php
/**
 * @var \App\View\AppView $this
 *
 */
?>

<div class="container">
  <div class="col-md-offset-1">
<div class="col-md-9" id="songwriters_profile2">
<div class="row" id="songwriters_profile1">
<div class="col-md-2" style="text-align: center;">
<?= (null !== $user['photo'] )? $this->html->image('..https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-'.$user['photo'],['class'=>'img-fluid img-thumbnail img-circle img-resize'],['fullbase' => true]) : '<i class="fa fa-4x fa-user-circle text-primary sr-icons" style="margin-top: 10%"></i>'; ?>
 </div>
<div class="col-md-4"><!--name-->
  <h2 class="lead" style="margin:0px;"><?= h($user['artiste_name']) ?> </h2><span class="small">Performing Artiste</span><br>
<br><span class="fa fa-envelope  "> <?= h($user['email']) ?></span>
<br>
<div>
<?=  $this->Html->link($this->Html->image('/img/facebook_profile.png'),$user['facebook'],['escape'=>false]);?>&nbsp;
<?=  $this->Html->link($this->Html->image('/img/twitter_profile.png'),$user['twitter'],['escape'=>false]);?>&nbsp;
<?=  $this->Html->link($this->Html->image('/img/instagram_profile.png'),$user['instagram'],['escape'=>false]);?>&nbsp;
<?=  $this->Html->link($this->Html->image('/img/youtube_profile.png'),$user['youtube'],['escape'=>false]);?>
</div>
</div>
<div class="col-md-4"  id="songwriters_profile" ><!--rating result box -->
    <div class="col-lg-12" style="text-align:center;">
        <div class="star-rating" style="text-align:center;margin-top: 2%">
        <?php
        switch ($rating ='10') {
          //if rating score is below 20
          case !is_null($rating) && $rating < 20:
            # code...
            echo '<span class="fa fa-star"></span>';
            break;
            //if rating score is below 50
          case !is_null($rating) && $rating > 20 && $rating <= 50:
            # code...
            echo '<span class="fa fa-star"></span><br><span class="fa fa-star"></span>';
            break;
            //if rating score is below 100
          case !is_null($rating) && $rating > 50 && $rating <= 100:
            # code...
            echo '<span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span>';
            break;
            //if rating score is below 200
          case !is_null($rating) && $rating > 100 && $rating <= 200:
            # code...
            echo '<span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span>';
            break;
            //if rating scrore is greater than 200
          case !is_null($rating) && $rating > 200 :
            # code...
            echo '<span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span><br><span class="fa fa-star"></span>';
            break;
          default:
            # code...
            echo 'not rating yet';
            break;
        }
         ?>
        <span> Rated(<?= h($countraters) ?>) </span>
      </div>
    </div>
</div>

</div>
<hr class="mt-3" style="background-color: rgba( 0,0,0,0.25);">

<div class="row">
     <!--artist personal store start-->
<div class="col-md-12"> <!--sample song-->
<div class="col-md-1" id="beat_image" >
  <?= $this->Html->link($this->Html->image('aabtn2.png'),'javascript:player.play()', ['class'=>'img-responsive load', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Artistes/artiste_song/'.h($user->artiste_song), 'escape' => false]) ?>
<?= $this->Html->link($this->Html->image('pause.png'),'javascript:player.pause()',['class'=>'img-responsive hide pause pausehere','escape' => false]) ?>
<?= $this->Html->link($this->Html->image('aabtn2.png'),'javascript:player.play()',['class'=>'img-responsive hide play', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Artistes/artiste_song/'.h($user->artiste_song),'escape' => false]) ?>
</div>
  <div class="col-md-5" id="beat_name"><h2 class="remove-pad" style="margin: 0px;padding: 0px"><?= h($user->song_title) ?></h2></div>

  <div class="col-md-1" id="genre"><h4><?= $user['Genres']['genre']?></h4></div>

  </div>
  <!--artist personal store ends-->
</div>

       <div class="row">
      <div class="col-md-4" ><!--xtral service box --></div>
      <div class="col-md-5" >
        <div class="rating">
          <span class>Rate Artist</span>
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
              <input type="radio" id="star3" name="rating"  value="3" /><label for="star3" title="Meh">3 stars</label>
              <input type="radio" id="star2" name="rating"  value="2" /><label for="star2" title="Kinda bad">2 stars</label>
              <input type="radio" id="star1" name="rating"  value="1" /><label for="star1" title="Sucks big time">1 star</label>
          </div>
    </div>
  </div>

 <hr class="mt-3" style="background-color: rgba( 0,0,0,0.25);">
    <div class="col-md-4 " ><span><!--start chat button--></span></div>
</div>

<div class="col-md-9" id="songwriters_profile2">
          <div class="nav-tabs-custom" id="songwriters_profile4">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Comment</a></li>
              <li><a href="#timeline" data-toggle="tab">Complain</a></li>
              <li><a href="#settings" data-toggle="tab">Book Artist</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">


                <!-- Post -->
<div class="post clearfix">
                <div id="commentresult"></div>
                <!--?= $this->Form->create('add') ?-->
                <!--form for getting comment in the mmrequesters profile-->
                <div class="form-group margin-bottom-none">
                <div class="col-sm-9">
                <textarea rows="5" id ="comment" name="comment" class="form-control input-sm"></textarea>
                <?= $this->Form->Control('mixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                </div>
                <div class="col-sm-3">
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary comment']) ?>
                </div>
                </div>
                  <!--?= $this->Form->end() ?-->

                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">


                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i><!-- Share--></a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <span class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (<?= $countcomment ?>)</span></li>
                        <li class="pull-right"><a href="#"  class="btn btn-warning btn-flat btn-xs view-comment">View comment</a></li>
                  </ul>
                  <div id='commentsdiv' ></div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">

                    <!-- Post -->
                                <div id="complaintresult"></div>
                    <!-- Post -->
                <div class="post clearfix">
                    <?= $this->Form->create('complain',['class'=>'form-horizontal']) ?>
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <textarea rows="5" id ="rant" name="rant" class="form-control input-sm" ></textarea>
                        <?= $this->Form->Control('complaintmixeruser_id',['type'=>'hidden','default'=>$mixeruser_id]) ?>
                        <?= $this->Form->Control('type',['type'=>'hidden','default'=>'ac']) ?>
                      </div>
                      <div class="col-sm-3">
                        <?= $this->Form->button(__('Send'),['class'=>'btn btn-danger complaint']) ?>
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




              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">




              <div class="songwriters form large-9 medium-8 columns content">
   <div class="panel-body">

    <?= $this->Form->create('Book',['url'=>['action'=>'book']]) ?>
    <fieldset>
       <!--div class="form-group" >
         <?php //echo $this->Form->control('artiste_id', ['options' => $artistes,'class'=>'form-control']); ?></div-->

       <div class="form-group">
         <?php echo $this->Form->control('artisterequester_id',['type'=>'hidden', 'default'=>$mixeruser_id]) ?>
         <?php echo $this->Form->control('job_description',['type'=>'select','class'=>'form-control', 'empty'=>'I want this artist for...', 'label'=>false, 'options'=>['Music performance'=>'Music performance','Guest Performance'=>'Guest Performance', 'Guest Speaker'=>'Guest Speaker','Panel Discussion'=>'Panel Discussion','Voice-Over/AD(Radio/Internet)'=>'Voice-Over/AD(Radio/Internet)','Custom Produced Instrumental' => 'Custom Produced Instrumental']]) ?>
        </div>
       <div class="form-group"><?php echo $this->Form->control('name_of_event', ['class'=>'form-control', 'placeholder'=>'Name of Event', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('name_of_venue', ['class'=>'form-control', 'placeholder'=>'Name of Venue', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('address_one', ['class'=>'form-control', 'placeholder'=>'Event Place Address', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('event_city', ['class'=>'form-control','placeholder'=>'Event City', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('event_state', ['class'=>'form-control','placeholder'=>'Event State', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('event_country', ['class'=>'form-control','placeholder'=>'Event Country', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('event_attire', ['class'=>'form-control','placeholder'=>'Event Attire', 'label'=>false]); ?></div>
       <div class="form-group"><?php echo $this->Form->control('phone_number', ['class'=>'form-control','placeholder'=>'Phone Number; e.g +234-000-000-0000', 'label'=>false]); ?></div>

       <div class="form-group"><?php
            echo $this->Form->control('event_date',[
              'empty' => true, 'class'=>'form-control', 'data-date-start-date'=>"0d",  'data-provide'=>"datepicker", 'placeholder'=> 'Event Date', 'label'=>false ]); ?></div>
           <div class="form-group" ><?php echo $this->Form->control('duration', [ 'label'=>false, 'class'=>'form-control', 'placeholder'=>'Duration of performance in minutes, e.g 30min',]);
            ?></div>
    <div class="form-group"><?php echo $this->Form->control('performance_time', ['class'=>'form-control','placeholder'=>'Performance Starting Time. E.g 2pm', 'label'=>false]); ?></div>

<div class="form-group">
                 <?= $this->Form->button(__('Submit Request'),['class'=>'btn btn-primary center-block text-center']) ?>
             </div>
    </fieldset>

                  <?= $this->Form->end() ?>
</div></div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </div>
    </div>
