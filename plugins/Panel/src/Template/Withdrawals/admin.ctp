<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Withdrawals
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">withdrawal requests</li>
  </ol>
</nav>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdrawal[]|\Cake\Collection\CollectionInterface $withdrawals
 */
?>
<div class="withdrawals index large-9 medium-8 columns content table-responsive">

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($withdrawals as $withdrawal): ?>
            <tr>
                <td><?= $withdrawal->has('user') ? $this->Html->link($withdrawal->user->aka, ['controller' => 'Users', 'action' => 'view', $withdrawal->user->id]) : '' ?></td>
                <td><?= h(number_format($withdrawal->amount)) ?></td>
                <td><?= h($withdrawal->status) ?></td>
                <td><?= h($withdrawal->created) ?></td>
                <td><?= h($withdrawal->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $withdrawal->id],['class'=>'btn btn-info btn-sm']) ?>
                    <?= $this->Html->link(__('Approve'), ['action' => 'edit', $withdrawal->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $withdrawal->id], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]) ?>
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
