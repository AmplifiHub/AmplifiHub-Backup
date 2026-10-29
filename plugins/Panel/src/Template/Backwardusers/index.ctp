<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Backward Users
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">backwardusers</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <form action="" class="form-inline float-right">-->
<!--            <label for="">Search User</label>-->
<!--            <input type="text" name="search" class="form-control">-->
<!--            <input type="submit" class="btn btn-success" value="Search">-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<div class="users index large-9 medium-8 columns content table-responsive">
    <?= $this->Flash->render() ?>
    <ul class="nav nav-tabs" role="tablist">
      <!--<li role="presentation" class="active"><a href="#default" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Default</span></a></li>-->
        <!--<li role="presentation" ><a href="#email-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Email Varified</span></a></li>-->
        <!--<li role="presentation"><a href="#phone-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-users"></i>  <span>Phone Varified</span></a></li>-->
        <!--<li role="presentation"><a href="#not-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-users"></i>  <span>Not Varified</span></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="default">
            <br/>
    <h3><?= __('Users') ?> <span><a class="pull-right btn btn-success" href="/backwardusers/downloads">Export Users</a></span></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aka') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accounttype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($backwardUsers as $buser): ?>
                <tr>
                    <td><?= $this->Number->format($buser['id']) ?></td>
                    <td><?= h($buser['aka']) ?></td>
                    <td><?= h($buser['email']) ?></td>
                      <td><?= $buser['phone'] ?></td>
                    <td><?= h($buser['accounttype']) ?></td>
                    <td><?= h($buser['role']) ?></td>
                    <td><?= h($buser['created']) ?></td>
                    <td><?= h($buser['modified']) ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>



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

