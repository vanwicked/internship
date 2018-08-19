/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - pasantia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pasantia` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pasantia`;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasadmin` varchar(50) NOT NULL,
  `idRol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idRol` (`idRol`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id`,`user`,`password`,`email`,`pasadmin`,`idRol`) values 
(1,'admin','','admin@gmail.com','123456',1),
(3,'sandra','$2y$10$84XTVOEz6ktAEKJEojoa6OX/imAQbDBebAqtBLuwYKB','sandra@gmail.com','',3),
(4,'Roy Franco Cayo BartolomÃ©','$2y$10$Yf0mxygx7g9aehgOSOFPQ.GJInueYKerxsl76etLFtf','bartito24@gmail.com','',2),
(5,'vanesa','$2y$10$iSlkl9TwXEso1TNUAvm.QOFbw4wsKiE2gF.w8YgdW5I','vanesa@gmail.com','',2);

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`idRol`,`nombre`) values 
(1,'admin'),
(2,'tutor'),
(3,'estudiante'),
(6,'fdgd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
