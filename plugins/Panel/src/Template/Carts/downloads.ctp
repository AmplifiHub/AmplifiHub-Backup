<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> My Purchases
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">purchases</li>
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
                        <th>Beat</th>
                        <th>License</th>
                        <th>Producer</th>
                        <?php if ($Auth->user('id') == 1): ?> <th>Buyer Name</th><?php endif; ?> 
                        <th>Amount</th>
                        <th>Status</th>
                        <th>ID</th>
                        <th>Download</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--    <?php  if(!empty($samples)){ foreach ($samples as $sample){ ?>-->
                       
                    <!--    <tr>-->
                    <!--        <td><?= h($sample['sample_name']) ?></td>-->
                    <!--        <td><?= h($sample['beat_type']) ?></td>-->

                    <!--        <td><?= h($sample['producer']) ?></td>-->
                    <!--        <?php if ($Auth->user('id') == 1): ?> <td><?= h($sample['producer']) ?></td><?php endif; ?> -->
                            
                    <!--        <td><?= '₦' . h($sample['amount']) ?></td>-->
                    <!--        <td><?= h($sample['status']) ?></td>-->
                    <!--        <td><?= h($sample['trans_ref']) ?></td>-->

                    <!--        <td>-->
                    <!--            <button onclick="this.nextElementSibling.click()" class="red" style= "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"><i class="fa fa-download"></i> Download</button> -->
                    <!--            <?php echo $this->Html->link('', "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name" . DS . $sample['sampleBeat'], ['download' => $sample['sampleBeat'], 'escape' => false]); ?>-->
                            
                    <!--        </td>-->
                    <!--        <td><?= h($sample['modifiedd']) ?></td>-->
                    <!--    </tr>    -->
                    <!--<?php } } ?>-->
                    <!--<?php if(!empty($packs)){ foreach ($packs as $pack){  ?>-->
                       
                    <!--    <tr>-->
                    <!--        <td><?= h($pack['sample_name']) ?></td>-->
                    <!--        <td><?= h($pack['beat_type']) ?></td>-->

                    <!--        <td><?= h($pack['producer']) ?></td>-->
                    <!--        <?php if ($Auth->user('id') == 1): ?> <td><?= h($pack['producer']) ?></td><?php endif; ?> -->
                            
                    <!--        <td><?= '₦' . h($pack['amount']) ?></td>-->
                    <!--        <td><?= h($pack['status']) ?></td>-->
                    <!--        <td><?= h($pack['trans_ref']) ?></td>-->

                    <!--        <td>-->
                    <!--            <button onclick="this.nextElementSibling.click()" class="red" style= "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"><i class="fa fa-download"></i> Download</button> -->
                    <!--            <?php echo $this->Html->link('', "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name" . DS . $pack['packs_zip'], ['download' => $pack['packs_zip'], 'escape' => false]); ?>-->
                            
                    <!--        </td>-->
                    <!--        <td><?= h($pack['modifiedd']) ?></td>-->
                    <!--    </tr>    -->
                    <!--<?php } } ?>-->
                    <?php foreach ($download as $downloads): ?>
                    
                    
                    
                    
                    
                    
                        <?php $beattype = $downloads->beat_type . '_name'; ?>
                        <tr>
                            <td><?php
                              switch ($downloads->beat_type) {
                                    case 'sample':
                                    case 'playlist':
                                        $name = $downloads->sample_store->sample_name;
                                        break;
                                    case 'pack':
                                        $name = $downloads->packs_store->sample_name;
                                        break;
                                    
                                    default:
                                        $name = $downloads->store->name;
                                        break;
                                }
                                echo h($name);
                               ?></td>
                            <td><?= h($downloads->beat_type) ?></td>

                            <td><?php
                              switch ($downloads->beat_type) {
                                    case 'sample':
                                    case 'playlist':
                                        $aka = $downloads->sample_store->user->aka;
                                        break;
                                    case 'pack':
                                        $aka = $downloads->packs_store->user->aka;
                                        break;
                                    
                                    default:
                                        $aka = $downloads->store->user->aka;
                                        break;
                                }
                                echo h($aka); 
                                ?></td>
                            <?php if ($Auth->user('id') == 1): ?> <td><?= h($downloads->user->aka) ?></td><?php endif; ?> 
                            
                            <td><?= '₦' . h($downloads->amount) ?></td>
                            <td><?= h($downloads->status) ?></td>
                            <td><?= h($downloads->trans_ref) ?></td> 

                            <td>
                                <button onclick="this.nextElementSibling.click()" class="btn btn-success" style= "box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-download"></i> Download</button> 
                                <?php
                                  switch ($downloads->beat_type) {
                                        case 'sample':
                                        case 'playlist':
                                            $link = "/freebeats/download/sample_wave/" . $downloads->sample_store->sample_wave ."/false/". $downloads->beat_type;
                                            break;
                                        case 'pack':
                                            $link = "/freebeats/download/packs_zip/" . $downloads->packs_store->packs_zip ."/false/". $downloads->beat_type;
                                            break;
                                        
                                        default:
                                            $link = "/freebeats/download/$beattype/" . $downloads->store->$beattype ."/false/". $downloads->beat_type;
                                            break;
                                    }
                                    echo $this->Html->link('', $link); ?>
                                <?php //echo $this->Html->link('', "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/" . $beattype . DS . $downloads->store->$beattype, ['download' => $downloads->store->$beattype, 'escape' => false]); ?>
                            
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

