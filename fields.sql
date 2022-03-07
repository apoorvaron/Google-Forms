-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2022 at 02:21 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acmbackend`
--

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `formID` text NOT NULL,
  `formName` varchar(255) NOT NULL,
  `fieldName` varchar(255) NOT NULL,
  `fieldType` varchar(255) NOT NULL,
  `ifCheckbox` text NOT NULL,
  `ifRadio` text NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `formID`, `formName`, `fieldName`, `fieldType`, `ifCheckbox`, `ifRadio`, `required`) VALUES
(1, 'd59373eb', 'fffff', 'f1', 'checkbox', 'c1,c2,c3', '', 1),
(2, 'd59373eb', 'fffff', 'f2', 'checkbox', 'c4,c5,c6', '', 0),
(3, 'd59373eb', 'fffff', 'f3', 'shortAns', '', '', 1),
(4, 'd59373eb', 'fffff', 'f4', 'shortAns', '', '', 0),
(5, 'd59373eb', 'fffff', 'f5', 'paraAns', '', '', 1),
(6, 'd59373eb', 'fffff', 'f6', 'paraAns', '', '', 0),
(7, 'd59373eb', 'fffff', 'f7', 'radioAns', '', 'r1,r2,r3', 1),
(8, 'd59373eb', 'fffff', 'f8', 'radioAns', '', 'r4,r5,r6', 0),
(9, 'd59373eb', 'fffff', 'f9', 'fileAns', '', '', 1),
(10, 'd59373eb', 'fffff', 'f10', 'fileAns', '', '', 0),
(13, '43192f86', 'werfghb', 'wasdf', 'shortAns', '', '', 1),
(14, '43192f86', 'werfghb', 'werdfgg', 'shortAns', '', '', 0),
(15, 'c465efbe', 'asdfgh', 'a', 'shortAns', '', '', 1),
(16, 'f9f270a9', 'sadsfdg', 'dsfdgf', 'noVal', '', '', 1),
(17, 'df17d23b', 'dsfg', 'wqerdtfg', 'shortAns', '', '', 0),
(18, 'df17d23b', 'dsfg', 'wredtryguhj', 'paraAns', '', '', 1),
(19, '01cdd04a', 'ewrefdg', 'wqewsfd', 'shortAns', '', '', 1),
(20, 'f0d99e5c', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(21, '7dbe28d9', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(22, '727ddb9a', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(23, '071e0421', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(24, '7e7499cc', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(25, '3fbdf940', 'dwfedgf', 'ew', 'paraAns', '', '', 1),
(26, 'a45b5787', 'dsfdgfg', 'aaa', 'shortAns', '', '', 1),
(27, '2442df8b', 'qqqwqwqw', 'asdfghj', 'shortAns', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
