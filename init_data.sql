-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 02:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getdata` ()  NO SQL
BEGIN
SELECT * FROM complaint
WHERE status = 'open';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `payment` ()  NO SQL
BEGIN
SELECT * FROM rent
ORDER BY t_date;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rent` (IN `email1` VARCHAR(40))  NO SQL
SELECT * FROM rent
WHERE email = email1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('rajagopal', 'home@1764');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `apart_id` varchar(5) NOT NULL,
  `unit_id` varchar(5) NOT NULL,
  `apart_address` varchar(50) NOT NULL,
  `rent_amt` int(8) NOT NULL,
  `available` varchar(5) NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apart_id`, `unit_id`, `apart_address`, `rent_amt`, `available`) VALUES
('A101', 'A2', 'EMBASSY GROVE, JP NAGAR ', 14000, 'YES'),
('A102', 'B3', 'EMBASSY GROVE, JP NAGAR ', 7500, 'NO'),
('A106', 'C2', 'EMBASSY GROVE, JP NAGAR ', 4500, 'NO'),
('B101', 'B2', 'BRIGADE LAGUNA, BANASHANKARI', 7500, 'YES'),
('B103', 'B3', 'BRIGADE LAGUNA, BANASHANKARI', 6500, 'YES'),
('B201', 'B1', 'BRIGADE LAGUNA, BANASHANKARI', 10500, 'YES'),
('I102', 'A2', 'PARK AVENUE, INDIRANAGAR', 16000, 'NO'),
('I201', 'A1', 'PARK AVENUE, INDIRANAGAR', 21000, 'YES'),
('I202', 'A3', 'PARK AVENUE, INDIRANAGAR', 13000, 'NO'),
('J201', 'B1', 'THE LAKES, JAYANAGAR 4TH BLOCK', 11000, 'YES'),
('J203', 'A2', 'THE LAKES, JAYANAGAR 4TH BLOCK', 14000, 'NO'),
('J205', 'C1', 'THE LAKES, JAYANAGAR 4TH BLOCK', 4800, 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(8) NOT NULL,
  `tenant_id` varchar(35) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `issue_cause` varchar(40) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `date1` date NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `tenant_id`, `category`, `location`, `issue_cause`, `comment`, `date1`, `status`) VALUES
(28, 'raja@gmail.com', 'Plumbing and Bath', 'Bathroom', 'Shower', 'shower is not working', '2018-10-29', 'closed'),
(30, 'anandan@gmail.com', 'Electrical and Lighting', 'Kitchen', 'Electrical Outlet', 'the socket near the sink is not working', '2018-10-21', 'open'),
(31, 'raja@gmail.com', 'Electrical and Lighting', 'Bedroom', 'Switch', 'switch not working', '2018-11-15', 'closed'),
(32, 'raja@gmail.com', 'Preventative maintenance', 'Entryway', 'Stairs - Annunal', 'none\r\n', '2018-10-21', 'closed'),
(33, 'raja@gmail.com', 'Plumbing and Bath', 'Bathroom', 'Shower', 'Shower head is broken.', '2018-10-26', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `trans_id` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `amt` int(8) NOT NULL,
  `t_date` date NOT NULL,
  `bank_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`trans_id`, `email`, `amt`, `t_date`, `bank_name`) VALUES
(34435, 'hani@yahoo.com', 4500, '2018-03-28', 'SBI'),
(34436, 'sindhura@yahoo.com', 14000, '2018-09-28', 'HSBC'),
(34437, 'anandan@gmail.com', 7500, '2018-05-30', 'BOI'),
(34438, 'raja@gmail.com', 13000, '2018-07-30', 'ICICI'),
(34440, 'anandan@gmail.com', 7500, '2018-06-29', 'BOI'),
(34441, 'hani@yahoo.com', 4500, '2018-07-31', 'SBI'),
(34443, 'aish@gmail.com', 16000, '2018-10-31', 'SBI'),
(34445, 'sindhura@yahoo.com', 14000, '2018-09-28', 'INDIAN OVERSEAS'),
(34446, 'hani@yahoo.com', 4500, '2018-04-30', 'SBI'),
(34448, 'raja@gmail.com', 13000, '2018-08-31', 'ICICI'),
(34449, 'aish@gmail.com', 16000, '2018-11-13', 'SBI');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `email` varchar(35) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `apart_id` varchar(5) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `rent` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`email`, `name`, `password`, `apart_id`, `phone`, `rent`) VALUES
('aish@gmail.com', 'aishwarya', 'curdrice', 'I102', 9729838765, 16000),
('anandan@gmail.com', 'anandan', 'anandan', 'A102', 9740008649, 7500),
('hani@yahoo.com', 'hani', 'home', 'A106', 9741908530, 4500),
('raja@gmail.com', 'raja', 'hello', 'I202', 9611682248, 13000),
('sindhura@yahoo.com', 'sindhura', 'blue', 'J203', 7792835225, 14000);

--
-- Triggers `tenant`
--
DELIMITER $$
CREATE TRIGGER `avail` AFTER INSERT ON `tenant` FOR EACH ROW UPDATE apartment set available = 'NO' 
WHERE NEW.apart_id = apart_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `avail1` AFTER DELETE ON `tenant` FOR EACH ROW UPDATE apartment set available = 'YES' 
WHERE OLD.apart_id = apart_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `unit_type`
--

CREATE TABLE `unit_type` (
  `unit_id` varchar(5) NOT NULL,
  `bed_c` int(2) NOT NULL,
  `bath_c` int(2) NOT NULL,
  `balcony` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_type`
--

INSERT INTO `unit_type` (`unit_id`, `bed_c`, `bath_c`, `balcony`) VALUES
('A1', 3, 3, 'YES'),
('A2', 3, 2, 'YES'),
('A3', 3, 2, 'NO'),
('B1', 2, 2, 'YES'),
('B2', 2, 1, 'YES'),
('B3', 2, 1, 'NO'),
('C1', 2, 2, 'NO'),
('C2', 1, 1, 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`apart_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `rent_amt` (`rent_amt`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `tenant_id` (`tenant_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `email` (`email`),
  ADD KEY `amt` (`amt`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `apart_id` (`apart_id`),
  ADD KEY `rent` (`rent`);

--
-- Indexes for table `unit_type`
--
ALTER TABLE `unit_type`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `trans_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34450;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `FKAU` FOREIGN KEY (`unit_id`) REFERENCES `unit_type` (`unit_id`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `FKCT` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `FKRA` FOREIGN KEY (`amt`) REFERENCES `apartment` (`rent_amt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKRT` FOREIGN KEY (`email`) REFERENCES `tenant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `FKTA` FOREIGN KEY (`apart_id`) REFERENCES `apartment` (`apart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKTAR` FOREIGN KEY (`rent`) REFERENCES `apartment` (`rent_amt`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
