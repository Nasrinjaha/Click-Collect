-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2022 at 06:15 PM
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
-- Database: `clickandcollect`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `insert_customers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_customers` (`name` VARCHAR(100), `email` VARCHAR(100), `address` VARCHAR(100), `dob` DATE, `gender` VARCHAR(100), `mobile` VARCHAR(100), `pass` VARCHAR(100), `img` VARCHAR(100), `status` INT)  BEGIN
 INSERT INTO customers(name,email,address,dob,gender, mobile,pass,img,status)
     VALUES(name,email,address,dob,gender, mobile,pass,img,status);
END$$

DROP PROCEDURE IF EXISTS `insert_sellers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_sellers` (`name` VARCHAR(100), `email` VARCHAR(100), `trade_licence` VARCHAR(255), `experience` VARCHAR(255), `cv` VARCHAR(255), `address` VARCHAR(100), `dob` DATE, `gender` VARCHAR(100), `mobile` VARCHAR(100), `pass` VARCHAR(100), `img` VARCHAR(100), `status` INT)  BEGIN
 INSERT INTO `sellers` ( `name`, `email`, `trade_licence`, `experience`, `cv`, `address`, `dob`, `gender`, `mobile`, `pass`, `status`, `img`)
  VALUES(name, email, trade_licence, experience, cv, address, dob, gender, mobile, pass, status, img);
END$$

DROP PROCEDURE IF EXISTS `read_data_customers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_data_customers` ()  BEGIN
 SELECT * from customers WHERE status=1;
END$$

