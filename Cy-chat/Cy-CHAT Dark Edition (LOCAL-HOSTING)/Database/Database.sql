
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 08:43 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a7918848_members`
--

-- --------------------------------------------------------

--
-- Table structure for table `g_chat`
--

CREATE TABLE `g_chat` (
  `mid` int(100) NOT NULL AUTO_INCREMENT,
  `id` int(100) NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gmess` char(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'don''t know',
  PRIMARY KEY (`mid`),
  UNIQUE KEY `mid` (`mid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `g_chat`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Firstname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Middlename` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Lastname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Gender` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Dob` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` VALUES('Mihir', 'Rajan', 'Jayavant', '125d0d502244655321fd3c3daf0dc440', 'mrj@g', 1234, 'Male', 1, '2016-02-29');
INSERT INTO `login` VALUES('Ajay', 'Ramsuchit', 'Kushwaha', '35cefbb0e86d4b7b1411a43e2f2ffc25', 'kajay6029@gmail.com', 9702511552, 'Male', 22, '1995-04-16');
INSERT INTO `login` VALUES('shashank', 'jayendra', 'kawle', '81dc9bdb52d04dc20036dbd8313ed055', 'shashankkawle67@gmail.com', 1, 'Male', 41, '2016-03-14');
INSERT INTO `login` VALUES('Tushar', 'asd1', 'asd2', 'e10adc3949ba59abbe56e057f20f883e', 't@g.c', 22, 'Male', 27, '2016-02-01');
INSERT INTO `login` VALUES('akki', 'subhash', 'gavai', 'f1a81d782dea6a19bdca383bffe68452', 'evilakkisback@gmail.com', 123456789, 'Male', 18, '1996-02-02');
