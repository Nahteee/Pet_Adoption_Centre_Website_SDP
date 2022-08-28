-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2022 at 07:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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
-- Table structure for table `adoption_request`
--

DROP TABLE IF EXISTS `adoption_request`;
CREATE TABLE IF NOT EXISTS `adoption_request` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `species` varchar(50) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `centre_comments`
--

DROP TABLE IF EXISTS `centre_comments`;
CREATE TABLE IF NOT EXISTS `centre_comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `centre_ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key1` (`user_ID`),
  KEY `Foreign Key12` (`centre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `centre_pages`
--

DROP TABLE IF EXISTS `centre_pages`;
CREATE TABLE IF NOT EXISTS `centre_pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `centre_name` varchar(100) NOT NULL,
  `ssm` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `centre_pic` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key2` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
CREATE TABLE IF NOT EXISTS `comment_replies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `comment_ID` int(11) NOT NULL,
  `reply_message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ID` int(11) NOT NULL,
  `topic_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key3` (`comment_ID`),
  KEY `Foreign Key4` (`topic_ID`),
  KEY `Foreign Key5` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`ID`, `comment_ID`, `reply_message`, `time`, `user_ID`, `topic_ID`) VALUES
(9, 26, 'ok', '2022-08-17 15:30:52', 1, 2),
(10, 26, '@kahshen dsdsdsd', '2022-08-17 15:31:13', 1, 2),
(11, 29, 'dasdssdsd', '2022-08-17 15:34:15', 1, 2),
(12, 28, 'yessir', '2022-08-17 15:35:22', 1, 2),
(13, 30, 'yessir ski', '2022-08-17 15:36:22', 1, 2),
(14, 30, '@kahshen lessgooooo', '2022-08-17 15:37:09', 1, 2),
(15, 31, 'reply test', '2022-08-17 15:43:04', 1, 2),
(16, 31, '@kahshen reply reply test', '2022-08-17 15:43:58', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key6` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

DROP TABLE IF EXISTS `forum_comments`;
CREATE TABLE IF NOT EXISTS `forum_comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `post_ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key7` (`user_ID`),
  KEY `Foreign Key8` (`post_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`ID`, `user_ID`, `post_ID`, `comment`, `time`) VALUES
(26, 1, 1, 'comment on busted', '2022-08-17 15:24:52'),
(28, 1, 11, 'wtf this is dababy?', '2022-08-17 15:29:29'),
(29, 1, 1, 'sadasdasd', '2022-08-17 15:30:43'),
(30, 1, 2, 'omg', '2022-08-17 15:36:15'),
(31, 2, 12, 'Comment test', '2022-08-17 15:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
CREATE TABLE IF NOT EXISTS `forum_post` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user_ID` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `Foreign Key9` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`topic_id`, `title`, `description`, `user_ID`, `time`, `image`) VALUES
(1, 'My pet is busted', 'lolololololololololol', 1, '2022-08-16 15:38:42', ''),
(2, 'My cat has a gun ', 'this cat is from the streets', 2, '2022-08-16 15:38:42', ''),
(11, 'asdsadsadasdasdasdasdasda', 'asdsadasdasdasdsadasdasdasd', 1, '2022-08-17 15:29:19', 'DaBaby.jpg'),
(12, 'This is yuki post with dababy', 'LESSSSS FGOOOOOO', 2, '2022-08-17 15:42:37', 'DaBaby.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `centre_ID` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `species` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key10` (`centre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key11` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `IC` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `income` int(11) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(1, 'kahshen', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(2, 'yuki', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `centre_comments`
--
ALTER TABLE `centre_comments`
  ADD CONSTRAINT `Foreign Key1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `Foreign Key12` FOREIGN KEY (`centre_ID`) REFERENCES `centre_pages` (`ID`);

--
-- Constraints for table `centre_pages`
--
ALTER TABLE `centre_pages`
  ADD CONSTRAINT `Foreign Key2` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `Foreign Key3` FOREIGN KEY (`comment_ID`) REFERENCES `forum_comments` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign Key4` FOREIGN KEY (`topic_ID`) REFERENCES `forum_post` (`topic_id`),
  ADD CONSTRAINT `Foreign Key5` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Foreign Key6` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `Foreign Key7` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `Foreign Key8` FOREIGN KEY (`post_ID`) REFERENCES `forum_post` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `Foreign Key9` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `Foreign Key10` FOREIGN KEY (`centre_ID`) REFERENCES `centre_pages` (`ID`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `Foreign Key11` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
