-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Décembre 2017 à 08:49
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `adresse` (
  `id_adresse` int(11) NOT NULL,
  `rue1_adresse` varchar(512) NOT NULL,
  `rue2_adresse` varchar(512) DEFAULT NULL,
  `Id_code_commune` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `rue1_adresse`, `rue2_adresse`, `Id_code_commune`) VALUES
(1, '3 rue de la boustifaille', NULL, 1),
(2, '4 rue de la boustifaille', 'Batiment A', 2),
(3, '3 rue de la boustifaille', NULL, 1),
(4, '4 rue de la boustifaille', 'Batiment A', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `Id_code_commune` int(11) NOT NULL,
  `Code_commune_INSEE` varchar(5) NOT NULL,
  `Nom_commune` varchar(255) NOT NULL,
  `Code_postal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`Id_code_commune`, `Code_commune_INSEE`, `Nom_commune`, `Code_postal`) VALUES
(1, '55200', 'Patrice city', '55200'),
(2, '55200', 'Patrice ville', '55200');

-- --------------------------------------------------------

--
-- Structure de la table `coop_emploi`
--

CREATE TABLE `coop_emploi` (
  `id_coop` int(11) NOT NULL,
  `designation_coop` varchar(255) NOT NULL,
  `telephone_coop` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `coop_emploi`
--

INSERT INTO `coop_emploi` (`id_coop`, `designation_coop`, `telephone_coop`, `email`, `id_adresse`) VALUES
(1, 'Coop\'emploi', '0606060606', 'mail@mail.com', 3);

-- --------------------------------------------------------

--
-- Structure de la table `entretient_individuel`
--

CREATE TABLE `entretient_individuel` (
  `id_entretient` int(11) NOT NULL,
  `date_entretient` date DEFAULT NULL,
  `rapport_entretient` varchar(2048) DEFAULT NULL,
  `id_porteur` int(11) NOT NULL,
  `id_conseiller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entretient_individuel`
--

INSERT INTO `entretient_individuel` (`id_entretient`, `date_entretient`, `rapport_entretient`, `id_porteur`, `id_conseiller`) VALUES
(1, '2017-12-04', 'OKAY', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `designation_lieu` varchar(255) DEFAULT NULL,
  `place_lieu` int(11) DEFAULT NULL,
  `id_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `designation_lieu`, `place_lieu`, `id_adresse`) VALUES
(1, 'sale defaite', 42, 3),
(2, 'sale defaite', 42, 3);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `nom_projet` varchar(255) NOT NULL,
  `SIREN` varchar(9) DEFAULT NULL,
  `NIC` varchar(4) DEFAULT NULL,
  `check_digit_SIRET` varchar(1) DEFAULT NULL,
  `description_projet` varchar(2056) DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_secteur_projet` int(11) NOT NULL,
  `site_web` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom_projet`, `SIREN`, `NIC`, `check_digit_SIRET`, `description_projet`, `id_utilisateur`, `id_secteur_projet`, `site_web`) VALUES
