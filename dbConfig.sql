-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2013 at 02:59 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ASCapstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetail`
--

CREATE TABLE `OrderDetail` (
  `OrderDetailID` int(5) NOT NULL AUTO_INCREMENT,
  `Qantity` int(5) NOT NULL,
  `OrderID` int(5) NOT NULL,
  `ProductID` int(5) NOT NULL,
  `StatusID` int(2) NOT NULL,
  `EmployeeID` int(5) NOT NULL,
  `ProjectedShipDate` date NOT NULL,
  `OrderDate` date NOT NULL,
  `ShipDate` date NOT NULL,
  PRIMARY KEY (`OrderDetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(5) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(5) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Permission`
--

CREATE TABLE `Permission` (
  `PermissionID` int(5) NOT NULL AUTO_INCREMENT,
  `PermissionLevel` varchar(30) NOT NULL,
  PRIMARY KEY (`PermissionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ProductID` int(5) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `ProductDescription` varchar(150) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `StatusID` int(5) NOT NULL AUTO_INCREMENT,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserTable`
--

CREATE TABLE `UserTable` (
  `UserID` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Street2` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `DOB` varchar(8) NOT NULL,
  `PermissionsID` int(2) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
