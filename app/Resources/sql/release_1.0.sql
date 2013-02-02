-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2013 at 05:02 PM
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
-- Table structure for table `awards_eve`
--

CREATE TABLE IF NOT EXISTS `awards_eve` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `awards_eve`
--


-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `club_name` varchar(255) NOT NULL,
  `club_message` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `club_logo` blob NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `google_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club_name`, `club_message`, `website`, `club_logo`, `facebook_link`, `twitter_link`, `google_link`) VALUES
(1, 'Royal Challengers', 'We play to win.', 'rc', '', '', '', ''),
(2, 'Kolkatta knight Riders', 'Karbo ladbo jeetbo re...', 'kkr', '', '', '', ''),
(3, 'Delhi Dare Devils', 'Hello Hows You..', 'ddd', '', '', '', ''),
(4, 'Kings Royal Punjab', 'I m Great...', 'krp', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `club_news`
--

CREATE TABLE IF NOT EXISTS `club_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `news` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `club_news`
--


-- --------------------------------------------------------

--
-- Table structure for table `club_sponsors`
--

CREATE TABLE IF NOT EXISTS `club_sponsors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `club_sponsors`
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
(4, 'Sample club updates 4', '', '2013-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `club_welfare_officer`
--

CREATE TABLE IF NOT EXISTS `club_welfare_officer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `club_welfare_officer`
--


-- --------------------------------------------------------

--
-- Table structure for table `colts`
--

CREATE TABLE IF NOT EXISTS `colts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `colt_info` varchar(255) NOT NULL,
  `chairman` varchar(255) NOT NULL,
  `chairman_info` varchar(255) NOT NULL,
  `age_group` varchar(255) NOT NULL,
  `colt_coduct` varchar(255) NOT NULL,
  `club_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `colts`
--


-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `club_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `committee`
--


-- --------------------------------------------------------

--
-- Table structure for table `grounds`
--

CREATE TABLE IF NOT EXISTS `grounds` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grounds`
--


-- --------------------------------------------------------

--
-- Table structure for table `heritage`
--

CREATE TABLE IF NOT EXISTS `heritage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `information` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `heritage`
--


-- --------------------------------------------------------

--
-- Table structure for table `honours`
--

CREATE TABLE IF NOT EXISTS `honours` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `honours`
--


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
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(255) NOT NULL,
  `award_info` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `marks`
--


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
-- Table structure for table `old_players`
--

CREATE TABLE IF NOT EXISTS `old_players` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `old_players`
--


-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `partners`
--


-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE IF NOT EXISTS `policies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `policy` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `policies`
--


-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `input_email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `contact_number`, `input_email`, `query`) VALUES
(1, 'Sonal', '9726732371', 'sonal.7271@gmail.com', 'Query for testing.'),
(2, 'Sonal', '9726732371', 'sonal.7271@gmail.com', 'Hello'),
(3, 'Sonal', '', '', 'Hello'),
(4, 'Sonal', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `club_pos` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `l_phone` varchar(255) NOT NULL,
  `m_phone` varchar(255) NOT NULL,
  `input_email` varchar(255) NOT NULL,
  `input_password` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `league_name` varchar(255) NOT NULL,
  `club_country` varchar(255) NOT NULL,
  `club_age` varchar(255) NOT NULL,
  `club_gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `register`
--


-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE IF NOT EXISTS `scholarships` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `scholarships`
--


-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `socials`
--


-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subscriptions`
--


-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `titles`
--


-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `information` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tours`
--


-- --------------------------------------------------------

--
-- Table structure for table `weekly_cricket_events`
--

CREATE TABLE IF NOT EXISTS `weekly_cricket_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `club_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `weekly_cricket_events`
--

