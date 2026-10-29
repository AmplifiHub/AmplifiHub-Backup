<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $directorequest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $directorequest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Directorequests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directors'), ['controller' => 'Directors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Director'), ['controller' => 'Directors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directorequests form large-9 medium-8 columns content">
    <?= $this->Form->create($directorequest) ?>
    <fieldset>
        <legend><?= __('Edit Directorequest') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('director_id', ['options' => $directors]);
            echo $this->Form->control('video_type');
            echo $this->Form->control('brief');
            echo $this->Form->control('deadline');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
