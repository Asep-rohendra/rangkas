-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2015 at 09:58 AM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dc`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminrangkas`
--

CREATE TABLE IF NOT EXISTS `adminrangkas` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `nama` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode` varchar(20) NOT NULL DEFAULT '',
  `id` varchar(100) NOT NULL DEFAULT '',
  `namabarang` varchar(100) NOT NULL DEFAULT '',
  `jenis` varchar(30) NOT NULL,
  `harga` float NOT NULL,
  `discount` float NOT NULL,
  `periodemulai` date NOT NULL,
  `periodeakhir` date NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `id`, `namabarang`, `jenis`, `harga`, `discount`, `periodemulai`, `periodeakhir`, `foto`) VALUES
('6XV1S', 'a@a.com', 'Dress', 'Pakaian Wanita', 20000, 10, '2014-05-29', '2014-05-31', '1.jpg'),
('BCNEY', 'test@gmail.com', 'celana pendek', 'Pakaian Anak Laki-laki', 70000, 30, '2014-05-08', '2014-05-31', '1.jpg'),
('S9GOE', 'aseprohendra@gmail.com', 'Jaket', 'Pakaian Pria', 150000, 20, '2014-06-09', '2014-06-15', '2.jpg'),
('MR76O', 'aseprohendra@gmail.com', 'Kemeja', 'Pakaian Pria', 100000, 30, '2014-06-18', '2014-06-22', '3.jpg'),
('3QUGO', 'a@a.com', 'Sarung Tangan', 'Pakaian Pria', 20000, 20, '2014-01-01', '2014-01-02', '2.jpg'),
('4ISCB', 'a@a.com', 'Batik Bagus', 'Pakaian Wanita', 120000, 30, '2014-06-14', '2014-06-23', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `namatoko` varchar(100) NOT NULL DEFAULT '',
  `namapemilik` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `noKTP` varchar(16) NOT NULL DEFAULT '',
`id` int(10) unsigned NOT NULL,
  `jenisjual` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`email`, `password`, `namatoko`, `namapemilik`, `alamat`, `kontak`, `foto`, `noKTP`, `id`, `jenisjual`) VALUES
('a@a.com', 'aa', 'Toko AA', '', 'Deket taman endog men ', '0988771', 'contoh.gif', '', 1, ''),
('test@gmail.com', 'test', 'Duta Pasar Raya', '', 'Deket Taman endog', '8777661', 'art_Samsung2-420x0.jpg', '', 2, ''),
('aseprohendra@gmail.com', '12345', 'maju jaya', '', 'sumedang', '085222295203', 'Android-Logo-Wallpapers-for-HTC-04.jpg', '', 3, ''),
('qweqwe@qweqew.com', 'qwerty', 'qwer', '', 'qweqweqweqweqwe', '132213123', '4.bscp', '', 4, ''),
('agit@lol..com', '1234', 'Design', '', 'Cilimus', '085720101', 'Lighthouse.jpg', '', 5, ''),
('agitnaeta@gmail.com', '12345', 'Agit Naeta', '0', '0', '0', '0', '0', 8, 'toko'),
('akhbarfiradus111@gmail.com', '12345', '0', '0', '0', '0', '0', '0', 7, 'orang'),
('Ahmad@bju.com', '12345', 'Riandi', '', '0', '0', '0', '0', 9, 'toko'),
('juhajiriin@lol.com', 'biarkanakau1', 'Rahmad supriadi', '0', '0', '0', '0', '0', 37, 'toko'),
('supdaridi@bju.com', 'Apalah', '0', 'Ahmad Junaedi', '0', '0', '0', '0', 30, 'orang');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `sponsor_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `kontak` varchar(12) NOT NULL DEFAULT '',
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `tanggalSponsor` date NOT NULL DEFAULT '0000-00-00',
  `periode` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `sponsor_name`, `email`, `kontak`, `alamat`, `tanggalSponsor`, `periode`) VALUES
('1', 'Tokobagus', 'tokobagus@olx.co.id', '09918766541', 'Jakart', '1993-01-12', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminrangkas`
--
ALTER TABLE `adminrangkas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
