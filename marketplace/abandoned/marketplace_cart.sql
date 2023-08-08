-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2022 at 06:38 PM
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
-- Table structure for table `marketplace_cart`
--

DROP TABLE IF EXISTS `marketplace_cart`;
CREATE TABLE IF NOT EXISTS `marketplace_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_new_price` decimal(5,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_cart`
--

INSERT INTO `marketplace_cart` (`id`, `product_name`, `product_new_price`, `product_image`, `product_detail`, `product_quantity`) VALUES
(16, 'RawBoost Mixers Gut (Instinct)', '23.99', '../images/petproduct5.webp', 'Made with cage-free chicken plus vibrant, functional whole-food ingredients likes pumpkin, sweet potato, chicory root, apple cider vinegar & probiotics. Top your kibble with freeze-dried raw for fiber and live, natural probiotics to help maintain digestive health.', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
