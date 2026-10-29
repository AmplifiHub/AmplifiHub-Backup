<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>
<div class="container">
<div class="carts index col-md-9 col-md-offset-1  table-responsive">
    <h3><?= __('Transaction Status') ?></h3>
  <?= $this->Flash->render(); ?>
  <table cellpadding="0" cellspacing="0" class="table table-striped">
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
              <td><?= h($downloads->store->name) ?></td>
              <td><?= h($downloads->beat_type) ?></td>
              <td><?= h($downloads->status) ?></td>
              <td><?= h($downloads->trans_ref) ?></td>
              <td> <?= h($downloads->store->$beattype) ?> <?php echo $this->Html->link('Download <i class="download-icon fa fa-download"></i>', "https://s3.us-east-2.amazonaws.com/amplifihub/Stores/" . $beattype . DS . $downloads->store->$beattype, ['download' => $downloads->store->$beattype, 'escape' => false]); ?></td>
              <td><?= h($downloads->modified) ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
    </div>
</div>
</div>
