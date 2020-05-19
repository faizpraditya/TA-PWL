-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 05:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `namaa`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'faiz', 'faiz', 'Faiz'),
(3, 'alka', 'alka123', 'Alka'),
(4, 'rio', 'rio123', 'Rio');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bbm` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `merk`, `tipe`, `bbm`, `harga`, `foto`) VALUES
(1, 'Suzuki', 'Shogun 125', 'Pertalite', 50000, 'FB_IMG_1538733403843.jpg'),
(3, 'Yamaha', 'Nmax 155', 'Pertamax', 80000, 'NMAX-ABS2.png');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_hp`, `alamat`, `email`, `foto`) VALUES
(2, 'Ali', '085', 'Rogojembangan', 'ali@gmail.com', 'ali.jpg'),
(3, 'Fajar', '082', 'Jangli', 'dumpkid.fajar@gmail.com', 'fajar.jpg'),
(4, 'Budi', '0877', 'Sendangmulyo', 'budi@gmail.com', 'isiz.png');

-- --------------------------------------------------------

--
-- Table structure for table `persewaan`
--

CREATE TABLE `persewaan` (
  `id_persewaan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persewaan`
--

INSERT INTO `persewaan` (`id_persewaan`, `id_admin`, `id_pelanggan`, `id_motor`, `tanggal_sewa`, `tanggal_kembali`, `lama_sewa`, `total_bayar`) VALUES
(2, 3, 3, 3, '2019-07-14', '2019-07-19', 5, 5),
(3, 1, 2, 3, '2019-07-14', '2019-07-31', 17, 17),
(5, 1, 4, 3, '2019-07-14', '2019-07-24', 10, 0),
(6, 2, 4, 1, '2019-07-14', '2019-07-14', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `persewaan`
--
ALTER TABLE `persewaan`
  ADD PRIMARY KEY (`id_persewaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persewaan`
--
ALTER TABLE `persewaan`
  MODIFY `id_persewaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
