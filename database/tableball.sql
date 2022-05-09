-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2021 �?04 �?28 �?07:26
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tableball`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) NOT NULL,
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `role` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`, `role`) VALUES
('admin', 'admin', 1, 'manage'),
('peter', '111111', 2, 'boss');

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE IF NOT EXISTS `dingdan` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) COLLATE utf8_bin NOT NULL,
  `uname` varchar(213) COLLATE utf8_bin NOT NULL,
  `price` varchar(123) COLLATE utf8_bin NOT NULL,
  `pic` varchar(213) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uid` int(22) NOT NULL,
  `pid` int(22) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `dingdan`
--

INSERT INTO `dingdan` (`id`, `title`, `uname`, `price`, `pic`, `time`, `uid`, `pid`) VALUES
(24, 'A2', 'kobe', '20', 'tq23.jpg', '2021-04-28 07:20:09', 65, 152),
(25, 'A3', 'lucy', '20', 'tq23.jpg', '2021-04-28 07:24:48', 67, 153);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(254) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` varchar(2143) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `uname` varchar(1234) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `shijian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lanmu` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'yes',
  `price` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `title`, `content`, `uname`, `shijian`, `pic`, `lanmu`, `price`) VALUES
(151, 'A1', 'A1，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS', '5', '2021-03-04 01:33:55', 'tq23.jpg', 'no', '20'),
(152, 'A2', 'A2，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS	', '5', '2021-03-04 01:34:20', 'tq23.jpg', 'yes', '20'),
(153, 'A3', 'A3，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:35:47', 'tq23.jpg', 'yes', '20'),
(154, 'A4', 'A4，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:36:14', 'tq23.jpg', 'yes', '20'),
(155, 'A5', 'A5，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:36:34', 'tq23.jpg', 'yes', '20'),
(156, 'A6', 'A6，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:37:42', 'tq23.jpg', 'yes', '20'),
(157, 'A7', 'A7，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:38:56', 'tq23.jpg', 'yes', '20'),
(158, 'A8', 'A8，MAX PEOPEL 5， PLEASE BOOK IT BEFORE 2 HOURS ', '5', '2021-03-04 01:39:20', 'tq23.jpg', 'yes', '20');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(124) NOT NULL AUTO_INCREMENT,
  `yhm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tx` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` varchar(22) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `yhm`, `mm`, `email`, `tel`, `tx`, `role`) VALUES
(2, 'admin', '		21232f297a57a5a743894a0e4a801fc3', 'admin@qq.com', '1522728011', '1.jpg', 'admin'),
(64, 'PETER', '96e79218965eb72c92a549dd5a330112', '123123@qq.com', '1522728019', 'ntx4.jpg', 'user'),
(65, 'kobe', '96e79218965eb72c92a549dd5a330112', '123123@qq.com', '1522728019', 'cx12.jpg', 'user'),
(66, 'wade', '21232f297a57a5a743894a0e4a801fc3', '123123@qq.com', '1522728019', 'l12.jpg', 'user'),
(67, 'lucy', '96e79218965eb72c92a549dd5a330112', '123123@qq.com', '1522728019', 'cx12.jpg', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
