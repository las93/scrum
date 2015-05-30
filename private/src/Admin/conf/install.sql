-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 31 Mai 2015 à 00:36
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `scrum`
--

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` enum('human','engine') NOT NULL DEFAULT 'human'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `name`, `type`) VALUES
(1, 'Scrum Master', 'human'),
(2, 'Product Owner', 'human'),
(3, 'Developper', 'human'),
(4, 'Auto tester', 'engine'),
(5, 'Tester', 'human');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_role` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id`, `name`, `id_role`) VALUES
(1, 'Feasibility study', 2),
(2, 'To prioritize', 2),
(3, 'Grooming', 2),
(4, 'Parking PO', 2),
(7, 'To complete', 2),
(8, 'Evaluation BV/Complexity', 2),
(9, 'Planning', 2),
(10, 'Sprint backlog', 1),
(11, 'To do', 1),
(12, 'Parking SM', 1),
(13, 'Analyze', 1),
(14, 'Dev', 1),
(15, 'Dev done', 1),
(16, 'Unit Test', 1),
(17, 'Validation', 1),
(20, 'Validation done', 1),
(21, 'Release', 1),
(22, 'Done', 1);

-- --------------------------------------------------------

--
-- Structure de la table `statut_link`
--

CREATE TABLE IF NOT EXISTS `statut_link` (
  `id_statut_source` int(10) unsigned NOT NULL,
  `id_statut_recipient` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut_permission`
--

CREATE TABLE IF NOT EXISTS `statut_permission` (
`id` int(10) unsigned NOT NULL,
  `id_statut` int(10) unsigned NOT NULL,
  `id_role` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `statut_permission`
--

INSERT INTO `statut_permission` (`id`, `id_statut`, `id_role`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 7, 2),
(5, 8, 2),
(6, 9, 2),
(7, 4, 2),
(8, 10, 1),
(9, 10, 3),
(10, 11, 1),
(11, 11, 3),
(12, 12, 1),
(13, 12, 3),
(14, 12, 5),
(15, 13, 1),
(16, 13, 3),
(17, 14, 1),
(18, 14, 3),
(19, 15, 1),
(20, 15, 3),
(21, 16, 1),
(22, 16, 4),
(23, 16, 5),
(24, 17, 1),
(25, 17, 5),
(26, 20, 1),
(27, 20, 3),
(28, 21, 1),
(29, 21, 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
 ADD PRIMARY KEY (`id`), ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `statut_link`
--
ALTER TABLE `statut_link`
 ADD PRIMARY KEY (`id_statut_source`,`id_statut_recipient`);

--
-- Index pour la table `statut_permission`
--
ALTER TABLE `statut_permission`
 ADD PRIMARY KEY (`id`), ADD KEY `id_statut` (`id_statut`), ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `statut_permission`
--
ALTER TABLE `statut_permission`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `statut`
--
ALTER TABLE `statut`
ADD CONSTRAINT `role_id` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut_link`
--
ALTER TABLE `statut_link`
ADD CONSTRAINT `statut_link_ibfk_1` FOREIGN KEY (`id_statut_source`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut_permission`
--
ALTER TABLE `statut_permission`
ADD CONSTRAINT `id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_statut` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
