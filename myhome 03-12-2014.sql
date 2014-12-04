-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2014 at 07:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BranchID` char(7) NOT NULL,
  `BranchLongitude` float NOT NULL,
  `BranchLatitude` float NOT NULL,
  `BranchAddress` varchar(50) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `StaffID` char(7) NOT NULL,
  PRIMARY KEY (`BranchID`,`StaffID`),
  KEY `StaffID` (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailrundown`
--

CREATE TABLE IF NOT EXISTS `detailrundown` (
  `DetailRunDownID` char(7) NOT NULL,
  `EventID` char(7) NOT NULL,
  `LocationID` char(7) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `StartTime` varchar(20) NOT NULL,
  `EndTime` varchar(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`DetailRunDownID`,`EventID`,`LocationID`),
  KEY `EventID` (`EventID`),
  KEY `LocationID` (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `EventID` char(7) NOT NULL,
  `EventTitle` varchar(50) NOT NULL,
  `EventType` varchar(20) NOT NULL,
  `EventDesc` text NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `PaymentType` varchar(20) NOT NULL,
  `RegistrationFee` float DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleryevent`
--

CREATE TABLE IF NOT EXISTS `galleryevent` (
  `GalleryID` char(7) NOT NULL,
  `Source` text NOT NULL,
  `Type` varchar(20) NOT NULL,
  `EventID` char(7) NOT NULL,
  PRIMARY KEY (`GalleryID`,`EventID`),
  KEY `EventID` (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `LocationID` char(7) NOT NULL,
  `LocationName` varchar(50) NOT NULL,
  `LocationAddress` varchar(50) NOT NULL,
  `LocationLongitude` float NOT NULL,
  `LocationLatitude` float NOT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `MemberID` char(7) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `MemberName` varchar(50) NOT NULL,
  `MemberAddress` varchar(50) NOT NULL,
  `MemberEmail` varchar(50) NOT NULL,
  `MemberPhone` varchar(20) NOT NULL,
  `MemberPhoto` varchar(100) NOT NULL,
  `BranchID` char(7) NOT NULL,
  PRIMARY KEY (`MemberID`,`BranchID`),
  KEY `BranchID` (`BranchID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsID` char(7) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `StaffID` char(7) NOT NULL,
  PRIMARY KEY (`NewsID`,`StaffID`),
  KEY `StaffID` (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phonemember`
--

CREATE TABLE IF NOT EXISTS `phonemember` (
  `MemberPhoneID` char(7) NOT NULL,
  `PhoneNumber` char(7) NOT NULL,
  `MemberID` varchar(20) NOT NULL,
  PRIMARY KEY (`MemberPhoneID`,`MemberID`),
  KEY `MemberID` (`MemberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phonestaff`
--

CREATE TABLE IF NOT EXISTS `phonestaff` (
  `StaffPhoneID` char(7) NOT NULL,
  `StaffID` char(7) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  PRIMARY KEY (`StaffPhoneID`,`StaffID`),
  KEY `StaffID` (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prayerrequest`
--

CREATE TABLE IF NOT EXISTS `prayerrequest` (
  `RequestID` char(7) NOT NULL,
  `SendDate` datetime NOT NULL,
  `PrayerDesc` text NOT NULL,
  `Status` varchar(20) NOT NULL,
  `AcceptDate` datetime DEFAULT NULL,
  `MemberID` char(7) NOT NULL,
  PRIMARY KEY (`RequestID`,`MemberID`),
  KEY `MemberID` (`MemberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `EventID` char(7) NOT NULL,
  `MemberID` char(7) NOT NULL,
  `ParticipantID` varchar(20) NOT NULL,
  `PaymentStatus` varchar(20) DEFAULT NULL,
  `BankAccountFrom` varchar(50) DEFAULT NULL,
  `BankAccountTo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`EventID`,`MemberID`),
  KEY `MemberID` (`MemberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `StaffID` char(7) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `StaffRole` varchar(20) NOT NULL,
  `StaffAddress` varchar(50) NOT NULL,
  `StaffEmail` varchar(50) NOT NULL,
  `StaffPhone` varchar(20) NOT NULL,
  `StaffPhoto` varchar(100) NOT NULL,
  `StaffSalary` float NOT NULL,
  PRIMARY KEY (`StaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `Username`, `Password`, `StaffName`, `StaffRole`, `StaffAddress`, `StaffEmail`, `StaffPhone`, `StaffPhoto`, `StaffSalary`) VALUES
('STA0001', 'dummy', '275876e34cf609db118f3d84b799a790', 'dummy Name', 'admin', 'rarwrarwrwr', 'qjrqjqojrq', '031312312312', 'photo.jpg', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `TestimonyID` char(7) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Status` varchar(20) NOT NULL,
  `MemberID` char(7) NOT NULL,
  PRIMARY KEY (`TestimonyID`,`MemberID`),
  KEY `MemberID` (`MemberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailrundown`
--
ALTER TABLE `detailrundown`
  ADD CONSTRAINT `detailrundown_ibfk_2` FOREIGN KEY (`LocationID`) REFERENCES `location` (`LocationID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailrundown_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleryevent`
--
ALTER TABLE `galleryevent`
  ADD CONSTRAINT `galleryevent_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`BranchID`) REFERENCES `branch` (`BranchID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phonemember`
--
ALTER TABLE `phonemember`
  ADD CONSTRAINT `phonemember_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phonestaff`
--
ALTER TABLE `phonestaff`
  ADD CONSTRAINT `phonestaff_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prayerrequest`
--
ALTER TABLE `prayerrequest`
  ADD CONSTRAINT `prayerrequest_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimony`
--
ALTER TABLE `testimony`
  ADD CONSTRAINT `testimony_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
