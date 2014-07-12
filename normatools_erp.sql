-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2014. Júl 08. 07:38
-- Szerver verzió: 5.6.16
-- PHP verzió: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `normatools_erp`
--

DELIMITER $$
--
-- Eljárások
--
DROP PROCEDURE IF EXISTS `dolgozoInfo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `dolgozoInfo`(IN p_id int(11))
BEGIN
		SELECT * FROM dolgozok WHERE id=p_id ;
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `anyagok`
--

DROP TABLE IF EXISTS `anyagok`;
CREATE TABLE IF NOT EXISTS `anyagok` (
  `anyag_id` int(10) NOT NULL,
  `nev` varchar(255) COLLATE utf8_bin NOT NULL,
  `ar` int(10) NOT NULL,
  `fajsuly` int(10) NOT NULL,
  `hozzaadva` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`anyag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `anyagok`
--

INSERT INTO `anyagok` (`anyag_id`, `nev`, `ar`, `fajsuly`, `hozzaadva`) VALUES
(0, 'acél', 2500, 7800, '2014-07-06 22:00:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `arajanlat`
--

DROP TABLE IF EXISTS `arajanlat`;
CREATE TABLE IF NOT EXISTS `arajanlat` (
  `ajanlat_id` varchar(16) COLLATE utf8_bin NOT NULL,
  `ajanlatkeres_datuma` datetime NOT NULL,
  `hatarido` date NOT NULL,
  `nyereseg` int(5) NOT NULL,
  `megrendelo_megrendelo_id` int(11) NOT NULL,
  `statusz` enum('készítés_alatt','elkészítve') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ajanlat_id`),
  KEY `fk_arajanlat_megrendelo1_idx` (`megrendelo_megrendelo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `arajanlat`:
--   `megrendelo_megrendelo_id`
--       `megrendelo` -> `megrendelo_id`
--

--
-- A tábla adatainak kiíratása `arajanlat`
--

INSERT INTO `arajanlat` (`ajanlat_id`, `ajanlatkeres_datuma`, `hatarido`, `nyereseg`, `megrendelo_megrendelo_id`, `statusz`) VALUES
('aj_01', '2014-07-07 00:00:00', '2014-07-14', 30, 1, 'készítés_alatt');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dolgozok`
--

DROP TABLE IF EXISTS `dolgozok`;
CREATE TABLE IF NOT EXISTS `dolgozok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `priv` varchar(30) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `teljes_nev` varchar(300) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `elutasitva_szerkesztes` tinyint(1) DEFAULT NULL,
  `vezerlopult_megtekintes` tinyint(1) DEFAULT NULL,
  `hozzaferesek_megtekintes` tinyint(1) DEFAULT NULL,
  `hozzaferesek_szerkesztes` tinyint(1) DEFAULT NULL,
  `megrendelok_megtekintes` tinyint(1) DEFAULT NULL,
  `megrendelok_szerkesztes` tinyint(1) DEFAULT NULL,
  `muveletek_megtekintes` tinyint(1) DEFAULT NULL,
  `muveletek_szerkesztes` tinyint(1) DEFAULT NULL,
  `gepieroforrasok_megtekintes` tinyint(1) DEFAULT NULL,
  `gepieroforrasok_szerkesztes` tinyint(1) DEFAULT NULL,
  `anyagok_megtekintes` tinyint(1) DEFAULT NULL,
  `anyagok_szerkesztes` tinyint(1) DEFAULT NULL,
  `valtozokoltsegek_megtekintes` tinyint(1) DEFAULT NULL,
  `valatozokoltsegek_szerkesztes` tinyint(1) DEFAULT NULL,
  `egyebbeallitasok_megtekintes` tinyint(1) DEFAULT NULL,
  `egyebbeallitasok_szerkesztes` tinyint(1) DEFAULT NULL,
  `beszerzes_megtekintes` tinyint(1) DEFAULT NULL,
  `termeles_megtekintes` tinyint(1) DEFAULT NULL,
  `arajanlatok_megtekintes` tinyint(1) DEFAULT NULL,
  `arajanlatok_szerkesztes` tinyint(1) DEFAULT NULL,
  `futoprojektek_megtekintes` tinyint(1) DEFAULT NULL,
  `futoprojektek_szerkesztes` tinyint(1) DEFAULT NULL,
  `ellenorzes_megtekintes` tinyint(1) DEFAULT NULL,
  `ellenorzes_szerkesztes` tinyint(1) DEFAULT NULL,
  `kiszallitas_megtekintes` tinyint(1) DEFAULT NULL,
  `kiszallitas_szerkesztes` tinyint(1) DEFAULT NULL,
  `kiszallitva_megtekintes` tinyint(1) DEFAULT NULL,
  `kiszallitva_szerkesztes` tinyint(1) DEFAULT NULL,
  `elutasitva_megtekintes` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

--
-- A tábla adatainak kiíratása `dolgozok`
--

INSERT INTO `dolgozok` (`id`, `priv`, `username`, `teljes_nev`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `elutasitva_szerkesztes`, `vezerlopult_megtekintes`, `hozzaferesek_megtekintes`, `hozzaferesek_szerkesztes`, `megrendelok_megtekintes`, `megrendelok_szerkesztes`, `muveletek_megtekintes`, `muveletek_szerkesztes`, `gepieroforrasok_megtekintes`, `gepieroforrasok_szerkesztes`, `anyagok_megtekintes`, `anyagok_szerkesztes`, `valtozokoltsegek_megtekintes`, `valatozokoltsegek_szerkesztes`, `egyebbeallitasok_megtekintes`, `egyebbeallitasok_szerkesztes`, `beszerzes_megtekintes`, `termeles_megtekintes`, `arajanlatok_megtekintes`, `arajanlatok_szerkesztes`, `futoprojektek_megtekintes`, `futoprojektek_szerkesztes`, `ellenorzes_megtekintes`, `ellenorzes_szerkesztes`, `kiszallitas_megtekintes`, `kiszallitas_szerkesztes`, `kiszallitva_megtekintes`, `kiszallitva_szerkesztes`, `elutasitva_megtekintes`) VALUES
(2, 'admin', 'admin', 'teljes nevem', '$P$BDBitmpAIeJbCXV3xFLXu44gEPmVgB0', 'admin@normatools.hu', 1, 0, NULL, NULL, NULL, NULL, '02fc765a8f94211be8ef14f8cd5242e5', '::1', '2014-07-07 20:25:26', '2014-07-01 16:12:20', '2014-07-07 18:25:26', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(16, 'dolgozó', 'dolg1', 'dolgozó aladár', '$P$BrxoNGeXbBdyfve.j2Z6tufP6voMcG0', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:26:26', '2014-07-06 07:26:26', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'dolgozó', 'dolg2', 'dolgozó béla', '$P$BTTb/gz1xMqXOjc9kmnyc6PxKdTqZ00', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:29:31', '2014-07-06 07:29:31', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'dolgozó', 'dolg3', 'dolgozó célia', '$P$BA2EF6gK4cS/OTBJEJmI9aPhbIIGzh0', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:33:17', '2014-07-06 07:33:17', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'dolgozó', 'dolg4', 'dolgozó dalma', '$P$Bgcn.Uh/opyUMCL9TLo8E4J3al5Qip.', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:37:52', '2014-07-06 07:37:52', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'dolgozó', 'dolg5', 'asd jóska', '$P$Bo1KqM9NfJqIFeUw7CZ6PcB/8Pij2G1', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:39:20', '2014-07-06 07:39:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'dolgozó', 'dolg6', 'Kiss ferenc', '$P$Bh3LB8c3nNPBmnrZe7dwznyPECvIAI.', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:39:45', '2014-07-06 07:39:45', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'dolgozó', 'dolg7', 'kovács mihály', '$P$BJRgK/q8zCZJA8AlApO7AMirodmzu4.', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-06 09:40:02', '2014-07-06 07:40:02', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'dolgozó', 'dolg8', 'lakatos armandó', '$P$BWbzXZvJcjhBXyWhy41vHYWhsuO7Zs1', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-07-08 00:00:48', '2014-07-06 09:40:37', '2014-07-07 22:00:48', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'dolgozó', 'dolg9', 'hordozó karcsi', '$P$Bit8jMqtYWa5vsc.bM6CdHKx4ACmz7/', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2014-07-07 23:56:24', '2014-07-06 09:41:20', '2014-07-07 21:57:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'dolgozó', 'dol10', 'Kiss Árpád', '$P$BwB9nrDnEPYlz/8/dk0Ujb6dwR0Uw//', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2014-07-08 00:02:24', '2014-07-07 22:02:24', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `komponens`
--

DROP TABLE IF EXISTS `komponens`;
CREATE TABLE IF NOT EXISTS `komponens` (
  `komponens_id` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_bin NOT NULL,
  `hozzaadva` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hozott_anyag` tinyint(1) NOT NULL DEFAULT '0',
  `mennyiseg` float NOT NULL,
  `mennyiseg_tipusa` enum('kg','liter','db') COLLATE utf8_bin NOT NULL,
  `alak` enum('hasab','henger') COLLATE utf8_bin DEFAULT NULL,
  `meret` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`komponens_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `komponens`
--

INSERT INTO `komponens` (`komponens_id`, `nev`, `hozzaadva`, `hozott_anyag`, `mennyiseg`, `mennyiseg_tipusa`, `alak`, `meret`) VALUES
(0, 'csavar', '2014-07-07 08:41:28', 0, 100, 'db', '', ''),
(1, 'k810 hasab', '2014-07-07 09:04:34', 0, 1, 'db', 'hasab', '10,10,80');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `komponens_anyagok_kapcs`
--

DROP TABLE IF EXISTS `komponens_anyagok_kapcs`;
CREATE TABLE IF NOT EXISTS `komponens_anyagok_kapcs` (
  `komponens_komponens_id` int(11) NOT NULL,
  `anyagok_anyag_id` int(10) NOT NULL,
  KEY `fk_komponens_has_anyagok_anyagok1_idx` (`anyagok_anyag_id`),
  KEY `fk_komponens_has_anyagok_komponens1_idx` (`komponens_komponens_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `komponens_anyagok_kapcs`:
--   `komponens_komponens_id`
--       `komponens` -> `komponens_id`
--   `anyagok_anyag_id`
--       `anyagok` -> `anyag_id`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `megrendelo`
--

DROP TABLE IF EXISTS `megrendelo`;
CREATE TABLE IF NOT EXISTS `megrendelo` (
  `megrendelo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(500) COLLATE utf8_bin NOT NULL,
  `cim` varchar(500) COLLATE utf8_bin NOT NULL,
  `telefon` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `hozzaadva` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`megrendelo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `megrendelo`
--

INSERT INTO `megrendelo` (`megrendelo_id`, `nev`, `cim`, `telefon`, `email`, `hozzaadva`) VALUES
(1, 'bosh eger', 'Bánki Donát utca 3', '+36301234567', 'kapcsolat.eger@bosch.hu', '2014-07-07 08:38:19');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munka`
--

DROP TABLE IF EXISTS `munka`;
CREATE TABLE IF NOT EXISTS `munka` (
  `munkaszam` varchar(15) COLLATE utf8_bin NOT NULL,
  `projekt_nev` varchar(500) COLLATE utf8_bin NOT NULL,
  `hozzadva` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `megrendeles_datuma` datetime NOT NULL,
  `hatarido` datetime NOT NULL,
  `statusz` tinyint(3) NOT NULL DEFAULT '0',
  `arajanlat_id` varchar(16) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`munkaszam`),
  KEY `fk_MUNKA_arajanlat1_idx` (`arajanlat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `munka`:
--   `arajanlat_id`
--       `arajanlat` -> `ajanlat_id`
--

--
-- A tábla adatainak kiíratása `munka`
--

INSERT INTO `munka` (`munkaszam`, `projekt_nev`, `hozzadva`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`) VALUES
('NT2014-0001', 'elso', '2014-07-07 08:40:29', '2014-07-07 00:00:00', '2014-07-14 00:00:00', 0, 'aj_01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munkalap`
--

DROP TABLE IF EXISTS `munkalap`;
CREATE TABLE IF NOT EXISTS `munkalap` (
  `bizonylatszam` int(11) NOT NULL,
  `RAJZ_rajzszam` varchar(40) COLLATE utf8_bin NOT NULL,
  `megnevezes` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `muvelet_megnevez` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `muvelet_leiras` text COLLATE utf8_bin,
  `MUNKA_munkaszam` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`bizonylatszam`),
  KEY `fk_MUNKALAP_RAJZ1_idx` (`RAJZ_rajzszam`),
  KEY `fk_MUNKALAP_MUNKA1_idx` (`MUNKA_munkaszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `munkalap`:
--   `RAJZ_rajzszam`
--       `rajz` -> `rajzszam`
--   `MUNKA_munkaszam`
--       `munka` -> `munkaszam`
--

--
-- A tábla adatainak kiíratása `munkalap`
--

INSERT INTO `munkalap` (`bizonylatszam`, `RAJZ_rajzszam`, `megnevezes`, `muvelet_megnevez`, `muvelet_leiras`, `MUNKA_munkaszam`) VALUES
(0, '1700425 2V4 1.05', '80-as hasábacél', 'marás', 'marni kell', 'NT2014-0001');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munka_komponens_kapcs`
--

DROP TABLE IF EXISTS `munka_komponens_kapcs`;
CREATE TABLE IF NOT EXISTS `munka_komponens_kapcs` (
  `MUNKA_munkaszam` varchar(15) COLLATE utf8_bin NOT NULL,
  `komponens_komponens_id` int(11) NOT NULL,
  KEY `fk_MUNKA_has_komponens_komponens1_idx` (`komponens_komponens_id`),
  KEY `fk_MUNKA_has_komponens_MUNKA1_idx` (`MUNKA_munkaszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `munka_komponens_kapcs`:
--   `MUNKA_munkaszam`
--       `munka` -> `munkaszam`
--   `komponens_komponens_id`
--       `komponens` -> `komponens_id`
--

--
-- A tábla adatainak kiíratása `munka_komponens_kapcs`
--

INSERT INTO `munka_komponens_kapcs` (`MUNKA_munkaszam`, `komponens_komponens_id`) VALUES
('NT2014-0001', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munka_rajz_kapcs`
--

DROP TABLE IF EXISTS `munka_rajz_kapcs`;
CREATE TABLE IF NOT EXISTS `munka_rajz_kapcs` (
  `MUNKA_munkaszam` varchar(15) COLLATE utf8_bin NOT NULL,
  `RAJZ_rajzszam` varchar(40) COLLATE utf8_bin NOT NULL,
  KEY `fk_MUNKA_has_RAJZ_RAJZ1_idx` (`RAJZ_rajzszam`),
  KEY `fk_MUNKA_has_RAJZ_MUNKA_idx` (`MUNKA_munkaszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `munka_rajz_kapcs`:
--   `MUNKA_munkaszam`
--       `munka` -> `munkaszam`
--   `RAJZ_rajzszam`
--       `rajz` -> `rajzszam`
--

--
-- A tábla adatainak kiíratása `munka_rajz_kapcs`
--

INSERT INTO `munka_rajz_kapcs` (`MUNKA_munkaszam`, `RAJZ_rajzszam`) VALUES
('NT2014-0001', '1700425 2V4 1.05');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `muveletek`
--

DROP TABLE IF EXISTS `muveletek`;
CREATE TABLE IF NOT EXISTS `muveletek` (
  `muvelet_id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(200) COLLATE utf8_bin NOT NULL,
  `tipus` enum('gepi','kezi') COLLATE utf8_bin NOT NULL DEFAULT 'gepi',
  `elokeszuleti_koltseg` smallint(6) NOT NULL,
  `gepi_koltseg` smallint(6) NOT NULL,
  `szemelyi_koltseg` smallint(6) NOT NULL,
  `hozzaadva` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`muvelet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `muveletek`
--

INSERT INTO `muveletek` (`muvelet_id`, `nev`, `tipus`, `elokeszuleti_koltseg`, `gepi_koltseg`, `szemelyi_koltseg`, `hozzaadva`) VALUES
(1, 'forgácsolás', 'gepi', 100, 1000, 0, '2014-07-06 22:00:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `muveletek_komponens_kapcs`
--

DROP TABLE IF EXISTS `muveletek_komponens_kapcs`;
CREATE TABLE IF NOT EXISTS `muveletek_komponens_kapcs` (
  `muveletek_muvelet_id` int(11) NOT NULL,
  `komponens_komponens_id` int(11) NOT NULL,
  KEY `fk_muveletek_has_komponens_komponens1_idx` (`komponens_komponens_id`),
  KEY `fk_muveletek_has_komponens_muveletek1_idx` (`muveletek_muvelet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- TÁBLA KAPCSOLATAI `muveletek_komponens_kapcs`:
--   `muveletek_muvelet_id`
--       `muveletek` -> `muvelet_id`
--   `komponens_komponens_id`
--       `komponens` -> `komponens_id`
--

--
-- A tábla adatainak kiíratása `muveletek_komponens_kapcs`
--

INSERT INTO `muveletek_komponens_kapcs` (`muveletek_muvelet_id`, `komponens_komponens_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rajz`
--

DROP TABLE IF EXISTS `rajz`;
CREATE TABLE IF NOT EXISTS `rajz` (
  `rajzszam` varchar(40) COLLATE utf8_bin NOT NULL,
  `rajz_utvonal` varchar(200) COLLATE utf8_bin NOT NULL,
  `hozzaadva` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rajzszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `rajz`
--

INSERT INTO `rajz` (`rajzszam`, `rajz_utvonal`, `hozzaadva`) VALUES
('1700425 2V4 1.05', 'uploads/rajzok/NT2014-0000/1700425_2V4_1.05.png', '2014-07-07 08:46:46');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `teljes_nev` varchar(300) COLLATE utf8_bin NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- TÁBLA KAPCSOLATAI `user_profiles`:
--   `user_id`
--       `dolgozok` -> `id`
--

--
-- A tábla adatainak kiíratása `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `teljes_nev`, `country`, `website`) VALUES
(17, 19, '', NULL, NULL),
(18, 2, 'Normatools Admmin', 'Magyarország', NULL),
(19, 20, '', NULL, NULL),
(20, 21, '', NULL, NULL),
(21, 22, '', NULL, NULL),
(22, 23, 'Kovács László', NULL, NULL),
(24, 26, '', NULL, NULL);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `arajanlat`
--
ALTER TABLE `arajanlat`
  ADD CONSTRAINT `fk_arajanlat_megrendelo1` FOREIGN KEY (`megrendelo_megrendelo_id`) REFERENCES `megrendelo` (`megrendelo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `komponens_anyagok_kapcs`
--
ALTER TABLE `komponens_anyagok_kapcs`
  ADD CONSTRAINT `fk_komponens_has_anyagok_komponens1` FOREIGN KEY (`komponens_komponens_id`) REFERENCES `komponens` (`komponens_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_komponens_has_anyagok_anyagok1` FOREIGN KEY (`anyagok_anyag_id`) REFERENCES `anyagok` (`anyag_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `munka`
--
ALTER TABLE `munka`
  ADD CONSTRAINT `fk_MUNKA_arajanlat1` FOREIGN KEY (`arajanlat_id`) REFERENCES `arajanlat` (`ajanlat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `munkalap`
--
ALTER TABLE `munkalap`
  ADD CONSTRAINT `fk_MUNKALAP_RAJZ1` FOREIGN KEY (`RAJZ_rajzszam`) REFERENCES `rajz` (`rajzszam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_MUNKALAP_MUNKA1` FOREIGN KEY (`MUNKA_munkaszam`) REFERENCES `munka` (`munkaszam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `munka_komponens_kapcs`
--
ALTER TABLE `munka_komponens_kapcs`
  ADD CONSTRAINT `fk_MUNKA_has_komponens_MUNKA1` FOREIGN KEY (`MUNKA_munkaszam`) REFERENCES `munka` (`munkaszam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_MUNKA_has_komponens_komponens1` FOREIGN KEY (`komponens_komponens_id`) REFERENCES `komponens` (`komponens_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `munka_rajz_kapcs`
--
ALTER TABLE `munka_rajz_kapcs`
  ADD CONSTRAINT `fk_MUNKA_has_RAJZ_MUNKA` FOREIGN KEY (`MUNKA_munkaszam`) REFERENCES `munka` (`munkaszam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_MUNKA_has_RAJZ_RAJZ1` FOREIGN KEY (`RAJZ_rajzszam`) REFERENCES `rajz` (`rajzszam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `muveletek_komponens_kapcs`
--
ALTER TABLE `muveletek_komponens_kapcs`
  ADD CONSTRAINT `fk_muveletek_has_komponens_muveletek1` FOREIGN KEY (`muveletek_muvelet_id`) REFERENCES `muveletek` (`muvelet_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_muveletek_has_komponens_komponens1` FOREIGN KEY (`komponens_komponens_id`) REFERENCES `komponens` (`komponens_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `fk_dolg_id` FOREIGN KEY (`user_id`) REFERENCES `dolgozok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
