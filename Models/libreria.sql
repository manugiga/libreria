-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 14:01:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre_admin` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre_admin`, `contrasena`) VALUES
(1, 'manuela', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `precio_pagado` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `paginas` int(11) NOT NULL,
  `editorial` varchar(255) NOT NULL,
  `publicacion` date NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` enum('gratuito','pago') DEFAULT NULL,
  `archivo` varchar(255) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `paginas`, `editorial`, `publicacion`, `descripcion`, `tipo`, `archivo`, `precio`, `imagen`) VALUES
(39, 'Be Creative', 'Audrien Lauren', 234, 'La mano roja', '2024-04-19', 'Todo sobre la creatividad', 'gratuito', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 0.00, 'img/becreative.jpg'),
(40, 'El mundo del Bitcoin', 'Castel Romano', 230, 'Gramo del saber', '2024-04-19', 'Aprende todo sobre el mundo del bitcoin', 'gratuito', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 0.00, 'img/bitcoin.png'),
(41, 'Bloggers', 'Camila Restrepo', 123, 'Apidama ediciones', '2024-04-07', 'Aprende a crear y publicar el mejor contenido', 'gratuito', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 0.00, 'img/bloggers.png'),
(42, 'BookAuthor', 'Renán F.H', 154, 'AS Ediciones', '2024-04-11', 'Aprende como escribir tus propios libros', 'gratuito', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 0.00, 'img/bookauthor.png'),
(43, 'e-comerce', 'Lian P', 325, 'Caín Press', '2024-03-31', 'Aprende todo sobre el mundo el e-comerce', 'gratuito', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 0.00, 'img/ecomerce.png'),
(44, 'Fashion Girls', 'Lina Estemar', 232, 'Cajón de Sastre', '2024-04-05', 'Aprende todo sobre el mundo de la moda', 'gratuito', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 0.00, 'img/fashiongirls.png'),
(45, 'Kids', 'Kamara Kleiu', 234, 'Continente editores', '2024-04-19', 'Aprende como es el proceso de desarrollo de un niño', 'gratuito', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 0.00, 'img/kids.png'),
(46, 'Marketing', 'Ronald Whealty', 324, 'Ediciones Chiquitico', '2024-03-31', 'Aprende todo sobre el mundo del marketing', 'gratuito', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 0.00, 'img/marketing.png'),
(47, 'Novena ', 'Maria de García', 423, 'Ediciones Gamma', '1990-06-05', 'Novena Sagrada ', 'pago', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 56000.00, 'img/novenaconcepcion.png'),
(48, 'Online Business Mom', 'Carmen Restepo', 156, 'El Salmón', '2024-04-18', 'Aprende a ser una madre de negocios', 'pago', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 45000.00, 'img/onlinebusinessmom.png'),
(49, 'Online Membership', 'Ronald G', 65, 'Esquina Tomada', '2024-04-11', 'Obtén tu membresía online', 'pago', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 20000.00, 'img/onlinemembership.png'),
(50, 'Sell Books', 'Daniel L', 546, 'Gato Malo', '2024-04-20', 'Aprende a vender libros', 'pago', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 80000.00, 'img/sellbooks.png'),
(51, 'Sherlock Holmes', 'Arthur Ignatius', 348, 'Himpar Ediciones', '2024-04-19', 'Conoce el mundo del misterio y la investigación', 'pago', 'pdfs/certificadoBachillerManuelaGiraldo.pdf', 67000.00, 'img/sherlockholmes.jpg'),
(52, 'Software', 'Camile Donner', 348, 'La Fogata', '2024-04-26', 'Da tus primeros pasos en el mundo del Software', 'pago', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 78000.00, 'img/software.png'),
(53, 'The Rules Of Life', 'Andrew Castrof', 236, 'La Jaula', '2024-04-13', 'Conoce las reglas de la vida', 'pago', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 53000.00, 'img/therulesoflife.png'),
(54, 'Work From Home', 'Rustin J', 124, 'Mirabila', '2024-04-19', 'Aprende como trabajar desde casa', 'pago', 'pdfs/documentoIdentidadManuelaGiraldo.pdf', 28000.00, 'img/workfromhome.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_admin` (`nombre_admin`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `nombre_usuario` (`nombre_usuario`) USING BTREE;

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
