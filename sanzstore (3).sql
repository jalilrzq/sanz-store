-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2022 pada 01.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanzstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `ID_JENIS` int(3) NOT NULL,
  `JENIS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`ID_JENIS`, `JENIS`) VALUES
(1, 'CUSTOM'),
(2, 'BTS'),
(3, 'NCT'),
(4, 'BLACKPINK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_custom`
--

CREATE TABLE `order_custom` (
  `ID_ORDER` varchar(8) NOT NULL,
  `NAMA_PELANGGAN` varchar(50) NOT NULL,
  `NO_HP` int(15) NOT NULL,
  `ALAMAT` text NOT NULL,
  `TANGGAL_PEMBELIAN` date NOT NULL,
  `ID_PRODUK` varchar(8) NOT NULL,
  `UKURAN` varchar(20) NOT NULL,
  `HARGA` int(20) NOT NULL,
  `STATUS_PEMBAYARAN` int(5) NOT NULL,
  `UCAPAN` text NOT NULL,
  `NAMA_CUSTOM` varchar(100) NOT NULL,
  `QUOTE` text NOT NULL,
  `FROM_NAME` varchar(50) NOT NULL,
  `IMAGE` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_custom`
--

INSERT INTO `order_custom` (`ID_ORDER`, `NAMA_PELANGGAN`, `NO_HP`, `ALAMAT`, `TANGGAL_PEMBELIAN`, `ID_PRODUK`, `UKURAN`, `HARGA`, `STATUS_PEMBAYARAN`, `UCAPAN`, `NAMA_CUSTOM`, `QUOTE`, `FROM_NAME`, `IMAGE`) VALUES
('OC001', 'Windah', 12345678, 'Jl Kemuning No 23, Magelang Raya', '2022-09-04', 'CST-04', '20X30', 45000, 0, 'Selamat menempuh hidup baru', 'Bunga Tiara S.Kom', 'Skripsi yang selesai adalah skripsi yang bagus', 'Windah', ''),
('OC002', 'Wini Astuti', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-05', 'CST-03', '20X30', 45000, 0, 'Selamat menempuh hidup baru', 'Bunga Tiara S.Kom', 'Skripsi yang selesai adalah skripsi yang bagus', 'Windah', '2022-08-30.jpeg'),
('OC003', 'Wini Astuti', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-05', 'CST-03', '20X30', 45000, 0, 'Selamat menempuh hidup baru', 'Bunga Tiara S.Kom', 'Skripsi yang selesai adalah skripsi yang bagus', 'Windah', '2022-08-30.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_regular`
--

CREATE TABLE `order_regular` (
  `ID_ORDER` varchar(8) NOT NULL,
  `NAMA_PELANGGAN` varchar(50) NOT NULL,
  `NO_HP` int(15) NOT NULL,
  `ALAMAT` text NOT NULL,
  `TANGGAL_PEMBELIAN` date NOT NULL,
  `ID_PRODUK` varchar(8) NOT NULL,
  `UKURAN` varchar(20) NOT NULL,
  `HARGA` int(20) NOT NULL,
  `STATUS_PEMBAYARAN` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_regular`
--

INSERT INTO `order_regular` (`ID_ORDER`, `NAMA_PELANGGAN`, `NO_HP`, `ALAMAT`, `TANGGAL_PEMBELIAN`, `ID_PRODUK`, `UKURAN`, `HARGA`, `STATUS_PEMBAYARAN`) VALUES
('OR001', 'Wini Astuti', 2147483647, 'Jl Kemuning No 23, Magelang Raya', '2022-09-04', 'BTS-02', '20X30', 45000, 0),
('OR002', 'Rini', 812345678, 'Jl Cendrawasih', '2022-09-04', 'BP-03', '30X40', 75000, 0),
('OR003', 'Rini', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-04', 'BTS-09', '30X40', 75000, 0),
('OR004', 'Satria Wahyu', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-05', 'BP-03', '30X40', 75000, 0),
('OR005', 'Satria Wahyu', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-05', 'BP-03', '30X40', 75000, 0),
('OR006', 'Satria Wahyu', 181818181, 'Jl Kemuning No 23, Magelang Raya', '2022-09-05', 'BP-03', '30X40', 75000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_PRODUK` varchar(8) NOT NULL,
  `NAMA_PRODUK` varchar(50) NOT NULL,
  `DESC_PRODUK` text NOT NULL,
  `JENIS_PRODUK` int(3) NOT NULL,
  `IMAGE_LINK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `NAMA_PRODUK`, `DESC_PRODUK`, `JENIS_PRODUK`, `IMAGE_LINK`) VALUES
('BP-01', 'Blackpink Full Member', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 4, 'assets/image/product/blackpink/blackpink-1.png'),
('BP-02', 'Blackpink Lisa', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 4, 'assets/image/product/blackpink/blackpink-2.png'),
('BP-03', 'Blackpink Jennie', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 4, 'assets/image/product/blackpink/blackpink-3.png'),
('BP-04', 'Blackpink Rose', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 4, 'assets/image/product/blackpink/blackpink-4.png'),
('BP-05', 'Blackpink Jisoo', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 4, 'assets/image/product/blackpink/blackpink-5.png'),
('BTS-01', 'BTS Full Member', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-1.png'),
('BTS-02', 'BTS Jungkook', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-2.png'),
('BTS-03', 'BTS Jin', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-3.png'),
('BTS-04', 'BTS J-Hope', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-4.png'),
('BTS-05', 'BTS RM', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-5.png'),
('BTS-06', 'BTS Suga', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-6.png'),
('BTS-07', 'BTS Jimin', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-7.png'),
('BTS-08', 'BTS V', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-8.png'),
('BTS-09', 'BTS Army', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 2, 'assets/image/product/bts/bts-9.png'),
('CST-01', 'CUSTOM - M3', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-1.png'),
('CST-02', 'CUSTOM - WD1', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-2.png'),
('CST-03', 'CUSTOM - M6', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-3.png'),
('CST-04', 'CUSTOM - M5', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-4.png'),
('CST-05', 'CUSTOM - M1', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-5.png'),
('CST-06', 'CUSTOM - M7', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-6.png'),
('CST-07', 'CUSTOM - M2', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 1, 'assets/image/product/custom/custom-7.png'),
('NCT-01', 'NCT Full Member', 'DETAIL PRODUK: Kayu MDF, kertas stiker, laminating, Gantungan jam, menggunakan baterai AA 1 pcs (belum termasuk), packing menggunakan bubble wrap', 3, 'assets/image/product/nct/nct-1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(5) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`) VALUES
(1, 'sanzstore', 2022),
(2, 'jammagelang', 2022),
(3, 'febri', 2022);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indeks untuk tabel `order_custom`
--
ALTER TABLE `order_custom`
  ADD PRIMARY KEY (`ID_ORDER`);

--
-- Indeks untuk tabel `order_regular`
--
ALTER TABLE `order_regular`
  ADD PRIMARY KEY (`ID_ORDER`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_PRODUK`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
