-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 08:52 AM
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
-- Table structure for table `comanda`
--

CREATE TABLE `comanda` (
  `id` int(255) NOT NULL,
  `mesa` int(2) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `idUsuario` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`id`, `mesa`, `total`, `estado`, `idUsuario`) VALUES
(1, 0, 280, 1, 2),
(2, 0, 125, 1, 1),
(3, 1, 185, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comanda_envase_helado`
--

CREATE TABLE `comanda_envase_helado` (
  `idEnvase` int(255) NOT NULL,
  `idHelado` int(255) NOT NULL,
  `numComanda` int(255) NOT NULL,
  `numEnvase` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comanda_envase_helado`
--

INSERT INTO `comanda_envase_helado` (`idEnvase`, `idHelado`, `numComanda`, `numEnvase`, `cantidad`) VALUES
(1, 1, 1, 1, 3),
(1, 2, 1, 2, 3);

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

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Combo capuccino y envase grande', 'un café capuccino y un envase grande de helado :D', 185),
(2, 'Combo de verano', 'Unas paletas de helado y un buen postre fresco para este verano:D', 125);

-- --------------------------------------------------------

--
-- Table structure for table `combo_comanda`
--

CREATE TABLE `combo_comanda` (
  `idCombo` int(255) NOT NULL,
  `numComanda` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combo_comanda`
--

INSERT INTO `combo_comanda` (`idCombo`, `numComanda`, `cantidad`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `combo_envase`
--

CREATE TABLE `combo_envase` (
  `idCombo` int(255) NOT NULL,
  `idEnvase` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combo_envase`
--

INSERT INTO `combo_envase` (`idCombo`, `idEnvase`, `cantidad`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `combo_producto`
--

CREATE TABLE `combo_producto` (
  `idCombo` int(255) NOT NULL,
  `idProducto` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combo_producto`
--

INSERT INTO `combo_producto` (`idCombo`, `idProducto`, `cantidad`) VALUES
(1, 1, 1),
(2, 2, 1),
(2, 4, 1);

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

--
-- Dumping data for table `envase`
--

INSERT INTO `envase` (`id`, `nombre`, `descripcion`, `capacidad`, `precio`) VALUES
(1, 'Envase grande', 'El más grande envase para el más grande disfrute', 6, 200),
(2, 'Envase mediano', 'Envase con una cantidad moderada de helado para disfrutar con un amigo', 4, 160);

-- --------------------------------------------------------

--
-- Table structure for table `helado`
--

CREATE TABLE `helado` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helado`
--

INSERT INTO `helado` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Dulce de leche granizado', 'Crema de dulce de leche con chispas de chocolate'),
(2, 'Menta granizada', 'El segundo mejor sabor de helado después de el de café');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Capuccino', 'El mejor espumoso capuccino del país', 80),
(2, 'Cheesecake', 'Un postre fresco y delicioso, perfecto para una tarde de verano', 100),
(3, 'Escón de queso', 'Escones de queso caseros', 25),
(4, 'Paleta helada', 'Una refrescante paleta para matar el calor', 80);

-- --------------------------------------------------------

--
-- Table structure for table `producto_comanda`
--

CREATE TABLE `producto_comanda` (
  `idProducto` int(255) NOT NULL,
  `numComanda` int(255) NOT NULL,
  `cantidad` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto_comanda`
--

INSERT INTO `producto_comanda` (`idProducto`, `numComanda`, `cantidad`) VALUES
(1, 2, 1),
(2, 2, 1),
(3, 2, 1);

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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contrasena`) VALUES
(1, 'Lucas', 'passw'),
(2, 'Fausto', 'passw'),
(3, 'Mesa-1', 'XWJK'),
(4, 'Mesa-2', 'JXOT');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`idEnvase`,`idHelado`,`numComanda`,`numEnvase`),
  ADD KEY `FK_ComandaEnvaseHelado_Comanda` (`numComanda`),
  ADD KEY `FK_ComandaEnvaseHelado_Helado` (`idHelado`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_comanda`
--
ALTER TABLE `combo_comanda`
  ADD PRIMARY KEY (`idCombo`,`numComanda`),
  ADD KEY `FK_ComandaCombo_Comanda` (`numComanda`);

--
-- Indexes for table `combo_envase`
--
ALTER TABLE `combo_envase`
  ADD PRIMARY KEY (`idCombo`,`idEnvase`),
  ADD KEY `FK_ComboEnvase_Envase` (`idEnvase`);

--
-- Indexes for table `combo_producto`
--
ALTER TABLE `combo_producto`
  ADD PRIMARY KEY (`idCombo`,`idProducto`),
  ADD KEY `FK_ComboProducto_Producto` (`idProducto`);

--
-- Indexes for table `envase`
--
ALTER TABLE `envase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helado`
--
ALTER TABLE `helado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto_comanda`
--
ALTER TABLE `producto_comanda`
  ADD PRIMARY KEY (`idProducto`,`numComanda`),
  ADD KEY `FK_ComandaProducto_Comanda` (`numComanda`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comanda`
--
ALTER TABLE `comanda`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `envase`
--
ALTER TABLE `envase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `helado`
--
ALTER TABLE `helado`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `combo_producto`
--
ALTER TABLE `combo_producto`
  ADD CONSTRAINT `FK_ComboProducto_Producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `FK_comboProducto_Combo` FOREIGN KEY (`idCombo`) REFERENCES `combo` (`id`);

--
-- Constraints for table `producto_comanda`
--
ALTER TABLE `producto_comanda`
  ADD CONSTRAINT `FK_ComandaProducto_Comanda` FOREIGN KEY (`numComanda`) REFERENCES `comanda` (`id`),
  ADD CONSTRAINT `FK_ComandaProducto_Producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
