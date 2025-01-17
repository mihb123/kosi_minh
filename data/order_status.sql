/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : godashop

 Target Server Type    : MariaDB
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 11/01/2025 16:23:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, 'ordered', 'Đã đặt hàng');
INSERT INTO `status` VALUES (2, 'confirmed', 'Đã xác nhận đơn hàng');
INSERT INTO `status` VALUES (3, 'packaged', 'Hoàn tất đóng gói');
INSERT INTO `status` VALUES (4, 'shipping', 'Đang giao hàng');
INSERT INTO `status` VALUES (5, 'deliveried', 'Đã giao hàng');
INSERT INTO `status` VALUES (6, 'canceled', 'Đơn hàng bị hủy');

SET FOREIGN_KEY_CHECKS = 1;
