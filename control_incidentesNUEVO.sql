-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2015 a las 03:23:57
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `control_incidentes`
--

-- --------------------------------------------------------
USE control_incidentes;
--
-- Estructura de tabla para la tabla `cta`
--

CREATE TABLE IF NOT EXISTS `cta` (
  `idCta` int(11) NOT NULL AUTO_INCREMENT,
  `Password` varchar(100) NOT NULL,
  `Nombre` datetime NOT NULL,
  `Jerarquia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE IF NOT EXISTS `incidentes` (
  `idIncidente` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(200) NOT NULL,
  `InicioFechaHora` datetime NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `Estatus` varchar(45) NOT NULL,
  `Laboratorio` varchar(45) NOT NULL,
  `Asignado` varchar(45) DEFAULT NULL,
  `Urgencia` varchar(45) DEFAULT NULL,
  `SolucionFechaHora` varchar(45) DEFAULT NULL,
  `ModificacionFechaHora` varchar(45) DEFAULT NULL,
  `Equipo` varchar(45) DEFAULT NULL,
  `Inmueble` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idIncidente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
