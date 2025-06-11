-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 09:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brawlers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brawlers`
--

CREATE TABLE `brawlers` (
  `brawler_id` int(11) NOT NULL,
  `nombre_brawler` varchar(50) NOT NULL,
  `rareza_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `habilidad_id` int(11) DEFAULT NULL,
  `gadget_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brawlers`
--

INSERT INTO `brawlers` (`brawler_id`, `nombre_brawler`, `rareza_id`, `rol_id`, `habilidad_id`, `gadget_id`) VALUES
(1, 'Shelly', 1, 1, 1, 1),
(2, 'Piper', 3, 2, 2, 2),
(3, 'Dynamike', 2, 1, 3, 3),
(4, 'Colt', 1, 2, 4, 4),
(5, 'Darryl', 2, 3, 5, 5),
(6, 'Nita', 1, 1, 6, 6),
(7, 'Jessie', 2, 2, 7, 7),
(8, 'Brock', 1, 2, 8, 8),
(9, 'Bo', 3, 4, 9, 9),
(10, 'El Primo', 1, 3, 10, 10),
(11, 'Barley', 2, 1, 11, 11),
(12, 'Poco', 1, 5, 12, 12),
(13, 'Rosa', 1, 3, 13, 13),
(14, 'Rico', 2, 2, 14, 14),
(15, 'Penny', 2, 1, 15, 15),
(16, 'Spike', 5, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE `gadget` (
  `gadget_id` int(11) NOT NULL,
  `nombre_gadget` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`gadget_id`, `nombre_gadget`) VALUES
(1, 'Superdisparo'),
(2, 'Disparo de Francotirador'),
(3, 'Granadas Saltarinas'),
(4, 'Revólver Rápido'),
(5, 'Barril Giratorio'),
(6, 'Mina Explosiva'),
(7, 'Teletransportador'),
(8, 'Escudo Temporal'),
(9, 'Bomba Pegajosa'),
(10, 'Impulso Rápido'),
(11, 'Trampa Venenosa'),
(12, 'Disparo Giratorio'),
(13, 'Campo de Fuerza'),
(14, 'Cohete Saltarín'),
(15, 'Rayo Paralizante');

-- --------------------------------------------------------

--
-- Table structure for table `habilidad_estelar`
--

CREATE TABLE `habilidad_estelar` (
  `habilidad_id` int(11) NOT NULL,
  `nombre_habilidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habilidad_estelar`
--

INSERT INTO `habilidad_estelar` (`habilidad_id`, `nombre_habilidad`) VALUES
(1, 'Escudo de Acero'),
(2, 'Curva Mortal'),
(3, 'Escudo Explosivo'),
(4, 'Recarga Rápida'),
(5, 'Protección Pirata'),
(6, 'Bola Curativa'),
(7, 'Disparo Rápido'),
(8, 'Escudo Reflectante'),
(9, 'Explosión Amplificada'),
(10, 'Velocidad Extrema'),
(11, 'Golpe Crítico'),
(12, 'Regeneración Rápida'),
(13, 'Disparo Doble'),
(14, 'Armadura Reforzada'),
(15, 'Carga Explosiva');

-- --------------------------------------------------------

--
-- Table structure for table `rareza`
--

CREATE TABLE `rareza` (
  `rareza_id` int(11) NOT NULL,
  `nombre_rareza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rareza`
--

INSERT INTO `rareza` (`rareza_id`, `nombre_rareza`) VALUES
(1, 'Raro'),
(2, 'Súper Raro'),
(3, 'Épico'),
(4, 'Mítico'),
(5, 'Legendario');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol_id`, `nombre_rol`) VALUES
(1, 'Luchador'),
(2, 'Tirador'),
(3, 'Tanque'),
(4, 'Asesino'),
(5, 'Soporte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brawlers`
--
ALTER TABLE `brawlers`
  ADD PRIMARY KEY (`brawler_id`),
  ADD KEY `rareza_id` (`rareza_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `habilidad_id` (`habilidad_id`),
  ADD KEY `gadget_id` (`gadget_id`);

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
  ADD PRIMARY KEY (`gadget_id`);

--
-- Indexes for table `habilidad_estelar`
--
ALTER TABLE `habilidad_estelar`
  ADD PRIMARY KEY (`habilidad_id`);

--
-- Indexes for table `rareza`
--
ALTER TABLE `rareza`
  ADD PRIMARY KEY (`rareza_id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brawlers`
--
ALTER TABLE `brawlers`
  MODIFY `brawler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `gadget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `habilidad_estelar`
--
ALTER TABLE `habilidad_estelar`
  MODIFY `habilidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rareza`
--
ALTER TABLE `rareza`
  MODIFY `rareza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brawlers`
--
ALTER TABLE `brawlers`
  ADD CONSTRAINT `brawlers_ibfk_1` FOREIGN KEY (`rareza_id`) REFERENCES `rareza` (`rareza_id`),
  ADD CONSTRAINT `brawlers_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `brawlers_ibfk_3` FOREIGN KEY (`habilidad_id`) REFERENCES `habilidad_estelar` (`habilidad_id`),
  ADD CONSTRAINT `brawlers_ibfk_4` FOREIGN KEY (`gadget_id`) REFERENCES `gadget` (`gadget_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
