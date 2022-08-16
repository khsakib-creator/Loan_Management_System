-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 05:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lm_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `l_m`
--

CREATE TABLE `l_m` (
  `n` varchar(100) DEFAULT NULL,
  `e` varchar(20) DEFAULT NULL,
  `contact` int(20) NOT NULL,
  `a` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l_m`
--

INSERT INTO `l_m` (`n`, `e`, `contact`, `a`) VALUES
('egzf', 'qag', 0, 'sgaa'),
('egzf', 'qag', 16, 'sgaa'),
('sakib', 'AaAarg', 6545, 'asdsadf'),
('FN', 'AaAargAFS', 65455456, 'asdsadfasf');

-- --------------------------------------------------------

--
-- Table structure for table `l_p`
--

CREATE TABLE `l_p` (
  `Id` int(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `name_c` varchar(100) NOT NULL,
  `account_no` varchar(11) NOT NULL,
  `late_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `l_p`
--

INSERT INTO `l_p` (`Id`, `contact`, `payment`, `interest`, `name_c`, `account_no`, `late_fee`) VALUES
(1, 0, '5000', '12%', 'habib', '5236', 120),
(0, 0, '', '', '', '', 0),
(0, 0, '', '', '', '', 0),
(0, 0, '', '', '', '', 0),
(19303043, 0, '50000', '12%', 'MD SOHEL RANA', '364756', 6526),
(0, 0, '', '', '', '', 0),
(0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `C_ID` int(11) NOT NULL,
  `C_name` varchar(11) NOT NULL,
  `C_R` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`C_ID`, `C_name`, `C_R`) VALUES
(433, 'DBMS', 4),
(434, 'Lab', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `l_m`
--
ALTER TABLE `l_m`
  ADD PRIMARY KEY (`contact`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
