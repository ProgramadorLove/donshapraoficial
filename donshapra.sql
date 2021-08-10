-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2019 a las 02:05:12
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donshapra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `nombre_corto` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `inicio` tinyint(1) DEFAULT 0,
  `menu` tinyint(1) DEFAULT 0,
  `activado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `nombre_corto`, `inicio`, `menu`, `activado`) VALUES
(1, 'Basico', 'basico', 0, 0, 1),
(2, 'Repuesto', 'Repuesto', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `clave` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `in_activado` tinyint(1) DEFAULT 1,
  `fechcreado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `email`, `celular`, `direccion`, `clave`, `in_activado`, `fechcreado`) VALUES
(1, 'angello', 'torres', 'angello@gmail.com', '', '', 'adcd7048512e64b48da55b027577886ee5a36350', 1, '2019-08-14 09:44:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `k` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codigo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `cupon_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `metodopago_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `k`, `codigo`, `cliente_id`, `cupon_id`, `estado_id`, `creado`, `metodopago_id`) VALUES
(1, 'WxneI_1e2fR', 'C97L2UtVSFo', 1, NULL, 5, '2019-08-14 09:46:31', 2),
(2, 'Nq-QiHkR7uj', 'QGe8gbphIUb', 1, NULL, 5, '2019-08-14 15:10:09', 2),
(3, 'VDbGZ2_hiYQ', 'ms2ztniPfxU', 1, NULL, 2, '2019-09-22 09:00:19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE `compra_producto` (
  `id` int(11) NOT NULL,
  `compra_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `q` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compra_producto`
--

INSERT INTO `compra_producto` (`id`, `compra_id`, `producto_id`, `q`) VALUES
(1, 1, 1, 2),
(2, 2, 4, 1),
(3, 3, 7, 1),
(1, 1, 1, 2),
(2, 2, 4, 1),
(3, 3, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `etiqueta` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `val` text COLLATE utf8_bin DEFAULT NULL,
  `cfg_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `nombre`, `etiqueta`, `kind`, `val`, `cfg_id`) VALUES
(1, 'general_main_title', 'Titulo Principal', 1, 'DATAROMS TECNOLOGY', 1),
(2, 'general_main_email', 'Email Principal', 1, 'tuemail@tudominio.com', 1),
(3, 'general_pais', 'Pais', 1, 'PERU', 1),
(4, 'general_coin', 'Moneda', 1, '$', 1),
(5, 'general_iva_txt', 'Impuesto Texto', 1, 'I.V.A', 1),
(6, 'general_iva', 'Impuesto IVA (%)', 2, '16', 1),
(7, 'general_img_default', 'Imagen Default', 1, 'res/img/default.png', 1),
(8, 'bank_titular', 'Titular de la cuenta', 1, 'KIKE JACK VARGAS TORRES', 1),
(9, 'bank_name', 'Nombre del Banco', 1, 'BCP', 1),
(10, 'bank_account', 'Numero de Cuenta', 1, '0012465655555', 1),
(11, 'bank_card', 'Numero de Tarjeta', 1, '456971', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupon`
--

CREATE TABLE `cupon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `kind` int(11) DEFAULT 1,
  `estado_multiple` tinyint(1) DEFAULT 0,
  `estado_activo` tinyint(1) DEFAULT 1,
  `start_at` date DEFAULT NULL,
  `finalisado_at` date DEFAULT NULL,
  `creado_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
(1, 'Pendiente'),
(2, 'Pagado'),
(3, 'Cancelado'),
(4, 'Enviado'),
(5, 'Finalizado'),
(1, 'Pendiente'),
(2, 'Pagado'),
(3, 'Cancelado'),
(4, 'Enviado'),
(5, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `id` int(11) NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `estado_activo` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`id`, `nombre_corto`, `nombre`, `estado_activo`) VALUES
(1, 'bank', 'Deposito Bancario', 1),
(2, 'deliver', 'Pago Contra entrega', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Chile'),
(3, 'Colombia'),
(4, 'España'),
(5, 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `short_name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `code` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `offer_txt` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_public` tinyint(1) DEFAULT 0,
  `in_existence` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `order_at` datetime DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `meta_title` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `meta_keywords` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `short_name`, `nombre`, `code`, `descripcion`, `offer_txt`, `image`, `link`, `is_featured`, `is_public`, `in_existence`, `created_at`, `order_at`, `precio`, `categoria_id`, `unit_id`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(1, 'hKdzG0BfSb_', 'placa madre', '0001', 'para laptod', NULL, 'placa.jpg', '', 1, 1, 1, '2019-08-14 09:41:18', NULL, 80, 1, 1, NULL, NULL, NULL),
(2, '4h57x9QkZYA', 'fuente de poder', '0002', 'windoms 10', NULL, 'coo.jpg', '', 1, 1, 1, '2019-08-14 13:56:37', NULL, 80, 1, 1, NULL, NULL, NULL),
(3, '0gv3uG82i-n', 'teclado', '0003', 'todo', NULL, 'tec.jpg', '', 1, 1, 1, '2019-08-14 13:57:37', NULL, 100, 1, 2, NULL, NULL, NULL),
(4, 'gneVz3oAdhW', 'tfe', '2014', 'klkl', NULL, 'ddr.jpg', '', 0, 1, 1, '2019-08-14 15:08:05', NULL, 50, 2, 1, NULL, NULL, NULL),
(5, 'qniqqfKp5-J', 'asd', '006', 'fefw', NULL, 'lap.jpg', '', 0, 1, 1, '2019-08-15 11:48:03', NULL, 89, 2, 3, NULL, NULL, NULL),
(6, 'CbPtHfeFko4', 'jfhd', '0524', 'dgsg', NULL, 'wifi.jpg', '', 0, 1, 1, '2019-08-15 11:53:07', NULL, 22, 2, 1, NULL, NULL, NULL),
(7, 'NzcSS1iejGx', 'laptop', '014', 'core5', NULL, 'hp.jpg', '', 1, 1, 1, '2019-08-16 14:23:05', NULL, 1500, 2, 4, NULL, NULL, NULL),
(8, 'mysWp3Pi4RM', 'URTURT', '8686', 'JHFGJ', NULL, 'soporte.jpg', '', 0, 1, 0, '2019-08-18 11:15:19', NULL, 52, 1, 3, NULL, NULL, NULL),
(9, '4mEUGE7-ZFn', 'gtut', 'eryery', 'gerye', NULL, 'DELL.jpg', '', 0, 1, 1, '2019-08-22 17:05:56', NULL, 54, 1, 1, NULL, NULL, NULL),
(10, 'oQPA31xSaC7', 'kikecito', '3425', 'fdsasdg', NULL, 'FB_IMG_1527088717125.jpg', '', 1, 1, 0, '2019-09-26 08:24:53', NULL, 50, 1, 1, NULL, NULL, NULL),
(1, 'hKdzG0BfSb_', 'placa madre', '0001', 'para laptod', NULL, 'placa.jpg', '', 1, 1, 1, '2019-08-14 09:41:18', NULL, 80, 1, 1, NULL, NULL, NULL),
(2, '4h57x9QkZYA', 'fuente de poder', '0002', 'windoms 10', NULL, 'coo.jpg', '', 1, 1, 1, '2019-08-14 13:56:37', NULL, 80, 1, 1, NULL, NULL, NULL),
(3, '0gv3uG82i-n', 'teclado', '0003', 'todo', NULL, 'tec.jpg', '', 1, 1, 1, '2019-08-14 13:57:37', NULL, 100, 1, 2, NULL, NULL, NULL),
(4, 'gneVz3oAdhW', 'tfe', '2014', 'klkl', NULL, 'ddr.jpg', '', 0, 1, 1, '2019-08-14 15:08:05', NULL, 50, 2, 1, NULL, NULL, NULL),
(5, 'qniqqfKp5-J', 'asd', '006', 'fefw', NULL, 'lap.jpg', '', 0, 1, 1, '2019-08-15 11:48:03', NULL, 89, 2, 3, NULL, NULL, NULL),
(6, 'CbPtHfeFko4', 'jfhd', '0524', 'dgsg', NULL, 'wifi.jpg', '', 0, 1, 1, '2019-08-15 11:53:07', NULL, 22, 2, 1, NULL, NULL, NULL),
(7, 'NzcSS1iejGx', 'laptop', '014', 'core5', NULL, 'hp.jpg', '', 1, 1, 1, '2019-08-16 14:23:05', NULL, 1500, 2, 4, NULL, NULL, NULL),
(8, 'mysWp3Pi4RM', 'URTURT', '8686', 'JHFGJ', NULL, 'soporte.jpg', '', 0, 1, 0, '2019-08-18 11:15:19', NULL, 52, 1, 3, NULL, NULL, NULL),
(9, '4mEUGE7-ZFn', 'gtut', 'eryery', 'gerye', NULL, 'DELL.jpg', '', 0, 1, 1, '2019-08-22 17:05:56', NULL, 54, 1, 1, NULL, NULL, NULL),
(10, 'oQPA31xSaC7', 'kikecito', '3425', 'fdsasdg', NULL, 'FB_IMG_1527088717125.jpg', '', 1, 1, 0, '2019-09-26 08:24:53', NULL, 50, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT 0,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_unit`
--

CREATE TABLE `tipo_unit` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_unit`
--

INSERT INTO `tipo_unit` (`id`, `nombre`) VALUES
(1, 'Pieza'),
(2, 'Kit'),
(3, 'Juego'),
(4, 'Caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `clave` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `usuario`, `email`, `clave`, `created_at`, `foto`) VALUES
(1, 'Admin', '', 'admin', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '2019-08-14 09:24:19', ''),
(1, 'Admin', '', 'admin', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '2019-08-14 09:24:19', ''),
(0, 'kikesitho', 'vargas', 'kika', 'kika@gmail.com', 'kika123', '2019-10-03 00:00:00', ''),
(0, 'kikesitho', 'vargas', 'kika', 'kika@gmail.com', 'kika123', '2019-10-03 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vistaproducto`
--

CREATE TABLE `vistaproducto` (
  `id` int(11) NOT NULL,
  `vista_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `realip` varchar(16) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vistaproducto`
--

INSERT INTO `vistaproducto` (`id`, `vista_id`, `producto_id`, `created_at`, `realip`) VALUES
(1, NULL, 1, '2019-08-14 09:41:39', '::1'),
(2, NULL, 3, '2019-08-14 13:58:02', '::1'),
(3, NULL, 4, '2019-08-14 15:14:52', '::1'),
(4, NULL, 2, '2019-08-15 11:45:48', '::1'),
(5, NULL, 5, '2019-08-15 11:50:02', '::1'),
(6, NULL, 7, '2019-08-16 14:23:13', '::1'),
(7, NULL, 7, '2019-08-18 11:11:49', '::1'),
(8, NULL, 2, '2019-08-18 11:12:16', '::1'),
(9, NULL, 4, '2019-08-18 11:24:18', '::1'),
(10, NULL, 8, '2019-08-18 11:24:54', '::1'),
(11, NULL, 3, '2019-08-18 11:25:54', '::1'),
(12, NULL, 7, '2019-09-26 08:21:08', '::1'),
(13, NULL, 2, '2019-09-26 08:21:24', '::1'),
(14, NULL, 3, '2019-09-26 08:21:34', '::1'),
(15, NULL, 10, '2019-09-26 08:25:00', '::1'),
(16, NULL, 8, '2019-09-26 08:32:15', '::1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metodopago_id` (`metodopago_id`),
  ADD KEY `cupon_id` (`cupon_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_unit`
--
ALTER TABLE `tipo_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vistaproducto`
--
ALTER TABLE `vistaproducto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vista_id` (`vista_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
