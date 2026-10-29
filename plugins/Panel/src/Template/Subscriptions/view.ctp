<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Membershiplevel $membershiplevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Membershiplevel'), ['action' => 'edit', $membershiplevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Membershiplevel'), ['action' => 'delete', $membershiplevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membershiplevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Membershiplevels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Membershiplevel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="membershiplevels view large-9 medium-8 columns content">
    <h3><?= h($membershiplevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $membershiplevel->has('user') ? $this->Html->link($membershiplevel->user->fullname, ['controller' => 'Users', 'action' => 'view', $membershiplevel->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($membershiplevel->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($membershiplevel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($membershiplevel->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($membershiplevel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($membershiplevel->modified) ?></td>
        </tr>
    </table>
</div>
