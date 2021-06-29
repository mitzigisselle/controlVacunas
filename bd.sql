-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 00:34:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_ninos`
--

CREATE TABLE `t_ninos` (
  `id` int(100) NOT NULL,
  `no_registro` int(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `hepatitisA` varchar(100) NOT NULL,
  `hepatitisB` varchar(100) NOT NULL,
  `influenza` varchar(100) NOT NULL,
  `sarampion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_ninos`
--

INSERT INTO `t_ninos` (`id`, `no_registro`, `nombre`, `hepatitisA`, `hepatitisB`, `influenza`, `sarampion`) VALUES
(13, 224455, 'Luis', 'si', 'si', 'no', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_ninos`
--
ALTER TABLE `t_ninos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_ninos`
--
ALTER TABLE `t_ninos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
