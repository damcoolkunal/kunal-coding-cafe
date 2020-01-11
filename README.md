# kunal-coding-cafe
-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2020 at 05:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `user_name` text NOT NULL,
  `describe_user` varchar(255) NOT NULL,
  `Relationship` text NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_birthday` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_cover` varchar(255) NOT NULL,
  `user_reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL,
  `posts` text NOT NULL,
  `recovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `f_name`, `l_name`, `user_name`, `describe_user`, `Relationship`, `user_pass`, `user_email`, `user_country`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) VALUES
(1, 'Kunal', 'Yadav', 'kunal_yadav_53118', 'Hello welcome to Kunal-Coding Cafe.', 'single........', 'eatrawfood', 'damcool.kunal@gmail.com', 'India', 'Male', '8 August ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ54jYq5QQBH0vyHf8P2tMLUKo99TkxbMiO68riHm-WPtjQk1MA', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQBZ5qANj_o_G6596AsmKESjjEK8jRKh3YtuOBJjI0tZPB-sQga', '2020-01-06 15:48:46', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(2, 'Tanmay', 'Chaudhary', 'tanmay_chaudhary_551595', 'Hello Coding Cafe.This is my default status.', '........', '123456789', 'tanmay@gmail.com', 'India', 'Male', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ4kEiz4e4E6j41YEcD-HwogI2TqkDSSzA2B6rWo4C0wgmtYxTb', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTSgqlErr-zisdeq4ldVFMDH78HAUKuyzhxs_mVxJMLwz7CUQPN', '2020-01-06 17:03:46', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(3, 'Divya ', 'Sharma', 'divya _sharma_177461', 'Hello Welcome to Kunal-Coding Cafe.', '........', 'eatrawfood', 'divya@gmail.com', 'India', 'Female', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSFR4K7HYC7GxRfg3Ro-LQgkBjBdELABZTuY0Z4pK7pT64uBabk', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSfWvKb3WeDu0y7FKdJ4rxV1GusFSCeVUWyX86Di45gRCZQwMDi', '2020-01-07 07:42:17', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(4, 'simar ', 'yadav', 'simar _yadav_568172', 'Hello Coding Cafe.This is my default status.', '........', 'simar yadav', 'simar8yadav', 'India', 'Male', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGJhHSLunLENolVcK9vKpVKVQ1BUv3rq_pvOsu5_tFgRTvhAoR', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgkWzZcXNLv-r8hmJ9FOm0-hOJg-n1ofKnJvKEh4BKkw5HifMi', '2020-01-07 07:45:33', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(5, 'Simran', 'Yadav', 'simran_yadav_639761', 'Hello welcome to kunal-coding cafe.', '........', 'eatrawfood', 'simran@gmail.com', 'India', 'female', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFrx8NR2LvTEI9yXA53ksdBZmyUmDOzHgeMfBoJ8a6I30Ae4mi', 'default_cover.jpg', '2020-01-07 07:49:08', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(6, 'Shaleen ', 'Singh', 'shaleen _singh_953529', 'Hello Coding Cafe.This is my default status.', '........', 'eatrawfood', 'shaleen_s@bt.iitr.ac.in', 'India', 'Male', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFrx8NR2LvTEI9yXA53ksdBZmyUmDOzHgeMfBoJ8a6I30Ae4mi', 'default_cover.jpg', '2020-01-07 08:13:25', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888'),
(7, 'ishan', 'shukla', 'ishan_shukla_850813', 'Hello Coding Cafe.This is my default status.', '........', 'ishan140101', 'ishan.shukla2001@rediffmail.com', 'India', 'Male', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFrx8NR2LvTEI9yXA53ksdBZmyUmDOzHgeMfBoJ8a6I30Ae4mi', 'default_cover.jpg', '2020-01-07 10:05:30', 'verified', 'no', 'ifyouaregootatsomethingdontdoitforfree45566677888');

-- --------------------------------------------------------

--
-- Table structure for table `users_messages`
--

CREATE TABLE `users_messages` (
  `id` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `msg_body` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `msg_seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_messages`
--

INSERT INTO `users_messages` (`id`, `user_to`, `user_from`, `msg_body`, `date`, `msg_seen`) VALUES
(1, 2, 1, 'ghj', '2020-01-07 13:52:14', 'no'),
(2, 2, 1, 'ghj', '2020-01-07 13:52:16', 'no'),
(3, 2, 1, 'hi', '2020-01-07 13:52:20', 'no'),
(4, 2, 1, 'hi', '2020-01-07 13:53:48', 'no'),
(5, 3, 1, 'hi', '2020-01-07 13:53:59', 'no'),
(6, 2, 1, 'd', '2020-01-07 13:54:05', 'no'),
(7, 2, 1, 'd', '2020-01-07 13:55:05', 'no'),
(8, 3, 1, 'hey', '2020-01-07 13:55:15', 'no'),
(9, 3, 1, 'hh', '2020-01-07 13:56:28', 'no'),
(10, 3, 1, 'hh', '2020-01-07 13:56:30', 'no'),
(11, 5, 1, 'hi\r\n', '2020-01-07 15:12:50', 'no'),
(12, 5, 1, 'hi\r\n', '2020-01-07 15:12:53', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users_messages`
--
ALTER TABLE `users_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_messages`
--
ALTER TABLE `users_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
