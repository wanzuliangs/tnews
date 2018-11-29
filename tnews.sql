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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `t_conf` */

LOCK TABLES `t_conf` WRITE;

insert  into `t_conf`(`id`,`cname`,`ename`,`value`,`values`,`dt_type`,`cf_type`) values (12,'网站logo','logo','','',6,1),(10,'站点根路径','siteurl','','',1,1),(11,'静态保存路径','path','','',1,1),(13,'备案号','beian','','',1,1),(14,'联系人','contact','','',1,2),(15,'QQ群','qq','','',1,2),(16,'站点名称','sitename','','',1,3),(17,'站点关键词','keyword','','',1,3),(18,'站点描述','description','','',5,3),(19,'开启缓存','iscache','','',2,3),(20,'是否关闭站点','closeSite','开启','关闭,开启',4,1),(21,'联系方式','contactway','电话','电话,QQ,微信,传真',3,2);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
