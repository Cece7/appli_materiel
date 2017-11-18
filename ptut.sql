-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 18 Novembre 2017 à 15:59
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ptut`
--

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `iddate` int(11) NOT NULL,
  `jour` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  PRIMARY KEY (`iddate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `idmateriel` int(11) NOT NULL,
  `reference` text NOT NULL,
  PRIMARY KEY (`idmateriel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`idmateriel`, `reference`) VALUES
(1, 'camera'),
(2, 'micro'),
(3, 'accessoire');

-- --------------------------------------------------------

--
-- Structure de la table `matos_reserver`
--

CREATE TABLE IF NOT EXISTS `matos_reserver` (
  `idmreserver` int(11) NOT NULL,
  `iddate` int(11) NOT NULL,
  `reference` text NOT NULL,
  PRIMARY KEY (`idmreserver`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
