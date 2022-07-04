-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-31 02:32:33
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `stu13`
--

-- --------------------------------------------------------

--
-- 資料表結構 `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL COMMENT '主鍵自編id',
  `cname` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '留言人的中文姓名',
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '留言人的電話',
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '留言人的email',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '留言人的地址',
  `message` text COLLATE utf8_unicode_ci NOT NULL COMMENT '留言',
  `create-date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '留言人的發送時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `feedback`
--

INSERT INTO `feedback` (`id`, `cname`, `tel`, `email`, `address`, `message`, `create-date`) VALUES
(1, '石二二', '0988000111', '0988000111@gmail.com', '什麼路111號', '0988000111什麼路111號', '2022-05-05 01:14:44'),
(2, '石三三', '00952', '098812345678@gmail.com', '什麼路66號', '00952', '2022-05-05 04:10:27'),
(3, '石三三', '00952', '098812345678@gmail.com', '什麼路66號', '00952', '2022-05-05 05:01:21'),
(4, '石四四e', '091111111', '091111111@yahoo.com', '什麼路66號0000', '091111111091111111091111111091111111091111111', '2022-05-05 06:13:59');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主鍵自編id', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
