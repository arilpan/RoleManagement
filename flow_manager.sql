/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : flow_manager

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-30 21:17:31


CREATE SCHEMA `flow_manager` DEFAULT CHARACTER SET utf8 ;

*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_group`;
CREATE TABLE `t_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `rules` char(80) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=232 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_group
-- ----------------------------
INSERT INTO `t_auth_group` VALUES ('1', '超级管理员', '1', '234', '1,2,3,4,5', '2016-06-04 00:00:48', '2016-06-04 00:00:50');
INSERT INTO `t_auth_group` VALUES ('2', '', '1', '', '1,2', '2016-06-03 23:09:11', '2016-06-03 23:09:11');
INSERT INTO `t_auth_group` VALUES ('3', '普通会员组', '1', '333', '', '2016-06-03 23:09:11', '2016-06-03 23:09:11');

-- ----------------------------
-- Table structure for t_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_group_access`;
CREATE TABLE `t_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_group_access
-- ----------------------------
INSERT INTO `t_auth_group_access` VALUES ('1', '3');
INSERT INTO `t_auth_group_access` VALUES ('3', '1');
INSERT INTO `t_auth_group_access` VALUES ('4', '3');

-- ----------------------------
-- Table structure for t_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_rule`;
CREATE TABLE `t_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6234 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_rule
-- ----------------------------
INSERT INTO `t_auth_rule` VALUES ('1', 'Home/Index/index', '后台首页', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('222', 'Home/Action/index', '权限管理', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('3', 'Home/Role/add', '角色添加', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('2', 'Home/Role/index', '角色列表', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('5', 'Home/Role/edit', '角色编辑', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('6233', 'Home/Action/edit', '权限编辑', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('111', 'Home/Flow/index', '流量管理', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('6', 'Home/Role/delete', '删除角色', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('7', 'Home/Role/member', '角色成员', '1', '1', '');
INSERT INTO `t_auth_rule` VALUES ('8', 'Home/Role/action', '角色权限', '1', '1', '');

-- ----------------------------
-- Table structure for t_flow
-- ----------------------------
DROP TABLE IF EXISTS `t_flow`;
CREATE TABLE `t_flow` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `flow_amount` bigint(255) DEFAULT NULL,
  `flow_used` bigint(255) DEFAULT NULL,
  `expire_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_flow
-- ----------------------------

-- ----------------------------
-- Table structure for t_record
-- ----------------------------
DROP TABLE IF EXISTS `t_record`;
CREATE TABLE `t_record` (
  `id` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `operate_type` varchar(255) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_record
-- ----------------------------

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `referee_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'admin', 'kklsjdfklajsldfjs', null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `t_user` VALUES ('2', '张三', '123', '小小小', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `t_user` VALUES ('6', '六', '666', '666', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `t_user` VALUES ('7', 'df', 'f', 'sdf', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
