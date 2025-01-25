-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2025 at 02:08 AM
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
-- Database: `potency`
--
CREATE DATABASE IF NOT EXISTS `potency` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `potency`;

-- --------------------------------------------------------

--
-- Table structure for table `cool`
--

CREATE TABLE IF NOT EXISTS `cool` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `barcode` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `compressor` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `flow` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `capacity` double(15,2) NOT NULL,
  `condition` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aging` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `install` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `cool`
--

TRUNCATE TABLE `cool`;
--
-- Dumping data for table `cool`
--

INSERT INTO `cool` (`id`, `barcode`, `floor`, `room`, `category`, `name`, `vendor`, `brand`, `type`, `compressor`, `flow`, `capacity`, `condition`, `status`, `aging`, `info`, `install`, `maintanance`, `updated_at`) VALUES
(00001, '', '2', 'Ruang rectifier', 'PAC', 'PCU 2.06', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00002, '', '2', 'Ruang rectifier', 'PAC', 'PCU 2.07', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00003, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.08', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00004, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.09', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00005, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.10', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00006, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.11', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00007, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.14', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00008, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.15', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00009, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.16', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00010, '', '2', 'Ruang CSPS', 'PAC', 'PCU 2.17', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00011, '', '2', 'Ruang CSPS', 'PAC', 'PCU 2.18', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00012, '', '2', 'Ruang MSC', 'PAC', 'PCU 2.19', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00013, '', '3', 'Ruang rectifier', 'PAC', 'PCU 3.06', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00014, '', '3', 'Ruang rectifier', 'PAC', 'PCU 3.07', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00015, '', '3', 'Ruang Mkios', 'PAC', 'PCU 3.08', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00016, '', '3', 'Ruang Mkios', 'PAC', 'PCU 3.09', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00017, '', '3', 'Ruang Core', 'PAC', 'PCU 3.10', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00018, '', '3', 'Ruang Core', 'PAC', 'PCU 3.11', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00019, '', '3', 'Ruang OCS', 'PAC', 'PCU 3.12', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00020, '', '3', 'Ruang OCS', 'PAC', 'PCU 3.13', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00021, '', '3', 'Ruang OCS', 'PAC', 'PCU 3.14', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00022, '', '3', 'Ruang Invas', 'PAC', 'PCU 3.15', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00023, '', '3', 'Ruang Invas', 'PAC', 'PCU 3.16', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00024, '', '3', 'Ruang Invas', 'PAC', 'PCU 3.17', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00025, '', '3', 'Ruang Invas', 'PAC', 'PCU 3.18', 'Westindo', 'RC GROUP', 'Next DX O 070M DC', 'Dual', 'Down', 71.60, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00026, '', '4', 'Ruang rectifier', 'PAC', 'PCU 4.06', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00027, '', '4', 'Ruang rectifier', 'PAC', 'PCU 4.07', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00028, '', '4', 'Ruang BSS/TRAU', 'PAC', 'PCU 4.08', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00029, '', '4', 'Ruang BSS/TRAU', 'PAC', 'PCU 4.09', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00030, '', '4', 'Ruang TRANSMISI', 'PAC', 'PCU 4.14', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00031, '', '4', 'Ruang TRANSMISI', 'PAC', 'PCU 4.15', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00032, '', '4', 'Ruang TRANSMISI', 'PAC', 'PCU 4.16', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00033, '', '4', 'Ruang TRANSMISI', 'PAC', 'PCU 4.17', 'Westindo', 'RC GROUP', 'Next DX O 035M', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00034, '', '5', 'Data Centre', 'PAC', 'PCU 5.08', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00035, '', '5', 'Data Centre', 'PAC', 'PCU 5.09', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00036, '', '5', 'Data Centre', 'PAC', 'PCU 5.10', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00037, '', '5', 'Data Centre', 'PAC', 'PCU 5.11', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00038, '', '5', 'Data Centre', 'PAC', 'PCU 5.12', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00039, '', '5', 'Data Centre', 'PAC', 'PCU 5.13', 'Westindo', 'Climaveneta', 'Cool Blade DAU060', 'Dual', 'Down', 63.50, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00040, '', '5', 'Utility A', 'PAC', 'PCU 5.04', 'Westindo', 'Climaveneta', 'Cool Blade DAU055', 'Dual', 'Down', 56.40, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00041, '', '5', 'Utility A', 'PAC', 'PCU 5.05', 'Westindo', 'Climaveneta', 'Cool Blade DAU055', 'Dual', 'Down', 56.40, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00042, '', '5', 'Utility B', 'PAC', 'PCU 5.06', 'Westindo', 'Climaveneta', 'Cool Blade DAU055', 'Dual', 'Down', 56.40, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00043, '', '5', 'Utility B', 'PAC', 'PCU 5.07', 'Westindo', 'Climaveneta', 'Cool Blade DAU055', 'Dual', 'Down', 56.40, 'Baik', 'ON', 'Under 10 Years', '-', '2018', '-', '2024-12-16 16:22:00'),
(00044, '', '5', 'Containment', 'PAC', 'PCU 5.14', 'Westindo', 'RC GROUP', 'Coolside DX 0151 IN', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00045, '', '5', 'Containment', 'PAC', 'PCU 5.15', 'Westindo', 'RC GROUP', 'Coolside DX 0151 IN', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00046, '', '5', 'Containment', 'PAC', 'PCU 5.16', 'Westindo', 'RC GROUP', 'Coolside DX 0151 IN', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00047, '', '5', 'Containment', 'PAC', 'PCU 5.17', 'Westindo', 'RC GROUP', 'Coolside DX 0151 IN', 'Single', 'Up', 35.80, 'Baik', 'ON', 'Under 10 Years', '-', '2021', '-', '2024-12-16 16:22:00'),
(00081, 'CME003354918', '2', 'Trafo', 'AC Split', 'DAIKIN/2PK/02/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00082, 'CME003348008', '2', 'Trafo', 'AC Split', 'DAIKIN/2PK/02/01/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00083, 'GPN000028513', '2', 'Trafo', 'AC Split', 'UPD178.ACINDOOR.F2.NEW TRAFO ROOM.AF01', '-', '-', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00084, 'GPN000028617', 'Semi Basement', 'HouseKeeping', 'AC Split', 'UPD178.AC INDOOR DAIKIN.B1.BASEMENT.NEW-ME ROOM.BE10', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00085, 'CME003379569', '1', 'Panel', 'AC Split', 'DAIKIN/1.5PK/01/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00086, 'GPN000029894', '1', 'Mushollah', 'AC Split', 'UPD178.AC INDOOR.F1.NEW-RUANG-PANEL-BA03', '-', '-', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00087, 'CME003394000', '1', 'Vendor', 'AC Split', 'AC RUANG VENDOR', '-', '-', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00088, 'GPN000031493', '1', 'Control Room', 'AC Split', 'AC RUANG CONTROL ROOM', '-', '-', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00089, 'CME0003006758', '2', 'Battery', 'AC Standing', 'AC PCU 2.05 Daikin', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00090, 'CME003265200', '2', 'Battery', 'AC Standing', 'AC PCU 2.04', '-', '-', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00091, 'CME003390448', '2', 'Panel', 'AC Split', 'DAIKIN/1.5PK/02/06/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00092, 'CME003353972', '2', 'Panel', 'AC Split', 'DAIKIN/1.5PK/02/03/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00093, 'CME003365277', '2', 'Operator', 'AC Split', 'DAIKIN/2PK/02/05/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00094, 'CME003365273', '2', 'Istirahat', 'AC Split', 'DAIKIN/2PK/02/04/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00095, 'CME003037024', '3', 'Battery', 'AC Standing', 'PCU 3.04 Daikin', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00096, 'CME003037063', '3', 'Battery', 'AC Standing', 'PCU 3.05 Daikin', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00097, 'CME003365319', '3', 'Panel', 'AC Split', 'UPD178.ACINDOORDAIKIN.F3.NEWRUANGPANEL.BG13', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00098, 'CME003379557', '3', 'Panel', 'AC Split', 'DAIKIN/1.5PK/03/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00099, 'CME003379561', '3', 'Istirahat', 'AC Split', 'DAIKIN/2PK/03/03/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00100, 'CME003379565', '3', 'Operator', 'AC Split', 'DAIKIN/1.5PK/03/04/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00101, 'CME003060951', '4', 'Battery', 'AC Standing', 'PCU 4.04 Daikin', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00102, 'CME003061019', '4', 'Battery', 'AC Standing', 'PCU 4.05 Daikin', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00103, 'CME003390498', '4', 'Panel', 'AC Split', 'DAIKIN/1.5PK/04/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00104, 'CME003390478', '4', 'Panel', 'AC Split', 'DAIKIN/1.5PK/04/01/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00105, 'CME003390523', '4', 'Rapat', 'AC Split', 'DAIKIN/2PK/04/03/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00106, 'CME003097750', '4', 'Interkoneksi', 'AC Standing', 'AC Daikin 4.12', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00107, 'CME003097741', '4', 'Interkoneksi', 'AC Standing', 'AC Daikin 4.11', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00108, 'CME003097703', '4', 'Interkoneksi', 'AC Standing', 'AC Daikin 4.10', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00109, 'CME003097694', '4', 'Interkoneksi', 'AC Standing', 'AC Daikin 4.13', '-', 'Daikin', '-', '-', '-', 0.00, 'Rusak', 'OFF', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00110, 'CME003393990', '5', 'Panel', 'AC Split', 'DAIKIN/1.5 PK/05/01/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00111, 'CME003393997', '5', 'Panel', 'AC Split', 'DAIKIN/1.5 PK/05/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00112, 'CME003393992', 'Rooftop', 'Rooftop', 'AC Split', 'DAIKIN/1.5 PK/05/02/IN', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00'),
(00113, 'CME003393995', 'Rooftop', 'Rooftop', 'AC Split', 'DAIKIN/1.5 PK/06/01/OU', '-', 'Daikin', '-', '-', '-', 0.00, 'Baik', 'ON', '-', '-', '-', '-', '2024-12-17 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `finishing`
--

CREATE TABLE IF NOT EXISTS `finishing` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000',
  `ne_id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ket` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `install` date NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `finishing`
--

TRUNCATE TABLE `finishing`;
-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

CREATE TABLE IF NOT EXISTS `fire` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `barcode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `condition` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `install` year NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `fire`
--

TRUNCATE TABLE `fire`;
--
-- Dumping data for table `fire`
--

