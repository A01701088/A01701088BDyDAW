-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2020 at 11:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15254830_examen`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`id15254830_basedato`@`%` PROCEDURE `consultarEstado` (IN `uEstado` VARCHAR(50))  READS SQL DATA
SELECT IDZombie, Estado
FROM ZombisIDEstado
WHERE Estado=uEstado$$

CREATE DEFINER=`id15254830_basedato`@`%` PROCEDURE `creaZombie` (IN `NomZombie` VARCHAR(100) CHARSET utf8)  NO SQL
INSERT into ZombisID(NomZombie) VALUES (NomZombie)$$

CREATE DEFINER=`id15254830_basedato`@`%` PROCEDURE `creaZombieEstado` (IN `Estado` VARCHAR(50) CHARSET utf8, IN `IDZombie` INT)  NO SQL
INSERT INTO ZombisIDEstado(Estado, IDZombie) VALUES (Estado, IDZombie)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Estado`
--

CREATE TABLE `Estado` (
  `Estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Estado`
--

INSERT INTO `Estado` (`Estado`) VALUES
('desmayo'),
('desorientacion'),
('infeccion'),
('transformacion'),
('violencia');

-- --------------------------------------------------------

--
-- Table structure for table `ZombisID`
--

CREATE TABLE `ZombisID` (
  `ID_Zombie` int(11) NOT NULL,
  `NomZombie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ZombisID`
--

INSERT INTO `ZombisID` (`ID_Zombie`, `NomZombie`) VALUES
(1, NULL),
(2, 'hello'),
(3, 'hello'),
(4, 'hello'),
(5, 'Lalo'),
(6, 'Hola'),
(7, 'Hola'),
(8, 'Hola'),
(9, 'Hola'),
(10, 'Hola'),
(11, 'Hola'),
(12, 'reeee'),
(13, 'reeee'),
(14, '2'),
(15, '2'),
(16, '2'),
(17, 'Lalo'),
(18, '2'),
(19, '4'),
(20, '4'),
(21, '4'),
(22, '4'),
(23, '4'),
(24, '4'),
(25, '4'),
(26, '4'),
(27, '5'),
(28, 'Lalo'),
(29, '4'),
(30, '4'),
(31, '1'),
(32, NULL),
(33, 'Lalo'),
(34, 'Lalo'),
(35, 'Juan Ignacio');

-- --------------------------------------------------------

--
-- Table structure for table `ZombisIDEstado`
--

CREATE TABLE `ZombisIDEstado` (
  `Estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDZombie` int(11) DEFAULT NULL,
  `FechaHora` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ZombisIDEstado`
--

INSERT INTO `ZombisIDEstado` (`Estado`, `IDZombie`, `FechaHora`) VALUES
('desmayo', 2, '2020-10-28 20:16:48'),
('infeccion', 1, '2020-10-28 20:44:28'),
('desmayo', 5, '2020-10-28 20:44:32'),
('desorientacion', 4, '2020-10-28 22:11:40'),
('desorientacion', 4, '2020-10-28 22:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Estado`
--
ALTER TABLE `Estado`
  ADD PRIMARY KEY (`Estado`);

--
-- Indexes for table `ZombisID`
--
ALTER TABLE `ZombisID`
  ADD PRIMARY KEY (`ID_Zombie`);

--
-- Indexes for table `ZombisIDEstado`
--
ALTER TABLE `ZombisIDEstado`
  ADD KEY `FKNomZombie` (`Estado`),
  ADD KEY `FKIDZombie` (`IDZombie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ZombisID`
--
ALTER TABLE `ZombisID`
  MODIFY `ID_Zombie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ZombisIDEstado`
--
ALTER TABLE `ZombisIDEstado`
  ADD CONSTRAINT `FKIDZombie` FOREIGN KEY (`IDZombie`) REFERENCES `ZombisID` (`ID_Zombie`),
  ADD CONSTRAINT `FKNomZombie` FOREIGN KEY (`Estado`) REFERENCES `Estado` (`Estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
