<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering $mixmastering
 */
?>
<div class="col-md-4">
<div class="mixmasterings view large-9 medium-8 columns content well">
    <h3><?= h('#Orderid:'.$mixmastering->orderid) ?></h3>
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $mixmastering->has('user') ? $this->Html->link($mixmastering->user->email, ['controller' => 'Users', 'action' => 'view', $mixmastering->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song') ?></th>
            <td><?= h($mixmastering->song) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song Dir') ?></th>
            <td><?= h($mixmastering->song_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song Size') ?></th>
            <td><?= h($mixmastering->song_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song Type') ?></th>
            <td><?= h($mixmastering->song_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Status') ?></th>
            <td><?= h($mixmastering->work_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= h($mixmastering->payment_status) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($mixmastering->genre->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mixmastering->created) ?></td>
        </tr>
    </table>
</div>
<h4 class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Order Instructions. Buyers Beware</h4>
</div>
<div class="col-md-8">
<h2>#Messages</h2>
</div>
