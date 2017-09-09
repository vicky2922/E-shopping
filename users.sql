-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 12:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'Admin', 'gaurav@31'),
(2, 'vicky', 'vicky');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE IF NOT EXISTS `display` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(30) NOT NULL,
  `imagepath` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `imagename`, `imagepath`) VALUES
(1, 'smartphones', 'photo/Smartphones.jpg'),
(2, 'women footwear', 'photo/Footwear-Women.jpg'),
(3, 'mens footwear', 'photo/man-shoes.jpg'),
(4, 'laptop', 'photo/laptop.jpg'),
(5, 'laptop bags', 'photo/Laptop-Bags.jpg'),
(6, 'mens footwear', 'photo/shoes1.jpg'),
(7, 'ray ban', 'photo/ray-ban.jpg'),
(8, 'trimmer', 'photo/trimmer.jpg'),
(9, 'pendrive', 'photo/pendrive.jpg'),
(10, 'kitchen', 'photo/kitchen.jpg'),
(11, 'headphone', 'photo/headphone.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `discount` varchar(10) NOT NULL,
  `stock` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `name`, `image`, `price`, `discount`, `stock`) VALUES
(1, 'mens fashion', 'watch', 'photo/omega-watch.jpg', 250, '0', 50),
(10, 'mens fashion', 'watch', 'photo/download (1).jpg', 599, '10', 20),
(11, 'mens fashion', 'watch', 'photo/download.jpg', 1099, '0', 20),
(12, 'mens fashion', 'watch', 'photo/watch3.jpg', 1200, '20', 20),
(13, 'mens fashion', 'watch', 'photo/watch4.jpg', 1500, '30', 20),
(14, 'mens fashion', 'watch', 'photo/watch5.jpg', 5000, '10', 10),
(15, 'womens fashion', 'women footwear', 'photo/download (6).jpg', 700, '20', 20),
(16, 'womens fashion', 'women footwear', 'photo/images (9).jpg', 599, '0', 20),
(17, 'womens fashion', 'women footwear', 'photo/images (10).jpg', 300, '10', 20),
(18, 'womens fashion', 'women footwear', 'photo/image11.jpg', 250, '0', 20),
(19, 'mobiles', 'smartphones', 'photo/mobile1.jpg', 30000, '10', 30),
(20, 'mobiles', 'smartphones', 'photo/mobile3.jpg', 10000, '0', 20),
(21, 'mobiles', 'smartphones', 'photo/mobile5.jpg', 15000, '10', 10),
(22, 'mobiles', 'smartphones', 'photo/mobile6.jpg', 12999, '0', 20),
(23, 'mobiles', 'smartphones', 'photo/mobiles4.jpg', 8000, '0', 20),
(24, 'computers', 'laptop', 'photo/download (2).jpg', 42000, '10', 20),
(25, 'computers', 'laptop', 'photo/download (3).jpg', 70000, '10', 220),
(26, 'computers', 'laptop', 'photo/download (4).jpg', 38000, '0', 20),
(27, 'computers', 'laptop', 'photo/download (5).jpg', 35000, '10', 20),
(28, 'computers', 'laptop', 'photo/images (2).jpg', 65000, '20', 20),
(29, 'computers', 'laptop', 'photo/images (3).jpg', 45000, '0', 20),
(30, 'computers', 'laptop', 'photo/images (4).jpg', 39000, '10', 20),
(31, 'mens fashion', 'ray ban', 'photo/download (9).jpg', 2000, '0', 20),
(32, 'mens fashion', 'ray ban', 'photo/download (10).jpg', 3500, '20', 20),
(33, 'mens fashion', 'ray ban', 'photo/images (14).jpg', 4000, '10', 20),
(34, 'mens fashion', 'ray ban', 'photo/images (13).jpg', 2500, '0', 20),
(35, 'mens fashion', 'ray ban', 'photo/images.png', 2000, '20', 20),
(36, 'electronics', 'trimmer', 'photo/trimmer1.jpg', 300, '10', 20),
(37, 'electronics', 'trimmer', 'photo/trimmer2.jpg', 1000, '0', 20),
(38, 'electronics', 'trimmer', 'photo/trimmer3.jpg', 2000, '10', 20),
(39, 'electronics', 'trimmer', 'photo/trimmer4.jpg', 3500, '30', 20),
(40, 'electronics', 'pendrive', 'photo/download (7).jpg', 350, '10', 20),
(41, 'electronics', 'pendrive', 'photo/download (8).jpg', 500, '10', 20),
(42, 'electronics', 'pendrive', 'photo/images (12).jpg', 400, '0', 20),
(43, 'electronics', 'pendrive', 'photo/images (11).jpg', 800, '20', 20),
(44, 'electronics', 'headphone', 'photo/images (8).jpg', 3500, '10', 20),
(45, 'electronics', 'headphone', 'photo/images (7).jpg', 5000, '10', 20),
(46, 'electronics', 'headphone', 'photo/images (5).jpg', 2500, '0', 30),
(47, 'electronics', 'headphone', 'photo/images (6).jpg', 2000, '10', 20),
(48, 'mens fashion', 'mens footwear', 'photo/images (1).jpg', 5000, '20', 20),
(49, 'mens fashion', 'mens footwear', 'photo/images.jpg', 2000, '10', 20),
(50, 'mens fashion', 'mens footwear', 'photo/shoes1.jpg', 3500, '0', 20),
(51, 'mens fashion', 'mens footwear', 'photo/sneakers-for-men.jpg', 4500, '20', 20),
(52, 'mens fashion', 'mens footwear', 'photo/shoes3.jpg', 2000, '10', 20),
(53, 'mens fashion', 'mens footwear', 'photo/shoes2.jpg', 4000, '20', 20),
(54, 'mens fashion', 'watch', 'photo/download (1).jpg', 200, '0', 20),
(55, 'home', '3mistake', 'photo/3_mistake of my life.png', 300, '10', 2),
(56, 'home', 'Refrigarator', 'photo/download (11).jpg', 45000, '10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Contact` bigint(15) NOT NULL,
  `Gender` text NOT NULL,
  `State` text NOT NULL,
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Firstname`, `Lastname`, `E-mail`, `Contact`, `Gender`, `State`, `UserID`, `Password`) VALUES
(1, 'Gaurav', 'Dhranga', 'gauravdhranga@yahoo.com', 9662154461, 'male', 'india', 'gaurav', '9662154461'),
(2, 'Vicky', 'Bhuva', 'bhuvavicky10@gmail.com', 9099615152, 'male', 'india', 'vb02', 'vb02'),
(4, 'gaurav', 'dhranga', 'gauravdhranga@yahoo.com', 9662154461, 'male', 'australia', 'gaurav', 'gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(20) NOT NULL,
  `item` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dateofdelivery` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `customerName`, `item`, `address`, `dateofdelivery`) VALUES
