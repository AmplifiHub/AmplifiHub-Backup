<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Membership Subscriptions
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">subscription</li>
    <li class="breadcrumb-item active" aria-current="page">view membership</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<script src="https://js.paystack.co/v1/inline.js"></script>
<div class="row">
    <div class="col-md-12">
      <?php if ($Auth->user('id') == 1): ?>  <form action="" class="form-inline float-right">
            <label for="">Search User</label>
            <input type="text" name="search" class="form-control">
            <input type="submit" class="btn btn-success" value="Search">
        </form><?php endif; ?>
    </div>
</div>
<div class="membershiplevels index large-9 medium-8 columns content table-responsive" style="border:none;padding:0; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">

    <h4 style="
    text-align: center;
"> <button type="button" value="<?= h('PLN_s68m28g1rkpmr6w'); ?>" id="subscribe" onclick="payWithPaystack('<?= h('PLN_s68m28g1rkpmr6w'); ?>')"  class="subscribe1 btn btn-lg btn-block btn-primary">Test Subscribe Now!</button> </h4>
</div>
<?php
$user = $this->request->session()->read('Auth.User');

echo "<script>
  function payWithPaystack(plan){
    var plan = plan;
    var handler = PaystackPop.setup({
      //key: 'sk_test_71d16507b10ecc32e147e5176a016eccbe90f2e8',
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      first_name:'" . $user['firstname'] . "',
      last_name:'" . $user['lastname'] . "',
      email:'" . $user['email'] . "',
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
                <?=
                $this->Form->create(null, [
                    'url' => '/subscriptions/changeSub'
                    , 'type' => 'post'])
                ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="control-label" for="email">Select User</label>
                        </div>
                        <div class="col-sm-9">

                            <select class="form-control" required= "" name="userId">
                                <option value="">-- Select a user --</option>
                                <?php foreach ($subscriptions as $subscription): ?>
                                    <option value="<?= h($subscription->user->id) ?>"> <?= h($subscription->user->email) ?> &nbsp; - &nbsp; (<?= h($subscription->user->aka) ?>)</option>
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
            <div class="modal-footer">
            </div>
        </div>

    </div>

