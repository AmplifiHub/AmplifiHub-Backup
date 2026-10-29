<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<style>

h1
{
	margin-top:20px;
	font-size:40px;
	color:#E6E6E6;
}
#total_votes
{
	font-size:30px;
	color:#FE2E2E;
	font-weight:bold;
}
.div
{
	border:1px solid #E6E6E6;
	clear:both;
	margin-top:20px;
	height:100px;
	width:400px;
	padding:10px;
	margin-left:300px;
	border-radius:3px;
}
.div p
{
	margin:0px;
	font-size:20px;
	text-align:left;
	color:#E6E6E6;
}
.rate img
{
	margin-top:10px;
	width:50px;
	height:50px;
	float:left;
	
}
input[type="submit"]
{
	border:none;
	background:none;
	background-color:#585858;
	width:100px;
	height:50px;
	color:white;
	border-radius:3px;
	font-size:17px;
	margin-top:20px;
}
</style>
<script src="/js/jquery1.min.js"></script>
<?= $this->Html->script('rmodal') ?>
        <?= $this->Html->css('animate') ?>
        <?= $this->Html->css('rmodal') ?>
        <?= $this->Html->script('rmodal') ?>
<div class="row">
    <div class="col-md-12">
      <?php if ($Auth->user('id') == 1): ?>  <form action="" class="form-inline float-right">
            <label for="">Search Order</label>
            <input type="text" name="search" class="form-control">
            <input type="submit" class="btn btn-success" value="Search">
        </form><?php endif; ?>
    </div>
