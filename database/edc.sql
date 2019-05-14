-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2019 pada 10.39
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edc_in`
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
-- Dumping data untuk tabel `edc_in`
--

INSERT INTO `edc_in` (`serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `date_in`, `date_out`, `vendor`) VALUES
(1234567891, 'sonic', 'baru', 'available', 'baik', 123456789, 123456789, 'bee mart', 'jl.tralala trilili', 'agen', '2019-05-02', '2019-05-03', 'bpjs'),
(1234567892, 'sonic', 'baru', 'available', 'baik', 98796548321, 89879877865, 'seuhah', 'jl.cigerelng cigurulung', '-', '2019-05-02', '2019-05-03', 'PRIMA VISTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edc_out`
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
-- Dumping data untuk tabel `edc_out`
--

INSERT INTO `edc_out` (`serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `date_in`, `date_out`, `vendor`) VALUES
(987654321, 'PAXD210', 'baru', 'available', 'baik', 54345666889, 4645767809, 'strobery', 'jl.gagak', '-', '2019-05-10', '2019-05-23', 'BEPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `issue`
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
-- Struktur dari tabel `laporan`
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
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `serial_number`, `tipe_edc`, `kondisi`, `status_edc`, `kondisi_edc`, `mid`, `tid`, `nama_merchant`, `alamat_merchant`, `digunakan`, `status_issue`, `case_issue`, `vendor`, `date_in`, `date_out`) VALUES
(1, 1234567891, 'sonic', 'baru', 'available', 'baik', 12345768, 12345768, 'bee mart', 'jl.tralala trilili', 'merchant', 'proccess', 'error', 'bpjs', '2019-05-02', '2019-05-03');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
