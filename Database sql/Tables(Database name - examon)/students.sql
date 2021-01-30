-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examon`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `gen` varchar(1) NOT NULL,
  `program` varchar(9) NOT NULL,
  `branch` varchar(9) NOT NULL,
  `school` varchar(9) NOT NULL,
  `slot` int(1) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`reg_no`, `name`, `dob`, `age`, `gen`, `program`, `branch`, `school`, `slot`, `password`) VALUES
('16MCA0821', 'Aradhya Agarwal', '1998-10-19', 21, 'F', 'MCA', 'CSE', 'SCSE', 1, ''),
('16MCA0875', 'Sahaj Madan', '1997-01-23', 19, 'M', 'MCA', 'MIS', 'SCSE', 1, ''),
('17BCE1236', 'Aryan yadav', '1997-03-17', 19, 'M', 'BTECH', 'CSE', 'SCSE', 2, ''),
('17BCE1245', 'Divit Jain', '2001-07-05', 20, 'M', 'BTECH', 'CSE', 'SCSE', 2, ''),
('17BPS4328', 'Astha Gupta', '2000-03-02', 23, 'F', 'BTECH', 'CSE', 'SCSE', 1, ''),
('17BPS4376', 'Dhruv Prayag', '2002-09-16', 18, 'M', 'BTECH', 'CSE', 'SCSE', 2, ''),
('18BCA5043', 'Shubham Chauhan', '2001-11-02', 19, 'M', 'BCA', 'MIS', 'SCSE', 1, ''),
('18BCA5643', 'Arjav Dua', '1998-11-30', 21, 'M', 'BCA', 'CSE', 'SCSE', 1, ''),
('18BPS647', 'Satyam Manocha', '1998-06-18', 18, 'M', 'BTECH', 'CSE', 'SCSE', 1, ''),
('18BPS6530', 'Vanshit Gupta', '2000-09-09', 23, 'M', 'BTECH', 'CSE', 'SCSE', 2, ''),
('18MCA1100', 'Shreya Arya', '2000-05-26', 19, 'F', 'MCA', 'MIS', 'SCSE', 2, ''),
('18MCA1340', 'Divy Agarwal', '1998-08-31', 21, 'M', 'MCA', 'CSE', 'SCSE', 1, ''),
('19BCE1663', 'Mayank Dash', '2001-06-01', 19, 'M', 'B.TECH', 'CSE', 'SCSE', 2, ''),
('19BCE1672', 'Sarthak Keshari', '1999-05-16', 21, 'M', 'B.TECH', 'CSE', 'SCSE', 1, 'Abc@123'),
('19BEE1043', 'Shivangi Verma', '1999-02-20', 19, 'F', 'BTECH', 'CSE', 'SCSE', 2, ''),
('19BEE1087', 'Somya Kaushik', '1999-07-22', 20, 'F', 'BTECH', 'CSE', 'SCSE', 1, ''),
('19MBA3002', 'Mansi Sharma', '1999-04-10', 20, 'F', 'MBA', 'HRM', 'SCSE', 2, ''),
('19MBA6543', 'Shailja Devi', '2001-03-24', 19, 'F', 'MBA', 'HRM', 'SCSE', 1, ''),
('19MCA1925', 'Prithvi Yadav', '1998-03-15', 23, 'M', 'MCA', 'CSE', 'SCSE', 1, ''),
('19MCA1985', 'Shobhita ', '2002-08-24', 18, 'F', 'MCA', 'CSE', 'SCSE', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `reg_no` (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
