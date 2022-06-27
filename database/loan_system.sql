-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2022 a las 06:10:25
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
(3, 'fdassfd', 'fsdafdsa', 'fdsa', 'fdsa', 'fdsa', 12431),
(6, 'Paulo', '3165dsfafghsh', 'af22421521fdsa', 'fdsaf24552fdsaffsfda', 'dsag778fdsasfsa', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_lends`
--

CREATE TABLE `register_lends` (
  `id_lend` int(11) NOT NULL,
  `date_lend` date NOT NULL,
  `title_book` varchar(255) NOT NULL,
  `name_student` varchar(255) NOT NULL,
  `ci_student` int(100) NOT NULL,
  `telf_student` int(100) NOT NULL,
  `mail_student` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users`(
  `id_user` integer PRIMARY KEY AUTO_INCREMENT,
  `user`    varchar(80) NOT NULL,
  `email`   varchar(80) UNIQUE NOT NULL,
  `pass`    char(32) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users`( `user`,`email`, `pass`) VALUES
("manuel", "manuel@gmail.com", MD5("password"));
--
-- Volcado de datos para la tabla `register_lends`
--

-- INSERT INTO `register_lends` (`id_lend`, `date_lend`, `title_book`, `name_student`, `ci_student`, `telf_student`, `mail_student`) VALUES
-- (3, '2022-06-01', 'Calculo Integral 2', 'Carlos Sánchez m', 29805180, 2147483647, 'sanchezcarloscasm@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `register_books`
--
ALTER TABLE `register_books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indices de la tabla `register_lends`
--
ALTER TABLE `register_lends`
  ADD PRIMARY KEY (`id_lend`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `register_books`
--
ALTER TABLE `register_books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `register_lends`
--
ALTER TABLE `register_lends`
  MODIFY `id_lend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
