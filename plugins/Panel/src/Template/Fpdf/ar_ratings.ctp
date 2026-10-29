<h1 style="font-weight: unset; margin-right: 24px;"> Add Rating
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">add rating</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <?php if ($Auth->user('id') == 1): ?>  <form action="" class="form float-right">
            <label for="">Add Rating</label>
            <input type="number" name="rating" value="<?=$rating->rating;?>" class="form-control" placeholder="You can add 1 to 10 ratings"  onKeyUp="if(this.value>10){this.value='10';}else if(this.value<0){this.value='0';}" required>
            <br>
            <input type="submit" class="btn btn-success" value="Add">
        </form><?php endif; ?>
    </div>
</div>
</div>

