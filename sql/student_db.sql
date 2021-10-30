-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 01:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `i_id`
--

CREATE TABLE IF NOT EXISTS `i_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `i_id`
--

INSERT INTO `i_id` (`id`, `uname`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `un` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `moname` text NOT NULL,
  `bdate` text NOT NULL,
  `dsate` text NOT NULL,
  `photo` text NOT NULL,
  `gender` text NOT NULL,
  `a2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pin` text NOT NULL,
  `class` text NOT NULL,
  `faculty` text NOT NULL,
  `omark` text NOT NULL,
  `tmark` text NOT NULL,
  `pmark` text NOT NULL,
  `lcname` text NOT NULL,
  `uname` text NOT NULL,
  `nfaculty` text NOT NULL,
  `nclass` text NOT NULL,
  `section` text NOT NULL,
  `division` text NOT NULL,
  `fid` text NOT NULL,
  `verify` text NOT NULL,
  `adate` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `mobile` int(13) NOT NULL,
  `pass` text NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
