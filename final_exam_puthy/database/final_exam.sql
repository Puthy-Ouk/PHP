-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 06:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_exam`
--
CREATE DATABASE final_exam;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--
USE final_exam;
CREATE TABLE `tbl_student`(
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stu_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `stu_gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stu_age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_id`, `stu_name`, `stu_email`, `stu_gender`, `stu_age`) VALUES
(1, 'Rith NHEL', 'rith.nhel@gmail.com', 'Male', 23),
(2, 'borith', 'borith@gmail.com', 'Male', 19),
(3, 'Puthea', 'puthea@gmail.com', 'Female', 20),
(4, 'Darom', 'darom@gmail.com', 'Male', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
