-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 12:07 AM
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
-- Database: `bata_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `2fa`
--

CREATE TABLE `2fa` (
  `2FA_ID` int(11) NOT NULL,
  `OTP` text NOT NULL,
  `Created_At` text NOT NULL DEFAULT current_timestamp(),
  `Expiry_Time` text NOT NULL DEFAULT (current_timestamp() + interval 3 minute),
  `Status` text NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Product_ID` text NOT NULL,
  `Total_Price` text NOT NULL,
  `Quantity` text NOT NULL,
  `Created_At` date NOT NULL DEFAULT cast(current_timestamp() as date),
  `Status` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `User_ID`, `Product_ID`, `Total_Price`, `Quantity`, `Created_At`, `Status`) VALUES
(1, 2, 'Casual Slip-Ons', '39.99', '1', '2024-07-21', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Quantity` text DEFAULT NULL,
  `Price` double NOT NULL,
  `Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Name`, `Description`, `Quantity`, `Price`, `Image`) VALUES
(1, 'Classic Leather Shoes', 'Elegant and durable leather shoes perfect for formal occasions.', '50', 89.99, '1.jpg'),
(2, 'Running Sneakers', 'Lightweight and comfortable sneakers designed for running and sports activities.', '100', 59.99, '2.jpg'),
(3, 'Casual Slip-Ons', 'Stylish slip-ons that offer both comfort and versatility for everyday wear.', '74', 39.99, '3.jpg'),
(4, 'Ankle Boots', 'Fashionable ankle boots with a modern design, suitable for various outfits.', '30', 99.99, '4.jpg'),
(5, 'Hiking Boots', 'Rugged and sturdy boots designed for hiking and outdoor adventures.', '40', 129.99, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Fullname` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Email_Address` text NOT NULL,
  `Password` text NOT NULL,
  `User_Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Password`, `User_Type`) VALUES
(1, 'Administrator 1', '+254712345678', 'ian.otuoma@strathmore.edu', '25d55ad283aa400af464c76d713c07ad', 'Administrator'),
(2, 'Jane Doe', '0756778999', 'jane@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2fa`
--
ALTER TABLE `2fa`
  ADD PRIMARY KEY (`2FA_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2fa`
--
ALTER TABLE `2fa`
  MODIFY `2FA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