DROP PROCEDURE IF EXISTS `read_data_products`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_data_products` ()  BEGIN
 SELECT * from products WHERE status=1;
END$$

DROP PROCEDURE IF EXISTS `read_data_sellers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_data_sellers` ()  BEGIN
 SELECT * from sellers WHERE status=1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `dob`, `address`, `gender`, `mobile`, `pass`, `img`) VALUES
(1, 'Ripa', 'ripa@gmail.com', '2022-08-16', 'ctg', '', '', '12345', NULL),
(2, 'Jumu', 'jumu@gmail.com', '2022-08-24', 'ctg', '', '', '12345', NULL),
(3, 'admin', 'admin3@gmail.com', '2022-08-08', 'ctg', 'female', '01835493825', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `name`) VALUES
(1, 'Apple'),
(2, 'Nike'),
(3, 'barbie'),
(5, 'Armani'),
(6, 'Arong'),
(7, 'Yellow'),
(8, 'cats Eye'),
(9, 'Plus Point'),
(13, 'Addidas'),
(14, 'Bata'),
(15, 'Bata');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `FK_cart1` (`c_id`),
  KEY `FK_cart2` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'toys'),
(2, 'mancloth'),
(3, 'womancloth'),
(4, 'manShoesandWallets'),
(5, 'womanhandbagandwallets'),
(6, 'manAccessories'),
(7, 'WomanAccessories'),
(8, 'Home Appliances'),
(9, 'Kitchen Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(255) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `name`, `email`, `address`, `dob`, `gender`, `mobile`, `pass`, `status`, `img`) VALUES
(1, 'Farhana Amin Emom', 'emo@gmail.com', 'ctgg', '2022-08-30', 'female', '01835493825', '12345', 1, NULL),
(2, 'montaha', 'montaha@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(4, 'customer1', 'customer1@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(5, 'customer2', 'customer2@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 0, NULL),
(6, 'customer2', 'customer3@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(7, 'customer4', 'customer4@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(8, 'customer5', 'customer5@gmail.com', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(9, 'Nasrin Jahan Ripaa', 'ripanasrin62@gmail.com', 'ctg', '2022-08-09', 'female', '01835493825', '12345', 1, 'NULL'),
(10, 'Mumi', 'admin1@gmail.com', 'cox', '2022-08-25', 'female', '01835493825', '1', 1, 'NULL'),
(11, 'saymon', 'tonmoy@gmail.com', 'cox', '2022-08-11', 'male', '01835493827', '1', 1, 'NULL'),
(12, 'njripa', 'puja@gmail.com', 'cti', '2022-10-04', 'female', '01835493826', '12', 1, 'cf218686a812598d148c76b0a77650f1.jpg'),
(13, 'saymon', 'd@gmail.com', 'ctg', '2022-09-11', 'female', '01835493827', '12345', 1, '8f9cb862f3eb9e09c538220b4ffb84f8.jpg'),
(14, '$name', '$mail', '$address', '2001-01-01', 'null', '$contact', '$pass1', 1, 'null'),
(15, 'saymon', 's@gmailcom', 'cox', '2000-02-02', 'null', '01835493825', '123', 1, 'null'),
(16, 'morshed khan', 'm@gmailcom', 'cty', '2000-02-02', 'null', '01835493827', '123', 1, 'null'),
(18, 'afia', 'afia@gmail.com', 'chittagong', '2022-09-15', 'female', '01325243199', '12345', 0, 'f64defbf9ad48227ce9b3ac9c74a4c44.09'),
(19, 'costomerorder', 'admin1-00@gmail.com', 'chittagong', '2022-09-28', 'female', '01325243190', '12345', 0, 'NULL'),
(20, 'name', 'admin001@gmail.com', 'chittagong', '2022-09-21', 'female', '01325243190', '12345', 1, 'NULL'),
(21, 'afiat', 'afia0000@gmail.coml', 'chtg', '2022-09-13', 'female', '01322931993', '12345', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

DROP TABLE IF EXISTS `customer_order`;
CREATE TABLE IF NOT EXISTS `customer_order` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  KEY `FK_customer_order` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`o_id`, `c_id`, `order_date`) VALUES
(11, 1, '2022-08-16'),
(12, 1, '2022-08-16'),
(13, 1, '2022-08-16'),
(14, 2, '2022-08-16'),
(15, 2, '2022-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `FK_image` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`e_id`, `p_id`, `image`) VALUES
(28, 30, '2db753d14a5c07f1ebe4152c0361d106.jpg'),
(29, 30, 'c162086d40326ef80ae9971f64bfb9df.jpg'),
(30, 31, '473a435e7a7c73da12bab53db0d937cb.jpg'),
(31, 31, 'c162086d40326ef80ae9971f64bfb9df.jpg'),
(32, 32, '32Product-i.jpg'),
(33, 32, '32Product-ii.jpg'),
(34, 32, '32Product-iii.jpg'),
(35, 33, '33Product-i.jpg'),
(36, 33, '33Product-ii.jpg'),
(37, 33, '33Product-iii.jpg'),
(38, 34, '34Product-i.jpg'),
(39, 34, '34Product-ii.jpg'),
(40, 34, '34Product-iii.jpg'),
(41, 35, '35Product-i.jpg'),
(42, 35, '35Product-ii.jpg'),
(43, 35, '35Product-iii.jpg'),
(44, 36, '36Product-i.jpg'),
(45, 36, '36Product-ii.jpg'),
(46, 36, '36Product-iii.jpg'),
(47, 37, '37Product-i.jpg'),
(48, 37, '37Product-ii.jpg'),
(74, 60, '60Product-i.jpg'),
(75, 60, '60Product-ii.jpg'),
(76, 60, '60Product-iii.jpg'),
(77, 61, '61Product-i.jpg'),
(78, 61, '61Product-ii.jpg'),
(79, 61, '61Product-iii.jpg'),
(80, 62, '62Product-i.jpg'),
(81, 62, '62Product-ii.jpg'),
(82, 62, '62Product-iii.jpg'),
(83, 63, '63Product-i.jpg'),
(84, 63, '63Product-ii.jpg'),
(85, 63, '63Product-iii.jpg'),
(86, 64, '64Product-i.jpg'),
(87, 64, '64Product-ii.jpg'),
(88, 64, '64Product-iii.jpg'),
(89, 65, '65Product-i.jpg'),
(90, 65, '65Product-ii.jpg'),
(91, 65, '65Product-iii.jpg'),
(92, 66, '66Product-i.jpg'),
(93, 66, '66Product-ii.jpg'),
(94, 66, '66Product-iii.jpg'),
(95, 68, '68Product-i.jpg'),
(96, 68, '68Product-ii.jpg'),
(97, 68, '68Product-iii.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

DROP TABLE IF EXISTS `order_line`;
CREATE TABLE IF NOT EXISTS `order_line` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`p_id`),
  KEY `FK_order_line2` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `FK_brand1` (`b_id`),
  KEY `FK_catagory1` (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `name`, `b_id`, `sub_id`, `size`, `description`, `price`, `quantity`, `status`) VALUES
(26, 'kurti1', 6, 17, '36', 'sdfffffffffffffffffffffffffgvryh', 590, 56, 0),
(27, 'kurti2', 6, 17, '36', '333333sadfffffffffff', 900, 70, 0),
(28, 'kurti3', 6, 17, '36', 'dfdfdfdfdfdfdfdfdf', 700, 36, 0),
(29, 'kurti4', 6, 17, '36', 'vcfcfcfcfcfcfcfcfc', 1000, 36, 0),
(30, '$name', 1, 1, '$size', '$description', 1, 23, 1),
(31, 'kurti2', 5, 17, '36', 'squdghwyfgcasuihcasuidghciua', 560, 36, 1),
(32, 'Shirt', 8, 1, '41', 'Military style long sleeve men casual shirt. Color: Green, Bro', 500, 20, 1),
(33, 'Fashion Hoodies', 8, 2, '41', 'Stylish Hoodie for men. Color: White, Brown, Black. Material: Fabric Cotton', 700, 40, 1),
(34, 'Sweatshirts', 8, 2, '39,41,43', 'The Modern Sweatshirts. Color: Merun, Brown, Yellow. Material: Fabric Cotton', 600, 30, 1),
(35, 'Sweaters', 9, 3, '39,41,43', 'Luxury Brand Woolen Sweater Best Quality Men Pullover Fashion Design. Color: NavyBlue, Gray, Black. Material: Cotton, Wool.', 650, 25, 1),
(36, 'Jackets', 9, 4, '41', 'Full Sleeve Men Cotton Jackets. Color: Maroon, Black, NavyBlue.', 750, 45, 0),
(37, 'Coats', 8, 4, '43', 'Winter Trench Coats for Men.', 800, 20, 0),
(60, 'Jeans', 6, 5, '32,34,36', 'Mens Denim Jeans', 800, 70, 1),
(61, 'Pants', 6, 6, '32,34', 'Buy mens formal pants', 800, 60, 1),
(62, 'Trousers', 8, 6, '29,31,33', 'Best trousers for men', 600, 50, 1),
(63, 'Capris and Shorts', 8, 7, '30,32,34', 'Summer Mens Cotton capris and shorts', 500, 100, 1),
(64, 'Swim', 2, 8, '28,30,32,34', 'The best nike swim trunks for men', 400, 60, 1),
(65, 'Suits', 8, 9, '34,36,38', 'Fashion suits for men,Designer suits for men', 900, 100, 1),
(66, 'Sports Coats', 8, 9, '34,36', 'Sports Coats-Shop top designer sports coats', 900, 90, 1),
(68, 'Shocks', 14, 11, 'L,M', 'Premium ankle shocks for men', 200, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_products`
--

