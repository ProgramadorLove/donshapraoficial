-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 21:08:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(2, 'drones promocion', 'drones rojo para volar', 500, 'drone_falcon.png'),
(7, 'el nuevo dron ', 'dron rojito como su carita de chong', 8500, 'drone_falcon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `proveedor` varchar(100) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombre`, `descripcion`, `proveedor`, `categoria`, `stock`, `precio`, `fechaIngreso`, `imagen`) VALUES
(1, 'packs mouse', 'negro', 'Golden store', 'Computadoras', 20, 15, '2019-11-08 17:21:26', 'i2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(9, 'Computadoras'),
(10, 'Droonnes'),
(11, 'ZApato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `dni` int(8) NOT NULL,
  `sexo` varchar(50) COLLATE utf8_bin NOT NULL,
  `celular` varchar(9) COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `dni`, `sexo`, `celular`, `correo`) VALUES
(8, 'Maria', 'Suarez', 74521326, 'Femenino', '963258417', ''),
(9, 'rickishy', 'copara', 737468081, 'Masculino', '975226325', ''),
(10, 'jorge', 'garcia', 73746808, 'varon', 'jorge@gma', ''),
(11, 'ricardo', 'lopez', 859685, 'mujer', 'rickishyg', ''),
(12, 'maria9', 'garcia', 74521326, 'Mujer', 'andy.arie', ''),
(13, 'angelica', 'human', 898989, 'Mujer', '123654789', ''),
(14, 'kakaroto', 'goku', 1477852, 'Varon', '987654987', 'kakroto@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(18,2) DEFAULT NULL,
  `monto` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio_unitario`, `monto`) VALUES
(7, 10, 12, 1, '50.00', '50.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_bin NOT NULL,
  `proveedor` varchar(150) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `stock` int(11) NOT NULL,
  `precioV` float NOT NULL,
  `precioC` float NOT NULL,
  `fechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagen` varchar(500) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `descripcion`, `proveedor`, `categoria`, `stock`, `precioV`, `precioC`, `fechaIngreso`, `imagen`) VALUES
(10, '3d lentes realyti virtual', 'lentes para jugar juegos', 'Senati', 'Computadoras', 50, 11114, 123, '2019-11-07 17:12:37', '8.jpg'),
(11, 'XBOX GAMER', 'CONSOLA DE VIDEOJUEGOS', 'Tecnology', 'Computadoras', 50, 200, 250, '2019-11-07 17:26:06', 'airpods.jpg'),
(12, 'phalcon dron  gray', 'drone volador dronnes gray', 'Tecnology', 'Computadoras', 20, 80, 50, '2019-11-07 19:51:49', 'p4.jpg'),
(13, 'Dron dragon racer', 'dron volador color amarillo patito', 'Tecnology', 'Computadoras', 20, 50, 100, '2019-11-07 19:53:12', 'p5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `empresa_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `dni_ruc` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(9) COLLATE utf8_bin NOT NULL,
  `celular` varchar(12) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `empresa_nombre`, `dni_ruc`, `telefono`, `celular`, `direccion`) VALUES
(5, 'Tecnology', '00215487954', '00321465', '987457894', 'Av. Centenario'),
(7, 'Golden store', '202050', '061484895', '97586859', 'av. senati #789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(60) COLLATE utf8_bin NOT NULL,
  `dni` varchar(8) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(60) COLLATE utf8_bin NOT NULL,
  `celular` varchar(9) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `clave` varchar(30) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `sexo`, `celular`, `usuario`, `clave`, `cargo`, `foto`) VALUES
(6, 'kike', 'vargas', '78456987', 'Femenino', '987654321', 'kike', 'kike', 'Cajero', 'img/Televisor.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL,
  `num_venta` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipo_documento` varchar(50) COLLATE utf8_bin NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `igv` decimal(18,2) NOT NULL,
  `total` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `id_cliente`, `fecha_venta`, `num_venta`, `tipo_documento`, `subtotal`, `igv`, `total`) VALUES
(7, 8, '2019-10-26 00:19:38', '001', 'Boleta', '1800.00', '324.00', '2124.00'),
(8, 9, '2019-10-30 21:08:04', '', 'Factura', '1800.00', '324.00', '2124.00'),
(9, 8, '2019-11-01 01:03:58', '', 'Factura', '16200.00', '2916.00', '19116.00'),
(10, 14, '2019-11-07 22:49:16', '40050050', 'Factura', '50.00', '9.00', '59.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_venta_2` (`id_venta`),
  ADD KEY `id_venta` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
