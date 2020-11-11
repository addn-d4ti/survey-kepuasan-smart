-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:57 PM
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
-- Database: `kuisioner`
--

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
(1, 'Enak kah makanan menu hari ini?', 'Sip', 'Mantul', 'Anjing', 'Kontol'),
(2, 'Enak kah menu minuman hari ini ?', 'Sip', 'Mantul', 'Anjing', 'Kontol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
