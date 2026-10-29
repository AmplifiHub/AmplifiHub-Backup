<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mmrequester[]|\Cake\Collection\CollectionInterface $mmrequesters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav list-inline">
      <li class="heading"><?= __('Actions') ?></li>
      <li><?= $this->Html->link(__('New Requester'), ['action' => 'add'],['class'=>'btn btn-primary']) ?></li>
      <li><?= $this->Html->link(__('List Site Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'btn btn-primary']) ?></li>
      <li><?= $this->Html->link(__('Add New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'btn btn-primary']) ?></li>
  </ul>
</nav>
<div class="mmrequesters index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Mixing and Mastering requests') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requester_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artist_band_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_request') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mmrequesters as $mmrequester): ?>
            <tr>
                <td><?= $mmrequester->has('user_booking') ? $this->Html->link($mmrequester->user_booking->fullname, ['controller' => 'Users', 'action' => 'view', $mmrequester->user_booking->id]) : '' ?></td>
                <td><?= $mmrequester->has('requester_booking') ? $this->Html->link($mmrequester->requester_booking->fullname, ['controller' => 'Users', 'action' => 'view', $mmrequester->requester_booking->id]) : '' ?></td>
                <td><?= h($mmrequester->artist_band_name) ?></td>
                <td><?= h($mmrequester->project_name) ?></td>
                <td><?= h($mmrequester->service_request) ?></td>
                <td><?= h($mmrequester->deadline) ?></td>
                <td><?= h($mmrequester->created) ?></td>
                <td><?= h($mmrequester->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mmrequester->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mmrequester->id]) ?>
                    <?php $user = $this->request->session()->read('Auth.User');
                    $user['role']==='admin' ? $this->Form->postLink(__('Delete'), ['action' => 'delete', $mmrequester->id],['class'=> 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $mmrequester->id)]) : ''; ?>
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
