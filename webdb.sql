-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2017 at 07:15 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `adminId` varchar(5) NOT NULL,
  `adminFirstName` varchar(20) DEFAULT NULL,
  `adminLastName` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminId`, `adminFirstName`, `adminLastName`, `password`) VALUES
('Shubh', 'Shubhojeet', 'Paul', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `sn` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `customerId` int(10) NOT NULL,
  `productId` int(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `netPrice` double NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `colorchart`
--

DROP TABLE IF EXISTS `colorchart`;
CREATE TABLE IF NOT EXISTS `colorchart` (
  `colorId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `colorName` varchar(10) NOT NULL,
  PRIMARY KEY (`colorId`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

DROP TABLE IF EXISTS `customerlogin`;
CREATE TABLE IF NOT EXISTS `customerlogin` (
  `customerId` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`customerId`),
  UNIQUE KEY `emailId` (`emailId`),
  UNIQUE KEY `customerId_2` (`customerId`),
  KEY `customerId` (`customerId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`customerId`, `firstName`, `lastName`, `emailId`, `password`) VALUES
(0000000001, 'Shubhojeet', 'Paul', 'sp@gmail.com', 'admin'),
(0000000005, 'effewf', 'ewfewfwe', 'edr@sdfsdf', 'asdfg'),
(0000000004, 'dcsds', 'sadsad', 'sad@sd', 'asd'),
(0000000006, 'Saurav', 'Kumar', 'sk@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customershippingdetails`
--

DROP TABLE IF EXISTS `customershippingdetails`;
CREATE TABLE IF NOT EXISTS `customershippingdetails` (
  `customerId` int(10) DEFAULT NULL,
  `orderNumber` int(20) DEFAULT NULL,
  `addressLine1` varchar(40) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `contactNumber` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `orderNumber` int(20) DEFAULT NULL,
  `customerId` int(10) DEFAULT NULL,
  `productId` int(3) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `netPrice` float DEFAULT NULL,
  `orderConfirm` bit(1) DEFAULT NULL,
  `OrderConfirmAdmin` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderNumber`, `customerId`, `productId`, `color`, `qty`, `netPrice`, `orderConfirm`, `OrderConfirmAdmin`) VALUES
(1, 6, 5, 'black', 3, 20997, NULL, NULL),
(1, 6, 2, 'black', 4, 25996, NULL, NULL),
(1, 6, 6, 'black', 1, 7999, NULL, NULL),
(2, 6, 4, 'black', 3, 21597, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

DROP TABLE IF EXISTS `productcategory`;
CREATE TABLE IF NOT EXISTS `productcategory` (
  `prodCat` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`prodCat`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`prodCat`, `categoryName`) VALUES
(1, 'duffels'),
(2, 'tophandles'),
(3, 'crossbodies'),
(4, 'totes'),
(5, 'satchels'),
(6, 'backpacks');

-- --------------------------------------------------------

--
-- Table structure for table `productcolorvariant`
--

DROP TABLE IF EXISTS `productcolorvariant`;
CREATE TABLE IF NOT EXISTS `productcolorvariant` (
  `productId` int(3) DEFAULT NULL,
  `colorId` int(11) NOT NULL,
  `priceAddition` int(11) NOT NULL,
  `productColorImage` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

DROP TABLE IF EXISTS `productdetails`;
CREATE TABLE IF NOT EXISTS `productdetails` (
  `productId` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `prodCat` int(11) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `productBasePrice` float DEFAULT NULL,
  `productDescription` text,
  `productDefaultImage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`productId`, `prodCat`, `productName`, `productBasePrice`, `productDescription`, `productDefaultImage`) VALUES
(002, 2, 'Top handle Trapezium Leather Bag', 6499, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/topHandles.JPG'),
(001, 1, 'Carry-On Duffel Bag', 6799, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/duffel.JPG'),
(003, 3, 'Blocking Crossbody Bag', 6499, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/crossbodies.JPG'),
(004, 4, 'Trapezoid Flap Tote Bag', 7199, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/totes.JPG'),
(005, 5, 'Mercer Satchel Bag', 6999, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/satchels.JPG'),
(006, 6, 'Leather Front Flap Backpack', 7999, 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'images/product/backpacks.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
