-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2014 at 07:59 PM
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
  `gene_seq` mediumtext NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(13,3) NOT NULL,
  `option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`customer_id`, `id`, `name`, `gene_seq`, `qty`, `price`, `option`) VALUES
('0', '1382463588', '250 pnmole DNA oligo', 'name,sequence', 8, '0.200', 'xxx'),
('0', '1382599479', '250 pnmole DNA oligo', 'xxxxxxxxxxxxxxx,vvvvvvvvvv', 10, '0.200', 'ccc'),
('leiw414@gmail.com', '1390541151', 'Genes', 'djahkdak\r\ndahhdkaa', 8, '0.200', 'xx');

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
('06875428eb6e2d83f27b2a9d30f42bbf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392318664, ''),
('11ca01cdebe39142fc512bdacfe34215', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392323108, ''),
('2f278441070efbbfc53cdd29ae6247b5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392322708, 'a:23:{s:9:"user_data";s:0:"";s:11:"login_state";b:1;s:2:"id";s:17:"leiw414@gmail.com";s:13:"cart_contents";a:3:{s:32:"996c868ddce620bc96b0a80f77682b3a";a:8:{s:5:"rowid";s:32:"996c868ddce620bc96b0a80f77682b3a";s:2:"id";s:10:"1390541151";s:4:"name";s:5:"Genes";s:8:"gene_seq";s:18:"djahkdak\r\ndahhdkaa";s:3:"qty";s:1:"8";s:6:"option";s:2:"xx";s:5:"price";s:4:".200";s:8:"subtotal";d:1.600000000000000088817841970012523233890533447265625;}s:11:"total_items";i:8;s:10:"cart_total";d:1.600000000000000088817841970012523233890533447265625;}s:13:"shipping_name";s:8:"Lei Wang";s:17:"shipping_address1";s:27:"425 Hillsborough ST APT 10F";s:17:"shipping_address2";s:3:"xin";s:13:"shipping_city";s:11:"Chapel Hill";s:14:"shipping_state";s:14:"North Carolina";s:12:"shipping_zip";s:5:"27514";s:16:"shipping_country";s:3:"USA";s:14:"shipping_phone";s:10:"9193608513";s:12:"payment_name";s:8:"Lei Wang";s:15:"payment_card_no";s:7:"7777777";s:17:"payment_last_four";s:4:"7777";s:16:"payment_address1";s:27:"425 Hillsborough ST APT 10F";s:16:"payment_address2";s:3:"xin";s:12:"payment_city";s:11:"Chapel Hill";s:13:"payment_state";s:14:"North Carolina";s:11:"payment_zip";s:5:"27514";s:15:"payment_country";s:2:"US";s:13:"payment_phone";s:10:"9193608513";s:8:"order_id";i:1392322715;}'),
('3f62d2658cf6f477bf717f49165cfa40', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392321733, ''),
('afc356a6d1180291df1607abd73cfa09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392325306, 'a:4:{s:9:"user_data";s:0:"";s:11:"login_state";b:1;s:2:"id";s:17:"leiw414@gmail.com";s:13:"cart_contents";a:3:{s:32:"996c868ddce620bc96b0a80f77682b3a";a:8:{s:5:"rowid";s:32:"996c868ddce620bc96b0a80f77682b3a";s:2:"id";s:10:"1390541151";s:4:"name";s:5:"Genes";s:8:"gene_seq";s:18:"djahkdak\r\ndahhdkaa";s:3:"qty";s:1:"8";s:6:"option";s:2:"xx";s:5:"price";s:4:".200";s:8:"subtotal";d:1.600000000000000088817841970012523233890533447265625;}s:11:"total_items";i:8;s:10:"cart_total";d:1.600000000000000088817841970012523233890533447265625;}}'),
('cd9380fbaa4d8be010e3165fb4712246', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392325514, 'a:4:{s:9:"user_data";s:0:"";s:11:"login_state";b:1;s:2:"id";s:17:"leiw414@gmail.com";s:13:"cart_contents";a:3:{s:32:"996c868ddce620bc96b0a80f77682b3a";a:8:{s:5:"rowid";s:32:"996c868ddce620bc96b0a80f77682b3a";s:2:"id";s:10:"1390541151";s:4:"name";s:5:"Genes";s:8:"gene_seq";s:18:"djahkdak\r\ndahhdkaa";s:3:"qty";s:1:"8";s:6:"option";s:2:"xx";s:5:"price";s:4:".200";s:8:"subtotal";d:1.600000000000000088817841970012523233890533447265625;}s:11:"total_items";i:8;s:10:"cart_total";d:1.600000000000000088817841970012523233890533447265625;}}'),
('e2b2b9bb3942bd27bba61c4622f84d87', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36', 1392318115, '');

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

CREATE TABLE IF NOT EXISTS `inquire` (
  `inquire_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `gene_seq` mediumtext NOT NULL,
  `comment` varchar(255) NOT NULL,
  `inquire_date` varchar(30) NOT NULL,
  `quote` varchar(255) NOT NULL,
  PRIMARY KEY (`inquire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `inquire`
--

INSERT INTO `inquire` (`inquire_id`, `customer_id`, `prod_name`, `gene_seq`, `comment`, `inquire_date`, `quote`) VALUES
(4, '245570207@qq.com', 'Custom DNA Oligo Pools', 'ss', '', '10/04/2013', 'processing'),
(12, '245570207@qq.com', 'Gene Regulation', '>name\r\nsequence', 'xx', '10/09/2013', 'processing'),
(13, '245570207@qq.com', 'Guaranteed Protein Expression', '>name\r\nsequence', 'yy', '10/09/2013', 'processing'),
(14, '245570207@qq.com', 'Oligo Pools', 'name,daddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadaddadadda', '', '10/09/2013', 'processing'),
(15, 'leiw414@gmail.com', 'Oligo Pools', 'ajdga,dhai', 'xxx', '10/11/2013', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `internal_user`
--

CREATE TABLE IF NOT EXISTS `internal_user` (
  `Username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal_user`
--

INSERT INTO `internal_user` (`Username`, `password`, `last_login`) VALUES
('leiw414@gmail.com', 'nihaoma', '10/31/2013');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_no`, `customer_id`, `order_id`, `order_date`, `total`, `s_name`, `s_address1`, `s_address2`, `s_city`, `s_state`, `s_zip`, `s_country`, `s_phone`, `p_name`, `p_card_no`, `p_last_four`, `p_month`, `p_year`, `p_cvv`, `p_card_type`, `p_address1`, `p_address2`, `p_zip`, `p_city`, `p_state`, `p_country`, `p_phone`) VALUES
(1, 'leiw414@gmail.com', '1381376001', '10/10/2013', '25.00', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'US', '9193608513', 'Lei Wang', '7777777', '7777', '01', '2013', '444', 'PO Number', '425 Hillsborough ST APT 10F', 'xin', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_no` int(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gene_seq` mediumtext NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` decimal(13,2) NOT NULL,
  `subtotal` decimal(13,2) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_no`, `option`, `name`, `gene_seq`, `qty`, `unit_price`, `subtotal`) VALUES
