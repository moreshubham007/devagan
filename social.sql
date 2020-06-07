-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 05:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `sr` int(11) NOT NULL,
  `uid` text NOT NULL,
  `act` text NOT NULL,
  `actt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`sr`, `uid`, `act`, `actt`) VALUES
(1, '2', 'Created a Post', 1586937962),
(2, '1', 'Created a Post', 1586937987),
(3, '4', 'Created a Post', 1586938012),
(4, '3', 'Created a Post', 1586939696),
(5, '2', 'Created a Post', 1587791081),
(6, '2', 'Created a Post', 1588240043),
(7, '2', 'Created a Post', 1588240129),
(8, '2', 'Created a Post', 1588240192),
(9, '2', 'Created a Post', 1588240270),
(10, '2', 'Created a Post', 1588775066),
(11, '2', 'Created a Post', 1588776149),
(12, '2', 'Created a Post', 1590331046);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sr` int(11) NOT NULL,
  `suid` int(11) NOT NULL,
  `ruid` int(11) NOT NULL,
  `time` text NOT NULL,
  `msg` text NOT NULL,
  `extra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `sr` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`sr`, `pid`, `uid`, `comment`) VALUES
(2, 4, 1, 'GN friends'),
(4, 4, 2, 'GM friends'),
(5, 1, 3, 'Nice Pic Broh'),
(6, 5, 2, 'Support me');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `uid` int(11) NOT NULL,
  `univer` text NOT NULL,
  `froms` text NOT NULL,
  `tos` text NOT NULL,
  `descr` text NOT NULL,
  `grad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`uid`, `univer`, `froms`, `tos`, `descr`, `grad`) VALUES
(2, 'Dabhaa', '5th', '8th', 'nice schools', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `sr` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`sr`, `uid`, `request`, `approve`) VALUES
(18, 2, 0, 1),
(19, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `sr` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` text NOT NULL,
  `opta` text NOT NULL,
  `optb` text NOT NULL,
  `optc` text NOT NULL,
  `optd` text NOT NULL,
  `opte` text NOT NULL,
  `status` text NOT NULL,
  `date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`sr`, `uid`, `title`, `opta`, `optb`, `optc`, `optd`, `opte`, `status`, `date_time`) VALUES
(14, 2, 'Whats your mood', 'Cool', 'Angry', 'Nutral', 'Happy', '', 'Available', '1591280551'),
(16, 2, 'Today is ', 'Sunday', 'Monday', 'Tuesday', '', '', 'Available', '1591282426'),
(17, 1, 'Whats up', 'fine', 'Good', '', '', '', 'Available', '1591357041'),
(19, 2, 'Hii GUys', 'Nice to meet ', 'Your are weak', '', '', '', 'Available', '1591357563'),
(20, 2, 'today is', 'monday', 'tuesday', 'wednesday', 'friday', 'saturday', 'Available', '1591367069'),
(21, 2, 'Hii chone one options', 'one', '', '', '', '', 'Available', '1591368351'),
(23, 2, 'Mood?', 'Good', 'Very Goood', '', '', '', 'Available', '1591369856');

-- --------------------------------------------------------

--
-- Table structure for table `poll_result`
--

CREATE TABLE `poll_result` (
  `sr` int(11) NOT NULL,
  `psr` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `selected` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_result`
--

INSERT INTO `poll_result` (`sr`, `psr`, `uid`, `selected`) VALUES
(1, 16, 2, 'B'),
(2, 17, 1, 'A'),
(3, 14, 2, 'B'),
(4, 19, 2, 'B'),
(5, 20, 2, 'D'),
(6, 19, 1, 'A'),
(7, 20, 1, 'A'),
(8, 16, 1, 'B'),
(9, 14, 1, 'C'),
(10, 21, 2, 'A'),
(13, 23, 2, 'A'),
(14, 23, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `texts` text NOT NULL,
  `file` text NOT NULL,
  `date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `uid`, `texts`, `file`, `date_time`) VALUES
(1, 2, 'gm', '1588775066.jpg', '1588775066'),
(2, 2, 'GN', '1588776149.jpg', '1588776149'),
(3, 2, 'GM frends', '1590331046.jpg', '1590331046');

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(1, 1, 'like'),
(1, 2, 'like'),
(1, 5, 'like'),
(2, 1, 'like'),
(2, 2, 'like'),
(2, 3, 'like'),
(2, 4, 'like'),
(2, 5, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `day` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `district` text NOT NULL,
  `profile` text NOT NULL,
  `cover` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `day`, `month`, `year`, `gender`, `state`, `country`, `district`, `profile`, `cover`, `about`) VALUES
(1, 'firstname', 'lastname', 'mail@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Mar', 2012, 'Female', 'Andhra Pradesh', 'India', 'Adivivaram', 'profile.png', 'cover.png', ''),
(2, 'Ballu', 'Puram', 'ballu@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 29, 'Sep', 2001, 'Male', 'Arunachal Pradesh', 'India', 'Basar', 'profile.png', 'cover.png', 'Hellow guys GM'),
(3, 'shu', 'more', 'shu@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Feb', 2010, 'Male', 'Andhra Pradesh', 'India', 'Adivivaram', 'profile.png', 'cover.png', ''),
(4, 'latish', 'chambhare', 'lati@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Feb', 2012, 'Male', 'Andhra Pradesh', 'India', 'Addanki', 'profile.png', 'cover.png', ''),
(5, 'temp', 'mail', 'temp@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 7, 'May', 2009, 'Male', 'Arunachal Pradesh', 'India', 'Basar', 'profile.png', 'cover.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE `workexp` (
  `uid` int(11) NOT NULL,
  `company` text NOT NULL,
  `design` text NOT NULL,
  `dfrom` text NOT NULL,
  `dto` text NOT NULL,
  `city` text NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`uid`, `company`, `design`, `dfrom`, `dto`, `city`, `descr`) VALUES
(2, 'Tech Initiative', 'Web development', '2009', '2020', 'Nagpur', 'Successor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `poll_result`
--
ALTER TABLE `poll_result`
  ADD KEY `sr` (`sr`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD KEY `sr` (`id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `poll_result`
--
ALTER TABLE `poll_result`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
