-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2016 at 02:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baby_nutrition`
--

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE IF NOT EXISTS `map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `lat`, `lng`, `title`, `keywords`) VALUES
(1, 23.8102, 90.4312, 'Apollo Hospital', 'apollo hospital'),
(2, 23.8045, 90.4152, 'United Hospital Limited', 'united limited'),
(3, 23.7733, 90.3688, 'Dhaka Shishu Hospital', 'dhaka shishu '),
(4, 23.7255, 90.3975, 'Dhaka Medical College and Hospital', 'dhaka medical'),
(5, 24.6685, 90.404, 'Community Based Medical College', 'Community Based'),
(6, 23.7389, 90.3949, 'Bangabandhu Sheikh Mujib Medical University', 'Bangabandhu Sheikh Mujib'),
(7, 23.7457, 90.3735, 'Ibn sina medical imaging  center', 'Ibn sina imaging  center');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
