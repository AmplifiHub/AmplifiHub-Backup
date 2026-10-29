<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering[]|\Cake\Collection\CollectionInterface $mixmasterings
 */
?>
<div class="mixmasterings index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Mixmasterings') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mixmasterings as $mixmastering): ?>
            <tr>
                <td><?= $mixmastering->has('user') ? $this->Html->link($mixmastering->user->fullname, ['controller' => 'Users', 'action' => 'view', $mixmastering->user->id]) : '' ?></td>
                <td><?= $mixmastering->has('Genres') ? $mixmastering->Genres->genre : '' ?></td>
                <td><?= h($mixmastering->work_status) ?></td>
                <td><?= h($mixmastering->payment_status) ?></td>
                <td><?= h($mixmastering->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mixmastering->id],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mixmastering->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mixmastering->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $mixmastering->id)]) ?>
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
