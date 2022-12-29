-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 10:28 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rstl_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ac_attachments`
--

CREATE TABLE `tbl_ac_attachments` (
  `ac_attach_id` int(11) NOT NULL,
  `ac_id` int(11) DEFAULT NULL,
  `file_path` varchar(1000) DEFAULT NULL,
  `file_description` varchar(1000) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ac_attachments`
--

INSERT INTO `tbl_ac_attachments` (`ac_attach_id`, `ac_id`, `file_path`, `file_description`, `file_type`, `date_created`, `status`) VALUES
(37, 0, 'http://122.53.79.156:8082/rstl_pm/images/16541570062022-Jun-Thu-2022 RSTL Staff Accomplishment Report Format.pdf', 'Manual', NULL, '2022-06-02 16:03:27', 0),
(38, 0, 'http://122.53.79.156:8082/rstl_pm/images/16541571692022-Jun-Thu-clavano-civil form2 dtr(1-31) bir (1).pdf', 'Maintenance Report', NULL, '2022-06-02 16:06:09', 0),
(39, 7, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-06-09 15:28:30', 1),
(40, 0, 'http://122.53.79.156:8082/rstl_pm/images/16563125152022-Jun-Mon-002.jpg', 'Menu', NULL, '2022-06-27 14:48:35', 1),
(41, 2, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(42, 3, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(43, 4, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(44, 5, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(45, 6, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(46, 8, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(47, 9, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(48, 12, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(49, 13, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(50, 14, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(51, 15, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(52, 16, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:43', 1),
(53, 18, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(54, 19, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(55, 21, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(56, 23, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(57, 24, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(58, 25, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(59, 26, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(60, 27, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(61, 28, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(62, 29, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(63, 30, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(64, 31, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(65, 32, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(66, 33, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(67, 34, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(68, 35, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(69, 36, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(70, 37, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(71, 38, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(72, 39, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(73, 40, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(74, 41, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(75, 42, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(76, 43, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(77, 44, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(78, 45, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:44', 1),
(79, 46, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(80, 47, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(81, 48, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(82, 49, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(83, 50, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(84, 51, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(85, 52, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(86, 0, 'http://localhost/rstl_pm/16632115772022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:12:57', 1),
(87, 0, 'http://localhost/rstl_pm/16632116142022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:13:34', 1),
(88, 7, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:17:09', 1),
(89, 7, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:17:21', 1),
(90, 2, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(91, 3, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(92, 4, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(93, 5, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(94, 6, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(95, 8, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(96, 9, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(97, 12, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(98, 13, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(99, 14, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(100, 15, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(101, 16, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:37', 1),
(102, 18, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(103, 19, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(104, 21, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(105, 23, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(106, 24, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(107, 25, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(108, 26, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(109, 27, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(110, 28, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(111, 29, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(112, 30, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(113, 31, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(114, 32, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(115, 33, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(116, 34, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(117, 35, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(118, 36, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(119, 37, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(120, 0, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(121, 39, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(122, 40, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(123, 41, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(124, 42, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(125, 43, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:38', 1),
(126, 44, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(127, 45, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(128, 0, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(129, 47, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(130, 48, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(131, 49, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(132, 50, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(133, 51, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(134, 52, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:18:39', 1),
(135, 2, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(136, 3, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(137, 4, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(138, 5, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(139, 6, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(140, 8, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(141, 9, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(142, 12, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(143, 13, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(144, 14, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(145, 15, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:01', 1),
(146, 16, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(147, 18, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(148, 19, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(149, 21, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(150, 23, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(151, 24, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(152, 25, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(153, 26, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(154, 27, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(155, 28, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(156, 29, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(157, 30, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(158, 31, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(159, 32, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(160, 33, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(161, 34, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:02', 1),
(162, 35, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(163, 36, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(164, 37, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(165, 0, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(166, 39, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(167, 40, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(168, 41, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(169, 42, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(170, 43, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(171, 44, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(172, 45, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(173, 0, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(174, 47, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(175, 48, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:03', 1),
(176, 49, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:04', 1),
(177, 50, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:04', 1),
(178, 51, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:04', 1),
(179, 52, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:19:04', 1),
(180, 7, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:36:28', 1),
(181, 2, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(182, 3, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(183, 4, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(184, 5, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(185, 6, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(186, 8, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(187, 9, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(188, 12, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(189, 13, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(190, 14, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(191, 15, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(192, 16, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(193, 18, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(194, 19, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(195, 21, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(196, 23, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:02', 1),
(197, 24, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(198, 25, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(199, 26, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(200, 27, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(201, 28, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(202, 29, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(203, 30, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(204, 31, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(205, 32, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(206, 33, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(207, 34, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:03', 1),
(208, 35, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(209, 36, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(210, 37, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(211, 38, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(212, 39, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(213, 40, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(214, 41, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(215, 42, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(216, 43, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(217, 44, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(218, 45, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(219, 46, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(220, 47, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(221, 48, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(222, 49, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(223, 50, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(224, 51, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(225, 52, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(226, 35, 'http://localhost/rstl_pm/images/16632288862022-Sep-Thu-Request for Maintenance TSD 1.5.pdf', 'Request for Maintenance', NULL, '2022-09-15 16:01:26', 1),
(227, 2, 'http://localhost/rstl_pm/images/16632289362022-Sep-Thu-Billing Statement Aug 2022 (ACU ORD 1.5).pdf', 'Billing Statement Aug 2022', NULL, '2022-09-15 16:02:16', 1),
(228, 15, 'http://localhost/rstl_pm/images/16632289662022-Sep-Thu-Request for Maintenance (RSTL Hallway 1.18).pdf', 'Request for Maintenance', NULL, '2022-09-15 16:02:46', 1),
(229, 13, 'http://localhost/rstl_pm/images/16632290002022-Sep-Thu-Request for Maintenance (FASD 1.6).pdf', 'Request for Maintenance', NULL, '2022-09-15 16:03:20', 1),
(230, 41, 'http://localhost/rstl_pm/images/16632304602022-Sep-Thu-Billing Statement Aug 2022 (RSTL 1.4).pdf', 'Billing Statement Aug 2022 (RSTL 1.4)', NULL, '2022-09-15 16:27:40', 1),
(231, 61, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(232, 61, 'http://122.53.79.156:8082/rstl_pm/images/16632118292022-Sep-Thu-Q2 2020 Billing Statement.pdf', 'Q2 2020 Billing Statement', NULL, '2022-09-15 11:17:09', 1),
(233, 61, 'http://122.53.79.156:8082/rstl_pm/images/16632118412022-Sep-Thu-Q1 2021 Billing Statement.pdf', 'Q1 2021 Billing Statement', NULL, '2022-09-15 11:17:21', 1),
(234, 61, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(235, 62, 'http://122.53.79.156:8082/rstl_pm/images/16547597102022-Jun-Thu-Q2 Billing Statement.pdf', 'Q2 Billing Statement', NULL, '2022-09-15 10:54:45', 1),
(236, 62, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ac_attachments`
--
ALTER TABLE `tbl_ac_attachments`
  ADD KEY `ac_attach_id` (`ac_attach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ac_attachments`
--
ALTER TABLE `tbl_ac_attachments`
  MODIFY `ac_attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
