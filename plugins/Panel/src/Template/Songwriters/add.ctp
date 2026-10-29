<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row" >
    <div class="col-lg-1"></div>
    <div class ="col-md-12 col-lg-10">
<div class="panel panel-default" style="text-align: center;">
<div class="songwriters form large-9 medium-8 columns content">
<div class="panel panel-heading"><h3 ><?= __('Songwriter Upload Your Sample Song') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn How to <a href='https://support.amplifihub.com/article/13-how-to-upload-track-samples' target='_blank'> upload your sample song here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
    <h4><span class="helper">Subscription Status: <?= $status = ($substatus == null) ? '<span class="label label-danger">Not Active</span>' : '<span class="label label-success">Active</span>' ; ?>
</span></h4>
</div>

<div class ='panel panel-body' >
  <?= $this->Flash->render() ?>
    <?= $this->Form->create($songwriter, [ 'url' => array('controller' => 'songwriters', 'action' => 'addSongwriter'),
        'type'=>'file','id'=>'addSongwriter']) ?>
            
        <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3> <?= $this->Form->label('upload', 'Upload Sample song', ['class' => ['control-label']]);?>
            </h3></div>
                <div class="box">
                      <?= $this->Form->control('sample_song',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=> false]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div>  
    
      <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Enter Extra services you offer</h4></div>
            
          <?= $this->Form->control('extra_services',['label' => false, 'templates' => ['inputContainer' => '{{content}}'],'class'=>'form-control','required'=> true]); ?>

		
           </div>
           <div class="col-md-2"></div>
       </div> 
            <br/>
            
            
        <?= $this->Form->button(__('Submit'),['class'=>'btn bluebtn']) ?>


    <?= $this->Form->end() ?></div>
     <div id="my-box">
        
    </div>
</div>
</div>
</div>

    <div class="col-lg-1 col-md-1"></div>
</div>
