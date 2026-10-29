
<ul class="nav navbar-nav navbar-right">
    <li><?= $this->Html->link(__('Home'),'/') ?></li>
    <li><?= $this->Html->link(__('Buy Beats'),'/beat-hub') ?></li>
    <li><?= $this->Html->link(__('Sell Beats'),'/pricing') ?></li>
    <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Services <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li>
                  <?= $this->Html->link(__('Mixing and Mastering'),'/mixing-and-mastering-hub') ?>
                  </li>
                  <?/*
	          <li><?= $this->Html->link(__('Song Writing'),'/song-writers-hub') ?></li>
	          <li><?= $this->Html->link(__('Artistes'),'/artistes-hub') ?></li>
                  <li><?= $this->Html->link(__('Video Directors'),'/video-directors-hub') ?></li> */ ?>
	        </ul>
	      </li>
    <?php
  $user = $this->request->session()->read('Auth.User');
  //debug($user);
  if(!$user){
    ?>
    <li><?= $this->Html->link('Login','/login',['id' => 'logIn']) ?></li>
    <li>
     <?= $this->Html->link(__('Sign Up'),'/sign-up',['id' => 'signUp']) ?></li>
    
        <?php }else{ ?>
    
        		<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Account <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li>
                  <?= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard']); ?>
                  </li>
	          <li><?= $this->Html->link(__('My Profile'),['controller' => 'Users', 'action' => 'edit']) ?></li>
	          <li><?= $this->Html->link(__('Messages'),'/messages') ?></li>
	          <li><?= $this->Html->link(__('Logout'),'/logout') ?></li>
	        </ul>
	      </li>
      <?php  }   ?>
      
      
    <li class="mobview">
        <a href="/carts/view" class="pad">
            <i class="fa fa-shopping-cart fa-2x"></i>
    <span class="badge" id="cart-counter"><?php 
     $cart = $this->request->session()->read('cart');
    echo count($cart);?></span>
        </a>

        




</ul>
