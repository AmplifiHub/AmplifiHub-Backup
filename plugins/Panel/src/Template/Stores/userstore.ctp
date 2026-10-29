<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Uploaded Beats
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">music producer</li>
    <li class="breadcrumb-item active" aria-current="page">my beats</li>
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
                <?php foreach ($stores as $store): ?>
                
                    <tr>
                        <td>
                            <div style="position:relative;padding: 4px;margin-right: 19px">
                                <a href="#" style=""
                                   id="beat_image">
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => ' load ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/' . h($store->lease_name), 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pause"></i>', 'javascript:player.pause()', ['class' => 'hide pause pausehere ','style'=>'color:#262626;position:absolute;padding: 4px;', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => 'hide play ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/lease_name/' . h($store->lease_name), 'escape' => false]) ?>
                                </a>
                            </div>
                        </td>
                        <td>
                            <strong><?= h($store->name) ?>&nbsp;</strong>
                            <br>
                            <small><?= h($store->genre->genre) ?></small>
                        </td>
                        <td>
                            <span style="font-weight:bolder;"> <i class="fa fa-play"></i> Plays</span> <br>
                            <small><?= h($store->play_count) ?>&nbsp;</small>
                        </td>
                        <td>
                            <span style="font-weight:bolder;"> <i class="fa fa-thumbs-o-up"></i> Likes</span> <br>
                            <small><?= h($store->likes) ?>&nbsp;</small>
                        </td>
                        <td>
                            <span style="font-weight:bolder;"> <i class="fa fa-legal"></i> Lease</span> <br>₦<?= h(number_format(@$store->lease_price)) ?></small>
                        </td>
                        <td>
                            <span style="font-weight:bolder;"> <i class="fa fa-legal"></i> Premium</span> <br>
                            <small>₦<?= h(@number_format($store->premium_price)) ?></small>
                        </td>
                        <td>
                            <span style="font-weight:bolder;"> <i class="fa fa-legal"></i> Exclusive</span> <br>
                            <small>₦<?= h(@number_format(@$store->exclusive_price)) ?></small>
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
                    <!--    <?php
                        
                        if (($today >= $start_date) && ($today <= $end_date) && !empty($beatCompetition)){
                        ?>
                        <td>
                           
                            <button type="button" <?=$beatCompetition ? "disabled": "" ?> class="btn btn-info btn-sm" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); color:white;">Beat Selected</button>
                        </td>
                        
                        <?php }else if(!empty($beatCompetition)){
                        ?>
                        <td>
                           
                            <button type="button" <?=$beatCompetition ? "disabled": "" ?> class="btn btn-info btn-sm" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); color:white;">Beat Selected</button>
                        </td>
                        
                        <?php }else{ ?>
                            <td>
                            <?= $this->Form->postLink(
                                __('Choose For Competition'),
                                ['action' => 'choose', $store->id],
                                ['class' => 'btn btn-info btn-sm', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); color:white;", 'confirm' => __('Are you sure you want to choose beat for competition # {0}?', $store->name)]
                            )
                            ?>
                            </td>-->
                        <?php } ?>
                        
                        <?php foreach ($exclusive as $exc){ if($store->id == $exc['beat_id'] ){ ?>
                        <td>
                            <a class ='label label-success'>Sold Exclusively</a>
                            </td>
                        <?php }else{ ?>
                            <td>
                            <a class ='label label-danger'>Not Exclusively Sold</a>
                            </td>
                        <?php } } ?>
                    </tr>
                <?php endforeach; ?>

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

<!--New-->

