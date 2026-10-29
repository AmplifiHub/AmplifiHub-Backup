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
<h2 >Promote Beats</h2>

<div class="row">
    <div class="col-xs-12">
            <div class="table-responsive no-padding">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            <?= $this->Paginator->sort('id', ['label' => '#No']) ?>
                        </th>
                        <th>
                            <?= $this->Paginator->sort('store_id', ['label' => 'Beat Name']) ?>
                        </th>
                        
                        <!--
                        <th>
                            <?= $this->Paginator->sort('status', ['label' => 'Status']) ?>
                        </th>
                        -->
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
                                <?= h($value['name']); ?>
                            </td>
                            
                            <!--
                            <td>
                            <?php
                            if($value->promote_permission == 1 || $value->promoted == 'yes'){ ?>
                              <span class="label label-success payStatus"><?= h('Active') ?></span>  
                            <?php }else{
                            ?>
                            <span class="label label-danger payStatus"><?= h('Deactive') ?></span>
                           </td>
                           <?php }?>
                           -->
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

                <!--End New-->
                <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close"
                                        data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Select Beat to Promote
                                </h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                <?= $this->Form->create(null, [
                                    'url' => '/stores/addBeatToPromote'
                                    , 'type' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) ?>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"
                                    >Choose a beat</label>
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
                                    <label class="col-sm-3 control-label"
                                    >No of Days</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" min="0" id="noOfDays" required=""
                                               name="noOfDays"
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"
                                    >Total Amount(₦)</label>
                                    <div class="col-sm-9">
                                        <input type="number" readonly="" class="form-control" id="totalAmount"
                                               name="totalAmount"
                                        />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary pull-right">ADD</button>
                                    </div>
                                </div>
                                <?= $this->Form->end() ?>


                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left"
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
