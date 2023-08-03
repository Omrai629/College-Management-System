-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 04:21 PM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(3) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tname`, `email`, `phone`, `gender`, `address`) VALUES
(30, 'teacher1', 'admin@google.com', 9850967654, 'male', 'Mumbai'),
(31, 'Test1', 'darkmaiden@octopus.p', 8600813745, 'female', 'Chennai'),
(49, 'Teacher11', 'tt@gmail.com', 9850000654, 'male', 'pune'),
(81, 'Teacher11', 'tt@gmail.com', 9850000654, 'male', 'pune'),
(82, 'Rahul', 'rahul@gmail.com', 8600811281, 'male', 'mumbai'),
(83, 'Priya', 'p@gmail.com', 8600813334, 'female', 'bangalore'),
(84, 'Ashma', 'ashma@gmail.com', 8600811281, 'female', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `phone`, `address`, `image`) VALUES
(8, 'omrai629', 'om.rai@mitaoe.ac.in', 'abcd', 'male', 8600813744, 'Mumbai', '1690369768_c227b65674bb609432eb.jpg'),
(10, 'omrai628', 'omrai629@gmail.com', 'abcd', 'male', 9850967654, 'Pune', '1689938903_dfe993b8b23c2e2f697e.jpg'),
(11, 'Iker Casillas', 'bb@gmail.com', 'abcd', 'male', 9850000654, 'Pune', '1689838904_b121f791fb665e722ef3.jpg'),
(12, 'abc', 'a@gmail.com', 'abcd', 'male', 9850000654, 'Pune', '1690368940_0e0fc8d81f7cf61783c2.jpg'),
(13, 'ab', 'om@gmail.com', 'abcd', 'male', 9850000654, 'Pune', '1690370190_1c6c7fdab1d16ebe57c7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
