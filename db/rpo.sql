-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 07:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_dir`
--

CREATE TABLE `dept_dir` (
  `id` int(10) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_dir`
--

INSERT INTO `dept_dir` (`id`, `list`) VALUES
(1, 'dco'),
(2, 'revenue');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(10) NOT NULL,
  `docno` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `send` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `docno`, `date`, `title`, `send`) VALUES
(1, 'abc', '2011-08-19', 'test', 'DCO'),
(2, '', '2011-08-19', '', 'DCO'),
(3, '', '2011-08-19', '', 'TMA'),
(4, '', '2011-08-19', '', 'DCO'),
(5, '', '2011-08-19', 'Try out this example by putting this code into add_employee.php, this will take input using HTML Form and then it will create records into database.', 'DCO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_dir`
--
ALTER TABLE `dept_dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_dir`
--
ALTER TABLE `dept_dir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
