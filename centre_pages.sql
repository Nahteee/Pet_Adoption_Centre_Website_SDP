-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2022 at 02:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `centre_pages`
--

CREATE TABLE `centre_pages` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `centre_name` varchar(100) NOT NULL,
  `ssm` varchar(10) NOT NULL,
  `location` tinytext NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `centre_pic` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centre_pages`
--

INSERT INTO `centre_pages` (`ID`, `user_ID`, `centre_name`, `ssm`, `location`, `phone`, `email`, `description`, `verified`, `centre_pic`) VALUES
(3, 11, 'FunnyMax\'s Home for Critters', 'A111', ' No. 700, Jalan Max, Animal Planet, Cheras, Hollywood', '1129384053', 'max@animal.com', ' FunnyMaxs home is the #1 spot to adopt small animals! If you like tiny animals or youre looking for snake food, visit our centre today! ', 1, NULL),
(4, 12, 'Sarah\'s Centre of Large Hounds', 'S999', '11, tiny house, Jalan Nalaj, Grove Street, Penang', '234823849', 'sarah@hotmail.com', 'Tired of getting robbed every night? Do you get bullied every time you go out? Sounds like you need a dog. A big dog. Sarah\'s Centre of Large Hounds is the perfect place to pick up a new pooch. A very large pooch that is!', 1, NULL),
(5, 13, 'Frank\'s Fish Emporium', 'F927', '41, Next to the river, Jalan Ikan, Sea World, Kuala Lumpur', '493748394', 'fishlover@fish.com', 'Fish are the best pet ever. They\'re beautiful and delicate creatures, and some are more intelligent than you may expect. If you would like to care for a majestic finned friend, visit Frank\'s Fish Emporium...we can\'t wait to \'kelp\' you.', 0, NULL),
(6, 11111122, 'pooper centre', '2342342342', '  ads s', '1234456789', 'poop@poop.com', '  asds ', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centre_pages`
--
ALTER TABLE `centre_pages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centre_pages`
--
ALTER TABLE `centre_pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
