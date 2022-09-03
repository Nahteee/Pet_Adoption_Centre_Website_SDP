-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2022 at 08:09 AM
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
  `petID` int(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `centre_ID` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Foreign Key` (`user_ID`),
  KEY `Foreign Key14` (`centre_ID`),
  KEY `Foreign Key15` (`petID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adoption_request`
--

INSERT INTO `adoption_request` (`ID`, `user_ID`, `petID`, `remarks`, `centre_ID`, `status`) VALUES
(10, 6, 3, 'I love srumbly!', 3, '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_comments`
--

INSERT INTO `centre_comments` (`ID`, `user_ID`, `centre_ID`, `comment`, `time`) VALUES
(7, 6, 1, 'Bob is love', '2022-09-02 00:41:30'),
(8, 6, 3, 'Scrumbly adorable', '2022-09-02 00:41:57'),
(10, 6, 1, 'I LOVE BOB SO MUCH', '2022-09-02 02:18:37'),
(11, 6, 1, 'I STILL LOVE BOB', '2022-09-02 02:19:05');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_pages`
--

INSERT INTO `centre_pages` (`ID`, `user_ID`, `centre_name`, `ssm`, `location`, `phone`, `email`, `description`, `verified`, `centre_pic`) VALUES
(1, 4, 'TAKE US HOME', '2362347625', '       Klang bandar bukit tinggi 1 lorong 3 batu nilam       ', '12341234', 'esther123@gmail.com', ' We have lots of pets! Come adopt now! ', 1, 'page1.png'),
(3, 4, 'Maxis Animal Home', 'M293', '   Maxs House, Kuala Lumpur       ', '01129384053', 'max@animal.com', '       We have all sorts of animals here, please visit us today!       ', 1, 'centre1.jpg'),
(4, 4, 'FunnyMaxs Home for Critters', 'F342', ' Maxs House, Selangor ', '0384947927', 'test@test.com', 'We give homes to pets!', 1, 'centre2.jpg'),
(5, 4, 'Love All Pets', '3526235433', 'Klang bukit tinggi', '012358235', 'egseaeg@gmail.com', 'We love all animals! Protect at all cost', 1, 'centre3.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`ID`, `comment_ID`, `reply_message`, `time`, `user_ID`, `topic_ID`) VALUES
(20, 31, '@kahshen nice comment bro!', '2022-08-17 15:43:58', 2, 2);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `user_ID`, `title`, `description`) VALUES
(1, 1, 'Amazing site!', 'A few nooks and crannies but looks good'),
(2, 6, 'Cool!', 'nice'),
(3, 6, 'Not bad', 'Pretty good for given time'),
(4, 6, 'Okay', 'Could use a few more features');

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`ID`, `user_ID`, `post_ID`, `comment`, `time`) VALUES
(31, 2, 12, 'Cool page!', '2022-08-17 15:42:46'),
(39, 4, 11, ' WOW CUTE PETS', '2022-08-17 15:42:46'),
(40, 2, 1, 'NICE!', '2022-08-17 15:42:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`topic_id`, `title`, `description`, `user_ID`, `time`, `image`) VALUES
(1, 'My pet is busted', 'lolololololololololol', 1, '2022-08-16 15:38:42', 'fish1.jpg'),
(2, 'My cat has a gun ', 'this cat is from the streets', 2, '2022-08-16 15:38:42', 'fish2.jpg'),
(11, 'I just got a new pet!', 'AAAAAAHHH I LOVE HIM SO MUUCH', 1, '2022-08-17 15:29:19', 'dog1.jpg'),
(12, 'This is yuki post with dababy', 'LESSSSS FGOOOOOO', 2, '2022-08-17 15:42:37', 'DaBaby.jpg'),
(15, 'My pet\'s so cute!', 'LOOK AT HIM', 6, '2022-08-31 17:23:54', 'fish3.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`ID`, `name`, `centre_ID`, `image_name`, `age`, `species`, `breed`) VALUES
(3, 'Srumbly', 3, 'fish1.jpg', 2, 'Fish', 'Gold Fish'),
(7, 'Bob', 4, 'ballslover32.jpg', 3, 'Dog', 'Chihuahua'),
(13, 'Jeremy', 5, 'cat1.jpg', 3, 'Cat', 'Siamese'),
(16, 'Bobby', 1, 'fish2.jpg', 2, 'Fish', 'Koi Fish'),
(17, 'Remy', 1, 'hamster1.jpg', 3, 'Hamster', 'Golden Hamster'),
(20, 'Steve', 1, 'fish3.jpg', 5, 'Fish', 'Hammerhead'),
(24, 'Birdup', 3, 'bird1.jpg', 3, 'Bird', 'BirdDown');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `user_ID`, `title`, `description`, `status`) VALUES
(1, 1, 'Cant upload images', 'Cant upload pet images in Add pet', 'Not Fixed'),
(2, 2, 'Cant Edit page image', 'Cant edit page image in edit page page.', 'Not Fixed'),
(3, 6, 'Cant view pets properly :(', 'Theres no pet images to view ', 'Not Fixed'),
(4, 4, 'Update pet doesnt work', 'Update pet doesnt update images ', 'Not Fixed');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(1, 'kahshen', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(2, 'yuki', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor'),
(3, 'home_admin', '123', 'admin', '45654656', 'a@gmail.com', 'ad', 'min', '01234283534', 9999, 'Klang '),
(4, 'john', '123', 'owner', '465755', 'j@gmail.com', 'John', 'Doe', '31312', 31222, 'KKKKLANG'),
(5, 'yessir', '123', 'member', '123312', 'yes@gmail.com', 'yes', 'sir', '123213123', 11, 'ski'),
(6, 'ethan', '123', 'member', '020221251242', 'e@gmail.com', 'Ethan', 'Thong', '0123793234', 22222, 'Land');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `Foreign Key14` FOREIGN KEY (`centre_ID`) REFERENCES `centre_pages` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign Key15` FOREIGN KEY (`petID`) REFERENCES `pets` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
