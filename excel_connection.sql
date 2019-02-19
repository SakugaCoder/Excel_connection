-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2019 a las 16:16:46
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `excel_connection`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excel_data`
--

CREATE TABLE `excel_data` (
  `id` int(2) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `data_1` int(4) NOT NULL,
  `data_2` int(4) NOT NULL,
  `data_3` int(4) NOT NULL,
  `data_4` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `excel_data`
--

INSERT INTO `excel_data` (`id`, `estado`, `data_1`, `data_2`, `data_3`, `data_4`) VALUES
(1, 1, 28, 953, 956, 986);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `excel_data`
--
ALTER TABLE `excel_data`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
