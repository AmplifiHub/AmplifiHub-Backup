<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mmrequester $mmrequester
 */
?>
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
    

td {
  white-space: normal !important; // To consider whitespace.
}
</style>
<style>
    #blockquote {
        text-align:center;
    }
</style>
<div class="col-md-4">
    
    
    
    
<div class="mmrequesters box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">
    <div class="widget-user-image" >
              <?php            if(!empty($msgid['photo'])){ ?>
        
            <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-<?= $msgid['photo'] ?>" class="profile-user-img img-responsive img-circle" alt="User Avatar" >
            <?php }else { ?>
              <img src="/img/default.png" class="profile-user-img img-responsive img-circle" alt="User Avatar" style="border: 3px solid #f39c12;">
            
            <?php } ?>
            
            </div>
      <!--<h5><?= h('Order id:#'.$mmrequester->id) ?></h5>
      <h2 style="font-weight:bold;"><?= $this->Html->link($msgid->aka, ['controller' => 'Users', 'action' => 'view', $msgid->id]) ?></h2>-->
    <table class="table table-condensed" style="border-collapse: unset;">
        <tr>
            <th scope="row"><?= __('Producer') ?></th>
            <td><?= h($mmrequester->seller_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artiste') ?></th>
            <td><?= h($mmrequester->requester_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mmrequester->created) ?></td>
        </tr>
    </table>
    
  <!--  <a href="/users/view/<?= $msgid->id ?>" class="btn btn-info btn-block"><b>View Profile</b></a>-->
</div>
<h4 class="alert alert-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
"><i class="fa fa-exclamation-circle"></i> Stay Secured : Keep Transactions Within AmplifiHub.</h4>
<div class="mmrequesters box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">


<h2 style="font-weight:bold;text-align: center;">Need Help?</h2>

<a href="/contact" class="btn btn-success btn-block"><b><i class="fa fa-envelope"></i>  Contact Support</b></a>
<a href="https://support.amplifihub.com" class="btn btn-success btn-block"><b><i class="fa fa-question"></i>  Visit Help Center</b></a>
</div>
</div>


<div class="col-md-8" style="min-height:650px;">
    
  
      <div class="col-md-3" style="width:100%;">
          <div class="box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">
            <div class="box-header with-border">
              <h3 class="box-title">Show / Hide Order Elements</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
            
            
    <div id="offer">
  <?php foreach ($offers as $offer): ?>
<blockquote id="blockquote" class="box box-warning box-solid <?= $align = ($offer['requester_id'] === $userid ) ? 'blockquote' : 'blockquote' ; ?>" >
  <p>Amount: <?= $offer['amount'] ?> (₦)</p>
  <p><?= $offer['description'] ?></p>
  <h4><?php if ($user['role'] != 'admin' && $offer['requester_id'] == $userid && $offer['oStatus'] == "pending"){ ?>
    <button class="gray" style="border:1px solid #e30d40;border-radius:3px;padding:5px 10px;background-color:#e30d40;color:#fff;"
        onclick="payForBeat(<?= h($offer['amount']); ?>, <?= h($offer['id']); ?>)"><i class="fa fa-credit-card"></i>  Pay
    </button>
    <?php }elseif($offer['oStatus'] == "active" && $offer['requester_id'] == $userid){ ?>
    <button class="gray" style="border:1px solid #3bb75e;border-radius:3px;padding:1px 5px;background-color:#3bb75e;color:#fff;font-size:15px;"
        >Active
    </button>
    <button class="gray" style="border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"
         onclick="payForDone(<?= h($offer['amount']); ?>, <?= h($offer['id']); ?>)"><i class="fa fa-check-circle"></i>  Done
    </button>
    <?php }elseif($offer['oStatus'] == "completed"){ ?>
    <button class="gray" style="border:1px solid #3bb75e;border-radius:3px;padding:1px 5px;background-color:#3bb75e;color:#fff;font-size:15px;"
        >Completed
    </button>
    <?php }elseif($offer['oStatus'] == "pending" && $offer['user_id'] == $userid){ ?>
    <button class="gray" style="border:1px solid #FFB900;border-radius:3px;padding:1px 5px;background-color:#FFB900;color:#fff;font-size:15px;"
        >Waiting for payment
    </button>
    <?php }elseif($offer['payment'] == "paid" && $offer['oStatus'] == "active" && $offer['user_id'] == $userid){ ?>
    <button class="gray" style="border:1px solid #3bb75e;border-radius:3px;padding:1px 5px;background-color:#3bb75e;color:#fff;font-size:15px;"
        >Paid
    </button>
    <?php } ?>
</h4>
    <footer><cite><?= $offer['created'] ?></cite></footer>
  </blockquote>
  <?php endforeach; ?>
  <?php
        $userEmail = $this->request->session()->read('Auth.User');
                ?>
        <span id="userEmail" style="display: none;"><?php echo $userEmail['email']; ?> </span>
</div>

<div id="files">
  <?php foreach ($uploadfile as $file): ?>
<blockquote class="alert alert-info" style="background-color: #F4F4F4 !important;
    color: black !important;
    border: 1px solid #ccc;">
  <h5><p style="font-weight:500;">File Attachment:</p> <p style="overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 150px;"><?=$file['name'] ?></p></h5>
  <p><a href="https://s3.us-east-2.amazonaws.com/amplifihub/<?=$file['path'].'/'.$file['name'] ?>" target="_blank" class="btn btn-success" style="
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    text-decoration: none;font-size:11px;float:right;"><i class="fa fa-download"></i>  Download</a></p>
    <footer> <cite><?= $file['timestamp'] ?></cite></footer>
  </blockquote>
  <?php endforeach; ?>
</div>

 </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

<h2>#Messages</h2>
<form action='/hire/uploadfile' method = 'post' id= 'uploadFile' enctype='multipart/form-data')?>
<div class="form-group">
    <label style="position:relative;margin-top: 9px;">
        
            
