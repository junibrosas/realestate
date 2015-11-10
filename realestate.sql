# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.10.10 (MySQL 5.6.19-0ubuntu0.14.04.1)
# Database: db_xadmin
# Generation Time: 2015-11-10 12:42:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table filemedia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `filemedia`;

CREATE TABLE `filemedia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `filemedia` WRITE;
/*!40000 ALTER TABLE `filemedia` DISABLE KEYS */;

INSERT INTO `filemedia` (`id`, `filename`, `mime_type`, `size`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'1445908792_04_home.jpg','image/jpeg',548699,'2015-10-27 01:19:52','2015-10-27 01:19:52',NULL),
	(2,'1445908792_07_home.png','image/png',732908,'2015-10-27 01:19:52','2015-10-27 01:19:52',NULL),
	(3,'1445908794_09_home.png','image/png',945011,'2015-10-27 01:19:54','2015-10-27 01:19:54',NULL),
	(4,'1445908796_01_home.jpg','image/jpeg',224397,'2015-10-27 01:19:56','2015-10-27 01:19:56',NULL),
	(5,'1445908796_08_home.png','image/png',614718,'2015-10-27 01:19:56','2015-10-27 01:19:56',NULL),
	(6,'1445908798_02_home.jpg','image/jpeg',612387,'2015-10-27 01:19:58','2015-10-27 01:19:58',NULL),
	(7,'1445908799_03_home.jpg','image/jpeg',697094,'2015-10-27 01:20:00','2015-10-27 01:20:00',NULL),
	(8,'1445909149_06_home.png','image/png',364703,'2015-10-27 01:25:49','2015-10-27 01:25:49',NULL);

/*!40000 ALTER TABLE `filemedia` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `url`, `name`, `attribute`, `order`, `parent_id`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'','Main Group Name','',1,0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'','Home','',1,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'','About Us','',3,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'','Contact Us','',4,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'','Services','',2,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'','Programming','',1,5,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'','GO Lang','',1,6,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'','Actionscript','',2,6,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'','PHP','',3,6,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_09_16_015503_create_filemedia_table',2),
	('2015_09_18_012734_create_posts_table',3),
	('2015_09_18_120132_create_tags_table',4),
	('2015_09_18_120222_create_post_tags_table',4),
	('2015_10_05_122727_create_menus_table',5),
	('2015_10_12_110330_create_roles_table',6),
	('2015_10_13_075238_create_profiles_table',7),
	('2015_10_22_063727_create_postmeta_table',8);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`)
