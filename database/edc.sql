-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 03:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `edc_in`
--

CREATE TABLE `edc_in` (
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `status_edc` varchar(50) NOT NULL,
  `kondisi_edc` varchar(50) NOT NULL,
  `mid` bigint(100) NOT NULL,
  `tid` bigint(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `vendor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edc_in`
--

INSERT INTO `edc_in` (`serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `date_in`, `date_out`, `vendor`) VALUES
(1234567892, 'PAXD210', 'bekas', 'available', 'rusak', 98796548323, 89879877867, 'seuhah', 'JL.ERERERER', 'Agen', '2019-05-17', '2019-05-18', 'BEPS');

-- --------------------------------------------------------

--
-- Table structure for table `edc_out`
--

CREATE TABLE `edc_out` (
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `status_edc` varchar(50) NOT NULL,
  `kondisi_edc` varchar(50) NOT NULL,
  `mid` bigint(100) NOT NULL,
  `tid` bigint(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `vendor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edc_out`
--

INSERT INTO `edc_out` (`serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `date_in`, `date_out`, `vendor`) VALUES
(987654321, 'PAXD210', 'baru', 'available', 'baik', 98796548327, 898798778656, 'dadali manting', 'jl.heulang', 'Merchant', '2019-05-17', '2019-05-18', 'BEPS'),
(1234567891, 'PAXD210', 'bekas', 'available', 'baik', 98796548323, 89879877867, 'seuhah', 'JL.ERERERER', 'Agen', '2019-05-17', '2019-05-18', 'BEPS');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(100) NOT NULL,
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `status_edc` varchar(50) NOT NULL,
  `kondisi_edc` varchar(50) NOT NULL,
  `mid` bigint(100) NOT NULL,
  `tid` bigint(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `status_issue` varchar(50) NOT NULL,
  `case_issue` varchar(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(255) NOT NULL,
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `status_edc` varchar(50) NOT NULL,
  `kondisi_edc` varchar(50) NOT NULL,
  `mid` bigint(100) NOT NULL,
  `tid` bigint(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `status_issue` varchar(50) NOT NULL,
  `case_issue` varchar(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `status_issue`, `case_issue`, `vendor`, `date_in`, `date_out`) VALUES
(1, 1234567891, 'PAXD210', 'baru', 'available', 'baik', 12345768, 12345768, 'bee mart', 'jl.tralala trilili', 'merchant', 'proccess', 'error', 'bpjs', '2019-05-02', '2019-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_data`
--

CREATE TABLE `temporary_data` (
  `id` int(255) NOT NULL,
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `status_edc` varchar(100) NOT NULL,
  `kondisi_edc` varchar(100) NOT NULL,
  `mid` bigint(100) NOT NULL,
  `tid` bigint(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `status_issue` varchar(50) NOT NULL,
  `case_issue` varchar(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporary_data`
--

INSERT INTO `temporary_data` (`id`, `serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `status_issue`, `case_issue`, `vendor`, `date_in`, `date_out`) VALUES
(7, 1234567891, 'PAXD210', 'bekas', 'available', 'baik', 98796548323, 89879877867, 'seuhah', 'JL.ERERERER', 'Agen', 'proccess', 'baik replace', 'BEPS', '2019-05-17', '2019-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edc_in`
--
ALTER TABLE `edc_in`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `edc_out`
--
ALTER TABLE `edc_out`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_data`
--
ALTER TABLE `temporary_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temporary_data`
--
ALTER TABLE `temporary_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
