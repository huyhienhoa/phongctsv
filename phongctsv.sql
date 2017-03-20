-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 10:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phongctsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tt_filedinhkem`
--

CREATE TABLE `tt_filedinhkem` (
  `id` int(11) NOT NULL,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_hinhanhslider`
--

CREATE TABLE `tt_hinhanhslider` (
  `id` int(11) NOT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_loaitin`
--

CREATE TABLE `tt_loaitin` (
  `id` int(11) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motangangon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anhminhhoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_slider`
--

CREATE TABLE `tt_slider` (
  `id` int(11) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motangangon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_tintuc`
--

CREATE TABLE `tt_tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motangangon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `anhminhhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaysua` datetime DEFAULT NULL,
  `noibat` tinyint(1) NOT NULL,
  `luotxem` int(11) DEFAULT '0',
  `loaitin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tt_user`
--

CREATE TABLE `tt_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `vaitro` enum('quanly','nhanvien') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'nhanvien'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tt_user`
--

INSERT INTO `tt_user` (`id`, `username`, `password_hash`, `password_reset_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `vaitro`) VALUES
(1, 'admin', '$2y$13$EUWkdLhe14UKnrGLkN/7z.iCeFIH3pZDflPCfnOH6U7ZxoKcTRsBS', NULL, 'admin@123.c', 'hKLBJdAYo6wd3Vl5rrOmhc4aKbj22SSn', 10, 1482384259, 1482384259, 'nhanvien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tt_filedinhkem`
--
ALTER TABLE `tt_filedinhkem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tt_filedinhkem_tt_tintuc1_idx` (`tintuc_id`);

--
-- Indexes for table `tt_hinhanhslider`
--
ALTER TABLE `tt_hinhanhslider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tt_hinhanhslider_tt_slider_idx` (`slider_id`);

--
-- Indexes for table `tt_loaitin`
--
ALTER TABLE `tt_loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_slider`
--
ALTER TABLE `tt_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_tintuc`
--
ALTER TABLE `tt_tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tt_tintuc_tt_loaitin1_idx` (`loaitin_id`);

--
-- Indexes for table `tt_user`
--
ALTER TABLE `tt_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tt_filedinhkem`
--
ALTER TABLE `tt_filedinhkem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt_hinhanhslider`
--
ALTER TABLE `tt_hinhanhslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt_loaitin`
--
ALTER TABLE `tt_loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt_slider`
--
ALTER TABLE `tt_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt_tintuc`
--
ALTER TABLE `tt_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt_user`
--
ALTER TABLE `tt_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tt_filedinhkem`
--
ALTER TABLE `tt_filedinhkem`
  ADD CONSTRAINT `fk_tt_filedinhkem_tt_tintuc1` FOREIGN KEY (`tintuc_id`) REFERENCES `tt_tintuc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tt_hinhanhslider`
--
ALTER TABLE `tt_hinhanhslider`
  ADD CONSTRAINT `fk_tt_hinhanhslider_tt_slider` FOREIGN KEY (`slider_id`) REFERENCES `tt_slider` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tt_tintuc`
--
ALTER TABLE `tt_tintuc`
  ADD CONSTRAINT `fk_tt_tintuc_tt_loaitin1` FOREIGN KEY (`loaitin_id`) REFERENCES `tt_loaitin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
