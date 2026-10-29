<li><?= $this->Html->link(__('Free Beats'),'/freebeats') ?></li>
<li><?= $this->Html->link(__('Buy Beats'),'/beat-hub') ?></li>
<li><?= $this->Html->link(__('Sell Beats'),'/subscribe') ?></li>
<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Services <b class="caret"></b></a>
	        <ul class="dropdown-menu" style="border:3px solid #202020; width:100%;">
	          <li>
                  <?= $this->Html->link(__('Mix & Master'),'/mixing-and-mastering-hub', ['style'=>'text-align:center!important;']) ?></li>
	          <li><?= $this->Html->link(__('Music Distribution'),'/music-distribution', ['style'=>'text-align:center!important;']) ?></li>
	          <li><?= $this->Html->link(__('Purchase Samples'),'/samples', ['style'=>'text-align:center!important;']) ?></li>
	        </ul>
	      </li>
<?php
$user = $this->request->session()->read('Auth.User');
if(!$user){
    ?>
    <li><?= $this->Html->link('Login','/login',['class' => 'login']) ?></li>
    <li><?= $this->Html->link(__('Sign Up'),'/sign-up',['class' => '','style'=>'text-align:center!important;']) ?></li>
<?php }else{ ?>
    <li><?= $this->Html->link('Dashboard',['controller' => 'Users', 'action' => 'dashboard'],['class' => 'signup','style'=>'text-align:center!important;']) ?></li>
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
    <li class="mobview">
        <a href="/carts/view" class="pad">
            <i class="fa fa-shopping-cart fa-2x"></i>
    <span class="badge" id="cart-counter"><?php 
     $cart = $this->request->session()->read('cart');
    echo count($cart);?></span>
        </a>
    </li>

