-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2022 at 04:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `App`
--

CREATE TABLE `App` (
  `app_id` int(11) UNSIGNED NOT NULL,
  `app_name` varchar(30) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(120) NOT NULL DEFAULT 'APP',
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `App`
--

INSERT INTO `App` (`app_id`, `app_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'WhatApp', 'https://play.google.com/store/search?q=whatsapp&c=apps', 'Social media ', 1, 0, '2022-08-16 02:19:54'),
(2, 'Discord', 'https://play.google.com/store/apps/details?id=com.discord', 'For networking', 1, 0, '2022-08-16 02:19:54'),
(3, 'Youtube', 'https://play.google.com/store/apps/details?id=com.google.android.youtube', 'Stream free video', 1, 0, '2022-08-16 02:19:54'),
(4, 'Instagram', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'Social media application', 1, 0, '2022-08-16 02:19:54'),
(5, 'Pinterest', 'https://play.google.com/store/apps/details?id=com.pinterest', 'For creativity', 1, 0, '2022-08-16 02:19:54'),
(6, '', '', 'APP', 2, 0, '2022-08-16 02:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `App_interest`
--

CREATE TABLE `App_interest` (
  `id` int(11) UNSIGNED NOT NULL,
  `interest_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `App_interest`
--

INSERT INTO `App_interest` (`id`, `interest_id`, `app_id`, `reg_date`) VALUES
(1, 1, 2, '2022-08-16 02:20:49'),
(2, 2, 2, '2022-08-16 02:20:49'),
(3, 3, 3, '2022-08-16 02:20:49'),
(4, 4, 3, '2022-08-16 02:20:49'),
(5, 6, 4, '2022-08-16 02:20:49'),
(6, 7, 5, '2022-08-16 02:20:49'),
(7, 8, 4, '2022-08-16 02:20:49'),
(8, 1, 3, '2022-08-16 02:20:49'),
(9, 2, 3, '2022-08-16 02:20:49'),
(10, 3, 5, '2022-08-16 02:20:49'),
(11, 6, 5, '2022-08-16 02:20:49'),
(12, 7, 4, '2022-08-16 02:20:49'),
(13, 8, 1, '2022-08-16 02:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `Interest`
--

CREATE TABLE `Interest` (
  `interest_id` int(11) UNSIGNED NOT NULL,
  `interest_name` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Interest`
--

INSERT INTO `Interest` (`interest_id`, `interest_name`, `reg_date`) VALUES
(1, 'Education', '2022-08-16 02:19:51'),
(2, 'AI', '2022-08-16 02:19:51'),
(3, 'Music', '2022-08-16 02:19:51'),
(4, 'OTT', '2022-08-16 02:19:51'),
(5, 'IDE', '2022-08-16 02:19:51'),
(6, 'Art', '2022-08-16 02:19:51'),
(7, 'DIY', '2022-08-16 02:19:51'),
(8, 'Entertainment', '2022-08-16 02:19:51'),
(9, 'new', '2022-08-16 02:39:04'),
(10, 'new', '2022-08-16 02:39:09'),
(11, 'new', '2022-08-16 02:39:11'),
(12, 'new', '2022-08-16 02:39:12'),
(13, 'this', '2022-08-16 02:46:28'),
(14, 'what', '2022-08-16 02:46:33'),
(15, 'never', '2022-08-16 02:48:14'),
(16, 'this is not right', '2022-08-16 02:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `r_id` int(11) UNSIGNED NOT NULL,
  `web_id` int(11) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `rating` float DEFAULT 0,
  `review` varchar(2048) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`r_id`, `web_id`, `app_id`, `user_id`, `rating`, `review`, `reg_date`) VALUES
(1, 1, NULL, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(2, NULL, 1, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(3, 2, NULL, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(4, NULL, 2, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(5, 3, NULL, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(6, NULL, 3, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(7, 4, NULL, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(8, NULL, 4, 1, 0, 'Testing', '2022-08-16 02:20:49'),
(9, 1, NULL, 2, 0, 'new rating', '2022-08-16 02:23:28'),
(10, 4, NULL, 2, 5, 'this is not bad', '2022-08-16 02:24:30'),
(11, NULL, 6, 2, 0, '       ', '2022-08-16 02:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `User_details`
--

CREATE TABLE `User_details` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password2` varchar(256) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_details`
--

INSERT INTO `User_details` (`user_id`, `user_name`, `dob`, `email`, `password2`, `reg_date`) VALUES
(1, 'Admin', '0000-00-00', 'admin@gmail.com', '54cf409de4c734f2d57ce11616db5eed', '2022-08-16 02:19:51'),
(2, 'charioteeroflife@gma', '2022-09-01', 'charioteeroflife@gmail.com', '331e99d8a0973a30cf1a5e48215fa57d', '2022-08-16 02:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `User_Interest`
--

CREATE TABLE `User_Interest` (
  `ui_id` int(11) UNSIGNED NOT NULL,
  `interest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_Interest`
--

INSERT INTO `User_Interest` (`ui_id`, `interest_id`, `user_id`, `reg_date`) VALUES
(1, 5, 2, '2022-08-16 02:21:32'),
(2, 6, 2, '2022-08-16 02:21:32'),
(3, 7, 2, '2022-08-16 02:21:32'),
(4, 8, 2, '2022-08-16 02:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `Web`
--

CREATE TABLE `Web` (
  `web_id` int(11) UNSIGNED NOT NULL,
  `web_name` varchar(30) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(120) NOT NULL DEFAULT 'WEB-PAGE',
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Web`
--

INSERT INTO `Web` (`web_id`, `web_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'Google', 'https://www.google.co.in/', 'Search engine ', 1, 0, '2022-08-16 02:20:47'),
(2, 'Spotify', 'https://www.spotify.com/in-en/', 'Cloud music player', 1, 0, '2022-08-16 02:20:47'),
(3, 'W3school', 'https://www.w3schools.com/', 'Educational content related to web', 1, 0, '2022-08-16 02:20:47'),
(4, 'Amazon', 'https://www.amazon.in/', 'Online shopping  application', 1, 2.5, '2022-08-16 02:24:59'),
(5, 'Skill share', 'https://join.skillshare.com/learn/?coupon=DTPGOOGEN30DAYSFREE&utm_source=Google&utm_medium=paidsearch&utm_campaign=Croud_Search_Google_AS_IN_EN_BOF_Brand-OLD&utm_term=skillshare&matchtype=e&locale=en&utm_source=Google&utm_medium=paidsearch&utm_campaign=Brand_EN-IN&utm_term=skillshare&matchtype=e&locale=en&gclid=CjwKCAjw5NqVBhAjEiwAeCa97e2vvy9fnL3xzNSa1ivwTqlFhjVj-DZ8oiGUiYYtElTUBkFR_7lSdRoCl0gQAvD_BwE', 'For Educational purpose', 1, 0, '2022-08-16 02:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `Web_interest`
--

CREATE TABLE `Web_interest` (
  `id` int(11) UNSIGNED NOT NULL,
  `interest_id` int(11) NOT NULL,
  `web_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Web_interest`
--

INSERT INTO `Web_interest` (`id`, `interest_id`, `web_id`, `reg_date`) VALUES
(1, 1, 1, '2022-08-16 02:20:49'),
(2, 2, 1, '2022-08-16 02:20:49'),
(3, 3, 2, '2022-08-16 02:20:49'),
(4, 4, 4, '2022-08-16 02:20:49'),
(5, 6, 4, '2022-08-16 02:20:49'),
(6, 7, 5, '2022-08-16 02:20:49'),
(7, 8, 4, '2022-08-16 02:20:49'),
(8, 1, 3, '2022-08-16 02:20:49'),
(9, 2, 3, '2022-08-16 02:20:49'),
(10, 3, 1, '2022-08-16 02:20:49'),
(11, 6, 5, '2022-08-16 02:20:49'),
(12, 7, 4, '2022-08-16 02:20:49'),
(13, 8, 1, '2022-08-16 02:20:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `App`
--
ALTER TABLE `App`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `App_interest`
--
ALTER TABLE `App_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Interest`
--
ALTER TABLE `Interest`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `User_details`
--
ALTER TABLE `User_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `User_Interest`
--
ALTER TABLE `User_Interest`
  ADD PRIMARY KEY (`ui_id`);

--
-- Indexes for table `Web`
--
ALTER TABLE `Web`
  ADD PRIMARY KEY (`web_id`);

--
-- Indexes for table `Web_interest`
--
ALTER TABLE `Web_interest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `App`
--
ALTER TABLE `App`
  MODIFY `app_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `App_interest`
--
ALTER TABLE `App_interest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Interest`
--
ALTER TABLE `Interest`
  MODIFY `interest_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `r_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `User_details`
--
ALTER TABLE `User_details`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `User_Interest`
--
ALTER TABLE `User_Interest`
  MODIFY `ui_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Web`
--
ALTER TABLE `Web`
  MODIFY `web_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Web_interest`
--
ALTER TABLE `Web_interest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
