<?php
include 'koneksi.php';

// Data dari form order
// $id_order = $_POST['']; // Pakai Auto Increment
$nama_pelanggan = $_POST['nama-pelanggan'];
$no_hp = $_POST['no-hp'];
$alamat = $_POST['alamat'];
$tanggal_pembelian = $_POST['tanggal-pembelian'];
$id_produk = $_POST['kode-produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga-produk'];
$status_pembayaran = 0;

// Update ke database
// $sql = "INSERT INTO order_non {NAMA_PELANGGAN, NO_HP, ALAMAT, TANGGAL_PEMBELIAN, ID_PRODUK, UKURAN, HARGA, STATUS_PEMBAYARAN} VALUES ('$nama_pelanggan', '$no_hp', '$alamat', '$tanggal_pembelian', '$id_produk', '$ukuran', '$harga', '$status_pembayaran')";
$sql = "INSERT INTO `order_non`(`NAMA_PELANGGAN`, `NO_HP`, `ALAMAT`, `TANGGAL_PEMBELIAN`, `ID_PRODUK`, `UKURAN`, `HARGA`, `STATUS_PEMBAYARAN`) VALUES ('$nama_pelanggan', '$no_hp', '$alamat', '$tanggal_pembelian', '$id_produk', '$ukuran', '$harga', '$status_pembayaran')";
mysqli_query($koneksi, $sql);

// Balik ke halaman show-rute
header("location: product.php");

?>