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
  ?>

  <section id="product" class="product">
    <div class="container">
      <div class="row text-white">
        <div class="col">
          <h1 class="heading">PILIH DESAIN JAM</h1>
        </div>
      </div>
      <div class="row">
        <?php
          $result = mysqli_query($koneksi, "SELECT * FROM produk WHERE JENIS_PRODUK != 1");
          foreach ($result as $row) { 
        ?>
          <div class="col-lg-4 item mt-4">
            <div class="card p-4 py-5 mt-2">
              <img src="<?php echo $row['IMAGE_LINK'] ?>" class="rounded" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Jam Dinding <?php echo $row['NAMA_PRODUK'] ?></h5>
                <p class="card-text mt-3 desc text-center"><?php echo $row['DESC_PRODUK'] ?></p>
                <center><a href="detail.php?id=<?php echo $row['ID_PRODUK'] ?>" class="btn" style="border: 1px solid white;">LIHAT DETAIL</a></center>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
        
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