<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Messages
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">messages</li>
  </ol>
</nav>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
<div class="messages index large-9 medium-8 columns content table-responsive" style="border:none;padding:0; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
   
    <table cellpadding="0" cellspacing="0" class="table table-striped" style="margin-bottom:0;">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('orderid',['label'=>'#Order']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('messager_id',['label'=>'Sender']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach ($messages as $message): ?>
            <tr class="<?= $retVal = ($message->status === 'unread' && $message->messager_id !== $id) ? 'unread' : '' ;?>">

                <td><?= h($message->orderid) ?></td>
                <td><?= h($message->messager->firstname) ?> <?= h($message->messager->lastname) ?></td>
                <td><?= h($message->message) ?></td>
                <td><?= h($message->created) ?></td>

                <?php if($message->service == "musician"){ ?>
                <td class="actions">
                    <?= $this->Html->link(__('Reply'), ['controller'=>'musicstorage/','action' => 'musician/'.$message->music_id.'?search='.$message->messager_id],['class'=>'btn btn-info', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
                </td>
                <?php }else{ ?>
                <td class="actions">
                    <?= $this->Html->link(__('Reply'), ['controller'=>$message->service,'action' => 'view', $message->orderid],['class'=>'btn btn-info', 'style'=> "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"]) ?>
                </td>
                <?php } ?>
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
