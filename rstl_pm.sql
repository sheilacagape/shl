-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 07:14 AM
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
(236, 62, 'http://122.53.79.156:8082/rstl_pm/images/16632201882022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 13:40:04', 1),
(237, 64, 'http://122.53.79.156:8082/rstl_pm/images/16632351932022-Sep-Thu-Q3 2022.pdf', 'Q3 2022', NULL, '2022-09-15 09:46:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ac_maint_record`
--

CREATE TABLE `tbl_ac_maint_record` (
  `id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `op_performed` varchar(500) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `performed_by` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ac_maint_record`
--

INSERT INTO `tbl_ac_maint_record` (`id`, `ac_id`, `date_added`, `op_performed`, `remarks`, `performed_by`, `date_created`, `status`) VALUES
(3, 7, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-20 09:56:43', 1),
(4, 7, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-20 09:57:44', 1),
(5, 12, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-20 11:40:26', 1),
(6, 12, '2020-10-16 00:00:00', 'CORRECTIVE MAINTENANCE', '- DEFECTIVE SHAFTING\n- DEFECTIVE FAN MOTOR\n- DISALIGNED FAN BLADE AND BLOWER\n- GOOD WORKING CONDITION', 'VVP', '2022-05-20 11:50:24', 1),
(7, 12, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-20 11:51:00', 1),
(11, 51, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-20 13:16:51', 1),
(15, 52, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:19:07', 1),
(16, 52, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION\n\nQ1+Q2 PM WAS NOT CONDUCTED DUE TO THE PANDEMIC - RAP', 'VVP', '2022-05-23 08:19:33', 1),
(17, 52, '2021-10-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:20:18', 1),
(18, 13, '2020-08-26 00:00:00', 'General Cleaning / PM', 'OPERATIONAL AND GOOD CONDITION', 'VVP', '2022-05-23 08:22:26', 1),
(19, 13, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:23:04', 1),
(20, 13, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:23:35', 1),
(21, 14, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:24:08', 1),
(22, 14, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:24:19', 1),
(23, 15, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:24:45', 1),
(24, 15, '2020-10-16 00:00:00', 'Corrective Maintenance', '- DEFECTIVE STARTING CAPACITOR\n- DEFECTIVE SHAFTING AND BEARING\n- GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:25:22', 1),
(25, 15, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:25:36', 1),
(26, 16, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:26:19', 1),
(27, 16, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:26:30', 1),
(28, 18, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:26:53', 1),
(29, 18, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:27:05', 1),
(30, 21, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:27:59', 1),
(31, 21, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:28:09', 1),
(32, 19, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:28:34', 1),
(33, 19, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:28:45', 1),
(34, 2, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:30:18', 1),
(35, 2, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:30:29', 1),
(36, 4, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:31:09', 1),
(37, 4, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:31:19', 1),
(38, 6, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:31:45', 1),
(39, 6, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:32:01', 1),
(40, 5, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:32:21', 1),
(41, 5, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:32:31', 1),
(42, 3, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:32:51', 1),
(43, 3, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:33:02', 1),
(44, 8, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:33:24', 1),
(45, 8, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:33:36', 1),
(46, 9, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:45:04', 1),
(47, 9, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:45:15', 1),
(48, 23, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:51:08', 1),
(49, 23, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:51:17', 1),
(50, 24, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:52:21', 1),
(51, 24, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:52:30', 1),
(52, 25, '2021-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:52:49', 1),
(53, 25, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:53:04', 1),
(54, 26, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:53:40', 1),
(55, 26, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:53:48', 1),
(56, 27, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:54:08', 1),
(57, 27, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:54:22', 1),
(58, 28, '2020-09-03 00:00:00', 'Corrective Maintenance', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:54:56', 1),
(59, 28, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:55:05', 1),
(60, 29, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:55:24', 1),
(61, 29, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:55:36', 1),
(62, 30, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:56:05', 1),
(63, 30, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:56:12', 1),
(64, 31, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:56:50', 1),
(65, 31, '2021-02-26 00:00:00', 'Corrective Maintenance', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:57:02', 1),
(66, 32, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:57:25', 1),
(67, 32, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:57:32', 1),
(68, 33, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:57:52', 1),
(69, 33, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:58:01', 1),
(70, 34, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:58:22', 1),
(71, 34, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:58:30', 1),
(72, 35, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:58:46', 1),
(73, 35, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:59:06', 1),
(74, 36, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:59:26', 1),
(75, 36, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:59:35', 1),
(76, 37, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 08:59:55', 0),
(77, 37, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:00:06', 1),
(78, 38, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:00:29', 0),
(79, 38, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:00:36', 0),
(80, 39, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:01:03', 1),
(81, 39, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:03:00', 1),
(82, 40, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:03:45', 1),
(83, 40, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:03:55', 1),
(84, 41, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:04:19', 1),
(85, 41, '2021-02-26 00:00:00', 'General Cleaning', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:04:26', 1),
(86, 42, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:04:58', 1),
(87, 42, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:05:11', 1),
(88, 43, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:05:32', 1),
(89, 43, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:05:41', 1),
(90, 44, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:06:02', 1),
(91, 44, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:06:11', 1),
(92, 45, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:06:33', 1),
(93, 45, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:06:41', 1),
(94, 46, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:07:04', 0),
(95, 46, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:07:11', 0),
(96, 47, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:07:29', 1),
(97, 47, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:07:37', 1),
(98, 48, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:08:02', 1),
(99, 48, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:08:13', 1),
(100, 49, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:08:31', 1),
(101, 49, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:08:40', 1),
(102, 50, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:10:22', 1),
(103, 50, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-23 09:10:40', 1),
(104, 12, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:08:19', 1),
(105, 12, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:08:32', 1),
(106, 12, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:08:47', 1),
(107, 13, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:10:09', 1),
(108, 13, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:10:25', 1),
(109, 13, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:10:37', 1),
(110, 14, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:11:28', 1),
(111, 14, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:11:39', 1),
(112, 14, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:11:48', 1),
(113, 15, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:12:14', 1),
(114, 15, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:12:22', 1),
(115, 15, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:12:31', 1),
(116, 16, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:17:05', 1),
(117, 16, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:17:17', 1),
(118, 16, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:17:25', 1),
(119, 18, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:09', 1),
(120, 18, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:18', 1),
(121, 18, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:26', 1),
(122, 21, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:42', 1),
(123, 21, '0000-00-00 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:51', 1),
(124, 21, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:18:58', 1),
(125, 19, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:19:18', 1),
(126, 19, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:19:29', 1),
(127, 19, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:19:37', 1),
(128, 7, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:20:43', 1),
(129, 7, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:20:55', 1),
(130, 7, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:21:39', 1),
(131, 2, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:22:01', 1),
(132, 2, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:22:08', 1),
(133, 2, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:22:17', 1),
(134, 4, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:23:05', 1),
(135, 4, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:23:48', 1),
(136, 4, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:24:00', 1),
(137, 6, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:24:23', 1),
(138, 6, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:24:33', 1),
(139, 6, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:24:41', 1),
(140, 5, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:02', 1),
(141, 5, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:15', 1),
(142, 5, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:22', 1),
(143, 3, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:41', 1),
(144, 3, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:50', 1),
(145, 3, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:25:58', 1),
(146, 8, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:26:32', 1),
(147, 8, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:26:42', 1),
(148, 8, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:26:50', 1),
(149, 9, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:27:34', 1),
(150, 9, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:27:44', 1),
(151, 9, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:27:51', 1),
(152, 23, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:28:09', 1),
(153, 23, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:28:17', 1),
(154, 23, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:28:25', 1),
(155, 24, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:28:45', 1),
(156, 24, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:28:52', 1),
(157, 24, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:29:00', 1),
(158, 25, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:29:20', 1),
(159, 25, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:29:29', 1),
(160, 25, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:29:35', 1),
(161, 26, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:29:52', 1),
(162, 26, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:38:07', 1),
(163, 26, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:38:15', 1),
(164, 27, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:38:54', 1),
(165, 27, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:39:04', 1),
(166, 27, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:39:10', 1),
(167, 28, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:04', 1),
(168, 28, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:12', 1),
(169, 28, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:20', 1),
(170, 29, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:40', 1),
(171, 29, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:47', 1),
(172, 29, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:42:54', 1),
(173, 30, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:43:14', 1),
(174, 30, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:43:24', 1),
(175, 30, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:43:31', 1),
(176, 31, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:44:01', 1),
(177, 31, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:44:10', 1),
(178, 31, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:44:17', 1),
(179, 32, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:44:48', 1),
(180, 32, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:44:58', 1),
(181, 32, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:45:05', 1),
(182, 33, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:45:43', 1),
(183, 33, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:45:53', 1),
(184, 33, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:46:00', 1),
(185, 34, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:46:53', 1),
(186, 34, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:47:01', 1),
(187, 34, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:47:08', 1),
(188, 35, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:47:24', 1),
(189, 35, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:47:31', 1),
(190, 35, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:47:39', 1),
(191, 36, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:48:10', 1),
(192, 36, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:48:18', 1),
(193, 36, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:48:29', 1),
(194, 37, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:49:50', 1),
(195, 37, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:49:59', 1),
(196, 37, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:50:05', 1),
(197, 38, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:50:27', 0),
(198, 38, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:50:34', 0),
(199, 38, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:50:41', 0),
(200, 39, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:52:20', 1),
(201, 39, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:52:33', 1),
(202, 39, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:52:40', 1),
(203, 40, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:53:19', 1),
(204, 40, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:53:27', 1),
(205, 40, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:53:41', 1),
(206, 41, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:02', 1),
(207, 41, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:10', 1),
(208, 41, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:21', 1),
(209, 42, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:38', 1),
(210, 42, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:47', 1),
(211, 42, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:54:53', 1),
(212, 43, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:55:19', 1),
(213, 43, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:55:30', 1),
(214, 43, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:55:36', 1),
(215, 44, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:55:57', 1),
(216, 44, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:56:06', 1),
(217, 44, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:56:19', 1),
(218, 45, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:56:55', 1),
(219, 45, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:57:03', 1),
(220, 45, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:57:12', 1),
(221, 46, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:57:35', 0),
(222, 46, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:57:45', 0),
(223, 46, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:57:53', 1),
(225, 47, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:58:43', 1),
(226, 47, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:58:58', 1),
(227, 47, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 08:59:06', 1),
(228, 48, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:00:07', 1),
(229, 48, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:00:18', 1),
(230, 48, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:00:26', 1),
(231, 49, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:00:45', 1),
(232, 49, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:03:39', 1),
(233, 49, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:03:46', 1),
(234, 50, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:04:14', 1),
(235, 50, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:04:22', 1),
(236, 50, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:04:31', 1),
(237, 51, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:05:03', 1),
(238, 51, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:05:12', 1),
(239, 51, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-24 09:05:22', 1),
(240, 52, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-05-27 11:38:36', 1),
(241, 7, '0000-00-00 00:00:00', '', '', '', '2022-09-07 16:52:58', 0),
(242, 7, '1970-01-01 00:00:00', 'afaf', '', '', '2022-09-07 16:53:04', 0),
(243, 7, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:46:59', 1),
(244, 51, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:47:34', 1),
(245, 8, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:47:46', 1),
(246, 2, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(247, 3, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(248, 4, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(249, 5, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(250, 6, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(251, 9, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(252, 12, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(253, 13, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(254, 14, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(255, 15, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:15', 1),
(256, 16, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(257, 18, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(258, 19, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(259, 21, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(260, 23, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(261, 24, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(262, 25, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(263, 26, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(264, 27, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(265, 28, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(266, 29, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(267, 30, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(268, 31, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(269, 32, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(270, 33, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(271, 34, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(272, 35, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:16', 1),
(273, 36, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(274, 37, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(275, 38, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(276, 39, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(277, 40, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(278, 41, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(279, 42, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(280, 43, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(281, 44, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(282, 45, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(283, 46, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(284, 47, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(285, 48, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(286, 49, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(287, 50, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(288, 52, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 10:51:17', 1),
(289, 12, '2022-08-10 00:00:00', 'Uninstall / Replacement of New ACU', 'ACU is defective', 'VVP', '2022-09-15 07:38:59', 0),
(290, 2, '2022-08-10 00:00:00', 'Installed at MIC Sterile Room 1', 'From ORD Office', 'VVP', '2022-09-15 07:41:17', 1),
(291, 32, '2022-09-15 00:00:00', 'ACU unused ', 'due to lack of electrical source', 'RAP', '2022-09-15 08:05:16', 1),
(292, 28, '2022-09-15 00:00:00', 'ACU Non functional', 'due to error of ACU remote controller', 'RAP', '2022-09-15 08:14:24', 1),
(293, 41, '0000-00-00 00:00:00', '', '', '', '2022-09-15 08:32:55', 0),
(294, 41, '2022-08-10 00:00:00', 'Transferred to RDs Office', 'Pull out from RSTL Office', 'VVP', '2022-09-15 08:33:23', 1),
(295, 36, '2022-08-10 00:00:00', 'ACU unused ', 'ACU for safe keeping', 'RAP', '2022-09-15 08:33:59', 1),
(296, 37, '2022-08-10 00:00:00', 'ACU unused ', 'ACU for safe keeping', 'RAP', '2022-09-15 08:39:49', 1),
(297, 61, '2020-09-03 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:27', 1),
(298, 61, '2021-02-26 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:34', 1),
(299, 61, '2021-06-01 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:36', 1),
(300, 61, '2021-10-09 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:38', 1),
(301, 61, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:41', 1),
(302, 61, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:10:43', 1),
(303, 62, '2022-04-23 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:13:31', 1),
(304, 63, '2022-08-10 00:00:00', 'Installed at MIC Media Prep Room', 'New ACU acquired', 'VVP', '2022-09-15 09:13:39', 1),
(305, 62, '2022-07-16 00:00:00', 'General Cleaning / PM', 'GOOD WORKING CONDITION', 'VVP', '2022-09-15 09:13:45', 1),
(306, 64, '2022-08-10 00:00:00', 'Installed at CHE Wet Lab', 'Newly acquired ACU', 'VVP', '2022-09-15 09:18:00', 1),
(307, 65, '2022-08-10 00:00:00', 'Installed at SHL Sensory Room', 'Newly acquired ACU', 'VVP', '2022-09-15 09:22:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ac_status`
--

CREATE TABLE `tbl_ac_status` (
  `id` int(11) NOT NULL,
  `equip_stat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ac_status`
--

INSERT INTO `tbl_ac_status` (`id`, `equip_stat`) VALUES
(1, 'Working'),
(2, 'Not-Working');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aircon`
--

CREATE TABLE `tbl_aircon` (
  `id` int(11) NOT NULL,
  `code_no` varchar(45) DEFAULT NULL,
  `equipment_name` varchar(1000) DEFAULT NULL,
  `manufacturer` varchar(1000) DEFAULT NULL,
  `type_model_no` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `software_name` varchar(100) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `placement_date` datetime DEFAULT NULL,
  `received_condition` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mfg_instructions` varchar(100) DEFAULT NULL,
  `other_specifications` varchar(1000) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `ac_stat` int(11) DEFAULT '1',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aircon`
--

INSERT INTO `tbl_aircon` (`id`, `code_no`, `equipment_name`, `manufacturer`, `type_model_no`, `serial_no`, `software_name`, `current_location`, `placement_date`, `received_condition`, `price`, `mfg_instructions`, `other_specifications`, `remarks`, `date_created`, `ac_stat`, `status`) VALUES
(1, 'saf', '2', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:14:16', 1, 0),
(2, 'RO-ORD-ACU-1.05', 'Air conditioning Unit', 'Samsung', 'Split Type, 1.0 hp', 'Property No. RO-ACU-CHS-001', NULL, 'ORD Office / Transferred to MIC Sterile Room 1', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:14:49', 1, 1),
(3, 'RO-ORD-ACU-1.01', 'Air conditioning Unit', 'LG', 'Window Type, 1.0hp', '604TAWMTN441', NULL, 'ORD Office-PMEQ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:16:00', 1, 1),
(4, 'RO-ORD-ACU-1.04', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'ORD Office-Near Stairs', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:16:56', 1, 1),
(5, 'RO-ORD-ACU-1.02', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', '2020-ORD-ACU-001', NULL, 'ORD Office', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:17:54', 1, 1),
(6, 'RO-ORD-ACU-1.03', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'ORD Office-PMEQ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:19:46', 1, 1),
(7, 'RO-COA-ACU-1.01', 'Air conditioning Unit', 'Carrier', 'Window Type, 2.0 hp', 'Property No.: RO-AC-ASEL-001', NULL, 'COA Office', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:21:36', 1, 1),
(8, 'RO-FASD-ACU-1.01', 'Air conditioning Unit', 'LG', 'Window Type, 1.0hp', 'Not indicated', NULL, 'FASD Office-Accounting', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:24:08', 1, 1),
(9, 'RO-FASD-ACU-1.02', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'FASD Office-Budget', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:27:34', 1, 1),
(10, 'saf', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:28:15', 1, 0),
(11, 'try delete', 'try deleter', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:31:23', 1, 0),
(12, 'RO-RSTL-ACU-1.15', 'Air conditioning Unit', 'Koppel', 'Split Type, 2.0 hp', 'LB350(350), C-EQ-35.6', NULL, 'MIC Sterile Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:31:30', 1, 1),
(13, 'RO-FASD-ACU-1.06', 'Air conditioning Unit', 'Kolin', 'Split Type, Model No.KSJ-36CIM, 2.0 hp', 'RO-ACU-FAS-001', NULL, 'FASD Office', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:34:42', 1, 1),
(14, 'RO-TSD-ACU-1.04', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'TSD Office Pantry', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:35:11', 1, 1),
(15, 'RO-RSTL-ACU-1.18', 'Air conditioning Unit', 'Carrier', 'Window Type, 1.0 hp', 'H2RACCARIOKECF08PC-0447619, M-EQ-3.4', NULL, 'RSTL Hallway Near MIC Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:36:38', 1, 1),
(16, 'RO-TSD-ACU-1.03', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'TSD Office-Near RNR', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:49:15', 1, 1),
(17, 'safagsadgdfhgdh', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:49:26', 1, 0),
(18, 'RO-TSD-ACU-1.02', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'TSD Office-Back of VMF', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:49:57', 1, 1),
(19, 'RO-ORD-ACU-1.06', 'Air conditioning Unit', 'Midea', 'Split Type, 2.0 hp', '341671403078A100120146, Property No.2019-CON-ACU-001', NULL, 'ORD Office-Conference ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:51:15', 1, 1),
(20, 'sf', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 11:52:43', 1, 0),
(21, 'RO-TSD-ACU-1.01', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'Not indicated', NULL, 'TSD Office-S&T Promotion', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 12:57:29', 1, 1),
(22, 'try', 'try', 'try', 'try', 'try', NULL, 'try', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 14:17:21', 1, 0),
(23, 'RO-FASD-ACU-1.03', 'Air conditioning Unit', 'Carrier', 'Window Type, 1.0 hp', 'Not indicated', NULL, 'FASD Office-Scholarship', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:05', 1, 1),
(24, 'RO-FASD-ACU-1.04', 'Air conditioning Unit', 'Sharp', 'Split Type, Model No. AH-XS20VF, 2.0 hp', '1004297', NULL, 'FASD Office-HR', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:07', 1, 1),
(25, 'RO-FASD-ACU-1.05', 'Air conditioning Unit', 'Sharp', 'Split Type, Model No. AH-XS20VF, 1.0 hp', '1004249', NULL, 'FASD Office-Cashiering', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:08', 1, 1),
(26, 'RO-SERVER-ACU-1.01', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'RO-RML-CAM-001', NULL, 'Server Room-MIS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:10', 1, 1),
(27, 'RO-RSTL-ACU-1.26', 'Air conditioning Unit', 'Koppel', 'Split Type, 2.0 hp', 'DU250220', NULL, 'RSTL Hallway', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:13', 1, 1),
(28, 'RO-RSTL-ACU-1.25', 'Air conditioning Unit', '', 'Window Type, Carrier - 1.0 hp', '120110600642', NULL, 'CHE Drinking Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:15', 2, 1),
(29, 'RO-RSTL-ACU-1.24', 'Air conditioning Unit', 'LG', 'Window Type,1.0hp', '601TAULC8318', NULL, 'CHE Drinking Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:18', 1, 1),
(30, 'RO-RSTL-ACU-1.23', 'Air conditioning Unit', 'Koppel', 'Split Type, 2.0 hp', '98SC18232, C-EQ-35.9, RO-CTL-ACU-006', NULL, 'CHE Drinking Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:20', 1, 1),
(31, 'RO-RSTL-ACU-1.22', 'Air conditioning Unit', 'LG', 'Window Type, 1.0hp', '601TAKKC8485, RO-CTL-ACU-009', NULL, 'CHE Weighing Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:22', 1, 1),
(32, 'RO-RSTL-ACU-1.21', 'Air conditioning Unit', 'National', 'Window Type, 2.0 hp', 'C-EQ-1.2', NULL, 'CHE Wet Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:38:24', 2, 1),
(33, 'RO-RSTL-ACU-1.20', 'Air conditioning Unit', '', 'Window Type, Carrier - 2.0 hp', '111705055', NULL, 'CHE Wet Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:42', 1, 1),
(34, 'RO-RSTL-ACU-1.19', 'Air conditioning Unit', 'National', 'Window Type, Model No. CW-1802VPH, 2.0 hp', '5D0615884, C-EQ-35.1', NULL, 'CHE Instrumentation Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:44', 1, 1),
(35, 'RO-TSD-ACU-1.05', 'Air conditioning Unit', 'Samsung', 'Split Type, Model No. ASV10PSMNXTC, 2.0 hp', 'QOPHTDCD300116Z, RO-RML-ACU-003', NULL, 'TSD Office-Near RNR', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:45', 1, 1),
(36, 'RO-RSTL-ACU-1.06', 'Air conditioning Unit', 'LG', 'Window Type, 1.0hp', '601TAZFC8429', NULL, 'RML Old Room (Temperature Calibration)', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:47', 1, 1),
(37, 'RO-RSTL-ACU-1.07', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'AF-T1017CR', NULL, 'RML Old Room (Small Mass Calibration)', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:49', 1, 1),
(38, 'RO-RSTL-ACU-1.01', 'Air conditioning Unit', 'Kolin', 'Split Type, Model No.KLM-1C40-2C1M-1,  3.0 tons', '17152103-10699', NULL, 'CRO Area', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:51', 1, 1),
(39, 'RO-RSTL-ACU-1.02', 'Air conditioning Unit', 'Carrier', 'Window Type, 2.0 hp', 'Not indicated', NULL, 'From RML New Room (Thermohygrometer Calibration) transferred to RML Old Room (Thermometry Calibratio', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:53', 1, 1),
(40, 'RO-RSTL-ACU-1.03', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', '1801050563, RO-RML-ACU-001', NULL, 'From RML New Room (Big Mass Calibration) Transferred to RML Old Room (Small Mass Calibration)', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:55', 1, 1),
(41, 'RO-RSTL-ACU-1.04', 'Air conditioning Unit', 'LG', 'Split Type, 2.0 hp', '507HARDC3590/507HAJTA5612, RO-RML-ACU-005', NULL, 'From RSTL Office transferred to ORD Office', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:56', 1, 1),
(42, 'RO-RSTL-ACU-1.08', 'Air conditioning Unit', 'Carrier', 'Window Type, 2.0 hp', 'RO-AC-2010-001', NULL, 'SHL Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:43:58', 1, 1),
(43, 'RO-RSTL-ACU-1.09', 'Air conditioning Unit', 'Koppel', 'Split Type, 2.0 hp', 'KB250086, M-EQ-3.1', NULL, 'SHL Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:50:32', 1, 1),
(44, 'RO-RSTL-ACU-1.10', 'Air conditioning Unit', 'TCL', 'Window Type, 1.0hp', '10061ZJ4930J40100011, Property No. 2020-RSTL-ACU-003', NULL, 'MIC Lab Hallway', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:50:34', 1, 1),
(45, 'RO-RSTL-ACU-1.11', 'Air conditioning Unit', 'TCL', 'Window Type, 1.0hp', '10061ZJ4930J40101167', NULL, 'MIC Lab Hallway', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:50:37', 1, 1),
(46, 'RO-RSTL-ACU-1.12', 'Air conditioning Unit', 'TCL', 'Window Type, 1.0hp', '10061ZJ4930J40100002, Property No. 2022-RSTL-ACU-001', NULL, 'MIC Media Prep', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:50:39', 1, 1),
(47, 'RO-RSTL-ACU-1.13', 'Air conditioning Unit', 'Carrier', 'Window Type, 1.0 hp', 'Not indicated', NULL, 'MIC Media Prep', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:50:40', 2, 1),
(48, 'RO-RSTL-ACU-1.14', 'Air conditioning Unit', 'Koppel', 'Split Type, 1.0 hp', 'LB380(338), Property No. RO-CTL-ACU-005, C-EQ-35.7', NULL, 'MIC Drinking Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:53:45', 1, 1),
(49, 'RO-RSTL-ACU-1.16', 'Air conditioning Unit', 'National', 'Window Type, 2.0 hp', '4D1705557, Property No. RO-RML-ACU-02, C-EQ-35-.4', NULL, 'CHE Wet Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:53:47', 1, 1),
(50, 'RO-RSTL-ACU-1.17', 'Air conditioning Unit', 'National', 'Window Type, Model No. CW-1802VPH, 2.0 hp', '741614991', NULL, 'CHE Instrumentation Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:53:49', 1, 1),
(51, 'RO-DORM-ACU-1.01', 'Air conditioning Unit', 'Sharp', 'Window Type, 1.0hp', 'P1931040663', NULL, 'DOST-X Dorm/Lactation Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 08:53:50', 1, 1),
(52, 'RO-RSTL-ACU-1.05', 'Air conditioning Unit', 'Samsung', 'Split Type, 2.0 hp', 'QOPJPDCD600048, RO-RML-ACU-003', NULL, 'RSTL Document Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-20 14:23:27', 1, 1),
(53, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 10:15:34', 1, 0),
(54, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 11:39:39', 1, 0),
(55, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 16:21:21', 1, 0),
(56, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-02 16:23:20', 1, 0),
(57, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 16:52:30', 1, 0),
(58, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 16:52:42', 1, 0),
(59, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 16:54:40', 1, 0),
(60, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-07 16:56:45', 1, 0),
(61, 'RO-RSTL-ACU-1.27', 'Air conditioning Unit', 'TCL', 'Window Type, Model No. TAC-09CWR/F, 1.0 hp', '19015AC021, 2020-RSTL-ACU-004', NULL, 'RML New Building (Big Mass Calibration)', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 08:58:55', 1, 1),
(62, 'RO-RSTL-ACU-1.28', 'Air conditioning Unit', 'Sharp Inverter', 'Window Type, Model No. AF-X10SCF, 1.0 hp', 'Not Indicated', NULL, 'RML New Building (Thermo-hygrometery Calibration)', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 09:05:06', 1, 1),
(63, 'RO-RSTL-ACU-1.29', 'Air conditioning Unit', 'Koppel', 'Split Type, Model No. KV24WM-ARF21C2, 2.5 hp', '340C6229207181150130051', NULL, 'MIC Media Prep Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 09:11:33', 1, 1),
(64, 'RO-RSTL-ACU-1.30', 'Air conditioning Unit', 'Koppel', 'Split Type, Model No. KV24WM-ARF21C2, 2.5 hp', '340C622920718150130061', NULL, 'CHE Wet Lab', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 09:16:57', 1, 1),
(65, 'RO-RSTL-ACU-1.31', 'Air conditioning Unit', 'Koppel', 'Split Type, Model No. KV24WM-ARF21C2, 2.0 hp', '3409991300512040130167', NULL, 'SHL Sensory Room', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 09:20:34', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bldg_attachments`
--

CREATE TABLE `tbl_bldg_attachments` (
  `veh_attach_id` int(11) NOT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `file_path` varchar(1000) DEFAULT NULL,
  `file_description` varchar(1000) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bldg_maint_record`
--

CREATE TABLE `tbl_bldg_maint_record` (
  `id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `op_performed` varchar(500) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `performed_by` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_building`
--

CREATE TABLE `tbl_building` (
  `id` int(11) NOT NULL,
  `code_no` varchar(45) DEFAULT NULL,
  `building_name` varchar(1000) DEFAULT NULL,
  `manufacturer` varchar(1000) DEFAULT NULL,
  `type_model_no` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `software_name` varchar(100) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `placement_date` datetime DEFAULT NULL,
  `received_condition` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mfg_instructions` varchar(100) DEFAULT NULL,
  `other_specifications` varchar(1000) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `ac_stat` int(11) DEFAULT '1',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calibration_type`
--

CREATE TABLE `tbl_calibration_type` (
  `ctype_id` int(11) NOT NULL,
  `calib_req` varchar(100) DEFAULT NULL,
  `measurement_unit` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `datetime_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calibration_type`
--

INSERT INTO `tbl_calibration_type` (`ctype_id`, `calib_req`, `measurement_unit`, `status`, `datetime_created`) VALUES
(1, 'Volume Accuracy', 'Volume', 1, '2021-12-24 14:06:38'),
(2, 'Temperature accuracy and stability', 'Temperature', 1, '2021-12-24 14:07:14'),
(3, 'Pressure accuracy and stability', 'Pressure', 1, '2021-12-24 14:07:38'),
(4, 'Mass accuracy', 'Mass', 1, '2021-12-24 14:08:01'),
(5, 'Hardness Value', 'HRC, HRB, BHN', 1, '2021-12-24 14:08:30'),
(6, 'Hardness Value', 'BHN', 1, '2021-12-24 14:08:51'),
(7, 'Length accuracy', 'Metric System', 1, '2021-12-24 14:09:12'),
(8, 'Reading accuracy', 'Mass', 1, '2021-12-24 14:10:04'),
(9, 'Reading precision and accuracy', 'temperature/pressure', 1, '2021-12-24 14:10:56'),
(10, 'Humidity and Temperature accuracy', 'humidity/pressure', 1, '2021-12-24 14:11:39'),
(11, 'Temperature, humidity and velocity accuracy and stability', 'temperature', 1, '2021-12-24 14:12:23'),
(12, 'Surface flatness accuracy', 'Metric System', 1, '2021-12-24 14:12:53'),
(13, 'Temperature and pressure accuracy and stability', 'Temperature', 1, '2021-12-24 14:14:15'),
(14, 'Temperature and humidity accuracy', 'Temperature/Humidity', 1, '2021-12-24 14:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calib_program`
--

CREATE TABLE `tbl_calib_program` (
  `calib_id` int(11) NOT NULL,
  `equip_id` int(11) DEFAULT NULL,
  `calib_type_id` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calib_program`
--

INSERT INTO `tbl_calib_program` (`calib_id`, `equip_id`, `calib_type_id`, `frequency`, `date_added`, `status`) VALUES
(1, 133, 1, 5, NULL, 1),
(2, 133, 4, 6, NULL, 1),
(3, 132, 1, 5, NULL, 1),
(4, 132, 4, 6, NULL, 1),
(5, 134, 1, 5, NULL, 1),
(6, 134, 4, 6, NULL, 1),
(7, 135, 1, 6, NULL, 1),
(8, 135, 5, 7, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `id` int(11) NOT NULL,
  `code_no` varchar(45) DEFAULT NULL,
  `equipment_name` varchar(1000) DEFAULT NULL,
  `manufacturer` varchar(1000) DEFAULT NULL,
  `type_model_no` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `software_name` varchar(100) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `placement_date` datetime DEFAULT NULL,
  `received_condition` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mfg_instructions` varchar(100) DEFAULT NULL,
  `other_specifications` varchar(1000) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`id`, `code_no`, `equipment_name`, `manufacturer`, `type_model_no`, `serial_no`, `software_name`, `current_location`, `placement_date`, `received_condition`, `price`, `mfg_instructions`, `other_specifications`, `remarks`, `date_created`, `status`) VALUES
(1, 'RML-EQ-1.1', 'Air Conditioning Unit, Carrier', 'Carrier', 'WCARP019ED', '51PMXRACCAR19KEDE08PC-0324277', 'N/A', 'Office Area', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '5 in 1 filter', '', '2021-12-24 13:15:58', 1),
(132, 'RML-EQ-1.2', 'Air Conditioning Unit, Carrier', 'Carrier', '', '51CHG-RAC-CAR-10KECB14P-C010-5134', 'N/A', 'Mass Room', '2016-12-01 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2021-12-23 10:08:15', 1),
(133, 'RML-EQ-2.1', 'Barometer, Aneroid, Sato', 'Sato', '', '57082', 'N/A', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '930-1070 hPa/700-800mmHg', '', '2021-12-23 10:09:05', 1),
(134, 'RML-EQ-1.3', 'Air Conditioning Unit, Samsung', 'Samsung', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2021-12-23 10:11:24', 1),
(135, 'RML-EQ-1.1', 'Air Conditioning Unit, Carrier', 'Carrier', 'WCARP019ED', '51PMXRACCAR19KEDE08PC-0324277', 'N/A', 'Office Area', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '5 in 1 filter', '', '2021-12-23 10:14:49', 0),
(136, 'RML-EQ-3.3', 'Computer, Laptop, Acer', 'Acer', 'KAV10', 'LUS62OBO279O9232O41601', 'WindowsXP', 'Weighing Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2021-12-23 10:15:53', 1),
(137, 'RML-EQ-3.1', 'Computer, Laptop, Acer', 'Acer', 'LH1, Acer Aspire 3810T Series', '92502048723', 'Windows Vista', 'FBQ\'s Office', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'DC Rating: 19V, 3.42A', 'Blind Laptop', '2021-12-23 10:21:24', 1),
(138, 'RML-EQ-3.2', 'Computer, Laptop, Acer', 'Acer', 'KAV10', 'LUS620B027909232041601', 'Windows VXp', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'DC Rating: 19V, 1.58A', '', '2021-12-23 10:22:52', 1),
(139, 'RML-EQ-3.4', 'Computer, Laptop, Compaq Presario', 'Compaq Computer Corporation', 'SERIES 2940', 'V733BQH5C934', 'WINDOWS 95/98', 'Weighing Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-04-28 08:35:25', 1),
(140, 'RML-EQ-3.5', 'Computer, Laptop, Toshiba', 'Toshiba Corporation', 'PSMCOL-02400C', '87135149Q', '', 'Weighing Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'DC Rating, 19V, 3.42A', '', '2022-04-28 08:36:51', 1),
(141, 'RML-EQ-3.6', 'Computer, Laptop, Toshiba', 'Toshiba Corporation', '', '', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-04-28 08:37:42', 1),
(142, 'RML-EQ-3.7', 'Computer, Laptop, ACER ASPIRE 47362 SERIES', 'ACER', 'KALGO', 'LXP530C010920328551601', 'WINDOWS 7', 'FBQ OFFICE', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-04-28 08:40:30', 1),
(143, 'RML-EQ-3.8', 'Computer, Laptop, ACER ASPIRE E1-431', 'ACER', 'ZQT', 'NXMORSPO14333069DC7600', 'WINDOWS 8', 'FBQ ROOM', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', 'Accessory to RML-EQ-8.4 (Mass Comparator, Sartorius)', '2022-04-28 08:42:44', 1),
(144, 'RML-EQ-3.9', 'Computer, Laptop, ACER ASPIRE E-14', 'ACER', 'E5 - 47636-3', 'NXMXJSPOO1519007AAF3400', 'WINDOWS 8', 'FBQ ROOM', '2015-06-25 00:00:00', 'Good, Working', 0, 'AVAILABLE', 'CHARCOAL GREY INTEL CORE I3 - 4005V PROCESSOR 4GB DDR3 MEMORY 1TB HDD SATA', 'RO-RML-COM-005', '2022-04-28 08:45:21', 1),
(145, 'RML-EQ-3.10', 'Computer, Laptop, ACER ASPIRE E-14', 'ACER', 'ES - 47636-3', 'NXMXHSP0015190A2FB3400', 'WINDOWS 8', 'FBQ ROOM', '2015-06-25 00:00:00', 'Good, Working', 28140, 'AVAILABLE', 'OCEAN BLUE INTEL CORE I3 - 4005V PROCESSOR 4GB DDR3 MEMORY 1TB HDD SATA', '', '2022-04-28 08:47:50', 1),
(146, 'RML-EQ-3.11', 'Computer, Laptop, ACER ASPIRE E-14', 'ACER', 'E5 - 47636-3', 'NXMXJSPOO151907AEC3400', 'WINDOWS 8', 'FBQ ROOM', '2015-06-25 00:00:00', 'Good, Working', 28140, 'AVAILABLE', 'CHARCOAL GREY INTEL CORE I3 - 4005V PROCESSOR 4GB DDR3 MEMORY 1TB HDD SATA', '', '2022-04-28 08:49:31', 1),
(147, 'RML-EQ-3.12', 'Computer, Laptop, Samsung', 'Samsung', '', '', '', 'FBQ ROOM', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', 'Accessory to RML-EQ-8.31 (Mass Comparator, Radwag)', '2022-04-28 08:50:28', 1),
(148, 'RML-EQ-4.1', 'Dead Weight Tester, Portable Pneumatic', 'Pressurements LTD.', 'M220013', '9773-96', 'N/A', 'OFFICE ROOM', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Range: 10-10000psi, Factor: X20, g:980-665', '', '2022-04-28 08:52:57', 1),
(149, 'RML-EQ-4.2', 'Pressure Comparator, Type T', 'Ametek, Mansfield and Green Division', '2481482 & 3155041', '100313', 'N/A', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Digital Readout', '', '2022-04-28 08:54:50', 1),
(150, 'RML-EQ-5.1', 'Dehumidifier, White Westing House', 'White Westing House', '', '', 'N/A', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '30 frost control, automatic shut off', '10Aug2016: Humidifier motor is defective. Motor needs rewinding.', '2022-04-28 08:56:25', 1),
(151, 'RML-EQ-6.1', 'Vent Hood', 'Philab Industries Inc.', 'N/A', 'N/A', 'N/A', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-04-28 08:57:12', 1),
(152, 'RML-EQ-7.1', 'LCD Monitor, AOC', 'AOC, TVP Electric(Fujian) Co. LTD', '7FT15W60PS', 'V489BJA000611', 'N/A', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Product Name: 1619SQ', '', '2022-04-28 08:58:50', 1),
(153, 'RML-EQ-7.2', 'LCD Monitor, AOC', 'AOC, TVP Electronic(Fujian) Co. LTD', 'TFT15W60PS', 'I8287JA012061', 'N/A', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'Product Name: 1619Sw Power Rating 100-240V, 50/60Hz, 1.5A', '', '2022-04-28 09:00:30', 1),
(154, 'RML-EQ-8.1', 'Mass Comparator, Analytical Balance, Sartorius', 'Sartorius', 'LC5101S', '80301371', 'N/A', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:01:56', 1),
(155, 'RML-EQ-7.3', 'LCD Monitor, Samsung', 'Samsung', 'S20B300B', 'ZUL6HMBC700141H', 'N/A', 'Receiving Area', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'DC 14V, 2.14A', '', '2022-04-28 09:03:00', 1),
(156, 'RML-EQ-8.2a', 'Mass Comparator, Digital Readout, Sartorius', 'Sartorius', 'CCE60K2', '2370518', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:03:59', 1),
(157, 'RML-EQ-8.2', 'Mass Comparator, Digital Readout, Sartorius', 'Sartorius', 'CCE60K2', '2370518', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:04:55', 1),
(158, 'RML-EQ-8.3a', 'Mass Comparator, Digital Readout, Radwag', 'Radwag', 'WAY 500.3YKO', '384112/13', '', 'Mass Section Room', '2013-07-10 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:05:59', 1),
(159, 'RML-EQ-8.3', 'Mass Comparator, Radwag', 'Radwag ', 'WAY 500.3YKO', '384112/13', '', 'Mass Room', '2013-07-10 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:06:56', 1),
(160, 'RML-EQ-8.3b', 'Mass Comparator attached Data Printer, Samsung', 'Samsung', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-04-28 09:07:50', 1),
(161, 'RML-EQ-8.4', 'Mass Comparator, Sartorius', 'Sartorius', 'CCE2004', '31303328', '', 'Mass Room', '2014-04-01 00:00:00', 'Satisfactory', 1778499, 'Available', 'Complete with Draft shield YDS24C Capacity: 2500g, Resolution: 0.1mg ', 'Pull out for Repair by exclusive traders on 5 Nov 14 due to increasing reading. Delivered by the exclusive Traders on Feb 15', '2022-04-28 09:10:53', 1),
(162, 'RML-EQ-8.4a', 'Mass Comparator, Digital Readout', 'Sartorius', '', '', '', 'Mass Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-04-28 09:11:45', 1),
(163, 'RML-EQ-9.1', 'Pocket Weather Tracker, Kestrel', 'Kestrel', '4000', '591230', 'N/A', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:12:30', 1),
(164, 'RML-EQ-10.1', 'Printer, EPSON LX-300', 'EPSON', 'LX-300', '', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 09:13:07', 1),
(165, 'RML-EQ-10.2', 'Printer, HP LaserJet', 'Hewlett Packard', 'P1006', 'VNF4G05182', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 10:39:58', 1),
(166, 'RML-EQ-10.3', 'Printer, HP Deskjet 2060 All-in-One', 'HP', 'VCVRA-1001', 'CN19F33MZN', '', 'Office Room', '0000-00-00 00:00:00', 'Satisfactory', 0, '', '', '', '2022-04-28 10:40:58', 1),
(167, 'RML-EQ-10.4', 'Printer, HP Deskjet 2515', 'HP', 'VCVRA-1221', 'CN36Q3PM2B', '', 'FBQ ROOM', '0000-00-00 00:00:00', 'Good, Working', 0, 'Available', '', '', '2022-04-28 10:41:56', 1),
(168, 'RML-EQ-10.5', 'Printer, Samsung', 'Samsung', 'ML-2164', '2629B8GD2DOO5GM', '', 'Mass Room', '0000-00-00 00:00:00', 'Good, working', 0, '', 'Laser Printer', 'Accessory to RML-EQ-8.3a (Mass Comparator), RML-EQ-3.12. Not used Reason: Samsung Laser Cartridge is expensive.', '2022-04-28 10:44:42', 1),
(169, 'RML-EQ-10.6', 'Printer, HP Deskjet 1515 All-in-One', 'HP', 'SNPRB-1204-01', 'CN3QIN731', 'Printer Software', 'FBQ Office', '2015-07-03 00:00:00', 'Good, Working', 3659, 'Available', '', '', '2022-04-28 10:45:59', 1),
(170, 'RML-EQ-11.1', 'Temperature Calibrator, Data Logger, 73VR', 'M System', '73VR2112-E-M2', '71033656', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 10:47:15', 1),
(171, 'RML-EQ-11.2', 'Thermocouple Calibrator, Universal, Ametek', 'Ametek', '422', '188992', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-04-28 10:48:04', 1),
(172, 'RML-EQ-12.2', 'Thermohygrometer, Vaisala', 'Vaisala', 'HM141', 'E2150004', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Operating Temp Range: -20-60°C/-4-140°F, Humidity Range: 0 to 100%RH, Battery: 1.5V', '', '2022-04-28 10:49:36', 1),
(173, 'RML-EQ-12.1', 'Thermohygrometer', 'Cole Palmer Instrument Company', '3310-40', '', '', 'Weighing Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'Temp Range: -10-76°C/0-180°F, Humidity Range: 0 to 100% RH ', '', '2022-04-28 11:51:25', 1),
(174, 'RML-EQ-12.4', 'Temperature and Humidity Datalogger, Extech', 'Extech', '42280', '9926105', 'Extech SW276 Software', 'Mass Section Room', '2013-03-11 00:00:00', 'Good, Working', 0, '', 'Large LCD display shows temp, humidity, and date/time clock simultaneously, 16000 internal memory capacity', '', '2022-04-28 11:53:47', 1),
(175, 'RML-EQ-12.4', 'Temperature and Humidity Datalogger, Extech', 'Extech', '42280', '9945563', 'Extech SW276 Software', 'Mass Section Room', '2013-03-11 00:00:00', 'Good, Working', 0, '', 'Large LCD display shows temp, humidity, and date/time clock simultaneously, 16000 internal memory capacity', '', '2022-04-28 11:55:54', 1),
(176, 'RML-EQ-12.6', 'Humidity-Temperature Chart Recorder, Extech', 'Extech', 'RH520', 'CH23811', 'ExChart RH520 v.2.1', 'Mass Section Room', '2013-03-11 00:00:00', 'Good, Working', 0, '', 'Large, backlit graphical LCD, Accuracy ±3.0%RH and 1.8­°F(1°C) for temp, Three (3) AA batteries and AC adaptor', '', '2022-04-28 11:58:53', 1),
(177, 'RML-EQ-12.5', 'Humidity-Temperature Chart Recorder, Extech', 'Extech', 'RH520', 'CH23816', 'ExChart RH520 v.2.1', 'Mass Section Room', '2013-03-11 00:00:00', 'Good, Working', 0, '', 'Large, backlit graphical LCD, Accuracy ±3.0%RH and 1.8­°F(1°C) for temp, Three (3) AA batteries and AC adaptor', '11 May 2015 - Defective (no power)', '2022-04-28 12:00:33', 1),
(178, 'RML-EQ-12.7', 'Thermohygraph Recording & Time Printing', 'Sekonic', 'ST50-M', 'HE51-000221', '', 'Mass Room', '2014-04-01 00:00:00', 'Satisfactory', 59126, 'Available', 'Battery Operated, DC6V, LR20x4, R20x4', 'Pull out for calibration on 5 Nov 14 by Exclusive traders. 19 Jan 15 - Returned this unit by Exclusive Traders. 26 Jan 15 Found out this unit is not turning on (Already replaced 4pcs of the battery). 27 Jan 15 informed the exclusive about the problem. 18 March 15 pulled out by the exclusive for repair.', '2022-04-28 13:11:20', 1),
(179, 'RML-EQ-12.8', 'Thermohygraph Recording & Time Printing', 'Sekonic', 'ST50-M', 'HE51-000252', '', 'Mass Room', '2014-04-01 00:00:00', 'Satisfactory', 59126, 'Available', 'Battery Operated, DC6V, LR20x4, R20x4', '27 April 2015 - defective/no power; already changed battery (RRG). 28 May 2015 - repaired (re-saddle) by technician for exclusive and batteries were replaced. Already in functional condition.', '2022-04-28 13:19:02', 1),
(180, 'RML-EQ-12.10', 'Thermometry Calibrator, KIMO', '', '', '', '', 'Office Room', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-04-28 13:19:55', 1),
(181, 'RML-EQ-12.9', 'Thermo-Hygrometer', 'Lufft', '5061-A/HTAB 176', '3833', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 7030, '', 'Relative Humidity/Temperature Meter 0-100%RH/ -20 to 100°C. Wall Mounted', '', '2022-04-28 13:21:37', 1),
(182, 'RML-EQ-13.1', 'Thermometry Calibrator, Ametek Calibration Instruments', 'Ametek Calibration Instruments', 'ATC-140B', '578144-00525', '', 'Office Room/RML Temp Calibration Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'Volts/Hz-115/230', '', '2022-04-28 13:23:04', 1),
(183, 'RML-EQ-13.2', 'Thermometry Calibrator, Ametek Calibration Instruments', 'Ametek Calibration Instruments', 'DT1-1000A', '578405-00268', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'Volts/Hz-8/1.5V', '', '2022-04-28 13:25:10', 1),
(184, 'RML-EQ-13.4', 'Thermometry Calibrator, Fluke Hart Scientific', 'Fluke', '7340', 'B32444', '', 'Office Room', '2012-12-26 00:00:00', 'Good, Working', 1367887, '', 'please input', '', '2022-05-12 14:27:05', 1),
(185, 'RML-EQ-13.3', 'Thermometry Calibrator, Ertco, Precision, TCS', 'Ertco, Precision', 'TCS 200-35', '808311', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', 'Volts/Hz-120/160', '', '2022-05-12 14:29:34', 1),
(186, 'RML-EQ-13.5', 'Thermometer, Oakton', 'Oakton', '', '', '', 'Office Room', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-12 14:30:03', 1),
(187, 'RML-EQ-14.1', 'Voltage Regulator, Matsunaga', 'MATSUNAGA', 'SVC-500NM', '', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-05-12 14:30:51', 1),
(188, 'RML-EQ-14.2', 'Voltage Regulator, Stancor', 'Stancor', 'MVS-5500W', '', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '500W, Input  60/30V/140-2400', '', '2022-05-12 14:32:03', 1),
(189, 'RML-EQ-14.3', 'Voltage Regulator, Ultra', 'Ultra, Servo Motor', 'SVC-1500', 'DO635423', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-05-12 14:33:53', 1),
(190, 'RML-EQ-14.4', 'Voltage Regulator, Ultra', 'Ultra, Servo Motor', 'SVC-1500', '', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, 'N/A', '', '', '2022-05-12 14:35:22', 1),
(191, 'RML-EQ-14.5', 'Voltage Regulator, Ultra', 'Ultra, Servo Motor', '', '', '', '', '2014-11-25 00:00:00', '', 0, 'N/A', '', '', '2022-05-12 14:36:02', 1),
(192, 'RML-EQ-14.6', 'Voltage Regulator, Radix', 'Radix', 'MDR-22506W', 'MT1312 9860 0113', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-12 14:36:45', 1),
(193, 'RML-EQ-14.7', 'Voltage Regulator, Pioneer Electronics', 'Pioneer Electronics', '20,200', '', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Cycles: 60, Volts Output 220, Volts Input: 110', '', '2022-05-12 14:37:52', 1),
(194, 'RML-EQ-16.2', 'Platform Balance', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-12 14:38:12', 1),
(195, 'RML-EQ-16.1', 'Weighing Indicator, Asuki K1', 'Asuki, Electronics Scales co. LTD Japan', 'SS-035, Level III', 'K10425', '', 'Mass Section Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', 'Power Source: 220V/50Hz, Max Capacity: 17kg, Min. Capacity: 2kg', '', '2022-05-12 14:39:36', 1),
(196, 'RML-EQ-17.1', 'Speed Drill, Press', '', '', '', '', 'Office Room', '0000-00-00 00:00:00', 'Good, Working', 0, '', '', '', '2022-05-12 14:40:05', 1),
(197, 'RML-EQ-18.1', 'Optical Emission Spectrometer', 'HILGER ANALYTICAL', 'E982C', '714', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 2065847, 'Available', '45 Channels', '', '2022-05-12 14:43:48', 1),
(198, 'RML-EQ-19.1', 'Rare Gas Purifier', 'Sircal Instruments (UK) Ltd. ', '', '388876', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 149147, 'Available', 'please update', '', '2022-05-12 14:45:03', 1),
(199, 'RML-EQ-19.1a', 'Automatic Voltage Regulator', 'Sircal Instruments (UK) Ltd.', 'Model 400A-75TTY', '027083', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 0, '', '0-300V', '', '2022-05-12 14:46:24', 1),
(200, 'RML-EQ-21.1', 'Printer', 'Epson Industrial PTE LTD.', 'Epson LX 300', '1Q8X 009118', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 0, 'Available', 'please update', '', '2022-05-12 14:48:06', 1),
(201, 'RML-EQ-22.1', 'Keyboard', 'Olivetti Computer System', 'ANK 28-102', '24000744', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 0, 'Available', '', '', '2022-05-12 14:49:11', 1),
(202, 'RML-EQ-22.2', 'VDU', 'Olivetti Computer System', 'CDU1435SE/GS11', '7154837', '', 'Linear Room', '1995-07-21 00:00:00', 'Satisfactory', 0, 'Available', '', '', '2022-05-12 14:50:00', 1),
(203, 'RML-EQ-22.3', 'Computer', 'Olivetti Computer System', 'Model PCS40 SX/25', '*9739059*/V', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 0, '', 'please update', '', '2022-05-12 14:51:18', 1),
(204, 'RML-EQ-23.1', 'Horizontal Grinder', 'MIRDC Fabricated', '', '', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 0, '', 'please update', '', '2022-05-12 14:52:02', 1),
(205, 'RML-EQ-24.1', 'Rockwell Hardness Tester', 'Mitutuyo', 'AR-10', '102205', '', 'Office Room', '1995-07-21 00:00:00', 'Satisfactory', 138741, 'Available', 'please update', '', '2022-05-12 14:52:57', 1),
(206, 'RML-EQ-24.1a', 'Accessories', 'Asahi', '', '102205', '', 'Mass Room', '0000-00-00 00:00:00', '', 0, 'Available', '', '', '2022-05-12 14:53:40', 1),
(207, 'RML-EQ-24.2', 'Brinell Hardness Tester', 'KING TESTER CORP.', 'Standard Test Head with 13 1/2\"Base', 'VA-43', '', 'Office Room', '1995-09-21 00:00:00', 'Satisfactory', 90817, 'Available', 'please update', '', '2022-05-12 15:02:34', 1),
(208, 'RML-EQ-25.1', 'Electromagnetic Yoke', 'Econospect Corp.', 'Model ESY 400', '948202', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 19639, 'Available', 'Please update', '', '2022-05-12 15:03:43', 1),
(209, 'RML-EQ-26.1', 'Magnetic Field Indicator', 'MAGNAFLUX CORP.', '', '95-988', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 8120, 'None', 'Part No. 105645 Brand, Magnaflux', '', '2022-05-12 15:04:40', 1),
(210, 'RML-EQ-27.2', 'Gauge Block Set', 'Mitutoyo', 'Grade 0 ', '008631', '', 'Linear Room', '1995-07-21 00:00:00', 'Satisfactory', 0, '', '', '', '2022-05-12 15:05:20', 1),
(211, 'RML-EQ-27.1', 'Gauge Block Set', 'Mitutoyo', 'Grade 0', '950623', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 40453, 'Available', 'please update', '', '2022-05-12 15:06:15', 1),
(212, 'RML-EQ-29.1', 'Check Master', 'Mitutoyo', '', '510106', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 74383, 'Available', 'please update', '', '2022-05-12 15:07:09', 1),
(213, 'RML-EQ-28.1', 'Calibration Tester', 'Mitutoyo', 'Model UDT - 2', '500238', '', 'Office Room', '1995-07-21 00:00:00', 'Satisfactory', 44563, 'Available', 'please update', '', '2022-05-12 15:08:15', 1),
(214, 'RML-EQ-31.1', 'Micrometer', 'Mitutoyo', 'Digimatic', '6039678', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 7687, '', 'Code No. 293-721-30 0.001mm x 25mm', '', '2022-05-12 15:09:25', 1),
(215, 'RML-EQ-30.1', 'Vernier Caliper', 'Mitutoyo', 'Digimatic/CD-12\"', '7043107', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 0, 'Available', 'please update', '', '2022-05-12 15:10:47', 1),
(216, 'RML-EQ-33.2', 'Dial Indicator', 'Mitutoyo', '', '269E74', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 1174, '', '0.01mm x 10mm Code No. 2046FE', '', '2022-05-12 15:11:53', 1),
(217, 'RML-EQ-32.1', 'Dial Test Indicator', 'Mitutoyo', '', '189948', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 0, '', '0.01mm x 0.50mm Code No. 513-214FE', '', '2022-05-12 15:14:41', 1),
(218, 'RML-EQ-34.1', 'Micrometer Stand', 'Mitutoyo', '', 'None', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 0, '', 'Code No. 156-101', '', '2022-05-12 15:38:48', 1),
(219, 'RML-EQ-35.1', 'Magnetic Stand', 'KANETSU KOGYO CO., LTD.', 'Kanet MB-BV', '', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 2036, 'Available', 'Code No. 156-101', '', '2022-05-12 15:39:55', 1),
(220, 'RML-EQ-36.1', 'Cast Iron Surface Plate', 'MIRDC Fabricated', '', '', '', 'Mass Section Room', '1995-07-21 00:00:00', 'Satisfactory', 0, 'Code No. 156-101', '', '', '2022-05-12 15:40:42', 1),
(221, 'RML-EQ-32.3', 'Dial Indicator', 'Mitutoyo', '', '429C92', '', 'Mass Section Room', '1996-02-12 00:00:00', 'Satisfactory', 1175, 'Available', '0.01mm x 10mm Code No. 2046FE', '', '2022-05-12 15:42:07', 1),
(222, 'saf', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-19 11:15:48', 0),
(223, '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-19 11:53:37', 0),
(224, 'SFA', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-19 12:44:18', 0),
(225, '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, '', '', '', '2022-05-19 12:59:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frequency`
--

CREATE TABLE `tbl_frequency` (
  `mfreq_id` int(11) NOT NULL,
  `frequency` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `datetime_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_frequency`
--

INSERT INTO `tbl_frequency` (`mfreq_id`, `frequency`, `status`, `datetime_created`) VALUES
(1, 'As needed', 1, '2021-12-24 14:20:52'),
(2, 'Before & After Use', 1, NULL),
(3, 'Bi-monthly', 1, NULL),
(4, 'Monthly', 1, NULL),
(5, 'Every 4 months', 1, NULL),
(6, 'Bi-annual', 1, NULL),
(7, 'Annually', 1, NULL),
(8, 'Every 2 years', 1, NULL),
(10, 'Every 3 years', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance_type`
--

CREATE TABLE `tbl_maintenance_type` (
  `mtype_id` int(11) NOT NULL,
  `maintenance_type` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `datetime_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maintenance_type`
--

INSERT INTO `tbl_maintenance_type` (`mtype_id`, `maintenance_type`, `status`, `datetime_created`) VALUES
(1, 'External Cleaning', 1, '2021-12-24 14:16:21'),
(2, 'Internal Cleaning', 1, '2021-12-24 14:16:47'),
(3, 'External and Internal Cleaning', 1, '2021-12-24 14:17:15'),
(4, 'Corrective Maintenance', 1, '2021-12-24 14:17:38'),
(5, 'Preventive Maintenance', 1, '2021-12-24 14:19:35'),
(6, 'Preventive and Corrective Maintenance', 1, '2021-12-24 14:19:49'),
(7, 'Cleaning', 1, '2021-12-24 14:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maint_forms`
--

CREATE TABLE `tbl_maint_forms` (
  `form_id` int(11) NOT NULL,
  `file_path` varchar(1000) DEFAULT NULL,
  `file_description` varchar(1000) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maint_forms`
--

INSERT INTO `tbl_maint_forms` (`form_id`, `file_path`, `file_description`, `file_type`, `date_created`, `status`) VALUES
(1, 'http://122.53.79.156:8082/rstl_pm/images/MC-F1.docx', 'MC-F1 EQUIPMENT MAINTENANCE RECORD', NULL, '2022-06-27 15:30:39', 1),
(2, 'http://122.53.79.156:8082/rstl_pm/images/MC-F2 Request for Maintenance (For Vehicle).docx', 'MC-F2 Request for Maintenance', NULL, '2022-06-27 15:38:32', 1),
(3, 'http://122.53.79.156:8082/rstl_pm/images/MC-F3 Maintenance Record of ICT Equipment New.doc', 'MC-F3 Maintenance Record of ICT Equipment New', NULL, '2022-06-27 15:47:10', 1),
(4, 'http://122.53.79.156:8082/rstl_pm/images/ICT Record MC-F4.doc', 'MC-F4 ICT Record', NULL, '2022-06-27 15:50:14', 1),
(5, 'http://122.53.79.156:8082/rstl_pm/images/MC-F5, Building and Utilities Maintenance Record.doc', 'MC-F5, Building and Utilities Maintenance Record', NULL, '2022-06-28 08:56:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maint_program`
--

CREATE TABLE `tbl_maint_program` (
  `maint_id` int(11) NOT NULL,
  `equip_id` int(11) DEFAULT NULL,
  `maint_type_id` int(11) DEFAULT NULL,
  `frequency_id` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maint_program`
--

INSERT INTO `tbl_maint_program` (`maint_id`, `equip_id`, `maint_type_id`, `frequency_id`, `date_added`, `status`) VALUES
(1, 135, 1, 1, NULL, 1),
(3, 135, 6, 5, NULL, 1),
(4, 132, 1, 1, NULL, 1),
(5, 132, 6, 5, NULL, 1),
(6, 134, 1, 1, NULL, 1),
(7, 134, 6, 5, NULL, 1),
(8, 133, 7, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `employment_status` varchar(20) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `access_level` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` decimal(10,0) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `sex` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `lastname`, `middlename`, `firstname`, `birthday`, `address_id`, `marital_status`, `employment_status`, `username`, `password`, `access_level`, `email`, `contact_number`, `date_created`, `status`, `sex`) VALUES
(1, 'sheila', 'neri', 'cagape', '2017-01-01', NULL, 'single', 'employed', 'admin', 'admin', 0, 's.c@gmail.com', '9268912891', NULL, 1, 'female'),
(2, 'Pangan', 'A.', 'Ronald', NULL, NULL, NULL, NULL, 'rap', 'rapdostx', 0, NULL, NULL, NULL, 1, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `id` int(11) NOT NULL,
  `code_no` varchar(45) DEFAULT NULL,
  `vehicle_name` varchar(1000) DEFAULT NULL,
  `manufacturer` varchar(1000) DEFAULT NULL,
  `type_model_no` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `software_name` varchar(100) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `placement_date` datetime DEFAULT NULL,
  `received_condition` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mfg_instructions` varchar(100) DEFAULT NULL,
  `other_specifications` varchar(1000) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `ac_stat` int(11) DEFAULT '1',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_veh_attachments`
--

CREATE TABLE `tbl_veh_attachments` (
  `veh_attach_id` int(11) NOT NULL,
  `veh_id` int(11) DEFAULT NULL,
  `file_path` varchar(1000) DEFAULT NULL,
  `file_description` varchar(1000) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_veh_maint_record`
--

CREATE TABLE `tbl_veh_maint_record` (
  `id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `op_performed` varchar(500) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `performed_by` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ac_attachments`
--
ALTER TABLE `tbl_ac_attachments`
  ADD KEY `ac_attach_id` (`ac_attach_id`);

--
-- Indexes for table `tbl_ac_maint_record`
--
ALTER TABLE `tbl_ac_maint_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_id` (`ac_id`);

--
-- Indexes for table `tbl_ac_status`
--
ALTER TABLE `tbl_ac_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aircon`
--
ALTER TABLE `tbl_aircon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_stat` (`ac_stat`);

--
-- Indexes for table `tbl_bldg_attachments`
--
ALTER TABLE `tbl_bldg_attachments`
  ADD KEY `ac_attach_id` (`veh_attach_id`),
  ADD KEY `veh_id` (`veh_id`);

--
-- Indexes for table `tbl_bldg_maint_record`
--
ALTER TABLE `tbl_bldg_maint_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_id` (`veh_id`);

--
-- Indexes for table `tbl_building`
--
ALTER TABLE `tbl_building`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_stat` (`ac_stat`);

--
-- Indexes for table `tbl_calibration_type`
--
ALTER TABLE `tbl_calibration_type`
  ADD PRIMARY KEY (`ctype_id`);

--
-- Indexes for table `tbl_calib_program`
--
ALTER TABLE `tbl_calib_program`
  ADD PRIMARY KEY (`calib_id`),
  ADD KEY `equip_id` (`equip_id`),
  ADD KEY `frequency` (`frequency`),
  ADD KEY `tbl_calib_program_ibfk_2` (`calib_type_id`);

--
-- Indexes for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_frequency`
--
ALTER TABLE `tbl_frequency`
  ADD PRIMARY KEY (`mfreq_id`);

--
-- Indexes for table `tbl_maintenance_type`
--
ALTER TABLE `tbl_maintenance_type`
  ADD PRIMARY KEY (`mtype_id`);

--
-- Indexes for table `tbl_maint_forms`
--
ALTER TABLE `tbl_maint_forms`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `ac_attach_id` (`form_id`);

--
-- Indexes for table `tbl_maint_program`
--
ALTER TABLE `tbl_maint_program`
  ADD PRIMARY KEY (`maint_id`),
  ADD KEY `equip_id` (`equip_id`),
  ADD KEY `maint_type_id` (`maint_type_id`),
  ADD KEY `frequency_id` (`frequency_id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_stat` (`ac_stat`);

--
-- Indexes for table `tbl_veh_attachments`
--
ALTER TABLE `tbl_veh_attachments`
  ADD KEY `ac_attach_id` (`veh_attach_id`),
  ADD KEY `veh_id` (`veh_id`);

--
-- Indexes for table `tbl_veh_maint_record`
--
ALTER TABLE `tbl_veh_maint_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_id` (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ac_attachments`
--
ALTER TABLE `tbl_ac_attachments`
  MODIFY `ac_attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT for table `tbl_ac_maint_record`
--
ALTER TABLE `tbl_ac_maint_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
--
-- AUTO_INCREMENT for table `tbl_ac_status`
--
ALTER TABLE `tbl_ac_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_aircon`
--
ALTER TABLE `tbl_aircon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tbl_bldg_attachments`
--
ALTER TABLE `tbl_bldg_attachments`
  MODIFY `veh_attach_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_bldg_maint_record`
--
ALTER TABLE `tbl_bldg_maint_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_building`
--
ALTER TABLE `tbl_building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_calibration_type`
--
ALTER TABLE `tbl_calibration_type`
  MODIFY `ctype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_calib_program`
--
ALTER TABLE `tbl_calib_program`
  MODIFY `calib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT for table `tbl_frequency`
--
ALTER TABLE `tbl_frequency`
  MODIFY `mfreq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_maintenance_type`
--
ALTER TABLE `tbl_maintenance_type`
  MODIFY `mtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_maint_forms`
--
ALTER TABLE `tbl_maint_forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_maint_program`
--
ALTER TABLE `tbl_maint_program`
  MODIFY `maint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_veh_attachments`
--
ALTER TABLE `tbl_veh_attachments`
  MODIFY `veh_attach_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_veh_maint_record`
--
ALTER TABLE `tbl_veh_maint_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ac_maint_record`
--
ALTER TABLE `tbl_ac_maint_record`
  ADD CONSTRAINT `tbl_ac_maint_record_ibfk_1` FOREIGN KEY (`ac_id`) REFERENCES `tbl_aircon` (`id`);

--
-- Constraints for table `tbl_aircon`
--
ALTER TABLE `tbl_aircon`
  ADD CONSTRAINT `tbl_aircon_ibfk_1` FOREIGN KEY (`ac_stat`) REFERENCES `tbl_ac_status` (`id`);

--
-- Constraints for table `tbl_calib_program`
--
ALTER TABLE `tbl_calib_program`
  ADD CONSTRAINT `tbl_calib_program_ibfk_1` FOREIGN KEY (`equip_id`) REFERENCES `tbl_equipment` (`id`),
  ADD CONSTRAINT `tbl_calib_program_ibfk_2` FOREIGN KEY (`calib_type_id`) REFERENCES `tbl_calibration_type` (`ctype_id`),
  ADD CONSTRAINT `tbl_calib_program_ibfk_3` FOREIGN KEY (`frequency`) REFERENCES `tbl_frequency` (`mfreq_id`);

--
-- Constraints for table `tbl_maint_program`
--
ALTER TABLE `tbl_maint_program`
  ADD CONSTRAINT `tbl_maint_program_ibfk_1` FOREIGN KEY (`equip_id`) REFERENCES `tbl_equipment` (`id`),
  ADD CONSTRAINT `tbl_maint_program_ibfk_2` FOREIGN KEY (`maint_type_id`) REFERENCES `tbl_maintenance_type` (`mtype_id`),
  ADD CONSTRAINT `tbl_maint_program_ibfk_3` FOREIGN KEY (`frequency_id`) REFERENCES `tbl_frequency` (`mfreq_id`);

--
-- Constraints for table `tbl_veh_attachments`
--
ALTER TABLE `tbl_veh_attachments`
  ADD CONSTRAINT `tbl_veh_attachments_ibfk_1` FOREIGN KEY (`veh_id`) REFERENCES `tbl_vehicle` (`id`);

--
-- Constraints for table `tbl_veh_maint_record`
--
ALTER TABLE `tbl_veh_maint_record`
  ADD CONSTRAINT `tbl_veh_maint_record_ibfk_1` FOREIGN KEY (`veh_id`) REFERENCES `tbl_vehicle` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
