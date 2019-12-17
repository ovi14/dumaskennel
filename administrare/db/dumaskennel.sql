-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 02:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumaskennel`
--

-- --------------------------------------------------------

--
-- Table structure for table `monta`
--

CREATE TABLE `monta` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL DEFAULT '',
  `poza1` varchar(255) NOT NULL DEFAULT '',
  `del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mops`
--

CREATE TABLE `mops` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL DEFAULT '',
  `titlu` varchar(255) NOT NULL DEFAULT '',
  `sex` varchar(2) NOT NULL,
  `pedigree` varchar(255) NOT NULL DEFAULT '',
  `parinti` varchar(255) NOT NULL DEFAULT '',
  `data` varchar(255) NOT NULL DEFAULT '',
  `poza1` varchar(255) NOT NULL DEFAULT '',
  `poza2` varchar(255) NOT NULL DEFAULT '',
  `poza3` varchar(255) NOT NULL DEFAULT '',
  `poza4` varchar(255) NOT NULL DEFAULT '',
  `poza5` varchar(255) NOT NULL DEFAULT '',
  `poza6` varchar(255) NOT NULL DEFAULT '',
  `nume_en` varchar(255) NOT NULL,
  `titlu_en` varchar(255) NOT NULL,
  `pedigree_en` varchar(255) NOT NULL DEFAULT '',
  `parinti_en` varchar(255) NOT NULL,
  `descriere` text NOT NULL DEFAULT '',
  `descriere_en` text NOT NULL DEFAULT '',
  `del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pui`
--

CREATE TABLE `pui` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL DEFAULT '',
  `titlu` varchar(255) NOT NULL DEFAULT '',
  `sex` varchar(2) NOT NULL,
  `pedigree` varchar(255) NOT NULL DEFAULT '',
  `parinti` varchar(255) NOT NULL DEFAULT '',
  `data` varchar(255) NOT NULL DEFAULT '',
  `poza1` varchar(255) NOT NULL DEFAULT '',
  `poza2` varchar(255) NOT NULL DEFAULT '',
  `poza3` varchar(255) NOT NULL DEFAULT '',
  `poza4` varchar(255) NOT NULL DEFAULT '',
  `poza5` varchar(255) NOT NULL DEFAULT '',
  `poza6` varchar(255) NOT NULL DEFAULT '',
  `nume_en` varchar(255) NOT NULL,
  `titlu_en` varchar(255) NOT NULL,
  `pedigree_en` varchar(255) NOT NULL DEFAULT '',
  `parinti_en` varchar(255) NOT NULL,
  `descriere` text NOT NULL DEFAULT '',
  `descriere_en` text NOT NULL DEFAULT '',
  `del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monta`
--
ALTER TABLE `monta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mops`
--
ALTER TABLE `mops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pui`
--
ALTER TABLE `pui`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monta`
--
ALTER TABLE `monta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mops`
--
ALTER TABLE `mops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pui`
--
ALTER TABLE `pui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
