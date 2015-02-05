-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2013 at 07:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adposting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE IF NOT EXISTS `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			this is about us page.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`AdminID`, `UserName`, `Password`) VALUES
(1, 'krunal', 'patel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryid`, `categoryname`) VALUES
(2, 'Electronics-Technology'),
(3, 'Home-Lifestyle'),
(4, 'Real Estate'),
(5, 'Car-Bikes'),
(6, 'Jobs'),
(7, 'Services'),
(8, 'Entertainment'),
(9, 'Education-Learning'),
(10, 'Pets-Pet Care'),
(11, 'Community'),
(12, 'Events'),
(13, 'Matrimonial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(100) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`cityid`, `cityname`) VALUES
(1, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE IF NOT EXISTS `tbl_contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			this is contact us page.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE IF NOT EXISTS `tbl_home` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			this is home page.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listingpolicy`
--

CREATE TABLE IF NOT EXISTS `tbl_listingpolicy` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listingpolicy`
--

INSERT INTO `tbl_listingpolicy` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			this is listing policy.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postad`
--

CREATE TABLE IF NOT EXISTS `tbl_postad` (
  `postadid` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `adtitle` varchar(250) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `adimage` varchar(100) NOT NULL,
  `relatedkeyword` varchar(500) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `registerid` int(11) NOT NULL,
  `displayid` int(11) NOT NULL,
  `membertype` varchar(50) NOT NULL,
  PRIMARY KEY (`postadid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_postad`
--

INSERT INTO `tbl_postad` (`postadid`, `emailid`, `city`, `category`, `subcategory`, `adtitle`, `description`, `adimage`, `relatedkeyword`, `mobileno`, `registerid`, `displayid`, `membertype`) VALUES
(1, 'dd', '', '', '', '', '', '', '', '', 0, 0, ''),
(2, 'krunalpatel239@gmail.com', 'Ahmedabad', 'Education-Learning', 'Computer Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			Learn asp.net in ahmedabad</p>\r\n		<p>\r\n			9376612124</p>\r\n		<p>\r\n			http://anantitsolution.com</p>\r\n	</body>\r\n</html>\r\n', 'gal3.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 1, 1, 'Free'),
(3, 'krunalpatel239@gmail.com', 'Ahmedabad', 'Education-Learning', 'Computer Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			Learn asp.net in ahmedabad</p>\r\n		<p>\r\n			9376612124</p>\r\n		<p>\r\n			http://anantitsolution.com</p>\r\n	</body>\r\n</html>\r\n', 'gal3.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 1, 1, 'Free'),
(4, '', 'Please Select', 'Please Select', 'Please Select', '', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n	</body>\r\n</html>\r\n', '', '', '', 1, 1, 'Free'),
(5, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 1, 1, 'Free'),
(6, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 0, 1, 'Free'),
(7, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 10, 1, 'Free'),
(8, '', '', '', '', '', '', '', '', '', 10, 1, 'Free'),
(9, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 10, 1, 'Free'),
(10, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 10, 1, 'Free'),
(11, '444', 'Ahmedabad', 'Education-Learning', 'Language Classes', 'Learn asp.net in ahmedabad', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dfdfd</p>\r\n	</body>\r\n</html>\r\n', 'img2.jpg', 'asp.net learning, asp.net turorial, asp.net training classes', '9376612124', 10, 1, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy`
--

CREATE TABLE IF NOT EXISTS `tbl_privacy` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_privacy`
--

INSERT INTO `tbl_privacy` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			hello privacy policy page.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
  `registerid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `verify` varchar(50) NOT NULL,
  PRIMARY KEY (`registerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`registerid`, `name`, `username`, `password`, `emailid`, `city`, `verify`) VALUES
(1, '0', '0', '0', '0', '', 'No'),
(2, '0', '0', '0', '0', 'Ahmedabad', 'No'),
(3, '0', '0', '0', '', '', 'No'),
(4, '0', '0', '0', 'krunal@gmail.com', 'Ahmedabad', 'No'),
(5, '0', '0', 'hh', 'hello@gmail.com', 'Ahmedabad', 'No'),
(6, '0', '0', '0', 'vibhusha@gmail.com', 'Ahmedabad', 'No'),
(7, '0', '0', '0', 'janak@yahoo.com', 'Ahmedabad', 'No'),
(8, '0', '0', '0', 'janak@yahoo.com', 'Ahmedabad', 'No'),
(10, '0', '0', 'vv', 'vinayak@gmail.com', 'Ahmedabad', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `subcategoryid` int(11) NOT NULL AUTO_INCREMENT,
  `subcategoryname` varchar(100) NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`subcategoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategoryid`, `subcategoryname`, `categoryname`) VALUES
(15, 'Language Classes', 'Education-Learning'),
(16, 'Computer Classes', 'Education-Learning'),
(19, 'Car Rent Services', 'Car-Bikes'),
(20, 'LED Repairing', 'Electronics-Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_terms` (
  `id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_terms`
--

INSERT INTO `tbl_terms` (`id`, `name`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			hello terms</p>\r\n	</body>\r\n</html>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
