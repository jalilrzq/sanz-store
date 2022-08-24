<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanz Store</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/custom/style.css">
</head>
<body>
  <!-- Header -->
  <?php 
    include 'component/header.php';
    include 'koneksi.php';
    $ID = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE ID_PRODUK = '$ID'");
    $result = mysqli_fetch_array($query);
  ?>

  <section id="detail" class="detail py-5">
    <div class="container text-white">
      <div class="row mt-5">
        <div class="col-lg-6 text-center">
          <img src="<?php echo $result['IMAGE_LINK']; ?>" width="300" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3>Jam Dinding <?php echo $result['NAMA_PRODUK']; ?></h3>
          <h5>Stock: In Stock</h5>
          <p class="mt-3">Ukuran 20X30 Harga Rp 45.000, -</p>
          <p>Ukuran 30X40 Harga Rp 75.000, -</p>
          
          <p class="mt-4"><?php echo $result['DESC_PRODUK']; ?></p>
          <a href="order.php?id=<?php echo $result['ID_PRODUK']; ?>" class="btn text-light">BELI</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'component/footer.php' ?>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/custom/custom.js"></script>

</body>
</html>