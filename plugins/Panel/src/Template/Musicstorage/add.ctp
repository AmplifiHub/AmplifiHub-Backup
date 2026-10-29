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
  /*width: 40%;*/
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

.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/*end upload field*/
</style>


<?php
/**
 * @var \App\View\AppView $this
 */
 
?>
<h1 style="font-weight: unset; margin-right: 24px;"> Upload Music & Lyrics
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">music storage</li>
    <li class="breadcrumb-item active" aria-current="page">upload music</li>
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
           // echo $today;exit;
    if($substatus != "active" && $user > 1){ ?>
    <div class="alert alert-warning">
    <strong>Music Management & Storage Subscription Expired!</strong> Please subscribe to a plan to fully use our music management and storage service.
    </div>
    <?php } ?>
    
    <?php if($substatus != "active" && $storagesize > 5 && $user > 1 && $checksilver1 == 'active'){ ?>
    <div class="alert alert-danger">
    <strong>Music Storage Silver Limit Exceeded!</strong> Please subscribe to a plan to fully use Storage.
    </div>
    <?php }else if($substatus != "active" && $storagesize > 10 && $user > 1 && $checkgold1 == 'active'){ ?>
    <div class="alert alert-danger">
    <strong>Music Storage Gold Limit Exceeded!</strong> Please subscribe to a plan to fully use Storage.
    </div>
    <?php }else if($substatus != "active" && $storagesize > 20 && $user > 1 && $checkplatinum1 == 'active'){ ?>
    <div class="alert alert-danger">
    <strong>Music Storage Gold Limit Exceeded!</strong> Please subscribe to a plan to fully use Storage. You can also contact to team for unlimited storage. 
    </div>
    <?php } ?>
            
    
            <h1><?= __('Store Your Music / Collab Remotely') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn  <a href='https://support.amplifihub.com/hc/en-us/articles/360008922298-How-To-Upload-Beats-On-AmplifiHub' target='_blank' style='color:red;'>how to upload beats here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h1>
            <h3> <span class="helper">Subscription Status: <?= $status = ($substatus == null) ? '<span class="label label-danger">Not Active</span>' : '<span class="label label-success">Active</span>' ; ?>
        </span></h3>
        
<?= $this->Flash->render() ?></p>      
    
       
        </div>


<div class="stores form large-9 medium-8 columns content">
<div class="panel-body" >
    <?= $this->Form->create($store, ['type' => 'file','id'=> 'addShare']) ?>
 
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
               <div><h4>Music Genre</h4></div>
            
                      <?= $this->Form->control('music_genre',['options'=>$genre,'empty'=>'Select genre','placeholder'=>'Select Genre','templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control select2-country'],'id' => 'genre','label'=> false,'required'=>true]); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
       
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <div><h4>Lyrics</h4></div>
            
                      <?= $this->Form->control('lyrics',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'lyrics','label'=> false, 'required'=> true, 'type' => 'textarea']); ?>
		
           </div>
           <div class="col-md-2"></div>
       </div>
    
    

       
            <div ><?=   $this->form->control('user_id',['type'=>'hidden','default' => $user,'class'=>'form-control']); ?></div><br>


                
                
               <br/> 
                      <hr style="padding: 1px;background-color: #ccc;"/>
       
       
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-10 col-md-offset-1">
               <div><h3 class="songTitle">Upload Music to Drive  <a href="JavaScript:void(0);" data-toggle="tooltip" title="upload your music by dragging and dropping or selecting a file" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
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
                <p>Choose an mp3 or wave file or drag it here.</p>
              </div>
              <?= $this->Form->control('sample_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile-4', 'dropzone'],'id' => 'file-7','label'=> false,'required'=> true]); ?>
            </div>
          </div>
      
    
           </div>
           <div class="col-md-4"></div>
       </div>   
                
                <br/>
                
                <hr style="padding: 1px;background-color: #ccc;"/>
 
                
    <div class="checkbox" style="margin-left:16px; color:#e30d40;"> 
        <input type="checkbox" name="checkbox" id="checkbox" <?php //if($freeMonthCount >= 5 && $otherSubscriptions == 0){ echo "disabled"; } ?>><a style="color:#e30d40; font-weight:bold;" href="#">I Accept The License Terms To Manage My Music Online</a>
    </div>
    
  
    <?php if($substatus == "active" || $user == 1){ ?>  
     <div><br><?= $this->Form->button(__('Upload'),['class'=>'btn btn-default btn-lg btnid', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?></div>
     <?php }else{ ?>
     <div><br><?= $this->Form->button(__('Upload'),['class'=>'btn btn-default btn-lg btnid', 'style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);", 'disabled']) ?></div>
     <?php } ?>
    <?= $this->Form->end() ?> </div>
    <div id="my-box">
        
    </div>
</div>
</div>
</div>
<div class="col-lg-1 col-md-1"></div>
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