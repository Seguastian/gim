-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2022 a las 19:53:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fortaleza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `nombre` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`nombre`, `contraseña`) VALUES
('administrador', 'g8ABz&86');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id_usuario` int(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contacto` int(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `edad` int(10) NOT NULL,
  `peso` int(10) NOT NULL,
  `altura` int(10) NOT NULL,
  `cedula` int(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `civil` varchar(10) NOT NULL,
  `membresia` varchar(10) NOT NULL,
  `sangre` varchar(10) NOT NULL,
  `imagen` longblob NOT NULL,
  `rodilla` varchar(2) NOT NULL,
  `osea` varchar(2) NOT NULL,
  `muscular` varchar(2) NOT NULL,
  `cardiovascular` varchar(2) NOT NULL,
  `asfixia` varchar(2) NOT NULL,
  `enfermedad` varchar(10) NOT NULL,
  `embarazo` varchar(2) NOT NULL,
  `anemia` varchar(2) NOT NULL,
  `sintomas` varchar(10) NOT NULL,
  `actividad` varchar(2) NOT NULL,
  `deporte` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id_usuario`,`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
