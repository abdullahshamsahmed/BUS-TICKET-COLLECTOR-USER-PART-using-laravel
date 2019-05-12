-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bustickets`
--

CREATE TABLE `bustickets` (
  `id` int(11) NOT NULL,
  `start` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `availableSeat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bustickets`
--

INSERT INTO `bustickets` (`id`, `start`, `end`, `date`, `time`, `availableSeat`) VALUES
(1, 'Dhaka', 'Faridpur', '2019-04-26', '05:00:00', 'A1,A2,A3,A4,\r\nB1,B2,B3,B4,\r\nC1,C2,C3,C4,\r\nD1,D2,D3,D4'),
(2, 'Faridpur', 'Dhaka', '2019-04-26', '03:00:00', 'A1,A2,A3,A4,\r\nB1,B2,B3,B4,\r\nC1,C2,C3,C4,\r\nD1,D2,D3,D4');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `driverid` int(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `driverid`, `comment`, `username`, `created_at`, `updated_at`) VALUES
(9, 6, 'is not good', 'shams', '2019-05-05 18:00:00', '2019-05-05 18:00:00'),
(11, 4, 'he is a good driver', 'ratul', '2019-05-05 22:04:02', '2019-05-05 22:04:02'),
(12, 4, 'he is honest', 'shams', '2019-05-05 22:21:04', '2019-05-05 22:21:04'),
(13, 6, 'very bad manner', 'shams', '2019-05-05 22:49:39', '2019-05-05 22:49:39'),
(14, 6, 'very good', 'shams', '2019-05-06 00:19:10', '2019-05-06 00:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `confirms`
--

CREATE TABLE `confirms` (
  `id` int(50) NOT NULL,
  `busId` int(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `totalseat` int(50) DEFAULT NULL,
  `seatNo` varchar(50) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `paymethod` varchar(100) DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirms`
--

INSERT INTO `confirms` (`id`, `busId`, `username`, `company`, `totalseat`, `seatNo`, `amount`, `paymethod`, `start`, `end`, `time`, `date`, `created_at`, `updated_at`) VALUES
(36, 2, 'shams', 'South Line', 2, 'B1,B2', 660, 'Bank', 'Faridpur', 'Dhaka', '11:00:00', '2019-04-27', '2019-05-05 22:42:19', '2019-05-05 22:42:19'),
(37, 3, 'shams', 'Golden Line', 2, 'A1,B1', 600, 'Bkash', 'Dhaka', 'Faridpur', '12:00:00', '2019-04-27', '2019-05-06 00:18:34', '2019-05-06 00:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(50) NOT NULL,
  `start` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `departingTime` time DEFAULT NULL,
  `coachNo` varchar(100) DEFAULT NULL,
  `startingCounter` varchar(100) DEFAULT NULL,
  `endCounter` varchar(100) DEFAULT NULL,
  `bookedSeatNo` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `driverid` int(50) DEFAULT NULL,
  `map` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `start`, `end`, `company`, `departingTime`, `coachNo`, `startingCounter`, `endCounter`, `bookedSeatNo`, `date`, `price`, `driverid`, `map`) VALUES
(2, 'Faridpur', 'Dhaka', 'South Line', '11:00:00', 'A-32/90,south', 'Bus stand,faridpur', 'Gabtoli,Dhaka', 'B1,B2', '2019-04-27', 330, 6, NULL),
(3, 'Dhaka', 'Faridpur', 'Golden Line', '12:00:00', 'sdasdsad', 'asdasd', 'asdasdsa', 'A1,B1', '2019-04-27', 300, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lnumber` varchar(50) DEFAULT NULL,
  `cc` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `image`, `name`, `lnumber`, `cc`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(4, '1557084362-1.jpg', 'jhon', '12-3453465656-00', 'big', 'he is an expert driver for 52 seated big bus..', '85%', '2019-05-05 13:26:02', '2019-05-05 13:26:02'),
(6, '1557084423-3.jpg', 'richard', '12-345346556d56-00', 'medium', 'he is an expert driver for 40 seated medium bus..', '30%', '2019-05-05 13:27:03', '2019-05-05 13:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `seatNo` varchar(100) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `busId` int(50) DEFAULT NULL,
  `start` varchar(100) DEFAULT NULL,
  `end` varchar(100) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `username`, `seatNo`, `amount`, `busId`, `start`, `end`, `time`, `date`, `created_at`, `updated_at`) VALUES
(85, 'shams', 'B1,B2', NULL, NULL, 'Faridpur', 'Dhaka', '11:00:00', '2019-04-27', '2019-05-05 22:42:15', '2019-05-05 22:42:15'),
(86, 'shams', 'A1,B1,C1,D1', NULL, NULL, 'Dhaka', 'Faridpur', '12:00:00', '2019-04-27', '2019-05-06 00:18:11', '2019-05-06 00:18:11'),
(87, 'shams', 'A1,B1', NULL, NULL, 'Dhaka', 'Faridpur', '12:00:00', '2019-04-27', '2019-05-06 00:18:19', '2019-05-06 00:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `gender`, `mobile`, `password`, `type`) VALUES
('Ibene Anas', 'anasyarn', 'anasyarn@gmail.com', NULL, '01771385428', '1234', 'admin'),
('Moinuddin Chy', 'moin', 'chymoin@gmail.com', NULL, '01521451411', '1234', 'seller'),
('Abdullah Sahms', 'shams', 'shams@gmail.com', NULL, '01938443331', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` int(50) DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `gender`, `mobile`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Shams Ahmed', 'shams', 'shams@gmail.com', 'male', 1753996917, '1', 'user', '2019-05-03 18:00:00', '2019-05-03 18:00:00'),
(2, 'admin', 'admin', 'admin@gmail.com', 'male', 1231232, 'admin', 'admin', '2019-05-05 18:00:00', '2019-05-05 18:00:00'),
(3, 'riaj ratul', 'ratul', 'ratul@gmail.com', 'male', 1732323232, '2', 'user', '2019-05-05 18:00:00', '2019-05-05 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_image`
--

CREATE TABLE `users_image` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mob_no` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_image`
--

INSERT INTO `users_image` (`id`, `first_name`, `last_name`, `image`, `mob_no`, `user_name`, `password`) VALUES
(1, 'anas', 'shamim', '6.jpg', 5254, 'sghj', '1234'),
(2, 'anas', 'shamim', '1.jpg', 1234, 'anas', '1234'),
(3, 'anas', 'shamim', '3.jpg', 1234, 'anasyarn', '1234'),
(4, 'ba', 'jb', '1.jpg', 51221, '1', '1'),
(5, 'ba', 'jb', '3.jpg', 51221, '2', '2'),
(6, 'ba', 'jb', '3.jpg', 51221, '3', '3'),
(7, 'gjhkjn', 'ctfuvgh', 'anis', 85412, 'anis', '1234'),
(8, 'hbjlkjnlk', 'rdxytcfuvgbh', 'pop', 87854210, 'pop', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bustickets`
--
ALTER TABLE `bustickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirms`
--
ALTER TABLE `confirms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_image`
--
ALTER TABLE `users_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bustickets`
--
ALTER TABLE `bustickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `confirms`
--
ALTER TABLE `confirms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_image`
--
ALTER TABLE `users_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
