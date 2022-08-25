-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 05.21
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
-- Struktur dari tabel `order_non`
--

CREATE TABLE `order_non` (
  `ID_ORDER` int(8) NOT NULL,
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
-- Dumping data untuk tabel `order_non`
--

INSERT INTO `order_non` (`ID_ORDER`, `NAMA_PELANGGAN`, `NO_HP`, `ALAMAT`, `TANGGAL_PEMBELIAN`, `ID_PRODUK`, `UKURAN`, `HARGA`, `STATUS_PEMBAYARAN`) VALUES
(1, 'Satria Wahyu', 2147483647, 'Jl Kemuning No 23, Magelang Raya', '2022-08-25', 'BP-01', '30X40', 75000, 0),
(5, 'Winni', 819345671, 'Jl Kemuning No 23, Magelang Raya', '2022-08-25', 'BP-02', '30X40', 75000, 0);

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
(2, 'jammagelang', 2022);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indeks untuk tabel `order_non`
--
ALTER TABLE `order_non`
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

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order_non`
--
ALTER TABLE `order_non`
  MODIFY `ID_ORDER` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
