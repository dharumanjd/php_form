-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 01:00 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dharuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `jmds`
--

CREATE TABLE IF NOT EXISTS `jmds` (
  `UserName` varchar(40) NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Contact Num` int(15) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jmds`
--

INSERT INTO `jmds` (`UserName`, `Dept`, `Email`, `Contact Num`, `Address`, `Password`) VALUES
('dharma', 'cse', 'dharmacse@gmail.com', 2147483647, 'tvm', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
