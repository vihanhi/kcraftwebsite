-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 06:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(10) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `productId` int(11) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `Productname`, `image`, `quantity`, `Price`, `productId`, `Phonenumber`) VALUES
(5, 'Handmade Clay Pottery', 'dec2.jpeg', '3', '2500.00', 1, ''),
(7, 'Handmade Clay Pottery', 'wood8.jpeg', '1', '2500.00', 8, ''),
(10, 'Handmade Clay Pottery', 'dec8.jpeg', '1', '5500.00', 2, ''),
(11, 'Handmade Clay Pottery', 'dec7.jpeg', '1', '2500.00', 4, ''),
(12, 'Handmade Clay Pottery', 'wood4.jpeg', '1', '2500.00', 7, ''),
(13, 'Handmade Clay Pottery', 'dec4.jpeg', '1', '2500.00', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oId` int(11) NOT NULL,
  `usersname` varchar(50) NOT NULL,
  `Phonenumber` int(10) DEFAULT NULL,
  `Quantity` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Orderamount` varchar(10) NOT NULL,
  `productId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentId` int(11) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `paymenttype` varchar(20) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `Catagory` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `image` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `Productname`, `Catagory`, `Price`, `image`, `status`, `description`) VALUES
(1, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'dec2.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(2, 'Handmade Clay Pottery', 'Handmade P', '5500.00', 'dec8.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(3, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'dec4.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(4, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'dec7.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(5, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'dec3.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(7, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood4.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(8, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood8.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(9, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood7.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(10, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood5.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(11, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood2.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(12, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'wood1.jpeg', 'Active', 'Natural skincare made with local ingredients.'),
(13, 'Handmade Clay Pottery', 'Handmade P', '2500.00', 'dec5.jpeg', 'Active', 'Natural skincare made with local ingredients.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Fristname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fristname`, `Lastname`, `Phonenumber`, `password`) VALUES
('eee', 'opp', '0123456789', '123'),
('vihangi', 'chandrasekara', '0778246962', '123'),
('eee', 'opp', '1234567890', '555'),
('ww', 'jj', '1234567895', '55'),
('11', 'jj', '1234567897', '423');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `workshopId` int(11) NOT NULL,
  `workshopname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD UNIQUE KEY `productId` (`productId`,`Phonenumber`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`),
  ADD UNIQUE KEY `productId` (`productId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Phonenumber`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshopId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshopId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
