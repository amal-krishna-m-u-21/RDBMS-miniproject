-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2022 at 10:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET FOREIGN_KEY_CHECKS=0;
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
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `App`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `App` (
  `app_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_name` varchar(30) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `App`:
--

--
-- Dumping data for table `App`
--

INSERT INTO `App` (`app_id`, `app_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'WhatApp', 'https://play.google.com/store/search?q=whatsapp&c=apps', 'Social media ', 1, 0, '2022-07-24 08:18:39'),
(2, 'Discord', 'https://play.google.com/store/apps/details?id=com.discord', 'For networking', 1, 0, '2022-07-24 08:18:39'),
(3, 'Youtube', 'https://play.google.com/store/apps/details?id=com.google.android.youtube', 'Stream free video', 1, 0, '2022-07-24 08:18:39'),
(4, 'Instagram', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'Social media application', 1, 0, '2022-07-24 08:18:39'),
(5, 'Pinterest', 'https://play.google.com/store/apps/details?id=com.pinterest', 'For creativity', 1, 0, '2022-07-24 08:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `App_interest`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `App_interest` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `App_interest`:
--

--
-- Dumping data for table `App_interest`
--

INSERT INTO `App_interest` (`id`, `interest_id`, `app_id`, `reg_date`) VALUES
(1, 1, 2, '2022-07-24 08:18:40'),
(2, 2, 2, '2022-07-24 08:18:40'),
(3, 3, 3, '2022-07-24 08:18:40'),
(4, 4, 3, '2022-07-24 08:18:40'),
(5, 6, 4, '2022-07-24 08:18:40'),
(6, 7, 5, '2022-07-24 08:18:40'),
(7, 8, 4, '2022-07-24 08:18:40'),
(8, 1, 3, '2022-07-24 08:18:40'),
(9, 2, 3, '2022-07-24 08:18:40'),
(10, 3, 5, '2022-07-24 08:18:40'),
(11, 6, 5, '2022-07-24 08:18:40'),
(12, 7, 4, '2022-07-24 08:18:40'),
(13, 8, 1, '2022-07-24 08:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `Interest`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `Interest` (
  `interest_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_name` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`interest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Interest`:
--

--
-- Dumping data for table `Interest`
--

INSERT INTO `Interest` (`interest_id`, `interest_name`, `reg_date`) VALUES
(1, 'Education', '2022-07-24 08:18:37'),
(2, 'AI', '2022-07-24 08:18:37'),
(3, 'Music', '2022-07-24 08:18:37'),
(4, 'OTT', '2022-07-24 08:18:37'),
(5, 'IDE', '2022-07-24 08:18:37'),
(6, 'Art', '2022-07-24 08:18:37'),
(7, 'DIY', '2022-07-24 08:18:37'),
(8, 'Entertainment', '2022-07-24 08:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `Rating` (
  `r_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `web_id` int(11) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `rating` float DEFAULT 0,
  `review` varchar(2048) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Rating`:
--

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`r_id`, `web_id`, `app_id`, `user_id`, `rating`, `review`, `reg_date`) VALUES
(1, 1, NULL, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(2, NULL, 1, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(3, 2, NULL, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(4, NULL, 2, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(5, 3, NULL, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(6, NULL, 3, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(7, 4, NULL, 1, 0, 'Testing', '2022-07-24 08:18:40'),
(8, NULL, 4, 1, 0, 'Testing', '2022-07-24 08:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `User_details`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `User_details` (
  `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password2` varchar(256) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `User_details`:
--

--
-- Dumping data for table `User_details`
--

INSERT INTO `User_details` (`user_id`, `user_name`, `dob`, `email`, `password2`, `reg_date`) VALUES
(1, 'root', '0000-00-00', 'admin@gmail.com', '54cf409de4c734f2d57ce11616db5eed', '2022-07-24 08:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `User_Interest`
--
-- Creation: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `User_Interest` (
  `ui_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ui_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `User_Interest`:
--

-- --------------------------------------------------------

--
-- Table structure for table `Web`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `Web` (
  `web_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `web_name` varchar(30) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `description` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leaderboard_rating` float NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`web_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Web`:
--

--
-- Dumping data for table `Web`
--

INSERT INTO `Web` (`web_id`, `web_name`, `url`, `description`, `user_id`, `leaderboard_rating`, `reg_date`) VALUES
(1, 'Google', 'https://www.google.co.in/', 'Search engine ', 1, 0, '2022-07-24 08:18:39'),
(2, 'Spotify', 'https://www.spotify.com/in-en/', 'Cloud music player', 1, 0, '2022-07-24 08:18:39'),
(3, 'W3school', 'https://www.w3schools.com/', 'Educational content related to web', 1, 0, '2022-07-24 08:18:39'),
(4, 'Amazon', 'https://www.amazon.in/', 'Online shopping  application', 1, 0, '2022-07-24 08:18:39'),
(5, 'Skill share', 'https://join.skillshare.com/learn/?coupon=DTPGOOGEN30DAYSFREE&utm_source=Google&utm_medium=paidsearch&utm_campaign=Croud_Search_Google_AS_IN_EN_BOF_Brand-OLD&utm_term=skillshare&matchtype=e&locale=en&utm_source=Google&utm_medium=paidsearch&utm_campaign=Brand_EN-IN&utm_term=skillshare&matchtype=e&locale=en&gclid=CjwKCAjw5NqVBhAjEiwAeCa97e2vvy9fnL3xzNSa1ivwTqlFhjVj-DZ8oiGUiYYtElTUBkFR_7lSdRoCl0gQAvD_BwE', 'For Educational purpose', 1, 0, '2022-07-24 08:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `Web_interest`
--
-- Creation: Jul 24, 2022 at 08:18 AM
-- Last update: Jul 24, 2022 at 08:18 AM
--

CREATE TABLE IF NOT EXISTS `Web_interest` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_id` int(11) NOT NULL,
  `web_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `Web_interest`:
--

--
-- Dumping data for table `Web_interest`
--

INSERT INTO `Web_interest` (`id`, `interest_id`, `web_id`, `reg_date`) VALUES
(1, 1, 1, '2022-07-24 08:18:40'),
(2, 2, 1, '2022-07-24 08:18:40'),
(3, 3, 2, '2022-07-24 08:18:40'),
(4, 4, 4, '2022-07-24 08:18:40'),
(5, 6, 4, '2022-07-24 08:18:40'),
(6, 7, 5, '2022-07-24 08:18:40'),
(7, 8, 4, '2022-07-24 08:18:40'),
(8, 1, 3, '2022-07-24 08:18:40'),
(9, 2, 3, '2022-07-24 08:18:40'),
(10, 3, 1, '2022-07-24 08:18:40'),
(11, 6, 5, '2022-07-24 08:18:40'),
(12, 7, 4, '2022-07-24 08:18:40'),
(13, 8, 1, '2022-07-24 08:18:40');


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table App
--

--
-- Metadata for table App_interest
--

--
-- Metadata for table Interest
--

--
-- Metadata for table Rating
--

--
-- Metadata for table User_details
--

--
-- Metadata for table User_Interest
--

--
-- Metadata for table Web
--

--
-- Metadata for table Web_interest
--

--
-- Metadata for database project
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
