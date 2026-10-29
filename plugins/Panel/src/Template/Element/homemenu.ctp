<ul class="nav navbar-nav ml-auto">

<li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/">Home</a>
  </li>
  
<li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/beat-hub">Buy Beats</a>
  </li>
   <li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/subscribe">Sell Beats</a>
  </li>
  
   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/mixing-and-mastering-hub">Mixing and Mastering</a>
          <a class="dropdown-item" href="/song-writers-hub">Song Writing</a>
          <a class="dropdown-item" href="/artistes-hub">Artistes</a>
          <a class="dropdown-item" href="/video-directors-hub">Video Directors</a>
        </div>
      </li>
  
  

  
  
<!--
   <li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/mixing-and-mastering-hub">Mixing and Mastering Hub</a>
  </li>

 <li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/song-writers-hub">Song Writers Hub</a>
  </li>
   <li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/artistes-hub">Artistes Hub</a>
  </li>


  <li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="/video-directors-hub">Video Directors Hub</a>
  </li>-->

  <?php
  $user = $this->request->session()->read('Auth.User');
  //debug($user);
  if($user){
    ?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Your Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <?= $this->Html->link(__('Dashboard'),['controller' => 'Users', 'action' => 'dashboard'],['class' => 'dropdown-item']); ?>
         <?= $this->Html->link(__('My Profile'),['controller' => 'Users', 'action' => 'edit'],['class' => 'dropdown-item']) ?>
         <?= $this->Html->link(__('Messages'),'/messages',['class' => 'dropdown-item']) ?>
         <?= $this->Html->link(__('Logout'),'/logout',['class' => 'dropdown-item']) ?>
          
        </div>
      </li>
   
<?php }else{  ?>
  <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="/login" id="logIn">Login</a>
  </li>

  <li class="nav-item">
      <a class="nav-link js-scroll-trigger" href="/sign-up" id="signUp">Sign Up</a>
  </li>
<?php  }   ?>
      <li class="mobview">
        <a href="/carts/view" class="pad">
            <i class="fa fa-shopping-cart fa-2x"></i>
    <span class="badge" id="cart-counter"><?php 
     $cart = $this->request->session()->read('cart');
    echo count($cart);?></span>
        </a>
      </li>
</ul>
