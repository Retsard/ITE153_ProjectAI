-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jun 22, 2023 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) DEFAULT NULL,
  `food_calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_calories`) VALUES
(1, 'Apple', 52),
(2, 'Banana', 89),
(3, 'Avocado', 160),
(4, 'Bell Pepper', 20),
(5, 'Chico', 83),
(6, 'Coconut', 354),
(7, 'Corn', 86),
(8, 'Eggplant', 25),
(9, 'Dragonfruit', 60),
(10, 'Durian', 147),
(11, 'Guava', 68),
(12, 'Lemon', 29),
(13, 'Watermelon', 30),
(14, 'Santol', 82),
(15, 'Rambutan', 73),
(16, 'Pumpkin', 26),
(17, 'Peanut', 567),
(18, 'Papaya', 32),
(19, 'Orange', 47),
(20, 'Marang', 63),
(21, 'Mango', 60),
(22, 'Lime', 30),
(23, 'Kiwi', 61),
(24, 'Jalapeno', 28),
(25, 'Jackfruit', 94),
(26, 'Cantaloupe', 34),
(27, 'Cabbage', 25),
(28, 'Broccoli', 34),
(29, 'Cauliflower', 25),
(30, 'Cucumber', 13),
(31, 'Potato', 86),
(32, 'Carrot', 41),
(33, 'White Radish', 18),
(34, 'Pineapple', 50),
(35, 'Strawberry', 32),
(36, 'Tomato', 20),
(37, 'Cherry', 50),
(38, 'Grapes', 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
