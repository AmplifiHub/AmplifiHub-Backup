<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artistesrequester[]|\Cake\Collection\CollectionInterface $artistesrequesters
 */
?>
<div class="artistesrequesters index large-9 medium-8 columns content table-responsive">
    <h3><?= __('My Artiste Requests') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status',['label'=>'Booking Status']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistesrequesters as $artistesrequester): ?>
            <tr>

                <td><?= $this->Html->link($artistesrequester->user_booking->fullname, ['controller' => 'Users', 'action' => 'view', $artistesrequester->user_booking->id]); ?></td>
                <td><?= h($artistesrequester->event_date) ?></td>
                <td><?= h($artistesrequester->duration) ?></td>
                <td><?= h($artistesrequester->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artistesrequester->orderid],['class'=>'btn btn-primary btn-sm']) ?>
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
