-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 05:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(125) NOT NULL,
  `home` varchar(255) NOT NULL,
  `away` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `gamedate` varchar(255) NOT NULL,
  `gametime` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `staffid` varchar(125) NOT NULL,
  `Month` varchar(125) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `home`, `away`, `venue`, `gamedate`, `gametime`, `type`, `category`, `rank`, `staffid`, `Month`, `year`) VALUES
(2, 'MNU', 'ARS', 'Stadium Playing field', '2023-06-30', '16:00', 'Football', '', '', '', '', ''),
(3, 'Manchester United', 'Chelsea', 'Stadium Practice field', '2023-06-16', '09:50', 'Football', '', '', '', '', ''),
(4, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(7, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(8, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(9, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(10, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(11, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(12, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(13, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(14, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(15, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(16, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-02', '00:01', 'Football', 'Male', 'Under 14', '', '', ''),
(17, 'Orogu', 'Tottenham', 'Basketball field', '2023-06-17', '04:49', 'Basketball', 'Male', 'Under 21', '', '', ''),
(18, 'Manchester United', 'Tottenham', 'Stadium Playing field', '2023-06-17', '04:50', 'Football', 'Disabled', 'Senior Team', '', '', ''),
(19, 'Manchester United', 'Tottenham', 'Stadium Practice field', '2023-06-17', '04:54', 'Football', 'Female', 'Under 23', '', '', ''),
(20, 'Manchester United', 'Tottenham', 'Stadium Practice field', '2023-06-17', '04:54', 'Football', 'Female', 'Under 23', '', '', ''),
(21, 'MNU', 'Tottenham', 'Tennis court', '2023-06-17', '05:21', 'Tennis', 'Female', 'Senior Team', '', '', ''),
(22, 'Orogu', 'ARS', 'Stadium Practice field', '2023-06-17', '05:23', 'Football', 'Male', 'Senior Team', '', '', ''),
(23, 'Malcolm FC', 'Emmanuel FC', 'Basketball field', '2023-06-20', '00:04', 'Basketball', 'Male', 'Under 21', '', '', ''),
(24, 'Arsenal', 'Manchester United', 'Stadium Practice field', '2023-07-09', '14:53', 'Football', 'Male', 'Under 23', '', '', ''),
(25, 'Manchester United', 'ARS', 'Stadium Playing field', '2023-07-15', '14:04', 'Football', 'Female', 'Senior Team', '', '', ''),
(26, 'Manchester United', 'Chelsea', 'Stadium Playing field', '2023-07-23', '16:00', 'Football', 'Male', 'Senior Team', '', '', ''),
(27, 'Manchester United', 'Chelsea', 'Stadium Playing field', '2023-07-23', '16:00', 'Football', 'Male', 'Senior Team', '', '', ''),
(28, 'Orogu', 'Emmanuel FC', 'Stadium Practice field', '2023-07-27', '09:16', 'Football', 'Female', 'Under 14', '', '', ''),
(29, 'Orogu', 'Chelsea', 'Stadium Playing field', '2023-09-27', '08:21', 'Football', 'Male', 'Under 23', '', '', ''),
(30, 'Orogu', 'Chelsea', 'Stadium Playing field', '2023-09-30', '15:19', 'Football', 'Female', 'Under 12', '', '', ''),
(31, 'Orogu', 'Chelsea', 'Stadium Playing field', '2023-09-30', '15:19', 'Football', 'Female', 'Under 12', '', '', ''),
(32, 'Manchester United', 'Tottenham', 'Stadium Playing field', '2023-09-30', '22:26', 'Football', 'Female', 'Under 14', '1', 'September', '2023'),
(37, 'FC Mon', 'FC Emmo', 'Stadium Playing field', '2023-10-19', '05:51', 'Football', 'Male', 'Senior Team', '1', 'October', '2023'),
(38, 'MNU', 'Tottenham', 'Stadium Playing field', '2023-10-05', '10:11', 'Football', 'Male', 'Senior Team', '1', 'October', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(125) NOT NULL,
  `eventid` varchar(255) NOT NULL,
  `seatno` varchar(255) NOT NULL,
  `standno` varchar(255) NOT NULL,
  `seatprice` varchar(255) NOT NULL,
  `refcode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `eventid`, `seatno`, `standno`, `seatprice`, `refcode`, `status`, `date`, `month`, `year`) VALUES
(1, '36', '56', '21', '9000', 'Pre-001', 'Sold', '22 Jun 2023', '', ''),
(2, '30', '23', '22', '9000', 'Pre-002', 'Sell', '21 Jun 2023', '', ''),
(11, '37', '111,112,113,114,115,116,117,118,119', '221,222,223,224,225,226,227,228,229', 'Le5000', '895552130', 'Sell', '2023-10-19', 'October', '2023'),
(12, '38', '', '', 'Le5000', '308899485', 'Sell', '2023-10-02', 'October', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `email`, `password`, `user`, `status`, `date`, `month`, `year`) VALUES
(1, 'emmanuelsahrdauda17@gmail.com', 'dauda@2019', 'Emmanuel', '', '', '', ''),
(2, 'john@gmail.com', 'john1234', 'John', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stand`
--

CREATE TABLE `stand` (
  `id` int(155) NOT NULL,
  `standno` varchar(255) NOT NULL,
  `standname` varchar(255) NOT NULL,
  `numberofseats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketpayment`
--

CREATE TABLE `ticketpayment` (
  `id` int(125) NOT NULL,
  `eventid` int(255) NOT NULL,
  `supportername` varchar(255) NOT NULL,
  `supporteremail` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `accountnumber` varchar(255) NOT NULL,
  `seatno` varchar(255) NOT NULL,
  `standno` varchar(125) NOT NULL,
  `refcode` varchar(255) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketpayment`
--

INSERT INTO `ticketpayment` (`id`, `eventid`, `supportername`, `supporteremail`, `phonenumber`, `amount`, `paymentmethod`, `accountnumber`, `seatno`, `standno`, `refcode`, `date`, `month`, `year`) VALUES
(1, 30, 'John Bangura', 'john@gmail.com', '033345567', '9000', 'Orange Money', '074483920', '56', '', 'R45676', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stand`
--
ALTER TABLE `stand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketpayment`
--
ALTER TABLE `ticketpayment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stand`
--
ALTER TABLE `stand`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticketpayment`
--
ALTER TABLE `ticketpayment`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
