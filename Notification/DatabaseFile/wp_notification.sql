-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 01:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_notification`
--

CREATE TABLE `wp_notification` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_notification`
--

INSERT INTO `wp_notification` (`ID`, `User`, `Title`, `Message`) VALUES
(1, 'Anshu', 'Hello', 'Hi this message is from Admin Side'),
(2, 'AnshuSharma', 'Hello', 'Hi this message is from Admin Side'),
(3, 'Rahul Sharma', 'Hello', 'Hi this message is from Admin Side'),
(4, 'Anshu', 'Hello', 'This is a Comment'),
(5, 'AnshuSharma', 'Hello', 'This is a Comment'),
(6, 'Rahul Sharma', 'Hello', 'This is a Comment'),
(7, 'Anshu', 'Hello', 'This is  message'),
(8, 'AnshuSharma', 'Hello', 'This is  message'),
(9, 'Rahul Sharma', 'Hello', 'This is  message'),
(10, 'Anshu', 'Hello', 'dsfasdf'),
(11, 'AnshuSharma', 'Hello', 'dsfasdf'),
(12, 'Rahul Sharma', 'Hello', 'dsfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_notification`
--
ALTER TABLE `wp_notification`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_notification`
--
ALTER TABLE `wp_notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
