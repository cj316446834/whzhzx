-- phpMyAdmin SQL Dump
-- version 4.0.3
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 08 月 24 日 10:05
-- 服务器版本: 5.5.32
-- PHP 版本: 5.3.26
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- 数据库: `phpcms`
--
-- --------------------------------------------------------
--
-- 表的结构 `phpcms_ei_file`
--
CREATE TABLE IF NOT EXISTS `phpcms_ei_file` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `filename` varchar(80) NOT NULL COMMENT '文件名',
  `dir` varchar(80) NOT NULL COMMENT '文件路径',
  `siteid` int(3) NOT NULL DEFAULT '1' COMMENT '站点ID',
  `istemplates` int(1) NOT NULL DEFAULT '0' COMMENT '是否启用模板',
  `templates` varchar(200) DEFAULT NULL COMMENT '模板路径',
  `updatetime` int(10) NOT NULL COMMENT '最后修改时间',
  `username` varchar(50) NOT NULL COMMENT '操作人',
  `description` varchar(200) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='E族插件_自定义单文件' AUTO_INCREMENT=4 ;
--
-- 转存表中的数据 `phpcms_ei_file`
--
INSERT INTO `phpcms_ei_file` (`id`, `filename`, `dir`, `siteid`, `istemplates`, `templates`, `updatetime`, `username`, `description`) VALUES
(1, '.htaccess', '', 1, 0, '', 1376576803, 'admin', '站点伪静态规则文件'),
(2, 'robots.txt', '', 1, 0, '', 1376299357, 'phpcms', '网络蜘蛛'),
(3, 'sitemap.html', '', 0, 1, 'plug,sitemap,default', 1376359959, 'phpcms', '全站地图');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
