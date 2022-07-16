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
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'password'),
(2, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `ID` int(20) NOT NULL,
  `Comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`ID`, `Comment`) VALUES
(0, 'IIII'),
(0, 'IIII'),
(0, 'IIII'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed'),
(0, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `reg_details`
--

CREATE TABLE `reg_details` (
  `ID` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Passwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_details`
--

INSERT INTO `reg_details` (`ID`, `Fname`, `Email`, `Passwd`) VALUES
(6588, 'Samuel Hughes', 'samhughes98@hotmail.co.uk', ''),
(5388, 'steve', 'steve@job.com', 'hello'),
(1873, 'tam', 'hello@goodbye.com', 'hello'),
(4162, 'tam', 'hello@goodbye.com', 'hello'),
(6109, 'tam', 'hello@goodbye.com', 'hello'),
(1808, 'Samuel David Hughes', 'hey@hey.com', 'hey'),
(6089, 'Samuel David Hughes', 'hey@hey.com', 'hey'),
(4262, 'Samuel David Hughes', 'hey@hey.com', ''),
(3255, 'ha', 'h@h.com', 'h'),
(1025, 'Samuel David Hughes', 'samhughes98@hotmail.co.uk', 'a'),
(6746, 'sefsef', 'sefsef@hom.com', 'a'),
(8615, 'aaaa', 'a@a.com', 'a'),
(4411, 'ssss', 's@s.com', 's'),
(6878, 'sss', 'sss@sss.com', 's'),
(8224, 'q', 'q@q.com', 'q'),
(5297, 'w', 'w@w.com', 'w'),
(3170, 'Sammy Hug', 'samhughes@gmil.com', 's'),
(9421, 'z', 'z@z.com', 'z'),
(7582, 'd', 'd@d.com', 'd'),
(6140, 'm', 'm@m.com', 'm'),
(6243, 'steve steve', 'steve@steve.com', 's'),
(4340, 'Adrian hughes', 'ade@gmail.com', 'hello'),
(6688, 'Josh', 'b@b.com', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `ID` int(10) NOT NULL,
  `Comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`ID`, `Comment`) VALUES
(2, 'IIII'),
(1, 'IIII'),
(1, 'IIII'),
(1, 'IIII'),
(1, 'IIII'),
(0, 'IIII'),
(1, 'IIII'),
(1, 'IIII'),
(1, 'To Delete'),
(1, 'To Delete'),
(1, 'To Delete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
