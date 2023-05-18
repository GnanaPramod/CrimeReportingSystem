-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 12:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `gender`, `email`, `phonenumber`, `address`, `usertype`) VALUES
(1, 'Shivan', 'Nantono', 'nay', 'nay1', 'Female', 'gg', 98765, 'fghjk', 'customer'),
(7, 'tyler', 'lockwood', 'ty', 'ty123', 'Male', 'tyler@gmail.com', 9876588, 'mystic falls', 'customer'),
(8, 'fhjkjh', 'dfgh', 'cghj', 'dfghjkjh', 'Male', 'fghojhg@fghg', 0, 'sdfyuioiuyt', 'customer'),
(9, 'nay', 'nay', 'bat', 'bat1', 'Male', 'bat@gmail.com', 798441003, 'na', 'admin'),
(10, 'Hannah', 'Namara', 'Hannah', 'hannah', 'Female', 'han@gmail.com', 798441003, 'Qwetu Wilson View', 'customer'),
(11, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(12, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(13, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(14, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(15, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(16, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(17, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(18, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(19, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(20, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(21, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(22, 'S', 'drucy', 'dru', 'dru', 'Female', 'dru@gmail.com', 798441003, 'ghhh', 'customer'),
(23, 'Sidona', 'Kahika', 'sido', 'sido', 'Female', 'sido@gmail.com', 115075919, 'Qwetu Wilson View', 'customer'),
(24, 'Andrew', 'Njenga', 'drew', 'drew', 'Male', 'drew@gmail.com', 798441113, 'Nakuru', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(3) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `crime`, `county`, `location`, `date`, `time`, `info`) VALUES
(1, 'Theft', 'Nairobi', 'Hurlinghum', '2022-07-12', '14:52:00.000', '2 boys are stealing products from shops'),
(2, 'Possession of Drugs', 'Nakuru', 'Solai', '2022-07-06', '18:56:00.000', '3 men in a matatu'),
(3, 'Trespassing', 'Mombasa', 'Kivu Hotel', '2022-01-12', '10:26:00.000', 'One person was trespassing the hotel and causing t'),
(4, 'Kidnapping', 'Nairobi', 'Langata', '2022-07-11', '11:30:00.000', 'Two men seen with 10 year old girl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
