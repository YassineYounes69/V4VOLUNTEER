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
-- Table structure for table `refugies`
--

DROP TABLE IF EXISTS `refugies`;
CREATE TABLE IF NOT EXISTS `refugies` (
  `id_ref` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) DEFAULT NULL,
  `pays_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etat_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'non affecté',
  `nom_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age_ref` int(11) NOT NULL,
  `gender_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_ref`),
  KEY `IDX_8D37294FD0834EC4` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `refugies`
--

INSERT INTO `refugies` (`id_ref`, `id_membre`, `pays_ref`, `etat_ref`, `nom_ref`, `prenom_ref`, `age_ref`, `gender_ref`, `image`) VALUES
(33, NULL, 'Chad', 'non affecté', 'ffaaak', 'ffaaaak', 15, 'Homme', 'null'),
(34, NULL, 'Libya', 'non affecté', 'dd', 'dd', 4, 'RadioButton[id=femme, styleClass=radio-button]\'Femme\'', NULL),
(35, NULL, 'Tanzania', 'non affecté', 'zzz', 'zzz', 44, 'RadioButton[id=homme, styleClass=radio-button]\'Homme\'', NULL),
(36, NULL, 'Democratic Republic of the Congo', 'non affecté', 'rr', 'rr', 99, 'RadioButton[id=homme, styleClass=radio-button]\'Homme\'', NULL),
(38, NULL, 'Uganda', 'non affecté', 'll', 'll', 8, 'RadioButton[id=femme, styleClass=radio-button]\'Femme\'', NULL),
(39, NULL, 'Benin', 'non affecté', 'arrrrrrrr', 'arrrrr', 99, 'RadioButton[id=femme, styleClass=radio-button]\'Femme\'', NULL),
(40, NULL, 'Libya', 'non affecté', 'ama', 'ama', 69, 'RadioButton[id=femme, styleClass=radio-button]\'Femme\'', NULL),
(42, NULL, 'Chad', 'non affecté', 'jjjj', 'jjjj', 66, 'RadioButton[id=femme, styleClass=radio-button]\'Femme\'', NULL),
(43, NULL, 'Ghana', 'non affecté', 'fffffffff', 'fffffffff', 777, 'RadioButton[id=homme, styleClass=radio-button]\'Homme\'', NULL),
(44, NULL, 'Mauritania', 'non affecté', 'ttttttttt', 'ttttttttttt', 55, 'ReadOnlyObjectProperty [value: RadioButton[id=homme, styleClass=radio-button]\'Homme\']', NULL),
(47, NULL, 'Libya', 'null', 'azerty', 'azerty', 14, 'Femme', 'null'),
(48, NULL, 'Benin', 'non affecté', 'azertyyyyyyy', 'azertyyyyyyyy', 144, 'Femme', NULL),
(49, NULL, 'Libya', 'non affecté', 'vvv', 'vvv', 55, 'Femme', NULL),
(50, NULL, 'Democratic Republic of the Congo', 'non affecté', 'amaaaa', 'ammma', 363, 'Homme', NULL),
(51, NULL, 'Ghana', 'non affecté', 'affich', 'affich', 111, 'Homme', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `refugies`
--
ALTER TABLE `refugies`
  ADD CONSTRAINT `FK_8D37294FD0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `fos_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
