-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2014 at 04:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fiteveryone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `customer_id` varchar(255) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(13,3) NOT NULL,
  `option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customer_id`, `id`, `name`, `qty`, `price`, `option`) VALUES
('245570207@qq.com', '1386667002', 'Assam', 1, '20.000', '2012'),
('245570207@qq.com', '1386667472', 'Darjeeling', 1, '40.000', '2012'),
('leiw414@gmail.com', '1393819024', 'Darjeeling', 1, '40.000', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('16f1476824ff52a53c1dac0a017bd66a', '127.0.0.1', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)', 1393814283, 'a:2:{s:9:"user_data";s:0:"";s:13:"cart_contents";a:3:{s:32:"f2edb871f9dd48b0d21b8333cbc26f20";a:7:{s:5:"rowid";s:32:"f2edb871f9dd48b0d21b8333cbc26f20";s:2:"id";i:1393814312;s:4:"name";s:5:"Assam";s:3:"qty";s:1:"1";s:6:"option";s:4:"2012";s:5:"price";s:5:"20.00";s:8:"subtotal";d:20;}s:11:"total_items";i:1;s:10:"cart_total";d:20;}}'),
('6a6c1c3b648b7f42aa6e71b4773c72c9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393820799, 'a:27:{s:9:"user_data";s:0:"";s:2:"id";s:22:"zuoyou482634@gmail.com";s:11:"login_state";b:1;s:13:"shipping_name";s:3:"Lei";s:17:"shipping_address1";s:23:"425 Hillsborough Street";s:17:"shipping_address2";s:0:"";s:13:"shipping_city";s:11:"Chapel Hill";s:14:"shipping_state";s:14:"North Carolina";s:12:"shipping_zip";s:5:"27514";s:16:"shipping_country";s:2:"US";s:14:"shipping_phone";s:10:"9193608513";s:12:"payment_name";s:8:"Lei Wang";s:15:"payment_card_no";s:16:"1111111111111111";s:17:"payment_last_four";s:4:"1111";s:13:"payment_month";s:2:"01";s:12:"payment_year";s:4:"2013";s:11:"payment_cvv";s:3:"111";s:17:"payment_card_type";s:4:"Visa";s:16:"payment_address1";s:27:"425 Hillsborough ST APT 10F";s:16:"payment_address2";s:3:"xin";s:12:"payment_city";s:11:"Chapel Hill";s:13:"payment_state";s:14:"North Carolina";s:11:"payment_zip";s:5:"27514";s:15:"payment_country";s:2:"US";s:13:"payment_phone";s:10:"9193608513";s:8:"order_id";i:1393820457;s:8:"order_no";s:2:"13";}'),
('b226c0f8b868376b49aa2b646c628c10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36', 1393815335, 'a:1:{s:2:"id";s:16:"245570207@qq.com";}');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('Lei Wang', '245570207@qq.com', 'aaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE IF NOT EXISTS `order_history` (
  `order_no` int(255) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `total` decimal(13,2) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_address1` varchar(255) NOT NULL,
  `s_address2` varchar(255) NOT NULL,
  `s_city` varchar(50) NOT NULL,
  `s_state` varchar(100) NOT NULL,
  `s_zip` varchar(50) NOT NULL,
  `s_country` varchar(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_card_no` varchar(16) NOT NULL,
  `p_last_four` varchar(4) NOT NULL,
  `p_month` varchar(10) NOT NULL,
  `p_year` varchar(10) NOT NULL,
  `p_cvv` varchar(3) NOT NULL,
  `p_card_type` varchar(20) NOT NULL,
  `p_address1` varchar(255) NOT NULL,
  `p_address2` varchar(255) NOT NULL,
  `p_zip` varchar(30) NOT NULL,
  `p_city` varchar(100) NOT NULL,
  `p_state` varchar(100) NOT NULL,
  `p_country` varchar(100) NOT NULL,
  `p_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`order_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_no`, `customer_id`, `order_id`, `order_date`, `total`, `s_name`, `s_address1`, `s_address2`, `s_city`, `s_state`, `s_zip`, `s_country`, `s_phone`, `p_name`, `p_card_no`, `p_last_four`, `p_month`, `p_year`, `p_cvv`, `p_card_type`, `p_address1`, `p_address2`, `p_zip`, `p_city`, `p_state`, `p_country`, `p_phone`) VALUES
(8, 'leiw414@gmail.com', '1386643750', '12/10/2013', '23.00', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513', 'Lei Wang', '1111111111111111', '1111', '02', '2019', '111', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513'),
(9, 'leiw414@gmail.com', '1386643877', '12/10/2013', '63.00', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513', 'Lei Wang', '1111111111111111', '1111', '02', '2019', '111', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513'),
(10, 'leiw414@gmail.com', '1386644561', '12/10/2013', '20.00', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513', 'Lei Wang', '3333333333333333', '3333', '01', '2013', '111', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513'),
(12, 'leiw414@gmail.com', '1393353663', '02/25/2014', '20.00', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513', 'Lei Wang', '1231343242414144', '4144', '01', '2016', '111', 'MasterCard', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_no` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `unit_price` decimal(13,2) NOT NULL,
  `subtotal` decimal(13,2) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_no`, `name`, `qty`, `option`, `unit_price`, `subtotal`) VALUES
(5, 8, 'pro1', 1, 'XS', '20.00', '20.00'),
(6, 9, 'pro1', 1, 'M', '20.00', '20.00'),
(7, 9, 'pro2', 1, 'L', '40.00', '40.00'),
(8, 10, 'pro1', 1, 'XS', '20.00', '20.00'),
(9, 11, 'Assam', 2, '100g', '20.00', '40.00'),
(10, 12, 'Assam', 1, '2012', '20.00', '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `customer_id` varchar(255) NOT NULL,
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `last_four` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `method` int(10) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`customer_id`, `card_id`, `name`, `card_no`, `last_four`, `month`, `year`, `cvv`, `card_type`, `address1`, `address2`, `zip`, `city`, `state`, `country`, `phone`, `method`) VALUES
('245570207@qq.com', 10, 'Lei Wang', '1111111111111111', '1111', '01', '2013', '111', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 1),
('leiw414@gmail.com', 13, 'Lei Wang', '1111111111111111', '1111', '02', '2019', '111', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 1),
('leiw414@gmail.com', 14, 'Lei Wang', '1231343242414144', '4144', '01', '2016', '111', 'MasterCard', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(12) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `images` varchar(255) NOT NULL,
  `option_name` varchar(50) NOT NULL,
  `option_values` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `images`, `option_name`, `option_values`, `category`) VALUES
(1, 'Assam', '20.00', 'product1.jpg', 'size', 'small,media,large', 'Black Tea'),
(2, 'Darjeeling', '40.00', 'product2.jpg', 'size', 'S,M,L,XL', 'Black Tea'),
(3, 'Turkish ', '50.00', 'product3.jpg', 'size', 'S,M,L,XL', 'Black Tea'),
(4, 'Biluochun', '40.00', 'product4.jpg', 'size', 'S,M,L,XL', 'Green Tea'),
(5, 'Tunxi', '80.00', 'product5.jpg', 'size', 'XS,S,M,L', 'Green Tea'),
(6, 'Tunxi tea bag', '40.00', 'product6.jpg', 'size', 'XS,S,M,L', 'Tea Bag'),
(7, 'Longjing bag', '90.00', 'product7.jpg', 'size', '6,7,8,9,10,11,12,13,14', 'Tea Bag');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE IF NOT EXISTS `shipping_address` (
  `shipping_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_id`, `customer_id`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `phone`) VALUES
(8, '245570207@qq.com', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'NC', '27514', 'US', '9193608513'),
(9, 'leiw414@gmail.com', 'Lei Wang', '425 Hillsborough ST APT 10F', '', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `customer_id` varchar(255) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `tel1` varchar(12) NOT NULL,
  `registration_date` varchar(30) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`customer_id`, `passwd`, `fname`, `lname`, `tel1`, `registration_date`, `last_login`, `status`) VALUES
('leiw414@gmail.com', 'nihaoma', 'Lei', 'Wang', '', '03/03/2014', '03/03/2014', 'activated');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
