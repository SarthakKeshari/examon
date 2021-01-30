-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 04:58 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `19bce1673marklist`
--

CREATE TABLE `19bce1673marklist` (
  `course` varchar(200) NOT NULL,
  `marks` int(3) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `19bce1673messages`
--

CREATE TABLE `19bce1673messages` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `message` varchar(250) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `615243messages`
--

CREATE TABLE `615243messages` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `message` varchar(250) NOT NULL,
  `msg_to` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `615243messages`
--

INSERT INTO `615243messages` (`id`, `reg_no`, `message`, `msg_to`, `datetime`) VALUES
(27, '19BCE1672', 'Good Morning Maam', '615243', '2020-10-28 05:32:39'),
(29, '615243', 'Good Morning', '19BCE1672', '2020-10-28 05:34:35'),
(30, '19BCE1672', 'Good evening', '615243', '2020-10-28 15:32:41'),
(31, '615243', 'Good evening', '19BCE1672', '2020-10-28 15:36:12'),
(32, '19BCE1672', 'Good afternoon Maam', '615243', '2020-10-28 20:42:02'),
(33, '19BCE1672', 'Maam when will the marks be updated?', '615243', '2020-11-09 03:49:42'),
(34, '615243', 'By Sunday evening', '19BCE1672', '2020-11-09 03:51:31'),
(35, '19BCE1672', 'Good evening', '615243', '2020-11-09 12:35:06'),
(36, '615243', 'Good evening', '19BCE1672', '2020-11-09 12:37:38'),
(37, '19BCE1672', 'Hello', '615243', '2021-01-04 13:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_code` varchar(7) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_code`, `c_name`) VALUES
('STS1101', 'Fundamentals of Aptitude'),
('STS1102', 'Arithmetic Problem Solving'),
('STS1201', 'Introduction to Problem Solving'),
('STS1202', 'Introduction to Quantitative, Logical and Verbal Ability'),
('STS2101', 'Getting Started to Skill Enhancement'),
('STS2102', 'Enhancing Problem Solving Skills'),
('STS2201', 'Numerical Ability and Cognitive Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `sts11011`
--

CREATE TABLE `sts11011` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11011`
--

INSERT INTO `sts11011` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, 'Find pronoun in the sentence:  I have a pet dog.', 'I', 'dog', 'have', 'pet', 'A'),
(2, 'I _____ with my fingers.', 'touch', 'taste', 'hear', 'smell', 'A'),
(3, 'Rewrite the sentences, replacing the emphasized nouns with pronouns.(Billy) tossed (the football) to (his mom and dad).', ' He tossed the football to them.', ' Billy tossed it to his mom and dad.', ' He tossed it to them.', 'NONE', 'C'),
(4, 'A tree has the __________ stem of all the plants.', 'hard', 'harder', 'hardest', 'NONE', 'C'),
(5, 'The red ball is _______ than the green ball.', 'small', 'smaller', 'smallest', 'NONE', 'B'),
(6, 'Mindy saw ___________ ant crawling on the ground.', 'a', 'an', 'the', 'NONE', 'B'),
(7, 'Identify the common noun in this sentence below.The class studied English today.', ' class', ' studied', ' English', ' today', 'A'),
(8, 'Identify the word that should start with a capital letter.', ' flag', 'country', ' america', 'apple', 'C'),
(9, 'I enjoy __________ photographs of my friends.', 'take', 'took', 'taking', 'taken', 'C'),
(10, 'What is the past tense for drink?', 'drinks', 'drank', 'drinking', 'to drink', 'B');

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

-- --------------------------------------------------------

--
-- Table structure for table `sts11012leader`
--

CREATE TABLE `sts11012leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `sts11021leader`
--

CREATE TABLE `sts11021leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11021leader`
--

INSERT INTO `sts11021leader` (`id`, `reg_no`, `name`, `marks`) VALUES
(2, '19BCE1672', 'Sarthak Keshari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sts11022`
--

CREATE TABLE `sts11022` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts11022`
--

INSERT INTO `sts11022` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `sts11022leader`
--

CREATE TABLE `sts11022leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sts12021`
--

CREATE TABLE `sts12021` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts12021`
--

INSERT INTO `sts12021` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, 'Find pronoun in the sentence:  I have a pet dog.', 'I', 'dog', 'have', 'pet', 'A'),
(2, 'I                 with my fingers.', 'touch', 'taste', 'hear', 'smell', 'A'),
(3, 'Rewrite the sentences, replacing the emphasized nouns with pronouns.(Billy) tossed (the football) to (his mom and dad).', ' He tossed the football to them.', ' Billy tossed it to his mom and dad.', ' He tossed it to them.', 'NONE', 'C'),
(4, 'A tree has the                 stem of all the plants.', 'hard', 'harder', 'hardest', 'NONE', 'C'),
(5, 'The red ball is                 than the green ball.', 'small', 'smaller', 'smallest', 'NONE', 'B'),
(6, 'Mindy saw                 ant crawling on the ground.', 'a', 'an', 'the', 'NONE', 'B'),
(7, 'Identify the common noun in this sentence below.The class studied English today.', ' class', ' studied', ' English', ' today', 'A'),
(8, 'Identify the word that should start with a capital letter.', ' flag', 'country', ' america', 'apple', 'C'),
(9, 'I enjoy                 photographs of my friends.', 'take', 'took', 'taking', 'taken', 'C'),
(10, 'What is the past tense for drink?', 'drinks', 'drank', 'drinking', 'to drink', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `sts12021leader`
--

CREATE TABLE `sts12021leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sts12022`
--

CREATE TABLE `sts12022` (
  `id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sts12022`
--

INSERT INTO `sts12022` (`id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `sts12022leader`
--

CREATE TABLE `sts12022leader` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `reg_no` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gen` varchar(1) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `school` varchar(9) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `cabin` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`reg_no`, `name`, `gen`, `designation`, `school`, `email_id`, `mob_no`, `cabin`, `password`) VALUES
(615243, 'Unati Shrinivasan', 'F', 'Assisstant Professor', 'SCSE', '615243@vit.ac.in', 9089786421, 'CANT-10-2', 'Abc@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `19bce1672marklist`
--
ALTER TABLE `19bce1672marklist`
  ADD PRIMARY KEY (`datetime`);

--
-- Indexes for table `19bce1672messages`
--
ALTER TABLE `19bce1672messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `19bce1673marklist`
--
ALTER TABLE `19bce1673marklist`
  ADD PRIMARY KEY (`datetime`);

--
-- Indexes for table `19bce1673messages`
--
ALTER TABLE `19bce1673messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `615243messages`
--
ALTER TABLE `615243messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `sts11011`
--
ALTER TABLE `sts11011`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts11011leader`
--
ALTER TABLE `sts11011leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts11012`
--
ALTER TABLE `sts11012`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts11012leader`
--
ALTER TABLE `sts11012leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts11021`
--
ALTER TABLE `sts11021`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sts11021leader`
--
ALTER TABLE `sts11021leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts11022`
--
ALTER TABLE `sts11022`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sts11022leader`
--
ALTER TABLE `sts11022leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts12021`
--
ALTER TABLE `sts12021`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sts12021leader`
--
ALTER TABLE `sts12021leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts12022`
--
ALTER TABLE `sts12022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sts12022leader`
--
ALTER TABLE `sts12022leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `19bce1672messages`
--
ALTER TABLE `19bce1672messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `19bce1673messages`
--
ALTER TABLE `19bce1673messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `615243messages`
--
ALTER TABLE `615243messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sts11011`
--
ALTER TABLE `sts11011`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sts11011leader`
--
ALTER TABLE `sts11011leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sts11012`
--
ALTER TABLE `sts11012`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sts11012leader`
--
ALTER TABLE `sts11012leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sts11021leader`
--
ALTER TABLE `sts11021leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sts11022leader`
--
ALTER TABLE `sts11022leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sts12021leader`
--
ALTER TABLE `sts12021leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sts12022`
--
ALTER TABLE `sts12022`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sts12022leader`
--
ALTER TABLE `sts12022leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
