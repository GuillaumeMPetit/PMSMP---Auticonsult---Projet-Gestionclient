-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 jan. 2020 à 15:45
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionclient`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_actioncom`
--

DROP TABLE IF EXISTS `tb_actioncom`;
CREATE TABLE IF NOT EXISTS `tb_actioncom` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_date` date NOT NULL,
  `act_contact` int(11) NOT NULL,
  `act_type` varchar(11) NOT NULL,
  `act_contenu` text NOT NULL,
  `act_log_id` int(11) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_actioncom`
--

INSERT INTO `tb_actioncom` (`act_id`, `act_date`, `act_contact`, `act_type`, `act_contenu`, `act_log_id`) VALUES
(1, '2020-01-15', 3, 'RDV', ' 45', 1),
(2, '2020-01-16', 12, 'Tel.', ' tel', 1),
(3, '2020-02-11', 4, 'Mail', ' coucou', 1),
(4, '2019-12-31', 12, 'RDV', 'Tres important', 1),
(5, '2020-01-24', 3, 'RDV', ' tres important', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tb_contact`
--

DROP TABLE IF EXISTS `tb_contact`;
CREATE TABLE IF NOT EXISTS `tb_contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_name` varchar(20) NOT NULL,
  `con_surname` varchar(20) NOT NULL,
  `con_phone` int(11) NOT NULL,
  `con_mail` varchar(30) NOT NULL,
  `con_principal` tinyint(1) NOT NULL,
  `con_ntr_id` int(11) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_contact`
--

INSERT INTO `tb_contact` (`con_id`, `con_name`, `con_surname`, `con_phone`, `con_mail`, `con_principal`, `con_ntr_id`) VALUES
(1, 'Thibault Hector', 'Hector', 633589745, 'Thibault.Hector@mail.com', 1, 1),
(2, 'Cendrine Marile', 'Marile', 145637895, 'Cendrine.Marile@mail.com', 0, 1),
(3, 'Mathieux Lerond', 'Lerond', 158963458, 'Mathieux.Lerond@mail.com', 0, 1),
(4, 'Marie Corinet', 'Corinet', 145632365, 'Marie.Corinet@mail.com', 1, 2),
(5, 'Henri Rochon', 'Rochon', 135763458, 'Henri.Rochon@mail.com', 0, 2),
(6, 'Lucas Puissart', 'Puissart', 15812458, 'Lucas.Puissart@mail.com', 1, 3),
(7, 'Nathan Mochine', 'Mochine', 135763458, 'Nathan.Mochine@mail.com', 0, 3),
(8, 'Corine Jalir', 'Jalir', 633589745, 'Corine.Jalir@mail.com', 0, 3),
(9, 'Laurence Jambuis', 'Jambuis', 145637895, 'Laurence.Jambuis@mail.com', 1, 4),
(10, 'Nathalie Karin', 'Karin', 15812458, 'Nathalie.Karin@mail.com', 0, 4),
(11, 'Oscar Franie', 'Franie', 152689734, 'Oscar.Franie@mail.com', 1, 5),
(12, 'Théo Courant', 'Courant', 153697458, 'Théo.Courant@mail.com', 1, 6),
(13, 'Loise Nappir', 'Nappir', 185364729, 'Loise.Nappir@mail.com', 0, 6),
(14, 'Maxime Flaton', 'Flaton', 125369657, 'Maxime.Flaton@mail.com', 0, 6),
(15, 'Manon Menil', 'Menil', 178456537, 'Manon.Menil@mail.com', 1, 7),
(16, 'Jade Furo', 'Furo', 156349828, 'Jade.Furo@mail.com', 1, 8),
(17, 'Odile Derin', 'Derin', 178532486, 'Odile.Derin@mail.com', 0, 7),
(18, 'Katrina Nostro', 'Nostro', 198654758, 'Katrina.Nostro@mail.com', 0, 8),
(19, 'Sandra Draco', 'Draco', 112498637, 'Sandra.draco@mail.com', 1, 9),
(20, 'Sacha Frenu', 'Frenu', 128784565, 'Sacha.Frenu@mail.fr', 0, 9);

-- --------------------------------------------------------

--
-- Structure de la table `tb_employe`
--

DROP TABLE IF EXISTS `tb_employe`;
CREATE TABLE IF NOT EXISTS `tb_employe` (
  `mpl_id` int(11) NOT NULL AUTO_INCREMENT,
  `mpl_login` varchar(20) NOT NULL,
  `mpl_nom` varchar(20) NOT NULL,
  `mpl_prenom` varchar(20) NOT NULL,
  `mpl_password` varchar(200) NOT NULL,
  PRIMARY KEY (`mpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_employe`
--

INSERT INTO `tb_employe` (`mpl_id`, `mpl_login`, `mpl_nom`, `mpl_prenom`, `mpl_password`) VALUES
(1, 'mmartin', 'Martin', 'Michel', '$2y$10$gEVJd8ILEiHyKCrECgcE/uqGHZVdpFIKnntQ5UoeCA64qvAc864Dm'),
(2, 'clopez', 'Lopez', 'Cyril', '$2y$10$klCC6VsKo7/XWsfc1u6fP.yd3tRNcfXIX/BfZZJ5XLhM9W0yzs9ha');

-- --------------------------------------------------------

--
-- Structure de la table `tb_entreprise`
--

DROP TABLE IF EXISTS `tb_entreprise`;
CREATE TABLE IF NOT EXISTS `tb_entreprise` (
  `ntr_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `ntr_adress` text NOT NULL,
  `ntr_boss` varchar(200) NOT NULL,
  `ntr_nbEmploye` int(11) NOT NULL,
  `ntr_client` tinyint(1) NOT NULL,
  `ntr_mpl_id` int(11) NOT NULL,
  PRIMARY KEY (`ntr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_entreprise`
--

INSERT INTO `tb_entreprise` (`ntr_id`, `nom`, `ntr_adress`, `ntr_boss`, `ntr_nbEmploye`, `ntr_client`, `ntr_mpl_id`) VALUES
(1, 'Amazon', '5, rue du Marignan,75012, Paris', 'Henri Dupuis', 75, 1, 1),
(2, 'Apple', '9, rue de Lamartine,69003, Lyon', 'Sophie Blanchard', 125, 0, 1),
(3, 'Facebook', '7 Rue Balzac, 75008, Paris', 'Amelie Raja', 86, 1, 1),
(4, 'LinkedIn', '19 Rue Cyrano-de-Bergerac, 75018, Paris', 'Antoine Lacet', 46, 0, 1),
(5, 'PayPal', '19, Rue de Babylone, 75007, Paris', 'Natalie Blanchard', 65, 0, 2),
(6, 'Snapchat', '5 Rue de Talleyrand, 75007, Paris', 'Remy Schelin', 17, 1, 2),
(7, 'Kinder', '6, Rue de Tunis, 75011, Paris', 'Samantha Ronie', 26, 0, 2),
(8, 'Linux', '36 ,Rue de Presles, 75015, Paris', 'Cloé Fany', 123, 1, 2),
(9, 'Samsung', '8 rue du lama 75018, Paris', 'David Bowie', 747, 1, 1),
(10, 'Youtube', '3, rue du muret, 75013, Paris', 'Albert Denoir', 23, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tb_event`
--

DROP TABLE IF EXISTS `tb_event`;
CREATE TABLE IF NOT EXISTS `tb_event` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_date` date NOT NULL,
  `tb_lieu` varchar(200) NOT NULL,
  `con_eve_id` int(11) NOT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `con_eve_id` (`con_eve_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
