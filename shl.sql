-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 02:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eval_form_test`
--

CREATE TABLE `tbl_eval_form_test` (
  `id` int(11) NOT NULL,
  `form_type_id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `test_request_no` varchar(50) DEFAULT NULL,
  `sample_code` varchar(50) DEFAULT NULL,
  `tt_sample_one` varchar(50) DEFAULT NULL,
  `tt_sample_two` varchar(50) DEFAULT NULL,
  `date_evaluation` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `open_for_eval` int(11) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_eval_form_test`
--

INSERT INTO `tbl_eval_form_test` (`id`, `form_type_id`, `product`, `product_code`, `test_request_no`, `sample_code`, `tt_sample_one`, `tt_sample_two`, `date_evaluation`, `created_by`, `status`, `open_for_eval`, `date_created`) VALUES
(1, 1, 'food, coded as Sabroso Camiguins Finest Tsokolate', 'SHL-00564', 'R10-122022-SHL-0544', 'SHL-00565', NULL, NULL, NULL, 1, 1, 0, '2022-12-28 09:55:50'),
(2, 2, 'food, coded as Sabroso Camiguins Finest Tsokolate', 'SHL-00563', 'R10-122022-SHL-0544', 'SHL-00563', 'Samp 1', 'Samp 2', '2023-02-13 00:00:00', 1, 1, 0, '2022-12-28 09:57:13'),
(3, 2, 'food, coded as WHOLE WHEAT LOAF', 'SHL-00535', 'R10-122022-SHL-0516', 'SHL-00535', NULL, NULL, '2023-02-13 00:00:00', 1, 1, 0, '2022-12-28 10:01:07'),
(4, 1, 'food, coded as WHOLE WHEAT LOAF', 'SHL-00535', 'R10-122022-SHL-0516', 'SHL-00535', NULL, NULL, NULL, 1, 1, 0, '2022-12-28 10:01:26'),
(5, 1, 'Juice', '', '', '', NULL, NULL, NULL, 1, 1, 0, '2022-12-29 14:16:09'),
(6, 1, 'food, coded as Alto Peak', 'SHL-0025', 'R10-012023-SHL-0025', 'SHL-0025', NULL, NULL, NULL, 1, 1, 1, '2023-01-31 16:13:58'),
(7, 2, 'food, coded as Banana Chips', 'SHL-0026', 'R10-012023-SHL-0026', 'SHL-0026', NULL, NULL, NULL, 1, 1, 1, '2023-01-31 16:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_type`
--

