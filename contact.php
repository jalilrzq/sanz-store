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
  <?php include 'component/header.php' ?>

  <!-- Contact -->
  <section class="contact mt-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="heading">Contact Us</h1>
          <p class="subheading">we serve you all the time</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 text-center">
          <img src="assets/image/image-hero-1.png" width="300" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3><i class='bx bxl-whatsapp'></i> WhatsApp</h3>
          <p>08123456789</p>
          <h3><i class='bx bxl-instagram'></i> Instagram</h3>
          <p>Sanz Store</p>
          
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