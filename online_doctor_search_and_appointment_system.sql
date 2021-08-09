-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 02:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_doctor_search_and_appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `app_patient` int(11) NOT NULL,
  `app_doctor` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `app_slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(50) NOT NULL,
  `doc_firstname` varchar(255) NOT NULL,
  `doc_lastname` varchar(255) NOT NULL,
  `doc_email` varchar(255) NOT NULL,
  `doc_password` int(50) NOT NULL,
  `doc_contact` int(50) NOT NULL,
  `doc_availability_days` int(10) NOT NULL,
  `doc_location` int(11) NOT NULL,
  `doc_fee` int(10) NOT NULL,
  `doc_timing_slots` int(11) NOT NULL,
  `doc_hospital_name` varchar(255) NOT NULL,
  `doc_specialist` int(20) NOT NULL,
  `doc_experience` varchar(255) NOT NULL,
  `doc_qualification` varchar(255) NOT NULL,
  `doc_introduction` text NOT NULL,
  `doc_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_firstname`, `doc_lastname`, `doc_email`, `doc_password`, `doc_contact`, `doc_availability_days`, `doc_location`, `doc_fee`, `doc_timing_slots`, `doc_hospital_name`, `doc_specialist`, `doc_experience`, `doc_qualification`, `doc_introduction`, `doc_image`) VALUES
(1, 'sohail', 'ahmad', 'doc@gmail.com', 123456, 123456789, 4, 0, 3000, 0, 'General Hospital', 1, '5 years', 'MBBS', 'lorem', 't1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(50) NOT NULL,
  `pat_firstname` varchar(255) NOT NULL,
  `pat_lastname` varchar(255) NOT NULL,
  `pat_contact` int(50) NOT NULL,
  `pat_email` varchar(255) NOT NULL,
  `pat_age` int(11) NOT NULL,
  `pat_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `pat_firstname`, `pat_lastname`, `pat_contact`, `pat_email`, `pat_age`, `pat_address`) VALUES
(1, 'ahmad', 'javaid', 2147483647, 'ahmad@gmail.com', 20, 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `service_hours`
--

CREATE TABLE `service_hours` (
  `ser_id` int(10) NOT NULL,
  `ser_day` varchar(20) NOT NULL,
  `ser_starttime` time NOT NULL,
  `ser_endtime` time NOT NULL,
  `ser_doc_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_hours`
--

INSERT INTO `service_hours` (`ser_id`, `ser_day`, `ser_starttime`, `ser_endtime`, `ser_doc_id`) VALUES
(1, 'Monday-Wednesday', '12:00:00', '17:00:00', 1),
(2, 'Friday', '09:00:00', '12:00:00', 1),
(3, 'Saturday-Sunday', '09:00:00', '20:00:00', 1),
(4, 'Thursday', '13:00:00', '20:00:00', 1),
(5, 'Monday-Wednesday', '12:00:00', '17:00:00', 2),
(6, 'Friday', '09:00:00', '12:00:00', 2),
(7, 'Saturday-Sunday', '09:00:00', '20:00:00', 2),
(8, 'Thursday', '13:00:00', '20:00:00', 2),
(9, 'Monday-Wednesday', '12:00:00', '17:00:00', 3),
(10, 'Friday', '09:00:00', '12:00:00', 3),
(11, 'Saturday-Sunday', '09:00:00', '20:00:00', 4),
(12, 'Thursday', '13:00:00', '20:00:00', 4),
(13, 'Monday-Wednesday', '12:00:00', '17:00:00', 5),
(14, 'Friday', '09:00:00', '12:00:00', 5),
(15, 'Saturday-Sunday', '09:00:00', '20:00:00', 5),
(16, 'Thursday', '13:00:00', '20:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `spec_id` int(11) NOT NULL,
  `spec_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`spec_id`, `spec_name`) VALUES
(1, 'Cardiologists');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_patient` (`app_patient`),
  ADD KEY `app_slot` (`app_slot`),
  ADD KEY `app_doctor` (`app_doctor`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `doc_specialist` (`doc_specialist`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `service_hours`
--
ALTER TABLE `service_hours`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`spec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_hours`
--
ALTER TABLE `service_hours`
  MODIFY `ser_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`app_patient`) REFERENCES `patient` (`pat_id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`app_slot`) REFERENCES `service_hours` (`ser_id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`app_doctor`) REFERENCES `doctor` (`doc_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doc_specialist`) REFERENCES `specializations` (`spec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
