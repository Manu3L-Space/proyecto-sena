-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2021 a las 08:18:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peluqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(100) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `nit` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `moneda` varchar(200) NOT NULL,
  `simbolo_moneda` varchar(200) NOT NULL,
  `impuesto_producto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `nit`, `direccion`, `telefono`, `descripcion`, `correo`, `moneda`, `simbolo_moneda`, `impuesto_producto`) VALUES
(1, 'Peluqueria Machis', '987654321', 'Bogotá Fontibon', '987654321', 'Peluqueria con tintes, manicure, pedicure, cortes para dama y caballero', 'peluqueriamachis@ejemplo.com', 'Peso Colombiano', '$', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(0, 6, 'se ha desconectado el sistema en ', '2021-01-07 00:24:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(200) NOT NULL,
  `id_usuario` int(200) NOT NULL,
  `fechaactual` date NOT NULL,
  `fechareserva` date NOT NULL,
  `hora` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `id_usuario`, `fechaactual`, `fechareserva`, `hora`, `estado`) VALUES
(1, 4, '2021-01-06', '2021-01-08', '14:30', ''),
(2, 3, '2021-01-06', '2021-01-07', '16:30', ''),
(3, 6, '2021-01-07', '2021-01-21', '12:50', ''),
(4, 4, '2021-01-07', '2021-01-19', '16:50', ''),
(5, 2, '2021-01-07', '2021-01-28', '19:30', ''),
(6, 8, '2021-01-07', '2021-01-19', '07:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(200) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(200) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(200) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `tipo`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(2, 'admin1', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'administrador', 'admin1', '1', '123654789', 'admin1@ejemplo.com'),
(3, 'cliente1', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'cliente', 'cliente1', '1', '1234', 'cliente1@gmail.com'),
(4, 'empleado1', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'empleado', 'empleado1', '1', '123654987', 'empleado1@ejemplo.com'),
(5, 'cliente2', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'cliente', 'cliente2', '2', '987654321', 'cliente2@gmail.com'),
(6, 'empleado2', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'empleado', 'empleado2', '2', '456789123', 'empleado2@gmail.com'),
(8, 'cliente3', 'a1Bz20ydqelm8m1wql81dc9bdb52d04dc20036dbd8313ed055', 'cliente', 'cliente3', '3', '456789123', 'cliente3@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
