-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2022 at 08:14 AM
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
  `gender` enum('Male','Female') NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` enum('Under 18','18 - 24','25 - 34','35 - 44','45 and older') NOT NULL,
  `reason` enum('companion','gift','hunting','breeding','guard','senior','child') NOT NULL,
  `allergy` enum('Yes','No','Sometimes') NOT NULL,
  `number` int(10) NOT NULL,
  `dropdown` enum('Apt','Condo','Flat','Bungalow','Semi Detached','Link House','Other') NOT NULL,
  `comments` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petadoption`
--

INSERT INTO `petadoption` (`id`, `day`, `month`, `year`, `dogName`, `firstName`, `lastName`, `gender`, `address`, `town`, `postcode`, `phone`, `email`, `age`, `reason`, `allergy`, `number`, `dropdown`, `comments`) VALUES
(4, '16', 'february', '2014', 'daniel', 'Yes', 'smith', 'Female', '19-09 klang ', 'Sabah', '9000', '+60178958123', 'test@mail.com', '35 - 44', 'hunting', 'Sometimes', 1, 'Semi Detached', 'adadwa'),
(5, '4', 'february', '2023', 'Jack', 'Lim', 'Poh Poh', 'Female', 'Bukit CB 123', 'KL', '58200', '+60178958556', 'jack@mail.com', '25 - 34', 'hunting', 'Sometimes', 5, 'Condo', 'dawdaw'),
(6, '17', 'february', '2022', 'Lily', 'Joe', 'Poh', 'Female', 'Bukit CB 123', 'KL', '58200', '+60178958123', 'vishal@gmail.com', '35 - 44', 'hunting', 'Yes', 9, 'Bungalow', 'I will Train my pet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
