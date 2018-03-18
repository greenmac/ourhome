-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-03 09:50:28
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ourhome`
--

-- --------------------------------------------------------

--
-- 資料表結構 `source`
--

CREATE TABLE `source` (
  `s_seq` int(10) UNSIGNED NOT NULL,
  `s_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_con` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `source`
--

INSERT INTO `source` (`s_seq`, `s_name`, `s_con`) VALUES
(1, '我們家', '我們家-米'),
(2, '我們家', '我們家-酒'),
(3, '我們家', '我們家-咖啡豆');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`s_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `source`
--
ALTER TABLE `source`
  MODIFY `s_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
