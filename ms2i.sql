-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 jan. 2018 à 14:40
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ms2i`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `code_activite` int(11) DEFAULT NULL,
  `code_priorite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=309 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `latitude`, `longitude`, `code_activite`, `code_priorite`) VALUES
(278, 'Montpellier', 43.6, 3.8833, NULL, 1),
(279, 'Sète', 43.4018, 3.6966, NULL, 0),
(280, 'Juvignac', 43.6167, 3.8, NULL, 1),
(281, 'Montarnaud', 43.65, 3.7, NULL, 1),
(282, 'Saint Jean de Fos', 43.7, 3.55, NULL, 0),
(283, 'Gignac', 43.653241, 3.551364, NULL, 1),
(284, 'Clermont l\'Hérault', 43.62759, 3.429495, NULL, 1),
(285, 'Saint Jean de Védas', 43.575267, 3.826215, NULL, 0),
(286, 'Pignan', 43.581903, 3.761729, NULL, 1),
(287, 'Vailhauques', 43.672261, 3.717986, NULL, 0),
(288, 'Frontignan', 43.444815, 3.755999, NULL, 0),
(289, 'Balaruc', 43.442598, 3.679241, NULL, 0),
(290, 'Mèze', 43.425594, 3.606834, NULL, 0),
(291, 'Bouzigues', 43.449477, 3.654138, NULL, 0),
(292, 'Fabrègues', 43.549831, 3.778935, NULL, 0),
(293, 'Cournonterral', 43.558067, 3.719578, NULL, 0),
(294, 'Mauguio', 43.615441, 4.010165, NULL, 0),
(295, 'Lattes', 43.567296, 3.896473, NULL, 0),
(296, 'Lodève', 43.73366, 3.313975, NULL, 0),
(297, 'Canet', 42.706091, 3.009898, NULL, 0),
(298, 'Saint André de Sangonis', 43.652984, 3.508645, NULL, 1),
(299, 'Nébian', 43.606614, 3.430843, NULL, 1),
(300, 'Ceyras', 43.643617, 3.458618, NULL, 1),
(301, 'Saint Félix de Lodez', 43.662971, 3.460779, NULL, 1),
(302, 'Jonquières', 43.676, 3.476, NULL, 1),
(303, 'Aniane', 43.6833, 3.5833, NULL, 1),
(304, 'Murviel les Montpellier', 43.6167, 3.7333, NULL, 0),
(305, 'La Boissière', 43.663784, 3.644807, NULL, 0),
(306, 'Saint Paul et Valmalle', 43.6333, 3.6667, NULL, 0),
(307, 'Béziers', 43.344233, 3.215795, NULL, 1),
(308, 'Pézénas', 43.461531, 3.42319299, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
