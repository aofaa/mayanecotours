-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2016 a las 22:47:28
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mayanecotours`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frmcontacto`
--

CREATE TABLE `frmcontacto` (
  `idFrmContacto` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frmcontacto`
--

INSERT INTO `frmcontacto` (`idFrmContacto`, `nombre`, `tel`, `email`, `pais`, `estado`, `comentarios`) VALUES
(1, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'M&eacute;xico', 'Yucat&aacute;n', 'contacto'),
(2, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'M&eacute;xico', 'Yucat&aacute;n', 'contacto2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frmcontactointerior`
--

CREATE TABLE `frmcontactointerior` (
  `idFrmContactoInterior` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frmcontactointerior`
--

INSERT INTO `frmcontactointerior` (`idFrmContactoInterior`, `nombre`, `tel`, `email`, `comentarios`) VALUES
(1, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'prueba interior'),
(2, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'prueba interior2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frmcontactopie`
--

CREATE TABLE `frmcontactopie` (
  `idFrmContactoPie` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frmcontactopie`
--

INSERT INTO `frmcontactopie` (`idFrmContactoPie`, `nombre`, `tel`, `email`, `pais`, `estado`, `comentarios`) VALUES
(1, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'M&eacute;xico', 'Yucat&aacute;n', 'footer'),
(2, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'M&eacute;xico', 'Yucat&aacute;n', 'footer2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frmcontactotour`
--

CREATE TABLE `frmcontactotour` (
  `idFrmContactoTour` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comentarios` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frmcontactotour`
--

INSERT INTO `frmcontactotour` (`idFrmContactoTour`, `nombre`, `tel`, `email`, `comentarios`) VALUES
(1, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'comentario tours'),
(2, 'Jes&uacute;s Caamal', '9999999999', 'pru_098@hotmail.com', 'comentario tours2'),
(3, 'jesus', '9999999999', 'pru_098@hotmail.com', 'prueba 360px'),
(4, 'jesus caamal', '9999999999', 'pru_098@hotmail.com', '768px'),
(5, 'jesus caamal', '9999999999', 'pru_098@hotmail.com', '1024px'),
(6, 'jesus caamal', '9999999999', 'pru_098@hotmail.com', 'scritorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frmcontacto`
--
ALTER TABLE `frmcontacto`
  ADD PRIMARY KEY (`idFrmContacto`);

--
-- Indices de la tabla `frmcontactointerior`
--
ALTER TABLE `frmcontactointerior`
  ADD PRIMARY KEY (`idFrmContactoInterior`);

--
-- Indices de la tabla `frmcontactopie`
--
ALTER TABLE `frmcontactopie`
  ADD PRIMARY KEY (`idFrmContactoPie`);

--
-- Indices de la tabla `frmcontactotour`
--
ALTER TABLE `frmcontactotour`
  ADD PRIMARY KEY (`idFrmContactoTour`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frmcontacto`
--
ALTER TABLE `frmcontacto`
  MODIFY `idFrmContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `frmcontactointerior`
--
ALTER TABLE `frmcontactointerior`
  MODIFY `idFrmContactoInterior` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `frmcontactopie`
--
ALTER TABLE `frmcontactopie`
  MODIFY `idFrmContactoPie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `frmcontactotour`
--
ALTER TABLE `frmcontactotour`
  MODIFY `idFrmContactoTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
