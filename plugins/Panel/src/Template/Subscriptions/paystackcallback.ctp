<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="membershiplevels index large-9 medium-8 columns content">
    <h3><?= __('Membership Subscriptions') ?></h3>
    <table cellpadding="0" cellspacing="0" class="">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level',['label' => 'Subscriptions']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $subscription): ?>
            <tr>
                <td><?= $subscription->has('user') ? $this->Html->link($subscription->user->fullname, ['controller' => 'Users', 'action' => 'view', $subscription->user->id]) : '' ?></td>
                <td><?= h($subscription->plan->name) ?></td>
                <td><?= h($subscription->status) ?></td>
                <td><?= h($subscription->created) ?></td>
                <td><?= h($subscription->modified) ?></td>
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