DROP TABLE IF EXISTS `request_products`;
CREATE TABLE IF NOT EXISTS `request_products` (
  `rp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`rp_id`),
  KEY `FK_brand1` (`b_id`),
  KEY `FK_catagory1` (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `request_products`
--

INSERT INTO `request_products` (`rp_id`, `name`, `b_id`, `sub_id`, `size`, `description`, `price`, `quantity`) VALUES
(1, 'name', 6, 33, '23', 'fvbdgfgvberf', 120, 12),
(2, 'cap', 3, 29, '36', 'rtgrtghrthtyhrt5', 123, 12),
(3, 'fedfrgrt', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(4, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(5, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(6, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(7, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(8, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(9, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(10, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(11, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(12, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(13, 'abc', 1, 3, '34', 'dcdfdvdgvdf', 1500, 10),
(14, 'costomerorder', 3, 27, '36', 'ederfrtfrtg', 1234, 34),
(15, 'dupatta', 3, 26, '36', 'dfsdgsdfrgg', 170, 12);

-- --------------------------------------------------------

--
-- Table structure for table `request_products_images`
--

DROP TABLE IF EXISTS `request_products_images`;
CREATE TABLE IF NOT EXISTS `request_products_images` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `rp_id` int(11) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `FK_image_request` (`rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `request_products_images`
--

INSERT INTO `request_products_images` (`e_id`, `rp_id`, `image`) VALUES
(1, 15, '65d53bac252fd814c50249d49eecdb7c.png'),
(2, 15, 'a2b949100a6ccd8adfa7b47ae0117303.png');

-- --------------------------------------------------------

--
-- Table structure for table `request_sellers`
--

DROP TABLE IF EXISTS `request_sellers`;
CREATE TABLE IF NOT EXISTS `request_sellers` (
  `rs_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `trade_licence` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `request_sellers`
--

INSERT INTO `request_sellers` (`rs_id`, `name`, `email`, `trade_licence`, `experience`, `cv`, `address`, `dob`, `gender`, `mobile`, `pass`, `img`) VALUES
(1, 'costomerorder', 'admin90@gmail.com', '55', 'I  have been  driving a bus with the weight of  more than 6500kg for 3 years.', 'Screenshot (141).png', 'chittagong', '2022-09-24', 'female', '01835493826', '12345', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `trade_licence` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(255) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`s_id`, `name`, `email`, `trade_licence`, `experience`, `cv`, `address`, `dob`, `gender`, `mobile`, `pass`, `status`, `img`) VALUES
(1, 'Saymon', 'saymon@gmail.com', '199', 'working as a sellers in strange store for 3 years', 'no file uploaded', 'ctg', '2022-08-24', 'male', '01835493825', '12345', 1, NULL),
(2, 'sabiha', 'montaha@gmail.com', '22', 'working as a sellers in strange store for 3 years', 'no file uploaded', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(4, 'seller2', 'seller2@gmail.com', '44', 'working as a sellers in strange store for 3 years', 'no file uploaded', 'ctg', '2022-08-16', 'female', '01835493825', '12345', 1, NULL),
(15, 'Nasrin Jahan Ripa', 'ripanasrin62@gmail.com', '55', 'I  have been  driving a bus with the weight of  more than 4500kg for 2 years.', 'no file attach', 'chittagong', '2022-09-18', 'female', '01325243199', '12345', 1, 'null'),
(16, 'afia', 'afia@gmail.com', '55', 'I  have been  driving a bus with the weight of  more than 4500kg for 2 years.', 'no file attach', 'chittagong', '2022-10-06', 'female', '01325243199', '12345', 0, 'null'),
(17, 'costomerorder', 'admin1@gmail.com', '11', 'I  have been  driving a bus with the weight of  more than 4500kg for 2 years.', 'no file attach', 'chittagong', '2022-09-19', 'female', '01325243199', '12345', 0, 'null'),
(18, 'afiat', 'afia000056@gmail.coml', '11', 'I  have been  driving a bus with the weight of  more than 4500kg for 2 years.', '', 'chtg', '2022-09-22', 'female', '01835493825', '12345', 2, 'null'),
(19, 'costomerorder', 'admin167@gmail.com', '22', 'I  have been  driving a bus with the weight of  more than 6500kg for 3 years.', 'Screenshot (142).png', 'chittagong', '2022-09-28', 'female', '01322931993', '12345', 2, 'null'),
(21, 'costomerorder', 'admin90@gmail.com', '55', 'I  have been  driving a bus with the weight of  more than 6500kg for 3 years.', 'Screenshot (141).png', 'chittagong', '2022-09-24', 'female', '01835493826', '12345', 2, NULL),
(22, 'wedwrf', 'fw@gnail.com', 'sdwq', 'qwedqwwe', 'qwee.pdf', 'qwe', '2022-09-13', 'qqdqwdrw', 'qwedwerqr', '1234', 2, NULL),
(23, 'wedwrf', 'fw@gnail.com', 'sdwq', 'qwedqwwe', 'qwee.pdf', 'qwe', '2022-09-13', 'qqdqwdrw', 'qwedwerqr', '1234', 2, NULL),
(24, 'wedwrf', 'fw@gnail.com', 'sdwq', 'qwedqwwe', 'qwee.pdf', 'qwe', '2022-09-13', 'qqdqwdrw', 'qwedwerqr', '1234', 2, NULL),
(26, 'wedwrf', 'fw@gnail.com', 'sdwq', 'qwedqwwe', 'qwee.pdf', 'qwe', '2022-09-13', 'qqdqwdrw', 'qwedwerqr', '1234', 1, NULL),
(27, 'wedwrf', 'fw@gnail.com', 'sdwq', 'qwedqwwe', 'qwee.pdf', 'qwe', '2022-09-13', 'qqdqwdrw', 'qwedwerqr', '1234', 1, NULL),
(28, '$name', '$mail', '$trade', '$experience', '$cv', '$address', '2022-02-02', '$gender', '$contact', '$pass1', 1, 'null'),
(29, 'afia', 'afia300@gmail.com', '199', 'I  have been  driving a bus with the weight of  more than 5000kg for 3 years.', 'Screenshot (141).png', 'chittagong', '2022-09-08', 'female', '01325243190', '12345', 1, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `FK_catagory` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `name`, `cat_id`) VALUES
(1, '  Shirts ', 2),
(2, ' Fashion Hoodies , Sweatshirts ', 2),
(3, 'Sweaters', 2),
(4, ' Jackets , Coats', 2),
(5, ' Jeans ', 2),
(6, ' Pants , Trousers', 2),
(7, 'Capris and Shorts ', 2),
(8, ' Swim', 2),
(9, ' Suits , Sport Coats', 2),
(10, ' Underwear', 2),
(11, '  Socks', 2),
(12, ' Sleep , Lounge', 2),
(13, 'T-Shirts , Tanks ', 2),
(14, '  Active', 2),
(15, '   Sport Coats ', 2),
(16, 'Shapewear', 3),
(17, 'Tops and shirts,kurti', 3),
(18, 'Sweatshirts', 3),
(19, 'Jeans and Trousers', 3),
(20, 'Fashion Hood ', 3),
(21, 'Capris and Shoe', 3),
(22, 'Leggings', 3),
(23, 'Swimsuits and Cover Ups ', 3),
(24, 'Lingerie, Sleep and Lounge', 3),
(25, 'Inner and Nightwear ', 3),
(26, 'Jumpsuits, Rompers and Overalls', 3),
(27, 'Coats, Jackets and Vests', 3),
(28, 'Suiting and Blazers ', 3),
(29, 'Socks and Hosiery', 3),
(30, 'Fashion Sneakers', 4),
(31, ' Loafers', 4),
(32, 'Slip-Ons', 4),
(33, ' Clogs', 4),
(34, 'outdoor', 4),
(35, 'oxford', 4),
(36, 'slippers', 4),
(37, 'Clutches', 5),
(38, ' Cross-Body Bags', 5),
(39, 'Evening Bags', 5),
(40, ' Shoulder Bags', 5),
(41, 'Top-Handle Bags', 5),
(42, 'Wristlets', 5),
(43, 'Belts', 6),
(44, 'Suspenders', 6),
(45, 'Eyewear Accessories', 6),
(46, 'Neckties', 6),
(47, 'Bow Ties and Cummerbunds', 6),
(48, 'Collar Stays', 6),
(49, 'Handbag Accessories', 7),
(50, 'Sunglasses Accessories', 7),
(51, 'Eyewear Accessories', 7),
(52, 'Scarves and Wraps', 7),
(53, 'Gloves and Mittens', 7),
(54, 'Hats and Caps', 7),
(55, 'Air Coolers', 8),
(56, 'Fans', 8),
(57, 'Microwaves', 8),
(58, 'Refrigerators', 8),
(59, 'Washing Machines', 8),
(60, 'Jars and Containers ', 8),
(61, 'LED and CFL bulbs', 8),
(62, 'Drying Racks ', 8),
(63, 'Laundry Baskets', 8),
(64, 'Vases ', 8),
(65, 'Clocks', 8),
(66, 'Bedsheets', 8),
(67, 'Air Fryers', 9),
(68, ' Espresso Machines', 9),
(69, 'Food Processors', 9),
(70, 'Hand Blenders', 9),
(71, 'Induction Cooktops', 9),
(72, 'Juicers', 9),
(73, 'Microwave Ovens', 9),
(74, 'Mixers , Grinders', 9),
(75, 'Ovens', 9),
(76, 'Rice Cookers', 9),
(77, 'Stand Mixers', 9),
(78, 'Sandwich Makers', 9),
(79, 'Tandoor , Grills', 9),
(80, 'Toasters', 9),
(81, 'PARTS', 5),
(82, 'hudi', 2),
(83, 'khelna ghor', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart1` FOREIGN KEY (`c_id`) REFERENCES `customers` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cart2` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `FK_customer_order` FOREIGN KEY (`c_id`) REFERENCES `customers` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_image` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_products_images`
--
ALTER TABLE `request_products_images`
  ADD CONSTRAINT `FK_image_request` FOREIGN KEY (`rp_id`) REFERENCES `request_products` (`rp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
