-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2022 at 09:58 AM
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
  `description` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `App`
--

INSERT INTO `App` (`app_id`, `app_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'WhatApp', 'https://play.google.com/store/search?q=whatsapp&c=apps', 'Social media ', 1, 0, '2022-07-24 07:45:04'),
(2, 'Discord', 'https://play.google.com/store/apps/details?id=com.discord', 'For networking', 1, 0, '2022-07-24 07:45:04'),
(3, 'Youtube', 'https://play.google.com/store/apps/details?id=com.google.android.youtube', 'Stream free video', 1, 0, '2022-07-24 07:45:04'),
(4, 'Instagram', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'Social media application', 1, 0, '2022-07-24 07:45:04'),
(5, 'Pinterest', 'https://play.google.com/store/apps/details?id=com.pinterest', 'For creativity', 1, 0, '2022-07-24 07:45:04');

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
(1, 'Education', '2022-07-24 07:45:01'),
(2, 'AI', '2022-07-24 07:45:01'),
(3, 'Music', '2022-07-24 07:45:01'),
(4, 'OTT', '2022-07-24 07:45:01'),
(5, 'IDE', '2022-07-24 07:45:01'),
(6, 'Art', '2022-07-24 07:45:01'),
(7, 'DIY', '2022-07-24 07:45:01'),
(8, 'Entertainment', '2022-07-24 07:45:01');

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
(1, 1, NULL, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(2, NULL, 1, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(3, 2, NULL, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(4, NULL, 2, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(5, 3, NULL, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(6, NULL, 3, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(7, 4, NULL, 1, 0, 'Testing', '2022-07-24 07:45:07'),
(8, NULL, 4, 1, 0, 'Testing', '2022-07-24 07:45:07');

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
(1, 'root', '0000-00-00', 'admin@gmail.com', '54cf409de4c734f2d57ce11616db5eed', '2022-07-24 07:45:01'),
(2, 'test', '2022-07-12', 'test01@gamil.com', '5895f9e538649cbca6e82e5d38a8e06b', '2022-07-24 07:53:17');

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
(1, 1, 2, '2022-07-24 07:53:26'),
(2, 2, 2, '2022-07-24 07:53:26'),
(3, 3, 2, '2022-07-24 07:53:26'),
(4, 4, 2, '2022-07-24 07:53:26'),
(5, 6, 2, '2022-07-24 07:53:26'),
(6, 7, 2, '2022-07-24 07:53:26'),
(7, 8, 2, '2022-07-24 07:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `Web`
--

CREATE TABLE `Web` (
  `web_id` int(11) UNSIGNED NOT NULL,
  `web_name` varchar(30) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Web`
--

INSERT INTO `Web` (`web_id`, `web_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'Google', 'https://www.google.co.in/', 'Search engine ', 1, 0, '2022-07-24 07:45:05'),
(2, 'Spotify', 'https://www.spotify.com/in-en/', 'Cloud music player', 1, 0, '2022-07-24 07:45:05'),
(3, 'W3school', 'https://www.w3schools.com/', 'Educational content related to web', 1, 0, '2022-07-24 07:45:05'),
(4, 'Amazon', 'https://www.amazon.in/', 'Online shopping  application', 1, 0, '2022-07-24 07:45:05'),
(5, 'Skill share', 'https://join.skillshare.com/learn/?coupon=DTPGOOGEN30DAYSFREE&utm_source=Google&utm_medium=paidsearch&utm_campaign=Croud_Search_Google_AS_IN_EN_BOF_Brand-OLD&utm_term=skillshare&matchtype=e&locale=en&utm_source=Google&utm_medium=paidsearch&utm_campaign=Brand_EN-IN&utm_term=skillshare&matchtype=e&locale=en&gclid=CjwKCAjw5NqVBhAjEiwAeCa97e2vvy9fnL3xzNSa1ivwTqlFhjVj-DZ8oiGUiYYtElTUBkFR_7lSdRoCl0gQAvD_BwE', 'For Educational purpose', 1, 0, '2022-07-24 07:45:05');

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
  MODIFY `app_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `App_interest`
--
ALTER TABLE `App_interest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Interest`
--
ALTER TABLE `Interest`
  MODIFY `interest_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `r_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `User_details`
--
ALTER TABLE `User_details`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `User_Interest`
--
ALTER TABLE `User_Interest`
  MODIFY `ui_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Web`
--
ALTER TABLE `Web`
  MODIFY `web_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Web_interest`
--
ALTER TABLE `Web_interest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
