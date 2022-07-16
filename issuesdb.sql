-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `issuesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue_records`
--

CREATE TABLE `issue_records` (
  `ID` int(10) NOT NULL,
  `poster` varchar(40) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `issue_desc` varchar(900) NOT NULL,
  `Priority` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_records`
--

INSERT INTO `issue_records` (`ID`, `poster`, `Title`, `issue_desc`, `Priority`) VALUES
(1, 'Sam', 'Yes', 'Yes', 'High'),
(2, 'dddd', 'ddd', 'dddd', 'Low'),
(3, 'Sam', 'sssss', 'ssssss', 'Low'),
(4, 'Sam', 'Big deal', 'Ywjosiejfsjf', 'Urgent'),
(5, 'Sam', 'etcetc', 'trhrh', 'Medium'),
(6, 'Sam', 'test', 'ffffff', 'Urgent'),
(7, 'dwadawd', 'awdawd', 'wadadawdawdawdadwadadadawdawdadawdadwadadadwawdawdawdawwd', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue_records`
--
ALTER TABLE `issue_records`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_records`
--
ALTER TABLE `issue_records`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
