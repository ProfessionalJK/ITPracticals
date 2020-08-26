-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2018 at 01:28 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `id6741892_eexam`
--
CREATE DATABASE IF NOT EXISTS `id6741892_eexam` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6741892_eexam`;

-- --------------------------------------------------------

--
-- Table structure for table `curriculam`
--

CREATE TABLE `curriculam` (
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subjects` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curriculam`
--

INSERT INTO `curriculam` (`semester`, `branch`, `subjects`) VALUES
('V', 'Information Technology Engineering', 'MEP');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `test_id` int(10) NOT NULL,
  `question_no` int(10) NOT NULL,
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`test_id`, `question_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 1, 'Who is the prime minister of India?', 'Narendra Modi', 'Rahul Gandhi', 'Arvind Kejrival', 'Mamta Banerjee', 'Narendra Modi'),
(2, 1, 'What is SOAP stand for?', 'Simple Access Protocol', 'Simple Object Access Protocol', 'Simple', 'Object', 'Simple Object Access Protocol'),
(3, 1, 'Which of the following is a programming language?', 'A', 'B', 'C', 'D', 'C'),
(4, 0, 'full form of html', 'hypertext text markup language', 'hyper', 'text', 'markup', 'hypertext text markup language');

-- --------------------------------------------------------

--
-- Table structure for table `question_limit`
--

CREATE TABLE `question_limit` (
  `test_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `limit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_limit`
--

INSERT INTO `question_limit` (`test_name`, `limit`) VALUES
('Test 1', 1),
('Test 2', 1),
('Test 1', 1),
('Test 3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `stud_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `test_id` int(10) NOT NULL,
  `marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`stud_name`, `test_id`, `marks`) VALUES
('iamjrkoo6', 3, 1),
('iamjrkoo6', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reg_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `dob`, `gender`, `address`, `reg_no`, `branch`, `class`, `email`, `mob_no`, `username`, `password`) VALUES
('Sid', '2018-10-28', 'M', 'Sawantwadi', 'Gaag', 'Electrical Engineering', 'SE', 'snehasawant140@gmail.com', '8087325232', 'Ccc', '1234'),
('Jawwad Kazi', '1998-09-06', 'M', 'At & Post - Sagave', 'T-16-0020', 'Information Technology Engineering', 'TE', 'jawadkazi06@gmail.com', '8390506325', 'iamjrkoo6', '6998'),
('sonali ghogale', '1998-10-27', 'F', 'at/post-ratnagiri', 'T-16-0212', 'Information Technology Engineering', 'TE', 'ghogalesonali@gmail.com', '8805918152', 'sonali', 'sonali1234'),
('Gunjan', '2019-10-25', 'M', 'Ratnagiri', 'T160080', 'Information Technology Engineering', 'TE', 'kiratkargunjan33@gmail.com', '7350020584', 'gkiratkar', 'gkiratkar');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mob_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `dob`, `gender`, `address`, `department`, `email`, `mob_no`, `username`, `password`) VALUES
('sonali ghogale', '1998-10-27', 'F', 'at/post-ratnagiri', 'Information Technology Engineering', 'ghogalesonali@gmail.com', '8805918152', 'sonali', 'sonali1234'),
('Jawwad Kazi', '1998-09-06', 'M', 'At & Post - Sagave', 'Information Technology Engineering', 'jawadkazi06@gmail.com', '8390506325', 'iamjrkoo6', '6998'),
('Gunjan Kiratkar', '1997-12-06', 'M', 'Dapoli', 'Information Technology Engineering', 'kiratkargunjan33@gmail.com', '7350020584', 'gkiratkar', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `test_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_name`, `creator`, `branch`, `semester`, `subject`) VALUES
(1, 'Test', 'iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP'),
(2, 'Test 2', 'iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP'),
(3, 'Test 1', 'iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP'),
(4, 'Test 3', 'iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP');

-- --------------------------------------------------------

--
-- Table structure for table `user_response`
--

CREATE TABLE `user_response` (
  `test_id` int(10) NOT NULL,
  `stud_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `q_no` int(10) NOT NULL,
  `question` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_ans` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_response`
--

INSERT INTO `user_response` (`test_id`, `stud_name`, `q_no`, `question`, `user_ans`) VALUES
(3, 'iamjrkoo6', 1, 'Which of the following is a programming language?', 'C'),
(2, 'iamjrkoo6', 1, 'What is SOAP stand for?', 'Simple Object Access Protocol');

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `stud_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `test_id` int(10) NOT NULL,
  `test_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `max_mark` int(10) NOT NULL,
  `mark_obtained` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_result`
--

INSERT INTO `user_result` (`stud_name`, `branch`, `semester`, `subject`, `test_id`, `test_name`, `max_mark`, `mark_obtained`) VALUES
('iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP', 3, 'Test 1', 1, 1),
('iamjrkoo6', 'Information Technology Engineering', 'V', 'MEP', 2, 'Test 2', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

