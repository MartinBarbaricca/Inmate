-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 01:28:20
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
-- Base de datos: `inmate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasadmin` varchar(50) NOT NULL,
  `rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `user`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', 'admin@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `user`, `email`, `password`, `rol`) VALUES
(1, 'director', 'director@gmail.com', '123456', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `Apynombre` varchar(100) NOT NULL,
  `Dni` int(15) NOT NULL,
  `Legajo` int(15) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL,
  `Juzgado` varchar(50) NOT NULL,
  `Depto_judicial` varchar(11) NOT NULL,
  `Causa` int(30) NOT NULL,
  `Delito` varchar(100) NOT NULL,
  `Pena` varchar(100) NOT NULL,
  `Vencimiento` date NOT NULL,
  `NombreDedo` varchar(50) NOT NULL,
  `Fecha` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `huella` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `Apynombre`, `Dni`, `Legajo`, `Ubicacion`, `Juzgado`, `Depto_judicial`, `Causa`, `Delito`, `Pena`, `Vencimiento`, `NombreDedo`, `Fecha`, `huella`) VALUES
(0, 'dfsfj', 6454165, 665465, 'lkjplokjop', 'lklk', 'kvkvk', 45456, 'lvlvo09', '1 jjh', '2022-08-08', '', '2022-07-08 11:12:43.986861', 'k8E2mNZfyBALcdwqCGSWKQVD6jg9TbiOsrPIoXa5tRFunzJHpx01UvMe73Yhl4'),
(0, 'sadasda', 1213, 3213, 'pab 6', 'jep 5', 'mdp', 12332, 'robo', '', '0000-00-00', '', '2022-07-08 11:23:09.007127', 'Cl5iBeqfgPbsM27xIJH6rnmEOoKw8jV1ZdkFucUvXGpQS4LWDhzyYNt3Ra09AT'),
(3, 'sadasda', 1213, 3213, 'pab 6', 'jep 5', 'mdp', 12332, 'robo', '1 año', '0000-00-00', '', '2022-07-08 11:24:08.923473', 'Cl5iBeqfgPbsM27xIJH6rnmEOoKw8jV1ZdkFucUvXGpQS4LWDhzyYNt3Ra09AT'),
(0, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 122, 'robo', '', '0000-00-00', '', '2022-07-08 11:25:00.200468', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 122, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 02:06:43.153161', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 122, 'robo', '1 mes', '2020-08-08', '', '2022-07-09 02:07:17.192472', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(0, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '2023-08-07', '', '2022-07-09 02:22:42.988870', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 122, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 09:49:05.775880', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '2023-08-07', '', '2022-07-09 02:22:42.985205', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 122, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 09:49:05.775880', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 555, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 09:52:09.584522', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 555, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 09:52:09.584522', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'gtias 7', 'mdp', 555, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 09:52:09.584522', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'jep2', 'mdp', 8888, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 10:13:37.552541', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(0, 'prueba1', 25444654, 1154, 'higa', 'jep2', 'mdp', 3322, 'homicidio', '10 años', '2032-08-07', '', '2022-07-10 11:52:52.005062', 'BUQCoiZk4thaWz0yP67rGIwm9pLAsEKf1d8nxOMvHXNbFjqY2SlVgcTJu5eD3R'),
(4, 'interno 2', 12313, 3213, 'pagb 7', 'jep2', 'mdp', 8888, 'robo', '1 mes', '0000-00-00', '', '2022-07-09 10:13:37.552541', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(6, 'prueba1', 25444654, 1155, 'higa', 'jep2', 'mdp', 3322, 'homicidio', '10 años', '2032-08-07', '', '2022-07-10 11:53:14.873483', 'BUQCoiZk4thaWz0yP67rGIwm9pLAsEKf1d8nxOMvHXNbFjqY2SlVgcTJu5eD3R'),
(0, 'interno prueba', 11111111, 1254, 'pab 7', 'jep 2 ', 'mdp', 6654, 'robo', '1 mes', '2022-08-12', '', '2022-07-13 01:19:56.671316', '8zpNBnHqWwcIlmUd2k67trxFZ10YTvLjaPbMSAiC5K93oyJuXsgR4OQVDfeEhG'),
(0, 'prueba2', 2211122, 7777, 'higa', 'jep 1', 'dolores', 333, 'robo agrav', '', '0000-00-00', '', '2022-07-13 01:37:16.082069', '3O7KX1pyCULiwovDmjW5kYshNexFEAucV6M2nrlZHSJ8Pqbt0fQdIGR4T9agBz'),
(0, 'prueba2', 665555, 323232, 'sanidad', 'gtias 4', 'mdp', 222, 'daño', '', '0000-00-00', 'indice D', '2022-07-13 01:40:07.585124', 'yX0qQIpmUF4N3DZlso9tx5j1ErLRHAhdGnkwfTbSKcB862gzW7eiVJOYvPCaMu'),
(0, 'interno X', 1122445, 4456, 'pab 6', 'jep 2', 'mdp', 787, 'robo', '', '0000-00-00', 'Indice Derecho', '2022-07-23 07:49:44.826598', '7WOohIs1GzM5aRnU6pBgudblDiALq0EH4fSCv23PZer8wVkxNXjmYTQKtc9JFy'),
(4, 'interno 2', 12313, 3213, 'pagb 10', 'jep2', 'mdp', 8888, 'robo', '1 mes', '0000-00-00', '0', '2022-07-31 01:43:13.117585', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '0', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(6, 'prueba1', 25444654, 1155, 'higa', 'jep2', 'mdp', 3322, 'homicidio', '10 años', '2032-08-07', '0', '2022-07-10 11:53:14.873483', 'BUQCoiZk4thaWz0yP67rGIwm9pLAsEKf1d8nxOMvHXNbFjqY2SlVgcTJu5eD3R'),
(7, 'interno prueba', 11111111, 1254, 'pab 7', 'jep 2 ', 'mdp', 6654, 'robo', '1 mes', '2022-08-12', '0', '2022-07-13 01:19:05.333482', '8zpNBnHqWwcIlmUd2k67trxFZ10YTvLjaPbMSAiC5K93oyJuXsgR4OQVDfeEhG'),
(8, 'interno prueba', 11111111, 1254, 'pab 7', 'jep 2 ', 'mdp', 6654, 'robo', '1 mes', '2022-08-12', '0', '2022-07-13 01:19:56.667215', '8zpNBnHqWwcIlmUd2k67trxFZ10YTvLjaPbMSAiC5K93oyJuXsgR4OQVDfeEhG'),
(10, 'prueba2', 665555, 323232, 'sanidad', 'gtias 4', 'mdp', 222, 'daño', '', '0000-00-00', 'indice D', '2022-07-13 01:40:07.581468', 'yX0qQIpmUF4N3DZlso9tx5j1ErLRHAhdGnkwfTbSKcB862gzW7eiVJOYvPCaMu'),
(11, 'interno X', 1122445, 4456, 'pab 6', 'jep 2', 'mdp', 787, 'robo', '', '0000-00-00', 'Indice Derecho', '2022-07-23 07:49:44.811916', '7WOohIs1GzM5aRnU6pBgudblDiALq0EH4fSCv23PZer8wVkxNXjmYTQKtc9JFy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internos`
--

