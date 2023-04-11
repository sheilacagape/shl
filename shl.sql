-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 04:16 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `pdt_panel_comment_a` varchar(20000) DEFAULT NULL,
  `pdt_panel_comment_b` varchar(20000) DEFAULT NULL,
  `tt_panel_remarks` varchar(20000) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `open_for_eval` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eval_form_test`
--

INSERT INTO `tbl_eval_form_test` (`id`, `form_type_id`, `product`, `product_code`, `test_request_no`, `sample_code`, `tt_sample_one`, `tt_sample_two`, `date_evaluation`, `pdt_panel_comment_a`, `pdt_panel_comment_b`, `tt_panel_remarks`, `created_by`, `status`, `open_for_eval`, `date_created`) VALUES
(8, 1, 'beverage, coded as Milk Tea', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2023-03-15 17:59:18'),
(9, 1, 'food, coded as Chocolate', NULL, 'R10-042023-SHL-123', 'SHL-123', 'Control', 'SHL-123', NULL, '				    	Panelist #1; Panel #2; Panel #3; 				    ', '				    	Panelist #1; Panel #2; Panel #3; 				    ', NULL, 1, 1, 1, '2023-04-03 17:41:23'),
(10, 2, 'food, coded as Chocolate', NULL, 'R10-042023-SHL-124', 'SHL-124', 'SHL-124', 'Control', '2023-04-03 00:00:00', NULL, NULL, NULL, 1, 1, 1, '2023-04-03 17:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_type`
--

