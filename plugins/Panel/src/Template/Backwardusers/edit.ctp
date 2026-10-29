<?php

/**
 * @var \App\View\AppView $this
 */
?>
<style>
  
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #eee;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
}  

.nav-tabs {
    border-bottom: none;
}
 
 .panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}   
    
</style>
<div class="row" >
    <div class="col-lg-1"></div>
    <div class ="col-md-12 col-lg-10">
        <div class="panel panel-default" style="text-align: center; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border: none;
    border-radius: 10px;">
            <div class="panel-heading">
                <legend><h3 class="text-primary" style="color: #262626"><?= __('Your profile') ?></h3></legend>
<?= $this->Flash->render() ?>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12"> 
                        <!-- Nav tabs -->
                        <div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Edit Profile</span></a></li>
         <?php
    $user1 = $this->request->session()->read('Auth.User');
    if($user1['role'] != 'admin'){
        
      ?>

                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-link"></i>  <span>Your Links</span></a></li>
                                <li role="presentation"><a href="#referrals" aria-controls="referrals" role="tab" data-toggle="tab"><i class="fa fa-users"></i>  <span>Your Referrals</span></a></li>
    <?php  } ?>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4" style="text-align: center;">

               <?php if($user['photo'] == ""):?>
                <?= $this->Html->image('/img/default.png',['id'=>'prof-image', 'class'=>['img-responsive','img-circle'],'style' =>['margin: 0 auto']],['fullbase' => true]) ?>
               <?php else:?>
               <?php endif;?>
                        <?= $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/'.$user['photo'],['id'=>'prof-image', 'class'=>['img-responsive','img-circle'],'style' =>['margin: 0 auto']],['fullbase' => true]) ?>

                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <br/>

        <?= $this->Form->create($user,['type' => 'file','class'=> 'form-horizontal','id'=> 'edit']) ?>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <div class="box">
                      <?= $this->Form->control('photo',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false]); ?>
                                                <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Photo (Square)&hellip;</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
