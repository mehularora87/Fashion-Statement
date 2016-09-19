-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 07:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_statement_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothing`
--

CREATE TABLE `clothing` (
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` enum('M','F') NOT NULL,
  `type` enum('TORSO','FOOTWEAR','FULL','LOWER','HEAD','OUTFIT','OTHER') NOT NULL,
  `favcount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing`
--

INSERT INTO `clothing` (`name`, `id`, `added_by`, `date_added`, `gender`, `type`, `favcount`) VALUES
('Cool Shirt', 1, 'ME', '2016-09-19 13:03:56', 'M', 'TORSO', 0),
('Cool Shirt', 2, 'ME', '2016-09-19 13:04:24', 'M', 'TORSO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothing`
--
ALTER TABLE `clothing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
