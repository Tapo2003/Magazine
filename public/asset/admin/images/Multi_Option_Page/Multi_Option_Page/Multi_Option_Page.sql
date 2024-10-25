-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 06:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `multi_option_page`
--
CREATE DATABASE IF NOT EXISTS `multi_option_page` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `multi_option_page`;

-- --------------------------------------------------------

--
-- Table structure for table `regtable`
--

CREATE TABLE IF NOT EXISTS `regtable` (
  `form_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `users_name` varchar(20) DEFAULT NULL,
  `other_name` varchar(50) DEFAULT NULL,
  `reg_password` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `home_option` varchar(30) DEFAULT NULL,
  `document_tag` char(1) NOT NULL DEFAULT 'F',
  `image_tag` char(1) NOT NULL DEFAULT 'F',
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`form_id`, `first_name`, `users_name`, `other_name`, `reg_password`, `email`, `home_option`, `document_tag`, `image_tag`) VALUES
(1, 'Olaniyi ', 'Tapo', 'Taiwo ', '827ccb0eea8a706c4c34a16891f84e7b', 'toyin ', 'option-3', 'T', 'T');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
