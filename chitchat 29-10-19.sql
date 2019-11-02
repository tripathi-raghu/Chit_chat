-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatdata`
--

CREATE TABLE `chatdata` (
  `msg_number` int(120) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message_text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatdata`
--

INSERT INTO `chatdata` (`msg_number`, `sender`, `receiver`, `message_text`, `date`) VALUES
(0, '1', 2, 'asdsad', '2019-10-23 03:18:00'),
(1, '2', 1, 'hi buddy', '2019-10-29 05:00:00'),
(3, '2', 1, 'msg2', '2019-10-29 00:00:00'),
(4, '1', 2, 'msg1', '2019-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(122) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `address1`, `address2`, `city`, `state`) VALUES
(1, 'Jitendra', 'Prajapati', 'root@df.cv', 'viocet30sdf', 'Shiv Ji ka khera,Eaklsingha,th-bhanai', 'bijainagar', 'bijainagar', 'Gujarat'),
(2, 'raghav', 'tripathi', 'test@test.com', 'test', 'test', 'test', 'terst', 'Jammu and Kashmir'),
(3, 'dipti', 'mishra', 'diptimoshro@123.COM', '123', '123', '233', '1122WJH', 'Assam'),
(6, 'raghva', 'tripathi', 'testing@test.com', 'test', 'test', 'test', 'test', 'Arunachal Pradesh'),
(7, 'sunny', 'tripathi', 'sunny@test.com', '123`', 'ww', 'test', 'test', 'Arunachal Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdata`
--
ALTER TABLE `chatdata`
  ADD PRIMARY KEY (`msg_number`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
