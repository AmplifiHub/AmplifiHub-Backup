<h1 style="font-weight: unset; margin-right: 24px;"> Add Genre
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">add genre</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container"><div class="row-fluid"><div class ="col-lg-8 col-sm-4 col-md-offset-2">
<div class="panel panel-default" style="text-align: center;">
        <div class="panel-heading"><legend><h3 class="text-primary"><?= __('Add Genre') ?></h3></legend></div>
<div class="">
   <div class="panel-body">
     <?= $this->Form->create($genre) ?>
    <fieldset>
       <div style="margin-bottom: 15px"> <?php
            echo $this->Form->control('genre',['placeholder'=>'Type Genre','label'=>'','class'=>'form-control']);
        ?></div>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    </div>
    <?= $this->Form->end() ?>
</div></div>
</div></div>
