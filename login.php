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
    session_start();
    if (isset($_SESSION['username'])) {
      header("Location: dashboard.php");
    }
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      $sql = "SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD='$password'";
      $result = mysqli_query($koneksi, $sql);
      if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['USERNAME'];
          header("Location: dashboard.php");
      } else {
          echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
      }
    }
  ?>

  <section id="login" class="login">
    <div class="container">
      <div class="row text-white">
        <div class="col">
          <h1 class="heading text-center">LOGIN ADMIN</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 item mx-auto mt-4">
          <form class="text-light" action="login.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
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