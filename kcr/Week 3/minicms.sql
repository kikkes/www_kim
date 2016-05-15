-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 10:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minicms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE IF NOT EXISTS `blogposts` (
`id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `title`, `article`) VALUES
(22, 'IMD met ons mee!', 'Ben je een IMD-student en heb je de smaak te pakken? \r\nKom in de Creativity Gym werken aan je project! En als je het even niet meer ziet zitten, reageer je je af op de bokszak.'),
(23, 'WEB. DESIGN. DEVELOPMENT.', 'Ga je verder studeren en ben je net als ons helemaal zot van pixels en programmeren? In de professionele bachelor-opleiding Interactive Multimedia Design leer je de volledige mix tussen web design en development.\r\n\r\nLeer moderne webapplicaties, mobile apps en interactieve campagnes ontwerpen en ontwikkelen. #WeAreIMD, enkel in Mechelen bij Thomas More'),
(24, 'Morgan Freeman Ipsum', 'Cities fall but they are rebuilt. heroes die but they are remembered. i don''t think they tried to market it to the billionaire, spelunking, base-jumping crowd. it only took me six days. same time it took the lord to make the world. no, this is mount everest. you should flip on the discovery channel from time to time. but i guess you can''t now, being dead and all. well, what is it today? more spelunking? circumstances have taught me that a man''s ethics are the only possessions he will take beyond the grave. let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. mister wayne, if you don''t want to tell me exactly what you''re doing, when i''m asked, i don''t have to lie. but don''t think of me as an idiot. the man likes to play chess; let''s get him some rocks. i once heard a wise man say there are no perfect men. only perfect intentions. multiply your anger by about a hundred, kate, that''s how much he thinks he loves you. that tall drink of water with the silver spoon up his ass.\r\nCities fall but they are rebuilt. heroes die but they are remembered. boxing is about respect. getting it for yourself, and taking it away from the other guy. you measure yourself by the people who measure themselves by you. i now issue a new commandment: thou shalt do the dance. rehabilitated? well, now let me see. you know, i don''t have any idea what that means. bruce... i''m god. i did the same thing to gandhi, he didn''t eat for three weeks.'),
(25, 'Johnny Depp Ipsum', 'A drug person can learn to cope with things like seeing their dead grandmother crawling up their leg with a knife in her teeth. but no one should be asked to handle this trip. holy jesus. what are these goddamn animals? me? i''m dishonest, and a dishonest man you can always trust to be dishonest. honestly. it''s the honest ones you want to watch out for, because you can never predict when they''re going to do something incredibly... stupid. we are very much alike, you and i, i and you... us. we''re not sheep! forget about it" is, like, if you agree with someone, you know, like "raquel welch is one great piece of ass. forget about it!" but then, if you disagree, like "a lincoln is better than a cadillac? forget about it!" you know? but then, it''s also like if something''s the greatest thing in the world, like, "minghia! those peppers! forget about it!" what? no. we can''t stop here. this is bat country. well, then, i confess, it is my intention to commandeer one of these ships, pick up a crew in tortuga, raid, pillage, plunder and otherwise pilfer my weasely black guts out. we had two bags of grass, seventy-five pellets of mescaline, five sheets of high-powered blotter acid, a saltshaker half-full of cocaine, and a whole galaxy of multi-colored uppers, downers, screamers, laughers... do you like my meadow? try some of my grass! please have a blade, please do, it''s so delectable and so darn good looking! giddy-up... no, no this way... good horsey.'),
(27, 'I just finished my MinIMD Blog!', 'What do you think? Any suggestion to improve it? Or other feedback?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `firstname` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `name`, `email`, `username`, `password`) VALUES
(1, 'test', 'test', 'test', 'test', '$2y$12$ZT2QCX9ocALTFl2zLHTzFupBbSYgAap3vXM38n2Lfra49.y9KVwJ6'),
(5, 'Mathijs', 'Van den Broeck', 'mathijsvandenbroeck@gmail.com', 'Thieukevdb', '$2y$12$4LTEtWFQyTPpCGexn4ODQ.Zv8KRaOtKFi15M.MbXKKhP5XI/UQzGq'),
(6, 'Thomas', 'More', 'weareimd@thomasmore.be', 'WeAreIMD', '$2y$12$bCE9UyLlrEpdAR//rjWWZO.ooSdFMLh7VsKLTXT7a39YQVdqYXIwG'),
(7, 'Peter', 'Selie', 'peter@selie.com', 'Peterselie', '$2y$12$hNMkmZC1LHCgu/euYPlw5eiWtiDJA/qyI/NbtiWHckLIXpioTIZPW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
