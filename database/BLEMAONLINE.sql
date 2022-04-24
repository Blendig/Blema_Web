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
-- Database: `BLEMAONLINE`
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
(80, 'BlendiGashi', 'INSERTED', NULL, 'Headphones', '2022-04-23 07:25'),
(81, 'BlendiGashi', 'DELETED', NULL, 'Headphones', '2022-04-23 07:27'),
(85, 'BlendiGashi', 'INSERTED', NULL, 'Glassesbox', '2022-04-23 07:54'),
(86, 'BlendiGashi', 'INSERTED', NULL, 'Kulete', '2022-04-23 08:03'),
(87, 'BlendiGashi', 'UPDATED', NULL, 'Kulete', '2022-04-23 08:04');

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
(1, 'Blendi Gashi', 44896489, 'This is a contact us form test', 'blendig@gmail.com'),
(2, 'Ema Kutllovci', 44232433, 'This is also a contact us form test', 'Emak@gmail.com'),
(3, 'Filan Fisteku', 45324121, 'I need your help please!', 'filanf@gmail.com');

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
(1, 'Blendi', 'Gashi', 12345678, '09/27', 537, '10000', 'Prishtina', 10000, 'Blendig@gmail.com', 'Gemini', 'L'),
(2, 'Ema', 'Kutllovci', 12345678, '12/26', 346, '10000', 'Prishtina', 10000, 'Emak@gmail.com', 'Error Hoodie', 'S'),
(3, 'Filan', 'Fisteku', 123456678, '03/24', 232, '10000', 'Prishtina', 10000, 'Filanf@outlook.com', 'Freddie Mercury Socks', 'M');

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
(28, 'phonecase', 'Blema Phone Case', '10'),
(29, 'bag', 'Blema Handbag', '3'),
(30, 'keyholder', 'Blema Key Holder	', '1.99'),
(33, 'bottle', 'Blema Gym Plastic Bottle', '6.99'),
(34, 'stickers', 'Blema Stickers', '2'),
(35, 'lamp', 'Blema Lamp', '10'),
(38, 'Headphones', 'Blema Headphones', '20'),
(39, 'Glassesbox', 'Blema Glasses Box', '8'),
(43, 'Kulete', 'Blema Wallet', '15');

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
(1, 'Blendi', 'Gashi', 'BlendiGashi', 'blendigashi@gmail.com', 'Blendi123', 'admin'),
(2, 'Ema', 'Kutllovci', 'EmaKutllovci', 'emakutllovci@gmail.com', 'Ema123', 'admin'),
(3, 'Alba', 'Pozhegu', 'Alba', 'alba@gmail.com', 'Alba123', 'user');

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
