-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 10 mars 2025 à 15:52
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maison_du_temps`
--
CREATE DATABASE IF NOT EXISTS `maison_du_temps` DEFAULT CHARACTER SET ucs2 COLLATE ucs2_general_ci;
USE `maison_du_temps`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` text NOT NULL,
  `telephone` int NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `code_postal` int NOT NULL,
  `pays` enum('andorre','belgique','france','luxembourg','monaco','suisse') NOT NULL,
  `newsletter` enum('oui','non') NOT NULL,
  `role` enum('client','admin') NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `adresse`, `ville`, `code_postal`, `pays`, `newsletter`, `role`) VALUES
(1, 'User', 'Uno', 'user1@gmail.fr', '$2y$10$NEvODLiuogHx15p4uaSAN.n.57pgcVYxUvVDYTULDLCNQu4tIhwmu', 593049384, '10 rue du terrage', 'Paris', 75010, 'france', 'oui', 'admin'),
(2, 'Client', 'Riche', 'client.riche@colombbus.org', '$2y$10$LWd9/wlB36VTbQQlXs0vIOHB92xnuRPHDjLDYWOy7u2UoZvNACCAq', 918278920, '17 avenue du Pock', 'Saint Denis', 93250, 'france', 'non', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
