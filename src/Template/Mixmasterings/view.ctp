<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering $mixmastering
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mixmastering'), ['action' => 'edit', $mixmastering->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mixmastering'), ['action' => 'delete', $mixmastering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mixmastering->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mixmasterings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mixmastering'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mixmasterings view large-9 medium-8 columns content">
    <h3><?= h($mixmastering->id) ?></h3>
    <table class="vertical-table">
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
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mixmastering->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= $this->Number->format($mixmastering->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mixmastering->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mixmastering->modified) ?></td>
        </tr>
    </table>
</div>
