-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2011 at 09:25 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cazarea`
--

CREATE TABLE IF NOT EXISTS `cazarea` (
  `cazare_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text,
  `add_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nr_room` int(3) NOT NULL DEFAULT '1',
  `max_pers` int(3) NOT NULL DEFAULT '1',
  `dist_strand` text NOT NULL,
  `dist_centru` text NOT NULL,
  `parcare_in` tinyint(1) NOT NULL DEFAULT '0',
  `contact_name` varchar(30) NOT NULL,
  `cazare_address` varchar(80) NOT NULL,
  `contact_tel` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  PRIMARY KEY (`cazare_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `cazarea`
--

INSERT INTO `cazarea` (`cazare_id`, `owner_id`, `name`, `description`, `add_date`, `nr_room`, `max_pers`, `dist_strand`, `dist_centru`, `parcare_in`, `contact_name`, `cazare_address`, `contact_tel`, `contact_email`) VALUES
(7, 2, 'nume', 'desc', '2011-06-28 19:59:38', 1, 1, '1', '1', 0, 'nume nume', 'adressa 1', '15161', '0'),
(9, 2, 'nume123', 'desc', '2011-06-28 20:03:01', 1, 1, '1', '1', 0, 'nume nume', 'adressa 1', '15161', '0'),
(10, 2, 'nume56849', 'asdfds', '2011-06-28 20:06:10', 32, 324, '45', '543', 0, 'fw', 'fewwe', '43', '0'),
(12, 2, 'nume1668', 'fgdtrhjr', '2011-06-28 20:08:18', 43, 234, '234', '234', 0, '5435', '546', '3342', '0'),
(13, 2, 'dgfhf', 'ghj', '2011-06-28 20:15:57', 34, 435, '345', '345', 0, 'tger', 'ert', '345', '0'),
(15, 2, 'dgfhffcgf', 'ghj', '2011-06-28 20:25:40', 34, 435, '345', '345', 0, 'tger', 'ert', '345', '0'),
(16, 2, 'dfdsa', 'dfgdfsg', '2011-06-28 20:30:10', 345, 345, '435', '435', 0, 't54', '45', '', '0'),
(17, 2, 'gfd', 'dfgfdg', '2011-06-28 20:32:32', 0, 0, '', '', 0, '', '', '', '0'),
(18, 0, '', '', '2011-06-29 18:06:28', 0, 0, '', '', 0, '', '', '', '0'),
(19, 0, 'retujh', 'hfjdsfa', '2011-06-29 18:09:46', 43, 3, '3', '3', 0, '7869780htr', 'rth', '456', '0'),
(21, 0, 'retujh456', 'hfjdsfa', '2011-06-29 18:12:42', 43, 3, '3', '3', 0, '7869780htr', 'rth', '456', '0'),
(23, 0, 'retujh456456', 'hfjdsfa', '2011-06-29 18:18:17', 43, 3, '3', '3', 0, '7869780htr', 'rth', '456', '0'),
(24, 0, 'jnuym', 'muy', '2011-06-29 18:29:29', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(25, 0, 'jnuym345', 'muy', '2011-06-29 18:32:44', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(26, 0, 'jnuym345345456', 'muy', '2011-06-29 18:33:56', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(28, 0, 'jnuym345345456svdf', 'muy', '2011-06-29 18:35:44', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(30, 0, 'jnuym345345456svdf324', 'muy', '2011-06-29 18:36:17', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(32, 0, 'jnuym345345456svdf324fdsf', 'muy', '2011-06-29 18:37:47', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(34, 0, 'jnuymbgb45456svdf324fdsf', 'muy', '2011-06-29 18:39:10', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(36, 0, 'jnuymbgb45456s123vdf324fdsf', 'muy', '2011-06-29 18:40:16', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(37, 0, 'sadf43', 'muy', '2011-06-29 18:46:43', 4, 0, '', '', 0, '45', 'try', '45', '0'),
(39, 0, '456gdh', 'ytr', '2011-06-29 18:48:30', 43, 4, '', '', 0, '', '', '', '0'),
(40, 0, 'asd', 'dsf', '2011-06-29 18:49:33', 54, 0, '', '', 0, 'sd', '', '', '0'),
(42, 0, 'asd89778', 'dsf', '2011-06-29 18:49:59', 54, 0, '', '', 0, 'sd', '', '', '0'),
(44, 0, 'bela kuckoja', 'belaje', '2011-06-30 18:57:42', 5, 5, '1230', '0231', 0, 'Bela Buci', 'asd', '234', '0'),
(46, 0, 'bela kuckoja 5453', 'belaje', '2011-06-30 18:59:21', 5, 5, '1230', '0231', 0, 'Bela Buci', 'asd', '234', '0'),
(48, 0, 'enyim', 'ez mind az enyim', '2011-06-30 19:03:44', 326, 1651, '15648', '16518', 0, 'EN magam', 'fold kozepe', '234', '0'),
(50, 0, 'tghjyt5e', 'rty', '2011-06-30 19:09:22', 45, 0, '45', '', 0, '456', '456', '345', '0'),
(52, 0, '345', '546', '2011-06-30 19:15:10', 456, 0, '', '', 0, 'wrwer', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ccusers`
--

CREATE TABLE IF NOT EXISTS `ccusers` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(60) NOT NULL DEFAULT '',
  `user_tel` varchar(50) DEFAULT NULL,
  `user_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ccusers`
--

INSERT INTO `ccusers` (`user_id`, `user_email`, `user_pass`, `user_tel`, `user_date`, `user_modified`, `user_last_login`) VALUES
(1, 'bela@email.com', 'admin', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'admin@email.com', '$2a$08$OffrqXDow6/PRgBNQjN6wObLPsZOUVtl45LMtUJziVr0VwcdQcrmG', '', '2011-05-23 20:52:06', '2011-05-23 20:52:06', '2011-06-28 20:55:45'),
(3, 'me@email.com', '$2a$08$xnQj0xLH6j0zZLRb55GKbu8rDDud5saLUUkzsLH.BQAbyKq2RVOWS', '', '2011-05-24 17:46:13', '2011-05-24 17:46:13', '2011-05-24 19:49:05'),
(4, 'asdf@email.com', '$2a$08$0clgh3y8N.jJAp4O3q8yCeJ/WZ.afz/IaKHEJ9ORNQxfgyiCtI7.G', NULL, '2011-06-22 20:40:12', '2011-06-22 20:40:12', '2011-06-22 22:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE IF NOT EXISTS `extras` (
  `cazare_id` int(10) unsigned NOT NULL,
  `tv` tinyint(1) NOT NULL DEFAULT '0',
  `frigider` tinyint(1) NOT NULL DEFAULT '0',
  `internet` tinyint(1) NOT NULL DEFAULT '0',
  `grill` tinyint(1) NOT NULL DEFAULT '0',
  `apacalda` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cazare_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`cazare_id`, `tv`, `frigider`, `internet`, `grill`, `apacalda`) VALUES
(0, 0, 0, 0, 0, 0),
(37, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0),
(46, 0, 0, 0, 0, 0),
(48, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 0, 0),
(52, 0, 0, 0, 0, 0);
