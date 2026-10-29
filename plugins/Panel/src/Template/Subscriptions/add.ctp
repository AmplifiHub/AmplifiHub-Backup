<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="membershiplevels form large-9 medium-8 columns content">
    <?= $this->Form->create($membershiplevel) ?>
    <fieldset>
        <legend><?= __('Add Subscription') ?></legend>
        <?php
            //echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('level_id', ['options' => $plans]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
