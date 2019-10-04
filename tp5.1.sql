/*
 Navicat Premium Data Transfer

 Source Server         : demo_cn
 Source Server Type    : MySQL
 Source Server Version : 50644
 Source Host           : 192.168.10.132:3306
 Source Schema         : demo_cn

 Target Server Type    : MySQL
 Target Server Version : 50644
 File Encoding         : 65001

 Date: 04/10/2019 16:45:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for article_tag
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag`  (
  `aid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '文章ID',
  `tid` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '表签ID',
  PRIMARY KEY (`aid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cates_id` int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '分类id',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '用户id',
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desn` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '描述',
  `click` int(11) NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '文章表' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (10, 2, 0, '运营', '运营', 0, '运营', 1569059335, 1569059335, 0);
INSERT INTO `articles` VALUES (11, 3, 0, '职场', '职场', 0, '职场职场职场职场职场职场', 1569060220, 1569060220, 0);
INSERT INTO `articles` VALUES (12, 2, 4, '123', '123', 0, '123', 1569061479, 1569061479, 0);

-- ----------------------------
-- Table structure for cates
-- ----------------------------
DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT 0 COMMENT '上级ID',
  `cate_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '分类表 ' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cates
-- ----------------------------
INSERT INTO `cates` VALUES (1, 0, '科技');
INSERT INTO `cates` VALUES (2, 0, '运营');
INSERT INTO `cates` VALUES (3, 0, '职场');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'tags' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (1, '职场');
INSERT INTO `tags` VALUES (2, '学习');
INSERT INTO `tags` VALUES (3, 'PHP');
INSERT INTO `tags` VALUES (4, 'Java');
INSERT INTO `tags` VALUES (5, '运营');
INSERT INTO `tags` VALUES (6, 'H5');
INSERT INTO `tags` VALUES (7, '不知');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2147483647, 2147483647);
INSERT INTO `user` VALUES (9, 'admin05', '21232f297a57a5a743894a0e4a801fc3', 2147483647, 2147483647);
INSERT INTO `user` VALUES (10, 'admin05', '21232f297a57a5a743894a0e4a801fc3', 2147483647, 2147483647);

SET FOREIGN_KEY_CHECKS = 1;
