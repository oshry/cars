-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2015 at 01:06 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `pos` int(6) NOT NULL AUTO_INCREMENT,
  `model` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `continent` varchar(128) NOT NULL,
  KEY `pos` (`pos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`pos`, `model`, `price`, `image`, `continent`) VALUES
(1, 'Opel Corsa', 700000, '111', 'Europe1'),
(2, 'Opel Astra', 1000001, '', 'American'),
(3, 'Mazda 3', 120000, '', 'Asia'),
(5, 'Volvo', 180000, '', 'Europe'),
(6, 'Toyota Corolla', 125000, '', 'Asia'),
(9, 'Mazda MX5', 120000, 'lala.png', 'Japan'),
(19, 'Volvo', 1801, '', 'Europe'),
(20, 'Toyota Corolla', 1250, '', 'Asia'),
(32, 'Ford', 100000, '', 'American'),
(33, 'Honda s200', 23222, '', ''),
(35, 'MG', 100001, '', 'Englend'),
(38, 'SUBARU', 0, '', ''),
(39, '1111', 0, '', ''),
(40, 'ma', 0, '', ''),
(41, 'ma', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cars1`
--

CREATE TABLE IF NOT EXISTS `cars1` (
  `pos` int(6) NOT NULL AUTO_INCREMENT,
  `model` varchar(128) NOT NULL,
  `price` varchar(120) NOT NULL,
  `image` varchar(128) NOT NULL,
  `continent` varchar(128) NOT NULL,
  KEY `pos` (`pos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cars1`
--

INSERT INTO `cars1` (`pos`, `model`, `price`, `image`, `continent`) VALUES
(1, 'Opel Corsa', '70,000', '', 'Europe'),
(2, 'Mitsubishi Lancer', '100,000', '', 'Asia'),
(3, 'Mazda 3', '120,000', '', 'Asia'),
(4, 'Honda Civic', '70,000', '', 'Asia'),
(5, 'Volvo', '180,000', '', 'Europe'),
(6, 'Toyota Corolla', '125,000', '', 'Asia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
