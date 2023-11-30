-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 10:06 AM
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
-- Table structure for table `addon`
--

CREATE TABLE IF NOT EXISTS `addon` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `akey` char(8) NOT NULL,
  `course` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  `img1` longtext NOT NULL,
  `date` date NOT NULL,
  `asem` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `addon`
--

INSERT INTO `addon` (`aid`, `akey`, `course`, `details`, `img1`, `date`, `asem`) VALUES
(9, 'cc01b414', 'Basic Computer Cours', 'This Course is absolute for biginers', 'OIP.jpg', '2023-05-13', '1'),
(10, '057fb77b', 'Basic Computer Course', 'Computer Course For Scenior level', 'OIP (1).jpg', '2023-05-13', '1'),
(11, '22f7426a', 'Computer Hardware', 'Hardware Course volume one biginers', 'computer_repair_flyer_poster_by_giunina-d9619ml.jpg', '2023-05-13', '1'),
(12, 'e791b1de', 'Computer Hardware', 'Hardware Repair Specilist Course', 'OIP (2).jpg', '2023-05-13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE IF NOT EXISTS `add_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkey` char(8) NOT NULL,
  `bnam` varchar(50) NOT NULL,
  `img1` varchar(5000) NOT NULL,
  `img2` varchar(5000) NOT NULL,
  `ban` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sem` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `bkey`, `bnam`, `img1`, `img2`, `ban`, `subject`, `sem`) VALUES
(46, '8eaaa1f6', 'python', 'OIP.jpeg', 'download (1).jpeg', 'ggghg', 'IP', '1'),
(47, 'cfec9338', 'Speaking & Listening Skills', 'photo_2022-11-26_11-04-14.jpg', 'DOC-20221126-WA0002 (1)._', 'Swapna Gopinath', 'english1', '1'),
(48, '06de8301', 'Mathematics', 'photo_2022-11-26_11-08-27.jpg', 'Mathematics_II_Module_wise_Univeristy_Questions_2014_to_2021_answers.pdf', 'Bikas Chandra Bhui', 'maths1', '1'),
(49, 'bb07978d', 'Computer Fundamentals', 'photo_2022-11-26_11-08-01.jpg', 'Mostafa_Abd_El_Barr_Hesham_El_Rewini_FundamentaBookZZ_org.pdf', 'Manish joshi', 'cfo', '1'),
(50, '2293229e', 'Principles of Digital Electronics', 'photo_2022-11-26_11-15-23.jpg', 'Digital Electronics .pdf', 'S.R Chaudhari', 'de', '1'),
(51, '740deff8', 'Programming in c', 'photo_2022-11-26_11-17-48.jpg', 'c NOTES FULL - final.pdf', 'Arun bs', 'C Programming', '1'),
(52, '204cf1c6', 'Programming in c', 'photo_2022-11-26_11-20-52.jpg', 'cprogramming_tutorial.pdf', 'Darrel Graham', 'C Programming', '1'),
(53, 'f4334e72', 'Programming in c', 'photo_2022-11-26_11-20-52.jpg', 'Programming With C++ by RAVICHANDRAN (z-lib.org).pdf', 'Arjun Das', 'C Programming', '1'),
(54, '758e7b18', 'Data structure', 'ae34c38f-55b1-4e08-8eb0-b4d341844133.jfif', '5_6253736428975424974.pdf', 'Srikanth S', 'ds', '2'),
(55, 'ad7452a3', 'EVS', '6bd3c840-0dd4-420d-90eb-22a1d3640e6c.jpg', 'env (1).pdf', 'John Dean', 'evs', '2'),
(56, '58146deb', 'English For Career', 'photo6057739685687571061.jpg', 'grammar-rules-_-speak-good-english-movement.pdf', 'Pearson', 'english2', '2'),
(58, 'bf99c9de', 'Web programming', '76d1de01-43a5-4416-b721-f2ce51036fe8.jfif', 'DCAP202_FUNDAMENTALS_OF_WEB_PROGRAMMING.pdf', 'John Dean', 'web ', '2'),
(59, 'd906f03b', 'ComputerScience', 'photo_2023-05-16_07-20-16.jpg', 'quest.pdf', 'SeemaBhatnagar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akey` char(8) NOT NULL,
  `tlid` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(12) NOT NULL,
  `slid` int(11) NOT NULL,
  `s1` enum('0','1') NOT NULL,
  `s2` enum('0','1') NOT NULL,
  `s3` enum('0','1') NOT NULL,
  `s4` enum('0','1') NOT NULL,
  `s5` enum('0','1') NOT NULL,
  `s6` enum('0','1') NOT NULL,
  `fullday` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `akey`, `tlid`, `date`, `time`, `slid`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `fullday`) VALUES
