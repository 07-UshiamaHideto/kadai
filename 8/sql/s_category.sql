-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 9 朁E26 日 19:57
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_academy`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `s_category`
--

CREATE TABLE IF NOT EXISTS `s_category` (
  `c_id` int(11) NOT NULL,
  `ca_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `c_outline` varchar(518) COLLATE utf8_unicode_ci NOT NULL,
  `show_flg` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `s_category`
--

INSERT INTO `s_category` (`c_id`, `ca_name`, `c_outline`, `show_flg`) VALUES
(1, 'F1', '', 1),
(2, 'SUPER GT', '', 1),
(3, 'WTCC', '', 1),
(4, 'WEC', '', 1),
(5, 'WRC', '', 1),
(6, 'MotoGP', '', 0),
(7, 'other', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_category`
--
ALTER TABLE `s_category`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_category`
--
ALTER TABLE `s_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
