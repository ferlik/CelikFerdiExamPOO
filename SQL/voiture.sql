-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 août 2020 à 09:49
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exampoocelikferdi`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(250) NOT NULL,
  `modele` varchar(250) NOT NULL,
  `energie` varchar(250) NOT NULL,
  `boiteAuto` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `modele`, `energie`, `boiteAuto`, `image`) VALUES
(21, 'lambo', 'h555', 'Essence', 'Oui', 'https://www.challenges.fr/assets/img/2018/08/27/cover-r4x3w1000-5b84072224873-pbc18-conference-09-jpg.jpg'),
(23, 'Porsche', 'Panamera', 'Hybride', 'Oui', 'https://symbolcars.fr/11180/porsche-panamera-30-v6-462ch-4-e-hybrid-edition-10-ans-euro6d-t-evap-isc.jpg'),
(22, 'Bmw', 'i8', 'Hybride', 'Oui', 'https://www.turbo.fr/sites/default/files/2020-03/687710.jpg'),
(24, 'Ferrari', 'F8', 'Essence', 'Oui', 'https://api.ferrarinetwork.ferrari.com/v2/network-content/medias/resize/5d26fdb7c3f9ec0af6475619-01_fb_ppl_intro_lp3lhwq8?apikey=9QscUiwr5n0NhOuQb463QEKghPrVlpaF&width=1080'),
(25, 'Mercedes', 'Prototype', 'Electrique', 'Oui', 'https://img.autojournal.fr/news/2010/11/19/1433276/d4c541ff058b8f9863275de3-900-600.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
