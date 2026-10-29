<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container" ><div class ="col-lg-8 col-sm-4 col-md-offset-2">
<div class="panel panel-default" style="text-align: center;">
        <div class="panel-heading">
<legend><h3 class="text-primary"><?= __('Edit Plan') ?></h3></legend>
        </div>
<div class="panel-body">
<?= $this->Form->create($Plan) ?>
    <fieldset>
        <?php
            echo $this->Form->control('name', ['label'=>'','class' => 'form-control']);
            echo $this->Form->control('amount', ['label'=>'','class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
