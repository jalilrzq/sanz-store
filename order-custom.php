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

  <section id="order mt-5" class="order py-5">
    <div class="container mt-5 text-white">
      <div class="row text-white">
        <div class="col">
          <h1 class="heading text-center">Silahkan isi Form Pemesanan</h1>
        </div>
      </div>
      <form class="mt-5" id="order" method="POST" action="proses-order-custom.php">
        <div class="row mb-3">
          <label for="nama-pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama-pelanggan" name="nama-pelanggan" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="no-hp" class="col-sm-2 col-form-label">No - HP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no-hp" name="no-hp">
          </div>
        </div>
        <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text-area" class="form-control" id="alamat" name="alamat">
          </div>
        </div>
        <div class="row mb-3">
          <label for="tanggal-pembelian" class="col-sm-2 col-form-label">Tanggal Pembelian</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="tanggal-pembelian" name="tanggal-pembelian" value="<?php echo date('Y-m-d'); ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="kode-produk" class="col-sm-2 col-form-label">Kode Produk</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kode-produk" name="kode-produk" readonly value="<?php echo $result['ID_PRODUK']; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama-produk" class="col-sm-2 col-form-label">Nama Produk</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama-produk" name="nama-produk" readonly value="Jam Dinding <?php echo $result['NAMA_PRODUK']; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama-produk" class="col-sm-2 col-form-label">Pilih Ukuran</label>
          <div class="col-sm-10">
            <select name="ukuran" id="ukuran" class="form-select" required onchange="pilihUkuran()">
              <option>Pilih Ukuran</option>
              <option value="20X30">20X30 CM</option>
              <option value="30X40">30X40 CM</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="harga-produk" class="col-sm-2 col-form-label">Harga Produk</label>
          <div class="col-sm-10">
            <input type="text-area" class="form-control" id="harga-produk" name="harga-produk" readonly>
          </div>
        </div>
        
        <label class="col-sm-12 col-form-label text-center">Data Custom</label>
        <hr class="dropdown-divider mb-3">
        <div class="row mb-3">
          <label for="formFile" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-10">
          <input class="form-control" type="file" id="formFile" name="formFile">
          </div>
          <label class="col-sm-2 col-form-label"></label>
          <div class="form-text col-sm-10">Pastikan format gambar "jpg" "png" "jpeg"</div>
        </div>
        <div class="row mb-3">
          <label for="ucapan" class="col-sm-2 col-form-label">Ucapan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ucapan" name="ucapan">
          </div>
          <label class="col-sm-2 col-form-label"></label>
          <div class="form-text col-sm-10">contoh: Happy Graduation!</div>
        </div>
        <div class="row mb-3">
          <label for="nama-custom" class="col-sm-2 col-form-label">Nama Custom</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama-custom" name="nama-custom">
          </div>
          <label class="col-sm-2 col-form-label"></label>
          <div class="form-text col-sm-10">contoh: Bunga Tiara S.Kom</div>
        </div>
        <div class="row mb-3">
          <label for="quote" class="col-sm-2 col-form-label">Quote</label>
          <div class="col-sm-10">
            <input type="text-area" class="form-control" id="quote" name="quote">
          </div>
          <label class="col-sm-2 col-form-label"></label>
          <div class="form-text col-sm-10">contoh: Siapa yang bersungguh-sungguh maka dia akan berhasil </div>
        </div>
        <div class="row mb-3">
          <label for="from-name" class="col-sm-2 col-form-label">From</label>
          <div class="col-sm-10">
            <input type="text-area" class="form-control" id="from-name" name="from-name">
          </div>
          <label class="col-sm-2 col-form-label"></label>
          <div class="form-text col-sm-10">contoh: Angga </div>
        </div>



        <button type="submit" class="btn text-light mt-5">Pesan Sekarang</button>
      </form>
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