CREATE TABLE `tbl_form_type` (
  `id` int(11) NOT NULL,
  `test_type` varchar(45) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date_answered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paired_difference_answers`
--

INSERT INTO `tbl_paired_difference_answers` (`pda_id`, `pdt_form_id`, `pdt_attr_id`, `pdt_sample_odd_id`, `comments`, `panelist_id`, `date_answered`) VALUES
(27, 8, 1, 10, 'Milktea is life', 6, '2023-03-15 18:14:41'),
(28, 8, 2, 11, 'Milktea is life', 6, '2023-03-15 18:14:41'),
(29, 9, 1, 17, 'Panelist #1', 20, '2023-04-03 17:50:54'),
(30, 9, 2, 17, 'Panelist #1', 20, '2023-04-03 17:50:54'),
(31, 9, 3, 17, 'Panelist #1', 20, '2023-04-03 17:50:54'),
(32, 9, 4, 17, 'Panelist #1', 20, '2023-04-03 17:50:54'),
(33, 9, 5, 18, 'Panelist #1', 20, '2023-04-03 17:50:54'),
(34, 9, 1, 17, 'Panel #2', 23, '2023-04-03 17:58:14'),
(35, 9, 2, 18, 'Panel #2', 23, '2023-04-03 17:58:14'),
(36, 9, 3, 17, 'Panel #2', 23, '2023-04-03 17:58:14'),
(37, 9, 4, 18, 'Panel #2', 23, '2023-04-03 17:58:14'),
(38, 9, 5, 17, 'Panel #2', 23, '2023-04-03 17:58:14'),
(39, 9, 1, 18, 'Panel #3', 26, '2023-04-03 17:59:55'),
(40, 9, 2, 18, 'Panel #3', 26, '2023-04-03 17:59:55'),
(41, 9, 3, 18, 'Panel #3', 26, '2023-04-03 17:59:55'),
(42, 9, 4, 17, 'Panel #3', 26, '2023-04-03 17:59:55'),
(43, 9, 5, 17, 'Panel #3', 26, '2023-04-03 17:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paired_difference_test_sample`
--

CREATE TABLE `tbl_paired_difference_test_sample` (
  `pdt_sample_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `sample_code` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paired_difference_test_sample`
--

INSERT INTO `tbl_paired_difference_test_sample` (`pdt_sample_id`, `pdt_id`, `sample_code`, `status`, `date_created`, `created_by`) VALUES
(10, 8, '1', 1, '2023-03-15 17:59:18', 1),
(11, 8, '2', 1, '2023-03-15 17:59:18', 1),
(17, 9, '456', 1, '2023-04-03 17:41:23', 1),
(18, 9, '900', 1, '2023-04-03 17:41:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paired_diff_attr`
--

CREATE TABLE `tbl_paired_diff_attr` (
  `pdattr_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `attr_desc` varchar(50) NOT NULL DEFAULT 'N/A',
  `attr_id` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paired_diff_attr`
--

INSERT INTO `tbl_paired_diff_attr` (`pdattr_id`, `pdt_id`, `attr_desc`, `attr_id`, `status`) VALUES
(21, 8, 'Taste', 1, 1),
(22, 8, 'Odor', 2, 1),
(23, 8, 'N/A', 3, 0),
(24, 8, 'N/A', 4, 0),
(25, 8, 'N/A', 5, 0),
(26, 9, 'Odor', 1, 1),
(27, 9, 'Taste', 2, 1),
(28, 9, 'Texture', 3, 1),
(29, 9, 'Sound', 4, 1),
(30, 9, 'Color', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_triad_codes`
--

CREATE TABLE `tbl_triad_codes` (
  `triad_code_id` int(11) NOT NULL,
  `triangle_tid` int(5) NOT NULL,
  `triad_no` int(11) NOT NULL,
  `triad_series` varchar(5) NOT NULL,
  `triad_code` varchar(11) DEFAULT NULL,
  `answer` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_triad_codes`
--

INSERT INTO `tbl_triad_codes` (`triad_code_id`, `triangle_tid`, `triad_no`, `triad_series`, `triad_code`, `answer`) VALUES
(136, 10, 1, 'ABB', '1', 'yes'),
(137, 10, 1, 'ABB', '2', 'no'),
(138, 10, 1, 'ABB', '3', 'no'),
(139, 10, 2, 'AAB', '4', 'no'),
(140, 10, 2, 'AAB', '5', 'no'),
(141, 10, 2, 'AAB', '6', 'yes'),
(142, 10, 3, 'ABA', '7', 'no'),
(143, 10, 3, 'ABA', '8', 'yes'),
(144, 10, 3, 'ABA', '9', 'no'),
(145, 10, 4, 'BAA', '10', 'yes'),
(146, 10, 4, 'BAA', '11', 'no'),
(147, 10, 4, 'BAA', '12', 'no'),
(148, 10, 5, 'BBA', '13', 'no'),
(149, 10, 5, 'BBA', '14', 'no'),
(150, 10, 5, 'BBA', '15', 'yes'),
(151, 10, 6, 'BAB', '16', 'no'),
(152, 10, 6, 'BAB', '17', 'yes'),
(153, 10, 6, 'BAB', '18', 'no'),
(154, 10, 7, 'ABB', '19', 'yes'),
(155, 10, 7, 'ABB', '20', 'no'),
(156, 10, 7, 'ABB', '21', 'no'),
(157, 10, 8, 'AAB', '22', 'no'),
(158, 10, 8, 'AAB', '23', 'no'),
(159, 10, 8, 'AAB', '24', 'yes'),
(160, 10, 9, 'ABA', '25', 'no'),
(161, 10, 9, 'ABA', '26', 'yes'),
(162, 10, 9, 'ABA', '27', 'no'),
(163, 10, 10, 'BAA', '28', 'yes'),
(164, 10, 10, 'BAA', '29', 'no'),
(165, 10, 10, 'BAA', '30', 'no'),
(166, 10, 11, 'BBA', '31', 'no'),
(167, 10, 11, 'BBA', '32', 'no'),
(168, 10, 11, 'BBA', '33', 'yes'),
(169, 10, 12, 'BAB', '34', 'no'),
(170, 10, 12, 'BAB', '35', 'yes'),
(171, 10, 12, 'BAB', '36', 'no'),
(172, 10, 13, 'ABB', '37', 'yes'),
(173, 10, 13, 'ABB', '38', 'no'),
(174, 10, 13, 'ABB', '39', 'no'),
(175, 10, 14, 'AAB', '40', 'no'),
(176, 10, 14, 'AAB', '41', 'no'),
(177, 10, 14, 'AAB', '42', 'yes'),
(178, 10, 15, 'ABA', '43', 'no'),
(179, 10, 15, 'ABA', '44', 'yes'),
(180, 10, 15, 'ABA', '45', 'no');

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
  `date_answered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_triangle_test_answers`
--

INSERT INTO `tbl_triangle_test_answers` (`tta_id`, `tt_form_id`, `tt_sample_odd_id`, `comments`, `panelist_id`, `date_answered`) VALUES
(12, 10, 138, 'Panel #1', 20, '2023-04-03 17:51:16'),
(13, 10, 141, 'Panel #2', 23, '2023-04-03 17:58:47'),
(14, 10, 144, 'Panel #3', 26, '2023-04-03 18:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_triangle_test_sample`
--

CREATE TABLE `tbl_triangle_test_sample` (
  `tt_instance_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `instance` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_triangle_test_sample`
--

INSERT INTO `tbl_triangle_test_sample` (`tt_instance_id`, `tt_id`, `instance`, `user_id`) VALUES
(46, 10, '1', 20),
(47, 10, '2', 23),
(48, 10, '3', 26),
(49, 10, '4', 11),
(50, 10, '5', NULL),
(51, 10, '6', NULL),
(52, 10, '7', NULL),
(53, 10, '8', NULL),
(54, 10, '9', NULL),
(55, 10, '10', NULL),
(56, 10, '11', NULL),
(57, 10, '12', NULL),
(58, 10, '13', NULL),
(59, 10, '14', NULL),
(60, 10, '15', NULL);

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
  `date_created_user` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `sex` varchar(10) DEFAULT NULL,
  `user_pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `lastname`, `middlename`, `firstname`, `birthday`, `address`, `marital_status`, `section_unit`, `username`, `password`, `access_level`, `email`, `contact_number`, `date_created_user`, `status`, `sex`, `user_pic`) VALUES
(1, 'Eran', 'P.', 'Shenna Grace', '2017-01-01', NULL, 'single', 'TSD-RSTL\r\n', 'tmsge', 'sgpe', 0, 's.c@gmail.com', '2147483647', '2022-11-16 10:45:55', 1, 'female', 'http://localhost/shl/images/16743936632023-Jan-Sun-1200px-DOST_seal.svg.png'),
(2, 'Dalinao', 'H.', 'Marl Adrian', NULL, NULL, NULL, 'TSD-RSTL\r\n', 'mapd', 'mapd', 0, NULL, NULL, '2022-11-16 10:45:55', 1, 'male', 'http://localhost/shl/images/16743943772023-Jan-Sun-1200px-DOST_seal.svg.png'),
(3, 'Cagubcub', NULL, 'Gia Marie', NULL, NULL, NULL, 'TSD-RSTL\r\n', 'gmc', '123456', 0, NULL, NULL, '2022-11-16 10:45:28', 1, 'female', 'http://localhost/shl/images/16743943862023-Jan-Sun-1200px-DOST_seal.svg.png'),
(6, 'Cagape', 'N.', 'Sheila Mae', NULL, 'Gusa, Cagayan de Oro City\r\n', NULL, 'TSD-RSTL\r\n', 'smncagape', '123456', 1, NULL, '2147483647', '2022-11-16 10:45:28', 0, 'female', 'http://localhost/shl/images/16743943862023-Jan-Sun-1200px-DOST_seal.svg.png'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_form_type`
--
ALTER TABLE `tbl_form_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_paired_difference_answers`
--
ALTER TABLE `tbl_paired_difference_answers`
  MODIFY `pda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_paired_difference_test_sample`
--
ALTER TABLE `tbl_paired_difference_test_sample`
  MODIFY `pdt_sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_paired_diff_attr`
--
ALTER TABLE `tbl_paired_diff_attr`
  MODIFY `pdattr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_triad_codes`
--
ALTER TABLE `tbl_triad_codes`
  MODIFY `triad_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `tbl_triangle_test_answers`
--
ALTER TABLE `tbl_triangle_test_answers`
  MODIFY `tta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_triangle_test_sample`
--
ALTER TABLE `tbl_triangle_test_sample`
  MODIFY `tt_instance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
