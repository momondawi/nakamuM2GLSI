-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:7979
-- Généré le : jeu. 05 jan. 2023 à 14:44
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `nakamu_DB`
--

-- --------------------------------------------------------

--
-- Structure de la table `Comment`
--

CREATE TABLE `Comment` (
  `id_comment` int(11) NOT NULL,
  `content` text,
  `created_at` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE `Message` (
  `id_message` int(11) NOT NULL,
  `messageTo` varchar(200) DEFAULT NULL,
  `messageFrom` varchar(200) DEFAULT NULL,
  `message_content` text,
  `status` tinyint(1) DEFAULT NULL,
  `upload_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `age`, `email`, `password`, `birthdate`, `role`, `photo`) VALUES
('1', 'Moustapha Adrien', 'Mboumba', 23, 'moustaphaadrienmboumba@esp.sn', 'passer123', '1999-01-01', 'admin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Post`
--

CREATE TABLE `Post` (
  `id_post` int(20) NOT NULL,
  `content_post` text,
  `created_at` int(20) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Post`
--

INSERT INTO `Post` (`id_post`, `content_post`, `created_at`, `id_user`) VALUES
(1, 'Salut c\'est moi tchoupi', 1672926755, ''),
(2, 'Tchoupi et doudou ils sont rigolos comme tout', 1672926815, ''),
(3, 'Tchoupi et doudou ils sont rigolos comme tout', 1672927315, '1'),
(4, 'Essaye 1 2 3', 1672928893, '1');

-- --------------------------------------------------------


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`id_post`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Post`
--
ALTER TABLE `Post`
  MODIFY `id_post` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `Comment`
  ADD `parent_id` int(11) NOT NULL DEFAULT '-1';