(2, 'vicky', '"trimmer"', 'india', '2016-05-11'),
(7, 'Gaurav ', '"watch"', 'india', '2016-05-11'),
(9, 'jayraj', '"watch"', 'india', '2016-05-11'),
(10, 'Gaurav', 'trimmer', 'india', '2016-05-11'),
(11, 'Gaurav', '"ray ban"', 'australia', '2016-05-11'),
(12, 'abc', '"laptop"', 'australia', '2016-05-12'),
(13, 'gaurav', '"watch"', 'australia', '2016-05-12'),
(14, 'gaurav', '"smartphones"', 'india', '2016-06-01'),
(15, 'Gaurav', 'smartphones', 'india', '2016-07-23'),
(16, 'Gaurav', 'smartphones', 'india', '2016-11-08'),
(17, 'Gaurav', 'laptop', 'india', '2016-11-17'),
(18, 'Gaurav', 'ray ban', 'india', '2016-11-17'),
(19, 'gaurav', '"mens footwear"', 'india', '2016-11-17'),
(20, 'Gaurav', 'laptop', 'india', '2016-11-17'),
(21, 'Rahul', '"smartphones"', 'india', '2016-11-17'),
(22, 'abc', '"smartphones"', 'australia', '2016-11-17'),
(23, 'Vicky', 'watch', 'india', '2017-04-24'),
(24, 'Vicky', 'laptop', 'india', '2017-04-24'),
(25, 'v', '"watch"', 'australia', '2017-04-25'),
(26, 'Vicky', 'ray ban', 'india', '2017-04-30'),
(27, 'Vicky', 'women footwear', 'india', '2017-04-30'),
(28, 'Vicky', 'mens footwear', 'india', '2017-05-10'),
(29, 'a', '"smartphones"', 'australia', '2017-05-10'),
(30, 'Vicky', 'pendrive', 'india', '2017-09-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
