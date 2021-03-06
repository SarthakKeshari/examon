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
-- Table structure for table `19bce1672messages`
--

CREATE TABLE `19bce1672messages` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `message` varchar(250) NOT NULL,
  `msg_to` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `19bce1672messages`
--

INSERT INTO `19bce1672messages` (`id`, `reg_no`, `message`, `msg_to`, `datetime`) VALUES
(18, '19BCE1672', 'Good Morning Maam', '615243', '2020-10-28 05:32:39'),
(19, '615243', 'Good Morning', '19BCE1672', '2020-10-28 05:34:35'),
(20, '19BCE1672', 'Good evening', '615243', '2020-10-28 15:32:41'),
(21, '615243', 'Good evening', '19BCE1672', '2020-10-28 15:36:12'),
(22, '19BCE1672', 'Good afternoon Maam', '615243', '2020-10-28 20:42:02'),
(23, '19BCE1672', 'Maam when will the marks be updated?', '615243', '2020-11-09 03:49:42'),
(24, '615243', 'By Sunday evening', '19BCE1672', '2020-11-09 03:51:31'),
(25, '19BCE1672', 'Good evening', '615243', '2020-11-09 12:35:06'),
(26, '615243', 'Good evening', '19BCE1672', '2020-11-09 12:37:38'),
(27, '19BCE1672', 'Hello', '615243', '2021-01-04 13:08:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `19bce1672messages`
--
ALTER TABLE `19bce1672messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `19bce1672messages`
--
ALTER TABLE `19bce1672messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
