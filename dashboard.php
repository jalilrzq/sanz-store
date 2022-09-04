<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - Admin</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Style Dashboard -->
  <link href="assets/custom/style-dashboard.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/custom/style.css">

</head>
<body class="sb-nav-fixed">
  <!-- Navbar Admin -->
  <?php
    include 'component/navbar-dashboard.php';
    include 'koneksi.php';

    $query_products = mysqli_query($koneksi, "SELECT * FROM produk");
    $num_products = mysqli_num_rows($query_products);
    
    $query_regular = mysqli_query($koneksi, "SELECT * FROM order_non");
    $num_regular = mysqli_num_rows($query_regular);

    $total_products = $num_products;
    $order_custom = 0;
    $order_regular = $num_regular;

  ?>

  <div id="layoutSidenav">
    <?php include 'component/sidebar.php' ?>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4 mb-3">Dashboard</h1>
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                  <h5 class="card-title">Total Products</h5>
                  <p style="font-size: 2rem; margin-bottom: 0px;"><?php echo $total_products ?></P>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="data-product.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6">
              <div class="card bg-success text-white mb-4">
                <div class="card-body">
                  <h5 class="card-title">Custom Order Products</h5>
                  <p style="font-size: 2rem; margin-bottom: 0px;"><?php echo $order_regular ?></P>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="#">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 col-md-6">
              <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                  <h5 class="card-title">Regular Order Products</h5>
                  <p style="font-size: 2rem; margin-bottom: 0px;"><?php echo $order_regular ?></P>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="data-order.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </main>
      
      <?php include 'component/footer-dashboard.php' ?>
    </div>
  </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/custom/custom.js"></script>
</body>
</html>
