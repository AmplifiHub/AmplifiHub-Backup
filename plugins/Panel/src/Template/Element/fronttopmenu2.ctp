
<ul class="nav navbar-nav navbar-right">
  
    <?php
  $user = $this->request->session()->read('Auth.User');
  //debug($user);
  if(!$user){
    ?>
    <li><?= $this->Html->link('Login','/login') ?></li>
    <li>
     <?= $this->Html->link(__('Sign Up'),'/sign-up') ?></li>
    
        <?php }else{ ?>
    
        		<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Account <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li>
                  <?= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard']); ?>
                  </li>
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
