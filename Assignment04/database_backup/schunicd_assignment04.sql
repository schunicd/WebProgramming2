-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2019 at 09:34 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schunicd_assignment04`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblProducts`
--

CREATE TABLE `tblProducts` (
  `productID` int(3) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `relatedCourse` varchar(100) NOT NULL,
  `productPrice` float(9,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblProducts`
--

INSERT INTO `tblProducts` (`productID`, `productName`, `relatedCourse`, `productPrice`) VALUES
(1, 'HTML For Beginners', 'Web Development', 89.75),
(2, 'Java For Dummies', 'Java', 100.99),
(3, 'Liang Java v10.0', 'Java', 100.00),
(13, 'Culture 101', 'Culture', 89.75),
(10, 'Recruiting, Retaining and Promoting Employees', 'Culture', 60.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `userid` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userid`, `username`, `password`) VALUES
(4, '', '$2y$10$8ZJBwSw4SuM4Ij3lG0ws1eXS7k3zM/LT6HUN/GLMs5GklUy038EDq'),
(2, 'abc', '$2y$10$L3wrekhZj9Kh1AnphGRuv.tW9ilJxGQR6FbErPAxchxvBQr75BMgm'),
(3, 'xyz', '$2y$10$rr1JyhT7IOTZWUZtlhDrIumc6fe6VjFSuQezYhNXMq2RNaNYANnTq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblProducts`
--
ALTER TABLE `tblProducts`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblProducts`
--
ALTER TABLE `tblProducts`
  MODIFY `productID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
