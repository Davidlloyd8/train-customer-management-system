-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 01:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `acct_type` varchar(30) NOT NULL,
  `date_created` varchar(30) NOT NULL,
  `activation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingstb`
--

CREATE TABLE `bookingstb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `train` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complainttb`
--

CREATE TABLE `complainttb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `complaint` varchar(400) NOT NULL,
  `review` varchar(30) NOT NULL,
  `date_review` varchar(30) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customertb`
--

CREATE TABLE `customertb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `acct_type` varchar(30) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faqtb`
--

CREATE TABLE `faqtb` (
  `id` int(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newstb`
--

CREATE TABLE `newstb` (
  `id` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `news` varchar(400) NOT NULL,
  `image` varchar(100) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewstb`
--

CREATE TABLE `reviewstb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(300) NOT NULL,
  `stars` varchar(15) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainstb`
--

CREATE TABLE `trainstb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `acct_type` varchar(30) NOT NULL,
  `activation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingstb`
--
ALTER TABLE `bookingstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainttb`
--
ALTER TABLE `complainttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertb`
--
ALTER TABLE `customertb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqtb`
--
ALTER TABLE `faqtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstb`
--
ALTER TABLE `newstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewstb`
--
ALTER TABLE `reviewstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainstb`
--
ALTER TABLE `trainstb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingstb`
--
ALTER TABLE `bookingstb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complainttb`
--
ALTER TABLE `complainttb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customertb`
--
ALTER TABLE `customertb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqtb`
--
ALTER TABLE `faqtb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newstb`
--
ALTER TABLE `newstb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewstb`
--
ALTER TABLE `reviewstb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainstb`
--
ALTER TABLE `trainstb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
