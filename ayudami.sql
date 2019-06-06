-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2019 a las 20:22:51
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ayudami`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `tipo` varchar(30) NOT NULL,
  `persona` varchar(30) NOT NULL,
  `entidad` varchar(40) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `correo` varchar(52) DEFAULT NULL,
  `cedula` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`tipo`, `persona`, `entidad`, `edad`, `correo`, `cedula`) VALUES
('Quejas', 'Hermano', 'Documento Especial', 'De 21 a 30 aÃ±os', 'coco@outlool.com', '1.504.222.203'),
('Otro', 'Pariente cercano', 'Documento Especial', 'Mayor de 31 aÃ±os', 'emiro@yahoo.es', '1.048.901.625'),
('Amenazas', 'Prefiero decirlo despuÃ©s', 'Policia Nacional', 'De 21 a 30 aÃ±os', 'meamenazan@gmail.com', '1.205.166.270'),
('Violencia Intrafamiliar', 'Padre/Madre', 'Policia Nacional', 'De 11 a 20 aÃ±os', 'joven02@hotmail.com', '1.911.521.552'),
('Otro', 'Prefiero decirlo despuÃ©s', 'Fundacion Amigable', 'Mayor de 31 aÃ±os', 'camilo@gmail.com', '1.050.452.640'),
('ViolaciÃ³n', 'Pariente cercano', 'Fundacion Amigable', 'Mayor de 31 aÃ±os', 'andres28@outlook.es', '1.932.021.900'),
('Quejas', 'Amigo', 'No se', 'De 11 a 20 aÃ±os', 'nene01@hotmail.com', '1.066.322.001'),
('Violencia Intrafamiliar', 'Prefiero decirlo despuÃ©s', 'No se', 'Mayor de 31 aÃ±os', 'negro@gmail.es', '1.074.744.112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasena`) VALUES
('manu', '12345'),
('Documento Especial', '12345'),
('Policia Nacional', '12345'),
('Fundacion Amigable', '12345'),
('General', '12345'),
('Sin Saber', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
