-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 05:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_info`
--

CREATE TABLE `guest_info` (
  `NID` varchar(8) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phn_number` varchar(11) NOT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `conf_pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_info`
--

INSERT INTO `guest_info` (`NID`, `first_name`, `last_name`, `email`, `phn_number`, `pass`, `conf_pass`) VALUES
('123', 'Micro', 'Bots', 'microbots@email.com', '01777076628', 'st47YEBwYQMDM', 'st47YEBwYQMDM'),
('124', 'Mic', 'Bots', 'micbots@email.com', '01777076629', 'stETX4M7te3.g', 'stETX4M7te3.g');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` varchar(7) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `conf_pass` varchar(10) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `email`, `pass`, `conf_pass`, `first_name`, `last_name`) VALUES
('182', 'cs@email.com', 'st3X.AckN/', 'st3X.AckN/', 'CS', 'Dojo'),
('183', 'micro@email.com', 'st8SwWggeF', 'st8SwWggeF', 'mic', 'photon'),
('185', 'ms@email.com', 'stKucYvpgX', 'stKucYvpgX', 'ms', 'soft'),
('186', 'hin18@email.com', 'stncP43Inm', 'stncP43Inm', 'Md.Asif', 'Rahman');

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) AUTO_INCREMENT DEFAULT NULL,
  `guest-id` int(10) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `room_mrp` double(8,2) DEFAULT NULL,
  `Amount` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Table structure for table `room`
--

CREATE TABLE `room` (
`id` int(10) unsigned NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Superior Room', 'Quad', 'Free', NULL),
(4, 'Deluxe Room', 'Single', 'Free', NULL),
(6, 'Deluxe Room', 'Double', 'Free', NULL),
(7, 'Deluxe Room', 'Triple', 'Free', NULL),
(8, 'Deluxe Room', 'Quad', 'Free', NULL),
(9, 'Single Room', 'Single', 'Free', NULL),
(10, 'Single Room', 'Double', 'Free', NULL),
(11, 'Single Room', 'Triple', 'Free', NULL),
(12, 'Single Room', 'Quad', 'Free', NULL);

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) AUTO_INCREMENT NOT NULL,
  `guest_id` int(10) NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `adult` int(10) NULL,
  `children` int(10) NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Indexes for table `room_status`
--
CREATE TABLE `room_status` (
  `id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


--
-- Indexes for table `room`
--
ALTER TABLE `room_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`id`);

 --
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_info`
--
ALTER TABLE `guest_info`
  ADD PRIMARY KEY (`NID`),
  ADD UNIQUE KEY `phn_number` (`phn_number`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
