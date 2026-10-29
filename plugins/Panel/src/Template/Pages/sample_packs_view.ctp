<h1 style="font-weight: unset; margin-right: 24px;"> My Uploaded Packs
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">sample packs</li>
    <li class="breadcrumb-item active" aria-current="page">view sample packs</li>
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

<div class="row">
    <div class="col-xs-12">

        <div class="table-responsive no-padding">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Information</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($stores as $store): ?>
                    <tr>
                        <td>
                            <div style="position:relative;padding: 4px;margin-right: 19px">
                                <img src="https://s3.us-east-2.amazonaws.com/amplifihub/<?=$store->cover_path."/".$store->sample_image ?>" height="50" width="50">
                               
                            </div>
                        </td>
                        <td>
                            <strong><?= h($store->sample_name) ?>&nbsp;</strong>
                           
                        </td>
                      
                        <td>
                            <small>Price <br>₦<?= h(number_format(@$store->sample_price)) ?></small>
                        </td>
                       <td>
                           <p><?= $store->packs_description; ?></p>
                       </td>
                       <td>
                           <p><?= $store->packs_information; ?></p>
                       </td>
                        <td>
                            <?= $this->Html->link('Edit', ['action' => 'editpacks', $store->id], ['class' => 'btn btn-success btn-sm','style'=> "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"]) ?>
                        </td>
                        <td>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'deletep', $store->id],
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

