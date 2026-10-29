<h1 style="font-weight: unset; margin-right: 24px;"> Top Mixers
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">top mixers</li>
  </ol>
</nav>


<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artiste[]|\Cake\Collection\CollectionInterface $artistes

 */
 

?>

<div class="artistes index large-9 medium-8 columns content">
    
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('artiste_id') ?></th>
               
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <th scope="col" class="actions" style="float: right;     margin-right: 70px;"><?= __('Actions') ?></th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topArtistes as $artiste): ?>
            <tr>
                <td>
                    <?php 
                        if(isset($artiste->user)){
                            if($artiste->user->fullname == ""){
                                echo $artiste->user->firstname. " ".$artiste->user->lastname;
                            }else{
                                echo $artiste->user->fullname;
                            } 
                        }    
                        
            ?>
                </td>
             
                <!-- <td><?= h($artiste->created) ?></td> -->
                <td class="actions" style="float: right;">
                    <?= $this->Form->postLink(__('Remove From Top Mixers'), ['action' => 'featured', $artiste->id,0], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $artiste->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    
     <h3><?= __('Mixers') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('artiste_id') ?></th>
               
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <th scope="col" class="actions" style="float: right;     margin-right: 70px;"><?= __('Actions') ?></th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistes as $artiste): ?>
            <tr>
                <td>
                    <?php 
                        if(isset($artiste->user)){
                            if($artiste->user->fullname == ""){
                                echo $artiste->user->firstname. " ".$artiste->user->lastname;
                            }else{
                                echo $artiste->user->fullname;
                            } 
                        }    
                        
            ?>
                </td>
             
                <!-- <td><?= h($artiste->created) ?></td> -->
                <td class="actions" style="float: right;">
                    <?php if($artiste->featured == 1){ ?> 
                    <?= $this->Form->postLink(__('Remove From Top Mixers
'), ['action' => 'featured', $artiste->id,0], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $artiste->id)]) ?>
                    <?php }else{ ?>
                    <?= $this->Form->postLink(__('Add to Top Mixers
'), ['action' => 'featured', $artiste->id,1], ['class'=>'btn btn-info btn-sm','confirm' => __('Are you sure you want to Add to Top Airtist # {0}?', $artiste->id)]) ?>
                    <?php } ?>
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















