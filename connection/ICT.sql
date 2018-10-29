-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2018 at 12:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ICT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`ID`, `Name`, `Email`, `Message`) VALUES
(1, 'Byron Otieno Odunga', 'Byronbrian2@gmail.com', 'Hello there, its okay');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `FirstName`, `LastName`, `Username`, `Email`, `Password`) VALUES
(1, 'Byron', 'Odunga', 'admin90', 'Byronbrian2@gmail.com', '123456'),
(2, 'Otieno', 'Jared', 'joty', 'joty@gmail.com', 'joty1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
