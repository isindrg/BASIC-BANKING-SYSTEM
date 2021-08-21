-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 02:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `department`, `email`) VALUES
(1, 'Emma', 'john', 'Designer', 'emma@gmail.com'),
(2, 'grummisadfgfgh', 'Smith', 'Programming', 'grumm@gmail.com'),
(3, 'Dave', 'traversy', 'Programming', 'Dave@yahoo.com'),
(4, 'Itta', 'Jones', 'It', 'Ittajo@gmail.com'),
(5, 'Halona', 'James', 'Admin', 'halonaja@gmail.com'),
(6, 'phiella', 'lobar', 'marketing', 'phela3@gmail.com'),
(7, 'Madrine', 'Stack', 'Hs', 'mar63jo@gmail.com'),
(13, 'Arthin', 'Lame', 'Admin', 'ar63jad@gmail.com'),
(14, 'Heather', 'Smith', 'Programming', 'hsmith@gmail.com'),
(37, 'Heather', 'Smith', 'Design', ''),
(38, 'Heather', 'Smith', 'Design', ''),
(39, 'Heather', 'Smith', 'Design', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
