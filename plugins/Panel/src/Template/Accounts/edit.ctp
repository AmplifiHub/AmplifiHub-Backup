<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container" >
<div class ="col-lg-8 col-sm-8 col-md-offset-2">
<div class="panel panel-default" style="text-align: center">
<div class="panel-heading  bluefile"><legend><h3 class="text-primary" style="color: #262626"><?= __('Edit Account') ?> </h3></legend></div>
<div class="accounts form large-9 medium-8 columns content">
  <div class="panel-body">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($account) ?>
    <fieldset>

        <?php
            echo $this->Form->control('user_id', ['class'=>'form-control','type' => 'hidden']);
            echo $this->Form->control('bank_name',['class'=>'form-control', 'label'=>false]);
            echo $this->Form->control('bank_code',['class'=>'form-control', 'label'=>false]);
            echo $this->Form->control('account_name',['class'=>'form-control', 'label'=>false]);
            echo $this->Form->control('account_number',['class'=>'form-control', 'label'=>false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save'),['class'=>'btn btn-primary', 'style'=> "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"]) ?>
    <?= $this->Form->end() ?>
</div>
</div></div></div></div>
