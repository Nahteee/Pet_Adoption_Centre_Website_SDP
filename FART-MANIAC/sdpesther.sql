-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2022 at 02:29 PM
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
  `ID` decimal(10,0) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `species` varchar(100) NOT NULL,
  `remarks` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `centre_comments`
--

CREATE TABLE `centre_comments` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `centre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 11, 'FunnyMaxs Home for Critters', 'A111', ' No. 700, Jalan Max, Animal Planet, Cheras, Hollywood', '1129384053', 'max@animal.com', ' FunnyMaxs home is the #1 spot to adopt small animals! If you like tiny animals or youre looking for snake food, visit our centre today! ', 1, NULL),
(4, 12, 'Sarah\'s Centre of Large Hounds', 'S999', '11, tiny house, Jalan Nalaj, Grove Street, Penang', '234823849', 'sarah@hotmail.com', 'Tired of getting robbed every night? Do you get bullied every time you go out? Sounds like you need a dog. A big dog. Sarah\'s Centre of Large Hounds is the perfect place to pick up a new pooch. A very large pooch that is!', 1, NULL),
(5, 13, 'Frank\'s Fish Emporium', 'F927', '41, Next to the river, Jalan Ikan, Sea World, Kuala Lumpur', '493748394', 'fishlover@fish.com', 'Fish are the best pet ever. They\'re beautiful and delicate creatures, and some are more intelligent than you may expect. If you would like to care for a majestic finned friend, visit Frank\'s Fish Emporium...we can\'t wait to \'kelp\' you.', 0, NULL),
(6, 11111122, 'pooper centre', '2342342342', '  ads s', '1234456789', 'poop@poop.com', '  asds ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `post_ID` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `ID` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` mediumtext NOT NULL,
  `user_ID` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post_ID` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `species` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ID` decimal(10,0) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinytext NOT NULL,
  `IC` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `income` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `role`, `IC`, `email`, `first_name`, `last_name`, `phone`, `income`, `address`) VALUES
(0, 'john', '912ec803b2ce49e4a541068d495ab570', 'admin', '1234341234', 'john@gmail.com', 'john', 'le deil stewardson', '123453893', 5000, '308 Negra Arroyo Lane'),
(1, 'jason', 'jasonpass', 'member', '349876454', 'jasonkkddg@gmail.com', 'jason', 'kim jom seol', '12489634', 4509, 'Komplek Pasar Keramat D4 Jln Keramat Dalam Kampung Dato Keramat Mala'),
(2, 'nikenick', 'aaaa', 'owner', '349876454', 'anroneos@ahlksdj.com', 'nick', 'samson', '123453893', 79328, 'djdjdfj dkjafaljsdfld, sfaokflfa,c aldf,f alffafla, sdfs84, 74494');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption_request`
--
ALTER TABLE `adoption_request`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`user_ID`) USING BTREE;

--
-- Indexes for table `centre_comments`
--
ALTER TABLE `centre_comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `author` (`user_ID`) USING BTREE;

--
-- Indexes for table `centre_pages`
--
ALTER TABLE `centre_pages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `author` (`user_ID`),
  ADD KEY `post_ID` (`post_ID`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `author` (`user_ID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_ID` (`post_ID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`user_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centre_pages`
--
ALTER TABLE `centre_pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
