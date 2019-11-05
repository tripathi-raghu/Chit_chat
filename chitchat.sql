-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 08:26 AM
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
  `msg_number` int(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message_text` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatdata`
--

INSERT INTO `chatdata` (`msg_number`, `sender`, `receiver`, `message_text`, `date`) VALUES
(1, '1', 2, 'assa', '0000-00-00 00:00:00'),
(2, '1', 2, 'assa', '0000-00-00 00:00:00'),
(3, '1', 2, 'trtre', '0000-00-00 00:00:00'),
(4, '1', 2, 'gfgfdgf', '0000-00-00 00:00:00'),
(5, '1', 2, 'gfdgfg', '2019-11-01 17:06:33'),
(6, '2', 1, 'gfdgfg', '2019-11-01 17:07:17'),
(7, '2', 1, 'hey', '2019-11-01 17:07:22'),
(8, '2', 1, 'this is 2:59 pm', '2019-11-02 14:59:09'),
(9, '2', 1, 'hwy', '2019-11-02 15:00:48'),
(10, '1', 2, 'ha bhai kesa hai', '2019-11-02 15:01:00'),
(11, '2', 3, 'asdbhcdgsafn', '2019-11-02 15:18:30'),
(12, '2', 3, 'adsad', '2019-11-02 15:18:33'),
(13, '2', 3, 'dip122', '2019-11-02 15:18:41'),
(14, '2', 6, 'raghi111', '2019-11-02 15:18:51'),
(15, '2', 8, 'dsfsd', '2019-11-02 15:20:25'),
(16, '2', 1, 'bs mst tu bta', '2019-11-02 15:54:46'),
(17, '2', 1, 'Yes buddy', '2019-11-02 16:12:09'),
(18, '2', 1, 'Ha ha', '2019-11-02 16:12:15'),
(19, '2', 1, 'No no', '2019-11-02 16:12:24'),
(20, '2', 3, 'jmj', '2019-11-03 12:43:49'),
(21, '2', 3, '', '2019-11-03 12:43:53'),
(22, '2', 3, '', '2019-11-03 12:43:55'),
(23, '3', 2, 'hi ', '2019-11-03 12:50:59'),
(24, '2', 3, 'hoq are you', '2019-11-03 12:51:09'),
(25, '3', 2, 'i am fine', '2019-11-03 12:51:18'),
(26, '2', 3, 'or btao', '2019-11-03 12:51:30');

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
(7, 'sunny', 'tripathi', 'sunny@test.com', '123`', 'ww', 'test', 'test', 'Arunachal Pradesh'),
(8, 'Sunny', 'Sharma', 'sunny@sunny.com', '123', 'Sunny', 'Sun', 'Sjn', 'Assam');

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
-- AUTO_INCREMENT for table `chatdata`
--
ALTER TABLE `chatdata`
  MODIFY `msg_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
