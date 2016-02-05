/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : db_xxx

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-20 00:20:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for xxx_admin
-- ----------------------------
DROP TABLE IF EXISTS `xxx_admin`;
CREATE TABLE `xxx_admin` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户名ID',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `nickname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '用户昵称',
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastloginip` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '上次登录IP',
  `lastlogintime` int(11) unsigned DEFAULT NULL COMMENT '上次登录时间',
  `status` int(2) unsigned DEFAULT '1' COMMENT '管理账户状态 1默认,正常; 0禁用状态',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_admin
-- ----------------------------
INSERT INTO `xxx_admin` VALUES ('1', 'admin', null, '84c7305dfa85527726ac321729d48aa3', null, null, null, '0', '1');

-- ----------------------------
-- Table structure for xxx_adminmenu
-- ----------------------------
DROP TABLE IF EXISTS `xxx_adminmenu`;
CREATE TABLE `xxx_adminmenu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_url` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '控制器/方法',
  `menu_sort` int(6) DEFAULT '11',
  `menu_showed` int(2) DEFAULT '1',
  `parentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_adminmenu
-- ----------------------------

-- ----------------------------
-- Table structure for xxx_banner
-- ----------------------------
DROP TABLE IF EXISTS `xxx_banner`;
CREATE TABLE `xxx_banner` (
  `banner_id` int(11) NOT NULL COMMENT 'banner ID',
  `banner_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'banner链接',
  `banner_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'banner路径',
  `banner_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'banner名称标题或提示',
  `banner_sort` int(6) unsigned DEFAULT '11' COMMENT '排序',
  `banner_showed` int(6) unsigned DEFAULT '1' COMMENT '是否显示 1默认显示  0不显示',
  `banner_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '所属模块/栏目',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_banner
-- ----------------------------

-- ----------------------------
-- Table structure for xxx_category
-- ----------------------------
DROP TABLE IF EXISTS `xxx_category`;
CREATE TABLE `xxx_category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '栏目名称',
  `category_letter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '栏目英文名称/标示/别名',
  `category_parentid` int(11) unsigned zerofill NOT NULL DEFAULT '00000000001' COMMENT '父级栏目ID 1默认顶级栏目',
  `category_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '栏目图片',
  `category_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '栏目图标',
  `category_desc` text COLLATE utf8_unicode_ci COMMENT '栏目描述语',
  `category_style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '栏目样式',
  `category_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '栏目链接',
  `category_sort` int(6) unsigned DEFAULT '11' COMMENT '栏目排序',
  `category_showed` tinyint(2) unsigned DEFAULT '1' COMMENT '栏目是否显示(作为菜单),1显示，0不显示',
  `category_recommend` tinyint(2) unsigned DEFAULT '0' COMMENT '是否推荐(到首页) 0默认值不推荐，1推荐',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_category
-- ----------------------------
INSERT INTO `xxx_category` VALUES ('1', '顶级栏目', null, '00000000000', null, null, null, null, '', '1', '0', null);
INSERT INTO `xxx_category` VALUES ('2', '标志设计', null, '00000000001', null, null, null, null, null, '2', '1', null);

-- ----------------------------
-- Table structure for xxx_content
-- ----------------------------
DROP TABLE IF EXISTS `xxx_content`;
CREATE TABLE `xxx_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_content
-- ----------------------------

-- ----------------------------
-- Table structure for xxx_page
-- ----------------------------
DROP TABLE IF EXISTS `xxx_page`;
CREATE TABLE `xxx_page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_keywords` text COLLATE utf8_unicode_ci,
  `page_desc` text COLLATE utf8_unicode_ci,
  `page_content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_page
-- ----------------------------

-- ----------------------------
-- Table structure for xxx_set
-- ----------------------------
DROP TABLE IF EXISTS `xxx_set`;
CREATE TABLE `xxx_set` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of xxx_set
-- ----------------------------
INSERT INTO `xxx_set` VALUES ('1', '网站名称', 'website_name', '智承策划');
INSERT INTO `xxx_set` VALUES ('2', '地址', 'addr', '广东东莞虎门镇怀德深巷二十四巷18号');
INSERT INTO `xxx_set` VALUES ('3', '电话', 'mobile', '13528584166');
INSERT INTO `xxx_set` VALUES ('4', 'QQ', 'qq', '421610661');
INSERT INTO `xxx_set` VALUES ('5', '网站别名', 'app_alias', '阿郭设计');
INSERT INTO `xxx_set` VALUES ('6', '机构名称', 'org', '资深品牌设计机构');
