-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 11:24 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `off_code_fine`
--

DROP TABLE IF EXISTS `off_code_fine`;
CREATE TABLE IF NOT EXISTS `off_code_fine` (
  `off_id` int(20) NOT NULL AUTO_INCREMENT,
  `off_name` varchar(255) NOT NULL,
  `off_code` varchar(50) NOT NULL,
  `penalty` int(100) NOT NULL,
  PRIMARY KEY (`off_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off_code_fine`
--

INSERT INTO `off_code_fine` (`off_id`, `off_name`, `off_code`, `penalty`) VALUES
(1, 'Attempting to corrupt Marshall on duty', 'atcmd', 50000),
(2, 'Drinking & Driving', 'd&d', 10000),
(3, 'Assaulting Road Marshall', 'ARM', 15000),
(4, 'Dangerous Driving', 'D&DII', 20000),
(5, 'Driver''s License Violation', 'DLV', 20000),
(6, 'Do not move violation', 'DNMV', 8000),
(7, 'Driver''s License Violation', 'DLV', 20000),
(8, 'Do not move violation', 'DNMV', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `off_details`
--

DROP TABLE IF EXISTS `off_details`;
CREATE TABLE IF NOT EXISTS `off_details` (
  `rp_id` int(20) NOT NULL AUTO_INCREMENT,
  `o_fname` varchar(70) NOT NULL,
  `o_lname` varchar(50) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `driver_license` varchar(70) NOT NULL,
  `gender` char(8) NOT NULL,
  `address` varchar(70) NOT NULL,
  `offence` varchar(70) NOT NULL,
  `offence_code` varchar(20) NOT NULL,
  `penalty` int(20) NOT NULL,
  `officer_reporting` varchar(20) NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off_details`
--

INSERT INTO `off_details` (`rp_id`, `o_fname`, `o_lname`, `vehicle_no`, `driver_license`, `gender`, `address`, `offence`, `offence_code`, `penalty`, `officer_reporting`) VALUES
(1, 'oluwasina', 'Baily', 'bbbbbbbbbbb', '239jewj93', 'female', 'blessing street', 'Attempting to corrupt Marshall on duty', 'atcmd', 50000, 'root'),
(2, 'Soneye', 'Oluwasina', 'bbbbbbbbbbb', 'a93093ks', 'female', 'blessing street', 'Attempting to corrupt Marshall on duty', 'atcmd', 50000, 'root'),
(3, 'Lastma', 'Junior', 'Ahsdkh89', 'Lbbahsuas', 'male', 'asassaas', 'Dangerous Driving', 'ddII', 15000, 'made123'),
(4, 'make', 'bull', 'M6328Tsha', 'DJRj7879', 'male', 'bass methopdist', 'Dangerous Driving', 'ddII', 15000, 'root'),
(5, 'make', 'bull', 'M6328Tsha', 'DJRj7879', 'male', 'bass methopdist', 'Dangerous Driving', 'ddII', 15000, 'root'),
(6, 'Mase', 'Moses', 'An78w7qjsa', '7887asbkjabs', 'male', 'moses str', 'Dangerous Driving', 'ddII', 15000, 'root'),
(7, 'Basket', 'Musket', 'A678askjk', 'Z73892jk', 'male', 'Market Villa', 'Dangerous Driving', 'ddII', 15000, 'root'),
(8, 'market', 'Visa', 'aosdih', 'oihasah', 'male', 'dsnkl', 'Dangerous Driving', 'ddII', 15000, 'root'),
(9, 'Dayo	', 'ehwiuh', 'eiwu', 'iuewi', 'male', 'jdskj', 'Attempting to corrupt Marshall on duty', 'atcmd', 50000, 'made123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `c_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `c_password`, `email`) VALUES
(1, 'oluwasina', 'Oluwasina555', 'root', '63a9f0ea7bb98050796b649e85481845', '63a9f0ea7bb98050796b649e85481845', 'advancoplanet@gmail.com'),
(18, 'bass', 'bass', 'ojuko', '9c2a1fe4972a9fb7a13d17ed58893a66', 'f607bf6278c7008add89a504a7510ed0', 'lawalabimbola22@gmail.com'),
(17, 'oluwasina', 'Oluwasina', 'made123', '4ab8710d781ba5b13aaf561cafd896b7', '4ab8710d781ba5b13aaf561cafd896b7', 'advancoplanet@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('bimbo', 'c9c3ea8acf0eeeec518a0c3ffaf01eba'),
('#dffdfd', 'gsgff'),
('bas', 'bas'),
('aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

DROP TABLE IF EXISTS `userss`;
CREATE TABLE IF NOT EXISTS `userss` (
  `forename` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
