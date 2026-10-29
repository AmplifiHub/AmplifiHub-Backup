<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Swriterequest[]|\Cake\Collection\CollectionInterface $swriterequests
 */
?>
<div class="swriterequests index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Swriterequests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('songwriter_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference_link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($swriterequests as $swriterequest): ?>
            <tr>
                <td><?= $this->Number->format($swriterequest->id) ?></td>
                <td><?= $swriterequest->has('user') ? $this->Html->link($swriterequest->user->fullname, ['controller' => 'Users', 'action' => 'view', $swriterequest->user->id]) : '' ?></td>
                <td><?= $swriterequest->has('songwriter') ? $this->Html->link($swriterequest->songwriter->id, ['controller' => 'Songwriters', 'action' => 'view', $swriterequest->songwriter->id]) : '' ?></td>
                <td><?= h($swriterequest->song_title) ?></td>
                <td><?= h($swriterequest->job_description) ?></td>
                <td><?= h($swriterequest->reference_link) ?></td>
                <td><?= h($swriterequest->created) ?></td>
                <td><?= h($swriterequest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $swriterequest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $swriterequest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $swriterequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $swriterequest->id)]) ?>
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
