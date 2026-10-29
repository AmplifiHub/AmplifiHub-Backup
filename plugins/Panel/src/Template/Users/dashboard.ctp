<?php $title = 'Dashboard'; ?>
<style>
    .breadcrumb>li+li:before
    {
        color:#f5f3f3;
    }
</style>
<?= $this->Flash->render() ?>
<h1 style="font-weight: unset; margin-right: 24px;"> Dashboard
<label style="font-weight: 300; font-size: 16px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
    
  <ol class="breadcrumb" style="font-size: 15px; background: #2626262b; border: 1px solid #999; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">dashboard</li>
  </ol>
</nav>



 <!-- Info boxes -->
      <div class="row">
          
          
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #EF5278;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-aqua" style="background-color:#E30D40 !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-play"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Beat Plays</span>
              <span class="info-box-number" style="color: #fff;"><?= number_format($playCount[0]['count']); ?></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #64D985;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-red" style="background-color:#3bb75e !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Inbox</span>
              <span class="info-box-number" style="color: #fff;"><?= $notifications ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #fba260;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-green" style="background-color:#ff8a33 !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-cart-arrow-down"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Sales</span>
              <span class="info-box-number" style="color: #fff;"><?= h($sales) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #90C2F0;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-yellow" style="background-color:#54A3ED !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Income </span>
              <span class="info-box-number" style="color: #fff;">&#8358;<?= number_format(h($money)) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <?php 
            if($user['role'] == 'admin'){
        ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #EF5278;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-aqua" style="background-color:#E30D40 !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-play"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Sample Beat Plays</span>
              <span class="info-box-number" style="color: #fff;"><?= number_format($playCountSample[0]['count']); ?></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #90C2F0;border-radius: 10px; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <span class="info-box-icon bg-yellow" style="background-color:#54A3ED !important; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);"><i class="fa fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color: #fff;">Likes </span>
              <span class="info-box-number" style="color: #fff;"><?= number_format($countLikes[0]['likes']) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php } ?>
        
        
      
      </div>
      <!-- /.row -->
<div class="row">
<div class="col-md-3" style="width:100%;">
          <div class="box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">
          
        <div class="box-header with-border">
              <h3 class="box-title">Quick How Tos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
        </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:0;">
            
            
    <div id="offer"> 
        <div class="col-md-4" style="text-align:center;border-bottom: 2px solid #f4f4f4; padding-bottom: 10px;">
            
            <h3>How To Upload Beats</h3>
            
          <!-- Widget: user widget style 1 -->
                      <iframe width="300" height="220" src="https://www.youtube.com/embed/PitS3WpU2Fs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                           
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4" style="text-align:center;border-bottom: 2px solid #f4f4f4; padding-bottom: 10px;">
            
            <h3>How To Upload Tracks For Distribution</h3>
            
          <!-- Widget: user widget style 1 -->
                      <iframe width="300" height="220" src="https://www.youtube.com/embed/-uF2QSUC_7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                           
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4" style="text-align:center;border-bottom: 2px solid #f4f4f4; padding-bottom: 10px;">
            
            <h3>How To Withdraw Earnings</h3>
            
          <!-- Widget: user widget style 1 -->
                      <iframe width="300" height="220" src="https://www.youtube.com/embed/2lVtOYVmdGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                           
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </div>
      
      </div>
      </div>
      
      </div>
</div>
       <div class="row">
        <div class="col-md-12">
         
        <div class="row" style="margin-bottom: 20px !important; margin: 0; border: 1px solid #ccc; border-radius: 5px 5px 10px 10px; background: #fff; border-top: 4px solid #E30D40; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
    
      <ol class="breadcrumb" style="font-size: 23px; background: transparent; color: #666; font-size: 20px;">
        <li class="breadcrumb-item">Weekly Beat Plays</li>
        
      </ol>
    </nav>
        <div id="chart">
            
        </div>
    </div>
</div>

       
        
        <div class="row" style="margin-bottom: 20px !important; margin: 0; border: 1px solid #ccc; border-radius: 5px 5px 10px 10px; background: #fff; border-top: 4px solid #E30DCC; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
            
              <ol class="breadcrumb" style="font-size: 23px; background: transparent; color: #666; font-size: 20px;">
                <li class="">Weekly Profile Views</li>
                <li style="float:right;">
                    <div class="year">
            <select name="year" id="pYear" class="form-control">
                <?php 
                    foreach($allYears  as $year){
                ?>
                <option value = "<?=$year['year']; ?>"><?=$year['year']; ?></option>
                <?php } ?>
            </select>
        </div>
                </li>
              </ol>
            </nav>
                <div id="prof">
                    
                </div>
            </div>
        </div>
        
    
        <div class="row" style="margin-bottom: 20px !important;margin: 0; border: 1px solid #ccc; border-radius: 5px 5px 10px 10px; background: #fff; border-top: 4px solid #ff8a33; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
            
              <ol class="breadcrumb" style="font-size: 23px; background: transparent; color: #666; font-size: 20px;">
                <li class="">Overall Sales</li>
                <li style="float:right;">
                    <div class="year">
            <select name="year" id="sYear" class="form-control">
                <?php 
                    foreach($allYears  as $year){
                ?>
                <option value = "<?=$year['year']; ?>"><?=$year['year']; ?></option>
                <?php } ?>
            </select>
        </div>
                </li>
              </ol>
            </nav>
                <div id="sales">
                    
                </div>
            </div>
        </div>
</div>
</div>
    
  <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="border: 1px solid #ccc; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);border-radius:10px;">
            <div class="inner">
              <h6>Add Account</h6>

              <p>Number</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/account" class="small-box-footer" style="background: none;">Click Here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green" style="border: 1px solid #ccc; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);border-radius:10px;">
            <div class="inner">
              <h5>Withdraw</h5>

              <p>Funds</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/withdrawal" class="small-box-footer" style="background: none;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow" style="border: 1px solid #ccc; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);border-radius:10px;">
            <div class="inner">
              <h5>Upgrade </h5>

              <p>Account</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/subscribe" class="small-box-footer" style="background: none;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red" style="border: 1px solid #ccc; box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);border-radius:10px;">
            <div class="inner">
              <h5>Help</h5>

              <p>???</p>
            </div>
            <div class="icon">
              <i class="fa fa-support"></i>
            </div>
            <a href="https://support.amplifihub.com" class="small-box-footer" style="background: none;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

   