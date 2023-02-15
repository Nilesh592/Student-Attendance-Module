-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 11:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Attendancemodule`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `att_time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `roll`, `attend`, `att_time`) VALUES
(1, 1, 'absent', '2022-07-08'),
(2, 2, 'present', '2022-07-08'),
(3, 3, 'absent', '2022-07-08'),
(4, 4, 'absent', '2022-07-08'),
(5, 5, 'present', '2022-07-08'),
(6, 6, 'present', '2022-07-08'),
(7, 7, 'absent', '2022-07-08'),
(8, 8, 'absent', '2022-07-08'),
(9, 9, 'present', '2022-07-08'),
(10, 10, 'present', '2022-07-08'),
(11, 11, 'absent', '2022-07-08'),
(12, 12, 'absent', '2022-07-08'),
(13, 13, 'present', '2022-07-08'),
(14, 14, 'absent', '2022-07-08'),
(15, 15, 'present', '2022-07-08'),
(16, 1, 'absent', '2022-07-09'),
(17, 2, 'present', '2022-07-09'),
(18, 3, 'absent', '2022-07-09'),
(19, 4, 'absent', '2022-07-09'),
(20, 5, 'present', '2022-07-09'),
(21, 6, 'present', '2022-07-09'),
(22, 1, 'absent', '2022-07-10'),
(23, 2, 'absent', '2022-07-10'),
(24, 3, 'present', '2022-07-10'),
(25, 4, 'present', '2022-07-10'),
(26, 5, 'absent', '2022-07-10'),
(27, 1, 'absent', '2022-07-11'),
(28, 2, 'present', '2022-07-11'),
(29, 3, 'absent', '2022-07-11'),
(30, 4, 'present', '2022-07-11'),
(31, 5, 'absent', '2022-07-11'),
(32, 6, 'present', '2022-07-11'),
(33, 1, 'present', '2022-07-12'),
(34, 2, 'present', '2022-07-12'),
(35, 3, 'absent', '2022-07-12'),
(36, 4, 'absent', '2022-07-12'),
(37, 5, 'absent', '2022-07-12'),
(38, 6, 'present', '2022-07-12'),
(39, 7, 'absent', '2022-07-12'),
(40, 8, 'absent', '2022-07-12'),
(41, 9, 'absent', '2022-07-12'),
(42, 10, 'absent', '2022-07-12'),
(43, 11, 'absent', '2022-07-12'),
(44, 12, 'present', '2022-07-12'),
(45, 13, 'absent', '2022-07-12'),
(46, 14, 'absent', '2022-07-12'),
(47, 15, 'present', '2022-07-12'),
(48, 1, 'present', '2022-07-13'),
(49, 2, 'present', '2022-07-13'),
(50, 3, 'absent', '2022-07-13'),
(51, 4, 'absent', '2022-07-13'),
(52, 5, 'present', '2022-07-13'),
(53, 6, 'absent', '2022-07-13'),
(54, 7, 'absent', '2022-07-13'),
(55, 8, 'present', '2022-07-13'),
(56, 9, 'absent', '2022-07-13'),
(57, 10, 'present', '2022-07-13'),
(58, 11, 'present', '2022-07-13'),
(59, 12, 'absent', '2022-07-13'),
(60, 13, 'absent', '2022-07-13'),
(61, 14, 'absent', '2022-07-13'),
(62, 15, 'present', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`, `branch`, `division`, `city`) VALUES
(1, 'Pragati Gopal Mahajan', 1, 'COMPUTER', 'B', 'mumbai'),
(2, 'Tejashree Arun Kate', 2, 'Computer', 'A', 'raigad'),
(3, 'Deepak Vishvkarma', 3, 'Electronics', 'A', 'mumbai'),
(4, 'Sandesh Ghegadmal', 4, 'Mechanical', 'B', 'sangli'),
(5, 'Shrushti Raman Girap', 5, 'Computer', 'A', 'mumbai'),
(6, 'Suchita Boga', 6, 'ELECTRONICS', 'B', 'pune'),
(7, 'Kunal Nirbhavne', 7, 'MECHANICAL', 'B', 'mumbai'),
(8, 'naveed ahmed', 8, 'MECHANICAL', 'A', 'kalyan'),
(9, 'Vaishnavi Amage', 9, 'COMPUTER', 'A', 'mumbai'),
(10, 'Om Mayekar', 10, 'Mechanical', 'B', 'mumbai'),
(11, 'Viraj Bhor', 11, 'COMPUTER', 'B', 'navi mumbai'),
(12, 'Krishna Chavan', 12, 'ELECTRONICS', 'A', 'mumbai'),
(13, 'Akshay Shinde', 13, 'EXTC', 'B', 'aurangabad'),
(14, 'Sudhir Tripati', 14, 'MECHATRONICS', 'A', 'mumbai'),
(15, 'Rutuja Thakur', 15, 'COMPUTER', 'B', 'nashik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
