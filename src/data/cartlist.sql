/*
Navicat MySQL Data Transfer

Source Server         : My1811SQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : llcc

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2019-03-21 20:38:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cartlist
-- ----------------------------
DROP TABLE IF EXISTS `cartlist`;
CREATE TABLE `cartlist` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cartlist
-- ----------------------------
INSERT INTO `cartlist` VALUES ('1', '小米', '白色', '64GB', '1', '998', 'https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg');
INSERT INTO `cartlist` VALUES ('2', 'iphone', '黑色', '128GB', '2', '888', 'https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg');
INSERT INTO `cartlist` VALUES ('3', '华为', '银色', '256GB', '3', '777', 'https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg');
INSERT INTO `cartlist` VALUES ('4', '红米', '粉色', '128GB', '5', '998', 'https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg');
INSERT INTO `cartlist` VALUES ('5', '荣耀', '深空灰', '256GB', '8', '1111', 'https://img2.ch999img.com/pic/product/440x440/20181101141815489.jpg');
SET FOREIGN_KEY_CHECKS=1;
