<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mmrequesters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mmrequesters form large-9 medium-8 columns content">
    <?= $this->Form->create($mmrequester) ?>
    <fieldset>
        <legend><?= __('Add Mmrequester') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('artist_band_name');
            echo $this->Form->control('project_name');
            echo $this->Form->control('song_description');
            echo $this->Form->control('service_request');
            echo $this->Form->control('download_link');
            echo $this->Form->control('deadline');
            echo $this->Form->control('modifited');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
