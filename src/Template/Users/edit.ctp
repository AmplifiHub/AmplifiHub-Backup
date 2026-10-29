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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
  <?= $this->html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-'.$user['photo'],['fullbase' => true]) ?>
    <?= $this->Form->create($user,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('photo',['type' => 'file']);
            echo $this->Form->control('fullname');
            echo $this->Form->control('aka',['label' => 'Your Nickname']);
            echo $this->Form->control('bio',['type' => 'textarea']);
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo  $this->Form->control('role',['type' => 'select', 'options' =>['admin' => 'admin', 'producer' => 'producer', 'artiste' => 'artiste'], 'multiple' => true, 'default' => $user['role']]);

        /*  echo  $user['role'] === 'admin' ? $this->Form->control('role',['type' => 'select', 'options' =>['admin' => 'admin', 'producer' => 'producer', 'artiste' => 'artiste'], 'multiple' => true, 'default' => $user['role']]) : $this->Form->control('role',['disabled' => true]);*/
            echo $this->Form->control('created',['type' => 'text', 'disabled' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
