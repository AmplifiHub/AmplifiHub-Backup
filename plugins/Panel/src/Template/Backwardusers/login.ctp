<?php $this->assign('title', ' Login'); ?>
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
    <div class ="row-fluid">
        <div class="col-lg-7 col-md-7"></div>
        <div class="col-lg-5 col-md-5">


    <div class="transBox" style="margin-top:80px !important;">
        <div class="panel-heading " id ="login-panel-heading">
    <h3 class="title two text-center text-white header-text" style="font-family: 'Source Sans Pro',sans-serif;
    font-weight: 200;">Login Here</h3>
</div>

<div class="panel-body" id="loginBody">
<?= $this->Flash->render() ?>
  <?= $this->Form->create() ?>
<fieldset style="
    background: #333;
">
                        <div class="form-group">
                            <input name="email" class="form-control" placeholder="E-mail" maxlength="50" type="email" id="UserEmail"
                            value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required="required" style="
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff !important;
">                        </div>
                        
                            <div class="form-group" style="margin-top: 27px;">
                            <input name="password" class="form-control" placeholder="Password" type="password" id="UserPassword" 
                            value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" required="required" style="
    background: #262626;
    border: none;
    border-radius: 5px;
    color: #fff !important;
"> </div>
<div class="checkbox">
    <label style="color:#f4f4f4;"><input type="checkbox" type="checkbox" name="rememberme"
<?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1"> Remember me</label>
  </div>

                            
                               <div class="w3l-submit clearfix text-center">
					<input type="submit" value="Login">
				</div>


                        <?= $this->Form->end() ?>
</div>
        <div class="row" style="padding-left: 10px; text-align:center;">
                            <p class="text-white"> 
                                <a href="/resetpassword" class="text-white">Forgot password?</a></p>
                        </div>
        <div class="row" style="padding-left: 10px; text-align:center;">
    <p class="text-white">Don't have an account? <a href="/sign-up" class="text-white" style="font-weight:bold;">Sign up</a></p>
</div>

    </div>


        </div></div></div>
