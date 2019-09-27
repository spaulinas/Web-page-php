-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Czer 2018, 20:15
-- Wersja serwera: 10.1.25-Paulina
-- Wersja PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kostka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--
CREATE DATABASE kostka;

CREATE TABLE `admin` (
  `adminID` int(1) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`adminID`, `adminname`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `categoryID` int(1) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'Gry planszowe'),
(2, 'Gry karciane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `club`
--

CREATE TABLE `club` (
  `clubID` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryID` int(2) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `day` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `club`
--

INSERT INTO `club` (`clubID`, `name`, `categoryID`, `city`, `address`, `photo`, `day`, `description`) VALUES
(1, 'Czerwony Rubin', 1, 'WrocÅ‚aw', 'Stary KocioÅ‚, ul.Woronowicza 3a', 'czerwony_rubin.jpg', 'Czwartek 17.00-22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(2, 'Psia Åapa', 1, 'WrocÅ‚aw', 'Pod CzarnÄ… WdowÄ…, ul. OrlÄ…t 17', 'kurza_stopa.jpg', 'PoniedziaÅ‚ek 18.00-23.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(3, 'Czarne Koty', 1, 'Warszawa', 'Cybermachina, ul. PokÄ…tna 8', 'czarne_koty.jpg', 'PoniedziaÅ‚ek 18.00-22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(4, 'Zielone Smoki', 1, 'Warszawa', 'Miodosytnia, ul.PowstaÅ„cÃ³w 89', 'zielone_smoki.jpg', 'Åšroda 17.00-22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(5, 'Kosteczka', 1, 'KrakÃ³w', 'Czarny Kruk, ul. Malwowa 3', 'kosteczka.jpg', 'Åšroda 17.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(6, 'Magia Gier', 1, 'KrakÃ³w', 'Dom Kultury SK, ul. Wichrowa 45', 'magia_gier.jpg', 'Wtorek 17.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(7, 'Podkowa', 1, 'KrakÃ³w', 'Podkowa, ul. Twarda 5', 'smoki.jpg', 'Sobota 15.00 - 19.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(8, 'Grajkowo', 2, 'WrocÅ‚aw', 'Motyla Noga, Rynek 15', 'grajkowo.jpg', 'Åšroda 19.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(9, 'Joker', 2, 'WrocÅ‚aw', 'BiaÅ‚a Fala, Rynek 15', 'joker.jpg', 'PiÄ…tek 19.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(10, 'Starfish', 2, 'Warszawa', 'Choper, DÅ‚uga 15', 'starfish.jpg', 'Czwartek 18.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(11, 'Magia i Miecz', 2, 'Warszawa', 'Parter, Orzechowa 35', 'magia_miecz.jpg', 'Åšroda 17.00 - 21.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(12, 'Trzy Karty', 2, 'Warszawa', 'Eksperyment, Cypel 5', 'trzy_karty.jpg', 'Niedziela 18.00 - 21.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.'),
(13, 'Grzybki', 2, 'KrakÃ³w', 'Czarny Kot, Rynek 15', 'grzybki.jpg', 'Wtorek 19.00 - 22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus sem sit amet lorem iaculis sagittis. Sed vestibulum felis ut facilisis sodales. Aliquam pulvinar at augue ut rhoncus. Nunc sit amet orci ac quam imperdiet pulvinar vitae vitae tortor. Vivamus porta erat nec magna vestibulum convallis.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games`
--

CREATE TABLE `games` (
  `gamesID` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `clubID` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `games`
--

INSERT INTO `games` (`gamesID`, `name`, `clubID`) VALUES
(1, 'Dobble', 8),
(2, 'Szeryf z Nottingham', 8),
(3, 'Kowale Losu', 8),
(4, 'Munchkin', 8),
(5, 'World of Tanks: Rush', 8),
(6, 'Timeline: Wynalazki', 8),
(7, 'Jaipur', 8),
(8, 'Holmes: Sherlock & Mycroft', 8),
(9, 'Boost', 9),
(10, 'Mamy Szpiega', 9),
(11, 'Szmal', 9),
(12, 'Maskarada', 9),
(13, 'Psycho Dropsy', 9),
(14, 'Siedem', 9),
(15, 'Gejsze', 10),
(16, 'Gra o tron', 10),
(17, 'Wiarusi', 10),
(18, 'Zaklinacze', 10),
(19, 'Mr. Jack Pocket', 10),
(20, 'Herosi', 10),
(21, 'Ligretto', 11),
(22, 'Zaginione Dziedzictwo', 11),
(23, 'Zombiaki', 11),
(24, 'Legends of Labyrinth', 12),
(25, 'Wizard: Gra przepowiedni', 12),
(26, 'Teomachia', 12),
(27, 'Grimslingers', 13),
(28, 'Catan: Pojedynek', 13),
(29, 'Illuminati', 13),
(30, 'Mow', 13),
(31, 'Talisman: Magia i Miecz', 1),
(32, 'Unlock! Wielka Ucieczka', 1),
(33, 'Dracula', 1),
(34, 'Magia i Myszy', 1),
(35, 'Betrayal at House on the Hill', 1),
(36, 'Relic: Tajemnica Sektora Antian', 2),
(37, 'Mr. Jack', 2),
(38, 'Tales of the Arabian Nights', 2),
(39, 'Mage Knight', 3),
(40, 'Dungeon Saga', 3),
(41, 'Takara Island', 3),
(42, 'Covert_zmiana2', 3),
(43, 'Hobbit', 4),
(44, 'Rycerze Pustkowi', 4),
(45, 'Horror w Arkham', 4),
(46, 'Touria', 5),
(47, 'The X-Files', 5),
(48, 'Android', 5),
(49, 'Ghost Stories', 5),
(50, 'Van Helsing', 6),
(51, 'Catacombs', 6),
(52, 'Deadwood: Miasto Bezprawia', 6),
(53, 'Kupcy i Korsarze', 6),
(54, 'The Walking Dead', 7),
(55, 'Panic Station', 7),
(56, 'Pandemia', 7),
(58, 'Wilderness', 7),
(59, 'Zombicide', 7),
(60, 'P.I.', 7);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`clubID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gamesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `club`
--
ALTER TABLE `club`
  MODIFY `clubID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT dla tabeli `games`
--
ALTER TABLE `games`
  MODIFY `gamesID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
