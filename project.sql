-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 07:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bca_attendance`
--

CREATE TABLE `bca_attendance` (
  `att_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_attendance`
--

INSERT INTO `bca_attendance` (`att_id`, `id`, `date`, `attendance`) VALUES
(1, 1, '2021-09-21', 1),
(2, 2, '2021-09-21', 1),
(3, 3, '2021-09-21', 1),
(4, 4, '2021-09-21', 1),
(9, 1, '2021-11-17', 1),
(10, 2, '2021-11-17', 1),
(11, 3, '2021-11-17', 1),
(12, 4, '2021-11-17', 0),
(13, 1, '2021-11-21', 1),
(14, 2, '2021-11-21', 1),
(15, 3, '2021-11-21', 0),
(16, 4, '2021-11-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bim_attendance`
--

CREATE TABLE `bim_attendance` (
  `att_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bim_attendance`
--

INSERT INTO `bim_attendance` (`att_id`, `id`, `date`, `attendance`) VALUES
(1, 5, '2021-10-05', 1),
(2, 6, '2021-10-05', 1),
(3, 7, '2021-10-05', 1),
(4, 8, '2021-10-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `csit_attendance`
--

CREATE TABLE `csit_attendance` (
  `att_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `registration` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `location`, `gender`, `faculty`, `registration`, `username`, `password`) VALUES
(1, 'Sameer Maharjan', 'sameer@gmail.com', '9852151271', 'Lalitpur', 'MALE', 'BCA', 100, 'sameer101', '12345678'),
(2, 'Surendra Kathariya', 'suren@gmail.com', '9812551251', 'Kathmandu', 'MALE', 'BCA', 101, 'surendra101', '12345678'),
(3, 'Ranjita Maharjan', 'ranjita@gmail.com', '9841737151', 'Lalitpur', 'FEMALE', 'BCA', 102, 'ranjita100', '12345678'),
(4, 'Anjali Mali', 'anjali@gmail.com', '9812531441', 'Lalitpur', 'FEMALE', 'BCA', 103, 'anjali101', '12345678'),
(5, 'Bhuwan Paneru', 'bhuwan@gmail.com', '9767213561', 'Kathmandu', 'MALE', 'BIM', 200, 'bhuwan101', '12345678'),
(6, 'Renuka Maharjan', 'renuka@gmail.com', '9861241452', 'Lalitpur', 'FEMALE', 'BIM', 201, 'renuka101', '12345678'),
(7, 'Ashish Dangol', 'ashish@gmail.com', '9812361521', 'Kathmandu', 'MALE', 'BIM', 202, 'ashish101', '12345678'),
(8, 'Sandip Ghimire', 'sandip@gmail.com', '9712531525', 'Bhaktapur', 'MALE', 'BIM', 203, 'sandip101', '12345678'),
(9, 'Urmila Adhikari', 'urmila@gmail.com', '9712654562', 'Lalitpur', 'FEMALE', 'BSc.CSIT', 300, 'urmila101', '12345678'),
(10, 'Mission Ghimire', 'mission@gmail.com', '9812351251', 'Lalitpur', 'MALE', 'BSc.CSIT', 301, 'mission101', '12345678'),
(11, 'Binam Shrestha', 'binam@gmail.com', '9127612312', 'Bhaktapur', 'MALE', 'BSc.CSIT', 302, 'binam101', '12345678'),
(12, 'Ishan Raut', 'ishan@gmail.com', '9866124512', 'Kathmandu', 'MALE', 'BSc.CSIT', 303, 'ishan101', '12345678'),
(16, 'Ranjit Maharjan', 'ranjit101@gmail.com', '9841671237', 'Imadol', 'PLZ UPDATE', 'PLZ UPDATE', 304, 'ranjit101', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `phone`, `location`, `gender`, `citizenship`, `qualification`, `faculty`, `username`, `password`) VALUES
(1, 'Ramesh Saud', 'ramesh@gmail.com', ' 9841671237', 'Kathmandu', 'MALE', '123-456', 'Master Degree', 'BCA', 'ramesh101', '12345678'),
(2, 'Basant Chapagain', 'basanta@gmail.com', '9812512515', 'Lalitpur', 'MALE', '312-453', 'Master Degree', 'BIM', 'basanta101', '12345678'),
(3, 'Bindu Saud', 'bindu@gmail.com', '9812541253', 'Bhaktapur', 'FEMALE', '424-123', 'Master Degree', 'BSc.CSIT', 'bindu101', '12345678'),
(4, 'Sravan Ghimire', 'sravan101@gmail.com', '9854745116', 'Kathmandu', 'MALE', '789-124', 'Master Degree', 'PLZ UPDATE', 'sravan101', '12345678'),
(6, 'Admin', 'maharjansameer101@gmail.com', '9841671237', 'Imadol', 'MALE', '789-124', 'Master Degree', 'BIM', 'admin101', '12345678'),
(7, 'Test', 'maharjansameer101@gmail.com', '9841671237', 'Imadol', 'PLZ UPDATE', '123-432', 'Master Degree', 'PLZ UPDATE', 'asaaa', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca_attendance`
--
ALTER TABLE `bca_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `bim_attendance`
--
ALTER TABLE `bim_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `csit_attendance`
--
ALTER TABLE `csit_attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`registration`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bca_attendance`
--
ALTER TABLE `bca_attendance`
  MODIFY `att_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bim_attendance`
--
ALTER TABLE `bim_attendance`
  MODIFY `att_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `csit_attendance`
--
ALTER TABLE `csit_attendance`
  MODIFY `att_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