<input type="hidden" id="new_croppie_img" name="new_croppie_img" />

                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('firstname', 'First Name', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                <?=  $this->Form->control('firstname',['label'=>false,'class'=>'form-control','id'=> 'firstname']); ?>


                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('lastname', 'Last Name', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                <?=  $this->Form->control('lastname',['label'=>false,'class'=>'form-control','id'=> 'lastname']); ?>


                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('nickname', 'Nickname', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                <?=  $this->Form->control('aka',['label'=>false,'class'=>'form-control','id'=> 'nickname']); ?>


                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('email', 'Email', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                <?=  $this->Form->control('email',['class'=>'form-control','label'=>false,'id' => 'email']);  ?>


                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('phone', 'Phone', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">

                <?=  $this->Form->control('phone',['class'=>'form-control','label'=>false,'id' => 'phone']);  ?>


                                        </div>

                                    </div>


                                    <div class="form-group">

                                        <div class="col-md-3">
               <?= $this->Form->label('accounttype', 'Account Type', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                            <?= $this->Form->control('accounttype',[   'templates'     => ['inputContainer' => '{{content}}'],
                            'options'=>$userAccountType,   'class' => 'form-control','div'=>false,'label'=>false]) ?>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('country', 'Country', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">

                                            <select name="country" id="country" class="form-control">
                    <?php foreach ($countries as $country):?>
                                                <option <?php if($user->country == $country){ echo 'selected';}?> value="<?php echo $country?>"><?php echo $country;?></option>
                    <?php endforeach;?>
                                                <option></option>
                                            </select>


                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('state', 'State', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">

         <?=  $this->Form->control('state',['class'=>'form-control','label'=>false,'id' => 'state']);  ?>



                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('zip', 'Zip Code', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">

         <?=  $this->Form->control('zip',['class'=>'form-control','label'=>false,'id' => 'zip']);  ?>



                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('address', 'Address', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">

                <?=  $this->Form->control('address',['class'=>'form-control','label'=>false,'id' => 'address']);  ?>


                                        </div>

                                    </div>

                                    <br/>

                                    <div class="form-group">
                                        <div class="col-md-1 "></div>
                                        <div class="col-md-11 ">
                                            <label for="bio">Write your bio below </label>
          <?=  $this->Form->textarea('bio',['class'=>'form-control','label'=>false,'id' => 'bio','placeholder' => 'Say something about yourself, minimum of 150 characters','max' => '150']);  ?>


                                        </div>


                                    </div>
                                    <br/>

                                    <hr/>

                                    <h2>Connect Your Social Media Accounts</h2>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('facebook', 'Facebook Url', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                        <?php echo $this->Form->control('facebook', ['class' => 'form-control', 'label'=>false, 'id'=>'facebook']);?>                

                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('twitter', 'Twitter Url', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                        <?php echo $this->Form->control('twitter', ['class' => 'form-control', 'label'=>false, 'id'=>'twitter']);?>                

                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('instagram', 'Instagram Url', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                        <?php echo $this->Form->control('instagram', ['class' => 'form-control', 'label'=>false, 'id'=>'instagram']);?>                

                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-3">
               <?= $this->Form->label('youtube', 'Youtube Url', ['class' => ['control-label']]);?>

                                        </div>
                                        <div class="col-md-9">
                        <?php echo $this->Form->control('youtube', ['class' => 'form-control', 'label'=>false, 'id'=>'youtube']);?>                

                                        </div>

                                    </div>

                                    <br/>
                                    <div class="row">
          <?= $this->Form->button(__('Save'),['class'=>'btn btn-default btn-lg', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?> 
                                    </div>



    <?= $this->Form->end() ?>

                                </div>

      <?php  if($user1['role'] != 'admin'){
      ?>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-2"></div>

                                        <div class="col-md-8">
                                           <div style="
    padding: 10px;
    background: #ccc;
    border-radius: 10px;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
"> <label>Your Referral Link</label>
                                       <div>     <input id="myrefInput" class="form-control" type="text" readonly="" value="https://amplifihub.com/sign-up?ref=<?php echo $user['firstname'].$user['lastname'].$user['id']; ?>"> <button style="margin-top: 10px; background: #333; border:none !important;" class="btn btn-primary" onclick="myreflinkFunction()" onmouseout="outFunc()"><i class="fa fa-clipboard"></i> Copy Referral Link</button>
                                        </div>    
                                        </div>
                                        
                                            <br/>
                                            
                                            <div style="
    padding: 10px;
    background: #ccc;
    border-radius: 10px;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
">
                                            <label>Your Iframe Embed Code</label>
                                            <div>
                                            <textarea id="myiframeInput" class="form-control" readonly="" rows="6">
                      <?php $username= str_replace(" ","-", $user['aka']);  if($user['aka'] != ""):?>
<iframe id="mfs_html5" src="https://amplifihub.com/personalstore/<?php echo $username;?>" scrolling="no" width="100%" height="970" frameborder="0"></iframe>
           
                        <?php else:?>
                          Please update your  Nickname to get a iframe embed code
             <?php endif;?>
                                            </textarea>
                                            
                                            <button style="margin-top: 10px; background: #333; border:none !important;" class="btn btn-primary" onclick="myiframeFunction()" onmouseout="outFunc()"><i class="fa fa-clipboard"></i> Copy iFrame Code</button>
                                        </div>    
                                        </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="referrals">
                                    <br/>
                                    <div class="row">
                                        <div class="messages index large-9 medium-8 columns content table-responsive">
                                            <table cellpadding="0" cellspacing="0" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><?= $this->Paginator->sort('id',['label'=>'#No']) ?></th>
                                                        <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Full Name']) ?></th>
                                                        <th scope="col">Subscribed</th>

                                                        <th scope="col"><?= $this->Paginator->sort('user_id',['label'=>'Referral Code']) ?></th>
                                                        <th scope="col"><?= $this->Paginator->sort('created',['label'=>'Date Registered']) ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($referrals as $key => $referral):
                                                        
                                                    ?>
                                                    <tr class="">

                                                        <td style="text-align: left;"><?= h($key + 1) ?></td>
                                                        <td style="text-align: left;"><?= h($referral->user->firstname. " " .$referral->user->lastname) ?></td>
                                                        <td style="text-align: left;">
                                                            
                                                            <?php
                                                            if(isset($referral->user->subscriptions)){
                                                            
                                                            echo count($referral->user->subscriptions) ? "YES" : "NO";
                                                            
                                                            
                                                            }
                                                            ?>
                                                            
                                                             
                                                            
                                                            
                                                            
                                                             
                                                        
                                                        </td>
                                                        <td style="text-align: left;"><a href="#" style="color: #262626;">https://amplifihub.com/sign-up?ref=<?= h($referral->user->firstname. $referral->user->lastname.$referral->user->id) ?></a></td>
                                                        <td style="text-align: left;"><?= h($referral->created) ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            <div class="paginator">
                                                <ul class="pagination">
                                                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                                                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                                    <?= $this->Paginator->numbers() ?>
                                                    <?= $this->Paginator->next(__('next') . ' >') ?>
                                                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                                                </ul>
                                                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div></div>
    <div class="col-lg-1"></div>
</div>

<script>
    function myreflinkFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myrefInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
    
</script>

<script>
    function myiframeFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myiframeInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
    
</script>

