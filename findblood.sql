-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 08:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_email`, `admin_password`, `admin_id`) VALUES
('admin', 'admin@gmail.com', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `subject`, `message`, `email`, `contact`) VALUES
(1, 'abc', 'xyz', 'dfdsf sdfsf dsff', 'abc@gmail.com', '9898989898'),
(2, 'abc', 'dasf', 'asd', 'abc@gmail.com', '9898989898'),
(3, 'abc', 'for donor info', 'asd asd ', 'abc@gmail.com', '8787878799'),
(4, 'aa1', 'sad', 'sdfds', 'aaa@gmail.com', '123432123');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_firstName` varchar(20) NOT NULL,
  `donor_lastName` varchar(20) NOT NULL,
  `donor_age` varchar(20) NOT NULL,
  `donor_address` varchar(20) NOT NULL,
  `donor_bloodGroup` varchar(20) NOT NULL,
  `donor_gender` varchar(20) NOT NULL,
  `donor_medicalReport` varchar(20) NOT NULL,
  `donor_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `donor_addiction` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_firstName`, `donor_lastName`, `donor_age`, `donor_address`, `donor_bloodGroup`, `donor_gender`, `donor_medicalReport`, `donor_id`, `email`, `password`, `donor_addiction`, `contact_number`, `picture`) VALUES
('aaa', 'bbb', '22', 'sdfsf  sefewrf', 'A-', 'Male', 'Lighthouse.jpg', 4, 'ttt@gmail.com', 'dHR0MTIz', 'Smoking', '2323232323', 'Koala.jpg'),
('abcq', 'xyz', '23', 'dsfsf', 'B+', 'Male', 'Lighthouse.jpg', 24, 'aaa@gmail.com', 'YWFhMTIz', 'Smoking', '3434343434', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_description` varchar(200) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_date`, `event_location`) VALUES
(2, 'Chennai Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-20', 'chennai, india'),
(3, 'Dubai Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-28', 'dubai'),
(4, 'Chicago Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-27', 'checago, USA'),
(5, 'Mumbai Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-13', 'mumbai, India'),
(6, 'Delhi Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-27', 'delhi, India'),
(7, 'Pune Event', 'countries around the world celebrate World Blood Donor Day. Transfusion of blood and blood products helps save millions of lives every year. A blood service that gives patients access to safe blood an', '2019-09-20', 'pune, india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
