-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 05:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_kkt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `congratulations`
--

CREATE TABLE `congratulations` (
  `congratulations_id` int(11) NOT NULL,
  `img` mediumtext NOT NULL,
  `name` mediumtext NOT NULL,
  `level` mediumtext NOT NULL,
  `leftorright` int(1) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `congratulations`
--

INSERT INTO `congratulations` (`congratulations_id`, `img`, `name`, `level`, `leftorright`, `details`) VALUES
(17, '20230322182232824.jpg', 'zzzzzzzzzzzzzzz', 'bbbbbbbb', 1, 'bbbbbbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congratulations`
--
ALTER TABLE `congratulations`
  ADD PRIMARY KEY (`congratulations_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `congratulations`
--
ALTER TABLE `congratulations`
  MODIFY `congratulations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
