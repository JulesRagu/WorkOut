-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 27 jan. 2023 à 22:39
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `workout`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `categ_icons` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `categ_icons`) VALUES
(1, 'Bras', 'assets\\bras.png'),
(2, 'Dos', 'assets\\dos.png'),
(3, 'Jambes', 'assets\\jambe.png'),
(4, 'Nuque', 'assets\\nuque.png');

-- --------------------------------------------------------

--
-- Structure de la table `echauffement`
--

DROP TABLE IF EXISTS `echauffement`;
CREATE TABLE IF NOT EXISTS `echauffement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `id_Categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Echauffement_Categorie_FK` (`id_Categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `echauffement`
--

INSERT INTO `echauffement` (`id`, `nom`, `video`, `id_Categorie`) VALUES
(1, 'Bras', 'assets\\Video.mp4', 1),
(2, 'Dos', 'assets\\Video2.mp4', 2),
(3, 'Jambes', 'assets\\Video.mp4', 3),
(4, 'Nuque', 'assets\\Video.mp4', 4);

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `MDP` varchar(70) NOT NULL,
  `id_Entreprise` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employer_Entreprise_FK` (`id_Entreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employer`
--

INSERT INTO `employer` (`id`, `nom`, `prenom`, `poste`, `mail`, `MDP`, `id_Entreprise`) VALUES
(1, 'admin', 'admin', 'admin', 'admin.admin@workout.fr', 'admin', 2),
(2, 'Delux', 'paul', 'patron', 'Delux.paul@auchant.fr', 'delux', 1),
(11, 'test', 'test', 'test', 'test@test.fr', '$2y$10$38YvoP9fNmsw49/4UxWYK.bV/sI4L8mFCL/jz/AgH2Bg2r5gaDKEu', 1);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`) VALUES
(1, 'Auchan', 'orleans 45450'),
(2, 'Workout', 'orleans 45450');

-- --------------------------------------------------------

--
-- Structure de la table `pratiquer`
--

DROP TABLE IF EXISTS `pratiquer`;
CREATE TABLE IF NOT EXISTS `pratiquer` (
  `id` int(11) NOT NULL,
  `id_Echauffement` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_Echauffement`),
  KEY `pratiquer_Echauffement0_FK` (`id_Echauffement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pratiquer`
--

INSERT INTO `pratiquer` (`id`, `id_Echauffement`) VALUES
(2, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `echauffement`
--
ALTER TABLE `echauffement`
  ADD CONSTRAINT `Echauffement_Categorie_FK` FOREIGN KEY (`id_Categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `employer_Entreprise_FK` FOREIGN KEY (`id_Entreprise`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `pratiquer`
--
ALTER TABLE `pratiquer`
  ADD CONSTRAINT `pratiquer_Echauffement0_FK` FOREIGN KEY (`id_Echauffement`) REFERENCES `echauffement` (`id`),
  ADD CONSTRAINT `pratiquer_employer_FK` FOREIGN KEY (`id`) REFERENCES `employer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
