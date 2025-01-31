-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2024 at 06:28 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suspicious_activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(99) NOT NULL,
  `password` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `address` varchar(999) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`ID`, `userid`, `password`, `email`, `phone`, `address`, `dt`) VALUES
(11, 'admin123', 'admin', 'kushaldhole@hotmail.com', '09890546711', 'Farshi Stop Amravati', '2023-04-20 18:15:24'),
(14, 'admin12334', 'admin', 'kushaldhole@hotmail.com', '09890546711', 'Farshi Stop Amravati', '2023-04-20 18:15:38'),
(15, 'agentamt25', 'agent25', '', '', '', '2024-02-25 18:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `agent_message`
--

CREATE TABLE IF NOT EXISTS `agent_message` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `state` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `img` varchar(999) NOT NULL,
  `desc` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resolved_status` int(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `agent_message`
--

INSERT INTO `agent_message` (`ID`, `state`, `city`, `img`, `desc`, `dt`, `resolved_status`) VALUES
(2, 'Maharashtra', 'Amravati', '02192023083158-Desert.jpg', 'I have seen robberies at jayasthambh chowk', '2023-02-19 13:01:58', 0),
(3, 'Maharashtra', 'Amravati', '02192023083438-Desert.jpg', 'I have seen robbery', '2023-02-19 13:04:38', 0),
(6, 'Maharashtra', 'Amravati', '03182023083619-Koala.jpg', 'i have seen crime happening at rajapeth', '2023-03-18 13:06:19', 0),
(7, 'Maharashtra', 'Akola', '03052024122750-Lighthouse.jpg', 'hi dabki road crime can happen by tomorrow', '2024-03-05 16:57:50', 0),
(8, 'Maharashtra', ' Yawatmal ', '03062024045408-03062024044307-02192023083158-Desert.jpg', 'some criminal activity can happen in yawatmal', '2024-03-06 09:24:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `demo`
--


-- --------------------------------------------------------

--
-- Table structure for table `guest_message`
--

CREATE TABLE IF NOT EXISTS `guest_message` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `state` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `img` varchar(999) NOT NULL,
  `desc` text NOT NULL,
  `area` varchar(999) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resolved_status` varchar(111) NOT NULL DEFAULT '0',
  `approval_status` varchar(999) NOT NULL DEFAULT '0',
  `current_hash` varchar(999) NOT NULL,
  `previous_hash` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `guest_message`
--

INSERT INTO `guest_message` (`ID`, `state`, `city`, `img`, `desc`, `area`, `dt`, `resolved_status`, `approval_status`, `current_hash`, `previous_hash`) VALUES
(21, 'Maharashtra', 'Amravati', '02252024140920-Desert.jpg', 'i have seen crime at navate square', '', '2024-02-25 18:39:20', '0', '0', '9208ab3550318d1aace297f47eaceaeed6bb9231', '7d41e4b5a7e2dcb6c1d0f7e8831d8cb1edf6c56b'),
(22, 'Maharashtra', 'Amravati', '03052024123140-Hydrangeas.jpg', '<scriptsdfsdf< sdfSDF<.sdfjlf\r\n''fa,rc\r\nm[0', '', '2024-03-05 17:01:40', '0', '0', '5da586bdccc1b617402e4cf3f7279a892298f132', '9208ab3550318d1aace297f47eaceaeed6bb9231'),
(24, 'Maharashtra', 'Amravati', '03052024123253-Koala.jpg', 'i have seen something suspeciou at rajapeth', '', '2024-03-05 17:02:53', '0', '0', 'b739fcad70612e5b70de2991335fc629e26547d3', '5da586bdccc1b617402e4cf3f7279a892298f132'),
(25, 'Maharashtra', 'Amravati', '03062024044307-02192023083158-Desert.jpg', 'I have seen some suspicious activity at rajapeth', '', '2024-03-06 09:13:07', '0', '0', '08cb1a7c5839803597ca8bea5da0f6861ff31bab', 'b739fcad70612e5b70de2991335fc629e26547d3'),
(26, 'Maharashtra', 'Amravati', '03062024044516-03052024123206-Hydrangeas.jpg', '<script >sdf sdfj,/23234 <h1>sfddsf</scrpit>', '', '2024-03-06 09:15:16', '0', '0', 'f5cfc43fb6682c64e445728f3dc9ec244ab4e32a', '08cb1a7c5839803597ca8bea5da0f6861ff31bab'),
(27, 'Maharashtra', ' Yawatmal ', '03062024045137-03172023202930-Koala.jpg', 'hello i have seen accident near amravati road', '', '2024-03-06 09:21:37', '0', '0', '0a13dbb613cb8662232ee73a107786728e565956', 'f5cfc43fb6682c64e445728f3dc9ec244ab4e32a'),
(31, 'Maharashtra', 'Akola', '03312024071349-Jellyfish.jpg', 'i have seen accident at akola', '', '2024-03-31 10:47:41', '1', '0', '8f6415ac555b64d5589d70f58b5d13cdb7295a73', '0a13dbb613cb8662232ee73a107786728e565956'),
(32, 'Maharashtra', 'Akola', '03312024071908-Hydrangeas.jpg', 'i have seen', '', '2024-03-31 10:49:08', '0', '0', '4a9a8da829bcc3f30295ebd79bbbe48fda203243', '8f6415ac555b64d5589d70f58b5d13cdb7295a73'),
(33, 'Maharashtra', 'Amravati', '04112024095130-Flowchart-for-Ride-Booking-Application.png', 'just happened road accident major ata rajapeth', '', '2024-04-11 13:22:32', '1', '0', '76f666cb007e25138541132c647e1e28bf334b36', '4a9a8da829bcc3f30295ebd79bbbe48fda203243'),
(34, 'Maharashtra', 'Pune', '04112024095453-Koala.jpg', 'i seend dog abbused at karve nagar', '', '2024-04-11 13:25:21', '1', '0', '1cb8743a962a3771fe2b0362386739edb22fb3d5', '76f666cb007e25138541132c647e1e28bf334b36');

-- --------------------------------------------------------

--
-- Table structure for table `miners`
--

CREATE TABLE IF NOT EXISTS `miners` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `psw` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `miners`
--

INSERT INTO `miners` (`ID`, `name`, `email`, `psw`, `contact`) VALUES
(2, 'Kushal Dhole', 'miner', 'admin', '5412435465');

-- --------------------------------------------------------

--
-- Table structure for table `petroling`
--

CREATE TABLE IF NOT EXISTS `petroling` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `fullname` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `Area` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `petroling`
--

INSERT INTO `petroling` (`ID`, `username`, `password`, `fullname`, `contact`, `state`, `city`, `Area`) VALUES
(4, 'admin', 'admin', 'asdasd', 'asdasd', 'Maharashtra', 'Amravati', 'rajapeth'),
(5, 'raj', 'raj123', 'Raj Sharma', '9898989898', 'Maharashtra', 'Akola', 'dabkiroad');

-- --------------------------------------------------------

--
-- Table structure for table `proof_of_work`
--

CREATE TABLE IF NOT EXISTS `proof_of_work` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `blockchain_id` int(111) NOT NULL,
  `miners_id` int(111) NOT NULL,
  `state` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `status` int(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `proof_of_work`
--

INSERT INTO `proof_of_work` (`ID`, `blockchain_id`, `miners_id`, `state`, `city`, `status`) VALUES
(40, 19, 2, 'Himachal Pradesh', 'Kufri', 1),
(41, 19, 2, 'Himachal Pradesh', 'Kufri', 0),
(42, 18, 2, 'Dadra and Nagar Haveli', 'Galonda', 0),
(43, 20, 2, 'Maharashtra', 'Amravati', 1),
(44, 15, 2, 'Maharashtra', 'Amravati', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state_admin`
--

CREATE TABLE IF NOT EXISTS `state_admin` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `state` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `phone` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `state_admin`
--

INSERT INTO `state_admin` (`ID`, `username`, `password`, `state`, `city`, `email`, `phone`, `address`, `dt`) VALUES
(7, 'amtrajapeth', '74d5329edb52bf97639b99d92d1f0bc3', 'Maharashtra', 'Amravati', '', '', '', '2024-03-05 22:09:43'),
(8, 'Yawatmalchowki', 'a7cb8ef3b5c02c591a0432d72c8ab47c', 'Maharashtra', ' Yawatmal ', '', '', '', '2024-03-06 09:17:19'),
(10, 'akola', '3b1a9518c9549ce4a31d647cb2a7d0cc', 'Maharashtra', 'Akola', '', '', '', '2024-03-31 10:41:52'),
(11, 'pune', 'd97287d4373014493df24ba5a5bf128d', 'Maharashtra', 'Pune', '', '', '', '2024-04-11 13:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');
