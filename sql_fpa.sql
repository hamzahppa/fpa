/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : sql_fpa

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-21 11:28:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fpa_datafunction
-- ----------------------------
DROP TABLE IF EXISTS `fpa_datafunction`;
CREATE TABLE `fpa_datafunction` (
  `id_datafunction` int(11) NOT NULL AUTO_INCREMENT,
  `DET` varchar(255) DEFAULT NULL,
  `RET` varchar(255) DEFAULT NULL,
  `FTR` varchar(255) DEFAULT NULL,
  `id_fp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_datafunction`),
  KEY `id_fp` (`id_fp`),
  CONSTRAINT `fpa_datafunction_ibfk_1` FOREIGN KEY (`id_fp`) REFERENCES `fpa_fp` (`id_fp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_datafunction
-- ----------------------------
INSERT INTO `fpa_datafunction` VALUES ('24', 'Nama Restoran', null, null, '36');
INSERT INTO `fpa_datafunction` VALUES ('25', 'Alamat Restoran', null, null, '36');
INSERT INTO `fpa_datafunction` VALUES ('26', 'Menu Restoran', null, null, '36');
INSERT INTO `fpa_datafunction` VALUES ('27', 'id_restoran', null, null, '37');
INSERT INTO `fpa_datafunction` VALUES ('28', 'nama_restoran', null, null, '37');
INSERT INTO `fpa_datafunction` VALUES ('29', 'alamat_restoran', null, null, '37');
INSERT INTO `fpa_datafunction` VALUES ('30', 'id_menu', null, null, '38');
INSERT INTO `fpa_datafunction` VALUES ('31', 'nama_menu', null, null, '38');
INSERT INTO `fpa_datafunction` VALUES ('32', 'harga_menu', null, null, '38');
INSERT INTO `fpa_datafunction` VALUES ('33', 'id_restoran', null, null, '38');
INSERT INTO `fpa_datafunction` VALUES ('34', null, 'data_menu', null, '38');
INSERT INTO `fpa_datafunction` VALUES ('35', null, 'data_restoran', null, '38');
INSERT INTO `fpa_datafunction` VALUES ('36', 'id_user', null, null, '39');
INSERT INTO `fpa_datafunction` VALUES ('37', 'nama_user', null, null, '39');
INSERT INTO `fpa_datafunction` VALUES ('38', 'password', null, null, '39');
INSERT INTO `fpa_datafunction` VALUES ('39', 'level', null, null, '39');
INSERT INTO `fpa_datafunction` VALUES ('40', null, 'data_user', null, '39');

-- ----------------------------
-- Table structure for fpa_fp
-- ----------------------------
DROP TABLE IF EXISTS `fpa_fp`;
CREATE TABLE `fpa_fp` (
  `id_fp` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fp` varchar(255) NOT NULL,
  `tipe` varchar(3) NOT NULL,
  `bahasa` varchar(10) DEFAULT NULL,
  `DET` int(11) DEFAULT NULL,
  `RET` int(11) DEFAULT NULL,
  `FTR` int(11) DEFAULT NULL,
  `id_fpa` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fp`),
  KEY `id_fpa` (`id_fpa`),
  CONSTRAINT `fpa_fp_ibfk_1` FOREIGN KEY (`id_fpa`) REFERENCES `fpa_fpa` (`id_fpa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_fp
-- ----------------------------
INSERT INTO `fpa_fp` VALUES ('1', 'User', 'ILF', 'SQL', '6', '1', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('2', 'Booking', 'ILF', 'SQL', '11', '2', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('3', 'Pegawai', 'ILF', 'SQL', '5', '1', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('4', 'History', 'ILF', 'SQL', '11', '1', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('5', 'Notifikasi', 'ILF', 'SQL', '4', '1', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('6', 'Hotel', 'ILF', 'SQL', '3', '1', null, '1', '7');
INSERT INTO `fpa_fp` VALUES ('7', 'Login', 'EI', 'PHP', '2', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('8', 'Logout', 'EI', 'PHP', '1', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('9', 'Add User', 'EI', 'PHP', '4', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('10', 'Add Req', 'EI', 'PHP', '6', null, '5', '1', '6');
INSERT INTO `fpa_fp` VALUES ('11', 'Print', 'EI', 'PHP', '2', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('12', 'Approve Req', 'EI', 'PHP', '1', null, '3', '1', '4');
INSERT INTO `fpa_fp` VALUES ('13', 'Reject Req', 'EI', 'PHP', '1', null, '3', '1', '4');
INSERT INTO `fpa_fp` VALUES ('14', 'View Req Unanswered', 'EQ', 'HTML', '6', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('15', 'View Req Accepted', 'EQ', 'HTML', '6', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('16', 'View Req Rejected', 'EQ', 'HTML', '6', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('18', 'View Detail', 'EQ', 'HTML', '5', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('19', 'View Profile', 'EQ', 'HTML', '2', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('20', 'View About', 'EQ', 'HTML', '9', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('21', 'View History', 'EQ', 'HTML', '9', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('22', 'View Print', 'EQ', 'HTML', '10', null, '1', '1', '3');
INSERT INTO `fpa_fp` VALUES ('36', 'Melihat Restoran', 'EQ', 'HTML', '3', null, '2', '9', '3');
INSERT INTO `fpa_fp` VALUES ('37', 'Restoran', 'ILF', 'SQL', '3', '1', null, '9', '7');
INSERT INTO `fpa_fp` VALUES ('38', 'Menu', 'ILF', 'SQL', '4', '2', null, '9', '7');
INSERT INTO `fpa_fp` VALUES ('39', 'User', 'ILF', 'SQL', '4', '1', null, '9', '7');
INSERT INTO `fpa_fp` VALUES ('40', 'Login', 'EI', 'PHP', '4', null, '1', '12', null);
INSERT INTO `fpa_fp` VALUES ('42', 'User', 'ILF', 'SQL', '3', '1', null, '12', null);
INSERT INTO `fpa_fp` VALUES ('43', 'User', 'ILF', 'SQL', '5', '2', null, '14', '7');
INSERT INTO `fpa_fp` VALUES ('44', 'Login', 'EI', 'PHP', '3', null, '2', '14', '3');

-- ----------------------------
-- Table structure for fpa_fpa
-- ----------------------------
DROP TABLE IF EXISTS `fpa_fpa`;
CREATE TABLE `fpa_fpa` (
  `id_fpa` int(211) NOT NULL AUTO_INCREMENT,
  `nama_fpa` varchar(255) NOT NULL,
  `tca` float(11,2) DEFAULT NULL,
  `ufp` float(11,3) DEFAULT NULL,
  `fp` float(11,3) DEFAULT NULL,
  `loc` float(11,3) DEFAULT NULL,
  `deskripsi` text,
  `no_user` int(11) NOT NULL,
  PRIMARY KEY (`id_fpa`),
  KEY `fpa_fpa_ibfk_1` (`no_user`),
  CONSTRAINT `fpa_fpa_ibfk_1` FOREIGN KEY (`no_user`) REFERENCES `fpa_user` (`no_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_fpa
-- ----------------------------
INSERT INTO `fpa_fpa` VALUES ('1', 'Akomodasi', '0.90', '92.000', '82.800', null, 'Aplikasi web untuk memesan hotel', '0');
INSERT INTO `fpa_fpa` VALUES ('2', 'Avenger', '0.90', '0.000', '0.000', null, null, '0');
INSERT INTO `fpa_fpa` VALUES ('3', 'Catering', null, null, null, null, 'Aplikasi memesan makanan di katering', '0');
INSERT INTO `fpa_fpa` VALUES ('4', 'IMB', null, null, null, null, null, '0');
INSERT INTO `fpa_fpa` VALUES ('5', 'iSpeedy', null, null, null, null, null, '0');
INSERT INTO `fpa_fpa` VALUES ('6', 'Wisuda', null, null, null, null, null, '0');
INSERT INTO `fpa_fpa` VALUES ('7', 'Bismillah', null, null, null, null, 'Ini adalah uji coba', '0');
INSERT INTO `fpa_fpa` VALUES ('8', 'Coba Dua', null, null, null, null, 'Ini adalah uji coba', '0');
INSERT INTO `fpa_fpa` VALUES ('9', 'Mangan', '0.76', '24.000', '18.240', null, 'Aplikasi Mobile untuk memesan makanan', '0');
INSERT INTO `fpa_fpa` VALUES ('10', 'Kutu Buku', null, null, null, null, 'Project untuk bertukar pinjam buku', '0');
INSERT INTO `fpa_fpa` VALUES ('11', 'Lawan Tanding', null, null, null, null, 'Project untuk mencari lawan tanding', '0');
INSERT INTO `fpa_fpa` VALUES ('12', 'hahah', '0.65', '0.000', '0.000', null, 'ahahahah', '0');
INSERT INTO `fpa_fpa` VALUES ('13', 'Bismillah', null, null, null, null, 'bismillah', '0');
INSERT INTO `fpa_fpa` VALUES ('14', 'Buku Kita', '0.96', '10.000', '9.600', null, 'Aplikasi pinjam meminjam buku', '1');
INSERT INTO `fpa_fpa` VALUES ('15', 'Kata Baru', null, null, null, null, 'Aplikasi web', '1');
INSERT INTO `fpa_fpa` VALUES ('16', 'Akomodasi', null, null, null, null, 'Aplikasi Website', '1');

-- ----------------------------
-- Table structure for fpa_gsc
-- ----------------------------
DROP TABLE IF EXISTS `fpa_gsc`;
CREATE TABLE `fpa_gsc` (
  `id_gsc` int(11) NOT NULL AUTO_INCREMENT,
  `gsc` text,
  `deskripsi` text,
  PRIMARY KEY (`id_gsc`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_gsc
-- ----------------------------
INSERT INTO `fpa_gsc` VALUES ('1', 'Data Communication', 'The data and control information used in the application are sent or received over communication facilities. Terminals connected locally to the control unit are considered to use communication facilities. Protocol is a set of conventions, which permit the transfer, or exchange of information between two systems or devices. All data communication links require some type of protocol');
INSERT INTO `fpa_gsc` VALUES ('2', 'Distributed Data Processing', 'Distributed data or processing functions are a characteristic of the application within the application boundary.');
INSERT INTO `fpa_gsc` VALUES ('3', 'Performance', 'Application performance objectives, stated or approved by the user, in either response or throughput, influence (or will influence) the design, development, installation, and support of the application.');
INSERT INTO `fpa_gsc` VALUES ('4', 'Heavily Used Configuration', 'A heavily used operational configuration, requiring special design considerations, is a characteristic of the application. For example, the user wants to run the application on existing or committed equipment that will be heavily used');
INSERT INTO `fpa_gsc` VALUES ('5', 'Transaction Rate', 'The transaction rate is high and it influenced the design, development, installation, and support of the application');
INSERT INTO `fpa_gsc` VALUES ('6', 'Online Data Entry', 'Online data entry and control functions are provided in the application.');
INSERT INTO `fpa_gsc` VALUES ('7', 'End-User Efficiency', 'The online functions provided emphasize a design for end-user efficiency. The design includes:</br>• Navigational aids (for example, function keys, jumps, dynamically generated menus)</br>• Menus</br>• Online help and documents</br>• Automated cursor movement</br>• Scrolling</br>• Remote printing (via online transactions)</br>• Preassigned function keys</br>• Batch jobs submitted from online transactions</br>• Cursor selection of screen data</br>• Heavy use of reverse video, highlighting, colors underlining, and other indicators</br>• Hard copy user documentation of online transactions</br>• Mouse interface</br>• Pop-up windows</br>• As few screens as possible to accomplish a business function</br>• Bilingual support (supports two languages; count as four items)</br>• Multilingual support (supports more than two languages; count as six items)</br>');
INSERT INTO `fpa_gsc` VALUES ('8', 'Online Update', 'The transaction rate is high and it influenced the design, development, installation, and support of the application');
INSERT INTO `fpa_gsc` VALUES ('9', 'Complex Processing', 'Complex processing is a characteristic of the application. The following components are present.</br>• Sensitive control (for example, special audit processing) and/or application specific security processing</br>• Extensive logical processing</br>• Extensive mathematical processing</br>• Much exception processing resulting in incomplete transactions that must be processed again, for example, incomplete ATM transactions caused by TP interruption, missing data values, or failed edits</br>• Complex processing to handle multiple input/output possibilities, for example, multimedia, or device independence</br>');
INSERT INTO `fpa_gsc` VALUES ('10', 'Reusability', 'The application and the code in the application have been specifically designed, developed, and supported to be usable in other applications.');
INSERT INTO `fpa_gsc` VALUES ('11', 'Installation Ease', 'Conversion and installation ease are characteristics of the application. A conversion and installation plan and/or conversion tools were provided and tested during the system test phase.');
INSERT INTO `fpa_gsc` VALUES ('12', 'Operational Ease', 'Operational ease is characteristic of the application. Effective start-up, back-up, and recovery procedures were provided and tested during the system test phase. The application minimizes the need for manual activities, such as tape mounts, paper handling, and direct on-location manual intervention.');
INSERT INTO `fpa_gsc` VALUES ('13', 'Multiple Sites', 'The application has been specifically designed, developed, and supported to be installed at multiple sites for multiple organizations.');
INSERT INTO `fpa_gsc` VALUES ('14', 'Facilitate Change', 'The application has been specifically designed, developed, and supported to facilitate change.</br>The following characteristics can apply for the application:</br>• Flexible query and report facility is provided that can handle simple requests; for example, and/or logic applied to only one internal logical file (count as one item).</br>• Flexible query and report facility is provided that can handle requests of average complexity, for example, and/or logic applied to more than one internal logical file (count as two items).</br>• Flexible query and report facility is provided that can handle complex requests, for example, and/or logic combinations on one or more internal logical files (count as three items).</br>• Business control data is kept in tables that are maintained by the user with online interactive processes, but changes take effect only on the next business day.</br>• Business control data is kept in tables that are maintained by the user with online interactive processes, and the changes take effect immediately (count as two items).</br>');

-- ----------------------------
-- Table structure for fpa_gscpoint
-- ----------------------------
DROP TABLE IF EXISTS `fpa_gscpoint`;
CREATE TABLE `fpa_gscpoint` (
  `id_point` int(11) NOT NULL AUTO_INCREMENT,
  `point` text NOT NULL,
  `id_gsc` int(11) DEFAULT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id_point`),
  KEY `id_gsc` (`id_gsc`) USING BTREE,
  CONSTRAINT `fpa_gscpoint_ibfk_1` FOREIGN KEY (`id_gsc`) REFERENCES `fpa_gsc` (`id_gsc`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_gscpoint
-- ----------------------------
INSERT INTO `fpa_gscpoint` VALUES ('1', 'Application is pure batch processing or a standalone PC', '1', '0');
INSERT INTO `fpa_gscpoint` VALUES ('2', 'Application is batch but has remote data entry or remote printing.', '1', '1');
INSERT INTO `fpa_gscpoint` VALUES ('3', 'Application is batch but has remote data entry and remote printing.', '1', '2');
INSERT INTO `fpa_gscpoint` VALUES ('4', 'Application includes online data collection or TP (teleprocessing) front end to a batch process or query system.', '1', '3');
INSERT INTO `fpa_gscpoint` VALUES ('5', 'Application is more than a front-end, but supports only one type of TP communications protocol.', '1', '4');
INSERT INTO `fpa_gscpoint` VALUES ('6', 'Application is more than a front-end, and supports more than one type of TP communications protocol.', '1', '5');
INSERT INTO `fpa_gscpoint` VALUES ('7', 'Application does not aid the transfer of data or processing function between components of the system.', '2', '0');
INSERT INTO `fpa_gscpoint` VALUES ('8', 'Application prepares data for end user processing on another component of the system such as PC spreadsheets and PC DBMS.', '2', '1');
INSERT INTO `fpa_gscpoint` VALUES ('9', 'Data is prepared for transfer, then is transferred and processed on another component of the system (not for enduser processing).', '2', '2');
INSERT INTO `fpa_gscpoint` VALUES ('10', 'Distributed processing and data transfer are online and in one direction only.', '2', '3');
INSERT INTO `fpa_gscpoint` VALUES ('11', 'Distributed processing and data transfer are online and in both directions.', '2', '4');
INSERT INTO `fpa_gscpoint` VALUES ('12', 'Processing functions are dynamically performed on the most appropriate component of the system.', '2', '5');
INSERT INTO `fpa_gscpoint` VALUES ('13', 'No special performance requirements were stated by the user.', '3', '0');
INSERT INTO `fpa_gscpoint` VALUES ('14', 'Performance and design requirements were stated and reviewed but no special actions were required.', '3', '1');
INSERT INTO `fpa_gscpoint` VALUES ('15', 'Response time or throughput is critical during peak hours. No special design for CPU utilization was required. Processing deadline is for the next business day.', '3', '2');
INSERT INTO `fpa_gscpoint` VALUES ('16', 'Response time or throughput is critical during all business hours. No special design for CPU utilization was required. Processing deadline requirements with interfacing systems are constraining.', '3', '3');
INSERT INTO `fpa_gscpoint` VALUES ('17', 'In addition, stated user performance requirements are stringent enough to require performance analysis tasks in the design phase.', '3', '4');
INSERT INTO `fpa_gscpoint` VALUES ('18', 'In addition, performance analysis tools were used in the design, development, and/or implementation phases to meet the stated user performance requirements.', '3', '5');
INSERT INTO `fpa_gscpoint` VALUES ('19', 'No explicit or implicit operational restrictions are included.', '4', '0');
INSERT INTO `fpa_gscpoint` VALUES ('20', 'Operational restrictions do exist, but are less restrictive than a typical application. No special effort is needed to meet the restrictions.', '4', '1');
INSERT INTO `fpa_gscpoint` VALUES ('21', 'Some security or timing considerations are included.', '4', '2');
INSERT INTO `fpa_gscpoint` VALUES ('22', 'Specific processor requirements for a specific piece of the application are included.', '4', '3');
INSERT INTO `fpa_gscpoint` VALUES ('23', 'Stated operation restrictions require special constraints on the application in the central processor or a dedicated processor.', '4', '4');
INSERT INTO `fpa_gscpoint` VALUES ('24', 'In addition, there are special constraints on the application in the distributed components of the system.', '4', '5');
INSERT INTO `fpa_gscpoint` VALUES ('25', 'No peak transaction period is anticipated.', '5', '0');
INSERT INTO `fpa_gscpoint` VALUES ('26', 'Peak transaction period (e.g., monthly, quarterly, seasonally, annually) is anticipated.', '5', '1');
INSERT INTO `fpa_gscpoint` VALUES ('27', 'Weekly peak transaction period is anticipated.', '5', '2');
INSERT INTO `fpa_gscpoint` VALUES ('28', 'Daily peak transaction period is anticipated.', '5', '3');
INSERT INTO `fpa_gscpoint` VALUES ('29', 'High transaction rate(s) stated by the user in the application requirements or service level agreements are high enough to require performance analysis tasks in the design phase.', '5', '4');
INSERT INTO `fpa_gscpoint` VALUES ('30', 'High transaction rate(s) stated by the user in the application requirements or service level agreements are high enough to require performance analysis tasks and, in addition, require the use of performance analysis tools in the design, development, and/or installation phases.', '5', '5');
INSERT INTO `fpa_gscpoint` VALUES ('31', 'All transactions are processed in batch mode.', '6', '0');
INSERT INTO `fpa_gscpoint` VALUES ('32', '1% to 7% of transactions are interactive data entry.', '6', '1');
INSERT INTO `fpa_gscpoint` VALUES ('33', '8% to 15% of transactions are interactive data entry.', '6', '2');
INSERT INTO `fpa_gscpoint` VALUES ('34', '16% to 23% of transactions are interactive data entry.', '6', '3');
INSERT INTO `fpa_gscpoint` VALUES ('35', '24% to 30% of transactions are interactive data entry.', '6', '4');
INSERT INTO `fpa_gscpoint` VALUES ('36', 'More than 30% of transactions are interactive data entry.', '6', '5');
INSERT INTO `fpa_gscpoint` VALUES ('37', 'None of the above.', '7', '0');
INSERT INTO `fpa_gscpoint` VALUES ('38', 'One to three of the above.', '7', '1');
INSERT INTO `fpa_gscpoint` VALUES ('39', 'Four to five of the above.', '7', '2');
INSERT INTO `fpa_gscpoint` VALUES ('40', 'Six or more of the above, but there are no specific user requirements related to efficiency.', '7', '3');
INSERT INTO `fpa_gscpoint` VALUES ('41', 'Six or more of the above, and stated requirements for enduser efficiency are strong enough to require design tasks for human factors to be included (for example, minimize key strokes, maximize defaults, use of templates).', '7', '4');
INSERT INTO `fpa_gscpoint` VALUES ('42', 'Six or more of the above, and stated requirements for enduser efficiency are strong enough to require use of special tools and processes to demonstrate that the objectives have been achieved.', '7', '5');
INSERT INTO `fpa_gscpoint` VALUES ('43', 'None', '8', '0');
INSERT INTO `fpa_gscpoint` VALUES ('44', 'Online update of one to three control files is included. Volume of updating is low and recovery is easy.', '8', '1');
INSERT INTO `fpa_gscpoint` VALUES ('45', 'Online update of four or more control files is included. Volume of updating is low and recovery easy.', '8', '2');
INSERT INTO `fpa_gscpoint` VALUES ('46', 'Online update of major internal logical files is included.', '8', '3');
INSERT INTO `fpa_gscpoint` VALUES ('47', 'In addition, protection against data lost is essential and has been specially designed and programmed in the system.', '8', '4');
INSERT INTO `fpa_gscpoint` VALUES ('48', 'In addition, high volumes bring cost considerations into the recovery process. Highly automated recovery procedures with minimum operator intervention are included.', '8', '5');
INSERT INTO `fpa_gscpoint` VALUES ('49', 'None of the above.', '9', '0');
INSERT INTO `fpa_gscpoint` VALUES ('50', 'Any one of the above.', '9', '1');
INSERT INTO `fpa_gscpoint` VALUES ('51', 'Any two of the above.', '9', '2');
INSERT INTO `fpa_gscpoint` VALUES ('52', 'Any three of the above.', '9', '3');
INSERT INTO `fpa_gscpoint` VALUES ('53', 'Any four of the above.', '9', '4');
INSERT INTO `fpa_gscpoint` VALUES ('54', 'All five of the above.', '9', '5');
INSERT INTO `fpa_gscpoint` VALUES ('55', 'No reusable code.', '10', '0');
INSERT INTO `fpa_gscpoint` VALUES ('56', 'Reusable code is used within the application.', '10', '1');
INSERT INTO `fpa_gscpoint` VALUES ('57', 'Less than 10% of the application considered more than one user\'s needs.', '10', '2');
INSERT INTO `fpa_gscpoint` VALUES ('58', 'Ten percent (10%) or more of the application considered more than one user\'s needs.', '10', '3');
INSERT INTO `fpa_gscpoint` VALUES ('59', 'The application was specifically packaged and/or documented to ease re-use, and the application is customized by the user at source code level.', '10', '4');
INSERT INTO `fpa_gscpoint` VALUES ('60', 'The application was specifically packaged and/or documented to ease re-use, and the application is customized for use by means of user parameter maintenance.', '10', '5');
INSERT INTO `fpa_gscpoint` VALUES ('61', 'No special considerations were stated by the user, and no special setup is required for installation.', '11', '0');
INSERT INTO `fpa_gscpoint` VALUES ('62', 'No special considerations were stated by the user but special setup is required for installation.', '11', '1');
INSERT INTO `fpa_gscpoint` VALUES ('63', 'Conversion and installation requirements were stated by the user, and conversion and installation guides were provided and tested. The impact of conversion on the project is not considered to be important.', '11', '2');
INSERT INTO `fpa_gscpoint` VALUES ('64', 'Conversion and installation requirements were stated by the user, and conversion and installation guides were provided and tested. The impact of conversion on the project is considered to be important.', '11', '3');
INSERT INTO `fpa_gscpoint` VALUES ('65', 'In addition to 2 above, automated conversion and installation tools were provided and tested.', '11', '4');
INSERT INTO `fpa_gscpoint` VALUES ('66', 'In addition to 3 above, automated conversion and installation tools were provided and tested.', '11', '5');
INSERT INTO `fpa_gscpoint` VALUES ('67', 'No special operational considerations other than the normal back-up procedures were stated by the user.', '12', '0');
INSERT INTO `fpa_gscpoint` VALUES ('68', 'One, some, or all of the following items apply to the application. Select all that apply. Each item has a point value of one, except as noted otherwise.', '12', '1');
INSERT INTO `fpa_gscpoint` VALUES ('69', 'Effective start-up, back-up, and recovery processes were provided, but operator intervention is required.', '12', '2');
INSERT INTO `fpa_gscpoint` VALUES ('70', 'Effective start-up, back-up, and recovery processes were provided, but no operator intervention is required (count as two items).', '12', '3');
INSERT INTO `fpa_gscpoint` VALUES ('71', 'The application minimizes the need for tape mounts.</br>The application minimizes the need for paper handling.', '12', '4');
INSERT INTO `fpa_gscpoint` VALUES ('72', 'The application is designed for unattended operation. Unattended operation means no operator intervention is required to operate the system other than to start up or shut down the application. Automatic error recovery is a feature of the application.', '12', '5');
INSERT INTO `fpa_gscpoint` VALUES ('73', 'User requirements do not require considering the needs of more than one user/installation site.', '13', '0');
INSERT INTO `fpa_gscpoint` VALUES ('74', 'Needs of multiple sites were considered in the design, and the application is designed to operate only under identical hardware and software environments.', '13', '1');
INSERT INTO `fpa_gscpoint` VALUES ('75', 'Needs of multiple sites were considered in the design, and the application is designed to operate only under similar hardware and/or software environments.', '13', '2');
INSERT INTO `fpa_gscpoint` VALUES ('76', 'Needs of multiple sites were considered in the design, and the application is designed to operate under different hardware and/or software environments.', '13', '3');
INSERT INTO `fpa_gscpoint` VALUES ('77', 'Documentation and support plan are provided and tested to support the application at multiple sites and the application is as described by 1 or 2.', '13', '4');
INSERT INTO `fpa_gscpoint` VALUES ('78', 'Documentation and support plan are provided and tested to support the application at multiple sites and the application is as described by 3.', '13', '5');
INSERT INTO `fpa_gscpoint` VALUES ('79', 'None of the above.', '14', '0');
INSERT INTO `fpa_gscpoint` VALUES ('80', 'Any one of the above.', '14', '1');
INSERT INTO `fpa_gscpoint` VALUES ('81', 'Any two of the above.', '14', '2');
INSERT INTO `fpa_gscpoint` VALUES ('82', 'Any three of the above.', '14', '3');
INSERT INTO `fpa_gscpoint` VALUES ('83', 'Any four of the above.', '14', '4');
INSERT INTO `fpa_gscpoint` VALUES ('84', 'All five of the above.', '14', '5');

-- ----------------------------
-- Table structure for fpa_tdi
-- ----------------------------
DROP TABLE IF EXISTS `fpa_tdi`;
CREATE TABLE `fpa_tdi` (
  `id_tdi` int(11) NOT NULL AUTO_INCREMENT,
  `id_gsc` int(11) DEFAULT NULL,
  `value` int(11) NOT NULL,
  `id_fpa` int(11) NOT NULL,
  PRIMARY KEY (`id_tdi`),
  KEY `id_fpa` (`id_fpa`),
  KEY `id_gsc` (`id_gsc`) USING BTREE,
  CONSTRAINT `fpa_tdi_ibfk_1` FOREIGN KEY (`id_fpa`) REFERENCES `fpa_fpa` (`id_fpa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fpa_tdi_ibfk_2` FOREIGN KEY (`id_gsc`) REFERENCES `fpa_gsc` (`id_gsc`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_tdi
-- ----------------------------
INSERT INTO `fpa_tdi` VALUES ('2', '1', '4', '1');
INSERT INTO `fpa_tdi` VALUES ('3', '2', '3', '1');
INSERT INTO `fpa_tdi` VALUES ('4', '3', '1', '1');
INSERT INTO `fpa_tdi` VALUES ('5', '4', '1', '1');
INSERT INTO `fpa_tdi` VALUES ('6', '5', '0', '1');
INSERT INTO `fpa_tdi` VALUES ('7', '6', '5', '1');
INSERT INTO `fpa_tdi` VALUES ('8', '7', '3', '1');
INSERT INTO `fpa_tdi` VALUES ('9', '8', '2', '1');
INSERT INTO `fpa_tdi` VALUES ('10', '9', '1', '1');
INSERT INTO `fpa_tdi` VALUES ('11', '10', '1', '1');
INSERT INTO `fpa_tdi` VALUES ('12', '11', '0', '1');
INSERT INTO `fpa_tdi` VALUES ('13', '12', '0', '1');
INSERT INTO `fpa_tdi` VALUES ('14', '13', '3', '1');
INSERT INTO `fpa_tdi` VALUES ('15', '14', '1', '1');
INSERT INTO `fpa_tdi` VALUES ('17', '1', '4', '2');
INSERT INTO `fpa_tdi` VALUES ('18', '2', '3', '2');
INSERT INTO `fpa_tdi` VALUES ('19', '3', '1', '2');
INSERT INTO `fpa_tdi` VALUES ('20', '4', '1', '2');
INSERT INTO `fpa_tdi` VALUES ('21', '5', '0', '2');
INSERT INTO `fpa_tdi` VALUES ('22', '6', '5', '2');
INSERT INTO `fpa_tdi` VALUES ('23', '7', '3', '2');
INSERT INTO `fpa_tdi` VALUES ('24', '8', '2', '2');
INSERT INTO `fpa_tdi` VALUES ('25', '9', '1', '2');
INSERT INTO `fpa_tdi` VALUES ('26', '10', '1', '2');
INSERT INTO `fpa_tdi` VALUES ('27', '11', '0', '2');
INSERT INTO `fpa_tdi` VALUES ('28', '12', '0', '2');
INSERT INTO `fpa_tdi` VALUES ('29', '13', '3', '2');
INSERT INTO `fpa_tdi` VALUES ('30', '14', '1', '2');
INSERT INTO `fpa_tdi` VALUES ('31', '1', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('32', '2', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('33', '3', '3', '9');
INSERT INTO `fpa_tdi` VALUES ('34', '4', '1', '9');
INSERT INTO `fpa_tdi` VALUES ('35', '5', '1', '9');
INSERT INTO `fpa_tdi` VALUES ('36', '6', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('37', '7', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('38', '8', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('39', '9', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('40', '10', '1', '9');
INSERT INTO `fpa_tdi` VALUES ('41', '11', '0', '9');
INSERT INTO `fpa_tdi` VALUES ('42', '12', '2', '9');
INSERT INTO `fpa_tdi` VALUES ('43', '13', '2', '9');
INSERT INTO `fpa_tdi` VALUES ('45', '14', '1', '9');
INSERT INTO `fpa_tdi` VALUES ('46', '1', '1', '3');
INSERT INTO `fpa_tdi` VALUES ('47', '1', '3', '14');
INSERT INTO `fpa_tdi` VALUES ('48', '2', '1', '14');
INSERT INTO `fpa_tdi` VALUES ('49', '3', '1', '14');
INSERT INTO `fpa_tdi` VALUES ('50', '4', '2', '14');
INSERT INTO `fpa_tdi` VALUES ('51', '5', '4', '14');
INSERT INTO `fpa_tdi` VALUES ('52', '6', '3', '14');
INSERT INTO `fpa_tdi` VALUES ('53', '7', '3', '14');
INSERT INTO `fpa_tdi` VALUES ('54', '8', '2', '14');
INSERT INTO `fpa_tdi` VALUES ('55', '9', '3', '14');
INSERT INTO `fpa_tdi` VALUES ('56', '10', '1', '14');
INSERT INTO `fpa_tdi` VALUES ('57', '11', '2', '14');
INSERT INTO `fpa_tdi` VALUES ('58', '12', '1', '14');
INSERT INTO `fpa_tdi` VALUES ('59', '13', '2', '14');
INSERT INTO `fpa_tdi` VALUES ('60', '14', '3', '14');

-- ----------------------------
-- Table structure for fpa_user
-- ----------------------------
DROP TABLE IF EXISTS `fpa_user`;
CREATE TABLE `fpa_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_user` int(11) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `no_user` (`no_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fpa_user
-- ----------------------------
INSERT INTO `fpa_user` VALUES ('dummy', 'dummy', '1');
INSERT INTO `fpa_user` VALUES ('hamzah', 'hamzah', '0');
