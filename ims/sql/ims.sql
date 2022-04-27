-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`, `name`) VALUES
(1, '123', 'admin'),
(2, '123', 'mazhikhin'),
(1644659418, 'ashok123', 'ashok'),
(1644660068, '123', 'admin3'),
(1645163140, '123', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
(11, '123', 'Agent', 'Chennai', 2147483647),
(1644490944, '1234', 'ashok', 'Chennai', 2147483647),
(1644490945, '123', 'Dave', 'Vernusala', 23234123),
(1644490946, '123', 'Mark', 'Italy', 23423121),
(1644649330, '123', 'sivanessh', 'africa', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `policy_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `gender`, `birth_date`, `marital_status`, `phone`, `address`, `policy_id`, `agent_id`) VALUES
(123, '123', 'emir gouberk', 'male', '0000-00-00', 'married', 545679775, 'istanbul', 1, 11),
(222, '123', 'Vijay', 'male', '0000-00-00', 'single', 2147483555, 'Puducherry', 1, 11),
(1644647705, '123', 'lorenzo', 'male', '0000-00-00', 'married', 2147483647, 'spain', 1, 11),
(1644649433, '123', 'nitthiyan anamalai', 'Male', '0000-00-00', 'married', 456655665, 'Chennai', 2, 1644490945),
(1644649434, '123', 'ravinder', 'male', '2001-02-10', 'married', 23234123, 'poolachi', 1, 11),
(1645164746, '123', 'Robert', 'male', '0000-00-00', 'married', 2147483647, 'Chennai', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `gender`, `birth_date`, `relationship`, `priority`, `phone`) VALUES
(333, 222, 'Kumar', 'male', '0000-00-00', 'Brother', '2nd', 2147483647),
(164464987, 223, 'maze', 'female', '0000-00-00', 'wife', '1st', 2147483647),
(1644646559, 223, 'maze', 'female', '0000-00-00', 'wife', '1st', 2147483647),
(1644647705, 1644647705, 'maze', 'female', '0000-00-00', 'wife', '1st', 2147483647),
(1644647794, 123, 'osyzke gouberk', 'female', '0000-00-00', 'wife', '1st', 857579074),
(1644649433, 1644649433, 'hariharan', 'Male', '0000-00-00', 'wife', '1st', 465677698),
(1645164746, 1645164746, 'Kumar', 'male', '0000-00-00', 'Brother', '1st', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `fine` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `month`, `amount`, `due`, `fine`, `agent_id`) VALUES
(1644648300, 123, 'Jan', 2000, 0, 12, 11),
(1644648301, 123, 'JANUARY', 10000, 5000, 100, 11),
(1644648302, 1644649434, 'June', 50000, 5000, 500, 11),
(1645165328, 223, 'Jan', 2000, 0, 400, 11);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(11) NOT NULL,
  `term` varchar(50) NOT NULL,
  `per_month` varchar(50) NOT NULL,
  `policy_name` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(30) NOT NULL,
  `age_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `per_month`, `policy_name`, `payment_method`, `coverage`, `age_limit`) VALUES
(1, '10 year', '5000', 'Life Insurance', 'Cash/Check', '50000', 50),
(2, '10 Years', '500', 'auto insurance', 'Cash', '10000', 50),
(1644607575, '10 Years', '1000', 'Health Insurance', 'Cash', '40000', 55),
(1644607576, '5 year', '1000', 'Travel  insurance', 'Cash/Check', '50000', 45),
(1644607577, '15 year', '1000', 'Property  insurance', 'Cash/Check', '50000', 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`),
  ADD UNIQUE KEY `nominee_id` (`nominee_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645163141;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645163427;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645164747;

--
-- AUTO_INCREMENT for table `nominee`
--
ALTER TABLE `nominee`
  MODIFY `nominee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645164747;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `recipt_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645165329;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1644607578;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
