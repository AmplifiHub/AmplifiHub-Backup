<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Purchases Paperwork
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">purchases work</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>


<div class="row">
    <div class="col-xs-12">

        <div class="right-content">
            
            <div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
                <table class="table table-striped" style="margin-bottom:0;">
                    <thead>
                    <tr>
                        
                        
                        
                        <th>Amount</th>
                        <th>Beat Name</th>
                        <th>Status</th>
                        <th>License</th>
                        <th>Download</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $count=1; foreach ($downloadpdf as $downloads): ?>
                        
                        <tr>
                            
                            <td>₦<?= h($downloads->amount) ?></td>
                            <td><?= h($downloads->beat_name) ?></td>
                            <td><?= h($downloads->status) ?></td>
                            <td><?= h($downloads->beat_type) ?></td>
                            

                            <td>
                                <button onclick="this.nextElementSibling.click()" class="btn btn-warning" style= "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-download"></i> Invoice</button>
                                <?php echo $this->Html->link('', "/fpdf/invoicepdf?id=" . $downloads->id. "&licence=".$downloads->beat_type ); ?>
                                
                                <button onclick="this.nextElementSibling.click()" class="btn btn-success" style= "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-download"></i> Contract</button>
                                <?php echo $this->Html->link('', "/fpdf/licencepdf?id=" . $downloads->id."&licence=".$downloads->beat_type); ?>
                            </td>
                           
                            <td><?= h($downloads->modified) ?></td>
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

