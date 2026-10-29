<style>
    
    .sidebar-menu>li>a>.fa, .sidebar-menu>li>a>.glyphicon, .sidebar-menu>li>a>.ion {
    width: 24px;
    font-weight: 900;
    font-size: 17px;
    color:#ccc;
}
.skin-blue .sidebar a {
    color: #ccc;
}
.sidebar-menu>li>a {
    padding: 16px 20px 16px 20px;
    display: block
}
.treeview-menu>li>a {
    padding: 12px 20px 12px 20px;
    display: block;
    font-size: 14px;
}
</style>
<aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header" style="margin-top:10px;">YOUR DASHBOARD <span style="margin-left:10px;"><a><i class="fa fa-circle text-success"></i> Online</a></span></li>
            <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-music')). $this->Html->tag('span', '   Sell Beats')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-upload"></i>',['style'=>'width:20px; display:inline-block;']) . '   Upload Beats'), ['controller' => 'stores', 'action' => 'add'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-list"></i>',['style'=>'width:20px; display:inline-block;']) . '   My Beats'), ['controller' => 'stores', 'action' => 'userstore'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-tags"></i>',['style'=>'width:20px; display:inline-block;']) . '   Promote Beats'), ['controller' => 'stores', 'action' => 'promotebeats'], ['escape' => false]) ?>
                    </li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-money"></i>',['style'=>'width:20px; display:inline-block;']) . '   Sales'), '/sales', ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-envelope"></i>' ,['style'=>'width:20px; display:inline-block;']) . '   Contact Customers'), '/contact-customers', ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-folder-o"></i>' ,['style'=>'width:20px; display:inline-block;']) . '   Purchase Samples'), '/samples', ['escape' => false]) ?></li>

                </ul>
            </li>
            
            <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-tasks')). $this->Html->tag('span', '   Work for Hire')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-list"></i>',['style'=>'width:20px; display:inline-block;']) . '   Seller Section'), ['controller' => 'hire', 'action' => 'listsales'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-list"></i>',['style'=>'width:20px; display:inline-block;']) . '   Buyer Section'), ['controller' => 'hire', 'action' => 'listorder'], ['escape' => false]) ?></li>
                </ul>
            </li>
            
          <!--  <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-archive')). $this->Html->tag('span', 'Music Management')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-upload"></i>',['style'=>'width:20px; display:inline-block;']) . '   Upload Music & Lyrics'), ['controller' => 'musicstorage', 'action' => 'add'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-save"></i>',['style'=>'width:20px; display:inline-block;']) . '   Music Drive'), ['controller' => 'musicstorage', 'action' => 'drive'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-users"></i>',['style'=>'width:20px; display:inline-block;']) . '   Collab Section'), ['controller' => 'musicstorage', 'action' => 'listmusicians'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-money"></i>', ['style'=>'width:20px; display:inline-block;']) . 'Subscribe'), ['controller' => 'musicstorage', 'action' => 'pricing'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-user"></i>', ['style'=>'width:20px; display:inline-block;']) . 'Subscription Manager'), ['controller' => 'subscriptions', 'action' => 'membershipmusic'], ['escape' => false]) ?>
                    </li>
                
                </ul>
            </li> -->
            
            <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-truck')). $this->Html->tag('span', '   Distribute Music')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-upload"></i>',['style'=>'width:20px; display:inline-block;']) . '   Upload Track'), ['controller' => 'stores', 'action' => 'add2'], ['escape' => false]) ?>
                    </li>
                    
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-list"></i>',['style'=>'width:20px; display:inline-block;']) . '   My Tracks'), ['controller' => 'stores', 'action' => 'mytracks'], ['escape' => false]) ?>
                    </li>
                <?php
               $user = $this->request->session()->read('Auth.User');
                    if ($user['role'] == 'admin') {
                ?>
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-list"></i>',['style'=>'width:20px; display:inline-block;']) . '   Uploaded Tracks'), ['controller' => 'stores', 'action' => 'tracks'], ['escape' => false]) ?>
                    </li>
                <?php
                    }
                ?>
                    
                </ul>
            </li>
            
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-play')). $this->Html->tag('span', '   Buy Beats')) ,'/beat-hub', ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-download')). $this->Html->tag('span', '   Download Freebeats')) ,'/freebeats', ['escape' => false]) ?>
            </li>
         <!--   <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-volume-up')). $this->Html->tag('span', '   Mixing and Mastering')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-plus"></i>',['style'=>'width:20px; display:inline-block;']) . '   Add Preview Samples'), ['controller' => 'mixmasterings', 'action' => 'add'], ['escape' => false]) ?>
                    </li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-tasks"></i>',['style'=>'width:20px; display:inline-block;']) . '   Seller Section'), ['controller' => 'mmrequesters', 'action' => 'index'], ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-reorder"></i>',['style'=>'width:20px; display:inline-block;']) . '   Buyer Section'), ['controller' => 'mmrequesters', 'action' => 'listgigs'], ['escape' => false]) ?></li>
                </ul>
            </li> -->
            
            
    <!--        <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-sliders')). $this->Html->tag('span', '   View Sound Engineers')) ,'/mixing-and-mastering-hub', ['escape' => false]) ?>
            </li> -->
            <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-bank')). $this->Html->tag('span', '   Manage Payout')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-edit"></i>',['style'=>'width:20px; display:inline-block;']) . '   Add Bank Account'), '/bank', ['escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa  fa-angle-double-down"></i>',['style'=>'width:20px; display:inline-block;']) . '   Withdraw Money'), '/withdrawal', ['escape' => false]) ?>
                    </li>
                </ul>
            </li>

         <!--   <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-money')). $this->Html->tag('span', '   Subscription')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-user"></i>',['style'=>'width:20px; display:inline-block;']) . '   View Membership'), '/subscriptions', ['escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__($this->Html->tag('span', '<i class="fa fa-star-o"></i>',['style'=>'width:20px; display:inline-block;']) . '   Subscribe'), '/subscribe', ['escape' => false]) ?>
                    </li>
                </ul>
            </li> -->
            
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-shopping-cart')). $this->Html->tag('span', '   Cart')) ,'/carts/view', ['escape' => false]) ?>
            </li>

            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-credit-card')). $this->Html->tag('span', '   Purchases')) ,'/downloads', ['escape' => false]) ?>
            </li>
            
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-file-pdf-o')). $this->Html->tag('span', '   Purchases Paperwork')) ,'/downloadpdf', ['escape' => false]) ?>
            </li>
            

            <?php
            $user = $this->request->session()->read('Auth.User');
            if ($user['role'] == 'admin') {
                ?>
                <li class="divider"></li>
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-user')). $this->Html->tag('span', 'Permission Users')) ,'/permission-users', ['escape' => false]) ?>
            </li>
            
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-user')). $this->Html->tag('span', 'A&R Users')) ,'/permission-users-ar', ['escape' => false]) ?>
            </li>
            
             <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-money')). $this->Html->tag('span', 'Feature Sample Music')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                     <li>
                        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-music')). $this->Html->tag('span', 'Upload Featured Sample')) ,'/featured-sample', ['escape' => false]) ?>
                    </li>
                     <li>
                        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-music')). $this->Html->tag('span', 'View Featured Sample')) ,'/featured-sample-view', ['escape' => false]) ?>
                    </li>
                </ul>
            </li>
            
           <li class="treeview">
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-money')). $this->Html->tag('span', 'Sample Packs')) . $this->Html->tag('span', '<i class="fa fa-angle-left pull-right"></i>', ['class' => 'pull-right-container']), '#', ['escape' => false]) ?>
                <ul class="treeview-menu">
                     <li>
                        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-gift')). $this->Html->tag('span', 'Upload Sample Packs')) ,'/sample-packs', ['escape' => false]) ?>
                     </li>
                     <li>
                        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-gift')). $this->Html->tag('span', 'View Sample Packs')) ,'/sample-packs-view', ['escape' => false]) ?>
                     </li>
                </ul>
            </li>
            
            
            
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-star')). $this->Html->tag('span', 'Add Rating')) ,'/ar-ratings', ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-first-order')). $this->Html->tag('span', 'A&R Orders')) ,'/ar-orders', ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-free-code-camp')). $this->Html->tag('span', 'Competition Schedule')) ,'/admingiveaway', ['escape' => false]) ?>
            </li>
            
                <li>
                    <?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?>
                </li>
                <?php if ($user['role'] == 'admin') { ?>
                <li>
                    <?= $this->Html->link(__('Backwardusers'), ['controller' => 'backwardusers', 'action' => 'index']) ?>
                </li>
                <?php } ?>
                <li>
                    <?= $this->Html->link(__('Add Genre'), ['controller' => 'genres', 'action' => 'add']) ?>
                </li>
                <li><?= $this->Html->link(__('List Genres'), ['controller' => 'genres', 'action' => 'admin']) ?></li>
                <li>
                <li>
                    <?= $this->Html->link(__('List Membership Plans'), ['controller' => 'plans', 'action' => 'admin']) ?></li>
                <li>
                    <?= $this->Html->link(__('List Booked Artiste'), ['controller' => 'Artistesrequesters', 'action' => 'admin']) ?>
                </li>
                <li><?= $this->Html->link(__('List Store Uploads'), ['controller' => 'stores', 'action' => 'admin']) ?></li>
                <li><?= $this->Html->link(__('Promoted Beats List'), ['controller' => 'stores', 'action' => 'promotedbeatslist']) ?></li>
                
                <li><?= $this->Html->link(__('Withdrawal Requests'), ['controller' => 'withdrawals', 'action' => 'admin']) ?></li>
                <li><?= $this->Html->link(__('Change Banner'), ['controller' => 'PageBanner', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Trending Beats'), ['controller' => 'stores', 'action' => 'admin']) ?></li>
                <li><?= $this->Html->link(__('Top Artiste'), ['controller' => 'artistes', 'action' => 'featured']) ?></li>
                <li><?= $this->Html->link(__('Top Mixers'), ['controller' => 'mixmasterings', 'action' => 'featured']) ?></li>
                <li><?= $this->Html->link(__('Top Video Directors'), ['controller' => 'Directors', 'action' => 'featured']) ?></li>
                <li><?= $this->Html->link(__('Top Songwriters'), ['controller' => 'songwriters', 'action' => 'featured']) ?></li>
                <li><?= $this->Html->link(__('HomePage Youtube'), ['controller' => 'PageBanner', 'action' => 'youtube']) ?></li>
                <li><?= $this->Html->link(__('Referrals'), ['controller' => 'referrals', 'action' => 'view']) ?></li>
                 
                 <li><?= $this->Html->link(__('Transaction Records'), ['controller' => 'users', 'action' => 'transactionrecords']) ?></li>
                 <li><?= $this->Html->link(__('Time On Site'), ['controller' => 'users', 'action' => 'timeonsites']) ?></li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
