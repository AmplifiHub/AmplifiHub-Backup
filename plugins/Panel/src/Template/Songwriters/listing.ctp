<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering[]|\Cake\Collection\CollectionInterface $mixmasterings
 */
 $this->assign('title','SONG WRITERS HUB');
?>




<section class="toprated-block container-fluid">
    <h1>The Songwriter Hub</h1>
    <?php if($banner){ ?>
    <div class="bg" style="background-image: url(<?= 'https://s3.us-east-2.amazonaws.com/amplifihub/PageBanner/file_name/'.$banner->file_name ?>);"></div>
    <?php } ?>

        <?php // $this->Form->create(null,[ 'url' => '/mixing-and-mastering-hub','class'=> 'search-form']) ?>
        <?= $this->Form->create(null,[
            'url' => '/mixing-and-mastering-hub',
            'class'=>"search-form",
            'type' => 'get'
            ]
        ) ?>

    <div class="form-group">
        <div class="input-wrap">
            <a href="#" class="search"><i class="fa fa-search fa-2x"></i></a>
            <input type="Searach" class="form-control search-input" placeholder="Search ">
        </div>
    </div>

    <?= $this->Form->end() ?>
</section>

<section class="topdirector-block container-fluid">
        <div class="bg">
          <h1>top Songwriters</h1>
          <div class="artist-wrapper">
            <div class="row">
             <?php foreach ($topArtistes as $sw): ?>
              <div class="col">
                <div class="box">
                  <div class="img-holder control-wrap">
                    <?= $dp = ($sw->user->photo !== null) ? $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$sw->user->photo,['class'=>'img-thumbnail img-responsive']) : $this->Html->image('/img/default.png',['class'=>['img-responsive','img-circle'],'style' =>['margin: 0 auto']],['fullbase' => true]); ?> 
                     
                    <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Songwriters/sample_song/<?= h($sw->sample_song); ?>"
                                song_type="<?= h($sw->sample_song_type); ?>" 
                                data-name="<?= h($sw->sample_song); ?>"
                                data-user="<?= h(substr($sw->user->aka, 0, 10)); ?>"
                                class="play-wrap show play">
                                    
                                    <i class="fa fa-play"></i>
                            </a>
                            <a class="pause-wrap hide play">
                                <i class="fa fa-pause"></i>
                            </a>







                  </div>
                  <span class="name"><?= $sw->user->aka ?></span>
                  <a href="<?= '/songwriter/'.$sw->user->id ?>" class="btn green profile">View Profile</a>
                </div>
              </div>
               <?php endforeach; ?>
                
              
            </div>
          </div>
        </div>
      </section>
      <section class="director-block container-fluid">
        <div class="holder">
          <div class="artist-wrapper">
            <div class="row">
                
              <?php foreach ($songwriters as $sw): ?>
              <div class="col">
                <div class="box">
                  <div class="img-holder control-wrap">
                    <?= $dp = ($sw->user->photo !== null) ? $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$sw->user->photo,['class'=>'img-thumbnail img-responsive']) : $this->Html->image('/img/default.png',['class'=>['img-responsive','img-circle'],'style' =>['margin: 0 auto']],['fullbase' => true]); ?> 
                    <a href="javascript:void(0)" data-id="https://s3.us-east-2.amazonaws.com/amplifihub/Songwriters/sample_song/<?= h($sw->sample_song); ?>"
                                song_type="<?= h($sw->sample_song_type); ?>" 
                                data-name="<?= h($sw->sample_song); ?>"
                                data-user="<?= h(substr($sw->user->aka, 0, 10)); ?>"
                                class="play-wrap show play">
                                    
                                    <i class="fa fa-play"></i>
                            </a>
                            <a class="pause-wrap hide play">
                                <i class="fa fa-pause"></i>
                            </a>
                  </div>
                  <span class="name"><?= $sw->user->aka ?></span>
                  <a href="<?= '/songwriter/'.$sw->user->id ?>" class="btn green profile">View Profile</a>
                </div>
              </div>
               <?php endforeach; ?>
            </div>
             <div class="row paginator_wrapper">

<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>


             </div>

          </div>
        </div>
      </section>


































 