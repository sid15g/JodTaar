-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2013 at 02:38 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jodtaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `CID` bigint(20) NOT NULL,
  `PID` bigint(20) NOT NULL,
  `ID` bigint(20) NOT NULL,
  `det` text NOT NULL,
  PRIMARY KEY (`CID`),
  KEY `PID` (`PID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `ID` bigint(20) NOT NULL,
  `FID` bigint(20) NOT NULL,
  `blocked` int(5) NOT NULL,
  KEY `ID` (`ID`),
  KEY `FID` (`FID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `ID` bigint(20) NOT NULL,
  `FID` bigint(20) NOT NULL,
  `pending` int(5) NOT NULL,
  KEY `ID` (`ID`),
  KEY `FID` (`FID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `JID` bigint(20) NOT NULL,
  `ID` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `post` text NOT NULL,
  `location` text NOT NULL,
  `salary` bigint(20) NOT NULL,
  `desc` text,
  PRIMARY KEY (`JID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_details`
--

CREATE TABLE IF NOT EXISTS `log_details` (
  `ID` bigint(20) NOT NULL,
  `user_status` text,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `MID` bigint(20) NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `status` int(10) NOT NULL,
  `msg` text,
  PRIMARY KEY (`MID`),
  KEY `from` (`from`),
  KEY `to` (`to`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PID` bigint(20) NOT NULL,
  `ID` bigint(20) NOT NULL,
  `type` text NOT NULL,
  `REF` bigint(20) NOT NULL,
  PRIMARY KEY (`PID`),
  KEY `ID` (`ID`),
  KEY `REF` (`REF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `ID` bigint(20) NOT NULL,
  `full_name` text NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `city` text,
  `country` text NOT NULL,
  `dob` date NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remds`
--

CREATE TABLE IF NOT EXISTS `remds` (
  `RID` bigint(20) NOT NULL,
  `ID` bigint(20) NOT NULL,
  `time` date NOT NULL,
  `det` text NOT NULL,
  PRIMARY KEY (`RID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
