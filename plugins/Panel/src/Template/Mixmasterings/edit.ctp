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
                ['action' => 'delete', $mixmastering->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mixmastering->id)]
            )
        ?></li>
    </ul>
</nav>
<div class="mixmasterings form large-9 medium-8 columns content">
    <?= $this->Form->create($mixmastering,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit '.$mixmastering['song']) ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('genre', ['options' => $genres]);
            echo $this->Form->control('song',['type' => 'file']);
            //echo $this->Form->control('song_dir');
            //echo $this->Form->control('song_size');
            //echo $this->Form->control('song_type');
            echo $this->Form->control('work_status',['type' => 'select', 'options' => ['in progress' => 'in progress', 'finished' => 'finished'], 'default' => $mixmastering['work_status']]);
            echo $this->Form->control('payment_status', ['type' => 'select', 'options' => ['unpaid' => 'unpaid', 'paid' => 'paid'], 'default' => $mixmastering['payment_status']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
