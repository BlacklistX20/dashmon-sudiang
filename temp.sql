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
-- Database: `temp`
--
CREATE DATABASE IF NOT EXISTS `temp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `temp`;

-- --------------------------------------------------------

--
-- Table structure for table `battery.2`
--

CREATE TABLE IF NOT EXISTS `battery.2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battery.3`
--

CREATE TABLE IF NOT EXISTS `battery.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battery.4`
--

CREATE TABLE IF NOT EXISTS `battery.4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bss.4`
--

CREATE TABLE IF NOT EXISTS `bss.4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `containment.5`
--

CREATE TABLE IF NOT EXISTS `containment.5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core.3`
--

CREATE TABLE IF NOT EXISTS `core.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `csps.2`
--

CREATE TABLE IF NOT EXISTS `csps.2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_center.5`
--

CREATE TABLE IF NOT EXISTS `data_center.5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t5` double(15,2) NOT NULL,
  `h5` double(15,2) NOT NULL,
  `t6` double(15,2) NOT NULL,
  `h6` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genset`
--

CREATE TABLE IF NOT EXISTS `genset` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interkoneksi.4`
--

CREATE TABLE IF NOT EXISTS `interkoneksi.4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invas.3`
--

CREATE TABLE IF NOT EXISTS `invas.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t5` double(15,2) NOT NULL,
  `h5` double(15,2) NOT NULL,
  `t6` double(15,2) NOT NULL,
  `h6` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mkios.3`
--

CREATE TABLE IF NOT EXISTS `mkios.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msc.2`
--

CREATE TABLE IF NOT EXISTS `msc.2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t5` double(15,2) NOT NULL,
  `h5` double(15,2) NOT NULL,
  `t6` double(15,2) NOT NULL,
  `h6` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ocs.3`
--

CREATE TABLE IF NOT EXISTS `ocs.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan.5`
--

CREATE TABLE IF NOT EXISTS `pengembangan.5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `per_second`
--

CREATE TABLE IF NOT EXISTS `per_second` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `last_update` datetime NOT NULL,
  `temp` double(15,2) NOT NULL,
  `hum` double(15,2) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Truncate table before insert `per_second`
--

TRUNCATE TABLE `per_second`;
--
-- Dumping data for table `per_second`
--

INSERT INTO `per_second` (`id`, `name`, `last_update`, `temp`, `hum`, `status`) VALUES
(1, 'battery 2', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(2, 'recty 2', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(3, 'msc', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(4, 'csps', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(5, 'battery 3', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(6, 'recty 3', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(7, 'invas', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(8, 'core', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(9, 'mkios', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(10, 'ocs', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(11, 'battery 4', '2025-01-21 09:35:12', 16.00, 89.10, 'C'),
(12, 'recty 4', '2025-01-21 09:35:10', 20.00, 97.77, 'C'),
(13, 'bss', '2025-01-21 09:35:10', 30.00, 61.65, 'C'),
(14, 'interkoneksi', '2025-01-21 09:35:10', 33.00, 70.55, 'C'),
(15, 'transmisi', '2025-01-21 09:35:10', 0.00, 0.00, 'D'),
(16, 'utility a', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(17, 'utility b', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(18, 'data center', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(19, 'pengembangan', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(20, 'containment', '2024-11-28 21:41:34', 0.00, 0.00, 'D'),
(21, 'genset', '2024-12-06 23:06:50', 0.00, 0.00, 'D'),
(22, 'trafo', '2024-12-06 23:06:50', 0.00, 0.00, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `recti.2`
--

CREATE TABLE IF NOT EXISTS `recti.2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recti.3`
--

CREATE TABLE IF NOT EXISTS `recti.3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recti.4`
--

CREATE TABLE IF NOT EXISTS `recti.4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trafo`
--

CREATE TABLE IF NOT EXISTS `trafo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transmisi.4`
--

CREATE TABLE IF NOT EXISTS `transmisi.4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t3` double(15,2) NOT NULL,
  `h3` double(15,2) NOT NULL,
  `t4` double(15,2) NOT NULL,
  `h4` double(15,2) NOT NULL,
  `t5` double(15,2) NOT NULL,
  `h5` double(15,2) NOT NULL,
  `t6` double(15,2) NOT NULL,
  `h6` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utility_a.5`
--

CREATE TABLE IF NOT EXISTS `utility_a.5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utility_b.5`
--

CREATE TABLE IF NOT EXISTS `utility_b.5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `t1` double(15,2) NOT NULL,
  `h1` double(15,2) NOT NULL,
  `t2` double(15,2) NOT NULL,
  `h2` double(15,2) NOT NULL,
  `t_avg` double(15,2) NOT NULL,
  `h_avg` double(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
