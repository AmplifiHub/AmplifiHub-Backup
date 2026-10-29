<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Custom Beat Sales
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">work for hire</li>
    <li class="breadcrumb-item active" aria-current="page">seller section</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mmrequester[]|\Cake\Collection\CollectionInterface $mmrequesters
 */
?>
<!--New-->
<div class="row">
    <div class="col-xs-12">
        <div class="right-content">
           <!-- <h2>Mixing & Mastering Gig Orders</h2>-->
            <div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
                <table class="table table-striped" style="margin-bottom:0;">
                    <thead>
                    <tr>
                        
                        <th>Beat Name</th>
                        <th>Requester</th>
                        <th>Seller</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($mmrequesters as $mmrequester): ?>
                        <tr>
                            <td>
                                <?= h($mmrequester->beat_name) ?>
                            </td>
                            <td>
                                <?= h($mmrequester->requester_name) ?>
                            </td>
                            <td>
                                <?= h($mmrequester->seller_name) ?>
                            </td>
                            <td>
                                <?= h($mmrequester->status) ?>
                            </td>
                            <td>
                                <?= h($mmrequester->created) ?>
                            </td>
                            <td>
                                <?= $this->Html->link(__('View'), ['action' => 'view', $mmrequester->id],['class'=>'btn btn-info', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
                            </td>
                            <!--<td>
                                <button class="green" style="border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;">Done</button>
                                <?php $user = $this->request->session()->read('Auth.User');
                                if($user['role'] ==='admin'){
                                    echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $mmrequester->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $mmrequester->id)]);
                                } ?>
                            </td>-->
                            <!--<td>
                                <?php $user = $this->request->session()->read('Auth.User');
                                if($user['role'] ==='admin'){
                                    echo $this->Form->postLink(__('Cancel'), ['action' => 'delete', $mmrequester->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $mmrequester->id)]);
                                } ?>
                            </td>-->
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


<!--End new-->
