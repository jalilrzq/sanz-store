<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
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
    // include 'component/header.php';
    include 'koneksi.php';
  ?>

  <section id="login" class="login bg-warning">
    <div class="container-fluid bg-primary">
      <div class="row text-white">
        <div class="col">
          <h1 class="heading text-center">WELCOME ADMIN <?php echo strtoupper($_SESSION['username'])?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col  item mx-auto mt-4">
          <table class="table text-light table-dark table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                $result = mysqli_query($koneksi, "SELECT * FROM produk");
                foreach ($result as $row) { 
              ?>
              <tr>
                <th align=left valign=middle scope="row"><?php echo $no?></th>
                <td align=left valign=middle><?php echo $row['ID_PRODUK'] ?></td>
                <td align=left valign=middle>Jam Dinding <?php echo $row['NAMA_PRODUK'] ?></td>
                <?php
                  $id_jenis = $row['JENIS_PRODUK'];
                  switch ($id_jenis) {
                    case 1:
                      $jenis = "CUSTOM";
                      break;
                    case 2:
                      $jenis = "BTS";
                      break;
                    case 3:
                      $jenis = "NCT";
                      break;
                    case 4:
                      $jenis = "BlackPink";
                      break;
                    default:
                      $jenis = "Undefined";
                  }
                ?>
                <td align=left valign=middle><?php echo $jenis ?></td>
                <td align=left valign=middle>
                  <img src="<?php echo $row['IMAGE_LINK'] ?>" class="card-img-top" style="width:50px">
                </td>
                <td align=left valign=middle>
                  <!-- <a href="edit-rute.php?id=<?php // echo $row['ID_PRODUK'] ?>"> -->
                  <a href="#">
                    <i class='bx bxs-edit'></i>
                  </a>
                  <a href="delete.php?id=<?php echo $row['ID_PRODUK'] ?>" onclick="return confirm('Yakin ingin menghapus data?')">
                    <i class='bx bxs-trash'></i>
                  </a>
                </td>
              </tr>
              <?php
                $no++;
                }
              ?>
            </tbody>
          </table>
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