/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : godashop_k84

 Target Server Type    : MariaDB
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 31/12/2024 22:16:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for province
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province`  (
  `id` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES ('01', 'Thành phố Hà Nội', 'Thành phố Trung ương');
INSERT INTO `province` VALUES ('02', 'Tỉnh Hà Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('04', 'Tỉnh Cao Bằng', 'Tỉnh');
INSERT INTO `province` VALUES ('06', 'Tỉnh Bắc Kạn', 'Tỉnh');
INSERT INTO `province` VALUES ('08', 'Tỉnh Tuyên Quang', 'Tỉnh');
INSERT INTO `province` VALUES ('10', 'Tỉnh Lào Cai', 'Tỉnh');
INSERT INTO `province` VALUES ('11', 'Tỉnh Điện Biên', 'Tỉnh');
INSERT INTO `province` VALUES ('12', 'Tỉnh Lai Châu', 'Tỉnh');
INSERT INTO `province` VALUES ('14', 'Tỉnh Sơn La', 'Tỉnh');
INSERT INTO `province` VALUES ('15', 'Tỉnh Yên Bái', 'Tỉnh');
INSERT INTO `province` VALUES ('17', 'Tỉnh Hoà Bình', 'Tỉnh');
INSERT INTO `province` VALUES ('19', 'Tỉnh Thái Nguyên', 'Tỉnh');
INSERT INTO `province` VALUES ('20', 'Tỉnh Lạng Sơn', 'Tỉnh');
INSERT INTO `province` VALUES ('22', 'Tỉnh Quảng Ninh', 'Tỉnh');
INSERT INTO `province` VALUES ('24', 'Tỉnh Bắc Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('25', 'Tỉnh Phú Thọ', 'Tỉnh');
INSERT INTO `province` VALUES ('26', 'Tỉnh Vĩnh Phúc', 'Tỉnh');
INSERT INTO `province` VALUES ('27', 'Tỉnh Bắc Ninh', 'Tỉnh');
INSERT INTO `province` VALUES ('30', 'Tỉnh Hải Dương', 'Tỉnh');
INSERT INTO `province` VALUES ('31', 'Thành phố Hải Phòng', 'Thành phố Trung ương');
INSERT INTO `province` VALUES ('33', 'Tỉnh Hưng Yên', 'Tỉnh');
INSERT INTO `province` VALUES ('34', 'Tỉnh Thái Bình', 'Tỉnh');
INSERT INTO `province` VALUES ('35', 'Tỉnh Hà Nam', 'Tỉnh');
INSERT INTO `province` VALUES ('36', 'Tỉnh Nam Định', 'Tỉnh');
INSERT INTO `province` VALUES ('37', 'Tỉnh Ninh Bình', 'Tỉnh');
INSERT INTO `province` VALUES ('38', 'Tỉnh Thanh Hóa', 'Tỉnh');
INSERT INTO `province` VALUES ('40', 'Tỉnh Nghệ An', 'Tỉnh');
INSERT INTO `province` VALUES ('42', 'Tỉnh Hà Tĩnh', 'Tỉnh');
INSERT INTO `province` VALUES ('44', 'Tỉnh Quảng Bình', 'Tỉnh');
INSERT INTO `province` VALUES ('45', 'Tỉnh Quảng Trị', 'Tỉnh');
INSERT INTO `province` VALUES ('46', 'Tỉnh Thừa Thiên Huế', 'Tỉnh');
INSERT INTO `province` VALUES ('48', 'Thành phố Đà Nẵng', 'Thành phố Trung ương');
INSERT INTO `province` VALUES ('49', 'Tỉnh Quảng Nam', 'Tỉnh');
INSERT INTO `province` VALUES ('51', 'Tỉnh Quảng Ngãi', 'Tỉnh');
INSERT INTO `province` VALUES ('52', 'Tỉnh Bình Định', 'Tỉnh');
INSERT INTO `province` VALUES ('54', 'Tỉnh Phú Yên', 'Tỉnh');
INSERT INTO `province` VALUES ('56', 'Tỉnh Khánh Hòa', 'Tỉnh');
INSERT INTO `province` VALUES ('58', 'Tỉnh Ninh Thuận', 'Tỉnh');
INSERT INTO `province` VALUES ('60', 'Tỉnh Bình Thuận', 'Tỉnh');
INSERT INTO `province` VALUES ('62', 'Tỉnh Kon Tum', 'Tỉnh');
INSERT INTO `province` VALUES ('64', 'Tỉnh Gia Lai', 'Tỉnh');
INSERT INTO `province` VALUES ('66', 'Tỉnh Đắk Lắk', 'Tỉnh');
INSERT INTO `province` VALUES ('67', 'Tỉnh Đắk Nông', 'Tỉnh');
INSERT INTO `province` VALUES ('68', 'Tỉnh Lâm Đồng', 'Tỉnh');
INSERT INTO `province` VALUES ('70', 'Tỉnh Bình Phước', 'Tỉnh');
INSERT INTO `province` VALUES ('72', 'Tỉnh Tây Ninh', 'Tỉnh');
INSERT INTO `province` VALUES ('74', 'Tỉnh Bình Dương', 'Tỉnh');
INSERT INTO `province` VALUES ('75', 'Tỉnh Đồng Nai', 'Tỉnh');
INSERT INTO `province` VALUES ('77', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh');
INSERT INTO `province` VALUES ('79', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương');
INSERT INTO `province` VALUES ('80', 'Tỉnh Long An', 'Tỉnh');
INSERT INTO `province` VALUES ('82', 'Tỉnh Tiền Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('83', 'Tỉnh Bến Tre', 'Tỉnh');
INSERT INTO `province` VALUES ('84', 'Tỉnh Trà Vinh', 'Tỉnh');
INSERT INTO `province` VALUES ('86', 'Tỉnh Vĩnh Long', 'Tỉnh');
INSERT INTO `province` VALUES ('87', 'Tỉnh Đồng Tháp', 'Tỉnh');
INSERT INTO `province` VALUES ('89', 'Tỉnh An Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('91', 'Tỉnh Kiên Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('92', 'Thành phố Cần Thơ', 'Thành phố Trung ương');
INSERT INTO `province` VALUES ('93', 'Tỉnh Hậu Giang', 'Tỉnh');
INSERT INTO `province` VALUES ('94', 'Tỉnh Sóc Trăng', 'Tỉnh');
INSERT INTO `province` VALUES ('95', 'Tỉnh Bạc Liêu', 'Tỉnh');
INSERT INTO `province` VALUES ('96', 'Tỉnh Cà Mau', 'Tỉnh');

SET FOREIGN_KEY_CHECKS = 1;
