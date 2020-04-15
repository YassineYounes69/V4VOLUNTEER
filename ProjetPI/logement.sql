-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2020 at 11:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidev`
--

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `nb__chambre` int(11) NOT NULL,
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etat_log` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'non occupé',
  `id_ref` int(11) DEFAULT NULL,
  `nom_log` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY `IDX_F0FD44576B3CA4B` (`id_user`),
  KEY `IDX_F0FD44578ACBD6F9` (`id_ref`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`nb__chambre`, `id_log`, `id_user`, `adresse`, `etat_log`, `id_ref`, `nom_log`) VALUES
(330, 4, NULL, 'farah', 'dsv', NULL, 'amiee'),
(3337, 5, NULL, 'aattttttttt', 'non occupé', NULL, 'aattttttttt'),
(5555, 7, NULL, 'ttttttttttttt', 'non occupé', NULL, 'tttttttttttt'),
(5555, 8, NULL, 'ttttttttttttt', 'non occupé', NULL, 'tttttttttttt'),
(88, 10, NULL, 'ppp', 'non occupé', NULL, 'ppp'),
(99, 11, NULL, 'gggggggg', 'non occupé', NULL, 'gggggggg'),
(8888, 12, NULL, 'yyyy', 'non occupé', NULL, 'yyyy'),
(6, 13, NULL, 'rrrrrrrrrrrrrrrr', 'non occupé', NULL, 'rrrrrrrrrrrr'),
(8, 14, NULL, 'a', 'non occupé', NULL, 'a'),
(44, 15, NULL, 'eeee', 'non occupé', NULL, 'rrr'),
(56, 16, NULL, 'xdcfvgh', 'non occupé', NULL, 'sedrftg'),
(777, 17, NULL, 'ooooooo', 'non occupé', NULL, 'ooooo'),
(777, 18, NULL, 'zzzz', 'non occupé', NULL, 'ooooo'),
(555, 19, NULL, 'uuuuu', 'non occupé', NULL, 'uuu'),
(5, 20, NULL, 'ab', 'non occupé', NULL, 'abbb'),
(777, 21, NULL, 'jhuuy', 'non occupé', NULL, 'ttttkjgb');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `FK_F0FD44576B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F0FD44578ACBD6F9` FOREIGN KEY (`id_ref`) REFERENCES `refugies` (`id_ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
