-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2024 a las 22:16:12
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservaumss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `Imagen` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ambientes` (`id`, `nombre`, `capacidad`, `ubicacion`, `periodo`, `fechaInicio`, `fechaFin`, `horario`, `Imagen`) VALUES
('1', 'auditorio', 21, 'edificio nuevo', 'cuarto', '2024-04-27', '2024-04-20', '00:00:00', '0'),
('21', 'auditorio', 21, 'edificio nuevo', 'segundo parcial', '2024-04-19', '2024-04-24', '08:15:00', '0'),
('22', '693A', 70, 'edificio nuevo', 'segundo parcial', '2024-04-20', '2024-04-26', '12:45:00', '0'),
('23', '692B', 50, 'edificio nuevo', 'segundo parcial', '2024-04-27', '2024-04-28', '11:15:00', '0'),
('24', '691A', 42, 'edificio nuevo', 'primer parcial', '2024-05-22', '2024-04-26', '00:00:00', '0'),
('25', '691B', 58, 'Edificio Nuevo', 'primer parcial', '2024-05-03', '2024-05-02', '00:00:00', '0'),
('26', '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
('27', '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
('28', '691B', 119, 'Edificio Nuevo', 'segundo parcial', '2024-04-25', '2024-04-24', '00:00:00', '0'),
('29', '622', 23, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', '0'),
('30', '622', 23, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', ''),
('31', '622', 100, 'campus FCyT ', 'primer parcial', '2024-04-23', '2024-04-22', '00:00:00', ''),
('32', '623', 70, 'campus FCyT ', 'segundo parcial', '2024-04-15', '2024-04-23', '00:00:00', ''),
('33', '623', 70, 'campus FCyT ', 'segundo parcial', '2024-04-15', '2024-04-23', '00:00:00', ''),
('34', '691B', 19, 'campus FCyT ', 'primer parcial', '2024-05-10', '2024-05-11', '06:45:00', ''),
('35', '691B', 19, 'campus FCyT ', 'primer parcial', '2024-05-10', '2024-05-11', '06:45:00', '');


CREATE TABLE `roles` (
  `id` varchar(120) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
('1', 'administrador'),
('2', 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(120) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `rol_id` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contrasena`, `nombre`, `rol_id`) VALUES
('1', 'example@gmail.com', 'contrasena', 'hola', '1'),
('2', 'example2@gmail.com', '1234', 'hola', '2'),
('3', 'michellequispemq@gmail.com', 'Mich', 'Michelle', '1');

-- --------------------------------------------------------

-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
COMMIT;

-- Consulta para eliminar un ambiente por su ID
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