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
          <h1 class="heading">Official Store</h1>
          <p class="subheading">Welcome to our Store</p>
        </div>
      </div>
      <div class="row mt-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31646.701927971888!2d110.18779661562502!3d-7.483162499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f5bb17dc0d7%3A0xcffcafd7928cf42b!2sToko%20Jam%20Dirgahayu!5e0!3m2!1sid!2sid!4v1662249320696!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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