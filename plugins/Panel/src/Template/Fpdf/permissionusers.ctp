<h1 style="font-weight: unset; margin-right: 24px;"> Permission Users
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">permission users</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="row">
    <div class="col-md-12">
      <?php if ($Auth->user('id') == 1): ?>  <form action="" class="form-inline float-right">
            <label for="">Search User</label>
            <input type="text" name="search" class="form-control">
            <input type="submit" class="btn btn-success" value="Search">
        </form><?php endif; ?>
    </div>
</div>
<div class="membershiplevels index large-9 medium-8 columns content table-responsive">

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <?php if ($Auth->user('id') == 1): ?> <th scope="col"><?= $this->Paginator->sort('user', ['label' => 'Name']); ?></th><?php endif; ?>
                <th scope="col"><?= $this->Paginator->sort('level', ['label' => 'Email']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('level', ['label' => 'Phone']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('Role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created Date') ?></th>
                <th scope="col"> Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($permissions as $permission): ?>
                <tr>
                   
                    <td><?= h($permission->firstname." ".$permission->lastname) ?></td>
                    <td><?= h($permission->email) ?></td>
                    <td><?= h($permission->phone) ?></td>
                    <?php if($permission->role == 'user'){ ?>
                    <td>Other Account</td>
                    <?php } ?>
                    <?php if($permission->role == 'trial'){ ?>
                    <td>Trial Account</td>
                    <?php } ?>
                    <td><?= h($permission->address) ?></td>
                    <td><?= h($permission->created) ?></td>
                    
                    <?php if ($permission->role == 'user'){ ?>
                    <td>
                    <?= $this->Form->postLink('Trial Account', ['controller' => 'Fpdf', 'action' => 'changePermissionTrial', $permission->id], ['class' => ['btn', 'btn-info', 'btn-sm'], 'confirm' => __('Are you sure you want to change account type to trial account')]) ?>

                    </td><?php } ?>
                    <?php if($permission->role == 'trial'){ ?>
                    <td>
                    <?= $this->Form->postLink('Other Account', ['controller' => 'Fpdf', 'action' => 'changePermissionOther', $permission->id], ['class' => ['btn', 'btn-success', 'btn-sm'], 'confirm' => __('Are you sure you want to change account type to other account')]) ?>
                    </td><?php } ?>
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



<div id="downgrade" class="modal fade" role="dialog">

