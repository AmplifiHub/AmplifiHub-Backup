<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Swriterequest[]|\Cake\Collection\CollectionInterface $swriterequests
 */
?>
<div class="swriterequests index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Song Writers Gig') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Client']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('song_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference_link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($swriterequests as $swriterequest): ?>
            <tr>
                <td><?= $swriterequest->has('user_booking') ? $this->Html->link($swriterequest->user_booking->fullname, ['controller' => 'Users', 'action' => 'view', $swriterequest->user_booking->id]) : '' ?></td>
                <td><?= h($swriterequest->song_title) ?></td>
                <td>
                  <?php $jobdes = json_decode($swriterequest->job_description);
                  echo '<ul>';
                   foreach ($jobdes as $description) {
                  # code...
                  echo '<li>'.$description.'</li>';
                }; echo '</ul>'; ?></td>
                <td><?= ($swriterequest->reference_link) ?></td>
                <td><?= h($swriterequest->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $swriterequest->orderid],['class'=>'btn btn-primary']) ?>
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
