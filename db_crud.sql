-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2023 at 02:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_code` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jns_kelamin` enum('PRIA','WANITA') NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_code`, `nama`, `jns_kelamin`, `tgl_lahir`, `pekerjaan`, `provinsi`, `kota`, `kecamatan`, `desa`) VALUES
(10, 'Dinda', 'WANITA', '2023-05-12', 'Makan', 'ACEH', 'KABUPATEN BIREUEN', 'MAKMUR', 'MON ARA'),
(12, 'misal', 'PRIA', '2023-05-02', 'penggangguran', 'SUMATERA UTARA', 'KABUPATEN MANDAILING NATAL', 'PAKANTAN', 'HUTA TORAS'),
(13, 'Rita', 'PRIA', '2023-05-02', 'penggangguran', 'SUMATERA BARAT', 'KABUPATEN DHARMASRAYA', 'TIMPEH', 'PANYUBARANGAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
