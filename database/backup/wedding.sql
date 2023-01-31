/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : wedding

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 31/01/2023 16:42:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 197 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (99, 'Irul', '');
INSERT INTO `data` VALUES (100, 'Fandhit', '');
INSERT INTO `data` VALUES (101, 'Lutfi', '');
INSERT INTO `data` VALUES (102, 'Rama', '');
INSERT INTO `data` VALUES (103, 'Beny', '');
INSERT INTO `data` VALUES (104, 'Listian', '');
INSERT INTO `data` VALUES (105, 'Xenyx', '');
INSERT INTO `data` VALUES (106, 'Rendra', '');
INSERT INTO `data` VALUES (107, 'Dicky', '');
INSERT INTO `data` VALUES (108, 'Faza', '');
INSERT INTO `data` VALUES (109, 'Rafi', '');
INSERT INTO `data` VALUES (110, 'Yoga', '');
INSERT INTO `data` VALUES (111, 'Clara', '');
INSERT INTO `data` VALUES (112, 'Jarot', '');
INSERT INTO `data` VALUES (113, 'Dimas', '');
INSERT INTO `data` VALUES (114, 'Naufal Rusada', '');
INSERT INTO `data` VALUES (115, 'Afghani Bima', '');
INSERT INTO `data` VALUES (116, 'Dimas', '');
INSERT INTO `data` VALUES (117, 'Afrizal Meka', '');
INSERT INTO `data` VALUES (118, 'Malvin Beban', '');
INSERT INTO `data` VALUES (119, 'Desy', '');
INSERT INTO `data` VALUES (120, 'Riris', '');
INSERT INTO `data` VALUES (121, 'Arlin', '');
INSERT INTO `data` VALUES (122, 'Astrin', '');
INSERT INTO `data` VALUES (123, 'Fajar', '');
INSERT INTO `data` VALUES (124, 'Bagus', '');
INSERT INTO `data` VALUES (125, 'Mba Anggita', '');
INSERT INTO `data` VALUES (126, 'Mulazi', '');
INSERT INTO `data` VALUES (127, 'Muslim', '');
INSERT INTO `data` VALUES (128, 'Dayat', '');
INSERT INTO `data` VALUES (129, 'Abhin', '');
INSERT INTO `data` VALUES (130, 'Prio', '');
INSERT INTO `data` VALUES (131, 'Yusuf Valent', '');
INSERT INTO `data` VALUES (132, 'Shidqi', '');
INSERT INTO `data` VALUES (133, 'Okky', '');
INSERT INTO `data` VALUES (134, 'Mas Ferry', '');
INSERT INTO `data` VALUES (135, 'Andro', '');
INSERT INTO `data` VALUES (136, 'Ardhi', '');
INSERT INTO `data` VALUES (137, 'Chrisna', '');
INSERT INTO `data` VALUES (138, 'Ucok', '');
INSERT INTO `data` VALUES (139, 'Calvin', '');
INSERT INTO `data` VALUES (140, 'Aceng', '');
INSERT INTO `data` VALUES (141, 'Alip', '');
INSERT INTO `data` VALUES (142, 'Tatak', '');
INSERT INTO `data` VALUES (143, 'Ceplong', '');
INSERT INTO `data` VALUES (144, 'Aldo', '');
INSERT INTO `data` VALUES (145, 'Aldis', '');
INSERT INTO `data` VALUES (146, 'Jati', '');
INSERT INTO `data` VALUES (147, 'Taufik', '');
INSERT INTO `data` VALUES (148, 'Faislam', '');
INSERT INTO `data` VALUES (149, 'Mirda', '');
INSERT INTO `data` VALUES (150, 'Akbar', '');
INSERT INTO `data` VALUES (151, 'Adhika', '');
INSERT INTO `data` VALUES (152, 'Iveb', '');
INSERT INTO `data` VALUES (153, 'Mba Inna', '');
INSERT INTO `data` VALUES (154, 'Oji', '');
INSERT INTO `data` VALUES (155, 'Habibi', '');
INSERT INTO `data` VALUES (156, 'Raffialdo', '');
INSERT INTO `data` VALUES (157, 'Bima', '');
INSERT INTO `data` VALUES (158, 'Rijal', '');
INSERT INTO `data` VALUES (159, 'Alvian', '');
INSERT INTO `data` VALUES (160, 'Reza', '');
INSERT INTO `data` VALUES (161, 'Mas Rijal', '');
INSERT INTO `data` VALUES (162, 'Suneo', '');
INSERT INTO `data` VALUES (163, 'Blondo', '');
INSERT INTO `data` VALUES (164, 'Pam', '');
INSERT INTO `data` VALUES (165, 'Sabrina', '');
INSERT INTO `data` VALUES (166, 'Anam', '');
INSERT INTO `data` VALUES (167, 'Khusnul', '');
INSERT INTO `data` VALUES (168, 'Mba Ajeng', '');
INSERT INTO `data` VALUES (169, 'Teguh', '');
INSERT INTO `data` VALUES (170, 'Mas Diki', '');
INSERT INTO `data` VALUES (171, 'Lord Fadil', '');
INSERT INTO `data` VALUES (172, 'Mas Dhefry', '');
INSERT INTO `data` VALUES (173, 'Choirul Syafril', '');
INSERT INTO `data` VALUES (174, 'Onky', '');
INSERT INTO `data` VALUES (175, 'Wildan', '');
INSERT INTO `data` VALUES (176, 'Mas Rohman', '');
INSERT INTO `data` VALUES (177, 'Mas Bagus', '');
INSERT INTO `data` VALUES (178, 'Mas Alif', '');
INSERT INTO `data` VALUES (179, 'Mba Elsa', '');
INSERT INTO `data` VALUES (180, 'Mas Ghilman', '');
INSERT INTO `data` VALUES (181, 'Dani Irawan', '');
INSERT INTO `data` VALUES (182, 'Nur Wachid', '');
INSERT INTO `data` VALUES (183, 'Mas Umar', '');
INSERT INTO `data` VALUES (184, 'Mas Kemon', '');
INSERT INTO `data` VALUES (185, 'Majid', '');
INSERT INTO `data` VALUES (186, 'Mas Fakeh', '');
INSERT INTO `data` VALUES (187, 'Aria Zidaniro', '');
INSERT INTO `data` VALUES (188, 'Iqbal', '');
INSERT INTO `data` VALUES (189, 'Rizal Rfk', '');
INSERT INTO `data` VALUES (190, 'Salwa', '');
INSERT INTO `data` VALUES (191, 'Arfi', '');
INSERT INTO `data` VALUES (192, 'Ali Husni', '');
INSERT INTO `data` VALUES (193, 'Mas Rujas', '');
INSERT INTO `data` VALUES (194, 'Mba Gita', '');
INSERT INTO `data` VALUES (195, 'Hafizh', '');
INSERT INTO `data` VALUES (196, 'Doni', '');

