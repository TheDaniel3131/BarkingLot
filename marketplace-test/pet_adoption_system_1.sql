-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2022 at 04:35 PM
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
  `product_name` int(100) NOT NULL,
  `product_new_price` decimal(5,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_product`
--

DROP TABLE IF EXISTS `marketplace_product`;
CREATE TABLE IF NOT EXISTS `marketplace_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_new_price` decimal(5,2) NOT NULL,
  `product_old_price` decimal(5,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_product`
--

INSERT INTO `marketplace_product` (`id`, `product_name`, `product_new_price`, `product_old_price`, `product_image`, `product_detail`) VALUES
(1, 'Dog\'s Milk (K9 Natural)', '8.99', '9.99', '../images/petproduct1.webp', 'Lactose-Free for easy digestion.'),
(2, 'Puff Pastry Roll - Chicken Cheese (Churu Bites)', '11.99', '12.99', '../images/petproduct2.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.'),
(3, 'Puff Pastry Roll - Chicken Salmon (Churu Bites)', '14.99', '15.99', '../images/petproduct3.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.'),
(4, 'RawBoost Mixers Gut (Instinct)', '23.99', '24.99', '../images/petproduct5.webp', 'Made with cage-free chicken plus vibrant, functional whole-food ingredients likes pumpkin, sweet potato, chicory root, apple cider vinegar & probiotics. Top your kibble with freeze-dried raw for fiber and live, natural probiotics to help maintain digestive health.'),
(5, 'Ziwi Peak\'s Provenance Series Canned Food (Otago Valley)', '7.99', '8.99', '../images/petproduct6.webp', 'Beef, Beef Soup, Venison, Whole Southern Blue Cod, Sheep Trim, Beef Kidney, Sheep Lung, New Zealand Green Mussels, Sheep Plasma, Deer Tribe, Cod, Lecithin, Beef Liver, Deer Lung, Beef Bone, Lamb Liver , sheep kidney, lamb, deer kidney, minerals (dipotassium hydrogen phosphate, magnesium sulfate. Zinc amino acid complex, iron amino acid complex, copper amino acid complex, selenium yeast, manganese amino acid complex), deer bone, dried kelp, sheep Bone, salt, vitamins (vitamin E supplement, thiamine mononitrate, vitamin B5 supplement, pyridoxine hydrochloride, vitamin D3 supplement, folic acid).'),
(6, 'Molar Dried Sweet Potatoes (Crump\'s Naturals)', '220.00', '275.60', '../images/petproduct7.webp', 'One of the most popular foods, sweet potatoes grown in North America are sliced and slowly roasted, resulting in a tough texture. Single ingredient. Use fresh sweet potatoes - suitable for dogs allergic to meat protein'),
(7, 'Duck, Cantaloupe & Pumpkin Canned Food (Farmina N&D)', '35.99', '36.99', '../images/petproduct8.webp', 'N&D Pumpkin Dog Duck & Pumpkin Recipe is formulated to meet the nutritional levels established by the AAFCO Dog Food Nutrient Profiles for maintenance. 100% Satisfaction Guaranteed.'),
(8, 'Freeze Cheese Cubes Dried Food (PureBites)', '220.00', '275.60', '../images/petproduct9.webp', 'All Natural, Single Origin - 100% Cheddar Cheese High protein and excellent source of calcium Freeze-dried - preserves natural nutrients and freshness High palatability - dogs will love it.'),
(9, 'Whole Grain Salmon Dog Food (Go! Solutions)', '24.99', '25.99', '../images/petproduct10.webp', 'GO! SOLUTIONS DIGESTION + GUT HEALTH includes a distinctive mix of fibre-rich ancient grains, a three-yeast blend, and stable probiotics to help maintain a healthy gut and happy dog.');

-- --------------------------------------------------------

--
-- Table structure for table `users_information`
--

DROP TABLE IF EXISTS `users_information`;
CREATE TABLE IF NOT EXISTS `users_information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `country` enum('my','sg') NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_information`
--

INSERT INTO `users_information` (`id`, `username`, `email`, `phonenumber`, `country`, `homeaddress`, `password`, `dob`) VALUES
(47, '1234', '1234@gmail.com', '1233443', 'my', '23,taman', '0c0e89a62bc42701ceaaecde0e50a39b', '2001-12-12'),
(45, 'Admin', 'admin@gmail.com', '0123456789', 'my', '12, Taman ABC', '0c0e89a62bc42701ceaaecde0e50a39b', '2012-12-12'),
(46, '123', '123@gmail.com', '1233443', 'my', '123, Taman You', '0c0e89a62bc42701ceaaecde0e50a39b', '1995-11-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
