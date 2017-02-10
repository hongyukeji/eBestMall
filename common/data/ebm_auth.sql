/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : ebestmall

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-02-10 20:19:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ebm_auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_auth_assignment`;
CREATE TABLE `ebm_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `ebm_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `ebm_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ebm_auth_assignment
-- ----------------------------
INSERT INTO `ebm_auth_assignment` VALUES ('超级管理员', '1', '1486725609');

-- ----------------------------
-- Table structure for `ebm_auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_auth_item`;
CREATE TABLE `ebm_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `ebm_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `ebm_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ebm_auth_item
-- ----------------------------
INSERT INTO `ebm_auth_item` VALUES ('/admin-user/*', '2', null, null, null, '1486726859', '1486726859');
INSERT INTO `ebm_auth_item` VALUES ('/admin-user/index', '2', null, null, null, '1486726857', '1486726857');
INSERT INTO `ebm_auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1486725465', '1486725465');
INSERT INTO `ebm_auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1486725730', '1486725730');
INSERT INTO `ebm_auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1486725763', '1486725763');
INSERT INTO `ebm_auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1486725760', '1486725760');
INSERT INTO `ebm_auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1486725479', '1486725479');
INSERT INTO `ebm_auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1486725737', '1486725737');
INSERT INTO `ebm_auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1486725488', '1486725488');
INSERT INTO `ebm_auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1486725743', '1486725743');
INSERT INTO `ebm_auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1486725496', '1486725496');
INSERT INTO `ebm_auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1486725749', '1486725749');
INSERT INTO `ebm_auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1486726918', '1486726918');
INSERT INTO `ebm_auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1486726920', '1486726920');
INSERT INTO `ebm_auth_item` VALUES ('/category/*', '2', null, null, null, '1486728607', '1486728607');
INSERT INTO `ebm_auth_item` VALUES ('/category/index', '2', null, null, null, '1486728609', '1486728609');
INSERT INTO `ebm_auth_item` VALUES ('/debug/*', '2', null, null, null, '1486726193', '1486726193');
INSERT INTO `ebm_auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1486726195', '1486726195');
INSERT INTO `ebm_auth_item` VALUES ('/gii/*', '2', null, null, null, '1486726183', '1486726183');
INSERT INTO `ebm_auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1486726178', '1486726178');
INSERT INTO `ebm_auth_item` VALUES ('/user/*', '2', null, null, null, '1486726865', '1486726865');
INSERT INTO `ebm_auth_item` VALUES ('/user/index', '2', null, null, null, '1486726868', '1486726868');
INSERT INTO `ebm_auth_item` VALUES ('商品管理', '2', null, null, null, '1486728572', '1486728572');
INSERT INTO `ebm_auth_item` VALUES ('权限控制', '2', null, null, null, '1486725530', '1486725530');
INSERT INTO `ebm_auth_item` VALUES ('用户管理', '2', null, null, null, '1486727252', '1486728548');
INSERT INTO `ebm_auth_item` VALUES ('管理员', '1', null, null, null, '1486727310', '1486727310');
INSERT INTO `ebm_auth_item` VALUES ('管理员管理', '2', null, null, null, '1486727221', '1486728589');
INSERT INTO `ebm_auth_item` VALUES ('调试', '2', null, null, null, '1486726223', '1486726223');
INSERT INTO `ebm_auth_item` VALUES ('超级管理员', '1', null, null, null, '1486725567', '1486727696');

-- ----------------------------
-- Table structure for `ebm_auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_auth_item_child`;
CREATE TABLE `ebm_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `ebm_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `ebm_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ebm_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `ebm_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ebm_auth_item_child
-- ----------------------------
INSERT INTO `ebm_auth_item_child` VALUES ('管理员管理', '/admin-user/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/assignment/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/menu/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/permission/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/role/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/route/*');
INSERT INTO `ebm_auth_item_child` VALUES ('权限控制', '/admin/rule/*');
INSERT INTO `ebm_auth_item_child` VALUES ('商品管理', '/category/*');
INSERT INTO `ebm_auth_item_child` VALUES ('调试', '/debug/*');
INSERT INTO `ebm_auth_item_child` VALUES ('调试', '/gii/*');
INSERT INTO `ebm_auth_item_child` VALUES ('用户管理', '/user/*');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '商品管理');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '权限控制');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '用户管理');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '管理员');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '管理员管理');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '调试');

-- ----------------------------
-- Table structure for `ebm_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_auth_rule`;
CREATE TABLE `ebm_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ebm_auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_menu`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_menu`;
CREATE TABLE `ebm_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `ebm_menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `ebm_menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ebm_menu
-- ----------------------------
INSERT INTO `ebm_menu` VALUES ('1', '权限控制', null, null, '10', 0x7B2269636F6E223A2266612066612D6C6F636B222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', 0x7B2269636F6E223A2266612066612D676C6F6265222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', 0x7B2269636F6E223A2266612066612D756E6C6F636B2D616C74222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', 0x7B2269636F6E223A2266612066612D757365722D706C7573222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', 0x7B2269636F6E223A2266612066612D6375626573222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('6', '菜单', '1', '/admin/menu/index', '5', 0x7B2269636F6E223A2266612066612D736974656D6170222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('7', '调试', '1', null, '12', 0x7B2269636F6E223A2266612066612D7772656E6368222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('8', 'Gii', '7', '/gii/default/index', '1', 0x7B2269636F6E223A2266612066612D66696C652D636F64652D6F222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('9', 'Debug', '7', '/debug/default/index', '2', 0x7B2269636F6E223A2266612066612D627567222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('10', '规则', '1', '/admin/rule/index', '6', 0x7B2269636F6E223A2266612066612D736869656C64222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('11', '管理员', '1', '/admin-user/index', '7', 0x7B2269636F6E223A2266612066612D757365722D736563726574222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('12', '会员管理', null, null, '8', 0x7B2269636F6E223A2266612066612D75736572222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('13', '会员列表', '12', '/user/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('14', '商品管理', null, null, '6', 0x7B2269636F6E223A2266612066612D73686F7070696E672D63617274222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('15', '商品分类', '14', '/category/index', '3', null);
