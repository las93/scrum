-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Juin 2015 à 00:27
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
-- Structure de la table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_team` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `board`
--

INSERT INTO `board` (`id`, `name`, `id_role`, `id_user`, `id_team`) VALUES
(2, 'Board Product Owner', 2, 2, 1),
(3, 'Board Scrum Master', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `board_part`
--

CREATE TABLE IF NOT EXISTS `board_part` (
`id` int(10) unsigned NOT NULL,
  `id_board` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `id_statut` int(10) unsigned NOT NULL,
  `order` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `board_part`
--

INSERT INTO `board_part` (`id`, `id_board`, `name`, `id_statut`, `order`) VALUES
(1, 2, 'Parking', 4, 1),
(2, 2, 'Feasibility study', 1, 2),
(3, 2, 'To prioritize', 2, 3),
(4, 2, 'Grooming', 3, 4),
(5, 2, 'To complete', 7, 5),
(6, 2, 'Evaluation BV/C', 8, 6),
(7, 2, 'Planning', 9, 7),
(8, 3, 'Sprint backlog', 10, 1),
(9, 3, 'To do', 11, 2),
(10, 3, 'Parking', 12, 3),
(11, 3, 'Analyze', 13, 4),
(12, 3, 'Dev', 14, 5),
(13, 3, 'Dev Done', 15, 6),
(14, 3, 'Unit Test', 16, 7),
(15, 3, 'Validation', 17, 8),
(16, 3, 'Validation done', 20, 9),
(17, 3, 'Release', 21, 10),
(18, 3, 'Done', 22, 11);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL,
  `type` enum('theme','epic','user_story','task') NOT NULL DEFAULT 'user_story',
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `id_user_assign` int(10) unsigned NOT NULL,
  `color` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `id_status` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `parent_id`, `date_create`, `date_update`, `type`, `name`, `content`, `id_user_assign`, `color`, `icon`, `id_status`) VALUES
(2, 0, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'theme', 'Refonte du Front-End', '', 1, 'bg-red', 'ion-bag', 1),
(3, 0, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'theme', 'Refonte Back-Office', '', 1, 'bg-yellow', 'ion-social-dropbox', 1),
(4, 2, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'epic', 'Refonte Homepage', '', 1, 'box-orange', '', 1),
(5, 2, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'epic', 'Refonte des fiches produits', '', 1, 'box-success', '', 1),
(9, 2, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'epic', 'Nouveau panier', 'Refonte du nouveau panier', 1, 'box-warning', '', 1),
(11, 4, '2015-06-04 00:03:14', '0000-00-00 00:00:00', 'user_story', 'En tant que Jonathan, je souhaite avoir mon nouveau visuel en ligne', '', 1, '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` enum('human','engine') NOT NULL DEFAULT 'human'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `name`, `type`) VALUES
(1, 'Scrum Master', 'human'),
(2, 'Product Owner', 'human'),
(3, 'Developper', 'human'),
(4, 'Auto tester', 'engine'),
(5, 'Tester', 'human'),
(6, 'Manager', 'human'),
(7, 'DSI', 'human');

-- --------------------------------------------------------

--
-- Structure de la table `sprint`
--

