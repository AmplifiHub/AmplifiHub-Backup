<h1 style="font-weight: unset; margin-right: 24px;"> My Uploaded Beats
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">featured sample music</li>
    <li class="breadcrumb-item active" aria-current="page">view featured sample</li>
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
<!--<h2></h2>-->
<div class="row">
    <div class="col-xs-12">

        <div class="table-responsive no-padding">
            <table class="table table-striped">
                <tbody>
                <?php foreach ($stores as $store): ?>
                    <tr>
                        <td>
                            <div style="position:relative;padding: 4px;margin-right: 19px">
                                <a href="#" style=""
                                   id="beat_image">
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => ' load ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($store->sample_beat), 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pause"></i>', 'javascript:player.pause()', ['class' => 'hide pause pausehere ','style'=>'color:#262626;position:absolute;padding: 4px;', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => 'hide play ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($store->sample_beat), 'escape' => false]) ?>
                                </a>
                            </div>
                        </td>
                        <td>
                            <strong><?= h($store->sample_name) ?>&nbsp;</strong>
                            <br>
                            <small><?= h($store->sample_genre) ?></small>
                        </td>
                      
                        <td>
                            Price <br>₦<?= h(number_format(@$store->sample_price)) ?></small>
                        </td>
                       
                        <td>
                            <?= $this->Html->link('Edit', ['action' => 'edit', $store->id], ['class' => 'btn btn-success btn-sm','style'=> "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"]) ?>
                        </td>
                        <td>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'delete', $store->id],
                                ['class' => 'btn btn-danger btn-sm', 'style'=> "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;", 'confirm' => __('Are you sure you want to delete # {0}?', $store->sample_name)]
                            )
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>


            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <span
                    class="pull-right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
            </div>

        </div>
    </div>


</div>

<!--New-->

