-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 02:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xiirpl4`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(4) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `sekolah` varchar(35) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `nama_bapa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `kelas`, `alamat`, `jurusan`, `stat`, `sekolah`, `gender`, `Agama`, `nama_bapa`) VALUES
(9, 'Faiz sahrul muharam', 'xii rpl4', 'cienteung gede', 'RPL', 'Mahasiswa', 'SMKN 4 TASIKMALAYA', 'laki-laki', 'ISLAM', 'Toni'),
(10, 'Rizqi bagja komara', 'xii rpl4', 'Sambong Jaya ', 'RPL', 'MAHASISWA', 'SMKN 4 TASIKMALAYA', 'laki-laki', 'ISLAM', 'yuyus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
