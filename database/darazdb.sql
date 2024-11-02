-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 05:57 AM
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
-- Database: `darazdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`) VALUES
(1, 'Moringa Capsules 90 in Bottle - Organic Moringa Pills Capsules , Weight Loose ,مورنگا کیپسول', 'Lorem ipsum dolor sit amet consectetur! Lorem ipsum dolor sit amet consectetur! Lorem ipsum dolor sit amet consectetur! Lorem ipsum dolor sit amet consectetur! Lorem ipsum dolor sit amet consectetur! Lorem ipsum dolor sit amet consectetur! ', 'product-images/moringa-capsules-90.png', 799.99),
(3, 'Blutooth Handfree Wireless Bluetooth Headset Good Quality Bluetooth \r\n', 'Blutooth Handfree Wireless Bluetooth Headset Good Quality Bluetooth \r\nBlutooth Handfree Wireless Bluetooth Headset Good Quality Bluetooth \r\n', 'product-images/bluetooth-handfree-wireless.png', 799.99);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `verificationCode` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `exclusiveOffers` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `phoneNumber`, `verificationCode`, `password`, `fullName`, `birthday`, `gender`, `exclusiveOffers`) VALUES
(5, '12345', '12', '12345', 'User1', '2000-04-12', 'male', 1),
(6, '12345678', '1234', 'admin', 'admin', '2003-09-04', 'male', 1),
(7, '11111111', '1234', 'admin2', 'admin2', '2016-11-16', 'male', 1),
(8, '4545645', '3525', '1234', 'root', '2013-12-17', 'male', NULL),
(9, '123456', '125', '1234', 'root', '2023-12-07', 'male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
