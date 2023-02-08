-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 09:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagenation-tutor-system-01-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `price`, `model`) VALUES
(1, 'GIZMORE Multimedia Speaker with Remote Control, Black', 'Kshs15.72', '2020'),
(2, 'Black Google Nest Mini', 'Kshs41.11', '2021'),
(3, 'Black Digital Hand Band, Packaging Type: Box', 'Kshs21.77', '2019'),
(4, 'Lenovo IdeaPad 3 Intel Celeron N4020 14\'\' HD ', 'Kshs356.59', '2021'),
(5, 'JBL Airpods', 'Khs27.81', '2020'),
(6, 'Black Google Nest Mini', 'Khs41.11', '2021'),
(7, 'Black Digital Hand Band, Packaging Type: Box', 'Khs21.77', '2019'),
(8, 'Lenovo IdeaPad 3 Intel Celeron N4020 14\'\' HD ', 'Kshs356.59', '2021'),
(9, 'Dell New Inspiron 3515 Laptop', 'Khs537.48', '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
