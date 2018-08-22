/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.6.21 : Database - controlpasantiaaa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`controlpasantiaaa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `controlpasantiaaa`;

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  PRIMARY KEY (`idCarrera`),
  KEY `idModalidad` (`idModalidad`),
  CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`idModalidad`) REFERENCES `modalidad` (`idModalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `carrera` */

/*Table structure for table `cuaderno` */

DROP TABLE IF EXISTS `cuaderno`;

CREATE TABLE `cuaderno` (
  `idCuaderno` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `observacion` varchar(100) NOT NULL,
  PRIMARY KEY (`idCuaderno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cuaderno` */

/*Table structure for table `digital` */

DROP TABLE IF EXISTS `digital`;

CREATE TABLE `digital` (
  `idDigital` int(11) NOT NULL AUTO_INCREMENT,
  `horaRecepcion` time NOT NULL,
  `fechaRecepcion` date NOT NULL,
  `gestion` varchar(20) NOT NULL,
  `subirDoc` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `idTipoDoc` int(11) NOT NULL,
  PRIMARY KEY (`idDigital`),
  KEY `idTipoDoc` (`idTipoDoc`),
  KEY `idEstudiante` (`idEstudiante`),
  KEY `idCarrera` (`idCarrera`),
  CONSTRAINT `digital_ibfk_1` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`),
  CONSTRAINT `digital_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
  CONSTRAINT `digital_ibfk_3` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `digital` */

/*Table structure for table `documentos` */

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `idDocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEntrega` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(50) NOT NULL,
  `idTipoDoc` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL,
  PRIMARY KEY (`idDocumentos`),
  KEY `idRegistro` (`idRegistro`),
  KEY `idTipoDoc` (`idTipoDoc`),
  CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `registro` (`idRegistro`),
  CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `documentos` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `idPersona` (`idPersona`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

/*Table structure for table `encargado` */

DROP TABLE IF EXISTS `encargado`;

CREATE TABLE `encargado` (
  `idEncargado` int(11) NOT NULL AUTO_INCREMENT,
  `idPersona` int(11) NOT NULL,
  `idInstitucion` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEncargado`),
  KEY `idPersona` (`idPersona`),
  KEY `idInstitucion` (`idInstitucion`),
  CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `encargado_ibfk_2` FOREIGN KEY (`idInstitucion`) REFERENCES `institucion` (`idInstitucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `encargado` */

/*Table structure for table `estudiante` */

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `idCarrera` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idEstudiante`),
  KEY `idCarrera` (`idCarrera`),
  KEY `idPersona` (`idPersona`),
  CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
  CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `estudiante` */

/*Table structure for table `formulario` */

DROP TABLE IF EXISTS `formulario`;

CREATE TABLE `formulario` (
  `idFormulario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idTipoFormulario` int(11) NOT NULL,
  PRIMARY KEY (`idFormulario`),
  KEY `idCarrera` (`idCarrera`),
  KEY `idTipoFormulario` (`idTipoFormulario`),
  CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
  CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`idTipoFormulario`) REFERENCES `tipoformulario` (`idTipoFormulario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `formulario` */

/*Table structure for table `formularioencargado` */

DROP TABLE IF EXISTS `formularioencargado`;

CREATE TABLE `formularioencargado` (
  `idFormEncargado` int(11) NOT NULL AUTO_INCREMENT,
  `idEncargado` int(11) NOT NULL,
  `rubro` varchar(100) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `facCalidad` int(11) NOT NULL,
  `facResponsabilidad` int(11) NOT NULL,
  `facOrgTrabajo` int(11) NOT NULL,
  PRIMARY KEY (`idFormEncargado`),
  KEY `idEstudiante` (`idEstudiante`),
  KEY `idEncargado` (`idEncargado`),
  CONSTRAINT `formularioencargado_ibfk_1` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
  CONSTRAINT `formularioencargado_ibfk_2` FOREIGN KEY (`idEncargado`) REFERENCES `encargado` (`idEncargado`),
  CONSTRAINT `formularioencargado_ibfk_3` FOREIGN KEY (`idEncargado`) REFERENCES `encargado` (`idEncargado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `formularioencargado` */

/*Table structure for table `formulariotutor` */

DROP TABLE IF EXISTS `formulariotutor`;

CREATE TABLE `formulariotutor` (
  `idFormTutor` int(11) NOT NULL AUTO_INCREMENT,
  `nota` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `idCuaderno` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  PRIMARY KEY (`idFormTutor`),
  KEY `idEstudiante` (`idEstudiante`),
  KEY `idEmpleado` (`idEmpleado`),
  KEY `idCuaderno` (`idCuaderno`),
  CONSTRAINT `formulariotutor_ibfk_1` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
  CONSTRAINT `formulariotutor_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `formulariotutor_ibfk_3` FOREIGN KEY (`idCuaderno`) REFERENCES `cuaderno` (`idCuaderno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `formulariotutor` */

/*Table structure for table `indicador` */

DROP TABLE IF EXISTS `indicador`;

CREATE TABLE `indicador` (
  `idIndicador` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `idFormulario` int(11) NOT NULL,
  PRIMARY KEY (`idIndicador`),
  KEY `idFormulario` (`idFormulario`),
  CONSTRAINT `indicador_ibfk_1` FOREIGN KEY (`idFormulario`) REFERENCES `formulario` (`idFormulario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `indicador` */

/*Table structure for table `institucion` */

DROP TABLE IF EXISTS `institucion`;

CREATE TABLE `institucion` (
  `idInstitucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `convenios` varchar(100) NOT NULL,
  PRIMARY KEY (`idInstitucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `institucion` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasadmin` varchar(50) NOT NULL,
  `idRol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idRol` (`idRol`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

/*Table structure for table `modalidad` */

DROP TABLE IF EXISTS `modalidad`;

CREATE TABLE `modalidad` (
  `idModalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idModalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `modalidad` */

/*Table structure for table `nota` */

DROP TABLE IF EXISTS `nota`;

CREATE TABLE `nota` (
  `idNota` int(11) NOT NULL AUTO_INCREMENT,
  `notaFinal` int(11) NOT NULL,
  `idPasantia` int(11) NOT NULL,
  `idIndicador` int(11) NOT NULL,
  PRIMARY KEY (`idNota`),
  KEY `idPasantia` (`idPasantia`),
  KEY `idIndicador` (`idIndicador`),
  CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idPasantia`) REFERENCES `pasantia` (`idPasantia`),
  CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`idIndicador`) REFERENCES `indicador` (`idIndicador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nota` */

/*Table structure for table `numvisita` */

DROP TABLE IF EXISTS `numvisita`;

CREATE TABLE `numvisita` (
  `idNumVisita` int(11) NOT NULL AUTO_INCREMENT,
  `numVisita` varchar(50) NOT NULL,
  PRIMARY KEY (`idNumVisita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `numvisita` */

/*Table structure for table `pasantia` */

DROP TABLE IF EXISTS `pasantia`;

CREATE TABLE `pasantia` (
  `idPasantia` int(11) NOT NULL AUTO_INCREMENT,
  `f⁪echaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `numPasantia` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idInstitucion` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  PRIMARY KEY (`idPasantia`),
  KEY `idCarrera` (`idCarrera`),
  KEY `idEstudiante` (`idEstudiante`),
  KEY `idInstitucion` (`idInstitucion`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `pasantia_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
  CONSTRAINT `pasantia_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
  CONSTRAINT `pasantia_ibfk_3` FOREIGN KEY (`idInstitucion`) REFERENCES `institucion` (`idInstitucion`),
  CONSTRAINT `pasantia_ibfk_4` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pasantia` */

/*Table structure for table `persona` */

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `primerAp` varchar(50) NOT NULL,
  `segundoAp` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `idRol` int(11) NOT NULL,
  PRIMARY KEY (`idPersona`),
  KEY `idRol` (`idRol`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `persona` */

/*Table structure for table `registro` */

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`),
  KEY `idPersona` (`idPersona`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`),
  CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `registro` */

/*Table structure for table `revision` */

DROP TABLE IF EXISTS `revision`;

CREATE TABLE `revision` (
  `idRevision` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `idCuaderno` int(11) NOT NULL,
  `idPasantia` int(11) NOT NULL,
  `idVisita` int(11) NOT NULL,
  `idNumVisita` int(11) NOT NULL,
  PRIMARY KEY (`idRevision`),
  KEY `idNumVisita` (`idNumVisita`),
  CONSTRAINT `revision_ibfk_1` FOREIGN KEY (`idNumVisita`) REFERENCES `numvisita` (`idNumVisita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `revision` */

/*Table structure for table `revisionvisita` */

DROP TABLE IF EXISTS `revisionvisita`;

CREATE TABLE `revisionvisita` (
  `idVisita` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `fotoVisita` varchar(100) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idVisita`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `revisionvisita_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `revisionvisita` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

/*Table structure for table `tipodocumento` */

DROP TABLE IF EXISTS `tipodocumento`;

CREATE TABLE `tipodocumento` (
  `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipodocumento` */

/*Table structure for table `tipoformulario` */

DROP TABLE IF EXISTS `tipoformulario`;

CREATE TABLE `tipoformulario` (
  `idTipoFormulario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `idFormEncargado` int(11) NOT NULL,
  `idFormTutor` int(11) NOT NULL,
  PRIMARY KEY (`idTipoFormulario`),
  KEY `idFormEncargado` (`idFormEncargado`),
  KEY `idFormTutor` (`idFormTutor`),
  CONSTRAINT `tipoformulario_ibfk_1` FOREIGN KEY (`idFormEncargado`) REFERENCES `formularioencargado` (`idFormEncargado`),
  CONSTRAINT `tipoformulario_ibfk_2` FOREIGN KEY (`idFormTutor`) REFERENCES `formulariotutor` (`idFormTutor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipoformulario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
