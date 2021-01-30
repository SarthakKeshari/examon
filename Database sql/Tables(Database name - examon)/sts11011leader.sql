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
-- Table structure for table `sts11011leader`
--

CREATE TABLE `sts11011leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11011leader`
--

INSERT INTO `sts11011leader` (`id`, `reg_no`, `name`, `marks`) VALUES
(14, '19BCE1672', 'Sarthak Keshari', 10),
(15, '19BCE1690', 'Shreya Agarwal', 8),
(16, '19BCE1666', 'Swatik', 10),
(17, '19BCE1663', 'Mayank Dash', 8),
(18, '19BCE1210', 'Sweta', 8),
(19, '19BCE1672', 'Sarthak Keshari', 10),
(20, '19BEE1043', 'Shobhita ', 6),
(21, '19BCE1210', 'Saumya', 4),
(22, '19MCA1985', 'Shivangi Verma', 2),
(23, '19BCE1666', 'Swatik', 4),
(27, '19BCE1672', 'Sarthak Keshari', 0),
(28, '19BCE1672', 'Sarthak Keshari', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sts11011leader`
--
ALTER TABLE `sts11011leader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sts11011leader`
--
ALTER TABLE `sts11011leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
