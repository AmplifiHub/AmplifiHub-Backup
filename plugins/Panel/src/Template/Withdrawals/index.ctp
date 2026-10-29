<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdrawal[]|\Cake\Collection\CollectionInterface $withdrawals
 */
?>


    <h3><?= __('Withdrawals') ?></h3>
    
    <div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($withdrawals as $withdrawal): ?>
            <tr>
              <td>₦ <?= h(number_format($withdrawal->amount)) ?></td>
                <td><?= h($withdrawal->status) ?></td>
                <td><?= h($withdrawal->created) ?></td>
                <td >
                <?=
                $retVal = (h($withdrawal->status) === 'approved') ? $this->Form->postLink(__('Cancel'), ['action' => 'delete', $withdrawal->id], ['class'=>'btn btn-danger disabled', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);",'confirm' => __('Are you sure you want to delete # {0}?', $withdrawal->id)]) : $this->Form->postLink(__('Cancel'), ['action' => 'delete', $withdrawal->id], ['class'=>'btn btn-danger', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);",'confirm' => __('Are you sure you want to cancel # {0}?', $withdrawal->id)]) ;
                 ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    </div>
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

