-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 10, 2018 alle 15:12
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
  `PiattoN` int(11) NOT NULL,
  `PiattoName` text NOT NULL,
  `Categoria` varchar(64) DEFAULT NULL,
  `Prezzo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `listaprodotto`
--

INSERT INTO `listaprodotto` (`PiattoN`, `PiattoName`, `Categoria`, `Prezzo`) VALUES
(1, 'niiiiiigiri', 'Nigiri', 2),
(3, 'ebi nigiri', 'Nigiri', 3),
(4, 'branzino nigiri', 'Nigiri', 3),
(5, 'avocado nigiri', 'Nigiri', 4),
(6, ' sakeAburi nigiri', 'Uramaki', 5),
(12, 'Hosomaki Salmon', 'Hosomaki', 4),
(14, 'fantasia', 'Uramaki', 14),
(21, '  dragonroll', 'Nigiri', 19),
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
  `ordine` text NOT NULL,
  `totale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`email`, `data`, `ora`, `info`, `ordine`, `totale`) VALUES
('123prova@gmail.com', '2018-06-04', '14:22:00', 'Consegna<br>user:123prova@gmail.com<br>cell:12<br>Address:12<br>', '<p>nigiri salmone&emsp; porzione: 3&emsp; totale piatto: â‚¬ 9</p>', 9),
('zhu.yt1027@gmail.com', '2018-06-04', '22:21:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:321321<br>Address:ewqadsx2<br>', '<p>Acqua naturale 50cl&emsp; porzione: 3&emsp; totale piatto: â‚¬ 7.5</p><p>Vino Bianco Donna fugata&emsp; porzione: 1&emsp; totale piatto: â‚¬ 12</p>', 20),
('zhu.yt1027@gmail.com', '2018-06-05', '12:21:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:123ew<br>Address:123213213<br>', '<p>  dragonroll&emsp; porzione: 1&emsp; totale piatto: â‚¬ 19</p><p>ebi nigiri&emsp; porzione: 1&emsp; totale piatto: â‚¬ 3</p><p> sakeAburi nigiri&emsp; porzione: 3&emsp; totale piatto: â‚¬ 15</p><p>    nigiri salmone tonno&emsp; porzione: 2&emsp; totale piatto: â‚¬ 26</p>', 63),
('zhu.yt1027@gmail.com', '2018-06-05', '21:03:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:321321<br>Address:Via Ancona I, Cesena, FC<br>', '<p>    nigiri salmone tonno&emsp; porzione: 7&emsp; totale piatto: â‚¬ 91</p>', 91),
('zhu.yt1027@gmail.com', '2018-06-06', '12:02:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:<br>Address:<br>', '<p> sakeAburi nigiri&emsp; porzione: 3&emsp; totale piatto: â‚¬ 15</p><p>    nigiri salmone tonno&emsp; porzione: 2&emsp; totale piatto: â‚¬ 26</p>', 41),
('zhu.yt1027@gmail.com', '2018-06-08', '12:12:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:213213<br>Address:Via Ravennate, 3212, Cesena, FC<br>', '<p>fantasia&emsp; porzione: 6&emsp; totale piatto: â‚¬ 84</p><p> sakeAburi nigiri&emsp; porzione: 3&emsp; totale piatto: â‚¬ 15</p><p>    nigiri salmone tonno&emsp; porzione: 4&emsp; totale piatto: â‚¬ 52</p>', 151),
('zhu.yt1027@gmail.com', '2018-06-08', '12:23:00', 'Consegna<br>user:zhu.yt1027@gmail.com<br>cell:23<br>Address:2321321<br>', '<p>ebi nigiri&emsp; porzione: 1&emsp; totale piatto: â‚¬ 3</p><p> niiiiiigiri&emsp; porzione: 7&emsp; totale piatto: â‚¬ 14</p><p>niiiiiigiri&emsp; porzione: 9&emsp; totale piatto: â‚¬ 18</p>', 35),
('zhu.yt1027@gmail.com', '2018-06-08', '22:02:00', 'Ritiro<br>user:zhu.yt1027@gmail.com<br>cell:2<br>', '<p>Vino Bianco Donna fugata&emsp; porzione: 12&emsp; totale piatto: â‚¬ 144</p>', 144);

-- --------------------------------------------------------

--
-- Struttura della tabella `tentativilogin`
--

DROP TABLE IF EXISTS `tentativilogin`;
CREATE TABLE `tentativilogin` (
  `user` varchar(64) NOT NULL,
  `timer` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tentativilogin`
--

INSERT INTO `tentativilogin` (`user`, `timer`) VALUES
('zhu.yt1027@gmail.com', '1528190115');

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
('957939c4f111edd99f7ee7ff94aa4f1f3a7886e204c8553fa2ee05d1ddae9eb7', 'asd@gmail.com'),
('f91e0e9a93f7e05dd97ae37e564976b8f999e4587846f323263f1430a48f610c', 'fasteat@gmail.com'),
('4fdbe51cfe9becd727be0d1eef9424308446dcb51a9f538ff15e812242872faa', 'qwe@prova.it'),
('f91e0e9a93f7e05dd97ae37e564976b8f999e4587846f323263f1430a48f610c', 'zhu.yt1027@gmail.com');

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
