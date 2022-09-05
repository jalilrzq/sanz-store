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
  ?>

  <div id="layoutSidenav">
    <?php include 'component/sidebar.php' ?>

    <div id="layoutSidenav_content">
      <main>
        <section id="order" class="order py-5" style="background-color: #fff">
          <div class="container mt-1 px-5">
            <div class="row">
              <div class="col">
                <h1 class="heading text-center">Tambah Produk</h1>
              </div>
            </div>
            <form class="mt-5" id="order" method="POST" action="proses-tambah-product.php">
              <div class="row mb-3">
                <label for="nama-produk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama-produk" name="nama-produk" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="desc-produk" class="col-sm-2 col-form-label">Deskrpsi Produk</label>
                <div class="col-sm-10">
                  <input type="text-area" class="form-control" id="desc-produk" name="desc-produk" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="jenis-produk" class="col-sm-2 col-form-label">Pilih Jenis Produk</label>
                <div class="col-sm-10">
                  <select name="jenis-produk" id="jenis-produk" class="form-select" required onchange="pilihUkuran()">
                    <option>Pilih Jenis</option>
                    <option value="1">CUSTOM</option>
                    <option value="2">BTS</option>
                    <option value="3">NCT</option>
                    <option value="4">Black Pink</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="formFile" class="col-sm-2 col-form-label">Foto Produk</label>
                <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="formFile">
                </div>
                <label class="col-sm-2 col-form-label"></label>
                <div class="form-text col-sm-10">Pastikan format gambar "jpg" "png" "jpeg"</div>
              </div>
              <button type="submit" class="btn mt-5" style="border-color: black">Tambah Produk</button>
            </form>
          </div>
        </section>
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
