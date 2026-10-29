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
                ['action' => 'delete', $artiste->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artiste->id)]
            )
        ?></li>
  </ul>
</nav>
<div class="artistes form large-9 medium-8 columns content">
    <?= $this->Form->create($artiste) ?>
    <fieldset>
        <legend><?= __('Edit Artiste') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('artiste_id', ['options' => $artistes]);
            echo $this->Form->control('event_date');
            echo $this->Form->control('duration');
            echo $this->Form->control('status',['options' => ['pending' => 'pending', 'approved' => 'approved'], 'default' => $artiste['status']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
