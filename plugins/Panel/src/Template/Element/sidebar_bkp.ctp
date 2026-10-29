<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu tree" data-widget="tree">

      <li class="treeview">
        <?= $this->Html->link(__($this->Html->tag('span','<i class="fa fa-music pull-left"></i>').'Music Producer').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
        <ul class="treeview-menu">
          <li class="">
            <?= $this->Html->link(__('My Beats'),['controller' => 'stores','action' => 'userstore']) ?>
          </li>
          <li class="">
            <?= $this->Html->link(__('Upload Beats'),['controller' => 'stores','action' => 'add']) ?>
          </li>
          <li class="">
            <?= $this->Html->link(__('Buy Beats'),['controller' => 'stores','action' => 'beats']) ?>
          </li>
          <li class="">
            <?= $this->Html->link(__('Promote Beats'),['controller' => 'stores','action' => 'promotebeats']) ?>
          </li>
      
      </ul>
      </li>
<? /*
      <li class="treeview">
        <?= $this->Html->link(__($this->html->image('man-singing-with-a-microphone.png').'Artiste').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
        <ul class="treeview-menu">
          <li>
              <?= $this->Html->link(__('Set Artiste Profile'),['controller' => 'Artistes','action' => 'add']) ?>
            </li>
        <li><?= $this->Html->link(__('Artiste Gigs'),['controller' => 'Artistesrequesters','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Artistes'),'/artistes-hub') ?></li>
      </ul>
      </li>*/ ?>
        <? /*
      <li class="treeview">
        <?= $this->Html->link(__(/$this->html->image('songwriter.png').'Songwriter').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
        <ul class="treeview-menu">
        <li>
            <?= $this->Html->link(__('Set Songwriter Profile'),['controller' => 'songwriters','action' => 'add']) ?>
          </li>
        <li><?= $this->Html->link(__('Songwriting Gigs'),['controller' => 'swriterequests','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('View Songwriters'),'/song-writers-hub') ?></li>
      </ul>
      </li>*/?>

      <li class="treeview">
        <?= $this->Html->link(__($this->Html->tag('span','<i class="fa fa-volume-up pull-left"></i>').'Mixing and Mastering').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
        <ul class="treeview-menu">
          <li>
            <?= $this->Html->link(__('Add Mix and Master Samples'),['controller' => 'mixmasterings','action' => 'add']) ?>
          </li>
          <li><?= $this->Html->link(__('My Mix and Master Gigs'),['controller' => 'mmrequesters','action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('Mix for Me!'),['controller' => 'mmrequesters','action' => 'listgigs']) ?></li>
          <li><?= $this->Html->link(__('View Sound Engineers'),'/mixing-and-mastering-hub') ?></li>
      </ul>
      </li>
    <? /*
    <li class="treeview">
      <?= $this->Html->link(__($this->html->image('id-card.png').'Video Director').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
      <ul class="treeview-menu">
      <li>
          <?= $this->Html->link(__('Set Video Director Profile'),['controller' => 'directors','action' => 'add']) ?>
        </li>
        <li>
          <?= $this->Html->link(__('Video Director Gigs'), ['controller' => 'directorequests','action' => 'index']) ?>
        </li>
        <li><?= $this->Html->link(__('View Video Directors'),'/video-directors-hub') ?></li>
    </ul>
    </li>*/?>

    <li class="treeview">
      <?= $this->Html->link(__($this->Html->tag('span','<i class="fa fa-bank pull-left"></i>').'Manage Payout').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
      <ul class="treeview-menu">
      <li>
          <?= $this->Html->link(__('Bank Account'),'/account') ?>
        </li>
        <li>
          <?= $this->Html->link(__('Withdrawal'), '/withdrawal') ?>
        </li>
    </ul>
    </li>

    <li class="treeview">
      <?= $this->Html->link(__($this->Html->tag('span','<i class="fa fa-money pull-left"></i>').'Subscription').$this->Html->tag('span','<i class="fa fa-angle-left pull-right"></i>',['class'=>'pull-right-container']),'#',['escape'=> false]) ?>
      <ul class="treeview-menu">
      <li>
          <?= $this->Html->link(__('View Membership'),'/subscriptions') ?>
        </li>
        <li>
          <?= $this->Html->link(__('Subscribe'), '/pricing') ?>
        </li>
    </ul>
    </li>

    <li>
      <?= $this->Html->link(__('My Downloadables'), '/downloads') ?>
    </li>
    
    <?php
    $user = $this->request->session()->read('Auth.User');
    if($user['role'] =='admin'){
      ?>
      <li class="divider"></li>
      <li>
        <?= $this->Html->link(__('Users'),['controller' => 'Users','action' => 'index']) ?>
      </li>
      <li>
        <?= $this->Html->link(__('Add Genre'),['controller' => 'genres','action' => 'add']) ?>
      </li>
      <li><?= $this->Html->link(__('List Genres'), ['controller' => 'genres','action' => 'admin']) ?></li>
        <li>
          <li>
            <?= $this->Html->link(__('List Membership Plans'), ['controller' => 'plans', 'action' => 'admin']) ?></li>
            <li>
          <?= $this->Html->link(__('List Booked Artiste'),['controller' => 'Artistesrequesters','action' => 'admin']) ?>
        </li>
        <li><?= $this->Html->link(__('List Store Uploads'), ['controller' => 'stores','action' => 'admin']) ?></li>
        <li><?= $this->Html->link(__('Withdrawal Requests'), ['controller' => 'withdrawals','action' => 'admin']) ?></li>
        <li><?= $this->Html->link(__('Change Banner'), ['controller' => 'PageBanner','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Trending Beats'), ['controller' => 'stores','action' => 'admin']) ?></li>
        <li><?= $this->Html->link(__('Top Artiste'), ['controller' => 'artistes','action' => 'featured']) ?></li>
        <li><?= $this->Html->link(__('Top Mixers'), ['controller' => 'mixmasterings','action' => 'featured']) ?></li>
        <li><?= $this->Html->link(__('Top Video Directors'), ['controller' => 'Directors','action' => 'featured']) ?></li>
        <li><?= $this->Html->link(__('Top Songwriters'), ['controller' => 'songwriters','action' => 'featured']) ?></li>
        <li><?= $this->Html->link(__('HomePage Youtube'), ['controller' => 'PageBanner','action' => 'youtube']) ?></li>
        <li><?= $this->Html->link(__('Referrals'), ['controller' => 'referrals','action' => 'view']) ?></li>
        

  <?php   }
     ?>
    </ul>

  </section>
  <!-- /.sidebar -->
</aside>