INSERT INTO `fire` (`id`, `floor`, `room`, `category`, `name`, `vendor`, `brand`, `type`, `barcode`, `quantity`, `condition`, `info`, `install`, `maintanance`, `updated_at`) VALUES
(00001, 'Semi Basement', 'Genset', 'APAR', 'AP.0-04', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00002, '1', 'Koridor', 'APAR', 'AP.1-20', '-', 'ATP', 'Clean Agent (Gas)', '-', 1, 'Baik', 'Kapasitas 4 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00003, '1', 'Koridor', 'APAR', 'AP.1-25', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2023', '-', '2024-12-15 22:15:51'),
(00004, '1', 'Koridor', 'APAR', 'AP.1-13', '-', 'SERVVO', 'Powder', '-', 1, 'Baik', 'Kapasitas 7 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00005, '1', 'Control', 'APAR', 'AP.1-26', '-', 'SERVVO', 'Clean Agent', '-', 1, 'Baik', 'Kapasitas 1 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00006, '2', 'Trafo', 'APAR', 'AP.2-05', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00007, '2', 'Trafo', 'APAR', 'AP.2-19', '-', 'ATP', 'Clean Agent', '-', 1, 'Baik', 'Kapasitas 4 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00008, '2', 'Koridor', 'APAR', 'AP.2-21', '-', 'ATP', 'Clean Agent', '-', 1, 'Baik', 'Kapasitas 4 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00009, '2', 'Koridor', 'APAR', 'AP.2-08', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2023', '-', '2024-12-15 22:15:51'),
(00010, '3', 'Koridor', 'APAR', 'AP.3-22', '-', 'ATP', 'Clean Agent', '-', 1, 'Baik', 'Kapasitas 4 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00011, '3', 'Koridor', 'APAR', 'AP.3-09', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00012, '4', 'Koridor', 'APAR', 'AP.4-23', '-', 'ATP', 'Clean Agent', '-', 1, 'Baik', 'Kapasitas 4 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00013, '4', 'Koridor', 'APAR', 'AP.4-10', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00014, '5', 'Koridor', 'APAR', 'AP.5-18', '-', 'Vulcan', 'Powder', '-', 1, 'Baik', 'Kapasitas 3 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00015, '5', 'Koridor', 'APAR', 'AP.5-11', '-', 'Gunnebo', 'Powder', '-', 1, 'Baik', 'Kapasitas 6 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00016, '5', 'Data Center', 'APAR', 'AP.5-18', '-', 'Vulcan', 'AF 11', '-', 4, 'Baik', 'Kapasitas 3 Kg', '2024', '-', '2024-12-15 22:15:51'),
(00017, '2', 'MSC', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020486', 1, 'Baik', 'Tinggi 134', '2012', '-', '2025-01-21 11:34:31'),
(00018, '2', 'MSC', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020638', 1, 'Baik', 'Tinggi 92', '2012', '-', '2025-01-21 11:34:15'),
(00019, '2', 'MSC', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020639', 1, 'Baik', '-', '2012', '-', '2025-01-21 11:35:37'),
(00020, '2', 'CSPS', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020640', 1, 'Baik', 'Tinggi 136', '2012', '-', '2025-01-21 11:46:11'),
(00021, '2', 'Panel', 'FM200', 'Panel', '-', 'Kidde', 'Aries', 'BOF000019115', 1, 'Baik', '-', '2012', '-', '2025-01-21 11:37:51'),
(00022, '2', 'Rectifier', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000019117', 1, 'Baik', 'Tinggi 134', '2012', '-', '2025-01-21 11:38:54'),
(00023, '2', 'Koridor', 'HYDRANT', 'HYDRANT', '-', '-', '-', 'GPN00003071', 1, 'Baik', '-', '0000', '-', '2025-01-21 11:39:48'),
(00024, '3', 'MKIOS', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000021147', 1, 'Baik', 'Tinggi 136', '2012', '-', '2025-01-21 11:46:33'),
(00025, '3', 'INVAS', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020819', 1, 'Baik', 'Tinggi 134', '2012', '-', '2025-01-21 11:42:05'),
(00026, '3', 'INVAS', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020818', 1, 'Baik', 'Tinggi 92', '2012', '-', '2025-01-21 11:42:50'),
(00027, '3', 'INVAS', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020817', 1, 'Baik', 'Tinggi 134', '2012', '-', '2025-01-21 11:43:26'),
(00028, '3', 'Panel', 'FM200', 'Panel', '-', 'Honeywell', 'NFS-320', '-', 1, 'Baik', '-', '2024', '-', '2025-01-21 11:44:38'),
(00029, '3', 'Rectifier', 'FM200', 'Tabung', '-', 'Siemens', '-', 'BOF000020816', 1, 'Baik', 'Tinggi 134', '2012', '-', '2025-01-21 11:45:46'),
(00030, '2', 'Koridor', 'HYDRANT', 'HYDRANT', '-', '-', '-', 'GPN000030658', 1, 'Baik', '-', '0000', '-', '2025-01-21 11:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000',
  `floor` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ket` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `install` date NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `furniture`
--

TRUNCATE TABLE `furniture`;
-- --------------------------------------------------------

--
-- Table structure for table `light`
--

CREATE TABLE IF NOT EXISTS `light` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `watt` int NOT NULL,
  `quantity` int NOT NULL,
  `condition` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `light`
--

TRUNCATE TABLE `light`;
--
-- Dumping data for table `light`
--

INSERT INTO `light` (`id`, `floor`, `room`, `brand`, `type`, `watt`, `quantity`, `condition`, `info`, `updated_at`) VALUES
(00001, 'Semi Basement', 'LOBBY ', 'PHILLIPS', 'TL 18 WATT', 0, 3, 'Baik', '3 LAMPU MASIH 18 WATT', '2024-12-12 16:17:00'),
(00002, 'Semi Basement', 'KORIDOR ', 'PHILLIPS', 'LED BULD 9 WATT', 0, 4, 'Baik', '', '2024-12-13 16:17:00'),
(00003, 'Semi Basement', 'TOILET ', 'PHILLIPS', 'LED BULD 9 WATT', 0, 4, 'Baik', '1 LAMPU TL MASIH 18 WATT', '2024-12-14 16:17:00'),
(00004, 'Semi Basement', 'HOUSE KEEPING ', 'PHILLIPS', 'TL LED 9 WATT', 0, 6, 'Baik', '4 LAMPU MASIH 18 WATT', '2024-12-15 16:17:00'),
(00005, 'Semi Basement', 'GUDANG', 'PHILLIPS', 'TL 36 WATT', 0, 20, 'Baik', 'SEMUA LAMPU MASIH 36 WATT', '2024-12-16 16:17:00'),
(00006, 'Semi Basement', 'PARKIRAN ', 'PHILLIPS', 'TL 36 WATT', 0, 12, 'Baik', 'SEMUA LAMPU MASIH 36 WATT', '2024-12-17 16:17:00'),
(00007, 'Semi Basement', 'PARKIRAN BELAKANG', 'PHILLIPS', 'TL 36 WATT', 0, 7, 'Baik', 'SEMUA LAMPU MASIH 36 WATT', '2024-12-18 16:17:00'),
(00008, 'Semi Basement', 'TANGGA DARURAT ', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '1 LAMPU MASIH TL RING', '2024-12-19 16:17:00'),
(00009, 'Semi Basement', 'SELASAR ', 'PHILLIPS', 'TL RING', 0, 8, 'Rusak', 'MATI SEMUA', '2024-12-20 16:17:00'),
(00010, 'Semi Basement', 'TANGKI BULANAN', 'PHILLIPS', 'TL LED 16 WATT', 0, 4, 'Baik', '2 LAMPU SOROT IN-LITE 30 WATT', '2024-12-21 16:17:00'),
(00011, 'Semi Basement', 'POS SECURITY', 'PHILLIPS', 'LED BULD 9 WATT', 0, 7, 'Baik', '', '2024-12-22 16:17:00'),
(00012, 'Semi Basement', 'LAMPU SOROT', 'PHILLIPS', 'SOROT', 0, 12, 'Baik', '', '2024-12-23 16:17:00'),
(00013, 'Semi Basement', 'LAMPU TAMAN', 'PHILLIPS', 'ESSENTIAL', 0, 17, 'Rusak', 'MATI SEMUA', '2024-12-24 16:17:00'),
(00014, 'Semi Basement', 'PARKIRAN DEPAN', 'PHILLIPS', 'TL LED 16 WATT', 0, 1, 'Baik', '', '2024-12-25 16:17:00'),
(00015, 'Semi Basement', 'STAFF ', 'PHILLIPS', 'TL LED 8 WATT', 0, 4, 'Baik', '2 LAMPU MASIH 18 WATT', '2024-12-26 16:17:00'),
(00016, 'Basement', 'HYDRANT', 'PHILLIPS', 'TL 18 WATT', 0, 2, 'Baik', '', '2024-12-27 16:17:00'),
(00017, 'Basement', 'HYDRANT', 'PHILLIPS', 'TL 18 WATT', 0, 2, 'Rusak', '', '2024-12-28 16:17:00'),
(00018, 'Basement', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '', '2024-12-29 16:17:00'),
(00019, '1', 'VENDOR', 'PHILLIPS', 'LED 8 WATT', 0, 12, 'Baik', '12 LAMPU MASIH 18 WATT', '2024-12-30 16:17:00'),
(00020, '1', 'MECHANICAL ENGINEERING', 'PHILLIPS', 'LED 8 WATT', 0, 4, 'Baik', '2 LAMPU MASIH 18 WATT', '2024-12-31 16:17:00'),
(00021, '1', 'MUSHOLLA', 'PHILLIPS', 'LED 8 WATT & LED BULD 9 WATT', 0, 7, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-01-01 16:17:00'),
(00022, '1', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 10, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-01-02 16:17:00'),
(00023, '1', 'PANTRY', 'PHILLIPS', 'LED BULD 9 WATT', 0, 4, 'Baik', '', '2025-01-03 16:17:00'),
(00024, '1', 'KORIDOR', 'PHILLIPS', 'LED 8 WATT & LED BULD 9 WATT', 0, 16, 'Baik', '12 LAMPU MASIH 18 WATT', '2025-01-04 16:17:00'),
(00025, '1', 'CONTROL', 'PHILLIPS', 'LED 8 WATT, LED BULD 18 WATT & LED 16 WATT', 0, 28, 'Baik', '12 LAMPU MASIH 18 WATT', '2025-01-05 16:17:00'),
(00026, '1', 'STAFF', 'PHILLIPS', 'LED 8 WATT & LED BULD 9 WATT', 0, 106, 'Baik', '90 LAMPU MASIH 18 WATT & 10 LAMPU MASIH 12 WATT', '2025-01-06 16:17:00'),
(00027, '1', 'TOILET', 'PHILLIPS', 'LED 8 WATT & LED BULD 9 WATT', 0, 4, 'Baik', '1 LAMPU MASIH 18 WATT & 2 LAMPU 12 WATT', '2025-01-07 16:17:00'),
(00028, '1', 'LOBBY', 'PHILLIPS', 'LED 8 WATT & LED BULD 9 WATT', 0, 26, 'Baik', '16 LAMPU MASIH 36 WATT & 11 LAMPU MASIH 12 WATT', '2025-01-08 16:17:00'),
(00029, '1', 'SELASAR DEPAN', 'PHILLIPS', 'LED BULD 9 WATT', 0, 16, 'Baik', '16 LAMPU MASIH 12 WATT', '2025-01-09 16:17:00'),
(00030, '1', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '', '2025-01-10 16:17:00'),
(00031, '2', 'MSC', 'PHILLIPS', 'LED 16 WATT', 0, 48, 'Baik', '38 LAMPU MASIH 36 WATT', '2025-01-11 16:17:00'),
(00032, '2', 'CSPS', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '2 LAMPU MASIH 36 WATT', '2025-01-12 16:17:00'),
(00033, '2', 'RECTIFIER', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '8 LAMPU MASIH 36 WATT', '2025-01-13 16:17:00'),
(00034, '2', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 4, 'Baik', '4 LAMPU MASIH 18 WATT', '2025-01-14 16:17:00'),
(00035, '2', 'BATTERY', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '8 LAMPU MASIH 36 WATT', '2025-01-15 16:17:00'),
(00036, '2', 'ISTIRAHAT', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-01-16 16:17:00'),
(00037, '2', 'MONITORING', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '3 LAMPU MASIH 18 WATT', '2025-01-17 16:17:00'),
(00038, '2', 'KORIDOR', 'PHILLIPS', 'LED 8 WATT', 0, 12, 'Baik', '12 LAMPU MASIH 18 WATT', '2025-01-18 16:17:00'),
(00039, '2', 'STAGING', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Baik', '2 LAMPU ESSENTIAL 18 WATT', '2025-01-19 16:17:00'),
(00040, '2', 'SELASAR DEPAN', 'PHILLIPS', 'TL BULAT', 0, 5, 'Rusak', 'MATI SEMUA', '2025-01-20 16:17:00'),
(00041, '2', 'SELASAR BELAKANG', 'PHILLIPS', 'LED BULD 9 WATT', 0, 10, 'Baik', '', '2025-01-21 16:17:00'),
(00042, '2', 'TOILET', 'PHILLIPS', 'BULD 12 DAN 8 WATT', 0, 4, 'Baik', '1 LAMPU TYPE 18 WATT 3 TYPE BULD', '2025-01-22 16:17:00'),
(00043, '2', 'TRAFO', 'PHILLIPS', 'LED 16 WATT', 0, 8, 'Baik', '8 LAMPU TL ESSENTIAL 36 WATT', '2025-01-23 16:17:00'),
(00044, '2', 'TANGGA TRAFO', 'PHILLIPS', 'LED BULD 18 WATT', 0, 1, 'Baik', '', '2025-01-24 16:17:00'),
(00045, '2', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '', '2025-01-25 16:17:00'),
(00046, '3', 'STAGING', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Rusak', 'MATI SEMUA', '2025-01-26 16:17:00'),
(00047, '3', 'KORIDOR', 'PHILLIPS', 'LED 8 WATT', 0, 18, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-01-27 16:17:00'),
(00048, '3', 'TOILET', 'PHILLIPS', 'BULD 12 DAN 8 WATT', 0, 4, 'Baik', '1 LAMPU TYPE 18 WATT 3 TYPE BULD', '2025-01-28 16:17:00'),
(00049, '3', 'BATTERY', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '6 LAMPU MASIH 36 WATT', '2025-01-29 16:17:00'),
(00050, '3', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '', '2025-01-30 16:17:00'),
(00051, '3', 'RECTIFIER', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '2 LAMPU MASIH 36 WATT', '2025-01-31 16:17:00'),
(00052, '3', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Baik', '', '2025-02-01 16:17:00'),
(00053, '3', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Rusak', '', '2025-02-02 16:17:00'),
(00054, '3', 'ISTIRAHAT', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-02-03 16:17:00'),
(00055, '3', 'MONITORING', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '6 LAMPU MASIH 18 WATT', '2025-02-04 16:17:00'),
(00056, '3', 'INVAS', 'PHILLIPS', 'LED 16 WATT', 0, 24, 'Baik', '8 LAMPU MASIH 36 WATT', '2025-02-05 16:17:00'),
(00057, '3', 'OCS', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '6 LAMPU MASIH 36 WATT', '2025-02-06 16:17:00'),
(00058, '3', 'CORE', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '6 LAMPU MASIH 36 WATT', '2025-02-07 16:17:00'),
(00059, '3', 'MKIOS', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '8 LAMPU MASIH 36 WATT', '2025-02-08 16:17:00'),
(00060, '3', 'SELASAR BELAKANG', 'PHILLIPS', 'LED BULD 9 WATT', 0, 10, 'Baik', '1 LAMPU MASIH TL BULAT', '2025-02-09 16:17:00'),
(00061, '3', 'SELASAR DEPAN', 'PHILLIPS', 'TL BULAT', 0, 3, 'Baik', '', '2025-02-10 16:17:00'),
(00062, '3', 'SELASAR DEPAN', 'PHILLIPS', 'TL BULAT', 0, 2, 'Rusak', '', '2025-02-11 16:17:00'),
(00063, '4', 'BATTERY', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '6 LAMPU MASIH 36 WATT', '2025-02-12 16:17:00'),
(00064, '4', 'KORIDOR', 'PHILLIPS', 'LED 8 WATT', 0, 24, 'Baik', '21 LAMPU MASIH 18 WATT', '2025-02-13 16:17:00'),
(00065, '4', 'RECTIFIER', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '12 LAMPU MASIH 36 WATT', '2025-02-14 16:17:00'),
(00066, '4', 'BSS/TRAU', 'PHILLIPS', 'LED 16 WATT', 0, 10, 'Baik', '6 LAMPU MASIH 36 WATT', '2025-02-15 16:17:00'),
(00067, '4', 'INTERKONEKSI', 'PHILLIPS', 'LED 16 WATT', 0, 24, 'Baik', '16 LAMPU MASIH 36 WATT', '2025-02-16 16:17:00'),
(00068, '4', 'TRANSMISI', 'PHILLIPS', 'LED 16 WATT', 0, 22, 'Baik', '16 LAMPU MASIH 36 WATT', '2025-02-17 16:17:00'),
(00069, '4', 'OPERATOR', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '9 LAMPU MASIH 18 WATT', '2025-02-18 16:17:00'),
(00070, '4', 'RAPAT', 'PHILLIPS', 'LED 8 WATT', 0, 9, 'Baik', '9 LAMPU MASIH 18 WATT', '2025-02-19 16:17:00'),
(00071, '4', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Baik', '', '2025-02-20 16:17:00'),
(00072, '4', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Rusak', '', '2025-02-21 16:17:00'),
(00073, '4', 'STAGING', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Baik', '2 LAMPU MASIH 18 WATT', '2025-02-22 16:17:00'),
(00074, '4', 'TOILET', 'PHILLIPS', 'BULD 12 DAN 18 WATT', 0, 4, 'Baik', '1 LAMPU TYPE 18 WATT 3 TYPE BULD', '2025-02-23 16:17:00'),
(00075, '4', 'SELASAR DEPAN', 'PHILLIPS', 'TL BULAT', 0, 5, 'Rusak', 'MATI SEMUA', '2025-02-24 16:17:00'),
(00076, '4', 'SELASAR BELAKANG', 'PHILLIPS', 'TL BULAT', 0, 10, 'Rusak', 'MATI SEMUA', '2025-02-25 16:17:00'),
(00077, '4', 'TANGGA DARURAT', 'PHILLIPS', 'TL BULAT / LED BULD 9 WATT', 0, 2, 'Baik', '1 LAMPU TL BULAT MATI', '2025-02-26 16:17:00'),
(00078, '5', 'CONTAINMENT', 'PHILLIPS', 'LED 16 WATT', 0, 12, 'Baik', '12 LAMPU MASIH 36 WATT', '2025-02-27 16:17:00'),
(00079, '5', 'PENGEMBANGAN', 'PHILLIPS', 'LED 16 WATT', 0, 24, 'Baik', '24 LAMPU MASIH 36 WATT', '2025-02-28 16:17:00'),
(00080, '5', 'DATA CENTER', 'PHILLIPS', 'LED 16 WATT', 0, 54, 'Baik', '', '2025-03-01 16:17:00'),
(00081, '5', 'PANEL', 'PHILLIPS', 'LED 8 WATT', 0, 4, 'Baik', '4 LAMPU MASIH 18 WATT', '2025-03-02 16:17:00'),
(00082, '5', 'UTILITY A', 'PHILLIPS', 'LED 16 WATT', 0, 14, 'Baik', '', '2025-03-03 16:17:00'),
(00083, '5', 'UTILITY B', 'PHILLIPS', 'LED 16 WATT', 0, 14, 'Baik', '', '2025-03-04 16:17:00'),
(00084, '5', 'TOILET', 'PHILLIPS', 'LED BULD & LED 8 WATT', 0, 4, 'Baik', '2 LAMPU MASIH ESENTIAL DAN 1 LAMPU TL 18 WATT', '2025-03-05 16:17:00'),
(00085, '5', 'STAGING', 'PHILLIPS', 'LED 8 WATT', 0, 2, 'Baik', '2 LAMPU MASIH 18 WATT', '2025-03-06 16:17:00'),
(00086, '5', 'PINTU SHAFF DATA', 'PHILLIPS', 'LED 16 WATT', 0, 2, 'Baik', '2 LAMPU MASIH 36 WATT', '2025-03-07 16:17:00'),
(00087, '5', 'PINTU SHAFF POWER', 'PHILLIPS', 'LED 16 WATT', 0, 1, 'Baik', '1 LAMPU MASIH 36 WATT', '2025-03-08 16:17:00'),
(00088, '5', 'KORIDOR', 'PHILLIPS', 'LED 8 WATT', 0, 15, 'Baik', '9 LAMPU MASIH 18 WATT', '2025-03-09 16:17:00'),
(00089, '5', 'SELASAR DEPAN', 'PHILLIPS', 'LED BULD 9 WATT', 0, 11, 'Rusak', 'MATI SEMUA', '2025-03-10 16:17:00'),
(00090, '5', 'SELASAR BELAKANG', 'PHILLIPS', 'LED BULD 9 WATT', 0, 5, 'Rusak', 'MATI SEMUA', '2025-03-11 16:17:00'),
(00091, '5', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Baik', '', '2025-03-12 16:17:00'),
(00092, 'Rooftop', 'ROOFTOP', 'PHILLIPS', 'TL BULAT DAN SOROT', 0, 7, 'Baik', '1 LAMPU TL BULAT 6 LAMPU SOROT', '2025-03-13 16:17:00'),
(00093, 'Rooftop', 'TANGGA DARURAT', 'PHILLIPS', 'LED BULD 9 WATT', 0, 2, 'Rusak', 'MATI SEMUA', '2025-03-14 16:17:00'),
(00094, 'Rooftop', 'RUANG LIFT', 'PHILLIPS', 'TL 18 WATT', 0, 2, 'Baik', '', '2025-03-15 16:17:00'),
(00095, 'Rooftop', 'GUDANG ROOFTOP', 'PHILLIPS', 'TL 18 WATT', 0, 2, 'Baik', '', '2025-03-16 16:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE IF NOT EXISTS `power` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `sn` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `barcode` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `capacity` int NOT NULL,
  `modul` int NOT NULL,
  `modul_capacity` double(15,2) NOT NULL,
  `occupancy` int NOT NULL,
  `aging` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `battery` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `source_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `source_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `condition` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `install` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`,`name`,`vendor`,`brand`,`condition`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `power`
--

TRUNCATE TABLE `power`;
--
-- Dumping data for table `power`
--

INSERT INTO `power` (`id`, `sn`, `barcode`, `floor`, `room`, `category`, `name`, `vendor`, `brand`, `type`, `capacity`, `modul`, `modul_capacity`, `occupancy`, `aging`, `battery`, `source_a`, `source_b`, `condition`, `status`, `info`, `install`, `maintanance`, `updated_at`) VALUES
(00001, '21010731126HKA000096', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.01', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 29, 'Above 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2019-10-16', '-', '2024-12-16 21:40:00'),
(00002, '21010731126HK5000024', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.02', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 30, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2019-05-08', '-', '2024-12-17 21:40:00'),
(00003, '21010731126HK1000007', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.03', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 24, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2019-01-11', '-', '2024-12-18 21:40:00'),
(00004, '21010731126HKA000089', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.04', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 28, 'Under 10 Years', 'HUAWEI', '-', '-', 'Baik', 'ON', '-', '2019-10-16', '-', '2024-12-19 21:40:00'),
(00005, '21010731126HK9000027', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.05', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 28, 'Under 10 Years', 'HUAWEI', '-', '-', 'Baik', 'ON', '-', '2019-09-19', '-', '2024-12-20 21:40:00'),
(00006, '6H16A0005076', '', '2', 'Rectifier', 'Rectifier', 'Rectifier 2.06', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 30, 'Above 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2016-10-27', '-', '2024-12-21 21:40:00'),
(00007, '21010731126HK9000019', '', '3', 'Rectifier', 'Rectifier', 'Rectifier 3.01', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 24, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2019-10-19', '-', '2024-12-22 21:40:00'),
(00008, 'BT2150081470', '', '3', 'Rectifier', 'Rectifier', 'Rectifier 3.02', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 22, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2021-06-10', '-', '2024-12-23 21:40:00'),
(00009, 'BT2250304398', '', '3', 'Rectifier', 'Rectifier', 'Rectifier 3.03', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 14, 'Under 10 Years', 'HUAWEI', '-', '-', 'Baik', 'ON', '-', '2022-08-17', '-', '2024-12-24 21:40:00'),
(00010, 'BT2250304441', '', '3', 'Rectifier', 'Rectifier', 'Rectifier 3.04', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.56, 21, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2022-08-17', '-', '2024-12-25 21:40:00'),
(00011, '6H16A0005062', '', '4', 'Rectifier', 'Rectifier', 'Rectifier 4.04', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.57, 53, 'Above 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2016-10-27', '-', '2024-12-26 21:40:00'),
(00012, 'BT2150081502', '', '4', 'Rectifier', 'Rectifier', 'Rectifier 4.07', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.58, 62, 'Under 10 Years', 'HUAWEI', '-', '-', 'Baik', 'ON', '-', '2021-06-09', '-', '2024-12-27 21:40:00'),
(00013, '21010731126HKA000083', '', '4', 'Rectifier', 'Rectifier', 'Rectifier 4.12', 'Wiraky Nusa Telekomunikasi', 'Huawei', 'TP482000B', 1200, 24, 55.59, 34, 'Under 10 Years', 'SHOTO', '-', '-', 'Baik', 'ON', '-', '2019-10-16', '-', '2024-12-28 21:40:00'),
(00014, '2.1012E+19', '', '2', 'Rectifier', 'UPS', 'UPS 2.02', 'PT. Telkom Infra', 'Liebert', 'APM 300', 90, 3, 30.00, 21, 'Under 10 Years', 'AMARON', '-', '-', 'Baik', 'ON', '-', '2020-12-18', '-', '2024-12-29 21:40:00'),
(00015, '2.1012E+19', '', '2', 'Rectifier', 'UPS', 'UPS 2.03', 'PT. Telkom Infra', 'Liebert', 'APM 300', 90, 3, 30.00, 22, 'Under 10 Years', 'VISION', '-', '-', 'Baik', 'ON', '-', '2020-12-18', '-', '2024-12-30 21:40:00'),
(00016, '4R491WAA03', '', '3', 'Rectifier', 'UPS', 'UPS 3.01', 'PT. Telkom Infra', 'Eaton', '93PR-200-BF', 125, 5, 25.00, 11, 'Under 10 Years', 'AMARON', '-', '-', 'Baik', 'ON', '-', '2023-05-23', '2024-12-12', '2024-12-31 21:40:00'),
(00017, '4R84WAA03', '', '3', 'Rectifier', 'UPS', 'UPS 3.02', 'PT. Telkom Infra', 'Eaton', '93PR-200-BF', 125, 5, 25.00, 11, 'Under 10 Years', 'LEOCH', '-', '-', 'Baik', 'ON', '-', '2023-05-24', '2024-12-12', '2025-01-01 21:40:00'),
(00018, '4K474WAA03', '', '5', 'Utility A', 'UPS', 'UPS 5.01', 'PT. Telkom Infra', 'Eaton', '93PR-200-BF', 125, 5, 25.00, 18, 'Under 10 Years', 'AMARON', '-', '-', 'Baik', 'ON', '-', '2017-03-12', '-', '2025-01-02 21:40:00'),
(00019, '4K463WAA03', '', '5', 'Utility B', 'UPS', 'UPS 5.02', 'PT. Telkom Infra', 'Eaton', '93PR-200-BF', 125, 5, 25.00, 17, 'Under 10 Years', 'AMARON', '-', '-', 'Baik', 'ON', '-', '2017-03-13', '-', '2025-01-03 21:40:00'),
(00020, 'X08F260187', '', 'Semi Basement', 'Genset', 'Genset', 'Genset 1', 'PT Bina Pertiwi', 'Komatsu', 'EGS850', 750, 0, 0.00, 0, '-', 'DUTY', '-', '-', 'Baik', 'ON', '-', '2015-06-10', '-', '2025-01-04 21:40:00'),
(00021, 'X10D150803', '', 'Semi Basement', 'Genset', 'Genset', 'Genset 2', 'PT Bina Pertiwi', 'Komatsu', 'EGS1200', 1000, 0, 0.00, 0, '-', 'YUASA', '-', '-', 'Baik', 'ON', '-', '-', '2024-10-31', '2025-01-05 21:40:00'),
(00022, '-', '', 'Semi Basement', 'Genset', 'Genset', 'Genset 3', 'PT Bina Pertiwi', 'Komatsu', 'EGS850', 750, 0, 0.00, 0, '-', 'DUTY', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-06 21:40:00'),
(00023, '20CR30013', '', '1', 'Trafo', 'Trafo', 'Trafo', 'PT. Trafindo Perkasa', 'Trafindo', '-', 2000, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-07 21:40:00'),
(00024, 'SM0900015', '', '1', 'Trafo', 'Cubicle', 'Cubical', '-', 'Schneider', 'SM6', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-08 21:40:00'),
(00025, 'SM0924017CI', '', '1', 'Trafo', 'Cubicle', 'Cubical', '-', 'Schneider', 'SM7', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-09 21:40:00'),
(00026, '-', '', 'Basement', 'Hydrant', 'Panel', 'ACPDB B.03 FROM PANEL B.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL B.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-10 21:40:00'),
(00027, '-', '', 'Basement', 'Hydrant', 'Panel', 'ACPDB B.04 FROM PANEL B.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL B.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-11 21:40:00'),
(00028, '-', '', 'Basement', 'Hydrant', 'Panel', 'ACPDB B.05 FROM PANEL B.06', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL B.06', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-12 21:40:00'),
(00029, '-', '', 'Basement', 'Hydrant', 'Panel', 'ACPDB B.07 FROM PANEL B.06', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL B.06', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-13 21:40:00'),
(00030, '-', '', 'Basement', 'Genset', 'Panel', 'PANEL FUEL PUMP', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-14 21:40:00'),
(00031, '-', '', 'Basement', 'Genset', 'Panel', 'UPD178.BOXPANEL.F1.NEWGENSETROOM.AA02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-15 21:40:00'),
(00032, '-', '', 'Basement', 'Genset', 'Panel', 'UPD178.BOXPANEL.F1.NEWGENSETROOM.AA03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-16 21:40:00'),
(00033, '-', '', 'Basement', 'Genset', 'Panel', 'CONTROL PANEL ASD GENSET ROOM LT.1 EARLY WARNING SYSTEM', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-17 21:40:00'),
(00034, '-', '', 'Basement', 'Genset', 'Panel', 'PANEL FAN GENSET', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-18 21:40:00'),
(00035, '-', '', 'Basement', 'Trafo', 'Panel', 'CONTROL PANEL ASD TRAVO ROOM LT.2 EARLY WARNING SYSTEM', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-19 21:40:00'),
(00036, '-', '', 'Semi Basement', 'SB', 'Panel', 'Panel SB-02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-20 21:40:00'),
(00037, '-', '', 'Semi Basement', 'SB', 'Panel', 'Panel Collector', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-01-21 21:40:00'),
(00038, '-', '', '1', 'Panel', 'Panel', 'Panel Incoming', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL LVMDP', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-22 21:40:00'),
(00039, '-', '', '1', 'Panel', 'Panel', 'Panel COS', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL LVMDP', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-23 21:40:00'),
(00040, '-', '', '1', 'Panel', 'Panel', 'Panel MDP', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL LVMDP', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-24 21:40:00'),
(00041, '-', '', '1', 'Panel', 'Panel', 'Panel ACPDB 1.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL MDP RISER 1', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-25 21:40:00'),
(00042, '-', '', '1', 'Panel', 'Panel', 'Panel ACPDB 1.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL MDP RISER 1', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-26 21:40:00'),
(00043, '-', '', '1', 'Panel', 'Panel', 'Panel ACPDB 1.03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL MDP RISER 2', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-27 21:40:00'),
(00044, '-', '', '1', 'Panel', 'Panel', 'UPD178.PANEL.F1.RUANGPOWERUTAMA.362601', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL CCTV R.RECT LT2', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-28 21:40:00'),
(00045, '-', '', '1', 'Panel', 'Panel', 'panel ACPDB 1.04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-01-29 21:40:00'),
(00046, '-', '', '1', 'Panel', 'Panel', 'UPD178.R-FM200.F1.NEW-RUANG-PANEL-BE10', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-01-30 21:40:00'),
(00047, '-', '', '1', 'Panel', 'Panel', 'CONTROL PANEL AUTO PULSE', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-01-31 21:40:00'),
(00048, '-', '', '1', 'Panel', 'Panel', 'PANEL AKSES RUANG PANEL', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-02-01 21:40:00'),
(00049, '-', '', '1', 'Mushollah', 'Panel', 'UPD178.AC INDOOR.F1.NEW-RUANG-PANEL-BA03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 1.03', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-02 21:40:00'),
(00050, '-', '', '1', 'Control Room', 'Panel', 'UPD178.PANEL.F1.NEW-CONTROLROOM.AX23', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'ACPDB CONTROL ROOM', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-03 21:40:00'),
(00051, '-', '', '2', 'Lorong', 'Panel', 'UPD178.PANELHYDRANT.F2.NEWCORRIDOR.BN14', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-02-04 21:40:00'),
(00052, '-', '', '2', 'Battery', 'Panel', 'PANEL ACPDB 2.36', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 2.03', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-05 21:40:00'),
(00053, '-', '', '2', 'Battery', 'Panel', 'Panel FM-200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-06 21:40:00'),
(00054, '-', '', '2', 'Battery', 'Panel', 'Panel ACPDB 2.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-07 21:40:00'),
(00055, '-', '', '2', 'Battery', 'Panel', 'UPD178.PANELHONEYWELL', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-08 21:40:00'),
(00056, '-', '', '2', 'Panel', 'Panel', 'Panel ACPDB 2.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 2.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-09 21:40:00'),
(00057, '-', '', '2', 'Panel', 'Panel', 'Panel ACPDB 2.03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-10 21:40:00'),
(00058, '-', '', '2', 'Panel', 'Panel', 'Panel ACPDB 2.04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.03', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-11 21:40:00'),
(00059, '-', '', '2', 'Panel', 'Panel', 'Panel COS 2.04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.06', 'EMERGENCY', 'Baik', 'ON', '-', '-', '-', '2025-02-12 21:40:00'),
(00060, '-', '', '2', 'Panel', 'Panel', 'Panel COS 2.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.09', 'EMERGENCY', 'Baik', 'ON', '-', '-', '-', '2025-02-13 21:40:00'),
(00061, '-', '', '2', 'Panel', 'Panel', 'Panel COS 2.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.02', 'TOB 2.07', 'Baik', 'ON', '-', '-', '-', '2025-02-14 21:40:00'),
(00062, '-', '', '2', 'Panel', 'Panel', 'Panel COS 2.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.01', 'TOB 2.06', 'Baik', 'ON', '-', '-', '-', '2025-02-15 21:40:00'),
(00063, '-', '', '2', 'Panel', 'Panel', 'Panel COS 2.03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.04', 'TOB 2.08', 'Baik', 'ON', '-', '-', '-', '2025-02-16 21:40:00'),
(00064, '-', '', '2', 'Panel', 'Panel', 'Panel Colector Lt. 2', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-17 21:40:00'),
(00065, '-', '', '2', 'Panel', 'Panel', 'UPD178-PANELCONTROLLERBOX', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-18 21:40:00'),
(00066, '-', '', '2', 'Panel', 'Panel', 'UPD178-BOXPANEL-F2-NEWRUANGPANEL-BE08', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-19 21:40:00'),
(00067, '-', '', '2', 'Panel', 'Panel', 'UPD178.F2.RUANGPANEL.BG13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-20 21:40:00'),
(00068, '-', '', '2', 'Panel', 'Panel', 'UPD178.F2.RUANGPANEL.BG13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-21 21:40:00'),
(00069, '-', '', '2', 'Istirahat', 'Panel', 'UPD178.BOXPANEL.F2.NEWRUANGISTIRAHAT.BD03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-22 21:40:00'),
(00070, '-', '', '2', 'Rectifier', 'Panel', 'PANEL IO 400A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.09', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-23 21:40:00'),
(00071, '-', '', '2', 'Rectifier', 'Panel', 'PANEL IO 400A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.06', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-24 21:40:00'),
(00072, '-', '', '2', 'Rectifier', 'Panel', 'Panel ACPDB 2.39', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'UPS 30kVA ZTE RECTY ROOM', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-25 21:40:00'),
(00073, '-', '', '2', 'CSPS', 'Panel', 'PATCH PANEL CPS.SUDIANG-1.NEW', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDB 3.12', 'PANEL 2.42', 'Baik', 'ON', '-', '-', '-', '2025-02-26 21:40:00'),
(00074, '-', '', '2', 'CSPS', 'Panel', 'PATCH PANEL CPS.SUDIANG-2.NEW', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDB 3.17', 'PANEL 2.41', 'Baik', 'ON', '-', '-', '-', '2025-02-27 21:40:00'),
(00075, '-', '', '2', 'MSC', 'Panel', 'PANEL DCPDB 2.16', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTI 2.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-02-28 21:40:00'),
(00076, '-', '', '2', 'MSC', 'Panel', 'PANEL DCPDB 2.27', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.34', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-01 21:40:00'),
(00077, '-', '', '2', 'MSC', 'Panel', 'PANEL DCPDB 2.26', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-02 21:40:00'),
(00078, '-', '', '2', 'MSC', 'Panel', 'PANEL DCPDB 2.18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.14', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-03 21:40:00'),
(00079, '-', '', '2', 'MSC', 'Panel', 'PANEL DCPDB 2.19', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.14', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-04 21:40:00'),
(00080, '-', '', '2', 'MSC', 'Panel', 'UPD178.PANEL MONITORING.F2.NEW-RUANG MSC.AT04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-05 21:40:00'),
(00081, '-', '', '2', 'MSC', 'Panel', 'UPD178.PANEL FM-200.F2.NEW-RUANG MSC.AT05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-06 21:40:00'),
(00082, '-', '', '2', 'MSC', 'Panel', 'UPD178.PANEL MONITORING.F2.NEW-RUANG MSC.AT04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-07 21:40:00'),
(00083, '-', '', '2', 'MSC', 'Panel', 'UPD178.PANEL FM-200.F2.NEW-RUANG MSC.AT05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-08 21:40:00'),
(00084, '-', '', '3', 'Battery', 'Panel', 'UPD178-DCBATTERYCONNECTIONPANEL-F2-NEWRUANGBATREY-BM18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'UPS B EATON 125 KVA', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-09 21:40:00'),
(00085, '-', '', '3', 'Battery', 'Panel', 'ATS Panel PAC 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-10 21:40:00'),
(00086, '-', '', '3', 'Battery', 'Panel', 'Panel ACPDB 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 3.04', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-11 21:40:00'),
(00087, '-', '', '3', 'Battery', 'Panel', 'UPD178-PANELMONITORINGFM200-F3-NEWRUANGBATREY-BU18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL FM 200', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-12 21:40:00'),
(00088, '-', '', '3', 'Rectifier', 'Panel', 'AC Power Distribution Panel 3.07', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 3.03', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-13 21:40:00'),
(00089, '-', '', '3', 'Rectifier', 'Panel', 'AC Power Distribution Panel 3.09', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 3.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-14 21:40:00'),
(00090, '-', '', '3', 'Rectifier', 'Panel', 'Panel IO B FROM PANEL 3.09', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.09', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-15 21:40:00'),
(00091, '-', '', '3', 'Rectifier', 'Panel', 'Rectifier 3.01 From Panel 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-16 21:40:00'),
(00092, '-', '', '3', 'Rectifier', 'Panel', 'Rectifier 3.02 From Panel 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-17 21:40:00'),
(00093, '-', '', '3', 'Rectifier', 'Panel', 'Rectifier 3.03 From Panel 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-18 21:40:00'),
(00094, '-', '', '3', 'Rectifier', 'Panel', 'UPD178.BOXPANEL.F3.NEWRUANGRECTY.BF32', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-19 21:40:00'),
(00095, '-', '', '3', 'Panel', 'Panel', 'Panel COS 3.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 3.05', 'COLLECTOR', 'Baik', 'ON', '-', '-', '-', '2025-03-20 21:40:00'),
(00096, '-', '', '3', 'Panel', 'Panel', 'Panel COS 3.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.05', 'TOB 3.07', 'Baik', 'ON', '-', '-', '-', '2025-03-21 21:40:00'),
(00097, '-', '', '3', 'Panel', 'Panel', 'PANEL COS ACPDB 3.03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 3.02', 'TOB 3.04', 'Baik', 'ON', '-', '-', '-', '2025-03-22 21:40:00'),
(00098, '-', '', '3', 'Panel', 'Panel', 'PANEL COS 3.04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.03', 'TOB 3.03', 'Baik', 'ON', '-', '-', '-', '2025-03-23 21:40:00'),
(00099, '-', '', '3', 'Panel', 'Panel', 'PANEL COS 3.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 3.01', 'TOB 3.06', 'Baik', 'ON', '-', '-', '-', '2025-03-24 21:40:00'),
(00100, '-', '', '3', 'Panel', 'Panel', 'Panel ACPDB 3.03', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-25 21:40:00'),
(00101, '-', '', '3', 'Panel', 'Panel', 'UPD178.ACINDOORDAIKIN.F3.NEWRUANGPANEL.BG13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 3.03', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-26 21:40:00'),
(00102, '-', '', '3', 'Panel', 'Panel', 'UPD178.BOXPANEL.F3.NEWRUANGPANEL.BI13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-27 21:40:00'),
(00103, '-', '', '3', 'Panel', 'Panel', 'UPD178.BOXPANEL.F3.NEWRUANGPANEL.BI10', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-28 21:40:00'),
(00104, '-', '', '3', 'Panel', 'Panel', 'UPD178.BOXPANEL.F3.NERRUANGPANEL.BI09', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-29 21:40:00'),
(00105, '-', '', '3', 'Panel', 'Panel', 'Panel CCTV Power Supply', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-30 21:40:00'),
(00106, '-', '', '3', 'Panel', 'Panel', 'Panel Collector Lt 3', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-03-31 21:40:00'),
(00107, '-', '', '3', 'Lobby', 'Panel', 'UPD178.PANELHYDRANT.F3.NEWCORRIDOR.BM14', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-01 21:40:00'),
(00108, '-', '', '3', 'Invas', 'Panel', 'UPD178.PANEL MONITORING FM200.F3.NEW-RUANG INVAS.AT05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL FM 200', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-02 21:40:00'),
(00109, '-', '', '3', 'Invas', 'Panel', 'EMS Water Leak Panel', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDB 3.31', 'RECT 3.03', 'Baik', 'ON', '-', '-', '-', '2025-04-03 21:40:00'),
(00110, '-', '', '3', 'Invas', 'Panel', 'Panel IO A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'UPS 3.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-04 21:40:00'),
(00111, '-', '', '3', 'Invas', 'Panel', 'Panel IO A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'UPS 3.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-05 21:40:00'),
(00112, '-', '', '3', 'Invas', 'Panel', 'ATS PANEL SMBE', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-06 21:40:00'),
(00113, '-', '', '3', 'Invas', 'Panel', 'PANEL DCPDU 3.36', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECT 4.04', 'RECT 2.03', 'Baik', 'ON', '-', '-', '-', '2025-04-07 21:40:00'),
(00114, '-', '', '3', 'OCS', 'Panel', 'PANEL ACPDB 3.19', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 3.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-08 21:40:00'),
(00115, '-', '', '3', 'Core', 'Panel', 'IPDU 3:37 FROM PANEL 2.42', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.42', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-09 21:40:00'),
(00116, '-', '', '3', 'Core', 'Panel', 'PANEL DCPDB 3.30', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTI 3.03/3.04', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-10 21:40:00'),
(00117, '-', '', '3', 'Core', 'Panel', 'panel dcpdb 3.31', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTI 3.03/3.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-11 21:40:00'),
(00118, '-', '', '3', 'Core', 'Panel', 'ATS PANEL PAC - 3.10 - Q1 -2', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-12 21:40:00'),
(00119, '-', '', '3', 'Mkios', 'Panel', 'PANEL MKIOAS DCPDB (NEGATIVE)', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTI 3.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-13 21:40:00'),
(00120, '-', '', '3', 'Mkios', 'Panel', 'PANEL MKIOS DCPDB (POSITIVE)', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTI 3.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-14 21:40:00'),
(00121, '-', '', '3', 'Mkios', 'Panel', 'ATS PANEL PAC - 3.08 - Q1 - 4', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-15 21:40:00'),
(00122, '-', '', '3', 'Mkios', 'Panel', 'ATS PANEL PAC - 3.09 - Q1 - 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-16 21:40:00'),
(00123, '-', '', '3', 'Mkios', 'Panel', 'UPD178.BOXPANEL.NEWRUANGMKIOS.BD18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-17 21:40:00'),
(00124, '-', '', '3', 'Mkios', 'Panel', 'UPD178.PANELMONITORING FM200 HONEYWELL.F3.NEWRUANGMKIOS.BD23', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-18 21:40:00'),
(00125, '-', '', '4', 'Battery', 'Panel', 'UPD178.PANEL MONITORING FM-200.F4.NEW-RUANG BATTERY.BT18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-19 21:40:00'),
(00126, '-', '', '4', 'Battery', 'Panel', 'Panel ACPDB 4.29', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-20 21:40:00'),
(00127, '-', '', '4', 'Battery', 'Panel', 'Panel FM-200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-21 21:40:00'),
(00128, '-', '', '4', 'Battery', 'Panel', 'Panel ACPDB 4.05', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'COS 4.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-22 21:40:00'),
(00129, '-', '', '4', 'Battery', 'Panel', 'Panel NO Name', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-04-23 21:40:00'),
(00130, '-', '', '4', 'Rectifier', 'Panel', 'Panel JB FM 200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-24 21:40:00'),
(00131, '-', '', '4', 'Rectifier', 'Panel', 'Panel ACPDB 4.06', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 4.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-25 21:40:00'),
(00132, '-', '', '4', 'Rectifier', 'Panel', 'UPD178.PANEL MONITORING FM200.F4.NEW Ruang Rectifier.BG19', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-26 21:40:00'),
(00133, '-', '', '4', 'Lorong', 'Panel', 'UPD178.PANELHYDRANT.F4.LORONG.BM14', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-04-27 21:40:00'),
(00134, '-', '', '4', 'Panel', 'Panel', 'Panel ACPDB 4.30', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-28 21:40:00'),
(00135, '-', '', '4', 'Panel', 'Panel', 'Panel ACPDB 4.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 4.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-04-29 21:40:00'),
(00136, '-', '', '4', 'Panel', 'Panel', 'PANEL COS 2X400A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.05', 'TOB 4.07', 'Baik', 'ON', '-', '-', '-', '2025-04-30 21:40:00'),
(00137, '-', '', '4', 'Panel', 'Panel', 'Panel C.O.S 4.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.02', 'TOB 4.04', 'Baik', 'ON', '-', '-', '-', '2025-05-01 21:40:00'),
(00138, '-', '', '4', 'Panel', 'Panel', 'Panel C.O.S 4.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 4.01', 'TOB 4.03', 'Baik', 'ON', '-', '-', '-', '2025-05-02 21:40:00'),
(00139, '-', '', '4', 'Panel', 'Panel', 'UPD178.BOXPANEL.F4.RUANGPANEL.BE08', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-03 21:40:00'),
(00140, '-', '', '4', 'Panel', 'Panel', 'UPD178.BOXPANEL.F4.RUANGPANEL.BE08', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-04 21:40:00'),
(00141, '-', '', '4', 'Panel', 'Panel', 'UPD178.BOXPANEL.F4.RUANGPANEL.BG13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-05 21:40:00'),
(00142, '-', '', '4', 'BSS', 'Panel', 'Panel ACPDB 4.07', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 4.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-06 21:40:00'),
(00143, '-', '', '4', 'BSS', 'Panel', 'Panel JB FM 200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-07 21:40:00'),
(00144, '-', '', '4', 'BSS', 'Panel', 'Panel DCPDB 4.08', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.02', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-08 21:40:00'),
(00145, '-', '', '4', 'BSS', 'Panel', 'Panel DCPDB 4.21', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.04', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-09 21:40:00'),
(00146, '-', '', '4', 'BSS', 'Panel', 'Panel DCPDB 4.20', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.05', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-10 21:40:00'),
(00147, '-', '', '4', 'BSS', 'Panel', 'Panel DCPDB 4.32', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.07', 'RECTIFIER 4.12', 'Baik', 'ON', '-', '-', '-', '2025-05-11 21:40:00'),
(00148, '-', '', '4', 'Interkoneksi', 'Panel', 'Panel JB FM 200 - INTER', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-12 21:40:00'),
(00149, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.09', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDU 4.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-13 21:40:00'),
(00150, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.12', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-14 21:40:00'),
(00151, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.11', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-15 21:40:00'),
(00152, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.14', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDU 4.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-16 21:40:00'),
(00153, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.13', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDU 4.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-17 21:40:00'),
(00154, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.16', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-18 21:40:00'),
(00155, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.15', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-19 21:40:00'),
(00156, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-20 21:40:00'),
(00157, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.17', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-21 21:40:00'),
(00158, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.23', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDU 4.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-22 21:40:00'),
(00159, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.22', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'DCPDU 4.35', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-23 21:40:00'),
(00160, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.24', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-24 21:40:00'),
(00161, '-', '', '4', 'Transmisi', 'Panel', 'UPDP178.PANELHONEYWELL.F4.NEWRUANGTRANSMISI.AD17', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-25 21:40:00'),
(00162, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.27', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.07', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-26 21:40:00'),
(00163, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.28', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.07', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-27 21:40:00'),
(00164, '-', '', '4', 'Transmisi', 'Panel', 'PANEL (-) DCPDB 4.34', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.07', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-28 21:40:00'),
(00165, '-', '', '4', 'Transmisi', 'Panel', 'PANEL (+) DCPDB 4.33', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RECTIFIER 4.07', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-29 21:40:00'),
(00166, '-', '', '4', 'Transmisi', 'Panel', 'Panel DCPDB 4.25', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 2.27', '-', 'Baik', 'OFF', '-', '-', '-', '2025-05-30 21:40:00'),
(00167, '-', '', '5', 'Utility B', 'Panel', 'Panel Battery 125 KW (25TR) DCP', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-05-31 21:40:00'),
(00168, '-', '', '5', 'Utility B', 'Panel', 'Panel ACPDB ATS-B', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RISER 3', 'COLLECTOR', 'Baik', 'ON', '-', '-', '-', '2025-06-01 21:40:00'),
(00169, '-', '', '5', 'Utility B', 'Panel', 'Panel ACPDB EMSB-B', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'ATS B', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-02 21:40:00'),
(00170, '-', '', '5', 'Utility B', 'Panel', 'Panel ACPDB EMSB-B', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'EMSB B', 'UPS L1 B', 'Baik', 'ON', '-', '-', '-', '2025-06-03 21:40:00'),
(00171, '-', '', '5', 'Utility B', 'Panel', 'UPD178.PANEL FM 200.F5.NEW Ruang Utility A.BO30', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-04 21:40:00'),
(00172, '-', '', '5', 'Utility B', 'Panel', 'Panel FM 200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-05 21:40:00'),
(00173, '-', '', '5', 'Utility A', 'Panel', 'Panel Battery 125 KW', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-06 21:40:00'),
(00174, '-', '', '5', 'Utility A', 'Panel', 'Panel ACPDB ATS-A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'RISER 2', 'RISER 3', 'Baik', 'ON', '-', '-', '-', '2025-06-07 21:40:00'),
(00175, '-', '', '5', 'Utility A', 'Panel', 'Panel ACPDB EMSB-A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'ATS A', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-08 21:40:00'),
(00176, '-', '', '5', 'Utility A', 'Panel', 'Panel UMSB-A', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'EMSB- A', 'UPS L1 A', 'Baik', 'ON', '-', '-', '-', '2025-06-09 21:40:00'),
(00177, '-', '', '5', 'Utility A', 'Panel', 'Panel FM 200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-10 21:40:00'),
(00178, '-', '', '5', 'Panel', 'Panel', 'Panel ACPDB 5.01', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'TOB 2.5', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-11 21:40:00'),
(00179, '-', '', '5', 'Panel', 'Panel', 'Panel ACPDB 5.02', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 5.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-12 21:40:00'),
(00180, '-', '', '5', 'Panel', 'Panel', 'Panel JB MCB FM 200', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-13 21:40:00'),
(00181, '-', '', '5', 'Panel', 'Panel', 'Panel FM 200 Lt.5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 5.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-14 21:40:00'),
(00182, '-', '', '5', 'Panel', 'Panel', 'UPD178.BOX PANEL.F5.NEW RUANG PANEL.BJ06', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-15 21:40:00'),
(00183, '-', '', '5', 'Panel', 'Panel', 'Panel Akses Door ACX.8 L', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-06-16 21:40:00'),
(00184, '-', '', '5', 'Panel', 'Panel', 'Panel Akses Door ACX.9 L', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-06-17 21:40:00'),
(00185, '-', '', '5', 'Panel', 'Panel', 'Panel CCTV Lt. 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-06-18 21:40:00'),
(00186, '-', '', '5', 'Panel', 'Panel', 'Panel Akses Door Lt. 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-06-19 21:40:00'),
(00187, '-', '', '5', 'Panel', 'Panel', 'Panel JB TLP - 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'OFF', '-', '-', '-', '2025-06-20 21:40:00'),
(00188, '-', '', '5', 'Panel', 'Panel', 'UPD178.BOX PANEL.F5.NEW RUANG PANEL.BE08', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-21 21:40:00'),
(00189, '-', '', '5', 'Panel', 'Panel', 'Panel JB FA - 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-22 21:40:00'),
(00190, '-', '', '5', 'Panel', 'Panel', 'Panel Power Supply - 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-23 21:40:00'),
(00191, '-', '', '5', 'Panel', 'Panel', 'UPD178.RACK INDORACK.F5.NEW RUANG PANEL.BJ10', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', '-', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-24 21:40:00'),
(00192, '-', '', '5', 'Data Center', 'Panel', 'PANEL PSU EWS', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL ASD 2', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-25 21:40:00'),
(00193, '-', '', '5', 'Data Center', 'Panel', 'Panel PP-VAC P/53', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 5.01', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-26 21:40:00'),
(00194, '-', '', '5', 'Data Center', 'Panel', 'Panel PAC. B Lt. 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'EMSB B', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-27 21:40:00'),
(00195, '-', '', '5', 'Data Center', 'Panel', 'Panel PAC. A Lt. 5', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'EMSB A', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-28 21:40:00'),
(00196, '-', '', '5', 'Data Center', 'Panel', 'UPD178.PANEL FM 200.NEW Ruang Data Center', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL 5.02', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-29 21:40:00'),
(00197, '-', '', '5', 'Pengembangan', 'Panel', 'UPD178.PANELFM200.RUANGPENGEMBANGAN.AU18', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL FM 200', '-', 'Baik', 'ON', '-', '-', '-', '2025-06-30 21:40:00'),
(00198, '-', '', '5', 'COntaiment', 'Panel', 'UPD178.PANEL MONITORING FM-200.F5.NEW RUANG CONTAINMENT.AJ33', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL FM 200', '-', 'Baik', 'ON', '-', '-', '-', '2025-07-01 21:40:00'),
(00199, '-', '', 'Rooftop', 'Rooftop', 'Panel', 'UPD178.CONTROL PANEL.ROOFTOP.NEW-LIFTROOM.AY04', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL AC 1 LT.6', '-', 'Baik', 'ON', '-', '-', '-', '2025-07-02 21:40:00'),
(00200, '-', '', 'Rooftop', 'Rooftop', 'Panel', 'ATS PANEL PAC - 3.08 - Q1 - 4', '-', '-', '-', 0, 0, 0.00, 0, '-', '-', 'PANEL AC 1 LT.6', '-', 'Baik', 'ON', '-', '-', '-', '2025-07-03 21:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `pump`
--

CREATE TABLE IF NOT EXISTS `pump` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `condition` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `install` year NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `pump`
--

TRUNCATE TABLE `pump`;
-- --------------------------------------------------------

--
-- Table structure for table `rack`
--

CREATE TABLE IF NOT EXISTS `rack` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `barcode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `source_a` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `source_b` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `rack`
--

TRUNCATE TABLE `rack`;
--
-- Dumping data for table `rack`
--

INSERT INTO `rack` (`id`, `barcode`, `floor`, `room`, `category`, `name`, `source_a`, `source_b`, `status`, `info`, `updated_at`) VALUES
(00003, 'IT000001086', '2', 'CSPS', 'IT', 'ARBOR, FORTIMAIL', 'ACPDU 3.35', 'ACPDU 3.34', 'On', '-', '2024-12-30 14:09:23'),
(00004, 'COR000324418', '2', 'CSPS', 'Core', 'SUFI/TLKM-MKS2/TKPPSE/2021', 'PANEL IPDU 2.44', 'PANEL IPDU 3.37', 'On', '-', '2024-12-30 14:09:23'),
(00005, 'COR000433043', '2', 'CSPS', 'Core', 'SUFI/TLKM-MKS2/TKPPSE/2021', 'PANEL IPDU 2.45', 'PANEL IPDU 3.38', 'On', '-', '2024-12-30 14:09:23'),
(00006, 'GPN000028422', '2', 'CSPS', 'IT', 'EBR DDI SUDIANG 1', 'DCPDU 2.38', 'DCPDB 2.43', 'On', '-', '2024-12-30 14:09:23'),
(00007, 'GPN000028411', '2', 'CSPS', 'IT', 'RACK EBR-SUDIANG.2-NEW', 'DCPDB 2.43', 'DCPDU 2.38', 'On', '-', '2024-12-30 14:09:23'),
(00008, 'COR000232667', '2', 'CSPS', 'Core', 'SERVER F1-F8', 'PANEL 3.12', 'PANEL 2.33', 'On', '-', '2024-12-30 14:09:23'),
(00009, 'COR000232669', '2', 'CSPS', 'Core', 'SERVER F9-F12', 'PANEL 3.13', 'PANEL 2.34', 'On', '-', '2024-12-30 14:09:23'),
(00010, 'COR000232672', '2', 'CSPS', 'Core', 'SERVER F13-F20', 'DCPDB 3.33', 'DCPDB 3.15', 'On', '-', '2024-12-30 14:09:23'),
(00011, 'NWK000014467', '2', 'CSPS', 'Core', 'PATCH PANEL CPS.SUDIANG-1.NEW', 'DCPDB 3.12', 'PANEL 2.42', 'On', '-', '2024-12-30 14:09:23'),
(00012, 'COR000232668', '2', 'CSPS', 'Core', 'PATCH PANEL CPS.SUDIANG-2.NEW', 'DCPDB 3.17', 'PANEL 2.41', 'On', '-', '2024-12-30 14:09:23'),
(00013, 'GPN000028396', '2', 'CSPS', 'Core', 'CPS.SUDIANG-2.New', 'DCPDB 3.17', 'PANEL 2.41', 'On', '-', '2024-12-30 14:09:23'),
(00014, 'GPN000028406', '2', 'CSPS', 'Core', 'CPS.SUDIANG-1.NEW', 'DCPDB 3.12', 'PANEL 2.42', 'On', '-', '2024-12-30 14:09:23'),
(00015, 'TRN001426100', '2', 'MSC', 'Transmisi', 'OTB FO DWIMITRA', '-', '-', 'On', '-', '2024-12-30 14:09:23'),
(00016, 'GPN000032609', '2', 'MSC', 'Radio', 'SIMCA NOKIA', 'PANEL 2.37', 'PANEL 2.34', 'On', '-', '2024-12-30 14:09:23'),
(00017, '-', '2', 'MSC', 'Core', 'SUD-SMARTCARE-PROBE C1', 'DCPDB 4.35', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00018, '-', '2', 'MSC', 'Core', 'SUD-SMARTCARE-PROBE C2', 'DCPDB 4.35', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00019, 'GPN000028318', '2', 'MSC', 'IT', 'SW OFFICE & IDCN', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00020, 'GPN000028326', '2', 'MSC', 'IT', 'PABX OFFICE', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00021, 'IT000024179', '2', 'MSC', 'IT', 'Router Gerai', '-', '-', 'OFF', 'DISMANTLE', '2024-12-30 14:09:23'),
(00022, 'GPN000031695', '2', 'MSC', 'Core', 'TRAFFICA SGSN UPD 4,5,7', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00023, 'GPN000031320', '2', 'MSC', 'Core', 'TRAFFICA XUPD10', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00024, 'NWK000018252', '2', 'MSC', 'Core', 'F5 GGSN, DNS, GGSN, SEVER G1-SUD', 'DCPDU 2.38', 'DCPDU 2.38', 'On', '-', '2024-12-30 14:09:23'),
(00025, 'RAN003505815', '2', 'MSC', 'Radio', 'Netmax ZTE', 'IPDU 2.44', 'IPDU 3.37', 'On', '-', '2024-12-30 14:09:23'),
(00026, 'GPN000028863', '2', 'MSC', 'IT', 'UPCC-FE-MKS1-RACK2', 'DCPDB 2.11', 'DCPDB 2.27', 'On', '-', '2024-12-30 14:09:23'),
(00027, 'GPN000028571', '2', 'MSC', 'IT', 'ROUTER OFFICE', 'IPDU 2.44', 'IPDU 3.37', 'On', '-', '2024-12-30 14:09:23'),
(00028, 'COR000232853', '2', 'MSC', 'Core', 'cps4 (ggc)', 'DCPDU 2.37', 'PANEL 2.34', 'On', '-', '2024-12-30 14:09:23'),
(00029, 'GPN000029046', '2', 'MSC', 'Radio', 'HSS-BE-UPD1', 'PANEL 2.25', 'PDF HLR', 'On', '-', '2024-12-30 14:09:23'),
(00030, 'COR000232768', '2', 'MSC', 'Core', 'PDF HLR', 'DCPDU 2.14', '-', 'On', '-', '2024-12-30 14:09:23'),
(00031, 'GPN000029620', '2', 'MSC', 'Radio', 'HLR9820 UPD FE1', 'PANEL 2.25', 'PDF HLR', 'On', '-', '2024-12-30 14:09:23'),
(00032, 'COR000432896', '2', 'MSC', 'Core', 'HLR9820 RC-BE-UPD1', 'PANEL 2.25', 'PDF HLR', 'On', '-', '2024-12-30 14:09:23'),
(00033, 'COR000432898', '2', 'MSC', 'Core', 'HLR UPD1/HSS UPD', 'PANEL 2.25', 'PDF HLR', 'On', '-', '2024-12-30 14:09:23'),
(00034, 'GPN000029032', '2', 'MSC', 'Core', 'SINGLE SDB UPD BE', 'PANEL 2.25', 'PDF HLR', 'On', '-', '2024-12-30 14:09:23'),
(00035, 'GPN000029398', '2', 'MSC', 'IT', 'UPCC FE MKS01', 'DCPDB 2.11', 'DCPDB 2.27', 'On', '-', '2024-12-30 14:09:23'),
(00036, 'GPN000029293', '2', 'MSC', 'Core', 'GI SWITCH, EBR SUD 1', 'DCPDU 2.38', 'PANEL 2,34', 'On', '-', '2024-12-30 14:09:23'),
(00037, 'GPN000029175', '2', 'MSC', 'Core', 'GI SWITCH, EBR SUD 2', 'DCPDU 2.38', 'PANEL 2,34', 'On', '-', '2024-12-30 14:09:23'),
(00038, 'GPN000029104', '2', 'MSC', 'Core', 'SMART CARE Huawei', 'DCPDU 2.38', 'PANEL 2,34', 'On', '-', '2024-12-30 14:09:23'),
(00039, 'TRN001425936', '2', 'MSC', 'Transmisi', 'OTB FO Dwimitra Ruang MS', '-', '-', 'OFF', 'DISMANTLE', '2024-12-30 14:09:23'),
(00040, 'NWK000014460', '2', 'MSC', 'Core', 'GGSUD1 GGSN', 'DCPDU 2.38', 'DCPDU 2.34', 'On', '-', '2024-12-30 14:09:23'),
(00041, 'GPN000030790', '2', 'MSC', 'Core', 'GGSUPD4 Ericcson B', 'RECT 2.06', 'RECT 4.04', 'On', '-', '2024-12-30 14:09:23'),
(00042, 'GPN000029978', '2', 'MSC', 'Radio', 'MGW UPD 18 Nokia', 'DCPDU 2.28', 'DCPDU 2.40', 'On', '-', '2024-12-30 14:09:23'),
(00043, 'GPN000029956', '2', 'MSC', 'Radio', 'TMGW.UPD.4', 'DCPDU 2.37', 'DCPDB 2.18', 'On', '-', '2024-12-30 14:09:23'),
(00044, 'GPN000029565', '2', 'MSC', 'IT', 'UPCC-FE-MKS01 Rack 01', 'DCPDB 2.11', 'DCPDB 2.27', 'On', '-', '2024-12-30 14:09:23'),
(00045, 'GPN000029487', '2', 'MSC', 'Core', 'STP MKS1 SDG', 'RECT 2.06', 'RECT 2.06', 'On', '-', '2024-12-30 14:09:23'),
(00046, 'GPN000028339', '2', 'MSC', 'Core', 'GGSUPD5', 'RECT 2.06', 'RECT 4.04', 'On', '-', '2024-12-30 14:09:23'),
(00047, 'GPN000028343', '2', 'MSC', 'Core', 'F5.12 TTC SUDIANG', 'RECT 4.04', 'RECT 2.06', 'On', '-', '2024-12-30 14:09:23'),
(00048, 'GPN000028353', '2', 'MSC', 'Core', 'F5.10,F5.13', 'RECT 4.04', 'RECT 2.06', 'On', '-', '2024-12-30 14:09:23'),
(00049, 'GPN000028359', '2', 'MSC', 'Core', 'F5.14 TTC SUDIANG', 'RECT 4.04', 'RECT 2.06', 'On', '-', '2024-12-30 14:09:23'),
(00050, 'GPN000028366', '2', 'MSC', 'IT', 'IDCN HUAWEI', 'IPDU 2.44', '-', 'On', '-', '2024-12-30 14:09:23'),
(00051, 'GPN000032648', '2', 'MSC', 'Core', 'Traffica WUPD', 'DCPDB 2.30', '-', 'On', '-', '2024-12-30 14:09:23'),
(00052, 'COR000232814', '2', 'MSC', 'Core', 'TRAFFICA NOKIA TTC SUDIANG', 'DCPDB 2.30', '-', 'On', '-', '2024-12-30 14:09:23'),
(00053, 'GPN000029912', '2', 'MSC', 'Core', 'TRAFFICA TNES YUPD2 RACK #2', 'DCPDB 2.30', '-', 'On', '-', '2024-12-30 14:09:23'),
(00054, 'GPN000028331', '2', 'MSC', 'Core', 'TRAFFICA XUPD8 RACK #1', 'DCPDB 2.29', 'DCPDU 2.28', 'On', '-', '2024-12-30 14:09:23'),
(00055, 'GPN000028732', '2', 'MSC', 'Transmisi', 'SSU CLOCK SYNCHRONIZATION', 'DCPDB 2.09', '-', 'On', '-', '2024-12-30 14:09:23'),
(00056, 'NWK000019139', '2', 'MSC', 'Core', 'Polistar (RAK SBOC)', 'DCPDU 2.23', '-', 'On', '-', '2024-12-30 14:09:23'),
(00057, 'COR000232848', '2', 'MSC', 'Core', 'PCMG', 'PANEL 2.31', '-', 'On', '-', '2024-12-30 14:09:23'),
(00058, 'COR000232763', '2', 'MSC', 'Core', 'SSU EXPANSION', 'DCPDU 2.37', 'DCPDB 2.34', 'On', '-', '2024-12-30 14:09:23'),
(00059, 'NWK000018249', '2', 'MSC', 'Core', 'CMMUPD10', 'DCPDU 2.14', 'DCPDU 2.17', 'On', '-', '2024-12-30 14:09:23'),
(00060, 'IT000024189', '2', 'MSC', 'IT', 'SRX 1', 'DCPDB 2.27', 'DCPDU 2.41', 'On', '-', '2024-12-30 14:09:23'),
(00061, 'IT000024190', '2', 'MSC', 'IT', 'SRX 2', 'DCPDB 2.27', 'DCPDU 2.41', 'On', '-', '2024-12-30 14:09:23'),
(00062, 'COR000304579', '2', 'MSC', 'Core', 'TIKTOK 1', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00063, 'COR000304564', '2', 'MSC', 'Core', 'TIKTOK 2', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00064, '-', '2', 'MSC', 'Core', 'R7.SUD.PE MOBILE.1', 'DCPDB 2.28', '-', 'On', '-', '2024-12-30 14:09:23'),
(00065, 'GPN000029923', '2', 'MSC', 'Radio', 'GCS UPD 3', 'DCPDB 2.28', 'DCPDB 2.11', 'On', '-', '2024-12-30 14:09:23'),
(00066, 'GPN000029096', '2', 'MSC', 'Core', 'F5 #11 CORE', 'DCPDU 2.40', 'DCPDU 2.40', 'On', '-', '2024-12-30 14:09:23'),
(00067, 'GPN000032633', '2', 'MSC', 'Radio', 'MSS ATCA UPD13', 'DCPDB 2.28', 'DCPDB 2.11', 'On', '-', '2024-12-30 14:09:23'),
(00068, 'GPN000029057', '2', 'MSC', 'Core', 'F5 #15', 'DISMANTLE', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00069, 'TRN001426094', '2', 'MSC', 'Transmisi', 'OTB MGW Nokia', 'DISMANTLE', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00070, 'IT000024309', '3', 'INVAS', 'IT', 'CRP IP, RBT', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00071, 'GPN000028970', '3', 'INVAS', 'Core', 'Router OAM Sudiang. 2', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00072, 'IT000024628', '3', 'INVAS', 'IT', 'POP-MKS-CUBE1', 'PANEL 3.35', 'PANEL 3.34', 'On', '-', '2024-12-30 14:09:23'),
(00073, 'IT000024627', '3', 'INVAS', 'IT', 'POP-MKS-CUBE2', 'PANEL 3.35', 'PANEL 3.34', 'On', '-', '2024-12-30 14:09:23'),
(00074, '-', '3', 'INVAS', '-', 'SERVER LBA -AD08-', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00075, '-', '3', 'INVAS', '-', 'SMS SERVER MCO -AD09-', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00076, 'IT000024311', '3', 'INVAS', 'IT', 'BCP 8 Gratika', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00077, 'GPN000029036', '3', 'INVAS', 'Core', 'SAN SWITCH RACK #1', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00078, 'GPN000029112', '3', 'INVAS', 'Core', 'SAN SWITCH RACK #2', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00079, 'GPN000032414', '3', 'INVAS', '-', 'AKAMAI', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00080, 'GPN000028917', '3', 'INVAS', 'Core', 'NEW SCP EXPANSION', 'PANEL 3.34', 'PANEL 3.35', 'On', '-', '2024-12-30 14:09:23'),
(00081, 'GPN000029169', '3', 'INVAS', 'Transmisi', 'VSS, TAP AGGREGATION', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00082, 'COR000241080', '3', 'INVAS', 'Core', 'Facebook Cache', 'RECT 3.03', 'RECT 3.04', 'On', '-', '2024-12-30 14:09:23'),
(00083, 'COR000241189', '3', 'INVAS', 'Core', 'Google Cache', 'RECT 3.03', 'RECT 3.04', 'On', '-', '2024-12-30 14:09:23'),
(00084, 'GPN000030531', '3', 'INVAS', 'Core', 'F5.6, F5.7, F5.8, F5.9', '-', '-', '-', '-', '2024-12-30 14:09:23'),
(00085, 'COR000241082', '3', 'INVAS', '-', 'AKAMAI', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00086, 'GPN000029839', '3', 'INVAS', 'Core', 'Firewall Paloalto', 'PANEL 3.35', 'PANEL 3.35', 'OFF', '-', '2024-12-30 14:09:23'),
(00087, 'RAN003509840', '3', 'INVAS', '-', 'V-MAX ZTE', 'RECT 4.07', 'RECT 2.03', 'On', '-', '2024-12-30 14:09:23'),
(00088, 'IT000024308', '3', 'INVAS', 'IT', 'bcp gratika', 'IPDU 3.37', 'IPDU 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00089, 'NWK000035411', '3', 'INVAS', 'Transmisi', 'dra-upd1', 'RECT 4.04', 'RECT 2.03', 'On', '-', '2024-12-30 14:09:23'),
(00090, 'IT000001084', '3', 'INVAS', 'IT', 'it-agg sudiang2 (aruba)', 'PANEL 3.34', 'PANEL 3.35', 'On', '-', '2024-12-30 14:09:23'),
(00091, 'IT000024301', '3', 'INVAS', 'IT', 'it=agg sudiang2', 'PANEL 3.37', 'PANEL 2.44', 'On', '-', '2024-12-30 14:09:23'),
(00092, 'NWK000014469', '3', 'INVAS', 'Core', 'SCP E9000 02A', 'PANEL 3.34', 'PANEL 3.35', 'On', '-', '2024-12-30 14:09:23'),
(00093, 'TRN001428648', '3', 'INVAS', 'Core', 'core sudiang1-new', 'RECT 2.03', '-', 'On', '-', '2024-12-30 14:09:23'),
(00094, 'COR000242060', '3', 'OCS', 'Core', 'Akamai Rack 1', 'ACPDU 3.21', 'ACPDU 3.24', 'On', '-', '2024-12-30 14:09:23'),
(00095, 'COR000242182', '3', 'OCS', 'Core', 'AKAMAI 2', 'ACPDU 3.21', 'ACPDU 3.24', 'On', '-', '2024-12-30 14:09:23'),
(00096, 'IT000024311', '3', 'OCS', 'IT', 'BCP 8 Gratika', 'ACPDU 3.21', 'ACPDU 3.24', 'On', '-', '2024-12-30 14:09:23'),
(00097, 'IT000024622', '3', 'OCS', 'IT', 'vupcc-fe-mks02 rack1', 'ACPDU 3.21', 'IPDU 3.37', 'On', '-', '2024-12-30 14:09:23'),
(00098, 'IT000024623', '3', 'OCS', 'IT', 'vUPCC--FE-MKS02 Rack 2', 'ACPDU 3.22', 'IPDU 3.37', 'On', '-', '2024-12-30 14:09:23'),
(00099, 'COR000241689', '3', 'OCS', 'Core', 'fna rack1', 'ACPDU 3.21', 'ACPDU 3.24', 'On', '-', '2024-12-30 14:09:23'),
(00100, 'COR000241690', '3', 'OCS', 'Core', 'fna rack2', 'ACPDU 3.21', 'ACPDU 3.24', 'On', '-', '2024-12-30 14:09:23'),
(00101, 'GPN000032001', '3', 'OCS', 'IT', 'vUPCF-FE-MKS03', 'ACPDU 3.21', 'IPDU 3.27', 'On', '-', '2024-12-30 14:09:23'),
(00102, '-', '3', 'Core', 'Core', 'R7.SUD.PE MOBILE.2', 'IPDU 3.37', '-', 'On', '-', '2024-12-30 14:09:23'),
(00103, 'GPN000030609', '3', 'Core', 'Core', 'GGSUD3 GGSN', 'DCPDU 3.36', 'DCPDU 3.36', 'On', '-', '2024-12-30 14:09:23'),
(00104, 'COR000242016', '3', 'Core', 'Core', 'SCP RACK 2', '-', 'DCPDB 3.16', 'On', '-', '2024-12-30 14:09:23'),
(00105, 'GPN000031393', '3', 'Core', 'Radio', 'IPDU 3:37 FROM PANEL 2.42', 'PANEL 2.42', '-', 'On', '-', '2024-12-30 14:09:23'),
(00106, 'TRN001428916', '3', 'Core', 'Transmisi', 'OTB FO DWIMITRA', '-', '-', 'On', '-', '2024-12-30 14:09:23'),
(00107, 'GPN000030716', '3', 'Core', 'Core', 'GGSUD 2 (GGSN SUDIANG 2)', 'RECTI 4.04', 'DCPDU.3.36', 'On', '-', '2024-12-30 14:09:23'),
(00108, 'GPN000031401', '3', 'Core', 'Core', 'RACK KABEL CORE-SUDIANG.1, IVR-R-MKS2, IVR-R-MKS1 (ivr 1 & 2)', 'DCPDB 3.31', '-', 'On', '-', '2024-12-30 14:09:23'),
(00109, 'GPN000031504', '3', 'Core', 'Core', 'ROUTER CORE-SUDIANG.1 (otb telkom)', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00110, 'GPN000031314', '-', 'Core', 'Core', 'ROUTER SR SUDIANG 2', '-', '-', 'OFF', 'DISMANTLE', '2024-12-30 14:09:23'),
(00111, '-', '3', 'MKIOS', 'IT', 'CHAIRMAN', 'DCPDB 3.31 (RECTI 3.04)', 'DCPDB 3.31 (RECTI 3.03)', '-', '-', '2024-12-30 14:09:23'),
(00112, 'CME003037684', '3', 'MKIOS', 'IT', 'MKIOS PDF.01', 'DCPDU NEW M-KIOS RECTI 3.03', '-', '-', '-', '2024-12-30 14:09:23'),
(00113, '-', '3', 'MKIOS', 'IT', 'SERVER USSD GW MKSR', 'IPDU 3.37', 'IPDU 2.44', '-', '-', '2024-12-30 14:09:23'),
(00114, '-', '3', 'MKIOS', 'IT', 'USSD GW MKSR', 'IPDU 3.37', 'IPDU 2.44', '-', '-', '2024-12-30 14:09:23'),
(00115, 'IT000024621', '3', 'MKIOS', 'IT', 'MKIOS 2', '-', '-', 'OFF', 'DISMANTLE', '2024-12-30 14:09:23'),
(00116, 'IT000024620', '3', 'MKIOS', 'IT', 'MKIOS 01', '-', '-', 'OFF', 'DISMANTLE', '2024-12-30 14:09:23'),
(00117, 'RAN003551306', '4', 'BSS/TRAU', 'Radio', 'BCT 540 ALARM', '-', '-', 'On', '-', '2024-12-30 14:09:23'),
(00118, 'GPN000031469', '4', 'BSS/TRAU', 'Radio', 'BSCZ.Sudiang.1 (2)', 'DCPDU 4.32', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00119, 'GPN000031246', '4', 'BSS/TRAU', 'Radio', 'BSCZ.Sudiang.1 (3)', 'DCPDU 4.32', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00120, 'GPN000031187', '4', 'BSS/TRAU', 'Radio', 'BSCZ.SUDIANG.4', 'DCPDU 4.32', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00121, '-', '4', 'BSS/TRAU', 'Radio', 'BSCZ.SUDIANG.5', 'DCPDB 4.35', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00122, 'GPN000028453', '4', 'BSS/TRAU', 'Radio', 'BSCZ.Sudiang.1', 'DCPDU 4.32', 'DCPDB 4.35', 'On', '-', '2024-12-30 14:09:23'),
(00123, 'TRN001457434', '4', 'BSS/TRAU', 'Transmisi', 'OTB FO Dwimitra', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00124, 'COR000304637', '4', 'Interkoneksi', 'Core', 'DDF HIT MGWUPD 15', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00125, 'COR000304641', '4', 'Interkoneksi', 'Core', 'DDF TMGWUPD 3', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00126, 'COR000304642', '4', 'Interkoneksi', 'Core', 'DDF HIT MGWUPD 11', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00127, 'TRN001457598', '4', 'Interkoneksi', 'Transmisi', 'FO LINTAS', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00128, 'TRN001457603', '4', 'Interkoneksi', 'Transmisi', 'FO LINTAS', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00129, 'TRN001457606', '4', 'Interkoneksi', 'Transmisi', 'FO NEC', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00130, 'TRN001538577', '4', 'Interkoneksi', 'Transmisi', 'FO NEC', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00131, 'TRN001538925', '4', 'Interkoneksi', 'Transmisi', 'DDF RACK #8 TELKOMSEL MAKASSAR POTS EXPANSION 2 KABINET 8', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00132, 'TRN001539006', '4', 'Interkoneksi', 'Transmisi', 'DDF RACK #8 TELKOMSEL MAKASSAR POTS EXPANSION 2 KABINET 7', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00133, 'TRN001539045', '4', 'Interkoneksi', 'Transmisi', 'DDF RACK #8 TELKOMSEL MAKASSAR POTS EXPANSION 2 KABINET 6', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00134, 'TRN001539079', '4', 'Interkoneksi', 'Transmisi', 'DDF RACK #8 TELKOMSEL MAKASSAR POTS EXPANSION 2 KABINET 5', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00135, 'TRN001539082', '4', 'Interkoneksi', 'Transmisi', 'DDF RACK #8 TELKOMSEL MAKASSAR POTS EXPANSION 2 KABINET 4', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00136, 'TRN001539011', '4', 'Interkoneksi', 'Transmisi', 'C.06', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00137, 'TRN001539003', '4', 'Interkoneksi', 'Transmisi', 'C.05', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00138, 'TRN001538994', '4', 'Interkoneksi', 'Transmisi', 'DDF C.04', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00139, 'TRN001538990', '4', 'Interkoneksi', 'Transmisi', 'DDF C.03', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00140, 'TRN001538983', '4', 'Interkoneksi', 'Transmisi', 'DDF C.02', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00141, 'TRN001538949', '4', 'Interkoneksi', 'Transmisi', 'DDF C.01', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00142, 'TRN001538950', '4', 'Interkoneksi', 'Transmisi', 'NEC RAC 01 (DDF)', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00143, 'GPN000032354', '4', 'Transmisi', 'Transmisi', 'Dehydrator NEC', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00144, 'GPN000030676', '4', 'Transmisi', 'Core', 'HIT MGW UPD 15', 'DCPDB 2.25', '-', '-', '-', '2024-12-30 14:09:23'),
(00145, 'TRN00145744', '4', 'Transmisi', '-', 'OTB FO Dwimitra', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00146, 'NWK000035410', '4', 'Transmisi', 'Radio', 'RTR RAN-AGG-SUDIANG.4', 'RECTIFIER 4.12', 'RECTIFIER 3.03', '-', '-', '2024-12-30 14:09:23'),
(00147, 'NWK000035409', '4', 'Transmisi', 'Radio', 'RTR RAN-AGG.3', 'RECTIFIER 4.12', 'RECTIFIER 3.02', '-', '-', '2024-12-30 14:09:23'),
(00148, 'TRN001457455', '4', 'Transmisi', 'Transmisi', 'OTB FO DWIMITRA', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00149, 'GPN000028690', '4', 'Transmisi', 'Transmisi', 'CNODE IDU FC GOWA', 'DCPDU 4.32', '-', '-', '-', '2024-12-30 14:09:23'),
(00150, 'GPN000028635', '4', 'Transmisi', 'Transmisi', 'ALCATEL LUCENT PSS36', 'DCPDU 4.32', 'RECTI 4.07', '-', '-', '2024-12-30 14:09:23'),
(00151, 'GPN000028418', '4', 'Transmisi', 'Transmisi', 'Alcatel Lucent PSS 32', 'RECTI 4.12', 'RECTI 4.07', '-', '-', '2024-12-30 14:09:23'),
(00152, 'NWK000020351', '4', 'Transmisi', 'Transmisi', 'OTB Optic TBG', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00153, 'TRN001457476', '4', 'Transmisi', 'Transmisi', 'OTB MKS INNER SDG-MAROS', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00154, 'TRN001457478', '4', 'Transmisi', 'Transmisi', 'IDU XL Kima', 'DCPDB 4.27', '-', '-', '-', '2024-12-30 14:09:23'),
(00155, 'TRN001457482', '4', 'Transmisi', 'Core', 'IBTS Router', 'PANEL 3.14', 'PANEL 4.34(+) DAN PANEL 4.33(-)', '-', '-', '2024-12-30 14:09:23'),
(00156, 'TRN001457485', '4', 'Transmisi', 'Transmisi', 'ERIKSON, RTU-NTEST ONMS', 'DCPDU 4.27', '-', '-', '-', '2024-12-30 14:09:23'),
(00157, 'GPN000029499', '4', 'Transmisi', 'Transmisi', '1662 SMC_03, 1662 SMC_04', 'DCPDU 4.27', '-', '-', '-', '2024-12-30 14:09:23'),
(00158, '-', '4', 'Transmisi', '-', 'DWDM 1626LM TELKOM', 'DCPDU 4.27', '-', '-', '-', '2024-12-30 14:09:23'),
(00159, 'GPN000057501', '4', 'Transmisi', 'Radio', 'GSM, 3G ZTE', 'DCPDB 4.13', '-', '-', '-', '2024-12-30 14:09:23'),
(00160, 'TRN001457496', '4', 'Transmisi', 'Transmisi', 'Sudiang PSS 24X', 'RECTIFIER 4.12', 'RECTI 4.07', '-', '-', '2024-12-30 14:09:23'),
(00161, 'TRN001457503', '4', 'Transmisi', 'Transmisi', 'Sudiang PSS 32', 'DCPDU 4.27', '-', '-', '-', '2024-12-30 14:09:23'),
(00162, '-', '4', 'Transmisi', '-', 'VMAX ZTE', 'DCPDU 2.41', 'RECTI 2.03', '-', '-', '2024-12-30 14:09:23'),
(00163, 'TRN001457507', '4', 'Transmisi', 'Transmisi', 'HRB2-D7-SUD-TSEL HUAWEI', 'DCPDU 4.32', '-', '-', '-', '2024-12-30 14:09:23'),
(00164, 'TRN001457509', '4', 'Transmisi', 'Transmisi', 'HRB1-D7-SUD-TSEL HUAWEI', 'DCPDU 4.32', '-', '-', '-', '2024-12-30 14:09:23'),
(00165, 'GPN000031728', '4', 'Transmisi', 'Transmisi', 'SDH NEC DMR 3000S DIR TO MAROS MANDAI', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00166, 'GPN000031645', '4', 'Transmisi', 'Transmisi', 'SDH NEC DMR3000S DIR TO SOLODONG', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00167, 'GPN000032018', '4', 'Transmisi', 'Transmisi', 'SDH NEC SDH NEC DMR 5000S DIR TO BT', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00168, 'TRN001457524', '4', 'Transmisi', 'Transmisi', 'OTB TO DIVNET PETTARANI', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00169, 'TRN001457531', '4', 'Transmisi', 'Transmisi', 'HIT ERICCSON, SIEMENS HIT.01, SIEMENS HIT.02', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00170, 'GPN000028478', '4', 'Transmisi', 'Transmisi', 'OTB TTC SUDIANG', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00171, 'GPN000030342', '4', 'Transmisi', 'Transmisi', 'SDH NEC UN-5000 EXPANSION-1 ID', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00172, 'TRN001457515', '4', 'Transmisi', 'Transmisi', 'Ericsson DPCPDU-01', 'DCPDU 4.09', '-', '-', '-', '2024-12-30 14:09:23'),
(00173, 'GPN000028752', '4', 'Transmisi', 'Core', 'hiT MGW UPD 3', 'DCPDU 2.40', '-', '-', '-', '2024-12-30 14:09:23'),
(00174, 'GPN000028841', '4', 'Transmisi', 'Core', 'hiT MGW UPD 10', '-', '-', 'OFF', '-', '2024-12-30 14:09:23'),
(00175, 'IT000026889', '5', 'Data Center', 'IT', 'rack turbo', 'PDU-A2 & UPS-5A', 'PDU-B2 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00176, 'IT000026884', '5', 'Data Center', 'IT', 'AQ09-network#9', 'PDU-A2 & UPS-5A', 'PDU-B2 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00177, 'IT000026879', '5', 'Data Center', 'IT', 'AQ08-network#1', 'PDU-A2 & UPS-5A', 'PDU-B2 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00178, 'IT000026890', '5', 'Data Center', 'IT', '3par#1', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00179, 'IT000026891', '5', 'Data Center', 'IT', 'AM12-san dir#2', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00180, 'IT000026892', '5', 'Data Center', 'IT', 'AM13-san dir#1', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00181, 'IT000026887', '5', 'Data Center', 'IT', 'Server #7', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00182, 'IT000026886', '5', 'Data Center', 'IT', 'Server #6', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00183, 'IT000026885', '5', 'Data Center', 'IT', 'Server #5', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00184, 'IT000026883', '5', 'Data Center', 'IT', 'Server #4', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00185, 'IT000026881', '5', 'Data Center', 'IT', 'Server #2', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00186, 'IT000026882', '5', 'Data Center', 'IT', 'Server #3', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00187, 'IT000026882', '5', 'Data Center', 'IT', 'Server #3', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00188, 'IT000026880', '5', 'Data Center', 'IT', 'Server #1', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00189, '-', '5', 'Data Center', 'IT', 'Server #7', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00190, '-', '5', 'Data Center', 'IT', 'Server #8', 'PDU-A1 & UPS-5A', 'PDU-B1 & UPS-5B', '-', '-', '2024-12-30 14:09:23'),
(00191, 'GPN000032333', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.081001', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00192, 'GPN000032247', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.081101', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00193, 'GPN000032063', '5', 'Containment', 'Core', 'UPD178.RACK GENERAL.F5.NEW RUANG CONTAIMENT.CONTAIMENT LT.5.AD23', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00194, 'GPN000032155', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.081301', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00195, 'GPN000032707', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.121701', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00196, 'GPN000032647', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.121601', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00197, 'GPN000032594', '5', 'Containment', 'Core', 'UPD178.RACK.F5.RUANGSERVER.121501', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00198, 'GPN000032546', '5', 'Containment', 'IT', 'UPD178.RACK.F4.RUANGSERVER.121301', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00199, 'GPN000032485', '5', 'Containment', 'IT', 'UPD178.RACK.F4.RUANGSERVER.121201', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23'),
(00200, '-', '5', 'Containment', '-', 'RAK SERVER 11 CONTAINMENT', 'PDF HUAWEI A1', 'PDF HUAWEI A2', '-', '-', '2024-12-30 14:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `safety`
--

CREATE TABLE IF NOT EXISTS `safety` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000',
  `ne_id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ket` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `install` date NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `safety`
--

TRUNCATE TABLE `safety`;
-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `condition` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `install` year NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `security`
--

TRUNCATE TABLE `security`;
-- --------------------------------------------------------

--
-- Table structure for table `tank`
--

CREATE TABLE IF NOT EXISTS `tank` (
  `id` smallint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `floor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `capacity` int NOT NULL,
  `refil` date NOT NULL,
  `condition` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `tank`
--

TRUNCATE TABLE `tank`;
--
-- Dumping data for table `tank`
--

INSERT INTO `tank` (`id`, `floor`, `room`, `name`, `capacity`, `refil`, `condition`, `info`, `updated_at`) VALUES
(00001, 'Semi Basement', 'Genset', 'Tangki Harian 1', 1500, '2025-01-17', 'Baik', '-', '2025-01-21 11:20:49'),
(00002, 'Semi Basement', 'Genset', 'Tangki Harian 2', 1500, '2025-01-17', 'Baik', '-', '2025-01-21 11:21:14'),
(00003, 'Semi Basement', 'Tangki Bulanan', 'Tangki Bulanan 2', 10000, '2024-11-28', 'Baik', '-', '2025-01-21 11:25:21'),
(00004, 'Semi Basement', 'Tangki Bulanan', 'Tangki Bulanan 1', 10000, '2024-11-28', 'Baik', '-', '2025-01-21 11:48:37'),
(00005, 'Semi Basement', 'Tangki Bulanan', 'Tangki Bulanan 3', 10000, '2024-11-28', 'Baik', '-', '2025-01-21 11:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL DEFAULT '0000',
  `ne_id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `floor` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `vendor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ket` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `install` date NOT NULL,
  `maintanance` varchar(11) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '-',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `transport`
--

TRUNCATE TABLE `transport`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
