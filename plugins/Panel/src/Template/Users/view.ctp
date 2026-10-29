<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="box box-warning" style="
    border: 1px solid #ccc;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 10px;
">
    
    <div class="widget-user-image" style="text-align:center;">
              <?php            if(!empty($user['photo'])){ ?>
        
            <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-<?= $user['photo'] ?>" class="profile-user-img img-responsive img-circle" alt="User Avatar" style="
    
">
            <?php }else { ?>
              <img src="/img/default.png" class="profile-user-img img-responsive img-circle" alt="User Avatar" style="
    border: 3px solid #f39c12;
"
            
            <?php } ?>
            </div>
  <?= $this->Flash->render() ?>
    <h2 style="font-weight:bold; text-align:center;"><?= h($user->aka) ?></h2>
  <!--  <table class="table table-condensed">
      <tr>
          <th scope="row"><?= __('first name') ?></th>
          <td><?= h($user->firstname) ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('last name') ?></th>
          <td><?= h($user->lastname) ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('bio') ?></th>
          <td><?= h($user->bio) ?></td>
      </tr>
        <tr>
            <th scope="row"><?= __('location') ?></th>
            <td><?= h($user->state. ", " . $user->country) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Popular',['label' => 'Street Credibility']) ?></th>
            <td><?= h($user->popular) ?></td>
        </tr>-->
    <!--    <tr>
            <th scope="row"><?= __('facebook') ?></th>
            <td><?= h($user->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('twitter') ?></th>
            <td><?= h($user->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('youtube') ?></th>
            <td><?= h($user->youtube) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('instagram') ?></th>
            <td><?= h($user->instagram) ?></td>
        </tr>-->
     <!--   <tr>
            <th scope="row"><?= __('Joined') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>-->
    <div class="box-header with-border">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-user margin-r-5"></i> Full Name</strong>

              <p class="text-muted">
                <?= h($user->firstname) ?> <?= h($user->lastname) ?> 
              </p>

              <hr>
              
              <strong><i class="fa fa-edit margin-r-5"></i> Bio</strong>

              <p class="text-muted">
                <?= h($user->bio) ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?= h($user->state. ", " . $user->country) ?></p>

              <hr>

              <strong><i class="fa fa-user-plus margin-r-5"></i> Joined</strong>

              <p>
                
                <span class="label label-success"><?= h($user->created) ?></span>
                
              </p>

              <hr>

           <!--   <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
             /.box-body -->
          </div>
</div>
