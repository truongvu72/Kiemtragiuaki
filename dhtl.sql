-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 09:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhtl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`) VALUES
(3, 'admin', 'admin@tlu.vn', '123'),
(4, 'admin1', 'admin1@tlu.vn', '1233'),
(5, 'truongtlu', 'truong@tlu.edu..vn', '111'),
(6, 'admin6', 'admin6@tlu.vn', '6'),
(7, 'admin7', 'admin7@tlu.vn', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giangvien`
--

CREATE TABLE `tbl_giangvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `bomon` varchar(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL,
  `mota` varchar(50) NOT NULL,
  `thumbnail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_giangvien`
--

INSERT INTO `tbl_giangvien` (`id`, `parent_id`, `hovaten`, `email`, `sdt`, `bomon`, `chucvu`, `mota`, `thumbnail`) VALUES
(1, 1, 'Kieu Tuan Dung(ThS.)', 'dungkt@tlu.edu.vn', 1345, 'Công nghệ Web', 'Trưởng khoa', 'abc', 'http://cse.tlu.edu.vn/Portals/0/2016/Kieu%20Tuan%20Dung.jpg'),
(29, 9, 'Nguyen Thanh Tung(PGS.Ts)', 'ntt@tlu.vn', 1123644, 'toán tin', 'Trưởng Khoa', 'dep trai', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/Tung%20VIASM.jpg'),
(33, 4, 'Nguyen Huu Quynh(PGS.TS)', 'quynhnh@tlu.edu.vn', 2258522, 'Học Máy', 'Giám đốc TTTH kiêm Phó trưởng khoa CNTT', 'Người đi đầu trong việc xây dựng khoa CNTT trường ', 'http://cse.tlu.edu.vn/Portals/0/Nguyen%20Huu%20Quynh.jpg'),
(34, 5, 'Ly Anh Tuan(TS.)', 'lat@tlu.edu.vn', 225822312, 'Công Nghệ Phần Mềm', ' trưởng bộ môn', 'Người đi đầu trong việc xây dựng khoa CNTT trường ', 'http://cse.tlu.edu.vn/Portals/0/Users/Ly_Anh_Tuan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khoa`
--

CREATE TABLE `tbl_khoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoa` varchar(50) NOT NULL,
  `maytruc` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`id`, `tenkhoa`, `maytruc`, `diachi`) VALUES
(3, 'Khoa Cơ Khí', '145266987', '175 Tây Sơn'),
(4, 'Khoa Cơ Khí', '124.125.126', '175 Tây Sơn'),
(5, 'Khoa CNTT', '124.147.858', '175 Tây Sơn'),
(6, 'Khoa Kinh Te', '147.258.369', '175 Tây Sơn'),
(7, 'Khoa Biển', '789.456.321', '175 Tây Sơn'),
(8, 'Khoa Môi Trường', '159.357.846', '175 Tây Sơn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_giangvien`
--
ALTER TABLE `tbl_giangvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_id` (`parent_id`);

--
-- Indexes for table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_giangvien`
--
ALTER TABLE `tbl_giangvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_giangvien`
--
ALTER TABLE `tbl_giangvien`
  ADD CONSTRAINT `tbl_giangvien_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `tbl_khoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
