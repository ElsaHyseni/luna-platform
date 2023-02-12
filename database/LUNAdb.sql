-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2022 at 01:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LUNAdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `ID` int(11) NOT NULL,
  `Admin` varchar(50) NOT NULL,
  `Activity` varchar(50) NOT NULL,
  `User` varchar(50) DEFAULT NULL,
  `Product` varchar(50) DEFAULT NULL,
  `Date_Time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`ID`, `Admin`, `Activity`, `User`, `Product`, `Date_Time`) VALUES
(80, 'ElsaHyseni', 'INSERTED', NULL, 'Eggy Holder', '2022-04-23 07:25'),
(81, 'ElsaHyseni', 'DELETED', NULL, 'Eggy Holder', '2022-04-23 07:27'),
(85, 'ElsaHyseni', 'INSERTED', NULL, 'Eggy Holder', '2022-04-23 07:54'),
(86, 'ElsaHyseni', 'INSERTED', NULL, 'Eggy Holder', '2022-04-23 08:03'),
(87, 'ElsaHyseni', 'UPDATED', NULL, 'Eggy Holder', '2022-04-23 08:04');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Message` longtext NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`ID`, `Name`, `Phone`, `Message`, `Email`) VALUES
(1, 'Else Hyseni', 44896489, 'This is a contact us form test', 'elsa@gmail.com'),
(2, 'Stene Osmani', 44232433, 'This is also a contact us form test', 'stina@gmail.com'),
(3, 'Filan Fisteku', 45324121, 'I need your help please!', 'stenef@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paymentForm`
--

CREATE TABLE `paymentForm` (
  `Id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `cardNo` int(30) NOT NULL,
  `validThru` varchar(30) NOT NULL,
  `ccv` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipCode` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `size` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentForm`
--

INSERT INTO `paymentForm` (`Id`, `fName`, `lName`, `cardNo`, `validThru`, `ccv`, `address`, `city`, `zipCode`, `email`, `product`, `size`) VALUES
(1, 'Elsa', 'Hyseni', 12345678, '09/27', 537, '10000', 'Prishtina', 10000, 'elsa@gmail.com', 'Flower Heart Bracelet', '5'),
(2, 'Stina', 'Osmani', 12345678, '12/26', 346, '10000', 'Prishtina', 10000, 'stina@gmail.com', 'Flower Necklace', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductText` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ProductName`, `ProductText`, `Price`) VALUES
(3, 'Flower Heart Bracelet', 'Gold Heart and Flower Bracelet', '15'),
(4, 'Long Heart earrings', 'Heart small chain earrings', '5'),
(5, 'H&F Necklace and Bracelet', 'Heart and Flowers Necklace and Bracelet', '25'),
(6, 'Crescent Moon Necklace', 'White sleeping crescent moon necklace', '6.99'),
(13, 'Flower Necklace', 'White cute flower necklace', '5.59'),
(15, 'Gold Rings', 'Chain Inspired Gold RIngs', '15.99'),
(16, 'H&F Hoop Earrings', 'Heart and flower gold hoop earrings', '13.99'),
(17, 'Silly Clay Mug', 'Polka Dot Silly Clay Mugs', '8.49'),
(18, 'Green in a cup', 'Silly Mug colletion - green mug', '7.59'),
(19, 'Eggy Holder', 'Egg Inspired Clay egg holders', '5.99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Emri`, `Mbiemri`, `Username`, `Email`, `Password`, `Role`) VALUES
(1, 'Elsa', 'Hyseni', 'ElsaHyseni', 'eelsahyseni@gmail.com', 'elsa123', 'admin'),
(2, 'Stine', 'Osmani', 'StineOsmani', 'stinaosmani@gmail.com', 'stina123', 'admin'),
(3, 'Rinor', 'Luzha', 'RinorL', 'rinorluzha7@gmail.com', 'rinor123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paymentForm`
--
ALTER TABLE `paymentForm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;

--
-- AUTO_INCREMENT for table `paymentForm`
--
ALTER TABLE `paymentForm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
