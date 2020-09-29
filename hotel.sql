-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 07:09 PM
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
('124', 'm', 'Rahman', 'm_rahman@email.com', '01711703098', 'stETX4M7te3.g', 'stETX4M7te3.g');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `guest_id` int(10) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `payment_day` date DEFAULT NULL,
  `room_mrp` int(15) DEFAULT NULL,
  `Amount` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `guest_id`, `nroom`, `payment_day`, `room_mrp`, `Amount`) VALUES
(28, 123, 2, '2020-09-29', NULL, 24000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `price` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `price`) VALUES
(1, 'Luxury Room', 'Single', 10000),
(2, 'Luxury Room', 'Double', 11000),
(3, 'Luxury Room', 'Triple', 11500),
(4, 'Luxury Room', 'Quad', 12000),
(5, 'Deluxe Room', 'Single', 5000),
(6, 'Deluxe Room', 'Double', 6000),
(7, 'Deluxe Room', 'Triple', 6500),
(8, 'Deluxe Room', 'Quad', 7000),
(9, 'Single Room', 'Single', 2500),
(10, 'Single Room', 'Double', 3500),
(11, 'Single Room', 'Triple', 4000),
(12, 'Single Room', 'Quad', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `guest_id` int(10) NOT NULL,
  `rdate` date DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `adult` int(10) DEFAULT NULL,
  `children` int(10) DEFAULT NULL,
  `room_type_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `guest_id`, `rdate`, `cin`, `cout`, `adult`, `children`, `room_type_id`) VALUES
(4, 123, '2020-09-29', '2020-09-30', '2020-10-01', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_num`
--

CREATE TABLE `room_num` (
  `id` int(6) NOT NULL,
  `t_id` int(10) NOT NULL,
  `cusid` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_num`
--

INSERT INTO `room_num` (`id`, `t_id`, `cusid`) VALUES
(101, 4, 123),
(102, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE `room_status` (
  `id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_info`
--
ALTER TABLE `guest_info`
  ADD PRIMARY KEY (`NID`),
  ADD UNIQUE KEY `phn_number` (`phn_number`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_num`
--
ALTER TABLE `room_num`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
