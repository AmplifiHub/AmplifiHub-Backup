<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artiste[]|\Cake\Collection\CollectionInterface $artistes

 */
 

?>

<div class="artistes index large-9 medium-8 columns content">
    <h3><?= __('Artistes booking') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('artiste_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status',['label' => 'Approval Status']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistes as $artiste): ?>
            <tr>
                <td><?= h($artiste->artistes_booked->fullname) ?></td>
                <td><?= h($artiste->event_date) ?></td>
                <td><?= h($artiste->duration) ?></td>
                <td><?= h($artiste->status) ?></td>
                <td><?= h($artiste->created) ?></td>
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















