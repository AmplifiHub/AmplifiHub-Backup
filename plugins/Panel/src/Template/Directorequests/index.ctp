<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Directorequest[]|\Cake\Collection\CollectionInterface $directorequests
 */
?>
<div class="directorequests index large-9 medium-8 columns content  table-responsive">
    <h3><?= __('Video Director Gigs') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directorequests as $directorequest): ?>
            <tr>
              <td><?= $directorequest->has('user') ? $directorequest->user->fullname : '' ?></td>
                <td><?= h($directorequest->deadline) ?></td>
                <td><?= h($directorequest->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $directorequest->orderid],['class'=>'btn btn-primary']) ?>
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
