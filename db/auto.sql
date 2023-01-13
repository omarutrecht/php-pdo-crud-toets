-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 jan 2023 om 12:13
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dureauto`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

DROP TABLE IF EXISTS `auto`;
CREATE TABLE IF NOT EXISTS `auto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Topsnelheid` smallint(4) NOT NULL,
  `prijs` int(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `prijs`) VALUES
(1, 'Bugatti', 'La vioture noire', 420, 16500000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
