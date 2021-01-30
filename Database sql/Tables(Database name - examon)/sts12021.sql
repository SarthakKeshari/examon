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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sts12021`
--
ALTER TABLE `sts12021`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
