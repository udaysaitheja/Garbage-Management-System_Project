-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 04:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garbagemanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginpageadmin`
--

CREATE TABLE `loginpageadmin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpageadmin`
--

INSERT INTO `loginpageadmin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'uday', 'uday'),
(2, 'sai', 'sai');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `registerdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`id`, `username`, `email`, `phone`, `password`, `profileimage`, `registerdate`) VALUES
(1, 'Uday', 'udaysaitheja29@gmail.com', '7995121842', '$2y$10$HJVzZyTtsSBPD/vhhuBByuU0eKFRMxqfjnsawMGfCVO', 'images/uploads/blog-02.jpg', '2021-06-16 11:28:54'),
(2, 'UdaySai', 'a@gmail.com', '7995121842', '$2y$10$8.XxU8YFXILKw0JNQtbVtONbE/6VXfN/E2ODvrWd3lK', 'images/uploads/product-03.jpg', '2021-06-16 11:30:34'),
(3, 'rani', 'rani@gmail.com', '1234567890', '$2y$10$UzA76TecYzMu/kBlzrUFKO7WcfzX.mItx5jkJz9ybg9', 'images/uploads/product-01.jpg', '2021-06-16 12:17:05'),
(4, 'uday', 'aa@gmail.com', '1234', 'uday', 'images/uploads/product-03.jpg', '2021-06-16 12:24:41'),
(5, 'uday', 'aaa@gmail.com', '1234', '$2y$10$aEvjHu8/irkGej4.R4lnPu5iSHj5YGlCPhFbKK8XM0b', 'images/uploads/blog-01.jpg', '2021-06-16 14:40:20'),
(6, 'uday', 'b@gmail.com', '1234', '$2y$10$LwjvaqGcMgTpldOdLsWYzO6DOgQMoCowIrppFTIjOpO', 'images/uploads/blog-01.jpg', '2021-06-16 15:24:45'),
(7, 'uday', 'uday@gmail.com', '7995121842', '$2y$10$18M2cSDAV5jPLgREecqj9eJ0UjnHYVPdyKPNJ3pxO.V', 'images/uploads/img-2.jpg', '2021-06-17 16:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `requestpickup`
--

CREATE TABLE `requestpickup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `service` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `registerdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestpickup`
--

INSERT INTO `requestpickup` (`id`, `fullname`, `emailaddress`, `service`, `address`, `comments`, `registerdate`) VALUES
(1, 'uday', 'b@gmail.com', 'Residential Waste', '1234', '1234', '2021-06-16 15:37:33'),
(2, 'uday', 'uday@gmail.com', 'Residential Waste', '1234', '1234', '2021-06-17 16:24:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginpageadmin`
--
ALTER TABLE `loginpageadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestpickup`
--
ALTER TABLE `requestpickup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginpageadmin`
--
ALTER TABLE `loginpageadmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requestpickup`
--
ALTER TABLE `requestpickup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
