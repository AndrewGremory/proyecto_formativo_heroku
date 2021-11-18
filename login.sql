/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.5.5-10.4.21-MariaDB : Database - login
*********************************************************************
Server version : 5.5.5-10.4.21-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `login`;

USE `login`;

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
  CONSTRAINT `centro_tiene_programa_ibfk_2` FOREIGN KEY (`progra_id`) REFERENCES `programa` (`id_programa`)
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
  CONSTRAINT `competencia_ibfk_1` FOREIGN KEY (`comp_programa`) REFERENCES `programa` (`id_programa`)
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

/*Table structure for table `fichas` */

DROP TABLE IF EXISTS `fichas`;

CREATE TABLE `fichas` (
  `id_ficha` int(11) NOT NULL,
  `tipo_programa` enum('especializacion','tecnologo','tecnico') DEFAULT NULL,
  `nombre_programa` int(11) NOT NULL,
  `lider_ficha` int(11) NOT NULL,
  PRIMARY KEY (`id_ficha`),
  KEY `nombre_programa` (`nombre_programa`),
  KEY `lider_ficha` (`lider_ficha`),
  CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`nombre_programa`) REFERENCES `programa` (`id_programa`),
  CONSTRAINT `fichas_ibfk_2` FOREIGN KEY (`lider_ficha`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `fichas` */

insert  into `fichas`(`id_ficha`,`tipo_programa`,`nombre_programa`,`lider_ficha`) values (12313,'tecnico',1,6),(245646,'especializacion',2,4),(1231313,'tecnologo',1,5),(2435346,'tecnologo',2,7);

/*Table structure for table `programa` */

DROP TABLE IF EXISTS `programa`;

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `programa` */

insert  into `programa`(`id_programa`,`pro_nombre`) values (1,'Adsi'),(2,'Ingles');

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
  CONSTRAINT `regional_ibfk_1` FOREIGN KEY (`reg_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `regional` */

/*Table structure for table `resultado_aprendizaje` */

DROP TABLE IF EXISTS `resultado_aprendizaje`;

CREATE TABLE `resultado_aprendizaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fase` varchar(20) DEFAULT NULL,
  `actividad` varchar(200) DEFAULT NULL,
  `competencia` varchar(500) DEFAULT NULL,
  `resultado` varchar(500) DEFAULT NULL,
  `tipo` enum('Clave','Transversal','Específico','Institucional') DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` enum('Evaluado','Pendiente','En ejecución') DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `resultado_aprendizaje_ibfk_1` FOREIGN KEY (`id`) REFERENCES `fichas` (`id_ficha`)
) ENGINE=InnoDB AUTO_INCREMENT=2435347 DEFAULT CHARSET=latin1;

/*Data for the table `resultado_aprendizaje` */

insert  into `resultado_aprendizaje`(`id`,`fase`,`actividad`,`competencia`,`resultado`,`tipo`,`fecha_inicio`,`fecha_fin`,`estado`,`observaciones`) values (12313,'INDUCCIÓN','IDENTIFICAR LOS LINEAMIENTOS INSTITUCIONALES RELACIONADOS CON LA FORMACIÒN PROFESIONAL INTEGRAL Y PRESENTACIÓN DEL PROYECTO FORMATIVO','PROMOVER LA INTERACCION IDONEA CONSIGO MISMO, CON LOS DEMAS Y CON LA NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL.','CONCERTAR ALTERNATIVAS Y ACCIONES DE FORMACIÓN PARA EL DESARROLLO DE LAS COMPETENCIAS DEL PROGRAMA FORMACIÓN, CON BASE EN LA POLÍTICA INSTITUCIONAL.','Institucional','0000-00-00','0000-00-00','Evaluado','José Montesino'),(2435346,'INDUCCIÓN','IDENTIFICAR LOS LINEAMIENTOS INSTITUCIONALES RELACIONADOS CON LA FORMACIÒN PROFESIONAL INTEGRAL Y PRESENTACIÓN DEL PROYECTO FORMATIVO','PROMOVER LA INTERACCION IDONEA CONSIGO MISMO, CON LOS DEMAS Y CON LA NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL.','ASUMIR LOS DEBERES Y DERECHOS CON BASE EN LAS LEYES Y LA NORMATIVA INSTITUCIONAL EN EL MARCO DE SU PROYECTO DE VIDA.','Institucional','0000-00-00','0000-00-00','Evaluado','José Montesino');

/*Table structure for table `resultado_programa` */

DROP TABLE IF EXISTS `resultado_programa`;

CREATE TABLE `resultado_programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resultado_id` int(11) DEFAULT NULL,
  `programa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `programa_id` (`programa_id`),
  KEY `resultado_id` (`resultado_id`),
  CONSTRAINT `resultado_programa_ibfk_1` FOREIGN KEY (`programa_id`) REFERENCES `programa` (`id_programa`),
  CONSTRAINT `resultado_programa_ibfk_2` FOREIGN KEY (`resultado_id`) REFERENCES `resultado_aprendizaje` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `resultado_programa` */

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
  CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`segui_ficha`) REFERENCES `fichas` (`id_ficha`),
  CONSTRAINT `seguimiento_ibfk_2` FOREIGN KEY (`segui_rap`) REFERENCES `resultado_programa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seguimiento` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `rol` enum('administrador','instructor','coordinador') DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `permiso1` tinyint(1) DEFAULT NULL,
  `permiso2` tinyint(1) DEFAULT NULL,
  `permiso3` tinyint(1) DEFAULT NULL,
  `permiso4` tinyint(1) DEFAULT NULL,
  `permiso5` tinyint(1) DEFAULT NULL,
  `permiso6` tinyint(1) DEFAULT NULL,
  `permiso7` tinyint(1) DEFAULT NULL,
  `permiso8` tinyint(1) DEFAULT NULL,
  `permiso9` tinyint(1) DEFAULT NULL,
  `permiso10` tinyint(1) DEFAULT NULL,
  `permiso11` tinyint(1) DEFAULT NULL,
  `permiso12` tinyint(1) DEFAULT NULL,
  `permiso13` tinyint(1) DEFAULT NULL,
  `permiso14` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre`,`apellido`,`usuario`,`pw`,`rol`,`correo`,`telefono`,`permiso1`,`permiso2`,`permiso3`,`permiso4`,`permiso5`,`permiso6`,`permiso7`,`permiso8`,`permiso9`,`permiso10`,`permiso11`,`permiso12`,`permiso13`,`permiso14`) values (2,'Andres ','Amaya Paez','Andres','123','administrador','andresamayap123123@gmail.com','3125724378',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Jose Davidad','Montesino Hoyos','Josedavid123','123','instructor','josedavid@gmail.com','111111111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Linley Catalina','Moscote','LinleyMoscote','1234','instructor','linley123@gmail.com','12321312',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Karina','Meza','KarinaMeza','123','instructor','karinameza@gmail.com','2156465465',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Carlos','Mendoza','Carlomendoza','1233','instructor','carlosmendoza@gmail.com','657894489',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
