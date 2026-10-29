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
        <th scope="row"> <?= __('Cover') ?>
        <td> <?= $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Stores/at_name/thumbnail-'.$store->beat_name); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Name') ?></th>
          <td><?= h($store->name) ?></td>
      </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $store->has('user') ? $this->Html->link($store->user->id, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Music Genre') ?></th>
            <td><?= h($store->genre->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beat Price') ?></th>
            <td><?= h($store->beat_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= h($store->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($store->created) ?></td>
        </tr>
    </table>
</div>
