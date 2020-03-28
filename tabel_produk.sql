-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 03:54 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbuts_027`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE IF NOT EXISTS `tabel_produk` (
`id_barang` int(11) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `stok_barang` int(5) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id_barang`, `kode_barang`, `nama_barang`, `jenis_barang`, `stok_barang`, `harga_barang`) VALUES
(1, 'jkl123', 'Smartphone', 'Elektronik', 10, 1500000),
(8, 'abc123', 'Laptop', 'Elektronik', 10, 5000000),
(10, 'def789', 'Flashdisk', 'Elektronik', 5, 80000),
(11, 'xyz345', 'Mouse', 'Elektronik', 35, 75000),
(12, 'hij234', 'Monitor', 'Elektronik', 45, 350000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
 ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
