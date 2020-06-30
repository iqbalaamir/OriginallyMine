-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2019 at 09:11 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `origanallymine`
--

-- --------------------------------------------------------

--
-- Table structure for table `aamir_work`
--

CREATE TABLE IF NOT EXISTS `aamir_work` (
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `authorized` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aamir_work`
--

INSERT INTO `aamir_work` (`name`, `title`, `category`, `file`, `description`, `authorized`, `payment`) VALUES
('aamir', 'aa', 'Videos', 'Videos/app-release.apk', 'jgghjfgj', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `aao_payment`
--

CREATE TABLE IF NOT EXISTS `aao_payment` (
  `customer` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `work` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(40) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aao_payment`
--

INSERT INTO `aao_payment` (`customer`, `owner`, `work`, `date`, `amount`, `payment`) VALUES
('aac', 'aao', 'adasd', '0000-00-00', 423, 'no'),
('aac', 'aao', 'adasd', '0000-00-00', 423, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `aa_work`
--

CREATE TABLE IF NOT EXISTS `aa_work` (
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `authorized` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hfgh_work`
--

CREATE TABLE IF NOT EXISTS `hfgh_work` (
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `authorized` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ow_payment`
--

CREATE TABLE IF NOT EXISTS `ow_payment` (
  `customer` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `work` varchar(50) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `amount` int(40) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ow_payment`
--

INSERT INTO `ow_payment` (`customer`, `owner`, `work`, `date`, `amount`, `payment`) VALUES
('cu', 'ow', 'fdg', '2312', 4534, 'no'),
('cu', 'ow', 'dgf', '2312', 878, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `rhythem_work`
--

CREATE TABLE IF NOT EXISTS `rhythem_work` (
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `authorized` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rhythem_work`
--

INSERT INTO `rhythem_work` (`name`, `title`, `category`, `file`, `description`, `authorized`, `payment`) VALUES
('Rhythem', 'Inventory in JAVA', 'Images', 'Images/app-release.apk', 'sf', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `Country` varchar(20) DEFAULT NULL,
  `State` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Country`, `State`) VALUES
('Inidia', 'Andhra Pradesh'),
('Inidia', 'Arunachal Pradesh'),
('Inidia', 'Assam '),
('Inidia', 'Bihar'),
('Inidia', 'Chandigarh'),
('Inidia', 'Chhatisgarh'),
('Inidia', 'Dadra and Nagar Haveli'),
('Inidia', 'Daman And Diu'),
('Inidia', 'National Capital Terriotary of Delhi'),
('Inidia', 'Goa'),
('Inidia', 'Gujrat'),
('Inidia', 'Himachal Pradesh'),
('Inidia', 'Jammu and Kashmir'),
('Inidia', 'Jharkhand'),
('Inidia', 'Karnatka'),
('Inidia', 'kerala'),
('Inidia', 'Lakshadweep'),
('Inidia', 'Madhya Pradesh'),
('Inidia', 'Maharashtra'),
('Inidia', 'Manipur'),
('Inidia', 'Meghalay'),
('Inidia', 'Mizoram'),
('Inidia', 'Nagaland'),
('Inidia', 'Odisha'),
('Inidia', 'Ponducherry'),
('Inidia', 'Punjab'),
('Inidia', 'Rajashthan'),
('Inidia', 'Sikkim'),
('Inidia', 'Tamil Nadu'),
('Inidia', 'Telangana'),
('Inidia', 'Tripura'),
('Inidia', 'Uttar Pradesh'),
('Inidia', 'Uttrakhand'),
('Inidia', 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `cardno` varchar(20) DEFAULT NULL,
  `ifsc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`name`, `password`, `contact`, `email`, `state`, `pin`, `pan`, `cardno`, `ifsc`) VALUES
('aamir', 'asfdasfd435@R', '324', 'ss@gmail.com', 'Assam', '354', '34', '423', '234');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `work` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work`, `name`, `category`) VALUES
('Videos/app-release.apk', 'Rhythem', 'Videos'),
('Videos/app-release.apk', 'hfgh', 'Videos'),
('Images/output.json', 'Rhythem', 'Images'),
('Images/app.aab', 'Rhythem', 'Images'),
('Videos/app.aab', 'aa', 'Videos'),
('Videos/app-release.apk', 'aa', 'Videos'),
('Videos/app-release.apk', 'Rhythem', 'Videos'),
('Images/app-release.apk', 'Rhythem', 'Images'),
('Videos/app-release.apk', 'aamir', 'Videos');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
