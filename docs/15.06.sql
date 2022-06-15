-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 16:18:30
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_itec`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_d_usuario_01` (IN `xusu_id` INT)   BEGIN
	UPDATE tm_usuario 
	SET 
		est='0',
		fech_elim = now() 
	where usu_id=xusu_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_i_ticketdetalle_01` (IN `x_tickid` INT, IN `xusu_id` INT)   BEGIN
	INSERT INTO td_ticketdetalle 
    (tickd_id,tick_id,usu_id,tickd_descrip,fech_crea,est) 
    VALUES 
    (NULL,xtick_id,xusu_id,'Ticket Cerrado', now(),'1');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_l_usuario_01` ()   BEGIN
	SELECT * FROM tm_usuario where est='1';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_l_usuario_02` (IN `xusu_id` INT)   BEGIN
	SELECT * FROM tm_usuario where usu_id=xusu_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `td_documento`
--

CREATE TABLE `td_documento` (
  `doc_id` int NOT NULL,
  `tick_id` int NOT NULL,
  `doc_nom` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `td_documento`
--

INSERT INTO `td_documento` (`doc_id`, `tick_id`, `doc_nom`, `fech_crea`, `est`) VALUES
(1, 6, 'Itec - Consultar Ticket.pdf', '2022-06-15 00:34:09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `td_ticketdetalle`
--

CREATE TABLE `td_ticketdetalle` (
  `tickd_id` int NOT NULL,
  `tick_id` int NOT NULL,
  `usu_id` int NOT NULL,
  `tickd_descrip` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `td_ticketdetalle`
--

INSERT INTO `td_ticketdetalle` (`tickd_id`, `tick_id`, `usu_id`, `tickd_descrip`, `fech_crea`, `est`) VALUES
(1, 1, 2, 'respuesta a problema', '2022-06-03 23:15:00', 1),
(2, 1, 1, 'respuesta usuario test', '2022-06-03 17:15:42', 1),
(3, 5, 2, '<p>sin verguenza&nbsp;</p>', '2022-06-07 10:37:23', 1),
(4, 3, 1, '<p>test</p><p><br></p>', '2022-06-15 01:53:44', 1),
(5, 7, 1, '<p>test</p>', '2022-06-15 02:56:33', 1),
(6, 1, 2, 'Ticket Re-Abierto...', '2022-06-15 04:50:22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int NOT NULL,
  `cat_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `est`) VALUES
(1, 'Hardware', 1),
(2, 'Software', 1),
(3, 'Incidencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_ticket`
--

CREATE TABLE `tm_ticket` (
  `tick_id` int NOT NULL,
  `usu_id` int NOT NULL,
  `cat_id` int NOT NULL,
  `tick_titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tick_descrip` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tick_estado` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `usu_asig` int DEFAULT NULL,
  `fech_asig` datetime DEFAULT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_ticket`
--

INSERT INTO `tm_ticket` (`tick_id`, `usu_id`, `cat_id`, `tick_titulo`, `tick_descrip`, `tick_estado`, `fech_crea`, `usu_asig`, `fech_asig`, `est`) VALUES
(1, 1, 2, 'test', 'xfdgfhjkl', 'Cerrado', '2022-05-18 09:58:06', 2, '2022-06-15 00:02:44', 1),
(2, 1, 3, 'test', 'fhgjklñ{ñ', 'En proceso', '2022-05-23 09:58:06', 2, '2022-06-15 04:59:34', 1),
(3, 1, 3, 'fghjk-l', '<p>dgfhjgkuhlijñok{</p>', 'En proceso', '2022-06-01 10:07:49', NULL, NULL, 1),
(4, 2, 2, 'gjhklñ', '<p>dfghjklño{p}</p>', 'En proceso', '2022-06-01 10:09:27', NULL, NULL, 1),
(5, 2, 1, 'jknjbjh', '<p>el claudio no paga estacionamiento</p>', 'En proceso', '2022-06-07 10:36:44', NULL, NULL, 1),
(6, 2, 1, 'test', '<p>test</p>', 'En proceso', '2022-06-15 00:34:09', NULL, NULL, 1),
(7, 1, 1, 'test', '<p>test</p>', 'Abierto', '2022-06-15 02:55:48', 2, '2022-06-15 04:59:44', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int NOT NULL,
  `usu_nom` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_ape` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_correo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usu_pass` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_correo`, `usu_pass`, `rol_id`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Claudio', 'Lopez', 'cl.lopezp@duocuc.cl', 'e10adc3949ba59abbe56e057f20f883e', 1, '2022-06-01 09:59:46', NULL, NULL, 1),
(2, 'Nixi', 'Muñoz', 'nix.munoz@duocuc.cl', 'e10adc3949ba59abbe56e057f20f883e', 2, '2022-06-01 09:59:46', NULL, NULL, 1),
(3, 'TEST', 'TEST', 'test@test.cl', 'e10adc3949ba59abbe56e057f20f883e', 3, '2022-06-14 21:46:22', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `td_documento`
--
ALTER TABLE `td_documento`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indices de la tabla `td_ticketdetalle`
--
ALTER TABLE `td_ticketdetalle`
  ADD PRIMARY KEY (`tickd_id`);

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_ticket`
--
ALTER TABLE `tm_ticket`
  ADD PRIMARY KEY (`tick_id`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `td_documento`
--
ALTER TABLE `td_documento`
  MODIFY `doc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `td_ticketdetalle`
--
ALTER TABLE `td_ticketdetalle`
  MODIFY `tickd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tm_ticket`
--
ALTER TABLE `tm_ticket`
  MODIFY `tick_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
