-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2019 at 11:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdt_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `payment_status` int(1) NOT NULL DEFAULT '0',
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` int(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `user_id`, `payment_status`, `order_date`, `total_price`) VALUES
(15, 4, 1, '2019-11-05 14:24:10', 600),
(16, 3, 1, '2019-11-05 15:09:34', 330),
(17, 3, 1, '2019-11-06 21:15:30', 330),
(18, 3, 1, '2019-11-06 21:17:14', 330),
(19, 3, 1, '2019-11-07 00:34:05', 330),
(20, 4, 1, '2019-11-07 00:36:10', 600),
(21, 4, 0, '2019-11-07 01:46:34', NULL),
(22, 3, 1, '2019-11-07 03:35:56', 330),
(23, 3, 1, '2019-11-07 05:40:07', 330);

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

DROP TABLE IF EXISTS `product_list`;
CREATE TABLE IF NOT EXISTS `product_list` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `package_content` varchar(255) NOT NULL,
  `product_anime` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_category` text NOT NULL,
  `product_picture` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `product_name`, `package_content`, `product_anime`, `product_price`, `product_category`, `product_picture`) VALUES
(49, 'Natsu With Igneel Figurine', 'x1 Figurine', 'Fairy Tail', 40, 'Figurine', 'product-image/fairytail1.png'),
(50, 'Gray Demon Slayer Hoodie', 'x1 Hoodie', 'Fairy Tail', 100, 'Apparel', 'product-image/fairytail2.jpg'),
(51, 'Fairy Tail Backpack', 'x1 Backpack', 'Fairy Tail', 80, 'Bag', 'product-image/fairytail3.jpg'),
(52, 'Lucy 12 Celestial Keys Keychain Collection', 'x12 Keychain', 'Fairy Tail', 55, 'Accessory', 'product-image/fairytail4.jpg'),
(53, 'Ichigo Hollow Bankai Figurine', 'x1 Figurine', 'Bleach', 70, 'Figurine', 'product-image/bleach1.jpg'),
(54, 'Ichigo T-shirt', 'x1 T-shirt', 'Bleach', 30, 'Apparel', 'product-image/bleach2.jpeg'),
(56, 'Bleach Backpack', 'x1 Backpack', 'Bleach', 80, 'Bag', 'product-image/bleach3.jpg'),
(57, 'Ichigo Zanpakuto', 'x2 Keychain', 'Bleach', 20, 'Accessory', 'product-image/bleach4.jpg'),
(58, 'Kirito and Sinon Figurine', 'x2 Figurine', 'Sword Art Online', 40, 'Figurine', 'product-image/sao1.jpg'),
(59, 'Sword Art Online T-shirt Black', 'x1 T-shirt', 'Sword Art Online', 80, 'Apparel', 'product-image/sao2.jpg'),
(61, 'Sword Art Online Backpack Black', 'x1 Backpack', 'Sword Art Online', 100, 'Bag', 'product-image/sao3.jpg'),
(62, 'Sword Art Online Sword Keychain', 'x3 Keychain', 'Sword Art Online', 30, 'Accessory', 'product-image/sao4.jpg'),
(63, 'Luffy Gear Four Figurine', 'x1 Figurine', 'One Piece', 20, 'Figurine', 'product-image/onepiece1.png'),
(64, 'Chibi Luffy T-shirt Black', 'x1 T-shirt', 'One Piece', 30, 'Apparel', 'product-image/onepiece2.jpg'),
(65, 'Zoro Shusui Sword Keychain', 'x1 Keychain', 'One Piece', 20, 'Accessory', 'product-image/onepiece3.jpg'),
(66, 'Straw Hat Pirate Sling Bag', 'x1 Sling Bag ', 'One Piece', 50, 'Bag', 'product-image/onepiece4.jpg'),
(67, 'Sasuke Susanoo Figurine', 'x1 Figurine', 'Naruto', 40, 'Figurine', 'product-image/naruto1.jpg'),
(68, 'Naruto Kurama Mode Hoodie', 'x1 Hoodie', 'Naruto', 120, 'Apparel', 'product-image/naruto2.jpg'),
(69, 'Gaara Sand Gourd Backpack', 'x1 Backpack', 'Naruto', 50, 'Bag', 'product-image/naruto3.jpg'),
(70, 'Sasuke Headband', 'x1 Headband', 'Naruto', 40, 'Accessory', 'product-image/naruto4.jpg'),
(71, 'Akame Figurine', 'x1 Figurine', 'Akame ga Kill!', 20, 'Figurine', 'product-image/akame1.jpg'),
(72, 'Akame High School Uniform', 'x1 Uniform', 'Akame ga Kill!', 100, 'Apparel', 'product-image/akame2.jpg'),
(73, 'Night Raid Backpack', 'x1 Backpack', 'Akame ga Kill!', 70, 'Bag', 'product-image/akame3.jpg'),
(74, 'Murasame Sword', 'x1 Prop', 'Akame ga Kill!', 150, 'Accessory', 'product-image/akame4.jpg'),
(75, 'Chibi Levi Figurine', 'x1 Figurine', 'Attack On Titan', 30, 'Figurine', 'product-image/aot1.jpg'),
(76, 'Female Military Police Jacket', 'x1 Jacket', 'Attack On Titan', 80, 'Apparel', 'product-image/aot2.jpg'),
(77, 'Attack On Titan Sling Bag', 'x1 Sling Bag ', 'Attack On Titan', 100, 'Bag', 'product-image/aot3.jpg'),
(78, 'Military Logo Keychain', 'x1 Keychain', 'Attack On Titan', 15, 'Accessory', 'product-image/aot4.jpg'),
(79, 'Megumin Explosion Figurine', 'x1 Figurine', 'Kono Suba', 100, 'Figurine', 'product-image/konosuba1.png'),
(80, 'Kono Suba T-shirt Grey', 'x1 T-shirt', 'Kono Suba', 50, 'Apparel', 'product-image/konosuba2.jpg'),
(81, 'Chibi Megumin Backpack', 'x1 Backpack', 'Kono Suba', 130, 'Bag', 'product-image/konosuba3.jpg'),
(82, 'Kono Suba Keychain Collection', 'x7 Keychain', 'Kono Suba', 70, 'Accessory', 'product-image/konosuba4.jpg'),
(83, 'Chibi Kimetsu No Yaiba Figurine', 'x3 Figurine', 'Kimetsu No Yaiba', 60, 'Figurine', 'product-image/kimetsu1.jpg'),
(84, 'Nezuko Hoodie', 'x1 Hoodie', 'Kimetsu No Yaiba', 100, 'Apparel', 'product-image/kimetsu2.jpg'),
(85, 'Nezuko Box Backpack', 'x1 Backpack', 'Kimetsu No Yaiba', 200, 'Bag', 'product-image/kimetsu3.png'),
(86, 'Hanafuda Earrings', 'x2 Earring', 'Kimetsu No Yaiba', 30, 'Accessory', 'product-image/kimetsu4.jpg'),
(87, 'Meliodas Figurine', 'x1 Figurine', 'Nanatsu No Taizai', 20, 'Figurine', 'product-image/nanatsu1.jpg'),
(88, 'Meliodas Demon Form T-Shirt Black', 'x1 T-shirt', 'Nanatsu No Taizai', 60, 'Apparel', 'product-image/nanatsu2.jpg'),
(89, 'Nanatsu No Taizai Sling Bag', 'x1 Sling Bag ', 'Nanatsu No Taizai', 70, 'Bag', 'product-image/nanatsu3.jpg'),
(90, 'Nanatsu No Taizai Badge Collection', 'x7 Badge', 'Nanatsu No Taizai', 60, 'Accessory', 'product-image/nanatsu4.jpg'),
(91, 'Goku Ultra Instinct Figurine', 'x1 Figurine', 'Dragon Ball', 50, 'Figurine', 'product-image/dragonball1.jpg'),
(92, 'AE86 Toy Car Collection', 'x4 Toy Car', 'Initial', 100, 'Figurine', 'product-image/initiald1.jpg'),
(93, 'BAPE X Dragon Ball T-shirt Black', 'x1 T-shirt', 'Dragon Ball', 780, 'Apparel', 'product-image/bapexdragonball.jpg'),
(95, 'Yato Backpack', 'x1 Backpack', 'Noragami', 100, 'Bag', 'product-image/noragami1.jpg'),
(96, 'Saitama Oppai Hoodie', 'x1 Hoodie', 'One Punch Man', 120, 'Apparel', 'product-image/onepunchman1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
CREATE TABLE IF NOT EXISTS `product_order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `apparel_size` varchar(255) DEFAULT NULL,
  `product_quantity` int(255) NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`order_id`, `product_id`, `apparel_size`, `product_quantity`) VALUES
(15, 50, 'XL', 1),
(15, 93, 'M', 1),
(15, 67, 'NULL', 3),
(15, 93, 'XS', 1),
(15, 79, 'NULL', 4),
(16, 73, 'NULL', 1),
(16, 93, 'XL', 1),
(16, 69, 'NULL', 1),
(16, 84, 'XS', 99),
(17, 93, 'S', 4),
(18, 64, 'M', 1),
(19, 62, 'NULL', 4),
(20, 92, 'NULL', 6),
(21, 95, 'NULL', 1),
(22, 61, 'NULL', 1),
(23, 62, 'NULL', 3),
(23, 68, 'M', 1),
(23, 68, 'XS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `house_or_unit` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `state` text NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_gender`, `house_or_unit`, `street`, `postal_code`, `state`, `user_role`) VALUES
(1, 'Chia Kong Weng', 'ckw', 'ckw@ckw.ckw', '0123456789', 'bbb4b38004869f86a753f937cc26dce8', 'male', '', '', '', '0', 0),
(2, 'Luson Sia', 'sia', 'sia123@hotmail.com', '0188521597', '07af7e75676eab410d1f83937d7afb62', 'male', '', '', '', '0', 0),
(3, 'Jackie Chee', 'chee', 'chee@coldmail.com', '0176420572', '5efdc8a07a2d58175d4cb734069221e0', 'female', '20', 'Jalan Alor 5a', '5510', 'Kuala Lumpur', 1),
(4, 'Lee Zhen Chuen', 'peter', 'peterlee@gmail.com', '0169472456', '51dc30ddc473d43a6011e9ebba6ca770', 'male', '15', 'Jalan Ampang 15', '53100', 'Kuala Lumpur', 1),
(5, 'Ching Chong', 'Ling Long', 'chingchong@linglong.oof', '01234567890', '25d55ad283aa400af464c76d713c07ad', 'male', '123', 'Jalan ABC', '123456', 'Kuala Lumpur', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
