-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 05:20 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inoac`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(10) NOT NULL,
  `orderid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(10) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
  `disid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `msgdate` date NOT NULL,
  `msgtime` varchar(20) NOT NULL,
  `repdate` date NOT NULL,
  `reptime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `itemid` int(10) NOT NULL,
  `catid` int(10) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `avbqty` int(30) NOT NULL,
  `itemprice` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE IF NOT EXISTS `uorder` (
  `oderid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `subtotal` varchar(30) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `first_name`, `last_name`, `email`, `telephone`, `password`, `status`) VALUES
(1, 'nishadi', 'thilakarathna', 'nishadi.nkt94@gmail.com', 712362734, '123123', 'admin'),
(2, 'thilini', 'fernando', 'thilinifernando@gmail.com', 712362734, '123456', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `ulogid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `intime` varchar(20) NOT NULL,
  `outtime` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `cartid` (`cartid`),
  ADD KEY `cartid_2` (`cartid`,`orderid`,`itemid`,`qty`,`discount`,`total`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `catid_2` (`catid`,`catname`,`status`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`disid`),
  ADD KEY `disid` (`disid`),
  ADD KEY `disid_2` (`disid`,`userid`,`msg`(767),`reply`(767),`msgdate`,`msgtime`,`repdate`,`reptime`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `itemid` (`itemid`),
  ADD KEY `itemid_2` (`itemid`,`catid`,`itemname`,`avbqty`,`itemprice`,`color`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`oderid`),
  ADD KEY `oderid` (`oderid`),
  ADD KEY `oderid_2` (`oderid`,`userid`,`date`,`time`,`total`,`discount`,`subtotal`,`status`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userid_2` (`userid`),
  ADD KEY `userid_3` (`userid`,`first_name`,`last_name`,`email`,`telephone`,`password`,`status`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`ulogid`),
  ADD KEY `ulogid` (`ulogid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `ulogid_2` (`ulogid`,`userid`,`intime`,`outtime`,`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `oderid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `ulogid` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `uorder` (`oderid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `discussion_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `uorder`
--
ALTER TABLE `uorder`
  ADD CONSTRAINT `uorder_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userlog`
--
ALTER TABLE `userlog`
  ADD CONSTRAINT `userlog_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
