-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 02:50 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enthusia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_name` char(6) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `cricket` tinyint(1) NOT NULL DEFAULT '0',
  `basketball` tinyint(1) NOT NULL DEFAULT '0',
  `volley_ball` tinyint(1) NOT NULL DEFAULT '0',
  `football` tinyint(1) NOT NULL DEFAULT '0',
  `kabbdi` tinyint(1) NOT NULL DEFAULT '0',
  `IPL_auction` tinyint(1) NOT NULL DEFAULT '0',
  `kho_kho` tinyint(1) NOT NULL DEFAULT '0',
  `girls_cricket` tinyint(1) NOT NULL DEFAULT '0',
  `footsal` tinyint(1) NOT NULL DEFAULT '0',
  `badminton_singles` tinyint(1) NOT NULL DEFAULT '0',
  `badminton_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `badminton_mixed_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `table_tennis_single` tinyint(1) NOT NULL DEFAULT '0',
  `table_tennis_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `table_tennis_mixed_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `lawn_tennis_singles` tinyint(1) NOT NULL DEFAULT '0',
  `lawn_tennis_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `lawn_tennis_mixed_doubles` tinyint(1) NOT NULL DEFAULT '0',
  `chess` tinyint(1) NOT NULL DEFAULT '0',
  `swimming` tinyint(1) NOT NULL DEFAULT '0',
  `long_jump` tinyint(1) NOT NULL DEFAULT '0',
  `high_jump` tinyint(1) NOT NULL DEFAULT '0',
  `shot_put` tinyint(1) NOT NULL DEFAULT '0',
  `weight_lifting` tinyint(1) NOT NULL DEFAULT '0',
  `100_meters` tinyint(1) NOT NULL DEFAULT '0',
  `200_meters` tinyint(1) NOT NULL DEFAULT '0',
  `400_meters` tinyint(1) NOT NULL DEFAULT '0',
  `4x100_meters` tinyint(1) NOT NULL DEFAULT '0',
  `table_no` set('0','1','2','3') NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `college` varchar(100) NOT NULL,
  `degree` set('BE','ME','MCA','BArch','BA','MA','Others') NOT NULL DEFAULT 'BE',
  `mobile` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `code` char(32) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
