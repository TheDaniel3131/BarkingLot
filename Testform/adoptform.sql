-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2022 at 08:31 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoptform`
--

-- --------------------------------------------------------

--
-- Table structure for table `petadoption`
--

DROP TABLE IF EXISTS `petadoption`;
CREATE TABLE IF NOT EXISTS `petadoption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` enum('day','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `month` enum('month','january','february','march','april','may','june','july','august','september','october','november','december') NOT NULL,
  `year` enum('year','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022','2023') NOT NULL,
  `dogName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` enum('1','2') NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` enum('1','2','3','4','5') NOT NULL,
  `reason` enum('companion','gift','hunting','breeding','guard','senior','child') NOT NULL,
  `allergy` enum('1','2','3') NOT NULL,
  `housing` int(50) NOT NULL,
  `dropdown` enum('apt','house','other') NOT NULL,
  `comments` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
