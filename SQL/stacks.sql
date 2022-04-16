-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 01:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `infixtopost`
--

CREATE TABLE `infixtopost` (
  `index` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `infixvalue` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infixtopost`
--

INSERT INTO `infixtopost` (`index`, `user_id`, `infixvalue`, `timestamp`) VALUES
(7, 1, 'A+B', '2022-04-14 21:36:46'),
(8, 1, 'A+B', '2022-04-14 21:41:51'),
(17, 1, 'A+B', '2022-04-15 10:27:37'),
(18, 1, 'A+B', '2022-04-15 10:33:05'),
(19, 1, 'A+B', '2022-04-15 10:36:28'),
(20, 1, 'A+C+B', '2022-04-15 10:36:39'),
(21, 1, 'A+C+B', '2022-04-15 10:38:59'),
(22, 1, 'A+C+B', '2022-04-15 11:01:44'),
(23, 1, 'A+C+B', '2022-04-15 11:03:33'),
(24, 1, 'A+C+B', '2022-04-15 11:23:39'),
(25, 1, 'A+C+B', '2022-04-15 11:30:08'),
(26, 1, 'A+C+B', '2022-04-15 11:31:47'),
(27, 1, 'A+C+B', '2022-04-15 11:37:41'),
(28, 1, 'A+C+B', '2022-04-15 11:39:46'),
(29, 1, 'A+C+B', '2022-04-15 11:42:11'),
(30, 1, 'A+C+B', '2022-04-15 11:45:56'),
(31, 1, 'A+C+B', '2022-04-15 11:49:06'),
(32, 1, 'A+C+B', '2022-04-15 11:50:30'),
(33, 1, 'A+C+B', '2022-04-15 11:52:33'),
(34, 1, 'A+C+B', '2022-04-15 11:53:23'),
(35, 1, 'a+b*c-(d/e+f*g*h)', '2022-04-15 11:54:14'),
(36, 2, 'a+b*c-(d/e+f*g*h)', '2022-04-15 16:35:38'),
(37, 3, 'a+b*c-(d/e+f*g*h)', '2022-04-15 21:08:45'),
(38, 1, 'A+B+C+D', '2022-04-16 16:48:43'),
(39, 1, '(A + B) * (C + D)', '2022-04-16 16:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `infixtopre`
--

CREATE TABLE `infixtopre` (
  `index` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `infixvalue` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infixtopre`
--

INSERT INTO `infixtopre` (`index`, `user_id`, `infixvalue`, `timestamp`) VALUES
(2, 1, 'a+b*c-(d/e+f*g*h)', '2022-04-15 15:32:16'),
(3, 1, 'a+b*c-(d/e+f*g*h)', '2022-04-15 15:33:35'),
(4, 1, 'A+C+B', '2022-04-15 15:37:34'),
(5, 3, 'a+b*c-(d/e+f*g*h)', '2022-04-16 16:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `prefixtopost`
--

CREATE TABLE `prefixtopost` (
  `index` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prefixvalue` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prefixtopost`
--

INSERT INTO `prefixtopost` (`index`, `user_id`, `prefixvalue`, `timestamp`) VALUES
(1, 1, '-+7*45+20', '0000-00-00 00:00:00'),
(2, 1, '-+7*45+20', '2022-04-15 16:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `timestamp`) VALUES
(1, 'karthik sarode', 'karthik.sarode23@gmail.com', '2022-04-05'),
(2, 'Sasikumar', 'sasikumar@gmail.com', '2022-04-15'),
(3, 'narayana', 'narayana@gmail.com', '2022-04-15'),
(4, 'Lakshmi', 'sblakshmisarode@live.com', '2022-04-16'),
(5, 'profess', 'profnewbtube@gmail.com', '2022-04-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infixtopost`
--
ALTER TABLE `infixtopost`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `infixtopre`
--
ALTER TABLE `infixtopre`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `prefixtopost`
--
ALTER TABLE `prefixtopost`
  ADD PRIMARY KEY (`index`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infixtopost`
--
ALTER TABLE `infixtopost`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `infixtopre`
--
ALTER TABLE `infixtopre`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prefixtopost`
--
ALTER TABLE `prefixtopost`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
