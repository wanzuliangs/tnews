/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.53 : Database - tnews
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tnews` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tnews`;

/*Table structure for table `t_cat` */

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
  `cat_attr` int(11) NOT NULL COMMENT '栏目属性',
  `list_tmp` varchar(80) NOT NULL COMMENT '列表模板',
  `index_tmp` varchar(80) NOT NULL COMMENT '频道页模板',
  `article_tmp` int(11) NOT NULL COMMENT '内容模板',
  `sort` int(11) NOT NULL DEFAULT '50' COMMENT '排序',
  `model_id` int(11) NOT NULL DEFAULT '1' COMMENT '模型id',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `t_cat` */

LOCK TABLES `t_cat` WRITE;

insert  into `t_cat`(`id`,`cate_name`,`seotitle`,`kewords`,`des`,`content`,`status`,`img`,`cat_attr`,`list_tmp`,`index_tmp`,`article_tmp`,`sort`,`model_id`,`pid`) values (5,'湖南省','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,0),(3,'河南省','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,0),(4,'湖北省','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,0),(6,'郑州市','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,3),(7,'开封市','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,3),(8,'长沙市','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,5),(9,'武汉市','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,4),(10,'荆州市','11','11','11','<p>11</p>',0,'',0,'list_article.htm','index_article.htm',0,50,1,4);

UNLOCK TABLES;

/*Table structure for table `t_conf` */

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

/*Data for the table `t_conf` */

LOCK TABLES `t_conf` WRITE;

insert  into `t_conf`(`id`,`cname`,`ename`,`value`,`values`,`dt_type`,`cf_type`) values (12,'网站logo','logo','20181201\\25d7461dc7033e969a5af99d8b69458c.jpg','',6,1),(10,'站点根路径','siteurl','11','',1,1),(11,'静态保存路径','path','22','',1,1),(13,'备案号','beian','33','',1,1),(14,'联系人','contact','44','',1,2),(15,'QQ群','qq','55','',1,2),(16,'站点名称','sitename','66','',1,3),(17,'站点关键词','keyword','77','',1,3),(18,'站点描述','description','88','',5,3),(19,'开启缓存','iscache','是','是,否',2,3),(20,'是否关闭站点','closeSite','关闭','关闭,开启',4,1),(21,'联系方式','contactway','电话','电话,QQ,微信,传真',3,2),(22,'二维码','qcode','20181201\\447d031f2e1524764e6cc457f57e1bda.jpg','',6,1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