(23, '0c0cde1b', 95, '2023-01-02', '09:35:08', 85, '1', '0', '1', '1', '1', '1', 0),
(24, '0c0cde1b', 95, '2023-01-02', '09:35:08', 77, '1', '1', '1', '1', '1', '0', 0),
(25, '0c0cde1b', 95, '2023-01-02', '09:35:08', 66, '1', '1', '1', '1', '1', '1', 1),
(26, '0c0cde1b', 95, '2023-01-02', '09:35:08', 68, '1', '1', '0', '1', '1', '1', 0),
(27, '0c0cde1b', 95, '2023-01-02', '09:35:08', 71, '1', '1', '1', '1', '1', '1', 1),
(28, '0c0cde1b', 95, '2023-01-02', '09:35:08', 73, '1', '1', '1', '1', '1', '1', 1),
(29, '0c0cde1b', 95, '2023-01-02', '09:35:08', 74, '1', '1', '1', '1', '1', '1', 1),
(30, '0c0cde1b', 95, '2023-01-02', '09:35:08', 72, '1', '1', '1', '1', '1', '1', 1),
(31, '0c0cde1b', 95, '2023-01-02', '09:35:08', 84, '1', '1', '1', '0', '1', '1', 0),
(32, '0c0cde1b', 95, '2023-01-02', '09:35:08', 69, '1', '1', '1', '1', '1', '1', 1),
(33, '0c0cde1b', 95, '2023-01-02', '09:35:08', 76, '1', '1', '0', '1', '1', '1', 0),
(34, '0c0cde1b', 95, '2023-01-02', '09:35:08', 78, '1', '1', '1', '1', '1', '1', 1),
(35, '0c0cde1b', 95, '2023-01-02', '09:35:08', 81, '1', '1', '1', '1', '1', '1', 1),
(36, '0c0cde1b', 95, '2023-01-02', '09:35:08', 67, '1', '1', '1', '1', '1', '1', 1),
(37, '0c0cde1b', 95, '2023-01-02', '09:35:08', 80, '1', '1', '1', '0', '1', '1', 0),
(38, '0c0cde1b', 95, '2023-01-02', '09:35:08', 86, '1', '0', '1', '1', '1', '1', 0),
(39, '0c0cde1b', 95, '2023-01-02', '09:35:08', 83, '1', '1', '1', '1', '1', '1', 1),
(40, '0c0cde1b', 95, '2023-01-02', '09:35:08', 70, '1', '1', '1', '1', '1', '1', 1),
(41, '0c0cde1b', 95, '2023-01-02', '09:35:08', 79, '1', '1', '1', '1', '1', '1', 1),
(42, '0c0cde1b', 95, '2023-01-02', '09:35:08', 82, '1', '1', '1', '1', '1', '1', 1),
(43, '0c0cde1b', 95, '2023-01-02', '09:35:08', 75, '1', '1', '1', '1', '1', '1', 1),
(44, '0b7617e3', 95, '2023-01-03', '09:33:01', 85, '1', '1', '0', '1', '0', '1', 0),
(45, '0b7617e3', 95, '2023-01-03', '09:33:01', 77, '1', '1', '1', '1', '0', '1', 0),
(46, '0b7617e3', 95, '2023-01-03', '09:33:01', 66, '1', '1', '0', '1', '0', '0', 0),
(47, '0b7617e3', 95, '2023-01-03', '09:33:01', 68, '1', '1', '0', '0', '0', '0', 0),
(48, '0b7617e3', 95, '2023-01-03', '09:33:01', 71, '1', '1', '1', '1', '1', '1', 1),
(49, '0b7617e3', 95, '2023-01-03', '09:33:01', 73, '1', '1', '1', '1', '1', '1', 1),
(50, '0b7617e3', 95, '2023-01-03', '09:33:01', 74, '1', '1', '1', '1', '0', '1', 0),
(51, '0b7617e3', 95, '2023-01-03', '09:33:01', 72, '1', '1', '1', '1', '1', '1', 1),
(52, '0b7617e3', 95, '2023-01-03', '09:33:01', 84, '1', '1', '1', '1', '1', '1', 1),
(53, '0b7617e3', 95, '2023-01-03', '09:33:01', 76, '1', '1', '1', '1', '1', '1', 1),
(54, '0b7617e3', 95, '2023-01-03', '09:33:01', 78, '1', '1', '1', '1', '1', '1', 1),
(55, '0b7617e3', 95, '2023-01-03', '09:33:01', 67, '1', '1', '1', '1', '1', '1', 1),
(56, '0b7617e3', 95, '2023-01-03', '09:33:01', 86, '1', '1', '0', '0', '0', '0', 0),
(57, '0b7617e3', 95, '2023-01-03', '09:33:01', 70, '1', '1', '1', '1', '1', '1', 1),
(58, '0b7617e3', 95, '2023-01-03', '09:33:01', 79, '1', '1', '1', '1', '1', '1', 1),
(59, '0b7617e3', 95, '2023-01-03', '09:33:01', 82, '1', '1', '1', '1', '1', '1', 1),
(60, '0b7617e3', 95, '2023-01-03', '09:33:01', 75, '1', '1', '1', '1', '1', '1', 1),
(61, '0b7617e3', 95, '2023-01-03', '09:33:01', 69, '0', '0', '0', '0', '0', '0', 0),
(62, '0b7617e3', 95, '2023-01-03', '09:33:01', 81, '0', '0', '0', '0', '0', '0', 0),
(63, '0b7617e3', 95, '2023-01-03', '09:33:01', 80, '0', '0', '0', '0', '0', '0', 0),
(64, '0b7617e3', 95, '2023-01-03', '09:33:01', 83, '0', '0', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bakey` char(8) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `branchname` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `accholname` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expirydate` varchar(50) NOT NULL,
  `tamount` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `bank` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bakey`, `bankname`, `branchname`, `ifsc`, `accholname`, `accno`, `cardno`, `cvv`, `expirydate`, `tamount`, `contactno`, `bank`) VALUES
(1, 'bank1000', 'SBI', 'MADAVOOR', 'SBIN1000', 'ARUN', '', '1111 1111 1111 1111', '111', '01 / 01', '1.0E+33', '1234567890', 0),
(3, 'bank1000', 'SBI', 'MADAVOOR', 'SBIN1000', 'ADMIN', '', '4716 7498 9486 7919', '465', '01 / 24', '106205', '9876543210', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ckey` char(8) NOT NULL,
  `msg` text NOT NULL,
  `rlid` char(8) NOT NULL,
  `slid` char(8) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` time NOT NULL,
  `sem` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `ckey`, `msg`, `rlid`, `slid`, `date`, `time`, `sem`) VALUES
(132, 'cb43c546', 'new chat', '46', '60', '2023-03-26', '02:26:18', 0),
(133, '28529988', 'new chat 2', '46', '60', '2023-03-26', '02:27:49', 0),
(134, '934f0d53', 'nc 3', '46', '60', '2023-03-26', '02:28:12', 0),
(135, 'e27c1bdf', 'nc 4', '46', '60', '2023-03-26', '02:29:32', 0),
(136, 'c1cbd2df', 'nc 5', '46', '60', '2023-03-26', '02:29:59', 0),
(137, '5f032070', 'nc 6', '46', '60', '2023-03-26', '02:30:53', 0),
(138, '0418baac', 'nc 7', '46', '60', '2023-03-26', '02:31:15', 0),
(139, '225744e0', 'ds', '46', '60', '2023-03-26', '02:33:26', 0),
(140, '09a7700c', 'd8', '46', '60', '2023-03-26', '02:37:38', 0),
(141, '5b1f6ab8', 'd9', '46', '60', '2023-03-26', '02:38:45', 0),
(142, '7937b7a9', 'd10', '46', '60', '2023-03-26', '02:39:30', 0),
(143, '7daca476', 'd11', '46', '60', '2023-03-26', '02:40:07', 0),
(144, 'cea2a380', 'd12', '46', '60', '2023-03-26', '02:40:47', 0),
(145, 'b8438824', 'jjhj', '46', '60', '2023-03-26', '02:44:48', 0),
(146, 'c45b5ad9', 'jukl', '46', '60', '2023-03-26', '02:46:23', 0),
(147, '30ad14af', 'dasdsad', '46', '60', '2023-03-26', '02:48:46', 0),
(148, 'ea98b2e2', 'adsdas', '46', '60', '2023-03-26', '02:49:59', 0),
(149, 'd1b9ea42', 'adsdas', '46', '60', '2023-03-26', '02:51:31', 0),
(150, '219c2ad9', 'ggh', '46', '60', '2023-03-26', '02:51:37', 0),
(151, 'ed307d8d', 'nc 10', '46', '60', '2023-03-26', '02:52:35', 0),
(152, 'e91fbbef', 'nc 10', '46', '60', '2023-03-26', '02:53:59', 0),
(153, '6f88d6a9', 'nc 10', '46', '60', '2023-03-26', '02:54:26', 0),
(154, '3643f05f', 'nc 10', '46', '60', '2023-03-26', '02:54:29', 0),
(155, '3b34d8b7', 'nc 10', '46', '60', '2023-03-26', '02:54:36', 0),
(156, 'd9534fbd', 'nc 10', '46', '60', '2023-03-26', '02:56:07', 0),
(157, '3f89af6d', 'nc 10', '46', '60', '2023-03-26', '02:56:45', 0),
(158, '0a18bd42', 'jhh', '46', '60', '2023-03-26', '02:56:55', 0),
(159, '05b3a109', 'k', '46', '60', '2023-03-26', '02:57:02', 0),
(160, '9b945ea1', 'sdv', '46', '60', '2023-03-26', '02:58:05', 0),
(161, '68e8d510', 'sdv', '46', '60', '2023-03-26', '02:58:33', 0),
(162, '1cd55c3f', 'gjhg', '60', '46', '2023-03-26', '11:23:26', 0),
(163, '4942bd2a', 'hjiol', '60', '46', '2023-03-26', '23:26:00', 0),
(164, 'ae58fadf', 'hjiol', '60', '46', '2023-03-26', '23:26:00', 0),
(165, '86f8d24c', 'hi arun', '61', '46', '2023-03-26', '11:28:12', 0),
(166, 'b250a51c', 'hlo miss', '46', '61', '2023-03-26', '23:33:00', 0),
(167, 'f07e0933', 'hlo miss', '46', '61', '2023-03-26', '23:33:00', 0),
(168, '9180adb3', 'hlo miss', '46', '61', '2023-03-26', '23:37:00', 0),
(169, '00a11596', 'hi teacher', '60', '46', '2023-05-01', '11:02:25', 0),
(170, 'e4c7d622', 'hlo teacher', '46', '46', '2023-05-01', '11:02:55', 0),
(171, 'b3302b0a', 'hlo sir', '95', '46', '2023-05-01', '01:54:51', 0),
(172, '6e790e83', 'hlo miss', '46', '95', '2023-05-01', '01:56:13', 0),
(173, 'a5c4e3a7', 'welocme to our college ou', '95', '46', '2023-05-01', '01:57:00', 0),
(174, '9c854c0e', 'ok miss', '46', '95', '2023-05-01', '01:57:24', 0),
(175, '08a938f1', 'welcome to our college our classes will start soon', '95', '46', '2023-05-01', '01:58:46', 0),
(176, '96c4cdd9', 'ok miss', '46', '95', '2023-05-01', '01:59:12', 0),
(177, '2003154c', 'hlo miss when the classes start', '46', '61', '2023-05-01', '02:55:21', 0),
(178, '80fe2782', 'hlo miss when the classes start', '46', '61', '2023-05-01', '02:56:47', 0),
(179, '1333e0a3', 'hlo miss when the classes start', '46', '61', '2023-05-01', '02:57:08', 0),
(180, '3d966edf', 'hlo arun', '61', '46', '2023-05-01', '03:02:48', 0),
(181, 'bc42d8cb', 'welcome', '61', '46', '2023-05-01', '03:04:19', 0),
(182, 'dc5e641a', 'welcome', '61', '46', '2023-05-01', '03:09:00', 0),
(183, 'b46d47df', 'welcome', '61', '46', '2023-05-01', '03:10:49', 0),
(184, '28b2cd5e', 'welcome', '61', '46', '2023-05-01', '03:11:47', 0),
(185, '7bb32afb', 'classes will start soon', '61', '46', '2023-05-01', '03:12:14', 0),
(186, '80bd4012', 'ok miss', '46', '61', '2023-05-01', '03:12:36', 0),
(187, 'e3532917', 'hlo sir', '95', '61', '2023-05-01', '15:15:00', 0),
(188, 'a7d4a351', 'hlo sir', '95', '61', '2023-05-01', '15:17:00', 0),
(189, '3d54c50d', 'hlo Rahul Sir Iam Arun SL', '95', '61', '2023-05-01', '15:17:00', 0),
(190, '9bd9adb9', 'hlo Arun what is ur doubt', '61', '95', '2023-05-01', '03:18:45', 0),
(191, '3246857c', 'hi', '95', '61', '2023-05-03', '14:06:00', 0),
(192, 'b2c0f1df', 'hlo', '61', '95', '2023-05-03', '02:07:58', 0),
(193, '27b733fe', 'hlo', '61', '95', '2023-05-03', '02:08:35', 0),
(194, '38c116d3', 'hlo', '61', '95', '2023-05-03', '02:16:55', 0),
(195, '102f59d2', 'hlo', '61', '95', '2023-05-03', '14:18:00', 0),
(196, 'ea386dd7', 'hlo sir', '95', '61', '2023-05-03', '14:22:00', 0),
(197, 'a0cd9ae1', 'hlo miss', '46', '61', '2023-05-03', '14:22:00', 0),
(198, 'c4796794', 'hlo ask the doubt', '61', '95', '2023-05-03', '14:23:00', 0),
(199, '35045dbf', 'hlo miss portions are prepared', '46', '95', '2023-05-03', '14:23:00', 0),
(200, '98374813', 'k', '95', '46', '2023-05-03', '14:25:00', 0),
(201, '31923f5c', 'ok arun', '61', '46', '2023-05-03', '14:27:00', 0),
(202, '40dfac48', 'gud morning miss', '95', '46', '2023-05-04', '07:18:00', 0),
(203, '6fc3d209', 'hlo Johan submit notes soon', '78', '46', '2023-05-04', '07:23:00', 0),
(204, '226a1a26', 'nfgjgdf', '78', '46', '2023-05-04', '07:24:00', 0),
(205, '78e134c8', 'jkdjfjdk', '78', '46', '2023-05-04', '07:24:00', 0),
(206, '323fdcd2', 'hlo sir what about portions covered', '0', '46', '2023-05-04', '07:48:00', 0),
(207, 'c96134fb', 'hi', '', '61', '2023-05-08', '13:45:00', 1),
(208, 'd120c4dc', 'hh', '', '61', '2023-05-08', '13:47:00', 1),
(209, '35f58616', 'hh', '', '61', '2023-05-08', '14:15:00', 1),
(210, '9c979a78', 'hh', '', '61', '2023-05-08', '14:15:00', 1),
(211, '402278e8', 'hh', '', '61', '2023-05-08', '14:16:00', 1),
(212, 'cbe2f545', 'hh', '', '61', '2023-05-08', '14:19:00', 1),
(213, '7bae9054', 'hi', '', '61', '2023-05-08', '14:19:00', 1),
(214, '28a83d94', 'hi', '', '61', '2023-05-08', '14:20:00', 1),
(215, '8d83bdc2', 'hi iam teacher', '', '61', '2023-05-08', '14:28:00', 1),
(216, 'a91d5000', 'hlo iam student', '', '61', '2023-05-08', '14:45:00', 1),
(217, 'd2d0413b', 'hlo iam student', '', '61', '2023-05-08', '14:47:00', 1),
(218, 'ea3598e9', 'hlo iam student', '', '61', '2023-05-08', '14:47:00', 1),
(219, 'd8230c8a', 'hlo iam student', '', '61', '2023-05-08', '14:48:00', 1),
(220, '228d89c0', 'hlo iam student', '', '61', '2023-05-08', '14:49:00', 1),
(221, 'bae68e6c', 'hi', '', '61', '2023-05-08', '14:58:00', 1),
(222, '1af50450', 'hi iam hod', '', '46', '2023-05-08', '15:13:00', 1),
(223, 'a02249f3', 'hi', '', '46', '2023-05-08', '15:14:00', 1),
(224, 'f8049191', 'hi', '', '46', '2023-05-08', '15:15:00', 1),
(225, '17119a99', 'hi am hod', '', '46', '2023-05-08', '15:15:00', 1),
(226, 'cab25441', 'hi', '', '46', '2023-05-08', '15:53:00', 1),
(227, '94f4d759', 'hi', '', '46', '2023-05-08', '16:09:00', 1),
(228, '6212eb1c', 'hlo', '61', '46', '2023-05-08', '16:09:00', 0),
(229, '9a7bfeb0', ',mm,.m', '', '95', '2023-05-11', '10:27:00', 1),
(230, 'e556210a', 'gfgghg', '85', '95', '2023-05-11', '10:28:00', 0),
(231, 'de62f633', 'hii', '', '61', '2023-05-11', '10:33:00', 1),
(232, '1adb5ce3', 'hello iam hod', '', '46', '2023-05-12', '23:53:00', 1),
(233, 'a0100757', 'hi', '102', '46', '2023-05-13', '00:40:00', 0),
(234, '3dbffd5a', 'hi', '85', '95', '2023-05-15', '11:17:00', 0),
(235, 'bff33c15', 'hey', '85', '95', '2023-05-15', '11:18:00', 0),
(236, '8c025cf6', 'hi', '', '95', '2023-05-15', '11:20:00', 1),
(237, '5175dbd4', 'hi', '66', '103', '2023-05-15', '11:46:00', 0),
(238, 'e3f58644', 'aaa', '66', '103', '2023-05-15', '11:46:00', 0),
(239, '1a1b5a47', 'hi', '', '103', '2023-05-15', '11:47:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clkey` char(8) NOT NULL,
  `sem` int(1) NOT NULL,
  `topic` varchar(25) NOT NULL,
  `sub` varchar(10) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  `url` text NOT NULL,
  `lid` int(11) NOT NULL,
  `hash` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `clkey`, `sem`, `topic`, `sub`, `date`, `time`, `url`, `lid`, `hash`) VALUES
