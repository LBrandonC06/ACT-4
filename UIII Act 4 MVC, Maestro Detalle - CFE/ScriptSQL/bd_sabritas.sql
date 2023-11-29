-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
-- 
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 21:27:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sabritas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_Medidor` int(11) NOT NULL,
  `CodigoPostal` varchar(50) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `N_Ext` int(11) NOT NULL,
  `N_Int` varchar(500) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` varchar(200) NOT NULL,
  `id_Vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_Medidor`, `CodigoPostal`, `Colonia`, `Calle`, `N_Ext`, `N_Int`, `Nombre`, `Telefono`, `id_Vendedor`) VALUES
(123, 'a1', 'a1', '100', 20, 'a1', 'Josue', '6594156', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `Id_Tarifa` int(11) NOT NULL,
  `Dueno` varchar(50) NOT NULL,
  `Energia` varchar(100) NOT NULL,
  `Iva` varchar(50) NOT NULL,
  `Fac_Periodo` varchar(50) NOT NULL,
  `DAP` varchar(13) NOT NULL,
  `Adeudo` varchar(50) NOT NULL,
  `Total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`Id_Tarifa`, `Dueno`, `Energia`, `Iva`, `Fac_Periodo`, `DAP`, `Adeudo`, `Total`) VALUES
(1234, 'Brandon', '200', '60', '0.00', '40.00', '0.00', '300.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
