-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 avr. 2018 à 11:48
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coop_emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `rue1_adresse` varchar(512) NOT NULL,
  `rue2_adresse` varchar(512) DEFAULT NULL,
  `Id_code_commune` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adresse`),
  KEY `FK_adresse_Id_code_commune` (`Id_code_commune`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `rue1_adresse`, `rue2_adresse`, `Id_code_commune`) VALUES
(3, '3 rue de la boustifaille', NULL, 1),
(4, '4 rue de la boustifaille', 'Batiment A', 2),
(15, 'ertyu', 'zertyui', 1),
(16, 'zergt', 'erty', 1),
(17, '3 rue de la boustifaille', 'cave 6', 2),
(18, 'zéergth', 'zertyuiom', 1),
(19, '3 rue de la boustifaille', 'batiment A', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `Id_code_commune` int(11) NOT NULL AUTO_INCREMENT,
  `Code_commune_INSEE` varchar(5) NOT NULL,
  `Nom_commune` varchar(255) NOT NULL,
  `Code_postal` varchar(5) NOT NULL,
  PRIMARY KEY (`Id_code_commune`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`Id_code_commune`, `Code_commune_INSEE`, `Nom_commune`, `Code_postal`) VALUES
(1, '55200', 'Patrice city', '55200'),
(2, '55200', 'Patrice ville', '55200'),
(3, '55200', 'Patrice town', '55200'),
(4, '55200', 'Patrice bourg', '55200');

-- --------------------------------------------------------

--
-- Structure de la table `coop_emploi`
--

DROP TABLE IF EXISTS `coop_emploi`;
CREATE TABLE IF NOT EXISTS `coop_emploi` (
  `id_coop` int(11) NOT NULL AUTO_INCREMENT,
  `designation_coop` varchar(255) NOT NULL,
  `telephone_coop` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`id_coop`),
  KEY `FK_coop_emploi_id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coop_emploi`
--

INSERT INTO `coop_emploi` (`id_coop`, `designation_coop`, `telephone_coop`, `email`, `id_adresse`) VALUES
(1, 'Coop\'emploi', '0606060606', 'mail@mail.com', 3);

-- --------------------------------------------------------

--
-- Structure de la table `entretient_individuel`
--

DROP TABLE IF EXISTS `entretient_individuel`;
CREATE TABLE IF NOT EXISTS `entretient_individuel` (
  `id_entretient` int(11) NOT NULL AUTO_INCREMENT,
  `date_entretient` date DEFAULT NULL,
  `rapport_entretient` varchar(2048) DEFAULT NULL,
  `id_porteur` int(11) NOT NULL,
  `id_conseiller` int(11) NOT NULL,
  PRIMARY KEY (`id_entretient`),
  KEY `FK_entretient_ndividuel_id_utilisateur` (`id_porteur`),
  KEY `FK_entretient_ndividuel_id_utilisateur_1` (`id_conseiller`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `designation_lieu` varchar(255) DEFAULT NULL,
  `place_lieu` int(11) DEFAULT NULL,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`id_lieu`),
  KEY `FK_lieu_id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `designation_lieu`, `place_lieu`, `id_adresse`) VALUES
