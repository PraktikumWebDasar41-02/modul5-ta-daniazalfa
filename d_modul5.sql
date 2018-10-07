-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 09:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `nim` bigint(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `komentar` varchar(40) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`nim`, `nama`, `email`, `komentar`, `tanggallahir`, `jeniskelamin`, `jurusan`, `fakultas`) VALUES
(6701174129, 'daniazalfa', 'daniazalfa@gmail.com', 'ini Ta ', '1999-07-19', 'Perempuan', 'MI', 'FIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jurnal1`
--
ALTER TABLE `t_jurnal1`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
