-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_cat`
--

CREATE TABLE `user_cat` (
  `sno` int(11) NOT NULL,
  `WebDev` tinyint(1) NOT NULL,
  `DataDev` tinyint(1) NOT NULL,
  `GameDev` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cat`
--

INSERT INTO `user_cat` (`sno`, `WebDev`, `DataDev`, `GameDev`) VALUES
(20, 1, 1, 1),
(21, 0, 0, 0),
(22, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`sno`, `name`, `username`, `email`, `password`, `timestamp`) VALUES
(20, 'admin01', 'admin01', 'admin01@gmail.com', '$2y$10$MixRP/tc6oVgj4zCzpPhm.WoYhvNctI5gIHsDsFuSmdqi6q5T/tea', '2024-04-09 15:40:38'),
(21, 'user03', 'user03', 'user03@gmail.com', '$2y$10$rsZZxadaaj5mqSwtF3IuXOQum8K848Qd3jhxXBBsnvmqJoc/pO/Sa', '2024-04-09 16:00:12'),
(22, 'user04', 'user04', 'user04@gmail.com', '$2y$10$lUOWbE4.4Lm1pvu.sqkYhu9Qqpw/KPV5u893kn.2rGbkLq/W6V9RK', '2024-04-09 16:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_img`
--

CREATE TABLE `user_img` (
  `sno` int(11) NOT NULL,
  `folder_path` text NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_img`
--

INSERT INTO `user_img` (`sno`, `folder_path`, `country`) VALUES
(20, '../img/users/20.jpg', 'Hong Kong'),
(21, '../img/users/21.jpg', 'Bahamas'),
(22, '../img/users/22.jpg', 'Bahrain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_cat`
--
ALTER TABLE `user_cat`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_img`
--
ALTER TABLE `user_img`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
