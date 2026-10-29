<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Artistesrequesters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artistes'), ['controller' => 'Artistes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artiste'), ['controller' => 'Artistes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artistesrequesters form large-9 medium-8 columns content">
    <?= $this->Form->create($artistesrequester) ?>
    <fieldset>
        <legend><?= __('Add Artistesrequester') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('artiste_id', ['options' => $artistes]);
            echo $this->Form->control('event_date');
            echo $this->Form->control('duration');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