(32, 'a8a0e2e2', 1, 'Gauss Theorem', 'BD', '2023-05-16', '07:13:59am', 'http://localhost/online/tr_video_class.php?clkey=a8a0e2e2&&sem=1&&subject=BD#3f1b54', 61, '3f1b54'),
(33, '8779d187', 1, 'new class', 'BB', '2023-05-16', '08:10:00am', 'http://localhost/online/tr_video_class.php?clkey=8779d187&&sem=1&&subject=BB#7d16ee', 95, '7d16ee');

-- --------------------------------------------------------

--
-- Table structure for table `classtable`
--

CREATE TABLE IF NOT EXISTS `classtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctkey` char(8) NOT NULL,
  `s1` varchar(5) NOT NULL,
  `s2` varchar(5) NOT NULL,
  `s3` varchar(5) NOT NULL,
  `s4` varchar(5) NOT NULL,
  `s5` varchar(5) NOT NULL,
  `s6` varchar(5) NOT NULL,
  `date` varchar(12) NOT NULL,
  `sem` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `classtable`
--

INSERT INTO `classtable` (`id`, `ctkey`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `date`, `sem`) VALUES
(2, '6c07cfef', 'SS', 'AS', 'BS', 'CS', 'DS', 'ES', '2023-01-02', 1),
(3, '04088843', 'BB', 'AS', 'BS', 'ES', 'DS', 'SS', '2023-01-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cokey` char(8) NOT NULL,
  `desig` varchar(11) NOT NULL,
  `name1` varchar(11) NOT NULL,
  `name2` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(12) NOT NULL,
  `ido` varchar(8) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `message` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cokey`, `desig`, `name1`, `name2`, `email`, `contact`, `ido`, `subject`, `message`, `date`) VALUES
(2, '2fa1b4bc', 'Student', 'Arjunss', 'AL', 'pension1@gma', 22890, 'ID Optio', 'Question', 'mklm', '2023-02-02'),
(3, '5f663750', 'Teacher', 'ARUN', 'BS', 'jyothish787898@gmail.com', 2147483647, 'ID Optio', 'MATHS', 'ONNU PODE', '2023-02-04'),
(4, '', 'ADMIN', '', '', 'jyothish787898@gmail.com', 0, '', 'xdnkcsa', 'sjadkjs', '2023-03-13'),
(5, '', 'ADMIN', '', '', 'jyothish787898@gmail.com', 0, '', 'nvhj', 'hjkh', '2023-03-13'),
(6, '64368b5f', 'Teacher', 'Robert', 'james', 'jyothish787898@gmail.com', 2147483647, 'ID Optio', 'Programmin', 'dhnfhj gh', '2023-03-21'),
(7, '5789a633', 'Teacher', 'Robert', 'james', 'jyothish787898@gmail.com', 2147483647, 'ID Optio', 'Language S', 'Language skills', '2023-03-23'),
(8, 'e2eb7f8e', 'Student', 'arun', 'sam', 'arunstmr@gmail.com', 2147483647, 'ID Optio', 'Language S', 'hkjiuo', '2023-03-23'),
(9, '8549cc1f', 'Student', 'Arun', 'Bbs', 'arunkalayam41@gmail.com', 2147483647, 'ID Optio', 'ijij', 'oijoi', '2023-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `ntkey` char(8) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `lid`, `ntkey`, `time`, `date`) VALUES
(5, 61, '4f338bf0', '09:42:17', '2023-05-07'),
(6, 61, '9ca9f317', '09:42:43', '2023-05-07'),
(7, 61, 'e31ba48a', '10:37:38', '2023-05-11'),
(8, 61, 'ae20c894', '10:37:54', '2023-05-11'),
(9, 61, 'aff19fc6', '11:32:13', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fekey` char(8) NOT NULL,
  `year` varchar(4) NOT NULL,
  `fee` varchar(5) NOT NULL,
  `sem` varchar(1) NOT NULL,
  `cdate` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fekey`, `year`, `fee`, `sem`, `cdate`) VALUES
(3, 'ssss', '2022', '18750', '2', '51-51-5001'),
(4, 'abcdefgh', '2022', '18761', '3', '51-51-5001'),
(5, 'abcdefgh', '2022', '18500', '4', '51-51-5001'),
(6, 'abcdefgh', '2022', '18000', '5', '51-51-5001'),
(7, 'abcdefgh', '2022', '21500', '6', '51-51-5001'),
(8, '04090fde', '2022', '21500', '4', '2023-02-04'),
(9, '9cf473a7', '2020', '18750', '1', '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gkey` char(8) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `img1` varchar(50000) NOT NULL,
  `date` date NOT NULL,
  `heading` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gkey`, `subject`, `img1`, `date`, `heading`) VALUES
(1, 'aa380849', 'Valentines Day celebration', 'IMG-20230516-WA0003.jpg', '2023-05-16', 'Valentines Day'),
(2, '7e4bebdd', 'College celebrates Family Day', 'IMG-20230516-WA0004.jpg', '2023-05-16', 'International Family Day'),
(3, '4125e3a0', 'Student in our college receives second rank', 'IMG-20230516-WA0005.jpg', '2023-05-16', 'University Arts Second Rank'),
(4, 'b0e50fb5', 'College NSS celebrates National Technology Day', 'IMG-20230516-WA0006.jpg', '2023-05-16', 'National Technology Day');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lekey` char(8) NOT NULL,
  `title` varchar(25) NOT NULL,
  `report` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `lstatus` enum('0','1','2') NOT NULL,
  `lid` int(11) NOT NULL,
  `sem` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `lekey`, `title`, `report`, `date`, `lstatus`, `lid`, `sem`) VALUES
