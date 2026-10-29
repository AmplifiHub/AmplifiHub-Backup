<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Top Producer
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">users</li>
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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($topProducer as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Remove Top Producer'), ['action' => 'topProducer', $user->id, 0], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="users index large-9 medium-8 columns content table-responsive">
    <?= $this->Flash->render() ?>
    <h3><?= __('Power Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($powerUsers as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Remove Power Users'), ['action' => 'index', $user->id, 0], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-inline float-right">
            <label for="">Search User</label>
            <input type="text" name="search" class="form-control">
            <input type="submit" class="btn btn-success" value="Search">
        </form>
    </div>
</div>
<div class="users index large-9 medium-8 columns content table-responsive">
    <?= $this->Flash->render() ?>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#default" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Default</span></a></li>
        <li role="presentation" ><a href="#email-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Email Varified</span></a></li>
        <li role="presentation"><a href="#phone-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-users"></i>  <span>Phone Varified</span></a></li>
        <li role="presentation"><a href="#not-varified" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-users"></i>  <span>Not Varified</span></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="default">
            <br/>
            <h3><?= __('Users') ?> 
                
                <span><a class="btn btn-info" href="/users/downloads?account_type=music_producer">Export Music Producer</a></span>
                <span><a class="btn btn-default" href="/users/downloads?account_type=guest">Export Guests</a></span>
                <span><a class="btn btn-warning" href="/users/downloads?account_type=other">Export Users</a></span>
            
            <span><a class="pull-right btn btn-success" href="/users/downloads">Export Users</a></span></h3>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->aka) ?></td>
                    <td><?= h($user->email) ?></td>
                      <td><?= $user->phone ?></td>
                    <td><?= h($user->accounttype) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        <?= $this->Form->postLink(__('Top Producer'), ['action' => 'topProducer', $user->id, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                        <?= $this->Form->postLink(__('Power Users'), ['action' => 'index', $user->id, 1, $user->is_verified], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                        <?php
                        if (!empty($user->is_verified)) {
                            echo $this->Form->postLink(__('Verified'), ['action' => 'index', $user->id, $user->power_users, 0], ['class' => 'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to Un-verify Users # {0}?', $user->id)]);
                        } else {
                            echo $this->Form->postLink(__('Verify'), ['action' => 'index', $user->id, $user->power_users, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Verify Users # {0}?', $user->id)]);
                        }
                        ?>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#subscribe">Subscribe</button>
                        <?php if($user->refferal_permission == 0){ ?>
                    <a href = "/referrals/allow/<?=$user->id ?>" class="btn btn-success btn-xs">Referral Allow</a> 
                    <?php }elseif($user->refferal_permission == 1){ ?>
                    <a href = "/referrals/disallow/<?=$user->id ?>" class="btn btn-danger btn-xs">Referral Disallow</a>
                    <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>

      <div role="tabpanel" class="tab-pane" id="email-varified">
          <br/>
          <h3><?= __('Users') ?> <span><a class="pull-right btn btn-success" href="/users/downloads">Export Users</a></span></h3>
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
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($users as $user):
                    if(trim($user->email)):
                     ?>
                      <tr>
                          <td><?= $this->Number->format($user->id) ?></td>
                          <td><?= h($user->aka) ?></td>
                          <td><?= h($user->email) ?></td>
                          <td><?= $user->phone ?></td>
                          <td><?= h($user->accounttype) ?></td>
                          <td><?= h($user->role) ?></td>
                          <td><?= h($user->created) ?></td>
                          <td><?= h($user->modified) ?></td>
                          <td class="actions">
                              <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm']) ?>
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Top Producer'), ['action' => 'topProducer', $user->id, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Power Users'), ['action' => 'index', $user->id, 1, $user->is_verified], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?php
                              if (!empty($user->is_verified)) {
                                  echo $this->Form->postLink(__('Verified'), ['action' => 'index', $user->id, $user->power_users, 0], ['class' => 'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to Un-verify Users # {0}?', $user->id)]);
                              } else {
                                  echo $this->Form->postLink(__('Verify'), ['action' => 'index', $user->id, $user->power_users, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Verify Users # {0}?', $user->id)]);
                              }
                              ?>
                              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#subscribe">Subscribe</button>
                              

                          </td>
                      </tr>
                  <?php endif; endforeach; ?>
              </tbody>
          </table>
        </div>

      <div role="tabpanel" class="tab-pane" id="phone-varified">
          <br/>
          <h3><?= __('Users') ?> <span><a class="pull-right btn btn-success" href="/users/downloads">Export Users</a></span></h3>
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
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($users as $user):
                    if(trim($user->phone)):
                     ?>
                      <tr>
                          <td><?= $this->Number->format($user->id) ?></td>
                          <td><?= h($user->aka) ?></td>
                          <td><?= h($user->email) ?></td>
                          <td><?= $user->phone ?></td>
                          <td><?= h($user->accounttype) ?></td>
                          <td><?= h($user->role) ?></td>
                          <td><?= h($user->created) ?></td>
                          <td><?= h($user->modified) ?></td>
                          <td class="actions">
                              <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm']) ?>
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Top Producer'), ['action' => 'topProducer', $user->id, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Power Users'), ['action' => 'index', $user->id, 1, $user->is_verified], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?php
                              if (!empty($user->is_verified)) {
                                  echo $this->Form->postLink(__('Verified'), ['action' => 'index', $user->id, $user->power_users, 0], ['class' => 'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to Un-verify Users # {0}?', $user->id)]);
                              } else {
                                  echo $this->Form->postLink(__('Verify'), ['action' => 'index', $user->id, $user->power_users, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Verify Users # {0}?', $user->id)]);
                              }
                              ?>
                              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#subscribe">Subscribe</button>

                          </td>
                      </tr>
                  <?php endif; endforeach; ?>
              </tbody>
          </table>
        </div>

      <div role="tabpanel" class="tab-pane" id="not-varified">
          <br/>
          <h3><?= __('Users') ?> <span><a class="pull-right btn btn-success" href="/users/downloads">Export Users</a></span></h3>
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
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($users as $user):
                    if(!trim($user->email) && !trim($user->phone)):
                     ?>
                      <tr>
                          <td><?= $this->Number->format($user->id) ?></td>
                          <td><?= h($user->aka) ?></td>
                          <td><?= h($user->email) ?></td>
                          <td><?= $user->phone ?></td>
                          <td><?= h($user->accounttype) ?></td>
                          <td><?= h($user->role) ?></td>
                          <td><?= h($user->created) ?></td>
                          <td><?= h($user->modified) ?></td>
                          <td class="actions">
                              <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm']) ?>
                              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Top Producer'), ['action' => 'topProducer', $user->id, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?= $this->Form->postLink(__('Power Users'), ['action' => 'index', $user->id, 1, $user->is_verified], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Add Power Users # {0}?', $user->id)]) ?>
                              <?php
                              if (!empty($user->is_verified)) {
                                  echo $this->Form->postLink(__('Verified'), ['action' => 'index', $user->id, $user->power_users, 0], ['class' => 'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to Un-verify Users # {0}?', $user->id)]);
                              } else {
                                  echo $this->Form->postLink(__('Verify'), ['action' => 'index', $user->id, $user->power_users, 1], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to Verify Users # {0}?', $user->id)]);
                              }
                              ?>
                              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#subscribe">Subscribe</button>

                          </td>
                      </tr>
                  <?php endif; endforeach; ?>
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
<div id="subscribe" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Subscribe user to a Package</h4>
            </div>
            <div class="modal-body">
                <?= $this->Form->create(null, ['url' => '/users/subUser', 'type' => 'post']); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="control-label" for="email">Select User</label>
                        </div>
                        <div class="col-sm-9">

                            <select class="form-control" required= "" name="userId">
                                <option value="">-- Select a user --</option>
                                <?php foreach ($users as $user): ?>

                                    <option value="<?= h($user->id); ?>"> <?= h($user->email); ?> &nbsp; - &nbsp; (<?php echo $user->fullname; ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="control-label" for="pwd">Select Package</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control" required="" name="levelId">
                                <option value="">-- Select a package</option>
                                <?php foreach ($plans as $plan): ?>
                                    <option value="<?php echo $plan['id']; ?>"> <?php echo $plan['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                </div>
                <div style="margin-top: 10px;"></div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
