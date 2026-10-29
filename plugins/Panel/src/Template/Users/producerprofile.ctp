
 <?php
/**
 *  @var \App\View\AppView $this
 */
?>
   
    
  
    
    <title>Product Mockup</title> 


    <div class="container">
        <h2>Producer Visible Profile(Guest)</h2><br><br>
            <div class="row">
                <div class="col-sm-3">
                    <div class="first-row-wrapper">
                        <h4>Pix box</h4> <i class="fa fa-4x fa-user-circle text-primary sr-icons" style="margin-top: 10%"></i>
                    </div>
                </div>
                    
                
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="star_rating"><h4>Star Rating Result Box</h4><div class="star-rating" >
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <span>Rated</span>
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
      </div></div>
                            </div>
                        </div>    
                        <!-- <hr class="hr_divide"> -->
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="bio_box"><h4>Bio Box</h4><span>bio <br> 
<br>modified:   app/plugins/Panel/src/Template/Artistes/add.ctp
        modified:   app/plugins/Panel/src/Template/Artistes/view.ctp
        modified:   app/plugins/Panel/src/Template/Genres/add.ctp
        modified:   app/plugins/Panel/src/Template/Plans/add.ctp
        modified:   app/plugins/Panel/src/Template/Stores/add.ctp
</span></div> </div>
                            </div>

                        </div>
                    
                    </div> 

                    <div class="col-sm-3">
                        <div class="first-row-wrapper">
                                <h4>Notification Box</h4>
                        </div>
                    </div>
                    <!--end of first row-->
            </div>

            <!---End of first row-->

            <!--Beginning of second row-->

            <div class="row">
                    <div class="col-sm-3">
                        <div class="second-row-wrapper">
                                <h4>Promoted Beats</h4>
                        </div>
                        <ul class="list-group">
  <li class="list-group-item active">Promoted beat</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
                    </div>
                              
                    <div class="col-sm-6">
                        <div class="beat_stores"><h4>Beat Stores</h4></div> 
                        <ul class="list-group">
  <li class="list-group-item active">Beat Store</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>  
                    </div> 
        
                    <div class="col-sm-3">
                        <div class="second-row-wrapper">
                             <h4>Beat Store Cart</h4>
                        </div>
                    </div>
                    <!--End of second row-->
            </div>

             <!---End of second row-->


             <!--Beginning of third row-->

             <div class="row">
                    <div class="col-sm-3">
                        <div class="third-row-wrapper">
                            <h4>Empty</h4>
                        </div>
                    </div>
                        
                    
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="rate_producer_box"><h4>Rate Producer Box</h4></div> <div class="col-lg-12" >
      <div class="star-rating" >
      <span>Rate Producer</span>
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
      </div>
    </div>
                                </div>
                                <!-- <hr class="hr_divide"> -->
                            </div>
                                <div class="row">
                                <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="comment_box"><h4>Comment Box</h4></div>
                                             <div class="form">
                       <?= $this->form->create() ?>
                        <div class="form-group"> <?= $this->Form->textarea('user_comment',['class'=>'form-control','row'=>3]) ?></div>
                        <div>  <?= $this->Form->button(__('Comment'),['class'=>'btn btn-primary','label'=>'comment']) ?>
                       </div>
                       <?= $this->form->end() ?>
                       
                   </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="complaint_channel_box"><h4>Complaint Box</h4></div>
                                                 <div class="form">
                       <?= $this->form->create() ?>
                        <div class="form-group"> <?= $this->Form->textarea('user_complaint',['class'=>'form-control','row'=>3]) ?></div>
                        <div>  <?= $this->Form->button(__('submit'),['class'=>'btn btn-primary']) ?>
                       </div>
                       <?= $this->form->end() ?>
                       
                   </div>
                                        </div>
                                </div>
                            </div>
                            <!-- <hr class="hr_divide"> -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="star_chat_box"><h4>Star Chat Box</h4></div>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Start A Chat</button>
                                </div>
                            </div>
    
                            
                        
                        </div> 
    
                        <div class="col-sm-3">
                            <div class="third-row-wrapper">
                                    <h4>Beat Store Offers</h4>
                            </div>
                            <ul class="list-group">
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
                        </div>

                        <!--end of third row-->
                </div>


                    
                    

                    
                    
           
            



    </div>
                
                <!--<div class="row">
                    <div class="col-sm-3">
                        <div class="sec-row">Promoted Beats</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sec-row-mid" id="Bt Stores">Beat Stores</div>
                    </div> 
                    <div class="col-sm-3"> 
                     <div class="sec-row">Beat Store Cart</div>
                    </div>
            </div>
            <div>
            <div class="row">
                <div class="col-sm-3 third-row" id="third-row-left">Empty</div>
                <div class="col-sm-6 third-row-mid" id="">
                    <div class="row">
                         <div id="rate_producer_box">Rate Producer box</div>
                         <hr class="hr1"> 
                         <div class="row">
                                <div class="col-sm-6">
                                        <div id="comment_box">Comment Box</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="complaint_channel">Complaint Channel Box</div>
                                   
                                    
                                    </div>
                         </div>
                         <hr class="hr1">
                         
                         <div class="row">
                             <div class="col-sm-12">
                                 <div id="star_chat_box">Star Chart Box</div>
                             </div>
                         </div>
                    </div>
                </div>
                <div class="col-sm-3 third-row" id="third-row-right">Beat Store offers</div>
            </div>
            </div>
        </div> 

    </div>
       
</body>
</html> -->