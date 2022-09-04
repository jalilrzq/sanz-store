<header>
  <nav class="navbar navbar-expand-lg navbar-light text-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><b>SANZ STORE</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-item-lg-center" id="navbarNavAltMarkup">
        <div class="navbar-nav me-5" id="navbar-spy">
          <a class="nav-link me-4 active" href="index.php">Home</a>
          <a class="nav-link me-4" href="product-custom.php">Custom</a>
          <a class="nav-link me-4" href="product.php">Product</a>
          <a class="nav-link me-4" href="outlet-location.php">Official Store</a>
          <a class="nav-link me-4" href="contact.php">Contact Us</a>
          
          <?php
            if (isset($_SESSION['username'])){
              ?>
              <a class="nav-link" href="pesanan.php">
                Pesanan
              </a>
              <a class="nav-link" href="logout.php">
                <i class='bx bx-log-out'></i> Logout
              </a>
              <?php
            } else {
              ?>
              <a class="nav-link" href="login.php">
                <i class='bx bx-log-in'></i> Login
              </a>
              <?php
            }
          ?>

        </div>
        <!-- <div class="icons-home mt-4 mt-lg-0">
          <a href="#"><i class='bx bxs-user'></i></a>
          <a href="#"><i class='bx bx-shopping-bag ms-3'></i></a>
        </div> -->
      </div>
    </div>
  </nav>
</header>