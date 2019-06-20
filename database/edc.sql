-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 05:18 PM
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
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npp` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `nama`, `npp`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'programmer123', 'admin', 'Bangbang', '123456', 'Programmer', '2019-06-20', '2019-06-20');

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
  `mid` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL,
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
(1234567891, 'PAXD210', 'bekas', 'available', 'rusak', '123457698', '3457680209', 'gan', 'loremipsum', 'Agen', '2019-05-17', '2019-05-18', 'VISIONET'),
(1234567892, 'PAXD210', 'bekas', 'available', 'baik', '123457698', '3457680209', 'gan', 'loremipsum', 'Agen', '2019-05-17', '2019-05-18', 'VISIONET'),
(9875625241, 'MOVE2500', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(9875625242, 'MOVE2500', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(9875625244, 'IWC220', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(9875625245, 'IWC220', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(9875625253, 'MOVE2500', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(9875625254, 'IWC220', 'baru', 'available', 'baik', '0', '0', '', '', '', '0000-00-00', '0000-00-00', ''),
(657438290987, 'ICT250', 'baru', 'available', 'baik', '0', '0', '', '', '', '2019-06-12', '2019-06-13', '');

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
  `mid` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL,
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
(987654321, 'PAXD210', 'baru', 'available', 'baik', '98796548327', '898798778656', 'dadali manting', 'jl.heulang', 'Merchant', '2019-05-17', '2019-05-18', 'BEPS');

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `tanggal_awal`, `tanggal_akhir`) VALUES
(5, '2019-05-17', '2019-06-20');

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
  `mid` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL,
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
  `id` int(100) NOT NULL,
  `serial_number` bigint(100) NOT NULL,
  `tipe_edc` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `status_edc` varchar(50) NOT NULL,
  `kondisi_edc` varchar(50) NOT NULL,
  `serial_number_pengganti` bigint(100) NOT NULL,
  `tipe_edc_pengganti` varchar(100) NOT NULL,
  `kondisi_pengganti` varchar(50) NOT NULL,
  `status_edc_pengganti` varchar(50) NOT NULL,
  `kondisi_edc_pengganti` varchar(50) NOT NULL,
  `mid` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL,
  `nama_merchant` varchar(100) NOT NULL,
  `alamat_merchant` text NOT NULL,
  `digunakan` varchar(50) NOT NULL,
  `status_issue` varchar(50) NOT NULL,
  `case_issue` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `serial_number_pengganti`, `tipe_edc_pengganti`, `kondisi_pengganti`, `status_edc_pengganti`, `kondisi_edc_pengganti`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `status_issue`, `case_issue`, `vendor`, `date_in`, `date_out`) VALUES
(2, 1234567892, 'PAXD210', 'bekas', 'available', 'baik', 0, '', '', '', '', '123457698', '3457680209', 'gan', 'loremipsum', 'Agen', '', '', 'VISIONET', '2019-05-17', '2019-05-18');

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
  `mid` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL,
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
(7, 1234567891, 'PAXD210', 'bekas', 'available', 'rusak', '123457698', '3457680209', 'gan', 'loremipsum', 'Agen', 'proccess', 'rusak replace', 'VISIONET', '2019-05-17', '2019-05-18');

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
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temporary_data`
--
ALTER TABLE `temporary_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
