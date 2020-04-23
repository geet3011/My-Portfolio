-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'geet', 'geetkorde@gmail.com', '', 'hii'),
(3, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(4, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(5, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(6, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(7, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(8, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(9, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(10, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(11, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(12, 'geet', 'geetkorde@gmail.com', 'hii', 'hii'),
(13, 'geet', 'geetkorde@gmail.com', 'hii', 'hii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
