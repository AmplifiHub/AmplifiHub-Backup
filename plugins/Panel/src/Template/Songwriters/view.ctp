<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Songwriter $songwriter
 */
?>

<div class="songwriters view large-9 medium-8 columns content">
    <h3><?= h($songwriter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $songwriter->has('user') ? $this->Html->link($songwriter->user->fullname, ['controller' => 'Users', 'action' => 'view', $songwriter->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Services') ?></th>
            <td><?= h($songwriter->extra_services) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($songwriter->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Songwriter Id') ?></th>
            <td><?= $this->Number->format($songwriter->songwriter_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating Result') ?></th>
            <td><?= $this->Number->format($songwriter->rating_result) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($songwriter->date_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($songwriter->date_modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Sample Song') ?></h4>
        <?= $this->Text->autoParagraph(h($songwriter->sample_song)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bio') ?></h4>
        <?= $this->Text->autoParagraph(h($songwriter->bio)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Songwriters') ?></h4>
        <?php if (!empty($songwriter->songwriters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Songwriter Id') ?></th>
                <th scope="col"><?= __('Sample Song') ?></th>
                <th scope="col"><?= __('Bio') ?></th>
                <th scope="col"><?= __('Rating Result') ?></th>
                <th scope="col"><?= __('Extra Services') ?></th>
                <th scope="col"><?= __('Date Created') ?></th>
                <th scope="col"><?= __('Date Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($songwriter->songwriters as $songwriters): ?>
            <tr>
                <td><?= h($songwriters->id) ?></td>
                <td><?= h($songwriters->user_id) ?></td>
                <td><?= h($songwriters->songwriter_id) ?></td>
                <td><?= h($songwriters->sample_song) ?></td>
                <td><?= h($songwriters->bio) ?></td>
                <td><?= h($songwriters->rating_result) ?></td>
                <td><?= h($songwriters->extra_services) ?></td>
                <td><?= h($songwriters->date_created) ?></td>
                <td><?= h($songwriters->date_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Songwriters', 'action' => 'view', $songwriters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Songwriters', 'action' => 'edit', $songwriters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songwriters', 'action' => 'delete', $songwriters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $songwriters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
