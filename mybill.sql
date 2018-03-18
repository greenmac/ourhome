-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-03 09:49:47
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
-- 資料表結構 `mybill`
--

CREATE TABLE `mybill` (
  `mb_seq` int(10) UNSIGNED NOT NULL,
  `mb_bill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb_email` text COLLATE utf8mb4_unicode_ci,
  `mb_money` int(10) NOT NULL,
  `mb_time` datetime NOT NULL,
  `mb_status` int(11) NOT NULL DEFAULT '0',
  `mb_ip` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `mybill`
--

INSERT INTO `mybill` (`mb_seq`, `mb_bill`, `mb_name`, `mb_tel`, `mb_contact`, `mb_email`, `mb_money`, `mb_time`, `mb_status`, `mb_ip`) VALUES
(1, '20170912105010r75f', '', 'a', 'b', 'c', 5800, '2017-09-12 05:11:45', 0, '127.0.0.1'),
(2, '20170912140312mg6u', '', 'x', 'y', 'z', 1100, '2017-09-12 08:03:38', 0, '127.0.0.1'),
(3, '20170912142808pg8s', '', 'q', 'r', 's', 1500, '2017-09-12 08:28:21', 0, '127.0.0.1'),
(16, '2017110311323196h3', 'q', '0955', '台中', 'h@J', 400, '2017-11-03 05:32:55', 0, '127.0.0.1'),
(17, '201711031346446pm0', 'twice', '0911', '台北', 'e@r', 400, '2017-11-03 07:47:16', 0, '127.0.0.1'),
(18, '20171103145230l9h1', 'blackpink', '0922', '桃園', 't@u', 1900, '2017-11-03 08:53:11', 0, '127.0.0.1');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `mybill`
--
ALTER TABLE `mybill`
  ADD PRIMARY KEY (`mb_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `mybill`
--
ALTER TABLE `mybill`
  MODIFY `mb_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
