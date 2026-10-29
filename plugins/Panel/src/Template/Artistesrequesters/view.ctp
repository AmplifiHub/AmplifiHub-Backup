<h1 style="font-weight: unset; margin-right: 24px;"> View Booked Artiste
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">view booked artiste</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artistesrequester $artistesrequester
 */
?>
<div class="col-md-4">
<div class="artistesrequesters view large-9 medium-8 columns content well">
    <h3><?= h('Order id:#'.$artistesrequester->orderid) ?></h3>
    <table class="vertical-table table table-striped">
        <?php if($userid == $artistesrequester->user_id):?>
        <tr>
            <th scope="row"><?= __('Artiste') ?></th>
            <td><?= $this->Html->link($artistesrequester->artistes_booked->firstname." ". $artistesrequester->artistes_booked->lastname, ['controller' => 'Users', 'action' => 'view', $artistesrequester->artistes_booked->id])  ?></td>
        </tr>     
        <?php else: ?>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $this->Html->link($artistesrequester->user_booking->firstname. " ". $artistesrequester->user_booking->firstname, ['controller' => 'Users', 'action' => 'view', $artistesrequester->user_booking->id])  ?></td>
        </tr>
        <?php endif;?>
        
        <tr>
            <th scope="row"><?= __('Booking Status') ?></th>
            <td><?= h($artistesrequester->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Date') ?></th>
            <td><?= h($artistesrequester->event_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($artistesrequester->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($artistesrequester->created) ?></td>
        </tr>
    </table>
</div>
<h4 class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Order Instructions. Buyers Beware</h4>
</div>
<div class="col-md-8">
<h2>#Messages</h2>
<?= $this->Form->create()?>
<div class="form-group">
  <?= $this->Form->control('messager_id',['type'=>'hidden','default'=>$userid]) ?>
  <?= $this->Form->control('fullname',['type'=>'hidden','default'=>$artistesrequester->user_booking->firstname . " " .$artistesrequester->user_booking->lastname]) ?>
    <?= $this->Form->control('clientemail',['type'=>'hidden','default'=>$artistesrequester->user_booking->email]) ?>
    <?php if($userid == $artistesrequester->user_id):?>
    <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$artistesrequester->artiste_id]) ?>
    <?php else:?>
    <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$artistesrequester->user_id]) ?>
    <?php endif;?>
  
  <?= $this->Form->control('orderid',['type'=>'hidden','default'=>$artistesrequester->orderid]) ?>
  <?= $this->Form->control('service',['type'=>'hidden','default'=>'Artistesrequesters']) ?>
<textarea id="messagecanvas" class="form-control"></textarea></div>
<div class="form-group">
<button type="button" class="btn btn-success messagebtn" onclick="msg()">Submit</button></div>
<?= $this->Form->end() ?>
<div id="messages">
  <?php foreach ($messages as $message): ?>
<blockquote class="alert alert-info <?= $align = ($message['messager_id'] === $userid ) ? '' : 'blockquote-reverse' ; ?>">
  <p><?= $message['message'] ?></p>
    <footer><?= ucfirst($message['messager']['fullname']) ?> | <cite><?= $message['created'] ?></cite></footer>
  </blockquote>
  <?php endforeach; ?>
</div>
</div>
