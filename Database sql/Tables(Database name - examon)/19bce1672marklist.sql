-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:13 PM
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
-- Table structure for table `19bce1672marklist`
--

CREATE TABLE `19bce1672marklist` (
  `course` varchar(200) NOT NULL,
  `marks` int(3) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `19bce1672marklist`
--

INSERT INTO `19bce1672marklist` (`course`, `marks`, `datetime`) VALUES
('STS1101 - Fundamentals of Aptitude', 0, '2020-10-27 15:18:42'),
('STS1101 - Fundamentals of Aptitude', 0, '2020-10-27 16:10:02'),
('STS1102 - Arithmetic Problem Solving', 1, '2020-10-28 05:32:57'),
('STS1101 - Fundamentals of Aptitude', 10, '2020-10-28 15:30:41'),
('STS1101 - Fundamentals of Aptitude', 1, '2020-11-09 03:50:02'),
('STS1101 - Fundamentals of Aptitude', 1, '2020-11-09 12:36:13'),
('STS1101 - Fundamentals of Aptitude', 0, '2020-12-31 12:45:03'),
('STS1101 - Fundamentals of Aptitude', 0, '2021-01-04 13:07:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `19bce1672marklist`
--
ALTER TABLE `19bce1672marklist`
  ADD PRIMARY KEY (`datetime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
