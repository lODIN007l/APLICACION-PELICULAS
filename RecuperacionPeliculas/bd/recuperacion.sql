-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2021 a las 02:05:54
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recuperacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `genero_id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`genero_id`, `nombre`) VALUES
(3, 'Comedia De TV'),
(5, 'cortos'),
(6, 'Kdrama'),
(7, 'Accion'),
(9, 'Novelas Mexicanas'),
(10, 'Animacion'),
(11, 'Anime');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `pelicula_id` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `director` varchar(150) DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `formato` varchar(5) DEFAULT NULL,
  `visionada` varchar(150) DEFAULT NULL,
  `genero_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`pelicula_id`, `titulo`, `director`, `anio`, `formato`, `visionada`, `genero_id`) VALUES
(7, 'La casa de papel', 'Wilson', '2010', 'mpg', 'Bien Hecha', 3),
(9, 'papelss', 'Wilson', '1999', 'avi', 'holakh', 5),
(10, 'Joker', 'Robbie Williams', '1999', 'MPGE', 'Una obra de arte completamente fantastica', 5),
(11, 'papelss', 'pepe', '1999', 'mpg', 'Una obra de arte completamente fantastica', 6),
(14, 'Spiderman', 'nobita', '1923', 'MP4', 'no lo se ', 10),
(15, 'Wlson', 'Hugoo', '2021', 'avi', 'Bien Hecha', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`genero_id`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`pelicula_id`),
  ADD KEY `fk_idgenero` (`genero_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `genero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `pelicula_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `fk_idgenero` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`genero_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
