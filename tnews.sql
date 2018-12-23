/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tnews

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-12-23 23:31:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_article`
-- ----------------------------
DROP TABLE IF EXISTS `t_article`;
CREATE TABLE `t_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mname` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_article
-- ----------------------------

-- ----------------------------
-- Table structure for `t_cat`
-- ----------------------------
DROP TABLE IF EXISTS `t_cat`;
CREATE TABLE `t_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` varchar(80) NOT NULL COMMENT '栏目名',
  `seotitle` varchar(200) NOT NULL COMMENT 'seo标题',
  `kewords` varchar(200) NOT NULL COMMENT '关键字',
  `des` text NOT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '栏目内容',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '栏目属性 0:隐藏 1:显示',
  `img` varchar(200) NOT NULL COMMENT '栏目图片',
  `cat_attr` int(11) NOT NULL DEFAULT '1' COMMENT '栏目属性 1:列表 2:频道',
  `list_tmp` varchar(80) NOT NULL COMMENT '列表模板',
  `index_tmp` varchar(80) NOT NULL COMMENT '频道页模板',
  `article_tmp` varchar(200) NOT NULL COMMENT '内容模板',
  `sort` int(11) NOT NULL DEFAULT '50' COMMENT '排序',
  `model_id` int(11) NOT NULL DEFAULT '1' COMMENT '模型id',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_cat
-- ----------------------------
INSERT INTO `t_cat` VALUES ('5', '湖南省', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '2', '23', '0');
INSERT INTO `t_cat` VALUES ('3', '河南省', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '7', '24', '0');
INSERT INTO `t_cat` VALUES ('4', '湖北省', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '4', '23', '0');
INSERT INTO `t_cat` VALUES ('6', '郑州市', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '9', '23', '3');
INSERT INTO `t_cat` VALUES ('7', '开封市', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '8', '23', '3');
INSERT INTO `t_cat` VALUES ('8', '长沙市', '11', '11', '11', '<p>11</p>', '1', '20181206\\6178701d74dbda2ceeb496fe2aab2acc.jpg', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '3', '23', '5');
INSERT INTO `t_cat` VALUES ('9', '武汉市', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '6', '23', '4');
INSERT INTO `t_cat` VALUES ('10', '荆州市', '11', '11', '11', '<p>11</p>', '1', '', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '5', '23', '4');
INSERT INTO `t_cat` VALUES ('27', '岳阳市', '', '', '', '', '1', '20181206\\3ddcba4cdb0f04db2e8a055b2b5a416d.jpg', '1', 'list_article.htm', 'index_article.htm', 'article_article.htm', '50', '23', '5');

-- ----------------------------
-- Table structure for `t_conf`
-- ----------------------------
DROP TABLE IF EXISTS `t_conf`;
CREATE TABLE `t_conf` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置项id',
  `cname` varchar(80) NOT NULL COMMENT '中文名称',
  `ename` varchar(80) NOT NULL COMMENT '英文名',
  `value` varchar(200) NOT NULL COMMENT '值/默认值',
  `values` varchar(255) NOT NULL COMMENT '可选值',
  `dt_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:输入框 2:单选 3:复选 4:下拉菜单 5:文本域 6:附件',
  `cf_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:基本信息 2:联系方式 3:seo设置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_conf
-- ----------------------------
INSERT INTO `t_conf` VALUES ('12', '网站logo', 'logo', '20181201\\25d7461dc7033e969a5af99d8b69458c.jpg', '', '6', '1');
INSERT INTO `t_conf` VALUES ('10', '站点根路径', 'siteurl', '1', '', '1', '1');
INSERT INTO `t_conf` VALUES ('11', '静态保存路径', 'path', '22', '', '1', '1');
INSERT INTO `t_conf` VALUES ('13', '备案号', 'beian', '33', '', '1', '1');
INSERT INTO `t_conf` VALUES ('14', '联系人', 'contact', '44', '', '1', '2');
INSERT INTO `t_conf` VALUES ('15', 'QQ群', 'qq', '55', '', '1', '2');
INSERT INTO `t_conf` VALUES ('16', '站点名称', 'sitename', '66', '', '1', '3');
INSERT INTO `t_conf` VALUES ('17', '站点关键词', 'keyword', '77', '', '1', '3');
INSERT INTO `t_conf` VALUES ('18', '站点描述', 'description', '88', '', '5', '3');
INSERT INTO `t_conf` VALUES ('19', '开启缓存', 'iscache', '是', '是,否', '2', '3');
INSERT INTO `t_conf` VALUES ('20', '是否关闭站点', 'closeSite', '关闭', '关闭,开启', '4', '1');
INSERT INTO `t_conf` VALUES ('21', '联系方式', 'contactway', '电话', '电话,QQ,微信,传真', '3', '2');
INSERT INTO `t_conf` VALUES ('22', '二维码', 'qcode', '20181201\\447d031f2e1524764e6cc457f57e1bda.jpg', '', '6', '1');

-- ----------------------------
-- Table structure for `t_film`
-- ----------------------------
DROP TABLE IF EXISTS `t_film`;
CREATE TABLE `t_film` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mname` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_film
-- ----------------------------

-- ----------------------------
-- Table structure for `t_model`
-- ----------------------------
DROP TABLE IF EXISTS `t_model`;
CREATE TABLE `t_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '模块id',
  `modelname` varchar(120) NOT NULL COMMENT '模块名',
  `tablename` varchar(100) NOT NULL COMMENT '附加表名',
  `status` int(10) NOT NULL DEFAULT '1' COMMENT '是否显示 1:显示 0:不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_model
-- ----------------------------
INSERT INTO `t_model` VALUES ('23', '文章模型', 'article', '1');
INSERT INTO `t_model` VALUES ('24', '电影模型', 'film', '1');

-- ----------------------------
-- Table structure for `t_model_fields`
-- ----------------------------
DROP TABLE IF EXISTS `t_model_fields`;
CREATE TABLE `t_model_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_cname` varchar(80) NOT NULL COMMENT '字段中文名',
  `field_ename` varchar(60) NOT NULL COMMENT '字段英文名',
  `field_type` tinyint(10) NOT NULL COMMENT '1:文本框 2:单选框 3:复选框 4:下拉菜单 5:文本域 6:附件 7: 浮点型 8: 整型\r\n',
  `field_value` int(10) NOT NULL COMMENT '可选值',
  `model_id` int(10) NOT NULL COMMENT '所属模块id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_model_fields
-- ----------------------------
