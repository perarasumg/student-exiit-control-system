-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 12:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sietk_permission`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `course_name` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`course_name`, `year`, `password`) VALUES
('MCA', 2, 123456),
('MCA', 1, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `security_password` varchar(10) NOT NULL,
  `security` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_password`, `security`) VALUES
('654321', 'security');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` varchar(13) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  `year` int(2) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `student_name`, `course`, `year`, `photo`, `permission`) VALUES
('21F61F0001', 'VELAPPAGARI BHANUPRIYA', 'MCA', 2, 'VELAPPAGARI BHANUPRIYA.jpg', 1),
('21F61F0002', 'JAMPANA BHARGAV SIVA CHARAN', 'MCA', 2, 'JAMPANA BHARGAV SIVA CHARAN.jp', 1),
('21F61F0003', 'KUNDAVARI CHANDRA SEKHAR', 'MCA', 2, 'KUNDAVARI CHANDRA SEKHAR.jpg', 1),
('21F61F0004', 'M E CHANDRA SEKAR', 'MCA', 2, 'M E CHANDRA SEKAR.jpg', 1),
('21F61F0005', 'E. CHENCHUPAVAN', 'MCA', 2, 'E. CHENCHUPAVAN.jpg', 1),
('21F61F0006', 'A A DEVARAJ', 'MCA', 2, 'A A DEVARAJ.jpg', 0),
('21F61F0007', 'K DHAMU ACHARI', 'MCA', 2, 'K DHAMU ACHARI.jpg', 0),
('21F61F0008', 'KALIMISETTI DINESH', 'MCA', 2, 'KALIMISETTI DINESH.jpg', 1),
('21F61F0009', 'VAJJA GEETHA VANI', 'MCA', 2, 'VAJJA GEETHA VANI.jpg', 0),
('21F61F0010', 'P. GNANAPRIYA', 'MCA', 2, 'P. GNANAPRIYA.jpg', 0),
('21F61F0011', 'K.T.GOMATHI', 'MCA', 2, 'K.T.GOMATHI.jpg', 0),
('21F61F0012', 'BATHALA GOVARDHAN', 'MCA', 2, 'BATHALA GOVARDHAN', 0),
('21F61F0013', 'THUMBURU GOVINDARAJULU', 'MCA', 2, 'THUMBURU GOVINDARAJULU.jpg', 0),
('21F61F0014', 'KAMISETTY GOWTHAMI', 'MCA', 2, 'KAMISETTY GOWTHAMI.jpg', 0),
('22F61F0005', 'DAMARCHERLA CHANDU', 'MCA', 1, 'DAMARCHERLA CHANDU.jpg', 0),
('22F61F0007', 'P.DEENA', 'MCA', 1, 'P.DEENA.jpg', 0),
('22F61F0011', 'AVVARU GIREESH KUMAR', 'MCA', 1, 'AVVARU GIREESH KUMAR.jpg', 0),
('22F61F0013', 'KADIRI GURAVAIAH', 'MCA', 1, 'KADIRI GURAVAIAH.jpg', 0),
('22F61F0018', 'M KARTHIK', 'MCA', 1, 'M KARTHIK.jpg', 0),
('22F61F0020', 'J KIRAN KUMAR', 'MCA', 1, 'J KIRAN KUMAR.jpg', 0),
('22F61F0021', 'SERKHAD KISHORE KUMAR', 'MCA', 1, 'SERKHAD KISHORE KUMAR.jpg', 0),
('22F61F0030', 'R NAVEEN BABU', 'MCA', 1, 'R NAVEEN BABU.jpg', 0),
('22F61F0032', 'P C PALANI', 'MCA', 1, 'P C PALANI.jpg', 0),
('22F61F0033', 'M G PERARASU', 'MCA', 1, 'M G PERARASU.jpg', 0),
('22F61F0035', 'BANDI PRAVEEN KUMAR', 'MCA', 1, 'BANDI PRAVEEN KUMAR.jpg', 0),
('22F61F0049', 'C UDAYKIRAN', 'MCA', 1, 'C UDAYKIRAN.jpg', 0),
('22F61F0059', 'PANKAJ KUMAR', 'MCA', 1, 'PANKAJ KUMAR.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