CREATE TABLE IF NOT EXISTS `sprint` (
`id` int(10) unsigned NOT NULL,
  `number` int(11) NOT NULL,
  `id_team` int(11) unsigned NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `sprint`
--

INSERT INTO `sprint` (`id`, `number`, `id_team`, `start`, `end`) VALUES
(1, 1, 1, '2015-05-10', '2020-06-23');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `color` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id`, `name`, `id_role`, `color`) VALUES
(1, 'Feasibility study', 2, 'label-primary'),
(2, 'To prioritize', 2, 'label-primary'),
(3, 'Grooming', 2, 'label-primary'),
(4, 'Parking PO', 2, 'label-danger'),
(7, 'To complete', 2, 'label-warning'),
(8, 'Evaluation BV/Complexity', 2, 'label-primary'),
(9, 'Planning', 2, 'label-success'),
(10, 'Sprint backlog', 1, 'label-primary'),
(11, 'To do', 1, 'label-primary'),
(12, 'Parking SM', 1, 'label-danger'),
(13, 'Analyze', 1, 'label-primary'),
(14, 'Development', 1, 'label-primary'),
(15, 'Development done', 1, 'label-warning'),
(16, 'Unit Test', 1, 'label-primary'),
(17, 'Validation', 1, 'label-primary'),
(20, 'Validation done', 1, 'label-warning'),
(21, 'Release', 1, 'label-primary'),
(22, 'Done', 1, 'label-success');

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

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `name`) VALUES
(1, 'Team Front-Office'),
(2, 'Team Back-Office');

-- --------------------------------------------------------

--
-- Structure de la table `team_access`
--

CREATE TABLE IF NOT EXISTS `team_access` (
  `id_team` int(10) unsigned NOT NULL,
  `id_access` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `id_team` int(10) unsigned NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `id_team`, `id_role`, `lastname`, `firstname`, `login`, `password`) VALUES
(1, 1, 1, 'Paquet', 'Judicaël', 'las', 'd2a2d089807d14b1791b1db62b5500b9'),
(2, 1, 2, 'Maxime', 'Bean', 'max', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `access`
--
ALTER TABLE `access`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`id`), ADD KEY `id_role` (`id_role`), ADD KEY `id_user` (`id_user`), ADD KEY `id_team` (`id_team`);

--
-- Index pour la table `board_part`
--
ALTER TABLE `board_part`
 ADD PRIMARY KEY (`id`), ADD KEY `id_board` (`id_board`), ADD KEY `id_statut` (`id_statut`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`), ADD KEY `type` (`type`), ADD KEY `parent_id` (`parent_id`), ADD KEY `id_user_assign` (`id_user_assign`), ADD KEY `status` (`id_status`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sprint`
--
ALTER TABLE `sprint`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_team` (`id_team`,`number`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
 ADD PRIMARY KEY (`id`), ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `statut_link`
--
ALTER TABLE `statut_link`
 ADD PRIMARY KEY (`id_statut_source`,`id_statut_recipient`), ADD KEY `statut_link_ibfk_2` (`id_statut_recipient`);

--
-- Index pour la table `statut_permission`
--
ALTER TABLE `statut_permission`
 ADD PRIMARY KEY (`id`), ADD KEY `id_statut` (`id_statut`), ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team_access`
--
ALTER TABLE `team_access`
 ADD PRIMARY KEY (`id_team`,`id_access`), ADD KEY `id_access` (`id_access`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `id_team` (`id_team`), ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `access`
--
ALTER TABLE `access`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `board`
--
ALTER TABLE `board`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `board_part`
--
ALTER TABLE `board_part`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `sprint`
--
ALTER TABLE `sprint`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `board`
--
ALTER TABLE `board`
ADD CONSTRAINT `role_fk` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `board_part`
--
ALTER TABLE `board_part`
ADD CONSTRAINT `board_fk` FOREIGN KEY (`id_board`) REFERENCES `board` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `statut_fk` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user_assign`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `status_fk` FOREIGN KEY (`id_status`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sprint`
--
ALTER TABLE `sprint`
ADD CONSTRAINT `team_fk` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut`
--
ALTER TABLE `statut`
ADD CONSTRAINT `role_id` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut_link`
--
ALTER TABLE `statut_link`
ADD CONSTRAINT `statut_link_ibfk_1` FOREIGN KEY (`id_statut_source`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `statut_link_ibfk_2` FOREIGN KEY (`id_statut_recipient`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `statut_permission`
--
ALTER TABLE `statut_permission`
ADD CONSTRAINT `id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_statut` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `team_access`
--
ALTER TABLE `team_access`
ADD CONSTRAINT `team_access_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`),
ADD CONSTRAINT `team_access_ibfk_2` FOREIGN KEY (`id_access`) REFERENCES `access` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `id_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
