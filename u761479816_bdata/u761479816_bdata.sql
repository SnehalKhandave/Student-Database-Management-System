-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2015 at 04:08 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u761479816_bdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `extra1`
--

CREATE TABLE IF NOT EXISTS `extra1` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra2`
--

CREATE TABLE IF NOT EXISTS `extra2` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra3`
--

CREATE TABLE IF NOT EXISTS `extra3` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `last_entry`
--

CREATE TABLE IF NOT EXISTS `last_entry` (
  `id` int(1) NOT NULL,
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `last_entry`
--

INSERT INTO `last_entry` (`id`, `adm_no`, `name`) VALUES
(1, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stud_adm`
--

CREATE TABLE IF NOT EXISTS `stud_adm` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tc_issue` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` mediumblob,
  `year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `twnvill` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gen` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `caste` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `comunit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `f_ed_qua` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `f_add_pin_phno` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `cls_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cls_sec` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `grop_adm` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `med_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dat_adm` date NOT NULL,
  `emis_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud_fee`
--

CREATE TABLE IF NOT EXISTS `stud_fee` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cls_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cls_sec` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `term` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `term_amt` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `part_1_paid_amt` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `part_1_bank` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `part_1_chelan_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `part_1_chelan_date` date NOT NULL,
  `part_1_rmrks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `part_2_paid_amt` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `part_2_bank` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `part_2_chelan_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `part_2_chelan_date` date NOT NULL,
  `part_2_rmrks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `term_balance` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud_id`
--

CREATE TABLE IF NOT EXISTS `stud_id` (
  `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains ID for All Students';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `eid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mpwd` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`eid`, `pwd`, `mpwd`) VALUES
('bstud_adm@shanmuka.in', 'shanmuka123', '456852'),
('shanmukarajan1@gmail.com', 'shanshan', '852456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extra1`
--
ALTER TABLE `extra1`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `extra2`
--
ALTER TABLE `extra2`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `extra3`
--
ALTER TABLE `extra3`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `last_entry`
--
ALTER TABLE `last_entry`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `stud_adm`
--
ALTER TABLE `stud_adm`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `stud_fee`
--
ALTER TABLE `stud_fee`
  ADD UNIQUE KEY `adm_no` (`adm_no`,`term`);

--
-- Indexes for table `stud_id`
--
ALTER TABLE `stud_id`
  ADD PRIMARY KEY (`adm_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`eid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
