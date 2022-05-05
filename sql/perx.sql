-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 01:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perx`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `featureId` int(11) NOT NULL,
  `planId` int(3) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`featureId`, `planId`, `feature`, `description`, `status`) VALUES
(1, 1, 'Limited Storage', '', 1),
(2, 1, 'Limited Request', '', 1),
(3, 2, '10gb of storage', '', 1),
(4, 2, 'Admin Dasboard', '', 1),
(5, 3, '50gb of Cloud Storage', '', 1),
(7, 3, 'Multi-function Dashboard', '', 1),
(8, 4, 'Unlimited Cloud Storage', 'Maximum of 100gb per day*', 1),
(9, 4, 'All access admin panel', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `subscription` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan`, `description`, `amount`, `subscription`, `status`) VALUES
(1, 'Free', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '0', '1', 1),
(2, 'Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '10', '1', 1),
(3, 'Business', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '20', '1', 1),
(4, 'Enterprice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '30', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`featureId`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `featureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
