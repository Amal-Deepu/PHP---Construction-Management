-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 04:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', 'admin\r\n', 'admin');

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
(1, 100, 53, 1, 'BORROWED'),
(2, 100, 11, 1, 'BORROWED-TOOL');

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

--
-- Dumping data for table `borrowed_tools`
--

INSERT INTO `borrowed_tools` (`borrow_id`, `tool_id`, `qty`, `emp_id`, `borrowed_date`, `borrowed_time`, `due_date`, `date_returned`, `status`, `location_id`) VALUES
(5, 1, 5, 2, '2021-03-07', '20:15:52 PM', '2021-03-11', '2021-03-07', 'RETURNED', 2);

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
  `position` varchar(30) NOT NULL,
  `booking_status` varchar(300) NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_contractor_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `name`, `age`, `address`, `contact_number`, `position`, `booking_status`, `booking_date`, `booking_contractor_name`) VALUES
(1, 'ryan manaay', 23, 'Himamaylan city', '0912344547', 'welder', 'booked', '2021-04-16 00:00:00', ''),
(2, 'juan dela cruz', 25, 'Binalbagan', '09123456789', 'carpenter', '', '0000-00-00 00:00:00', ''),
(3, 'given bariacto', 23, 'alimango', '0912345678', 'helper', '', '0000-00-00 00:00:00', ''),
(4, 'juday', 25, 'Himamaylan City', '0912345678', 'kargadorr', 'booked', '2021-04-17 00:00:00', ''),
(5, 'Adrian Mercurio', 23, 'Himamaylan City', '0912345678', 'asf', '', '0000-00-00 00:00:00', ''),
(6, 'anjali', 25, 'ahsasajda', '9605400257', 'welder', '', '0000-00-00 00:00:00', '');

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

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equip_id`, `uniquec`, `name`, `category`, `quantity`, `available_quantity`, `status`) VALUES
(6, '112221', 'bachoe', 'HEAVY', 1, 1, 'UNAVAILABLE'),
(7, '111', 'tracktor', 'HEAVY', 1, 1, ''),
(8, '', '', '', 0, 0, '');

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

--
-- Dumping data for table `equip_mapping`
--

INSERT INTO `equip_mapping` (`map_id`, `equip_id`, `qty`, `remaining_qty`, `location_id`, `date_borrowed`, `time_borrowed`, `due_date`, `date_returned`, `status`, `emp_id`) VALUES
(66, 6, 1, 0, 1, '2021-02-08', '23:01:53 PM', '2021-02-10', '', 'TRANSFERED', 1),
(67, 7, 1, 0, 1, '2021-03-07', '19:52:03 PM', '2021-03-20', '2021-03-07', 'RETURNED', 3),
(68, 7, 1, 0, 1, '2021-06-25', '19:30:04 PM', '2021-06-24', '', 'BORROWED', 1),
(69, 6, 1, 0, 1, '2021-06-25', '19:31:01 PM', '53453-04-02', '', 'BORROWED', 1);

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `action` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `action`, `date_time`) VALUES
(48, 'user  was login', '2021-04-14 23:56:56'),
(49, 'user  was login', '2021-04-14 23:59:41'),
(50, 'user  was login', '2021-04-15 00:01:14'),
(51, 'user  was login', '2021-04-15 00:02:06'),
(52, 'user Admin was login', '2021-04-15 00:10:32'),
(53, 'user Admin was logout', '2021-04-15 00:12:38'),
(54, 'user Admin was login', '2021-04-15 00:15:42'),
(55, 'user Admin was logout', '2021-04-15 00:15:49'),
(56, 'user Admin was login', '2021-04-15 00:18:07'),
(57, 'user Admin was logout', '2021-04-15 00:18:31'),
(58, 'user  was login', '2021-04-15 09:24:09'),
(59, 'user  was login', '2021-04-15 09:25:08'),
(60, 'user  was login', '2021-04-15 09:26:06'),
(61, 'user  was login', '2021-04-15 09:26:45'),
(62, 'user kannan was login', '2021-04-15 09:28:35'),
(63, 'user kannan was logout', '2021-04-15 09:31:41'),
(64, 'user kannan was login', '2021-04-15 09:36:57'),
(65, 'user kannan was logout', '2021-04-15 09:37:03'),
(66, 'user kannan was login', '2021-04-15 09:39:18'),
(67, 'employee ryan manaay was updated', '2021-04-15 10:41:50'),
(68, 'employee ryan manaay was updated', '2021-04-15 10:41:50'),
(69, 'employee ryan manaay was updated', '2021-04-15 10:41:50'),
(70, 'employee ryan manaay was updated', '2021-04-15 10:41:50'),
(71, 'employee ryan manaay was updated', '2021-04-15 10:41:50'),
(72, 'user kannan was logout', '2021-04-15 11:03:51'),
(73, 'user Admin was login', '2021-04-15 11:04:48'),
(74, 'employee anjali was Added', '2021-04-15 11:10:42'),
(75, 'user Admin was logout', '2021-04-15 12:55:11'),
(76, 'user Admin was login', '2021-04-15 12:56:50'),
(77, 'user Admin was logout', '2021-04-15 12:58:46'),
(78, 'user Admin was login', '2021-04-15 13:01:09'),
(79, 'user Admin was logout', '2021-04-15 13:03:07'),
(80, 'user Admin was login', '2021-04-15 13:09:17'),
(81, 'user Admin was login', '2021-04-15 21:52:53'),
(82, 'user Admin was logout', '2021-04-16 06:58:42'),
(83, 'user vishnu was login', '2021-04-16 07:05:18'),
(84, 'user vishnu was logout', '2021-04-16 07:05:40'),
(85, 'user kannan was login', '2021-04-16 07:06:30'),
(86, 'employee juday was updated', '2021-04-16 07:06:57'),
(87, 'employee juday was updated', '2021-04-16 07:06:57'),
(88, 'employee juday was updated', '2021-04-16 07:06:57'),
(89, 'employee juday was updated', '2021-04-16 07:06:57'),
(90, 'employee juday was updated', '2021-04-16 07:06:57'),
(91, 'user kannan was logout', '2021-04-16 07:16:25'),
(92, 'user kannan was login', '2021-04-16 07:17:18'),
(93, 'Quotation by  kannan was Added', '2021-04-16 08:11:34'),
(94, 'Quotation by  kannan was Added', '2021-04-16 08:21:23'),
(95, 'Quotation by  kannan was Added', '2021-04-16 08:23:26'),
(96, 'quotation by  kannan was updated', '2021-04-16 08:27:08'),
(97, 'user kannan was logout', '2021-04-16 08:32:31'),
(98, 'user vishnu was login', '2021-04-16 08:33:12'),
(99, 'user vishnu was login', '2021-04-16 09:12:00'),
(100, 'user vishnu was logout', '2021-04-16 09:26:10'),
(101, 'user vishnu was login', '2021-04-16 09:26:24'),
(102, 'Plan by  vishnu was Added', '2021-04-16 09:32:30'),
(103, 'plan by  vishnu was updated', '2021-04-16 09:32:41'),
(104, 'user vishnu was logout', '2021-04-16 09:40:00'),
(105, 'user kannan was login', '2021-04-16 09:40:59'),
(106, 'user kannan was logout', '2021-04-16 09:43:47'),
(107, 'user vishnu was login', '2021-04-16 09:43:59'),
(108, 'Plan by  vishnu was Added', '2021-04-16 09:44:15'),
(109, 'user vishnu was logout', '2021-04-16 09:44:32'),
(110, 'user Admin was login', '2021-04-16 09:44:49'),
(111, 'user Admin was logout', '2021-04-16 09:52:42'),
(112, 'user kannan was login', '2021-04-16 09:53:45'),
(113, 'equipment  was Added', '2021-04-16 10:12:45'),
(114, 'user kannan was logout', '2021-04-16 10:23:30'),
(115, 'user kannan was login', '2021-04-16 10:24:09'),
(116, 'user kannan was logout', '2021-04-16 10:25:55'),
(117, 'user vishnu was login', '2021-04-16 10:26:07'),
(118, 'user vishnu was logout', '2021-04-16 10:26:21'),
(119, 'user kannan was login', '2021-04-17 14:22:05'),
(120, 'user kannan was login', '2021-06-23 13:29:47'),
(121, 'user kannan was login', '2021-06-25 21:25:15'),
(122, 'user kannan was logout', '2021-06-25 21:45:37'),
(123, 'user Admin was login', '2021-06-25 21:55:02'),
(124, 'user Admin was login', '2021-07-12 21:43:08');

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

--
-- Dumping data for table `outsourcing`
--

INSERT INTO `outsourcing` (`source_id`, `company_name`, `equip_id`, `qty`, `date_outsourced`, `source_code`) VALUES
(2, 'ghgd', 7, 1, '2021-06-25', 'BORROWED-151'),
(3, '232132', 6, 1, '2021-06-25', 'BORROWED-152');

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_architect`
--

