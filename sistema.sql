-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2025 a las 00:47:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `ID` int(11) NOT NULL,
  `Pregunta` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Respuesta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`ID`, `Pregunta`, `Respuesta`) VALUES
(1, 'Que utiliza una unidad de CD para leer el contenido de un disco DVD?', 'Laser Semiconductor Inflarrojo'),
(2, 'De que material estan hechos los platos de un HDD?', 'Aluminio'),
(3, 'Cual es el elemento principal de la Pasta Termica?', 'Silicona '),
(4, 'Como se llama el cable que conecta la fuente de poder con la placa madre?', 'Cable SATA'),
(5, 'En MB/s, de cuanto es la tasa de transferencia de datos de un HDD convencional?', 'Entre 80 y 60'),
(6, 'De cuanto es la velocidad de lectura de una unidad de CD al leer discos DVD?', '1350 KB/s'),
(7, 'En voltaje, cuanto suele recibir una fuente de poder para su funcionamiento?', '120'),
(8, 'Cuanto voltaje debe de recibir un HDD para su funcionamiento?', '12v'),
(9, 'Esta es una pregunta de prueba', '47'),
(10, 'Cual es el nombre de la fuente de poder que se enciende y se apaga mediante se?ales electronicas?', 'ATX'),
(11, 'Quien invento el primer Disco Duro?', 'IBM'),
(12, 'Como se llama el codigo de Software que localiza y carga el sistema operativo?', 'BIOS'),
(13, 'De que esta hecha las vias conectoras de una motherboard?', 'Cobre'),
(14, 'En Gb, cuanto es la capacidad maxima de un disco dvd?', '17'),
(15, 'Cuantos pines tiene una fuente de poder ATX?', '24'),
(16, 'Como se llama la capa de almacenamiento de datos de alta velocidad que almacena un subconjunto de datos de modo que las solicitudes futuras de dichos datos se atienden con mayor rapidez?', 'Cache'),
(17, 'Nombre alternativo de los puertos de expansion que permite instalar otras tarjetas a la motherboard?', 'Puertos PCI'),
(18, 'Cuales son los tipos mas comunes de Disco Duro?', 'SSD & HDD'),
(19, 'Cual es el material usual con el que estan hecho los discos CD?', 'Policarbonato'),
(20, 'Cual es el nombre de la primera computadora?', 'ENIAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `CI` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `Puntaje` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `apellido`, `CI`, `correo`, `contrasena`, `pregunta`, `respuesta`, `rol`, `Puntaje`) VALUES
(1, 'Anaya', 'Raizman', 27402422, 'AnayaR98@gmail.com', '$2y$10$EITwRMAI2pWGYXoJeceeMubOQunfpqZJH0ZduGrRN4Coq7uRgDx.2', 'El tercer nombre', 'Raquel', 'admin', 6),
(5, 'Felix', 'Quintana', 26213519, 'felixqd@upta.com', '$2y$10$fuNwYnu6iD53K4v8oxTWN.Ms3U5AjFQYd1IMWbTkhvuf1pj0ntLHi', 'Signo del Zodiaco', 'Sagitario', 'admin', 19),
(6, 'Rosa', 'David', 11183811, 'RosaD73@gmail.com', '$2y$10$dGrxgscJQ5SdaBJFWx2Q3ea9WIzzAHSlA4UQ30Eaxg.vlFV7oq7Na', 'Nombre de mi flor madre', 'Petunia', 'estudiante', 0),
(7, 'Gabriel', 'David', 30222999, 'example@gmail.com', '$2y$10$BzLDo.r.kFf4YeDMSSRnB.XaZfKgT73UW/UDLKi3JTeAPUgXJiNUC', '2', '2', 'estudiante', 0),
(8, 'Angel', 'David', 28459261, 'AngelQD@gmaill.com', '$2y$10$rc2zbPu8o/ygr59TiWinDuU534.yy1.6ulZSB91IH1hNYzwZAH/va', 'Signo del Zodiaco', 'Aries', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
