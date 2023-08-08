-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2022 at 12:56 PM
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
-- Database: `sdp_petadoptionsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `book_time` time NOT NULL,
  `commnet` varchar(2000) NOT NULL,
  `appoint_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `employee_id`, `book_date`, `book_time`, `commnet`, `appoint_status`) VALUES
(2, 6, '2022-08-10', '15:44:00', 'Booking Time', '2'),
(3, 5, '2022-08-17', '03:43:00', 'Booking Time', '1');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_bookform`
--

DROP TABLE IF EXISTS `appointment_bookform`;
CREATE TABLE IF NOT EXISTS `appointment_bookform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comments` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_bookform`
--

INSERT INTO `appointment_bookform` (`id`, `fullName`, `phone`, `email`, `date`, `time`, `comments`) VALUES
(1, 'Jackin Fu  yi Qing', '60178958123', 'test@mail.com', '2022-08-05', '02:17:00', ''),
(2, 'Jackin Fu  yi Qing', '+60178958123', 'test@mail.com', '2022-08-04', '01:33:00', 'dwdaw'),
(3, 'Vishal Poh Ting Feng', '+60178958556', 'vishal@gmail.com', '2022-08-06', '16:15:00', 'can\'t wait anymore');

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

DROP TABLE IF EXISTS `carddetails`;
CREATE TABLE IF NOT EXISTS `carddetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` enum('m','f') NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Zipcode` text NOT NULL,
  `CardholderName` varchar(50) NOT NULL,
  `CardNumber` varchar(50) NOT NULL,
  `Expirydate` text NOT NULL,
  `cvv` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`id`, `FirstName`, `LastName`, `Gender`, `Address`, `City`, `State`, `Zipcode`, `CardholderName`, `CardNumber`, `Expirydate`, `cvv`) VALUES
(1, 'DSDSD', 'SDSDSDS', 'm', 'SDSDSD', 'SDSDS', 'SDSDSDS', '43444', 'wew', '32322', '2022', 233),
(2, 'asdf', 'asdf', 'm', 'asdf,adfasdf,asdf', 'asdf', 'asdfs', '12312', 'adf', '1232', '2022', 123);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'Apartment'),
(2, 'Condominium'),
(3, 'Flat'),
(4, 'Bungalow'),
(5, 'Semi Detached'),
(6, 'Link House'),
(7, 'Other'),
(8, 'Kampung');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(15) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `reside_id` int(11) NOT NULL,
  `address` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `request_date` date NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `password`, `reside_id`, `address`, `request_date`, `role`) VALUES
(1, 'staff', 'staff@barkinglot.com', '0123456780', 'Staff123@', 3, '123,123,123,123', '2020-10-31', 1),
(2, 'admin', 'admin@barkinglot.com', '0123456789', 'Admin123@', 4, '123, JALAN 1/3 ABC, TAMAN ABC, 12345 ABCD, CJB', '2020-08-31', 1),
(3, 'test', 'test@gmail.com', '0123456789', 'Test1234@', 3, '123,123,123,123', '2020-12-31', 2),
(4, 'daniel', 'daniel@barkinglot.com', '012-343-2342', 'Daniel123@', 4, '234,2,3423,423,432', '2022-08-27', 2),
(5, 'jackin', 'jackin@gmail.com', '012-423-3423', 'Jackin123@', 6, 'asd,asd,asd,asd', '2022-08-24', 2),
(6, 'kiayi', 'kychuar@gmail.com', '012-343-4234', 'Kiayi123@', 5, 'abc, taman tun perak, jalan tun preaof,sds', '2022-08-28', 2),
(7, 'andrew', 'andrew@barkinglot.com', '012-342-2342', 'Andrew123@', 7, '123,abc,abc', '2022-09-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Username` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Response` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Username`, `Email`, `Phone`, `Subject`, `Message`, `Response`) VALUES
('asdf', 'asdf@gmail.com', '012-342-4232', 'adsf', 'adsf', NULL),
('dan', 'daniel@gmail.com', '010-233-5132', 'C', 'Poor Product or Service', 'Thanks so much for sharing your experience with us. We hope to see you again soon.'),
('jackinhuatla', 'jackinfu@gmail.com', '011-222-3432', 'A', 'Unavailable or Out of Stock Product', 'Thank you so much for taking the time to leave an excellent rating. We really appreciate your business. Please let us know what we can do for you in the future.'),
('jason', 'jason@gmail.com', '012-342-4232', 'asdfds', 'jason', 'yes?'),
('kiayige', 'kychuar@gmail.com', '010-900-6300', 'B', 'Uninterested Service Rep', 'We really appreciate you taking the time to share your rating with us. We look forward to seeing you again soon.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_nonmember`
--

DROP TABLE IF EXISTS `feedback_nonmember`;
CREATE TABLE IF NOT EXISTS `feedback_nonmember` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`Username`),
  KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_nonmember`
--

INSERT INTO `feedback_nonmember` (`Username`, `Email`, `Phone`, `Subject`, `Message`) VALUES
('Andrew', 'andrew@gmail.com', '012-654-1231', 'D', 'Lack of Follow Up'),
('chuar kia yi', 'chuarkiayi@gmail.com', '012-342-4234', 'hi', 'name is chuar'),
('chuarkiayi:)', 'chuarkiayi@gmail.com', '012-342-4234', 'hi', 'my name is chuar kia yi'),
('hallo', 'hallo@gmail.com', '012-342-2342', 'halo', 'my name is halo'),
('jackinfuyiqing', 'jackinfuqiying@gmail.com', '011-234-2343', 'JACKIN FU YI QING', 'HI. MY NAME IS JACKIN.'),
('Johnson', 'johnson@gmail.com', '010-233-5132', 'C', 'Website Problem');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
CREATE TABLE IF NOT EXISTS `leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `leave_from` date NOT NULL,
  `dog_name` varchar(255) NOT NULL,
  `leave_description` text NOT NULL,
  `leave_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `leave_id` (`leave_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `employee_id`, `leave_id`, `leave_from`, `dog_name`, `leave_description`, `leave_status`) VALUES
