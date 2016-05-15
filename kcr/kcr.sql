-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 22 mei 2015 om 11:01
-- Serverversie: 5.6.15-log
-- PHP-versie: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `kcr`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `from` date NOT NULL,
  `till` date NOT NULL,
  `carid` int(10) NOT NULL,
  `cartype` varchar(20) NOT NULL,
  `carbrand` varchar(20) NOT NULL,
  `pricetot` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `pk` varchar(4) NOT NULL,
  `price` varchar(5) NOT NULL,
  `options` varchar(30) NOT NULL,
  `year` varchar(4) NOT NULL,
  `zerotosixty` varchar(4) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `mpg` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `cars`
--

INSERT INTO `cars` (`id`, `type`, `brand`, `pk`, `price`, `options`, `year`, `zerotosixty`, `foto`, `mpg`) VALUES
(4, 'Aventador', 'Lamborghini', '700', '50', 'full option,carbon spoiler', '2011', '2,9', 'lamboaventador.jpg', '17'),
(5, '911 gt3', 'Porsche', '475', '40', 'full option', '2014', '3,5', 'gt3.jpg', '12,4'),
(6, 'zert', 'ezrt', 'ze', 'ea', 'aze', 'az', 'aze', 'zera', 'zae'),
(7, 'm3', 'bmw', '420', '45', 'full option,carbon spoiler', '2010', '4,8', 'm3.jpg', '12,4');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `name`, `email`, `username`, `password`) VALUES
(8, 'kim', 'verstraelen', 'kim.verstraelen@hotmail.com', 'kikkes', '$2y$12$PkyC9dpKwx8W3egdaOtSHu/VtzaBso93RB4Xi7LAB8S4/INSUdjEi'),
(51, 'admin', 'admin', 'admin@kcr.be', 'admin', '$2y$12$Czo0ae.tPtPIQq1TpmKn4ub9qB1b..L/3MdnMm59dhkmULklBFXFy'),
(53, 'kim', 'kim', 'kim.verstraelen@hotmail.com', 'kim', '$2y$12$5c0RVRs23LlXJJsN3zeW8uu38YKM5LRDiWPt9mnwd2LaKSqwSs8Aa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
