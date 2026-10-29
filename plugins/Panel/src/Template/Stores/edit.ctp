<?php
/**
 * @var \App\View\AppView $this
 */
?>

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


<div class ="row">

<!--<div class="mixmasterings form large-9 medium-8 columns content">-->

    <!-- //$this->Form->create($mixmastering,['type' => 'file']) >-->
<div class="col-lg-1 col-md-1"></div>
<div class ="col-md-12 col-lg-10">
<div class="panel panel-default" style="
        text-align: center; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border: none;
    border-radius: 10px;">
        <div class="panel-heading">
          
              <h1 ><?= __('Edit Beat') ?></h1>
    
<?= $this->Flash->render() ?>
        </div>
        

<div class="stores form large-9 medium-8 columns content">
  <div class="panel-body" >
      <?= $this->Form->create($store, ['type' => 'file','id'=>'editBeat']) ?>
     
 <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3>Beat Cover Image</h3></div>
               <div>
              <?= $this->Html->link(
    'View previous cover image',
    "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/$store->cover",
    ['class' => 'button', 'target' => '_blank','style'=> 'font-size:1.5em']
);
        ?>
               </div>
               <br/>
               <div id="uploaded_image"><img class="croppie-cropped-img" src="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/cover/<?php echo $store->cover; ?>" class="img-thumbnail" /></div>
                <div class="box">
                      <?= $this->Form->control('cover',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=>false]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="200" height="170" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Replace Cover Image</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
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
            
                      <?= $this->Form->control('music_genre',['options'=>$genre,'empty'=>true,'placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
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
      
      
<div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Beats Duration/Length(in seconds)</h4></div>
            
                      <?= $this->Form->control('length',['min' => 0,'templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'length','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
      
       <br/> 
                      <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Sample Beat</h3>
                   <span>Supported type/s(mp3)</span>
    
               </div>
               <?php if($store->sample_name != ""):?>
               <div>
                     <?= $this->Html->link(
    'View previous Sample beat',
    "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/$store->sample_name",
    ['class' => 'button', 'target' => '_blank','style'=> 'font-size:1.5em']
);
        ?>
               </div>
               <?php endif;?>
               <br/>
                <div class="box">
                      <?= $this->Form->control('sample_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-7','label'=> false,'required'=> false]); ?>
					<label for="file-7"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Replace Mp3 file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
                
                      
                       <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Non-Exclusive License</h3>
               <span>Supported type/s(mp3 only)</span>
               </div>
               <?php if($store->lease_name != ""):?>
               <div>
                     <?= $this->Html->link(
    'View previous Lease beat',
    "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/$store->lease_name",
    ['class' => 'button', 'target' => '_blank','style'=> 'font-size:1.5em']
);
        ?>
               </div>
               <?php endif;?>
               <br/>
                <div class="box">
                      <?= $this->Form->control('lease_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-4','label'=> false,'required'=> false]); ?>
					<label for="file-4"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Replace Mp3 file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> 
        <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div>
                   <?= $this->Form->input('lease_access', ['type' => 'checkbox','id'=> 'freeAccessEdit','label' => 'Allow users to download this beat free','value'=>1]); ?>
               </div>
               </div>
               </div>
                
                  <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
                <div id="leasePriceHolder">
      <div><h4>Pricing</h4></div>
            
                             <?= $this->Form->control('lease_price',['type'=>'number','min'=> 5000,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 5000 and above','class'=>'form-control']); ?>

		
           </div>
             
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
                
                
                <br/>
                <hr style="padding: 1px;background-color: #ccc;"/>
                
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3 class="songTitle">Exclusive  License</h3>
               <span>Supported type/s(wave only)</span>
               </div>
                 <?php if($store->exclusive_name != ""):?>
                      <div>
                     <?= $this->Html->link(
    'View previous Exclusive beat',
    "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/exclusive_name/$store->exclusive_name",
    ['class' => 'button', 'target' => '_blank','style'=> 'font-size:1.5em']
);
        ?>
               </div>
               <?php endif;?>
               <br/>
               
                <div class="box">
                      <?= $this->Form->control('exclusive_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-2','label'=> false]); ?>
					<label for="file-2"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Replace Wave file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> 
                
                
                <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Pricing</h4></div>
            
                             <?= $this->Form->control('exclusive_price',['type'=>'number','min'=> 0,'label' => false, 'templates' => ['inputContainer' => '{{content}}'], 'placeholder' => 'From 5000 and above','class'=>'form-control']); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div> 
                <?=   $this->form->control('storeId',['type'=>'hidden','default' => $store->id,'class'=>'form-control']); ?>
                <p id="storeId" data-id="<?= $store->id; ?>"></p>              
      <div>
          <br/>
             <hr style="padding: 1px;background-color: #ccc;"/>
             
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
            <input type="checkbox" value="1" id="switcher" class="check" name = "hire" <?php if($store->hire == 1){echo "checked";} ?>>
            <b class="b switch"></b>
        </div>
        
         <br/>
             <hr style="padding: 1px;background-color: #ccc;"/>
        
          <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Promote Beat</h4></div>
                  <?=
             $user['role'] === 'admin' 
                        ? $this->Form->control('promoted',['placeholder'=>'promotion','templates' => ['inputContainer' => '{{content}}'],'class'=>'form-control','type' => 'select', 'options' =>['yes' => 'Promote', 'No' => 'Disable'], 'empty'=>'Select Promotion Status'])
                        : $this->Form->control('promoted',['placeholder'=>'promoted','templates' => ['inputContainer' => '{{content}}'],'class'=>'form-control','disabled' => true]); ?>
          
		
           </div>
           <div class="col-md-2"></div>
       </div>
          
        
          <br>
      <?= $this->Form->button(__('Save'),['class'=>'btn btn-default btn-lg', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?></div>
      <?= $this->Form->end() ?>
    </div>
      <div id="my-box">
        
    </div>
  </div>
  </div></div>
<div class="col-lg-1 col-md-1"></div>
</div>
<?php 

echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script type='text/javascript'></script>";

?>
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