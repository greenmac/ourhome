-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-03 08:58:25
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

-- --------------------------------------------------------

--
-- 資料表結構 `my_type`
--

CREATE TABLE `my_type` (
  `mt_seq` int(10) UNSIGNED NOT NULL,
  `mt_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `my_type`
--

INSERT INTO `my_type` (`mt_seq`, `mt_name`) VALUES
(1, '米'),
(2, '酒'),
(3, '咖啡豆');

-- --------------------------------------------------------

--
-- 資料表結構 `shopcar`
--

CREATE TABLE `shopcar` (
  `sc_seq` int(10) UNSIGNED NOT NULL,
  `sc_no` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品編號',
  `sc_bill` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳單編號',
  `sc_count` int(10) NOT NULL COMMENT '數量',
  `sc_status` int(2) NOT NULL COMMENT '狀態',
  `sc_time` date NOT NULL,
  `sc_ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_m_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `shopcar`
--

INSERT INTO `shopcar` (`sc_seq`, `sc_no`, `sc_bill`, `sc_count`, `sc_status`, `sc_time`, `sc_ip`, `sc_m_bill`) VALUES
(42, '4', '20170912140312mg6u', 2, 6, '2017-09-12', '127.0.0.1', 2),
(43, '2', '20170912140312mg6u', 1, 6, '2017-09-12', '127.0.0.1', 2),
(44, '1', '20170912142808pg8s', 3, 6, '2017-09-12', '127.0.0.1', 3),
(45, '1', '20170912143532x99m', 5, 6, '2017-09-12', '127.0.0.1', 0),
(46, '4', '20170912143532x99m', 2, 6, '2017-09-12', '127.0.0.1', 0),
(47, '4', '20170912152443z2mr', 2, 6, '2017-09-12', '127.0.0.1', 0),
(48, '2', '20170912152443z2mr', 3, 6, '2017-09-12', '127.0.0.1', 0),
(49, '1', '20170912152443z2mr', 8, 6, '2017-09-12', '127.0.0.1', 0),
(50, '4', '20170912152443z2mr', 3, 6, '2017-09-12', '127.0.0.1', 0),
(51, '4', '20170912152443z2mr', 1, 6, '2017-09-12', '127.0.0.1', 0),
(52, '1', '20170912152443z2mr', 10, 6, '2017-09-12', '127.0.0.1', 0),
(53, '1', '20170912152443z2mr', 5, 6, '2017-09-12', '127.0.0.1', 0),
(54, '1', '20170912152443z2mr', 2, 6, '2017-09-12', '127.0.0.1', 0),
(55, '4', '20170912152443z2mr', 3, 6, '2017-09-12', '127.0.0.1', 0),
(56, '4', '20170912152443z2mr', 7, 6, '2017-09-12', '127.0.0.1', 0),
(57, '4', '20170912152443z2mr', 7, 6, '2017-09-12', '127.0.0.1', 0),
(58, '4', '20170912152443z2mr', 6, 6, '2017-09-12', '127.0.0.1', 0),
(59, '6', '20171101154006137w', 5, 6, '2017-11-01', '127.0.0.1', 0),
(60, '6', '2017110115445878vn', 4, 6, '2017-11-01', '127.0.0.1', 0),
(61, '6', '20171101154655e42x', 3, 6, '2017-11-01', '127.0.0.1', 0),
(62, '7', '20171101160350abmd', 3, 1, '2017-11-01', '127.0.0.1', 11),
(63, '8', '20171101160944h9gc', 5, 1, '2017-11-01', '127.0.0.1', 12),
(64, '6', '20171101161052xo2f', 7, 1, '2017-11-01', '127.0.0.1', 13),
(65, '6', '20171101161427uiu1', 2, 6, '2017-11-01', '127.0.0.1', 0),
(66, '6', '20171103112408w3bk', 3, 0, '2017-11-03', '127.0.0.1', 0),
(67, '7', '20171103112408w3bk', 2, 0, '2017-11-03', '127.0.0.1', 0),
(68, '6', '20171103112547yvyr', 1, 0, '2017-11-03', '127.0.0.1', 0),
(69, '7', '20171103112547yvyr', 2, 0, '2017-11-03', '127.0.0.1', 0),
(70, '6', '20171103112746kz2j', 3, 1, '2017-11-03', '127.0.0.1', 14),
(71, '7', '20171103112746kz2j', 2, 1, '2017-11-03', '127.0.0.1', 14),
(72, '8', '20171103113009irlg', 3, 1, '2017-11-03', '127.0.0.1', 15),
(73, '6', '2017110311323196h3', 2, 1, '2017-11-03', '127.0.0.1', 16),
(74, '7', '201711031346446pm0', 2, 1, '2017-11-03', '127.0.0.1', 17),
(75, '9', '20171103145230l9h1', 4, 1, '2017-11-03', '127.0.0.1', 18),
(76, '10', '20171103145230l9h1', 2, 1, '2017-11-03', '127.0.0.1', 18);

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

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `u_seq` int(10) UNSIGNED NOT NULL,
  `u_account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`u_seq`, `u_account`, `u_password`) VALUES
(1, 'admin', '1234');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `mybill`
--
ALTER TABLE `mybill`
  ADD PRIMARY KEY (`mb_seq`);

--
-- 資料表索引 `my_item`
--
ALTER TABLE `my_item`
  ADD PRIMARY KEY (`mi_seq`);

--
-- 資料表索引 `my_type`
--
ALTER TABLE `my_type`
  ADD PRIMARY KEY (`mt_seq`);

--
-- 資料表索引 `shopcar`
--
ALTER TABLE `shopcar`
  ADD PRIMARY KEY (`sc_seq`);

--
-- 資料表索引 `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`s_seq`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `mybill`
--
ALTER TABLE `mybill`
  MODIFY `mb_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- 使用資料表 AUTO_INCREMENT `my_item`
--
ALTER TABLE `my_item`
  MODIFY `mi_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引鍵', AUTO_INCREMENT=12;
--
-- 使用資料表 AUTO_INCREMENT `my_type`
--
ALTER TABLE `my_type`
  MODIFY `mt_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `shopcar`
--
ALTER TABLE `shopcar`
  MODIFY `sc_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- 使用資料表 AUTO_INCREMENT `source`
--
ALTER TABLE `source`
  MODIFY `s_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `u_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
