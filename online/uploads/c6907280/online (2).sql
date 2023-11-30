-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 06:31 AM
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
-- Table structure for table `add_book`
--

CREATE TABLE IF NOT EXISTS `add_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bnam` varchar(50) NOT NULL,
  `bimg` varchar(5000) NOT NULL,
  `bfl` varchar(5000) NOT NULL,
  `ban` varchar(50) NOT NULL,
  `bpn` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `bnam`, `bimg`, `bfl`, `ban`, `bpn`) VALUES
(1, 'Theoretical Numerical Analysis', 'books-image/5ebaa3080bb0327177a67d697223498a41GxQsLNarL._SX328_BO1,204,203,200_.jpg', 'books-file/nalrs.pdf', 'Kendall Atkinson', 'Dover Publications'),
(2, 'Health Informatics', 'books-image/9749fdc83fefbcc9cf3a55b16c7a353041SZngIJfuL._SX389_BO1,204,203,200_.jpg', 'books-file/Contents and Front Matter.pdf', 'Nancy Staggers', 'Elsevier Mosby'),
(3, 'Digital Image Processing', 'books-image/f5546d1614746fed61c4162163d81a59196018.jpg', 'books-file/IT6005-SCAD-MSM-by www.LearnEngineering.in.pdf', 'Rafael C. Gonzalez', 'Prentice Hall'),
(6, 'Artificial Intelligence', 'books-image/17385102edb4831bab1b8b0577389d5e0133001989.jpg', 'books-file/17385102edb4831bab1b8b0577389d5eArtificial Intelligence.pdf', ' Peter Norvig', 'Dover Publications'),
(7, 'Parallel and Distributed Processing', 'books-image/1554233254.jpg', 'books-file/1554233331.pdf', 'Jose Rolim', 'Elsevier Science'),
(8, 'The Guest Book: A Novel', 'books-image/1568430614.jpg', 'books-file/1568430614.pdf', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lkey` char(8) NOT NULL,
  `user` varchar(4) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `astus` enum('0','1') NOT NULL,
  `utyp` enum('0','1','2','3') NOT NULL,
  `gtyp` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lkey`, `user`, `pwd`, `astus`, `utyp`, `gtyp`) VALUES
(26, '1bbdc555', '111', '0394ea68951e3299bcdfa75a097d7c11', '0', '0', '0'),
(29, 'e147b001', '7711', '818cdcf067c824a4e34f9293de3b15a9', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stdreg`
--

CREATE TABLE IF NOT EXISTS `stdreg` (
  `adno` varchar(12) NOT NULL,
  `std_key` char(8) NOT NULL,
  `name` varchar(12) NOT NULL,
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
  PRIMARY KEY (`adno`),
  KEY `adno` (`adno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`adno`, `std_key`, `name`, `photo`, `address`, `pin`, `dob`, `sex`, `religion`, `caste`, `fname`, `fjob`, `fpno`, `mname`, `mjob`, `mpno`, `course`, `spno`, `aadhar`, `dep`, `ten`, `tencer`, `plustwo`, `plustwocer`) VALUES
('111', 'A1234567', 'Arjun', 'arjun.jpeg', 'arjun house', 123456, '10-10-20', 'Male', 'Hindhu', 'Nill', 'Anil', 'MVD', '789456123', 'sdfdsfds', 'sdfsfdsf', '7418528353', 'Bsccs', '9061109887', '7539514862', 'CS', '99', 'cer.jpg', 99, 'cer.jpg'),
('112', 'B1234567', 'RYAN', 'RYAN.jpg', 'KIRANSADANAM', 691534, '04-03-20', 'Male', 'Hindhu', 'Nill', 'REYNOLDS', 'ACTOR', '6565657878', 'BLAKE', 'ACTRESS', '9946980221', 'Computer', '7560967551', '23456789011', 'COMPUTER', '789', 'RYAN.doc', 940, 'RYAN.doc');

-- --------------------------------------------------------

--
-- Table structure for table `trreg`
--

CREATE TABLE IF NOT EXISTS `trreg` (
  `trid` varchar(4) NOT NULL,
  `tr_key` char(8) NOT NULL,
  `name` varchar(12) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `quan` varchar(20) NOT NULL,
  `tpno` varchar(12) NOT NULL,
  `adhar no` varchar(12) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trreg`
--

INSERT INTO `trreg` (`trid`, `tr_key`, `name`, `address`, `pin`, `dob`, `sex`, `quan`, `tpno`, `adhar no`) VALUES
('7711', 'A9876543', 'Arun', 'qwerty', 741852, '0000-00-00', 'Female', 'fghj', '9446613440', '123456789521');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
