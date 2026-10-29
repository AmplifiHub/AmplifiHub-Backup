<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Swriterequest $swriterequest
 */
?>
<div class="row">
<div class="col-md-4">
<div class="swriterequests view large-9 medium-8 columns content well">
    <h3><?= h('Order id:#'.$swriterequest->orderid) ?></h3>
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?=  $this->Html->link($swriterequest->user_booking->firstname. " " . $swriterequest->user_booking->lastname, ['controller' => 'Users', 'action' => 'view', $swriterequest->user_booking->id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song Title') ?></th>
            <td><?= h($swriterequest->song_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($swriterequest->job_description);?>
           </td>
        </tr>
        
          <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= h($swriterequest->project);?>
           </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference Link') ?></th>
            <td><?= h($swriterequest->reference_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Booking Status') ?></th>
            <td><?= h($swriterequest->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($swriterequest->created) ?></td>
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
  <?= $this->Form->control('fullname',['type'=>'hidden','default'=>$swriterequest->user_booking->firstname." ". $swriterequest->user_booking->lastname]) ?>
    <?= $this->Form->control('clientemail',['type'=>'hidden','default'=>$swriterequest->user_booking->email]) ?>
  <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$swriterequest->user_id]) ?>
  <?= $this->Form->control('orderid',['type'=>'hidden','default'=>$swriterequest->orderid]) ?>
  <?= $this->Form->control('service',['type'=>'hidden','default'=>'Swriterequests']) ?>
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

</div>