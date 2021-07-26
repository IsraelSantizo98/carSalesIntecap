-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2021 a las 13:34:49
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `automoviles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `color`) VALUES
(1, 'Azul'),
(2, 'Rojo'),
(3, 'Verde'),
(4, 'Café'),
(5, 'Plateado'),
(6, 'Negro'),
(7, 'Blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combustible`
--

CREATE TABLE `combustible` (
  `id_combustible` int(11) NOT NULL,
  `combustible` varchar(40) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `combustible`
--

INSERT INTO `combustible` (`id_combustible`, `combustible`, `descripcion`) VALUES
(1, 'Gasolina', NULL),
(2, 'Diesel', NULL),
(3, 'Electrico', 'Carro electrico a baterias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_autos`
--

CREATE TABLE `fotos_autos` (
  `correlativo` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `ubicacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `marca`, `descripcion`) VALUES
(1, 'Toyota', NULL),
(2, 'Nissan', NULL),
(3, 'Mitsubishi', NULL),
(4, 'Honda', NULL),
(5, 'Suzuki', NULL),
(6, 'Hyundai', NULL),
(7, 'Mazda', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puerta`
--

CREATE TABLE `puerta` (
  `id_puerta` int(11) NOT NULL,
  `cantidad_puertas` int(11) NOT NULL,
  `fk_puerta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puerta`
--

INSERT INTO `puerta` (`id_puerta`, `cantidad_puertas`, `fk_puerta`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE `tipo_vehiculo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id_tipo`, `tipo`, `descripcion`) VALUES
(1, 'Sedán', NULL),
(2, 'Hatchback', NULL),
(3, 'Camioneta', NULL),
(4, 'Pick-up', NULL),
(5, 'Panel', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traccion`
--

CREATE TABLE `traccion` (
  `id_traccion` int(11) NOT NULL,
  `traccion` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `traccion`
--

INSERT INTO `traccion` (`id_traccion`, `traccion`, `descripcion`) VALUES
(1, '4x4', 'Todo terreno'),
(2, 'Detantera', 'Traccion de llantas Delanteras'),
(3, 'Trasera', 'Traccion de llantas traseras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmision`
--

CREATE TABLE `transmision` (
  `id_transmicion` int(11) NOT NULL,
  `transmision` varchar(20) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transmision`
--

INSERT INTO `transmision` (`id_transmicion`, `transmision`, `descripcion`) VALUES
(1, 'Mecanica', NULL),
(2, 'Automatica', NULL),
(3, 'Triptonic', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nameN` varchar(80) NOT NULL,
  `userName` varchar(80) NOT NULL,
  `passwordN` varchar(80) NOT NULL,
  `emailN` varchar(80) NOT NULL,
  `imageProfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nameN`, `userName`, `passwordN`, `emailN`, `imageProfile`) VALUES
(1, 'Israel Santizo', 'jsantizo', 'admin', 'jsantizo@gmail.com', 'greg-rakozy-oMpAz-DN-9I-unsplash.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `correlativo` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `linea` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `transmision` int(11) NOT NULL,
  `modelo` varchar(4) NOT NULL,
  `km` int(11) NOT NULL,
  `traccion` int(11) NOT NULL,
  `combustible` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad_puertas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `combustible`
--
ALTER TABLE `combustible`
  ADD PRIMARY KEY (`id_combustible`);

--
-- Indices de la tabla `fotos_autos`
--
ALTER TABLE `fotos_autos`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `id_vehiculo` (`id_vehiculo`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `puerta`
--
ALTER TABLE `puerta`
  ADD PRIMARY KEY (`id_puerta`),
  ADD KEY `fk_puerta` (`fk_puerta`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `traccion`
--
ALTER TABLE `traccion`
  ADD PRIMARY KEY (`id_traccion`);

--
-- Indices de la tabla `transmision`
--
ALTER TABLE `transmision`
  ADD PRIMARY KEY (`id_transmicion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `marca` (`marca`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `transmision` (`transmision`),
  ADD KEY `traccion` (`traccion`),
  ADD KEY `combustible` (`combustible`),
  ADD KEY `color` (`color`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `combustible`
--
ALTER TABLE `combustible`
  MODIFY `id_combustible` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fotos_autos`
--
ALTER TABLE `fotos_autos`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `puerta`
--
ALTER TABLE `puerta`
  MODIFY `id_puerta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `traccion`
--
ALTER TABLE `traccion`
  MODIFY `id_traccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transmision`
--
ALTER TABLE `transmision`
  MODIFY `id_transmicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos_autos`
--
ALTER TABLE `fotos_autos`
  ADD CONSTRAINT `fotos_autos_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`correlativo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`marca`) REFERENCES `marcas` (`id_marca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo_vehiculo` (`id_tipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_3` FOREIGN KEY (`transmision`) REFERENCES `transmision` (`id_transmicion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_4` FOREIGN KEY (`traccion`) REFERENCES `traccion` (`id_traccion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_5` FOREIGN KEY (`combustible`) REFERENCES `combustible` (`id_combustible`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_6` FOREIGN KEY (`color`) REFERENCES `colores` (`id_color`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
