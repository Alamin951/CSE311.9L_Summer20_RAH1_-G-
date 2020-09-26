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
-- Indexes for dumped tables
--

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
