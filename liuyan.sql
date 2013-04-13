-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 04 月 08 日 16:47
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `liuyan`
--

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `real_name` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `home` varchar(50) DEFAULT NULL,
  `qq` varchar(10) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `jointime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` varchar(4) NOT NULL DEFAULT '男',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`ID`, `username`, `real_name`, `password`, `email`, `home`, `qq`, `phone`, `jointime`, `sex`) VALUES
(3, 'admin', '小明', '9f21438ca5f1a6e7bc4b8489a5b3aaa2', 'name@example.com', '山东省青岛市', '12345678', '11111111111', '2012-05-15 21:25:53', '男'),
(24, 'cm', '陈明', '5bfe772576193f6775706063d023f4f1', 'mmc0115@163.com', '北海桃花岛', '983975315', '15054299110', '2012-05-28 21:32:16', '女'),
(27, 'zippera', '赵伟', '9f21438ca5f1a6e7bc4b8489a5b3aaa2', 'sovey@sina.com', '', '', '', '2012-06-10 09:37:42', '男'),
(28, '11', '1', 'e10adc3949ba59abbe56e057f20f883e', 'dsg@gs.com', '', '', '', '2013-01-20 14:44:19', '男'),
(29, 'zzzdsagsdahghsh', 'klsdg', 'e10adc3949ba59abbe56e057f20f883e', 'dslkg@sdgk.com', '', '', '', '2013-04-08 23:52:49', '男'),
(30, 'lalala', 'dsf', '96e79218965eb72c92a549dd5a330112', 'dsg@dslgj.com', '', '', '', '2013-04-09 00:38:38', '男');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `ftime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `author`, `content`, `ftime`) VALUES
(13, 'zzzz', '你好啊', '2013-04-09 00:33:35'),
(14, 'zzzz', '欢迎来到这里！', '2013-04-09 00:33:48'),
(15, 'lalala', '的撒个', '2013-04-09 00:39:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
