-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 12:20 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `phone`, `password`) VALUES
(5, 'mostafa', 1281769886, '19ba2dd6c65780fa1fb20f8f32b92aa3'),
(8, 'amir', 1281769886, '63eefbd45d89e8c91f24b609f7539942'),
(9, 'khaled', 1281769886, 'c8e1015d01dbf4fe67c6e2b98fb0d30f'),
(10, 'yahia', 1281769886, '64832d781603ac2e962874ac918ad155'),
(11, 'farouk', 1281769886, '0e3ad98da5ea931af82feeb6df85db38'),
(12, 'hussien', 1281769886, 'e7ddfbae8a52eff75460cc2ea714a3ac'),
(13, 'kareem', 1281769886, 'f3dfcc5c5ba4f2df56175d9fe896f18d');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `area_expertise` varchar(150) NOT NULL,
  `professional_interest` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `department`, `course`, `area_expertise`, `professional_interest`, `phone`, `location`, `img`) VALUES
(12, 'FCIH', 'CS, IS, IT', 'pl1, pl2, sw', 'computer', 'science computer', '01281769886', 'Hellwan', 'upload/download.jpeg'),
(13, 'FCIC', 'cs, is, it', 'pl1, pl2,  pl3', 'computer', 'computer', '01281769886', 'Cairo', 'upload/download (1).jpeg'),
(14, 'Ø­Ø§Ø³Ø¨Ø§Øª Ùˆ Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹ÙŠÙ† Ø´Ù…Ø³', 'Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³Ø¨', 'Ø­Ø³Ø§Ø¨ 1', 'Ø¨Ø±Ù…Ø¬Ù‡', 'Ø¨Ø±Ù…Ø¬Ù‡', '01281769886', 'Ø§Ù„Ø¹Ø¨Ø§Ø³ÙŠÙ‡', 'upload/download (2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `mess` varchar(150) NOT NULL,
  `readed` tinyint(1) NOT NULL,
  `date_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `mess`, `readed`, `date_`) VALUES
(1, 'This is a feedback', 0, '2019-04-18'),
(2, 'This is a feedback', 0, '2019-04-18'),
(3, 'This is a feedback3', 0, '2019-04-18'),
(5, 'This is a feedback4', 0, '2019-04-18'),
(6, 'This is a feedback6', 0, '2019-04-18'),
(7, 'This is a feedback7', 0, '2019-04-18'),
(8, 'fcih', 0, '2019-04-18'),
(9, 'fcih', 0, '2019-04-18'),
(10, 'fcih', 1, '2019-04-18'),
(11, 'This is a feedback10', 1, '2019-04-18'),
(12, 'This is a feedback10', 1, '2019-04-18'),
(13, 'This is a feedback4', 1, '2019-04-19'),
(14, 'This is america', 1, '2019-04-20'),
(16, 'iuhucsnd', 1, '2019-04-21'),
(17, 'Ø§Ø³ØªØ±Ù‡Ø§ Ù…Ø¹Ø§Ù†Ø§ ÙŠØ§ Ø±Ø¨', 1, '2019-04-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
