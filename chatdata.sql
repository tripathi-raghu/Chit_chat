-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:31 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdata`
--
ALTER TABLE `chatdata`
  ADD PRIMARY KEY (`msg_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
