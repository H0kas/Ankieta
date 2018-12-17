-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Paź 2018, 23:16
-- Wersja serwera: 10.1.34-MariaDB
-- Wersja PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ankieta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 NOT NULL,
  `nazwisko` text CHARACTER SET utf8 NOT NULL,
  `nr` int(11) NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `plec` text CHARACTER SET utf8 NOT NULL,
  `miasto` text CHARACTER SET utf8 NOT NULL,
  `wiek` int(11) NOT NULL,
  `waga` int(11) NOT NULL,
  `wzrost` int(11) NOT NULL,
  `talia` int(11) NOT NULL,
  `biodra` int(11) NOT NULL,
  `text1` text CHARACTER SET utf8 NOT NULL,
  `text2` text CHARACTER SET utf8 NOT NULL,
  `text3` text CHARACTER SET utf8 NOT NULL,
  `text4` text CHARACTER SET utf8 NOT NULL,
  `text5` text CHARACTER SET utf8 NOT NULL,
  `text6` text CHARACTER SET utf8 NOT NULL,
  `text7` text CHARACTER SET utf8 NOT NULL,
  `text8` text CHARACTER SET utf8 NOT NULL,
  `text9` text CHARACTER SET utf8 NOT NULL,
  `text10` text CHARACTER SET utf8 NOT NULL,
  `text11` text CHARACTER SET utf8 NOT NULL,
  `text12` text CHARACTER SET utf8 NOT NULL,
  `text13` text CHARACTER SET utf8 NOT NULL,
  `text14` text CHARACTER SET utf8 NOT NULL,
  `text15` text CHARACTER SET utf8 NOT NULL,
  `text16` text CHARACTER SET utf8 NOT NULL,
  `text17` text CHARACTER SET utf8 NOT NULL,
  `text18` text CHARACTER SET utf8 NOT NULL,
  `waga_docelowa` int(11) NOT NULL,
  `text19` text CHARACTER SET utf8 NOT NULL,
  `text20` text CHARACTER SET utf8 NOT NULL,
  `sprzet` text CHARACTER SET utf8 NOT NULL,
  `text21` text CHARACTER SET utf8 NOT NULL,
  `accept` text CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`id`, `imie`, `nazwisko`, `nr`, `email`, `plec`, `miasto`, `wiek`, `waga`, `wzrost`, `talia`, `biodra`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `text9`, `text10`, `text11`, `text12`, `text13`, `text14`, `text15`, `text16`, `text17`, `text18`, `waga_docelowa`, `text19`, `text20`, `sprzet`, `text21`, `accept`, `data`) VALUES
(1, 'Test', 'Testowy', 987657485, 'test@wp.pl', 'Mężczyzna', 'Testowo', 56, 121, 175, 123, 87, 'Tu jest jest text1', 'Tu jest jest text2', 'Tu jest jest text3', 'Tu jest jest text4', 'Tu jest jest text5', 'Tu jest jest text6', 'Tu jest jest text7', 'Tu jest jest text8', 'Tu jest jest text9', '3', 'Tu jest jest text10', 'Tu jest jest text11', 'Tu jest jest text12', 'Tu jest jest text13', 'Tu jest jest text14', 'Tu jest jest text15', 'Tu jest jest text16', 'Tu jest jest text17', 55, '6', 'Tu jest jest text20', 'mikser, blender, grill, mam różne sprzęty ale im niej tym lpiej gośću', 'HUahuahauhauhauha uah uahu ahuahuahuahauahuha ', 'Akceptuję', '0000-00-00 00:00:00'),
(2, 'Jan', 'Jankowski', 321342555, 'jan@jan.pl', 'Mężczyzna', 'Jankowo', 64, 132, 184, 75, 109, 'Tu wpisujemy jakiś tekst sobie, dla sprawdzenia jak to wygląda w bazie :)', 'Tu wpisy jakiś tekst sobie, dla sprawdzenia jak to wygląda w bazie :)', 'Tu wpisujemy jakiś tekst sobie, rawdzenia jak to wygląda w bazie :)', 'Tu wpisujemy jakiś tekst sobie, dla sprawdzenia jak tgląda w bazie :)', 'Tu kiś tekst sobie, dla sprawdzenia jak to wygląda w bazie :)', 'Tu wpisujemy jbie, dla sprawdzenia jak to wygląda w bazie :)', 'Tu wpisujemy jakiś tekst sobie, dla spra to wygląda w bazie :)', 'Tu wpisujemy jakia jak to wygląda w bazie :)', 'Tu wpisujemy jakiś tekst sobie, dla sprawd', '5', 'Tu wpisujemy jakiś tekst sobie, dla sprawdzenia wygląda w bazie :)', 'Tu wpiakiś tekst sobie, dla sprawdzenia jak to wygląda w bazie :)', 'Tu wpisujemy jakiś tekst sobie, dla sprawdzenia jak a w bazie :)', 'sujemy jakiś tekst sobie, dla sprawdzenia jak to wyglą', ' wpisujemy jakiś tekst sobie, dlaa jak to wygląda w bazie :)', 'Tu wpisujkiś tekst sobie, dla sprawdzenia jak to wąda w bazie :)', 'Tumy jakiś tekst sobie, dla spa jak to wygląda w bazie :)', 'Tu wpisujemobie, dla sprawdzenia jak to wygląda :)', 85, '6', 'Tu wpisujem34jakiś tekst sobie, dla sprawdzen343a jak to wygląda w bazie :)', 'mikser, blender, toster, dodatkowo mam: suszarkę, prostownicę itp', 'la sprawdzenia jak to', 'Akceptuję', '2018-10-09 21:05:43');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
