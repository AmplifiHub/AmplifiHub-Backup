<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mixmasterings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mixmasterings form large-9 medium-8 columns content">
    <?= $this->Form->create($mixmastering,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Mixmastering') ?></legend> 
        <?php
            //echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('genre', ['options' => $genres]);
            echo $this->Form->control('song',['type' => 'file']);
            //echo $this->Form->control('work_status');
            //echo $this->Form->control('payment_status');
        ?>
        <div >  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> </div> <div >   </div>  <div>    </div>
    </fieldset>



    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
