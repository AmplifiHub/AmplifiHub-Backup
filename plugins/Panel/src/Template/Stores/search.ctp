<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
?>
<h3 class="white"><?= __('Search Result of Beats.') ?></h3>
<div class="stores index large-9 medium-8 columns content tbckgrd" >


      <?php foreach ($stores as $store): ?>
<div class="row">

<div class="row white">

  <div class="col-md-1" id="beat_image"><?= $this->Html->link($this->Html->image('aabtn2.png'),'javascript:player.play()', ['class'=>'img-responsive load', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name), 'escape' => false]) ?>
<?= $this->Html->link($this->Html->image('pause.png'),'javascript:player.pause()',['class'=>'img-responsive hide pause pausehere','escape' => false]) ?>
<?= $this->Html->link($this->Html->image('aabtn2.png'),'javascript:player.play()',['class'=>'img-responsive hide play', 'id'=> 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/'.h($store->lease_name),'escape' => false]) ?>
  </div>

  <div class="col-md-3" id="beat_name"><h4 style="margin-bottom:0px"><?= h($store->name) ?>&nbsp;|<?= h($store->length) ?>mins <em> <?= h($store->bpm) ?>bpm</em></h4><h6 class="remove-pad" style="
  margin: 0px;padding: 0px"><?= $this->Html->link(h($store->user->fullname),'/mixer/'.$store->user->id) ?></h6></div>

  <div class="col-md-2" id="genre"><h6><?= h($store->genre->genre)?></h6></div>

 <div class="col-md-2" id="beat_length"><h5> from &#8358;<?= h(number_format($store->lease_price)) ?></h5></div>
  <div class="col-md-1 cartbuy" id="cart_and_price">
    <div class="col-md-12"> <?= $this->Html->image('cart.png',['class' => '']) ?></div>
  </div>
  <div class="col-md-3 licence">
    <div class="col-md-12">

      <?= empty($store->lease_price) ? '' : '<strong> Lease:</strong> &#8358; '.h($store->lease_price).'<span class="badge addcart" id="'. h($store->id).'" data=" '.$store->lease_price.' " data1 = "lease"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>' ; ?>

      <?= empty($store->premium_price) ? '' : '<strong> Premium:</strong> &#8358; '.h($store->premium_price).'<span class="badge addcart" id="'. h($store->id).'" data=" '.$store->premium_price.' " data1 = "premium"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span><br>' ; ?>

      <?= empty($store->exclusive_price) ? '' : '<strong> Exclusive:</strong> &#8358; '.h($store->exclusive_price).'<span class="badge addcart" id="'. h($store->id).'" data=" '.$store->exclusive_price.' " data1 = "exclusive"><i class="fa fa-cart-plus" aria-hidden="true"></i> add to cart</span>' ; ?>

</div>
        </div>

  </div>
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
            <?= $this->Html->link('Finished Shopping? Click Here to Pay',['controller'=>'Carts','action'=>'view'],['class'=>'btn btn-success']) ?>
            <?= $this->Html->image('cards.png',['class'=>'pull-right'])
       ?></ul>
        <span class="pull-right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
    </div>


</div>
