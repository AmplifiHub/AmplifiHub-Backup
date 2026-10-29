<h1 style="font-weight: unset; margin-right: 24px;"> Edit Genre
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">edit genre</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container" ><div class ="col-lg-8 col-sm-4 col-md-offset-2">
<div class="panel panel-default" style="text-align: center;">
        <div class="panel-heading">

        </div>
<div class="panel-body">
    <?= $this->Form->create($genre) ?>
    <fieldset>
        <?php
            echo $this->Form->control('genre', ['label'=>'','class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
