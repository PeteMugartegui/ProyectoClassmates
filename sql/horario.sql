
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2012 a las 07:45:39
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `classmates`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `materia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hora` int(10) DEFAULT NULL,
  `minuto` int(10) DEFAULT NULL,
  `dif` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `materia`, `dia`, `hora`, `minuto`, `dif`) VALUES
(1, 'Matemáticas', '2012-11-28', 8, 30, 'am'),
(2, 'Analisis y DiseÃ±o', '0000-00-00', 9, 10, 'am'),
(3, 'Base de Datos', '0000-00-00', 10, 11, 'am'),
(4, 'Circuitos', '0000-00-00', 12, 13, 'pm'),
(5, 'ProgramaciÃ³n', 'Miercoles', 9, 10, 'am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