</div>
<div class="membershiplevels index large-9 medium-8 columns content table-responsive">
    <h2><?= __('A&R Orders') ?></h2>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th>Song</th>
                <th scope="col"><?= $this->Paginator->sort('user', ['label' => 'First AR']); ?>
                <th scope="col"><?= $this->Paginator->sort('level', ['label' => 'Second AR']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('level', ['label' => 'Third AR']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('Amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Booking') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Song Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created Date') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('Ratings') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Download') ?></th>
                
            </tr>
        </thead>
        <tbody>

            <?php foreach ($orders as $track): ?>
                <tr>
                   <td>
                            <div style="position:relative;padding: 4px;margin-right: 19px">
                                <a href="#" style=""
                                   id="beat_image">
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => ' load ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($track['song']), 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-pause"></i>', 'javascript:player.pause()', ['class' => 'hide pause pausehere ','style'=>'color:#262626;position:absolute;padding: 4px;', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="fa fa-play"></i>', 'javascript:player.play()', ['class' => 'hide play ','style'=>'color:#262626;position:absolute;padding: 4px;', 'id' => 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($track['song']), 'escape' => false]) ?>
                                </a>
                            </div>
                        </td>
                    <td><?= h($track['ar_name1']) ?></td>
                    <td><?= h($track['ar_name2']) ?></td>
                    <td><?= h($track['ar_name3']) ?></td>
                    <td><?= h($track['amount']) ?></td>
                    
                    <td><a class="btn btn-info btn-xs viewBooking" data-id="<?=$track['tid']; ?>">View Booking</a></td>
                    
                    <td><?= h($track['song_title']) ?></td>
                    <td><?= h($track['genre']) ?></td>
                    <td><?= h($track['created']) ?></td>
                    
                    
                  
                    
                    <td><a class="btn btn-info btn-xs viewRating" data-id="<?=$track['tid']; ?>" ratingcount="<?=$ratingCount->rating; ?>">View Rating</a></td>
                     <td><a class="btn btn-info btn-xs btn_download" href="javascript:void(0);" file-name="<?php echo h($track['song']); ?>" file="<?php echo 'https://s3.us-east-2.amazonaws.com/amplifihub/Stores/sample_name/' . h($track['song']); ?>" ><i class="fa fa-download"></i></a></td>
                    
                  
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

        
        <div id="modalRating" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <?= $this->Form->create('rating', ['type' => 'file','id'=> 'addRatingTo']) ?>
                        <div class="modal-header">
                            <strong style="text-align:center;">Give Rating </strong>
                        </div>

                        <div class="modal-body" style="background-color:#262626; color:white;">
                           
                            <div class="row" style="padding: 0px 15px;">
                                <input type="hidden" name="rating" value="<?=$ratingCount->rating; ?>">
                                <div class="col-sm-3 col-md-12" style="padding: 0px" id="rating">
                                </div>
                               
                            </div>
                  
                        </div>
                        
                         
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modalRating.close();return false;">
                                Close
                            </button>
                        </div>
                    <?= $this->Form->end() ?> 
                </div>
                
            </div>
        </div>
        
        <div id="modalViewRating" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <?= $this->Form->create('rating', ['type' => 'file','id'=> 'addRatingTo']) ?>
                        <div class="modal-header">
                            <strong style="text-align:center;">View Rating </strong>
                        </div>

                        <div class="modal-body" style="background-color:#262626; color:white;">
                           
                            <div class="row" style="padding: 0px 15px;">
                                <input type="hidden" name="rating" value="<?=$ratingCount->rating; ?>">
                                <div class="col-sm-3 col-md-12" style="padding: 0px" id="viewrating">
                                </div>
                               
                            </div>
                  
                        </div>
                        
                         
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modalViewRating.close();return false;">
                                Close
                            </button>
                        </div>
                    <?= $this->Form->end() ?> 
                </div>
                
            </div>
        </div>
        
        <div id="modalBooking" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <?= $this->Form->create('rating', ['type' => 'file','id'=> 'addBookingTo']) ?>
                        <div class="modal-header">
                            <strong style="text-align:center;">Add Booking </strong>
                        </div>

                        <div class="modal-body" style="background-color:#262626; color:white;">
                           
                            <div class="row" style="padding: 0px 15px;">
                                <input type="hidden" name="rating" value="<?=$ratingCount->rating; ?>">
                                <div class="col-sm-3 col-md-12" style="padding: 0px" id="booking">
                                </div>
                               
                            </div>
                  
                        </div>
                        
                         
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modalBooking.close();return false;">
                                Close
                            </button>
                        </div>
                    <?= $this->Form->end() ?> 
                </div>
                
            </div>
        </div>
        
        <div id="modalviewBooking" class="modal">
            <div class="modal-dialog animated">
                <div class="modal-content">
                    <?= $this->Form->create('rating', ['type' => 'file','id'=> 'addBookingTo']) ?>
                        <div class="modal-header">
                            <strong style="text-align:center;">View Booking </strong>
                        </div>

                        <div class="modal-body" style="background-color:#262626; color:white;">
                           
                            <div class="row" style="padding: 0px 15px;">
                                <input type="hidden" name="rating" value="<?=$ratingCount->rating; ?>">
                                <div class="col-sm-3 col-md-12" style="padding: 0px" id="viewbooking">
                                </div>
                               
                            </div>
                  
                        </div>
                        
                         
                        <div class="modal-footer">
                            <button class="btn btn-primary"
                                    type="submit" onclick="modalviewBooking.close();return false;">
                                Close
                            </button>
                        </div>
                    <?= $this->Form->end() ?> 
                </div>
                
            </div>
        </div>
        

<div id="downgrade" class="modal fade" role="dialog">

<script>

 function change(id)
   {
      var cname=document.getElementById(id).className;
     
      var ab=document.getElementById(id+"_hidden").value;
      //alert(ab);exit;
      //document.getElementById(cname+"rating").innerHTML=ab;
        
      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="images/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="images/star1.png";
      }
   }


 function change1(id)
   {
      var cname=document.getElementById(id).className;
     
      var ab=document.getElementById(id+"_hidden").value;
      //alert(ab);exit;
      //document.getElementById(cname+"rating").innerHTML=ab;
        
      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="images/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="images/star2.png";
      }
   }


   $(document).on("click", ".php",function() {
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#phprating").val(a);
   });
   

    $(document).on("click", ".asp",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#asprating").val(a);
   
   });
   

    $(document).on("click", ".jsp",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#jsprating").val(a);
    });
    
    $(document).on("click", ".lyrics",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#lyrics").val(a);
    });
    
    $(document).on("click", ".composition",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#composition").val(a);
    });
    
    
     $(document).on("click", ".mixing",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#mixing").val(a);
    });
    
    $(document).on("click", ".target",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#target").val(a);
    });
    
    $(document).on("click", ".street",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#street").val(a);
    });
     
    $(document).on("click", ".commercial",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#commercial").val(a);
    });
    
    $(document).on("click", ".overall",function() {
   
   	var a = $(this).attr('value');
   	//alert(a);
   	$("#overall").val(a);
    });
    
    
    
    
                                            var modalrating = new RModal(
                                                document.getElementById('modalRating')

                                                );
                                            
                                            var modalViewRating = new RModal(
                                                document.getElementById('modalViewRating')

                                                );
                                            
                                            var modalBooking = new RModal(
                                                document.getElementById('modalBooking')

                                                );
                                            
                                            
                                            var modalviewBooking = new RModal(
                                                document.getElementById('modalviewBooking')

                                                );
                                                
                                            function addToRating() {
                                            $(".addRating").click(function () {
                                                var url = "pages/ratingDetail";
                                                var id = $(this).attr('data-id');
                                                var rating = $(this).attr('ratingcount');
                                                 //alert(id);
                                                $.ajax({
                                                    url: url,
                                                    data: {
                                                        id: id
                                                    },
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                    // dataType: 'jsonp',
                                                    success: function (data) {
                                                        
                                                        var value = jQuery.parseJSON(data);
                                                        //console.log(value);
                                                        var data="<div class='row'><div class='col-md-12'><h3 class='text-center'>" + value[0]['song_title'] + "</h3></div></div><form method='post' action='/pages/user-ar'><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Instrumental </h4></div><div class='col-md-6 rate'><input type='hidden' id='php1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='php1' class='php' value='1'><input type='hidden' id='php2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='php2' class='php' value='2'><input type='hidden' id='php3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='php3' class='php' value='3'><input type='hidden' id='php4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='php4' class='php' value='4'><input type='hidden' id='php5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='php5' class='php' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Vocals </h4></div><div class='col-md-6 rate'><input type='hidden' id='asp1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='asp1' class='asp' value='1'><input type='hidden' id='asp2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='asp2' class='asp' value='2'><input type='hidden' id='asp3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='asp3' class='asp' value='3'><input type='hidden' id='asp4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='asp4' class='asp' value='4'><input type='hidden' id='asp5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='asp5' class='asp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Delivery </h4></div><div class='col-md-6 rate'><input type='hidden' id='jsp1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='jsp1' class='jsp' value='1'><input type='hidden' id='jsp2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='jsp2' class='jsp' value='2'><input type='hidden' id='jsp3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='jsp3' class='jsp' value='3'><input type='hidden' id='jsp4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='jsp4' class='jsp' value='4'><input type='hidden' id='jsp5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='jsp5' class='jsp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Lyrics </h4></div><div class='col-md-6 rate'><input type='hidden' id='lyrics1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='lyrics1' class='lyrics' value='1'><input type='hidden' id='lyrics2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='lyrics2' class='lyrics' value='2'><input type='hidden' id='lyrics3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='lyrics3' class='lyrics' value='3'><input type='hidden' id='lyrics4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='lyrics4' class='lyrics' value='4'><input type='hidden' id='lyrics5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='lyrics5' class='lyrics' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Composition </h4></div><div class='col-md-6 rate'><input type='hidden' id='composition1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='composition1' class='composition' value='1'><input type='hidden' id='composition2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='composition2' class='composition' value='2'><input type='hidden' id='composition3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='composition3' class='composition' value='3'><input type='hidden' id='composition4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='composition4' class='composition' value='4'><input type='hidden' id='composition5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='composition5' class='composition' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Mixing and Mastering </h4></div><div class='col-md-6 rate'><input type='hidden' id='mixing1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='mixing1' class='mixing' value='1'><input type='hidden' id='mixing2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='mixing2' class='mixing' value='2'><input type='hidden' id='mixing3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='mixing3' class='mixing' value='3'><input type='hidden' id='mixing4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='mixing4' class='mixing' value='4'><input type='hidden' id='mixing5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='mixing5' class='mixing' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Target Audience Appeal</h4></div><div class='col-md-6 rate'><input type='hidden' id='target1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='target1' class='target' value='1'><input type='hidden' id='target2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='target2' class='target' value='2'><input type='hidden' id='target3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='target3' class='target' value='3'><input type='hidden' id='target4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='target4' class='target' value='4'><input type='hidden' id='target5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='target5' class='target' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Street Vise</h4></div><div class='col-md-6 rate'><input type='hidden' id='street1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='street1' class='street' value='1'><input type='hidden' id='street2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='street2' class='street' value='2'><input type='hidden' id='street3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='street3' class='street' value='3'><input type='hidden' id='street4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='street4' class='street' value='4'><input type='hidden' id='street5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='street5' class='street' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Commercial</h4></div><div class='col-md-6 rate'><input type='hidden' id='commercial1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='commercial1' class='commercial' value='1'><input type='hidden' id='commercial2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='commercial2' class='commercial' value='2'><input type='hidden' id='commercial3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='commercial3' class='commercial' value='3'><input type='hidden' id='commercial4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='commercial4' class='commercial' value='4'><input type='hidden' id='commercial5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='commercial5' class='commercial' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Overall</h4></div><div class='col-md-6 rate'><input type='hidden' id='overall1_hidden' tid='value[0]['id']' value='1'><img src='images/star1.png' onmouseover='change(this.id);' id='overall1' class='overall' value='1'><input type='hidden' id='overall2_hidden' value='2'><img src='images/star1.png' onmouseover='change(this.id);' id='overall2' class='overall' value='2'><input type='hidden' id='overall3_hidden' value='3'><img src='images/star1.png' onmouseover='change(this.id);' id='overall3' class='overall' value='3'><input type='hidden' id='overall4_hidden' value='4'><img src='images/star1.png' onmouseover='change(this.id);' id='overall4' class='overall' value='4'><input type='hidden' id='overall5_hidden' value='5'><img src='images/star1.png' onmouseover='change(this.id);' id='overall5' class='overall' value='5'></div></div><br><div class='row'><div class='col-md-12'><div class='form-group'><label for='comment'>Feedback:</label><textarea name='feedback' class='form-control' rows='5' id='comment'></textarea></div></div></div><input type='hidden' name='instrumental' id='phprating' value='0'><input type='hidden' name='vocals' id='asprating' value='0'><input type='hidden' name='delivery' id='jsprating' value='0'><input type='hidden' name='lyrics' id='lyrics' value='0'><input type='hidden' name='composition' id='composition' value='0'><input type='hidden' name='mixing' id='mixing' value='0'><input type='hidden' name='target' id='target' value='0'><input type='hidden' name='street' id='street' value='0'><input type='hidden' name='commercial' id='commercial' value='0'><input type='hidden' name='overall' id='overall' value='0'><input type='hidden' name='tracking_id' id='tracking_id' value='"+value[0]['id']+"'><input type='submit' class='btn btn-success' value='Submit' name='submit_rating'></form>";

                                                            $('#rating').html(data);
                                                        
                                                        
                                                        

                                                        setTimeout(function () {
                                                            modalrating.open();

                                                        }, 1000);
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }   
                                        
                                        function viewToRating() {
                                            $(".viewRating").click(function () {
                                                var url = "pages/viewRating";
                                                var id = $(this).attr('data-id');
                                                
                                                 //alert(id);
                                                $.ajax({
                                                    url: url,
                                                    data: {
                                                        id: id
                                                    },
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                     //dataType: 'json',
                                                    success: function (data) {
                                                        
                                                        var value = jQuery.parseJSON(data);
                                                        //console.log(value);
                                                        if(value == ""){
                                                            alert("Not Rated Yet");
                                                            window.location.href ="https://demo.amplifihub.com/order-given"; 
                                                        }else{
                                                        //alert(value[0]['id']);
                                                        var data="<form method='post' action='/pages/user-ar'><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Instrumental </h4><h5>Review is '"+value[0]['ins']+"' and Rating is '"+value[0]['ins1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='php1_hidden'   value='1'><img src='images/star2.png' onmouseover='change11(this.id);' id='php1' class='php' value='1'><input type='hidden' id='php2_hidden' value='2'><img src='images/star2.png' onmouseover='change11(this.id);' id='php2' class='php' value='2'><input type='hidden' id='php3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='php3' class='php' value='3'><input type='hidden' id='php4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='php4' class='php' value='4'><input type='hidden' id='php5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='php5' class='php' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Vocals </h4><h5>Review is '"+value[0]['voc']+"' and Rating is '"+value[0]['voc1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='asp1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp1' class='asp' value='1'><input type='hidden' id='asp2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp2' class='asp' value='2'><input type='hidden' id='asp3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp3' class='asp' value='3'><input type='hidden' id='asp4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp4' class='asp' value='4'><input type='hidden' id='asp5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp5' class='asp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Delivery </h4><h5>Review is '"+value[0]['del']+"' and Rating is '"+value[0]['del1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='jsp1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp1' class='jsp' value='1'><input type='hidden' id='jsp2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp2' class='jsp' value='2'><input type='hidden' id='jsp3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp3' class='jsp' value='3'><input type='hidden' id='jsp4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp4' class='jsp' value='4'><input type='hidden' id='jsp5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp5' class='jsp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Lyrics </h4><h5>Review is '"+value[0]['lyr']+"' and Rating is '"+value[0]['lyr1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='lyrics1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics1' class='lyrics' value='1'><input type='hidden' id='lyrics2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics2' class='lyrics' value='2'><input type='hidden' id='lyrics3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics3' class='lyrics' value='3'><input type='hidden' id='lyrics4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics4' class='lyrics' value='4'><input type='hidden' id='lyrics5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics5' class='lyrics' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Composition </h4><h5>Review is '"+value[0]['com']+"' and Rating is '"+value[0]['com1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='composition1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition1' class='composition' value='1'><input type='hidden' id='composition2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition2' class='composition' value='2'><input type='hidden' id='composition3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition3' class='composition' value='3'><input type='hidden' id='composition4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition4' class='composition' value='4'><input type='hidden' id='composition5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition5' class='composition' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Mixing and Mastering </h4><h5>Review is '"+value[0]['mix']+"' and Rating is '"+value[0]['mix1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='mixing1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing1' class='mixing' value='1'><input type='hidden' id='mixing2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing2' class='mixing' value='2'><input type='hidden' id='mixing3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing3' class='mixing' value='3'><input type='hidden' id='mixing4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing4' class='mixing' value='4'><input type='hidden' id='mixing5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing5' class='mixing' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Target Audience Appeal</h4><h5>Review is '"+value[0]['tar']+"' and Rating is '"+value[0]['tar1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='target1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='target1' class='target' value='1'><input type='hidden' id='target2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='target2' class='target' value='2'><input type='hidden' id='target3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='target3' class='target' value='3'><input type='hidden' id='target4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='target4' class='target' value='4'><input type='hidden' id='target5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='target5' class='target' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Street Vise</h4><h5>Review is '"+value[0]['str']+"' and Rating is '"+value[0]['str1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='street1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='street1' class='street' value='1'><input type='hidden' id='street2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='street2' class='street' value='2'><input type='hidden' id='street3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='street3' class='street' value='3'><input type='hidden' id='street4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='street4' class='street' value='4'><input type='hidden' id='street5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='street5' class='street' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Commercial</h4><h5>Review is '"+value[0]['comm']+"' and Rating is '"+value[0]['comm1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='commercial1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial1' class='commercial' value='1'><input type='hidden' id='commercial2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial2' class='commercial' value='2'><input type='hidden' id='commercial3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial3' class='commercial' value='3'><input type='hidden' id='commercial4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial4' class='commercial' value='4'><input type='hidden' id='commercial5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial5' class='commercial' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Overall</h4><h5>Review is '"+value[0]['ove']+"' and Rating is '"+value[0]['ove1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='overall1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall1' class='overall' value='1'><input type='hidden' id='overall2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall2' class='overall' value='2'><input type='hidden' id='overall3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall3' class='overall' value='3'><input type='hidden' id='overall4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall4' class='overall' value='4'><input type='hidden' id='overall5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall5' class='overall' value='5'></div></div><br><div class='row'><div class='col-md-12' id='feedback'></div></div></div><input type='hidden' name='instrumental' id='phprating' value='0'><input type='hidden' name='vocals' id='asprating' value='0'><input type='hidden' name='delivery' id='jsprating' value='0'><input type='hidden' name='lyrics' id='lyrics' value='0'><input type='hidden' name='composition' id='composition' value='0'><input type='hidden' name='mixing' id='mixing' value='0'><input type='hidden' name='target' id='target' value='0'><input type='hidden' name='street' id='street' value='0'><input type='hidden' name='commercial' id='commercial' value='0'><input type='hidden' name='overall' id='overall' value='0'><input type='hidden' name='tracking_id' id='tracking_id' value='"+value[0]['id']+"'></form>";

                                                            $('#viewrating').html(data);
                                                        
                                                        }
                                                        

                                                        setTimeout(function () {
                                                            modalViewRating.open();

                                                        }, 1000);
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }    
                                        
                                        function viewAllComments() {
                                            $(".viewRating").click(function () {
                                                var url = "pages/viewAllComments";
                                                var id = $(this).attr('data-id');
                                                
                                                 //alert(id);
                                                $.ajax({
                                                    url: url,
                                                    data: {
                                                        id: id
                                                    },
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                     //dataType: 'json',
                                                    success: function (data) {
                                                        
                                                       // var value = jQuery.parseJSON(data);
                                                        //console.log(data);
                                                        
                                                        //alert(value[0]['id']);
                                                        //var data="<form method='post' action='/pages/user-ar'><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Instrumental </h4><h5>Review is '"+value[0]['ins']+"' and Rating is '"+value[0]['ins1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='php1_hidden'   value='1'><img src='images/star2.png' onmouseover='change11(this.id);' id='php1' class='php' value='1'><input type='hidden' id='php2_hidden' value='2'><img src='images/star2.png' onmouseover='change11(this.id);' id='php2' class='php' value='2'><input type='hidden' id='php3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='php3' class='php' value='3'><input type='hidden' id='php4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='php4' class='php' value='4'><input type='hidden' id='php5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='php5' class='php' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Vocals </h4><h5>Review is '"+value[0]['voc']+"' and Rating is '"+value[0]['voc1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='asp1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp1' class='asp' value='1'><input type='hidden' id='asp2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp2' class='asp' value='2'><input type='hidden' id='asp3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp3' class='asp' value='3'><input type='hidden' id='asp4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp4' class='asp' value='4'><input type='hidden' id='asp5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='asp5' class='asp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Delivery </h4><h5>Review is '"+value[0]['del']+"' and Rating is '"+value[0]['del1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='jsp1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp1' class='jsp' value='1'><input type='hidden' id='jsp2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp2' class='jsp' value='2'><input type='hidden' id='jsp3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp3' class='jsp' value='3'><input type='hidden' id='jsp4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp4' class='jsp' value='4'><input type='hidden' id='jsp5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='jsp5' class='jsp' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Lyrics </h4><h5>Review is '"+value[0]['lyr']+"' and Rating is '"+value[0]['lyr1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='lyrics1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics1' class='lyrics' value='1'><input type='hidden' id='lyrics2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics2' class='lyrics' value='2'><input type='hidden' id='lyrics3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics3' class='lyrics' value='3'><input type='hidden' id='lyrics4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics4' class='lyrics' value='4'><input type='hidden' id='lyrics5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='lyrics5' class='lyrics' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Composition </h4><h5>Review is '"+value[0]['com']+"' and Rating is '"+value[0]['com1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='composition1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition1' class='composition' value='1'><input type='hidden' id='composition2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition2' class='composition' value='2'><input type='hidden' id='composition3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition3' class='composition' value='3'><input type='hidden' id='composition4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition4' class='composition' value='4'><input type='hidden' id='composition5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='composition5' class='composition' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Mixing and Mastering </h4><h5>Review is '"+value[0]['mix']+"' and Rating is '"+value[0]['mix1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='mixing1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing1' class='mixing' value='1'><input type='hidden' id='mixing2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing2' class='mixing' value='2'><input type='hidden' id='mixing3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing3' class='mixing' value='3'><input type='hidden' id='mixing4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing4' class='mixing' value='4'><input type='hidden' id='mixing5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='mixing5' class='mixing' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Target Audience Appeal</h4><h5>Review is '"+value[0]['tar']+"' and Rating is '"+value[0]['tar1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='target1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='target1' class='target' value='1'><input type='hidden' id='target2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='target2' class='target' value='2'><input type='hidden' id='target3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='target3' class='target' value='3'><input type='hidden' id='target4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='target4' class='target' value='4'><input type='hidden' id='target5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='target5' class='target' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Street Vise</h4><h5>Review is '"+value[0]['str']+"' and Rating is '"+value[0]['str1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='street1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='street1' class='street' value='1'><input type='hidden' id='street2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='street2' class='street' value='2'><input type='hidden' id='street3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='street3' class='street' value='3'><input type='hidden' id='street4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='street4' class='street' value='4'><input type='hidden' id='street5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='street5' class='street' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Commercial</h4><h5>Review is '"+value[0]['comm']+"' and Rating is '"+value[0]['comm1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='commercial1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial1' class='commercial' value='1'><input type='hidden' id='commercial2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial2' class='commercial' value='2'><input type='hidden' id='commercial3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial3' class='commercial' value='3'><input type='hidden' id='commercial4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial4' class='commercial' value='4'><input type='hidden' id='commercial5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='commercial5' class='commercial' value='5'></div></div><div class='row'><div class='col-md-6'><h4 style='margin-top:30px;'>Overall</h4><h5>Review is '"+value[0]['ove']+"' and Rating is '"+value[0]['ove1']+"' </h5></div><div class='col-md-6 rate'><input type='hidden' id='overall1_hidden'   value='1'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall1' class='overall' value='1'><input type='hidden' id='overall2_hidden' value='2'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall2' class='overall' value='2'><input type='hidden' id='overall3_hidden' value='3'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall3' class='overall' value='3'><input type='hidden' id='overall4_hidden' value='4'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall4' class='overall' value='4'><input type='hidden' id='overall5_hidden' value='5'><img src='images/star2.png' onmouseover='change1(this.id);' id='overall5' class='overall' value='5'></div></div><br><div class='row'><div class='col-md-12'><div class='form-group'><label for='comment'>Feedback:</label><textarea name='feedback' class='form-control' rows='5' id='comment' readonly> "+value[0]['feedback']+"</textarea></div></div></div><input type='hidden' name='instrumental' id='phprating' value='0'><input type='hidden' name='vocals' id='asprating' value='0'><input type='hidden' name='delivery' id='jsprating' value='0'><input type='hidden' name='lyrics' id='lyrics' value='0'><input type='hidden' name='composition' id='composition' value='0'><input type='hidden' name='mixing' id='mixing' value='0'><input type='hidden' name='target' id='target' value='0'><input type='hidden' name='street' id='street' value='0'><input type='hidden' name='commercial' id='commercial' value='0'><input type='hidden' name='overall' id='overall' value='0'><input type='hidden' name='tracking_id' id='tracking_id' value='"+value[0]['id']+"'></form>";

                                                            $('#feedback').html(data);
                                                        
                                                        
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }    
                                        
                                        function addToBooking() {
                                            $(".addBooking").click(function () {
                                                var url = "pages/ratingDetail";
                                                var id = $(this).attr('data-id');
                                                var rating = $(this).attr('ratingcount');
                                                 //alert(id);
                                                $.ajax({
                                                    url: url,
                                                    data: {
                                                        id: id
                                                    },
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                    // dataType: 'jsonp',
                                                    success: function (data) {
                                                        
                                                        var value = jQuery.parseJSON(data);
                                                        //console.log(value);
                                                        var data="<div class='row'><div class='col-md-12'><h3 class='text-center'>" + value[0]['song_title'] + "</h3></div></div><form method='post' action='/user-ar'><div class='row'><div class='col-md-12'><div class='form-group'><label for='usr'>Date:</label><input type='date' name='date' class='form-control' id='usr'></div><div class='form-group'><label for='comment'>Information:</label><textarea name='information' class='form-control' rows='5' id='comment'></textarea><input type='hidden' name='track_id' value='"+ value[0]['id'] +"'></div></div></div><button type='submit' class='btn btn-success' name='addBooking'>Submit</button></form>";

                                                            $('#booking').html(data);
                                                        
                                                        
                                                        

                                                        setTimeout(function () {
                                                            modalBooking.open();

                                                        }, 1000);
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }
                                        
                                        function viewBooking() {
                                            $(".viewBooking").click(function () {
                                                var url = "pages/viewBooking";
                                                var id = $(this).attr('data-id');
                                                
                                                // alert(id);
                                                $.ajax({
                                                    url: url,
                                                    data: {
                                                        id: id
                                                    },
                                                    error: function () {
                                                        // $('#info').html('<p>An error has occurred</p>');
                                                    },
                                                     //dataType: 'json',
                                                    success: function (data) {
                                                        
                                                       var value = jQuery.parseJSON(data);
                                                        //console.log(value);
                                                         if(value == ""){
                                                            alert("Not Booked Yet");
                                                            window.location.href ="https://demo.amplifihub.com/order-given"; 
                                                        }else{
                                                        var data="<form method='post' action='/user-ar'><div class='row'><div class='col-md-12'><div class='form-group'><label for='usr'>Date:</label><input type='date' name='date' value='"+value[0]['date']+"' class='form-control' id='usr' readonly></div><div class='form-group'><label for='comment'>Information:</label><textarea name='information' class='form-control' rows='5' id='comment' readonly>"+value[0]['information']+"</textarea><input type='hidden' name='track_id' value='"+ value[0]['id'] +"'></div></div></div></form>";

                                                            $('#viewbooking').html(data);
                                                        
                                                        }
                                                        setTimeout(function () {
                                                            modalviewBooking.open();

                                                        }, 1000); 
                                                    },
                                                    type: 'GET'
                                                });
                                            });
                                        }    
                                        
                                        
                                       
                                        
                                        addToRating();
                                        viewToRating();
                                        viewAllComments();
                                        addToBooking();
                                        viewBooking();
                                        
   
                                        
</script>
<?= $this->Html->script('custom_download') ?>
