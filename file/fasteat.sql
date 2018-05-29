-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2018 alle 19:08
-- Versione del server: 10.1.30-MariaDB
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasteat`
--
CREATE DATABASE IF NOT EXISTS `fasteat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fasteat`;

-- --------------------------------------------------------

--
-- Struttura della tabella `listaprodotto`
--

DROP TABLE IF EXISTS `listaprodotto`;
CREATE TABLE `listaprodotto` (
  `PiattoN` text NOT NULL,
  `piattoName` text NOT NULL,
  `categoria` varchar(64) DEFAULT NULL,
  `Prezzo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `listaprodotto`
--

INSERT INTO `listaprodotto` (`PiattoN`, `piattoName`, `categoria`, `Prezzo`) VALUES
('1', 'nigiri salmone', 'Nigiri', 3),
('11', 'Hosomaki Furai', 'Hosomaki', 5),
('12', 'Hosomaki Salmon', 'Hosomaki', 4),
('2', 'tonno nigiri', 'Nigiri', 4),
('3', 'ebi nigiri', 'Nigiri', 3),
('30', 'Acqua naturale 50cl', 'Bevande', 2.5),
('31', 'CocaCola 33cl', 'Bevande', 3.5),
('4', 'branzino nigiri', 'Nigiri', 3),
('5', 'avocado nigiri', 'Nigiri', 4),
('6', 'sakeAburi nigiri', 'Nigiri', 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`password`, `email`) VALUES
('ebc4bd3806a1b68f644d63708887659c', '123prova@gmail.com'),
('cf06171384948131028cd16420a7a772', 'zhu.yt1027@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `listaprodotto`
--
ALTER TABLE `listaprodotto`
  ADD PRIMARY KEY (`PiattoN`(8));

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
