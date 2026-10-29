<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<script src="https://js.paystack.co/v1/inline.js"></script>
<div class="membershiplevels index large-9 medium-8 columns content table-responsive">
    <h3><?= __('Membership Subscriptions') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
               <?php if($Auth->user('id') == 1):?> <th scope="col"><?= $this->Paginator->sort('user',['label' => 'Users']); ?></th><?php endif;?> 
                <th scope="col"><?= $this->Paginator->sort('level',['label' => 'Subscriptions']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expiry',['label'=>'Expiry Date']) ?></th>
                <?php if($Auth->user('id') > 1):?><th></th><?php endif;?>
               <?php if($Auth->user('id') ==1):?><th colspan="3" style="text-align: center;"> Action</th> <?php endif;?>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach ($subscriptions as $subscription): ?>
            <tr>
                <?php if($Auth->user('id') == 1):?> <td><?= h($subscription->user->email); ?></td><?php endif;?>
                <!--td><//?= $subscription->has('user') ? $this->Html->link($subscription->user->fullname, ['controller' => 'Users', 'action' => 'view', $subscription->user->id]) : '' ?></td-->
                <td><?= h($subscription->plan->name) ?></td>
                <td><?= (strtotime(date('Y-M-d')) <= strtotime($subscription->expiry)) ? '<span class="label label-success">'.h($subscription->status).'</span>' : '<span class="label label-danger"> Disabled </span>'; ?></td>
                <td><?= h($subscription->created) ?></td>
                <td><?= h($subscription->expiry) ?></td>
                <?php if($Auth->user('id') > 1):?><td><button type="button" value="<?= h($subscription->plan->plan_code); ?>" onclick="payWithPaystack('<?= h($subscription->plan->plan_code); ?>')" id = "subscribe" class="btn btn-sm btn-success"> Renew Plan </button></td><?php endif;?>
            <?php if($Auth->user('id') == 1):?> 
                <td colspan="3">
                    <?php if((strtotime(date('Y-M-d')) <= strtotime($subscription->expiry))):?>
                    <?= $this->Form->postLink('Disable', ['controller' => 'Subscriptions', 'action' => 'stopSubscription', $subscription->id],['class'=>['btn','btn-danger','btn-sm'],'confirm' => __('Are you sure you want to stop this subscription')]) ?>
                    <?php endif;?>
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#downgrade">Change</button>
                </td> <?php endif;?>
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
<?php
$user = $this->request->session()->read('Auth.User');

echo "<script>
  function payWithPaystack(plan){
    var plan = plan;
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'". $user['email'] ."',
      plan: plan,
      ref: 'membership-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        //console.log(response);
          window.location = '/subscriptions/addsub/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>"

 ?>


<div id="downgrade" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Downgrade / Upgrade  user</h4>
      </div>
      <div class="modal-body">
      <?= $this->Form->create(null,[
    'url' => '/subscriptions/changeSub'
,'type' => 'post']) ?>
          
  <div class="form-group">
      <div class="row">
          <div class="col-sm-3">
                 <label class="control-label" for="email">Select User</label>
          </div>
          <div class="col-sm-9">
                    
        <select class="form-control" required= "" name="userId">
            <option value="">-- Select a user --</option>
            <?php foreach ($users as $user):?>
      
            <option value="<?= h($user['id']);?>"> <?= h($user['user']['email']);?> &nbsp; - &nbsp; (<?php echo $user['plan']['name'];?>)</option>
            <?php endforeach;?>
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
            <?php  foreach($plans as $plan):?>
            <option value="<?php echo $plan['id'];?>"> <?php echo $plan['name'];?></option>
            <?php endforeach;?>
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
      <div class="modal-footer">
      </div>
    </div>

  </div>
    
 