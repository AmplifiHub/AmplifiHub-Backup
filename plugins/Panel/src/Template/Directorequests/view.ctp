<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Directorequest $directorequest
 */
?>
<div class="col-md-4">
<div class="directorequests view large-9 medium-8 columns content well">
    <h3><?= h('Order id:#'.$directorequest->orderid) ?></h3>
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $directorequest->has('user') ? $this->Html->link($directorequest->user->firstname ." ". $directorequest->user->lastname , ['controller' => 'Users', 'action' => 'view', $directorequest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Booking Status') ?></th>
            <td><?= h($directorequest->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($directorequest->deadline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($directorequest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video Type') ?></th>
            <td><?= $this->Text->autoParagraph(h($directorequest->video_type)); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brief') ?></th>
            <td>  <?= $this->Text->autoParagraph(h($directorequest->brief)); ?></td>
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
    <?= $this->Form->control('fullname',['type'=>'hidden','default'=>$directorequest->user->firstname." ". $directorequest->user->lastname]) ?>
      <?= $this->Form->control('clientemail',['type'=>'hidden','default'=>$directorequest->user->email]) ?>
  <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$directorequest->director_id]) ?>
  <?= $this->Form->control('orderid',['type'=>'hidden','default'=>$directorequest->orderid]) ?>
  <?= $this->Form->control('service',['type'=>'hidden','default'=>'Directorequests']) ?>
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
