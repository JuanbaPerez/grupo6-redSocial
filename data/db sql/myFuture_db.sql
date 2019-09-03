-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-09-2019 a las 00:59:50
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myFuture_db`
--
CREATE DATABASE IF NOT EXISTS `myFuture_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myFuture_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_post` varchar(45) NOT NULL,
  `id_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postOptions`
--

CREATE TABLE `postOptions` (
  `id` int(11) NOT NULL,
  `delete` varchar(45) DEFAULT NULL,
  `edit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `footerText` varchar(255) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `postOptions_id` varchar(45) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `image`, `footerText`, `comment_id`, `postOptions_id`, `user_id`) VALUES
(39, 'pwn-logo.png', 'VAMAA', NULL, NULL, 0),
(40, 'pwn-logo.png', 'VAMAA', NULL, NULL, 0),
(41, 'pwn-logo.png', 'VAMAA', NULL, NULL, 0),
(42, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(43, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(44, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(45, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(46, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(47, 'nube-espacial-3192.jpg', 'asdas', NULL, NULL, 0),
(48, 'nube-espacial-3192.jpg', 'asd', NULL, NULL, 0),
(49, 'pwn-logo.png', 'asd', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_user`
--

CREATE TABLE `post_user` (
  `id` int(11) NOT NULL,
  `id_post` varchar(255) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `genreSex` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `birthday`, `username`, `email`, `password`, `avatar`, `genreSex`) VALUES
(20, 'Juanbaaaa', 'Asdasdad', '1997-11-28', 'JuanbaPerez', 'Juanba12@hotmail.com', '$2y$10$zO6/lCWoBUW2AY6S0zdhW.gQSQM/2cOx/JN68k1SVPiVTWadRvzz6', '/opt/lampp/temp/php5KqRox', 'male'),
(21, 'Juanbaaaa', 'Asdasdad', '1997-11-28', 'JuanbaPerez', 'Juanba58@hotmail.com', '$2y$10$nb.BGcUzZ8BA3RWEPuvq8.9F/iS7T4DFZ8dj3UFAsFzN5LQZbbCf2', '/opt/lampp/temp/phpnb9eYB', 'male');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_users`
--

CREATE TABLE `users_users` (
  `id` int(11) NOT NULL,
  `id_user_from` varchar(45) NOT NULL,
  `id_user_to` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postOptions`
--
ALTER TABLE `postOptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `users_users`
--
ALTER TABLE `users_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
