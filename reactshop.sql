-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 10:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reactshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `harga_total` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `stok` int(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `stok`, `gambar`, `kategori`) VALUES
(7, 'Microsoft Office Home & Student 2019', '2100000', 100, 'office.jpg', 'Software'),
(11, 'Windows 10', '6300000', 100, 'win 10.jpg', 'OS');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `kode_tagihan` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`kode_tagihan`, `gambar`) VALUES
('#REACT3INSW', 'win 10.jpg'),
('#REACTAUV4W', 'win 8.1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_tagihan` varchar(28) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(123) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `telepon` int(128) NOT NULL,
  `jumlah_barang` int(128) NOT NULL,
  `total` varchar(123) NOT NULL,
  `atm` varchar(123) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_tagihan`, `nama`, `email`, `alamat`, `provinsi`, `telepon`, `jumlah_barang`, `total`, `atm`, `status`) VALUES
(13, '#REACT3INSW', 'Irfan Nafri', 'irfan@nafri.com', 'Randegan', 'Jawa Barat', 628123216, 2, '6300000', 'BNI', 'Telah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `telepon` int(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `alamat`, `provinsi`, `telepon`, `password`, `role`) VALUES
(1, 'irfan', 'irfan@juned.com', 'dasda', 'dasd', 31231, 'irfan', 'admin'),
(2, 'user', 'user@user.com', 'dasd', 'dasd', 31231, 'user', 'pembeli'),
(5, 'Juniaidi', 'tes@gmail.com', '', 'Jawa Barat', 3123, '123', 'pembeli'),
(8, 'Juniaidi', 'a@user.com', '', 'Jawa Barat', 3123, '$2y$10$mrFOnK788UdFjw/k2zw3wO.kHfp9a0hFWD4BuLIVTvidogWadsX7i', 'pembeli'),
(9, 'Irfan Nafri', 'irfan@nafri.com', 'Randegan', 'Jawa Barat', 628123216, 'f564928cc28e02b7a195cd9eefdc7cd9', 'pembeli'),
(10, 'admin', 'admin@admin.com', '', 'Jawa Barat', 123, '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(11, 'Juniaidi', 'junaidi@gmail.com', '', 'Jawa Barat', 31231, 'a708cb9bebf84a140d408a8251450091', 'pembeli'),
(12, 'Asep', 'asep@asep.com', '', 'Jawa Barat', 2147483647, 'dc855efb0dc7476760afaa1b281665f1', 'pembeli'),
(13, 'Asep', 'asep@asep.com', '', 'Jawa Barat', 2147483647, 'dc855efb0dc7476760afaa1b281665f1', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`kode_tagihan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
