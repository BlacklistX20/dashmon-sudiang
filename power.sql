-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2025 at 01:36 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
