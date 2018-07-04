/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.7.19 : Database - pasantia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pasantia` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pasantia`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(25,'2014_10_12_000000_create_users_table',1),
(26,'2014_10_12_100000_create_password_resets_table',1),
(27,'2015_01_20_084450_create_roles_table',1),
(28,'2015_01_20_084525_create_role_user_table',1),
(29,'2015_01_24_080208_create_permissions_table',1),
(30,'2015_01_24_080433_create_permission_role_table',1),
(31,'2015_12_04_003040_add_special_role_column',1),
(32,'2017_10_17_170735_create_permission_user_table',1),
(33,'2018_07_04_062841_create_personas_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role` */

/*Table structure for table `permission_user` */

DROP TABLE IF EXISTS `permission_user`;

CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_user` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`slug`,`description`,`created_at`,`updated_at`) values 
(1,'Navegar usuarios','users.index','Lista y navega todos los usuarios del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(2,'Ver detalle de usuario','users.show','Ver en detalle cada usuario del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(3,'Creacion de usuarios','users.create','Crea un usuario del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(4,'Edicion de usuarios','users.edit','Editar cualquier dato de un usuario del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(5,'Eliminar usuario','users.destroy','Eliminar cualquier usuario del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(6,'Navegar roles','roles.index','Lista y navega todos los roles del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(7,'Ver detalle de rol','roles.show','Ver en detalle cada rol del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(8,'Creacion de roles','roles.create','Creacion de un rol del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(9,'Edicion de roles','roles.edit','Editar cualquier dato de un rol del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(10,'Eliminar rol','roles.destroy','Eliminar cualquier rol del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(11,'Navegar personas','persona.index','Lista y navega todos los personas del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(12,'Ver detalle de persona','persona.show','Ver en detalle cada persona del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(13,'Creacion de personas','persona.create','Creacion de un persona del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(14,'Edicion de personas','persona.edit','Editar cualquier dato de un persona del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37'),
(15,'Eliminar persona','persona.destroy','Eliminar cualquier persona del sistema','2018-07-04 06:46:37','2018-07-04 06:46:37');

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `idPersona` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primerAp` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SegundoAp` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dirreccion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personas` */

insert  into `personas`(`idPersona`,`dni`,`nombre`,`primerAp`,`SegundoAp`,`dirreccion`,`created_at`,`updated_at`) values 
(1,'14393413','Roy Franco','Cayo','Bartolome','j. maria lopez',NULL,NULL),
(2,'2312323','jhonas','thames','amaya','quilla',NULL,NULL);

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`role_id`,`user_id`,`created_at`,`updated_at`) values 
(1,1,3,NULL,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`slug`,`description`,`created_at`,`updated_at`,`special`) values 
(1,'Admin','admin',NULL,'2018-07-04 06:46:38','2018-07-04 06:46:38','all-access');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Rebeka Wintheiser','trantow.madison@example.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','GrfUaVvAgp','2018-07-04 06:46:38','2018-07-04 06:46:38'),
(2,'Mr. Alfonso Upton','emiliano.hauck@example.org','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','qYwH3ycVMi','2018-07-04 06:46:38','2018-07-04 06:46:38'),
(3,'Roy Franco Cayo Bartolomé','bartito24@gmail.com','$2y$10$KtahOmvz5a6038d2BaBquOx0V.ypPsRnkMXfuriUd5koMn8FCzf2O',NULL,'2018-07-04 07:24:38','2018-07-04 07:24:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
