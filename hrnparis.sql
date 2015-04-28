/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : hrnparis

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-04-27 09:51:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for entity_type
-- ----------------------------
DROP TABLE IF EXISTS `entity_type`;
CREATE TABLE `entity_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entity_type
-- ----------------------------
INSERT INTO `entity_type` VALUES ('1', 'Speakers');
INSERT INTO `entity_type` VALUES ('2', 'Sponsors');

-- ----------------------------
-- Table structure for image_connection
-- ----------------------------
DROP TABLE IF EXISTS `image_connection`;
CREATE TABLE `image_connection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_type_id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `image_db_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image_connection
-- ----------------------------
INSERT INTO `image_connection` VALUES ('1', '2', '1', '1', '2015-04-07 12:01:07');
INSERT INTO `image_connection` VALUES ('2', '2', '2', '2', '2015-04-07 12:12:11');

-- ----------------------------
-- Table structure for image_db
-- ----------------------------
DROP TABLE IF EXISTS `image_db`;
CREATE TABLE `image_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` text NOT NULL,
  `alt_name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image_db
-- ----------------------------
INSERT INTO `image_db` VALUES ('1', 'workday-logo.png', 'Workday Logo', '2015-04-07 11:58:53');
INSERT INTO `image_db` VALUES ('2', 'cornerstone-logo.png', 'Cornerstone OnDemand', '2015-04-07 12:11:57');

-- ----------------------------
-- Table structure for social_links
-- ----------------------------
DROP TABLE IF EXISTS `social_links`;
CREATE TABLE `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `social_link_url` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of social_links
-- ----------------------------
INSERT INTO `social_links` VALUES ('1', 'facebook.com/hihi', '2015-04-07 14:41:37');

-- ----------------------------
-- Table structure for social_links_connection
-- ----------------------------
DROP TABLE IF EXISTS `social_links_connection`;
CREATE TABLE `social_links_connection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_type_id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `social_link_type_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of social_links_connection
-- ----------------------------
INSERT INTO `social_links_connection` VALUES ('1', '2', '1', '1', '1', '2015-04-07 14:41:51');

-- ----------------------------
-- Table structure for social_link_types
-- ----------------------------
DROP TABLE IF EXISTS `social_link_types`;
CREATE TABLE `social_link_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of social_link_types
-- ----------------------------
INSERT INTO `social_link_types` VALUES ('1', 'facebook');
INSERT INTO `social_link_types` VALUES ('2', 'twitter');
INSERT INTO `social_link_types` VALUES ('3', 'linkedin');
INSERT INTO `social_link_types` VALUES ('4', 'flickr');
INSERT INTO `social_link_types` VALUES ('5', 'google');

-- ----------------------------
-- Table structure for sponsors
-- ----------------------------
DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors
-- ----------------------------
INSERT INTO `sponsors` VALUES ('1', '2015-04-01 10:47:03');
INSERT INTO `sponsors` VALUES ('2', '2015-04-07 12:09:52');

-- ----------------------------
-- Table structure for sponsors_bio
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_bio`;
CREATE TABLE `sponsors_bio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `sponsor_bio` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_bio
-- ----------------------------
INSERT INTO `sponsors_bio` VALUES ('1', '1', 'Test :)', '2015-04-01 10:47:45');
INSERT INTO `sponsors_bio` VALUES ('2', '2', 'Hehe! :D', '2015-04-07 12:10:09');

-- ----------------------------
-- Table structure for sponsors_category
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_category`;
CREATE TABLE `sponsors_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_category
-- ----------------------------
INSERT INTO `sponsors_category` VALUES ('1', '1', '1', '2015-04-07 11:34:57');
INSERT INTO `sponsors_category` VALUES ('2', '2', '1', '2015-04-07 12:10:24');

-- ----------------------------
-- Table structure for sponsors_data_connection
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_data_connection`;
CREATE TABLE `sponsors_data_connection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `sponsor_bio_id` int(11) NOT NULL,
  `sponsor_name_id` int(11) NOT NULL,
  `sponsor_category_id` int(11) NOT NULL,
  `sponsor_link_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_data_connection
-- ----------------------------
INSERT INTO `sponsors_data_connection` VALUES ('1', '1', '1', '1', '1', '1', '2015-04-01 10:48:07');
INSERT INTO `sponsors_data_connection` VALUES ('2', '2', '2', '2', '2', '2', '2015-04-07 12:11:13');

-- ----------------------------
-- Table structure for sponsors_links
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_links`;
CREATE TABLE `sponsors_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `sponsor_link_url` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_links
-- ----------------------------
INSERT INTO `sponsors_links` VALUES ('1', '1', 'www.test.hu', '2015-04-07 11:51:29');
INSERT INTO `sponsors_links` VALUES ('2', '2', 'www.meow.com', '2015-04-07 12:11:03');

-- ----------------------------
-- Table structure for sponsors_name
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_name`;
CREATE TABLE `sponsors_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `sponsor_name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_name
-- ----------------------------
INSERT INTO `sponsors_name` VALUES ('1', '1', 'Moo', '2015-04-01 10:47:55');
INSERT INTO `sponsors_name` VALUES ('2', '2', 'Nyau', '2015-04-07 12:10:39');

-- ----------------------------
-- Table structure for sponsors_status
-- ----------------------------
DROP TABLE IF EXISTS `sponsors_status`;
CREATE TABLE `sponsors_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsors_status
-- ----------------------------
INSERT INTO `sponsors_status` VALUES ('1', '1', '1', '2015-04-07 11:26:45');
INSERT INTO `sponsors_status` VALUES ('2', '2', '1', '2015-04-07 12:10:47');

-- ----------------------------
-- Table structure for sponsor_categories
-- ----------------------------
DROP TABLE IF EXISTS `sponsor_categories`;
CREATE TABLE `sponsor_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsor_categories
-- ----------------------------
INSERT INTO `sponsor_categories` VALUES ('1', 'Diamond');
INSERT INTO `sponsor_categories` VALUES ('2', 'Emerald');
INSERT INTO `sponsor_categories` VALUES ('3', 'Golden');
INSERT INTO `sponsor_categories` VALUES ('4', 'Silver');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `email` text,
  `first_name` text,
  `last_name` text,
  `rank` int(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Myrrdhinn', 'LkJ8r1S0sErHqz23MdW5TdcM94sCUgOOLobAlM6xZ1H6FB3N3NJ0DNmshjL+:4eImQYDLW3MUtTDyqInbjV5c2TFp/pcg5uIsHOXWyhB6LcVWv/10MQ==', 'myrrdhinn@gmail.com', 'Balázs', 'Péntek', '1', '2015-04-07 16:08:59');
