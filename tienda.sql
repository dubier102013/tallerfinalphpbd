-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2021 a las 00:39:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Doc_id_cliente` int(11) UNSIGNED NOT NULL,
  `Nombre_cliente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_clinte` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion_cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Valor_Deuda_cliente` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Doc_id_cliente`, `Nombre_cliente`, `Apellido_clinte`, `Direccion_cliente`, `Valor_Deuda_cliente`) VALUES
(1254, 'dubier', 'molina', 'calle abajo', 3254),
(12547, 'dubier', 'molina', 'calle abajo', 1010101),
(36596, 'dubier', 'molina', 'calle abajo', 36126),
(125463, 'dudu', 'molina', 'arriba', 254156),
(10395874, 'dudu', 'molina', 'calle abajo', 2000000),
(56496120, 'dubier', 'molina', 'calle abajo', 25411);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fac`
--

CREATE TABLE `detalle_fac` (
  `Num_factura` int(11) UNSIGNED NOT NULL,
  `Id_Producto` int(6) UNSIGNED NOT NULL,
  `Valor_Pro_detalle` int(8) UNSIGNED NOT NULL,
  `cantida_Pro_deta` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_fac`
--

INSERT INTO `detalle_fac` (`Num_factura`, `Id_Producto`, `Valor_Pro_detalle`, `cantida_Pro_deta`) VALUES
(12541, 1452, 200000, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enca_fac`
--

CREATE TABLE `enca_fac` (
  `Num_factura` int(11) UNSIGNED NOT NULL,
  `Doc_Client_fac` int(11) UNSIGNED NOT NULL,
  `Valor_Fac` int(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `enca_fac`
--

INSERT INTO `enca_fac` (`Num_factura`, `Doc_Client_fac`, `Valor_Fac`) VALUES
(12541, 1254, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(6) UNSIGNED NOT NULL,
  `Nom_Producto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Valor_Pro` float(6,2) NOT NULL,
  `Descripcion_Pro` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nom_Producto`, `Valor_Pro`, `Descripcion_Pro`) VALUES
(1452, 'banano', 3000.00, 'fruta'),
(14526, 'leche', 2000.00, 'lacteo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Doc_id_cliente`);

--
-- Indices de la tabla `detalle_fac`
--
ALTER TABLE `detalle_fac`
  ADD PRIMARY KEY (`Num_factura`),
  ADD KEY `Num_factura` (`Num_factura`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Num_factura_2` (`Num_factura`);

--
-- Indices de la tabla `enca_fac`
--
ALTER TABLE `enca_fac`
  ADD KEY `Doc_Client_fac` (`Doc_Client_fac`),
  ADD KEY `Num_factura` (`Num_factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_fac`
--
ALTER TABLE `detalle_fac`
  ADD CONSTRAINT `detalle_fac_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`);

--
-- Filtros para la tabla `enca_fac`
--
ALTER TABLE `enca_fac`
  ADD CONSTRAINT `enca_fac_ibfk_1` FOREIGN KEY (`Doc_Client_fac`) REFERENCES `clientes` (`Doc_id_cliente`),
  ADD CONSTRAINT `enca_fac_ibfk_2` FOREIGN KEY (`Num_factura`) REFERENCES `detalle_fac` (`Num_factura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
