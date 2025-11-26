-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 07:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

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

CREATE TABLE `artist_portfolio` (
  `pid` int(30) NOT NULL,
  `aid` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `artist_registration` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_registration`
--

INSERT INTO `artist_registration` (`aid`, `name`, `gender`, `category`, `district`, `location`, `phone`, `email`) VALUES
(15, 'PadmaSubrahmanyam', 'female', 'bharatanatyam ', 'coyamputhur', 'coyamputhur', '1155223366', 'padma@gmail.com'),
(16, 'HaleemKhan', '', 'Kuchupudi  ', 'madras', 'madars', '7744112255', 'Haleem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(30) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `bookig_date` date DEFAULT NULL,
  `booking_description` varchar(300) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `login` (
  `logid` int(11) NOT NULL,
  `uid` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `uid` int(30) NOT NULL,
  `aid` int(30) NOT NULL,
  `bid` int(30) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `amount` int(150) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `uid`, `aid`, `bid`, `account_no`, `amount`, `date`) VALUES
(5, 13, 15, 11, '1111', 500, '2001-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `aid`, `uid`, `details`, `rating`) VALUES
(3, 15, 13, 'freg', '2'),
(4, 15, 13, 'errferg', '3'),
(5, 16, 13, 'rfrfe4fertrf', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `name`, `gender`, `address`, `phone`, `email`, `password`) VALUES
(13, 'karthik', 'male', 'kolath (h) ,palluruthy', '1155993322', 'karthik@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `venue_bookings`
--

CREATE TABLE `venue_bookings` (
  `vbid` int(30) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `bookig_date` date DEFAULT NULL,
  `booking_description` varchar(300) DEFAULT NULL,
  `booking_status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `venue_registration` (
  `vid` int(11) NOT NULL,
  `venue_name` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT 'noval'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_registration`
--

INSERT INTO `venue_registration` (`vid`, `venue_name`, `name`, `address`, `district`, `phone`, `email`, `password`, `image`) VALUES
(7, 'marinaMall', 'OMR', 'omr nedughad ,maveelikkara', 'Ernakulam', '1144778855', 'marinamall@gmail.com', '123', 'Venue_Photo/marina.jpg'),
(8, 'karuppanMemorialHall', 'Hussain', 'marian drive ,palluruthy', 'Ernakulam', '5522336699', 'karuppanmemo@gmail.com', '123', 'Venue_Photo/panditHall.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist_portfolio`
--
ALTER TABLE `artist_portfolio`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `artist_registration`
--
ALTER TABLE `artist_registration`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `venue_bookings`
--
ALTER TABLE `venue_bookings`
  ADD PRIMARY KEY (`vbid`);

--
-- Indexes for table `venue_registration`
--
ALTER TABLE `venue_registration`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist_portfolio`
--
ALTER TABLE `artist_portfolio`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artist_registration`
--
ALTER TABLE `artist_registration`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `venue_bookings`
--
ALTER TABLE `venue_bookings`
  MODIFY `vbid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `venue_registration`
--
ALTER TABLE `venue_registration`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
