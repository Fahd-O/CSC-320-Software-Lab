-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 17, 2022 at 02:28 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Terbiyah CBT.`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--
-- Creation: Nov 15, 2022 at 05:16 PM
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) DEFAULT '0',
  `choice_text` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Tells date and time of data entry into database.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice_text`, `TimeStamp`) VALUES
(1, 1, 1, 'Computer', '2022-11-15 17:16:24'),
(2, 1, 0, 'Refrigerator', '2022-11-15 17:16:24'),
(3, 1, 0, 'Mirror', '2022-11-15 17:16:24'),
(4, 1, 0, 'Living Thing', '2022-11-15 17:16:24'),
(5, 2, 1, 'software', '2022-11-15 17:16:24'),
(6, 2, 0, 'Windows', '2022-11-15 17:16:24'),
(7, 2, 0, 'Light', '2022-11-15 17:16:24'),
(8, 2, 0, 'Linux', '2022-11-15 17:16:24'),
(9, 3, 0, 'world wide word', '2022-11-15 17:16:24'),
(10, 3, 1, 'world wide web', '2022-11-15 17:16:24'),
(11, 3, 0, 'word widing works', '2022-11-15 17:16:24'),
(12, 3, 0, 'world web wide', '2022-11-15 17:16:24'),
(13, 4, 0, 'Uniform Research Linking', '2022-11-15 17:16:24'),
(14, 4, 1, 'Universal Resource Locator', '2022-11-15 17:16:24'),
(15, 4, 0, 'User Research Link', '2022-11-15 17:16:24'),
(16, 4, 0, 'UnRestricted Loading', '2022-11-15 17:16:24'),
(17, 5, 0, 'Mouse', '2022-11-15 17:16:24'),
(18, 5, 0, 'Arrow', '2022-11-15 17:16:24'),
(19, 5, 0, 'Hand', '2022-11-15 17:16:24'),
(20, 5, 1, 'Cursor', '2022-11-15 17:16:24'),
(41, 6, 0, 'Socket', '2022-11-15 17:16:24'),
(42, 6, 1, 'Motherboard', '2022-11-15 17:16:24'),
(43, 6, 0, 'White Board', '2022-11-15 17:16:24'),
(44, 6, 0, 'Fatherboard', '2022-11-15 17:16:24'),
(45, 7, 0, 'Application', '2022-11-15 17:16:24'),
(46, 7, 1, 'Hardware', '2022-11-15 17:16:24'),
(47, 7, 0, 'Code', '2022-11-15 17:16:24'),
(48, 7, 0, 'Software', '2022-11-15 17:16:24'),
(49, 8, 0, 'Solar Panel', '2022-11-15 17:16:24'),
(50, 8, 0, 'Food', '2022-11-15 17:16:24'),
(51, 8, 1, 'Power Supply', '2022-11-15 17:16:24'),
(52, 8, 0, 'Internet', '2022-11-15 17:16:24'),
(53, 9, 0, 'A Website', '2022-11-15 17:16:24'),
(54, 9, 0, 'A Word Processing App', '2022-11-15 17:16:24'),
(55, 9, 1, 'A University Matriculation Program', '2022-11-15 17:16:24'),
(56, 9, 0, 'Road Traffic Light', '2022-11-15 17:16:24'),
(57, 10, 0, 'A Keyboard, one may even be right in front of you', '2022-11-15 17:16:24'),
(58, 10, 0, 'A mouse, you may even be holding one right now', '2022-11-15 17:16:24'),
(59, 10, 1, 'This screen you are looking at', '2022-11-15 17:16:24'),
(60, 10, 0, 'A Scanner', '2022-11-15 17:16:24'),
(61, 11, 1, 'Volatile', '2022-11-15 17:16:24'),
(62, 11, 0, 'Super', '2022-11-15 17:16:24'),
(63, 11, 0, 'Controller', '2022-11-15 17:16:24'),
(64, 11, 0, 'Loser', '2022-11-15 17:16:24'),
(65, 12, 1, 'True', '2022-11-15 17:16:24'),
(66, 12, 0, 'False', '2022-11-15 17:16:24'),
(67, 13, 0, 'Ram, Ram naw, you know, the normal Ram that we normally eat', '2022-11-15 17:16:24'),
(68, 13, 0, 'Rice And Meat', '2022-11-15 17:16:24'),
(69, 13, 1, 'Random Access Memory', '2022-11-15 17:16:24'),
(70, 13, 0, 'Read A Memory', '2022-11-15 17:16:24'),
(71, 14, 0, 'Hardware and Software', '2022-11-15 17:16:24'),
(72, 14, 1, 'CLI and GUI', '2022-11-15 17:16:24'),
(73, 14, 0, 'Keyboard and mouse', '2022-11-15 17:16:24'),
(74, 14, 0, 'Computer and User', '2022-11-15 17:16:24'),
(75, 15, 0, 'Click', '2022-11-15 17:16:24'),
(76, 15, 0, 'Command Link', '2022-11-15 17:16:24'),
(77, 15, 1, 'Command Line Interface', '2022-11-15 17:16:24'),
(78, 15, 0, 'Computer Layer Input', '2022-11-15 17:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
-- Creation: Nov 15, 2022 at 05:15 PM
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `que_text` text NOT NULL,
  `TimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `que_text`, `TimeStamp`) VALUES
(1, ' A ________ is an electronic device that accepts data as input, stores data, processes this data based on user defined rules and gives out information as output', '2022-11-15 18:15:30'),
(2, 'The ________ components of a computer system are the data and the computer programs.', '2022-11-15 18:15:30'),
(3, 'When we opens a website on the internet, we see \"WWW.\" in the Website address. What is the full meaning of \"WWW\" ?\r\n', '2022-11-15 18:15:30'),
(4, 'In internet terminology, \"URL\" stands for ________', '2022-11-15 18:15:30'),
(5, 'The arrow like symbol on the computer screen used for pointing, clicking, selecting etc... is called the ?', '2022-11-15 18:15:30'),
(6, 'Many of the interior hardware components of a computer are connected to the main circuit board, called the ___________', '2022-11-15 18:15:30'),
(7, 'The ________ components of a computer system are the physical, electronic and mechanical parts we can see and touch.', '2022-11-15 18:15:30'),
(8, 'The ____________ supplies power for most of the components of a desktop computer system', '2022-11-15 18:15:30'),
(9, 'These are examples of Programming applications except ________', '2022-11-15 18:15:30'),
(10, 'These are examples of input devices, except ________', '2022-11-15 18:15:30'),
(11, 'Main memory is sometimes called ________ because it looses its information when power is removed.', '2022-11-15 18:15:30'),
(12, 'Main memory is where programs and data are kept when the processor is actively using them. When programs and data become active, they are copied from secondary memory into main memory where the processor can interact with them. A copy remains in secondary memory.', '2022-11-15 18:15:30'),
(13, 'Main memory is sometimes called RAM. RAM stands for ___________', '2022-11-15 18:15:30'),
(14, 'Operating Systems can be accessed through two modes: ________ and _________', '2022-11-15 18:15:30'),
(15, 'In Operating System terminology, CLI stands for __________', '2022-11-15 18:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `Registered_Students`
--
-- Creation: Nov 15, 2022 at 05:14 PM
-- Last update: Nov 16, 2022 at 12:52 PM
--

CREATE TABLE `Registered_Students` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `matNoUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Tells date and time of data entry into database.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This is where registered user details are stored.';

--
-- Dumping data for table `Registered_Students`
--

INSERT INTO `Registered_Students` (`idUsers`, `uidUsers`, `matNoUsers`, `emailUsers`, `pwdUsers`, `TimeStamp`) VALUES
(1, 'Ogunnaike Abiola Fahad', 'CSC/2018/1114', 'realabiolafahad@gmail.com', '$2y$10$ymQOatl7h6Z09cvLLFNjneMlym6qN6mIvSdb7A2IPNnXbqbthNEfC', '2022-11-16 10:49:05'),
(2, 'olayiwola olaniyi', 'csc/2018/1137', 'realabiolafahad@gmail.com', '$2y$10$o.uF.fkQp8er.DesgZFC3O4ZdH0AyMGrvlXpb4LHFDerFbv0LqOPy', '2022-11-16 12:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `Registered_Students`
--
ALTER TABLE `Registered_Students`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `Registered_Students`
--
ALTER TABLE `Registered_Students`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