CREATE TABLE `internos` (
  `id` int(11) NOT NULL,
  `Apynombre` varchar(100) NOT NULL,
  `Dni` int(15) NOT NULL,
  `Legajo` int(15) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL,
  `Juzgado` varchar(50) NOT NULL,
  `Depto_judicial` varchar(11) NOT NULL,
  `Causa` int(30) NOT NULL,
  `Delito` varchar(100) NOT NULL,
  `Pena` varchar(100) NOT NULL,
  `Vencimiento` date NOT NULL,
  `NombreDedo` varchar(50) NOT NULL,
  `Fecha` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `huella` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `internos`
--

INSERT INTO `internos` (`id`, `Apynombre`, `Dni`, `Legajo`, `Ubicacion`, `Juzgado`, `Depto_judicial`, `Causa`, `Delito`, `Pena`, `Vencimiento`, `NombreDedo`, `Fecha`, `huella`) VALUES
(4, 'interno 2', 12313, 3213, 'pagb 10', 'jep2', 'mdp', 8888, 'robo', '1 mes', '0000-00-00', '0', '2022-07-31 01:43:13.117585', 'UfqorimxIyYvQ31Bw9aVCWHucNRgSlXLbnDJthsTFZkO4PpzMA25jK07EGed68'),
(5, 'interno3', 11444777, 8877, 'pab 6', 'jep 2', 'dolores', 777, 'robo', '1 año', '0000-00-00', '0', '2022-07-09 09:49:17.737072', 'SXWE7hqKjpbo5sMViw3n60gYAOLzDdrc1Z2lF4NI9vRJay8xPTHUfekGtBCmuQ'),
(6, 'prueba1', 25444654, 1155, 'higa', 'jep2', 'mdp', 3322, 'homicidio', '10 años', '2032-08-07', '0', '2022-07-10 11:53:14.873483', 'BUQCoiZk4thaWz0yP67rGIwm9pLAsEKf1d8nxOMvHXNbFjqY2SlVgcTJu5eD3R'),
(7, 'interno prueba', 11111111, 1254, 'pab 7', 'jep 2 ', 'mdp', 6654, 'robo', '1 mes', '2022-08-12', '0', '2022-07-13 01:19:05.333482', '8zpNBnHqWwcIlmUd2k67trxFZ10YTvLjaPbMSAiC5K93oyJuXsgR4OQVDfeEhG'),
(8, 'interno prueba', 11111111, 1254, 'pab 7', 'jep 2 ', 'mdp', 6654, 'robo', '1 mes', '2022-08-12', '0', '2022-07-13 01:19:56.667215', '8zpNBnHqWwcIlmUd2k67trxFZ10YTvLjaPbMSAiC5K93oyJuXsgR4OQVDfeEhG'),
(10, 'prueba2', 665555, 323232, 'sanidad', 'gtias 4', 'mdp', 222, 'daño', '', '0000-00-00', 'indice D', '2022-07-13 01:40:07.581468', 'yX0qQIpmUF4N3DZlso9tx5j1ErLRHAhdGnkwfTbSKcB862gzW7eiVJOYvPCaMu'),
(11, 'interno X', 1122445, 4456, 'pab 6', 'jep 2', 'mdp', 787, 'robo', '', '0000-00-00', 'Indice Derecho', '2022-07-23 07:49:44.811916', '7WOohIs1GzM5aRnU6pBgudblDiALq0EH4fSCv23PZer8wVkxNXjmYTQKtc9JFy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Legajo` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasadmin` varchar(50) NOT NULL,
  `rol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `Legajo`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'uuuu', 1111, '123456', 'uuuu@gmail.com', '', 2),
(2, 'pppp@gmail.com', 2222, '123456', 'pppp@gmail.com', '', 2),
(3, ' aaaa', 2222, '123456', 'aaaa@gmail.com', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `internos`
--
ALTER TABLE `internos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `internos`
--
ALTER TABLE `internos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
