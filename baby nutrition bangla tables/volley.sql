-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 05:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baby_nutrition_bangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `volley`
--

CREATE TABLE IF NOT EXISTS `volley` (
  `si` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(6) NOT NULL,
  PRIMARY KEY (`si`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `volley`
--

INSERT INTO `volley` (`si`, `name`, `age`, `password`, `username`) VALUES
(1, '0', 21, '0', '0'),
(2, 'himelsrah', 21, 'qwery', 'him'),
(3, 'samiul alim', 22, '1234', 'pratic'),
(4, 'shahid ahsa', 27, '12345', 'shahid'),
(5, 'nawshin ras', 21, '12345', 'oyshee'),
(6, 'à¦¹à¦¿à¦®à§', 21, 'à¦²à¦¦à¦²à', 'à¦à¦¸');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
