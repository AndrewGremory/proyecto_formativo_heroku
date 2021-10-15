/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.5.5-10.4.21-MariaDB : Database - proyecto
*********************************************************************
Server version : 5.5.5-10.4.21-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `proyecto`;

USE `proyecto`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `centro` */

DROP TABLE IF EXISTS `centro`;

CREATE TABLE `centro` (
  `centro_id` int(11) NOT NULL AUTO_INCREMENT,
  `centro_nombre` varchar(100) DEFAULT NULL,
  `centro_direccion` varchar(30) DEFAULT NULL,
  `centro_telefono` int(10) DEFAULT NULL,
  `centro_regional` int(11) DEFAULT NULL,
  PRIMARY KEY (`centro_id`),
  KEY `centro_regional` (`centro_regional`),
  CONSTRAINT `centro_ibfk_1` FOREIGN KEY (`centro_regional`) REFERENCES `regional` (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `centro` */

/*Table structure for table `centro_tiene_programa` */

DROP TABLE IF EXISTS `centro_tiene_programa`;

CREATE TABLE `centro_tiene_programa` (
  `centroprograma_id` int(11) NOT NULL AUTO_INCREMENT,
  `centro_id` int(11) DEFAULT NULL,
  `progra_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`centroprograma_id`),
  KEY `centro_id` (`centro_id`),
  KEY `progra_id` (`progra_id`),
  CONSTRAINT `centro_tiene_programa_ibfk_1` FOREIGN KEY (`centro_id`) REFERENCES `centro` (`centro_id`),
  CONSTRAINT `centro_tiene_programa_ibfk_2` FOREIGN KEY (`progra_id`) REFERENCES `programa` (`progra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `centro_tiene_programa` */

/*Table structure for table `competencia` */

DROP TABLE IF EXISTS `competencia`;

CREATE TABLE `competencia` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_nombre` varchar(100) DEFAULT NULL,
  `comp_horas` int(11) DEFAULT NULL,
  `comp_programa` int(11) DEFAULT NULL,
  PRIMARY KEY (`comp_id`),
  KEY `comp_programa` (`comp_programa`),
  CONSTRAINT `competencia_ibfk_1` FOREIGN KEY (`comp_programa`) REFERENCES `programa` (`progra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `competencia` */

/*Table structure for table `fase` */

DROP TABLE IF EXISTS `fase`;

CREATE TABLE `fase` (
  `fase_id` int(11) NOT NULL AUTO_INCREMENT,
  `fase_nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `fase` */

/*Table structure for table `ficha` */

DROP TABLE IF EXISTS `ficha`;

CREATE TABLE `ficha` (
  `ficha_id` int(11) NOT NULL,
  `ficha_nombre` varchar(50) DEFAULT NULL,
  `ficha_inicio` date DEFAULT NULL,
  `ficha_fin` date DEFAULT NULL,
  `ficha_programa` int(11) DEFAULT NULL,
  PRIMARY KEY (`ficha_id`),
  KEY `ficha_programa` (`ficha_programa`),
  CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`ficha_programa`) REFERENCES `programa` (`progra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ficha` */

/*Table structure for table `ficha_asigna_instructor` */

DROP TABLE IF EXISTS `ficha_asigna_instructor`;

CREATE TABLE `ficha_asigna_instructor` (
  `ficha_asigna_instructor_id` int(11) NOT NULL AUTO_INCREMENT,
  `ficha_id` int(11) DEFAULT NULL,
  `ins_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ficha_asigna_instructor_id`),
  KEY `ficha_id` (`ficha_id`),
  KEY `ins_id` (`ins_id`),
  CONSTRAINT `ficha_asigna_instructor_ibfk_1` FOREIGN KEY (`ficha_id`) REFERENCES `ficha` (`ficha_id`),
  CONSTRAINT `ficha_asigna_instructor_ibfk_2` FOREIGN KEY (`ins_id`) REFERENCES `instructor` (`ins_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ficha_asigna_instructor` */

/*Table structure for table `instructor` */

DROP TABLE IF EXISTS `instructor`;

CREATE TABLE `instructor` (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `ins_nombre` varchar(50) DEFAULT NULL,
  `ins_documento` int(15) DEFAULT NULL,
  `ins_telefono` int(10) DEFAULT NULL,
  `ins_direccion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `instructor` */

/*Table structure for table `programa` */

DROP TABLE IF EXISTS `programa`;

CREATE TABLE `programa` (
  `progra_id` int(11) NOT NULL AUTO_INCREMENT,
  `progra_nombre` varchar(50) DEFAULT NULL,
  `progra_modalidad` enum('presencial','virtual') DEFAULT NULL,
  `progra_tipo` enum('especializacion','tecnologo','tecnico') DEFAULT NULL,
  PRIMARY KEY (`progra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `programa` */

/*Table structure for table `rap` */

DROP TABLE IF EXISTS `rap`;

CREATE TABLE `rap` (
  `rap_id` int(11) NOT NULL AUTO_INCREMENT,
  `rap_nombre` varchar(1000) DEFAULT NULL,
  `rap_resultado` varchar(1000) DEFAULT NULL,
  `rap_inicio` date DEFAULT NULL,
  `rap_fin` date DEFAULT NULL,
  `rap_horas` int(11) DEFAULT NULL,
  `rap_competencia` int(11) DEFAULT NULL,
  `rap_fase` int(11) DEFAULT NULL,
  PRIMARY KEY (`rap_id`),
  KEY `rap_competencia` (`rap_competencia`),
  KEY `rap_fase` (`rap_fase`),
  CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`rap_competencia`) REFERENCES `competencia` (`comp_id`),
  CONSTRAINT `rap_ibfk_2` FOREIGN KEY (`rap_fase`) REFERENCES `fase` (`fase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rap` */

/*Table structure for table `regional` */

DROP TABLE IF EXISTS `regional`;

CREATE TABLE `regional` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_nombre` varchar(100) DEFAULT NULL,
  `reg_direccion` varchar(30) DEFAULT NULL,
  `reg_telefono` int(10) DEFAULT NULL,
  `reg_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `reg_usuario` (`reg_usuario`),
  CONSTRAINT `regional_ibfk_1` FOREIGN KEY (`reg_usuario`) REFERENCES `usuario` (`usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `regional` */

/*Table structure for table `seguimiento` */

DROP TABLE IF EXISTS `seguimiento`;

CREATE TABLE `seguimiento` (
  `segui_id` int(11) NOT NULL AUTO_INCREMENT,
  `estado_resultado` enum('evaluado','pendiente por evaluar','finalizado') DEFAULT NULL,
  `segui_ficha` int(11) DEFAULT NULL,
  `segui_rap` int(11) DEFAULT NULL,
  PRIMARY KEY (`segui_id`),
  KEY `segui_ficha` (`segui_ficha`),
  KEY `segui_rap` (`segui_rap`),
  CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`segui_ficha`) REFERENCES `ficha` (`ficha_id`),
  CONSTRAINT `seguimiento_ibfk_2` FOREIGN KEY (`segui_rap`) REFERENCES `rap` (`rap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seguimiento` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usua_id` int(11) NOT NULL,
  `usua_nombre` varchar(100) DEFAULT NULL,
  `usua_contraseña` varchar(100) DEFAULT NULL,
  `usua_rol` enum('administrador','instructor','coordinador') DEFAULT NULL,
  `usua_permiso` int(11) DEFAULT NULL,
  `usua_permiso1` int(11) DEFAULT NULL,
  `usua_permiso2` int(11) DEFAULT NULL,
  `usua_permiso3` int(11) DEFAULT NULL,
  `usua_permiso4` int(11) DEFAULT NULL,
  `usua_permiso5` int(11) DEFAULT NULL,
  `usua_permiso6` int(11) DEFAULT NULL,
  `usua_permiso7` int(11) DEFAULT NULL,
  `usua_permiso8` int(11) DEFAULT NULL,
  `usua_permiso9` int(11) DEFAULT NULL,
  `usua_correo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
