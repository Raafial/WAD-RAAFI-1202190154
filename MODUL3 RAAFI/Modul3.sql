-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 21, 2021 at 05:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_table`
--

CREATE TABLE `buku_table` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis_buku` varchar(255) NOT NULL,
  `tahun_terbit` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_table`
--

INSERT INTO `buku_table` (`id_buku`, `judul_buku`, `penulis_buku`, `tahun_terbit`, `deskripsi`, `gambar`, `tag`, `bahasa`) VALUES
(1, 'asdasda', 'dasdsa', 1998, '2asdsd', './assets/POTO/1637511230-asdasda.png', '[\"Pemrograman\",\"Website\",\"Java\",\"OOP\",\"MVC\",\"Kalkulus\",\"Lainnya\"]', 'Indonesia'),
(2, 'wqewq', 'sda', 2019, 'asdsa', './assets/POTO/1637511617-wqewq.png', '[\"Pemrograman\",\"Website\",\"Java\",\"OOP\",\"MVC\",\"Kalkulus\",\"Lainnya\"]', 'Indonesia'),
(3, 'asdasda', 'rtertre', 2202, 'sadsa', './assets/POTO/1637511788-asdasda.png', '[\"Pemrograman\",\"Website\",\"Java\",\"OOP\",\"MVC\",\"Kalkulus\",\"Lainnya\"]', 'Indonesia'),
(4, 'asdasda', 'rtertre', 3243, 'SDADSA', './assets/POTO/1637512353-asdasda.png', '[\"Pemrograman\",\"Website\",\"Java\",\"OOP\",\"MVC\",\"Kalkulus\",\"Lainnya\"]', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_table`
--
ALTER TABLE `buku_table`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_table`
--
ALTER TABLE `buku_table`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
