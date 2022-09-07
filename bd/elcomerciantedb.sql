-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elcomerciantedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafereposteria`
--

CREATE TABLE `cafereposteria` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cafereposteria_comanda`
--

CREATE TABLE `cafereposteria_comanda` (
  `idCafeReposteria` int(255) DEFAULT NULL,
  `numComanda` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE `comanda` (
  `id` int(255) NOT NULL,
  `mesa` int(2) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `idUsuario` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comanda_envase_helado`
--

CREATE TABLE `comanda_envase_helado` (
  `idEnvase` int(255) DEFAULT NULL,
  `idHelado` int(255) DEFAULT NULL,
  `numComanda` int(255) DEFAULT NULL,
  `numEnvase` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combo_cafereposteria`
--

CREATE TABLE `combo_cafereposteria` (
  `idCombo` int(255) DEFAULT NULL,
  `idCafeReposteria` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combo_comanda`
--

CREATE TABLE `combo_comanda` (
  `idCombo` int(255) DEFAULT NULL,
  `numComanda` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combo_envase`
--

CREATE TABLE `combo_envase` (
  `idCombo` int(255) DEFAULT NULL,
  `idEnvase` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combo_paleta`
--

CREATE TABLE `combo_paleta` (
  `idCombo` int(255) DEFAULT NULL,
  `idPaleta` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `envase`
--

CREATE TABLE `envase` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `capacidad` int(255) DEFAULT NULL,
  `precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `envase_helado`
--

CREATE TABLE `envase_helado` (
  `idEnvase` int(255) DEFAULT NULL,
  `idHelado` int(255) DEFAULT NULL,
  `numEnvase` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `helado`
--

CREATE TABLE `helado` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paleta`
--

CREATE TABLE `paleta` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paleta_comanda`
--

CREATE TABLE `paleta_comanda` (
  `idPaleta` int(255) DEFAULT NULL,
  `numComanda` int(255) DEFAULT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(255) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `permisos` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `idRol` int(255) DEFAULT NULL,
  `idUsuario` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `contrasena` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafereposteria`
--
ALTER TABLE `cafereposteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafereposteria_comanda`
--
ALTER TABLE `cafereposteria_comanda`
  ADD KEY `FK_CafeComanda_Cafe` (`idCafeReposteria`),
  ADD KEY `FK_CafeComanda_Comanda` (`numComanda`);

--
-- Indexes for table `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Comanda_idUsuario` (`idUsuario`);

--
-- Indexes for table `comanda_envase_helado`
--
ALTER TABLE `comanda_envase_helado`
  ADD KEY `FK_ComandaEnvaseHelado_Comanda` (`numComanda`),
  ADD KEY `FK_ComandaEnvaseHelado_Envase` (`idEnvase`),
  ADD KEY `FK_ComandaEnvaseHelado_Helado` (`idHelado`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_cafereposteria`
--
ALTER TABLE `combo_cafereposteria`
  ADD KEY `FK_CafeCombo_Cafe` (`idCafeReposteria`),
  ADD KEY `FK_CafeCombo_Combo` (`idCombo`);

--
-- Indexes for table `combo_comanda`
--
ALTER TABLE `combo_comanda`
  ADD KEY `FK_ComandaCombo_Comanda` (`numComanda`),
  ADD KEY `FK_ComandaCombo_Combo` (`idCombo`);

--
-- Indexes for table `combo_envase`
--
ALTER TABLE `combo_envase`
  ADD KEY `FK_ComboEnvase_Combo` (`idCombo`),
  ADD KEY `FK_ComboEnvase_Envase` (`idEnvase`);

--
-- Indexes for table `combo_paleta`
--
ALTER TABLE `combo_paleta`
  ADD KEY `FK_ComboPaleta_Combo` (`idCombo`),
  ADD KEY `FK_ComboPaleta_Paleta` (`idPaleta`);

--
-- Indexes for table `envase`
--
ALTER TABLE `envase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `envase_helado`
--
ALTER TABLE `envase_helado`
  ADD KEY `FK_EnvaseHelado_Envase` (`idEnvase`);

--
-- Indexes for table `helado`
--
ALTER TABLE `helado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paleta`
--
ALTER TABLE `paleta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paleta_comanda`
--
ALTER TABLE `paleta_comanda`
  ADD KEY `FK_PaletaComanda_Paleta` (`idPaleta`),
  ADD KEY `FK_PaletaComanda_Comanda` (`numComanda`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD KEY `FK_RolUsuario_Rol` (`idRol`),
  ADD KEY `FK_RolUsuario_Usuario` (`idUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cafereposteria_comanda`
--
ALTER TABLE `cafereposteria_comanda`
  ADD CONSTRAINT `FK_CafeComanda_Cafe` FOREIGN KEY (`idCafeReposteria`) REFERENCES `cafereposteria` (`id`),
  ADD CONSTRAINT `FK_CafeComanda_Comanda` FOREIGN KEY (`numComanda`) REFERENCES `comanda` (`id`);

--
-- Constraints for table `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `FK_Comanda_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `comanda_envase_helado`
--
ALTER TABLE `comanda_envase_helado`
  ADD CONSTRAINT `FK_ComandaEnvaseHelado_Comanda` FOREIGN KEY (`numComanda`) REFERENCES `comanda` (`id`),
  ADD CONSTRAINT `FK_ComandaEnvaseHelado_Envase` FOREIGN KEY (`idEnvase`) REFERENCES `envase` (`id`),
  ADD CONSTRAINT `FK_ComandaEnvaseHelado_Helado` FOREIGN KEY (`idHelado`) REFERENCES `helado` (`id`);

--
-- Constraints for table `combo_cafereposteria`
--
ALTER TABLE `combo_cafereposteria`
  ADD CONSTRAINT `FK_CafeCombo_Cafe` FOREIGN KEY (`idCafeReposteria`) REFERENCES `cafereposteria` (`id`),
  ADD CONSTRAINT `FK_CafeCombo_Combo` FOREIGN KEY (`idCombo`) REFERENCES `combo` (`id`);

--
-- Constraints for table `combo_comanda`
--
ALTER TABLE `combo_comanda`
  ADD CONSTRAINT `FK_ComandaCombo_Comanda` FOREIGN KEY (`numComanda`) REFERENCES `comanda` (`id`),
  ADD CONSTRAINT `FK_ComandaCombo_Combo` FOREIGN KEY (`idCombo`) REFERENCES `combo` (`id`);

--
-- Constraints for table `combo_envase`
--
ALTER TABLE `combo_envase`
  ADD CONSTRAINT `FK_ComboEnvase_Combo` FOREIGN KEY (`idCombo`) REFERENCES `combo` (`id`),
  ADD CONSTRAINT `FK_ComboEnvase_Envase` FOREIGN KEY (`idEnvase`) REFERENCES `envase` (`id`);

--
-- Constraints for table `combo_paleta`
--
ALTER TABLE `combo_paleta`
  ADD CONSTRAINT `FK_ComboPaleta_Combo` FOREIGN KEY (`idCombo`) REFERENCES `combo` (`id`),
  ADD CONSTRAINT `FK_ComboPaleta_Paleta` FOREIGN KEY (`idPaleta`) REFERENCES `paleta` (`id`);

--
-- Constraints for table `envase_helado`
--
ALTER TABLE `envase_helado`
  ADD CONSTRAINT `FK_EnvaseHelado_Envase` FOREIGN KEY (`idEnvase`) REFERENCES `envase` (`id`);

--
-- Constraints for table `paleta_comanda`
--
ALTER TABLE `paleta_comanda`
  ADD CONSTRAINT `FK_PaletaComanda_Comanda` FOREIGN KEY (`numComanda`) REFERENCES `comanda` (`id`),
  ADD CONSTRAINT `FK_PaletaComanda_Paleta` FOREIGN KEY (`idPaleta`) REFERENCES `paleta` (`id`);

--
-- Constraints for table `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD CONSTRAINT `FK_RolUsuario_Rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `FK_RolUsuario_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
