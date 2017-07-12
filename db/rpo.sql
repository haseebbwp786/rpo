-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 09:10 AM
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
(2, 'revenue'),
(3, 'haseeb'),
(4, 'yasir'),
(5, 'arslan'),
(6, 'nauman'),
(7, ''),
(8, 'Haseeb aslam'),
(9, 'tamim'),
(10, 'bhutta');

-- --------------------------------------------------------

--
-- Table structure for table `diry`
--

CREATE TABLE `diry` (
  `id` int(10) NOT NULL,
  `docno` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `send` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diry`
--

INSERT INTO `diry` (`id`, `docno`, `date`, `title`, `send`) VALUES
(1, 'abc', '2011-08-19 00:00:00', 'test', 'DCO'),
(2, '', '2011-08-19 00:00:00', '', 'DCO'),
(3, '', '2011-08-19 00:00:00', '', 'TMA'),
(4, '', '2011-08-19 00:00:00', '', 'DCO'),
(5, '', '2011-08-19 00:00:00', 'Try out this example by putting this code into add_employee.php, this will take input using HTML Form and then it will create records into database.', 'DCO'),
(6, 'abc', '2011-08-19 00:00:00', '', 'DCO'),
(7, '', '2011-08-19 00:00:00', '', 'dco'),
(8, '', '2011-08-19 00:00:00', '', 'dco'),
(9, 'fda', '2011-08-19 00:00:00', 'dad', 'haseeb'),
(10, 'fda', '2011-08-19 00:00:00', 'dad', 'yasir'),
(11, '', '2011-08-19 00:00:00', '', 'dco'),
(12, 'fda', '2017-07-11 00:00:00', 'dad', 'revenue'),
(13, '', '2011-08-19 00:00:00', '', 'dco'),
(14, '', '2011-08-19 00:00:00', '', 'dco'),
(15, 'jkdfak', '2011-08-19 00:00:00', 'dfadf', 'yasir');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(10) NOT NULL,
  `docno` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `received` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `docno`, `date`, `title`, `received`) VALUES
(1, '0', '0000-00-00 00:00:00', '0', '0'),
(2, 'jkdfak', '2011-08-19 00:00:00', 'dfadf', 'revenue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_dir`
--
ALTER TABLE `dept_dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diry`
--
ALTER TABLE `diry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_dir`
--
ALTER TABLE `dept_dir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `diry`
--
ALTER TABLE `diry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
