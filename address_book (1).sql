-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-29 05:45:13
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `address_book`
--

CREATE TABLE `address_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(1, '酷寶', '5781@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(2, '煞氣A健康的郭', '546@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(5, '李小明4', '5387@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(6, '李小明5', '5297@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(7, '李小明6', '324@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(8, '李小明7', '5729@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(9, '李小明8', '7673@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(10, '李小明9', '1179@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(13, '健氣☆ㄟ如', '2876@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(17, '李小明4', '841@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(18, '李小明5', '5580@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(19, '李小明6', '5375@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(20, '李小明7', '133@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(21, '李小明8', '4544@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(22, '李小明9', '2319@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(23, '李小明10', '7962@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(24, '花蓮雪莉', '2854@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(25, '高雄郭郭', '383@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(26, '李小明13', '3352@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(27, '方大同', '5613@gmail.com', '0918-222555', '1990-04-01', '新北市', '2020-04-08 11:50:22'),
(28, '哈哈哈', '8007@gmail.com', '0918-222333', '0000-00-00', '<script>alert(\"爛芭樂!!!\")</script>', '2020-04-08 12:05:21'),
(29, 'gdsgdsfg', '3196@gmail.com', '0918-222333', '2020-04-08', 'dfgdfg\r\n                    ', '2020-04-09 14:56:05'),
(30, '哈老大', '1959@gmail.com', '0918-222333', '2020-04-01', '哈老大', '2020-04-09 15:11:01'),
(33, '方大同', '206@gmail.com', '0918-222555', '2020-04-01', 'asdfasd', '2020-04-09 16:31:09'),
(34, '林小白', '5155@gmail.com', '0999-123-456', '1995-05-05', '台北市', '2020-04-10 09:23:56'),
(36, 'dfhdfh', '5156@gmail.com', 'fghf', '2020-04-09', 'fgh', '2020-04-10 10:12:09'),
(37, '>sdfsdasd', '316@gmail.com', '0918-222333', '2020-04-01', 'sdfgsd', '2020-04-10 14:03:13');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book`
--
ALTER TABLE `address_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
