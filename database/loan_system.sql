DROP DATABASE IF EXISTS loan_system;

CREATE DATABASE loan_system;

use loan_system;


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 06:14:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loan_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `binnacle_activity`
--

CREATE TABLE `binnacle_activity` (
  `id_binnacle` int(11) NOT NULL,
  `date_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `binnacle_activity`
--

INSERT INTO `binnacle_activity` (`id_binnacle`, `date_activity`, `user`) VALUES
(7, '2022-06-29 19:54:42', 'manuel'),
(8, '2022-06-29 19:55:22', 'manuel'),
(9, '2022-06-29 19:58:15', 'manuel'),
(10, '2022-06-29 20:03:11', 'manuel'),
(11, '2022-06-29 20:40:07', 'manuel'),
(12, '2022-06-29 20:44:32', 'manuel'),
(13, '2022-06-30 01:25:18', 'manuel'),
(14, '2022-06-30 01:29:17', 'manuel'),
(15, '2022-06-30 03:10:39', 'manuel'),
(16, '2022-06-30 04:02:19', 'manuel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_books`
--

CREATE TABLE `register_books` (
  `id_book` int(11) NOT NULL,
  `title_book` varchar(255) NOT NULL,
  `discipline_book` varchar(255) NOT NULL,
  `level_book` varchar(255) NOT NULL,
  `author_book` varchar(255) NOT NULL,
  `editorial_book` varchar(255) NOT NULL,
  `amount_book` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register_books`
--

INSERT INTO `register_books` (`id_book`, `title_book`, `discipline_book`, `level_book`, `author_book`, `editorial_book`, `amount_book`) VALUES
(15, 'Calculo Integral 2', 'Humanidades', 'Cuarto ', 'Einstein', 'Alemania Corp', 3),
(16, 'Don Quijote de la Mancha', 'Entretenimiento', '1er grado', 'Miguel Cerbantes', 'España DB', 5),
(17, 'Ingles C2', 'Idiomas', 'Universitario', 'Luis Tamar', 'Inglanton', 3),
(18, 'Pensamiento Bolivariano', 'Ciencias Sociales', '3er grado', 'Hugo Chavez', 'CANTV', 8),
(19, 'Mapa Mundi', 'Geografia', '6to grado', 'Manares Lopez', 'Periodico Chaco', 7),
(20, 'Mapa Mundi', 'Geografia', '6to grado', 'Manares Lopez', 'Periodico Chaco', 7),
(21, 'Hola mundo', 'Informatica', 'Profesional', 'Alan Turin', 'Tesla Corp', 12),
(22, 'Hola mundo', 'Informatica', 'Profesional', 'Alan Turin', 'Tesla Corp', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_lends`
--

CREATE TABLE `register_lends` (
  `id_lend` int(11) NOT NULL,
  `date_lend` date NOT NULL,
  `limit_date` date NOT NULL,
  `title_book` varchar(255) NOT NULL,
  `name_student` varchar(255) NOT NULL,
  `ci_student` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register_lends`
--

INSERT INTO `register_lends` (`id_lend`, `date_lend`, `limit_date`, `title_book`, `name_student`, `ci_student`) VALUES
(11, '2022-06-11', '2022-06-16', 'Calculo Integral 2', 'Carlos Sánchez', 124556),
(29, '2022-06-02', '2022-06-17', 'Don Quijote de la Mancha', 'Paola Sanchez', 1234567),
(30, '2022-06-10', '2022-06-19', 'Pensamiento Bolivariano', 'Ismael Torres', 987456124),
(31, '2022-07-02', '2022-07-03', 'Ingles C2', 'Benito Camelo', 56843289);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user`, `email`, `pass`) VALUES
(1, 'manuel', 'manuel@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `binnacle_activity`
--
ALTER TABLE `binnacle_activity`
  ADD PRIMARY KEY (`id_binnacle`);

--
-- Indices de la tabla `register_books`
--
ALTER TABLE `register_books`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_book` (`id_book`);

--
-- Indices de la tabla `register_lends`
--
ALTER TABLE `register_lends`
  ADD PRIMARY KEY (`id_lend`),
  ADD KEY `id_lend` (`id_lend`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `binnacle_activity`
--
ALTER TABLE `binnacle_activity`
  MODIFY `id_binnacle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `register_books`
--
ALTER TABLE `register_books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `register_lends`
--
ALTER TABLE `register_lends`
  MODIFY `id_lend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
