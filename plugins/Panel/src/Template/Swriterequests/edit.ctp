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
                ['action' => 'delete', $swriterequest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $swriterequest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Swriterequests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Songwriters'), ['controller' => 'Songwriters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Songwriter'), ['controller' => 'Songwriters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="swriterequests form large-9 medium-8 columns content">
    <?= $this->Form->create($swriterequest) ?>
    <fieldset>
        <legend><?= __('Edit Swriterequest') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('songwriter_id', ['options' => $songwriters]);
            echo $this->Form->control('song_title');
            echo $this->Form->control('job_description');
            echo $this->Form->control('reference_link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
