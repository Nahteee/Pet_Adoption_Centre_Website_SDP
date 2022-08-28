-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2022 at 04:06 PM
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
-- Table structure for table `adoption_request`
--

CREATE TABLE `adoption_request` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `species` varchar(50) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adoption_request`
--

INSERT INTO `adoption_request` (`ID`, `user_ID`, `species`, `remarks`, `status`) VALUES
(3, 3, 'Bumbly', 'hi', 0),
(4, 4, 'Scrimblo', 'hii', 0);

-- --------------------------------------------------------

--
-- Table structure for table `centre_comments`
--

CREATE TABLE `centre_comments` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `centre_ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_comments`
--

INSERT INTO `centre_comments` (`ID`, `user_ID`, `centre_ID`, `comment`, `time`) VALUES
(2, 3, 3, ' hi', '2022-08-23 15:04:54'),
(3, 3, 3, ' you should visit my centre idk lol', '2022-08-23 15:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `centre_pages`
--

CREATE TABLE `centre_pages` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `centre_name` varchar(100) NOT NULL,
  `ssm` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `centre_pic` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centre_pages`
--

INSERT INTO `centre_pages` (`ID`, `user_ID`, `centre_name`, `ssm`, `location`, `phone`, `email`, `description`, `verified`, `centre_pic`) VALUES
(3, 3, 'Maxis Animal Home', 'M293', '   Maxs House, Kuala Lumpur       ', '01129384053', 'max@animal.com', '       We have all sorts of animals here, please visit us today!       ', 1, 'default.jpg'),
(4, 3, 'FunnyMaxs Home for Critters', 'F342', ' Maxs House, Selangor ', '0384947927', 'test@test.com', ' new Home ', 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `ID` int(11) NOT NULL,
  `comment_ID` int(11) NOT NULL,
  `reply_message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_ID` int(11) NOT NULL,
  `topic_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`ID`, `comment_ID`, `reply_message`, `time`, `user_ID`, `topic_ID`) VALUES
(9, 26, 'ok', '2022-08-17 15:30:52', 1, 2),
(10, 26, '@kahshen dsdsdsd', '2022-08-17 15:31:13', 1, 2),
(13, 30, 'yessir ski', '2022-08-17 15:36:22', 1, 2),
(14, 30, '@kahshen lessgooooo', '2022-08-17 15:37:09', 1, 2),
(15, 31, 'reply test', '2022-08-17 15:43:04', 1, 2),
(16, 31, '@kahshen reply reply test', '2022-08-17 15:43:58', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `user_ID`, `title`, `description`) VALUES
(1, 2, 'poop', 'I like to eat poop');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `post_ID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`ID`, `user_ID`, `post_ID`, `comment`, `time`) VALUES
(26, 1, 1, 'comment on busted', '2022-08-17 15:24:52'),
(29, 1, 1, 'sadasdasd', '2022-08-17 15:30:43'),
(30, 1, 2, 'omg', '2022-08-17 15:36:15'),
(31, 2, 12, 'Comment test', '2022-08-17 15:42:46'),
(32, 2, 12, 'hi', '2022-08-26 19:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `topic_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user_ID` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`topic_id`, `title`, `description`, `user_ID`, `time`, `image`) VALUES
(1, 'My pet is busted', 'lolololololololololol', 1, '2022-08-16 15:38:42', ''),
(2, 'My cat has a gun ', 'this cat is from the streets', 2, '2022-08-16 15:38:42', ''),
(12, 'This is yuki post with dababy', 'LESSSSS FGOOOOOO', 2, '2022-08-17 15:42:37', 'DaBaby.jpg'),
(14, 'looking 4 gf again', 'sry pic didnt work last time :/', 2, '2022-08-26 19:23:27', 'ballslover32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `centre_ID` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `species` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `image_name` varchar(50) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`ID`, `name`, `centre_ID`, `age`, `species`, `breed`, `image_name`) VALUES
(3, 'Srumbly', 3, 2, 'Bumbly', 'Bimblo', 'ballslover32.jpg'),
(4, 'Bimblo', 3, 1, 'Dog', 'Poonis', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `user_ID`, `title`, `description`, `status`) VALUES
(1, 2, 'hi', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `IC` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `income` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(1, 'kahshen', '123', 'member', '23132131', 'k@gmail.com', 'Tan', 'Kah Shen', '5646545', 9999999, 'Penang'),
(2, 'yuki', '123', 'member', '65498444', 'y@gmail.com', 'Yuki', 'Chew', '7556498', 2222220, 'Selangor'),
(3, 'FunnyMax', 'Maxiscool', 'owner', '001014-95-0294', 'max@animal.com', 'Max', 'Maximus', '01129384053', 30000, 'Max\'s house, Kuala Lumpur'),
(4, 'Wowiee', '123', 'owner', '204923102', 'Wowiee@wow.com', 'Wow', 'Iee', '1234', 2, 'my house'),
(6, 'admin', 'root', 'admin', '123123123', 'admin@admin.com', 'Ad', 'Min', '123123123', 999999, 'admin house');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key` (`user_ID`);

--
-- Indexes for table `centre_comments`
--
ALTER TABLE `centre_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key1` (`user_ID`),
  ADD KEY `Foreign Key12` (`centre_ID`);

--
-- Indexes for table `centre_pages`
--
ALTER TABLE `centre_pages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key2` (`user_ID`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key3` (`comment_ID`),
  ADD KEY `Foreign Key4` (`topic_ID`),
  ADD KEY `Foreign Key5` (`user_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key6` (`user_ID`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key7` (`user_ID`),
  ADD KEY `Foreign Key8` (`post_ID`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `Foreign Key9` (`user_ID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key10` (`centre_ID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key11` (`user_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption_request`
--
ALTER TABLE `adoption_request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `centre_comments`
--
ALTER TABLE `centre_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `centre_pages`
--
ALTER TABLE `centre_pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `adoption_request_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `pets` (`ID`);

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
