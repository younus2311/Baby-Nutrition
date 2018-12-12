-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 05:00 PM
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
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `occupation` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fn`, `ln`, `username`, `password`, `occupation`, `email`, `mobile`) VALUES
(1, 'Samiul Alim ', 'pratik', 'Samiul Alim Pratik', 'pass11', '2', 'pratik.anwar@gmail.com', '01689583182'),
(3, 'à¦¸à¦¾à¦®à¦¿à¦‰à¦² à¦†à¦²à§€à¦®', 'à¦ªà§à¦°à¦¤à§€à¦•', 'à¦¸à¦¾à¦®à¦¿à¦‰à¦²', 'à¦ªà¦¾à¦¸à§§à§§', '1', 'samiul.pratik@gmail.com', 'à§¦à§§à§¬à§®à§¯à§«à§®à§©à§§à§®à§¨'),
(4, 'à¦¸à¦¾à¦®à¦¿à¦‰à¦² à¦†à¦²à§€à¦®', 'à¦ªà§à¦°à¦¤à§€à¦•', 'à¦¸à¦¾à¦®à¦¿à¦‰à¦²', 'à¦ªà¦¾à¦¸à§§à§§', '1', 'samiul.pratik@gmail.com', 'à§¦à§§à§¬à§®à§¯à§«à§®à§©à§§à§®à§¨'),
(5, 'সামিউল আলীম', 'প্রতীক', 'সামিউল', 'পাস১১', '1', 'pratik.anwar@gmail.com', '০১৬৮৯৫৮৩১৮২'),
(6, 'হিমেল', 'রহমান', 'হিমেল', 'পাস১১', '1', 'shahidur.himel@hotmail.com', '০১৬৮৯৫৮৩১৮২'),
(7, 'আব্দুল্লাহ', 'আল মামুন', 'মামুন', 'পাস১১', '2', 'shahidur.himel@hotmail.com', '০১৬৮৯৫৮৩১৮২'),
(8, 'আশরাফ আলি', 'মুগ্ধ', 'মুগ্ধ', 'পাস১১', '2', 'shahidur.himel@hotmail.com', '০১৬৮৯৫৮৩১৮২');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
