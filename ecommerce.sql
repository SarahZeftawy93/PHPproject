-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2016 at 12:42 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `Categ_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Categ_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Categ_id`),
  UNIQUE KEY `Categ_Name` (`Categ_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Categ_id`, `Categ_Name`) VALUES
(2, 'Men Suits'),
(1, 'Women Dresses');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `Customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `interests` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `credit_limi` int(10) unsigned NOT NULL,
  `state` int(1) NOT NULL,
  PRIMARY KEY (`Customer_id`),
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `interests` (`interests`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Customer_id`, `Name`, `birthday`, `email`, `address`, `job`, `interests`, `password`, `credit_limi`, `state`) VALUES
(13, 'Sarah', '1993-09-27', 'sarah@gmail.com', 'Mit Ghamr', 'itian', 'Black Dress, red dress', 'iti', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `SubCategoryId` int(10) unsigned NOT NULL,
  `Product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(50) NOT NULL,
  `Current_Price` int(10) unsigned NOT NULL,
  `Available_Quantity` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `SubCategoryId` (`SubCategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`SubCategoryId`, `Product_id`, `Product_Name`, `Current_Price`, `Available_Quantity`) VALUES
(1, 1, 'Mydress', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Shopping_Cart`
--

CREATE TABLE IF NOT EXISTS `Shopping_Cart` (
  `Cust_id` int(10) unsigned NOT NULL DEFAULT '0',
  `purchase_date` date NOT NULL DEFAULT '0000-00-00',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `required_quantity` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`Cust_id`,`purchase_date`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sub_Category`
--

CREATE TABLE IF NOT EXISTS `Sub_Category` (
  `Category_id` int(10) unsigned NOT NULL,
  `Sub_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Sub_category_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_id`,`Sub_category_id`),
  UNIQUE KEY `Sub_category_Name` (`Sub_category_Name`),
  UNIQUE KEY `Sub_category_id` (`Sub_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Sub_Category`
--

INSERT INTO `Sub_Category` (`Category_id`, `Sub_category_id`, `Sub_category_Name`) VALUES
(1, 2, 'Black Dress'),
(1, 1, 'red dress');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`SubCategoryId`) REFERENCES `Sub_Category` (`Sub_category_id`);

--
-- Constraints for table `Shopping_Cart`
--
ALTER TABLE `Shopping_Cart`
  ADD CONSTRAINT `Shopping_Cart_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `Customer` (`Customer_id`),
  ADD CONSTRAINT `Shopping_Cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Product` (`Product_id`);

--
-- Constraints for table `Sub_Category`
--
ALTER TABLE `Sub_Category`
  ADD CONSTRAINT `Sub_Category_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`Categ_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
