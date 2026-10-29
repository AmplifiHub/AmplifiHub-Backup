<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view large-9 medium-8 columns content table-responsive">
  <?= $this->Flash->render() ?>
    <h3><?= h($pageBanner->id) ?></h3>
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('Page') ?></th>
            <td><?= h($pageBanner->page) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('file_name') ?></th>
            <td><?= h($pageBanner->bio) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pageBanner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pageBanner->modified) ?></td>
        </tr>
    </table>
</div>
