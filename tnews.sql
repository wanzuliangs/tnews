-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?11 �?29 �?09:22
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tnews`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_conf`
--

CREATE TABLE IF NOT EXISTS `t_conf` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置项id',
  `cname` varchar(80) NOT NULL COMMENT '中文名称',
  `ename` varchar(80) NOT NULL COMMENT '英文名',
  `value` varchar(200) NOT NULL COMMENT '值/默认值',
  `values` varchar(255) NOT NULL COMMENT '可选值',
  `dt_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:输入框 2:单选 3:复选 4:下拉菜单 5:文本域 6:附件',
  `cf_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:基本信息 2:联系方式 3:seo设置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `t_conf`
--

INSERT INTO `t_conf` (`id`, `cname`, `ename`, `value`, `values`, `dt_type`, `cf_type`) VALUES
(12, '网站logo', 'logo', '', '', 6, 1),
(10, '站点根路径', 'siteurl', '', '', 1, 1),
(11, '静态保存路径', 'path', '', '', 1, 1),
(13, '备案号', 'beian', '', '', 1, 1),
(14, '联系人', 'contact', '', '', 1, 2),
(15, 'QQ群', 'qq', '', '', 1, 2),
(16, '站点名称', 'sitename', '', '', 1, 3),
(17, '站点关键词', 'keyword', '', '', 1, 3),
(18, '站点描述', 'description', '', '', 5, 3),
(19, '开启缓存', 'iscache', '', '', 2, 3),
(20, '是否关闭站点', 'closeSite', '开启', '关闭,开启', 4, 1),
(21, '联系方式', 'contactway', '电话', '电话,QQ,微信,传真', 3, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
