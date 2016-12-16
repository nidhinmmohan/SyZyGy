-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2015 at 02:30 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `username` varchar(255) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `nat_busi` varchar(100) NOT NULL,
  `cont_pers` text NOT NULL,
  `designation` text NOT NULL,
  `address` varchar(400) NOT NULL,
  `phone_nmbr` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `on_exam` text NOT NULL,
  `apt_exam` text NOT NULL,
  `tech_exam` text NOT NULL,
  `gd` text NOT NULL,
  `tech_interv` text NOT NULL,
  `prsnl_intrv` text NOT NULL,
  `boi` text NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`username`, `comp_name`, `nat_busi`, `cont_pers`, `designation`, `address`, `phone_nmbr`, `email`, `on_exam`, `apt_exam`, `tech_exam`, `gd`, `tech_interv`, `prsnl_intrv`, `boi`) VALUES
('', 'dsa', 'gbgfdvc', 'vc', 'vcxd', '           fevdcx                                        ', 1234567890, 'frenyclara@gmail.com', 'no', 'no', 'yes', 'no', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `file_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`file_name`) VALUES
('biodata.pdf'),
('nidhin.pdf'),
('freny.pdf'),
('kir.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `nmbr` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(500) NOT NULL,
  `opt2` varchar(500) NOT NULL,
  `opt3` varchar(500) NOT NULL,
  `opt4` varchar(500) NOT NULL,
  `ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`nmbr`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'First Question', 'b', 'b', 'ssad         ', 'd', 'c'),
(2, 'Second Question', 'B1', 'B1', 'C1	        ', 'D1', 'D1'),
(3, 'The Question', 'B2', 'B2', 'C2	        ', 'D2', 'D2'),
(3, 'The Question', 'B2', 'B2', 'C2	        ', 'D2', 'D2');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `testname` varchar(200) NOT NULL,
  `que` int(11) NOT NULL,
  `ans1` int(11) NOT NULL,
  `ans2` int(11) NOT NULL,
  `ans3` int(11) NOT NULL,
  `ans4` int(11) NOT NULL,
  `true_ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_name` varchar(300) NOT NULL,
  UNIQUE KEY `testname` (`test_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `comp` varchar(400) NOT NULL,
  `job` varchar(400) NOT NULL,
  `tencut` int(11) NOT NULL,
  `twelcut` int(11) NOT NULL,
  `sgpa` int(11) NOT NULL,
  `maxclearsupp` int(11) NOT NULL,
  `maxsupp` int(11) NOT NULL,
  `branch` varchar(400) NOT NULL,
  `sal` int(11) NOT NULL,
  `bond` text NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`comp`, `job`, `tencut`, `twelcut`, `sgpa`, `maxclearsupp`, `maxsupp`, `branch`, `sal`, `bond`, `status`) VALUES
('aaaaaaayaaaaaa', 'sssss                          \r\n                      ', 78, 78, 88, 2, 3, '          sds                \r\n                      ', 121, 'no', 'sent'),
('aaaaaaayaaaaaa', 'sssss                          \r\n                      ', 78, 78, 88, 2, 3, '          sds                \r\n                      ', 121, 'no', 'sent'),
('de', '                          progrmers     ', 3, 4, 5, 3, 4, '  cs                        \r\n                      ', 3, 'no', 'sent'),
('vccc', '                          \r\n      cv                ', 23, 3, 3, 2, 3, '   dd                       \r\n                      ', 3, 'no', 'sent'),
('vccc', '                          \r\n      cv                ', 23, 3, 3, 2, 3, '   dd                       \r\n                      ', 3, 'no', 'sent'),
('nidhin', 'jjjjj                          \r\n                      ', 8, 8, 8, 8, 8, 'cv                          \r\n                      ', 22, 'yes', 'sent'),
('nidhin', 'jjjjj                          \r\n                      ', 8, 8, 8, 8, 8, 'cv                          \r\n                      ', 22, 'yes', 'sent'),
('nidhin', 'jjjjj                          \r\n                      ', 8, 8, 8, 8, 8, 'cv                          \r\n                      ', 22, 'yes', 'sent'),
('kbb', 'vvnbv                \r\n                      ', 9, 9, 7, 7, 7, 'nnn                          \r\n                      ', 22, 'no', 'sent'),
('de', 'bkb                          \r\n                      ', 7, 7, 7, 7, 7, 'bj                          \r\n                      ', 77, 'no', 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `company` varchar(400) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `branch` varchar(400) NOT NULL,
  `studname` text NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`company`, `mail`, `branch`, `studname`, `mark`) VALUES
('v', 'frenyclara@gmail.com', 'nkjn', 'nidhin', 15),
('v', 'frenyclara@gmail.com', 'nkjn', 'nidhin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `username` varchar(255) NOT NULL,
  `stud` varchar(400) NOT NULL,
  `fath` text NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `categ` text NOT NULL,
  `nation` text NOT NULL,
  `college` varchar(400) NOT NULL,
  `branch` varchar(400) NOT NULL,
  `ten` int(11) NOT NULL,
  `twel` int(11) NOT NULL,
  `sg` int(11) NOT NULL,
  `coco` varchar(100) NOT NULL,
  `addr` varchar(400) NOT NULL,
  `dist` text NOT NULL,
  `sta` text NOT NULL,
  `mail` varchar(400) NOT NULL,
  `ph` int(11) NOT NULL,
  UNIQUE KEY `username` (`stud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `stud`, `fath`, `dob`, `gender`, `categ`, `nation`, `college`, `branch`, `ten`, `twel`, `sg`, `coco`, `addr`, `dist`, `sta`, `mail`, `ph`) VALUES
('', 'dfgh', 'fgh', 'dfgh', 'male', 'OBC', 'dfg', 'gh', 'ghj', 7, 8, 9, 'ghj', 'ghjk                                                  ', 'ghjk', 'ghjk', 'ctnidhin@gmail.com', 1234567890),
('', 'nidhin', 'kmk', '3/4/5223', 'male', 'as', 'asas', 'nk', 'nkjn', 7, 7, 7, '7', 'kh', 'ndns', '', 'frenyclara@gmail.com', 2147483647),
('', 'nksjd', 'jnk', '9/3/4232', 'nskjns', 'mlk', 'mmk', 'kbj', 'kjbk', 8, 8, 8, '8', 'hkj', 'jlll', 'nkjnk', 'nidhinmohan330@gmail.com', 98582847);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `client_name` text NOT NULL,
  `client_status` text NOT NULL,
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `client_name`, `client_status`) VALUES
('1234', '12345678', 'de', 'c'),
('admin', 'admin', 'adminnnn', 'a'),
('ds', '12345678', 'vw', 's'),
('dsa', '12345678', 'vwd', 's'),
('dsad', '12345678', 'vwds', 's'),
('fdsa', '12345678', 'dsa', 'c'),
('nidhin', '12345678', 'v', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
