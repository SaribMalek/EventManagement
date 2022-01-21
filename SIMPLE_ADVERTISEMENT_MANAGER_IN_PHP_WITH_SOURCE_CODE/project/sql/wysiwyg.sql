-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2014 at 11:04 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wysiwyg`
--
CREATE DATABASE IF NOT EXISTS `wysiwyg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wysiwyg`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `subject`, `body`) VALUES
(1, 'test', '<div style="text-align: center;">This is a test.</div><div style="text-align: center;">You can put image here...</div><div style="text-align: center;"><br></div><div style="text-align: center;"><img src="images/11708.jpg"></div><div style="text-align: center;"><font color="#ffc0cb">You can also change the text color.</font></div><div style="text-align: center;"><font color="#ff0000" face="Georgia" size="5">Even changing the font and size of the text.</font></div><div style="text-align: center;"><font face="Georgia" size="2">or</font></div><div style="text-align: center;"><font face="Georgia" size="2">make it<b> bold </b>and<i> italic</i>.</font></div><div style="text-align: center;"><br></div>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
