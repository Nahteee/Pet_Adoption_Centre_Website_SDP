-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2022 at 02:24 PM
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
-- Database: `segs_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `msg`, `created_at`, `topic_id`) VALUES
(7, 1, 'comment on dogs', '2022-08-04 16:13:34', 2),
(8, 1, 'sdsdsd', '2022-08-07 21:34:47', 1),
(9, 2, 'sdsdsd', '2022-08-07 21:47:22', 1),
(10, 1, 'hello', '2022-08-14 21:25:33', 2),
(11, 1, 'comment', '2022-08-15 09:53:59', 1),
(12, 1, 'lol', '2022-08-15 20:46:18', 1),
(15, 2, '?????????????????????????', '2022-08-16 19:05:00', 17);

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
CREATE TABLE IF NOT EXISTS `comment_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `reply_msg` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_id` (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `comment_id`, `reply_msg`, `created_at`, `user_id`, `topic_id`) VALUES
(1, 7, 'reply to comment on dogs', '2022-08-07 21:44:45', 1, 2),
(2, 7, '@kahshen reply coment on dosg again', '2022-08-07 21:44:58', 1, 2),
(3, 7, '@kahshen hello kahshen', '2022-08-07 21:45:26', 2, 1),
(4, 7, 'yessir', '2022-08-14 21:26:40', 1, 2),
(5, 11, 'reply to comment', '2022-08-15 09:54:06', 1, 1),
(6, 11, '@kahshen sdsdsd', '2022-08-15 09:54:12', 1, 1),
(7, 12, 'reply to lol', '2022-08-15 20:46:25', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) NOT NULL,
  `topic_content` varchar(255) NOT NULL,
  `topic_creator` varchar(255) NOT NULL,
  `topic_creator_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_creator_id` (`topic_creator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`, `topic_content`, `topic_creator`, `topic_creator_id`, `date`, `image`) VALUES
(1, 'My cat is CRAZY!', 'does any one have this problem when the cat eats your protein', 'kahshen', 1, '2022-08-02 20:50:44', ''),
(2, 'My dog is on steroids', 'one day he stole my steroids and became buff and beat the shit out of my maid', 'yuki', 2, '2022-08-02 22:31:15', ''),
(5, 'Does anyone knows how to take care of this pet?', 'this pet is smuggling all of my gold chain', 'kahshen', 1, '2022-08-02 22:34:58', ''),
(17, 'This cat is so black wtf', 'I dunno why the pet is so black is it dababy?', 'kahshen', 1, '2022-08-16 19:04:25', 'DaBaby.jpg'),
(18, 'My cat is soooooooo longgg', 'why this cat looks like sausage', 'yuki', 2, '2022-08-16 19:06:58', 'cat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`) VALUES
(1, 'kahshen', 'k@gmail.com', '123', '2022-08-02 20:38:29'),
(2, 'yuki', 'y@gmail.com', '123', '2022-08-02 20:38:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_replies_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_replies_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
