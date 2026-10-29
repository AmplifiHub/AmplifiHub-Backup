<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row" >
    <div class="col-lg-1"></div>
    <div class ="col-md-12 col-lg-10">

<div class="panel panel-default" style="
        text-align: center;">
    <div class=" panel-heading"><h3><?= __('Add Sample Video You Directed') ?> <a href="JavaScript:void(0);" data-toggle="tooltip" title="Learn How to  <a href='https://support.amplifihub.com/article/17-how-to-upload-video-clips' target='_blank'> add a sample video here</a>" data-html="true" ><i class="fa fa-question-circle"></i></a></h3>
        <h3><span class="helper">Subscription Status: <?= $status = ($substatus == null) ? '<span class="label label-danger">Not Active</span>' : '<span class="label label-success">Active</span>' ; ?>
            </span></h3>
    </div>
    <div class="panel-body">
        <?= $this->Form->create($director,['class'=>'form-inline']) ?>
   

    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
<div class="video">
    <div class="form-group" style="margin-bottom:10px ">

    <?php echo $this->Form->control('videos_url[]',['placeholder'=>'Youtube video url', 'label'=>false, 'class' => 'form-control','size'=> '50']);
        ?>
  </div>
    <div class="form-group mr-2" role="group" aria-label="First group" style="margin-bottom: 10px;">
    <?php echo $this->Html->link('<span class="fa fa-plus"></span> add more','#',['class'=>'btn btn-sm btn-success', 'id'=>'add', 'escape' =>false]);
    ?>
  </div>
    
  </div>
  <div class="form-group">
    <br>
  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-sm btn-primary form-control']) ?>
  </div>

      </div>




    <?= $this->Form->end() ?>
    </div>

</div>
</div>
    <div class="col-lg-1 col-md-1"></div>
</div>
