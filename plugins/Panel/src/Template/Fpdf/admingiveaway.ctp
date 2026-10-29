<h1 style="font-weight: unset; margin-right: 24px;"> Add Competition Schedule
<label style="font-weight: 500; font-size: 21px;">Control Panel</label></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="font-size: 15px; background: #ebecf0;">
    <li class="breadcrumb-item"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</li>
    <li class="breadcrumb-item active" aria-current="page">add sompetition schedule</li>
  </ol>
</nav>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        
        <div class="row">
            <div class="col-md-6" style="margin-top: 10px;">
                <a href="resetCompetition" type="button" class="btn btn-info">Reset Competition</a>
            </div>    
        </div>
        
      <?php if ($Auth->user('role') == 'admin'): ?>  <form action="" class="form float-right">
          <div class="row">
              <div class="col-md-6">
                <label for="">Start Date</label>
                    <input type="date" name="start_date" value="<?=$admingiveaway[0]['start_date'];?>" class="form-control" placeholder="Start Date" required>
            </div>
            
            <div class="col-md-6">
                <label for="">End Date</label>
                    <input type="date" name="end_date" value="<?=$admingiveaway[0]['end_date'];?>" class="form-control" placeholder="End Date" required>
            </div>
            <br>
            <div class="col-md-6" style="margin-top: 10px;">
                <input type="submit" class="btn btn-success" value="Add Schedule">
            </div>
            
            
            
            </div>
        </form><?php endif; ?>
        
        
    </div>
</div>
</div>

