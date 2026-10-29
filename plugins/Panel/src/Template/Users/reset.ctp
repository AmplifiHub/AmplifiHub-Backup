<?php
$this->assign('title', 'Reset Password');

/**
 * @var \App\View\AppView $this
 */
?>
<div class ="container">
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div clas ="row-fluid">
      <div class ="col-lg-4 col-sm-4 col-md-offset-4">
        <div class="panel panel-primary" style="border-color: #262626;background-color:#262626;">

          <div class="panel-heading" style="background-color:#262626;border-color: #666;margin-top:40px;"><h3 class="title two text-center"><?= __('Reset Password') ?></h3></div>
          <div class="panel-body">
            <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <div class="form-group">
    <?= $this->Form->input('password', ['required' => true, 'label'=>false, 'placeholder'=>'Password','autofocus' => true, 'class'=>'form-control']); ?>
        <span class="helper">Passwords must be at least 8 characters.</span>
    </div>
</fieldset>
 	<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary center-block','style'=>'width: 100%; background-color: #262626; border: 2px solid #ccc;border-radius:2em;']); ?>
    <?= $this->Form->end(); ?>
  </div>
     <div class="panel-footer" style="background-color: #262626;border-top:0;">
      <a href="/login" class="btn btn-link" style="color:#ccc;">Already registered? Login
      </a>
     </div>


  </div> </div></div></div>
