-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 11:15 AM
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
  `conf_pass` varchar(15) DEFAULT NULL,
  `choice` int(6) DEFAULT NULL,
  `c_ans` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_info`
--

INSERT INTO `guest_info` (`NID`, `first_name`, `last_name`, `email`, `phn_number`, `pass`, `conf_pass`, `choice`, `c_ans`) VALUES
('123', 'Micro', 'Bots', 'microbots@email.com', '01777076628', 'st47YEBwYQMDM', 'st47YEBwYQMDM', 2, 'sweden'),
('124', 'm', 'Rahman', 'm_rahman@email.com', '01711703098', 'stETX4M7te3.g', 'stETX4M7te3.g', 1, 'rck');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `guest_id` int(10) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `num_of_day` int(11) DEFAULT NULL,
  `room_mrp` int(15) DEFAULT NULL,
  `Amount` int(15) DEFAULT NULL,
  `Status` int(15) DEFAULT NULL,
  `rsv_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `guest_id`, `nroom`, `num_of_day`, `room_mrp`, `Amount`, `Status`, `rsv_id`) VALUES
(32, 123, 2, 2, 11000, 22000, 2, NULL),
(33, 124, 5, 3, 5000, 15000, 1, NULL),
(34, 123, 9, 1, 2500, 2500, 2, NULL),
(35, 124, 1, 1, 10000, 10000, 1, NULL),
(36, 124, 6, 1, 6000, 6000, 1, NULL),
(37, 124, 4, 1, 12000, 12000, 2, NULL),
(38, 124, 3, 2, 11500, 23000, 1, NULL),
(39, 123, 9, 1, 2500, 2500, 2, NULL),
(40, 124, 1, 2, 10000, 20000, 1, NULL),
(41, 123, 9, 2, 2500, 5000, 1, NULL),
(42, 123, 9, 2, 2500, 5000, 1, NULL),
(43, 123, 9, 2, 2500, 5000, 1, NULL),
(44, 125, 9, 2, 2500, 5000, 1, NULL),
(45, 125, 12, 3, 4500, 13500, 1, NULL),
(46, 124, 9, 3, 2500, 7500, 1, NULL),
(47, 124, 8, 2, 7000, 14000, 1, NULL),
(48, 123, 5, 2, 5000, 10000, 1, NULL),
(49, 123, 1, 2, 10000, 20000, 2, 0),
(50, 123, 9, 2, 2500, 5000, 1, 18),
(53, 123, 3, 1, 11500, 11500, 1, NULL),
(54, 123, 1, 2, 0, 0, 1, 40),
(55, 123, 1, 3, 10000, 30000, 1, 41);

-- --------------------------------------------------------

--
-- Table structure for table `pay_status`
--

CREATE TABLE `pay_status` (
  `id` int(1) NOT NULL,
  `p_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_status`
--

INSERT INTO `pay_status` (`id`, `p_status`) VALUES
(1, 'Done'),
(2, 'Not Done');

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
  `Room` varchar(15) DEFAULT NULL,
  `bedding` varchar(15) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `adult` int(10) DEFAULT NULL,
  `children` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `guest_id`, `Room`, `bedding`, `rdate`, `cin`, `cout`, `adult`, `children`) VALUES
(16, 123, 'Luxury Room', 'Double', '2020-10-03', '2020-10-03', '2020-10-04', 2, 1),
(17, 124, 'Deluxe Room', 'Single', '2020-10-01', '2020-10-02', '2020-10-05', 2, 1),
(18, 123, 'Single Room', 'Single', '2020-10-08', '2020-10-09', '2020-10-10', 2, 1),
(19, 124, 'Luxury Room', 'Single', '2020-10-08', '2020-10-09', '2020-10-10', 2, 1),
(20, 123, 'Luxury Room', 'Single', '2020-10-10', '2020-10-11', '2020-10-13', 2, 1),
(21, 123, 'Deluxe Room', 'Double', '2020-10-15', '2020-10-16', '2020-10-17', 2, 1),
(22, 124, 'Deluxe Room', 'Double', '2020-10-15', '2020-10-16', '2020-10-17', 2, 1),
(23, 124, 'Luxury Room', 'Quad', '2020-10-16', '2020-10-17', '2020-10-18', 2, 1),
(24, 124, 'Luxury Room', 'Triple', '2020-10-16', '2020-10-17', '2020-10-19', 2, 1),
(25, 123, 'Single Room', 'Single', '2020-10-24', '2020-10-25', '2020-10-26', 2, 1),
(26, 124, 'Luxury Room', 'Single', '2020-10-16', '2020-10-17', '2020-10-19', 2, 1),
(27, 123, 'Single Room', 'Single', NULL, '2020-10-03', '2020-10-05', 2, 1),
(28, 123, 'Single Room', 'Single', NULL, '2020-10-04', '2020-10-06', 2, 1),
(29, 123, 'Single Room', 'Single', NULL, '2020-10-04', '2020-10-06', 2, 1),
(30, 125, 'Single Room', 'Single', NULL, '2020-10-03', '2020-10-05', 2, 1),
(31, 125, 'Single Room', 'Quad', NULL, '2020-10-03', '2020-10-06', 2, 0),
(32, 124, 'Single Room', 'Single', NULL, '2020-10-09', '2020-10-12', 2, 1),
(33, 124, 'Deluxe Room', 'Quad', NULL, '2020-10-07', '2020-10-09', 2, 1),
(34, 123, 'Deluxe Room', 'Single', NULL, '2020-10-07', '2020-10-09', 2, 1),
(35, 123, 'Luxury Room', 'Single', '2020-10-07', '2020-10-08', '2020-10-10', 2, 0),
(36, 123, 'Single Room', 'Single', '2020-10-08', '2020-10-09', '2020-10-11', 2, 1),
(39, 123, 'Luxury Room', 'Triple', NULL, '2020-10-07', '2020-10-08', 2, 1),
(40, 123, 'Luxury Room', 'Single', NULL, '2020-10-10', '2020-10-12', 2, 1),
(41, 123, 'Luxury Room', 'Single', NULL, '2020-10-16', '2020-10-19', 2, 1);

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
(102, 3, 123),
(103, 5, NULL),
(104, 8, NULL),
(105, 1, 123);

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
('186', 'hin18@email.com', 'stncP43Inm', 'stncP43Inm', 'Md.Asif', 'Rahman'),
('187', 'dt@email.com', 'st/jvJ03mc', 'st/jvJ03mc', 'Doc', 'Ton');

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
-- Indexes for table `pay_status`
--
ALTER TABLE `pay_status`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
