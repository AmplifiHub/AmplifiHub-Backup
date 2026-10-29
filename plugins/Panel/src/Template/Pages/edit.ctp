<h1 style="font-weight: unset; margin-right: 24px;"> My Uploaded Beats
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">featured sample music</li>
    <li class="breadcrumb-item active" aria-current="page">edit featured sample</li>
  </ol>
</nav>


<?php
/**
 * @var \App\View\AppView $this
 */
 
?>
<div class="row" >
    <div class="col-lg-1 col-md-1"></div>
    <div class ="col-md-12 col-lg-10">
        <div class="panel panel-default" style="
        text-align: center;">
        <div class="panel-heading">
            <h1><?= __('Upload Featured Samples to Store') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn How to  <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000771578-how-to-upload-beats-on-amplifihub' target='_blank'>Upload Beats here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h1>
        </div>


<div class="stores form large-9 medium-8 columns content">
<div class="panel-body" >
    <?= $this->Form->create($store, ['type' => 'file','id'=> 'editBeatS']) ?>
 <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3>Sample Image (Square) <a href="JavaScript:void(0);" data-toggle="tooltip" title="Square min400x400" data-html="true" ><i class="fa fa-question-circle"></i></a></h3></div>
                <div class="box">
                      <?= $this->Form->control('sample_image',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=>true]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Cover Image</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>
    
    <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Sample Name</h4></div>
            
                      <?= $this->Form->control('sample_name',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'name','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    
   
    
    
      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Sample Price</h4></div>
            
                      <?= $this->Form->control('sample_price',['min' => 0,'templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'bpm','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>


       
            <div ><?=   $this->form->control('user_id',['type'=>'hidden','default' => $user,'class'=>'form-control']); ?></div><br>
    
   <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Sample Type</h4></div>
            
                      <?= $this->Form->control('sample_type',['options'=>$type,'empty'=>true,'placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
                
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Sample Genre</h4></div>
            
                      <?= $this->Form->control('sample_genre',['options'=>$genre,'empty'=>true,'placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div> 
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Music Year</h4></div>
            
                      <?= $this->Form->control('sample_year',['options'=>$years,'empty'=>true,'placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
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
                      <?= $this->Form->control('sample_beat',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-7','label'=> false,'required'=> true]); ?>
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
               <div><h3 class="songTitle">Sample Wave <a href="JavaScript:void(0);" data-toggle="tooltip" title="must be mp3 only  <a href='https://amplifihub.freshdesk.com/support/solutions/articles/48000772471-understanding-the-beat-instrumental-license-types' target='_blank'>Learn more about beat licenses here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
               <span>Supported type/s(wave only)</span>
               </div>
                <div class="box">
                      <?= $this->Form->control('sample_wave',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-4','label'=> false,'required'=> true]); ?>
					<label for="file-4"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Wave file&hellip;</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>   
       <?= $this->Form->control('id',['type'=>'hidden','default' => 'none','class'=>'form-control', 'id' => 'id' ]);  ?>
                <?=   $this->form->control('storeId',['type'=>'hidden','default' => $store->id,'class'=>'form-control']); ?>
                <p id="storeId" data-id="<?= $store->id; ?>"></p>
                
                <br/>
                <hr style="padding: 1px;background-color: #ccc;"/> 
                
   
     <iv><br><?= $this->Form->button(__('Update'),['class'=>'btn bluebtn btn-lg btnid', 'style'=> "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"]) ?></div>
  
    <?= $this->Form->end() ?> </div>
    <div id="my-box">
        
    </div>
</div>
</div>
</div>
<div class="col-lg-1 col-md-1"></div>
</div>

