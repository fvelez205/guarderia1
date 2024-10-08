-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 29-09-2024 a las 08:02:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pingosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `nombrealum` varchar(40) NOT NULL,
  `apellidoalum` varchar(40) NOT NULL,
  `domalum` varchar(40) NOT NULL,
  `telefonoalum` varchar(40) NOT NULL,
  `padrealum` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombrealum`, `apellidoalum`, `domalum`, `telefonoalum`, `padrealum`) VALUES
('Arenisto', 'Pulido', 'Colina del Norte 2200', '33', 'Romario Nazario'),
('Nayeli', 'Vizcarra', 'Fontaneros #456', '3321567668', 'Romario Nazario'),
('gordota', 'dragonsita', 'paris', '3311343001', 'iker '),
('Mariana', 'Lopez', 'Cruz del Sur #343', '3317127038', 'Joaquin Macias'),
('Mario', 'Gonzalez Ortega', 'Medrano # 8576', '3312703989', 'Romina Guadalupe Venegas'),
('Guadalupe', 'Rivas Souza', 'Carpinteros #8410', '5552129334', 'Maria Becerra Alvarez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