<a class='label label-default' href='javascript:;' style= "border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #ccc;
    color: #333;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-paperclip"></i>
         Choose File    
            
            <input type="file" required="required" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="name" id="file" onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info" style="font-size:8px;"></span>
        
</label>
<button type="submit" class="btn btn-default" style= "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2); float:right;margin-bottom:15px;"><i class="fa fa-upload"></i>  Upload</button>
  <?= $this->Form->control('messager_id',['type'=>'hidden','default'=>$userid]) ?>
  <?= $this->Form->control('aka',['type'=>'hidden','default'=>$msgid->firstname." ".$msgid->lastname]) ?>
    <?= $this->Form->control('clientemail',['type'=>'hidden','default'=>$mmrequester->beat_id]) ?>
<?php if($mmrequester->requester_id == $userid){ ?>
  <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$mmrequester->seller_id]) ?>
  <?php }else{ ?>
  <?= $this->Form->control('user_id',['type'=>'hidden','default'=>$mmrequester->requester_id]) ?>
  <?php } ?>
  <?= $this->Form->control('orderid',['type'=>'hidden','default'=>$mmrequester->id]) ?>
  <?= $this->Form->control('service',['type'=>'hidden','default'=>'hire']) ?>
<textarea id="messagecanvas" class="form-control" style="margin-top: 12px; border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;"></textarea></div>
<div class="form-group">
<button type="button" class="btn btn-default messagebtn" style= "color: #333;box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" onclick="msg()"><i class="fa fa-send"></i>  Send</button>

<?php if ($user['role'] != 'admin' && $status['requester_id'] != $userid && $offerLimit[0]['total'] < 11){ ?>
<button type="button" data-toggle="modal" data-target="#myModalHorizontal" class="btn btn-info messagebtn" style= "border-radius:3px;padding:5px 10px;float:right; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);" >Create Offer</button>
<?php }elseif($offerLimit[0]['total'] > 10){ ?>
<button type="button" data-toggle="modal" data-target="#myModalHorizontal1" class="btn btn-success messagebtn" style= "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;" >Offer limit is over. You just create 10 offers</button>

<?php } ?>


</div>
<!--
<?php if ($user['role'] != 'admin'): ?>
    <p class="mbtnp"><a class="mbtn" href="#" data-toggle="modal" data-target="#myModalHorizontal">ADD A BEAT TO PROMOTE</a></p>
<?php endif; ?>
-->
</form>
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
                                    Create Offer
                                </h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">

                                <?= $this->Form->create(null, [
                                    'url' => '/hire/createOffer/'.$mmrequester['orderid'].''
                                    , 'type' => 'post', 'class' => 'form-horizontal', 'role' => 'form']) ?>

                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Enter Amount(₦)</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" min="0" id="amount" placeholder="Please Enter Amount" required=""
                                               name="amount"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        
                                        <textarea name="description" placeholder="Please enter description about offer" class="form-control" rows="3" cols="5" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success pull-right" style="box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-plus"></i>  Create</button>
                                    </div>
                                </div>
                                <input type = "hidden" name="user_id" value="<?=$status['seller_id']; ?>" />
                                <input type = "hidden" name="requester_id" value="<?=$status['requester_id']; ?>" />
                                <input type = "hidden" name="order_id" value="<?=$status['id']; ?>" />
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
                
                


