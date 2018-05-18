-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018 年 05 月 18 日 15:32
-- 伺服器版本: 5.5.56-MariaDB
-- PHP 版本： 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `104021042`
--

-- --------------------------------------------------------

--
-- 資料表結構 `database_product`
--

CREATE TABLE `database_product` (
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `img` longtext NOT NULL,
  `size` enum('S','M','L','XL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='database- system-final term';

--
-- 資料表的匯出資料 `database_product`
--

INSERT INTO `database_product` (`title`, `price`, `name`, `amount`, `description`, `img`, `size`) VALUES
('Gildan® Short Sleeve Toddler T-Shirt', '100', 'T-Shirt', '2', 'Sport Gray', 'https://img.michaels.com/L6/3/IOGLO/919444535/229971831/10508509_2000px.jpg?fit=inside|540:540', 'S');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `database_product`
--
ALTER TABLE `database_product`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
