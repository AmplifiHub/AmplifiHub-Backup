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
                                            <?= $this->Form->label('page', 'Page', ['class' => ['control-label']]);?>
                                        </div>
                                        <div class="col-md-9">
                                            
                                           
                                            <?= $this->Form->control('page',[   'templates'     => ['inputContainer' => '{{content}}'],
                            'options'=>$pages,   'class' => 'form-control','div'=>false,'label'=>""]) ?>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <?= $this->Form->label('header_text', 'Text', ['class' => ['control-label']]);?>
                                        </div>
                                        <div class="col-md-9">
                                            
                                           
                                            <?= $this->Form->control('header_text',[   'templates'     => ['inputContainer' => '{{content}}'],
                                'class' => 'form-control','div'=>false,'label'=>""]) ?>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                             
                                        </div>
                                        <div class="col-md-4">
                                            <div class="box">
                                                <?= $this->Form->control('file_name',['type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'class'=>['inputfile','inputfile-4'],'id' => 'file-5','label'=> false]); ?>
                                                <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>
                                                    Add new clip&hellip;</span></label>
                                            </div>
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
