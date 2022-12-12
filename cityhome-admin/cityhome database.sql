-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 10:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(4, 'City Home', 'cityhome@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'super_admin'),
(6, 'Merry', 'merry72@gmail.com', '12345', 'admin'),
(7, 'Mick', 'mick@gmail.com', '91219', 'admin'),
(8, 'adfdf', 'afef', '777', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(17, 'Apartment'),
(18, 'House'),
(19, 'Condo'),
(20, 'Land');

-- --------------------------------------------------------

--
-- Table structure for table `for_rent`
--

CREATE TABLE `for_rent` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `for_rent`
--

INSERT INTO `for_rent` (`id`, `address`, `price`, `room`, `feet`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `category_name`, `created`, `updated`) VALUES
(1, 'kalay', '100,000', '3', '20\'3', '7b07b823fef51147d82a458acc5c0305.jpg', '', '', '', '', '', '', 'Houses', '2020-08-05 17:00:14', '2020-08-05 17:00:14'),
(2, 'taungphila', '80,000', '3', '18\'25', '1d375b8f4350e71b02e2857b70109ac2.jpg', '', '', '', '', '', '', 'Land', '2020-08-05 17:01:43', '2020-08-05 17:01:43'),
(4, '111', '111', '111', '111', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 22:51:36', '2020-08-24 22:51:36'),
(6, 'bbb', 'bbb', NULL, 'bbb', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '2d3d4a9323eaceedb1cb2b6f0113e395.jpg', '', '2020-08-25 21:25:06', '2020-08-25 21:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `for_sale`
--

CREATE TABLE `for_sale` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `for_sale`
--

INSERT INTO `for_sale` (`id`, `address`, `price`, `room`, `feet`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `category_name`, `created`, `updated`) VALUES
(18, 'addd', 'pppp', 'rrr', 'ffff', '1d375b8f4350e71b02e2857b70109ac2.jpg', '', '', '', '', '', '', 'Garage', '2020-08-24 20:20:14', '2020-08-24 20:20:14'),
(19, 'addd', 'pppp', 'rrr', 'ffff', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 20:20:29', '2020-08-24 20:20:29'),
(20, 'yangon', 'pppp', '7', '11', '7b07b823fef51147d82a458acc5c0305.jpg', '', '', '', '', '', '', 'House', '2020-08-24 20:20:51', '2020-08-24 20:20:51'),
(21, 'addd', 'pppp', 'rrr', 'ffff', '22ac6a37fa8127560784f46ea3db0be1.jpg', '', '', '', '', '', '', 'House', '2020-08-24 20:21:18', '2020-08-24 20:21:18'),
(22, 'addd', 'pppp', 'rrr', '11', '52bda1e8b4306ac57b101ead5921745b.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 20:21:47', '2020-08-24 20:21:47'),
(23, 'yangon', 'pppp', 'rrr', '9', '247d340a9ff0ef69520bf45570efad7d.jpg', '', '', '', '', '', '', 'Apartment', '2020-08-24 20:22:17', '2020-08-24 20:22:17'),
(24, 'addd', 'pppp', 'rrr', 'ffff', '74f551b579a620ac4c5f5f29c38cae49.jpg', '', '', '', '', '', '', 'Apartment', '2020-08-24 20:24:53', '2020-08-24 20:24:53'),
(25, 'aaaa', 'pppp', 'rrr', '11', '990760b49ddaac895d32dc0f35e5a893.jpg', '', '', '', '', '', '', 'Garage', '2020-08-24 20:25:23', '2020-08-24 20:25:23'),
(26, 'addd', 'aaaaaaaaaa', '7', '11', '6840808f175665d22c53365dac26a5cb.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 20:25:48', '2020-08-24 20:25:48'),
(27, 'kkk', '100', 'aget3f', 'atr6', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '', '', '', '', '', '', 'House', '2020-08-24 20:26:11', '2020-08-24 20:26:11'),
(28, 'kkk', '100', '999', 'ss', '1d375b8f4350e71b02e2857b70109ac2.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 20:26:34', '2020-08-24 20:26:34'),
(29, 'qqqq', 'aaa', '7', '11', '0bb818e39b585a4fac60a4a921c2988d.jpg', '', '', '', '', '', '', 'Condo', '2020-08-24 20:26:57', '2020-08-24 20:26:57'),
(30, 'qqqq', 'vvvvv', 'aget3f', '9', '8e8fb60f791972c4cc38a0e570e35342.jpg', '', '', '', '', '', '', 'Apartment', '2020-08-24 20:27:27', '2020-08-24 20:27:27'),
(31, 'aaa', 'aaaaaaaaaa', '7', '9', '0487a525c50d030db9c6364edddcd1f0.jpg', '', '', '', '', '', '', 'Apartment', '2020-08-24 20:27:57', '2020-08-24 20:27:57'),
(32, '111', '111', NULL, '111', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '', '', '', '2020-08-26 16:13:05', '2020-08-26 16:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `feet` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `address`, `price`, `feet`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `created`, `updated`) VALUES
(1, 'San Chaung', '2500 lakh', '20\'3', '7b07b823fef51147d82a458acc5c0305.jpg', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'hjy', 'hny', 'hjytg', '1d375b8f4350e71b02e2857b70109ac2.jpg', '', '', '', '', '', '', '2020-08-21 20:23:05', '2020-08-21 20:23:05'),
(5, 'fwfa', 'afefed', 'afeef', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '', '', '', '', '', '', '2020-08-24 16:44:59', '2020-08-24 16:44:59'),
(8, '11', '11', '11', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '1dcd88d9fb72287be584e4ab12168d1f.jpg', '2020-08-25 20:36:20', '2020-08-25 20:36:20'),
(9, 'addd', 'pppp', 'ffff', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '5cf1e5351ecb3b8bb11ad79a3899914c.jpg', '2020-08-25 21:15:13', '2020-08-25 21:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_rent`
--
ALTER TABLE `for_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_sale`
--
ALTER TABLE `for_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `for_rent`
--
ALTER TABLE `for_rent`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `for_sale`
--
ALTER TABLE `for_sale`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
