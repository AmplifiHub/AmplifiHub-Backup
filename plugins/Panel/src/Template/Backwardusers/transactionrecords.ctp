<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Transaction Records
<label style="font-weight: 300; font-size: 16px;">List</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">Transaction Records</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index large-9 medium-8 columns content table-responsive">
    <?= $this->Flash->render() ?>

    <form action="" method="POST">
      <input type="hidden" name="type" value="export">
      <input type="submit" name="export" class="btn btn-primary" value="Export Excel">
    </form>

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchases') ?></th>
                <th scope="col"><?= $this->Paginator->sort('play_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_visits') ?></th>
                <th scope="col"><?= $this->Paginator->sort('free_downloads') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mix_masterings') ?></th>
                <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php
             $i = 1;
             foreach ($transRecords as $user): ?>
                <tr>
                    <!-- <td><?= $this->Number->format($user->user_id) ?></td> -->
                    <td><?php echo $i++; ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->sales) ?></td>
                    <td><?= h($user->purchases) ?></td>
                    <td><?= h($user->play_count) ?></td>
                    <td><?= h($user->profile_visits) ?></td>
                      <td><?= h($user->free_downloads) ?></td>
                    <td><?= h($user->mix_masterings) ?></td>
                    <!-- <td></td> -->
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
  <span class="pull-right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
</div>
