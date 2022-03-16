<?php 
  session_start();
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img id="img_logo" src="images/logo.png" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="PAGE_PRINCIPALE.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">SHOP</a>
        </li>
      </ul>
      <li class="nav-item dropdown">
          <a class="  navbar-brand" href="#" role="button" data-bs-toggle="dropdown">
          <img class="icon" src="images/accont.png"></a>
            <!-- <a class="navbar-brand" href="javascript:void(0)"></a> -->
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-white" href="#">Sign In</a></li>
            <li><a class="dropdown-item text-white" href="#">Create Compte</a></li>
            <!-- <li><a class="dropdown-item" href="#"></a></li> -->
          </ul>
        </li>
      <a class="navbar-brand" href="CartPage.php"><img class="icon" src="images/panier1.png" >
        <span>
          <?php
            if(isset($_SESSION['cartArray'])){
              echo count($_SESSION['cartArray']);
              }
            else{
              echo 0 ;
            }
          ?>
        </span>
      </a>

    </div>
  </div>
</nav>