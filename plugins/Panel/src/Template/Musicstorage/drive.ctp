<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
    .frmSearch {margin: 2px 0px;padding:40px;border-radius:4px;}
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;overflow: auto;max-height: 200px;}
#country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border-radius:4px;}
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Drive
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">music storage</li>
    <li class="breadcrumb-item active" aria-current="page">my drive</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
?>


<!--New-->
<!-- Page Content  -->

<!--right-sidebar-content-area-->
<!--<h2><?php // __('My Uploaded Beats') ?></h2>-->
<div class="row">
    <div class="col-xs-12">

        <div class="table-responsive no-padding" style="border:none;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
            <table class="table table-striped" style="margin-bottom:0;">
                <tbody>
                <?php foreach ($stores as $store){
                
                ?>
                
                    <tr>
                        <td>
                            <div style="position:relative;padding: 4px;margin-right: 19px">
                                <a href="#" style=""
                                   id="beat_image">
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => ' load ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($store->sample_name), 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pause"></i>', 'javascript:player.pause()', ['class' => 'hide pause pausehere ','style'=>'color:#262626;position:absolute;padding: 4px;', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => 'hide play ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($store->sample_name), 'escape' => false]) ?>
                                </a>
                            </div>
                        </td>
                        <td>
                            <strong><?= h($store->name) ?>&nbsp;</strong>
                            <br>
                            <small><?= h($store->genre->genre) ?></small>
                        </td>
                        <td>
                            
                            <strong><?= $store->lyrics; ?>&nbsp;</strong>
                        </td>
                        
                        <td>
                            <?= $this->Html->link('Share Music', ['action' => 'share', $store->id], ['class' => 'btn btn-success btn-sm shares','style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);", 'data-toggle' => "modal", "data-target" => "#downgrade1", "data-id" => $store->id]) ?>
                        </td>
                        
                        <td>
                            <?= $this->Html->link('Chat with me', ['controller' => '', 'action' => '#'], ['class' => 'btn btn-info btn-sm chatwithme','style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);", 'data-toggle' => "modal", "data-target" => "#downgrade", "data-id" => $store->id]) ?>
                        </td>
                        
                        <td>
                            <?= $this->Html->link('Edit', ['action' => 'edit', $store->id], ['class' => 'btn btn-default btn-sm','style'=> "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
                        </td>
                        <td>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'delete', $store->id],
                                ['class' => 'btn btn-danger btn-sm', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);", 'confirm' => __('Are you sure you want to delete # {0}?', $store->name)]
                            )
                            ?>
                        </td>
                        
                        <input type="hidden" value="https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/'<?=$store->sample_name ?>" id="myInput">
                       
                       
                       <input type="hidden" name = "id" id= "id" value = "<?=$store->id ?>"/>
                    </tr>
                    
                    
                
                <?php } ?>

                </tbody>
            </table>
        </div>

            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p
                    ><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>

        </div>
    </div>


</div>

<div id="downgrade" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Musicians To Collab With</h4>
            </div>
            <div class="modal-body">
                <?=
                $this->Form->create(null, [
                    'url' => 'musicstorage/musician?search='
                    , 'type' => 'post', 'id' => 'mform']);
                ?>

        
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="row frmSearch">
                        <div class="col-sm-2">
                            <label class="control-label" for="pwd">Search Musicians</label>
                        </div>

                        <div class="col-sm-9">
                            <?= $this->Form->control('musician',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],"id" => "search-box",'label'=> false,'required'=> true, 'type' => 'text']); ?>
                            <div id="suggesstion-box"></div>
                        </div>
                        
                        <input type="hidden" name = "music_id" id= "music_id" value = ""/>
                        
                    </div>

                </div>
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success pull-right" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">Go to Chat</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
    </div>
    
    
    <div id="downgrade1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:10px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Share Your Music With Other Users</h4>
            </div>
            <div class="modal-body">
                <?=
                $this->Form->create(null, [
                    'url' => 'musicstorage/sharemusic'
                    , 'type' => 'post', 'id' => 'sform']);
                ?>

        
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="row frmSearch">
                        <div class="row">
                        <div class="col-sm-2">
                            <label class="control-label" for="pwd">Search Musicians</label>
                        </div>

                        <div class="col-sm-9">
                           
                            
                            <?= $this->Form->control('musician',['templates' => ['inputContainer' => '{{content}}'], 'class'=>['form-control'],'id' => 'musician','label'=> false,'required'=> true, 'type' => 'text']); ?>
                            <div id="suggesstion"></div>
                        </div>
                        </div>
                        
                        </br>
                        
                        <div class="row" style="text-align:center;">
                        <div class="" style="padding:20px; border-top:1px solid #ccc;">
                            <label class="control-label" for="pwd">Allow user to download</label> <input type="checkbox" name="allow" id="allow" value="1" style="
    margin-left: 10px;margin-bottom: 0;margin-top: 0;
">
                        
                        </div>
                        
                        <input type="hidden" name = "music_id" id= "mus_id" value = ""/>
                        <input type="hidden" name = "musician_id" id= "musician_id" value = ""/>
                        <input type="hidden" name = "user_id" id= "user_id" value = "<?=$user; ?>"/>
                        
                    </div>

                </div>
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success pull-right" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">Share Song</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
    </div>
    
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>


<!--New-->