(4, 'd5c45466', ',,', 'kkkk', '2022-12-22', '0', 58, ''),
(5, 'e0283dee', ',ll', 'lllkkjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '2022-12-22', '1', 40, ''),
(7, '1fdb9ce9', 'sddsds', 'wswsw', '2022-12-23', '1', 57, ''),
(8, '48f7f05a', 'dsnfkdshjcmbfdf', 'mbdfjgds', '2023-01-01', '1', 60, ''),
(14, '4b8c7c48', 'ddd', 'ddggjjj', '2023-01-11', '1', 61, '1'),
(15, 'b5ca1808', 'khk', 'jhgui', '2023-01-15', '0', 60, ''),
(16, 'bd8ccf24', 'gkk', 'jf', '2023-01-18', '0', 60, ''),
(17, 'f12965ea', 'hfh', 'hvjvhvh', '2023-01-18', '0', 61, '{$sem'),
(18, 'c5a10136', 'sick', 'hgfgdusfuids', '2023-02-20', '1', 66, '1'),
(19, 'f644cda3', 'Fever', 'i am having fever .', '2023-03-21', '1', 95, ''),
(20, '62035c9c', 'New relese', 'i am depressed', '2023-03-21', '0', 61, ''),
(21, '554fcc58', 'Fever', 'Need leave for medical', '2023-05-15', '0', 91, ''),
(22, '11f961ad', 'cant be there', 'New pension payment has been relesed 10-10-2022', '2023-05-15', '1', 103, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lkey` char(8) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `astus` enum('0','1') NOT NULL,
  `utyp` enum('0','1','2','3','4') NOT NULL,
  `gtyp` enum('0','1','2') NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lkey`, `user`, `pwd`, `astus`, `utyp`, `gtyp`, `password`) VALUES
(41, 'LIBRARY0', 'librarian', '', '0', '2', '0', '21232f297a57a5a743894a0e4a801fc3'),
(42, 'admin123', 'admin', '', '0', '0', '0', '21232f297a57a5a743894a0e4a801fc3'),
(46, 'H1234567', 'hod', '', '0', '1', '', '21232f297a57a5a743894a0e4a801fc3'),
(60, '9322fe4a', '777', 'b030afbb3a8af8fb0759241c97466ee4', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(61, '507addab', '1111', 'c5d215777c229704a7862de577d40a73', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(62, 'fa7d6360', '1116', '48000647b315f6f00f913caa757a70b3', '1', '4', '0', '202cb962ac59075b964b07152d234b70'),
(66, 'ef64841d', '1234', '412decf7f56202004e18650fb2db5897', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(67, 'e9b5b013', '1000', '4e5046fc8d6a97d18a5f54beaed54dea', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(68, 'df67e539', '1001', '3f5ee243547dee91fbd053c1c4a845aa', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(69, '6642be3f', '1002', 'c56a022b15250525f8b9bdfc41a13152', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(70, '9a27c93f', '1003', '9fd98f856d3ca2086168f264a117ed7c', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(71, 'd21b5378', '1004', 'a512294422de868f8474d22344636f16', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(72, 'd4ebfaf7', '1005', 'f3507289cfdc8c9ae93f4098111a13f9', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(73, '579add4b', '1006', 'acab0116c354964a558e65bdd07ff047', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(74, '337e8420', '1007', '77431ca7981f1f1483ae8a58bcbb6e0e', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(75, '4ecfde05', '1008', 'fc4ddc15f9f4b4b06ef7844d6bb53abf', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(76, '1990850f', '1009', '1b356667c9a682f8b0215d9d16d286fe', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(77, '6d01281a', '1010', '72a8ab4748d4707fda159db0088d85de', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(78, '7c5543c2', '1011', 'ab013ca67cf2d50796b0c11d1b8bc95d', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(79, 'ba67bab3', '1012', '9e984c108157cea74c894b5cf34efc44', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(80, 'b1436ed4', '1013', '93129bca9fb2d3cb3470e2b9cfde7f63', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(81, '204d2ea7', '1014', 'e077e1a544eec4f0307cf5c3c721d944', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(82, 'd156d644', '1015', 'ce46f09027b218b46063eb2b858f622d', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(83, '123ee6ac', '1016', '032abcd424b4312e7087f434ef1c0094', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(84, '1c69aff9', '1017', '4275f89744278864da88c2fda68ec4e9', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(85, 'c727f2cd', '1018', 'fc8fdb29501a6289b7bc8b0bdd8155df', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(86, '96cf62c5', '1019', '0bed45bd5774ffddc95ffe500024f628', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(88, '7c16a67a', '7777', 'a08e32d2f9a8b78894d964ec7fd4172e', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(95, 'c82efec7', '111', '2f364281f619584f24f63a794a12e354', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(99, 'cc48bb33', '7890', '76cf99d3614e23eabab16fb27e944bf9', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(102, '970643a9', '104', '3dea6b598a16b334a53145e78701fa87', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(103, '30dc3fe3', '101', '6dcb94fb55921f2416219b454651bffc', '0', '3', '0', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nkey` char(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `report` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nkey`, `title`, `report`, `date`) VALUES
(7, '8d6de47b', 'Leaves', 'Two days no class...', '2023-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` varchar(15) NOT NULL,
  `ntkey` char(8) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL,
  `date` varchar(12) NOT NULL,
  `lid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `sem`, `ntkey`, `sname`, `topic`, `note`, `date`, `lid`, `type`) VALUES
(40, '1', '33389845', 'Demo', 'Demo', 'Untitled.mp4', '2023-02-20', 95, 'Video'),
(42, '1', '092b9994', 'Indroduction', 'Begining Concept', 'Introduction (3).mp4', '2023-03-24', 95, 'Video'),
(43, '1', '7b93c8d8', 'DAA', 'Mod 1', 'DAA- mod 1.pdf', '2023-05-15', 91, 'Notes'),
(44, '1', '22c1e042', 'DAA', 'mod2', 'DAA- mod 2 and 4.pdf', '2023-05-15', 95, 'Notes'),
(45, '1', 'aff19fc6', 'OS', 'Loops', 'photo_2023-03-12_13-04-02.jpg', '2023-05-15', 95, 'Notes'),
(46, '1', '0dafd0f7', 'DAA', 'mod3', 'DAA- mod 2 and 4.pdf', '2023-05-15', 103, 'Notes');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokey` char(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `nokey`, `title`, `notice`, `date`) VALUES
(2, '8765ed8b', 'Book relese', 'Computer science related book has been released', '2022-12-21'),
(3, '680853a7', 'Tour Program', 'Department has announced one day tour program', '2022-12-21'),
(4, '2a5e330d', 'Sports Meet', 'College sports meet on', '2022-12-21'),
(5, 'd289737f', 'Anual Day', 'College has decided to conduct anual day online on', '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paykey` char(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expirydate` varchar(10) NOT NULL,
  `currentdate` date NOT NULL,
  `amount` varchar(10) NOT NULL,
  `lid` int(11) NOT NULL,
  `pstatus` enum('0','1') NOT NULL,
  `sem` int(1) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `paykey`, `name`, `cardno`, `cvv`, `expirydate`, `currentdate`, `amount`, `lid`, `pstatus`, `sem`, `contactno`) VALUES
(7, '3b11184f', 'ARUN', '4716 7498 9486 7919', '464', '01 / 24', '2022-12-29', '1', 61, '0', 1, '7736419988'),
(8, '9daeeaf7', 'ARUN', '4716 7498 9486 7919', '464', '01 / 24', '2022-12-29', '500', 61, '0', 2, '7736419988'),
(9, 'd180baa6', 'ARUN', '4716 7498 9486 7919', '464', '01 / 24', '2022-12-29', '500', 61, '0', 2, '7736419988'),
(10, 'e74aac51', 'ARUN', '4716 7498 9486 7919', '464', '01 / 24', '2023-02-20', '20000', 61, '0', 2, '7736419988'),
(11, '1de0caf3', 'ARUN', '4716 7498 9486 7919', '464', '01 / 24', '2023-03-21', '10000', 61, '0', 1, '7736419988'),
(12, '7fe16bd8', 'Arun SL', '1111 1111 1111 1111', '111', '01 / 01', '2023-03-23', '18750', 61, '0', 1, '7736419988'),
(13, '77167a8c', 'Arun SL', '1111 1111 1111 1111', '111', '01 / 01', '2023-03-23', '18750', 61, '0', 2, '7736419988'),
(14, 'df4ad91d', 'Arun SL', '1111 1111 1111 1111', '111', '01 / 01', '2023-03-23', '18750', 61, '0', 1, '7736419988'),
(15, '1896dccb', 'Arun', '1111 1111 1111 1111', '111', '12 / 23', '2023-05-16', '18750', 61, '0', 2, '7736419988');

-- --------------------------------------------------------

--
-- Table structure for table `pta`
--

CREATE TABLE IF NOT EXISTS `pta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptakey` char(8) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pta`
--

INSERT INTO `pta` (`id`, `ptakey`, `batch`, `sem`, `date`, `time`) VALUES
(1, '08a9397e', '2022', '1', '2023-03-18', '11:20:00pm'),
(2, '6025c5d8', '2022', '1', '2023-03-27', '10:41:29am'),
(3, '55261f23', '2022', '1', '2023-03-27', '10:41:39am'),
(4, '9867357a', '2020', '', '2020-03-12', '12:35:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE IF NOT EXISTS `question_paper` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `qkey` char(8) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `img1` varchar(50000) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `qkey`, `subject`, `img1`, `year`) VALUES
(3, 'd99a7df1', 'java', 'quest.pdf', '2022'),
(4, 'd99a7df1', 'java', 'quest.pdf', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rkey` char(8) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `report` varchar(50) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `lid` int(10) NOT NULL,
  `resem` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `rkey`, `date`, `title`, `report`, `reply`, `lid`, `resem`) VALUES
(5, '279ada95', '2023-02-24', 'mkjjb', 'jgjgj', '', 61, 1),
(6, 'e5b44c33', '2023-02-24', 'mkjjb', 'jgjgj', '', 61, 1),
(8, 'de50bcb1', '2023-05-13', 'New relese', 'sdsadd', '', 95, 1),
(9, 'bc35dc92', '2023-03-21', 'New relese', 'New pension payment has been relesed 10-10-2022', '', 95, 1),
(10, 'acec82a6', '2023-03-23', 'aryan', 'uiomvcf', '', 95, 1),
(11, 'aa781329', '2023-03-25', 'bb', 'mn', '', 0, 1),
(12, '17d29cfd', '2023-03-25', 'bb', 'mn', '', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `req_book`
--

CREATE TABLE IF NOT EXISTS `req_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ibkey` char(8) NOT NULL,
  `bnam` varchar(50) NOT NULL,
  `ban` varchar(50) NOT NULL,
  `bpn` varchar(300) NOT NULL,
  `date` varchar(10) NOT NULL,
  `url` varchar(120) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `req_book`
--

INSERT INTO `req_book` (`id`, `ibkey`, `bnam`, `ban`, `bpn`, `date`, `url`, `lid`) VALUES
(1, '67886450', 'asd', 'as', 'zsd', '2022-11-26', 'asdf', 39),
(2, 'a139be62', 'asd', 'kjh', 'kj', '2022-11-26', 'zs', 39),
(3, 'f6d5bc55', 'arun', 'arun', 'arun', '2022-11-27', 'arun', 40),
(4, '0a0cfedc', 'FOG', 'JOHN SEAN', 'ARYA ', '2023-02-04', 'https://www.youtube.', 63),
(5, 'b731ffd7', 'fhgf', 'auth', 'pbn', '2023-02-04', 'utube', 63),
(6, '6f9aa552', 'Computer Science', 'Seema Bhatnagar', 'Tom Holand', '2023-03-21', 'https://myfreetheme.com/farm-agrico-agricultural-business-organic-food-wordpress-theme-download-nulled/', 61),
(7, '64aca3c4', 'Robert james', 'Brylo', 'AJ', '2023-03-21', 'https://myfreetheme.com/farm-agrico-agricultural-business-organic-food-wordpress-theme-download-nulled/', 95),
(8, '633032af', 'cfv', 'dfd', 'dsfds', '2023-05-12', 'dsfds', 95);

-- --------------------------------------------------------

--
-- Table structure for table `stdreg`
--

CREATE TABLE IF NOT EXISTS `stdreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adno` varchar(12) NOT NULL,
  `std_key` char(8) NOT NULL,
  `name1` varchar(12) NOT NULL,
  `name2` varchar(12) NOT NULL,
  `photo` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
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
  `doj` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `grad` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lid` int(11) NOT NULL,
  `fsem` int(2) NOT NULL,
  `addon` varchar(20) NOT NULL,
  `sspd` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`id`, `adno`, `std_key`, `name1`, `name2`, `photo`, `address`, `pin`, `dob`, `sex`, `religion`, `caste`, `fname`, `fjob`, `fpno`, `mname`, `mjob`, `mpno`, `course`, `spno`, `aadhar`, `dep`, `ten`, `tencer`, `plustwo`, `plustwocer`, `doj`, `month`, `sem`, `grad`, `email`, `lid`, `fsem`, `addon`, `sspd`) VALUES
(17, '1111', '0434f9f7', 'Arun', 'SL', 'OIP.jpg', 'sdfs', 980765, '2023-01-11', 'Male', 'fsd', 'sdf', 'fsd', 'sdf', '0987654322', 'Anitha', 'Homemaker', '', '', '7736419988', '2345678', 'CS', '', '', 0, '', '2022-12-27', '12', '5', 'UG', 'arunbs90@gmail.com', 61, 2, '057fb77b', ''),
(22, '12', '865cd10f', 'SANU', 'BS', 'Screenshot (1).png', 'EDAMULAKAL', 695604, '2001-05-20', 'Male', '', '', '', '', '', '', '', '', '', '1111111111', '555555555555', 'COMPUTERSCIE', '', '', 0, '', '2023-02-20', '02', '1', 'UG', '', 65, 0, '0', ''),
(23, '13', '05263871', 'ARUN', 'BS', 'photo_2022-11-23_19-56-24.jpg', 'pension 1 Home', 695602, '2023-02-03', 'Male', '', '', '', '', '', '', '', '', '', '1111111111', '6656668656', '695602', '', '', 0, '', '2023-03-03', '03', '1', 'UG', '', 66, 0, '', ''),
(24, '14', 'edfd6a03', 'NOBLE', 'PBIJU', 'Screenshot (1).png', 'Noblebhavan', 695604, '2025-03-12', 'Male', '', '', '', '', '', '', '', '', '', '1234567891', '555555555555', 'CS', '', '', 0, '', '2023-03-09', '03', '1', 'UG', '', 0, 0, '', ''),
(25, '15', 'a385c319', 'NOBLE', 'PBIJU', 'Screenshot (1).png', 'NOBLE BHAVANAM', 695604, '2023-03-08', 'Male', '', '', '', '', '', '', '', '', '', '1111111111', '555555555555', 'COMPUTERSCIE', '', '', 0, '', '2023-03-11', '03', '1', 'UG', '', 0, 0, '', ''),
(26, '1000', '1908064b', 'Jyothika', 'ML', 'photo_2023-03-12_13-03-15.jpg', 'Jyothinivas', 691534, '2002-08-01', 'Female', '', '', '', '', '', '', '', '', '', '9946980200', '123412341234', 'CS', '', '', 0, '', '2020-10-23', '10', '1', 'UG', '', 67, 0, '', ''),
(27, '1001', 'dd6bd941', 'Arya', 'Stark', 'photo_2023-03-12_13-03-38.jpg', 'Winterfall', 691532, '2002-10-21', 'Female', '', '', '', '', '', '', '', '', '', '9946980222', '123451234512', 'CS', '', '', 0, '', '2020-10-21', '10', '1', 'UG', '', 68, 0, '', ''),
(28, '1002', '6eb061bf', 'Jane', 'Foster', 'photo_2023-03-12_13-03-52.jpg', 'Jane house', 691523, '2001-02-12', 'Female', '', '', '', '', '', '', '', '', '', '9946980223', '123456123456', 'CS', '', '', 0, '', '2020-10-21', '10', '1', 'UG', '', 69, 0, '', ''),
(29, '1003', '8acddeb2', 'Ria', 'L', 'photo_2023-03-12_13-03-57.jpg', 'Ryan House', 691324, '2000-04-23', 'Female', '', '', '', '', '', '', '', '', '', '9946980224', '123456712345', 'CS', '', '', 0, '', '2020-10-23', '10', '1', 'UG', '', 70, 0, '', ''),
(30, '1004', '78967991', 'Christy', 'P', 'photo_2023-03-12_13-04-02.jpg', 'Palorma House', 691234, '2002-03-12', 'Female', '', '', '', '', '', '', '', '', '', '9946980224', '123456781234', 'CS', '', '', 0, '', '2020-10-25', '10', '1', 'UG', '', 71, 0, '', ''),
(31, '1005', 'f3e51603', 'Devika', 'RS', 'photo_2023-03-12_13-04-08.jpg', 'Rahul Nivas', 234123, '2002-03-12', 'Female', '', '', '', '', '', '', '', '', '', '9946980225', '123456789123', 'CS', '', '', 0, '', '2020-10-26', '10', '1', 'UG', '', 72, 0, '', ''),
(32, '1006', 'e99b43d1', 'Deepika', 'M', 'photo_2023-03-12_13-04-13.jpg', 'Revathy Bhavan', 432156, '2002-04-23', 'Female', '', '', '', '', '', '', '', '', '', '9946980227', '123456789012', 'CS', '', '', 0, '', '2020-10-23', '10', '1', 'UG', '', 73, 0, '', ''),
(33, '1007', '77bc7123', 'Deva', 'Nandha', 'photo_2023-03-12_13-04-17.jpg', 'Devabala', 987897, '2002-09-24', 'Female', '', '', '', '', '', '', '', '', '', '9946980226', '123456789010', 'CS', '', '', 0, '', '2020-11-23', '11', '1', 'UG', '', 74, 0, '', ''),
(34, '1008', 'b3963642', 'Stephy', 'Michael', 'photo_2023-03-12_13-04-21.jpg', 'St Christ', 123412, '2002-02-12', 'Female', '', '', '', '', '', '', '', '', '', '9946980228', '123451235412', 'CS', '', '', 0, '', '2020-06-13', '06', '1', 'UG', '', 75, 0, '', ''),
(35, '1009', 'f0220011', 'Jennifer', 'Aniston', 'photo_2023-03-12_13-04-26.jpg', 'Jenny home', 345656, '2002-03-21', 'Female', '', '', '', '', '', '', '', '', '', '9946980230', '231423231234', 'CS', '', '', 0, '', '2020-07-21', '07', '1', 'UG', '', 76, 0, '', ''),
(36, '1010', 'f6899a55', 'Aravind', 'A', 'photo_2023-03-12_14-16-01.jpg', 'ManeeshBhavan', 234167, '2002-07-07', 'Male', '', '', '', '', '', '', '', '', '', '9946980231', '345634563456', 'CS', '', '', 0, '', '2020-10-23', '10', '1', 'UG', '', 77, 0, '', ''),
(37, '1011', '2edafec6', 'Johan', 'Phillip', 'photo_2023-03-12_14-16-26.jpg', 'PhillipLand', 342567, '2002-03-31', 'Male', '', '', '', '', '', '', '', '', '', '9946980232', '678967896789', 'CS', '', '', 0, '', '2020-10-12', '10', '1', 'UG', '', 78, 0, '', ''),
(38, '1012', 'fc21ef82', 'Ryan', 'Phillip', 'photo_2023-03-12_14-16-46.jpg', 'Ryanland', 234112, '2002-02-23', 'Male', '', '', '', '', '', '', '', '', '', '9946980233', '131313132323', 'CS', '', '', 0, '', '2020-09-23', '09', '1', 'UG', '', 79, 0, '', ''),
(39, '1013', '0b44e433', 'Martin', 'Guptil', 'photo_2023-03-12_14-16-51.jpg', 'Lalaland', 123313, '2001-03-23', 'Male', '', '', '', '', '', '', '', '', '', '9946980234', '123123123123', 'CS', '', '', 0, '', '2020-09-18', '09', '1', 'UG', '', 80, 0, '', ''),
(40, '1014', '007baee7', 'John', 'Doe', 'photo_2023-03-12_14-17-03.jpg', 'Doehouse', 908908, '2002-07-07', 'Male', '', '', '', '', '', '', '', '', '', '9946980235', '890789', 'CS', '', '', 0, '', '2020-10-05', '10', '1', 'UG', '', 81, 0, '', ''),
(41, '1015', 'd1057618', 'Shaun', 'Marsh', 'photo_2023-03-12_14-17-09.jpg', 'Marshvilla', 876678, '2003-07-05', 'Male', '', '', '', '', '', '', '', '', '', '9946980236', '456345634563', 'CS', '', '', 0, '', '2020-04-23', '04', '1', 'UG', '', 82, 0, '', ''),
(42, '1016', '4e6ed800', 'Rein', 'John', 'photo_2023-03-12_14-17-37.jpg', 'Rehouse', 876876, '2001-05-04', 'Male', '', '', '', '', '', '', '', '', '', '9946980237', '787867878667', 'CS', '', '', 0, '', '2020-09-04', '09', '1', 'UG', '', 83, 0, '', ''),
(43, '1017', 'dfd292c3', 'Glen', 'Daryl', 'photo_2023-03-12_14-17-41.jpg', 'Daryldome', 454545, '2001-12-23', 'Male', '', '', '', '', '', '', '', '', '', '9946980239', '898989898989', 'CS', '', '', 0, '', '2020-10-23', '10', '1', 'UG', '', 84, 0, '', ''),
(44, '1018', 'd5231b10', 'Anderw', 'Tate', 'photo_2023-03-12_14-17-49.jpg', 'Anderwhome', 98907, '2002-02-22', 'Male', '', '', '', '', '', '', '', '', '', '9946980238', '890098890098', 'CS', '', '', 0, '', '2020-09-13', '09', '1', 'UG', '', 85, 0, '', ''),
(45, '1019', '339616b7', 'Muhammed', 'Jahan', 'photo_2023-03-12_14-17-18.jpg', 'Jawanmanzil', 989898, '2002-09-08', 'Male', '', '', '', '', '', '', '', '', '', '9946980240', '898798797789', 'CS', '', '', 0, '', '2020-10-31', '10', '1', 'UG', '', 86, 0, '', ''),
(47, '666', 'decf3e81', 'Muhammedaadd', 'Jahanaadd', 'photo_2023-03-12_13-03-57.jpg', 'Jawanmanzilaa', 691534, '2000-01-19', 'Female', '', '', '', '', '', '', '', '', '', '7736419988', '7894561232', 'CS', '', '', 0, '', '2023-03-23', '03', '1', 'UG', 'jyothish787898@gmail.com', 87, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tkey` char(8) NOT NULL,
  `day` varchar(10) NOT NULL,
  `s1` varchar(10) NOT NULL,
  `s2` varchar(10) NOT NULL,
  `s3` varchar(10) NOT NULL,
  `s4` varchar(10) NOT NULL,
  `s5` varchar(10) NOT NULL,
  `s6` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `tkey`, `day`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `sem`, `year`) VALUES
(5, '787c87d7', 'Monday', 'SS', 'AS', 'BS', 'CS', 'DS', 'ES', '1', '2022'),
(6, '3fe68457', 'Tuesday', 'BB', 'BS', 'BE', 'BD', 'BG', 'BH', '1', '2022'),
(7, '2ad11bef', 'Wednesday', 'CC', 'CD', 'CD', 'CF', 'CK', 'CR', '1', '2022'),
(8, '65547b0f', 'Thursday', 'QQ', 'QW', 'QE', 'QR', 'QT', 'QY', '1', '2022'),
(9, '653b1b32', 'Sunday', 'OFF', 'OFF', 'WW', 'BD', 'BH', 'OFF', '1', '2022'),
(10, '653b1b33', 'Saturday', 'BH', 'WW', 'BG', 'OFF', 'CK', 'BS', '1', '2022'),
(12, '7a153f97', 'Friday', 'BB', 'AS', 'BS', 'CS', 'DD', 'DE', '1', '2022'),
(13, 'e2c6bf78', 'Wednesday', 'WW', 'VE', 'EET', 'DAA', 'OS', 'WP', '3', '2025'),
(14, 'd73174b2', 'Wednesday', 'WW', 'WP', 'VE', 'DAA', 'DS', 'OS', '3', '2026');

-- --------------------------------------------------------

--
-- Table structure for table `trreg`
--

CREATE TABLE IF NOT EXISTS `trreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trid` int(11) NOT NULL,
  `tr_key` char(8) NOT NULL,
  `name1` varchar(12) NOT NULL,
  `name2` varchar(12) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `quan` varchar(20) NOT NULL,
  `tpno` varchar(12) NOT NULL,
  `adharno` varchar(12) NOT NULL,
  `photo` mediumtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `doj` varchar(11) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `trreg`
--

INSERT INTO `trreg` (`id`, `trid`, `tr_key`, `name1`, `name2`, `address`, `pin`, `dob`, `sex`, `quan`, `tpno`, `adharno`, `photo`, `email`, `doj`, `lid`) VALUES
(1, 46, '05ecbapk', 'hod', '', '', 0, '', '', '', '', '', '', '', '', 46),
(11, 777, '05ecba3c', 'Arjun', 'AL', 'Arjun nivas paiveli', 695604, '2001-05-03', 'Male', 'MCA', '123', '123412341234', 'OIP (1).jpg', 'alarjun504@gmail.com', '', 60),
(32, 111, '7037037c', 'Rahul', 'U', 'Rahul Nivas', 123456, '1979-07-01', 'Male', 'MCA', '9946980522', '231223122312', 'photo_2023-03-12_14-17-18.jpg', 'arunbs90@gmail.com', '2014-07-03', 95),
(43, 104, 'cd53e625', 'Akza', 'Mariam', 'Akza house', 691534, '2001-02-13', 'Female', 'MCA', '9446613441', '123412341234', 'photo_2023-03-12_13-04-17.jpg', 'achusouparnika8@gmail.com', '2023-05-16', 102),
(46, 101, '0e23f4d8', 'Arun', 'Bbs', 'Bb house', 691534, '1979-02-01', 'Male', 'MCA', '6282485010', '123412341234', 'photo_2023-03-12_14-16-51.jpg', 'arun@121gmail.com', '2023-05-15', 103);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
