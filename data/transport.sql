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

 Date: 11/01/2025 16:26:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for transport
-- ----------------------------
DROP TABLE IF EXISTS `transport`;
CREATE TABLE `transport`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `province_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `transport_province_id`(`province_id`) USING BTREE,
  CONSTRAINT `transport_fk_1` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transport
-- ----------------------------
INSERT INTO `transport` VALUES (1, '01', 20000);
INSERT INTO `transport` VALUES (2, '02', 50000);
INSERT INTO `transport` VALUES (3, '04', 50000);
INSERT INTO `transport` VALUES (4, '06', 50000);
INSERT INTO `transport` VALUES (5, '08', 50000);
INSERT INTO `transport` VALUES (6, '10', 50000);
INSERT INTO `transport` VALUES (7, '11', 50000);
INSERT INTO `transport` VALUES (8, '12', 50000);
INSERT INTO `transport` VALUES (9, '14', 50000);
INSERT INTO `transport` VALUES (10, '15', 50000);
INSERT INTO `transport` VALUES (11, '17', 50000);
INSERT INTO `transport` VALUES (12, '19', 50000);
INSERT INTO `transport` VALUES (13, '20', 50000);
INSERT INTO `transport` VALUES (14, '22', 50000);
INSERT INTO `transport` VALUES (15, '24', 50000);
INSERT INTO `transport` VALUES (16, '25', 50000);
INSERT INTO `transport` VALUES (17, '26', 50000);
INSERT INTO `transport` VALUES (18, '27', 50000);
INSERT INTO `transport` VALUES (19, '30', 50000);
INSERT INTO `transport` VALUES (20, '31', 50000);
INSERT INTO `transport` VALUES (21, '33', 50000);
INSERT INTO `transport` VALUES (22, '34', 50000);
INSERT INTO `transport` VALUES (23, '35', 50000);
INSERT INTO `transport` VALUES (24, '36', 50000);
INSERT INTO `transport` VALUES (25, '37', 50000);
INSERT INTO `transport` VALUES (26, '38', 50000);
INSERT INTO `transport` VALUES (27, '40', 50000);
INSERT INTO `transport` VALUES (28, '42', 50000);
INSERT INTO `transport` VALUES (29, '44', 50000);
INSERT INTO `transport` VALUES (30, '45', 50000);
INSERT INTO `transport` VALUES (31, '46', 50000);
INSERT INTO `transport` VALUES (32, '48', 50000);
INSERT INTO `transport` VALUES (33, '49', 50000);
INSERT INTO `transport` VALUES (34, '51', 50000);
INSERT INTO `transport` VALUES (35, '52', 50000);
INSERT INTO `transport` VALUES (36, '54', 50000);
INSERT INTO `transport` VALUES (37, '56', 50000);
INSERT INTO `transport` VALUES (38, '58', 50000);
INSERT INTO `transport` VALUES (39, '60', 50000);
INSERT INTO `transport` VALUES (40, '62', 50000);
INSERT INTO `transport` VALUES (41, '64', 50000);
INSERT INTO `transport` VALUES (42, '66', 50000);
INSERT INTO `transport` VALUES (43, '67', 50000);
INSERT INTO `transport` VALUES (44, '68', 50000);
INSERT INTO `transport` VALUES (45, '70', 50000);
INSERT INTO `transport` VALUES (46, '72', 50000);
INSERT INTO `transport` VALUES (47, '74', 50000);
INSERT INTO `transport` VALUES (48, '75', 50000);
INSERT INTO `transport` VALUES (49, '77', 50000);
INSERT INTO `transport` VALUES (50, '79', 50000);
INSERT INTO `transport` VALUES (51, '80', 50000);
INSERT INTO `transport` VALUES (52, '82', 50000);
INSERT INTO `transport` VALUES (53, '83', 50000);
INSERT INTO `transport` VALUES (54, '84', 50000);
INSERT INTO `transport` VALUES (55, '86', 50000);
INSERT INTO `transport` VALUES (56, '87', 50000);
INSERT INTO `transport` VALUES (57, '89', 50000);
INSERT INTO `transport` VALUES (58, '91', 50000);
INSERT INTO `transport` VALUES (59, '92', 40000);
INSERT INTO `transport` VALUES (60, '93', 50000);
INSERT INTO `transport` VALUES (61, '94', 50000);
INSERT INTO `transport` VALUES (62, '95', 50000);
INSERT INTO `transport` VALUES (63, '96', 50000);

SET FOREIGN_KEY_CHECKS = 1;
