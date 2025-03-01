<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
      <img src="images/logo.jpg" alt=""
      width="170">
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-3 link-secondary">Home</a></li>
          <li><a href="about.php" class="nav-link px-3 link-dark">About Us</a></li>
          <li><a href="browse-categories.php" class="nav-link px-3 link-dark">Browse By Categories</a></li>
          <li><a href="contact.php" class="nav-link px-3 link-dark">Contact</a></li>

          <?php if (!isset($_SESSION["cid"])) {?>
            
          <li><a href="register.php" class="nav-link px-3 link-dark">Register</a></li>
          <li><a href="login.php" class="nav-link px-3 link-dark">Login</a></li>
 <?php

}
else

{
?>
         
         
         <li><a href="dashboard.php" class="nav-link px-3 link-dark">Profile</a></li>
          <li><a href="logout.php" class="nav-link px-3 link-dark">Logout</a></li>

        
           
  <?php }?>
  

        </ul>

     
        <div class="dropdown text-end">
        <?php if (!isset($_SESSION["cid"])) {?>
            
        <a href="service_provider/index.php" class='btn btn-danger'>For Service Provider </a>
        <?php }?>
          <!-- <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </header>