(1, 'gymnase', 42, 3),
(2, 'salle des fetes', 42, 3);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(255) NOT NULL,
  `SIREN` varchar(9) DEFAULT NULL,
  `NIC` varchar(4) DEFAULT NULL,
  `check_digit_SIRET` varchar(1) DEFAULT NULL,
  `description_projet` varchar(2056) DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_secteur_projet` int(11) NOT NULL,
  `site_web` varchar(50) DEFAULT NULL,
  `logo` blob NOT NULL,
  `raison_social` varchar(25) DEFAULT NULL,
  `photo_1` blob,
  `photo_2` blob,
  `photo_3` blob,
  `description_photo_1` varchar(50) DEFAULT NULL,
  `description_photo_2` varchar(50) DEFAULT NULL,
  `description_photo_3` varchar(50) DEFAULT NULL,
  `parcours` varchar(100) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  PRIMARY KEY (`id_projet`),
  KEY `FK_projet_id_utilisateur` (`id_utilisateur`),
  KEY `FK_projet_id_secteur_projet` (`id_secteur_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reunion_information`
--

DROP TABLE IF EXISTS `reunion_information`;
CREATE TABLE IF NOT EXISTS `reunion_information` (
  `id_reunion` int(11) NOT NULL AUTO_INCREMENT,
  `date_heure_debut_reunion` datetime DEFAULT NULL,
  `date_heure_fin_reunion` datetime DEFAULT NULL,
  `id_createur` int(11) NOT NULL,
  `id_lieu` int(11) NOT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_reunion`),
  KEY `FK_reunion_information_id_utilisateur` (`id_createur`),
  KEY `FK_reunion_information_id_lieu` (`id_lieu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reunion_information`
--

INSERT INTO `reunion_information` (`id_reunion`, `date_heure_debut_reunion`, `date_heure_fin_reunion`, `id_createur`, `id_lieu`, `archive`) VALUES
(2, '2018-09-19 00:00:00', '2018-08-15 00:00:00', 3, 2, 1),
(3, '2018-04-19 19:19:00', '2018-04-30 18:19:00', 3, 1, 0),
(4, '2018-04-27 14:14:00', '2018-04-27 14:14:00', 3, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `secteur_projet`
--

DROP TABLE IF EXISTS `secteur_projet`;
CREATE TABLE IF NOT EXISTS `secteur_projet` (
  `id_secteur_projet` int(11) NOT NULL AUTO_INCREMENT,
  `designation_secteur_projet` varchar(255) NOT NULL,
  PRIMARY KEY (`id_secteur_projet`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur_projet`
--

INSERT INTO `secteur_projet` (`id_secteur_projet`, `designation_secteur_projet`) VALUES
(1, 'NTIC'),
(2, 'Industrie');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_statut` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `libelle_statut`) VALUES
(1, 'CDI'),
(3, 'Candidat inscrit');

-- --------------------------------------------------------

--
-- Structure de la table `type_profil`
--

DROP TABLE IF EXISTS `type_profil`;
CREATE TABLE IF NOT EXISTS `type_profil` (
  `id_type_profil` int(11) NOT NULL AUTO_INCREMENT,
  `designation_type_profil` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_profil`
--

INSERT INTO `type_profil` (`id_type_profil`, `designation_type_profil`) VALUES
(1, 'Porteur de projet'),
(2, 'Conseiller');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` char(255) NOT NULL,
  `prenom_utilisateur` char(255) NOT NULL,
  `date_naissance_utilisateur` date NOT NULL,
  `telephone_utilisateur` varchar(15) DEFAULT NULL,
  `email_utilisateur` varchar(255) DEFAULT NULL,
  `nom_profil_utilisateur` varchar(255) DEFAULT NULL,
  `mdp_profil_utilisateur` varchar(255) DEFAULT NULL,
  `type_utilisateur` varchar(1) DEFAULT NULL,
  `id_adresse` int(11) NOT NULL,
  `id_projet` int(11) DEFAULT NULL,
  `id_type_profil` int(11) NOT NULL,
  `emargement` tinyint(1) DEFAULT NULL,
  `id_reunion` int(11) DEFAULT NULL,
  `id_coop` int(11) NOT NULL,
  `id_statut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `Nom_profil_utilisateur` (`nom_profil_utilisateur`),
  KEY `FK_utilisateur_id_adresse` (`id_adresse`),
  KEY `FK_utilisateur_id_projet` (`id_projet`),
  KEY `FK_utilisateur_id_type_profil` (`id_type_profil`),
  KEY `FK_utilisateur_id_reunion` (`id_reunion`),
  KEY `FK_utilisateur_id_coop` (`id_coop`),
  KEY `FK_utilisateur_id_statut` (`id_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `date_naissance_utilisateur`, `telephone_utilisateur`, `email_utilisateur`, `nom_profil_utilisateur`, `mdp_profil_utilisateur`, `type_utilisateur`, `id_adresse`, `id_projet`, `id_type_profil`, `emargement`, `id_reunion`, `id_coop`, `id_statut`) VALUES
(2, 'porteur', 'porteur', '2018-04-01', '060660606', 'mail@mail.mail', 'porteur', '$2y$10$DFfah8TytMxPusfKlYHPIOR1r9QJigseC5Sc0XIvoUI5HgYgSaJFO', NULL, 17, NULL, 1, NULL, NULL, 1, 1),
(3, 'conseiller', 'conseiller', '2018-04-01', '0606060606', 'mail@mail.mail', 'conseiller', '$2y$10$DFfah8TytMxPusfKlYHPIOR1r9QJigseC5Sc0XIvoUI5HgYgSaJFO', NULL, 4, NULL, 2, NULL, NULL, 1, NULL),
(4, 'candidat', 'candidat', '2018-04-01', '0606060606', 'mail@mail.mail', 'rien', '$2y$10$DFfah8TytMxPusfKlYHPIOR1r9QJigseC5Sc0XIvoUI5HgYgSaJFO', NULL, 15, NULL, 1, NULL, NULL, 1, 3),
(5, 'candidatinscrit', 'candidatinscrit', '2018-04-10', '0606060606', 'mail@mail.com', NULL, NULL, NULL, 19, NULL, 1, NULL, 2, 1, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `FK_adresse_Id_code_commune` FOREIGN KEY (`Id_code_commune`) REFERENCES `commune` (`Id_code_commune`);

--
-- Contraintes pour la table `coop_emploi`
--
ALTER TABLE `coop_emploi`
  ADD CONSTRAINT `FK_coop_emploi_id_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`);

--
-- Contraintes pour la table `entretient_individuel`
--
ALTER TABLE `entretient_individuel`
  ADD CONSTRAINT `FK_entretient_ndividuel_id_utilisateur` FOREIGN KEY (`id_porteur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `FK_entretient_ndividuel_id_utilisateur_1` FOREIGN KEY (`id_conseiller`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `FK_lieu_id_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_projet_id_secteur_projet` FOREIGN KEY (`id_secteur_projet`) REFERENCES `secteur_projet` (`id_secteur_projet`),
  ADD CONSTRAINT `FK_projet_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `reunion_information`
--
ALTER TABLE `reunion_information`
  ADD CONSTRAINT `FK_reunion_information_id_lieu` FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id_lieu`),
  ADD CONSTRAINT `FK_reunion_information_id_utilisateur` FOREIGN KEY (`id_createur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_utilisateur_id_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`),
  ADD CONSTRAINT `FK_utilisateur_id_coop` FOREIGN KEY (`id_coop`) REFERENCES `coop_emploi` (`id_coop`),
  ADD CONSTRAINT `FK_utilisateur_id_projet` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id_projet`),
  ADD CONSTRAINT `FK_utilisateur_id_reunion` FOREIGN KEY (`id_reunion`) REFERENCES `reunion_information` (`id_reunion`),
  ADD CONSTRAINT `FK_utilisateur_id_statut` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id_statut`),
  ADD CONSTRAINT `FK_utilisateur_id_type_profil` FOREIGN KEY (`id_type_profil`) REFERENCES `type_profil` (`id_type_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
