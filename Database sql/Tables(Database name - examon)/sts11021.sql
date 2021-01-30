-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:14 PM
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
-- Table structure for table `sts11021`
--

CREATE TABLE `sts11021` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11021`
--

INSERT INTO `sts11021` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, '2 + 3 =', '2', '9', '3', '5', 'D'),
(2, 'number of Es in ELEPHANT', '5', '2', '6', '9', 'B'),
(3, '4 x 5=', '11', '18', '20', '25', 'C'),
(4, '______ comes after 3 x 2', '7', '8', '6', '9', 'A'),
(5, '9-5=', '2', '4', '5', '8', 'B'),
(6, '69-58=', '10', '9', '11', '12', 'C'),
(7, '17, 15,22, 31 , what is the even number in this series', '17', '15', '31', '22', 'D'),
(8, '1 ball is of Rs.10. Price of 3 balls is _____', '20', '30', '10', '40', 'B'),
(9, 'Largest 3 digit number with 8,5,9', '985', '589', '859', '958', 'A'),
(10, 'smallest 3 digit number with 2,0,4', '24', '402', '204', '240', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sts11021`
--
ALTER TABLE `sts11021`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
