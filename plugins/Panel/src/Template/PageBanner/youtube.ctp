<?php

/**
 * @var \App\View\AppView $this
 */
?>

<div class="row" >
    <div class="col-lg-1"></div>
    <div class ="col-md-12 col-lg-10">
        <div class="panel panel-default" style="text-align: center;">
            <div class="panel-heading">
                
<?= $this->Flash->render() ?>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12"> 
                        <!-- Nav tabs -->
                        <div class="card">


                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="profile">
                            

                                    <?= $this->Form->create($pageBanner,['type' => 'file','class'=> 'form-horizontal','id'=> 'edit']) ?>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <?= $this->Form->label('videolink', 'videolink', ['class' => ['control-label']]);?>
                                        </div>
                                        <div class="col-md-9">
                                            
                                           
                                            <?= $this->Form->control('videolink',[   'templates'     => ['inputContainer' => '{{content}}'],
                               'class' => 'form-control','div'=>false,'label'=>""]) ?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                       
                                        <div class="col-md-3">
                                             
                                        </div>
                                        <div class="col-md-9">
                                            <iframe width="100%" height="315" src="<?= $pageBanner->videolink ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        
                                    </div>


                                    
                                    <br/>
                                    <div class="row">
          <?= $this->Form->button(__('Save'),['class'=>'btn btn-primary btn-lg']) ?> 
                                    </div>



    <?= $this->Form->end() ?>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div></div>
    <div class="col-lg-1"></div>
</div>
