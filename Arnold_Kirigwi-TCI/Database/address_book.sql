-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 05:39 PM
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
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(6) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `firstname`, `lastname`, `email`, `street`, `zip_code`, `city`, `created`) VALUES
(3, 'Mary', 'Njeri', 'mary@gmail.com', 'Uhuru', '235', 'Muranga', '2022-06-11 21:34:25'),
(28, 'Alpha', 'lewis ', 'kirigwimwangi18@yahoo.com', 'Thika', '01000', 'Nairobi', '2022-06-13 17:57:22'),
(31, 'Juma', 'Mwangi', '12443@gmail.com', 'Thika', '44', 'Nairobi', '2022-06-13 18:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(6) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `created`) VALUES
(1, 'Machakos', '2022-06-11 21:38:14'),
(2, 'Kisumu', '2022-06-11 21:39:27'),
(3, 'Mombasa', '2022-06-11 21:39:43'),
(5, 'Nairobi', '2022-06-12 13:32:48'),
(6, 'Meru', '2022-06-12 13:33:37'),
(7, 'Nyahururu', '2022-06-12 13:38:21'),
(8, 'Samburu', '2022-06-12 13:40:40'),
(10, 'Kambirwa', '2022-06-12 13:49:31'),
(11, 'Runda', '2022-06-12 13:51:28'),
(13, 'Muthaiga', '2022-06-12 13:59:35'),
(14, 'Nairobi', '2022-06-12 14:00:01'),
(15, 'Muthaiga', '2022-06-12 14:00:09'),
(16, 'Nairobi', '2022-06-13 13:16:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