<div id="messages">
  <?php foreach ($messages as $message): ?>
<blockquote style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px; border-top: 3px solid #f39c12;
" class="box box-warning direct-chat direct-chat-warning <?= $align = ($message['messager_id'] === $userid ) ? '' : 'blockquote-reverse' ; ?>">
  <p><?= $message['message'] ?></p>
    <footer><?= ucfirst($message['messager']['aka']) ?> | <cite><?= $message['created'] ?></cite></footer>
  </blockquote>
  <?php endforeach; ?>
</div>


</div>
<script>
    var userEmail = $('#userEmail').text();

    //alert(userEmail);
    function payForBeat(amount, id) {
        if (userEmail !== ' ') {
            var amount = amount * 100,
                url = '/hire/addOfferId',
                id = id;

            $.post(url, {id: id}, function (data) {
                if (data === "ok") {
                    payWithPaystack(amount);
                    console.log('ok');
                } else {
                    alert("Oops an error occured");
                }
            });

        } else {
            window.location = '/login';
        }

    }
    
    
        function payForDone(amount, id) {
        if (userEmail !== ' ') {
            var amount = amount,
                url = '/hire/offerDone',
                id = id;

            $.post(url, {id: id, amount: amount}, function (data) {
                if (data === "ok") {
                    //payWithPaystack(amount);
                    //console.log(data);
                    window.location = "/hire/listorder";
                } else {
                    console.log(data);
                    alert("Oops an error occured");
                }
            });

        } else {
            window.location = '/login';
        }

    }

    $(document).ready(function(){
        
        /*
        $(".messagebtn").on('click', function(){
            var name = $("#file").val();
            var filename = name.replace(/^.*\\/, "");
            console.log(filename);
            alert(filename);
            
            var url = '/mmrequesters/uploadFile',
                file = filename;
            $.post(url, {file: filename}, function (data) {
                if (data != "") {
                    //payWithPaystack(amount);
                    console.log(data);
                    //window.location = "/mmrequesters";
                } else {
                    alert("Oops an error occured");
                }
            });
		
        });
        
        $('#uploadFile').submit(function(e){
            e.preventDefault();
            //alert('Am here');
            console.log(new FormData(this));
            //exit;
             var formData = new FormData(this);
            $.ajax({
            url: "/mmrequesters/uploadfile", // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
            beforeSend: function(){
                $('#my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
                $('.progress-bar').animate({width: "30%"}, 100);
            },
            success: function(data){  
                //console.log(data);
                var value1 = jQuery.parseJSON(data);
                  
               // var value = data;
                console.log(Object.keys(value1).length);
                
                
                if(value1.error === "yes"){
                    var value2 = "<div class='alert alert-danger'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function(){
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function(){
                            $('#my-box').html(value2);
                        }, 100);
                    }, 500);
                    //alert("Am here");
                   // location.href = 'logout';
                }else if(value1.error === "no" ){
                    var value3 = "<div class='alert alert-success'>" + value1.message + "</div>";
                    $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function(){
                        $('.progress-bar').css({width: "100%"});
                        setTimeout(function(){
                            $('#my-box').html(value3);
                        }, 100);
                    }, 500);
                }else if(value1.validation){
                   
                $.each(value1, function(key, value) {
                    console.log(key, value);
        $.each(value, function(key1, value4) {
              console.log(key1, value4); 
            $.each(value4, function(key2, value5) {
              console.log(key2, value5);
           
            $('.progress-bar').animate({width: "100%"}, 100);
                    setTimeout(function(){
                        $('.progress-bar').css({width: "100%"}).parent().delay(100).hide();
                        setTimeout(function(){
                            $('#my-box').append("<div class='alert alert-danger'>" + value5 + "</div>");
                        }, 100);
                    }, 500);
           // console.log(key1, value4);
            });   
        });            
            //console.log(key, value);
        });
               
                }
                setTimeout(function (){
                  location.reload();  
                }, 3000);
            },
            error: function(request, status, err) {
                console.log((status === "timeout") ? "Timeout" : "error: " + request + status + err);
            }
        });

    });
    */
    });
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
      ref: 'offer-'+Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response){
        //console.log(response);
          window.location = '/hire/addOfferPayment/'+response.reference;
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>";

?>
