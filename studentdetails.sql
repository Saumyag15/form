-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 03:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `parentName` varchar(50) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `dob` date NOT NULL,
  `school` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `studentName`, `parentName`, `gender`, `dob`, `school`, `class`, `section`) VALUES
(1, 'Saumya Gupta', 'Tarak Nath Gupta', 'F', '1999-12-15', 'City Montessori School', '10', 'A'),
(3, 'Saumya Gupta', 'Tarak Nath Gupta', 'F', '1999-12-15', 'The Awadh School', '12', 'A'),
(4, 'Mansi Gupta', 'Tarak Nath Gupta', 'F', '1997-01-29', 'City Montessori School', '12', 'B'),
(5, 'Tejaswa Gupta', 'Tarak Nath Gupta', 'M', '2003-01-26', 'Seth M.R. Jaipuria School', '12', 'B'),
(6, 'Tejaswa Gupta', 'Tarak Nath Gupta', 'M', '2003-01-26', 'Seth M.R. Jaipuria School', '10', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
