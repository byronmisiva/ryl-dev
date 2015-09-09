/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50527
 Source Host           : 127.0.0.1
 Source Database       : royal

 Target Server Type    : MySQL
 Target Server Version : 50527
 File Encoding         : utf-8

 Date: 09/09/2015 18:12:57 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `royal_ruleta_premios`
-- ----------------------------
DROP TABLE IF EXISTS `royal_ruleta_premios`;
CREATE TABLE `royal_ruleta_premios` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(150) DEFAULT NULL,
	`creado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=`InnoDB` AUTO_INCREMENT=6 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ROW_FORMAT=COMPACT COMMENT='' CHECKSUM=0 DELAY_KEY_WRITE=0;

-- ----------------------------
--  Records of `royal_ruleta_premios`
-- ----------------------------
BEGIN;
INSERT INTO `royal_ruleta_premios` VALUES ('1', 'Ninguno', '2015-09-09 11:26:26'), ('2', 'Camiseta', '2015-09-09 11:26:30'), ('3', 'Tomatodo', '2015-09-09 11:26:36'), ('4', 'Canasta Premios', '2015-09-09 11:26:43'), ('5', 'Gorra', '2015-09-09 11:30:18');
COMMIT;

-- ----------------------------
--  Table structure for `royal_ruleta_serial`
-- ----------------------------
DROP TABLE IF EXISTS `royal_ruleta_serial`;
CREATE TABLE `royal_ruleta_serial` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`codigo` varchar(30) DEFAULT NULL,
	`id_premio` int(11) DEFAULT NULL,
	`id_usuario` int(11) DEFAULT NULL,
	`fecha_ganador` timestamp NULL DEFAULT NULL,
	`creado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=`InnoDB` AUTO_INCREMENT=4 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ROW_FORMAT=COMPACT COMMENT='' CHECKSUM=0 DELAY_KEY_WRITE=0;

-- ----------------------------
--  Records of `royal_ruleta_serial`
-- ----------------------------
BEGIN;
INSERT INTO `royal_ruleta_serial` VALUES ('1', 'aaa', '1', null, null, '2015-09-09 11:28:58'), ('2', 'bbb', '2', null, null, '2015-09-09 11:31:00'), ('3', 'ccc', '1', null, null, '2015-09-09 11:31:06');
COMMIT;

-- ----------------------------
--  Table structure for `royal_usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `royal_usuarios`;
CREATE TABLE `royal_usuarios` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(100) NOT NULL,
	`apellido` varchar(100) NOT NULL,
	`completo` varchar(200) NOT NULL,
	`mail` varchar(200) DEFAULT NULL,
	`fbid` varchar(100) NOT NULL,
	`genero` varchar(10) DEFAULT NULL,
	`ultima_app` varchar(100) NOT NULL,
	`creado` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`ultima` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`ciudad` varchar(100) DEFAULT NULL,
	`cedula` varchar(20) DEFAULT NULL,
	`telefono` varchar(20) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=`MyISAM` AUTO_INCREMENT=3 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ROW_FORMAT=DYNAMIC COMMENT='' CHECKSUM=0 DELAY_KEY_WRITE=0;

-- ----------------------------
--  Records of `royal_usuarios`
-- ----------------------------
BEGIN;
INSERT INTO `royal_usuarios` VALUES ('2', 'Byron', 'Avalos', 'Byron Avalos', 'herrera.byron@gmail.com', '', null, 'Ruleta 2015', '2015-09-09 16:38:52', '0000-00-00 00:00:00', 'Quito', '1711080893', '0995826545');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