CREATE TABLE `tbl_form_type` (
  `id` int(11) NOT NULL,
  `test_type` varchar(45) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_form_type`
--

INSERT INTO `tbl_form_type` (`id`, `test_type`, `date_created`, `status`) VALUES
(1, 'Paired Difference Test', '2022-11-16 11:36:32', 1),
(2, 'Triangle Test', '2022-11-16 11:36:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paired_difference_answers`
--

CREATE TABLE `tbl_paired_difference_answers` (
  `pda_id` int(11) NOT NULL,
  `pdt_form_id` int(11) NOT NULL,
  `pdt_attr_id` int(11) NOT NULL,
  `pdt_sample_odd_id` int(11) NOT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `panelist_id` int(11) NOT NULL,
  `date_answered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_paired_difference_answers`
--

INSERT INTO `tbl_paired_difference_answers` (`pda_id`, `pdt_form_id`, `pdt_attr_id`, `pdt_sample_odd_id`, `comments`, `panelist_id`, `date_answered`) VALUES
(1, 1, 1, 1, '1111 is the best', 6, '2022-12-28 14:13:51'),
(2, 4, 1, 4, '4444 all the way', 6, '2022-12-28 14:14:04'),
(3, 4, 2, 4, '4444 all the way', 6, '2022-12-28 14:14:04'),
(4, 1, 1, 2, '', 12, '2022-12-28 14:21:15'),
(5, 4, 1, 4, '', 12, '2022-12-28 14:21:21'),
(6, 1, 1, 1, '', 11, '2022-12-28 14:21:31'),
(7, 4, 1, 4, '', 11, '2022-12-28 14:21:36'),
(8, 4, 2, 3, '', 11, '2022-12-28 14:21:36'),
(9, 5, 1, 5, '', 6, '2022-12-29 14:17:04'),
(10, 5, 2, 6, '', 6, '2022-12-29 14:17:04'),
(11, 5, 3, 6, '', 6, '2022-12-29 14:17:04'),
(12, 6, 1, 9, '032 is the best', 7, '2023-01-31 16:22:47'),
(13, 6, 2, 8, '032 is the best', 7, '2023-01-31 16:22:47'),
(14, 6, 3, 8, '032 is the best', 7, '2023-01-31 16:22:47'),
(15, 6, 4, 9, '032 is the best', 7, '2023-01-31 16:22:47'),
(16, 6, 5, 8, '032 is the best', 7, '2023-01-31 16:22:47'),
(17, 6, 1, 9, 'i am addicted to 465 huhu', 6, '2023-01-31 16:25:49'),
(18, 6, 2, 9, 'i am addicted to 465 huhu', 6, '2023-01-31 16:25:49'),
(19, 6, 3, 9, 'i am addicted to 465 huhu', 6, '2023-01-31 16:25:49'),
(20, 6, 4, 9, 'i am addicted to 465 huhu', 6, '2023-01-31 16:25:49'),
(21, 6, 5, 9, 'i am addicted to 465 huhu', 6, '2023-01-31 16:25:49'),
(22, 6, 1, 8, ' i love you 032', 11, '2023-01-31 16:26:24'),
(23, 6, 2, 8, ' i love you 032', 11, '2023-01-31 16:26:24'),
(24, 6, 3, 8, ' i love you 032', 11, '2023-01-31 16:26:24'),
(25, 6, 4, 8, ' i love you 032', 11, '2023-01-31 16:26:24'),
(26, 6, 5, 8, ' i love you 032', 11, '2023-01-31 16:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paired_difference_test_sample`
--

CREATE TABLE `tbl_paired_difference_test_sample` (
  `pdt_sample_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `sample_code` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_paired_difference_test_sample`
--

INSERT INTO `tbl_paired_difference_test_sample` (`pdt_sample_id`, `pdt_id`, `sample_code`, `status`, `date_created`, `created_by`) VALUES
(1, 1, '1111', 1, '2022-12-28 09:55:50', 1),
(2, 1, '2222', 1, '2022-12-28 09:55:50', 1),
(3, 4, '3333', 1, '2022-12-28 10:01:26', 1),
(4, 4, '4444', 1, '2022-12-28 10:01:26', 1),
(5, 5, '5555', 1, '2022-12-29 14:16:10', 1),
(6, 5, '6666', 1, '2022-12-29 14:16:10', 1),
(7, 0, '', 1, '2023-01-22 19:43:53', 0),
(8, 6, '032', 1, '2023-01-31 16:13:58', 1),
(9, 6, '465', 1, '2023-01-31 16:13:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paired_diff_attr`
--

CREATE TABLE `tbl_paired_diff_attr` (
  `pdattr_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `attr_desc` varchar(50) NOT NULL DEFAULT 'N/A',
  `attr_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_paired_diff_attr`
--

INSERT INTO `tbl_paired_diff_attr` (`pdattr_id`, `pdt_id`, `attr_desc`, `attr_id`, `status`) VALUES
(1, 1, 'Taste', 1, 1),
(2, 1, 'Color', 2, 1),
(3, 1, 'N/A', 3, 0),
(4, 1, 'N/A', 4, 0),
(5, 1, 'N/A', 5, 0),
(6, 4, 'Color', 1, 1),
(7, 4, 'Texture', 2, 1),
(8, 4, 'N/A', 3, 0),
(9, 4, 'N/A', 4, 0),
(10, 4, 'N/A', 5, 0),
(11, 5, 'Color', 1, 1),
(12, 5, 'Taste', 2, 1),
(13, 5, 'Texture', 3, 1),
(14, 5, 'N/A', 4, 0),
(15, 5, 'N/A', 5, 0),
(16, 6, 'Texture', 1, 1),
(17, 6, 'Color', 2, 1),
(18, 6, 'Odor', 3, 1),
(19, 6, 'Taste', 4, 1),
(20, 6, 'Sound', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_triad_codes`
--

CREATE TABLE `tbl_triad_codes` (
  `triad_code_id` int(11) NOT NULL,
  `triangle_tid` int(5) NOT NULL,
  `triad_no` int(11) NOT NULL,
  `triad_series` varchar(5) NOT NULL,
  `triad_code` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_triad_codes`
--

INSERT INTO `tbl_triad_codes` (`triad_code_id`, `triangle_tid`, `triad_no`, `triad_series`, `triad_code`) VALUES
(1, 2, 1, 'ABB', '1'),
(2, 2, 1, 'ABB', '2'),
(3, 2, 1, 'ABB', '3'),
(4, 2, 2, 'AAB', '4'),
(5, 2, 2, 'AAB', '5'),
(6, 2, 2, 'AAB', '6'),
(7, 2, 3, 'ABA', '7'),
(8, 2, 3, 'ABA', '8'),
(9, 2, 3, 'ABA', '9'),
(10, 2, 4, 'BAA', '10'),
(11, 2, 4, 'BAA', '11'),
(12, 2, 4, 'BAA', '12'),
(13, 2, 5, 'BBA', '13'),
(14, 2, 5, 'BBA', '14'),
(15, 2, 5, 'BBA', '15'),
(16, 2, 6, 'BAB', '16'),
(17, 2, 6, 'BAB', '17'),
(18, 2, 6, 'BAB', '18'),
(19, 2, 7, 'ABB', '19'),
(20, 2, 7, 'ABB', '20'),
(21, 2, 7, 'ABB', '21'),
(22, 2, 8, 'AAB', '22'),
(23, 2, 8, 'AAB', '23'),
(24, 2, 8, 'AAB', '24'),
(25, 2, 9, 'ABA', '25'),
(26, 2, 9, 'ABA', '26'),
(27, 2, 9, 'ABA', '27'),
(28, 2, 10, 'BAA', '28'),
(29, 2, 10, 'BAA', '29'),
(30, 2, 10, 'BAA', '30'),
(31, 2, 11, 'BBA', '31'),
(32, 2, 11, 'BBA', '32'),
(33, 2, 11, 'BBA', '33'),
(34, 2, 12, 'BAB', '34'),
(35, 2, 12, 'BAB', '35'),
(36, 2, 12, 'BAB', '36'),
(37, 2, 13, 'ABB', '37'),
(38, 2, 13, 'ABB', '38'),
(39, 2, 13, 'ABB', '39'),
(40, 2, 14, 'AAB', '40'),
(41, 2, 14, 'AAB', '41'),
(42, 2, 14, 'AAB', '42'),
(43, 2, 15, 'ABA', '43'),
(44, 2, 15, 'ABA', '44'),
(45, 2, 15, 'ABA', '45'),
(46, 3, 1, 'ABB', '46'),
(47, 3, 1, 'ABB', '47'),
(48, 3, 1, 'ABB', '48'),
(49, 3, 2, 'AAB', '49'),
(50, 3, 2, 'AAB', '50'),
(51, 3, 2, 'AAB', '51'),
(52, 3, 3, 'ABA', '52'),
(53, 3, 3, 'ABA', '53'),
(54, 3, 3, 'ABA', '54'),
(55, 3, 4, 'BAA', '55'),
(56, 3, 4, 'BAA', '56'),
(57, 3, 4, 'BAA', '57'),
(58, 3, 5, 'BBA', '58'),
(59, 3, 5, 'BBA', '59'),
(60, 3, 5, 'BBA', '60'),
(61, 3, 6, 'BAB', '61'),
(62, 3, 6, 'BAB', '62'),
(63, 3, 6, 'BAB', '63'),
(64, 3, 7, 'ABB', '64'),
(65, 3, 7, 'ABB', '65'),
(66, 3, 7, 'ABB', '66'),
(67, 3, 8, 'AAB', '67'),
(68, 3, 8, 'AAB', '68'),
(69, 3, 8, 'AAB', '69'),
(70, 3, 9, 'ABA', '70'),
(71, 3, 9, 'ABA', '71'),
(72, 3, 9, 'ABA', '72'),
(73, 3, 10, 'BAA', '73'),
(74, 3, 10, 'BAA', '74'),
(75, 3, 10, 'BAA', '75'),
(76, 3, 11, 'BBA', '76'),
(77, 3, 11, 'BBA', '77'),
(78, 3, 11, 'BBA', '78'),
(79, 3, 12, 'BAB', '79'),
(80, 3, 12, 'BAB', '80'),
(81, 3, 12, 'BAB', '81'),
(82, 3, 13, 'ABB', '82'),
(83, 3, 13, 'ABB', '83'),
(84, 3, 13, 'ABB', '84'),
(85, 3, 14, 'AAB', '85'),
(86, 3, 14, 'AAB', '86'),
(87, 3, 14, 'AAB', '87'),
(88, 3, 15, 'ABA', '88'),
(89, 3, 15, 'ABA', '89'),
(90, 3, 15, 'ABA', '90'),
(91, 7, 1, 'ABB', '1'),
(92, 7, 1, 'ABB', '2'),
(93, 7, 1, 'ABB', '3'),
(94, 7, 2, 'AAB', '4'),
(95, 7, 2, 'AAB', '5'),
(96, 7, 2, 'AAB', '6'),
(97, 7, 3, 'ABA', '7'),
(98, 7, 3, 'ABA', '8'),
(99, 7, 3, 'ABA', '9'),
(100, 7, 4, 'BAA', '10'),
(101, 7, 4, 'BAA', '11'),
(102, 7, 4, 'BAA', '12'),
(103, 7, 5, 'BBA', '13'),
(104, 7, 5, 'BBA', '14'),
(105, 7, 5, 'BBA', '15'),
(106, 7, 6, 'BAB', '16'),
(107, 7, 6, 'BAB', '17'),
(108, 7, 6, 'BAB', '18'),
(109, 7, 7, 'ABB', '19'),
(110, 7, 7, 'ABB', '20'),
(111, 7, 7, 'ABB', '21'),
(112, 7, 8, 'AAB', '22'),
(113, 7, 8, 'AAB', '23'),
(114, 7, 8, 'AAB', '24'),
(115, 7, 9, 'ABA', '25'),
(116, 7, 9, 'ABA', '26'),
(117, 7, 9, 'ABA', '27'),
(118, 7, 10, 'BAA', '28'),
(119, 7, 10, 'BAA', '29'),
(120, 7, 10, 'BAA', '30'),
(121, 7, 11, 'BBA', '31'),
(122, 7, 11, 'BBA', '32'),
(123, 7, 11, 'BBA', '33'),
(124, 7, 12, 'BAB', '34'),
(125, 7, 12, 'BAB', '35'),
(126, 7, 12, 'BAB', '36'),
(127, 7, 13, 'ABB', ''),
(128, 7, 13, 'ABB', ''),
(129, 7, 13, 'ABB', ''),
(130, 7, 14, 'AAB', ''),
(131, 7, 14, 'AAB', ''),
(132, 7, 14, 'AAB', ''),
(133, 7, 15, 'ABA', ''),
(134, 7, 15, 'ABA', ''),
(135, 7, 15, 'ABA', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_triangle_test_answers`
--

CREATE TABLE `tbl_triangle_test_answers` (
  `tta_id` int(11) NOT NULL,
  `tt_form_id` int(11) NOT NULL,
  `tt_sample_odd_id` int(11) NOT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `panelist_id` int(11) NOT NULL,
  `date_answered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_triangle_test_answers`
--

INSERT INTO `tbl_triangle_test_answers` (`tta_id`, `tt_form_id`, `tt_sample_odd_id`, `comments`, `panelist_id`, `date_answered`) VALUES
(1, 2, 9, '9 is the best', 6, '2022-12-28 10:06:54'),
(2, 3, 49, '49 is the worst', 6, '2022-12-28 10:07:15'),
(3, 2, 2, '', 11, '2022-12-28 11:18:28'),
(4, 3, 54, '', 12, '2022-12-28 11:18:41'),
(5, 2, 6, '6 parin', 12, '2022-12-28 14:06:51'),
(6, 3, 46, '46 is the winner', 11, '2022-12-28 14:07:11'),
(7, 7, 93, '3 is my answer but 1 is the correct answer', 7, '2023-01-31 16:50:33'),
(8, 7, 96, 'correct nagyud ni, ako nagud ni', 6, '2023-01-31 16:51:03'),
(9, 7, 98, 'correct pud ko ', 11, '2023-01-31 16:51:30'),
(10, 7, 101, 'wrong ko', 9, '2023-01-31 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_triangle_test_sample`
--

CREATE TABLE `tbl_triangle_test_sample` (
  `tt_instance_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `instance` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_triangle_test_sample`
--

INSERT INTO `tbl_triangle_test_sample` (`tt_instance_id`, `tt_id`, `instance`, `user_id`) VALUES
(1, 2, '1', 11),
(2, 2, '2', 12),
(3, 2, '3', 6),
(4, 2, '4', NULL),
(5, 2, '5', NULL),
(6, 2, '6', NULL),
(7, 2, '7', NULL),
(8, 2, '8', NULL),
(9, 2, '9', NULL),
(10, 2, '10', NULL),
(11, 2, '11', NULL),
(12, 2, '12', NULL),
(13, 2, '13', NULL),
(14, 2, '14', NULL),
(15, 2, '15', NULL),
(16, 3, '1', 11),
(17, 3, '2', 6),
(18, 3, '3', 12),
(19, 3, '4', NULL),
(20, 3, '5', NULL),
(21, 3, '6', NULL),
(22, 3, '7', NULL),
(23, 3, '8', NULL),
(24, 3, '9', NULL),
(25, 3, '10', NULL),
(26, 3, '11', NULL),
(27, 3, '12', NULL),
(28, 3, '13', NULL),
(29, 3, '14', NULL),
(30, 3, '15', NULL),
(31, 7, '1', 7),
(32, 7, '2', 6),
(33, 7, '3', 11),
(34, 7, '4', 9),
(35, 7, '5', NULL),
(36, 7, '6', NULL),
(37, 7, '7', NULL),
(38, 7, '8', NULL),
(39, 7, '9', NULL),
(40, 7, '10', NULL),
(41, 7, '11', NULL),
(42, 7, '12', NULL),
(43, 7, '13', NULL),
(44, 7, '14', NULL),
(45, 7, '15', NULL);

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
  `address` varchar(500) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `section_unit` varchar(100) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT '123456',
  `access_level` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1,
  `sex` varchar(10) DEFAULT NULL,
  `user_pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `lastname`, `middlename`, `firstname`, `birthday`, `address`, `marital_status`, `section_unit`, `username`, `password`, `access_level`, `email`, `contact_number`, `date_created`, `status`, `sex`, `user_pic`) VALUES
(1, 'Eran', 'P.', 'Shenna Grace', '2017-01-01', NULL, 'single', 'TSD-RSTL\r\n', 'tmsge', 'sgpe', 0, 's.c@gmail.com', '2147483647', '2022-11-16 10:45:55', 1, 'female', 'http://localhost/shl/images/16743936632023-Jan-Sun-1200px-DOST_seal.svg.png'),
(2, 'Dalinao', 'H.', 'Marl Adrian', NULL, NULL, NULL, 'TSD-RSTL\r\n', 'mapd', 'mapd', 0, NULL, NULL, '2022-11-16 10:45:55', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(3, 'Cagubcub', NULL, NULL, NULL, NULL, NULL, 'TSD-RSTL\r\n', 'gmc', 'gmc', 0, NULL, NULL, '2022-11-16 10:45:28', 1, 'female', 'http://localhost/shl/images/16743943862023-Jan-Sun-1200px-DOST_seal.svg.png'),
(6, 'Cagape', 'N.', 'Sheila Mae', NULL, 'Gusa, Cagayan de Oro City\r\n', NULL, 'TSD-RSTL\r\n', 'smncagape', '123456', 1, NULL, '2147483647', '2022-11-16 10:45:28', 1, 'female', 'http://localhost/shl/images/16743943862023-Jan-Sun-1200px-DOST_seal.svg.png'),
(7, 'Bayan', 'L.', 'Ronya Mae', NULL, 'Villa Maria, Tablon, Cagayan de Oro City\r\n', NULL, 'TSD-RSTL\r\n', 'rmlbayan', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743936212023-Jan-Sun-1200px-DOST_seal.svg.png'),
(8, 'Ragandang', 'A.', 'Ma. Sarah', NULL, 'Villa trinitas, Bugo, Cagayan de Oro City\r\n', NULL, 'TSD-RSTL\r\n', 'msaragandang', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(9, 'Abellanosa', 'L.', 'Phillip Anthony', NULL, 'J.V. Seriña St., Carmen, Cagayan de Oro City\r\n', NULL, 'FASD-Accounting\r\n', 'palabellanosa', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(10, 'Baculio', NULL, 'Julie Anne\r\n', NULL, 'Balongis, Balulang, Cagayan de Oro City\r\n', NULL, 'TSD-STPMR\r\n', 'jabaculio', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(11, 'Bañas', NULL, 'Hope', NULL, 'Macasandig, Cagayan de Oro City\r\n', NULL, 'FFFS/\nConsultancy', 'hbanas', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(12, 'Batica', 'V.\r\n', 'Jeziel ', NULL, 'B38-L8, Phase 2 Habitat, Pagatpat, CDO\r\n', NULL, 'ORD-PMEQ\r\n', 'jvbatica', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(13, 'Belaca-ol', 'A.', 'Earl Jhon', NULL, 'Lourdesville, Balulang, Cagayan de Oro City\r\n', NULL, 'TSD-LGIA CEST\r\n', 'ejabelacaol', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(14, 'Bolotaolo', 'B.', 'Angelica', NULL, 'Xavier Estates, U.Balulang, CDO\r\n', NULL, 'ORD-GAD/PMEQ\r\n', 'abbolotaolo', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(15, 'Cabaluna Jr.\r\n', 'O.', 'Ruel', NULL, 'Blk 11, Lot 7, Zone 1, Punta, Bonbon, CDO\r\n', NULL, 'FASD-MIS\r\n', 'rocabaluna', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(16, 'Clavano', 'S.', 'Shane Marie', NULL, 'Zone 2, Upper Bulua, Cagayan de Oro City\r\n', NULL, 'TSD-RSTL\r\n', 'smsclavano', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(17, 'Dagala', 'E.', 'James Mart', NULL, 'Malanang, Opol, Misamis, Oriental\r\n', NULL, 'FASD-Scholarship\r\n', 'jmedagala', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(18, 'Estoque', 'A.', 'Mary Claire', NULL, 'Camaman-an, Cagayan de Oro City\r\n', NULL, 'FASD-Accounting\r\n', 'mcaestoque', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(19, 'Gallardo', 'S.', 'Girly', NULL, 'Brgy. 5, Balingasag, Misamis Oriental\r\n', NULL, 'TSD-MMFPF/TRANSDI\r\n', 'gsgallardo', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(20, 'Lam-an', 'B.', 'Gellie', NULL, 'Camella Cerritos, Brgy. Canitoan, CDO\r\n', NULL, 'RediHalal\r\n', 'gblaman', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(21, 'Lumor', 'A.', 'Jefferson', NULL, 'Promiseland, Buena Oro, Macasandig, CDO\r\n', NULL, 'TSD-RSTL\r\n', 'jalumor', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(22, 'Macabodbod Jr.\r\n', 'A.', 'Renato', NULL, 'Jasmin St., Carmen, Cagayan de Oro City\r\n', NULL, 'FASD-Scholarship\r\n', 'ramacabodbod', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(23, 'Navarro', 'S.', 'Flordemay', NULL, 'Malipayon, Pangantucan, Bukidnon\r\n', NULL, 'TSD-RSTL\r\n', 'fsnavarro', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(24, 'Olloves', 'S.', 'Gerald', NULL, 'San Lazaro, Lapasan, Cagayan de Oro City\r\n', NULL, 'TSD-SETUP RPMO\r\n', 'gsolloves', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(25, 'Omandam', 'B.', 'Jennifer', NULL, 'Carmen, Cagayan de Oro City\r\n', NULL, 'FASD-Budget\r\n', 'jbomandam', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(26, 'Palaca', 'G.', 'Judy', NULL, 'Zone 1, Bayabas, Cagayan de Oro City\r\n', NULL, 'TSD-SETUP\r\n', 'jgpalaca', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(27, 'Petre', NULL, 'Jason', NULL, 'Regency, Iponan, Cagayan de Oro City\r\n', NULL, 'TSD-SETUP/iFWD\r\n', 'jpetre', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(28, 'Ratilla', 'B.', 'John Nico', NULL, 'J.V. Seriña St., Carmen, Cagayan de Oro City\r\n', NULL, 'FASD-Cashier\r\n', 'jnbratilla', '123456', 1, NULL, '0', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(29, 'Semilla', 'A.', 'Jon Michael', NULL, '5-21, Nazareth, Cagayan de Oro City\r\n', NULL, 'FOB\r\n', 'jmasemilla', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(30, 'Zambrano', 'B.', 'Jessie', NULL, 'Zone 6 Capisnon, Kauswagan, CDO\r\n', NULL, 'FASD-Scholarship\r\n', 'jbzambrano', '123456', 1, NULL, '2147483647', '2022-11-22 10:30:26', 1, 'female', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_eval_form_test`
--
ALTER TABLE `tbl_eval_form_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_form_type`
--
ALTER TABLE `tbl_form_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paired_difference_answers`
--
ALTER TABLE `tbl_paired_difference_answers`
  ADD PRIMARY KEY (`pda_id`);

--
-- Indexes for table `tbl_paired_difference_test_sample`
--
ALTER TABLE `tbl_paired_difference_test_sample`
  ADD PRIMARY KEY (`pdt_sample_id`);

--
-- Indexes for table `tbl_paired_diff_attr`
--
ALTER TABLE `tbl_paired_diff_attr`
  ADD PRIMARY KEY (`pdattr_id`);

--
-- Indexes for table `tbl_triad_codes`
--
ALTER TABLE `tbl_triad_codes`
  ADD PRIMARY KEY (`triad_code_id`);

--
-- Indexes for table `tbl_triangle_test_answers`
--
ALTER TABLE `tbl_triangle_test_answers`
  ADD PRIMARY KEY (`tta_id`);

--
-- Indexes for table `tbl_triangle_test_sample`
--
ALTER TABLE `tbl_triangle_test_sample`
  ADD PRIMARY KEY (`tt_instance_id`),
  ADD KEY `tt_id` (`tt_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_eval_form_test`
--
ALTER TABLE `tbl_eval_form_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_form_type`
--
ALTER TABLE `tbl_form_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_paired_difference_answers`
--
ALTER TABLE `tbl_paired_difference_answers`
  MODIFY `pda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_paired_difference_test_sample`
--
ALTER TABLE `tbl_paired_difference_test_sample`
  MODIFY `pdt_sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_paired_diff_attr`
--
ALTER TABLE `tbl_paired_diff_attr`
  MODIFY `pdattr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_triad_codes`
--
ALTER TABLE `tbl_triad_codes`
  MODIFY `triad_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tbl_triangle_test_answers`
--
ALTER TABLE `tbl_triangle_test_answers`
  MODIFY `tta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_triangle_test_sample`
--
ALTER TABLE `tbl_triangle_test_sample`
  MODIFY `tt_instance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_triangle_test_sample`
--
ALTER TABLE `tbl_triangle_test_sample`
  ADD CONSTRAINT `tbl_triangle_test_sample_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
