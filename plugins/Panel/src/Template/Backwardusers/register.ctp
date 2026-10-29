<?php
/**
 * @var \App\View\AppView $this
 */
 $this->assign('title', 'Sign Up');
 
 $ncode=rand(245257, 746224);
?>

<style>
    
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #ccc !important;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #ccc !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #ccc !important;
}
</style>

<div class ="container">
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div clas ="row-fluid">
        <div class="col-lg-6 col-md-6"></div>
        <div class ="col-lg-6 col-md-6">
            <div class="transBox">
                <div class="panel-heading"><h3 class="title two text-center text-white header-text" style="font-family: 'Source Sans Pro',sans-serif;
    font-weight: 200;">Register Here</h3></div>
                <div class="panel-body" id="registerBody">
                    <?= $this->Flash->render() ?>
                    <?= $this->Form->create($user) ?>
                    <fieldset style="
    background: #333;
">
                    <!--    <div class="form-group">
                            <?= $this->Form->control('firstname',['label'=>'', 'class' => 'form-control', 'placeholder' => 'First Name', 'maxlength' => '50']) ?>
                        </div>

                        <div class="form-group">
                            <?= $this->Form->control('lastname',['label'=>'', 'class' => 'form-control', 'placeholder' => 'Last Name', 'maxlength' => '50']) ?>
                        </div>-->

                        <div class="form-group">
                            <?= $this->Form->control('aka',['label'=>'', 'class' => 'form-control', 'placeholder' => 'Nick Name', 'maxlength' => '50','style'=>'
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff;']) ?>
                        </div>
                        
                     <!--   <label>---------------------------------------------------------------------------------------------------</label><br>
                        
                        <p><label style="font-size:12px;"> NOTE : Select country code then input phone number without first digit. Eg. 0803xxx should be 803xxx</label></p>
                        <div class="form-group">

                            <label for="code"></label>

                            <select name="phone_code" id="code" class="form-control" style="background:#666;color:#fff;">
                        <?php foreach ($cCode as $code):?>
                                <option <?php if($code['nicename'] == "Nigeria"){ echo 'selected';}?> value="+<?php echo $code['phonecode']?>"><?= $code['nicename']. " +".$code['phonecode']; ?></option>
                        <?php endforeach;?>
                                <option></option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <?= $this->Form->control('phone',['label'=>'', 'class' => 'form-control', 'placeholder' => 'Phone (10 digits) 803xxx', 'onKeyPress' => 'if(this.value.length==10) return false;' , 'type' => 'number', 'onkeydown' => 'return (event.keyCode!=13);', 'id' => 'phone']) ?>
                        </div>
                        <label>---------------------------------------------------------------------------------------------------</label><br>
                        
                        <div class="form-group">
                            <?= $this->Form->control('code',['label'=>'', 'class' => 'form-control', 'placeholder' => 'code', 'type' => 'hidden', 'value' => $ncode ]) ?>
                        </div>-->

                        <div class="form-group">
                            <?= $this->Form->control('email',['label'=>'','class'=>'form-control','placeholder' => 'Email Address', 'pattern' => '[^@]+@[^@]+\.[a-zA-Z]{2,6}','style'=>'
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff;']) ?>
                        </div>

                        <div class="form-group">

                            <?= $this->Form->control('accounttype',[   'templates'     => ['inputContainer' => '{{content}}'],
                            'options'=>$userAccountType, 'value'=>'Guest', 'class' => 'form-control', 'style'=>'background:#262626;color:#fff;border:none;border-radius:5px;','label'=>""]) ?>
                        </div>

                   <!--     <div class="form-group">

                            <label for="country"></label>

                            <select name="country" id="country" class="form-control" style="background:#666;color:#fff;">
                        <?php foreach ($countries as $country):?>
                                <option <?php if($country == "Nigeria"){ echo 'selected';}?> value="<?php echo $country?>"><?php echo $country;?></option>
                        <?php endforeach;?>
                                <option></option>
                            </select>
                        </div> -->


                        <div class="form-group">
                            <?= $this->Form->control('password',['label'=>'','class'=>'form-control','placeholder'=>'Password','style'=>'
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff;']) ?>
                        </div>

                        <div class="form-group">
                            <?= $this->Form->control('confirm_password',['type'=> 'password','label'=>'','class'=>'form-control','placeholder'=>'Retype Password','style'=>'
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff;']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('accept',['type'=>'checkbox', 'label'=>$this->Html->link('Accept Our Terms Of Service','/terms-and-conditions',['class' => 'text-white']), 'id'=>'accept', 'escape'=>false, 'unchecked' ]) ?>
                            <?= $this->Form->control('accept',['type'=>'checkbox', 'label'=>$this->Html->link('And Our Privacy / Cookie Policy','/privacy-policy',['class' => 'text-white']), 'id'=>'accept', 'escape'=>false, 'unchecked' ]) ?>
                        </div>
                        <div class="w3l-submit clearfix text-center">
                            <input type="submit" value="Register">
                        </div>

                    </fieldset>

             <?= $this->Form->end() ?>
                </div>
                <div class="row" style="padding-left: 10px; text-align:center;">
                    <p class="text-white">Already registered? <a href="/login" class="text-white" style="font-weight:bold;">Login
                        </a></p>
                </div>


            </div> 
        </div>
    </div>
</div>
<script>
    // Select your input element.
var number = document.getElementById('phone');

// Listen for input event on numInput.
number.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58) 
      || e.keyCode == 8)) {
        return false;
    }
}
</script>