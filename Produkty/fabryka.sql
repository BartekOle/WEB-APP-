-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2019, 19:01
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fabryka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezykangielski`
--

CREATE TABLE `jezykangielski` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf16_polish_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf16_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `jezykangielski`
--

INSERT INTO `jezykangielski` (`Id`, `Name`, `Description`) VALUES
(5, '', ''),
(6, 'TESTTEST', 'bdsbcsc'),
(7, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezykhiszpanski`
--

CREATE TABLE `jezykhiszpanski` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf16_polish_ci DEFAULT NULL,
  `Descripcion` varchar(255) COLLATE utf16_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `jezykhiszpanski`
--

INSERT INTO `jezykhiszpanski` (`Id`, `Nombre`, `Descripcion`) VALUES
(5, 'Test', ''),
(6, '', ''),
(7, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezykpolski`
--

CREATE TABLE `jezykpolski` (
  `Id` int(11) NOT NULL,
  `Nazwa` varchar(100) COLLATE utf16_polish_ci DEFAULT NULL,
  `Opis` varchar(255) COLLATE utf16_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `jezykpolski`
--

INSERT INTO `jezykpolski` (`Id`, `Nazwa`, `Opis`) VALUES
(5, 'Test', 'fsfs'),
(6, 'hkdsgsag', ''),
(7, 'faf', 'fsaf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `IdProdukt` int(10) NOT NULL,
  `Cena` double NOT NULL,
  `StanMagazynowy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`IdProdukt`, `Cena`, `StanMagazynowy`) VALUES
(2, 0.08, 4),
(3, 0.03, 2),
(4, 0.03, 3),
(5, 0.12, 5),
(6, 1.12, 3),
(7, 0.03, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jezykangielski`
--
ALTER TABLE `jezykangielski`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `jezykhiszpanski`
--
ALTER TABLE `jezykhiszpanski`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `jezykpolski`
--
ALTER TABLE `jezykpolski`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`IdProdukt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `jezykangielski`
--
ALTER TABLE `jezykangielski`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `jezykhiszpanski`
--
ALTER TABLE `jezykhiszpanski`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `jezykpolski`
--
ALTER TABLE `jezykpolski`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `IdProdukt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `jezykangielski`
--
ALTER TABLE `jezykangielski`
  ADD CONSTRAINT `ja_FK_produkt` FOREIGN KEY (`Id`) REFERENCES `produkt` (`IdProdukt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `jezykhiszpanski`
--
ALTER TABLE `jezykhiszpanski`
  ADD CONSTRAINT `jh_FK_produkt` FOREIGN KEY (`Id`) REFERENCES `produkt` (`IdProdukt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `jezykpolski`
--
ALTER TABLE `jezykpolski`
  ADD CONSTRAINT `jp_FK_produkt` FOREIGN KEY (`Id`) REFERENCES `produkt` (`IdProdukt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
