-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2013 at 01:46 AM
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
  `Inactive` tinyint(1) DEFAULT NULL,
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
  `CommentType` varchar(30) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`CommentDetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetail`
--

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `Qantity` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `StatusID` int(2) NOT NULL DEFAULT '1',
  `ProjectedShipDate` date NOT NULL,
  `OrderDate` date NOT NULL,
  `ShipDate` date DEFAULT NULL,
  `TaskID` int(11) DEFAULT NULL,
  `PONumberID` int(11) DEFAULT NULL,
  `SpecialAssignment1` varchar(250) DEFAULT NULL,
  `SpecialAssignment2` varchar(250) DEFAULT NULL,
  `SpecialAssignment3` varchar(250) DEFAULT NULL,
  `PricePaid` int(11) DEFAULT NULL,
  `OrderID` int(11) NOT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`OrderDetailID`),
  KEY `OrderID` (`OrderID`),
  KEY `ProductID` (`ProductID`),
  KEY `TaskID` (`TaskID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `ProductDescription` varchar(150) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `StatusID` int(11) NOT NULL AUTO_INCREMENT,
  `StatusDesc` varchar(30) NOT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
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
  `StartTime` datetime DEFAULT NULL,
  `EndTime` datetime DEFAULT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
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
  `Company` varchar(30) DEFAULT NULL,
  `Street` varchar(50) NOT NULL,
  `Street2` varchar(50) DEFAULT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `DOB` date NOT NULL,
  `PermissionLevel` int(2) NOT NULL DEFAULT '1',
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department` varchar(30) DEFAULT NULL,
  `Inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `UserTable`
--

INSERT INTO `UserTable` (`UserID`, `FirstName`, `MiddleName`, `LastName`, `Company`, `Street`, `Street2`, `City`, `State`, `Zip`, `Phone`, `Email`, `DOB`, `PermissionLevel`, `Username`, `Password`, `Department`, `Inactive`) VALUES
(1, 'ian', 'r', 'prendergast', 'amica', '272 division', '', 'east greenwich', 'ri', '02818', '33333333', 'werw@fgf.com', '0000-00-00', 0, 'iprendergast', '123qwe', '', NULL),
(2, 'klfas', 'skjhdf', 'hkjfs', 'khj', 'hkjh', 'hjk', 'h', 'kj', 'jh', 'jkh', 'jkh', '0000-00-00', 0, 'hkj', 'hkj', 'hkj', NULL),
(3, 'asdfa', 'fghdgf', '', 'ad', '33dde', NULL, 'df', 'ff', '33333', 'dfd', 'sdf', '2013-02-13', 0, 'fgfd', 'sdgfd', 'gf', NULL),
(4, 'ss', 'ss', 'ss', NULL, 'ss', NULL, 'ss', '', '', '', '', '0000-00-00', 0, '', '', '', NULL),
(5, 'ss', 'ss', 'ss', NULL, 'ss', NULL, 'ss', 'ss', 'sss', 'ss', 'ss', '2013-02-13', 0, 'ss', 'ss', '', NULL);
