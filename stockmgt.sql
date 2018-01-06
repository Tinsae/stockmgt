/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : stockmgt

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-03-12 15:02:12
*/

SET FOREIGN_KEY_CHECKS=0;

use gcp_83c58c04d2606dd50304;


-- ----------------------------
-- Table structure for `assignmaterial`
-- ----------------------------
DROP TABLE IF EXISTS `assignmaterial`;
CREATE TABLE `assignmaterial` (
  `sub_store_ID` varchar(40) NOT NULL default '',
  `mat_ID` varchar(40) NOT NULL default '',
  `assign_qua` int(11) default NULL,
  `assign_date` date default NULL,
  PRIMARY KEY  (`mat_ID`,`sub_store_ID`),
  KEY `sub_store_ID` (`sub_store_ID`,`mat_ID`),
  CONSTRAINT `FK_mat-assign` FOREIGN KEY (`mat_ID`) REFERENCES `material` (`mat_ID`),
  CONSTRAINT `FK_substo-assign` FOREIGN KEY (`sub_store_ID`) REFERENCES `substore` (`sub_store_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of assignmaterial
-- ----------------------------
INSERT INTO `assignmaterial` VALUES ('S-009', 'Mat-001', '3', '2016-01-12');
INSERT INTO `assignmaterial` VALUES ('S-010', 'Mat-007', '2', '2015-06-30');
INSERT INTO `assignmaterial` VALUES ('S-400', 'Mat-007', '90', '2015-06-30');
INSERT INTO `assignmaterial` VALUES ('S-009', 'Mat-888', '100', '2015-06-19');

-- ----------------------------
-- Table structure for `material`
-- ----------------------------
DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `mat_ID` varchar(40) NOT NULL,
  `mat_name` varchar(40) default NULL,
  `mat_type` varchar(40) default NULL,
  `unit_price` float default NULL,
  `quantity` int(11) default NULL,
  PRIMARY KEY  (`mat_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of material
-- ----------------------------
INSERT INTO `material` VALUES ('Mat-001', 'Altrovicali Comfortable', 'Chair', '1000', '68');
INSERT INTO `material` VALUES ('Mat-007', 'Dell Desktop Core i8', 'Computer', '12000', '100');
INSERT INTO `material` VALUES ('Mat-888', 'Bravo Pasta', 'Food & Beverage', '32', '100');

-- ----------------------------
-- Table structure for `requestmaterial`
-- ----------------------------
DROP TABLE IF EXISTS `requestmaterial`;
CREATE TABLE `requestmaterial` (
  `req_no` smallint(6) NOT NULL auto_increment,
  `sub_store_ID` varchar(40) NOT NULL,
  `mat_ID` varchar(40) default NULL,
  `reqt_user` varchar(40) NOT NULL,
  `appv_user` varchar(40) default NULL,
  PRIMARY KEY  (`req_no`),
  KEY `FK_user-request` (`reqt_user`),
  KEY `FK_user-approve` (`appv_user`),
  KEY `FK_req-assign` (`sub_store_ID`,`mat_ID`),
  CONSTRAINT `FK_req-assign` FOREIGN KEY (`sub_store_ID`, `mat_ID`) REFERENCES `assignmaterial` (`sub_store_ID`, `mat_ID`),
  CONSTRAINT `FK_user-approve` FOREIGN KEY (`appv_user`) REFERENCES `user` (`user_name`),
  CONSTRAINT `FK_user-request` FOREIGN KEY (`reqt_user`) REFERENCES `user` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of requestmaterial
-- ----------------------------
INSERT INTO `requestmaterial` VALUES ('1', 'S-009', 'Mat-001', 'ashu', 'yihune');
INSERT INTO `requestmaterial` VALUES ('2', 'S-010', 'Mat-007', 'abebe', 'yihune');
INSERT INTO `requestmaterial` VALUES ('3', 'S-009', 'Mat-888', 'henimagna', 'yihune');

-- ----------------------------
-- Table structure for `substore`
-- ----------------------------
DROP TABLE IF EXISTS `substore`;
CREATE TABLE `substore` (
  `sub_store_ID` varchar(40) NOT NULL default '',
  `department` varchar(40) default NULL,
  `block` varchar(40) default NULL,
  PRIMARY KEY  (`sub_store_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of substore
-- ----------------------------
INSERT INTO `substore` VALUES ('S-001', 'Computing', 'B-508');
INSERT INTO `substore` VALUES ('S-003', '324', '234');
INSERT INTO `substore` VALUES ('S-009', 'Civil Engineering', '505');
INSERT INTO `substore` VALUES ('S-010', 'Mechanical Eng', '900');
INSERT INTO `substore` VALUES ('S-019', 'Sport Science', '102');
INSERT INTO `substore` VALUES ('S-400', 'Mechanical', '500');
INSERT INTO `substore` VALUES ('S-899', 'Yoyo', '467');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `first_name` varchar(40) default NULL,
  `last_name` varchar(40) default NULL,
  `sex` char(1) default NULL,
  `user_name` varchar(40) NOT NULL default '',
  `password` varchar(40) default NULL,
  `user_type` varchar(40) default NULL,
  `sub_store` varchar(40) default NULL,
  PRIMARY KEY  (`user_name`),
  KEY `FK_Sub-Store_User` (`sub_store`),
  CONSTRAINT `FK_Sub-Store_User` FOREIGN KEY (`sub_store`) REFERENCES `substore` (`sub_store_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('Abebe', 'Bekila', 'M', 'abebe', 'abe', 'Customer', 'S-010');
INSERT INTO `user` VALUES ('Agonafir', 'Aberber', 'M', 'Ago', 'ago', 'Main_Store', null);
INSERT INTO `user` VALUES ('asdfsdfsdffadssd', 'asdfsdafsdf', 'M', 'asdfdasdffasfsdf', 'sadfsdf', 'Admin', null);
INSERT INTO `user` VALUES ('Ashenafi', 'Duguma', 'M', 'ashu', 'ashu', 'Customer', 'S-009');
INSERT INTO `user` VALUES ('Asnakech', 'Fufa', 'F', 'Asnaku', 'asne', 'Main_Store', 'S-009');
INSERT INTO `user` VALUES ('Henok', 'Meskele', 'M', 'Heni', 'Heniye', 'Customer', null);
INSERT INTO `user` VALUES ('Henok', 'Meskele', 'M', 'henimagna', 'heni', 'Customer', 'S-009');
INSERT INTO `user` VALUES ('Kal', 'Solomon', 'F', 'Kal', 'masi', 'Customer', 'S-003');
INSERT INTO `user` VALUES ('Seble', 'Mekonnen', 'M', 'seblisweet', 'sweet', 'Admin', null);
INSERT INTO `user` VALUES ('Tinsae', 'Gizachew', 'M', 'tinsae', 'tinsu', 'Admin', null);
INSERT INTO `user` VALUES ('Yihunelegne', 'Eneyew', 'M', 'yihune', 'yihune', 'Keeper', 'S-009');
