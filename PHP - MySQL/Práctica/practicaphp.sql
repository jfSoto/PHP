-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-02-2019 a las 10:50:39
-- Versión del servidor: 5.6.34-log
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninios`
--

CREATE TABLE `ninios` (
  `idNinio` int(11) NOT NULL,
  `nombreNinio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellidosNinio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaNacimientoNinio` date DEFAULT NULL,
  `comportamientoNinio` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ninios`
--

INSERT INTO `ninios` (`idNinio`, `nombreNinio`, `apellidosNinio`, `fechaNacimientoNinio`, `comportamientoNinio`) VALUES
(1, 'Alberto', 'Alcantara', '1994-10-13', 'No'),
(2, 'Beatriz', 'Bueno', '1982-04-18', 'Si'),
(3, 'Carlos', 'Crepo', '1998-12-01', 'Si'),
(4, 'Diana', 'Dominguez', '1987-09-02', 'No'),
(5, 'Emilio', 'Enamorado', '1996-08-12', 'Si'),
(6, 'Francisca', 'Fernandez', '1990-07-28', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niniosregalos`
--

CREATE TABLE `niniosregalos` (
  `idNinioRegalo` int(11) NOT NULL,
  `idNinioFK2` int(11) NOT NULL,
  `idRegaloFK3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `niniosregalos`
--

INSERT INTO `niniosregalos` (`idNinioRegalo`, `idNinioFK2`, `idRegaloFK3`) VALUES
(1, 1, 2),
(2, 2, 13),
(3, 3, 4),
(4, 4, 2),
(5, 5, 8),
(6, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `idRegalo` int(11) NOT NULL,
  `nombreRegalo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precioRegalo` decimal(10,2) DEFAULT NULL,
  `idReyMagoFK1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`idRegalo`, `nombreRegalo`, `precioRegalo`, `idReyMagoFK1`) VALUES
(1, 'Aula de ciencia: Robot Mini ERP', 159.95, 1),
(2, 'Carbon', 0.00, 2),
(3, 'Cochecito Classic', 99.95, 3),
(4, 'Consola PS4 1 TB', 349.90, 1),
(5, 'Lego Villa familiar modular', 64.99, 2),
(6, 'Magia Borras Clasica 150 trucos con luz', 32.95, 3),
(7, 'Meccano Excavadora construccion', 30.99, 1),
(8, 'Nenuco Hace pompas', 29.95, 2),
(9, 'Peluche delfin rosa', 34.00, 3),
(10, 'Pequeordenador', 22.95, 1),
(11, 'Robot Coji', 69.95, 2),
(12, 'Telescopio astronomico terrestre', 72.00, 3),
(13, 'Twister', 17.95, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reyesmagos`
--

CREATE TABLE `reyesmagos` (
  `idReyMago` int(11) NOT NULL,
  `nombreReyMago` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `reyesmagos`
--

INSERT INTO `reyesmagos` (`idReyMago`, `nombreReyMago`) VALUES
(1, 'Melchor'),
(2, 'Gaspar'),
(3, 'Baltasar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ninios`
--
ALTER TABLE `ninios`
  ADD PRIMARY KEY (`idNinio`);

--
-- Indices de la tabla `niniosregalos`
--
ALTER TABLE `niniosregalos`
  ADD PRIMARY KEY (`idNinioRegalo`),
  ADD KEY `idNinioFK2_idx` (`idNinioFK2`),
  ADD KEY `idRegaloFK3_idx` (`idRegaloFK3`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`idRegalo`),
  ADD KEY `idReyMagoFK1_idx` (`idReyMagoFK1`);

--
-- Indices de la tabla `reyesmagos`
--
ALTER TABLE `reyesmagos`
  ADD PRIMARY KEY (`idReyMago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ninios`
--
ALTER TABLE `ninios`
  MODIFY `idNinio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `niniosregalos`
--
ALTER TABLE `niniosregalos`
  MODIFY `idNinioRegalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `idRegalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `reyesmagos`
--
ALTER TABLE `reyesmagos`
  MODIFY `idReyMago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `niniosregalos`
--
ALTER TABLE `niniosregalos`
  ADD CONSTRAINT `idNinioFK2` FOREIGN KEY (`idNinioFK2`) REFERENCES `ninios` (`idNinio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idRegaloFK3` FOREIGN KEY (`idRegaloFK3`) REFERENCES `regalos` (`idRegalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD CONSTRAINT `idReyMagoFK1` FOREIGN KEY (`idReyMagoFK1`) REFERENCES `reyesmagos` (`idReyMago`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
