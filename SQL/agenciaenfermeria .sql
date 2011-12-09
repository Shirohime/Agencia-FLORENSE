-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-12-2011 a las 19:33:27
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agenciaenfermeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `IDCliente` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCliente` varchar(20) NOT NULL,
  `ApellidoPaterno` varchar(10) NOT NULL,
  `ApellidoMaterno` varchar(10) NOT NULL,
  `TipoCliente` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IDServicio` int(11) NOT NULL,
  `ClinicaProcedencia` int(11) NOT NULL,
  PRIMARY KEY (`IDCliente`),
  UNIQUE KEY `IDCliente` (`IDCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `cliente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE IF NOT EXISTS `clinica` (
  `IDClinica` int(11) NOT NULL AUTO_INCREMENT,
  `NombreClinica` varchar(35) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IDMedico` int(11) NOT NULL,
  PRIMARY KEY (`IDClinica`),
  UNIQUE KEY `IDClinica` (`IDClinica`),
  KEY `FK1` (`IDMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `clinica`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermeras`
--

CREATE TABLE IF NOT EXISTS `enfermeras` (
  `IDEnfermera` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) NOT NULL,
  `ApellidoPaterno` varchar(10) NOT NULL,
  `ApellidoMaterno` varchar(10) NOT NULL,
  `RFC` varchar(9) NOT NULL,
  `Domicilio` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Edad` char(2) NOT NULL,
  `TipoEnfermera` int(11) NOT NULL,
  PRIMARY KEY (`IDEnfermera`),
  UNIQUE KEY `IDEnfermera` (`IDEnfermera`),
  UNIQUE KEY `RFC` (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `enfermeras`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `IDMedico` int(11) NOT NULL AUTO_INCREMENT,
  `NombreMed` varchar(20) NOT NULL,
  `ApellidoPaterno` varchar(10) NOT NULL,
  `ApellidoMaterno` varchar(10) NOT NULL,
  `RFC` varchar(9) NOT NULL,
  `Telefono` int(11) NOT NULL,
  PRIMARY KEY (`IDMedico`),
  UNIQUE KEY `IDMedico` (`IDMedico`),
  UNIQUE KEY `RFC` (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `medico`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `IDServicio` int(11) NOT NULL AUTO_INCREMENT,
  `NombreServ` varchar(40) NOT NULL,
  `Costo` int(11) NOT NULL,
  `TipoServicio` int(11) NOT NULL,
  `IDEnfermeria` int(11) NOT NULL,
  PRIMARY KEY (`IDServicio`),
  UNIQUE KEY `IDServicio` (`IDServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `servicio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `correo`, `pass`) VALUES
(1, 'May', 'Mayra', 'ary.dragonfly.963@gmail.com', 'b2693d9c2124f3ca9547b897794ac6a1'),
(2, 'xoxo', 'Oscar', 'adr.fo@gnk.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'shirohime', 'Mayra', 'lupita89_m@hotmail.com', '805d871348ad1e208cef970b9a7729b2'),
(4, 'franck', 'Manuel', 'adr.gtee@nbvba.com', '218c5ade1b03b891b805504cbb5c97ec'),
(5, 'Juanita', 'Maria', 'akla@hdfn.com', '2e3817293fc275dbee74bd71ce6eb056'),
(6, 'jkdejdjdsjds', 'hefhswehjf', 'lupita89_m@hotmail.com', 'c6db80b461780a569bb6db080738a4c4'),
(7, 'dfhghjjkkjgg', 'gfgihihjhjuhyf', 'hjb@ggd.ch', '3deabd1ab2ae337ca24cb3c7f08bc7be');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`IDMedico`) REFERENCES `medico` (`IDMedico`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
