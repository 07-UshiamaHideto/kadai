-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 9 朁E26 日 19:56
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
-- テーブルの構造 `s_sche`
--

CREATE TABLE IF NOT EXISTS `s_sche` (
  `sc_id` int(11) NOT NULL,
  `ev_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `place_id` int(11) NOT NULL,
  `detail` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `s_date` datetime NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `s_sche`
--

INSERT INTO `s_sche` (`sc_id`, `ev_name`, `place_id`, `detail`, `result`, `s_date`, `e_date`) VALUES
(1, 'F1第14戦日本GP', 1, '', '', '2015-09-25 00:00:00', '2015-09-27 00:00:00'),
(2, 'WRC第10戦オーストラリア', 2, '', '', '2015-09-10 00:00:00', '2015-09-13 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_sche`
--
ALTER TABLE `s_sche`
  ADD PRIMARY KEY (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_sche`
--
ALTER TABLE `s_sche`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
