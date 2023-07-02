<?php

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <?php 
            if(!isset($_SESSION['user'])):?>        
        
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php else:?>

        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
      </ul>
      <?php endif;
        
          if(isset($_SESSION['user'])):?>
          <a href="logout.php" class="btn btn-danger">Logout</a>
      <?php endif;?>    
    </div>
  </div>
</nav>