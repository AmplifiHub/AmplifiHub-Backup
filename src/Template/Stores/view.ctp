<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="stores view large-9 medium-8 columns content">
    <h3><?= h($store->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $store->has('user') ? $this->Html->link($store->user->id, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
        </tr>
        <tr>
          <th scope="row"><?= __('Name of Beat') ?></th>
          <td><?= h($store->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Music Genre') ?></th>
            <td><?= h($store->music_genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beat Price') ?></th>
            <td><?= h($store->beat_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beat Path') ?></th>
            <td><?= h($store->beat_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beat Imagename') ?></th>
            <td><?= h($store->beat_imagename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($store->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($store->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($store->modified) ?></td>
        </tr>
    </table>
</div>
