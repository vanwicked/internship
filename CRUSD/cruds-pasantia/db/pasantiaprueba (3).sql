-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2018 a las 04:54:00
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pasantiaprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
`idCarrera` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idModalidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombre`, `idModalidad`) VALUES
(2, 'SIS', 1),
(3, 'fdfdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuaderno`
--

CREATE TABLE IF NOT EXISTS `cuaderno` (
`idCuaderno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuaderno`
--

INSERT INTO `cuaderno` (`idCuaderno`, `fecha`, `observacion`) VALUES
(1, '2018-08-17', 'zc<sxc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `digital`
--

CREATE TABLE IF NOT EXISTS `digital` (
`idDigital` int(11) NOT NULL,
  `horaRecepcion` time NOT NULL,
  `fechaRecepcion` date NOT NULL,
  `gestion` varchar(20) NOT NULL,
  `subirDoc` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `idTipoDoc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `digital`
--

INSERT INTO `digital` (`idDigital`, `horaRecepcion`, `fechaRecepcion`, `gestion`, `subirDoc`, `idCarrera`, `idEstudiante`, `idTipoDoc`) VALUES
(2, '10:02:00', '2018-08-14', '2018', 'tyht', 2, 1, 1),
(3, '00:00:00', '0000-00-00', '1996', '', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
`idDocumentos` int(11) NOT NULL,
  `fechaEntrega` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(50) NOT NULL,
  `idTipoDoc` int(11) NOT NULL,
  `idRegistro` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumentos`, `fechaEntrega`, `hora`, `estado`, `idTipoDoc`, `idRegistro`) VALUES
(1, '2018-08-08', '10:00:00', 'VANITA', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`idEmpleado` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sueldo` varchar(50) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `cargo`, `sueldo`, `idPersona`) VALUES
(2, 'fg', '3', 1),
(6, 'marcos', '22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE IF NOT EXISTS `encargado` (
`idEncargado` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idInstitucion` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`idEncargado`, `telefono`, `cargo`, `idPersona`, `idInstitucion`) VALUES
(1, 79591507, 'vanessa', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
`idEstudiante` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idEstudiante`, `celular`, `carrera`, `idPersona`) VALUES
(1, 0, 'vsssss', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
`idFormulario` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idTipoFormulario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`idFormulario`, `descripcion`, `fecha`, `idCarrera`, `idTipoFormulario`) VALUES
(13, 'cdc', '2018-08-25', 2, 1),
(15, '', '0000-00-00', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularioencargado`
--

CREATE TABLE IF NOT EXISTS `formularioencargado` (
`idFormEncargado` int(11) NOT NULL,
  `idEncargado` int(11) NOT NULL,
  `rubro` varchar(100) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `facCalidad` int(11) NOT NULL,
  `facResponsabilidad` int(11) NOT NULL,
  `facOrgTrabajo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formularioencargado`
--

INSERT INTO `formularioencargado` (`idFormEncargado`, `idEncargado`, `rubro`, `idEstudiante`, `facCalidad`, `facResponsabilidad`, `facOrgTrabajo`) VALUES
(2, 1, 'FF', 1, 33, 33, 33),
(3, 1, 'v', 1, 20, 20, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulariotutor`
--

CREATE TABLE IF NOT EXISTS `formulariotutor` (
`idFormTutor` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `idCuaderno` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulariotutor`
--

INSERT INTO `formulariotutor` (`idFormTutor`, `nota`, `descripcion`, `idCuaderno`, `idEmpleado`, `idEstudiante`) VALUES
(1, 33, 'VANNESSA', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE IF NOT EXISTS `indicador` (
`idIndicador` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idFormulario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`idIndicador`, `descripcion`, `idFormulario`) VALUES
(2, 'VANNESSA', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
`idInstitucion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `convenios` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idInstitucion`, `nombre`, `direccion`, `telefono`, `convenios`) VALUES
(1, 'fffff', 'ffff', 33, 'ccc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE IF NOT EXISTS `modalidad` (
`idModalidad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`idModalidad`, `nombre`) VALUES
(1, 'ANUAL'),
(2, 'sistemas informaticos'),
(3, 'gastronomia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`idNota` int(11) NOT NULL,
  `notaFinal` int(11) NOT NULL,
  `idPasantia` int(11) NOT NULL,
  `idIndicador` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`idNota`, `notaFinal`, `idPasantia`, `idIndicador`) VALUES
(2, 500, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numvisita`
--

CREATE TABLE IF NOT EXISTS `numvisita` (
`idNumVisita` int(11) NOT NULL,
  `numVisita` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numvisita`
--

INSERT INTO `numvisita` (`idNumVisita`, `numVisita`) VALUES
(2, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasantia`
--

CREATE TABLE IF NOT EXISTS `pasantia` (
`idPasantia` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `numPasantia` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idInstitucion` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasantia`
--

INSERT INTO `pasantia` (`idPasantia`, `fechaInicio`, `fechaFin`, `numPasantia`, `idCarrera`, `idEmpleado`, `idInstitucion`, `idEstudiante`) VALUES
(1, '2018-08-22', '2018-08-17', '2', 2, 2, 1, 1),
(2, '2018-08-08', '2018-08-23', '1', 2, 2, 1, 1),
(5, '2018-08-16', '2018-08-25', '2', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`idPersona` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `primerAp` varchar(50) NOT NULL,
  `segundoAp` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `dni`, `nombre`, `primerAp`, `segundoAp`, `direccion`) VALUES
(1, '', 'dscsdcsd', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
`idRegistro` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idRegistro`, `cargo`, `idEmpleado`, `idPersona`) VALUES
(1, 'gg', 2, 1),
(3, 'vanessa', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE IF NOT EXISTS `revision` (
`idRevision` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idCuaderno` int(11) NOT NULL,
  `idPasantia` int(11) NOT NULL,
  `idVisita` int(11) NOT NULL,
  `idNumVisita` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revision`
--

INSERT INTO `revision` (`idRevision`, `descripcion`, `idCuaderno`, `idPasantia`, `idVisita`, `idNumVisita`) VALUES
(2, 'VANNESSA', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisionvisita`
--

CREATE TABLE IF NOT EXISTS `revisionvisita` (
`idVisita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fotoVisita` varchar(100) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revisionvisita`
--

INSERT INTO `revisionvisita` (`idVisita`, `fecha`, `fotoVisita`, `idEmpleado`) VALUES
(1, '2018-08-15', 'vanessa', 2),
(9, '2018-08-02', 'vvvv', 6),
(10, '2018-08-01', 'vvvvvvvvvvvvvvvvv', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE IF NOT EXISTS `tipodocumento` (
`idTipoDoc` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDoc`, `descripcion`) VALUES
(1, 'fvdfv'),
(2, 'dfgdf'),
(3, 'VANNE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoformulario`
--

CREATE TABLE IF NOT EXISTS `tipoformulario` (
`idTipoFormulario` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idFormEncargado` int(11) NOT NULL,
  `idFormTutor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoformulario`
--

INSERT INTO `tipoformulario` (`idTipoFormulario`, `descripcion`, `idFormEncargado`, `idFormTutor`) VALUES
(1, 'FFF', 2, 1),
(3, 'VANNESSA', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
 ADD PRIMARY KEY (`idCarrera`), ADD KEY `idModalidad` (`idModalidad`);

--
-- Indices de la tabla `cuaderno`
--
ALTER TABLE `cuaderno`
 ADD PRIMARY KEY (`idCuaderno`);

--
-- Indices de la tabla `digital`
--
ALTER TABLE `digital`
 ADD PRIMARY KEY (`idDigital`), ADD KEY `idTipoDoc` (`idTipoDoc`), ADD KEY `idEstudiante` (`idEstudiante`), ADD KEY `idCarrera` (`idCarrera`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
 ADD PRIMARY KEY (`idDocumentos`), ADD KEY `idRegistro` (`idRegistro`), ADD KEY `idTipoDoc` (`idTipoDoc`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`idEmpleado`), ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
 ADD PRIMARY KEY (`idEncargado`), ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
 ADD PRIMARY KEY (`idEstudiante`), ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
 ADD PRIMARY KEY (`idFormulario`), ADD KEY `idCarrera` (`idCarrera`), ADD KEY `idTipoFormulario` (`idTipoFormulario`);

--
-- Indices de la tabla `formularioencargado`
--
ALTER TABLE `formularioencargado`
 ADD PRIMARY KEY (`idFormEncargado`), ADD KEY `idEstudiante` (`idEstudiante`), ADD KEY `idEncargado` (`idEncargado`);

--
-- Indices de la tabla `formulariotutor`
--
ALTER TABLE `formulariotutor`
 ADD PRIMARY KEY (`idFormTutor`), ADD KEY `idEstudiante` (`idEstudiante`), ADD KEY `idCuaderno` (`idCuaderno`);

--
-- Indices de la tabla `indicador`
--
ALTER TABLE `indicador`
 ADD PRIMARY KEY (`idIndicador`), ADD KEY `idFormulario` (`idFormulario`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
 ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
 ADD PRIMARY KEY (`idModalidad`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`idNota`), ADD KEY `idPasantia` (`idPasantia`), ADD KEY `idIndicador` (`idIndicador`);

--
-- Indices de la tabla `numvisita`
--
ALTER TABLE `numvisita`
 ADD PRIMARY KEY (`idNumVisita`);

--
-- Indices de la tabla `pasantia`
--
ALTER TABLE `pasantia`
 ADD PRIMARY KEY (`idPasantia`), ADD KEY `idCarrera` (`idCarrera`), ADD KEY `idEstudiante` (`idEstudiante`), ADD KEY `idInstitucion` (`idInstitucion`), ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
 ADD PRIMARY KEY (`idRegistro`), ADD KEY `idPersona` (`idPersona`), ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
 ADD PRIMARY KEY (`idRevision`), ADD KEY `idNumVisita` (`idNumVisita`);

--
-- Indices de la tabla `revisionvisita`
--
ALTER TABLE `revisionvisita`
 ADD PRIMARY KEY (`idVisita`), ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
 ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `tipoformulario`
--
ALTER TABLE `tipoformulario`
 ADD PRIMARY KEY (`idTipoFormulario`), ADD KEY `idFormEncargado` (`idFormEncargado`), ADD KEY `idFormTutor` (`idFormTutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cuaderno`
--
ALTER TABLE `cuaderno`
MODIFY `idCuaderno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `digital`
--
ALTER TABLE `digital`
MODIFY `idDigital` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
MODIFY `idDocumentos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
MODIFY `idEncargado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
MODIFY `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
MODIFY `idFormulario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `formularioencargado`
--
ALTER TABLE `formularioencargado`
MODIFY `idFormEncargado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `formulariotutor`
--
ALTER TABLE `formulariotutor`
MODIFY `idFormTutor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `indicador`
--
ALTER TABLE `indicador`
MODIFY `idIndicador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
MODIFY `idModalidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `numvisita`
--
ALTER TABLE `numvisita`
MODIFY `idNumVisita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pasantia`
--
ALTER TABLE `pasantia`
MODIFY `idPasantia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
MODIFY `idRevision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `revisionvisita`
--
ALTER TABLE `revisionvisita`
MODIFY `idVisita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipoformulario`
--
ALTER TABLE `tipoformulario`
MODIFY `idTipoFormulario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`idModalidad`) REFERENCES `modalidad` (`idModalidad`);

--
-- Filtros para la tabla `digital`
--
ALTER TABLE `digital`
ADD CONSTRAINT `digital_ibfk_1` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`),
ADD CONSTRAINT `digital_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
ADD CONSTRAINT `digital_ibfk_3` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`idRegistro`) REFERENCES `registro` (`idRegistro`),
ADD CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
ADD CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
ADD CONSTRAINT `formulario_ibfk_2` FOREIGN KEY (`idTipoFormulario`) REFERENCES `tipoformulario` (`idTipoFormulario`);

--
-- Filtros para la tabla `formularioencargado`
--
ALTER TABLE `formularioencargado`
ADD CONSTRAINT `formularioencargado_ibfk_1` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
ADD CONSTRAINT `formularioencargado_ibfk_2` FOREIGN KEY (`idEncargado`) REFERENCES `encargado` (`idEncargado`),
ADD CONSTRAINT `formularioencargado_ibfk_3` FOREIGN KEY (`idEncargado`) REFERENCES `encargado` (`idEncargado`);

--
-- Filtros para la tabla `formulariotutor`
--
ALTER TABLE `formulariotutor`
ADD CONSTRAINT `formulariotutor_ibfk_1` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
ADD CONSTRAINT `formulariotutor_ibfk_2` FOREIGN KEY (`idCuaderno`) REFERENCES `cuaderno` (`idCuaderno`);

--
-- Filtros para la tabla `indicador`
--
ALTER TABLE `indicador`
ADD CONSTRAINT `indicador_ibfk_1` FOREIGN KEY (`idFormulario`) REFERENCES `formulario` (`idFormulario`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idPasantia`) REFERENCES `pasantia` (`idPasantia`),
ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`idIndicador`) REFERENCES `indicador` (`idIndicador`);

--
-- Filtros para la tabla `pasantia`
--
ALTER TABLE `pasantia`
ADD CONSTRAINT `pasantia_ibfk_1` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
ADD CONSTRAINT `pasantia_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`idEstudiante`),
ADD CONSTRAINT `pasantia_ibfk_3` FOREIGN KEY (`idInstitucion`) REFERENCES `institucion` (`idInstitucion`),
ADD CONSTRAINT `pasantia_ibfk_4` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`),
ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `revision`
--
ALTER TABLE `revision`
ADD CONSTRAINT `revision_ibfk_1` FOREIGN KEY (`idNumVisita`) REFERENCES `numvisita` (`idNumVisita`);

--
-- Filtros para la tabla `revisionvisita`
--
ALTER TABLE `revisionvisita`
ADD CONSTRAINT `revisionvisita_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `tipoformulario`
--
ALTER TABLE `tipoformulario`
ADD CONSTRAINT `tipoformulario_ibfk_1` FOREIGN KEY (`idFormEncargado`) REFERENCES `formularioencargado` (`idFormEncargado`),
ADD CONSTRAINT `tipoformulario_ibfk_2` FOREIGN KEY (`idFormTutor`) REFERENCES `formulariotutor` (`idFormTutor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
