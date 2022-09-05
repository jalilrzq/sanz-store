<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT max(ID_PRODUK) as kodeTerbesar FROM produk");
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
$huruf = "PRO";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
// echo $kodeBarang;

// Data dari form order
$id_produk = $kodeBarang;
$nama_produk = $_POST['nama-produk'];
$desc_produk = $_POST['desc-produk'];
$jenis_produk = $_POST['jenis-produk'];
// $image_produk = $_POST['formFile'];
$image_produk = "assets/image/product/custom/custom-4.png";

// Update ke database

$sql = "INSERT INTO `produk`(`ID_PRODUK`, `NAMA_PRODUK`, `DESC_PRODUK`, `JENIS_PRODUK`, `IMAGE_LINK`) VALUES ('$id_produk', '$nama_produk', '$desc_produk', '$jenis_produk', '$image_produk')";
mysqli_query($koneksi, $sql);

// Balik ke halaman product

// header("location: data-product.php");

?>