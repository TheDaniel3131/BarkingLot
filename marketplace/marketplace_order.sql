-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 26, 2022 at 06:55 PM
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
-- Database: `pet_adoption_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_order`
--

DROP TABLE IF EXISTS `marketplace_order`;
CREATE TABLE IF NOT EXISTS `marketplace_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` enum('Malaysia','Singapore') NOT NULL,
  `state` enum('Negeri Sembilan','Pahang','Johor','Kedah','Kelantan','Kuala Lumpur','Melaka','Perak','Perlis','Pulau Pinang','Sabah','Sarawak','Selangor','Central Region','East Region','North Region','North-East Region','West Region') NOT NULL,
  `zip` int(10) NOT NULL,
  `paymentmethod` enum('Credit card','Debit card') NOT NULL,
  `cc_name` varchar(50) NOT NULL,
  `cc_number` varchar(20) NOT NULL,
  `cc_expiration` varchar(5) NOT NULL,
  `cc_cvv` int(3) NOT NULL,
  `total_product` varchar(255) NOT NULL,
  `total_price` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_order`
--

INSERT INTO `marketplace_order` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `country`, `state`, `zip`, `paymentmethod`, `cc_name`, `cc_number`, `cc_expiration`, `cc_cvv`, `total_product`, `total_price`) VALUES
(20, 'Jackin', 'Fu', '12312@gmail.com', '013-123-1234', 'dhhhffff', 'Malaysia', 'Melaka', 71000, 'Credit card', 'CIMB', '1111-1111-1111-1111', '12/24', 145, 'Dog Milk (K9 Natural) (2 ), Puff Pastry Roll - Chicken Cheese (Churu Bites) (1 )', '41.77');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
