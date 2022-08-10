-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2022 at 03:52 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdpupdated`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption_request`
--

DROP TABLE IF EXISTS `adoption_request`;
CREATE TABLE IF NOT EXISTS `adoption_request` (
  `ID` decimal(10,0) NOT NULL,
  `user_ID` int NOT NULL,
  `species` varchar(100) NOT NULL,
  `remarks` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`user_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `centre_comments`
--

DROP TABLE IF EXISTS `centre_comments`;
CREATE TABLE IF NOT EXISTS `centre_comments` (
  `ID` int NOT NULL,
  `user_ID` int NOT NULL,
  `comment` mediumtext NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `author` (`user_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `centre_pages`
--

DROP TABLE IF EXISTS `centre_pages`;
CREATE TABLE IF NOT EXISTS `centre_pages` (
  `ID` int NOT NULL,
  `user_ID` int NOT NULL,
  `centre_name` varchar(100) NOT NULL,
  `ssm` varchar(10) NOT NULL,
  `location` tinytext NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`user_ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

DROP TABLE IF EXISTS `forum_comments`;
CREATE TABLE IF NOT EXISTS `forum_comments` (
  `ID` int NOT NULL,
  `user_ID` int NOT NULL,
  `post_ID` int NOT NULL,
  `comment` mediumtext NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `author` (`user_ID`),
  KEY `post_ID` (`post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
CREATE TABLE IF NOT EXISTS `forum_post` (
  `ID` int NOT NULL,
  `title` tinytext NOT NULL,
  `description` mediumtext NOT NULL,
  `user_ID` int NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `author` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `post_ID` int NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `species` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `post_ID` (`post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `ID` decimal(10,0) NOT NULL,
  `user_ID` int NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinytext NOT NULL,
  `IC` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `income` int NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(0, 'nikenick', 'aaaa', 'owner', '349876454', 'anroneos@ahlksdj.com', 'nick', 'samson', '123453893', 79328, 'djdjdfj dkjafaljsdfld, sfaokflfa,c aldf,f alffafla, sdfs84, 74494'),
(1, 'supertsumu', 'tsumupass', 'member', '040303141529', 'damienshanming@gmail.com', 'Damien', 'Wong', '0123330102', 1000000, '2,Jalan Kenyalang 11/13, Bayu Damansara');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD CONSTRAINT `adoption_request_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `centre_comments`
--
ALTER TABLE `centre_comments`
  ADD CONSTRAINT `centre_comments_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `centre_pages`
--
ALTER TABLE `centre_pages`
  ADD CONSTRAINT `centre_pages_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `forum_post` (`ID`),
  ADD CONSTRAINT `forum_comments_ibfk_3` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`post_ID`) REFERENCES `centre_pages` (`ID`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
