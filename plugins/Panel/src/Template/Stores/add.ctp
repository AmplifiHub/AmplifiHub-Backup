<style>

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.btn1 {background-color: orange;}
.btn2 {background-color: blue;}

    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
    

.toggle, .toggler {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
}

.toggler {
  color: #ddd;
  transition: .2s;
  font-weight: bold;
}

.toggler--is-active {
  color: transparent;
}

.b {
  display: block;
}

.toggle {
  position: relative;
  width: 60px;
  height: 27px;
  border-radius: 100px;
  background-color: transparent;
  overflow: hidden;
  box-shadow: inset 0 0 2px 1px rgba(0, 0, 0, 0.05);
}

.check {
  position: absolute;
  display: block;
  cursor: pointer;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 6;
}

.check:checked ~ .switch {
  right: 2px;
  left: 57.5%;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: .08s, 0s;
}

.switch {
  position: absolute;
  left: 2px;
  top: 2px;
  bottom: 2px;
  right: 57.5%;
  background-color: #f4f4f4;
  border-radius: 36px;
  z-index: 1;
  transition: 0.25s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  transition-property: left, right;
  transition-delay: 0s, .08s;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
</style>
<?php
/**
 * @var \App\View\AppView $this
 */
 
?>
<h1 style="font-weight: unset; margin-right: 24px;"> Upload Beats
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">music producer</li>
    <li class="breadcrumb-item active" aria-current="page">upload beats</li>
  </ol>
</nav>
<div class="row" >
    <div class="col-lg-1 col-md-1"></div>
    <div class ="col-md-12 col-lg-10">
        <div class="panel panel-default" style="
        text-align: center; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border: none;
    border-radius: 10px;">
        <div class="panel-heading">
             <?php
    
            //if($number == 0 && $beatcount <=3 && $today < $expiretrial){ ?>
    <!--        <div class="alert alert-warning">-->
    <!--<strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.-->
    <!--</div>-->
    <?php //}elseif($number == 0 && $beatcount <=3 && $today > $expiretrial){ ?>
            
            
    <!--<div class="alert alert-warning">-->
    <!--<strong>Trial Account Expired!</strong> Please subscribe to a plan to continue using AmplifiHub.-->
    <!--</div>-->
    <?php //}elseif($pUser->role == 'trial'){ ?>
    <!--<div class="alert alert-warning">-->
    <!--<strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.-->
    <!--</div>-->
    <?php //} elseif($number > 0 && $beatcount <=3 && $pUser->role == 'trial'){?>
    <!--<div class="alert alert-warning">-->
    <!--<strong>Trial Account!</strong> Please subscribe to a plan to fully use AmplifiHub.-->
    <!--</div>-->
    <?php //} ?>
    <?php //if($beatcount == 3 && $number == 0){ ?>
    <!--    <div class="alert alert-danger">-->
    <!--    <strong>Limited!</strong> You are not able to upload more than three(3) beats in trial account.-->
    <!--    </div>-->
    <?php //} ?>
    
    <?php //if($freeMonthCount >= 5 && $otherSubscriptions == 0){ ?>
    <!--    <div class="alert alert-warning">-->
    <!--    <strong>Limited!</strong> You are not able to upload more than five(5) beats in 1 month free subscription account.-->
    <!--    </div>-->
    <?php //} ?>
    
    <?php //if($freeMonthExpire == 0 && $otherSubscriptions == 0){ ?>
    <!--    <div class="alert alert-danger">-->
    <!--    <strong>Expired!</strong> Your 1 month free subscription has been expired please subscribe a new plan.-->
    <!--    </div>-->
    <?php //} ?>
    
            <h1><?= __('Sell Beats By Uploading to Store') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Click here to learn  <a href='https://support.amplifihub.com/791876--How-To-Upload-Beats-On-AmplifiHub' target='_blank' style='font-weight:bold;color:#fff;'>how to upload beats</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h1>
        <!--    <h3> <span class="helper">Subscription Status: <?= $status = ($substatus == null) ? '<span class="label label-danger">Not Active</span>' : '<span class="label label-success">Active</span>' ; ?>-->
        <!--</span></h3>-->
        <p>     
        
        Your Unique Store link: <?php $username= str_replace(" ","-", $userid->aka); if(!empty($userid->aka)){ echo '<a style="color:red;" href="'.$this->Url->build('/mystore/'.$username, true).'">'.$this->Url->build('/mystore/'.$username, true).'</a>';}
        elseif(null !== $userid->id){ echo '<a style="color:red;" href="'.$this->Url->build('/mystore/'.$username, true).'">'.$this->Url->build('/mystore/'.$username, true).'</a>';}
         ?>
<?= $this->Flash->render() ?></p>         
    
       
        </div>


<div class="stores form large-9 medium-8 columns content">
<div class="panel-body" >
    <?= $this->Form->create($store, ['type' => 'file','id'=> 'addBeats']) ?>
 <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3>Beat Cover Image (Square) <a href="JavaScript:void(0);" data-toggle="tooltip" title="Square min400x400" data-html="true" ><i class="fa fa-question-circle"></i></a></h3></div>
               <div id="uploaded_image"></div>
                <div class="box">
                      <?= $this->Form->control('cover',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=>true]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Cover Image</span></label>
				</div>
           </div>
           <div class="col-md-4">  </div>
       </div>
      <input type="hidden" id="new_croppie_img" name="new_croppie_img" />
      
    <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Beat Name</h4></div>
            
                      <?= $this->Form->control('name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'name','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    
     <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Beat Music Genre</h4></div>
            
                      <?= $this->Form->control('music_genre',['options'=>$genre,'empty'=>'Select genre','placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control select2-country'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    
      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Beats Per Minute(BPM)</h4></div>
            
                      <?= $this->Form->control('bpm',['min' => 0,'templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'bpm','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>


       
            <div ><?=   $this->form->control('user_id',['type'=>'hidden','default' => $user,'class'=>'form-control']); ?></div><br>

   <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Beats Duration/Length(in minutes)</h4></div>
            
                      <?= $this->Form->control('length',['min' => 0,'templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'length','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
                
                
               <br/> 
                      <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Sample Beat <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be mp3 and should be tagged after every 4 bars. It should be no more than 45-60secs" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
                   <span>Supported type/s(mp3)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('sample_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-7','label'=> false,'required'=> true]); ?>
					<label for="file-7"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
                
                  
                
                
                
                <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Non-Exclusive License <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be mp3 only  <a href='https://support.amplifihub.com/968495--Understanding-The-Beat--Instrumental-License-Types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(mp3 only)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('lease_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-4','label'=> false,'required'=> true]); ?>
					<label for="file-4"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
                
                  <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
                   <?= $this->Form->input('lease_access', ['type' => 'checkbox','id'=> 'freeAccess','label' => 'Allow users to download this beat free',
    'checked' => false]); ?>
               </div>
               <div id="leasePriceHolder">
               <div><h4>Or enter pricing</h4></div>
            
                             <?= $this->Form->control('lease_price',['type'=>'number','min'=> 5000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 5000 and above','class'=>'form-control','id'=>'leasePrice','required' => true]); ?>
               </div>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
                
                <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Exclusive  License <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be wave <a href='https://support.amplifihub.com/968495--Understanding-The-Beat--Instrumental-License-Types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(wave only)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('exclusive_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-2','label'=> false]); ?>
					<label for="file-2"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Wave file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
       
       
                
                  <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Pricing</h4></div>
            
                             <?= $this->Form->control('exclusive_price',['type'=>'number','min'=> 10000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 10000 and above','class'=>'form-control']); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div>  
                
                <br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
        <!--<div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Premium  License <a href="JavaScript:void(0);" data-toggle="tooltip" title="can be mp3 or wave  <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(mp3 and wave)</span>
               </div>
                <div class="box">
                      <?php // $this->Form->control('premium_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-3','label'=> false]); ?>
					<label for="file-3"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 or Wave file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> -->  
                
            <!--      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Pricing</h4></div>
            
            <?php // $this->Form->control('premium_price',['type'=>'number','min'=> 7000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 7000 and above','class'=>'form-control']); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div>-->
              
              <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Work for hire </h3>
               
               </div>
                <div class="box" style="padding: 0px;">
                      
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>
              
        <div id="swt" class="toggle  btn2">
            <input type="checkbox" value="1" id="switcher" class="check" name = "hire">
            <b class="b switch"></b>
        </div>
                

                <!--<br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
                -->
                      
                
    <div class="checkbox" style="margin-left:16px; color:#e30d40;"> 
        <input type="checkbox" name="checkbox" id="checkbox" <?php if($freeMonthCount >= 5 && $otherSubscriptions == 0){ echo "disabled"; } ?>><a style="color:#e30d40; font-weight:bold;" href="https://support.amplifihub.com/hc/en-us/articles/360008813297-Understanding-The-Beat-Instrumental-License-Types">I Accept The License Terms To Sell Beats</a>
    </div>
    
   
    <?php if($number == 0 && $beatcount <=3 && $today > $expiretrial){ ?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    <?php }elseif($beatcount == 3 && $number == 0){ ?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    <?php } elseif($number >= 0 && $beatcount >0 && $pUser->role == 'trial'){?>
    <button type="button" class="btn btn-default btn-lg" style="color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" disabled>Upload</button>
    
    <?php } else{?>
     <div><br><?= $this->Form->button(__('Upload'),['class'=>'btn btn-default btn-lg btnid', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?></div>
    <?php } ?>
    <?= $this->Form->end() ?> </div>
    <div id="my-box">
        
    </div>
</div>
</div>
</div>
<div class="col-lg-1 col-md-1"></div>
</div>

<div class="modal fade" id="upload" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius:10px;">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Beat successfully uploaded!
                                </h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                
                                <div class="form-group">
                                    <label class="col-sm-12 control-label" style="margin-bottom:30px; text-align:center;">Increase your chances of sales, Share to social media</label>
                                    <div class="" style="text-align:center;">
                                    <span class="es-button-border"><a href="http://www.facebook.com/sharer.php?u=https://amplifihub.com/beat-hub-detail/<?=$beatId ?>" class="btn btn-defaut btn-lg" target="_blank" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-facebook-official"></i> Share Beat To Facebook</a></span>    
                                    
                                    </div>
                                    <div class="" style="margin-top: 30px; text-align:center;">
                                    <span class="es-button-border"><a href="https://twitter.com/intent/tweet?text=Check out my beat on AmplifiHub https://amplifihub.com/beat-hub-detail/<?=$beatId ?>" class="btn btn-defaut btn-lg" target="_blank" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" ><i class="fa fa-twitter"></i> Share Beat To Twitter</a></span>
                                    </div>
                                    <div class="" style="margin-top: 30px; text-align:center;">
                                    <span class="es-button-border"><a href="https://wa.me/?text=Check out my beat on AmplifiHub https://amplifihub.com/beat-hub-detail/<?=$beatId ?>" target="_blank" class="btn btn-defaut btn-lg" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-whatsapp"></i> Share Beat To WhatsApp</a></span>    
                                    
                                    </div>
                                </div>

                                
                                


                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"
                                        data-dismiss="modal">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                
<?php 

echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script type='text/javascript'>

    $(document).ready(function(){
    $('.btnid').hide();
    
    $('#checkbox').change(function(){
        if(this.checked)
            $('.btnid').fadeIn('slow');
        else
            $('.btnid').fadeOut('slow');

    });
    
     
    });
    
    
</script>";

?>

<script>
$(document).ready(function(){
    // alert(localStorage.getItem('upload'));
    var check = localStorage.getItem('upload');
    var data_id = localStorage.getItem('upload_id');
    if(check == "uploaded"){
        $('#upload .es-button').each(function () {
          link = $(this).attr("href") + data_id
          $(this).attr("href", link);
        });
        $('#upload').modal('show');
    }
    var modalClose = $('#upload').is(':visible'); 
    // alert(modalClose);
    if(modalClose == true){
        localStorage.clear();
    }
    // alert($('#upload').is(':visible'));
});
</script>
<script>
     $(document).ready(function() {

         $("#swt").click(function () {
        
             if ($(this).hasClass('btn2')){
                 $('#swt').removeClass('btn2').addClass('btn1');
                 $(this).addClass('btn1').removeClass('btn2'); 
                 $("#swt").css("background-color", ""); 
                 $("#swt").css("background-color", "#e30d40"); 
             }

             else if ($(this).hasClass('btn1')){
                 $('#swt').removeClass('btn1').addClass('btn2');
                 $(this).addClass('btn2').removeClass('btn1');
                 $("#swt").css("background-color", ""); 
                 $("#swt").css("background-color", "transparent"); 
             }

         })
     })
    </script>