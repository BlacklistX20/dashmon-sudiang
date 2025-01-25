-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2025 at 02:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power`
--
CREATE DATABASE IF NOT EXISTS `power` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `power`;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE IF NOT EXISTS `it` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lvmdp`
--

CREATE TABLE IF NOT EXISTS `lvmdp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p205`
--

CREATE TABLE IF NOT EXISTS `p205` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p236`
--

CREATE TABLE IF NOT EXISTS `p236` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p305`
--

CREATE TABLE IF NOT EXISTS `p305` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p310`
--

CREATE TABLE IF NOT EXISTS `p310` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p429`
--

CREATE TABLE IF NOT EXISTS `p429` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `per_second`
--

CREATE TABLE IF NOT EXISTS `per_second` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `last_update` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `per_second`
--

TRUNCATE TABLE `per_second`;
--
-- Dumping data for table `per_second`
--

INSERT INTO `per_second` (`id`, `name`, `last_update`, `loads`, `current`, `voltage`, `frequency`, `status`) VALUES
(1, 'pue', '2025-01-21 09:35:10', 1.67, 0.00, 0.00, 0.00, 'D'),
(2, 'lvmdp', '2025-01-21 09:35:10', 586.01, 891.11, 219.22, 50.03, 'C'),
(3, 'it', '2025-01-21 09:35:10', 349.11, 531.32, 220.80, 50.03, 'D'),
(4, 'recti', '2025-01-21 09:35:11', 238.73, 365.06, 218.09, 50.03, 'D'),
(5, 'ups', '2025-01-21 09:35:10', 110.29, 166.24, 223.06, 50.03, 'C'),
(6, 'p205', '2025-01-21 09:35:10', 64.80, 98.96, 218.30, 50.02, 'C'),
(7, 'p236', '2025-01-21 09:35:10', 48.88, 75.04, 216.80, 50.03, 'C'),
(8, 'p305', '2025-01-21 09:35:10', 42.32, 64.72, 218.50, 50.02, 'C'),
(9, 'p310', '2025-01-21 09:35:10', 15.65, 23.93, 218.43, 50.03, 'D'),
(10, 'p429', '2025-01-21 09:35:10', 67.08, 102.60, 218.30, 50.01, 'C'),
(11, 'ups202', '2025-01-21 09:35:10', 23.91, 36.11, 219.99, 50.03, 'C'),
(12, 'ups203', '2025-01-21 09:35:10', 21.38, 32.53, 220.01, 50.03, 'C'),
(13, 'ups301', '2025-01-21 09:35:10', 14.87, 21.63, 229.47, 50.02, 'C'),
(14, 'ups302', '2025-01-21 09:35:10', 11.20, 16.29, 229.40, 50.02, 'C'),
(15, 'ups501', '2025-01-21 09:35:10', 19.70, 30.21, 219.95, 50.03, 'C'),
(16, 'ups502', '2025-01-21 09:35:11', 19.32, 29.41, 219.55, 50.03, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `pue`
--

CREATE TABLE IF NOT EXISTS `pue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `pue` double(15,2) NOT NULL,
  `lvmdp` double(15,2) NOT NULL,
  `recti` double(15,2) NOT NULL,
  `ups` double(15,2) NOT NULL,
  `it` double(15,2) NOT NULL,
  `facility` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recti`
--

CREATE TABLE IF NOT EXISTS `recti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups`
--

CREATE TABLE IF NOT EXISTS `ups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups202`
--

CREATE TABLE IF NOT EXISTS `ups202` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups203`
--

CREATE TABLE IF NOT EXISTS `ups203` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups301`
--

CREATE TABLE IF NOT EXISTS `ups301` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups302`
--

CREATE TABLE IF NOT EXISTS `ups302` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups501`
--

CREATE TABLE IF NOT EXISTS `ups501` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ups502`
--

CREATE TABLE IF NOT EXISTS `ups502` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `loads` double(15,2) NOT NULL,
  `voltage` double(15,2) NOT NULL,
  `current` double(15,2) NOT NULL,
  `frequency` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
