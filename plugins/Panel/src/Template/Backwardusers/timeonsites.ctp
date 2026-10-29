<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Time On Site
<label style="font-weight: 300; font-size: 16px;">List</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">Time On Site</li>
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

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col"><?= $this->Paginator->sort('date', 'Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', 'User') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_spent', 'Time Spent') ?></th>
            </tr>
        </thead>
        <tbody>

          <?php $i = 1;
          foreach ($records as $user): ?>
             <tr>
                 <td><?php echo $i++; ?></td>
                 <td><?= $user->date ?></td>
                 <td><?= h($user->username) ?></td>
                 <td><?php
                  $login_logout_records = json_decode($user->login_logout_record);
                  rsort($login_logout_records);
                  foreach($login_logout_records as $rec){
                    echo $rec->login ? 'Login: '.date('H:i:s', $rec->login).'       ' : '';
                    echo $rec->logout ? 'Logout:'.date('H:i:s', $rec->logout) : '';
                    echo '<br>';
                  }
                  ?></td>
             </tr>
         <?php
        endforeach;
        ?>
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
