-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2023 at 02:25 PM
-- Server version: 5.7.42
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `njm55_GroupMarketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressid` varchar(255) DEFAULT NULL,
  `addressline1` varchar(255) DEFAULT NULL,
  `addressline2` varchar(255) DEFAULT NULL,
  `postcode` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addressoption`
--

CREATE TABLE `addressoption` (
  `addressoptionid` varchar(255) NOT NULL,
  `addressid` varchar(255) DEFAULT NULL,
  `campuscode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `campusid` varchar(255) DEFAULT NULL,
  `campusname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` varchar(255) NOT NULL,
  `card_number` int(11) DEFAULT NULL,
  `sortcode` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `cardholder_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Checkout`
--

CREATE TABLE `Checkout` (
  `oldprice` decimal(13,2) DEFAULT NULL,
  `newprice` decimal(13,2) DEFAULT NULL,
  `checkoutid` varchar(255) NOT NULL,
  `productid` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `cardid` varchar(255) DEFAULT NULL,
  `tokenid` varchar(255) DEFAULT NULL,
  `addressoptionid` varchar(255) DEFAULT NULL,
  `custID` varchar(255) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Ordertbl`
--

CREATE TABLE `Ordertbl` (
  `order_id` varchar(255) DEFAULT NULL,
  `dateorderplaced` varchar(255) DEFAULT NULL,
  `carttotal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productidID` varchar(255) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `productdesc` varchar(255) DEFAULT NULL,
  `sellerid` varchar(255) DEFAULT NULL,
  `sold` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `tokenid` varchar(255) DEFAULT NULL,
  `tokentotal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `studentid` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `sellerid` varchar(255) DEFAULT NULL,
  `custid` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressoption`
--
ALTER TABLE `addressoption`
  ADD PRIMARY KEY (`addressoptionid`),
  ADD KEY `campuscode` (`campuscode`),
  ADD KEY `addressid` (`addressid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `Checkout`
--
ALTER TABLE `Checkout`
  ADD PRIMARY KEY (`checkoutid`),
  ADD KEY `tokenid` (`tokenid`),
  ADD KEY `cardid` (`cardid`),
  ADD KEY `addressoptionid` (`addressoptionid`),
  ADD KEY `custID` (`custID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productidID`),
  ADD KEY `sellerid` (`sellerid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `sellerid` (`sellerid`),
  ADD UNIQUE KEY `custid` (`custid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
