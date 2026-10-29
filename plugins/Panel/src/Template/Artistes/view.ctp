<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artiste $artiste
 */
?>

<div class="artistes view large-9 medium-8 columns content">
    <h3><?= h($artiste->id) ?></h3>
    <table class="vertical-table" >
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $artiste->has('user') ? $this->Html->link($artiste->user->email, ['controller' => 'Users', 'action' => 'view', $artiste->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Date') ?></th>
            <td><?= h($artiste->event_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($artiste->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($artiste->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artiste->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artiste Id') ?></th>
            <td><?= $this->Number->format($artiste->artiste_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($artiste->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($artiste->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Artistes') ?></h4>
        <?php if (!empty($artiste->artistes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Users Id') ?></th>
                <th scope="col"><?= __('Artiste Id') ?></th>
                <th scope="col"><?= __('Event Date') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($artiste->artistes as $artistes): ?>
            <tr>
                <td><?= h($artistes->id) ?></td>
                <td><?= h($artistes->users_id) ?></td>
                <td><?= h($artistes->artiste_id) ?></td>
                <td><?= h($artistes->event_date) ?></td>
                <td><?= h($artistes->duration) ?></td>
                <td><?= h($artistes->status) ?></td>
                <td><?= h($artistes->created) ?></td>
                <td><?= h($artistes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Artistes', 'action' => 'view', $artistes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Artistes', 'action' => 'edit', $artistes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artistes', 'action' => 'delete', $artistes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
