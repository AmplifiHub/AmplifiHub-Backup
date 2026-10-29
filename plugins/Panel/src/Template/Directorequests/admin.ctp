<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Directorequest[]|\Cake\Collection\CollectionInterface $directorequests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Directorequest'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directors'), ['controller' => 'Directors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Director'), ['controller' => 'Directors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directorequests index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Directorequests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('director_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directorequests as $directorequest): ?>
            <tr>
                <td><?= $this->Number->format($directorequest->id) ?></td>
                <td><?= $directorequest->has('user') ? $this->Html->link($directorequest->user->fullname, ['controller' => 'Users', 'action' => 'view', $directorequest->user->id]) : '' ?></td>
                <td><?= $directorequest->has('director') ? $this->Html->link($directorequest->director->id, ['controller' => 'Directors', 'action' => 'view', $directorequest->director->id]) : '' ?></td>
                <td><?= h($directorequest->deadline) ?></td>
                <td><?= h($directorequest->created) ?></td>
                <td><?= h($directorequest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $directorequest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $directorequest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $directorequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $directorequest->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
