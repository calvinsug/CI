-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Nov 2014 pada 03.44
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `msbranch`
--

CREATE TABLE IF NOT EXISTS `msbranch` (
  `BranchID` int(11) NOT NULL AUTO_INCREMENT,
  `AddressBranch` varchar(150) NOT NULL,
  `Lt` int(100) NOT NULL,
  `Lg` int(100) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`BranchID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `msnews`
--

CREATE TABLE IF NOT EXISTS `msnews` (
  `NewsID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Desc` varchar(2000) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Image` varchar(150) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`NewsID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `msuser`
--

CREATE TABLE IF NOT EXISTS `msuser` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `AddressAdopt` varchar(150) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Lt` varchar(100) NOT NULL,
  `Lg` varchar(100) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trprayerrequest`
--

CREATE TABLE IF NOT EXISTS `trprayerrequest` (
  `RequestID` int(11) NOT NULL AUTO_INCREMENT,
  `DateRequest` datetime NOT NULL,
  `Desc` varchar(150) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`RequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trtestimony`
--

CREATE TABLE IF NOT EXISTS `trtestimony` (
  `TestimonyID` int(11) NOT NULL AUTO_INCREMENT,
  `CreateDate` datetime NOT NULL,
  `Desc` varchar(150) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Rating` float NOT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`TestimonyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
