<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<h1 style="font-weight: unset; margin-right: 24px;"> Promote Beats
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item" aria-current="page">music producer</li>
    <li class="breadcrumb-item active" aria-current="page">promote beats</li>
  </ol>
</nav>

<?php
$user = $this->request->session()->read('Auth.User');
?>
<?= $this->Html->script([
    '/bower_components/jquery/dist/jquery.min']); ?>
<script src="https://js.paystack.co/v1/inline.js"></script>
<!--New-->
<!--right-sidebar-content-area-->
<style>
    .mbtnp {


    }

    .mbtn {
       font-weight: bolder;
        background-color: lightgreen;
        padding: 1%;
        color: white;
    }
</style>
<h2 ><!--Promote Beats--></h2>
<?php if ($user['role'] != 'admin'): ?>
    <p class="mbtnp" style="text-align:center;"><a class="btn btn-warning" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" href="#" data-toggle="modal" data-target="#myModalHorizontal"><i class="fa fa-plus-circle" style="margin-right:5px;"></i>  Add A Beat To Promote</a></p>
<?php endif; ?>
<div class="row">
    <div class="col-xs-12">
            <div class="table-responsive no-padding" style="border:none; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); border-radius: 10px;">
                <table class="table table-striped" style="margin-bottom:0;">
                    <thead>
                    <tr>
                        <th>
                            <?= $this->Paginator->sort('id', ['label' => '#No']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('store_id', ['label' => 'Beat Name']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('days', ['label' => '#No Of Days']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('fee', ['label' => 'Fee']) ?>
                        </th>
                        <?php if ($user['role'] == 'admin'): ?>
                            <th>
                                <?= $this->Paginator->sort('fee', ['label' => 'Paid']) ?>
                            </th>
                        <?php endif; ?>
                        <th>
                            <?= $this->Paginator->sort('plays', ['label' => 'Plays']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('status', ['label' => 'Status']) ?>
                        </th>
                        <?php if ($user['role'] == 'admin'): ?>
                            <th>
                                <?= $this->Paginator->sort('permission', ['label' => 'Permission']) ?>
                            </th>
                        <?php endif; ?>
                        <th>
                            <?= $this->Paginator->sort('start_date', ['label' => 'Start Date']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('end_date', ['label' => 'End Date']) ?>
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($beatsToPromote as $key => $value): ?>
                        <tr>
                            <td>
                                <?= h($key + 1) ?>
                            </td>
                            <td>
                                <?= h($value->store->name); ?>
                            </td>
                            <td>
                                <?= h($value->days) ?>
                            </td>
                            <td>
                                ₦<?= h($value->fee) ?>
                            </td>
                            <?php if ($user['role'] == 'admin'): ?>
                                <td>
                                    ₦<?= h($value->amount_paid) ?>
                                </td>
                            <?php endif; ?>
                            <td>
                                    <?= h($value->store->play_count) ?>
                                </td>
                            <td>
                                <?php if ($value->status == "No payment yet"): ?>
                                    <span class="label label-danger payStatus"><?= h($value->status) ?></span>

                                <?php elseif ($value->status == "Payment made"): ?>
                                    <span class="label label-primary payStatus"><?= h($value->status) ?></span>

                                <?php elseif ($value->status == "Activated"): ?>
                                    <span class="label label-success payStatus"><?= h($value->status) ?></span>
                                <?php endif ?>
                            </td>
                            <?php if ($user['role'] == 'admin'): ?>
                            <td>
                                <?php if ($value->permission == 0): ?>
                                    <span class="label label-success payStatus"><?php echo $this->Html->link('Activate', array('controller' => 'stores', 'action' => 'permission', 'permission' => 1, 'id' => $value->id, 'store'=> $value->store_id), array('style' => 'font-size:12px;color:white;')); ?></span>

                                <?php elseif ($value->permission == 1): ?>
                                    <span class="label label-danger payStatus"><?php echo $this->Html->link('Deactivate', array('controller' => 'stores', 'action' => 'permission', 'permission' => 0, 'id' => $value->id, 'store'=> $value->store_id), array('style' => 'font-size:12px;color:white;')); ?></span>

                                <?php endif ?>
                            </td>
                            <?php endif; ?>
                            <?php 
                                $days=$value->days;
                                $startDate=$value->modified;
                                $startDate1= date('Y-m-d', strtotime($startDate));
                                $addDays="+".$days." day";
                                //$endDate= date('Y-m-d H:i:s', strtotime($addDays));
                                //$endDate= date( "m/d/y, g:i A", strtotime($endDate) );
                                $endDate= date('m/d/y, g:i A', strtotime($addDays, strtotime($startDate)));
                                $endDate1= date('Y-m-d', strtotime($endDate));
                                
                                //exit;
                            ?>
                            <td>
                                <?= h($value->modified) ?>
                            </td>
                            <?php 
                            if(date('Y-m-d') > $endDate1){
                            ?>
                            <td><span class="label label-success payStatus">Promotion Completed</span></td>
                            <?php }else{ ?>
                            <td>
                                <?= h($endDate) ?>
                            </td>
                            <?php } ?>
                            <td>
                                <?php if ($value->status == "No payment yet"): ?>
                                    <button class="btn btn-info" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"
                                            onclick="payForBeat(<?= h($value->fee); ?>, <?= h($value->id); ?>)">Pay
                                    </button>
                                <?php endif; ?>
                            </td>
                            
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

                <!--End New-->
                <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius:10px;">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Select A Beat To Promote
                                </h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                <?= $this->Form->create(null, [
                                    'url' => '/stores/addBeatToPromote'
                                    , 'type' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) ?>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Choose A Beat</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="beatId" name="beatId" required="">
                                            <option value="">--Select a beat --</option>
                                            <?php foreach ($userBeats as $value): ?>
                                                <option
                                                    value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">No. Of Days</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" min="0" id="noOfDays" required=""
                                               name="noOfDays" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Total Amount(₦)</label>
                                    <div class="col-sm-9">
                                        <input type="number" readonly="" class="form-control" id="totalAmount"
                                               name="totalAmount" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success pull-right" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-plus"></i>  ADD</button>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>


                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"
                                        data-dismiss="modal">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <?php
                $userEmail = $this->request->session()->read('Auth.User');
                ?>
                <span id="userEmail" style="display: none;"><?php echo $userEmail['email']; ?> </span>
            </div>
    </div>
</div>


<script>
    var userEmail = $('#userEmail').text();

    //alert(userEmail);
    function payForBeat(amount, id) {
        if (userEmail !== ' ') {
            var amount = amount * 100,
                url = '/stores/addBeatId',
                id = id;

            $.post(url, {id: id}, function (data) {
                if (data === "ok") {
                    payWithPaystack(amount);
                } else {
                    alert("Oops an error occured");
                }
            });

        } else {
            window.location = '/login';
        }

    }

</script>
<?php
$user = $this->request->session()->read('Auth.User');

echo "<script>
  function payWithPaystack(amount){
    var plan = plan;
    var handler = PaystackPop.setup({
      key: 'pk_live_a6549831a5a97d351686d954540d754493973461',
      email:'" . $user['email'] . "',
      amount: amount,
      ref: 'promotebeat-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        //console.log(response);
          window.location = '/stores/addBeatPayment/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>";

?>
