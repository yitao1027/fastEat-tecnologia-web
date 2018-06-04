-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 04, 2018 alle 15:18
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

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
  `PiattoN` int(11) NOT NULL,
  `PiattoName` text NOT NULL,
  `Categoria` varchar(64) DEFAULT NULL,
  `Prezzo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `listaprodotto`
--

INSERT INTO `listaprodotto` (`PiattoN`, `PiattoName`, `Categoria`, `Prezzo`) VALUES
(1, 'nigiri salmone', 'Nigiri', 3),
(2, 'tonno nigiri', 'Nigiri', 4),
(3, 'ebi nigiri', 'Nigiri', 3),
(4, 'branzino nigiri', 'Nigiri', 3),
(5, 'avocado nigiri', 'Nigiri', 4),
(6, 'sakeAburi nigiri', 'Nigiri', 5),
(7, 'nigiri fantasia', 'Nigiri', 5),
(11, 'Hosomaki Furai', 'Hosomaki', 5),
(12, 'Hosomaki Salmon', 'Hosomaki', 4),
(23, 'hosomaki hosomaki', 'Hosomaki', 6),
(30, 'Acqua naturale 50cl', 'Bevande', 2.5),
(31, 'CocaCola 33cl', 'Bevande', 3.5),
(45, 'Vino Bianco Donna fugata', 'Vino ', 12);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

DROP TABLE IF EXISTS `ordine`;
CREATE TABLE `ordine` (
  `email` varchar(64) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `info` text NOT NULL,
  `ordine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`email`, `data`, `ora`, `info`, `ordine`) VALUES
('123prova@gmail.com', '2018-06-04', '14:22:00', 'Consegna<br>user:123prova@gmail.com<br>cell:12<br>Address:12<br>', '<p>nigiri salmone&emsp; porzione: 3&emsp; totale piatto: â‚¬ 9</p><p>totale:  â‚¬9</p>');

-- --------------------------------------------------------

--
-- Struttura della tabella `tentativilogin`
--

DROP TABLE IF EXISTS `tentativilogin`;
CREATE TABLE `tentativilogin` (
  `user` varchar(64) NOT NULL,
  `timer` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `password` text,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`password`, `email`) VALUES
('51f9e0e7544f0908a8499fd09354530031f5612b2c36bd1638394082000bd575', '123prova@gmail.com'),
('1e05a02d9cce7926a5aa1c34183c96f5d333a93f461504055f8d22007d50e864', 'fasteat@gmail.com'),
('1e05a02d9cce7926a5aa1c34183c96f5d333a93f461504055f8d22007d50e864', 'zhu.yt1027@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `listaprodotto`
--
ALTER TABLE `listaprodotto`
  ADD PRIMARY KEY (`PiattoN`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`email`,`data`,`ora`),
  ADD KEY `id` (`email`,`data`,`ora`) USING BTREE;

--
-- Indici per le tabelle `tentativilogin`
--
ALTER TABLE `tentativilogin`
  ADD PRIMARY KEY (`timer`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;