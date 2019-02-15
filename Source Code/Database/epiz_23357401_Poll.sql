-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql202.epizy.com
-- Generation Time: Feb 15, 2019 at 05:09 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23357401_Poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `likee` int(11) NOT NULL DEFAULT '0',
  `dislike` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`likee`, `dislike`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`ID`, `Name`, `question`) VALUES
(1, '', 'when is the deadline ?');

-- --------------------------------------------------------

--
-- Table structure for table `instant`
--

CREATE TABLE IF NOT EXISTS `instant` (
  `id` int(11) NOT NULL,
  `Question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instant`
--

INSERT INTO `instant` (`id`, `Question`) VALUES
(1, 'Dummy question ');

-- --------------------------------------------------------

--
-- Table structure for table `instantanswers`
--

CREATE TABLE IF NOT EXISTS `instantanswers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `instantanswers`
--

INSERT INTO `instantanswers` (`id`, `Answer`) VALUES
(1, 'dummy answer'),
(2, 'dummy');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `questions` text NOT NULL,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL,
  `answer4` text NOT NULL,
  `answer5` text NOT NULL,
  `answer6` text NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `questions`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `no`) VALUES
(1, 'where do you want to go', 'the mall', 'cinema', 'home ', 'school', 'restaurant', 'park', 1, 0, 0, 1, 0, 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
