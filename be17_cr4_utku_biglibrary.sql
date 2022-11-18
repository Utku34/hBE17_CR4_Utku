-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Nov 2022 um 13:37
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be17_cr4_utku_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `author_first_name` varchar(55) NOT NULL,
  `author_last_name` varchar(55) NOT NULL,
  `publisher_name` varchar(55) NOT NULL,
  `publisher_address` varchar(55) NOT NULL,
  `publish_date` int(11) NOT NULL,
  `ISBN_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `ISBN_code`) VALUES
(9, '', '637380bf6195e.png', 'fdgfdg', '', 'fdgfdg', 'dgffdgfdg', 'fdgdfgdf', 'gfdg', 1, 564467),
(10, 'fsgdf', '636fd44c9d477.jpeg', 'fdgfdg', '', 'fdgfdg', 'dgffdgfdg', 'fdgdfgdf', 'gfdg', 1, 564),
(11, 'fsgdf', '636fd48d16783.jpeg', 'fdgfdg', '', 'fdgfdg', 'dgffdgfdg', 'fdgdfgdf', 'gfdg', 1, 564),
(12, 'dfgtzutj', '63712c297d9a6.jpeg', 'jtukjrtuj', '', 'jhjrt', 'zhtzh', 'tzhthzt', 'jhtzhtz', 1, 465),
(13, 'dfgtzutj', '63712c42dcbd6.jpeg', 'jtukjrtuj', '', 'jhjrt', 'zhtzh', 'tzhthzt', 'jhtzhtz', 1, 465),
(14, 'dfgtzutj', '63712c7ef3581.jpeg', 'jtukjrtuj', '', 'jhjrt', 'zhtzh', 'tzhthzt', 'jhtzhtz', 1, 465),
(15, 'dfgtzutj', '63712cbfdfdfd.jpeg', 'jtukjrtuj', '', 'jhjrt', 'zhtzh', 'tzhthzt', 'jhtzhtz', 1, 465),
(16, 'asd', '', 'assd', '', 'asd', 'asd', 'asd', 'asd', 1, 324),
(17, 'ferdiland', '63714120bd953.jpeg', 'cdsgfdsaf', '', 'sfsdfsad', 'fdsfs', 'dfsd', 'fsdfdsf', 1, 54654),
(18, 'achmed', '6373812ac9a78.png', 'er mag a', '', 'f', 'fayaf', 'sdff', 'dsfdsf', 1, 45);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
