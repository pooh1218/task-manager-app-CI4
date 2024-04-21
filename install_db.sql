
-- ----------------------------
-- Table structure for `material_status_list`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `[DB_PREFIX]material_status_list` (
  `id_material_status` int NOT NULL AUTO_INCREMENT,
  `materials_list_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
   PRIMARY KEY (`id_material_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Table structure for `material_status_list`
-- ----------------------------

-- ----------------------------
-- Table structure for `materials_list`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `[DB_PREFIX]materials_list` (
  `id_materiale` int NOT NULL AUTO_INCREMENT,
  `materials_company` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `materials_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `materials_latime` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `materials_inaltime` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `materials_status` varchar(150) DEFAULT NULL,
  `materials_culoare` varchar(150) DEFAULT NULL,
  `materials_cantitate` varchar(255) DEFAULT NULL,
  `materials_cantitate_mp` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
   PRIMARY KEY (`id_materiale`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
-- ----------------------------
-- Table structure for `materials_list`
-- ----------------------------