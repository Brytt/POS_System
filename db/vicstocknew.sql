/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : vicstock

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 20/06/2020 21:02:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for app_activities
-- ----------------------------
DROP TABLE IF EXISTS `app_activities`;
CREATE TABLE `app_activities`  (
  `ACTV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACTV_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_ACTORID` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_MESSAGE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_DATE` datetime(0) NULL DEFAULT NULL,
  `ACTV_TITLE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_ACTCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_TYPE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_ICON` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ACTV_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ACTV_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 124 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_activities
-- ----------------------------
INSERT INTO `app_activities` VALUES (117, 'ACT20-0000053', 'USR20-0000003', 'CMP20-0000001', 'You added Customer Issue contact us message', '2020-06-19 10:45:26', 'Added Contact Us Message', 'CAT20-0000003', 'Added Contact Us Message', 'fas fa-headset', '1');
INSERT INTO `app_activities` VALUES (116, 'ACT20-0000052', 'USR20-0000003', 'CMP20-0000001', 'You updated Watchman of your setting\'s details', '2020-06-19 10:45:10', 'Watchman', 'CMP20-0000001', 'Updated Settings Details', 'fas fa-cogs', '1');
INSERT INTO `app_activities` VALUES (115, 'ACT20-0000051', 'USR20-0000003', 'CMP20-0000001', 'You updated Nii Addoe of your categories', '2020-06-19 10:45:00', 'Updated Staff Details', 'STF20-0000001', 'Updated Staff Details', 'fas fa-users', '1');
INSERT INTO `app_activities` VALUES (114, 'ACT20-0000050', 'USR20-0000003', 'CMP20-0000001', 'You updated Nii Addo of your categories', '2020-06-19 10:43:02', 'Updated Staff Details', 'STF20-0000001', 'Updated Staff Details', 'fas fa-users', '1');
INSERT INTO `app_activities` VALUES (113, 'ACT20-0000049', 'USR20-0000003', 'CMP20-0000001', 'You added Nii Boye to your staffs', '2020-06-19 10:42:43', 'Added Staff', 'STF20-0000001', 'Added Staff', 'fas fa-users', '1');
INSERT INTO `app_activities` VALUES (112, 'ACT20-0000048', 'USR20-0000003', 'CMP20-0000001', 'You added 20 of your expense of code EXP20-0000001', '2020-06-19 10:39:11', 'Made Payment Topup', 'EXP20-0000001', 'Updated Expense [:Expense Payment]', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (111, 'ACT20-0000047', 'USR20-0000003', 'CMP20-0000001', 'You added 100 of your expense of code EXP20-0000001', '2020-06-19 10:38:50', 'Made Payment Topup', 'EXP20-0000001', 'Updated Expense [:Expense Payment]', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (110, 'ACT20-0000046', 'USR20-0000003', 'CMP20-0000001', 'You added 100 of your expense of code EXP20-0000001', '2020-06-19 10:38:34', 'Made Payment Topup', 'EXP20-0000001', 'Updated Expense [:Expense Payment]', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (109, 'ACT20-0000045', 'USR20-0000003', 'CMP20-0000001', 'You paid 20 of a total 200', '2020-06-19 10:32:20', 'Water Bill', 'EXP20-0000001', 'Added Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (108, 'ACT20-0000044', 'USR20-0000003', 'CMP20-0000001', 'You deleted EXC20-0000004 from your expenses categories', '2020-06-19 10:28:55', 'Deleted Expense', 'EXC20-0000004', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (107, 'ACT20-0000043', 'USR20-0000003', 'CMP20-0000001', 'You deleted EXC20-0000005 from your expenses categories', '2020-06-19 10:28:50', 'Deleted Expense', 'EXC20-0000005', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (106, 'ACT20-0000042', 'USR20-0000003', 'CMP20-0000001', 'You added Water Bill a list of your expense categories', '2020-06-19 10:22:16', 'Water Bill', 'EXC20-0000005', 'Added Expense Category', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_activities` VALUES (105, 'ACT20-0000041', 'USR20-0000003', 'CMP20-0000001', 'You added Water Bill a list of your expense categories', '2020-06-19 10:21:34', 'Water Bill', 'EXC20-0000004', 'Added Expense Category', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_activities` VALUES (104, 'ACT20-0000040', 'USR20-0000003', 'CMP20-0000001', 'You added Water Bill a list of your expense categories', '2020-06-19 10:17:58', 'Water Bill', 'EXC20-0000003', 'Added Expense Category', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_activities` VALUES (103, 'ACT20-0000039', 'USR20-0000003', 'CMP20-0000001', 'You deleted EXC20-0000001 from your expenses', '2020-06-19 10:13:26', 'Deleted Expense', 'EXC20-0000001', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (102, 'ACT20-0000038', 'USR20-0000003', 'CMP20-0000001', 'You added Electricity Bill a list of your expense categories', '2020-06-19 10:13:15', 'Electricity Bill', 'EXC20-0000002', 'Added Expense Category', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_activities` VALUES (101, 'ACT20-0000037', 'USR20-0000003', 'CMP20-0000001', 'You added Electricity Bill a list of your expense categories', '2020-06-19 10:12:03', 'Electricity Bill', 'EXC20-0000001', 'Added Expense Category', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_activities` VALUES (100, 'ACT20-0000036', 'USR20-0000003', 'CMP20-0000001', 'You updated-Edit Rolex SS1 more stock to 20 ', '2020-06-19 10:00:36', 'PRO20-0000004', 'PRO20-0000004', 'Added Product Stock', 'fas fa-cubes', '1');
INSERT INTO `app_activities` VALUES (99, 'ACT20-0000035', 'USR20-0000003', 'CMP20-0000001', 'You updated-Edit Rolex SS1 more stock to 24 ', '2020-06-19 10:00:20', 'PRO20-0000004', 'PRO20-0000004', 'Added Product Stock', 'fas fa-cubes', '1');
INSERT INTO `app_activities` VALUES (98, 'ACT20-0000034', 'USR20-0000003', 'CMP20-0000001', 'You updated-Edit Rolex SS1 more stock to 12 ', '2020-06-19 10:00:02', 'PRO20-0000004', 'PRO20-0000004', 'Added Product Stock', 'fas fa-cubes', '1');
INSERT INTO `app_activities` VALUES (97, 'ACT20-0000033', 'USR20-0000003', 'CMP20-0000001', 'You updated-Edit Rolex SS1 more stock to 12 ', '2020-06-19 09:59:43', 'PRO20-0000004', 'PRO20-0000004', 'Added Product Stock', 'fas fa-cubes', '1');
INSERT INTO `app_activities` VALUES (96, 'ACT20-0000032', 'USR20-0000003', 'CMP20-0000001', 'You updated-Add Rolex SS1 more stock to 40 ', '2020-06-19 09:32:26', 'PRO20-0000004', 'PRO20-0000004', 'Added Product Stock', 'fas fa-cubes', '1');
INSERT INTO `app_activities` VALUES (95, 'ACT20-0000031', 'USR20-0000003', 'CMP20-0000001', 'You deleted PRO20-0000001 from your products list', '2020-06-19 09:28:56', 'PRO20-0000001', 'PRO20-0000001', 'Deleted Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (94, 'ACT20-0000030', 'USR20-0000003', 'CMP20-0000001', 'You updated Rolex CS222 of your products list', '2020-06-19 09:28:40', 'Rolex CS222', 'PRO20-0000003', 'Updated Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (93, 'ACT20-0000029', 'USR20-0000003', 'CMP20-0000001', 'You updated Rolex CS2 of your products list', '2020-06-19 09:28:31', 'Rolex CS2', 'PRO20-0000003', 'Updated Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (92, 'ACT20-0000028', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex SS1 a list of your products', '2020-06-19 09:04:48', 'Rolex SS1', 'PRO20-0000004', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (91, 'ACT20-0000027', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex CS1 a list of your products', '2020-06-19 09:04:32', 'Rolex CS1', 'PRO20-0000003', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (90, 'ACT20-0000026', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 202 a list of your products', '2020-06-19 09:03:28', 'Rolex 202', 'PRO20-0000002', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (89, 'ACT20-0000025', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 201 a list of your products', '2020-06-19 09:03:15', 'Rolex 201', 'PRO20-0000001', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (88, 'ACT20-0000024', 'USR20-0000003', 'CMP20-0000001', 'You deleted PRO20-0000003 from your products list', '2020-06-19 09:02:05', 'PRO20-0000003', 'PRO20-0000003', 'Deleted Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (87, 'ACT20-0000023', 'USR20-0000003', 'CMP20-0000001', 'You deleted PRO20-0000003 from your products list', '2020-06-19 09:01:44', 'PRO20-0000003', 'PRO20-0000003', 'Deleted Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (86, 'ACT20-0000022', 'USR20-0000003', 'CMP20-0000001', 'You deleted PRO20-0000005 from your products list', '2020-06-19 09:01:35', 'PRO20-0000005', 'PRO20-0000005', 'Deleted Product', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (85, 'ACT20-0000021', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 101 a list of your products', '2020-06-19 09:01:21', 'Rolex 101', 'PRO20-0000005', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (84, 'ACT20-0000020', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 301 a list of your products', '2020-06-19 09:00:32', 'Rolex 301', 'PRO20-0000004', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (83, 'ACT20-0000019', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 301 a list of your products', '2020-06-19 09:00:00', 'Rolex 301', 'PRO20-0000003', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (82, 'ACT20-0000018', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 301 a list of your products', '2020-06-19 08:54:21', 'Rolex 301', 'PRO20-0000002', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (81, 'ACT20-0000017', 'USR20-0000003', 'CMP20-0000001', 'You added Rolex 301 a list of your products', '2020-06-19 08:53:01', 'Rolex 301', 'PRO20-0000001', 'Added Product list of Products', 'fas fa-box', '1');
INSERT INTO `app_activities` VALUES (80, 'ACT20-0000016', 'USR20-0000003', 'CMP20-0000001', 'You updated Digital Watches of your categories', '2020-06-19 08:46:55', 'Digital Watches', 'CAT20-0000002', 'Updated Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (79, 'ACT20-0000015', 'USR20-0000003', 'CMP20-0000001', 'You deleted CAT20-0000002 from your categories', '2020-06-19 08:45:59', 'CAT20-0000002', 'CAT20-0000002', 'Deleted Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (78, 'ACT20-0000014', 'USR20-0000003', 'CMP20-0000001', 'You deleted CAT20-0000002 from your categories', '2020-06-19 08:45:54', 'CAT20-0000002', 'CAT20-0000002', 'Deleted Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (77, 'ACT20-0000013', 'USR20-0000003', 'CMP20-0000001', 'You deleted CAT20-0000002 from your categories', '2020-06-19 08:45:32', 'CAT20-0000002', 'CAT20-0000002', 'Deleted Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (76, 'ACT20-0000012', 'USR20-0000003', 'CMP20-0000001', 'You deleted CAT20-0000002 from your categories', '2020-06-19 08:43:52', 'CAT20-0000002', 'CAT20-0000002', 'Deleted Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (75, 'ACT20-0000011', 'USR20-0000003', 'CMP20-0000001', 'You deleted CAT20-0000002 from your categories', '2020-06-19 08:41:51', 'CAT20-0000002', 'CAT20-0000002', 'Deleted Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (74, 'ACT20-0000010', 'USR20-0000003', 'CMP20-0000001', 'You updated Digital Watche of your categories', '2020-06-19 08:41:41', 'Digital Watche', 'CAT20-0000002', 'Updated Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (73, 'ACT20-0000009', 'USR20-0000003', 'CMP20-0000001', 'You added Digital Watches a list of your categories', '2020-06-19 08:41:19', 'Digital Watches', 'CAT20-0000002', 'Added Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (72, 'ACT20-0000008', 'USR20-0000003', 'CMP20-0000001', 'You added Analog Watches a list of your categories', '2020-06-19 08:39:44', 'Analog Watches', 'CAT20-0000001', 'Added Product Category', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (71, 'ACT20-0000007', 'USR20-0000003', 'CMP20-0000001', 'You added Mr Perez Vondee a list of your suppliers', '2020-06-19 08:37:59', 'Mr Perez Vondee', 'SUP20-0000003', 'Added Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (70, 'ACT20-0000006', 'USR20-0000003', 'CMP20-0000001', 'You deleted SUP20-0000002 from your suppliers', '2020-06-19 08:36:58', 'SUP20-0000002', 'SUP20-0000002', 'Deleted Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (69, 'ACT20-0000005', 'USR20-0000003', 'CMP20-0000001', 'You deleted SUP20-0000002 from your suppliers', '2020-06-19 08:36:52', 'SUP20-0000002', 'SUP20-0000002', 'Deleted Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (68, 'ACT20-0000004', 'USR20-0000003', 'CMP20-0000001', 'You deleted SUP20-0000002 from your suppliers', '2020-06-19 08:34:52', 'SUP20-0000002', 'SUP20-0000002', 'Deleted Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (67, 'ACT20-0000003', 'USR20-0000003', 'CMP20-0000001', 'You updated Mr Perez Vondee of your suppliers', '2020-06-19 08:34:40', 'Mr Perez Vondee', 'SUP20-0000002', 'Updated Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (66, 'ACT20-0000002', 'USR20-0000003', 'CMP20-0000001', 'You added Mr Johnathan Boyee a list of your suppliers', '2020-06-19 08:30:06', 'Mr Johnathan Boyee', 'SUP20-0000002', 'Added Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (65, 'ACT20-0000001', 'USR20-0000003', 'CMP20-0000001', 'You added Mr Johnathan Boye a list of your suppliers', '2020-06-19 08:29:52', 'Mr Johnathan Boye', 'SUP20-0000001', 'Added Product Supplier', 'fas fa-folder-plus', '1');
INSERT INTO `app_activities` VALUES (118, 'ACT20-0000054', 'USR20-0000003', 'CMP20-0000001', 'You updated Selasiee\'s user details', '2020-06-19 10:45:59', 'Selasiee', 'USR20-0000003', 'Updated User Details', 'fas fa-user', '1');
INSERT INTO `app_activities` VALUES (119, 'ACT20-0000055', 'USR20-0000003', 'CMP20-0000001', 'You updated Selasie\'s user details', '2020-06-19 10:46:10', 'Selasie', 'USR20-0000003', 'Updated User Details', 'fas fa-user', '1');
INSERT INTO `app_activities` VALUES (120, 'ACT20-0000056', 'USR20-0000003', 'CMP20-0000001', 'You added  a new sale', '2020-06-20 19:12:41', 'Added NEW SALE', 'SAL20-0000001', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_activities` VALUES (121, 'ACT20-0000057', 'USR20-0000003', 'CMP20-0000001', 'You added  a new sale', '2020-06-20 19:13:47', 'Added NEW SALE', 'SAL20-0000002', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_activities` VALUES (122, 'ACT20-0000058', 'USR20-0000003', 'CMP20-0000001', 'You added  a new sale', '2020-06-20 19:16:50', 'Added NEW SALE', 'SAL20-0000003', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_activities` VALUES (123, 'ACT20-0000059', 'USR20-0000003', 'CMP20-0000001', 'You added SAL20-0000004 a new sale', '2020-06-20 19:17:51', 'Added NEW SALE', 'SAL20-0000004', 'Added NEW SALE', 'fas fa-cart-plus', '1');

-- ----------------------------
-- Table structure for app_companies
-- ----------------------------
DROP TABLE IF EXISTS `app_companies`;
CREATE TABLE `app_companies`  (
  `COMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMP_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_EMAIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_LOCATION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_DESCRIPTION` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_ADDRESS` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_WEBSITE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_ACTORID` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `COMP_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`COMP_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_companies
-- ----------------------------
INSERT INTO `app_companies` VALUES (6, 'CMP20-0000001', 'Watchman', 'watchman@gmail.com', '233555883284', 'East Legon', 'We buy and Sell Watches', 'Accra', 'www.watchman.com', 'USR20-0000003', '1', '2020-06-14 19:44:46');

-- ----------------------------
-- Table structure for app_contactus
-- ----------------------------
DROP TABLE IF EXISTS `app_contactus`;
CREATE TABLE `app_contactus`  (
  `CON_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CON_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_SUBJECT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_MESSAGE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_ACTORID` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CON_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`CON_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_contactus
-- ----------------------------
INSERT INTO `app_contactus` VALUES (2, 'CAT20-0000003', 'Customer Issue', 'Waaaseee', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 10:45:26');

-- ----------------------------
-- Table structure for app_customers
-- ----------------------------
DROP TABLE IF EXISTS `app_customers`;
CREATE TABLE `app_customers`  (
  `CUST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUST_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_ADDRESS` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_MOREINFO` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CUST_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`CUST_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_customers
-- ----------------------------
INSERT INTO `app_customers` VALUES (1, 'CUS20-0000001', 'Owula Boye', '23345576577', 'Awudome', 'Mostly buys gold watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 13:21:12');
INSERT INTO `app_customers` VALUES (2, 'CUS20-0000002', 'Elles Boye', '23376665676', 'Elles Avenue', 'Yeah Bro', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 13:22:54');

-- ----------------------------
-- Table structure for app_employees
-- ----------------------------
DROP TABLE IF EXISTS `app_employees`;
CREATE TABLE `app_employees`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `IS_USER` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_employees
-- ----------------------------
INSERT INTO `app_employees` VALUES (13, 'yaw', '0');
INSERT INTO `app_employees` VALUES (27, 'solo', '1');
INSERT INTO `app_employees` VALUES (28, 'reggie', '0');
INSERT INTO `app_employees` VALUES (29, 'ererer', '0');

-- ----------------------------
-- Table structure for app_eventlog
-- ----------------------------
DROP TABLE IF EXISTS `app_eventlog`;
CREATE TABLE `app_eventlog`  (
  `EVL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EVL_EVTCODE` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EVL_USERID` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EVL_FULLNAME` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EVL_ACTIVITIES` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `EVL_IP` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EVL_SESSION_ID` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EVL_BROWSER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EVL_RAW` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `EVL_INPUTEDDATE` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`EVL_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of app_eventlog
-- ----------------------------
INSERT INTO `app_eventlog` VALUES (1, '002', '-1', '0', 'From a REMOTE IP:::1 USERAGENT:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36  on SESSION ID:cf6mpkcm03he2m9oa3sp9reec7', '::1', 'cf6mpkcm03he2m9oa3sp9reec7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'a:39:{s:9:\"HTTP_HOST\";s:9:\"localhost\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:18:\"HTTP_CACHE_CONTROL\";s:9:\"max-age=0\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:19:\"HTTP_SEC_FETCH_SITE\";s:10:\"cross-site\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:4:\"PATH\";s:1470:\"C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files (x86)\\Intel\\iCLS Client\\;C:\\Program Files\\Intel\\iCLS Client\\;C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\WINDOWS\\System32\\OpenSSH\\;C:\\Program Files\\Git\\cmd;C:\\Program Files (x86)\\Microsoft VS Code\\bin;C:\\Program Files\\TortoiseSVN\\bin;C:\\Program Files\\MongoDB\\Server\\4.0\\bin;C:\\Program Files\\PuTTY\\;C:\\Users\\Sela#\\AppData\\Local\\Programs\\Python\\Python37-32;C:\\Program Files (x86)\\MAVProxy;C:\\Python27;C:\\Python27\\Scripts;C:\\Python27\\Lib\\site-packages\\osascript;C:\\Program Files\\Java\\jdk1.8.0_181\\bin;C:\\Users\\Sela#\\AppData\\Local\\Android\\Sdk\\build-tools\\28.0.1;C:\\Users\\Sela#\\Downloads\\ngrok-stable-windows-amd64;C:\\Program Files (x86)\\Yarn\\bin\\;c:\\Users\\YOUR_USERNAME\\AppData\\Local\\Android\\Sdk\\platform-tools;C:\\Program Files\\VideoLAN\\VLC;C:\\Users\\Sela#\\Documents\\ffmpeg\\bin;C:\\youtube;C:\\wamp64\\bin\\php\\php5.6.35;C:\\composer;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Users\\Sela#\\AppData\\Roaming\\npm;C:\\Program Files\\nodejs\\;C:\\Anaconda\\Scripts;C:\\WINDOWS\\system32\\config\\systemprofile\\AppData\\Local\\Microsoft\\WindowsApps\";s:10:\"SystemRoot\";s:10:\"C:\\WINDOWS\";s:7:\"COMSPEC\";s:27:\"C:\\WINDOWS\\system32\\cmd.exe\";s:7:\"PATHEXT\";s:53:\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\";s:6:\"WINDIR\";s:10:\"C:\\WINDOWS\";s:16:\"SERVER_SIGNATURE\";s:79:\"<address>Apache/2.4.33 (Win64) PHP/7.2.4 Server at localhost Port 80</address>\n\";s:15:\"SERVER_SOFTWARE\";s:31:\"Apache/2.4.33 (Win64) PHP/7.2.4\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:2:\"80\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:12:\"SERVER_ADMIN\";s:29:\"wampserver@wampserver.invalid\";s:15:\"SCRIPT_FILENAME\";s:35:\"C:/wamp64/www/victorstock/index.php\";s:11:\"REMOTE_PORT\";s:5:\"49827\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:3:\"GET\";s:12:\"QUERY_STRING\";s:0:\"\";s:11:\"REQUEST_URI\";s:13:\"/victorstock/\";s:11:\"SCRIPT_NAME\";s:22:\"/victorstock/index.php\";s:8:\"PHP_SELF\";s:22:\"/victorstock/index.php\";s:18:\"REQUEST_TIME_FLOAT\";d:1592638083.25;s:12:\"REQUEST_TIME\";i:1592638083;}', '2020-06-20 07:28:03');
INSERT INTO `app_eventlog` VALUES (2, '001', 'USR20-0000003', 'Selasie Vondee', 'From a REMOTE IP:::1 USERAGENT:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36  on SESSION ID:cf6mpkcm03he2m9oa3sp9reec7', '::1', 'cf6mpkcm03he2m9oa3sp9reec7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'a:44:{s:9:\"HTTP_HOST\";s:9:\"localhost\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:14:\"CONTENT_LENGTH\";s:2:\"91\";s:18:\"HTTP_CACHE_CONTROL\";s:9:\"max-age=0\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:11:\"HTTP_ORIGIN\";s:16:\"http://localhost\";s:12:\"CONTENT_TYPE\";s:33:\"application/x-www-form-urlencoded\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:19:\"HTTP_SEC_FETCH_SITE\";s:11:\"same-origin\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:12:\"HTTP_REFERER\";s:51:\"http://localhost/victorstock/index.php?action=login\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:11:\"HTTP_COOKIE\";s:36:\"PHPSESSID=cf6mpkcm03he2m9oa3sp9reec7\";s:4:\"PATH\";s:1470:\"C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files (x86)\\Intel\\iCLS Client\\;C:\\Program Files\\Intel\\iCLS Client\\;C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\WINDOWS\\System32\\OpenSSH\\;C:\\Program Files\\Git\\cmd;C:\\Program Files (x86)\\Microsoft VS Code\\bin;C:\\Program Files\\TortoiseSVN\\bin;C:\\Program Files\\MongoDB\\Server\\4.0\\bin;C:\\Program Files\\PuTTY\\;C:\\Users\\Sela#\\AppData\\Local\\Programs\\Python\\Python37-32;C:\\Program Files (x86)\\MAVProxy;C:\\Python27;C:\\Python27\\Scripts;C:\\Python27\\Lib\\site-packages\\osascript;C:\\Program Files\\Java\\jdk1.8.0_181\\bin;C:\\Users\\Sela#\\AppData\\Local\\Android\\Sdk\\build-tools\\28.0.1;C:\\Users\\Sela#\\Downloads\\ngrok-stable-windows-amd64;C:\\Program Files (x86)\\Yarn\\bin\\;c:\\Users\\YOUR_USERNAME\\AppData\\Local\\Android\\Sdk\\platform-tools;C:\\Program Files\\VideoLAN\\VLC;C:\\Users\\Sela#\\Documents\\ffmpeg\\bin;C:\\youtube;C:\\wamp64\\bin\\php\\php5.6.35;C:\\composer;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Users\\Sela#\\AppData\\Roaming\\npm;C:\\Program Files\\nodejs\\;C:\\Anaconda\\Scripts;C:\\WINDOWS\\system32\\config\\systemprofile\\AppData\\Local\\Microsoft\\WindowsApps\";s:10:\"SystemRoot\";s:10:\"C:\\WINDOWS\";s:7:\"COMSPEC\";s:27:\"C:\\WINDOWS\\system32\\cmd.exe\";s:7:\"PATHEXT\";s:53:\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\";s:6:\"WINDIR\";s:10:\"C:\\WINDOWS\";s:16:\"SERVER_SIGNATURE\";s:79:\"<address>Apache/2.4.33 (Win64) PHP/7.2.4 Server at localhost Port 80</address>\n\";s:15:\"SERVER_SOFTWARE\";s:31:\"Apache/2.4.33 (Win64) PHP/7.2.4\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:2:\"80\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:12:\"SERVER_ADMIN\";s:29:\"wampserver@wampserver.invalid\";s:15:\"SCRIPT_FILENAME\";s:35:\"C:/wamp64/www/victorstock/index.php\";s:11:\"REMOTE_PORT\";s:5:\"49828\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:4:\"POST\";s:12:\"QUERY_STRING\";s:17:\"action=index&pg=1\";s:11:\"REQUEST_URI\";s:40:\"/victorstock/index.php?action=index&pg=1\";s:11:\"SCRIPT_NAME\";s:22:\"/victorstock/index.php\";s:8:\"PHP_SELF\";s:22:\"/victorstock/index.php\";s:18:\"REQUEST_TIME_FLOAT\";d:1592638087.025;s:12:\"REQUEST_TIME\";i:1592638087;}', '2020-06-20 07:28:07');
INSERT INTO `app_eventlog` VALUES (3, '002', '-1', '0', 'From a REMOTE IP:::1 USERAGENT:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36  on SESSION ID:nnp854rs9niqqb8ueu9l9gmvht', '::1', 'nnp854rs9niqqb8ueu9l9gmvht', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'a:39:{s:9:\"HTTP_HOST\";s:9:\"localhost\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:12:\"HTTP_PURPOSE\";s:8:\"prefetch\";s:19:\"HTTP_SEC_FETCH_SITE\";s:4:\"none\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:4:\"PATH\";s:1470:\"C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files (x86)\\Intel\\iCLS Client\\;C:\\Program Files\\Intel\\iCLS Client\\;C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\WINDOWS\\System32\\OpenSSH\\;C:\\Program Files\\Git\\cmd;C:\\Program Files (x86)\\Microsoft VS Code\\bin;C:\\Program Files\\TortoiseSVN\\bin;C:\\Program Files\\MongoDB\\Server\\4.0\\bin;C:\\Program Files\\PuTTY\\;C:\\Users\\Sela#\\AppData\\Local\\Programs\\Python\\Python37-32;C:\\Program Files (x86)\\MAVProxy;C:\\Python27;C:\\Python27\\Scripts;C:\\Python27\\Lib\\site-packages\\osascript;C:\\Program Files\\Java\\jdk1.8.0_181\\bin;C:\\Users\\Sela#\\AppData\\Local\\Android\\Sdk\\build-tools\\28.0.1;C:\\Users\\Sela#\\Downloads\\ngrok-stable-windows-amd64;C:\\Program Files (x86)\\Yarn\\bin\\;c:\\Users\\YOUR_USERNAME\\AppData\\Local\\Android\\Sdk\\platform-tools;C:\\Program Files\\VideoLAN\\VLC;C:\\Users\\Sela#\\Documents\\ffmpeg\\bin;C:\\youtube;C:\\wamp64\\bin\\php\\php5.6.35;C:\\composer;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Users\\Sela#\\AppData\\Roaming\\npm;C:\\Program Files\\nodejs\\;C:\\Anaconda\\Scripts;C:\\WINDOWS\\system32\\config\\systemprofile\\AppData\\Local\\Microsoft\\WindowsApps\";s:10:\"SystemRoot\";s:10:\"C:\\WINDOWS\";s:7:\"COMSPEC\";s:27:\"C:\\WINDOWS\\system32\\cmd.exe\";s:7:\"PATHEXT\";s:53:\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\";s:6:\"WINDIR\";s:10:\"C:\\WINDOWS\";s:16:\"SERVER_SIGNATURE\";s:79:\"<address>Apache/2.4.33 (Win64) PHP/7.2.4 Server at localhost Port 80</address>\n\";s:15:\"SERVER_SOFTWARE\";s:31:\"Apache/2.4.33 (Win64) PHP/7.2.4\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:2:\"80\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:12:\"SERVER_ADMIN\";s:29:\"wampserver@wampserver.invalid\";s:15:\"SCRIPT_FILENAME\";s:35:\"C:/wamp64/www/victorstock/index.php\";s:11:\"REMOTE_PORT\";s:5:\"51194\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:3:\"GET\";s:12:\"QUERY_STRING\";s:0:\"\";s:11:\"REQUEST_URI\";s:13:\"/victorstock/\";s:11:\"SCRIPT_NAME\";s:22:\"/victorstock/index.php\";s:8:\"PHP_SELF\";s:22:\"/victorstock/index.php\";s:18:\"REQUEST_TIME_FLOAT\";d:1592670477.453;s:12:\"REQUEST_TIME\";i:1592670477;}', '2020-06-20 16:27:57');
INSERT INTO `app_eventlog` VALUES (4, '002', '-1', '0', 'From a REMOTE IP:::1 USERAGENT:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36  on SESSION ID:nnp854rs9niqqb8ueu9l9gmvht', '::1', 'nnp854rs9niqqb8ueu9l9gmvht', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'a:39:{s:9:\"HTTP_HOST\";s:9:\"localhost\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:19:\"HTTP_SEC_FETCH_SITE\";s:4:\"none\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:11:\"HTTP_COOKIE\";s:36:\"PHPSESSID=nnp854rs9niqqb8ueu9l9gmvht\";s:4:\"PATH\";s:1470:\"C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files (x86)\\Intel\\iCLS Client\\;C:\\Program Files\\Intel\\iCLS Client\\;C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\WINDOWS\\System32\\OpenSSH\\;C:\\Program Files\\Git\\cmd;C:\\Program Files (x86)\\Microsoft VS Code\\bin;C:\\Program Files\\TortoiseSVN\\bin;C:\\Program Files\\MongoDB\\Server\\4.0\\bin;C:\\Program Files\\PuTTY\\;C:\\Users\\Sela#\\AppData\\Local\\Programs\\Python\\Python37-32;C:\\Program Files (x86)\\MAVProxy;C:\\Python27;C:\\Python27\\Scripts;C:\\Python27\\Lib\\site-packages\\osascript;C:\\Program Files\\Java\\jdk1.8.0_181\\bin;C:\\Users\\Sela#\\AppData\\Local\\Android\\Sdk\\build-tools\\28.0.1;C:\\Users\\Sela#\\Downloads\\ngrok-stable-windows-amd64;C:\\Program Files (x86)\\Yarn\\bin\\;c:\\Users\\YOUR_USERNAME\\AppData\\Local\\Android\\Sdk\\platform-tools;C:\\Program Files\\VideoLAN\\VLC;C:\\Users\\Sela#\\Documents\\ffmpeg\\bin;C:\\youtube;C:\\wamp64\\bin\\php\\php5.6.35;C:\\composer;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Users\\Sela#\\AppData\\Roaming\\npm;C:\\Program Files\\nodejs\\;C:\\Anaconda\\Scripts;C:\\WINDOWS\\system32\\config\\systemprofile\\AppData\\Local\\Microsoft\\WindowsApps\";s:10:\"SystemRoot\";s:10:\"C:\\WINDOWS\";s:7:\"COMSPEC\";s:27:\"C:\\WINDOWS\\system32\\cmd.exe\";s:7:\"PATHEXT\";s:53:\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\";s:6:\"WINDIR\";s:10:\"C:\\WINDOWS\";s:16:\"SERVER_SIGNATURE\";s:79:\"<address>Apache/2.4.33 (Win64) PHP/7.2.4 Server at localhost Port 80</address>\n\";s:15:\"SERVER_SOFTWARE\";s:31:\"Apache/2.4.33 (Win64) PHP/7.2.4\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:2:\"80\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:12:\"SERVER_ADMIN\";s:29:\"wampserver@wampserver.invalid\";s:15:\"SCRIPT_FILENAME\";s:35:\"C:/wamp64/www/victorstock/index.php\";s:11:\"REMOTE_PORT\";s:5:\"51194\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:3:\"GET\";s:12:\"QUERY_STRING\";s:0:\"\";s:11:\"REQUEST_URI\";s:13:\"/victorstock/\";s:11:\"SCRIPT_NAME\";s:22:\"/victorstock/index.php\";s:8:\"PHP_SELF\";s:22:\"/victorstock/index.php\";s:18:\"REQUEST_TIME_FLOAT\";d:1592670478.602;s:12:\"REQUEST_TIME\";i:1592670478;}', '2020-06-20 16:27:58');
INSERT INTO `app_eventlog` VALUES (5, '001', 'USR20-0000003', 'Selasie Vondee', 'From a REMOTE IP:::1 USERAGENT:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36  on SESSION ID:nnp854rs9niqqb8ueu9l9gmvht', '::1', 'nnp854rs9niqqb8ueu9l9gmvht', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'a:44:{s:9:\"HTTP_HOST\";s:9:\"localhost\";s:15:\"HTTP_CONNECTION\";s:10:\"keep-alive\";s:14:\"CONTENT_LENGTH\";s:2:\"91\";s:18:\"HTTP_CACHE_CONTROL\";s:9:\"max-age=0\";s:30:\"HTTP_UPGRADE_INSECURE_REQUESTS\";s:1:\"1\";s:11:\"HTTP_ORIGIN\";s:16:\"http://localhost\";s:12:\"CONTENT_TYPE\";s:33:\"application/x-www-form-urlencoded\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36\";s:11:\"HTTP_ACCEPT\";s:124:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\";s:19:\"HTTP_SEC_FETCH_SITE\";s:11:\"same-origin\";s:19:\"HTTP_SEC_FETCH_MODE\";s:8:\"navigate\";s:19:\"HTTP_SEC_FETCH_USER\";s:2:\"?1\";s:19:\"HTTP_SEC_FETCH_DEST\";s:8:\"document\";s:12:\"HTTP_REFERER\";s:51:\"http://localhost/victorstock/index.php?action=login\";s:20:\"HTTP_ACCEPT_ENCODING\";s:17:\"gzip, deflate, br\";s:20:\"HTTP_ACCEPT_LANGUAGE\";s:14:\"en-US,en;q=0.9\";s:11:\"HTTP_COOKIE\";s:36:\"PHPSESSID=nnp854rs9niqqb8ueu9l9gmvht\";s:4:\"PATH\";s:1470:\"C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath;C:\\Program Files (x86)\\Intel\\iCLS Client\\;C:\\Program Files\\Intel\\iCLS Client\\;C:\\WINDOWS\\system32;C:\\WINDOWS;C:\\WINDOWS\\System32\\Wbem;C:\\WINDOWS\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\IPT;C:\\WINDOWS\\System32\\OpenSSH\\;C:\\Program Files\\Git\\cmd;C:\\Program Files (x86)\\Microsoft VS Code\\bin;C:\\Program Files\\TortoiseSVN\\bin;C:\\Program Files\\MongoDB\\Server\\4.0\\bin;C:\\Program Files\\PuTTY\\;C:\\Users\\Sela#\\AppData\\Local\\Programs\\Python\\Python37-32;C:\\Program Files (x86)\\MAVProxy;C:\\Python27;C:\\Python27\\Scripts;C:\\Python27\\Lib\\site-packages\\osascript;C:\\Program Files\\Java\\jdk1.8.0_181\\bin;C:\\Users\\Sela#\\AppData\\Local\\Android\\Sdk\\build-tools\\28.0.1;C:\\Users\\Sela#\\Downloads\\ngrok-stable-windows-amd64;C:\\Program Files (x86)\\Yarn\\bin\\;c:\\Users\\YOUR_USERNAME\\AppData\\Local\\Android\\Sdk\\platform-tools;C:\\Program Files\\VideoLAN\\VLC;C:\\Users\\Sela#\\Documents\\ffmpeg\\bin;C:\\youtube;C:\\wamp64\\bin\\php\\php5.6.35;C:\\composer;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Users\\Sela#\\AppData\\Roaming\\npm;C:\\Program Files\\nodejs\\;C:\\Anaconda\\Scripts;C:\\WINDOWS\\system32\\config\\systemprofile\\AppData\\Local\\Microsoft\\WindowsApps\";s:10:\"SystemRoot\";s:10:\"C:\\WINDOWS\";s:7:\"COMSPEC\";s:27:\"C:\\WINDOWS\\system32\\cmd.exe\";s:7:\"PATHEXT\";s:53:\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\";s:6:\"WINDIR\";s:10:\"C:\\WINDOWS\";s:16:\"SERVER_SIGNATURE\";s:79:\"<address>Apache/2.4.33 (Win64) PHP/7.2.4 Server at localhost Port 80</address>\n\";s:15:\"SERVER_SOFTWARE\";s:31:\"Apache/2.4.33 (Win64) PHP/7.2.4\";s:11:\"SERVER_NAME\";s:9:\"localhost\";s:11:\"SERVER_ADDR\";s:3:\"::1\";s:11:\"SERVER_PORT\";s:2:\"80\";s:11:\"REMOTE_ADDR\";s:3:\"::1\";s:13:\"DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:14:\"REQUEST_SCHEME\";s:4:\"http\";s:14:\"CONTEXT_PREFIX\";s:0:\"\";s:21:\"CONTEXT_DOCUMENT_ROOT\";s:13:\"C:/wamp64/www\";s:12:\"SERVER_ADMIN\";s:29:\"wampserver@wampserver.invalid\";s:15:\"SCRIPT_FILENAME\";s:35:\"C:/wamp64/www/victorstock/index.php\";s:11:\"REMOTE_PORT\";s:5:\"51194\";s:17:\"GATEWAY_INTERFACE\";s:7:\"CGI/1.1\";s:15:\"SERVER_PROTOCOL\";s:8:\"HTTP/1.1\";s:14:\"REQUEST_METHOD\";s:4:\"POST\";s:12:\"QUERY_STRING\";s:17:\"action=index&pg=1\";s:11:\"REQUEST_URI\";s:40:\"/victorstock/index.php?action=index&pg=1\";s:11:\"SCRIPT_NAME\";s:22:\"/victorstock/index.php\";s:8:\"PHP_SELF\";s:22:\"/victorstock/index.php\";s:18:\"REQUEST_TIME_FLOAT\";d:1592670481.322;s:12:\"REQUEST_TIME\";i:1592670481;}', '2020-06-20 16:28:01');

-- ----------------------------
-- Table structure for app_expensecategory
-- ----------------------------
DROP TABLE IF EXISTS `app_expensecategory`;
CREATE TABLE `app_expensecategory`  (
  `EXCAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXCAT_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_DESCRIPTION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXCAT_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`EXCAT_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_expensecategory
-- ----------------------------
INSERT INTO `app_expensecategory` VALUES (6, 'EXC20-0000002', 'Electricity Bill', 'Electricity Bill Expenses', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 10:13:15');
INSERT INTO `app_expensecategory` VALUES (5, 'EXC20-0000001', 'Electricity Bill', 'Electricity Bill Expenses', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 10:12:03');
INSERT INTO `app_expensecategory` VALUES (7, 'EXC20-0000003', 'Water Bill', 'Water Bill Expenses', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 10:17:58');
INSERT INTO `app_expensecategory` VALUES (8, 'EXC20-0000004', 'Water Bill', 'Water Bill Expenses', 'USR20-0000003', 'CMP20-0000001', '0', '2020-06-19 10:21:34');
INSERT INTO `app_expensecategory` VALUES (9, 'EXC20-0000005', 'Water Bill', 'Water Bill Expenses', 'USR20-0000003', 'CMP20-0000001', '0', '2020-06-19 10:22:16');

-- ----------------------------
-- Table structure for app_expenses
-- ----------------------------
DROP TABLE IF EXISTS `app_expenses`;
CREATE TABLE `app_expenses`  (
  `EXPS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXPS_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_ACTORNAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_CATCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_CATNAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_TOTALAMOUNT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_AMOUNTPAID` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EXPS_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`EXPS_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_expenses
-- ----------------------------
INSERT INTO `app_expenses` VALUES (4, 'EXP20-0000001', 'USR20-0000003', 'Selasie Vondee', 'CMP20-0000001', 'EXC20-0000003', 'Water Bill', '200', '140', '1', '2020-06-19 10:32:20');

-- ----------------------------
-- Table structure for app_messages
-- ----------------------------
DROP TABLE IF EXISTS `app_messages`;
CREATE TABLE `app_messages`  (
  `MESG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MESG_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_RECEIVER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_RECEIVER_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_SENDER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_SENDER_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_BODY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MESG_DATEADDED` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`MESG_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for app_notifications
-- ----------------------------
DROP TABLE IF EXISTS `app_notifications`;
CREATE TABLE `app_notifications`  (
  `NOTI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOTI_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_SENDER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_RECEIVER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_RECEIVERCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_MESSAGE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_TYPE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_DATE` datetime(0) NULL DEFAULT NULL,
  `NOTI_SERVICE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_TITLE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_ICON` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NOTI_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`NOTI_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 139 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_notifications
-- ----------------------------
INSERT INTO `app_notifications` VALUES (138, 'NFY20-0000059', 'USR20-0000003', 'USR20-0000003', NULL, 'You added SAL20-0000004 a new sale', 'Added NEW SALE', '2020-06-20 19:17:51', 'SAL20-0000004', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_notifications` VALUES (137, 'NFY20-0000058', 'USR20-0000003', 'USR20-0000003', NULL, 'You added  a new sale', 'Added NEW SALE', '2020-06-20 19:16:50', 'SAL20-0000003', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_notifications` VALUES (136, 'NFY20-0000057', 'USR20-0000003', 'USR20-0000003', NULL, 'You added  a new sale', 'Added NEW SALE', '2020-06-20 19:13:47', 'SAL20-0000002', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_notifications` VALUES (135, 'NFY20-0000056', 'USR20-0000003', 'USR20-0000003', NULL, 'You added  a new sale', 'Added NEW SALE', '2020-06-20 19:12:41', 'SAL20-0000001', 'Added NEW SALE', 'fas fa-cart-plus', '1');
INSERT INTO `app_notifications` VALUES (134, 'NFY20-0000055', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Selasie\'s user details', 'Updated User Details', '2020-06-19 10:46:10', 'USR20-0000003', 'Selasie', 'fas fa-user', '1');
INSERT INTO `app_notifications` VALUES (133, 'NFY20-0000054', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Selasiee\'s user details', 'Updated User Details', '2020-06-19 10:45:59', 'USR20-0000003', 'Selasiee', 'fas fa-user', '1');
INSERT INTO `app_notifications` VALUES (132, 'NFY20-0000053', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Customer Issue contact us message', 'Added Contact Us Message', '2020-06-19 10:45:26', 'CAT20-0000003', 'Added Contact Us Message', 'fas fa-headset', '1');
INSERT INTO `app_notifications` VALUES (131, 'NFY20-0000052', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Watchman of your setting\'s details', 'Updated Settings Details', '2020-06-19 10:45:10', 'CMP20-0000001', 'Watchman', 'fas fa-cogs', '1');
INSERT INTO `app_notifications` VALUES (130, 'NFY20-0000051', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Nii Addoe of your categories', 'Updated Staff Details', '2020-06-19 10:45:00', 'STF20-0000001', 'Updated Staff Details', 'fas fa-users', '1');
INSERT INTO `app_notifications` VALUES (129, 'NFY20-0000050', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Nii Addo of your categories', 'Updated Staff Details', '2020-06-19 10:43:02', 'STF20-0000001', 'Updated Staff Details', 'fas fa-users', '1');
INSERT INTO `app_notifications` VALUES (128, 'NFY20-0000049', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Nii Boye to your staffs', 'Added Staff', '2020-06-19 10:42:43', 'STF20-0000001', 'Added Staff', 'fas fa-users', '1');
INSERT INTO `app_notifications` VALUES (127, 'NFY20-0000048', 'USR20-0000003', 'USR20-0000003', NULL, 'You added 20 of your expense of code EXP20-0000001', 'Updated Expense [:Expense Payment]', '2020-06-19 10:39:11', 'EXP20-0000001', 'Made Payment Topup', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (126, 'NFY20-0000047', 'USR20-0000003', 'USR20-0000003', NULL, 'You added 100 of your expense of code EXP20-0000001', 'Updated Expense [:Expense Payment]', '2020-06-19 10:38:50', 'EXP20-0000001', 'Made Payment Topup', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (125, 'NFY20-0000046', 'USR20-0000003', 'USR20-0000003', NULL, 'You added 100 of your expense of code EXP20-0000001', 'Updated Expense [:Expense Payment]', '2020-06-19 10:38:34', 'EXP20-0000001', 'Made Payment Topup', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (124, 'NFY20-0000045', 'USR20-0000003', 'USR20-0000003', NULL, 'You paid 20 of a total 200', 'Added Expense', '2020-06-19 10:32:20', 'EXP20-0000001', 'Water Bill', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (123, 'NFY20-0000044', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted EXC20-0000004 from your expenses categories', 'Deleted Expense', '2020-06-19 10:28:55', 'EXC20-0000004', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (122, 'NFY20-0000043', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted EXC20-0000005 from your expenses categories', 'Deleted Expense', '2020-06-19 10:28:50', 'EXC20-0000005', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (121, 'NFY20-0000042', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Water Bill a list of your expense categories', 'Added Expense Category', '2020-06-19 10:22:16', 'EXC20-0000005', 'Water Bill', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_notifications` VALUES (120, 'NFY20-0000041', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Water Bill a list of your expense categories', 'Added Expense Category', '2020-06-19 10:21:34', 'EXC20-0000004', 'Water Bill', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_notifications` VALUES (119, 'NFY20-0000040', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Water Bill a list of your expense categories', 'Added Expense Category', '2020-06-19 10:17:58', 'EXC20-0000003', 'Water Bill', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_notifications` VALUES (118, 'NFY20-0000039', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted EXC20-0000001 from your expenses', 'Deleted Expense', '2020-06-19 10:13:26', 'EXC20-0000001', 'Deleted Expense', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (117, 'NFY20-0000038', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Electricity Bill a list of your expense categories', 'Added Expense Category', '2020-06-19 10:13:15', 'EXC20-0000002', 'Electricity Bill', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_notifications` VALUES (116, 'NFY20-0000037', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Electricity Bill a list of your expense categories', 'Added Expense Category', '2020-06-19 10:12:03', 'EXC20-0000001', 'Electricity Bill', 'fas fa-money-bill-wave', '1');
INSERT INTO `app_notifications` VALUES (115, 'NFY20-0000036', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated-Edit Rolex SS1 more stock to 20 ', 'Added Product Stock', '2020-06-19 10:00:36', 'PRO20-0000004', 'PRO20-0000004', 'fas fa-cubes', '1');
INSERT INTO `app_notifications` VALUES (114, 'NFY20-0000035', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated-Edit Rolex SS1 more stock to 24 ', 'Added Product Stock', '2020-06-19 10:00:20', 'PRO20-0000004', 'PRO20-0000004', 'fas fa-cubes', '1');
INSERT INTO `app_notifications` VALUES (113, 'NFY20-0000034', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated-Edit Rolex SS1 more stock to 12 ', 'Added Product Stock', '2020-06-19 10:00:02', 'PRO20-0000004', 'PRO20-0000004', 'fas fa-cubes', '1');
INSERT INTO `app_notifications` VALUES (112, 'NFY20-0000033', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated-Edit Rolex SS1 more stock to 12 ', 'Added Product Stock', '2020-06-19 09:59:43', 'PRO20-0000004', 'PRO20-0000004', 'fas fa-cubes', '1');
INSERT INTO `app_notifications` VALUES (111, 'NFY20-0000032', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated-Add Rolex SS1 more stock to 40 ', 'Added Product Stock', '2020-06-19 09:32:26', 'PRO20-0000004', 'PRO20-0000004', 'fas fa-cubes', '1');
INSERT INTO `app_notifications` VALUES (110, 'NFY20-0000031', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted PRO20-0000001 from your products list', 'Deleted Product', '2020-06-19 09:28:56', 'PRO20-0000001', 'PRO20-0000001', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (109, 'NFY20-0000030', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Rolex CS222 of your products list', 'Updated Product', '2020-06-19 09:28:40', 'PRO20-0000003', 'Rolex CS222', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (108, 'NFY20-0000029', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Rolex CS2 of your products list', 'Updated Product', '2020-06-19 09:28:31', 'PRO20-0000003', 'Rolex CS2', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (107, 'NFY20-0000028', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex SS1 a list of your products', 'Added Product list of Products', '2020-06-19 09:04:48', 'PRO20-0000004', 'Rolex SS1', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (106, 'NFY20-0000027', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex CS1 a list of your products', 'Added Product list of Products', '2020-06-19 09:04:32', 'PRO20-0000003', 'Rolex CS1', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (105, 'NFY20-0000026', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 202 a list of your products', 'Added Product list of Products', '2020-06-19 09:03:28', 'PRO20-0000002', 'Rolex 202', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (104, 'NFY20-0000025', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 201 a list of your products', 'Added Product list of Products', '2020-06-19 09:03:15', 'PRO20-0000001', 'Rolex 201', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (103, 'NFY20-0000024', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted PRO20-0000003 from your products list', 'Deleted Product', '2020-06-19 09:02:05', 'PRO20-0000003', 'PRO20-0000003', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (102, 'NFY20-0000023', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted PRO20-0000003 from your products list', 'Deleted Product', '2020-06-19 09:01:44', 'PRO20-0000003', 'PRO20-0000003', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (101, 'NFY20-0000022', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted PRO20-0000005 from your products list', 'Deleted Product', '2020-06-19 09:01:35', 'PRO20-0000005', 'PRO20-0000005', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (100, 'NFY20-0000021', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 101 a list of your products', 'Added Product list of Products', '2020-06-19 09:01:21', 'PRO20-0000005', 'Rolex 101', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (99, 'NFY20-0000020', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 301 a list of your products', 'Added Product list of Products', '2020-06-19 09:00:32', 'PRO20-0000004', 'Rolex 301', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (95, 'NFY20-0000016', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Digital Watches of your categories', 'Updated Product Category', '2020-06-19 08:46:55', 'CAT20-0000002', 'Digital Watches', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (94, 'NFY20-0000015', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted CAT20-0000002 from your categories', 'Deleted Product Category', '2020-06-19 08:45:59', 'CAT20-0000002', 'CAT20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (93, 'NFY20-0000014', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted CAT20-0000002 from your categories', 'Deleted Product Category', '2020-06-19 08:45:54', 'CAT20-0000002', 'CAT20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (92, 'NFY20-0000013', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted CAT20-0000002 from your categories', 'Deleted Product Category', '2020-06-19 08:45:32', 'CAT20-0000002', 'CAT20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (90, 'NFY20-0000011', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted CAT20-0000002 from your categories', 'Deleted Product Category', '2020-06-19 08:41:51', 'CAT20-0000002', 'CAT20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (89, 'NFY20-0000010', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Digital Watche of your categories', 'Updated Product Category', '2020-06-19 08:41:41', 'CAT20-0000002', 'Digital Watche', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (88, 'NFY20-0000009', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Digital Watches a list of your categories', 'Added Product Category', '2020-06-19 08:41:19', 'CAT20-0000002', 'Digital Watches', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (87, 'NFY20-0000008', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Analog Watches a list of your categories', 'Added Product Category', '2020-06-19 08:39:44', 'CAT20-0000001', 'Analog Watches', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (86, 'NFY20-0000007', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Mr Perez Vondee a list of your suppliers', 'Added Product Supplier', '2020-06-19 08:37:59', 'SUP20-0000003', 'Mr Perez Vondee', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (84, 'NFY20-0000005', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted SUP20-0000002 from your suppliers', 'Deleted Product Supplier', '2020-06-19 08:36:52', 'SUP20-0000002', 'SUP20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (83, 'NFY20-0000004', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted SUP20-0000002 from your suppliers', 'Deleted Product Supplier', '2020-06-19 08:34:52', 'SUP20-0000002', 'SUP20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (82, 'NFY20-0000003', 'USR20-0000003', 'USR20-0000003', NULL, 'You updated Mr Perez Vondee of your suppliers', 'Updated Product Supplier', '2020-06-19 08:34:40', 'SUP20-0000002', 'Mr Perez Vondee', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (98, 'NFY20-0000019', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 301 a list of your products', 'Added Product list of Products', '2020-06-19 09:00:00', 'PRO20-0000003', 'Rolex 301', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (97, 'NFY20-0000018', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 301 a list of your products', 'Added Product list of Products', '2020-06-19 08:54:21', 'PRO20-0000002', 'Rolex 301', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (96, 'NFY20-0000017', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Rolex 301 a list of your products', 'Added Product list of Products', '2020-06-19 08:53:01', 'PRO20-0000001', 'Rolex 301', 'fas fa-box', '1');
INSERT INTO `app_notifications` VALUES (91, 'NFY20-0000012', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted CAT20-0000002 from your categories', 'Deleted Product Category', '2020-06-19 08:43:52', 'CAT20-0000002', 'CAT20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (85, 'NFY20-0000006', 'USR20-0000003', 'USR20-0000003', NULL, 'You deleted SUP20-0000002 from your suppliers', 'Deleted Product Supplier', '2020-06-19 08:36:58', 'SUP20-0000002', 'SUP20-0000002', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (81, 'NFY20-0000002', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Mr Johnathan Boyee a list of your suppliers', 'Added Product Supplier', '2020-06-19 08:30:06', 'SUP20-0000002', 'Mr Johnathan Boyee', 'fas fa-folder-plus', '1');
INSERT INTO `app_notifications` VALUES (80, 'NFY20-0000001', 'USR20-0000003', 'USR20-0000003', NULL, 'You added Mr Johnathan Boye a list of your suppliers', 'Added Product Supplier', '2020-06-19 08:29:52', 'SUP20-0000001', 'Mr Johnathan Boye', 'fas fa-folder-plus', '1');

-- ----------------------------
-- Table structure for app_product_category
-- ----------------------------
DROP TABLE IF EXISTS `app_product_category`;
CREATE TABLE `app_product_category`  (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_DESCRIPTION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_ACTOR_COMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CAT_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`CAT_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_product_category
-- ----------------------------
INSERT INTO `app_product_category` VALUES (35, 'CAT20-0000002', 'Digital Watches', 'A category of Digital watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 08:41:19');
INSERT INTO `app_product_category` VALUES (34, 'CAT20-0000001', 'Analog Watches', 'A category of Analog watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 08:39:44');

-- ----------------------------
-- Table structure for app_products
-- ----------------------------
DROP TABLE IF EXISTS `app_products`;
CREATE TABLE `app_products`  (
  `PROD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_SPECCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_SUPPLIER_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_SUPPLIER_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_PURCHASEPRICE` decimal(10, 2) NULL DEFAULT NULL,
  `PROD_SALESPRICE` decimal(10, 2) NULL DEFAULT NULL,
  `PROD_DESCRIPTION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_TAXRATE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_QUANTITY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_MINQUANTITY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_CATEGORY_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_CATEGORY_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PROD_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`PROD_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_products
-- ----------------------------
INSERT INTO `app_products` VALUES (12, 'PRO20-0000003', 'Rolex CS222', '2231231232', 'SUP20-0000001', 'Mr Johnathan Boye', 20.00, 50.00, 'Rolex 201 Digital watch', '0', '20', '5', 'CAT20-0000002', 'Digital Watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 09:04:32');
INSERT INTO `app_products` VALUES (13, 'PRO20-0000004', 'Rolex SS1', '2231231232', 'SUP20-0000001', 'Mr Johnathan Boye', 20.00, 50.00, 'Rolex 201 Digital watch', '0', '20', '5', 'CAT20-0000002', 'Digital Watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 09:04:48');
INSERT INTO `app_products` VALUES (10, 'PRO20-0000001', 'Rolex 201', '2231231232', 'SUP20-0000003', 'Mr Perez Vondee', 20.00, 50.00, 'Rolex 201 Analog watch', '0', '20', '5', 'CAT20-0000002', 'Digital Watches', 'USR20-0000003', 'CMP20-0000001', '0', '2020-06-19 09:03:15');
INSERT INTO `app_products` VALUES (11, 'PRO20-0000002', 'Rolex 202', '2231231232', 'SUP20-0000003', 'Mr Perez Vondee', 20.00, 50.00, 'Rolex 201 Analog watch', '0', '20', '5', 'CAT20-0000002', 'Digital Watches', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 09:03:28');

-- ----------------------------
-- Table structure for app_sales
-- ----------------------------
DROP TABLE IF EXISTS `app_sales`;
CREATE TABLE `app_sales`  (
  `SALE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SALE_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_CUSTOMERCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_CUSTOMERNAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_CUSTOMERPHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_PRODUCTSLIST` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `SALE_PRODUCTSPRICETOTAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_PRODUCTSTOTAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_DISCOUNTTOTAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_GRANDTOTAL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_PAIDAMOUNT` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_CHANGE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_TOTALDUE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SALE_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`SALE_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_sales
-- ----------------------------
INSERT INTO `app_sales` VALUES (1, 'SAL20-0000001', 'Owula Boye', 'CUS20-0000001', '23345576577', '[{\"productcode\":\"PRO20-0000003\",\"productname\":\"Rolex CS222\",\"productprice\":\"50.00\",\"productavailable\":\"18\",\"productquantity\":\"2\",\"productamttotal\":\"100\"},{\"productcode\":\"PRO20-0000004\",\"productname\":\"Rolex SS1\",\"productprice\":\"50.00\",\"productavailable\":\"19\",\"productquantity\":\"1\",\"productamttotal\":\"50.00\"}]', '150.00', '2', '', '150.00', '200', '50', '150.00', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-20 19:12:41');
INSERT INTO `app_sales` VALUES (2, 'SAL20-0000002', 'Owula Boye', 'CUS20-0000001', '23345576577', '[{\"productcode\":\"PRO20-0000003\",\"productname\":\"Rolex CS222\",\"productprice\":\"50.00\",\"productavailable\":\"18\",\"productquantity\":\"2\",\"productamttotal\":\"100\"},{\"productcode\":\"PRO20-0000004\",\"productname\":\"Rolex SS1\",\"productprice\":\"50.00\",\"productavailable\":\"19\",\"productquantity\":\"1\",\"productamttotal\":\"50.00\"}]', '150.00', '2', '', '150.00', '200', '50', '150.00', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-20 19:13:47');
INSERT INTO `app_sales` VALUES (3, 'SAL20-0000003', 'Owula Boye', 'CUS20-0000001', '23345576577', '[{\"productcode\":\"PRO20-0000002\",\"productname\":\"Rolex 202\",\"productprice\":\"50.00\",\"productavailable\":\"19\",\"productquantity\":\"1\",\"productamttotal\":\"50.00\"}]', '50.00', '1', '', '50.00', '50', '0', '50.00', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-20 19:16:49');
INSERT INTO `app_sales` VALUES (4, 'SAL20-0000004', 'Owula Boye', 'CUS20-0000001', '23345576577', '[{\"productcode\":\"PRO20-0000002\",\"productname\":\"Rolex 202\",\"productprice\":\"50.00\",\"productavailable\":\"19\",\"productquantity\":\"1\",\"productamttotal\":\"50.00\"}]', '50.00', '1', '', '50.00', '50', '0', '50.00', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-20 19:17:51');

-- ----------------------------
-- Table structure for app_staff
-- ----------------------------
DROP TABLE IF EXISTS `app_staff`;
CREATE TABLE `app_staff`  (
  `STF_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STF_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_DATEOFBIRTH` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_EMAIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_HOMEADDRESS` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_INFO` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_ACCOUNTEMAIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_ACCOUNTPASSWORD` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_ACTORCOMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_STATUS` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `STF_DATEADDED` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`STF_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_staff
-- ----------------------------
INSERT INTO `app_staff` VALUES (3, 'STF20-0000001', 'Nii Addoe', '1990-01-30', '2336775888777', 'nii@mail.com', 'Awudome', 'Yeah Bro', 'nii@WTC', 'd08cfffc486b52eaa2aece740600ef601cb035616573e40f3a8b5923312aec4f', 'USR20-0000003', 'CMP20-0000001', '1', NULL);

-- ----------------------------
-- Table structure for app_suppliers
-- ----------------------------
DROP TABLE IF EXISTS `app_suppliers`;
CREATE TABLE `app_suppliers`  (
  `SUPL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUPL_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_EMAIL` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_LOCATION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_INFO` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_ACTORCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_COMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `SUPL_DATEADDED` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`SUPL_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_suppliers
-- ----------------------------
INSERT INTO `app_suppliers` VALUES (6, 'SUP20-0000003', 'Mr Perez Vondee', '233755562734', 'perez@mail.com', 'Santa Maria', 'Analog Watch Supplier', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 08:37:59');
INSERT INTO `app_suppliers` VALUES (5, 'SUP20-0000002', 'Mr Perez Vondee', '233588553284', 'perez@mail.com', 'Awudome', 'Analog Watch Supplier', 'USR20-0000003', 'CMP20-0000001', '0', '2020-06-19 08:30:06');
INSERT INTO `app_suppliers` VALUES (4, 'SUP20-0000001', 'Mr Johnathan Boye', '233555883284', 'boye@mail.com', 'Awudome', 'Digital Watch Supplier', 'USR20-0000003', 'CMP20-0000001', '1', '2020-06-19 08:29:52');

-- ----------------------------
-- Table structure for app_users
-- ----------------------------
DROP TABLE IF EXISTS `app_users`;
CREATE TABLE `app_users`  (
  `USR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_CODE` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_FIRSTNAME` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_OTHERNAME` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_GENDER` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_COUNTRY` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_USERNAME` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `USR_PASSWORD` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `USR_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_EMAIL` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `USR_LOGIN_STATUS` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `USR_LASTLOGIN_DATE` datetime(0) NULL DEFAULT NULL,
  `USR_STATUS` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1' COMMENT '0 IS INACTIVE, 1IS ACTIVE',
  `USR_BRANCH_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_COMPANY_CODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_ACCESS_LEVEL` enum('1','2','3','4') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1' COMMENT '1 IS ',
  `USR_PHOTO` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_APIKEY` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_DATE_ADDED` datetime(0) NULL DEFAULT NULL,
  `USR_ACTOR_ID` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_ABOUT_USER` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `USR_ACTOR_COMPCODE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`USR_ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_users
-- ----------------------------
INSERT INTO `app_users` VALUES (1, 'USR000001', 'Framework', 'Admin', 'male', '68', 'admin@mail.com', 'd22c60d9ba09b2113a37f00a6e48ec01fc25ad6ebbfca0f1a36694da34489e7b', NULL, 'admin@mail.com', '0', '2020-01-14 11:47:10', '1', 'BRC00000001', 'COM00000001', '1', 'default.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `app_users` VALUES (2, 'USR000002', 'Sharp', 'User', 'male', '68', 'admin@mail.com', 'd22c60d9ba09b2113a37f00a6e48ec01fc25ad6ebbfca0f1a36694da34489e7b', NULL, 'admin@mail.com', '1', NULL, '1', 'BRC00000001', 'COM00000001', '1', 'default.jpg', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `app_users` VALUES (37, 'USR20-0000003', 'Selasie', 'Vondee', NULL, 'Ghana', 'von@sela.com', '7dcd97fcdbfde42f40ce4db83f9884c6f50a57c2d2417b7e8c2232f7eb450784', '233829343434', 'von@sela.com', '0', '2020-06-14 19:46:06', '1', 'USR20-0000002', 'USR20-0000002', '2', '', NULL, '2020-06-14 19:46:06', 'USR20-0000003', NULL, 'CMP20-0000001');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee`  (
  `ID` int(11) NOT NULL COMMENT 'HAS AUTO INCREMENT',
  `EMPLOYEE_NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EMPLOYEE_AGE` tinyint(255) NULL DEFAULT NULL,
  `EMPLOYEE_PHONE` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EMPLOYEE_STATUS` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CREATED_DATE` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) COMMENT 'USES CURRENT TIME STAMP,WITH A THICK',
  `INPUTED_DATE` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'USES CURRENT TIME WITH A THICK',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
