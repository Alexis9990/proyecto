-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2016 a las 18:57:49
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto_empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `No_Especialidad` smallint(6) NOT NULL DEFAULT '0',
  `Nomb_Esp` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`No_Especialidad`),
  KEY `No_Especialidad` (`No_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`No_Especialidad`, `Nomb_Esp`) VALUES
(1, 'Programador WEB'),
(2, 'Programador de IOS'),
(3, 'Programador de Android');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `No_Proyecto` smallint(6) NOT NULL DEFAULT '0',
  `Costo` mediumint(9) DEFAULT NULL,
  `Nomb_Proyecto` varchar(30) DEFAULT NULL,
  `Fecha_Orden` date DEFAULT NULL,
  `Fecha_Entrega` date DEFAULT NULL,
  PRIMARY KEY (`No_Proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`No_Proyecto`, `Costo`, `Nomb_Proyecto`, `Fecha_Orden`, `Fecha_Entrega`) VALUES
(1, 35000, 'Aplicacion Android IGN', '2016-05-18', '2016-07-12'),
(2, 26000, 'Pagina web Uncharted 4', '2016-06-12', '2016-07-07'),
(3, 63000, 'Aplicacion iOS JO2016', '2016-06-17', '2016-09-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `CORREO` varchar(30) DEFAULT NULL,
  `Ape_P` varchar(15) DEFAULT NULL,
  `Ape_M` varchar(15) DEFAULT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `Salario` int(11) DEFAULT NULL,
  `No_Especialidad` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IDUSUARIO`),
  KEY `No_Especialidad` (`No_Especialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUSUARIO`, `USUARIO`, `PASSWORD`, `CORREO`, `Ape_P`, `Ape_M`, `Telefono`, `Salario`, `No_Especialidad`) VALUES
(1, 'Aurelio', 'Compadre13', 'dan_13marino@hotmail.com', 'Cruz', 'Govea', 3369217803, 9000, 1),
(2, 'Ramiro', 'Ramiroman1', 'ramiroauditore@hotmail.com', 'Garcilazo', 'Lara', 3365213099, 14000, 3),
(3, 'Alan', 'Motumbo66', 'alanjafetgm11@hotmail.com', 'Gonzalez', 'Morales', 3311748012, 15000, 2),
(4, 'Joel', 'ElCampero9', 'joelhc@hotmail.com', 'Hernandez', 'Campero', 3321123287, 7800, 3),
(5, 'Roberto', 'PPCDSALVC7', 'rcampos@hotmail.com', 'Campos', 'Campos', 3398746558, 30000, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`No_Especialidad`) REFERENCES `especialidad` (`No_Especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
