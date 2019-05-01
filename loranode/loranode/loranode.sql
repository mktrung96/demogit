-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2019 at 07:04 PM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loranode`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `temp` float NOT NULL,
  `humi` float NOT NULL,
  `co` float NOT NULL,
  `co2` float DEFAULT NULL,
  `ethanol` float DEFAULT NULL,
  `toluene` float DEFAULT NULL,
  `acetone` float DEFAULT NULL,
  `time_record` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `temp`, `humi`, `co`, `co2`, `ethanol`, `toluene`, `acetone`, `time_record`) VALUES
(1, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(2, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(3, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(4, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(5, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(6, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(7, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01'),
(8, 30, 89.55, 7.85338, 0.091055, 0.039727, 0.030564, 15.5644, '2019-04-22 00:00:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
