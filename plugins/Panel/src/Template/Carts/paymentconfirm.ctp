<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Transaction Status
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">transaction status</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>

<div class="right-content">
<div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
   <!--  <h3><?= __('Transaction Status') ?></h3>-->
  <?= $this->Flash->render(); ?>
  <table cellpadding="0" cellspacing="0" class="table table-striped" style="margin-bottom:0;">
      <thead>
          <tr>
              <th scope="col"><?= $this->Paginator->sort('beat_id',['label'=>'Item']) ?></th>
              <th scope="col"><?= $this->Paginator->sort('license',['label' => 'License']) ?></th>
              <th scope="col"><?= $this->Paginator->sort('status') ?></th>
              <th scope="col"><?= $this->Paginator->sort('trans_ref',['label'=>'Transaction reference']) ?></th>
              <th scope="col"><?= $this->Paginator->sort('download',['label' => 'Download']) ?></th>
              <th scope="col"><?= $this->Paginator->sort('modified',['label'=>'Date']) ?></th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($download as $downloads): ?>
          <?php $beattype = $downloads->beat_type.'_name'; ?>
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
              <td><?= h($downloads->status) ?></td>
              <td><?= h($downloads->trans_ref) ?></td>
              <td> <?php
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
                        <?php echo $this->Html->link('Download <i class="download-icon fa fa-download"></i>', $link, ['escape' => false]); ?></td>
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
