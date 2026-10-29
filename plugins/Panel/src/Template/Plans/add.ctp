<?php
/**
 * @var \App\View\AppView $this
 */
?><div class="container" ><div class="row-fluid" style="margin-left:10%"><div class ="col-lg-8 col-sm-4">
<div class="panel panel-default" style="text-align: center;">
        <div class="panel-heading"></div> 

   <div class="panel-body">
<div class="levels form large-9 medium-8 columns content">
    <?= $this->Form->create($Plan) ?>
    <fieldset>
        <legend><h3 style="color: rgb(25,69,150);"><?= __('Add Plan/Category') ?></h3></legend>
        <div style="margin-bottom: 15px;"><?php
            echo $this->Form->control('name');
            
        ?></div><div style="margin-bottom: 15px;"><?php echo $this->Form->control('amount'); ?></div>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div></div></div></div>