(1, 4, 1, '2022-08-11', 'Milo', 'nothing', 2),
(2, 5, 2, '2222-05-29', 'jack', 'idk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

DROP TABLE IF EXISTS `leave_type`;
CREATE TABLE IF NOT EXISTS `leave_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_type`) VALUES
(1, 'Pet & Companion'),
(2, 'Gift'),
(3, 'Hunting Dog'),
(4, ' Breeding Dog'),
(5, 'Guard Dog'),
(6, 'For a Senior'),
(7, 'For a Child');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_cart`
--

DROP TABLE IF EXISTS `marketplace_cart`;
CREATE TABLE IF NOT EXISTS `marketplace_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_new_price` decimal(6,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_cart`
--

INSERT INTO `marketplace_cart` (`id`, `product_name`, `product_new_price`, `product_image`, `product_detail`, `product_quantity`) VALUES
(42, 'Dog Milk (K9 Natural)', '8.99', '../images/petproduct1.webp', 'Lactose-Free for easy digestion.', 2),
(46, 'Puff Pastry Roll - Chicken Cheese (Churu Bites)', '11.99', '../images/petproduct2.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.', 1),
(47, 'Puff Pastry Roll - Chicken Salmon (Churu Bites)', '14.99', '../images/petproduct3.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.', 1),
(48, 'Molar Dried Sweet Potatoes (Crump Naturals)', '24.00', '../images/petproduct7.webp', 'One of the most popular foods, sweet potatoes grown in North America are sliced and slowly roasted, resulting in a tough texture. Single ingredient. Use fresh sweet potatoes - suitable for dogs allergic to meat protein', 1),
(49, 'Whole Grain Salmon Dog Food (Go! Solutions)', '24.99', '../images/petproduct10.webp', 'GO! SOLUTIONS DIGESTION + GUT HEALTH includes a distinctive mix of fibre-rich ancient grains, a three-yeast blend, and stable probiotics to help maintain a healthy gut and happy dog.', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_order`
--

INSERT INTO `marketplace_order` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `country`, `state`, `zip`, `paymentmethod`, `cc_name`, `cc_number`, `cc_expiration`, `cc_cvv`, `total_product`, `total_price`) VALUES
(1, 'Jackin', 'Fu', '12312@gmail.com', '013-123-1234', 'dhhhffff', 'Malaysia', 'Melaka', 71000, 'Credit card', 'CIMB', '1111-1111-1111-1111', '12/24', 145, 'Dog Milk (K9 Natural) (2 ), Puff Pastry Roll - Chicken Cheese (Churu Bites) (1 )', '41.77'),
(2, 'sdad', 'asdasd', 'dasdsa@gmail.com', '012-342-2321', 'block, 123-45, fansdf', 'Malaysia', 'Selangor', 44222, 'Credit card', 'asdas', '0943-2422-3432-3433', '02/32', 123, 'Whole Grain Salmon Dog Food (Go! Solutions) (1 ), Molar Dried Sweet Potatoes (Crump Naturals) (1 )', '61.93'),
(3, 'dani', 'haha', 'dani@haha.com', '012-432-3422', '12,434,42424', 'Malaysia', 'Sarawak', 352, 'Credit card', 'Maybank', '2342-3242-4234-3432', '03/24', 243, 'Puff Pastry Roll - Chicken Cheese (Churu Bites) (1 ), Whole Grain Salmon Dog Food (Go! Solutions) (1 ), Molar Dried Sweet Potatoes (Crump Naturals) (1 )', '74.64'),
(4, 'Thum', 'Yong Hui', 'thumyonghui@gmail.com', '012-342-3432', '12, ABC, JALAN ALOM, HAHA', 'Malaysia', 'Perak', 42305, 'Credit card', 'Maybank', '4234-4345-3453-2344', '02/23', 324, 'Puff Pastry Roll - Chicken Cheese (Churu Bites) (12 )', '162.51'),
(5, 'asd', 'asdas', 'asd@gmail.com', '012-423-4324', 'asdf,asdf,sd,fs,d', 'Malaysia', 'Pahang', 32423, 'Credit card', 'maybank', '3123-2342-4234-2342', '23/32', 234, '', '0.00'),
(6, 'asd', 'asd', 'asds@gmail.com', '012-423-4234', 'asdf,d,fsd,fsd,f', 'Malaysia', 'Selangor', 12322, 'Credit card', 'maybnak', '2344-2343-4234-4234', '02/23', 234, 'Dog Milk (K9 Natural) (2 ), Puff Pastry Roll - Chicken Cheese (Churu Bites) (1 )', '41.77'),
(7, 'jason', 'wong', 'jason@barkinglot.com', '012-342-4322', '12, jalan taman, jalan 123', 'Malaysia', 'Johor', 23123, 'Credit card', 'maybank', '0234-2343-4234-4234', '22/22', 234, 'Dog Milk (K9 Natural) (2 ), Puff Pastry Roll - Chicken Cheese (Churu Bites) (1 ), Puff Pastry Roll - Chicken Salmon (Churu Bites) (1 ), Molar Dried Sweet Potatoes (Crump Naturals) (1 ), Whole Grain Salmon Dog Food (Go! Solutions) (1 )', '109.59');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketplace_product`
--

INSERT INTO `marketplace_product` (`id`, `product_name`, `product_new_price`, `product_old_price`, `product_image`, `product_detail`) VALUES
(1, 'Dog Milk (K9 Natural)', '8.00', '9.00', '../images/petproduct1.webp', 'Lactose-Free for easy digestion.'),
(2, 'Puff Pastry Roll - Chicken Cheese (Churu Bites)', '11.99', '12.99', '../images/petproduct2.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.'),
(3, 'Puff Pastry Roll - Chicken Salmon (Churu Bites)', '14.99', '15.99', '../images/petproduct3.webp', 'Churu Bites are soft pillow-shaped natural chicken treats seasoned with natural flavors, green tea extract and vitamin E. No grains, preservatives or artificial colors. Each package includes eight individual packs to maintain maximum freshness.'),
(4, 'RawBoost Mixers Gut (Instinct)', '23.99', '24.99', '../images/petproduct5.webp', 'Made with cage-free chicken plus vibrant, functional whole-food ingredients likes pumpkin, sweet potato, chicory root, apple cider vinegar & probiotics. Top your kibble with freeze-dried raw for fiber and live, natural probiotics to help maintain digestive health.'),
(5, 'Ziwi Peak Provenance Series Canned Food (Otago Valley)', '7.00', '8.00', '../images/petproduct6.webp', 'Beef, Beef Soup, Venison, Whole Southern Blue Cod, Sheep Trim, Beef Kidney, Sheep Lung, New Zealand Green Mussels, Sheep Plasma, Deer Tribe, Cod, Lecithin, Beef Liver, Deer Lung, Beef Bone, Lamb Liver , sheep kidney, lamb, deer kidney, minerals (dipotassium hydrogen phosphate, magnesium sulfate. Zinc amino acid complex, iron amino acid complex, copper amino acid complex, selenium yeast, manganese amino acid complex), deer bone, dried kelp, sheep Bone, salt, vitamins (vitamin E supplement, thiamine mononitrate, vitamin B5 supplement, pyridoxine hydrochloride, vitamin D3 supplement, folic acid).'),
(6, 'Molar Dried Sweet Potatoes (Crump Naturals)', '24.00', '25.00', '../images/petproduct7.webp', 'One of the most popular foods, sweet potatoes grown in North America are sliced and slowly roasted, resulting in a tough texture. Single ingredient. Use fresh sweet potatoes - suitable for dogs allergic to meat protein'),
(7, 'Duck, Cantaloupe & Pumpkin Canned Food (Farmina N&D)', '35.99', '36.99', '../images/petproduct8.webp', 'N&D Pumpkin Dog Duck & Pumpkin Recipe is formulated to meet the nutritional levels established by the AAFCO Dog Food Nutrient Profiles for maintenance. 100% Satisfaction Guaranteed.'),
(8, 'Freeze Cheese Cubes Dried Food (PureBites)', '22.00', '25.99', '../images/petproduct9.webp', 'All Natural, Single Origin - 100% Cheddar Cheese High protein and excellent source of calcium Freeze-dried - preserves natural nutrients and freshness High palatability - dogs will love it.'),
(9, 'Whole Grain Salmon Dog Food (Go! Solutions)', '24.99', '25.99', '../images/petproduct10.webp', 'GO! SOLUTIONS DIGESTION + GUT HEALTH includes a distinctive mix of fibre-rich ancient grains, a three-yeast blend, and stable probiotics to help maintain a healthy gut and happy dog.');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petadoption`
--

INSERT INTO `petadoption` (`id`, `day`, `month`, `year`, `dogName`, `firstName`, `lastName`, `gender`, `address`, `town`, `postcode`, `phone`, `email`, `age`, `reason`, `allergy`, `number`, `dropdown`, `comments`) VALUES
(4, '16', 'february', '2014', 'daniel', 'Yes', 'smith', 'Female', '19-09 klang ', 'Sabah', '9000', '+60178958123', 'test@mail.com', '35 - 44', 'hunting', 'Sometimes', 1, 'Semi Detached', 'adadwa'),
(5, '4', 'february', '2023', 'Jack', 'Lim', 'Poh Poh', 'Female', 'Bukit CB 123', 'KL', '58200', '+60178958556', 'jack@mail.com', '25 - 34', 'hunting', 'Sometimes', 5, 'Condo', 'dawdaw'),
(6, '17', 'february', '2022', 'Lily', 'Joe', 'Poh', 'Female', 'Bukit CB 123', 'KL', '58200', '+60178958123', 'vishal@gmail.com', '35 - 44', 'hunting', 'Yes', 9, 'Bungalow', 'I will Train my pet'),
(7, '3', 'june', '2016', 'asd', 'dasd', 'asd', 'Male', 'fsdf,,fsdfsd,f', '123', '4234', '012321031', 'dasdioasd@gmai.com', '18 - 24', 'hunting', 'No', 3, 'Apt', 'fsdfsf'),
(8, '3', 'october', '2017', 'asdf', 'sdf', 'sdf', 'Male', 'asdfasdf@gmail.com', 'adsfdas', '3213', '012-234-42342', 'dassd@gmail.com', 'Under 18', 'companion', 'Yes', 2, 'Apt', '3424'),
(9, '3', 'october', '2017', 'asdf', 'sdf', 'sdf', 'Male', 'asdfasdf@gmail.com', 'adsfdas', '3213', '012-234-42342', 'dassd@gmail.com', 'Under 18', 'companion', 'Yes', 2, 'Apt', '3424');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Event Management System', 'info@sample.comm', '+6948 8542 623', '1602641160_JSAV-multiscreen_3ddbdd40-38d9-4b64-9cf2-5d0ef356f29c.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Admin,2=Staff',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_information`
--

DROP TABLE IF EXISTS `users_information`;
CREATE TABLE IF NOT EXISTS `users_information` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `country` enum('my','sg') NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `twitter` varchar(20) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_information`
--

INSERT INTO `users_information` (`id`, `username`, `email`, `phonenumber`, `country`, `homeaddress`, `password`, `dob`, `twitter`, `instagram`, `facebook`) VALUES
(1, 'test', 'test@gmail.com', '0123456789', 'my', '123,123,123,123', '03a1746f2dde26df15c75561752ca681', '2000-05-11', NULL, NULL, NULL),
(2, 'admin', 'admin@barkinglot.com', '0123456789', 'my', '123, JALAN 1/3 ABC, TAMAN ABC, 12345 ABCD, CJB', 'a43c27c2babefd68df8a694900f30a1c', '2000-02-29', NULL, NULL, NULL),
(3, 'staff', 'staff@barkinglot.com', '0123456780', 'my', '123,123,123,123', 'c3a4565fa4cd39fcbbe98e7178aef508', '2000-02-29', NULL, NULL, NULL),
(4, 'dan', 'daniel@barkinglot.com', '012-342-2342', 'my', 'adf,sdf,sd,sfd', 'cc0bf4cf8c5dba3282d8193ea7a6545a', '2000-05-29', '', '', ''),
(5, 'kiayige', 'kiayigorgor@gmail.com', '012-343-4234', 'my', 'abc, taman tun perak, jalan tun preaof,sds', '34049cd97a6b2fc73824bd9ed5bfe11b', '2002-08-22', '', '', ''),
(6, 'jackin', 'jackin@gmail.com', '012-423-3423', 'sg', 'asd,asd,asd,asd', '48854bc3c19567d5a192efe8f4341a7b', '2000-05-11', '', '', ''),
(7, 'admin', 'daniel@barkinglot.com', '012-342-3432', 'my', '12, abc, jalan abc, taman abc', 'Daniel123@', '2000-05-29', NULL, NULL, NULL),
(8, 'jason', 'jason@barkinglot.com', '012-432-4234', 'my', '12, taman abc, taman abc', 'e6c526ca6b3610ec58dc1588c5e9a11b', '2000-05-29', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `venue` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `duration` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue`, `address`, `description`, `duration`) VALUES
(1, 'Disco For Dogs', '93, Jalan Selaseh 11 Kampung Sentosa, Block B Paroi', 'Book now: barkinglot.help.my/dfd/book', 1),
(2, 'Find A Pet To Adopt Now! We Are Running Out Of Room!..', 'https://barkinglot.help.my', 'Good day, we need more people to adopt more pets because we are running out of room and people! Check them out right away and share this post for more exposure!', 2),
(3, 'Join Us Now! We Need Your Help! Pet Rescue Welfare Association.', 'https://www.paws.org.my/', 'Hey, barking lotters! We need your help.\r\nPet Rescue Welfare Association is currently looking for volunteers to help them rescue innocent pets. Join them now before it is too late!', 1),
(4, 'Take A Look At Our Latest Pet: Potato', 'https://barkinglot.help.my', 'This is our recent pet that add into our pet adoption list. His name is Potato. The Shiba Inu (æŸ´çŠ¬, Japanese: [É•iba inÉ¯]) is a breed of hunting dog from Japan. A small-to-medium breed, it is the smallest of the six original and distinct spitz breeds of dog native to Japan.', 2),
(5, 'Saving Pets One At A Time!', '11, Jalan 5/1 Taman Industri Selesa Jaya, Balakong, Selangor', 'Join event now: https://barkinglot.help.my/lod/book', 3),
(6, 'League of Doggos', '11, Jalan 5/1 Taman Industri Selesa Jaya, Balakong, Selangor', 'Join event now: https://barkinglot.help.my/lod/book', 2);

