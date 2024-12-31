-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 08:07 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`,`email`, `password`) VALUES
(1, 'Mani','manikhant@gmail.com','mani2105'),
(2, 'Sachin', 'sachin@gmail.com','Sachin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tblarea`
--

CREATE TABLE IF NOT EXISTS `tblarea` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarea`
--

INSERT INTO `tblarea` (`id`, `name`, `pincode`) VALUES
(1, 'Haveri', 581110),
(2, 'Savanur', 581118),
(3, 'Shiggonv', 581110),
(4, 'Hanagal', 581110),
(5, 'Byadagi', 581110),
(6, 'Ranebennur', 581110);

-- --------------------------------------------------------

--
-- Table structure for table `tblbill`
--
CREATE TABLE IF NOT EXISTS `tblbill` (
  `no` int(3) NOT NULL,
  `customerid` int(3) NOT NULL,
  `date` date NOT NULL,
  `total_amount` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:Pending, 1:Approved, 2:Delivered'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbill`
--

INSERT INTO `tblbill` (`no`, `customerid`, `date`, `total_amount`, `status`) VALUES
(1, 1, '2023-06-08', 132, 1),
(2, 2, '2023-06-08', 36, 0),
(3, 2, '2023-06-08', 36, 0),
(4, 2, '2023-06-08', 120, 0),
(5, 2, '2023-06-08', 36, 0),
(6, 2, '2023-06-08', 250, 1),
(7, 2, '2023-06-08', 360, 1),
(8, 2, '2023-06-08', 990, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE IF NOT EXISTS `tblcart` (
  `id` int(3) NOT NULL,
  `customerid` int(3) NOT NULL,
  `productid` int(3) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`id`, `customerid`, `productid`, `qty`) VALUES
(1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `id` int(2) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `landmarkid` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contactno` int(10) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `updatedatetime` datetime NOT NULL,
  `verify` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`id`, `fname`, `lname`, `address`, `landmarkid`, `gender`, `contactno`, `emailid`, `password`, `updatedatetime`, `verify`) VALUES
(1, 'Manikhant', 'Chakrasali', ' Savanur', 2, 'Male', 9924209820, 'manikhant@gmail.com', '2ca556405fc8df0c5466689243e3be56', '2023-04-07 09:40:41', '0'),
(2, 'Sachin', 'Gasti', 'Teggihalli', 2, 'Male', 6362510146, 'sachin@gmail.com', '1455494c9f58563769b601366047c030', '2023-04-07 09:40:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomerorder`
--

CREATE TABLE IF NOT EXISTS `tblcustomerorder` (
  `no` int(3) NOT NULL,
  `billno` int(3) NOT NULL,
  `productid` int(3) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomerorder`
--

INSERT INTO `tblcustomerorder` (`no`, `billno`, `productid`, `qty`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1),
(3, 1, 3, 1),
(4, 2, 3, 1),
(5, 3, 3, 1),
(6, 4, 4, 1),
(7, 5, 3, 1),
(8, 6, 2, 1),
(9, 7, 4, 3),
(10, 8, 2, 3),
(11, 8, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbllandmark`
--

CREATE TABLE IF NOT EXISTS `tbllandmark` (
  `id` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Areaid` int(3) NOT NULL,
  `Status` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllandmark`
--

INSERT INTO `tbllandmark` (`id`, `Name`, `Areaid`, `Status`) VALUES
(1, 'Haveri', 1, 0),
(2, 'Savanur', 2, 0),
(3, ' Shiggonv', 3, 0),
(4, 'Hangal nagar', 4, 0),
(5, 'Sangur Gram', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblmeasurement`
--

CREATE TABLE IF NOT EXISTS `tblmeasurement` (
  `id` int(2) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitid` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmeasurement`
--

INSERT INTO `tblmeasurement` (`id`, `type`, `unitid`) VALUES
(1, '100 gm', 1),
(2, '200 gm', 1),
(3, '250 gm', 1),
(4, '500 gm', 1),
(5, '1 kg', 2),
(6, '2 kg', 2),
(7, '5 kg', 2),
(8, '6 kg', 2),
(9, '200 ml', 3),
(10, '500 ml', 3),
(11, '1 lt', 4),
(12, '2 lt', 4),
(13, '5 lt', 4),
(14, '6 lt', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblmembership`
--

-- --------------------------------------------------------
--
-- Table structure for table `tblmilkcollection`
--




CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(3) NOT NULL,
  `productcategoryid` int(2) NOT NULL,
  `measurementid` int(3) NOT NULL,
  `price` float NOT NULL,
  `manufacture_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `update_datetime` datetime NOT NULL,
  `quntity` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `productcategoryid`, `measurementid`, `price`, `manufacture_date`, `expire_date`, `update_datetime`, `status`,`quntity`) VALUES
(1, 2, 3, 60.0,  '2023-04-09', '2023-04-15', '2023-04-09 12:16:50', 1, 25),
(2, 3, 5, 250.0, '2023-04-09', '2023-04-15', '2023-04-09 12:16:50', 1, 25),
(3, 1, 10, 36.7, '2023-04-09', '2023-04-15', '2023-04-09 12:16:50', 1, 25),
(4, 2, 4, 120, '2023-04-09', '2023-04-15', '2023-04-09 12:16:50', 1, 25),
(5, 4, 2, 20,  '2023-04-09', '2023-04-15', '2023-04-09 12:16:50', 1, 25);

-- ---------------------------2023-04-15-------------------

--
-- Table structure for table `tblproductcategory`
--

CREATE TABLE IF NOT EXISTS `tblproductcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `imagepath` text NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductcategory`
--

INSERT INTO `tblproductcategory` (`id`, `name`, `imagepath`, `description`) VALUES
(1, 'Milk', 'image/milk.png', 'Our Milk is also pure milk. we only feed our cows with natural foods that contain the essential nutrients and vitamins they need. The cows always have access to clean water that is free from pollutants. At our Dairy Farm, we believe that what we feed our cows matters, because the healthier and balanced the food, the better quality the milk.'),
(2, 'Paneer', 'image/product-4-300x300.jpg', 'Paneer  is a fresh cheese common in the Indian subcontinent. It is an unaged, non-melting farmer cheese made by curdling milk with a vegetable-derived acid, such as lemon juice. Its acid-set form is called chhena.'),
(3, 'Ghee', 'image/ghee.jpg', 'Authentic pure desi ghee is made from cow milk which is untouched by human hands and comes from grass-fed happy cows directly from a state-of-the-art advanced and hygienic our Dairy Farm. our Ghee has a typical rich aroma, granular texture like homemade ghee, and high nutritional value. Direct from our Dairy Farm to your Table.'),
(4, 'Curd', 'image/product-3-300x300.jpg', 'Curds are a dairy product obtained by coagulating milk in a process called curdling.The increased acidity causes the milk proteins (casein) to tangle into solid masses, or curds. Milk that has been left to sour (raw milk alone or pasteurized milk with added lactic acid bacteria) will also naturally produce curds, and sour milk cheeses are produced this way.'),
(5, 'Butter Milk', 'image/product-9-300x300.jpg', 'Buttermilk is a dairy drink. Originally, buttermilk was the liquid left behind after churning butter out of cultured cream. This type of buttermilk is now specifically referred to as traditional buttermilk.');

-- --------------------------------------------------------

--
-- Table structure for table `tblretailer`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblRetailerorder`
--


--
-- Table structure for table `tblstaff`
--

CREATE TABLE IF NOT EXISTS `tblstaff` (
  `id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `landmarkid` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `updatedatetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `fname`, `lname`, `address`, `landmarkid`, `gender`, `contactno`, `role`, `email`, `password`, `updatedatetime`) VALUES
(1, 'Manikhanta', 'Chakrasali', 'kumbar oni,Savanur', 2, 'Male', 9924209820, 0, 'manikhant@gmail.com', 'mani2105', '2023-04-07 01:51:22'),
(2, 'Sachin', 'Gasti', 'Ram Nagar,Teggihalli', 1, 'Male', 6362510146, 0, 'sachin@gmail.com', 'Sachin@123', '2023-04-07 01:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblunit`
--

CREATE TABLE IF NOT EXISTS `tblunit` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblunit`
--

INSERT INTO `tblunit` (`id`, `type`) VALUES
(1, 'gram'),
(2, 'kilogram'),
(3, 'mililitre'),
(4, 'litre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblarea`
--
ALTER TABLE `tblarea`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tblbill`
--
ALTER TABLE `tblbill`
  ADD PRIMARY KEY (`no`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landmarkid` (`landmarkid`);

--
-- Indexes for table `tblcustomerorder`
--
ALTER TABLE `tblcustomerorder`
  ADD PRIMARY KEY (`no`),
  ADD KEY `tblcustomerorder_tblbill__fk` (`billno`),
  ADD KEY `tblcustomerorder_tblproduct__fk` (`productid`);

--
-- Indexes for table `tbllandmark`
--
ALTER TABLE `tbllandmark`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `Areaid` (`Areaid`);

--
-- Indexes for table `tblmeasurement`
--
ALTER TABLE `tblmeasurement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unitid` (`unitid`);

--
-- Indexes for table `tblmembership`
--


--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productcategoryid` (`productcategoryid`),
  ADD KEY `measurementid` (`measurementid`);

--
-- Indexes for table `tblproductcategory`
--
ALTER TABLE `tblproductcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblretailer`
--

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `landmarkid` (`landmarkid`);

--
-- Indexes for table `tblunit`
--
ALTER TABLE `tblunit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblarea`
--
ALTER TABLE `tblarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblbill`
--
ALTER TABLE `tblbill`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `tblcustomerorder`
--
ALTER TABLE `tblcustomerorder`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbllandmark`
--
ALTER TABLE `tbllandmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblmeasurement`
--
ALTER TABLE `tblmeasurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblmembership`
--

-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblproductcategory`
--
ALTER TABLE `tblproductcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblretailer`

-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblunit`
--
ALTER TABLE `tblunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbill`
--
ALTER TABLE `tblbill`
  ADD CONSTRAINT `tblbill_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `tblcustomer` (`id`);

--
-- Constraints for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD CONSTRAINT `tblcart_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `tblcustomer` (`id`),
  ADD CONSTRAINT `tblcart_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `tblproduct` (`id`);

--
-- Constraints for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD CONSTRAINT `tblcustomer_ibfk_1` FOREIGN KEY (`landmarkid`) REFERENCES `tbllandmark` (`id`);

--
-- Constraints for table `tblcustomerorder`
--
ALTER TABLE `tblcustomerorder`
  ADD CONSTRAINT `tblcustomerorder_tblbill__fk` FOREIGN KEY (`billno`) REFERENCES `tblbill` (`no`),
  ADD CONSTRAINT `tblcustomerorder_tblproduct__fk` FOREIGN KEY (`productid`) REFERENCES `tblproduct` (`id`);

--
-- Constraints for table `tbllandmark`
--
ALTER TABLE `tbllandmark`
  ADD CONSTRAINT `tbllandmark_ibfk_1` FOREIGN KEY (`Areaid`) REFERENCES `tblarea` (`id`);

--
-- Constraints for table `tblmeasurement`
--
ALTER TABLE `tblmeasurement`
  ADD CONSTRAINT `tblmeasurement_ibfk_1` FOREIGN KEY (`unitid`) REFERENCES `tblunit` (`id`);

--
-- Constraints for table `tblmembership`
--

-- Constraints for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD CONSTRAINT `tblproduct_ibfk_1` FOREIGN KEY (`productcategoryid`) REFERENCES `tblproductcategory` (`id`),
  ADD CONSTRAINT `tblproduct_ibfk_2` FOREIGN KEY (`measurementid`) REFERENCES `tblmeasurement` (`id`);

--
-- Constraints for table `tblretailer`
--

-- Constraints for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD CONSTRAINT `tblstaff_ibfk_1` FOREIGN KEY (`landmarkid`) REFERENCES `tbllandmark` (`id`);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
