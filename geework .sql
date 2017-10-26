-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 10 月 26 日 02:08
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `geework`
--

-- --------------------------------------------------------

--
-- 表的结构 `gee_daily`
--

CREATE TABLE IF NOT EXISTS `gee_daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `creadate` int(10) NOT NULL COMMENT '创建日期',
  `attachment` varchar(100) NOT NULL COMMENT '附件',
  `content` text NOT NULL COMMENT '内容',
  `cc` varchar(50) NOT NULL COMMENT '报送',
  `author` varchar(50) NOT NULL COMMENT '作者',
  `title` varchar(50) NOT NULL COMMENT '标题',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `gee_daily`
--

INSERT INTO `gee_daily` (`id`, `creadate`, `attachment`, `content`, `cc`, `author`, `title`) VALUES
(1, 0, '/uploads/20171025\\f68dcf45c58eb8e5a736e442165347e3.png', '<p>山豆根的如果太热也同样</p>', '', '胡平', ''),
(2, 0, '/uploads/20171025\\69e5d315776015275ff2e85d06354ba3.png', '<p>撒法的时光的热风个人体验会员如图很讨厌fred通过热通过惹她也敢惹他一个5惹她一个54</p>', '', '胡平', ''),
(3, 0, '/uploads/20171025\\bee72a451f25b68ed83009091501bc69.png', '<p>啊DAWF额我few&nbsp;</p>', '', '胡平', ''),
(4, 0, '/uploads/20171025\\3c3b7ed317f022d9eb736e69dd3879b0.png', '<p>啊FDa违法</p>', '', '胡平', ''),
(5, 1508927033, '/uploads/20171025\\46b7eee1ba969fe966a1c207f0856a71.png', '<p>官方的色鬼染色沟通</p>', '', '胡平', ''),
(6, 1508979642, '/uploads/20171026\\f6a62eb85901e01082c0e0ab4c003753.png', '<p>的士费热汤放入太容易<br/></p>', '', '胡平', ''),
(7, 0, '/uploads/20171026\\92383927f56bf70d69a10708c0203ab2.png', '<p>是F大商股份多少个热</p>', '', '胡平', ''),
(8, 0, '/uploads/20171026\\781d174cc22881fb1ff372ec51020ea5.png', '<p>AD围绕氛围</p>', '', '胡平', ''),
(9, 1508983135, '/uploads/20171026\\87a4a4523c6253a6072e2ab9326900b1.png', '<p>按我发热污染费</p>', '', '胡平', ''),
(10, 1508983204, '', '<p>分</p>', '', '胡平', '');

-- --------------------------------------------------------

--
-- 表的结构 `gee_position`
--

CREATE TABLE IF NOT EXISTS `gee_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `ptname` varchar(30) NOT NULL COMMENT '职位',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `gee_position`
--

INSERT INTO `gee_position` (`id`, `ptname`) VALUES
(1, '前端工程师'),
(7, '人事'),
(10, '总经理'),
(6, 'php工程师');

-- --------------------------------------------------------

--
-- 表的结构 `gee_user`
--

CREATE TABLE IF NOT EXISTS `gee_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL COMMENT '员工ID',
  `username` varchar(50) NOT NULL COMMENT '姓名',
  `password` char(32) NOT NULL,
  `sex` tinyint(3) NOT NULL COMMENT '性别',
  `phone` varchar(50) NOT NULL COMMENT '手机',
  `tel` varchar(50) NOT NULL COMMENT '固定电话',
  `mail` varchar(50) NOT NULL COMMENT '邮箱',
  `position` varchar(30) NOT NULL COMMENT '部门/职位',
  `creat_time` int(10) NOT NULL COMMENT '创建时间',
  `state` tinyint(3) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `gee_user`
--

INSERT INTO `gee_user` (`id`, `uid`, `username`, `password`, `sex`, `phone`, `tel`, `mail`, `position`, `creat_time`, `state`) VALUES
(25, 86371, '胡平', 'e10adc3949ba59abbe56e057f20f883e', 1, '17602192660', '17602192660', 'phoenix_hu@outlook.com', 'php工程师', 1508915839, 1),
(26, 78387, '小松', 'e10adc3949ba59abbe56e057f20f883e', 1, '111111111111', '11111111111', 'admin@admin.com', '前端工程师', 1508917133, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
