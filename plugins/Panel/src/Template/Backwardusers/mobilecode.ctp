<?php
/**
 * @var \App\View\AppView $this
 */
 $this->assign('title', 'Verification');
?>

<div class ="container">
    <div clas ="row-fluid">
        <div class="col-lg-6 col-md-6"></div>
        <div class ="col-lg-6 col-md-6">
            <div class="transBox">
                <div class="panel-heading"><h3 class="title two text-center text-white header-text">Mobile Verification</h3></div>
                <div class="panel-body" id="registerBody">
                    <?= $this->Flash->render() ?>
                    <?= $this->Form->create('mobile-code') ?>
                    <fieldset>
                        

                        <div class="form-group">
                            <?= $this->Form->control('phone',['label'=>'', 'class' => 'form-control', 'placeholder' => 'Phone', 'maxlength' => '50', 'value' => $phone_code.$phone1, 'readonly'=> 'readonly']) ?>
                        </div>
                        
                        <div class="form-group">
                            <?= $this->Form->control('code',['label'=>'', 'class' => 'form-control', 'placeholder' => 'Please Enter Verification Code', 'type' => 'number','onKeyPress' => 'if(this.value.length==6) return false;' ]) ?>
                        </div>

                        
                        <div class="w3l-submit clearfix text-center">
                            <input type="submit" value="Verify">
                        </div>

                    </fieldset>

             <?= $this->Form->end() ?>
                </div>
               


            </div> 
        </div>
    </div>
</div>
