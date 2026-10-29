<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
    
    .panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Add Your Sample
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">mixing and mastering</li>
    <li class="breadcrumb-item active" aria-current="page">add preview samples</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row" >
    <div class="col-lg-1"></div>
    <div class ="col-md-12 col-lg-10">
<div class="panel panel-default " style="
        text-align: center; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border: none;
    border-radius: 10px;" >
        <div class="panel-heading "><h3><?= __("Upload Your Mixing and Mastering Sample") ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn  <a href='https://support.amplifihub.com/905537-Mixing-and-Mastering' target='_blank' style='color:red;'> how to upload sample tracks here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
          <h3><span class="helper">Subscription Status: <?= $status = ($substatus == null) ? '<span class="label label-danger">Not Active</span>' : '<span class="label label-success">Active</span>' ; ?>
              </span></h3>
        </div>


  <div class="songwriters form large-9 medium-8 columns content">


        <div class="panel-body" >
        <?= $this->Flash->render() ?>
        

        <div class="form-group">
         <?= $this->Form->create($mixmastering,['type' => 'file','id'=>'addMixmastering']) ?>
            <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Select Genre</h4></div>
            
              <?= $this->Form->control('genre',['options'=>$genres,'empty'=>'Select genre','placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control select2-country'],'id' => 'genre','label'=> false,'required'=> true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
            <br/>
        
               <hr style="padding: 1px;background-color: #ccc;"/> 
            <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3> <?= $this->Form->label('upload', 'Track before mixing', ['class' => ['control-label']]);?>
            </h3></div>
                <div class="box">
                      <?= $this->Form->control('original',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false,'required'=>true]); ?>
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> 
            
                <hr style="padding: 1px;background-color: #ccc;"/>
            
              <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4">
               <div><h3> <?= $this->Form->label('upload', 'Track after mixing', ['class' => ['control-label']]);?>
            </h3></div>
                <div class="box">
                      <?= $this->Form->control('after',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-6','label'=> false,'required'=>true]); ?>
					<label for="file-6"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Add Mp3 file</span></label>
				</div>
           </div>
           <div class="col-md-4"></div>
       </div> 

 <br>
   <?= $this->Form->button(__('Get Listed'),['class'=>'btn btn-default btn-lg', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
   </div>
       <?= $this->Form->end() ?>
    </div>
 <div id="my-box">
        
    </div>
    </div>

 
<!--</div>--> </div>

</div>
  <div class="col-lg-1 col-md-1"></div>
</div>
