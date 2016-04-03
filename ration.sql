-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 07:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ration`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch1`
--

CREATE TABLE IF NOT EXISTS `batch1` (
`id` int(5) NOT NULL,
  `rice1` varchar(10) NOT NULL,
  `rice2` varchar(10) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `wheat` varchar(10) NOT NULL,
  `thoardhall` varchar(10) NOT NULL,
  `udpdhall` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch1`
--

INSERT INTO `batch1` (`id`, `rice1`, `rice2`, `sugar`, `wheat`, `thoardhall`, `udpdhall`) VALUES
(1, '10', '10', '2', '2', '1', '1'),
(2, '10', '10', '5', '3', '.5', '.5');

-- --------------------------------------------------------

--
-- Table structure for table `batch2`
--

CREATE TABLE IF NOT EXISTS `batch2` (
`id` int(5) NOT NULL,
  `rice1` varchar(5) NOT NULL,
  `rice2` varchar(5) NOT NULL,
  `sugar` varchar(5) NOT NULL,
  `wheat` varchar(5) NOT NULL,
  `thoardhall` varchar(5) NOT NULL,
  `udpdhall` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch2`
--

INSERT INTO `batch2` (`id`, `rice1`, `rice2`, `sugar`, `wheat`, `thoardhall`, `udpdhall`) VALUES
(1, '5', '5', '2', '2', '.5', '.5'),
(2, '5', '5', '1', '4', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customerid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cardno` varchar(15) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `name`, `cardno`, `mobileno`, `password`, `batch`) VALUES
(1, 'Duraisingam', 'G0176/234', '1234567890', '12345', 'batch1'),
(2, 'Sethupathi', 'G0132/876', '7765675612', '12345', 'batch2');

-- --------------------------------------------------------

--
-- Table structure for table `main_stock`
--

CREATE TABLE IF NOT EXISTS `main_stock` (
`id` int(5) NOT NULL,
  `shopno` varchar(10) NOT NULL,
  `rice1` varchar(10) NOT NULL,
  `rice2` varchar(10) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `wheat` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_stock`
--

INSERT INTO `main_stock` (`id`, `shopno`, `rice1`, `rice2`, `sugar`, `wheat`) VALUES
(1, 'B100', '100', '100', '100', '80'),
(2, 'B101', '90', '190', '120', '100');

-- --------------------------------------------------------

--
-- Table structure for table `shop_login`
--

CREATE TABLE IF NOT EXISTS `shop_login` (
`id` int(5) NOT NULL,
  `shopno` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_login`
--

INSERT INTO `shop_login` (`id`, `shopno`, `password`) VALUES
(1, 'B100', '1234'),
(2, 'B101', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`stockid` int(10) NOT NULL,
  `shopno` varchar(10) NOT NULL,
  `rice1` varchar(5) NOT NULL,
  `rice2` varchar(5) NOT NULL,
  `sugar` varchar(5) NOT NULL,
  `wheat` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockid`, `shopno`, `rice1`, `rice2`, `sugar`, `wheat`) VALUES
(1, 'B100', '100', '100', '100', '100'),
(2, 'B101', '10', '120', '32', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch1`
--
ALTER TABLE `batch1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch2`
--
ALTER TABLE `batch2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `main_stock`
--
ALTER TABLE `main_stock`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_login`
--
ALTER TABLE `shop_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`stockid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch1`
--
ALTER TABLE `batch1`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `batch2`
--
ALTER TABLE `batch2`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customerid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `main_stock`
--
ALTER TABLE `main_stock`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_login`
--
ALTER TABLE `shop_login`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `stockid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
