/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : ebestmall

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-02-11 20:26:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ebm_activity`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_activity`;
CREATE TABLE `ebm_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='活动';

-- ----------------------------
-- Records of ebm_activity
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_address`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_address`;
CREATE TABLE `ebm_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='地址';

-- ----------------------------
-- Records of ebm_address
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_admin_user`;
CREATE TABLE `ebm_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '重置密码token',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '管理员头像',
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员用户表';

-- ----------------------------
-- Records of ebm_admin_user
-- ----------------------------
INSERT INTO `ebm_admin_user` VALUES ('1', 'admin', 'yB0vvtVKCzimOUB_DSR-j_Ng0xQJ3wZ7', '$2y$13$hj9yWjvmYXCGzN36j5eNMevgnltvmjnCjdAWP7ekhnBrVzwe/vpda', null, 'admin@hongyuvip.com', null, '10', '10', '1486727839', '1486727839');

-- ----------------------------
-- Table structure for `ebm_advert`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_advert`;
CREATE TABLE `ebm_advert` (
  `advertId` int(11) NOT NULL AUTO_INCREMENT,
  `advertName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '广告名称',
  `advertCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '广告关键字',
  `advertLocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '广告位置',
  `advertImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '广告图片',
  `advertUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '广告链接',
  PRIMARY KEY (`advertId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='广告';

-- ----------------------------
-- Records of ebm_advert
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_article`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_article`;
CREATE TABLE `ebm_article` (
  `articleId` int(11) NOT NULL AUTO_INCREMENT,
  `articleCatId` smallint(6) DEFAULT '0' COMMENT '文章分类ID',
  `articleTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章标题',
  `articleContent` text COLLATE utf8_unicode_ci NOT NULL COMMENT '文章内容',
  `articleAuthorAdminUserId` smallint(6) DEFAULT '0' COMMENT '文章作者ID',
  `status` smallint(6) DEFAULT '0' COMMENT '状态:1-开启,0-关闭',
  `createdTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `updatedTime` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文章';

-- ----------------------------
-- Records of ebm_article
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_article_cat`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_article_cat`;
CREATE TABLE `ebm_article_cat` (
  `articleCatId` int(11) NOT NULL AUTO_INCREMENT,
  `articleCatName` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章分类名称',
  `articleCatParentId` smallint(6) DEFAULT '0' COMMENT '文章分类父ID',
  PRIMARY KEY (`articleCatId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文章分类';

-- ----------------------------
-- Records of ebm_article_cat
-- ----------------------------

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
INSERT INTO `ebm_auth_item` VALUES ('/advert/*', '2', null, null, null, '1486810271', '1486810271');
INSERT INTO `ebm_auth_item` VALUES ('/advert/index', '2', null, null, null, '1486810269', '1486810269');
INSERT INTO `ebm_auth_item` VALUES ('/article-cat/*', '2', null, null, null, '1486734544', '1486734544');
INSERT INTO `ebm_auth_item` VALUES ('/article-cat/index', '2', null, null, null, '1486734541', '1486734541');
INSERT INTO `ebm_auth_item` VALUES ('/article/*', '2', null, null, null, '1486734549', '1486734549');
INSERT INTO `ebm_auth_item` VALUES ('/article/index', '2', null, null, null, '1486734547', '1486734547');
INSERT INTO `ebm_auth_item` VALUES ('/category/*', '2', null, null, null, '1486728607', '1486728607');
INSERT INTO `ebm_auth_item` VALUES ('/category/index', '2', null, null, null, '1486728609', '1486728609');
INSERT INTO `ebm_auth_item` VALUES ('/config/*', '2', null, null, null, '1486809557', '1486809557');
INSERT INTO `ebm_auth_item` VALUES ('/config/index', '2', null, null, null, '1486809554', '1486809554');
INSERT INTO `ebm_auth_item` VALUES ('/debug/*', '2', null, null, null, '1486726193', '1486726193');
INSERT INTO `ebm_auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1486726195', '1486726195');
INSERT INTO `ebm_auth_item` VALUES ('/gii/*', '2', null, null, null, '1486726183', '1486726183');
INSERT INTO `ebm_auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1486726178', '1486726178');
INSERT INTO `ebm_auth_item` VALUES ('/goods/*', '2', null, null, null, '1486734916', '1486734916');
INSERT INTO `ebm_auth_item` VALUES ('/goods/index', '2', null, null, null, '1486734913', '1486734913');
INSERT INTO `ebm_auth_item` VALUES ('/order/*', '2', null, null, null, '1486810683', '1486810683');
INSERT INTO `ebm_auth_item` VALUES ('/order/index', '2', null, null, null, '1486810681', '1486810681');
INSERT INTO `ebm_auth_item` VALUES ('/payment/*', '2', null, null, null, '1486809134', '1486809134');
INSERT INTO `ebm_auth_item` VALUES ('/payment/index', '2', null, null, null, '1486809130', '1486809130');
INSERT INTO `ebm_auth_item` VALUES ('/shipping/*', '2', null, null, null, '1486808592', '1486808592');
INSERT INTO `ebm_auth_item` VALUES ('/shipping/index', '2', null, null, null, '1486808589', '1486808589');
INSERT INTO `ebm_auth_item` VALUES ('/test/*', '2', null, null, null, '1486811739', '1486811739');
INSERT INTO `ebm_auth_item` VALUES ('/test/index', '2', null, null, null, '1486811736', '1486811736');
INSERT INTO `ebm_auth_item` VALUES ('/user/*', '2', null, null, null, '1486726865', '1486726865');
INSERT INTO `ebm_auth_item` VALUES ('/user/index', '2', null, null, null, '1486726868', '1486726868');
INSERT INTO `ebm_auth_item` VALUES ('商品管理', '2', null, null, null, '1486728572', '1486728572');
INSERT INTO `ebm_auth_item` VALUES ('广告管理', '2', null, null, null, '1486810298', '1486810298');
INSERT INTO `ebm_auth_item` VALUES ('文章管理', '2', null, null, null, '1486734563', '1486734563');
INSERT INTO `ebm_auth_item` VALUES ('权限控制', '2', null, null, null, '1486725530', '1486725530');
INSERT INTO `ebm_auth_item` VALUES ('测试管理', '2', null, null, null, '1486811762', '1486811762');
INSERT INTO `ebm_auth_item` VALUES ('用户管理', '2', null, null, null, '1486727252', '1486728548');
INSERT INTO `ebm_auth_item` VALUES ('管理员', '1', null, null, null, '1486727310', '1486727310');
INSERT INTO `ebm_auth_item` VALUES ('管理员管理', '2', null, null, null, '1486727221', '1486728589');
INSERT INTO `ebm_auth_item` VALUES ('系统设置', '2', null, null, null, '1486808608', '1486808608');
INSERT INTO `ebm_auth_item` VALUES ('订单管理', '2', null, null, null, '1486810701', '1486810701');
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
INSERT INTO `ebm_auth_item_child` VALUES ('广告管理', '/advert/*');
INSERT INTO `ebm_auth_item_child` VALUES ('文章管理', '/article-cat/*');
INSERT INTO `ebm_auth_item_child` VALUES ('文章管理', '/article/*');
INSERT INTO `ebm_auth_item_child` VALUES ('商品管理', '/category/*');
INSERT INTO `ebm_auth_item_child` VALUES ('系统设置', '/config/*');
INSERT INTO `ebm_auth_item_child` VALUES ('调试', '/debug/*');
INSERT INTO `ebm_auth_item_child` VALUES ('调试', '/gii/*');
INSERT INTO `ebm_auth_item_child` VALUES ('商品管理', '/goods/*');
INSERT INTO `ebm_auth_item_child` VALUES ('订单管理', '/order/*');
INSERT INTO `ebm_auth_item_child` VALUES ('系统设置', '/payment/*');
INSERT INTO `ebm_auth_item_child` VALUES ('系统设置', '/shipping/*');
INSERT INTO `ebm_auth_item_child` VALUES ('测试管理', '/test/*');
INSERT INTO `ebm_auth_item_child` VALUES ('用户管理', '/user/*');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '商品管理');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '广告管理');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '文章管理');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '权限控制');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '测试管理');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '用户管理');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '管理员');
INSERT INTO `ebm_auth_item_child` VALUES ('超级管理员', '管理员管理');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '系统设置');
INSERT INTO `ebm_auth_item_child` VALUES ('管理员', '订单管理');
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
-- Table structure for `ebm_category`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_category`;
CREATE TABLE `ebm_category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类名称',
  `categoryParentId` smallint(6) DEFAULT '0' COMMENT '分类父ID',
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='分类';

