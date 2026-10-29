<h1 style="font-weight: unset; margin-right: 24px;"> List Booked Artiste
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">list booked artiste</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artiste[]|\Cake\Collection\CollectionInterface $artistes
 */
?>
<div class="artistes index large-9 medium-8 columns content table-responsive">
    
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
            <?php foreach ($artistesrequesters as $artiste): ?>
            <tr>
                <td><?= $artiste->has('user_booking') ? $this->Html->link($artiste->user_booking->fullname, ['controller' => 'Users', 'action' => 'view', $artiste->user_booking->id]) : '' ?></td>
                <td><?= $artiste->has('artistes_booked') ? $this->Html->link($artiste->artistes_booked->fullname, ['controller' => 'Users', 'action' => 'view', $artiste->artistes_booked->id]) : '' ?></td>
                <td><?= h($artiste->event_date) ?></td>
                <td><?= h($artiste->duration) ?></td>
                <td><?= h($artiste->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artiste->orderid],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artiste->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artiste->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $artiste->id)]) ?>
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
