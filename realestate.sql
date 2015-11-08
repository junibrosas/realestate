-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.27-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_xadmin.filemedia
CREATE TABLE IF NOT EXISTS `filemedia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.filemedia: ~7 rows (approximately)
/*!40000 ALTER TABLE `filemedia` DISABLE KEYS */;
INSERT INTO `filemedia` (`id`, `filename`, `mime_type`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '1445908792_04_home.jpg', 'image/jpeg', 548699, '2015-10-27 01:19:52', '2015-10-27 01:19:52', NULL),
	(2, '1445908792_07_home.png', 'image/png', 732908, '2015-10-27 01:19:52', '2015-10-27 01:19:52', NULL),
	(3, '1445908794_09_home.png', 'image/png', 945011, '2015-10-27 01:19:54', '2015-10-27 01:19:54', NULL),
	(4, '1445908796_01_home.jpg', 'image/jpeg', 224397, '2015-10-27 01:19:56', '2015-10-27 01:19:56', NULL),
	(5, '1445908796_08_home.png', 'image/png', 614718, '2015-10-27 01:19:56', '2015-10-27 01:19:56', NULL),
	(6, '1445908798_02_home.jpg', 'image/jpeg', 612387, '2015-10-27 01:19:58', '2015-10-27 01:19:58', NULL),
	(7, '1445908799_03_home.jpg', 'image/jpeg', 697094, '2015-10-27 01:20:00', '2015-10-27 01:20:00', NULL),
	(8, '1445909149_06_home.png', 'image/png', 364703, '2015-10-27 01:25:49', '2015-10-27 01:25:49', NULL);
/*!40000 ALTER TABLE `filemedia` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attribute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.menus: ~8 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `url`, `name`, `attribute`, `order`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, '', 'Main Group Name', '', 1, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, '', 'Home', '', 1, 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, '', 'About Us', '', 3, 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, '', 'Contact Us', '', 4, 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, '', 'Services', '', 2, 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, '', 'Programming', '', 1, 5, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, '', 'GO Lang', '', 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, '', 'Actionscript', '', 2, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(9, '', 'PHP', '', 3, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2015_09_16_015503_create_filemedia_table', 2),
	('2015_09_18_012734_create_posts_table', 3),
	('2015_09_18_120132_create_tags_table', 4),
	('2015_09_18_120222_create_post_tags_table', 4),
	('2015_10_05_122727_create_menus_table', 5),
	('2015_10_12_110330_create_roles_table', 6),
	('2015_10_13_075238_create_profiles_table', 7),
	('2015_10_22_063727_create_postmeta_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
	(1, 'edit_forum', 'Edit The Forum', '2015-10-12 13:01:59', '2015-10-12 13:01:59');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.permission_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.postmeta
CREATE TABLE IF NOT EXISTS `postmeta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=552 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.postmeta: ~68 rows (approximately)
/*!40000 ALTER TABLE `postmeta` DISABLE KEYS */;
INSERT INTO `postmeta` (`id`, `post_id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
	(3, 24, 'name', 'Juni Brosas', '2015-10-22 07:17:27', '2015-10-22 07:17:59'),
	(4, 24, 'girlfriend', 'Jayde Brosas', '2015-10-22 07:17:27', '2015-10-22 07:17:59'),
	(107, 26, 'address', 'Bulicon, Turno, Dipolog City', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(108, 26, 'price', '25,000,000', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(109, 26, 'area', '262', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(110, 26, 'property_type', '2', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(111, 26, 'property_status', '1', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(112, 26, 'country', '2', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(113, 26, 'amenities', '{"Air conditioning":"asd","Bedding":"asd1","Heating":"123","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Parquet":"","Roof terrace":"","Terrace":"","Towelwes":"161","Iron":"","Hi-Fi":"","Beach":"","Garage":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(114, 26, 'location', 'Dipolog City Fire Brigade, Lopez Jaena Street, Dipolog City, Zamboanga Peninsula, Philippines', '2015-10-22 11:30:11', '2015-10-22 11:30:11'),
	(439, 29, 'address', '50/7 AMSTERDAM / HOLLAND', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(440, 29, 'price', '3000', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(441, 29, 'area', '400', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(442, 29, 'property_status', '0', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(443, 29, 'country', '0', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(444, 29, 'amenities', '{"Garage":"2","Beds":"6","Baths":"1","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(445, 29, 'location', 'Amsterdamweg 50/7, Emmeloord, Holland', '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(446, 30, 'address', '1508 BODRUM / TURKEI', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(447, 30, 'price', '5000000', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(448, 30, 'area', '890', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(449, 30, 'property_status', '0', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(450, 30, 'country', '0', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(451, 30, 'amenities', '{"Garage":"3","Beds":"12","Baths":"7","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(452, 30, 'location', 'Gümbet, 1508. Sk., 48400 Bodrum/Muğla, Turkey', '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(453, 31, 'address', '2307 NEW YORK CITY', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(454, 31, 'price', '2100000', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(455, 31, 'area', '400', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(456, 31, 'property_status', '0', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(457, 31, 'country', '0', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(458, 31, 'amenities', '{"Garage":"3","Beds":"4","Baths":"2","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(459, 31, 'location', '2307 New York City Rd, West Shokan, NY, United States', '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(460, 32, 'address', '120/79 ST ANTALYA / TURKEI', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(461, 32, 'price', '3650', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(462, 32, 'area', '240', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(463, 32, 'property_status', '0', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(464, 32, 'country', '0', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(465, 32, 'amenities', '{"Garage":"2","Beds":"3","Baths":"6","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(466, 32, 'location', 'Çıplaklı, 79. Sk., 07190 Döşemealtı/Antalya, Turkey', '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(467, 33, 'address', '21/22 HANUE / GERMANY', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(468, 33, 'price', '5200', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(469, 33, 'area', '200', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(470, 33, 'property_status', '0', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(471, 33, 'country', '0', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(472, 33, 'amenities', '{"Garage":"2","Beds":"1","Baths":"1","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(473, 33, 'location', 'Hanaustraße 22, 63303 Dreieich, Germany', '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(474, 34, 'address', '980 ROTERDAM / HOLLAND', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(475, 34, 'price', '500000', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(476, 34, 'area', '360', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(477, 34, 'property_status', '0', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(478, 34, 'country', '0', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(479, 34, 'amenities', '{"Garage":"1","Beds":"5","Baths":"2","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(480, 34, 'location', 'De Rotterdamweg 980, Rotterdam, Holland', '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(520, 28, 'address', '890 ISTANBUL / MASLAK', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(521, 28, 'price', '2550', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(522, 28, 'area', '140', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(523, 28, 'property_status', '0', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(524, 28, 'country', 'United Arab Emirates', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(525, 28, 'location', 'Dubai', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(526, 28, 'amenities', '{"Garage":"2","Beds":"3","Baths":"1","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(527, 28, 'geo_location', '', '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(544, 27, 'address', '2307 NEW YORK CITY', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(545, 27, 'price', '3000', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(546, 27, 'area', '367', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(547, 27, 'property_status', 'for-sale', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(548, 27, 'country', 'United Arab Emirates', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(549, 27, 'location', 'Abu Dhabi', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(550, 27, 'amenities', '{"Garage":"2","Beds":"7","Baths":"2","Air conditioning":"","Irons":"","Heating":"","Internet":"","Microwave":"","Smoking allowed":"","Use of pool":"","Toaster":"","Cofee pot":"","Cable TV":"","Roof terrace":"","Terrace":"","Towelwes":"","Hi-Fi":"","Beach":"","Child Room":"","Drawing room":"","Security":"","Camera Surveillance":"","Nature":"","Route path":""}', '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(551, 27, 'geo_location', '', '2015-11-05 09:55:10', '2015-11-05 09:55:10');
/*!40000 ALTER TABLE `postmeta` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `feature_image` text COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_visible` tinyint(1) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.posts: ~8 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `feature_image`, `post_type`, `meta_keywords`, `meta_description`, `slug`, `is_visible`, `published_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(24, 0, 'Creating new page', 'working out as its finest.', '', 'page', 'Creating new page', 'working out as its finest.', 'creating-new-page', 1, '2015-10-25 08:58:14', NULL, '2015-10-02 08:46:04', '2015-10-25 08:58:14'),
	(27, 0, 'Home of your dreams', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ', '1445908796_01_home.jpg', 'post', 'Home of your dreams', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ', 'home-of-your-dreams', 1, '2015-10-28 09:55:10', NULL, '2015-10-23 06:48:17', '2015-11-05 09:55:10'),
	(28, 0, 'A Family Home for all your needs', '                                                                                                                                                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ', '1445908798_02_home.jpg', 'post', 'A Family Home for all your needs', '                                                                                                                                                                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ', 'a-family-home-for-all-your-needs', 1, '2015-10-27 01:10:48', NULL, '2015-10-23 06:54:39', '2015-11-05 01:10:48'),
	(29, 0, 'Complete Apertment (1 Year)', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p><p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n                        \r\n                        ', '1445908799_03_home.jpg', 'post', 'Complete Apertment (1 Year)', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p><p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n                        \r\n                        ', 'complete-apertment-1-year', 1, '2015-10-27 03:25:30', NULL, '2015-10-23 07:00:12', '2015-11-04 03:25:30'),
	(30, 0, 'Grand Triplex (Limited time)', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>', '1445908792_04_home.jpg', 'post', 'Grand Triplex (Limited time)', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>', 'grand-triplex-limited-time', 1, '2015-10-27 03:25:35', NULL, '2015-10-23 07:03:20', '2015-11-04 03:25:35'),
	(31, 0, 'Sea & Sun and A House', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>', '1445909149_06_home.png', 'post', 'Sea & Sun and A House', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>', 'sea-sun-and-a-house', 1, '2015-10-27 03:25:39', NULL, '2015-10-23 07:04:47', '2015-11-04 03:25:39'),
	(32, 0, 'Creative & Modern Family House', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', '1445908792_07_home.png', 'post', 'Creative & Modern Family House', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', 'creative-modern-family-house', 1, '2015-10-27 03:25:43', NULL, '2015-10-23 07:06:21', '2015-11-04 03:25:43'),
	(33, 0, '2 Week Holland Travel', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', '1445908796_08_home.png', 'post', '2 Week Holland Travel', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', '2-week-holland-travel', 1, '2015-10-27 03:25:46', NULL, '2015-10-23 07:08:20', '2015-11-04 03:25:46'),
	(34, 0, 'House in New York City', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', '1445908794_09_home.png', 'post', 'House in New York City', '                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style="line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>', 'house-in-new-york-city', 1, '2015-10-27 03:25:50', NULL, '2015-10-23 07:09:31', '2015-11-04 03:25:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.post_tags
CREATE TABLE IF NOT EXISTS `post_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.post_tags: ~22 rows (approximately)
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(87, 29, 10, 'category', NULL, '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(88, 29, 11, 'category', NULL, '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(89, 29, 12, 'category', NULL, '2015-11-04 03:25:30', '2015-11-04 03:25:30'),
	(90, 30, 10, 'category', NULL, '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(91, 30, 11, 'category', NULL, '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(92, 30, 12, 'category', NULL, '2015-11-04 03:25:35', '2015-11-04 03:25:35'),
	(93, 31, 10, 'category', NULL, '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(94, 31, 11, 'category', NULL, '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(95, 31, 12, 'category', NULL, '2015-11-04 03:25:39', '2015-11-04 03:25:39'),
	(96, 32, 10, 'category', NULL, '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(97, 32, 11, 'category', NULL, '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(98, 32, 12, 'category', NULL, '2015-11-04 03:25:43', '2015-11-04 03:25:43'),
	(99, 33, 10, 'category', NULL, '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(100, 33, 11, 'category', NULL, '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(101, 33, 12, 'category', NULL, '2015-11-04 03:25:46', '2015-11-04 03:25:46'),
	(102, 34, 10, 'category', NULL, '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(103, 34, 11, 'category', NULL, '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(104, 34, 12, 'category', NULL, '2015-11-04 03:25:50', '2015-11-04 03:25:50'),
	(120, 28, 10, 'category', NULL, '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(121, 28, 11, 'category', NULL, '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(122, 28, 12, 'category', NULL, '2015-11-05 01:10:48', '2015-11-05 01:10:48'),
	(129, 27, 10, 'category', NULL, '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(130, 27, 11, 'category', NULL, '2015-11-05 09:55:10', '2015-11-05 09:55:10'),
	(131, 27, 12, 'category', NULL, '2015-11-05 09:55:10', '2015-11-05 09:55:10');
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`user_id`, `firstname`, `lastname`, `picture`, `created_at`, `updated_at`) VALUES
	(9, 'Jayde', 'Guevarra', NULL, '2015-10-13 08:37:48', '2015-10-13 08:37:48'),
	(10, 'Juni', 'Brosas', NULL, '2015-11-06 06:02:26', '2015-11-06 06:02:26');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrator', '2015-10-12 13:01:07', '2015-10-12 13:01:07');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.role_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.tags: ~64 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `description`, `parent_id`, `order`, `count`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(9, 'Business for Sale', 'business-for-sale', 'category', '', 0, 0, 0, NULL, '2015-11-04 02:36:04', '2015-11-04 02:36:04'),
	(10, 'Food Industry', 'food-industry', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:36:42', '2015-11-04 02:36:42'),
	(11, 'Beauty Salons ', 'beauty-salons', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:37:17', '2015-11-04 02:37:17'),
	(12, 'Commercial Property', 'commercial-property', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:42:15', '2015-11-04 02:42:15'),
	(13, 'Investor Required', 'investor-required', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:42:32', '2015-11-04 02:42:32'),
	(14, 'Manufacturing', 'manufacturing', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:42:42', '2015-11-04 02:42:42'),
	(15, 'Leisure, Travel & Tourism', 'leisure-travel-tourism', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:43:30', '2015-11-04 02:43:30'),
	(16, 'Hotels', 'hotels', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:43:41', '2015-11-04 02:43:41'),
	(17, 'Night Clubs', 'night-clubs', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:43:51', '2015-11-04 02:43:51'),
	(18, 'Laundry & Dry Cleaning', 'laundry-dry-cleaning', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:44:09', '2015-11-04 02:44:09'),
	(19, 'Retail & Shops', 'retail-shops', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:44:20', '2015-11-04 02:44:20'),
	(20, 'Banks & Exchangers', 'banks-exchangers', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:44:35', '2015-11-04 02:44:35'),
	(21, 'Education & Training', 'education-training', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:44:50', '2015-11-04 02:44:50'),
	(22, 'Construction', 'construction', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:44:59', '2015-11-04 02:44:59'),
	(23, 'Fitness Centers & Spa', 'fitness-centers-spa', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:45:09', '2015-11-04 02:45:09'),
	(24, 'Transport & Auto Service', 'transport-auto-service', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:45:21', '2015-11-04 02:45:21'),
	(25, 'Health Care & Pharmacy', 'health-care-pharmacy', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:45:33', '2015-11-04 02:45:33'),
	(26, 'Real Estate Agencies', 'real-estate-agencies', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:45:48', '2015-11-04 02:45:48'),
	(27, 'Catering', 'catering', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:45:59', '2015-11-04 02:45:59'),
	(28, 'Catering', 'catering', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:46:33', '2015-11-04 02:46:33'),
	(29, 'Car Rentals', 'car-rentals', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:46:47', '2015-11-04 02:46:47'),
	(30, 'Cleaning Services', 'cleaning-services', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:47:00', '2015-11-04 02:47:00'),
	(31, 'Trading Companies', 'trading-companies', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:47:18', '2015-11-04 02:47:18'),
	(32, 'Franchising', 'franchising', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:47:32', '2015-11-04 02:47:32'),
	(33, 'Media', 'media', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:47:42', '2015-11-04 02:47:42'),
	(34, 'Bakeries & Bakehouses', 'bakeries-bakehouses', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:48:00', '2015-11-04 02:48:00'),
	(35, 'IT-Companies', 'it-companies', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:48:09', '2015-11-04 02:48:09'),
	(36, 'Business Services', 'business-services', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:48:21', '2015-11-04 02:48:21'),
	(37, 'Tailor shop', 'tailor-shop', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:48:31', '2015-11-04 02:48:31'),
	(38, 'Others', 'others', 'category', '', 9, 0, 0, NULL, '2015-11-04 02:48:40', '2015-11-04 02:48:40'),
	(39, 'Ready License', 'ready-license', 'category', '', 0, 0, 0, NULL, '2015-11-04 02:52:25', '2015-11-04 02:52:25'),
	(40, 'Oil & Gas Licenses ', 'oil-gas-licenses', 'category', '', 39, 0, 0, NULL, '2015-11-04 02:52:44', '2015-11-04 02:52:44'),
	(41, 'General Trading', 'general-trading', 'category', '', 39, 0, 0, NULL, '2015-11-04 02:53:38', '2015-11-04 02:53:38'),
	(42, 'Finatep Services', 'finatep-services', 'category', '', 0, 0, 0, NULL, '2015-11-04 02:55:40', '2015-11-04 02:55:40'),
	(43, 'Business Setup in U.A.E.', 'business-setup-in-uae', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:55:54', '2015-11-04 02:55:54'),
	(44, 'Buy & Sale Business in U.A.E.', 'buy-sale-business-in-uae', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:56:06', '2015-11-04 02:56:06'),
	(45, 'Business Management', 'business-management', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:56:16', '2015-11-04 02:56:16'),
	(46, 'Business Administration', 'business-administration', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:56:25', '2015-11-04 02:56:25'),
	(47, 'Investment in UAE', 'investment-in-uae', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:56:36', '2015-11-04 02:56:36'),
	(49, 'Visa Support', 'visa-support', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:57:11', '2015-11-04 02:57:11'),
	(50, 'Business Support (24/7 Concierge)', 'business-support-247-concierge', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:57:24', '2015-11-04 02:57:24'),
	(51, 'Family Support Program', 'family-support-program', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:57:35', '2015-11-04 02:57:35'),
	(52, 'Driving Licenses', 'driving-licenses', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:57:43', '2015-11-04 02:57:43'),
	(53, 'Marketing Research', 'marketing-research', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:57:52', '2015-11-04 02:57:52'),
	(54, 'Government Ministries & Departments', 'government-ministries-departments', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:00', '2015-11-04 02:58:00'),
	(55, 'Financial Services', 'financial-services', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:08', '2015-11-04 02:58:08'),
	(56, 'Business Tours in U.A.E.', 'business-tours-in-uae', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:17', '2015-11-04 02:58:17'),
	(57, 'Administrative Services', 'administrative-services', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:26', '2015-11-04 02:58:26'),
	(58, 'International Offshores', 'international-offshores', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:34', '2015-11-04 02:58:34'),
	(59, 'Organization of Exhibitions in U.A.E.', 'organization-of-exhibitions-in-uae', 'category', '', 42, 0, 0, NULL, '2015-11-04 02:58:42', '2015-11-04 02:58:42'),
	(60, 'Catering & Food Industry', 'catering-food-industry', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:00:58', '2015-11-04 03:00:58'),
	(61, 'Beauty Salons & SPA', 'beauty-salons-spa', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:01:08', '2015-11-04 03:01:08'),
	(62, 'Banks & Currency Exchange', 'banks-currency-exchange', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:01:18', '2015-11-04 03:01:18'),
	(63, 'Fitness Centers & Spa', 'fitness-centers-spa', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:01:41', '2015-11-04 03:01:41'),
	(64, 'Leisure, Travel & Tourism', 'leisure-travel-tourism', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:01:51', '2015-11-04 03:01:51'),
	(65, 'Real Estate Agencies', 'real-estate-agencies', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:02:01', '2015-11-04 03:02:01'),
	(66, 'Car Rentals', 'car-rentals', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:02:12', '2015-11-04 03:02:12'),
	(67, 'Manufacture', 'manufacture', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:02:29', '2015-11-04 03:02:29'),
	(68, 'Construction', 'construction', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:02:40', '2015-11-04 03:02:40'),
	(69, 'IT-Companies', 'it-companies', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:02:51', '2015-11-04 03:02:51'),
	(70, 'Transport & Auto Service', 'transport-auto-service', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:10:26', '2015-11-04 03:10:26'),
	(71, 'Business Services', 'business-services', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:10:54', '2015-11-04 03:10:54'),
	(72, 'Health Care & Pharmacy', 'health-care-pharmacy', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:11:05', '2015-11-04 03:11:05'),
	(73, 'Others', 'others', 'category', '', 39, 0, 0, NULL, '2015-11-04 03:11:14', '2015-11-04 03:11:14');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;


-- Dumping structure for table db_xadmin.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_xadmin.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Juni Brosas', 'admin@admin.com', '$2y$10$hrQpZiWA46Ti3CCorme40ulUMGPc/Bad3BOIHSkvj7VxAZ56E8UZW', '5hMECFVq7BgJMSIeViqyH30OD4bnH908W3NT6Noh7IWi9wQppYAQx8REIwxF', '0000-00-00 00:00:00', '2015-11-06 09:00:36'),
	(2, 'Gwendolyn Torp', 'tBayer@gmail.com', '$2y$10$.rgwK2o5QVdgC9N.3ByxieInY8Cr04QDLIQiavMqAkklOHdZXwag2', 'VWCieXqc9F', '2015-10-12 12:58:35', '2015-10-12 12:58:35'),
	(9, '', 'asd@asd.com', '$2y$10$uRYm91hp48pI.Srr4EfbTe/QqBpFweFZfInRcmSxJdqcG20JzGJh.', NULL, '2015-10-13 08:37:48', '2015-10-13 08:37:48'),
	(10, 'Juni Brosas', 'justignite1992@gmail.com', '$2y$10$NlUn6NETJFfGnyZnXLM0LuIjDcQArJLTaRFTGc04.G637J/X6ququ', 'GQLz4PvawOybyObvMBlqz2jcZLzZ6aMW0FvcleKu9m93qXQ1k1aEqvvFUal1', '2015-11-06 06:02:26', '2015-11-06 08:58:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
