-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 09:00 PM
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
-- Database: `lg-cardealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `lgcd-customers`
--

CREATE TABLE `lgcd-customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lgcd-invoice`
--

CREATE TABLE `lgcd-invoice` (
  `transaction_id` int(11) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `car_model` varchar(200) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `agent_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lgcd-mechanics`
--

CREATE TABLE `lgcd-mechanics` (
  `mechanic_id` int(11) NOT NULL,
  `mechanic_name` varchar(200) NOT NULL,
  `employee_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lgcd-tickets`
--

CREATE TABLE `lgcd-tickets` (
  `transaction_id` int(11) NOT NULL,
  `receipt_number` varchar(50) NOT NULL,
  `service_date` varchar(50) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `mechanic_name` varchar(200) NOT NULL,
  `parts_needed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lgcd-customers`
--
ALTER TABLE `lgcd-customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `lgcd-invoice`
--
ALTER TABLE `lgcd-invoice`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `lgcd-mechanics`
--
ALTER TABLE `lgcd-mechanics`
  ADD PRIMARY KEY (`mechanic_id`);

--
-- Indexes for table `lgcd-tickets`
--
ALTER TABLE `lgcd-tickets`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lgcd-customers`
--
ALTER TABLE `lgcd-customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lgcd-invoice`
--
ALTER TABLE `lgcd-invoice`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lgcd-mechanics`
--
ALTER TABLE `lgcd-mechanics`
  MODIFY `mechanic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lgcd-tickets`
--
ALTER TABLE `lgcd-tickets`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
