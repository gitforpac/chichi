-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 11:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maniniyot`
--

-- --------------------------------------------------------

--
-- Table structure for table `mdt`
--

CREATE TABLE `mdt` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdt`
--

INSERT INTO `mdt` (`name`) VALUES
('qwe');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_name`, `created_at`, `user_id`) VALUES
(9, 'daenerys__by_guweiz-d9o4zjo_1520757689.jpg', '2018-03-11 01:41:29', 1),
(10, 'side_by_guweiz-d9p099j_1520757707.jpg', '2018-03-11 01:41:47', 1),
(11, 'vadim-sherbakov-68_1520758331.jpg', '2018-03-11 01:52:11', 1),
(12, 'camay_1520758362.jpg', '2018-03-11 01:52:42', 1),
(15, 'fq_1520758582.jpg', '2018-03-11 01:56:22', 1),
(20, '3_1520758900.jpg', '2018-03-11 02:01:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `interests` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `address`, `interests`) VALUES
(1, ' wqeq', 'wqewq@mail.com', '$2y$12$R.HCUoyrydsdCYKwydU2mOQOBT6U1wfhRWwUSNCh57uZxI9HmoFpG', 'qweqwe', NULL),
(51, ' ee', 'wqewq@mail.com', '$2y$12$i6GyjxTSc5my3SBb8YJnZu2k.EQms7.IIQkO0UStgWqCWOL50JtM6', 'wqewq@mail.com', NULL),
(52, ' eqwe', 'wqe@mail.com', '$2y$12$D11rmODVMGwg8DRd6G8dGeP9UFXoWAOTY49NW3kh5wPcYA0qKFMBi', 'qwewqe', NULL),
(53, ' ', 'qweqwe@mail.com', '$2y$12$F/dmdlSVyLKY/ApjwWe.4.1Fm1k/E.IxK2HhbNaQakrI.yrtlBy9G', 'eweewe', NULL),
(54, 'user1 user1lastname', 'user1@test.dev', '$2y$12$Epg9UorEKkisBFzKUWPDUuYMgrBAdb82Q2oYeP112.P2YAfviGGkW', 'Looc broddie', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
