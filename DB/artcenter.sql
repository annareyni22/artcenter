-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2023 at 12:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_portfolio`
--

DROP TABLE IF EXISTS `artist_portfolio`;
CREATE TABLE IF NOT EXISTS `artist_portfolio` (
  `pid` int(30) NOT NULL AUTO_INCREMENT,
  `aid` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_portfolio`
--

INSERT INTO `artist_portfolio` (`pid`, `aid`, `image`, `video`) VALUES
(9, '15', 'Artist_Portfolio/barathanatyam.jpg', 'Artist_Portfolio/Bebe rexa - I got you .mp4'),
(10, '16', 'Artist_Portfolio/2.jpg', 'Artist_Portfolio/Bruno Mars thats what i like.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `artist_registration`
--

DROP TABLE IF EXISTS `artist_registration`;
CREATE TABLE IF NOT EXISTS `artist_registration` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_registration`
--

INSERT INTO `artist_registration` (`aid`, `name`, `gender`, `category`, `district`, `location`, `phone`, `email`) VALUES
(16, 'HaleemKhan', '', 'Kuchupudi  ', 'madras', 'madars', '7744112255', 'Haleem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `bid` int(30) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `bookig_date` date DEFAULT NULL,
  `booking_description` varchar(300) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `uid`, `aid`, `bookig_date`, `booking_description`, `booking_status`) VALUES
(8, 13, 15, '0000-00-00', 'today', 'approved'),
(9, 13, 15, '0000-00-00', 'new', 'pending'),
(10, 15, 15, '0000-00-00', 'agagin', 'pending'),
(11, 13, 15, '0000-00-00', 'ferftegt', 'pending'),
(12, 13, 15, '0000-00-00', 'efderf', 'pending'),
(13, 15, 15, '0000-00-00', 'kjki', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category`, `description`) VALUES
(4, 'bharatanatyam', 'bharatanatyam Details'),
(5, 'chakyarkoothu', 'chakyarkoothu details'),
(6, 'Kuchupudi ', 'Kuchupudi  Details');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `uid`, `username`, `password`, `type`, `status`) VALUES
(1, 0, 'admin@gmail.com', 'admin', 'admin', '1'),
(37, 13, 'karthik@gmail.com', '123', 'user', '1'),
(38, 15, 'padma@gmail.com', '123', 'artist', '1'),
(39, 16, 'Haleem@gmail.com', '123', 'artist', '1'),
(40, 7, 'marinamall@gmail.com', '123', 'venue', '1'),
(41, 8, 'karuppanmemo@gmail.com', '123', 'venue', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(30) NOT NULL,
  `aid` int(30) NOT NULL,
  `bid` int(30) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `amount` int(150) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `uid`, `aid`, `bid`, `account_no`, `amount`, `date`) VALUES
(5, 13, 15, 11, '1111', 500, '2001-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `aid`, `uid`, `details`, `rating`) VALUES
(3, 15, 13, 'freg', '2'),
(4, 15, 13, 'errferg', '3'),
(5, 16, 13, 'rfrfe4fertrf', '4'),
(6, 16, 13, 'jhkh', 'â­â­â­â­'),
(7, 7, 13, 'nice hall', 'â­â­â­â­'),
(8, 7, 13, 'hhjhhjb', 'â­â­â­â­'),
(9, 7, 13, 'ghggg', 'â­â­â­â­'),
(10, 7, 13, 'jjjjj', 'â­â­â­â­'),
(11, 16, 13, 'lll', 'â­â­â­â­');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `name`, `gender`, `address`, `phone`, `email`, `password`) VALUES
(13, 'karthik', 'male', 'kolath (h) ,palluruthy', '9685321475', 'karthik@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `venue_bookings`
--

DROP TABLE IF EXISTS `venue_bookings`;
CREATE TABLE IF NOT EXISTS `venue_bookings` (
  `vbid` int(30) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `bookig_date` date DEFAULT NULL,
  `booking_description` varchar(300) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`vbid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_bookings`
--

INSERT INTO `venue_bookings` (`vbid`, `uid`, `vid`, `bookig_date`, `booking_description`, `booking_status`) VALUES
(11, 13, 7, '0000-00-00', 'now\r\n', 'pending'),
(10, 13, 8, '0000-00-00', 'tommorow', 'approved'),
(12, 13, 8, '0000-00-00', 'freg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `venue_registration`
--

DROP TABLE IF EXISTS `venue_registration`;
CREATE TABLE IF NOT EXISTS `venue_registration` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT 'noval',
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_registration`
--

INSERT INTO `venue_registration` (`vid`, `venue_name`, `name`, `address`, `district`, `phone`, `email`, `password`, `image`) VALUES
(7, 'marinaMall', 'OMR', 'omr nedughad ,maveelikkara', 'Ernakulam', '1144778855', 'marinamall@gmail.com', '123', 'Venue_Photo/marina.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vreview`
--

DROP TABLE IF EXISTS `vreview`;
CREATE TABLE IF NOT EXISTS `vreview` (
  `vrid` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`vrid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vreview`
--

INSERT INTO `vreview` (`vrid`, `vid`, `uid`, `details`, `rating`) VALUES
(1, 7, 13, 'bhmb', 'â­â­â­â­'),
(2, 7, 13, 'aaaa', 'â­â­â­');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
