<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mixmastering[]|\Cake\Collection\CollectionInterface $mixmasterings
 */
?>
<div class="mixmasterings index large-9 medium-8 columns content">
    <h3><?= __('Mixmasterings') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mixmasterings as $mixmastering): ?>
            <tr>
                <td><?= $mixmastering->has('Genres') ? $mixmastering->Genres->genre : '' ?></td>
                <td><?= h($mixmastering->song) ?></td>
                <td><?= h($mixmastering->work_status) ?></td>
                <td><?= h($mixmastering->payment_status) ?></td>
                <td><?= h($mixmastering->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Download',$mixmastering->song_dir.$mixmastering->song,['target' => '_blank'])  ?>
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
