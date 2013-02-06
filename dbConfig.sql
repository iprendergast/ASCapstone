-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2013 at 12:28 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ASCapstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `CommentDetailID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `CommentDetailID` (`CommentDetailID`),
  KEY `CommentDetailID_2` (`CommentDetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `CommentDetail`
--

CREATE TABLE `CommentDetail` (
  `CommentDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `CommentType` varchar(30) DEFAULT NULL,
  `Comment` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CommentDetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetail`
--

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `Qantity` int(11) NOT NULL,
  `Comments` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `StatusID` int(2) NOT NULL,
  `ProjectedShipDate` date NOT NULL,
  `OrderDate` date NOT NULL,
  `ShipDate` date NOT NULL,
  `TaskID` int(11) NOT NULL,
  `PONumberID` int(11) NOT NULL,
  `SpecialAssignment1` varchar(250) DEFAULT NULL,
  `SpecialAssignment2` varchar(250) DEFAULT NULL,
  `SpecialAssignment3` varchar(250) DEFAULT NULL,
  `PricePaid` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  PRIMARY KEY (`OrderDetailID`),
  KEY `OrderID` (`OrderID`),
  KEY `ProductID` (`ProductID`),
  KEY `Comments` (`Comments`),
  KEY `TaskID` (`TaskID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `ProductDescription` varchar(150) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `StatusID` int(11) NOT NULL AUTO_INCREMENT,
  `StatusDesc` varchar(30) NOT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TaskTable`
--

CREATE TABLE `TaskTable` (
  `TaskID` int(5) NOT NULL AUTO_INCREMENT,
  `OrderDetailID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  PRIMARY KEY (`TaskID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserTable`
--

CREATE TABLE `UserTable` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Street2` varchar(50) DEFAULT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `DOB` date NOT NULL,
  `PermissionLevel` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`CommentDetailID`) REFERENCES `CommentDetail` (`CommentDetailID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `OrderDetail`
--
ALTER TABLE `OrderDetail`
  ADD CONSTRAINT `OrderDetail_ibfk_1` FOREIGN KEY (`Comments`) REFERENCES `Comment` (`CommentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OrderDetail_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `Product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `OrderDetail` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `UserTable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `OrderDetail` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;
