-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 07 déc. 2019 à 22:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tilk`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `description_commentaire` varchar(50) NOT NULL,
  `idpost_commentaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `description_commentaire`, `idpost_commentaire`) VALUES
(1, 'Eteint et rallume.', 10),
(2, 'bla bla bla bla ', 10),
(3, 'tetsetestes', 7),
(4, 'oui ahahaah', 7),
(5, 'rdcrvrfvtf fvtfvtfv', 7),
(6, 'testetsets', 7),
(7, 'afafafafa', 7);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `admin_personne` int(10) NOT NULL,
  `utilisateur_personne` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `titre_post` varchar(45) NOT NULL,
  `description_post` varchar(200) NOT NULL,
  `idutil` int(11) DEFAULT NULL,
  `idcom_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `titre_post`, `description_post`, `idutil`, `idcom_post`) VALUES
(7, 'Probleme', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 2, 0),
(8, '404 error', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 2, 0),
(9, 'Php Laravel', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 3, 0),
(10, 'Mailer non valide', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 2, 0),
(11, 'Boostrap over', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 3, 0),
(12, 'Wordpress down', 'Ma soeur a couper ma connexion internet et la page 404 ne part pas.', 4, 0),
(13, 'testqwe', 'jhsdjfhhbjfhbsjdhfb', 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(20) NOT NULL,
  `prenom_utilisateur` varchar(20) NOT NULL,
  `email_utilisateur` varchar(50) NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `token_utilisateur` varchar(100) DEFAULT NULL,
  `tokenExpire` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `mdp_utilisateur`, `token_utilisateur`, `tokenExpire`) VALUES
(1, 'Rodrigues', 'Ivane', 'ivane_rodrigues@hotmail.com', 'test123', 'lkjfjghlydfusjhglkausdfhgljashdf', ''),
(2, 'Mario ', 'Yves', 'ivane@hotmail.com', '12345', NULL, ''),
(3, 'sami', 'sese', 'ii@hotmail.com', '12345', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `id_utilisateur` (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
