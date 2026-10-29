<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container" >
<div class ="col-lg-8 col-sm-8 col-md-offset-2">
<div class="panel panel-default" style="text-align: center">
<div class="panel-heading  bluefile"><legend><h3 class="text-primary"><?= __('Edit Withdrawal') ?> </h3></legend></div>
<div class="accounts form large-9 medium-8 columns content">
  <div class="panel-body">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($withdrawals) ?>

        <?php
            echo $this->Form->control('user_id', ['type' => 'hidden']);
            echo $this->Form->control('amount', ['type' => 'hidden']);
            echo $this->Form->control('status',['label'=>false,'placeholder'=>'Status', 'class'=>'form-control','type' => 'select', 'options' =>['approved' => 'approved', 'pending' => 'pending']]);
        ?>
          <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div></div></div></div>
