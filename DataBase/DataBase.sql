-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 09:29:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autitos`
--

CREATE TABLE `autitos` (
  `Campo` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `Placa` varchar(12) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `NoPuertas` int(4) NOT NULL,
  `IdDueño` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autitos`
--

INSERT INTO `autitos` (`Campo`, `Id`, `Placa`, `Color`, `Marca`, `NoPuertas`, `IdDueño`) VALUES
('Modificado\r\n        ', 4, 'Meow123', 's', 's', 1, 263773),
('Dañao\r\n        ', 5, 'Meow123', 'Negro', 'Toyota', 4, 263778),
('NOt a camion\r\n        ', 7, 'a', 'd', 's', 10, 263773),
('a\r\n        ', 8, 'a', 'a', 'a', 1, 263773),
('Hola\r\n        ', 9, 'DS', 'Blanco', 'a', 1, 263778),
('4', 10, 'a', 'S', 'a', 1, 263778),
('7  ', 11, 'DS', 'a', 'a', 1, 263777),
('Meow Mex', 12, 'Meow123', 'Negro', 'Toyota', 3, 263778),
('Meow  ', 13, 'Barc123', 'Blanco', 'Toyota', 3, 263778);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `Id` int(11) NOT NULL,
  `NombreC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`Id`, `NombreC`) VALUES
(2, 'Pintor'),
(3, 'Mecanico'),
(4, 'Mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleordendetrabajo`
--

CREATE TABLE `detalleordendetrabajo` (
  `Campo` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `IdOrden` varchar(11) NOT NULL,
  `IdAuto` varchar(11) NOT NULL,
  `IdTrabajador` varchar(11) NOT NULL,
  `IdEstado` varchar(11) NOT NULL,
  `Dirección` varchar(50) NOT NULL,
  `IdCargo` varchar(200) NOT NULL,
  `Tiempo` varchar(100) NOT NULL,
  `Valor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleordendetrabajo`
--

INSERT INTO `detalleordendetrabajo` (`Campo`, `Id`, `IdOrden`, `IdAuto`, `IdTrabajador`, `IdEstado`, `Dirección`, `IdCargo`, `Tiempo`, `Valor`) VALUES
('Modificado ', 17, '2 ', '4 ', '9 ', '1 ', 'calle 27', '2 ', '2', 2000),
('Sera un buen trabajo', 19, '2 ', '11 ', '9 ', '2 ', 'calle 27', '2 ', '4', 1500),
('Prueba', 22, '2 ', '4 ', '13 ', '2 ', 'calle 27', '3 ', '3', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `Campo` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`Campo`, `Id`, `Nombre`) VALUES
('El proceso se encuentra activo', 1, 'Activo'),
('El proceso se encuentra terminado', 2, 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordendetrabajo`
--

CREATE TABLE `ordendetrabajo` (
  `Id` int(15) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordendetrabajo`
--

INSERT INTO `ordendetrabajo` (`Id`, `Descripcion`, `Fecha`) VALUES
(2, 'Prueba Modifica', '2023-05-02'),
(4, 'Se Da?o el carro XD             \r\n\r\n        ', '2023-05-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Campo` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Celular` bigint(15) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Estrato` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Campo`, `Id`, `Nombre`, `Celular`, `Direccion`, `Estrato`) VALUES
('Prueba\r\n        ', 263773, 'Dante', 2147483647, 'd', 4),
('A\r\n        ', 263774, 'Dante', 2147483647, 'calle 100', 6),
('Jo\r\n        ', 263776, 'Dante', 2147483647, 'calle 27', 6),
('Guau_mex\r\n        ', 263777, 'Candy', 2, 's', 1),
('Hola soy la novia de daniel\r\n        ', 263778, 'Daniela', 4, 'calle 27', 21),
('Hola   ', 263779, 'Candy', 30, 'calle 100', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `Campo` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `NombreT` varchar(100) NOT NULL,
  `Celular` bigint(15) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `IdCargo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`Campo`, `Id`, `NombreT`, `Celular`, `Direccion`, `IdCargo`) VALUES
('Hola', 9, 'R', 30, 'cra 27', '3 '),
('4', 13, 'Dante', 3, 'calle 100', '2 '),
('Hola', 14, 'Daniel', 30, 'cra 27', '3 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autitos`
--
ALTER TABLE `autitos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `detalleordendetrabajo`
--
ALTER TABLE `detalleordendetrabajo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ordendetrabajo`
--
ALTER TABLE `ordendetrabajo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autitos`
--
ALTER TABLE `autitos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalleordendetrabajo`
--
ALTER TABLE `detalleordendetrabajo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ordendetrabajo`
--
ALTER TABLE `ordendetrabajo`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263780;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
