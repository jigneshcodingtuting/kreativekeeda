-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 05:52 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreativekeeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE IF NOT EXISTS `admin_acc` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`id`, `userid`, `password`, `email`, `dob`) VALUES
(1, 'admin', 'ac2d583a17e047dec8024402a338c6e8', 'cooljigneshpanchal@gmail.com', '14-12-1989');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `date`, `time`, `status`) VALUES
(1, 'jignesh', 'cooljigneshpanchal@gmail.com', 'kjhoiho', '27-06-16', '12:13:53am', 0),
(2, 'jignesh', 'technicstravels@yahoo.com', 'jpoj', '27-06-16', '12:14:23am', 1),
(3, 'jignesh', 'cooljigneshpanchal@gmail.com', 'lkkjpo', '28-06-16', '11:40:15pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `dimension` varchar(25) NOT NULL,
  `material` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price_inr` varchar(10) NOT NULL,
  `price_usd` varchar(10) NOT NULL,
  `price_pound` varchar(10) NOT NULL,
  `price_euro` varchar(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `category`, `dimension`, `material`, `description`, `price_inr`, `price_usd`, `price_pound`, `price_euro`, `status`) VALUES
(1, 'p3.jpg', 'Rain Barish', 'Landscape & Cityscape', '100  X   150 (Inch)', 'Canvas', 'Its raining in seasion', 'INR 10000', 'USD 400', 'GBP 320', 'EUR 500', 1),
(2, 'p2.jpg', 'Developer', 'Abstract Art', '100  X   150 (Inch)', 'Canvas', 'The designer and developer of kreativekeeda.com', 'INR 11000', 'USD 499', 'GBP 430', 'EUR 1800', 0),
(3, 'tst (1).jpg', 'River and Bridge', 'Abstract Art', '100  X   150 (Inch)', 'Canvas', 'Nadi aur pull', 'INR 50000', 'USD 400', 'GBP 340', 'EUR 879', 0),
(4, 'tst (2).jpg', 'Candle', 'Modern Art', '50  X   50 (Inch)', 'Canvas', 'The light of candle', 'INR 6000', 'USD 340', 'GBP 234', 'EUR 320', 0),
(5, 'tst (3).jpg', 'Buddha', 'Modern Art', '100  X   150 (Inch)', 'Canvas', 'Buddha ka aashirwad', 'INR 6000', 'USD 400', 'GBP 346', 'EUR 300', 0),
(6, 'bag (5).jpg', 'Sadhu', 'Abstract Art', '100  X   150 (Inch)', 'Canvas', 'Scene of mahakumbh', 'INR 6000', 'USD 400', 'GBP 345', 'EUR 302', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `order` varchar(50) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `order_price` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order`, `name`, `email`, `country`, `address`, `city`, `state`, `pin_code`, `landmark`, `mobile`, `order_price`, `date`, `time`, `status`) VALUES
(7, 'Rain', 'Jignesh Panchal', 'cooljigneshpanchal@gmail.com', 'India', 'nathelav colony dahod raod', 'Banswara', 'rajasthan', '327001', '', '32423432', '', '24-06-16', '01:13:38pm', 1),
(8, 'Rain', 'Kavi', 'technicstravels@yahoo.com', 'Albania', 'sfs', 'Banswara', 'rajasthan', '327001', '', '32423432', '', '24-06-16', '01:26:35pm', 1),
(9, 'Rain', 'Jignesh Panchal', 'cooljigneshpanchal@gmail.com', 'India', 'nathelav colony, behind kabeer mandir.', 'Banswara', 'Rajasthan', '327001', '', '9468517086', '', '24-06-16', '07:41:30pm', 1),
(10, 'Imagine', 'jignesh', 'cooljigneshpanchal@gmail.com', 'Albania', ';lkjop', 'Banswara', 'rajasthan', '327001', 'Tata Indica outside the gate', '32423432', '', '27-06-16', '04:18:30am', 1),
(11, 'Developer', 'jignesh', 'cooljigneshpanchal@gmail.com', 'Albania', 'asdcdc', 'Banswara', 'rajasthan', '327001', '', '32423432', '', '27-06-16', '04:28:57am', 0),
(12, 'Rain Barish', 'jignesh', 'cooljigneshpanchal@gmail.com', 'India', 'poijpoj', 'Banswara', 'rajasthan', '327001', 'Tata Indica outside the gate', '32423432', 'EUR 500', '27-06-16', '06:42:45am', 0),
(13, 'Rain Barish', 'jignesh', 'cooljigneshpanchal@gmail.com', 'Albania', 'lkju90', 'Banswara', 'rajasthan', '327001', 'Tata Indica outside the gate', '32423432', 'INR 10000', '28-06-16', '07:32:41am', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
