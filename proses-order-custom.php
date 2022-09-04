<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(ID_ORDER) as kodeTerbesar FROM order_custom");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
 
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "OC";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
// echo $kodeBarang;

// Data dari form order
$id_order = $kodeBarang;
$nama_pelanggan = $_POST['nama-pelanggan'];
$no_hp = $_POST['no-hp'];
$alamat = $_POST['alamat'];
$tanggal_pembelian = $_POST['tanggal-pembelian'];
$id_produk = $_POST['kode-produk'];
$nama_produk = $_POST['nama-produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga-produk'];
$status_pembayaran = 0;
$ucapan = $_POST['ucapan'];
$nama_custom = $_POST['nama-custom'];
$quote = $_POST['quote'];
$from_name = $_POST['from-name'];
$image_custom = $_POST['formFile'];

// Update ke database

$sql = "INSERT INTO `order_custom`(`ID_ORDER`, `NAMA_PELANGGAN`, `NO_HP`, `ALAMAT`, `TANGGAL_PEMBELIAN`, `ID_PRODUK`, `UKURAN`, `HARGA`, `STATUS_PEMBAYARAN`, `UCAPAN`, `NAMA_CUSTOM`, `QUOTE`, `FROM_NAME`, `IMAGE`) VALUES ('$id_order', '$nama_pelanggan', '$no_hp', '$alamat', '$tanggal_pembelian', '$id_produk', '$ukuran', '$harga', '$status_pembayaran', '$ucapan', '$nama_custom', '$quote', '$from_name', '$image_custom')";
mysqli_query($koneksi, $sql);

// Balik ke halaman product

// header("location: product.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berhasil Pesan Barang</title>

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
  <section class="konfirmasi">
    <div class="container text-white">
      <div class="row">
        <div class="col">
          <h1 class="text-center">Konfirmasi Pesanan</h1>
        </div>
      </div>
      <div class="row mt-5">
        <!-- Kolom Kiri -->
        <div class="col-lg-6 border-end border-light">
          <h4 class="text-center">Detail Pesanan Anda</h4>
          <form class="px-5 mt-3">
            <fieldset disabled>
              <div class="mb-3">
                <label class="form-label">ID Order</label>
                <input type="text" class="form-control" value="<?php echo $id_order ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" value="<?php echo $nama_produk ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Ukuran</label>
                <input type="text" class="form-control" value="<?php echo $ukuran ?> CM">
              </div>
              <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" value="<?php echo $harga ?>">
              </div>
            </fieldset>
          </form>
        </div>
        <!--Kolom Kanan -->
        <div class="col-lg-6">
        <h4 class="text-center">Transfer Pembayaran</h4>
          <div class="card bg-light p-2 mx-5 mt-5 text-dark card-bank">
            <div class="row p-1">
              <div class="col-3">
                <img src="assets/image/logo_bca.png" alt="">
              </div>
              <div class="col-9">
                <p>
                  Bank Central Asia <br>
                  Sanz Store <br>
                  2208 2022
                </p>
              </div>
            </div>
          </div>
          <div class="card bg-light p-2 mx-5 mt-5 text-dark card-bank">
            <div class="row p-1">
              <div class="col-3">
                <img src="assets/image/logo_mandiri.png" alt="">
              </div>
              <div class="col-9">
                <p>
                  Mandiri <br>
                  Sanz Store <br>
                  2208 2022
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col text-center">
          <p>Jika sudah melakukan transfer pembayaran, silahkan klik tombol konfirmasi di bawah ini</p>
          <a href="https://wa.me/6281333433994?text=Selamat%20Siang%20Sanz%20Store%2C%20Saya%20<?php echo $nama_pelanggan ?>%20sudah%20melakukan%20pembayaran%20produk%20<?php echo $nama_produk?>%20dengan%20ID%20Order%20<?php echo $id_order ?>.%20Berikut%20saya%20lampirkan%20foto%20bukti%20pembayarannya%3A%0A" class="btn btn-primary">Saya Sudah Transfer</a>
        </div>
      </div>
    </div>
  </section>

</body>
</html>