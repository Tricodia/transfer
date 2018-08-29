-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 04:56 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'clince', 'clincepro@gmail.com', 'qwerty', 'Male', '9447626859', '2018-08-08 00:00:00', '2018-08-16 00:00:00', '1'),
(2, 'Clince Joshy', 'clince@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Male', '9447626859', '2018-08-28 15:03:39', '2018-08-28 15:03:39', '1'),
(3, 'demo', 'demo@dd.com', '006d2143154327a64d86a264aea225f3', 'Male', '23', '2018-08-29 01:34:33', '2018-08-29 01:34:33', '1'),
(4, 'Clince Joshy', 'c@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Male', '9447626859', '2018-08-29 14:05:40', '2018-08-29 14:05:40', '1'),
(5, 'cc', 'cc@cc.com', '76d80224611fc919a5d54f0ff9fba446', 'Male', '1', '2018-08-29 16:55:23', '2018-08-29 16:55:23', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
