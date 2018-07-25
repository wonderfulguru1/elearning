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
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contents_section_id_foreign` (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `contents` */

insert  into `contents`(`id`,`section_id`,`article`,`created_at`,`updated_at`) values (11,96,'<p><br/></p><p><br/></p><!--StartFragment--><div class=\"margin--topDefault margin--bottomSmall size--small\" style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><p class=\"font--base--medium margin--none\">This article applies to:</p><div class=\"margin--none color--secondary\" style=\"color: rgb(141, 141, 141);\"><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Storyline-360-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Storyline 360</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Storyline-3-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Storyline 3</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Storyline-2-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Storyline 2</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Storyline-1-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Storyline 1</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Quizmaker-360-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Quizmaker 360</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Quizmaker-13-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Quizmaker ’13</a>,<span> </span><a class=\"color--secondary\" href=\"https://articulate.com/support/dir/All-Articulate-Quizmaker-09-Articles\" style=\"color: rgb(141, 141, 141);background-color: transparent;\">Quizmaker ’09</a></div></div><div class=\"support__content sizedContent--small\" style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><p>Articulate apps don\'t currently support certificates of completion. We generally see this as a function of learning management systems (LMSs). However, if you\'re not using an LMS, you may be able to modify the<span> </span><code style=\"color: rgb(63, 69, 72);\">report.html</code><span> </span>file in your published output to make it look like a certificate.</p><ul><li><a href=\"https://articulate.com/support/article/how-to-create-certificates-by-customizing-the-reporthtml-file#edit\" style=\"color: rgb(64, 173, 228);background-color: transparent;\">Modifying the Report.html File</a></li><li><a href=\"https://articulate.com/support/article/how-to-create-certificates-by-customizing-the-reporthtml-file#ao\" style=\"color: rgb(64, 173, 228);background-color: transparent;\">Uploading Modified Content to Articulate Online</a></li></ul><h2 style=\"color: rgb(40, 40, 40);\"><a id=\"edit\" style=\"color: rgb(64, 173, 228);background-color: transparent;\"></a>Modifying the Report.html File</h2><p>The<span> </span><code style=\"color: rgb(63, 69, 72);\">report.html</code><span> </span>file is used for the print-results feature in Storyline and Quizmaker. You can modify the<span> </span><code style=\"color: rgb(63, 69, 72);\">report.html</code>file in your published output to look the way you want. You can even make it resemble a certificate.</p></div><!--EndFragment--><p><br/></p><p><br/></p>','2018-07-23 10:49:54','2018-07-23 10:49:54'),(10,94,'<p><br/></p><p><br/></p><!--StartFragment--><div class=\"blockquote\" style=\"width: 485px;color: rgb(96, 96, 96);text-align: left;background-color: rgb(255, 255, 255);\"><p style=\"color: rgb(0, 84, 141);\">Google will now ask you to set up the first website you want to track. Just fill out the following fields:</p></div><p class=\"title\" style=\"color: rgb(51, 107, 165);text-align: left;background-color: rgb(255, 255, 255);\">Account Name</p><p style=\"color: rgb(69, 71, 76);text-align: left;background-color: rgb(255, 255, 255);\">Think of this as the category under which your websites are sorted. We recommend you set your brand name as the account name so that if you have multiple brands and websites, you categorize each website under their respective brand/account names.</p><p class=\"title\" style=\"color: rgb(51, 107, 165);text-align: left;background-color: rgb(255, 255, 255);\">Website Name</p><p style=\"color: rgb(69, 71, 76);text-align: left;background-color: rgb(255, 255, 255);\">This is the name of the website that you wish to track. Something you can recognize like &#34;Main Site&#34; or &#34;Promo Site&#34; would suffice.</p><p class=\"title\" style=\"color: rgb(51, 107, 165);text-align: left;background-color: rgb(255, 255, 255);\">Website URL</p><p style=\"color: rgb(69, 71, 76);text-align: left;background-color: rgb(255, 255, 255);\">Put in the URL (web address) of the site you wish to track.</p><!--EndFragment--><p><br/></p><p><br/></p>','2018-07-23 10:48:27','2018-07-23 10:48:27');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `course_enrolls` */

insert  into `course_enrolls`(`id`,`user_id`,`course_id`,`created_at`,`updated_at`) values (12,2,6,NULL,NULL),(11,2,7,NULL,NULL),(10,2,8,NULL,NULL);

/*Table structure for table `course_owners` */

DROP TABLE IF EXISTS `course_owners`;

CREATE TABLE `course_owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_enrolls_user_id_foreign` (`user_id`),
  KEY `course_enrolls_course_id_foreign` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `course_owners` */

insert  into `course_owners`(`id`,`user_id`,`course_id`,`created_at`,`updated_at`) values (11,11,7,'2018-07-20 13:59:02','2018-07-20 13:59:02'),(10,10,6,'2018-07-20 13:21:30','2018-07-20 13:21:30'),(12,11,8,'2018-07-20 13:59:45','2018-07-20 13:59:45');

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `src` text COLLATE utf8_unicode_ci,
  `course_owner` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `courses` */

insert  into `courses`(`id`,`name`,`description`,`about`,`status`,`src`,`course_owner`,`created_at`,`updated_at`) values (8,'All ART','','Automatically send some system information and page content to Google to help detect dangerous apps and sites',1,'VVMzMTFfUFJJbWFnZV8yMDE4LTQwMHgyNTAucG5n.png',NULL,'2018-07-20 13:59:45','2018-07-20 13:59:45'),(7,'New Digital Market','','From what I gather, you have a single list of banners. A banner can either be public or private. Depending on how you are representing banner in your controller. Try the following:',1,'UG93ZXJwb2ludExlY3R1cmUuanBn.jpg',NULL,'2018-07-20 13:59:02','2018-07-20 13:59:02'),(6,'Digital Marketing','','Today in this article I show you How to get last inserted id in Laravel? Sometimes in the programming field, you might need the last record inserted id and its very common need. If you are working on Laravel framework and you want to fetch last created (i',1,'Z2FyY29uLWxpdC0uanBn.jpg',NULL,'2018-07-20 13:21:30','2018-07-20 13:21:30');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `quizes` */

insert  into `quizes`(`id`,`section_id`,`question`,`created_at`,`updated_at`) values (1,2,'what are u  saying',NULL,NULL);

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`user_id`,`role_id`,`created_at`,`updated_at`) values (2,1,NULL,NULL),(10,3,NULL,NULL),(11,3,NULL,NULL),(17,2,'2018-07-23 16:35:36','2018-07-23 16:35:36');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values (1,'admin','admin',NULL,NULL,NULL),(2,'Student','Student',NULL,NULL,NULL),(3,'Lectural','Lectural',NULL,NULL,NULL);

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_section_id_foreign` (`section_id`),
  KEY `sections_course_id_foreign` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sections` */

insert  into `sections`(`id`,`course_id`,`title`,`description`,`order`,`section_id`,`status`,`created_at`,`updated_at`) values (97,7,'New video','all video',1,95,1,'2018-07-24 06:39:59','2018-07-24 09:33:30'),(98,7,'Yotube Video','New youtube',2,95,1,'2018-07-24 10:13:33','2018-07-24 14:51:44'),(96,7,'More on me','i want to see things',0,95,1,'2018-07-23 10:49:46','2018-07-23 10:49:57'),(95,7,'Purpose of family','just check',1,NULL,1,'2018-07-23 10:48:47','2018-07-24 14:51:44'),(94,7,'What is family','telling some thing about family',0,93,1,'2018-07-23 10:47:24','2018-07-23 10:48:30'),(93,7,'Section 1','This section is the first section',0,NULL,1,'2018-07-23 10:46:52','2018-07-23 10:48:30'),(92,5,'Welocmoe to digital maketing','Welocmoe to digital maketing',0,NULL,NULL,'2018-07-20 12:50:46','2018-07-20 12:50:46'),(91,2,'This is a contnet','nice one',0,90,1,'2018-07-19 17:39:50','2018-07-19 17:40:34'),(90,2,'Only Content','jiust adding new',0,NULL,1,'2018-07-19 17:39:32','2018-07-19 17:40:34'),(89,1,'Just a video','doing video',1,87,NULL,'2018-07-19 17:36:59','2018-07-19 17:36:59'),(87,1,'First section','this is the first section',0,NULL,NULL,'2018-07-19 17:36:13','2018-07-19 17:36:13'),(88,1,'Article content','just an articale',0,87,NULL,'2018-07-19 17:36:36','2018-07-19 17:36:37');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (2,'admin','temiye92@gmail.com','$2y$10$Ylsk9pMn61Iz.4M0yJcsA.pUZF2BDZgeh816KCS0k6U/CwPqLH9vK','fafAUah7AWwGONRS5EDd2VjzB4MoHM7vZc4eQnMCrC0FEYt5cinm9EUhzfmS','2018-07-14 15:40:21','2018-07-24 16:24:57'),(17,'Rose','rose1@yahoo.com','$2y$10$PNs5OTSBGczRJikDhTWYmevI9zN2fsn9Kn9tCIbLy5hpacpIMLlJS','9KHou9xxu3zROTNvbqFmGx0FlTDGJzyjaSYpjIlKPz7w8o9QiTo4tjtyLmv5','2018-07-23 16:35:36','2018-07-23 16:35:48'),(11,'John','john@yahoo.com','$2y$10$K9Lkq.1hBOUGRUSPz8NAfu9v2P.QnHgL/3ju2ZrfwSUBE6hhecN.2','vrmSaDmrIJmcePdgl0ihnh0E2aRdOmf94nk579aaSdgz1IG40xfG39GLuX76','2018-07-20 13:24:06','2018-07-20 14:00:19'),(10,'lectural','lecture@gmail.com','$2y$10$.ehwgLixyDH7JUAVZL.wBOQWvjMfmRIsLUg6GGPDnnBjFOic5vK8.','iSv7hqKzgrgTIopew5wBAAueMrx311xMmzeiUnHsJxEsvRlcn1gjGTsNigSq','2018-07-20 13:07:57','2018-07-20 13:47:40');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `length` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_section_id_foreign` (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `videos` */

insert  into `videos`(`id`,`section_id`,`length`,`path`,`type`,`created_at`,`updated_at`) values (2,97,'1','Z3JhY2Utc29sb21vbi1sYXJnZS4zZ3A=.3gp',1,'2018-07-24 09:35:06','2018-07-24 09:35:06'),(6,98,'1','https://www.youtube.com/watch?v=3ph9kywuVJQ',2,'2018-07-24 14:54:24','2018-07-24 14:54:24');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
