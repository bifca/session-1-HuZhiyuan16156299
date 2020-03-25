-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-25 15:31:23
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `pokemon`
--

-- --------------------------------------------------------

--
-- 表的结构 `films`
--

CREATE TABLE `films` (
  `id` int(100) NOT NULL,
  `filmName` text NOT NULL,
  `imdbID` text NOT NULL,
  `poster` text NOT NULL,
  `trailer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `films`
--

INSERT INTO `films` (`id`, `filmName`, `imdbID`, `poster`, `trailer`) VALUES
(0, 'Pokémon:Mewtwo Strikes Back-Evolution', 'tt8856470', '3.jpg', '3.mp4'),
(1, 'Pokémon the Movie: I Choose You', 'tt6595896', '1.jpg', '1.mp4'),
(2, 'Pokémon Detective Pikachu', 'tt5884052', '2.jpg', '2.mp4');

--
-- 转储表的索引
--

--
-- 表的索引 `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