(1, 'supai rhorednateur', NULL, NULL, NULL, 'des tas de choses', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reunion_information`
--

CREATE TABLE `reunion_information` (
  `id_reunion` int(11) NOT NULL,
  `date_heure_debut_reunion` datetime DEFAULT NULL,
  `date_heure_fin_reunion` datetime DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_lieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reunion_information`
--

INSERT INTO `reunion_information` (`id_reunion`, `date_heure_debut_reunion`, `date_heure_fin_reunion`, `id_utilisateur`, `id_lieu`) VALUES
(2, '2017-12-01 00:00:00', '2017-12-01 14:00:00', 1, 2),
(3, '2017-12-01 00:00:00', '2017-12-01 14:00:00', 1, 2),
(4, '2017-12-01 00:00:00', '2017-12-01 18:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `secteur_projet`
--

CREATE TABLE `secteur_projet` (
  `id_secteur_projet` int(11) NOT NULL,
  `designation_secteur_projet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secteur_projet`
--

INSERT INTO `secteur_projet` (`id_secteur_projet`, `designation_secteur_projet`) VALUES
(1, 'NTIC'),
(2, 'Industrie');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id_statut` int(11) NOT NULL,
  `libelle_statut` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `libelle_statut`) VALUES
(1, 'CDI'),
(2, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `type_profil`
--

CREATE TABLE `type_profil` (
  `id_type_profil` int(11) NOT NULL,
  `designation_type_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_profil`
--

INSERT INTO `type_profil` (`id_type_profil`, `designation_type_profil`) VALUES
(1, 'Porteur de projet'),
(2, 'Conseiller');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` char(255) NOT NULL,
  `prenom_utilisateur` char(255) NOT NULL,
  `date_naissance_utilisateur` date NOT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  `telephone_utilisateur` varchar(15) DEFAULT NULL,
  `email_utilisateur` varchar(255) DEFAULT NULL,
  `H_F` tinyint(1) DEFAULT NULL,
  `nom_profil_utilisateur` varchar(255) DEFAULT NULL,
  `mdp_profil_utilisateur` varchar(255) DEFAULT NULL,
  `type_utilisateur` varchar(1) DEFAULT NULL,
  `id_adresse` int(11) NOT NULL,
  `id_projet` int(11) DEFAULT NULL,
  `id_type_profil` int(11) NOT NULL,
  `emargement` tinyint(1) DEFAULT NULL,
  `id_reunion` int(11) DEFAULT NULL,
  `id_coop` int(11) NOT NULL,
  `id_statut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `date_naissance_utilisateur`, `actif`, `telephone_utilisateur`, `email_utilisateur`, `H_F`, `nom_profil_utilisateur`, `mdp_profil_utilisateur`, `type_utilisateur`, `id_adresse`, `id_projet`, `id_type_profil`, `emargement`, `id_reunion`, `id_coop`, `id_statut`) VALUES
(1, 'Delabellemotte', 'Jean-Paul', '2017-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2, NULL, NULL, 1, 2),
(2, 'Delabellemotte', 'Jean-Paul', '2017-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2, NULL, NULL, 1, 2),
(3, 'Delabellemotte2', 'Jean-Paul2', '2017-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2, NULL, NULL, 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`),
  ADD KEY `FK_adresse_Id_code_commune` (`Id_code_commune`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`Id_code_commune`);

--
-- Index pour la table `coop_emploi`
--
ALTER TABLE `coop_emploi`
  ADD PRIMARY KEY (`id_coop`),
  ADD KEY `FK_coop_emploi_id_adresse` (`id_adresse`);

--
-- Index pour la table `entretient_individuel`
--
ALTER TABLE `entretient_individuel`
  ADD PRIMARY KEY (`id_entretient`),
  ADD KEY `FK_entretient_ndividuel_id_utilisateur` (`id_porteur`),
  ADD KEY `FK_entretient_ndividuel_id_utilisateur_1` (`id_conseiller`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`),
  ADD KEY `FK_lieu_id_adresse` (`id_adresse`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `FK_projet_id_utilisateur` (`id_utilisateur`),
  ADD KEY `FK_projet_id_secteur_projet` (`id_secteur_projet`);

--
-- Index pour la table `reunion_information`
--
ALTER TABLE `reunion_information`
  ADD PRIMARY KEY (`id_reunion`),
  ADD KEY `FK_reunion_information_id_utilisateur` (`id_utilisateur`),
  ADD KEY `FK_reunion_information_id_lieu` (`id_lieu`);

--
-- Index pour la table `secteur_projet`
--
ALTER TABLE `secteur_projet`
  ADD PRIMARY KEY (`id_secteur_projet`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id_statut`);

--
-- Index pour la table `type_profil`
--
ALTER TABLE `type_profil`
  ADD PRIMARY KEY (`id_type_profil`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `Nom_profil_utilisateur` (`nom_profil_utilisateur`),
  ADD KEY `FK_utilisateur_id_adresse` (`id_adresse`),
  ADD KEY `FK_utilisateur_id_projet` (`id_projet`),
  ADD KEY `FK_utilisateur_id_type_profil` (`id_type_profil`),
  ADD KEY `FK_utilisateur_id_reunion` (`id_reunion`),
  ADD KEY `FK_utilisateur_id_coop` (`id_coop`),
  ADD KEY `FK_utilisateur_id_statut` (`id_statut`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `Id_code_commune` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `coop_emploi`
--
ALTER TABLE `coop_emploi`
  MODIFY `id_coop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `entretient_individuel`
--
ALTER TABLE `entretient_individuel`
  MODIFY `id_entretient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `reunion_information`
--
ALTER TABLE `reunion_information`
  MODIFY `id_reunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `secteur_projet`
--
ALTER TABLE `secteur_projet`
  MODIFY `id_secteur_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id_statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_profil`
--
ALTER TABLE `type_profil`
  MODIFY `id_type_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
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
  ADD CONSTRAINT `FK_reunion_information_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
