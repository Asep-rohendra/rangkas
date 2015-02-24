-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:13306
-- Generation Time: Nov 20, 2014 at 06:52 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuis`
--
CREATE DATABASE IF NOT EXISTS `kuis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kuis`;

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE IF NOT EXISTS `tblmhs` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`nim`, `nama`, `alamat`, `jk`, `hobi`) VALUES
('1234', 'Agit Naeta', 'cilimus situraja', 'Pria', 'Olahraga'),
('2141', 'ddddd', 'Sukataru', 'Pria', 'Memancing'),
('244', 'Agit Nugraha', 'Cilimus', 'Pria', 'Membaca'),
('3333', 'Ridwan La', 'Sukataru', 'Wanita', 'Olahraga');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
