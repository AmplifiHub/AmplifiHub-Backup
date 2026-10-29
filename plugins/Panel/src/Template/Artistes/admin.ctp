<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artiste[]|\Cake\Collection\CollectionInterface $artistes
 */
?>
<div class="artistes index large-9 medium-8 columns content">
    <h3><?= __('Artistes Booked by Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artiste_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Approval Status']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistes as $artiste): ?>
            <tr>
                <td><?= $artiste->has('user_booking') ? $this->Html->link($artiste->user_booking->fullname, ['controller' => 'Users', 'action' => 'view', $artiste->user_booking->id]) : '' ?></td>
                <td><?= $artiste->has('artistes_booked') ? $this->Html->link($artiste->artistes_booked->fullname, ['controller' => 'Users', 'action' => 'view', $artiste->artistes_booked->id]) : '' ?></td>
                <td><?= h($artiste->event_date) ?></td>
                <td><?= h($artiste->duration) ?></td>
                <td><?= h($artiste->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artiste->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artiste->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artiste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artiste->id)]) ?>
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
