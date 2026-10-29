<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering[]|\Cake\Collection\CollectionInterface $mixmasterings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mixmastering'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mixmasterings index large-9 medium-8 columns content">
    <h3><?= __('Mixmasterings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--th scope="col"><?= $this->Paginator->sort('id') ?></th-->
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song') ?></th>
                <!--th scope="col"><?= $this->Paginator->sort('song_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song_type') ?></th-->
                <th scope="col"><?= $this->Paginator->sort('work_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!--th scope="col"><?= $this->Paginator->sort('modified') ?></th-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mixmasterings as $mixmastering): ?>
            <tr>
                <!--td><?= $this->Number->format($mixmastering->id) ?></td-->
                <td><?= $mixmastering->has('user') ? $this->Html->link($mixmastering->user->fullname, ['controller' => 'Users', 'action' => 'view', $mixmastering->user->id]) : '' ?></td>
                <td><?= $mixmastering->has('Genres') ? $mixmastering->Genres->genre : '' ?></td>
                <td><?= h($mixmastering->song) ?></td>
                <!--td><?= h($mixmastering->song_dir) ?></td>
                <td><?= h($mixmastering->song_size) ?></td>
                <td><?= h($mixmastering->song_type) ?></td-->
                <td><?= h($mixmastering->work_status) ?></td>
                <td><?= h($mixmastering->payment_status) ?></td>
                <td><?= h($mixmastering->created) ?></td>
                <!--td><?= h($mixmastering->modified) ?></td-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mixmastering->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mixmastering->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mixmastering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mixmastering->id)]) ?>
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
