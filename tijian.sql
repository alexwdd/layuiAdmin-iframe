/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tijian

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-04-29 00:15:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pm_access`
-- ----------------------------
DROP TABLE IF EXISTS `pm_access`;
CREATE TABLE `pm_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `groupId` (`role_id`) USING BTREE,
  KEY `nodeId` (`node_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_access
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_ad`
-- ----------------------------
DROP TABLE IF EXISTS `pm_ad`;
CREATE TABLE `pm_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `sort` int(11) NOT NULL COMMENT '排序',
  `createTime` int(10) NOT NULL,
  `updateTime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_ad
-- ----------------------------
INSERT INTO `pm_ad` VALUES ('2', '9', '0-9-', '第二张', '/uploads/images/20181211/16750062b135812bc488dfa93d9434d6.jpg', 'http://', '1', '1539260174', '1556366573');
INSERT INTO `pm_ad` VALUES ('3', '9', '0-9-', '第三张', '/uploads/images/20181211/8bbbdfc6cdad481c9a27e0289cc98704.jpg', 'http://', '1', '1540465928', '1556366567');

-- ----------------------------
-- Table structure for `pm_article`
-- ----------------------------
DROP TABLE IF EXISTS `pm_article`;
CREATE TABLE `pm_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `short` varchar(200) NOT NULL,
  `from` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `keyword` varchar(300) NOT NULL,
  `comm` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `flash` int(11) NOT NULL,
  `bold` int(11) NOT NULL,
  `red` int(11) NOT NULL,
  `intr` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `hit` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL,
  `editer` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0草稿1正常',
  `del` tinyint(4) NOT NULL COMMENT '0正常1删除',
  `updateTime` int(10) NOT NULL,
  `createTime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_article
-- ----------------------------
INSERT INTO `pm_article` VALUES ('27', '2', '0-2-', '华电团级供应商会员', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/a807d58ca10c35a74fee5a98ea704158.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '57', '0', 'admin', '2019', '1', '0', '1555393748', '1555344000');
INSERT INTO `pm_article` VALUES ('28', '2', '0-2-', '中国大唐集团供应商证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/d03680c40ee8d3ed685d655a36440059.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '85', '0', 'admin', '2019', '1', '0', '1555393774', '1555344000');
INSERT INTO `pm_article` VALUES ('29', '2', '0-2-', '重合同守信用', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/3b0b2beeecf5723f45391091c5b57cd9.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '32', '0', 'admin', '2019', '1', '0', '1555393803', '1555344000');
INSERT INTO `pm_article` VALUES ('30', '2', '0-2-', '中国著名品牌', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/1527f7853b34ef36ed32238d7b59311e.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '52', '0', 'admin', '2019', '1', '0', '1555393840', '1555344000');
INSERT INTO `pm_article` VALUES ('31', '2', '0-2-', '质量证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/b8111608eec68e477591af2415243e6f.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '76', '0', 'admin', '2019', '1', '0', '1555393876', '1555344000');
INSERT INTO `pm_article` VALUES ('32', '2', '0-2-', '五一劳动奖状', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/55d274247e234e4654730fae646b6289.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '58', '0', 'admin', '2019', '1', '0', '1555393937', '1555344000');
INSERT INTO `pm_article` VALUES ('33', '2', '0-2-', '高新技术企业', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/4d30da2d7a8da33e593de56a6b87259d.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '42', '0', 'admin', '2019', '1', '0', '1555393965', '1555344000');
INSERT INTO `pm_article` VALUES ('34', '2', '0-2-', '十佳单位', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/ea484e38207f501312b52c06ed4bfc51.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '99', '0', 'admin', '2019', '1', '0', '1555393990', '1555344000');
INSERT INTO `pm_article` VALUES ('35', '2', '0-2-', '3A信用等级证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/5207931be9f6d4d35b2e031e2d9c3d2c.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '20', '0', 'admin', '2019', '1', '0', '1555394030', '1555344000');
INSERT INTO `pm_article` VALUES ('36', '2', '0-2-', 'CFW 1600A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/9433389758751bfe3f99e233c996dd65.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '48', '0', 'admin', '2019', '1', '0', '1555394156', '1555344000');
INSERT INTO `pm_article` VALUES ('37', '2', '0-2-', 'MNS 2500A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/18eade7c92757bd1d815808ec377f956.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '37', '0', 'admin', '2019', '1', '0', '1555394205', '1555344000');
INSERT INTO `pm_article` VALUES ('38', '2', '0-2-', 'GCS 2500A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/9f3c23ca9da2144256e94abe97ab85da.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '14', '0', 'admin', '2019', '1', '0', '1555394231', '1555344000');
INSERT INTO `pm_article` VALUES ('39', '2', '0-2-', 'GCS 4000A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/a219d9385270a87d8f1fda3463a095ee.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '71', '0', 'admin', '2019', '1', '0', '1555394268', '1555344000');
INSERT INTO `pm_article` VALUES ('40', '2', '0-2-', 'GCK 2500A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/9079ea0a48aeb798a8bbb721a7634a66.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '70', '0', 'admin', '2019', '1', '0', '1555394287', '1555344000');
INSERT INTO `pm_article` VALUES ('41', '2', '0-2-', 'GCK 6300A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/e8a8c17caee34fc898e0301605535563.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '10', '0', 'admin', '2019', '1', '0', '1555394315', '1555344000');
INSERT INTO `pm_article` VALUES ('42', '2', '0-2-', 'GGJ 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/c71fb9a1f947b95d1f238ef42e44eb9f.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '55', '0', 'admin', '2019', '1', '0', '1555394343', '1555344000');
INSERT INTO `pm_article` VALUES ('43', '2', '0-2-', 'GGD 630-1600A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/217ddc4d370749293aa4a65cf53c1b90.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '44', '0', 'admin', '2019', '1', '0', '1555394371', '1555344000');
INSERT INTO `pm_article` VALUES ('44', '2', '0-2-', 'GGD3 4000A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/5846a9eed00a6012adeefc04f5e8f02c.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '86', '0', 'admin', '2019', '1', '0', '1555394421', '1555344000');
INSERT INTO `pm_article` VALUES ('45', '2', '0-2-', 'GGD 6300A 3C证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/f10a7497059ddfb0713219b8a9d12ef5.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '45', '0', 'admin', '2019', '1', '0', '1555394456', '1555344000');
INSERT INTO `pm_article` VALUES ('46', '2', '0-2-', 'YBM9-1250 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/070eabd544d2419cd38c828500890504.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '12', '0', 'admin', '2019', '1', '0', '1555394488', '1555344000');
INSERT INTO `pm_article` VALUES ('47', '2', '0-2-', 'YBM9-630 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/aee70861178ff570a91c18f974414764.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '13', '0', 'admin', '2019', '1', '0', '1555394513', '1555344000');
INSERT INTO `pm_article` VALUES ('48', '2', '0-2-', 'KYN61-40.5 CQM证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/6a3f7545eeb51645c52ddec4e9acac07.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '85', '0', 'admin', '2019', '1', '0', '1555394548', '1555344000');
INSERT INTO `pm_article` VALUES ('49', '2', '0-2-', 'HXGN15-12 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/da498a3c6028b91cf8d5578d250fbf29.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '64', '0', 'admin', '2019', '1', '0', '1555394578', '1555344000');
INSERT INTO `pm_article` VALUES ('50', '2', '0-2-', 'HXGN-12-630 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/34611c4babd235137975584b3656e4e1.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '33', '0', 'admin', '2019', '1', '0', '1555394605', '1555344000');
INSERT INTO `pm_article` VALUES ('51', '2', '0-2-', 'KYN28-1250 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/f75dcf3f18cd006595d7a581a5c20e8a.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '91', '0', 'admin', '2019', '1', '0', '1555394631', '1555344000');
INSERT INTO `pm_article` VALUES ('52', '2', '0-2-', 'KYN28A-4000 CQC证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/9acdbf32ab1831fffe03da0ff59e4f7f.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '32', '0', 'admin', '2019', '1', '0', '1555394658', '1555344000');
INSERT INTO `pm_article` VALUES ('53', '2', '0-2-', '健康管理体系认证证书中文', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/a69997e7f44a0e63163a11ef7409e0c1.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '11', '0', 'admin', '2019', '1', '0', '1555394709', '1555344000');
INSERT INTO `pm_article` VALUES ('54', '2', '0-2-', '健康管理体系认证证书英文', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/d665f5f4cdbece877d86a35f8d956fe1.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '53', '0', 'admin', '2019', '1', '0', '1555394735', '1555344000');
INSERT INTO `pm_article` VALUES ('55', '2', '0-2-', '环境管理体系认证证书中文', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/fb05bbd422101e9c5b5371a63e9dde50.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '66', '0', 'admin', '2019', '1', '0', '1555394761', '1555344000');
INSERT INTO `pm_article` VALUES ('56', '2', '0-2-', '环境管理体系认证证书英文', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/b8371277a4baccfac57191cf2896f760.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '63', '0', 'admin', '2019', '1', '0', '1555394794', '1555344000');
INSERT INTO `pm_article` VALUES ('57', '2', '0-2-', '质量管理体系认证证书中文', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/1fa048f69759cefa3c524771dd0dac8a.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '43', '0', 'admin', '2019', '1', '0', '1555394821', '1555344000');
INSERT INTO `pm_article` VALUES ('58', '3', '0-3-', '郑州聆湖变电站', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/b1e3a635bfb2ae3892b7b7b2af36ee99.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '65', '0', 'admin', '2019', '1', '0', '1555394959', '1555344000');
INSERT INTO `pm_article` VALUES ('59', '3', '0-3-', '郑州郑东新区龙湖南区', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/f55b031cf14ec1e34c2e9fb14863cd34.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '55', '0', 'admin', '2019', '1', '0', '1555394983', '1555344000');
INSERT INTO `pm_article` VALUES ('60', '3', '0-3-', '郑州金水检查院', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/13c2f250ff9bdddfcb39f103d4bceac7.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '42', '0', 'admin', '2019', '1', '0', '1555395010', '1555344000');
INSERT INTO `pm_article` VALUES ('61', '3', '0-3-', '郑州天地湾', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/2c424a09f0e5882b05e3dcb15bb4dbc8.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '65', '0', 'admin', '2019', '1', '0', '1555395036', '1555344000');
INSERT INTO `pm_article` VALUES ('62', '3', '0-3-', '宋城雅居', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/ea710b4e25633b2a21d6417e58f1eea0.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '62', '0', 'admin', '2019', '1', '0', '1555395063', '1555344000');
INSERT INTO `pm_article` VALUES ('63', '3', '0-3-', '商丘污水处理厂', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/eeb26f053208890c72e6c3379409e98a.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '65', '0', 'admin', '2019', '1', '0', '1555395086', '1555344000');
INSERT INTO `pm_article` VALUES ('64', '3', '0-3-', '清明上河园', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/a59885dfe01941d68b2c7b7b426e73d4.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '38', '0', 'admin', '2019', '1', '0', '1555395113', '1555344000');
INSERT INTO `pm_article` VALUES ('65', '3', '0-3-', '平煤集团东大化工', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/b8764b14bcccaae312b26cca05fd33f3.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '73', '0', 'admin', '2019', '1', '0', '1555395137', '1555344000');
INSERT INTO `pm_article` VALUES ('66', '3', '0-3-', '平顶山鸿祥热电力有限公司', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/96dc406d2a51dd84d480f230e6efaf43.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '49', '0', 'admin', '2019', '1', '0', '1555395162', '1555344000');
INSERT INTO `pm_article` VALUES ('67', '3', '0-3-', '南阳蒲山电厂', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/35ef303206c7d4bcaadc9b0c0bec1e52.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '33', '0', 'admin', '2019', '1', '0', '1555395187', '1555344000');
INSERT INTO `pm_article` VALUES ('68', '3', '0-3-', '南阳农民运动会', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/ef992abf0304e68c59b70d98c3af17ab.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '1', '0', 'admin', '2019', '1', '0', '1555395219', '1555344000');
INSERT INTO `pm_article` VALUES ('69', '3', '0-3-', '开封市第一人民医院', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/e64ca45461252140641debea03e9307a.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '21', '0', 'admin', '2019', '1', '0', '1555395244', '1555344000');
INSERT INTO `pm_article` VALUES ('70', '3', '0-3-', '精细化工厂', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/0f1c6e2c13a4224a366847a987d06288.gif', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '27', '0', 'admin', '2019', '1', '0', '1555395270', '1555344000');
INSERT INTO `pm_article` VALUES ('71', '3', '0-3-', '华北水利水电学院', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/e7b5b1e8f8dc468ce64607f0f9cc0c66.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '13', '0', 'admin', '2019', '1', '0', '1555395302', '1555344000');
INSERT INTO `pm_article` VALUES ('72', '3', '0-3-', '河南中医学院', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/43a17cf39aa90493922ecd7102b39c25.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '47', '0', 'admin', '2019', '1', '0', '1555395330', '1555344000');
INSERT INTO `pm_article` VALUES ('73', '3', '0-3-', '广西北海诚德镍业有限公司', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/1bedff5f863d259c3e7e0f4141e7f39c.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '34', '0', 'admin', '2019', '1', '0', '1555395356', '1555344000');
INSERT INTO `pm_article` VALUES ('74', '3', '0-3-', '电厂工程', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/ce5f295ba24160bae9c31a2f2efba30e.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '11', '0', 'admin', '2019', '1', '0', '1555395384', '1555344000');
INSERT INTO `pm_article` VALUES ('75', '3', '0-3-', '大唐灞桥热电厂', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/d0c2c07a49f5ba9f0b510dc855b39937.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '24', '0', 'admin', '2019', '1', '0', '1555395413', '1555344000');
INSERT INTO `pm_article` VALUES ('76', '3', '0-3-', '景观式箱变', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/cd4014923549276fe420db46b2d0edad.jpg', '', '0', '0', '0', '0', '0', '文章正文', '<p>文章正文123123</p>', '44', '0', 'admin', '2019', '1', '0', '1556433339', '1556380800');
INSERT INTO `pm_article` VALUES ('77', '11', '0-4-11-', '密集型母线槽', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/b93392d2f0631dadae7595de877ec36c.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '94', '0', 'admin', '2019', '1', '0', '1555395507', '1555344000');
INSERT INTO `pm_article` VALUES ('78', '11', '0-4-11-', '配电箱', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/85d8e4afb5b71a17f0bdd11765aa2e9b.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '78', '0', 'admin', '2019', '1', '0', '1555395535', '1555344000');
INSERT INTO `pm_article` VALUES ('79', '11', '0-4-11-', '试验设备', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/50c0d57cf0d65b3dca5221840b1495d7.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '97', '0', 'admin', '2019', '1', '0', '1555395562', '1555344000');
INSERT INTO `pm_article` VALUES ('80', '9', '0-4-9-', '低压抽出式开关柜GCK', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/08afc6bb60647b4f9b732205c0671bc8.jpg', '', '0', '0', '0', '0', '0', '一、概述：GCK交流低压抽出式开关柜是一种组合式成套装备，它是由动力配电中心（PC）和电动机控制中心（MCC）二部分组合而成，同一柜体的功能单元并联在垂直母线上，柜体分为水平母线区、处置母线区、电缆区和元件安装区等四个互相隔离的区域。各功能单元分别安装在小室内，当任何一个功能单元发生故障时，均不影响…', '<p><strong>一、 概述：</strong></p><p>GCK交流低压抽出式开关柜是一种组合式成套装备，它是由动力配电中心（PC）和电动机控制中心（MCC）二部分组合而成，同一柜体的功能单元并联在垂直母线上，柜体分为水平母线区、处置母线区、电缆区和元件安装区等四个互相隔离的区域。各功能单元分别安装在小室内，当任何一个功能单元发生故障时，均不影响其它单元，可以防止事故的进一步扩大。同时可根据需要设置一定数量的备用单元。当某单元故障检修时，可将故障单元抽出，再将备用单元投入，提高了供电的连续性和可靠性。GCK系比较高级型抽屉式低压成套开关柜，它由一个或多个封闭的控制柜组成。</p><p><strong>二、 使用范围</strong></p><p>产品适用于电站，石油，化工、冶金、纺织、高层建筑等供电连续性要求高的场合，用于额定电压380V，额定频率50-60Hz的三相三线或三相四线系统作为配电、动力、照明和电动机控制保护用等。</p><p><strong>三、 使用条件</strong></p><p>1、海拔高度不大于2000m；</p><p><span style=\"text-indent: 2em;\">2、环境温度-50℃～＋40℃，且24h内平均温度不高于35℃；</span></p><p>3、相对湿度在＋40℃时不大于50%，在较低温度时可允许有较大的相对湿度，允许有由于温度变化而偶然出现的凝露；</p><p>4、无导电尘埃及化学腐蚀气体、无水灾、爆炸危险、无剧烈震动和冲击的场所。</p><p>四、本公司GCK低压柜按以下标准生产和制造：</p><p>GCK型低压抽出成套开关柜按国际电工委员会IEC439及NEMAICS2-322制造标准制造，满足国际电工委员会IEC标准和国家GB标准及DL行业标准的要求，符合如下要求。</p><p>IEC255-5&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 绝缘电压、冲击耐压测试</p><p>IEC255-6&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 高频干扰电压测试</p><p>IEC529&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 防护等级</p><p>IEC-255-22-2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 静电放电试验</p><p>IEC-225-22-4&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 快速瞬变干扰试验</p><p>GB50171-92&nbsp; &nbsp; &nbsp; 《电气装置安装工作盘、柜及二次回路接线施工及验收规范》</p><p>GB6162&nbsp; &nbsp; &nbsp; &nbsp; 静态继电器和保护装置的电气干扰试验</p><p>GB14285-93&nbsp; &nbsp; &nbsp;继电保护和安全自动装置技术规程</p><p>GB7251.1-1997 《低压成套开关设备》：</p><p>GB14048.1—94 《低压开关设备和控制设备 总则》</p><p>GB14048.2—94 《低压开关设备和控制设备低压断路器》</p><p>GB14048.3—93&nbsp; &nbsp; 《低压开关设备和控制设备低压断路器 低压开关、隔离器、隔离开关及熔断器组合电器》</p><p>GB14048.4 -94&nbsp; &nbsp; 《低压开关设备和控制设备 低压机电式接触器和电动机启动器》</p><p>GB14048.5-94&nbsp; &nbsp;《低压开关设备和控制设备 控制电路电器和开关元件 第一部分 低压机电式控制电路电器》</p><p>GB4942.2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;《低压电器外壳防护等级》</p><p>GB3047&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;《面板、架和柜的基本尺寸》</p><p>GB2423.1-GB2423.2《电工电子产品基本环境试验规程》</p><p>GB2423.4&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;《电工电子产品基本环境试验规程》</p><p>GB9466&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;《低压成套开关设备基本试验方法》</p><p>GB4205&nbsp; &nbsp; &nbsp; &nbsp; 《控制电气设备的操作件标准运动方向》</p><p>GB2681&nbsp; &nbsp; &nbsp; &nbsp; 《电工成套装置中的导线颜色》&nbsp;</p><p>DL404-91&nbsp; &nbsp; &nbsp; 《户内交流开关柜订货技术条件》</p><p>CECS49-93&nbsp; &nbsp; &nbsp; 《低压成套开关柜设备验收规程》</p><p><strong>五 主要结构特点：</strong></p><p>1、 按使用功能分类：进线柜、母联柜、电容补偿柜、双电源切换柜、馈电柜、控制柜等。</p><p>2、 主要组成部分：柜体、柜门、仪表门、底板、层板、顶盖、母排、电器元件、抽屉单元、一次接插件、二次接插件、母线夹、绝缘支撑件、功能隔离板、辅材等。</p><p><span style=\"text-indent: 2em;\">3、 本系列产品采用组合装配式结构，框架的全部结构件通过标准件连接成基本框架，再按需要加门，抽屉，隔板等零件。单元为抽屉式叠装于金属封闭的柜体隔室内，防护等级不低于IP40。</span></p><p>4、 基本骨架采用异型钢，用连接板、角板和螺栓组装而成，避免了焊接应力和变形，提高了安装精度，按E=25mm模板开孔，可自由拼装组合。</p><p><span style=\"text-indent: 2em;\">5、 开关柜用已接地的金属板分成母线、功能单元、电缆三个隔室：前部为功能单元隔室，电缆室位于柜的后部左侧，水平母线（主母线）装于柜顶部的母线室内，水平平置排列，零母线装于柜顶部（或柜后底部），垂直（或水平）排列。垂直母线采用防护等级不低于IP40的通风金属板外罩封闭，位于柜的后部右侧，各功能单元相对独立。水平母线采用隔板加以隔离，垂直母线引入母线盒内，保证了最大的安全性。</span><br/></p><p><span style=\"text-indent: 2em;\">6、 柜体的上、下部设有通风孔及敲落孔，必要时配有网板，便于散热和电缆的进出线。</span><br/></p><p><span style=\"text-indent: 2em;\">7、 每个功能单元高度为8E=200mm，根据电流大小，可占用200，300，400，500，600mm等单元高度，亦可占用8E/2单元。全柜最多可安装9个抽屉1单元或18个1/2抽屉单元。</span><br/></p><p><span style=\"text-indent: 2em;\">8、 抽屉功能单元具有五个位置，连接、试验、断开，合闸，分闸五个明显位置。抽屉单元面板上具有分、合，试验，抽出，断开等位置的明显标志，并具有机械连锁，只有在开关分断时，隔室门才能打开，同类型的抽屉具有良好的互换性。</span><br/></p><p><span style=\"text-indent: 2em;\">9、 柜顶四角装有吊物环，便于起吊。</span></p><p>10、具有较高的分断能力，采用了性能先进的框架式开关，使系统的分断能力达到80KA。</p><p><span style=\"text-indent: 2em;\">11、整个系列采用具有模数为20mm的薄壁异型钢材组成骨架，重量轻，强度大，可利用的功能单元的有效高度为1840mm，所有抽屉元件均可以正面维修。</span><br/></p><p><span style=\"text-indent: 2em;\">12、 GCK具有较高的载流量，水平母线电流可达6300A。</span><br/></p><p><span style=\"text-indent: 2em;\">13、 新颖的控制板，指示灯、按钮、电流表可安装在抽屉门上，接触器等元件可在面板上或远方操作。</span><br/></p><p><span style=\"text-indent: 2em;\">14、更完美的操作机构，采用的操作机构具有如下功能</span><br/></p><p>1）、具有联锁作用：断路器合闸，门不能打开，断路器断开，门才能打开。</p><p>2）、可采用挂锁锁住操作机构，保证断路器不能随意操作。</p><p><span style=\"text-indent: 2em;\">3），抽屉抽出后，具备防“脱落”功能</span><br/></p><p><span style=\"text-indent: 2em;\">15、 电气性能更趋完善</span><br/></p><p>1）、主电路采用了ME、AH、3WE等框架式断路器，QSA熔断器式负荷开关，3TB系列接触器，3UA热继电器等，使功能更完善，性能更可靠，更安全。</p><p>2）、电缆采用耐高温阻燃型电缆，主，辅回路插件采用国内知名厂家的名牌产品，保证了连接的可靠性。</p><p>3）、控制回路具有就地、远方、自动和就地、远方切换等功能，各种电气参数可以远传到控制的地方。</p><p><strong>六、 主要的技术参数</strong></p><p>根据系统容量和开关大小，柜体宽度有600、800、1000、1200mm，柜体深度为600，800，1000mm，柜体高度为2200mm。<span style=\"text-indent: 2em;\">&nbsp;</span></p><p><span style=\"text-indent: 2em;\"></span></p><table cellspacing=\"0\" cellpadding=\"0\" width=\"709\"><tbody style=\"padding: 0px; margin: 0px;\"><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\" class=\"firstRow\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-width: 1pt; border-color: black; background-color: transparent;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">序号</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: black black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: 1pt; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">项目</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: black black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: 1pt; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">单位</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: black black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: 1pt; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">数据</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">1</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定绝缘电压</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">V</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">660</span><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">（1000）</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">2</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定工作电压</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">V</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">380</span><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">（400）,（660）</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">3</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定频率</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">HZ</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">50(60)</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">4</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">工频耐压</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">V/1min</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">2500,3000</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 16.5pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">5</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">控制电动机容量</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">KW</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"16\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">0.52~155(380V)</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 17.25pt;\"><td valign=\"top\" rowspan=\"2\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">6</span></p></td><td valign=\"top\" rowspan=\"2\" width=\"100\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定电流</span></p></td><td valign=\"top\" width=\"196\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">水平母线</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">A</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">6300</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 17.25pt;\"><td valign=\"top\" width=\"196\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">垂直母线</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">A</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">630</span><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">、1000、1600</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 17.25pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">7</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定短时耐受电流（1S）</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">KA</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">15,30,50</span><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">，80</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 17.25pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">8</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">额定峰值耐受电流</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">KA</span></p></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">105</span><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">，176</span></p></td></tr><tr style=\"padding: 0px; margin: 0px; height: 17.25pt;\"><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black; border-left-width: 1pt; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">9</span></p></td><td valign=\"top\" width=\"312\" colspan=\"2\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p>&nbsp;<span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">防护等级</span></p></td><td valign=\"top\" width=\"93\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><br/></td><td valign=\"top\" width=\"149\" style=\"padding: 0cm 5.4pt; margin: 0px; line-height: 19px; border-bottom-width: 1pt; border-color: rgb(212, 208, 200) black black rgb(212, 208, 200); border-left-width: initial; border-left-style: initial; background-color: transparent; border-top-width: initial; border-top-style: initial; border-right-width: 1pt;\" height=\"17\"><p><span style=\"padding: 0px; margin: 0px; font-size: 12pt;\">IP40</span></p></td></tr></tbody></table><p><strong style=\"text-indent: 2em;\">七、用户使用率</strong><span style=\"text-indent: 2em;\">：用户在选用抽屉柜中，经常使用GCK，因为GCK柜型比较高档、实用、美观，而且价格比同类产品如MNS，GCS便宜。可以说GCK的使用率能达到70%以上。</span><br/><span style=\"text-indent: 2em;\"></span></p><p><strong>八、产品合格率</strong>：我公司的产品一经出厂，产品合格率必为99.99%以上，否则不允许出厂。</p><p><span style=\"text-indent: 2em;\">低压开关柜GCK的技术描述</span></p><p>一、 型号说明</p><p>■ 柜型型号各位数字含意</p><p><img src=\"/uploads/images/20190416/5511600b4960677c53d91ded1573f096.jpg\" title=\"01.jpg\" alt=\"01.jpg\"/></p><p>二、概述</p><p>1.1本技术文件中的所有技术内容，技术参数，采用的标准及所选用的设备和材料符合招标书的要求。</p><p>1.2开关柜适用于发电厂，变电所，石油化工冶金，厂矿企业，高层建筑等低压配电系统的动配电系统的动力配电和电动机控制中心，电容补偿等电能转换，分配与控制。</p><p>2、基本依据</p><p>2.1所有设备的制造、测试和安装均采用中国国家标准，同时满足相应的IEC标准，主要标准号如下：</p><p>GB7251 《低压成套开关设备和控制设备》</p><p>JB/T9661 《低压抽出式成套开关设备》</p><p>GB14048 《低压开关设备的控制设备》</p><p>GB4942 《低压电器外壳防护等级》</p><p>GB3047 《面板、框架和柜的基本尺寸》</p><p>GB9466 《低压成套开关设备基本试验方法》</p><p>GB2681 《电工成套装置中的导线颜色》</p><p>IEC439　《低压成套开关设备和控制设备》</p><p>3、特点</p><p>3.1柜体组合性能稳定，接地连续性好。</p><p>3.2能容纳更多的单元，相同规格的功能单元的抽屉可以方便的互换。</p><p>3.3采用了机械联锁技术，联锁可靠，在试验合闸，连接和隔离位置时，方可推入或抽出，保证了操作者和设备的安全。在主开关断开位置，抽屉连接位置和隔离位置都可以加锁三把挂锁。</p><p>3.4装置各功能室之间有隔板，其隔室分为功能单元隔室，水平母线隔室，电缆隔室。</p><p>3.5结构通用性强，组装灵活：以25mm为模数的C型钢材能满足各种结构型式，防护等级及使用环境要求。</p><p>3.6技术性能高，主要参数达到当代国际技术水平。</p><p>4、环境条件</p><p>4.1周围空气不高于+40℃，不低于-5℃。</p><p>4.2海拔高度不超过2000m，</p><p>4.3无爆炸危险的介质，且介质中无足以腐蚀金属和破坏绝缘的气体和尘埃。</p><p>5、低压开关柜基本技术参数</p><p>型号：GCK 外形尺寸：宽×深×高 800(1000)×1000×2200</p><p>额定频率 50HZ</p><p>额定工作电压 380V</p><p>额定绝缘电压 660V&nbsp;</p><p>水平母线额定电流 ≤4000A</p><p>垂直母线额定电流 1000A&nbsp;</p><p>水平母线额定峰值耐受电流 176KA</p><p>水平母线额定短时耐受电流 80KA 1s有效值</p><p>垂直母线短时耐受电流 50KA 1s有效值</p><p>垂直母线峰值耐受电流 110KA</p><p>外壳防护等级 IP40</p><p>6、柜体结构型式的分类</p><p>6.1柜体结构型式的分类可分为抽屉式结构及固定式结构两种型式。</p><p>6.2动力中心（PC）</p><p>选用万能式断路器为主开关，其接线方式都为插入式，并采用机械操作结构使元件带明显的合闸、试验和分断位置。开关可通过导轨抽出便于更换与检修。</p><p>6.3电动机控制中心（MCC）</p><p>对额定电流为400A以下电动机回路或照明馈电回路，制造成抽屉式结构，每一电器单元为一抽屉单元。</p><p>6.4电器设备固定安装在柜体横梁上为固定式结构，但每个小室均用托板分隔，如大容量的MCC柜等。</p><p>7、抽屉单元</p><p>7.1本开关柜的抽屉分大、中、小三种，其高度分别为24E、16E、8E（1E=25MM）。</p><p>7.2每柜最多可安装小抽屉9个。大、中、小抽屉后板装有控制回路联接器三相或四相插座共两副，额定电流为400A，并且装有控制回路联接器插座一副共24对触头，额定电流10A，主回路与控制回路插座随着抽屉的进出能自动接通与断开主回路与控制回路电源。</p><p>7.3大、中、小抽屉前均有一个可拆下的小门，作仪表板用。当某一单元回路发生故障时，可立即换以备用抽屉，达到迅速恢复供电，故具有较好的供电可靠性，由于采用抽屉结构，对电器设备检修极为方便。</p><p>7.4抽屉单元有可靠地机械联锁装置，通过操作手柄控制，具有明显的准备、合闸、试验、抽出和隔离位置。为加强安全防范，操作手柄定位后可以加上挂锁。</p><p>7.5在更换抽屉时，主回路插座在合闸位置抽屉无法推进小室内，只有当主回路插座在分闸位置时抽屉才能推进小室内，故具有较好的操作安全性。</p><p>7.6空气断路器设有一专门设计的操作机构。</p><p>8、母线</p><p>主母线均用高强度绝缘母线夹固定在柜体上部。分支母线由上到下垂直敷设，位于柜的左后侧。引出一次电缆线位于柜的右后侧，引出的二次电缆线引到柜后右侧的接线端子上，（对屏前正视而言）。抽屉主回路进出插座与分支母线装有阻燃绝罩。母排采用三相四线制或三相五线制，即三根ABC三相母线，一根N中性线，一根PE接地保护线。三相母线位于柜上方，N线PE线（或PEN）在柜后底部，PE线与柜架金属结构紧密接触。</p><p>9、接地保护系统</p><p>本装置具有可靠的安全接地保护系统，能耐受主开关分断能力的短路电流，每一抽屉单元通过金属杠架与地作良好联接，每一抽屉小门都置有接地的黄绿双导线与地可靠联接，柜体的PE导体装于开关柜底部与金属柜架联接。</p><p>10、操作与安装</p><p>开关柜全部装配齐全并经检查合格后，方可装箱运输。装箱分单台、二台、三台、三种运输方式。运输单元最大为三米。当产品运抵目的地后，首先应检查装箱是否完整，若开关柜不是立即安装使用，可将产品存放在清洁、干燥之处。</p><p>安装时，开关柜按柜架尺寸图表安装，基础槽钢由用户自备。如系统电缆出线，还须安装电缆沟。</p><p>开关柜联拼安装时，应在联拼孔部位用螺栓紧固。开关柜安装时，应根据图纸作主母线联结，并对母线表面作好清洁处理，然后用螺栓紧固，并进行电缆和架空布线工作。</p><p>开关柜在安装或检修后，在投入运行前须进行下列各项检查和试验。（检修后的检查与试验视其检修性质而定）。</p><p>a.检查开关柜内部电器设备和接线是否符合图纸要求，线端是否标有编号、接线是否整齐牢固；</p><p>b.检查所安装的电器设备接触是否良好，是否符合本身技术条件；</p><p>c.检查机械联锁和电气联气锁的可靠性；</p><p>d.检查抽出式组件动作是否灵活，接触是否良好；</p><p>e.检查并试验开关柜的接地装置是否牢靠，有无明显标志，并作耐压试验；</p><p>f.检查并试验所有表针及继电器动作是否正确。</p><p>11、试验</p><p>工厂在产品出厂前后均进行细致的试验，试验分为工厂试验和现场试验。</p><p>工厂试验：低压开关柜出厂前按有关规定进行出厂试验，出厂试验的技术数据随产品一起交付给需方，主要的试验项目如下：</p><p>a.外形尺寸，骨架结构；</p><p>b.外观，电镀；</p><p>c.母线外观及线配连接；</p><p>d.一次，二次线规，耐压按线符合要求，按钮、指示灯颜色符合规定要求；</p><p>e.抽屉柜的抽屉推拉轻便灵活，动静触头接触紧密，同规格单元互换；</p><p>f.接地保护；</p><p>g.机械操作试验；</p><p>h.电气间隙弧电距离，主电路电气间隙≥20mm；</p><p>i.介电强度试验；</p><p>现场试验：低压开关柜现场试验在现场安装以后进行。试验由安装单位按照GB5071-90《电气装置安装工程盘、柜及二次回路接线施工及验收规范》的规定进行，现场获得的数据应与产品型式试验和出厂试验结果或其规定值相符。</p><p>12、设计联络会，工程实施，安装管理，调试、试运行及验收</p><p>12.1设计联络会：根据工程需要，双方可进行设计联络会，以便解决设计及制造中的问题，设计联络会有会议纪要。</p><p>12.2中标后，工厂将提供与土建配合有关的图纸及要求。设备到货后，工厂将派出有工作经验的工程师负责现场安装指导。</p><p>12.3工厂将提供所有调试和试运行所需工具材料仪器并对设备进行调试和运行指导。</p><p>a.调试：电器设备安装完毕后，应在买方工程师的监督下进行调试，以证明设备可以试运行；</p><p>c.试运行：准备好有关设备试运行的一切技术资料，试运行中检测所有数据，运行和检测安全保护装置，设备的电控程序及接线按要求进行测试，调整好，试运行前提供所有试运行程序，记录表格及要求，并参加试运行工作。</p><p>13、验收</p><p>现场验收：设备到达现场后，买方应提前一周电传告知我方开箱验收和时间、地点，接买方电传通知后，我方及时派出人员参加开箱验收。开箱验收将检查如下内容：</p><p>13.1包装及密封是否良好；</p><p>13.2型号规格是否符合要求，设备应无损伤，附件、备件及产品的技术文件是否齐全；</p><p>13.3按投标文件要求外壳检查合格。开箱验收合格后，买方应签署交货验收单。</p><p>14、工程设备验收</p><p>买方在工程设备施工结束后，通过检测、试验证明全部满足国际行业标准，及标书所提供的图纸与资料也全部满足要求的情况下，可最终验收。</p><p>15、验收合格条件</p><p>15.1试运行性能、参数达到要求。</p><p>15.2试运行的问题全部得以解决。</p><p>15.3工厂已提供合同的全部货物和资料。工程最终验收合格后，买方应签收设备验收单。</p>', '19', '0', 'admin', '2019', '1', '0', '1555396394', '1555344000');
INSERT INTO `pm_article` VALUES ('81', '1', '0-1-', '开关柜特点', '', '开封市华通成套开关有限公司', '', 'admin', '', '', '', '0', '0', '0', '0', '0', '高压开关柜广泛应用于国家电网工矿企业、高层建筑、住宅小区、学校等作为24kV电力配电系统环网供电和终端配电之用，具有以下特点：1.采用热缩绝缘材料及环氧涂覆绝缘工艺，优化电极形状，柜体结构紧凑，缩小占地面积。2.开关柜本体采用进口敷铝锌钢板经数控加工成形后，通过高强度螺栓连接而成。3.可配用国产或进…', '<p>高压开关柜广泛应用于国家电网工矿企业、高层建筑、住宅小区、学校等作为24kV电力配电系统环网供电和终端配电之用，具有以下特点：</p><p>1.采用热缩绝缘材料及环氧涂覆绝缘工艺，优化电极形状，柜体结构紧凑，缩小占地面积。</p><p>2.开关柜本体采用进口敷铝锌钢板经数控加工成形后，通过高强度螺栓连接而成。</p><p>3.可配用国产或进口真空断路器，可配永磁或弹簧操动机构，以满足不同用户的需要。</p><p>4.智能化，安装智能操控装置，语音报警防误操作，数字技术，在线监测技术，网络技术和通讯技术应用于开关柜中，实现“四遥”功能，使开关柜智能化。</p><p>5.在线触头测温，具有超温报警及跳闸功能，使开关柜防止接触不良或严重过负荷造成过温烧坏，防止故障进一步扩大。</p>', '30', '0', 'admin', '2019', '1', '0', '1555461461', '1555430400');
INSERT INTO `pm_article` VALUES ('82', '1', '0-1-', '低压电器行业面对机遇+迎接挑战', '', '开封市华通成套开关有限公司', '', 'admin', '', '', '', '0', '0', '0', '0', '0', '【发展回顾】2010年8月底，由上海电器科学研究所及人民电器厂等八家企业合作研制的第四代智能低压电器产品通过专家组鉴定，我国低压电器产品研发由此实现了从仿制设计到自主创新设计的跨越。第四代低压电器产品除了继承第三代产品的特性外，还深化了智能的特性，此外还具有高性能、多功能、小型化、高可靠、绿色环保、…', '<p><strong>【发展回顾】</strong></p><p><span style=\"text-indent: 2em;\">2010 年8月底，由上海电器科学研究所及人民电器厂等八家企业合作研制的第四代智能低压电器产品通过专家组鉴定，我国低压电器产品研发由此实现了从仿制设计到自 主创新设计的跨越。第四代低压电器产品除了继承第三代产品的特性外，还深化了智能的特性，此外还具有高性能、多功能、小型化、高可靠、绿色环保、节能与节 材等显著特点。</span><br/></p><p><span style=\"text-indent: 2em;\">1990～2005年，我国自行开发试制了智能化的第三代产品，其性能优良、工作可靠、体积小，具有电子化、智能化、组合 化、模块化和多功能化的特点，总体技术性能达到或接近国外20世纪80年代末、90年代初水平。第三代产品较之第二代产品，有三个突出的特点：高性能、小 型化和智能化。</span><br/></p><p><span style=\"text-indent: 2em;\">1978～1990年，我国更新换代和引进国外先进技术，制造了第二代产品。产品技术指标明显提高，保护特性较完善，产品体积缩小，结构上适应成套装置要求，成为此后很长一段时间内我国低压电器的支柱产品。</span><br/></p><p><span style=\"text-indent: 2em;\">20世纪60年代至70年代，是我国低压电器产业的形成阶段。我国在模仿苏联的基础上，设计开发出第一代统一设计的低压电器产品。第一代低压电器产品的结构尺寸大，材料消耗多，性能指标不理想，品种规格不齐全。</span><br/></p><p><span style=\"text-indent: 2em;\">1978年以后，低压电器行业迎来了发展的春天。30年间，中国的低压电器行业逐渐形成了自己的产品和标准，不断发展壮大，现已成为有着2000多家生产企业，年产值达到360多亿元的行业。</span><br/></p><p><strong><span style=\"text-indent: 2em;\">产品结构将有重大变化</span></strong><br/></p><p><span style=\"text-indent: 2em;\">未来一个时期，我国低压电器行业的发展方向是进一步向智能化、可通信发展，低压配电与控制系统逐步向智能网络化发展。</span><br/></p><p><span style=\"text-indent: 2em;\">加速我国第四代低压电器的研发与推广，将是行业今后一个时期的工作重点。从2010年开始我国第四代低压电器将逐步投放市场，行业总体水平已经跃上新的台阶。根据市场需求还将对部分第三代产品进行二次开发，以</span><br/></p><p><span style=\"text-indent: 2em;\">进一步提高性价比，同时实现产品差异化，提高产品市场竞争力。</span><br/></p><p><span style=\"text-indent: 2em;\">值得一提的是，开发新品应借鉴国外先进经验，国外知名公司在开发新产品时，对高性能和经济型两者兼顾，以满足不同市场层次的需要。据此，我国新一代产品应在派生第三代产品或开发第四代产品时要同时发展经济型产品。</span><br/></p><p><strong>【机遇篇】</strong></p><p><span style=\"text-indent: 2em;\">2015年我国低压电器市场规模将达750亿</span><br/></p><p><span style=\"text-indent: 2em;\">前瞻产业研究院低压电器行业研究小组预计，2015年我国低压电器市场规模将达750亿元，市场增速将达20%左右。</span><br/></p><p><span style=\"text-indent: 2em;\">“十 二五”期间，我国将优化电力结构，加强智能电网建设，电力设备的市场需求将迅速增加。相关资料显示，国家电网将在智能电网中电网建设本身以及智能化方面的 投资共为1.5万亿元，即每年3000亿元左右，这无疑保证了低压电器在“十二五”期间的稳步增长。而城镇人口的快速增长也将拉动发电量和用电量的增长， 低压电器未来市场发展空间会持续放大。</span><br/></p><p>工业领域是使用低压电器产品最为主要的领域之一。我国工业一直保持较好的发展势头，随着工业发展，工 业领域中机械工业比重逐渐增加，我国目前已经成为世界机械工业大国，正逐渐走向机械工业强国，机械产品的数量和质量将跃上一个新台阶。密集使用低压电器产 品的机械工业的发展将会为低压电器行业特别是中、高端低压电器带来发展机遇。未来，我国低压电器市场需求将逐年增加，市场规模逐年扩大，市场扩张速度也将 逐年加快。</p>', '16', '0', 'admin', '2019', '1', '0', '1555462410', '1555430400');
INSERT INTO `pm_article` VALUES ('26', '2', '0-2-', '环境管理体系认证证书', '', '开封市华通成套开关有限公司', '', 'admin', '', '/uploads/images/20190416/33ce7d1039570b926cf29c41042efdad.jpg', '', '0', '0', '0', '0', '0', '文章正文', '文章正文', '81', '0', 'admin', '2019', '1', '0', '1555378924', '1555344000');

-- ----------------------------
-- Table structure for `pm_category`
-- ----------------------------
DROP TABLE IF EXISTS `pm_category`;
CREATE TABLE `pm_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` int(2) NOT NULL COMMENT '所属模型',
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '9999',
  `path` varchar(200) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `num` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `description` text NOT NULL,
  `createTime` int(10) NOT NULL,
  `updateTime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_category
-- ----------------------------
INSERT INTO `pm_category` VALUES ('1', '1', '0', '细纹中1', '', '50', '0-', '', '', '0', '', '', '1556332612', '1556333975');
INSERT INTO `pm_category` VALUES ('2', '1', '3', '列表', '', '50', '0-3-2-', '', '', '0', '', '', '1556332672', '1556334161');
INSERT INTO `pm_category` VALUES ('3', '1', '0', '阿萨德', '', '50', '0-3-', '', '', '0', '', '', '1556332691', '1556332691');
INSERT INTO `pm_category` VALUES ('8', '7', '0', '友情链接', '', '50', '0-8-', '', '', '0', '', '', '1556364767', '1556364767');
INSERT INTO `pm_category` VALUES ('9', '6', '0', '广告', '', '50', '0-9-', '', '', '0', '', '', '1556366225', '1556366225');

-- ----------------------------
-- Table structure for `pm_config`
-- ----------------------------
DROP TABLE IF EXISTS `pm_config`;
CREATE TABLE `pm_config` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `name` varchar(64) DEFAULT NULL COMMENT '配置的key键名',
  `value` varchar(512) DEFAULT NULL COMMENT '配置的val值',
  `inc_type` varchar(64) DEFAULT NULL COMMENT '配置分组',
  `desc` varchar(50) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_config
-- ----------------------------
INSERT INTO `pm_config` VALUES ('1', 'name', '开封市消防支队健康体检系统', 'basic', '');
INSERT INTO `pm_config` VALUES ('2', 'logo', '', 'basic', '');
INSERT INTO `pm_config` VALUES ('3', 'isClose', '0', 'basic', '');
INSERT INTO `pm_config` VALUES ('4', 'closeInfo', '系统维护中', 'basic', '');
INSERT INTO `pm_config` VALUES ('5', 'domain', 'http://www.kfht.net', 'basic', '');
INSERT INTO `pm_config` VALUES ('6', 'copyright', '开封市消防支队健康体检系统', 'basic', '');
INSERT INTO `pm_config` VALUES ('7', 'email', 'kfht888@126.com', 'basic', '');
INSERT INTO `pm_config` VALUES ('8', 'weixin', '#', 'basic', '');
INSERT INTO `pm_config` VALUES ('9', 'weibo', '', 'basic', '');
INSERT INTO `pm_config` VALUES ('10', 'description', '开封市消防支队健康体检系统', 'basic', '');
INSERT INTO `pm_config` VALUES ('11', 'qrcode', '', 'basic', '');
INSERT INTO `pm_config` VALUES ('19', 'mobile', '#', 'basic', '');
INSERT INTO `pm_config` VALUES ('12', 'address', '河南省开封市金明大道南段', 'basic', '');
INSERT INTO `pm_config` VALUES ('13', 'tel', '0371-23190228', 'basic', '');
INSERT INTO `pm_config` VALUES ('14', 'moneyNameEn', 'π币', 'basic', '');
INSERT INTO `pm_config` VALUES ('15', 'qq', '1826366140', 'basic', '');
INSERT INTO `pm_config` VALUES ('16', 'keywords', '开封市消防支队健康体检系统', 'basic', '');
INSERT INTO `pm_config` VALUES ('17', 'moneyName', 'π币', 'basic', '');
INSERT INTO `pm_config` VALUES ('18', 'title', '开封市消防支队健康体检系统', 'basic', '');
INSERT INTO `pm_config` VALUES ('20', 'isReg', '1', 'member', '');
INSERT INTO `pm_config` VALUES ('21', 'safecode', '123456', 'basic', '');
INSERT INTO `pm_config` VALUES ('22', 'isTrade', '1', 'member', '');
INSERT INTO `pm_config` VALUES ('23', 'payTime', '5', 'member', '');
INSERT INTO `pm_config` VALUES ('24', 'diffDay', '5', 'member', '');
INSERT INTO `pm_config` VALUES ('25', 'fh1', '0.5', 'member', '');
INSERT INTO `pm_config` VALUES ('26', 'fh2', '0.6', 'member', '');
INSERT INTO `pm_config` VALUES ('27', 'fh3', '0.7', 'member', '');
INSERT INTO `pm_config` VALUES ('28', 'dj1', '1.5', 'member', '');
INSERT INTO `pm_config` VALUES ('29', 'dj2', '2.0', 'member', '');
INSERT INTO `pm_config` VALUES ('30', 'dj3', '2.5', 'member', '');
INSERT INTO `pm_config` VALUES ('31', 'paidan', '20', 'member', '');
INSERT INTO `pm_config` VALUES ('32', 'minMoney', '200', 'member', '');
INSERT INTO `pm_config` VALUES ('33', 'beishu', '100', 'member', '');
INSERT INTO `pm_config` VALUES ('34', 'dongjie', '5', 'member', '');
INSERT INTO `pm_config` VALUES ('35', 'tuijian1', '3', 'member', '');
INSERT INTO `pm_config` VALUES ('36', 'tuijian2', '4', 'member', '');
INSERT INTO `pm_config` VALUES ('37', 'tuijian3', '5', 'member', '');
INSERT INTO `pm_config` VALUES ('38', 'isSms', '1', 'sms', '');
INSERT INTO `pm_config` VALUES ('39', 'sms_name', 'xinfeidianqi', 'sms', '');
INSERT INTO `pm_config` VALUES ('40', 'sms_pwd', 'kf01888', 'sms', '');
INSERT INTO `pm_config` VALUES ('41', 'sms_sign', '奥讯', 'sms', '');
INSERT INTO `pm_config` VALUES ('42', 'out_time', '10', 'sms', '');
INSERT INTO `pm_config` VALUES ('43', 'diffTime', '1', 'sms', '');
INSERT INTO `pm_config` VALUES ('44', 'dayNumber', '5', 'sms', '');
INSERT INTO `pm_config` VALUES ('45', 'active', '20', 'member', '');
INSERT INTO `pm_config` VALUES ('46', 'maxMoney', '2000', 'member', null);
INSERT INTO `pm_config` VALUES ('47', 'isApi', '1', 'member', null);
INSERT INTO `pm_config` VALUES ('48', 'txMin', '10', 'member', null);
INSERT INTO `pm_config` VALUES ('49', 'txBeishu', '10', 'member', null);
INSERT INTO `pm_config` VALUES ('50', 'APP_TOKEN', '2', 'weixin', null);
INSERT INTO `pm_config` VALUES ('51', 'APP_ID', '3', 'weixin', null);
INSERT INTO `pm_config` VALUES ('52', 'APP_SECRET', '4', 'weixin', null);
INSERT INTO `pm_config` VALUES ('53', 'MCH_KEY', '5', 'weixin', null);
INSERT INTO `pm_config` VALUES ('54', 'MCH_ID', '6', 'weixin', null);
INSERT INTO `pm_config` VALUES ('55', 'NOTIFY', '#', 'alipay', null);
INSERT INTO `pm_config` VALUES ('56', 'ALIPAY_EMAIL', '491623529@qq22.com', 'alipay', null);
INSERT INTO `pm_config` VALUES ('57', 'ALIPAY_KEY', 'z0kn76wfr4e6c7ppgxdo4nnx5qwuk459', 'alipay', null);
INSERT INTO `pm_config` VALUES ('58', 'ALIPAY_PARTNER', '2088921795656107', 'alipay', null);
INSERT INTO `pm_config` VALUES ('59', 'NOTIFY', '#', 'alipay', null);
INSERT INTO `pm_config` VALUES ('60', 'global', '税费：需缴纳11.2%跨境电商综合税', 'basic', null);
INSERT INTO `pm_config` VALUES ('61', 'hotkey', '爱他美奶粉\nA2奶粉\n可瑞康羊奶粉\nSwisse蔓越莓 \nSwisse胶原蛋白 \n深海鱼油 \n蜂毒面膜', 'basic', null);
INSERT INTO `pm_config` VALUES ('62', 'money', '3000\n2000\n1000\n500', 'member', null);
INSERT INTO `pm_config` VALUES ('63', 'linkman', '#', 'basic', null);
INSERT INTO `pm_config` VALUES ('64', 'fax', '0371-23190098', 'basic', null);

-- ----------------------------
-- Table structure for `pm_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `pm_feedback`;
CREATE TABLE `pm_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `memberID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `reply` text NOT NULL,
  `content` text NOT NULL,
  `createTime` int(11) NOT NULL,
  `updateTime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_link`
-- ----------------------------
DROP TABLE IF EXISTS `pm_link`;
CREATE TABLE `pm_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picname` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `createTime` int(11) NOT NULL,
  `updateTime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_link
-- ----------------------------
INSERT INTO `pm_link` VALUES ('5', '8', '0-8-', '百度', '/uploads/images/20190427/e57487e412ec8e2c85699a82af1d4907.jpg', 'http://www.baidu.com', '50', '1556365666', '1556366588');

-- ----------------------------
-- Table structure for `pm_node`
-- ----------------------------
DROP TABLE IF EXISTS `pm_node`;
CREATE TABLE `pm_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '节点名称',
  `value` varchar(50) NOT NULL COMMENT '菜单名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活 1：是 2：否',
  `remark` varchar(100) NOT NULL COMMENT '备注说明',
  `pid` smallint(6) unsigned NOT NULL COMMENT '父ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '节点等级',
  `icon` varchar(20) NOT NULL COMMENT '图标',
  `default` tinyint(4) NOT NULL COMMENT '附加参数',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序权重',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '菜单显示类型 0:不显示 1:导航菜单 2:左侧菜单',
  PRIMARY KEY (`id`),
  KEY `level` (`level`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_node
-- ----------------------------
INSERT INTO `pm_node` VALUES ('1', '主页', '', '1', '', '0', '1', 'layui-icon-home', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('2', '内容管理', '', '1', '', '0', '1', 'layui-icon-app', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('3', '控制台', 'index', '1', '', '1', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('4', '分类管理', 'category', '1', '', '2', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('5', '文章管理', 'article', '1', '', '2', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('6', '设置', '', '1', '', '0', '1', 'layui-icon-set', '0', '100', '1');
INSERT INTO `pm_node` VALUES ('7', '应用设置', 'setting', '1', '', '6', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('8', '节点管理', 'node', '1', '', '6', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('9', '查看信息', 'setting/index', '1', '', '7', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('10', '查看', 'node/index', '1', '', '8', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('11', '发布', 'node/pub', '1', '', '8', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('12', '删除', 'node/del', '1', '', '8', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('13', '控制台', 'index/main', '1', '', '3', '3', '', '1', '50', '0');
INSERT INTO `pm_node` VALUES ('14', '用户', '', '1', '', '0', '1', 'layui-icon-user', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('15', '后台管理员', 'user', '1', '', '14', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('16', '用户组管理', 'role', '1', '', '14', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('17', '单页面管理', 'onepage', '1', '', '2', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('18', '广告管理', 'ad', '1', '', '2', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('19', '友情链接', 'link', '1', '', '2', '2', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('20', '文章列表', 'article/index', '1', '', '5', '3', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('21', '回收站', 'article/trash', '1', '', '5', '3', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('22', '文章列表', 'article/index', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('23', '发布', 'article/pub', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('24', '删除', 'article/del', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('25', '清除回收站', 'article/truedel', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('26', '还原', 'article/restore', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('27', '移动', 'article/move', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('28', '更改状态', 'article/status', '1', '', '5', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('29', '列表', 'category/index', '1', '', '4', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('30', '发布', 'category/pub', '1', '', '4', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('31', '删除', 'category/del', '1', '', '4', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('32', '列表', 'onepage/index', '1', '', '17', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('33', '发布', 'onepage/pub', '1', '', '17', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('34', '删除', 'onepage/del', '1', '', '17', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('35', '列表', 'ad/index', '1', '', '18', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('36', '发布', 'ad/pub', '1', '', '18', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('37', '删除', 'ad/del', '1', '', '18', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('38', '列表', 'link/index', '1', '', '19', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('39', '发布', 'link/pub', '1', '', '19', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('40', '删除', 'link/del', '1', '', '19', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('41', '成员列表', 'user/index', '1', '', '15', '3', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('42', '登录日志', 'user/log', '1', '', '15', '3', '', '0', '50', '1');
INSERT INTO `pm_node` VALUES ('43', '发布', 'user/pub', '1', '', '15', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('44', '删除', 'user/del', '1', '', '15', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('45', '删除日志', 'user/delog', '1', '', '15', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('46', '列表', 'role/index', '1', '', '16', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('47', '发布', 'role/pub', '1', '', '16', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('48', '删除', 'role/del', '1', '', '16', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('49', '权限设置', 'role/access', '1', '', '16', '3', '', '0', '50', '0');
INSERT INTO `pm_node` VALUES ('50', '清除缓存', 'index/clearcache', '1', '', '3', '3', '', '0', '50', '0');

-- ----------------------------
-- Table structure for `pm_onepage`
-- ----------------------------
DROP TABLE IF EXISTS `pm_onepage`;
CREATE TABLE `pm_onepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `description` varchar(500) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `updateTime` int(10) NOT NULL,
  `createTime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_onepage
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_option_cate`
-- ----------------------------
DROP TABLE IF EXISTS `pm_option_cate`;
CREATE TABLE `pm_option_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(20) NOT NULL,
  `createTime` int(11) NOT NULL,
  `updateTime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_option_cate
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_option_item`
-- ----------------------------
DROP TABLE IF EXISTS `pm_option_item`;
CREATE TABLE `pm_option_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `value` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `pinyin` varchar(4) NOT NULL,
  `createTime` int(11) NOT NULL,
  `updateTime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_option_item
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_role`
-- ----------------------------
DROP TABLE IF EXISTS `pm_role`;
CREATE TABLE `pm_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_role
-- ----------------------------
INSERT INTO `pm_role` VALUES ('1', '超级管理员', null, '1', '拥有所有权限');

-- ----------------------------
-- Table structure for `pm_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `pm_role_user`;
CREATE TABLE `pm_role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`role_id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_role_user
-- ----------------------------

-- ----------------------------
-- Table structure for `pm_user`
-- ----------------------------
DROP TABLE IF EXISTS `pm_user`;
CREATE TABLE `pm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `createTime` int(10) NOT NULL,
  `updateTime` int(10) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_out` int(11) DEFAULT NULL,
  `group` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_user
-- ----------------------------
INSERT INTO `pm_user` VALUES ('1', 'admin', '64def183c8846acf3f9e13799e627a17', '管理员', '', '1400117147', '1490074945', '567c4928987b5d4669b90e9ceb32a98c02fe21a8', '1555749200', '1', '1');
INSERT INTO `pm_user` VALUES ('24', 'test', 'e10adc3949ba59abbe56e057f20f883e', '张三', '', '1556370532', '1556370532', null, null, '5', '1');

-- ----------------------------
-- Table structure for `pm_user_log`
-- ----------------------------
DROP TABLE IF EXISTS `pm_user_log`;
CREATE TABLE `pm_user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `loginTime` int(10) NOT NULL,
  `loginIP` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pm_user_log
-- ----------------------------
