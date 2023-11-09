-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 05:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `Ord_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Preference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_orders`
--

INSERT INTO `all_orders` (`Ord_id`, `id`, `Product_name`, `Price`, `Date`, `Preference`) VALUES
(1, 8, 'Multi-Para-Patient-Monitor', 50000, '2023-02-02 02:33:08', 'BuyingPrice'),
(2, 4, 'Multi-Para-Patient-Monitor', 13500, '2023-02-02 07:12:28', '3MonthRent'),
(3, 4, 'Multi-Para-Patient-Monitor', 50000, '2023-02-02 07:12:28', 'BuyingPrice');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Ord_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Preference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Ord_id`, `id`, `Product_name`, `Price`, `Preference`) VALUES
(30, 4, 'Multi-Para-Patient-Monitor', 50000, 'BuyingPrice');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(10) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Product_Producers` varchar(255) NOT NULL,
  `1MonthRent` int(10) NOT NULL,
  `2MonthRent` int(10) NOT NULL,
  `3MonthRent` int(10) NOT NULL,
  `BuyingPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Product_Producers`, `1MonthRent`, `2MonthRent`, `3MonthRent`, `BuyingPrice`) VALUES
(1000, 'Oxygen Concentrator', 'Seasky Medical', 5000, 9500, 14000, 90000),
(1001, 'Multi-Para-Patient-Monitor', 'Johnson & Johnson MedTech', 5000, 9000, 13500, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_Number` int(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Firstname`, `Lastname`, `Email`, `Mobile_Number`, `Password`) VALUES
(4, 'gaurav', '', 'gaurav@123', 2342342, '123'),
(5, 'akash', 'roshan', 'akash@1122', 12423423, '1234'),
(6, 'dhanush', 'bb', 'dhanush@123', 98765432, '12345'),
(7, 'shilpa', 'reddy', 'shilpa@123', 2147483647, '123'),
(8, 'Sneha', 'Singh', 'sneha@gmail.com', 2147483647, 'Sneha@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD PRIMARY KEY (`Ord_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Ord_id`),
  ADD KEY `cart_ibfk_1` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_orders`
--
ALTER TABLE `all_orders`
  MODIFY `Ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
