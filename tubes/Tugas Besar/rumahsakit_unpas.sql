-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit_unpas`
--

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(70) NOT NULL,
  `NIP` char(10) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Alamat` varchar(120) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`ID`, `Nama`, `NIP`, `Email`, `Alamat`, `Gambar`) VALUES
(30, 'drg.Vini Arkantaqqy Khoisy, SpKG', '0010240821', 'viniaprilianti22@gmail.com', 'Komp. Batununggal Indah Blok D NO 24, Buah Batu, Bandung', '629e352976d87.png'),
(31, 'dr. Kinan, Sp.A', '0011562076', 'kinan@hotmail.com', 'Jl. Suryalaya NO 45, Buah Batu, Bandung', '629e37bb16d99.png'),
(32, 'dr. Septian Juniawan, Sp.JP', '0012604794', 'septian55@gmail.com', 'Komp. Permata Buah Batu RT 01, RW 6, NO 3, Buah Batu, Bandung', '629e3a2478fdc.png'),
(33, 'Muhammad Rizky, S.kep.', '0022527829', 'rizkyahoy@gmail.com', 'Kp.Parunghalang RT 03, RW 12, NO 11, Dayeuhkolot, Kab.Bandung', '629e3a9c074cb.png'),
(34, 'Ridwan Hidayat, S.Kep.', '0022527830', ' bow25zz@gmail.com', 'Kp.Cikarees RT 05, RW 02, NO 8, Baleendah, Kab.Bandung', '629e3ad20ba8c.png'),
(35, 'Muhammad Adli Auzan, S.Kep', '0022527831', 'bauzengauzan@gmail.com', 'Komp. Griya Indah Lestari RT 08, RW 15, NO 05, Bojong Malaka, Kab.Bandung', '629e3b0912e93.png'),
(36, 'Rafli Romadhoni, A.Md.Kep', '0022529842', 'donie111@gmail.com', 'Komp. Griya Bandung Asri RT 02, RW 06, NO 12, Dayeuhkolot, Kab.Bandung', '629e3b493f648.png'),
(37, 'Mulyadi Wicaksana, A.Md.Kep', '0012529843', 'mwwm___@yahoo.com', 'Komp. Permata Buah Batu RT 05, RW 13, NO 10, Buah Batu, Bandung', '629e3b80550cf.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(7, 'admin1', '$2y$10$o6xnIWq1OQAyw.gfkC3aOuLebgEEhEUfLFwNySjur8.S9BR3zDTyi'),
(10, 'daffa22', '$2y$10$J.rjgAattT/PgntvgKwZhOtricw7HF618t6uRsjeg8WmPlsFUAa8K'),
(11, 'ucokbba2', '$2y$10$XFNAFlP3d3DYyyPzsIdPyOrNgkEN7aOPNo/.0o1mbvll6IOSYsgIO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