CREATE TABLE `tbl_architect` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `works_at` varchar(300) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_architect`
--

INSERT INTO `tbl_architect` (`id`, `username`, `email`, `password`, `contact_number`, `location`, `works_at`, `qualification`, `user_type`, `status`) VALUES
(6, 'vishnu', 'vishnuvasudevan@gmail.com', 'asd', '9605400257', 'chettikulangara', 'palathra', 'm.arch', 'architect', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `username`, `email`, `password`, `contact_number`, `location`, `user_type`, `status`) VALUES
(7, 'kannan', 'kannan@gmail.com', 'asd', '9544250707', 'chettikulangara', 'client', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contractor`
--

CREATE TABLE `tbl_contractor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `works_at` varchar(300) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contractor`
--

INSERT INTO `tbl_contractor` (`id`, `username`, `email`, `password`, `contact_number`, `location`, `works_at`, `user_type`, `status`) VALUES
(5, 'kannan', 'kannan@gmail.com', 'asd', '9544250707', 'chettikulangara', 'palathra', 'contractor', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ANJALI S KUMAR', 'anjaliskumar015@gmail.com', 'qwds', 'kjdjs,ad'),
(2, 'ANJALI S KUMAR', 'anjaliskumar015@gmail.com', 'qwds', 'kjdjs,ad'),
(3, 'ANJALI S KUMAR', 'anjaliskumar015@gmail.com', 'qwds', 'kjdjs,ad'),
(4, 'hloo', 'hloo', 'hlooo', 'hloo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `from1` varchar(100) NOT NULL,
  `to1` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `from1`, `to1`, `message`) VALUES
(1, 'kannan', 'vishnu', ''),
(2, 'kannan', 'vishnu', ''),
(3, 'kannan', 'vishnu', 'sasa'),
(4, 'kannan', 'vishnu', 'sdsds'),
(5, 'kannan', 'vishnu', 'sdsds'),
(6, 'kannan', 'vishnu', 'sasa'),
(7, 'kannan', 'kannan', 'dsdsdsds'),
(8, 'kannan', 'kannan', 'dsdsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `time_duration` varchar(10) NOT NULL,
  `bedroom` varchar(20) NOT NULL,
  `bathroom` varchar(20) NOT NULL,
  `kitchen` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation`
--

CREATE TABLE `tbl_quotation` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `time_duration` varchar(30) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quotation`
--

INSERT INTO `tbl_quotation` (`id`, `username`, `budget`, `time_duration`, `address`, `contact_number`, `area`, `status`, `date`) VALUES
(2, 'kannan', '340002', '1 year`', 'xcz', '12333', '1233', 'Not Approved', '2021-04-16 08:27:08');

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
-- Dumping data for table `transfered_equipment`
--

INSERT INTO `transfered_equipment` (`transfer_id`, `map_id`, `equip_id`, `emp_id_from`, `emp_id_to`, `date_transfered`, `time_transfered`, `location_id_from`, `location_id_to`, `date_returned`, `status`) VALUES
(14, 66, 6, 1, 4, '2021-03-07', '20:45:14 PM', 1, 6, '', 'TRANSFERED');

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_architect`
--
ALTER TABLE `tbl_architect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contractor`
--
ALTER TABLE `tbl_contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equip_mapping`
--
ALTER TABLE `equip_mapping`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `outsourcing`
--
ALTER TABLE `outsourcing`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `outsourcing_tools`
--
ALTER TABLE `outsourcing_tools`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_architect`
--
ALTER TABLE `tbl_architect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contractor`
--
ALTER TABLE `tbl_contractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `temp1`
--
ALTER TABLE `temp1`
  MODIFY `temp1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `tool_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transfered_equipment`
--
ALTER TABLE `transfered_equipment`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
