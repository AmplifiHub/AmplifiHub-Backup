<nav class="navbar navbar-static-top" style="padding-bottom: 0 !important;">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b><img src="panel/img/amplifihub-logo.png" alt="amplifihub features" style="width:100px; margin-top: 2px;"></a></b>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="    float: right!important;
    margin-bottom: 0;
    margin-right: 0;
    /* margin: 0; */
    margin-top: 6px;">
            <i class="fa fa-bars" style="
    font-size: 20px;
"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            
                    <?= $this->element('navmenu') ?>
                
          </ul>
          <form class="navbar-form navbar-left" role="search" action="/search-result" style="margin-top: 11px; background:none;">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" style="height:20px;">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
    </li>
            <!-- User Account Menu -->
            <?php
$user = $this->request->session()->read('Auth.User');
if(!$user){
    ?>
    <li class="dropdown messages-menu" style="
    margin-right: 5px;
"><?=  $this->Html->link('Login','/login',['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: transparent!important;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
    <li class="dropdown notifications-menu"><?= $this->Html->link(__('Sign Up'),'/sign-up',['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: #3bb75e !important;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
<?php }else{ ?>
    <li class="dropdown notifications-menu"><?= $this->Html->link('Dashboard',['controller' => 'Users', 'action' => 'dashboard'],['class' => 'dropdown-toggle','style'=>'margin-top: 11px;
    background: #3bb75e !important;
    border-radius: 5px;
    padding: 5px !important;']) ?></li>
<!--    <li class="dropdown">-->
<!--	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Account <b class="caret"></b></a>-->
<!--	        <ul class="dropdown-menu">-->
<!--	          <li>-->
<!--                  --><?//= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard']); ?>
<!--                  </li>-->
<!--	          <li>--><?//= $this->Html->link(__('My Profile'),['controller' => 'Users', 'action' => 'edit']) ?><!--</li>-->
<!--	          <li>--><?//= $this->Html->link(__('Messages'),'/messages') ?><!--</li>-->
<!--	          <li>--><?//= $this->Html->link(__('Logout'),'/logout') ?><!--</li>-->
<!--	        </ul>-->
<!--	</li>-->
      <?php  }   ?>
      
      <!-- Cart: style can be found in dropdown.less-->
            
            <li class="dropdown tasks-menu">
        <a href="/carts/view" class="dropdown-toggle" style="
    padding-bottom: 0;
">
            <i class="fa fa-shopping-cart fa-2x"></i>
    <span class="badge" id="cart-counter"><?php 
     $cart = $this->request->session()->read('cart');
    echo count($cart);?></span>
        </a>
    </li>
        </ul>
        
    </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>