(1, 1, '', '250 pnmole DNA oligo', 'name,sequencesequencesequencesequencesequencesequencesequencesequencesequencesequencesequence', 88, '0.25', '22.00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`customer_id`, `card_id`, `name`, `card_no`, `last_four`, `month`, `year`, `cvv`, `card_type`, `address1`, `address2`, `zip`, `city`, `state`, `country`, `phone`, `method`) VALUES
('nataliemmtt@gmail.com', 2, 'Lei Wang', '1111111111111111', '1111', '01', '2013', '111', 'Discover', '425 Hillsborough ST APT 10F', '', '27514', 'Chapel Hill', 'NC', 'US', '9193608513', 1),
('leiw414@gmail.com', 5, 'Lei Wang', '1111111111111111', '1111', '01', '2013', '111', 'Discover', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 1),
('leiw414@gmail.com', 6, 'Lei Wang', '4444444444444444', '4444', '01', '2013', '444', 'Discover', '425 Hillsborough ST APT 10F', '', '27514', 'Chapel Hill', 'IL', 'US', '9193608513', 1),
('245570207@qq.com', 10, 'Lei Wang', '1111111111111111', '1111', '01', '2013', '222', 'Visa', '425 Hillsborough Street', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 1),
('245570207@qq.com', 11, 'Lei Wang', '2222222', '2222', '', '', '', 'PO Number', '425 Hillsborough ST APT 10F', '', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 2),
('leiw414@gmail.com', 12, 'Lei Wang', '7777777', '7777', '', '', '', 'PO Number', '425 Hillsborough ST APT 10F', 'xin', '27514', 'Chapel Hill', 'North Carolina', 'US', '9193608513', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `length` varchar(255) NOT NULL,
  `price1` decimal(13,2) NOT NULL,
  `price2` decimal(13,2) NOT NULL,
  `price3` decimal(13,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `length`, `price1`, `price2`, `price3`, `category`) VALUES
(1, '250 pnmole DNA oligo', '5 - 60 Bases', '0.20', '0.25', '0.00', '1'),
(2, '5 nmole DNA oligo', '5 - 120 Bases', '0.30', '0.35', '0.00', '1'),
(3, '25 nmole DNA oligo', '5 - 120 Bases', '0.38', '0.40', '0.00', '1'),
(4, '100 nmole DNA oligo', '5 - 120 Bases', '0.60', '0.65', '0.00', '1'),
(5, '250 pmole DNA Oligo Plates', '5 - 120 Bases', '0.15', '0.20', '0.00', '1'),
(6, '5 nmole DNA Oligo Plates', '5 - 120 Bases', '0.20', '0.25', '0.00', '1'),
(7, '25 nmole DNA Oligo Plates', '5 - 120 Bases', '0.20', '0.30', '0.00', '1'),
(8, '100 nmole DNA Oligo Plates', '5 - 120 Bases', '0.30', '0.35', '0.00', '1'),
(9, 'Oligo Pools', '', '0.00', '0.00', '0.00', '1'),
(10, 'Genes', '< 700 bp, 700-2000, 2000 -5000Bases', '0.20', '0.30', '0.40', '2'),
(11, 'Genes Plates', '< 700 bp, 700-2000, 2000 -5000Bases', '0.20', '0.30', '0.40', '2'),
(12, 'Gene Libraries', '', '0.00', '0.00', '0.00', '2'),
(13, 'Gene Regulation', '', '0.00', '0.00', '0.00', '3'),
(14, 'Codon Optimization', '', '0.00', '0.00', '0.00', '3'),
(15, 'Protein Design and Evolution', '', '0.00', '0.00', '0.00', '3'),
(16, 'Guaranteed Protein Expression', '', '0.00', '0.00', '0.00', '4'),
(17, 'Protein Variants', '', '0.00', '0.00', '0.00', '4');

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
(1, 'nataliemmtt@gmail.com', 'xu', '425 Hillsborought ST ', '', 'Chapel Hill', 'NC', '27514', 'USA', '9193608513'),
(7, 'leiw414@gmail.com', 'Lei Wang', '425 Hillsborough ST APT 10F', '', 'Chapel Hill', 'Tennessee', '27514', 'USA', '9193608513'),
(8, '245570207@qq.com', 'Lei Wang', '425 Hillsborough ST APT 10F', '', 'Chapel Hill', 'North Carolina', '27514', 'USA', '9193608513'),
(9, '245570207@qq.com', 'Lei Wang', '425 Hillsborough ST 10F                                                            ', 'DD', 'Chapel Hill', 'NC', '27514', 'USA', '9193608513'),
(10, 'leiw414@gmail.com', 'Lei Wang', '425 Hillsborough ST APT 10F', 'xin', 'Chapel Hill', 'North Carolina', '27514', 'USA', '9193608513');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `state_name` varchar(100) NOT NULL,
  `tax` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `customer_id` varchar(255) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `opt_email` varchar(100) NOT NULL,
  `PIname` varchar(100) NOT NULL,
  `Org_type` varchar(30) NOT NULL,
  `Org_name` varchar(255) NOT NULL,
  `tel1` varchar(12) NOT NULL,
  `registration_date` varchar(30) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`customer_id`, `passwd`, `fname`, `lname`, `opt_email`, `PIname`, `Org_type`, `Org_name`, `tel1`, `registration_date`, `last_login`) VALUES
('245570207@qq.com', 'nihaoma', 'Lei', 'Wang', '245570207@qq.com', 'Lei', 'Academic', 'hahaha', '9193608513', '09/10/2013', '10/31/2013'),
('leiw414@gmail.com', 'nihaoma', 'Lei', 'Wang', '245570207@qq.com', 'Lei', 'Academic', 'hahah', '9193608513', '09/13/2013', '02/13/2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
