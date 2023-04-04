-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 04, 2023 at 02:53 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komikci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_komik`
--

CREATE TABLE `tb_komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_komik`
--

INSERT INTO `tb_komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Japan', 'NarutoCoverTankobon1.jpeg', NULL, NULL),
(2, 'One Piece', 'one-piece', 'Eichiro Oda', 'Gramedia', 'onepiece.jpeg', NULL, NULL),
(3, 'One Piece Eps 21', 'one-piece-eps-21', 'Hans Teams', 'Gramedia', 'onepiece.jpeg', '2023-04-03 18:45:04', '2023-04-03 18:45:04'),
(4, 'asd', 'asd', 'asd', 'asd', 'asd', '2023-04-03 18:49:44', '2023-04-03 18:49:44'),
(5, 'sad', 'sad', 'sad', 'sad', 'sad', '2023-04-03 18:50:44', '2023-04-03 18:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_komik`
--
ALTER TABLE `tb_komik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_komik`
--
ALTER TABLE `tb_komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
