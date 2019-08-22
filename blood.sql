-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 05:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_firstName` varchar(20) NOT NULL,
  `admin_lastName` varchar(20) NOT NULL,
  `admin_contactNo` varchar(20) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `comment`, `image`) VALUES
(1, 'Tom', 'Tropical Treats has the best cheesecake I\'ve ever had. Always fresh, and melts in the mouth. Would recommend highly!', 'comment.png'),
(2, 'Claire', 'I\'m addicted to the chocolate chip muffins and always drop in here on my way to work.', 'comment.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `donor_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `servicename`, `price`, `offer`, `description`, `image`) VALUES
(1, 'Blueberry muffin', '3.95', '15', 'They\'re soft, fluffy, tender, and bursting with juicy blueberries in every bite. I used fresh blueberries and haven\'t tried with frozen.', 'm4.jpg'),
(2, 'Raspberry cheesecake', '5.50', '10', 'Raspberry Cheesecake Bars â€“ Sugar-Free, Low-Carb, Keto, Gluten-Free', 'm5.jpg'),
(3, 'Lemon meringue pie', '5.50', '20', 'Meyer lemons are very juicy and great for baking -- they are slightly sweeter and less acidic than regular lemons.', 'm6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `receiver_firstName` varchar(20) NOT NULL,
  `receiver_lastName` varchar(20) NOT NULL,
  `receiver_bloodGroup` varchar(20) NOT NULL,
  `receiver_age` varchar(20) NOT NULL,
  `receiver_height` varchar(20) NOT NULL,
  `donor_id` int(20) NOT NULL,
  `receiver_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `servicename`, `price`, `description`, `image`) VALUES
(1, 'Caramel slice', '4.50', 'Each piece has the surprise of sticky caramel sandwiched between the chocolate and biscuit layers.', 'm1.jpg'),
(2, 'Cherry Ripe Slice', '4.50', 'Turn your favourite chocolate bar into a the ultimate afternoon delight with this heavenly cherry ripe slice.', 'm2.jpg'),
(3, 'Chocolate chip muffin', '3.95', 'These decorated Easter chocolate cupcakes are quick, simple and cute.', 'm3.jpg'),
(4, 'Blueberry muffin', '3.95', 'They\'re soft, fluffy, tender, and bursting with juicy blueberries in every bite. I used fresh blueberries and haven\'t tried with frozen.', 'm4.jpg'),
(5, 'Raspberry cheesecake', '5.50', 'Raspberry Cheesecake Bars â€“ Sugar-Free, Low-Carb, Keto, Gluten-Free', 'm5.jpg'),
(6, 'Lemon meringue pie', '5.50', 'Meyer lemons are very juicy and great for baking -- they are slightly sweeter and less acidic than regular lemons.', 'm6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `productinterest` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`receiver_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `receiver_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `receiver`
--
ALTER TABLE `receiver`
  ADD CONSTRAINT `receiver_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
