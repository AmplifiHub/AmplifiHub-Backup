<?php
/**
 * @var \App\View\AppView $this
 */
?>

<style>

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

/*for upload fields */

/* Code By Webdevtrick ( https://webdevtrick.com ) */
.container {
  padding: 50px 10%;
}

.box {
  position: relative;
  background: #ffffff;
  width: 100%;
}

.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
}

.box-tools {
  position: absolute;
  right: 10px;
  top: 5px;
}

.dropzone-wrapper {
  border: 2px dashed #333;
  color: #333;
  position: relative;
  height: 150px;
  border-radius: 10px;
}

.dropzone-desc {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  width: 40%;
  top: 50px;
  font-size: 16px;
}

.dropzone,
.dropzone:focus {
  position: absolute;
  outline: none !important;
  width: 100%;
  height: 150px;
  cursor: pointer;
  opacity: 0;
}

.dropzone-wrapper:hover,
.dropzone-wrapper.dragover {
  background: #ecf0f5;
}

.preview-zone {
  text-align: center;
}

.preview-zone .box {
  box-shadow: none;
  border-radius: 0;
  margin-bottom: 0;
}

.btn-primary {
  background-color: crimson;
  border: 1px solid #212121;
}

.btn-group {
    width:auto;
}

.select2 .select2-container{
    width:100%;
}
/*end upload field*/
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
          
              <h1 ><?= __('Edit Music') ?></h1>
    
<?= $this->Flash->render() ?>
        </div>
        

<div class="stores form large-9 medium-8 columns content">
  <div class="panel-body" >
      <?= $this->Form->create($store, ['type' => 'file','id'=>'editMusic']) ?>
     

        
         
<div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Music Name</h4></div>
               
            
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
               <div><h4>Lyrics</h4></div>
               
            
                      <?= $this->Form->control('lyrics',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control', 'ckeditor'],'id' => 'lyrics','label'=> false,'required'=> true, 'type' => 'textarea']); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
                <?=   $this->form->control('storeId',['type'=>'hidden','default' => $store->id,'class'=>'form-control']); ?>
                <p id="storeId" data-id="<?= $store->id; ?>"></p>   
                      
                       <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
            

       
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-10 col-md-offset-1">
               <div><h3 class="songTitle">Update Music on Drive  <a href="JavaScript:void(0);" data-toggle="tooltip" title="upload your music by dragging and dropping or selecting a file" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
                   <span>Supported type/s (mp3 & wave)</span>
               </div>
          <div class="form-group">
            <label class="control-label"></label>
            <div class="preview-zone hidden">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <div><b>Preview</b></div>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-danger btn-xs remove-preview">
                      <i class="fa fa-times"></i> Reset The Field
                    </button>
                  </div>
                </div>
                <div class="box-body"></div>
              </div>
            </div>
            <div class="dropzone-wrapper">
              <div class="dropzone-desc">
                <i class="glyphicon glyphicon-download-alt"></i>
                <p>Choose a mp3 or wave file or drag it here.</p>
              </div>
              <?= $this->Form->control('sample_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile-4', 'dropzone'],'id' => 'file-7','label'=> false]); ?>
            </div>
          </div>
      
    
           </div>
           <div class="col-md-4"></div>
       </div>  
          
                       <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
            
       
          <br>
      <?= $this->Form->button(__('Save'),['class'=>'btn btn-default btn-lg btnid', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?></div>
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
    
        
    <script>
        
function readFile(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var htmlPreview =
        '<img width="70" src="/img/music-file.svg"' + e.target.result + '" />' +
        '<p>' + input.files[0].name + '</p>';
      var wrapperZone = $(input).parent();
      var previewZone = $(input).parent().parent().find('.preview-zone');
      var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

      wrapperZone.removeClass('dragover');
      previewZone.removeClass('hidden');
      boxZone.empty();
      boxZone.append(htmlPreview);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function reset(e) {
  e.wrap('<form>').closest('form').get(0).reset();
  e.unwrap();
}

$(".dropzone").change(function() {
  readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
});
    </script>