-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2022 at 01:13 PM
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
-- Database: `pet`
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
  `centre_ID` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key` (`user_ID`),
  KEY `Foreign Key14` (`centre_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adoption_request`
--

INSERT INTO `adoption_request` (`ID`, `user_ID`, `species`, `remarks`, `centre_ID`, `status`) VALUES
(1, 2, 'Dog', 'AAAAAAA', 1, '0');

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
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key1` (`user_ID`),
  KEY `Foreign Key12` (`centre_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_comments`
--

INSERT INTO `centre_comments` (`ID`, `user_ID`, `centre_ID`, `comment`, `time`) VALUES
(5, 6, 1, ' aaa', '2022-08-31 17:46:38'),
(6, 6, 1, ' asdasdasd', '2022-08-31 17:46:43');

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
  `centre_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key2` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_pages`
--

INSERT INTO `centre_pages` (`ID`, `user_ID`, `centre_name`, `ssm`, `location`, `phone`, `email`, `description`, `verified`, `centre_pic`) VALUES
(1, 4, 'TAKE ME HOME', '2362347625', 'Klang bandar bukit tinggi 1 lorong 3 batu nilam', '0123790097', 'esther123@gmail.com', 'aegfasegasfgsdfb', 1, 'page1.png'),
(3, 3, 'Maxis Animal Home', 'M293', '   Maxs House, Kuala Lumpur       ', '01129384053', 'max@animal.com', '       We have all sorts of animals here, please visit us today!       ', 1, 'centre1.jpg'),
(4, 3, 'FunnyMaxs Home for Critters', 'F342', ' Maxs House, Selangor ', '0384947927', 'test@test.com', ' new Home ', 1, 'centre2.jpg'),
(5, 4, 'Guangs ass cracked by ethan', '3526235433', 'Ethans ass', '012358235', 'egseaeg@gmail.com', 'Uwu guang ass', 1, 'centre3.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`ID`, `comment_ID`, `reply_message`, `time`, `user_ID`, `topic_ID`) VALUES
(20, 31, '@kahshen test', '2022-08-17 15:43:58', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key6` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `user_ID`, `title`, `description`) VALUES
(1, 1, 'feedback test', 'test');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`ID`, `user_ID`, `post_ID`, `comment`, `time`) VALUES
(31, 2, 12, 'Comment test', '2022-08-17 15:42:46'),
(39, 4, 11, ' test', '2022-08-17 15:42:46'),
(40, 2, 1, 'Comment ', '2022-08-17 15:42:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`topic_id`, `title`, `description`, `user_ID`, `time`, `image`) VALUES
(1, 'My pet is busted', 'lolololololololololol', 1, '2022-08-16 15:38:42', ''),
(2, 'My cat has a gun ', 'this cat is from the streets', 2, '2022-08-16 15:38:42', ''),
(11, 'asdsadsadasdasdasdasdasda', 'asdsadasdasdasdsadasdasdasd', 1, '2022-08-17 15:29:19', 'DaBaby.jpg'),
(12, 'This is yuki post with dababy', 'LESSSSS FGOOOOOO', 2, '2022-08-17 15:42:37', 'DaBaby.jpg'),
(15, 'Dude wtf im so trash at this', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa', 6, '2022-08-31 17:23:54', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`ID`, `name`, `centre_ID`, `image_name`, `age`, `species`, `breed`) VALUES
(1, 'Bob', 1, 'dog1.png', 2, 'Dog', 'German Sheppard'),
(3, 'Srumbly', 3, 'ballslover32.jpg', 2, 'Bumbly', 'Bimblo'),
(4, 'Bimblo', 3, 'skull.jpeg', 1, 'Dog', 'Poonis'),
(5, 'Dog2', 4, 'dog3.jpg', 4, 'dog', 'Dog');

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
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key11` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `user_ID`, `title`, `description`, `status`) VALUES
(1, 1, 'test1', 'test bug', 'Not Fixed'),
(2, 2, 'test2', 'testtest', 'Not Fixed');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(1, 'kahshen', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(2, 'yuki', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor'),
(3, 'segs_admin', '123', 'admin', '45654656', 'a@gmail.com', 'ad', 'min', '551654', 9999, 'LOL'),
(4, 'john', '123', 'owner', '465755', 'j@gmail.com', 'John', 'Doe', '31312', 3122, 'Klang'),
(5, 'yessir', '123', 'member', '123312', 'yes@gmail.com', 'yes', 'sir', '123213123', 11, 'ski'),
(6, 'ethan', '123', 'member', '123214', 'e@gmail.com', 'Ethn', 'Thong', '12321412', 235, 'Land'),
(7, 'weq', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(8, 'wqewew2', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(9, 'qwewqewe', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(10, 'eqwewqe', '123', 'member', '123214', 'e@gmail.com', 'Et', 'han', '12321412', 232, 'Land'),
(11, 'yukiwewe', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor'),
(12, 'alrigt', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor'),
(13, 'OMGIMDYING', '123', 'owner', '3412351465246', 'esther123@gmail.com', 'Esther', 'wegargaerg', '0123213423', 21111, 'aegaeg'),
(14, 'eeee', 'adwfasfawf', 'member', '342352462', 'aefaegadf', 'eeeeeeeee', 'aaaaaaaa', '4a35461456', 234, '4524524qeaf'),
(15, 'aaegaeg', 'aegaegae', 'member', '234235235', 'gaegaegae', 'egseg', 'segsegaeg', '135135', 1324, 'aegaeg'),
(16, 'ethane', 'segsega', 'member', '3gaegaeg', 'egaegaega', 'aegaeg', 'aegaeg', 'aegaeg', 234135, 'aegaegaeg'),
(17, 'ethan1', 'awfaeg', 'member', 'aehaehae', 'aegaeg', 'aehaeha', 'aehaehae', 'aehaehaeh', 134135135, 'aehaheaeh'),
(18, 'Ethan123', 'etkz2522', 'member', '020212142433', 'ethantkz2522@gmail.com', 'ethan', 'thong', '4123513234', 2000, 'aeaeg'),
(19, 'Ethan1234', 'asfawfaw', 'member', '020212142433', 'ethantkz2522@gmail.com', 'ethan', 'thong', '4123513234', 2000, 'aeaeg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `Foreign Key14` FOREIGN KEY (`centre_ID`) REFERENCES `centre_pages` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `Foreign Key4` FOREIGN KEY (`topic_ID`) REFERENCES `forum_post` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign Key5` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Foreign Key6` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `Foreign Key7` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
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
