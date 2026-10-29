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
    .form-group .select
    {
        width:100%;
        background:#f2f2f2;
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px 0px rgba(0, 0, 0, 0);
        border-color:#d2d6de;
        
    }
    .form-group .select > select 
    {
         background:#f2f2f2;
         color:#000;
    }
    .form-group .select::after
    {
        background:#f2f2f2;
    }
    .form-group .select label
    {
        color:#000;
        width:100%;
        background:#f2f2f2;
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
    
            
      <h5><?= h('Track id:#'.$store->id) ?></h5>
      
      <h2 style="font-weight:bold;">Upload Information</h2>
    <table class="table table-condensed" style="border-collapse: unset; overflow:auto;">
        <tr>
            <th scope="row"><?= __('') ?></th>
            <td><?= $this->Html->link($msgid->aka, ['controller' => 'Users', 'action' => 'view', $msgid->id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song Title') ?></th>
            <td><?= h($store->song_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Album Title') ?></th>
            <td><?= h($store->album_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($store->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artist (primary)') ?></th>
            <td><?= h($store->ar_name1) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Artist (featured)') ?></th>
            <td><?= h($store->ar_name2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Production Year') ?></th>
            <td><?= h($store->production_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country of Release') ?></th>
            <td><?= h($store->country_of_release) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Release Date') ?></th>
            <td><?= h($store->release_date) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Advisory') ?></th>
            <td><?= ($store->advisory) ? 'Yes' :'No'?></td
        </tr>
        
        <tr>
            <th scope="row"><?= __('Authors') ?></th>
            <td><?= h($store->authors) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Composers') ?></th>
            <td><?= h($store->composers) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Executive producers') ?></th>
            <td><?= h($store->executive_producers) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Record abel copyright name') ?></th>
            <td><?= h($store->record_label_copyright_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Producer publisher') ?></th>
            <td><?= h($store->producer_publisher) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Main artist real name') ?></th>
            <td><?= h($store->main_artist_real_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Producer real name') ?></th>
            <td><?= h($store->producer_real_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Mixing and mastering engineer') ?></th>
            <td><?= h($store->mixing_and_mastering_engineer) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Performers real name') ?></th>
            <td><?= h($store->performers_real_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Writers real name') ?></th>
            <td><?= h($store->writers_real_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Lyricist real name') ?></th>
            <td><?= h($store->lyricist_real_name) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Lyrics') ?></th>
            <td><?= h($store->lyrics) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($store->language) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Recording location') ?></th>
            <td><?= h($store->recording_location) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Pre-order date') ?></th>
            <td><?= h($store->pre_order_date) ?></td>
        </tr>
        
        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($store->created) ?></td>
        </tr>
        <?php
        if($store['booking']==0) $status="Pending";
        elseif($store['booking']==2) $status="Rejected";
        else $status="Accepted";
        ?>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($status) ?></td>
        </tr>
    </table>
</div>

<div class="mmrequesters box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px; overflow:auto;
">
<h2 style="font-weight:bold;text-align: center;">Selected Stores</h2>

<p style="text-align: center;"><?= is_array($store->delivery_stores) ? $this->Text->toList($store->delivery_stores) : var_dump($store->delivery_stores) ?></p>

</div>
<h4 class="alert alert-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
"><i class="fa fa-exclamation-circle"></i> Keep Growing : Keep Uploading On AmplifiHub.</h4>

<div class="mmrequesters box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">


<h2 style="font-weight:bold;text-align: center;">Need Help?</h2>

<a href="mailto:support@amplifihub.com" class="btn btn-success btn-block"><b><i class="fa fa-envelope"></i>  Contact Support</b></a>
<a href="amplifihub.freshdesk.com" class="btn btn-success btn-block"><b><i class="fa fa-question"></i>  Visit Help Center</b></a>
</div>
</div>
<div class="col-md-8" style="min-height:650px;">
    <div class="box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">
    
<div class="box-header with-border">
              <h3 class="box-title">Show / Hide Distribution Tracking Info</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
                
                <table class="table table-condensed" style="border-collapse: unset;">
        <tr>
            <th scope="row"><?= __('Artiste') ?></th>
            <td><?=$store->user->aka?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?=$store->user->email?></td>
        </tr>
        
    </table>


<?php
$remarks=$store->remarks;
$links=explode(',',$store->links);
$uploaded_to=explode(',',$store->uploaded_to);
?>
<h3 style="font-weight:bolder;">Store Links <i class="fa fa-link"></i> </h3>
    <?php for($i=0;$i<sizeof($uploaded_to);$i++) { ?>
        <button type="button" class="btn btn-primary" target="blank" style="background-color:#3bb75e;border-color:#3bb75e;" onClick="downloadFile('<?=$links[$i]?>')" href=<?=$links[$i]?>> <?=$uploaded_to[$i]?></button>
    <?php } ?>
<h3 style="font-weight:bolder;"> Upload Description <i class="fa fa-info"></i> </h2>  <p><?=$store->remarks?></p>
<br>
<div><h3 style="font-weight:bolder;"> View Stream Data <span style="font-size:15px;">(better on a desktop browser)</span> <i class="fa fa-chart"></i> </h3>

   
        
<div class="img" style="border-radius:10px; padding: 5px; border:1px solid #ccc;overflow:auto;"><?=$store->graph?></div>
</div>

<!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<?php if ($user['role'] == 'admin'): ?>
<h2><b>Give Remarks : </b></h2>
<form action='/trackRemarks' method = 'post' id= 'uploadFile' enctype='multipart/form-data')?>
<div class="form-group" id="dynamic_field">
    <?/*=$this->Form->control('links', ['type' => 'text','class'=>'form-control'])*/?>
    <button name="add" id="add" class="btn btn-primary" style="background-color:#3bb75e;border-color:#3bb75e;">Add</button>
</div>
<!--<div class="form-group" >
    
    <?php $options=array( 'Google Play'=>'Google Play','Pandora'=>'Pandora','Apple Music'=>'Apple Music','iHeartRadio'=>'iHeartRadio','Mixclouds'=>'Mixclouds','Grooveshark'=>'Grooveshark');?>
    <?=$this->Form->control('uploaded_to', ['type' => 'select','label' => '--Uploaded to--', 'options' => $options, 'default' => 'Spotify','class'=>'form-control']);?>

</div>-->
<div class="form-group">
  <?= $this->Form->control('track_id',['type'=>'hidden','default'=>$store->id,'value'=>$store->id]) ?>
<textarea id="messagecanvas" name="remarks" class="form-control" style="margin-top:15px;" required minlegth="5"><?=$store->remarks?></textarea>
</div>
<div class="form-group">
    <?= $this->Form->control('graph', ['rows' => 6, 'class' => 'form-control', 'placeholder' => 'Paste embed code here', 'value' => $store->graph ]) ?>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success messagebtn" style= "border:1px solid #262626;border-radius:3px;padding:5px 10px;background-color:transparent;color:#262626;"><i class="fa fa-send"></i>  Save</button>
</div>
<!--

    <p class="mbtnp"><a class="mbtn" href="#" data-toggle="modal" data-target="#myModalHorizontal">ADD A BEAT TO PROMOTE</a></p>
-->
</form>

<?php endif; ?>
            


<div id="messages">
  <?php foreach ($messages as $message): ?>
<blockquote class="alert alert-info <?= $align = ($message['messager_id'] === $userid ) ? '' : 'blockquote-reverse' ; ?>">
  <p><?= $message['message'] ?></p>
    <footer><?= ucfirst($message['messager']['aka']) ?> | <cite><?= $message['created'] ?></cite></footer>
  </blockquote>
  <?php endforeach; ?>
</div>


</div>
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Store Name" class="form-control name_list" /></td><td><input type="text" name="link[]" placeholder="Link" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 
      
      <?php for($i=0;$i<sizeof($uploaded_to);$i++) { ?>
       addFields('<?=$uploaded_to[$i]?>','<?=$links[$i]?>'); 
    <?php } ?>
      function addFields(store,link){
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Store Name" value="'+store+'" class="form-control name_list" /></td><td><input type="text" name="link[]" value="'+link+'" placeholder="Link" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      }
      
       
 });  
 </script>
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
  
  
  function downloadFile(path){
                var win = window.open(path, '_blank');
                    if (win) {
                        win.focus();
                    } else {
                        alert('Please allow popups for this website');
                    }
            }
</script>";

?>
