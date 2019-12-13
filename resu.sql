-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `belong` int(4) NOT NULL,
  `type` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `see` tinyint(1) NOT NULL DEFAULT 1,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `path` varchar(168) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `img`
--

INSERT INTO `img` (`id`, `name`, `belong`, `type`, `see`, `create_time`, `update_time`, `path`) VALUES
(9, 'lively4.jpg', 7, 'image/jpeg', 1, '2019-12-12 07:16:17', '2019-12-12 07:16:17', './upload/lively4.jpg'),
(12, 'lively6.jpg', 5, 'image/jpeg', 1, '2019-12-12 14:51:16', '2019-12-12 14:51:16', './upload/lively6.jpg'),
(13, 'my_photo.jpg', 6, '', 1, '2019-12-12 15:37:45', '2019-12-12 15:37:45', './upload/my_photo.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(5) NOT NULL,
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `workexp` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `acc`, `pw`, `objective`, `skills`, `edu`, `workexp`) VALUES
(1, 'A', '111', '廣告行銷,營運企劃,媒體公關', '', '台北商業大學', ''),
(2, 'BB', '111', '', '', '', ''),
(3, 'C', '113', '', '', '', ''),
(4, 'D', '111', '', '', '', ''),
(5, 'E', '555', '', '', '', ''),
(6, 'Adan', '111', '網頁設計師,後端資料處理工程師', 'HTML,JavaScript,PHP,Photoshop,Illustrator,Excel,word', '黎明技術學院,機械工程', '歐內利服飾公司 事務組\r\n數碼戲胞軟體  業務員\r\n正好亭停車場 管理員\r\n');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `acc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '111',
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(10) NOT NULL,
  `addr` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(26) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `name`, `sex`, `addr`, `tel`, `birthday`, `email`, `text`) VALUES
(1, 'A', '111', 'Adaline', '女', '台北市中山北路260號', '0988-123-456', '1970/3/12', 'alex@fmail.com', 'text.........123'),
(2, 'BB', '111', 'Blake', '男', '南投市中正路18號', '0900-123-456', '2000/10/10', 'baby@msn.com', ''),
(3, 'C', '113', 'Lively', '女', '桃園市蘆竹區四維路4號', '0999123456', '2000-5-26', 'cixs@email.com', ''),
(4, 'D', '111', 'david', '男', '高雄市凱旋路100號', '0922987654', '1990-4-7', 'doll@gmail.com', ''),
(5, 'e', '1', 'Elen', '男', '桃園市平鎮區四維路4號', '0999123456', '1990-4-7', 'elen@yahoo.com', ''),
(6, 'Adan', '111', '邱豪冠', '男', '新北市三重區五華街', '0977-123-456', '2000/10/10', 'adan@gmail.com', '自發性：積極面對事物,持續性：有責任感,協調性：能融入團體生活,社交性：善於與人溝通,體貼度：待人和善,思考性：具邏輯思考力,創造性：有獨立思考能力'),
(7, 'f', 'f', 'frank', '男', '台北市松山區', '09717894561', '1944-07-24', 'frank@hinet.net', '具有專業技能');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
