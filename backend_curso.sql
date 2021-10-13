-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-10-2021 a las 02:04:27
-- Versión del servidor: 10.3.31-MariaDB
-- Versión de PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `backend_curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` int(10) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `categoria`, `stock`, `url`) VALUES
(1, 'Papas Fritas', 100, 1, 10, 'img/papas-fritas.png'),
(3, 'Ensalada', 300, 1, 10, 'img/ensalada.png'),
(4, 'Pizza', 500, 1, 10, 'img/pizza.png'),
(5, 'Sandwich', 300, 1, 10, 'img/sandwich.png'),
(6, 'Hamburguesa', 350, 1, 10, 'img/hamburguesa.png'),
(7, 'Galletita', 200, 1, 10, 'img/galletitas.png'),
(8, 'Panchos', 200, 1, 10, 'img/pancho.png'),
(9, 'Dona', 100, 1, 10, 'img/dona.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '@admin'),
(4, 'user ', 'user', 'user@gmail.com', '$2y$10$W5J9WLlFA9ArhA/gvzySuOA5h2vWKxtguA6RJXKLAnfdkj5z5XfSW'),
(5, 'example', 'example', 'example@gmail.com', '$2y$10$i/Yp5eB4nyB9yVY0h8pjUOvLBWzbafazZ5BOK5jMpHq4u7RNaiHUy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
