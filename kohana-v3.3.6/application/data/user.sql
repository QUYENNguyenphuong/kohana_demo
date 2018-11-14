/*
 Navicat Premium Data Transfer

 Source Server         : test9
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : begin_kohana

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 08/11/2018 10:37:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL DEFAULT NULL,
  `email` varchar(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

SET FOREIGN_KEY_CHECKS = 1;

ALTER TABLE `user`
  ADD COLUMN `phonenumber` varchar(100) NULL DEFAULT NULL,
  ADD COLUMN `birthday` DATE NULL DEFAULT NULL,
  ADD COLUMN `hobby` varchar(100) NULL DEFAULT NULL;
ALTER TABLE `user` CONVERT TO CHARACTER SET utf8mb4;