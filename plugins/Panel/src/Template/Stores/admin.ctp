<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> TRENDING BEATS
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">trending beats</li>
  </ol>
</nav>


<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
?>





<div class="stores content tbckgrd">
    
    
    
      <?php foreach ($trendingModel as $store): ?>
    <!--beatstore-->
    <div class="row">
        <div class="row white">
            <div class="container">
                <div class="col-xs-2 col-sm-1 col-md-1" id="beat_image"><?= $this->Html->link($this->Html->image('aabtn2.png',['class'=>'img-responsive ']),'javascript:player.play()', ['class'=>'img-responsive load', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name), 'escape' => false]) ?>
  <?= $this->Html->link($this->Html->image('pause.png',['class'=>'img-responsive ']),'javascript:player.pause()',['class'=>'hide pause pausehere','escape' => false]) ?>
  <?= $this->Html->link($this->Html->image('aabtn2.png',['class'=>'img-responsive ']),'javascript:player.play()',['class'=>'img-responsive hide play', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name),'escape' => false]) ?>
                </div>

                <div class="col-xs-10 col-sm-3 col-md-3" id="beat_name">
                    <h4 style="margin-bottom:0px"><?= h($store->name) ?>&nbsp;</h4>
                    <h6 class="remove-pad" style="margin: 0px;padding: 0px"><?= h($store->genre->genre) ?></h6>
                     
                    </div>

                <div class="col-xs-4 col-md-2" id="genre"><?= '<strong> Lease:</strong> &#8358; '.h(number_format(@$store->lease_price))?></div>

                <div class="col-xs-4 col-md-2" id="beat_length"><?= '<strong> Premium:</strong> &#8358; '.h(@number_format($store->premium_price))?></div>
                <div class="col-xs-4 col-md-2 cartbuy" id="cart_and_price">
      <?= '<strong> Exclusive:</strong> &#8358; '.h(@number_format(@$store->exclusive_price))?>
                </div>
                <div class="col-xs-6 col-md-2 licence">
                    <div class="">
                        <h4>
        
        <?= $this->Form->postLink(
                __('REMOVE FROM TRENDING'),
                ['action' => 'admin', $store->id,0],
                ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to lint in TRENDING # {0}?', $store->name)]
            )
        ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="text-center">
          <div class="col-xs-1" id="beat_image" ><?= $this->Html->link($this->Html->image('play_button.png'),'javascript:player.pause(); player.setSrc(\''.'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->beat_name).'\'); player.load(); player.play()', array('escape' => false)) ?> </div>
        
        
          <div class="col-xs-12" id="beat_name"><h2 class="remove-pad" style="margin: 0px;padding: 0px">
  <?= h($store->name) ?>&nbsp;|<?= h($store->length) ?><?= h($store->user->aka) ?><?= h($store->genre->genre)?><?= h($store->lease_price) ?><?= h($store->premium_price) ?><?= h($store->exclusive_price) ?></h2><h4 class="remove-pad" style="
          margin: 0px;padding: 0px">
        
         </div>
        </div-->
        <div class="mt-3 col-md-12 storeline"></div>
    </div>
  <?php endforeach; ?>

     





</div>


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <!--
         <form class="search-form" action="/search-beats">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <input name="term" id="search" type="search" placeholder="Search for beats" class="form-control">
                                        <button class="search" style="border: none;">
                                        </button>
                                    </div>
                                </div>
                            </form>
        
        -->
       
        <?= $this->Form->create("", ['type' => 'get', 'class' =>'search-form' ]) ?>
        <div class="form-group">
            <div class="input-wrap">
                        <?php
                        echo $this->Form->control('keyword', ['placeholder' => 'Search Here', 'label' => false, 'class' => 'form-control', 'type' =>'search' ]);
                        ?>
        <button class="search" style="border: none;"></button>
        </div>
                                </div>
        <?= $this->Form->end(); ?>
       
    </div>
    
</div>


<h3><?= __('Beat Store Uploads') ?></h3>
<div class="stores content tbckgrd">
      <?php foreach ($stores as $store): ?>
    <!--beatstore-->
    <div class="row">
        <div class="row white">
            <div class="container">
                <div class="col-xs-2 col-sm-1 col-md-1" id="beat_image"><?= $this->Html->link($this->Html->image('aabtn2.png',['class'=>'img-responsive ']),'javascript:player.play()', ['class'=>'img-responsive load', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name), 'escape' => false]) ?>
  <?= $this->Html->link($this->Html->image('pause.png',['class'=>'img-responsive ']),'javascript:player.pause()',['class'=>'hide pause pausehere','escape' => false]) ?>
  <?= $this->Html->link($this->Html->image('aabtn2.png',['class'=>'img-responsive ']),'javascript:player.play()',['class'=>'img-responsive hide play', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name),'escape' => false]) ?>
                </div>

                <div class="col-xs-10 col-sm-3 col-md-3" id="beat_name">
                    <h4 style="margin-bottom:0px"><?= h($store->name) ?>&nbsp;</h4>
                    <h6 class="remove-pad" style="margin: 0px;padding: 0px"><?= h($store->genre->genre) ?></h6>
                    <h4 style="margin-bottom:0px">Play - <?= h($store->play_count) ?>&nbsp;</h4>
                </div>

                <div class="col-xs-4 col-md-2" id="genre"><?= '<strong> Lease:</strong> &#8358; '.h(number_format(@$store->lease_price))?></div>

                <div class="col-xs-4 col-md-2" id="beat_length"><?= '<strong> Premium:</strong> &#8358; '.h(@number_format($store->premium_price))?></div>
                <div class="col-xs-4 col-md-2 cartbuy" id="cart_and_price">
      <?= '<strong> Exclusive:</strong> &#8358; '.h(@number_format(@$store->exclusive_price))?>
                </div>
                <div class="col-xs-6 col-md-2 licence">
                    <div class="">
                        <h4>
        <?= $this->Html->link('Edit',['action'=>'edit',$store->id],['class'=>'btn btn-primary btn-sm']) ?>
        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $store->id],
                ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $store->name)]
            )
        ?>
        <?= $this->Form->postLink(
                __('TRENDING'),
                ['action' => 'admin', $store->id,1],
                ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to lint in TRENDING # {0}?', $store->name)]
            )
        ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="text-center">
          <div class="col-xs-1" id="beat_image" ><?= $this->Html->link($this->Html->image('play_button.png'),'javascript:player.pause(); player.setSrc(\''.'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->beat_name).'\'); player.load(); player.play()', array('escape' => false)) ?> </div>
        
        
          <div class="col-xs-12" id="beat_name"><h2 class="remove-pad" style="margin: 0px;padding: 0px">
  <?= h($store->name) ?>&nbsp;|<?= h($store->length) ?><?= h($store->user->aka) ?><?= h($store->genre->genre)?><?= h($store->lease_price) ?><?= h($store->premium_price) ?><?= h($store->exclusive_price) ?></h2><h4 class="remove-pad" style="
          margin: 0px;padding: 0px">
        
         </div>
        </div-->
        <div class="mt-3 col-md-12 storeline"></div>
    </div>
  <?php endforeach; ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <span class="pull-right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
    </div>
