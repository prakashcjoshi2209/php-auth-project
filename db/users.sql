-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2025 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `number`, `message`) VALUES
(1, 'prakash Chandra Joshi', 'prakashchandrajoshi2209@gmail.com', '123', '9005868968', 'hello'),
(2, 'vikash', 'vikash2209@gmail.com', '$2y$10$MP.ordPCgSiOcHQnDverR.4W6cGc8P6oN8bxvLeYWglbsFIpmnloS', 'vikash2209', 'hello'),
(3, 'vikash', 'vikash2209@gmail.com', '$2y$10$RDunhK.YNdgvU6lMBNQ0aOmX7uJIxYtelTPedWQMpAHPzrAkAoQLq', 'vikash2209', 'hello'),
(4, 'pulki', 'pulki@gmail.com', '$2y$10$NX9DFqd/DmV9EbX0Q3te8.kpHsOh3dQosIZzcLVJ62X1Ljp5mHeyW', 'pulki@gmai', 'pul'),
(5, 'mukesh', 'mukesh@23gmail.com', '$2y$10$Cxca9ErtwaBXXKyzVPj2cu83n3A57lw0OLequ2L4sVGFuGxkNYI72', 'mukesh@23g', 'mukesh bhai'),
(6, 'raghav', 'raghav123@gmail.com', '$2y$10$4fvcC5BSOAvUjle7pdll6u3kS7AA0bzRzyvVCW4hb129IB5qSKUmW', 'raghav123@', 'hello raghav');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
