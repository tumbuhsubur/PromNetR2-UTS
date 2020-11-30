-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_zoom`
--

CREATE TABLE `data_zoom` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nomorhp` varchar(255) NOT NULL,
  `email` varchar(16) NOT NULL,
  `kegiatan` varchar(16) NOT NULL,
  `nama_kegiatan` varchar(64) NOT NULL,
  `tanggal` date DEFAULT curdate(),
  `jammulai` time DEFAULT NULL,
  `jamselesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_zoom`
--

INSERT INTO `data_zoom` (`id`, `nama`, `nomorhp`, `email`, `kegiatan`, `nama_kegiatan`, `tanggal`, `jammulai`, `jamselesai`) VALUES
(10, 'Eka Januard Firdaus', '0812321', 'januar@ub.ac.id', 'Kuliah', 'PromNet Kelas Malam', NULL, NULL, NULL),
(11, 'Eka J F', '--', 'email@dom.com', 'Kuliah', 'UTS PromNet Kelas Malam', NULL, NULL, NULL),
(12, 'Nama Lengkap', '08123456789', 'email@peserta.co', 'Ujian', 'Seminar PromNet R2', NULL, NULL, NULL),
(13, 'nama saja', 'nomor hp', 'email@email.com', 'Seminar', 'Judul Kegiatan', NULL, NULL, NULL),
(14, 'Ali Topan', '08123456777', 'ali@uniga.net', 'Kuliah', 'PromNet', NULL, NULL, NULL),
(15, 'Ahmad', '012321321', 'ahmad@coba.net', 'Seminar', 'sem sem', '2020-11-23', NULL, NULL),
(16, 'exgar', '0812312321', 'ex@gar.com', 'Ujian', 'hidup', '2020-11-23', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_zoom`
--
ALTER TABLE `data_zoom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_zoom`
--
ALTER TABLE `data_zoom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
