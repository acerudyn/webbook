-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 05:57 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vertical_book`
--
CREATE DATABASE IF NOT EXISTS `vertical_book` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vertical_book`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(79, 'udin313', 'udin'),
(80, 'ajis008', 'ajis'),
(81, 'nazmul464', 'nazmu');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `provinsi` char(25) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` int(2) NOT NULL,
  `bulan_lahir` char(15) NOT NULL,
  `tahun_lahir` int(4) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telepon` int(8) NOT NULL,
  `no_handphone` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`,`no_telepon`,`no_handphone`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15133 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_buku`, `nama`, `pengarang`, `deskripsi`, `id_kategori`, `harga`, `stok`, `gambar`) VALUES
(15124, 'desain', 'acerudyn', 'dasar belajar desain', 'dsn', 70000, 100, 'desai.gif'),
(15125, 'android', 'udin', 'Cara mudah Belajar android', 'prg', 50000, 50, 'pemrograman1.jpg'),
(15127, 'networking', 'acerudyn', 'belajar jaringan dasar', 'ntw', 70000, 50, 'nework1.png'),
(15128, 'java', 'acerudyn', 'belajar pemrograman java', 'prm', 50000, 30, 'pemrograman2.jpg'),
(15129, 'desain', 'udinese', 'cara mudah belajar desain', 'dsn', 70000, 50, 'desain.gif'),
(15130, 'pemrograman php', 'Akhirudin', 'Buku pintar belajar php', 'prg', 75000, 50, 'pemrograman.jpg'),
(15131, 'network security', 'udin', 'cara mengamankan jaringan', 'ntw', 50000, 100, 'network.jpg'),
(15132, 'teknik desain', 'Akhirudin', 'dasar dasar desain unuk pemua', 'prm', 75000, 100, 'desain1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_buku` varchar(11) NOT NULL,
  `id_session` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_buku`, `id_session`, `jumlah`, `gambar`, `judul`, `harga`) VALUES
('15127', 'udin313', 5, 'nework1.png', 'networking', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `notrans` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_konfirmasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `news` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `konfirmasi_pwd` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1234 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `provinsi`, `email`, `telepon`, `username`, `password`, `konfirmasi_pwd`, `jenis_kelamin`) VALUES
(1220, 'saefa', 'tegal', 'lampung', 'saefa@yahoo.com', '1234567890', 'saefa212', 'sss', '', 'Laki - Laki'),
(1221, 'aziz', 'cibarusah', 'jambi', 'aziz@yahoo.com', '1234567890', 'aziz008', 'aziz', '', 'Laki - Laki'),
(1222, 'rico', 'cikarang', 'bengkulu', 'rico@yahoo.com', '1234567890', 'rico007', 'rico', '', 'Laki - Laki'),
(1225, 'nazmul', 'tegal', 'bengkulu', 'nazmul@yahoo.com', '1234567890', 'nazmul464', 'nnn', 'nnn', 'Laki - Laki'),
(1227, 'Akhirudin', 'cikarang', 'maluku', 'ragil.poetra@yahoo.com', '1234567', 'udin313', 'udin', 'udin', 'Laki - Laki'),
(1233, 'Acerudyn Muhamad Al-Ghifari', 'Purworejo', 'gorontalo', 'ragil.poetra@yahoo.com', '1234567890', 'acer', 'acer', 'acer', 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `id_kirim` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `provinsi` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_konfirmasi` int(11) NOT NULL,
  PRIMARY KEY (`id_kirim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id_testimonial` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `testimonial` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_testimonial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1217 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `nama`, `email`, `tanggal`, `testimonial`, `id_user`) VALUES
(1215, ' nazmul', ' nazmul@yahoo.com', ' 03-01-2016', 'Lumayan buat TA... :P', 1225),
(1216, ' rico', ' rico@yahoo.com', ' 03-01-2016', 'hahaha... yang bikin siapa nih..?', 1222);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `notrans` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY (`notrans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_rinci`
--

CREATE TABLE IF NOT EXISTS `transaksi_rinci` (
  `notrans` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL,
  PRIMARY KEY (`notrans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_rinci`
--

INSERT INTO `transaksi_rinci` (`notrans`, `username`, `nama`, `alamat`, `telepon`, `total`) VALUES
('1227310000', 'udin313', 'Akhirudin', 'cikarang', '1234567', '310000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
