<ul class="nav navbar-nav">
    <li class="dropdown tasks-menu">
        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-star-o')). $this->Html->tag('span', '   Subscribe')) ,'/subscribe', ['escape' => false, 'style'=>'color:green; font-size: 15px !important;']) ?>
    </li>
    <li class="dropdown tasks-menu">
        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-dashboard'))), '/dashboard', ['escape' => false]) ?>
    </li>
    <li class="dropdown tasks-menu">
        <?= $this->Html->link(__($this->Html->tag('i', '', array('class' => 'fa fa-envelope-o'))), '/messages', ['escape' => false]) ?>
    </li>
    <?php
    $user = $this->request->session()->read('Auth.User');
    if (!$user) { ?>
        <li><?= $this->Html->link('Login', '/login', ['id' => 'logIn']) ?></li>
        <li><?= $this->Html->link(__('Sign Up'), '/sign-up', ['id' => 'signUp']) ?></li>
    <?php } ?>
    <!-- User Account Menu -->
    <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
        <?php            if(!empty($user['photo'])){ ?>
        
            <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-<?= $user['photo'] ?>" class="user-image" alt="Upload Image" style="border: 2px solid #333;">
            <?php }else { ?>
              <img src="/img/default.png" class="img-circle" alt="Upload Image" style="height:18px !important; border: 2px solid #333;"
            
            <?php } ?>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"><?= $user['aka'] ?></span>
        </a>
        <ul class="dropdown-menu" style="
    background-color: #f4f4f4;
    border-color: #f4f4f4;
    box-shadow: 0 2px 2px rgba(0,0,0,0.6);
">
            <!-- The user image in the menu -->
            <li class="user-header">
                <?php
                
               //     echo $user['photo']. "NO user photo here ";
                if(!empty($user['photo'])){ ?>
                <img src="https://s3.us-east-2.amazonaws.com/amplifihub/Users/photo/thumbnail-<?= $user['photo'] ?>" class="img-circle" alt="Upload Image" style="
    color: #f4f4f4;border: 2px solid #333;
">
                <?php }else{ ?>
                <img src="/img/default.png" class="img-circle" alt="Upload Image" style="
    color: #f4f4f4;
">
                
                <?php } ?>
                <p style="    color: #333;
">
                    <?= $user['aka'] ?>
                </p>
            </li>
            <li class="user-footer" style="background-color:#f4f4f4">
                <div class="pull-left">
                    <a href="/profile" class="btn btn-default btn-flat" style="
    color: #333;
    background: transparent;
    border-radius: 5px;
"><i class="fa fa-user"></i>  Profile</a>
                </div>
                <div class="pull-right">
                    <a href="/logout" class="btn btn-default btn-flat" style="
    color: #333;
    background: transparent;
    border-radius: 5px;
"><i class="fa fa-sign-out"></i>  Log out</a>


                </div>
            </li>
            
        </ul>
        
    </li>
</ul>


