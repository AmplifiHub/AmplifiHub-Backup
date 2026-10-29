<?php 
 
    function pagesName($page, $type){
       return  isset($page[$type]) ? $page[$type] : "-";
    }

?>

<div class="users index large-9 medium-8 columns content table-responsive">
  <?= $this->Flash->render() ?>
    <h3><?= __('Page Banner') ?>
    <?= $this->Html->link(__('Add '), ['action' => 'add'],['class'=>'btn btn-info btn-sm','style'=>'float: right;']) ?>
    </h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
               
                <th scope="col"><?= $this->Paginator->sort('page') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pageBanner as $banner): ?>
            <tr>
                
                <td><?= h(pagesName($pages,$banner->page)) ?></td>
                <td>  
                <?= $this->Html->image('https://s3.us-east-2.amazonaws.com/amplifihub/PageBanner/file_name/'.$banner->file_name,['class'=>['img-responsive' ],'style' =>['width : 150px']],['fullbase' => true]) ?>
                
                </td>
                <td><?= h($banner->created) ?></td>
                <td><?= h($banner->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

