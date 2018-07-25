/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.21 : Database - e_learning
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`e_learning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `e_learning`;

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `article` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contents_section_id_foreign` (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `contents` */

/*Table structure for table `course_enrolls` */

DROP TABLE IF EXISTS `course_enrolls`;

CREATE TABLE `course_enrolls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_enrolls_user_id_foreign` (`user_id`),
  KEY `course_enrolls_course_id_foreign` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `course_enrolls` */

insert  into `course_enrolls`(`id`,`user_id`,`course_id`,`created_at`,`updated_at`) values (1,5,1,NULL,NULL);

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `src` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `courses` */

insert  into `courses`(`id`,`name`,`description`,`about`,`status`,`src`,`created_at`,`updated_at`) values (1,'Android Coursesddc','for Student who interest in android application devlopment',NULL,1,'MzE3MzIyNzJfMTAxNTYzMjEzODI2NjQyMzNfMjc3Njg4NTg5Mzc3MDc3MjQ4X24uanBn.jpg','2018-07-14 15:28:46','2018-07-15 17:01:36'),(2,'Android Course','<p><span style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);float: none;\"></span></p><p style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);\"></p><p style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);\"><b>EFront </b>claims to be an easy to use e-learning and &#34;human capital development&#34; system, making it suitable for both company and educational usage.</p><p style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);\">The flagship product of Epignosis, an e-learning company based in Greece, eFront enables &#34;community learning&#34; and supports the principles of &#34;collective knowledge&#34;. Organizations using eFront include the Greek Ministry of Public Order, and the Polish Ministry of Interior.</p><p style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);\">Version 3.5 is in beta and claims improved stability and speed, extended courses management, a new Ajax-based file manager and functionality, and core functions have been rewritten to take advantage of the object oriented features of PHP 5. Also new is a PayPal payment module and the ability to install eFront without any Web server or &#34;Documentroot setup hassle&#34;.</p><!--EndFragment--><p><br/></p><p><br/></p><p></p>',NULL,1,'MzE3MDY0NTRfMTAxNTY2MjQ1NjkyNjgzMjJfODc4NzQ3NzcwNDM1OTI4MDY0X24ucG5n.png','2018-07-14 15:34:56','2018-07-15 17:22:37'),(3,'Android Course','<p><span style=\"color: rgb(56, 56, 56);background-color: rgb(255, 255, 255);float: none;\">Learning suite of the same name. Dokeos provides learning management, Oogie Rapid Learning for building online courses from existing systems like Microsoft PowerPoin',NULL,1,'QWR2ZXJ0LmpwZw==.jpg','2018-07-14 15:37:05','2018-07-15 17:20:37');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_04_06_161500_create_courses_table',1),('2016_04_06_161501_create_course_enroll_table',1),('2016_04_06_161501_create_course_sections_table',1),('2016_04_06_164938_create_course_videos_table',1),('2016_04_06_165049_create_course_contents_table',1),('2016_04_06_165524_create_course_quizes_table',1),('2016_04_09_143903_entrust_setup_tables',1),('2016_04_11_165558_create_answers_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permission_role` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `quizes` */

DROP TABLE IF EXISTS `quizes`;

CREATE TABLE `quizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizes_section_id_foreign` (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `quizes` */

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`user_id`,`role_id`) values (2,1);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_section_id_foreign` (`section_id`),
  KEY `sections_course_id_foreign` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sections` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Satjawat','peanutbutteer@gmail.com','$2y$10$1K4zeyammL2cGYzGzFQoWe6djWqLAALy8kr.cWDIdoO7KjN1orP/y',NULL,'2018-07-14 15:28:46','2018-07-14 15:28:46'),(2,'admin','temiye92@gmail.com','$2y$10$Ylsk9pMn61Iz.4M0yJcsA.pUZF2BDZgeh816KCS0k6U/CwPqLH9vK','edpLYMoI2yhjOZyOtuOP4s4GtXTDM1aQTdShyi7bXRs4fR1Pw9I7fMieNL8d','2018-07-14 15:40:21','2018-07-14 22:16:50'),(3,'Dry fish','farmer1@yahoo.com','$2y$10$WSD4sc9spaSTyFOUGlR1ueEPe1QaZk5MIQQtw3nqjDYvmVe86qecG',NULL,'2018-07-14 21:31:53','2018-07-14 21:31:53'),(4,'seem','shola@yahoo.com','$2y$10$UN2qpykoZtt56zF.aplJV.7IiIjrJ4b07NjwfnnYTKDMgj/5wOeyy',NULL,'2018-07-14 21:35:57','2018-07-14 21:35:57'),(5,'sdfsdf','rose@gmail.com','$2y$10$eYOzRyXMBbMVZyMCw.IV3eHGGf.ncKlEjTd1r7CcLezR.zBO6Gsd6','EyCpQepa68xiE8BOYmSq9wNQAAibIh6eazP8mMZGSle4j9f7DfIwNdPea1ug','2018-07-14 21:36:44','2018-07-14 21:47:39'),(6,'Dry fish','rose@yahoo.com','$2y$10$Ylsk9pMn61Iz.4M0yJcsA.pUZF2BDZgeh816KCS0k6U/CwPqLH9vK','xfKaDAiL28QC06bVRIL1eUiI6aE0UnLejOPXS6WbBjbC1RYlQbCrlHe17hAF','2018-07-15 14:41:06','2018-07-15 14:41:56');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_section_id_foreign` (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `videos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
