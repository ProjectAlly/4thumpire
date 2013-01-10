-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2013 at 03:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fourth_umpire`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_updates`
--

CREATE TABLE IF NOT EXISTS `club_updates` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_updates`
--

INSERT INTO `club_updates` (`id`, `title`, `description`, `date`) VALUES
(1, 'Sample club updates 1', '', '2013-01-09'),
(2, 'Sample club updates 2', '', '2013-01-22'),
(3, 'Sample club updates 3', '', '2013-01-31'),
(1, 'Sample club updates 4', '', '2013-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `international_news`
--

CREATE TABLE IF NOT EXISTS `international_news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_news`
--

INSERT INTO `international_news` (`id`, `title`, `description`, `date`) VALUES
(1, 'Sample international news for testing 1', '', '2001-03-28'),
(2, 'Sample international news for testing 2', '', '2013-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE IF NOT EXISTS `news_updates` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `title`, `description`, `date`) VALUES
(1, 'Sample news and updates 1', 'This is coming from database for checking', '2013-01-17'),
(2, 'Sample news and updates 2', 'This is coming from database for checking', '2013-01-08'),
(3, 'Sample news and updates 3', 'This is coming from database for checking', '2013-01-24'),
(4, 'Sample news and updates 4', 'This is coming from database for checking', '2013-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `inputEmail` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `contactNumber`, `inputEmail`, `query`) VALUES
(1, 'Sonal', '9726732371', 'sonal.7271@gmail.com', 'Query for testing.'),
(2, 'Sonal', '9726732371', 'sonal.7271@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `clubPos` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `lPhone` varchar(255) NOT NULL,
  `mPhone` varchar(255) NOT NULL,
  `inputEmail` varchar(255) NOT NULL,
  `inputPassword` varchar(255) NOT NULL,
  `clubName` varchar(255) NOT NULL,
  `leagueName` varchar(255) NOT NULL,
  `clubCountry` varchar(255) NOT NULL,
  `clubAge` varchar(255) NOT NULL,
  `clubGender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

