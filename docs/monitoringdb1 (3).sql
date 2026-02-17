-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoringdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `auto_id` int(11) NOT NULL,
  `auto_start` int(11) NOT NULL,
  `auto_end` int(11) NOT NULL,
  `increment` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`auto_id`, `auto_start`, `auto_end`, `increment`, `description`) VALUES
(1, 100, 47, 1, 'BORROWED'),
(2, 100, 10, 1, 'BORROWED-TOOL');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_tools`
--

CREATE TABLE `borrowed_tools` (
  `borrow_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `borrowed_date` varchar(30) NOT NULL,
  `borrowed_time` varchar(30) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `date_returned` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `name`, `age`, `address`, `contact_number`, `position`) VALUES
(1, 'ryan manaay', 23, 'Himamaylan city', '0912344547', 'welder'),
(2, 'juan dela cruz', 25, 'Binalbagan', '09123456789', 'carpenter'),
(3, 'given bariacto', 23, 'alimango', '0912345678', 'helper');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equip_id` int(11) NOT NULL,
  `uniquec` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equip_mapping`
--

CREATE TABLE `equip_mapping` (
  `map_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `remaining_qty` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `date_borrowed` varchar(30) NOT NULL,
  `time_borrowed` varchar(30) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `date_returned` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_address`) VALUES
(1, 'Himamaylan City'),
(2, 'Kabankalan City'),
(3, 'Hinigaran'),
(4, 'Bago City\r\n'),
(5, 'korea'),
(6, 'Sipalay City');

-- --------------------------------------------------------

--
-- Table structure for table `outsourcing`
--

CREATE TABLE `outsourcing` (
  `source_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_outsourced` varchar(30) NOT NULL,
  `source_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outsourcing_tools`
--

CREATE TABLE `outsourcing_tools` (
  `source_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_outsourced` varchar(30) NOT NULL,
  `source_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `temp_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp1`
--

CREATE TABLE `temp1` (
  `temp1_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tool_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `tool_type` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tool_id`, `name`, `quantity`, `available_quantity`, `tool_type`, `status`) VALUES
(1, 'Helmet', 20, 15, 'NON CONSUMABLE', ''),
(2, 'Welding Rod', 100, 100, 'CONSUMABLE', '');

-- --------------------------------------------------------

--
-- Table structure for table `transfered_equipment`
--

CREATE TABLE `transfered_equipment` (
  `transfer_id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `emp_id_from` int(11) NOT NULL,
  `emp_id_to` int(11) NOT NULL,
  `date_transfered` varchar(30) NOT NULL,
  `time_transfered` varchar(30) NOT NULL,
  `location_id_from` int(11) NOT NULL,
  `location_id_to` int(11) NOT NULL,
  `date_returned` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `borrowed_tools`
--
ALTER TABLE `borrowed_tools`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `equip_mapping`
--
ALTER TABLE `equip_mapping`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `outsourcing`
--
ALTER TABLE `outsourcing`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `outsourcing_tools`
--
ALTER TABLE `outsourcing_tools`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `temp1`
--
ALTER TABLE `temp1`
  ADD PRIMARY KEY (`temp1_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `transfered_equipment`
--
ALTER TABLE `transfered_equipment`
  ADD PRIMARY KEY (`transfer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `borrowed_tools`
--
ALTER TABLE `borrowed_tools`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equip_mapping`
--
ALTER TABLE `equip_mapping`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `outsourcing`
--
ALTER TABLE `outsourcing`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outsourcing_tools`
--
ALTER TABLE `outsourcing_tools`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `temp1`
--
ALTER TABLE `temp1`
  MODIFY `temp1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `tool_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transfered_equipment`
--
ALTER TABLE `transfered_equipment`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
