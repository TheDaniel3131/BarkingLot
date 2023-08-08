-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2022 at 07:57 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

DROP TABLE IF EXISTS `carddetails`;
CREATE TABLE IF NOT EXISTS `carddetails` (
  `id` int NOT NULL,
  `FirstName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Gender` enum('m','f') CHARACTER SET utf8 NOT NULL,
  `Address` text CHARACTER SET utf8 NOT NULL,
  `City` text CHARACTER SET utf8 NOT NULL,
  `State` text CHARACTER SET utf8 NOT NULL,
  `Zipcode` text CHARACTER SET utf8 NOT NULL,
  `CardholderName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `CardNumber` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Expirydate` text CHARACTER SET utf8 NOT NULL,
  `cvv` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`id`, `FirstName`, `LastName`, `Gender`, `Address`, `City`, `State`, `Zipcode`, `CardholderName`, `CardNumber`, `Expirydate`, `cvv`) VALUES
(0, 'DSDSD', 'SDSDSDS', 'm', 'SDSDSD', 'SDSDS', 'SDSDSDS', '43444', 'wew', '32322', '2022', 233);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
