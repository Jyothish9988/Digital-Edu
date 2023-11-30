-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 09:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--
CREATE DATABASE IF NOT EXISTS `online` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online`;

-- --------------------------------------------------------

--
-- Table structure for table `stdreg`
--

CREATE TABLE IF NOT EXISTS `stdreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_key` char(8) NOT NULL,
  `name` varchar(12) NOT NULL,
  `adno` varchar(12) NOT NULL,
  `photo` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `dob` varchar(8) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `fjob` varchar(12) NOT NULL,
  `fpno` varchar(10) NOT NULL,
  `mname` varchar(12) NOT NULL,
  `mjob` varchar(12) NOT NULL,
  `mpno` varchar(12) NOT NULL,
  `course` varchar(12) NOT NULL,
  `spno` varchar(12) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `dep` varchar(12) NOT NULL,
  `ten` varchar(12) NOT NULL,
  `tencer` text NOT NULL,
  `plustwo` int(12) NOT NULL,
  `plustwocer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`id`, `std_key`, `name`, `adno`, `photo`, `address`, `pin`, `dob`, `sex`, `religion`, `caste`, `fname`, `fjob`, `fpno`, `mname`, `mjob`, `mpno`, `course`, `spno`, `aadhar`, `dep`, `ten`, `tencer`, `plustwo`, `plustwocer`) VALUES
(1, 'A1234567', 'Arjun', '111', 'p.jpeg', 'arjun house', 123456, '10-10-20', 'Male', 'Hindhu', 'Nill', 'Anil', 'MVD', '789456123', 'sdfdsfds', 'sdfsfdsf', '7418528353', 'Bsccs', '9061109887', '7539514862', 'CS', '99', 'cer.jpg', 99, 'cer.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
