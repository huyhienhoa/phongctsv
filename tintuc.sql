-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 05:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tt_admin`
--

CREATE TABLE IF NOT EXISTS `tt_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vaitro` enum('quanly','nhanvien') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_filedinhkem`
--

CREATE TABLE IF NOT EXISTS `tt_filedinhkem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tt_filedinhkem_tt_tintuc1_idx` (`tintuc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_hinhanhslider`
--

CREATE TABLE IF NOT EXISTS `tt_hinhanhslider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slider_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tt_hinhanhslider_tt_slider_idx` (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_loaitin`
--

CREATE TABLE IF NOT EXISTS `tt_loaitin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motangangon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anhminhhoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_slider`
--

CREATE TABLE IF NOT EXISTS `tt_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motangangon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_tintuc`
--

CREATE TABLE IF NOT EXISTS `tt_tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motangangon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `anhminhhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaysua` datetime DEFAULT NULL,
  `noibat` tinyint(1) NOT NULL,
  `luotxem` int(11) DEFAULT '0',
  `loaitin_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tt_tintuc_tt_loaitin1_idx` (`loaitin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tt_user`
--

CREATE TABLE IF NOT EXISTS `tt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
