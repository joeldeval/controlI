-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2015 a las 01:50:26
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `control_incidentes`
--
CREATE DATABASE IF NOT EXISTS `control_incidentes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `control_incidentes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cta`
--

CREATE TABLE IF NOT EXISTS `cta` (
  `idCTA` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Jerarquia` varchar(45) NOT NULL,
  `Incidentes_idIncidente` int(11) NOT NULL,
  PRIMARY KEY (`idCTA`,`Incidentes_idIncidente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE IF NOT EXISTS `incidentes` (
  `idIncidente` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `InicioFechaHora` datetime NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `Estatus` varchar(45) NOT NULL,
  `Laboratorio` varchar(45) NOT NULL,
  `Asignado` varchar(45) DEFAULT NULL,
  `Urgencia` varchar(45) NOT NULL,
  `SolucionFechaHora` datetime DEFAULT NULL,
  `ModificacionFechaHora` datetime DEFAULT NULL,
  `Equipo` varchar(45) DEFAULT NULL,
  `Inmueble` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idIncidente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `incidentes`
--

INSERT INTO `incidentes` (`idIncidente`, `Descripcion`, `InicioFechaHora`, `Categoria`, `Estatus`, `Laboratorio`, `Asignado`, `Urgencia`, `SolucionFechaHora`, `ModificacionFechaHora`, `Equipo`, `Inmueble`) VALUES
(1, 'asdasdas', '0000-00-00 00:00:00', 'sdasdasdasda', 'sdas', 'dadas', 'dad', '', NULL, NULL, NULL, NULL),
(2, 'ASDñhdahsb fnkjoafihasbd h', '0000-00-00 00:00:00', 'ihjb', 'ojn', 'ojn', 'ojn', 'ojn', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroincidentes`
--

CREATE TABLE IF NOT EXISTS `registroincidentes` (
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Incidentes_idIncidente` int(11) NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`,`Incidentes_idIncidente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Campus` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
