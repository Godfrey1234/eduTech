-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `subjCode` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `subjCode`, `doc`) VALUES
(1, 'TPG201T', 'chapter1 tpg201t.pdf'),
(2, 'TPG111T', 'TPG111T practical.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employee_records`
--

CREATE TABLE `employee_records` (
  `staffNo` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `subjCode1` varchar(255) NOT NULL,
  `subjCode2` varchar(255) NOT NULL,
  `subjCode3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_records`
--

INSERT INTO `employee_records` (`staffNo`, `name`, `surname`, `subjCode1`, `subjCode2`, `subjCode3`) VALUES
(21554, 'John', 'Ranko', 'IDC30AT', 'ISY34AT', ''),
(21664, 'sello', 'malebane', 'TPG201T', 'ISY34BT', 'TPG111T'),
(21774, 'Messi', 'Khambule', 'IDC30AT', 'TPG111T', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeID` int(11) NOT NULL,
  `subjCode` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeID`, `subjCode`, `text`) VALUES
(1, 'TPG201T', 'we will be having a class at 14h00'),
(2, 'TPG201T', 'study chapter 1 and 2 for the semester test '),
(3, 'TPG201T', 'follow this link for zoom class'),
(4, 'TPG201T', 'come and collect scripts at building 10'),
(5, 'TPG201T', 'mistake'),
(6, 'ISY34BT', 'ISY34BT is the best '),
(7, 'ISY34BT', 'come and collect scripts at building 18 240'),
(8, 'ISY34BT', 'i have uploaded a video for ERD'),
(9, 'ISY34BT', 'mistake for isy have to be deleted'),
(10, 'TPG111T', 'we will be having a class based on if statements'),
(11, 'TPG111T', 'webtest will be written on ec'),
(13, 'TPG111T', 'i have uploaded a memo for class test 1');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffNo` int(9) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `scode1` varchar(255) NOT NULL,
  `scode2` varchar(255) NOT NULL,
  `scode3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffNo`, `password`, `name`, `surname`, `scode1`, `scode2`, `scode3`) VALUES
(21664, '1234', 'sello', 'malebane', 'TPG201T', 'ISY34BT', 'TPG111T');

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `studNo` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `id` varchar(13) NOT NULL,
  `subCode1` varchar(255) NOT NULL,
  `subjCode2` varchar(255) NOT NULL,
  `subjCode3` varchar(255) NOT NULL,
  `subjCode4` varchar(255) NOT NULL,
  `subjCode5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`studNo`, `name`, `lastName`, `id`, `subCode1`, `subjCode2`, `subjCode3`, `subjCode4`, `subjCode5`) VALUES
(215546797, 'Atlegang ', 'Mabena', '9502032525124', 'TPG201T', 'ISY34BT', '', '', ''),
(216646797, 'Godfrey', 'Mabena', '9801195899085', 'TPG111T', 'ISY34AT', 'TPG201T', 'IDC30AT', ''),
(217746797, 'Karabo', 'Mokwele', '9805647851268', 'IDC30AT', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjCode` varchar(6) NOT NULL,
  `studNo` int(9) NOT NULL,
  `empNo` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `studNo` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `id` varchar(13) NOT NULL,
  `code1` varchar(255) NOT NULL,
  `code2` varchar(255) DEFAULT NULL,
  `code3` varchar(255) DEFAULT NULL,
  `code4` varchar(255) DEFAULT NULL,
  `code5` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`studNo`, `password`, `name`, `lastName`, `email`, `contact`, `id`, `code1`, `code2`, `code3`, `code4`, `code5`, `text`) VALUES
(216646797, 'good', 'Godfrey', 'Mabena', 'godfrey555mabena@gmail.com', 731664529, '9801195899085', 'TPG111T', 'ISY34AT', 'TPG201T', 'IDC30AT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `l` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`l`) VALUES
(0),
(0),
(0),
(0),
(0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_records`
--
ALTER TABLE `employee_records`
  ADD PRIMARY KEY (`staffNo`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffNo`);

--
-- Indexes for table `student_records`
--
ALTER TABLE `student_records`
  ADD PRIMARY KEY (`studNo`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjCode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`studNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
