-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 11:04 PM
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
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `body_measurements`
--

CREATE TABLE `body_measurements` (
  `ID` int(10) UNSIGNED NOT NULL,
  `body_weight` int(10) UNSIGNED NOT NULL,
  `fat_percentage` int(10) UNSIGNED NOT NULL,
  `biceps` int(10) UNSIGNED NOT NULL,
  `chest` int(10) UNSIGNED NOT NULL,
  `shoulder` int(10) UNSIGNED NOT NULL,
  `thigh` int(10) UNSIGNED NOT NULL,
  `forearm` int(10) UNSIGNED NOT NULL,
  `waist` int(10) UNSIGNED NOT NULL,
  `hip` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercise_track`
--

CREATE TABLE `exercise_track` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Day` text NOT NULL,
  `Exercise` varchar(100) NOT NULL,
  `Weight` int(10) UNSIGNED NOT NULL,
  `Sets` int(11) UNSIGNED NOT NULL,
  `Reps` int(11) UNSIGNED NOT NULL,
  `Rest` int(11) UNSIGNED NOT NULL,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `exercise_track`
--

INSERT INTO `exercise_track` (`ID`, `Day`, `Exercise`, `Weight`, `Sets`, `Reps`, `Rest`, `Notes`) VALUES
(24, '2023-06-14', 'Squat', 82, 5, 12, 2, 'ww'),
(31, '2023-06-08', '3reeqw', 100, 10, 10, 2, ''),
(37, '2023-06-14', 'bench press', 220, 5, 12, 2, ''),
(38, '2023-06-14', 'bench press', 220, 5, 12, 2, ''),
(39, '2023-06-14', 'Squat', 150, 4, 12, 2, ''),
(40, '2023-06-14', 'squad', 400, 10, 30, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_login_info`
--

CREATE TABLE `users_login_info` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Age` int(10) UNSIGNED NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_login_info`
--

INSERT INTO `users_login_info` (`ID`, `Name`, `Age`, `Email`, `Username`, `Password`) VALUES
(1, 'dilmurod', 19, 'dilmurod111804@gmail.com', 'murmurbek', 'murmurbek'),
(2, '', 0, '', '', ''),
(3, 'dilmurod', 20, 'dilmurod111804@gmail.com', 'murmur', 'murmur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body_measurements`
--
ALTER TABLE `body_measurements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exercise_track`
--
ALTER TABLE `exercise_track`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_login_info`
--
ALTER TABLE `users_login_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body_measurements`
--
ALTER TABLE `body_measurements`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercise_track`
--
ALTER TABLE `exercise_track`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users_login_info`
--
ALTER TABLE `users_login_info`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
