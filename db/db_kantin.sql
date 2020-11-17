-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 06:32 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perhari`
--

CREATE TABLE `hasil_perhari` (
  `id_hasil` int(11) NOT NULL,
  `tampilan` varchar(225) NOT NULL,
  `rasa` varchar(225) NOT NULL,
  `variasi` varchar(225) NOT NULL,
  `higienis` varchar(225) NOT NULL,
  `pelayanan` varchar(225) NOT NULL,
  `saran` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_polling`
--

CREATE TABLE `hasil_polling` (
  `id_hasilpoling` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `menu_senin` varchar(225) NOT NULL,
  `manu_selasa` varchar(225) NOT NULL,
  `menu_rabu` varchar(225) NOT NULL,
  `menu_kamis` varchar(225) NOT NULL,
  `menu_jumat` varchar(225) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_poling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npk` varchar(225) NOT NULL,
  `bidang` varchar(225) NOT NULL,
  `foto_karyawan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `makanan_pokok` varchar(225) NOT NULL,
  `lauk_hewani` varchar(225) NOT NULL,
  `lauk_nabati` varchar(225) NOT NULL,
  `sayur` varchar(225) NOT NULL,
  `buah` varchar(225) NOT NULL,
  `minuman` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `tanggal`, `makanan_pokok`, `lauk_hewani`, `lauk_nabati`, `sayur`, `buah`, `minuman`) VALUES
(2, '0000-00-00', 'sadaad', 'asdasd', 'asdasd', 'adsad', 'asdasd', 'asdada'),
(3, '2020-11-01', 'sadaad', 'asdasd', 'asdasd', 'adsad', 'asdasd', 'asdada');

-- --------------------------------------------------------

--
-- Table structure for table `poling_menu`
--

CREATE TABLE `poling_menu` (
  `id_poling` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `manu_senin` varchar(225) NOT NULL,
  `menu_selasa` varchar(225) NOT NULL,
  `menu_rabu` varchar(225) NOT NULL,
  `menu_kamis` varchar(225) NOT NULL,
  `menu_jumat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_kuisioner`
--

CREATE TABLE `t_kuisioner` (
  `id` int(11) NOT NULL,
  `responden` varchar(250) NOT NULL,
  `p1` varchar(500) NOT NULL,
  `p2` varchar(500) NOT NULL,
  `p3` varchar(500) NOT NULL,
  `p4` varchar(500) NOT NULL,
  `p5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kuisioner`
--

INSERT INTO `t_kuisioner` (`id`, `responden`, `p1`, `p2`, `p3`, `p4`, `p5`) VALUES
(57, 'Nugraha Eka P', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Sangat Baik', 'Sangat Baik'),
(58, 'aji ', 'Baik', 'Buruk', 'Buruk', 'Buruk', 'Buruk'),
(59, 'dzikri', 'Sangat Baik', 'Buruk', 'Buruk', 'Buruk', 'Buruk'),
(60, 'Dena', 'Cukup', 'Baik', 'Cukup', 'Cukup', 'Cukup'),
(61, 'Reinaldo', 'Sangat Baik', 'Cukup', 'Baik', 'Buruk', 'Cukup'),
(62, 'Bambang', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik'),
(63, 'reno', 'Sangat Baik', 'Baik', 'Baik', 'Sangat Baik', 'Buruk'),
(64, 'Nugi', 'Baik', 'Sangat Baik', 'Baik', 'Sangat Baik', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `t_pertanyaan`
--

CREATE TABLE `t_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL,
  `isi1` varchar(250) NOT NULL,
  `isi2` varchar(250) NOT NULL,
  `isi3` varchar(250) NOT NULL,
  `isi4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pertanyaan`
--

INSERT INTO `t_pertanyaan` (`id`, `pertanyaan`, `isi1`, `isi2`, `isi3`, `isi4`) VALUES
(1, 'Menu Hari ini', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(2, 'Minuman Hari Ini', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(3, 'Lauk Hari Ini', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(4, 'Karyawan Hari Ini', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(5, 'Pelayanan Hari Ini', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama_user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `hasil_perhari`
--
ALTER TABLE `hasil_perhari`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `hasil_polling`
--
ALTER TABLE `hasil_polling`
  ADD PRIMARY KEY (`id_hasilpoling`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `poling_menu`
--
ALTER TABLE `poling_menu`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_perhari`
--
ALTER TABLE `hasil_perhari`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_polling`
--
ALTER TABLE `hasil_polling`
  MODIFY `id_hasilpoling` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poling_menu`
--
ALTER TABLE `poling_menu`
  MODIFY `id_poling` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
