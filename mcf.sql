-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 11:21 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcf`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `cohort` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `cohort`, `gender`, `img`) VALUES
(19, 'Welfare minister', 'NELSON', 'OWINY', '5th Cohort', 'Female', 'upload/owiny.jpeg'),
(26, 'Council Rep', 'AMBROSE', 'ONAPA', '5th Cohort', 'Male', 'upload/onopa.jpeg'),
(31, 'Deputy finance', 'Test', 'user', '5th Cohort', 'Female', 'upload/BIRUNGI.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'eteku', 'shamos@2021', 'moses', 'eteku'),
(2, 'admin@gmail.com', 'mysaviour', 'shamos', 'technologies');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `cohort` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(12, '18', '8'),
(13, '15', '8'),
(14, '', '8'),
(15, '', '8'),
(16, '28', '8'),
(17, '30', '8'),
(18, '27', '8'),
(19, '23', '8'),
(20, '19', '8'),
(21, '16', '8'),
(22, '21', '8'),
(23, '', '8'),
(24, '22', '8'),
(25, '', '8'),
(26, '18', ''),
(27, '15', ''),
(28, '', ''),
(29, '', ''),
(30, '28', ''),
(31, '30', ''),
(32, '27', ''),
(33, '23', ''),
(34, '19', ''),
(35, '16', ''),
(36, '21', ''),
(37, '', ''),
(38, '22', ''),
(39, '', ''),
(40, '25', ''),
(41, '29', ''),
(42, '', ''),
(43, '', ''),
(44, '28', ''),
(45, '26', ''),
(46, '27', ''),
(47, '23', ''),
(48, '19', ''),
(49, '16', ''),
(50, '21', ''),
(51, '', ''),
(52, '22', ''),
(53, '', ''),
(54, '18', '122'),
(55, '15', '122'),
(56, '', '122'),
(57, '', '122'),
(58, '28', '122'),
(59, '26', '122'),
(60, '27', '122'),
(61, '23', '122'),
(62, '19', '122'),
(63, '16', '122'),
(64, '21', '122'),
(65, '', '122'),
(66, '22', '122'),
(67, '', '122'),
(68, '18', ''),
(69, '15', ''),
(70, '', ''),
(71, '', ''),
(72, '28', ''),
(73, '26', ''),
(74, '27', ''),
(75, '23', ''),
(76, '19', ''),
(77, '16', ''),
(78, '21', ''),
(79, '', ''),
(80, '22', ''),
(81, '', ''),
(82, '18', '107'),
(83, '15', '107'),
(84, '', '107'),
(85, '', '107'),
(86, '28', '107'),
(87, '26', '107'),
(88, '27', '107'),
(89, '23', '107'),
(90, '19', '107'),
(91, '16', '107'),
(92, '21', '107'),
(93, '', '107'),
(94, '22', '107'),
(95, '', '107'),
(96, '', ''),
(97, '', ''),
(98, '', ''),
(99, '', ''),
(100, '', ''),
(101, '', ''),
(102, '', ''),
(103, '', ''),
(104, '', ''),
(105, '', ''),
(106, '', ''),
(107, '', ''),
(108, '', ''),
(109, '', ''),
(110, '', ''),
(111, '', ''),
(112, '', ''),
(113, '', ''),
(114, '', ''),
(115, '', ''),
(116, '', ''),
(117, '', ''),
(118, '', ''),
(119, '', ''),
(120, '', ''),
(121, '', ''),
(122, '22', ''),
(123, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
