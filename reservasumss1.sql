-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2024 a las 16:08:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservasumss1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `horarios` text NOT NULL,
  `ImagenAmbiente` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ambientes`
--

INSERT INTO `ambientes` (`id`, `nombre`, `capacidad`, `ubicacion`, `periodo`, `fechaInicio`, `fechaFin`, `horarios`, `ImagenAmbiente`) VALUES
(1, 'auditorio', 21, 'edificio nuevo', 'cuarto', '2024-04-27', '2024-04-20', '00:00:00', '0'),
(21, 'auditorio', 21, 'edificio nuevo', 'segundo parcial', '2024-04-19', '2024-04-24', '08:15:00', '0'),
(22, '693A', 70, 'edificio nuevo', 'segundo parcial', '2024-04-20', '2024-04-26', '12:45:00', '0'),
(23, '692B', 50, 'edificio nuevo', 'segundo parcial', '2024-04-27', '2024-04-28', '11:15:00', '0'),
(24, '691A', 42, 'edificio nuevo', 'primer parcial', '2024-05-22', '2024-04-26', '00:00:00', '0'),
(25, '691B', 58, 'Edificio Nuevo', 'primer parcial', '2024-05-03', '2024-05-02', '00:00:00', '0'),
(26, '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
(27, '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
(28, '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
(29, '622', 23, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', '0'),
(30, '622', 23, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', ''),
(31, '622', 100, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', ''),
(32, '623', 70, 'campus FCyT ', 'segundo parcial', '2024-04-15', '2024-04-23', '00:00:00', ''),
(33, '623', 70, 'campus FCyT ', 'segundo parcial', '2024-04-15', '2024-04-23', '00:00:00', ''),
(34, '691B', 19, 'campus FCyT ', 'primer parcial', '2024-05-10', '2024-05-11', '06:45:00', ''),
(35, '691B', 19, 'campus FCyT ', 'primer parcial', '2024-05-10', '2024-05-11', '06:45:00', ''),
(36, '622', 24, 'Edificio Nuevo', 'primer parcial', '2024-05-03', '2024-05-07', '06:45:00', ''),
(37, '622', 24, 'Edificio Nuevo', 'primer parcial', '2024-05-03', '2024-05-07', '06:45:00', ''),
(38, '', 0, '', '', '0000-00-00', '0000-00-00', '00:00:00', ''),
(39, '691B', 234, 'Edificio Nuevo', 'segundo parcial', '2024-04-24', '2024-04-30', '06:45:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `materias` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `ci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contrasena`, `nombre`, `rol_id`, `apellido`, `materias`, `carrera`, `ci`) VALUES
(1, 'example@gmail.com', 'contrasena', 'hola', 1, '', '', '', 0),
(2, 'example2@gmail.com', '1234', 'hola', 2, '', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`);
COMMIT;

DELETE FROM ambientes WHERE id = id;

-- Consulta para actualizar los detalles de un ambiente por su ID
UPDATE ambientes SET
    nombre = 'Nuevo Nombre',
    ubicacion = 'Nueva Ubicación',
    capacidad= `capacidad`,
    periodo = 'Nuevo Período de Examen',
    fechaInicio = 'Nueva Fecha de Inicio',
    fechaFin = 'Nueva Fecha de Fin',
    horario = 'Nuevo Horario',
    imagen = 'Nueva Imagen'
WHERE id = id;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
