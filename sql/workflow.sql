-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 03:56 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE `application_type` (
  `app_id` int(11) NOT NULL,
  `app_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_type`
--

INSERT INTO `application_type` (`app_id`, `app_type`) VALUES
(1, 'app_type_1'),
(2, 'app_type_2'),
(3, 'app_type_3'),
(4, 'app_type_4'),
(5, 'app_type_5'),
(1, 'app_type_1'),
(2, 'app_type_2'),
(3, 'app_type_3'),
(4, 'app_type_4'),
(5, 'app_type_5');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `areas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch_top`
--

CREATE TABLE `branch_top` (
  `branch_id` int(11) NOT NULL,
  `rait_index` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `range`
--

CREATE TABLE `range` (
  `range_id` int(11) NOT NULL,
  `range_name` varchar(200) NOT NULL,
  `regions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `regions_id` int(11) NOT NULL,
  `regions_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`regions_id`, `regions_name`) VALUES
(1, 'East'),
(2, 'West'),
(3, 'South'),
(4, 'North'),
(5, 'ATB'),
(6, 'WOG'),
(7, 'Silpo'),
(5, 'ATB'),
(6, 'WOG'),
(7, 'Silpo');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'New'),
(2, 'Inwork'),
(3, 'Rework'),
(4, 'Rejected'),
(5, 'Complite'),
(1, 'New'),
(2, 'Inwork'),
(3, 'Rework'),
(4, 'Rejected'),
(5, 'Complite');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `function` int(11) NOT NULL,
  `login` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `reg_date`, `lastname`, `firstname`, `middlename`, `email`, `password`, `role_id`, `function`, `login`) VALUES
(1, '2017-05-31 06:41:22', 'Slavko', 'Alex', 'Victorovich', 'slavko.alexandr@gmail.com', '1', 1, 0, '1'),
(2, '2017-05-31 06:41:22', 'Ivanov', 'Ivan', 'Ivanovich', 'i.ivanov@gmail.com', '111', 2, 0, '2'),
(3, '2017-05-31 06:41:22', 'Ivanov', 'Ivan', 'Ivanovich', 'i.ivanov@gmail.com', '111', 2, 0, '2'),
(16, '2017-05-31 06:42:17', 'Ivanivich', 'Nikolay', 'Alrxeev', 'nirol@gmail.com', '55', 2, 2, 'nik_alx'),
(30, '2017-05-31 13:13:32', 'Slacko', 'Nikolay', 'Vvvv', 'slacko.s@gmail.com', '33', 2, 3, 'alex12'),
(39, '2017-05-31 15:20:13', 'Slavko', 'Nikolay', 'Alrxeev', 'slavko.alexandr@gmail.com', '22', 3, 4, 'nik_alx'),
(40, '2017-05-31 15:33:39', 'Slavko', 'Nikolay', 'Alrxeev', 'slavko.alexandr@gmail.com', '22', 3, 4, 'nik_alx'),
(41, '2017-05-31 15:46:30', 'Slacko', 'Nikolay', 'Vict', 'slavko.alexandr@gmail.com', '556', 3, 3, 'nik_alx556');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
