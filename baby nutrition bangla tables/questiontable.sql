-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 04:59 PM
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
-- Table structure for table `questiontable`
--

CREATE TABLE IF NOT EXISTS `questiontable` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `answer` varchar(1000) NOT NULL DEFAULT 'n/a',
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `questiontable`
--

INSERT INTO `questiontable` (`sl`, `question`, `answer`) VALUES
(16, 'how can I feed my baby when it is suffering from fever??', 'call me at 7 pm in this number 01521103117'),
(17, 'hello', 'n/a'),
(18, 'rrgg', 'n/a'),
(19, 'rrgg', 'n/a'),
(20, 'hsklfv', 'n/a'),
(21, 'fkklg', 'n/a'),
(22, 'à¦†à¦®à¦¿ à¦­à¦¾à¦²à§‹', 'n/a'),
(23, 'ami jante chai', 'n/a'),
(24, '', 'n/a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