-- ----------------------------
-- Table structure for wishes
-- ----------------------------
DROP TABLE IF EXISTS `wishes`;
CREATE TABLE `wishes`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of wishes
-- ----------------------------
INSERT INTO `wishes` VALUES (1, 'Rama Sullivan', 'Selamat hep, semoga lancar tanpa ada suatu halangan apa pun.', '1', '2023-01-29 21:04:40', NULL);
INSERT INTO `wishes` VALUES (2, 'Fandhitia Giovani', 'Selamat mas, lancar pokok e, bismillah otw nyusul, wkwkkw', '1', '2023-01-30 21:04:40', NULL);
INSERT INTO `wishes` VALUES (3, 'Rohmad Khoirudin', 'Mantab mang hep,  semoga jadi keluarga yang sakinah, mawaddah dan warahmah.', '1', '2023-01-29 00:38:01', NULL);
INSERT INTO `wishes` VALUES (4, 'Nayu', 'Selamat mas hep, semoga lancar sampai hari H, hehe', '1', '2023-01-29 18:38:49', '2023-01-29 18:38:49');
INSERT INTO `wishes` VALUES (5, 'Yoga SW', 'Samawa okashira, semoga lancar.', '1', '2023-01-29 18:46:07', '2023-01-29 18:46:07');
INSERT INTO `wishes` VALUES (6, 'Listian', 'Happy wedding hep, selamat menempuh hidup baru', '1', '2023-01-29 18:47:51', '2023-01-29 18:47:51');
INSERT INTO `wishes` VALUES (8, 'Clara', 'Happy wedding mas Happy, wishing you a long and happy marriage!', '1', '2023-01-30 11:06:33', NULL);
INSERT INTO `wishes` VALUES (9, 'Xenyx', 'Happy wedding yaaa, turut berbahagia akhirnya kalian bersatu dengan janji suci, semoga pernikahan kalian berkah dan selalu menjadi keluarga kecil yg sakinah, mawaddah warrahmahh.', '1', '2023-01-30 11:06:30', NULL);
INSERT INTO `wishes` VALUES (10, 'Dicky', 'I hope to have a happy relationship ending like you guys', '1', '2023-01-30 11:06:28', NULL);
INSERT INTO `wishes` VALUES (11, 'Rendra', 'Turut berbahagia, Semoga menjadi pasangan yang sejati sampai dunia akhirat, semoga dikaruniai keturunan yang saleh dan salehah, dan minta doanya semoga bisa cepat menyusul.', '1', '2023-01-30 11:08:19', NULL);
INSERT INTO `wishes` VALUES (12, 'Faza', 'Mantab mas, lancar pokok e.', '1', '2023-01-30 11:09:55', NULL);
INSERT INTO `wishes` VALUES (13, 'Dimas', 'Selamat yo mas', '1', '2023-01-30 11:10:53', NULL);
INSERT INTO `wishes` VALUES (14, 'Testing', 'asdasdasdasd', '1', '2023-01-31 09:00:41', '2023-01-31 09:00:41');
INSERT INTO `wishes` VALUES (15, 'Odama', 'Selamat pak boss', '1', '2023-01-31 09:08:44', '2023-01-31 09:08:44');
INSERT INTO `wishes` VALUES (16, 'Testing', 'asdasdasd', '0', '2023-01-31 09:14:59', '2023-01-31 09:14:59');

SET FOREIGN_KEY_CHECKS = 1;
