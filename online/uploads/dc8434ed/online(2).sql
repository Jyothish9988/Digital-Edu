-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 02:21 PM
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
  `bkey` char(8) NOT NULL,
  `bnam` varchar(50) NOT NULL,
  `img1` varchar(5000) NOT NULL,
  `img2` varchar(5000) NOT NULL,
  `ban` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sem` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `bkey`, `bnam`, `img1`, `img2`, `ban`, `subject`, `sem`) VALUES
(42, 'c6907280', 'Computer Science', 'OIP (1).jpeg', 'online (2).sql', 'Seema Bhatnagar', 'null', ''),
(43, '49c4bd8a', 'Computer Science Vol 3', 'OIP (2).jpeg', 'online (2).sql', 'Brylo', 'null', ''),
(44, '2ae44c92', 'Computer Science Vol 4', 'download.jpeg', 'online (2).sql', 'asdfg', 'null', ''),
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
(59, '11724c18', 'Discrete Mathematics', '690144e3-e401-493c-9f4e-74f9508645d5.jfif', 'dmoi-tablet.pdf', 'S Chand', 'maths2', '2'),
(60, 'e7cf3d24', 'Foundation of Computer Science', '2fa9ba1d-afe2-4fe3-a457-a6cbbd2703bd.jfif', 'DCAP202_FUNDAMENTALS_OF_WEB_PROGRAMMING.pdf', 'Alfred Vaho', 'Null', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lkey`, `user`, `pwd`, `astus`, `utyp`, `gtyp`, `password`) VALUES
(39, '1d727ab7', '111', '05546b0e38ab9175cd905eebcc6ebb76', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(40, '6816cd22', '7711', 'ac5c482277858d6fe45065d0a3f92b0c', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(41, 'LIBRARY0', 'librarian@mtcst.com', '', '0', '2', '0', '21232f297a57a5a743894a0e4a801fc3'),
(42, 'admin123', 'admin@mtcst.com', '', '0', '0', '0', '21232f297a57a5a743894a0e4a801fc3'),
(45, '3fc10f10', '7712', '6651526b6fb8f29a00507de6a49ce30f', '0', '3', '0', '202cb962ac59075b964b07152d234b70'),
(46, 'H1234567', 'hod@mtcst.com', '', '', '1', '', '21232f297a57a5a743894a0e4a801fc3'),
(47, '6544dbde', '113', 'a2d10d355cdebc879e4fc6ecc6f63dd7', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(48, '4e0f2964', '113', '1f74a54f39b3123ad272ca0a06e7463f', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(49, 'a3499a81', '116', 'cd81cfd0a3397761fac44ddbe5ec3349', '0', '4', '0', '202cb962ac59075b964b07152d234b70'),
(50, '99612a8d', '000', 'd2cdf047a6674cef251d56544a3cf029', '0', '4', '0', 'c6f057b86584942e415435ffb1fa93d4'),
(51, '16e52c12', '0000', 'b154e7b21b2ff0a14d96affa6d3fb958', '0', '3', '0', ''),
(52, '813fde60', '999', 'eae15aabaa768ae4a5993a8a4f4fa6e4', '0', '3', '0', 'c4ca4238a0b923820dcc509a6f75849b');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nkey`, `title`, `report`, `date`) VALUES
(1, 'd3b3d42b', 'New relesee', 'New pension payment has been relesed 10-10-2022', '2022-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` varchar(2) NOT NULL,
  `ntkey` char(8) NOT NULL,
  `sname` varchar(10) NOT NULL,
  `topic` varchar(10) NOT NULL,
  `note` varchar(30) NOT NULL,
  `date` varchar(12) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `qkey`, `subject`, `img1`, `year`) VALUES
(16, '5889d593', 'Question', 'Web capture_15-11-2022_101435_localhost.jpeg', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `req_book`
--

CREATE TABLE IF NOT EXISTS `req_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ibkey` char(8) NOT NULL,
  `bnam` varchar(50) NOT NULL,
  `ban` varchar(50) NOT NULL,
  `bpn` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `url` varchar(200) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `req_book`
--

INSERT INTO `req_book` (`id`, `ibkey`, `bnam`, `ban`, `bpn`, `date`, `url`, `lid`) VALUES
(1, '67886450', 'asd', 'as', 'zsd', '2022-11-26', 'asdf', 39),
(2, 'a139be62', 'asd', 'kjh', 'kj', '2022-11-26', 'zs', 39),
(3, 'f6d5bc55', 'arun', 'arun', 'arun', '2022-11-27', 'arun', 40);

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
  `doj` varchar(10) NOT NULL,
  `grad` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`id`, `adno`, `std_key`, `name1`, `name2`, `photo`, `address`, `pin`, `dob`, `sex`, `religion`, `caste`, `fname`, `fjob`, `fpno`, `mname`, `mjob`, `mpno`, `course`, `spno`, `aadhar`, `dep`, `ten`, `tencer`, `plustwo`, `plustwocer`, `doj`, `grad`, `email`, `lid`) VALUES
(1, '111', 'A1234567', 'Arjun', 'A L', 'arjun.jpeg', 'arjun house', 123456, '2020-10-10', 'Male', 'Hindhu', 'Nill', 'Anil', 'MVD', '789456123', 'sdfdsfds', 'sdfsfdsf', '7418528353', 'Bsccs', '9061109887', '7539514862', 'asc', '99', 'cer.jpg', 99, 'cer.jpg', '2022-11-14', 'UG', 'alarjun504@gmail.com', 50),
(2, '112', 'B1234567', 'RYAN', '', 'RYAN.jpg', 'KIRANSADANAM', 691534, '2020-04-03', 'Male', 'Hindhu', 'Nill', 'REYNOLDS', 'ACTOR', '6565657878', 'BLAKE', 'ACTRESS', '9946980221', 'Computer', '7560967551', '23456789011', 'COMPUTER', '789', 'RYAN.doc', 940, 'RYAN.doc', '', '', '', 50),
(5, '113', '4069e5ae', 'ARUN', 'B S', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '7025767506', '', 'CS', '', '', 0, '', '2020-11-07', 'UG', '', 50),
(6, '134', '2c141b37', 'as', 'as', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '123', '', 'as', '', '', 0, '', '2022-11-18', 'UG', '', 50),
(7, '113', '902ed700', 'Jyothish', 'S L', 'photo_2022-09-17_18-56-18.jpg', '', 0, '', '', '', '', '', '', '', '', '', '', '', '6282485014', '', 'CS', '', '', 0, '', '2022-11-08', 'UG', '', 50),
(8, '116', '277ae295', 'Athil', 'Chand', 'banner.png', '', 0, '', '', '', '', '', '', '', '', '', '', '', '9946980221', '', 'CS', '', '', 0, '', '2022-08-11', 'UG', '', 50),
(9, '000', '587915aa', 'std', 'std', 'ARUN BS .jpg', '', 0, '', '', '', '', '', '', '', '', '', '', '', '123', '', 'std', '', '', 0, '', '2022-11-16', 'UG', '', 50),
(10, '999', 'a1fc0b2d', 's', 's', 'banner.png', '', 0, '', '', '', '', '', '', '', '', '', '', '', '1', '', 's', '', '', 0, '', '2022-11-10', 'UG', '', 0);

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
  `photo` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trreg`
--

INSERT INTO `trreg` (`id`, `trid`, `tr_key`, `name1`, `name2`, `address`, `pin`, `dob`, `sex`, `quan`, `tpno`, `adharno`, `photo`, `email`, `lid`) VALUES
(1, 7711, 'A9876543', 'Arun', 'B S', 'Kiran sadanam', 741852, '2002-03-04', 'Male', 'BSC CS,MCA ,MPhil', '9446613440', '123456789521', '', 'arunkalayam41@gmail.com', 40),
(2, 7712, 'B9876543', 'Jyothish', 'S L', 'House', 695604, '2008-10-09', 'Male', 'fghj', '7736419988', '123456789521', '', 'jyothish@gmail.com', 45),
(3, 0, 'c81460ad', '0000', '0000', '0000', 0, '2022-11-08', '0000', '0000', '0000', '0000', 'photo.jpg', '', 51),
(4, 999, 'd414b50f', 'a', 'a', 'a', 0, '2022-11-02', 'a', 'a', '1', '123', 'banner.png', '999@mtcst.com', 52);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
