<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Gig Sales
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">mixing and mastering</li>
    <li class="breadcrumb-item active" aria-current="page">seller section</li>
  </ol>
</nav>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mmrequester[]|\Cake\Collection\CollectionInterface $mmrequesters
 */
?>
<h2><!--Mixing & Mastering Gig Sales--></h2>
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
            <table class="table table-striped" style="margin-bottom:0;">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th>Projects</th>
                    <th>Summary</th>
                    <th>Service</th>
                    <th>Download</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($mmrequesters as $mmrequester): ?>
                    <tr>
                        <td><?= h($mmrequester->artist_band_name) ?></td>
                        <td><?= h($mmrequester->project_name) ?></td>
                        <td><?= h($mmrequester->song_description) ?></td>
                        <td><?= h($mmrequester->service_request) ?></td>
                        <td><?= h($mmrequester->download_link) ?></td>
                        <td><?= h($mmrequester->deadline) ?></td>
                        <td><span class="<?= $mmrequester->status === 'pending' ? 'label label-primary': 'label label-success'?>"><?= h($mmrequester->status) ?></span></td>
                        <td >
                            
                                <?= $this->Html->link(__('View'), ['action' => 'view', $mmrequester->orderid],['style'=>"box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);",'class'=>'btn btn-info']) ?>
                           

                        </td>
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
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>

