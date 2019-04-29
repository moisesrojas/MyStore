-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-04-2019 a las 15:26:40
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MyStore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `id_cat` int(11) NOT NULL,
  `nombre_categoria` varchar(60) DEFAULT NULL,
  `descripcion_categoria` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`id_cat`, `nombre_categoria`, `descripcion_categoria`) VALUES
(1, 'Drama', 'Aquí podrás encontrar el listado de las peliculas de Drama'),
(2, 'Comedia', 'Aquí van las peliculas de comeida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contacto`
--

CREATE TABLE `Contacto` (
  `id_contacto` int(11) UNSIGNED NOT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE `Productos` (
  `id` int(11) NOT NULL,
  `clave_producto` varchar(60) DEFAULT '',
  `nombre_producto` varchar(60) DEFAULT '',
  `descripcion_producto` tinytext,
  `imagen_producto` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha_lanzamiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`id`, `clave_producto`, `nombre_producto`, `descripcion_producto`, `imagen_producto`, `precio`, `fecha_lanzamiento`) VALUES
(1, 'sku-01', 'Psycho', 'Pelicula realizada por Alfred', 'psycho.jpg', 199.00, '2015-01-20'),
(2, 'SKU-02', 'Batman Forever', 'Una película de Batman', '060042BatmanForever.jpg', 199.00, NULL),
(3, 'SKU-03', 'Forrest Gump', 'asdf', NULL, 189.00, NULL),
(4, 'SKU-2001', 'Guardianes de la Galaxia', '<p>asdf fdsa</p>', '', 78.00, NULL),
(5, 'SKU-2001', 'Guardianes de la Galaxia', '<p>asdf fdsa</p>', '013312guardianes-de-la-galaxia.jpg', 78.00, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Relacion_Productos_Categorias`
--

CREATE TABLE `Relacion_Productos_Categorias` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Relacion_Productos_Categorias`
--

INSERT INTO `Relacion_Productos_Categorias` (`id_producto`, `id_categoria`) VALUES
(1, 1),
(1, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `password_usuario` varchar(255) DEFAULT NULL,
  `correo_usuario` varchar(255) DEFAULT NULL,
  `tipo_usuario` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `nombre_usuario`, `password_usuario`, `correo_usuario`, `tipo_usuario`) VALUES
(1, 'Moises Rojas', '123456', 'moises.rojas@leon.uia.mx', 1),
(2, '', 'e10adc3949ba59abbe56e057f20f883e', '', 1),
(3, 'Usuario', 'e10adc3949ba59abbe56e057f20f883e', 'moises.rojas@leon.uia.mx', 1),
(4, 'Usuario1', 'e10adc3949ba59abbe56e057f20f883e', 'moises.rojas@leon.uia.mx', 1),
(6, 'admin3', '827ccb0eea8a706c4c34a16891f84e7b', 'moises.rojas@leon.uia.mx', 2),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'moises.rojas@iberoleon.mx', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `Contacto`
--
ALTER TABLE `Contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Contacto`
--
ALTER TABLE `Contacto`
  MODIFY `id_contacto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