-- ----------------------------
-- Records of ebm_category
-- ----------------------------
INSERT INTO `ebm_category` VALUES ('1', '默认分类', '0');

-- ----------------------------
-- Table structure for `ebm_config`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_config`;
CREATE TABLE `ebm_config` (
  `configId` int(11) NOT NULL AUTO_INCREMENT,
  `configName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '配置名称',
  `configCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配置关键字',
  `configValue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配置值',
  `configParentId` smallint(6) DEFAULT '0' COMMENT '配置父ID',
  PRIMARY KEY (`configId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='系统配置';

-- ----------------------------
-- Records of ebm_config
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_country`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_country`;
CREATE TABLE `ebm_country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ebm_country
-- ----------------------------
INSERT INTO `ebm_country` VALUES ('AU', 'Australia', '18886000');
INSERT INTO `ebm_country` VALUES ('BR', 'Brazil', '170115000');
INSERT INTO `ebm_country` VALUES ('CA', 'Canada', '1147000');
INSERT INTO `ebm_country` VALUES ('CN', 'China', '1277558000');
INSERT INTO `ebm_country` VALUES ('DE', 'Germany', '82164700');
INSERT INTO `ebm_country` VALUES ('FR', 'France', '59225700');
INSERT INTO `ebm_country` VALUES ('GB', 'United Kingdom', '59623400');
INSERT INTO `ebm_country` VALUES ('IN', 'India', '1013662000');
INSERT INTO `ebm_country` VALUES ('RU', 'Russia', '146934000');
INSERT INTO `ebm_country` VALUES ('US', 'United States', '278357000');

-- ----------------------------
-- Table structure for `ebm_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_goods`;
CREATE TABLE `ebm_goods` (
  `goodsId` int(11) NOT NULL AUTO_INCREMENT,
  `goodsName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `goodsBrief` varchar(255) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '商品简介',
  `goodsPrice` decimal(10,2) DEFAULT '0.00' COMMENT '商品价格',
  `goodsMarketPrice` decimal(10,2) DEFAULT '0.00' COMMENT '商品市场价格',
  `goodsNumber` int(11) DEFAULT '0' COMMENT '商品数量',
  `goodsSalesVolume` int(11) DEFAULT '0' COMMENT '商品销量',
  `goodsImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '商品图片',
  `goodsIntroduce` text COLLATE utf8_unicode_ci COMMENT '商品介绍',
  `status` smallint(6) DEFAULT '0' COMMENT '状态:1-开启,0-关闭',
  `createdTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `updatedTime` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`goodsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='商品';

-- ----------------------------
-- Records of ebm_goods
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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ebm_menu
-- ----------------------------
INSERT INTO `ebm_menu` VALUES ('1', '权限控制', null, null, '19', 0x7B2269636F6E223A2266612066612D6C6F636B222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', 0x7B2269636F6E223A2266612066612D676C6F6265222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', 0x7B2269636F6E223A2266612066612D756E6C6F636B2D616C74222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', 0x7B2269636F6E223A2266612066612D757365722D706C7573222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', 0x7B2269636F6E223A2266612066612D62616C616E63652D7363616C65222C2276697369626C65223A747275657D);
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
INSERT INTO `ebm_menu` VALUES ('16', '文章管理', null, null, '12', 0x7B2269636F6E223A2266612066612D626F6F6B222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('17', '文章列表', '16', '/article/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('18', '文章分类', '16', '/article-cat/index', '3', null);
INSERT INTO `ebm_menu` VALUES ('19', '商品列表', '14', '/goods/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('20', '系统设置', null, null, '20', 0x7B2269636F6E223A2266612066612D67656172222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('21', '商城设置', '20', null, '1', null);
INSERT INTO `ebm_menu` VALUES ('22', '配送方式', '21', '/shipping/index', '10', null);
INSERT INTO `ebm_menu` VALUES ('23', '支付方式', '21', '/payment/index', '9', null);
INSERT INTO `ebm_menu` VALUES ('24', '基本设置', '21', '/config/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('25', '广告管理', null, null, '13', 0x7B2269636F6E223A2266612066612D696D616765222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('26', '广告列表', '25', '/advert/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('27', '订单管理', null, null, '7', 0x7B2269636F6E223A2266612066612D70656E63696C2D7371756172652D6F222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('28', '订单列表', '27', '/order/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('29', '扩展中心', null, null, '30', 0x7B2269636F6E223A2266612066612D6375626573222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('30', '插件列表', '29', '/test/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('31', '微信商城', null, null, '25', 0x7B2269636F6E223A2266612066612D776563686174222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('32', '微信设置', '31', '/test/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('33', 'APP 管理', null, null, '22', 0x7B2269636F6E223A22676C79706869636F6E20676C79706869636F6E2D70686F6E65222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('34', '基本设置', '33', '/test/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('35', '统计管理', null, null, '15', 0x7B2269636F6E223A2266612066612D6C696E652D6368617274222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('36', '订单统计', '35', '/test/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('37', '促销管理', null, null, '11', 0x7B2269636F6E223A2266612066612D626F6F6B6D61726B222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('38', '活动列表', '37', '/test/index', '1', null);
INSERT INTO `ebm_menu` VALUES ('39', '商家管理', null, null, '9', 0x7B2269636F6E223A2266612066612D666C6167222C2276697369626C65223A747275657D);
INSERT INTO `ebm_menu` VALUES ('40', '商家列表', '39', '/test/index', '1', null);

-- ----------------------------
-- Table structure for `ebm_migration`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_migration`;
CREATE TABLE `ebm_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ebm_migration
-- ----------------------------
INSERT INTO `ebm_migration` VALUES ('m000000_000000_base', '1486641573');
INSERT INTO `ebm_migration` VALUES ('m130524_201442_init', '1486641575');
INSERT INTO `ebm_migration` VALUES ('m140506_102106_rbac_init', '1486641575');
INSERT INTO `ebm_migration` VALUES ('m140602_111327_create_menu_table', '1486643495');
INSERT INTO `ebm_migration` VALUES ('m161110_065422_admin_user', '1486643495');
INSERT INTO `ebm_migration` VALUES ('m170210_060038_activity', '1486720647');
INSERT INTO `ebm_migration` VALUES ('m170210_060059_address', '1486720647');
INSERT INTO `ebm_migration` VALUES ('m170210_060109_advert', '1486810188');
INSERT INTO `ebm_migration` VALUES ('m170210_133844_article_cat', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060151_goods', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060200_order', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060210_payment', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060218_region', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060229_seller', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060240_shipping', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060142_config', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060121_article', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170210_060130_category', '1486810106');
INSERT INTO `ebm_migration` VALUES ('m170211_095215_order_detail', '1486810188');

-- ----------------------------
-- Table structure for `ebm_order`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_order`;
CREATE TABLE `ebm_order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `AddressId` int(11) NOT NULL DEFAULT '0' COMMENT '收货地址',
  `orderAmount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单总价',
  `shippingId` int(11) NOT NULL DEFAULT '0' COMMENT '配送方式',
  `status` smallint(6) DEFAULT '0' COMMENT '订单状态:1-已完成,0-未完成',
  `createdTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `updatedTime` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='订单';

-- ----------------------------
-- Records of ebm_order
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_order_detail`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_order_detail`;
CREATE TABLE `ebm_order_detail` (
  `orderDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `orderDetailGoodsId` int(11) NOT NULL DEFAULT '0' COMMENT '订单详情商品ID',
  `orderDetailGoodsPrice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单详情商品价格',
  `orderDetailGoodsNumber` int(11) DEFAULT '0' COMMENT '订单详情商品数量',
  `orderId` int(11) NOT NULL DEFAULT '0' COMMENT '订单ID',
  `createdTime` int(11) DEFAULT NULL COMMENT '创建时间',
  `updatedTime` int(11) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`orderDetailId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='订单详情表';

-- ----------------------------
-- Records of ebm_order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_payment`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_payment`;
CREATE TABLE `ebm_payment` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `paymentName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '支付方式名称',
  `paymentDescribe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '支付方式描述',
  `paymentConfig` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '支付方式配置',
  `status` smallint(6) DEFAULT '0' COMMENT '状态:1-开启,0-关闭',
  PRIMARY KEY (`paymentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='支付方式';

-- ----------------------------
-- Records of ebm_payment
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_region`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_region`;
CREATE TABLE `ebm_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='地区';

-- ----------------------------
-- Records of ebm_region
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_seller`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_seller`;
CREATE TABLE `ebm_seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='卖家';

-- ----------------------------
-- Records of ebm_seller
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_shipping`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_shipping`;
CREATE TABLE `ebm_shipping` (
  `shippingId` int(11) NOT NULL AUTO_INCREMENT,
  `shippingName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '配送方式名称',
  `shippingDescribe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配送方式描述',
  `shippingPrice` int(11) DEFAULT NULL COMMENT '配送方式价格',
  `status` smallint(6) DEFAULT '0' COMMENT '状态:1-开启,0-关闭',
  PRIMARY KEY (`shippingId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='配送方式';

-- ----------------------------
-- Records of ebm_shipping
-- ----------------------------

-- ----------------------------
-- Table structure for `ebm_user`
-- ----------------------------
DROP TABLE IF EXISTS `ebm_user`;
CREATE TABLE `ebm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ebm_user
-- ----------------------------
INSERT INTO `ebm_user` VALUES ('1', 'shadow', 'mSzTmW4YJITUS6V3Bb5G0klA5KJeQCFv', '$2y$13$u7nmUWmjsSjkEDkDW3J/DetekkI3Q2/8H6J5eyCJkp1x2sXv2iD/O', null, 'admin@hongyuvip.com', '10', '1486642433', '1486642433');