VALUES
	(1,'edit_forum','Edit The Forum','2015-10-12 13:01:59','2015-10-12 13:01:59');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table post_tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_tags`;

CREATE TABLE `post_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `type`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(96,32,10,'category',NULL,'2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(97,32,11,'category',NULL,'2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(98,32,12,'category',NULL,'2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(135,28,10,'category',NULL,'2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(136,28,11,'category',NULL,'2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(137,28,12,'category',NULL,'2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(138,27,10,'category',NULL,'2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(139,27,11,'category',NULL,'2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(140,27,12,'category',NULL,'2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(141,29,10,'category',NULL,'2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(142,29,11,'category',NULL,'2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(143,29,12,'category',NULL,'2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(144,30,10,'category',NULL,'2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(145,30,11,'category',NULL,'2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(146,30,12,'category',NULL,'2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(149,31,10,'category',NULL,'2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(150,31,12,'category',NULL,'2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(151,31,11,'category',NULL,'2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(152,31,12,'category',NULL,'2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(153,33,10,'category',NULL,'2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(154,33,11,'category',NULL,'2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(155,33,12,'category',NULL,'2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(156,34,10,'category',NULL,'2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(157,34,11,'category',NULL,'2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(158,34,12,'category',NULL,'2015-11-10 12:39:01','2015-11-10 12:39:01');

/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table postmeta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `postmeta`;

CREATE TABLE `postmeta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `postmeta` WRITE;
/*!40000 ALTER TABLE `postmeta` DISABLE KEYS */;

INSERT INTO `postmeta` (`id`, `post_id`, `meta_key`, `meta_value`, `created_at`, `updated_at`)
VALUES
	(3,24,'name','Juni Brosas','2015-10-22 07:17:27','2015-10-22 07:17:59'),
	(4,24,'girlfriend','Jayde Brosas','2015-10-22 07:17:27','2015-10-22 07:17:59'),
	(107,26,'address','Bulicon, Turno, Dipolog City','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(108,26,'price','25,000,000','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(109,26,'area','262','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(110,26,'property_type','2','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(111,26,'property_status','1','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(112,26,'country','2','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(113,26,'amenities','{\"Air conditioning\":\"asd\",\"Bedding\":\"asd1\",\"Heating\":\"123\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Parquet\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"161\",\"Iron\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Garage\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(114,26,'location','Dipolog City Fire Brigade, Lopez Jaena Street, Dipolog City, Zamboanga Peninsula, Philippines','2015-10-22 11:30:11','2015-10-22 11:30:11'),
	(460,32,'address','120/79 ST ANTALYA / TURKEI','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(461,32,'price','3650','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(462,32,'area','240','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(463,32,'property_status','0','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(464,32,'country','0','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(465,32,'amenities','{\"Garage\":\"2\",\"Beds\":\"3\",\"Baths\":\"6\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(466,32,'location','Çıplaklı, 79. Sk., 07190 Döşemealtı/Antalya, Turkey','2015-11-04 03:25:43','2015-11-04 03:25:43'),
	(560,28,'address','890 ISTANBUL / MASLAK','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(561,28,'price','2550','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(562,28,'area','140','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(563,28,'property_status','0','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(564,28,'country','United Arab Emirates','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(565,28,'location','Ajman','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(566,28,'amenities','{\"Garage\":\"2\",\"Beds\":\"3\",\"Baths\":\"1\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(567,28,'geo_location','Free Zone - Ajman - United Arab Emirates','2015-11-10 12:35:19','2015-11-10 12:35:19'),
	(568,27,'address','2307 NEW YORK CITY','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(569,27,'price','3000','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(570,27,'area','367','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(571,27,'property_status','for-sale','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(572,27,'country','United Arab Emirates','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(573,27,'location','Abu Dhabi','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(574,27,'amenities','{\"Garage\":\"2\",\"Beds\":\"7\",\"Baths\":\"2\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(575,27,'geo_location','Abu Dhabi - United Arab Emirates','2015-11-10 12:35:51','2015-11-10 12:35:51'),
	(576,29,'address','50/7 AMSTERDAM / HOLLAND','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(577,29,'price','3000','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(578,29,'area','400','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(579,29,'property_status','0','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(580,29,'country','India','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(581,29,'location','Delhi','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(582,29,'amenities','{\"Garage\":\"2\",\"Beds\":\"6\",\"Baths\":\"1\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(583,29,'geo_location','Delhi Cantonment, New Delhi, Delhi, India','2015-11-10 12:36:37','2015-11-10 12:36:37'),
	(584,30,'address','1508 BODRUM / TURKEI','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(585,30,'price','5000000','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(586,30,'area','890','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(587,30,'property_status','0','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(588,30,'country','India','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(589,30,'location','Mumbai','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(590,30,'amenities','{\"Garage\":\"3\",\"Beds\":\"12\",\"Baths\":\"7\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(591,30,'geo_location','Mumbai Central, Mumbai, Maharashtra, India','2015-11-10 12:37:05','2015-11-10 12:37:05'),
	(592,31,'address','2307 NEW YORK CITY','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(593,31,'price','2100000','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(594,31,'area','400','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(595,31,'address','2307 NEW YORK CITY','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(596,31,'property_status','0','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(597,31,'price','2100000','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(598,31,'area','400','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(599,31,'country','United Arab Emirates','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(600,31,'property_status','0','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(601,31,'location','Ras Al Khaimah','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(602,31,'amenities','{\"Garage\":\"3\",\"Beds\":\"4\",\"Baths\":\"2\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(603,31,'country','United Arab Emirates','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(604,31,'geo_location','Ras Al-Khaimah - United Arab Emirates','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(605,31,'location','Ras Al Khaimah','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(606,31,'amenities','{\"Garage\":\"3\",\"Beds\":\"4\",\"Baths\":\"2\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(607,31,'geo_location','Ras Al-Khaimah - United Arab Emirates','2015-11-10 12:37:59','2015-11-10 12:37:59'),
	(608,33,'address','21/22 HANUE / GERMANY','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(609,33,'price','5200','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(610,33,'area','200','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(611,33,'property_status','0','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(612,33,'country','United Arab Emirates','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(613,33,'location','Umm Al Quwain','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(614,33,'amenities','{\"Garage\":\"2\",\"Beds\":\"1\",\"Baths\":\"1\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(615,33,'geo_location','Umm Al Quwain - United Arab Emirates','2015-11-10 12:38:25','2015-11-10 12:38:25'),
	(616,34,'address','980 ROTERDAM / HOLLAND','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(617,34,'price','500000','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(618,34,'area','360','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(619,34,'property_status','0','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(620,34,'country','India','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(621,34,'location','Kolkata','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(622,34,'amenities','{\"Garage\":\"1\",\"Beds\":\"5\",\"Baths\":\"2\",\"Air conditioning\":\"\",\"Irons\":\"\",\"Heating\":\"\",\"Internet\":\"\",\"Microwave\":\"\",\"Smoking allowed\":\"\",\"Use of pool\":\"\",\"Toaster\":\"\",\"Cofee pot\":\"\",\"Cable TV\":\"\",\"Roof terrace\":\"\",\"Terrace\":\"\",\"Towelwes\":\"\",\"Hi-Fi\":\"\",\"Beach\":\"\",\"Child Room\":\"\",\"Drawing room\":\"\",\"Security\":\"\",\"Camera Surveillance\":\"\",\"Nature\":\"\",\"Route path\":\"\"}','2015-11-10 12:39:01','2015-11-10 12:39:01'),
	(623,34,'geo_location','Kolkata, West Bengal, India','2015-11-10 12:39:01','2015-11-10 12:39:01');

/*!40000 ALTER TABLE `postmeta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `feature_image`, `post_type`, `meta_keywords`, `meta_description`, `slug`, `is_visible`, `published_at`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(24,0,'Creating new page','working out as its finest.','','page','Creating new page','working out as its finest.','creating-new-page',1,'2015-10-25 08:58:14',NULL,'2015-10-02 08:46:04','2015-10-25 08:58:14'),
	(27,1,'Home of your dreams','                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ','1445908796_01_home.jpg','post','Home of your dreams','                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ','home-of-your-dreams',1,'2015-10-28 12:35:51',NULL,'2015-10-23 06:48:17','2015-11-10 12:35:51'),
	(28,1,'A Family Home for all your needs','                                                                                                                                                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ','1445908798_02_home.jpg','post','A Family Home for all your needs','                                                                                                                                                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        \r\n                        ','a-family-home-for-all-your-needs',1,'2015-10-27 12:35:19',NULL,'2015-10-23 06:54:39','2015-11-10 12:35:19'),
	(29,1,'Complete Apertment (1 Year)','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p><p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n                        \r\n                        \r\n                        ','1445908799_03_home.jpg','post','Complete Apertment (1 Year)','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p><p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n                        \r\n                        \r\n                        ','complete-apertment-1-year',1,'2015-10-27 12:36:37',NULL,'2015-10-23 07:00:12','2015-11-10 12:36:37'),
	(30,1,'Grand Triplex (Limited time)','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        ','1445908792_04_home.jpg','post','Grand Triplex (Limited time)','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        ','grand-triplex-limited-time',1,'2015-10-27 12:37:05',NULL,'2015-10-23 07:03:20','2015-11-10 12:37:05'),
	(31,1,'Sea & Sun and A House','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        ','1445909149_06_home.png','post','Sea & Sun and A House','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.\r\n                        \r\n                        </p>\r\n                        ','sea-sun-and-a-house',1,'2015-10-27 12:37:59',NULL,'2015-10-23 07:04:47','2015-11-10 12:37:59'),
	(32,0,'Creative & Modern Family House','                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>','1445908792_07_home.png','post','Creative & Modern Family House','                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>','creative-modern-family-house',1,'2015-10-27 03:25:43',NULL,'2015-10-23 07:06:21','2015-11-04 03:25:43'),
	(33,1,'2 Week Holland Travel','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>\r\n                        ','1445908796_08_home.png','post','2 Week Holland Travel','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>\r\n                        ','2-week-holland-travel',1,'2015-10-27 12:38:25',NULL,'2015-10-23 07:08:20','2015-11-10 12:38:25'),
	(34,1,'House in New York City','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>\r\n                        ','1445908794_09_home.png','post','House in New York City','                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est felis, tristique id aliquam at, congue pharetra dui. Pellentesque a lorem malesuada, posuere eros sed, luctus enim. Vivamus mollis metus risus, eu luctus turpis faucibus at. Integer vitae vehicula ipsum. Vestibulum venenatis erat non rhoncus scelerisque. Nam rhoncus dolor non orci elementum, et posuere tellus faucibus. Integer orci neque, rhoncus nec enim commodo, lacinia blandit dui. Aliquam erat volutpat. Sed eu massa accumsan, aliquet urna ut, blandit ligula. Fusce ultrices varius lobortis. In hac habitasse platea dictumst. Donec convallis metus in sagittis ultrices.<p></p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Mauris eleifend pellentesque elementum. Donec semper ac lorem sed sagittis. Nam luctus id tortor sed dictum. Fusce vel porttitor erat. Quisque sed diam at nisl mollis molestie. Donec nibh metus, rutrum vel lobortis in, ultrices non magna. Aliquam mollis euismod dolor et hendrerit. Fusce cursus quam et tincidunt sagittis. Mauris ac diam vulputate, laoreet lorem a, sagittis ante. Aenean vel pulvinar est. Pellentesque eu adipiscing ante, ut auctor arcu. Maecenas vel sagittis enim. Maecenas vitae lacus pulvinar, sagittis tortor sed, congue leo.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Sed blandit turpis vel ipsum malesuada, in vestibulum orci iaculis. Nam feugiat feugiat massa, at ultricies mi laoreet in. Donec porttitor mauris eu eleifend condimentum. Nullam vulputate metus at odio vestibulum porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tortor id neque dapibus bibendum id vitae odio. Vivamus dictum purus et faucibus viverra. Duis a leo arcu. Nullam ornare accumsan augue. Cras quis luctus justo, ac rhoncus tellus. Aliquam erat volutpat. Nam tempus varius lectus varius elementum.</p>\r\n<p style=\"line-height: 20px; padding: 0px; color: rgb(101, 101, 101); font-family: \'Open Sans\', Arial, Helvetica, sans-serif; font-size: 13px;\">Aliquam vitae fermentum diam. Pellentesque nec congue mi. Suspendisse congue eros urna, sed fringilla orci viverra id. Ut eget bibendum odio, a commodo justo. Nulla ac tempus nunc. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam quis tellus nibh. Quisque cursus faucibus lorem eget auctor. Vestibulum ullamcorper nec diam a tincidunt. Quisque vulputate massa neque, a semper leo cursus condimentum. Proin magna nunc, tempor sit amet neque vitae, consequat vulputate quam.\r\n                        \r\n                        </p>\r\n                        ','house-in-new-york-city',1,'2015-10-27 12:39:01',NULL,'2015-10-23 07:09:31','2015-11-10 12:39:01');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`user_id`, `firstname`, `lastname`, `picture`, `created_at`, `updated_at`)
VALUES
	(9,'Jayde','Guevarra',NULL,'2015-10-13 08:37:48','2015-10-13 08:37:48'),
	(10,'Juni','Brosas',NULL,'2015-11-06 06:02:26','2015-11-06 06:02:26');

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;

INSERT INTO `role_user` (`role_id`, `user_id`)
VALUES
	(1,1);

/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`)
VALUES
	(1,'admin','Administrator','2015-10-12 13:01:07','2015-10-12 13:01:07');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `description`, `parent_id`, `order`, `count`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(9,'Business for Sale','business-for-sale','category','',0,0,0,NULL,'2015-11-04 02:36:04','2015-11-04 02:36:04'),
	(10,'Food Industry','food-industry','category','',9,0,0,NULL,'2015-11-04 02:36:42','2015-11-04 02:36:42'),
	(11,'Beauty Salons ','beauty-salons','category','',9,0,0,NULL,'2015-11-04 02:37:17','2015-11-04 02:37:17'),
	(12,'Commercial Property','commercial-property','category','',9,0,0,NULL,'2015-11-04 02:42:15','2015-11-04 02:42:15'),
	(13,'Investor Required','investor-required','category','',9,0,0,NULL,'2015-11-04 02:42:32','2015-11-04 02:42:32'),
	(14,'Manufacturing','manufacturing','category','',9,0,0,NULL,'2015-11-04 02:42:42','2015-11-04 02:42:42'),
	(15,'Leisure, Travel & Tourism','leisure-travel-tourism','category','',9,0,0,NULL,'2015-11-04 02:43:30','2015-11-04 02:43:30'),
	(16,'Hotels','hotels','category','',9,0,0,NULL,'2015-11-04 02:43:41','2015-11-04 02:43:41'),
	(17,'Night Clubs','night-clubs','category','',9,0,0,NULL,'2015-11-04 02:43:51','2015-11-04 02:43:51'),
	(18,'Laundry & Dry Cleaning','laundry-dry-cleaning','category','',9,0,0,NULL,'2015-11-04 02:44:09','2015-11-04 02:44:09'),
	(19,'Retail & Shops','retail-shops','category','',9,0,0,NULL,'2015-11-04 02:44:20','2015-11-04 02:44:20'),
	(20,'Banks & Exchangers','banks-exchangers','category','',9,0,0,NULL,'2015-11-04 02:44:35','2015-11-04 02:44:35'),
	(21,'Education & Training','education-training','category','',9,0,0,NULL,'2015-11-04 02:44:50','2015-11-04 02:44:50'),
	(22,'Construction','construction','category','',9,0,0,NULL,'2015-11-04 02:44:59','2015-11-04 02:44:59'),
	(23,'Fitness Centers & Spa','fitness-centers-spa','category','',9,0,0,NULL,'2015-11-04 02:45:09','2015-11-04 02:45:09'),
	(24,'Transport & Auto Service','transport-auto-service','category','',9,0,0,NULL,'2015-11-04 02:45:21','2015-11-04 02:45:21'),
	(25,'Health Care & Pharmacy','health-care-pharmacy','category','',9,0,0,NULL,'2015-11-04 02:45:33','2015-11-04 02:45:33'),
	(26,'Real Estate Agencies','real-estate-agencies','category','',9,0,0,NULL,'2015-11-04 02:45:48','2015-11-04 02:45:48'),
	(27,'Catering','catering','category','',9,0,0,NULL,'2015-11-04 02:45:59','2015-11-04 02:45:59'),
	(28,'Catering','catering','category','',9,0,0,NULL,'2015-11-04 02:46:33','2015-11-04 02:46:33'),
	(29,'Car Rentals','car-rentals','category','',9,0,0,NULL,'2015-11-04 02:46:47','2015-11-04 02:46:47'),
	(30,'Cleaning Services','cleaning-services','category','',9,0,0,NULL,'2015-11-04 02:47:00','2015-11-04 02:47:00'),
	(31,'Trading Companies','trading-companies','category','',9,0,0,NULL,'2015-11-04 02:47:18','2015-11-04 02:47:18'),
	(32,'Franchising','franchising','category','',9,0,0,NULL,'2015-11-04 02:47:32','2015-11-04 02:47:32'),
	(33,'Media','media','category','',9,0,0,NULL,'2015-11-04 02:47:42','2015-11-04 02:47:42'),
	(34,'Bakeries & Bakehouses','bakeries-bakehouses','category','',9,0,0,NULL,'2015-11-04 02:48:00','2015-11-04 02:48:00'),
	(35,'IT-Companies','it-companies','category','',9,0,0,NULL,'2015-11-04 02:48:09','2015-11-04 02:48:09'),
	(36,'Business Services','business-services','category','',9,0,0,NULL,'2015-11-04 02:48:21','2015-11-04 02:48:21'),
	(37,'Tailor shop','tailor-shop','category','',9,0,0,NULL,'2015-11-04 02:48:31','2015-11-04 02:48:31'),
	(38,'Others','others','category','',9,0,0,NULL,'2015-11-04 02:48:40','2015-11-04 02:48:40'),
	(39,'Ready License','ready-license','category','',0,0,0,NULL,'2015-11-04 02:52:25','2015-11-04 02:52:25'),
	(40,'Oil & Gas Licenses ','oil-gas-licenses','category','',39,0,0,NULL,'2015-11-04 02:52:44','2015-11-04 02:52:44'),
	(41,'General Trading','general-trading','category','',39,0,0,NULL,'2015-11-04 02:53:38','2015-11-04 02:53:38'),
	(42,'Finatep Services','finatep-services','category','',0,0,0,NULL,'2015-11-04 02:55:40','2015-11-04 02:55:40'),
	(43,'Business Setup in U.A.E.','business-setup-in-uae','category','',42,0,0,NULL,'2015-11-04 02:55:54','2015-11-04 02:55:54'),
	(44,'Buy & Sale Business in U.A.E.','buy-sale-business-in-uae','category','',42,0,0,NULL,'2015-11-04 02:56:06','2015-11-04 02:56:06'),
	(45,'Business Management','business-management','category','',42,0,0,NULL,'2015-11-04 02:56:16','2015-11-04 02:56:16'),
	(46,'Business Administration','business-administration','category','',42,0,0,NULL,'2015-11-04 02:56:25','2015-11-04 02:56:25'),
	(47,'Investment in UAE','investment-in-uae','category','',42,0,0,NULL,'2015-11-04 02:56:36','2015-11-04 02:56:36'),
	(49,'Visa Support','visa-support','category','',42,0,0,NULL,'2015-11-04 02:57:11','2015-11-04 02:57:11'),
	(50,'Business Support (24/7 Concierge)','business-support-247-concierge','category','',42,0,0,NULL,'2015-11-04 02:57:24','2015-11-04 02:57:24'),
	(51,'Family Support Program','family-support-program','category','',42,0,0,NULL,'2015-11-04 02:57:35','2015-11-04 02:57:35'),
	(52,'Driving Licenses','driving-licenses','category','',42,0,0,NULL,'2015-11-04 02:57:43','2015-11-04 02:57:43'),
	(53,'Marketing Research','marketing-research','category','',42,0,0,NULL,'2015-11-04 02:57:52','2015-11-04 02:57:52'),
	(54,'Government Ministries & Departments','government-ministries-departments','category','',42,0,0,NULL,'2015-11-04 02:58:00','2015-11-04 02:58:00'),
	(55,'Financial Services','financial-services','category','',42,0,0,NULL,'2015-11-04 02:58:08','2015-11-04 02:58:08'),
	(56,'Business Tours in U.A.E.','business-tours-in-uae','category','',42,0,0,NULL,'2015-11-04 02:58:17','2015-11-04 02:58:17'),
	(57,'Administrative Services','administrative-services','category','',42,0,0,NULL,'2015-11-04 02:58:26','2015-11-04 02:58:26'),
	(58,'International Offshores','international-offshores','category','',42,0,0,NULL,'2015-11-04 02:58:34','2015-11-04 02:58:34'),
	(59,'Organization of Exhibitions in U.A.E.','organization-of-exhibitions-in-uae','category','',42,0,0,NULL,'2015-11-04 02:58:42','2015-11-04 02:58:42'),
	(60,'Catering & Food Industry','catering-food-industry','category','',39,0,0,NULL,'2015-11-04 03:00:58','2015-11-04 03:00:58'),
	(61,'Beauty Salons & SPA','beauty-salons-spa','category','',39,0,0,NULL,'2015-11-04 03:01:08','2015-11-04 03:01:08'),
	(62,'Banks & Currency Exchange','banks-currency-exchange','category','',39,0,0,NULL,'2015-11-04 03:01:18','2015-11-04 03:01:18'),
	(63,'Fitness Centers & Spa','fitness-centers-spa','category','',39,0,0,NULL,'2015-11-04 03:01:41','2015-11-04 03:01:41'),
	(64,'Leisure, Travel & Tourism','leisure-travel-tourism','category','',39,0,0,NULL,'2015-11-04 03:01:51','2015-11-04 03:01:51'),
	(65,'Real Estate Agencies','real-estate-agencies','category','',39,0,0,NULL,'2015-11-04 03:02:01','2015-11-04 03:02:01'),
	(66,'Car Rentals','car-rentals','category','',39,0,0,NULL,'2015-11-04 03:02:12','2015-11-04 03:02:12'),
	(67,'Manufacture','manufacture','category','',39,0,0,NULL,'2015-11-04 03:02:29','2015-11-04 03:02:29'),
	(68,'Construction','construction','category','',39,0,0,NULL,'2015-11-04 03:02:40','2015-11-04 03:02:40'),
	(69,'IT-Companies','it-companies','category','',39,0,0,NULL,'2015-11-04 03:02:51','2015-11-04 03:02:51'),
	(70,'Transport & Auto Service','transport-auto-service','category','',39,0,0,NULL,'2015-11-04 03:10:26','2015-11-04 03:10:26'),
	(71,'Business Services','business-services','category','',39,0,0,NULL,'2015-11-04 03:10:54','2015-11-04 03:10:54'),
	(72,'Health Care & Pharmacy','health-care-pharmacy','category','',39,0,0,NULL,'2015-11-04 03:11:05','2015-11-04 03:11:05'),
	(73,'Others','others','category','',39,0,0,NULL,'2015-11-04 03:11:14','2015-11-04 03:11:14');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Super Administrator','admin@admin.com','$2y$10$hrQpZiWA46Ti3CCorme40ulUMGPc/Bad3BOIHSkvj7VxAZ56E8UZW','OmTcvTqfI3an1gqlUEr4SZqAH3gYJYzyFjx0OvFDDyHU6TZHOpZHP83G163O','0000-00-00 00:00:00','2015-11-09 12:45:24'),
	(2,'Gwendolyn Torp','tBayer@gmail.com','$2y$10$.rgwK2o5QVdgC9N.3ByxieInY8Cr04QDLIQiavMqAkklOHdZXwag2','VWCieXqc9F','2015-10-12 12:58:35','2015-10-12 12:58:35'),
	(9,'','asd@asd.com','$2y$10$uRYm91hp48pI.Srr4EfbTe/QqBpFweFZfInRcmSxJdqcG20JzGJh.',NULL,'2015-10-13 08:37:48','2015-10-13 08:37:48'),
	(10,'Juni Brosas','agent@agent.com','$2y$10$NlUn6NETJFfGnyZnXLM0LuIjDcQArJLTaRFTGc04.G637J/X6ququ','WLv08gfBDR3bewtW1aUAke3BG8tTg4Brffr9EOTOH25ZlbiU7BEK2msTsaLk','2015-11-06 06:02:26','2015-11-09 11:40:01');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
