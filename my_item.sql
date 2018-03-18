-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-03 09:50:01
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
-- 資料表結構 `my_item`
--

CREATE TABLE `my_item` (
  `mi_seq` int(10) UNSIGNED NOT NULL COMMENT '索引鍵',
  `mi_pic` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `mi_name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品名稱',
  `mi_type1` int(10) NOT NULL COMMENT '產品類別',
  `mi_type2` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品規格(敘述)',
  `mi_money` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mi_con` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品內容',
  `mi_source` int(10) NOT NULL COMMENT '產品來源(廠商)',
  `mi_no` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品編號',
  `mi_count` int(10) NOT NULL DEFAULT '0' COMMENT '數量',
  `mi_status` int(2) NOT NULL DEFAULT '0' COMMENT '產品狀態'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `my_item`
--

INSERT INTO `my_item` (`mi_seq`, `mi_pic`, `mi_name`, `mi_type1`, `mi_type2`, `mi_money`, `mi_con`, `mi_source`, `mi_no`, `mi_count`, `mi_status`) VALUES
(9, '20171103-141222.jpg', '有機稻米', 1, '有機耕作', '300', '台梗2號-香米', 1, 's01', 996, 1),
(10, '20171103-144317.jpg', '紫米酒', 2, '紫米釀造', '350', '天然紫米人工釀造', 1, 's02', 498, 1),
(11, '20171103-144502.jpg', '自家烘焙咖啡豆', 3, '自種自烘', '250', '無農藥自家烘焙', 1, 's03', 300, 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `my_item`
--
ALTER TABLE `my_item`
  ADD PRIMARY KEY (`mi_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `my_item`
--
ALTER TABLE `my_item`
  MODIFY `mi_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引鍵', AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
