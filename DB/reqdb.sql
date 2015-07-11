-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2015 at 08:53 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reqdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` int(10) unsigned NOT NULL,
  `categoryname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'phone system'),
(2, 'hardware'),
(3, 'software'),
(4, 'internet'),
(5, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` varchar(3) NOT NULL,
  `departmentname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`departmentid`),
  UNIQUE KEY `departmentid_UNIQUE` (`departmentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`) VALUES
('01', 'IT'),
('02', 'telesale'),
('03', 'broker'),
('04', 'admin'),
('05', 'hr'),
('06', 'research'),
('07', 'qc'),
('08', 'domino'),
('09', 'csi'),
('10', 'health'),
('11', 'chev campaign'),
('12', 'chev cac'),
('13', 'chevy plus'),
('14', 'back office'),
('15', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(10) unsigned NOT NULL,
  `statusname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `statusname`) VALUES
(1, 'wait'),
(2, 'processing'),
(3, 'waitapprove'),
(4, 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `tbrequest`
--

CREATE TABLE IF NOT EXISTS `tbrequest` (
  `id` varchar(15) NOT NULL DEFAULT '0',
  `username` varchar(45) DEFAULT NULL,
  `dtadd` varchar(45) DEFAULT NULL,
  `depart` varchar(45) DEFAULT NULL,
  `cat` varchar(45) DEFAULT NULL,
  `preliminary` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `adminname` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `dtcom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbrequest`
--

INSERT INTO `tbrequest` (`id`, `username`, `dtadd`, `depart`, `cat`, `preliminary`, `status`, `adminname`, `result`, `dtcom`) VALUES
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HW0001', 'chaiwat.s', '16 Jun 2015 - 16:38 +07:00', '01', '02', 'เครื่องเปิดไม่ติด', 'completed', 'chaiwat.s', 'แก้ไขเรียบร้อยแล้ว', '17 Jun 2015 - 18:00 +07:00'),
('NW0001', 'chaiwat.s', '15 December 1899 - 12:00 am', '01', '04', 'testpre', 'process', 'chaiwat.s', 'ไำพเไำดฟ', '17 Jun 2015 - 18:07 +07:00'),
('OT0001', 'electron', '15 December 1899 - 12:00 am', '05', '05', 'testpre', 'wait', 'chaiwat.s', '', '03 Jul 2015 - 17:10 +07:00'),
('PH0001', 'chaiwat.s', '15 December 1899 - 12:00 am', '01', '01', 'testpre', 'wait', 'chaiwat.s', 'ำอพส่ำๆืแสทๆไสวำแๆไแำ', '17 Jun 2015 - 18:06 +07:00'),
('SW0001', 'chaiwat.s', '15 December 1899 - 12:00 am', '01', '03', 'testpre', 'completed', 'chaiwat.s', 'ซ่อมได้แล้ว', '14 Jun 2015 - 05:11 +07:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `extension` char(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `extension_UNIQUE` (`extension`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `extension`, `email`, `department`, `status`) VALUES
(1, 'chaiwat.s', '1234', '1000', 'chaiwat.s@affinity.co.th', '01', '0'),
(2, 'eminem', '1234', '1001', 'wecf@sdfjh.com', '02', '0'),
(24, 'apache', '1234', '1111', 'wqre@yahoo.com', '03', '0'),
(25, 'usernametest', '1234', 'xxxx', 'xxx@gmail.com', 'deptest', '0'),
(26, 'testadd', '1234', '1012', 'asss@gmail.com', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