-- --------------------------------------------------------

--
-- Table structure for table `venue_booking`
--

DROP TABLE IF EXISTS `venue_booking`;
CREATE TABLE IF NOT EXISTS `venue_booking` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `venue_id` int(30) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-for verification,1=confirmed,2=canceled',
  PRIMARY KEY (`id`),
  KEY `venue_id` (`venue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_booking`
--

INSERT INTO `venue_booking` (`id`, `name`, `address`, `email`, `contact`, `venue_id`, `duration`, `datetime`, `status`) VALUES
(1, 'John Smith', 'Sample', 'asdasd@gmail.com', '+18456-5455-55', 2, '1 night', '2020-10-14 17:00:00', 1),
(7, 'Jackin Fu Yi Qing', '123, Taman Indah, 123,123', 'jackinfu@gmail.com', '012-3456789', 3, '2 hours', '2022-08-22 19:45:00', 2),
(8, '123', '123', '123', '123', 2, '123', '2022-08-22 19:51:00', 1),
(10, 'asdf', '12, taman abc, jalan abc, kajang, selangor.', 'asdf@gmail.com', '012-353-2343', 2, 'nothing', '2022-08-17 20:00:00', 0),
(11, 'dasd', 'dasdsd', 'dasd@gmail.com', '012-343-234', 6, 'sadas', '2022-08-10 01:44:00', 0),
(12, 'dasd', 'asdas', 'dasda@gail.com', '012-342-42342', 3, 'sdsa', '2022-08-09 16:34:00', 0),
(16, 'adsf', 'asd', 'dasd@gmail.com', '012-423-4232', 5, '42343243', '2022-09-15 18:51:00', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
