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
-- Table structure for table `sts11012`
--

CREATE TABLE `sts11012` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11012`
--

INSERT INTO `sts11012` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, 'Find next number in the sequence:  1,4,9,16, _', '2', '25', '36', '30', 'B'),
(2, '3+2(5)', '21', '10', '13', '7', 'C'),
(3, '2 duckes have _____ legs', '2', '6', '8', '4', 'D'),
(4, '3 squares have _______ corners', '8', '12', '10', '14', 'B'),
(5, 'oppostie of front is________', 'back', 'forward', 'side', 'fore', 'A'),
(6, 'antonym of poor is _______', 'needy', 'beggar', 'rich', 'meager', 'C'),
(7, 'find the next letter: A,C,E,___', 'F', 'G', 'H', 'D', 'B'),
(8, 'brother:sister::father:______', 'grandmother', 'cousin', 'grandfather', 'mother', 'D'),
(9, 'synonym of big is _____', 'small', 'large', 'tiny', 'huge', 'B'),
(10, 'watch:time::compass:___________', 'clock', 'light', 'direction', 'speed', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sts11012`
--
ALTER TABLE `sts11012`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sts11012`
--
ALTER TABLE `sts11012`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
