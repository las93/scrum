-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Juin 2015 à 10:48
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cdcol`
--

-- --------------------------------------------------------

--
-- Structure de la table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

-- --------------------------------------------------------

--
-- Structure de la table `complement_info`
--

CREATE TABLE IF NOT EXISTS `complement_info` (
  `id` int(10) unsigned NOT NULL,
  `code` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offer_complement_info`
--

CREATE TABLE IF NOT EXISTS `offer_complement_info` (
`id` int(10) unsigned NOT NULL,
  `locale_id` int(10) unsigned NOT NULL DEFAULT '1',
  `offer_id` int(10) unsigned NOT NULL,
  `cmplt_code` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `cmplt_value` text COLLATE latin1_general_ci NOT NULL,
  `cmplt_value_catalog` text COLLATE latin1_general_ci NOT NULL,
  `ts_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ts_last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ts_last_updated_catalog` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `offer_complement_info`
--

INSERT INTO `offer_complement_info` (`id`, `locale_id`, `offer_id`, `cmplt_code`, `cmplt_value`, `cmplt_value_catalog`, `ts_inserted`, `ts_last_updated`, `ts_last_updated_catalog`) VALUES
(1, 1, 0, 'ez', 'ze\r\n', '', '2014-12-08 15:35:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, 'aze', 'aze', '', '2014-12-08 15:35:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 56, 'qsdqsd', 'qsdqsd', '', '2014-12-08 15:42:11', '2014-12-17 23:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `product_complement_info`
--

CREATE TABLE IF NOT EXISTS `product_complement_info` (
`id` int(10) unsigned NOT NULL,
  `locale_id` int(10) unsigned NOT NULL DEFAULT '1',
  `product_id` int(10) unsigned NOT NULL,
  `cmplt_code` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `cmplt_value` text COLLATE latin1_general_ci NOT NULL,
  `cmplt_value_catalog` text COLLATE latin1_general_ci NOT NULL,
  `ts_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ts_last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ts_last_updated_catalog` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `complement_info`
--
ALTER TABLE `complement_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code_UNIQUE` (`code`);

--
-- Index pour la table `offer_complement_info`
--
ALTER TABLE `offer_complement_info`
 ADD PRIMARY KEY (`id`,`locale_id`), ADD UNIQUE KEY `idx_unique_offer_id_code` (`offer_id`,`cmplt_code`);

--
-- Index pour la table `product_complement_info`
--
ALTER TABLE `product_complement_info`
 ADD PRIMARY KEY (`id`,`locale_id`), ADD UNIQUE KEY `idx_unique_product_id_code` (`product_id`,`cmplt_code`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `offer_complement_info`
--
ALTER TABLE `offer_complement_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `product_complement_info`
--
ALTER TABLE `product_complement_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;--
-- Base de données :  `helium`
--

-- --------------------------------------------------------

--
-- Structure de la table `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('predefined','free') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `type`) VALUES
(1, 'Taille de l''écran', 'predefined'),
(2, 'Marque', 'predefined'),
(3, 'Numéro du modèle de l''article', 'predefined'),
(4, 'Séries', 'predefined'),
(5, 'Couleur', 'predefined'),
(6, 'Garantie constructeur', 'predefined'),
(7, 'Système d''exploitation', 'predefined'),
(8, 'Plate-forme du matériel informatique', 'predefined'),
(9, 'Description du clavier', 'predefined'),
(10, 'Marque du processeur', 'predefined'),
(11, 'Vitesse du processeur', 'predefined'),
(12, 'Nombre de coeurs', 'predefined'),
(13, 'Taille de la mémoire vive', 'predefined'),
(14, 'Taille du disque dur', 'predefined'),
(15, 'Type d''écran', 'predefined'),
(16, 'Description de la carte graphique', 'predefined'),
(17, 'Type de connectivité', 'predefined'),
(18, 'Type de technologie sans fil', 'predefined'),
(19, 'Bluetooth', 'predefined'),
(20, 'Interface du matériel informatique', 'predefined'),
(21, 'Durée de vie moyenne (en heures)', 'predefined'),
(22, 'Item dimensions L x W x H', 'predefined'),
(23, 'Poids du produit', 'predefined');

-- --------------------------------------------------------

--
-- Structure de la table `attribute_category`
--

CREATE TABLE IF NOT EXISTS `attribute_category` (
  `id_attribute` int(10) unsigned NOT NULL,
  `id_category` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `attribute_offer`
--

CREATE TABLE IF NOT EXISTS `attribute_offer` (
  `id_attribute` int(10) unsigned NOT NULL,
  `id_offer` int(10) unsigned NOT NULL,
  `id_attribute_value` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `attribute_offer`
--

INSERT INTO `attribute_offer` (`id_attribute`, `id_offer`, `id_attribute_value`) VALUES
(1, 1, 1),
(2, 1, 5),
(3, 1, 6),
(4, 1, 7),
(5, 1, 8),
(6, 1, 9),
(7, 1, 10),
(8, 1, 11),
(9, 1, 12),
(10, 1, 13),
(11, 1, 14),
(12, 1, 15),
(13, 1, 16),
(14, 1, 17),
(15, 1, 18),
(16, 1, 19),
(17, 1, 20),
(18, 1, 21),
(19, 1, 22),
(20, 1, 23),
(21, 1, 24),
(22, 1, 25),
(23, 1, 26);

-- --------------------------------------------------------

--
-- Structure de la table `attribute_value`
--

CREATE TABLE IF NOT EXISTS `attribute_value` (
`id` int(10) unsigned NOT NULL,
  `id_attribute` int(10) unsigned NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `id_attribute`, `value`) VALUES
(1, 1, '7 pouces'),
(2, 1, '9 pouces'),
(3, 1, '10 pouces'),
(4, 1, '19 pouces'),
(5, 2, 'Asus'),
(6, 3, 'ME372CL-1A006A'),
(7, 4, 'Tablette'),
(8, 5, 'Blanc'),
(9, 6, 'Garantie Fabricant : 1 an(s)'),
(10, 7, 'Android'),
(11, 8, 'Tablette tactile'),
(12, 9, 'AZERTY'),
(13, 10, 'Intel'),
(14, 11, '1.6 GHz'),
(15, 12, '2'),
(16, 13, '1024 MB'),
(17, 14, '16 GB'),
(18, 15, 'Ecran tactile'),
(19, 16, 'NON'),
(20, 17, 'Bluetooth, Wifi 802.11 b/g/n'),
(21, 18, '802.11B, 802.11G, 802.11n'),
(22, 19, 'Oui'),
(23, 20, 'USB 2.0'),
(24, 21, '11 heures'),
(25, 22, '12 x 19.8 x 1 millimeters'),
(26, 23, '340 grammes');

-- --------------------------------------------------------

--
-- Structure de la table `billing_address`
--

CREATE TABLE IF NOT EXISTS `billing_address` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'Asus'),
(2, 'Gambolex'),
(3, 'Time2'),
(4, 'LG');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(10) unsigned NOT NULL,
  `id_cart_status` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_billing_address` int(10) unsigned NOT NULL,
  `id_site` int(10) unsigned NOT NULL,
  `id_currency` int(10) unsigned NOT NULL,
  `id_insert_channel_id` int(10) unsigned NOT NULL,
  `id_channel_id` int(10) unsigned NOT NULL,
  `id_cart_parent` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enable` bit(1) NOT NULL,
  `synchronize` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cart_status`
--

CREATE TABLE IF NOT EXISTS `cart_status` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(10) unsigned NOT NULL,
  `id_category` int(10) unsigned NOT NULL,
  `id_shortcuts_category` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `enable` bit(1) NOT NULL,
  `visible` bit(1) NOT NULL,
  `order` int(10) unsigned NOT NULL,
  `section` int(10) unsigned NOT NULL,
  `route_alias` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `id_category`, `id_shortcuts_category`, `name`, `enable`, `visible`, `order`, `section`, `route_alias`) VALUES
(1, 0, 0, 'Musique, DVD', b'1', b'1', 2, 1, ''),
(2, 0, 0, 'Jeux vidéo', b'1', b'1', 3, 1, ''),
(3, 0, 0, 'High-Tech ', b'1', b'1', 4, 1, ''),
(4, 0, 0, 'Enfants et Bébés', b'1', b'1', 5, 1, ''),
(5, 0, 0, 'Maison, Animalerie', b'1', b'1', 6, 1, ''),
(6, 0, 0, 'Beauté, Santé', b'1', b'1', 7, 1, ''),
(7, 0, 0, 'Mode', b'1', b'1', 8, 1, ''),
(8, 0, 0, 'Montres et Bijoux', b'1', b'1', 9, 1, ''),
(9, 0, 0, 'Sports et Loisirs', b'1', b'1', 10, 1, ''),
(10, 0, 0, 'Auto et Moto', b'1', b'1', 11, 1, ''),
(11, 0, 0, 'Livres', b'1', b'1', 1, 1, ''),
(12, 11, 0, 'Tous les livres', b'1', b'1', 1, 1, 'livre-achat-occasion-litterature-roman'),
(13, 11, 0, 'Livres anglais et étrangers', b'1', b'1', 2, 1, 'livres-anglais-etranger'),
(14, 11, 0, 'Manuels scolaires et parascolaires', b'1', b'1', 3, 1, 'ecole-cahiers-soutien-scolaire-livre'),
(15, 11, 0, 'Livres audios', b'1', b'1', 4, 1, 'livre-audio-contes-apprendre-musical'),
(16, 1, 0, 'CD & Viniles', b'1', b'1', 1, 1, ''),
(17, 1, 0, 'Musique classique', b'1', b'1', 2, 1, ''),
(18, 1, 0, 'Téléchargement de musiques', b'1', b'1', 3, 1, ''),
(19, 1, 0, 'Instruments de musiques & sono', b'1', b'1', 4, 1, ''),
(20, 1, 0, 'DVD & Blu-ray', b'1', b'1', 5, 2, ''),
(21, 2, 0, 'Tous les jeux vidéos', b'1', b'1', 1, 1, ''),
(22, 2, 0, 'Consoles et Accessoires', b'1', b'1', 1, 1, ''),
(23, 2, 0, 'Jeux PC', b'1', b'1', 1, 1, ''),
(24, 2, 0, 'Hélium rachète', b'1', b'1', 1, 2, ''),
(25, 1, 0, 'Séries TV', b'1', b'1', 6, 2, ''),
(26, 1, 0, 'Blu-ray', b'1', b'1', 7, 2, ''),
(27, 11, 0, 'Hélium rachète vos livres', b'1', b'1', 4, 2, 'Helium-Rachete-Reprise-Livres'),
(28, 3, 0, 'Téléphones portables & fixes', b'1', b'1', 1, 1, ''),
(29, 3, 0, 'Photo & Caméscopes', b'1', b'1', 2, 1, ''),
(30, 3, 0, 'TV & Home Cinéma', b'1', b'1', 3, 1, ''),
(31, 3, 0, 'Audio & Hifi', b'1', b'1', 4, 1, ''),
(32, 3, 0, 'GPS & Auto', b'1', b'1', 5, 1, ''),
(33, 3, 0, 'Instruments de musique & Sono', b'1', b'1', 6, 1, ''),
(34, 3, 0, 'Objets connectés', b'1', b'1', 7, 1, ''),
(35, 3, 0, 'Tous les accessoires High-Tech', b'1', b'1', 8, 1, ''),
(36, 3, 0, 'Tous l''univers High-Tech', b'1', b'1', 9, 1, ''),
(37, 3, 0, 'Ordinateurs portables & Tablettes', b'1', b'1', 10, 2, ''),
(38, 37, 0, 'Tablettes', b'1', b'1', 1, 2, ''),
(39, 3, 0, 'Ordinateurs de bureaux & Ecrans', b'1', b'1', 11, 2, ''),
(40, 3, 0, 'Stockage & Réseaux', b'1', b'1', 12, 2, ''),
(41, 3, 0, 'Composants PC', b'1', b'1', 13, 2, ''),
(42, 3, 0, 'Imprimantes & Encres', b'1', b'1', 14, 2, ''),
(43, 3, 0, 'Logiciels', b'1', b'1', 15, 2, ''),
(44, 3, 0, 'Fournitures scolaires et de bureau', b'1', b'1', 16, 2, ''),
(45, 3, 0, 'Jeux PC', b'1', b'1', 17, 2, ''),
(46, 3, 0, 'Tous les accessoires informatiques', b'1', b'1', 18, 2, ''),
(47, 3, 0, 'Tous l''univers informatique', b'1', b'1', 19, 2, ''),
(48, 4, 0, 'Jeux et jouets', b'1', b'1', 1, 1, ''),
(49, 4, 0, 'Bébé & puériculture', b'1', b'1', 2, 1, ''),
(50, 4, 0, 'Vêtements et Chaussures', b'1', b'1', 3, 1, ''),
(51, 4, 0, 'Livres', b'1', b'1', 4, 1, ''),
(52, 4, 0, 'DVD', b'1', b'1', 5, 1, ''),
(53, 4, 0, 'Liste de naissance', b'1', b'1', 6, 1, ''),
(54, 4, 0, 'Hélium famille', b'1', b'1', 7, 1, ''),
(55, 5, 0, 'Petit électroménager', b'1', b'1', 1, 1, ''),
(56, 5, 0, 'Gros électroménager', b'1', b'1', 2, 1, ''),
(57, 5, 0, 'Arts culinéaires et Arts de la table', b'1', b'1', 3, 1, ''),
(58, 5, 0, 'Ameublement et Décoration', b'1', b'1', 4, 1, ''),
(59, 5, 0, 'Linge de maison', b'1', b'1', 5, 1, ''),
(60, 5, 0, 'Luminaires & Eclairage', b'1', b'1', 6, 1, ''),
(61, 5, 0, 'Jardin', b'1', b'1', 7, 1, ''),
(62, 5, 0, 'Tous les produits Cuisine et Maison', b'1', b'1', 8, 1, ''),
(63, 5, 0, 'Outillage électroportatif', b'1', b'1', 9, 2, ''),
(64, 5, 0, 'Outillage à main', b'1', b'1', 10, 2, ''),
(65, 5, 59, 'Luminaires et Eclairage', b'1', b'1', 11, 2, ''),
(66, 5, 0, 'Tous les produits Bricolage', b'1', b'1', 12, 2, ''),
(67, 5, 0, 'Tous les animaux', b'1', b'1', 13, 3, ''),
(68, 6, 0, 'Beautés et Parfum', b'1', b'1', 1, 1, ''),
(69, 6, 0, 'Beauté prestige', b'1', b'1', 2, 1, ''),
(70, 6, 0, 'Santé et Soin du corps', b'1', b'1', 3, 1, ''),
(71, 6, 0, 'Entretien de la maison', b'1', b'1', 4, 1, ''),
(72, 6, 0, 'Alimentation', b'1', b'1', 5, 1, ''),
(73, 6, 0, 'Economisez en vous abonnant', b'1', b'1', 6, 2, ''),
(74, 7, 0, 'Vêtements', b'1', b'1', 1, 1, ''),
(75, 7, 0, 'Chaussures', b'1', b'1', 2, 1, ''),
(76, 7, 0, 'Maroquinerie', b'1', b'1', 3, 1, ''),
(77, 7, 0, 'Bagages', b'1', b'1', 4, 1, ''),
(78, 8, 0, 'Montres', b'1', b'1', 1, 1, ''),
(79, 8, 0, 'Bijoux', b'1', b'1', 2, 1, ''),
(80, 9, 0, 'Fitness et Musculation', b'1', b'1', 1, 1, ''),
(81, 9, 0, 'Football', b'1', b'1', 2, 1, ''),
(82, 9, 0, 'Camping et Randonnée', b'1', b'1', 3, 1, ''),
(83, 9, 0, 'Cyclisme', b'1', b'1', 4, 1, ''),
(84, 9, 0, 'Vêtements de sport', b'1', b'1', 5, 1, ''),
(85, 9, 0, 'Running', b'1', b'1', 6, 1, ''),
(86, 9, 0, 'Electronique', b'1', b'1', 7, 1, ''),
(87, 9, 0, 'Golf', b'1', b'1', 8, 1, ''),
(88, 9, 0, 'Tous les Sports et Loisirs', b'1', b'1', 9, 1, ''),
(89, 10, 0, 'Pièces et accessoires Auto', b'1', b'1', 1, 1, ''),
(90, 10, 0, 'Outils et dépannage', b'1', b'1', 2, 1, ''),
(91, 10, 0, 'Pièces et accessoires Auto', b'1', b'1', 3, 1, ''),
(92, 10, 0, 'GPS & Auto', b'1', b'1', 4, 1, ''),
(93, 30, 0, 'Téléviseurs', b'1', b'1', 4, 1, ''),
(94, 31, 0, 'Enceintes', b'1', b'1', 1, 1, ''),
(95, 94, 0, 'Barres de son', b'1', b'1', 2, 1, ''),
(96, 93, 95, 'Barres de son', b'1', b'1', 1, 1, ''),
(97, 93, 0, 'Ensembles Home Cinéma', b'1', b'1', 1, 1, ''),
(98, 30, 0, 'Lecteurs et Enregistreurs Blu-ray', b'1', b'1', 4, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `channel`
--

CREATE TABLE IF NOT EXISTS `channel` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'France');

-- --------------------------------------------------------

--
-- Structure de la table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `merchant`
--

CREATE TABLE IF NOT EXISTS `merchant` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `legal_form` varchar(255) NOT NULL,
  `store_capital_account` decimal(10,0) NOT NULL,
  `store_rcs_certificate` varchar(255) NOT NULL,
  `store_vat_certificate` varchar(255) NOT NULL,
  `store_cnil_certificate` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL,
  `contact_civ` varchar(255) NOT NULL,
  `contact_firstname` varchar(100) NOT NULL,
  `contact_lastname` varchar(100) NOT NULL,
  `contact_function` varchar(100) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_address2` varchar(255) NOT NULL,
  `contact_zip` varchar(10) NOT NULL,
  `contact_city` varchar(100) NOT NULL,
  `contact_country` varchar(100) NOT NULL,
  `contact_phone` varchar(25) NOT NULL,
  `contact_fax` varchar(25) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `store_cgv` varchar(255) NOT NULL,
  `store_phone_taxed` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `merchant`
--

INSERT INTO `merchant` (`id`, `name`, `legal_form`, `store_capital_account`, `store_rcs_certificate`, `store_vat_certificate`, `store_cnil_certificate`, `store_url`, `contact_civ`, `contact_firstname`, `contact_lastname`, `contact_function`, `contact_address`, `contact_address2`, `contact_zip`, `contact_city`, `contact_country`, `contact_phone`, `contact_fax`, `contact_email`, `store_cgv`, `store_phone_taxed`) VALUES
(1, 'Helium', '', '0', '', '', '', 'http://www.helium.fr', '', 'Judicaël', 'Paquet', 'CEO', '', '', '93400', 'Saint Ouen', 'France', '', '', 'helium@gmail.com', '', ''),
(2, 'Maily', '', '0', '', '', '', 'http://www.maily.fr', '', 'Maily', 'Huynh', 'CEO', '', '', '75015', 'Paris', 'France', '', '', 'maily@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
`id` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `id_merchant` int(10) unsigned NOT NULL,
  `id_offer_status` int(10) unsigned NOT NULL,
  `enable` bit(1) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `quantity_public` int(10) unsigned NOT NULL,
  `quantity_reserved` int(10) unsigned NOT NULL,
  `quantity_confirmed` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_description` varchar(2500) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `gift_possible` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `offer`
--

INSERT INTO `offer` (`id`, `id_product`, `id_merchant`, `id_offer_status`, `enable`, `date_create`, `date_update`, `quantity_public`, `quantity_reserved`, `quantity_confirmed`, `name`, `short_description`, `description`, `price`, `gift_possible`) VALUES
(1, 1, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '174.56', b'1'),
(2, 2, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '14.13', b'1'),
(3, 3, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 0, 0, '', '', '', '165.83', b'1'),
(4, 4, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 0, 0, '', '', '', '134.99', b'1'),
(5, 5, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '58.33', b'1'),
(6, 6, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '108.33', b'1'),
(7, 7, 1, 2, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, '', '', '', '137.49', b'1'),
(8, 7, 2, 2, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '143.11', b'1'),
(9, 8, 1, 1, b'1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 0, 0, '', '', '', '189.83', b'1');

-- --------------------------------------------------------

--
-- Structure de la table `offer_category`
--

CREATE TABLE IF NOT EXISTS `offer_category` (
`id_category` int(10) unsigned NOT NULL,
  `id_offer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offer_status`
--

CREATE TABLE IF NOT EXISTS `offer_status` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `offer_status`
--

INSERT INTO `offer_status` (`id`, `name`) VALUES
(1, 'en stock'),
(2, 'restockage');

-- --------------------------------------------------------

--
-- Structure de la table `offer_vat_country`
--

CREATE TABLE IF NOT EXISTS `offer_vat_country` (
  `id_offer` int(10) unsigned NOT NULL,
  `id_country` int(10) unsigned NOT NULL,
  `id_vat` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offer_vat_country`
--

INSERT INTO `offer_vat_country` (`id_offer`, `id_country`, `id_vat`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(10) unsigned NOT NULL,
  `id_purchase` int(10) unsigned NOT NULL,
  `id_order_status` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enable` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
`id` int(10) unsigned NOT NULL,
  `order_cart` int(10) unsigned NOT NULL,
  `id_order_status` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enable` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `order_detail_unit`
--

CREATE TABLE IF NOT EXISTS `order_detail_unit` (
`id` int(10) unsigned NOT NULL,
  `id_cart_detail` int(10) unsigned NOT NULL,
  `id_order_status` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enable` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(10) unsigned NOT NULL,
  `id_brand` int(10) unsigned NOT NULL,
  `id_main_category` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_description` varchar(2500) NOT NULL,
  `description` text NOT NULL,
  `ean13` varchar(50) NOT NULL,
  `market_price` decimal(10,2) NOT NULL,
  `reference` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `id_brand`, `id_main_category`, `date_create`, `date_update`, `name`, `short_description`, `description`, `ean13`, `market_price`, `reference`) VALUES
(1, 1, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Asus FonePad 7 ME372CL-1A006A Tablette tactile 7" 16 Go, Android, Wi-Fi, Blanc - Fonction téléphone ', '<ul><li>Ecran tactile 7 pouces\r\n                                        <li>Fonction téléphone avec connexion 4G intégrée</li>\r\n                                        <li>Stockage et mémoire : disque dur 16 Go, RAM 1 Go</li>\r\n                                        <li>Processeur : Intel Clover Trail+ Z2560 1.6 Ghz</li>\r\n                                        <li>Connectique : Wifi 802.11a/b/g/n, Bluetooth 3.0</li>\r\n                                        <li>Système d''exploitation : Android 4.3 Jelly Bean</li>\r\n                                        <li>Nombre de ports : 1 x micro USB ; 1 x Audio jack ; Micro-SD (jusqu''à 64 Go)</li>\r\n                                        <li>Autonomie : 11 heures</li></ul>', '<h3 class="a-spacing-small">ASUS Fonepad 7 ME372CL</h3>\r\n                                            <h5 class="a-spacing-mini a-color-secondary">Le meilleur des technologies mobiles</h5>\r\n                                            <p class="a-spacing-base">\r\n                                                D&eacute;couvrez le Fonepad 7, la combinaison astucieuse et innovante d&#39;un smartphone et d&#39;une tablette tactile, regroupant toutes les fonctionnalit&eacute;s que vous attendez de ces deux appareils dans un format 7&quot; pratique.\r\n                                            </p>\r\n                                                            <h5 class="a-spacing-mini a-color-secondary">Design ergonomique</h5>\r\n                                            <p class="a-spacing-base">\r\n                                                Le Fonepad 7 arbore des courbes agr&eacute;ables au toucher assurant une excellente prise en main.\r\n                                            </p\r\n                                                            <h5 class="a-spacing-mini a-color-secondary">Autonomie prolongée</h5>\r\n                                            <p class="a-spacing-base">\r\n                                                Le Fonepad 7 vous offre une autonomie pouvant aller jusqu&#39;&agrave; 28 heures de discussion en mode 3G et jusqu&#39;&agrave; 10 heures en lecture vid&eacute;o. Il pourra ainsi &ecirc;tre utilis&eacute; toute la journ&eacute;e.\r\n                                            </p>\r\n                                                            <h4 class="a-spacing-mini">L''ASUS Fonepad 7 ME372CL en bref</h4>\r\n                                        <ul>\r\n                                            <li><span class="a-size-base a-color-secondary">Processeur Intel Atom pour une connexion internet et un chargement des applications rapides</span></li>\r\n                                            <li><span class="a-size-base a-color-secondary">Fonction téléphone avec connexion 3G intégrée</span></li>\r\n                                            <li><span class="a-size-base a-color-secondary">Ecran 7'''' HD à technologie IPS offrant un angle de vision de 178°</span></li>\r\n                                            <li><span class="a-size-base a-color-secondary">Immersion audio parfaite avec la technologie ASUS SonicMaster</span></li>\r\n                                            <li><span class="a-size-base a-color-secondary">Des photos de grande qualité avec les capteurs de 1,2 et 5 mégapixels (avant et arrière)</span></li>\r\n                                        </ul>', '1234553', '207.50', 'B00JZRH6K6'),
(2, 2, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'IVSO Slim Smart Cover Housse pour ASUS Fonepad 7 LTE ME372CL Tablette (Noir)', 'Taille: Pour ASUS Fonepad 7 LTE ME372CL<br/><br/>\r\n                                        Couleur: Noir<br/><br/>\r\n                                      <ul>\r\n                                            <li>Fabriqué Spécialement pour ASUS Fonepad 7 LTE ME372CL tablette</li>\r\n                                            <li>Etui Housse en Cuir Ultra-mince, avec Support de Multi-angle destiné à la vision la plus confortable</li>\r\n                                            <li>Etui Housse en cuir de qualité avec la doublure en microfibre</li>\r\n                                            <li>Entailles taillées précisement pour tous les contrôles et fonctions necessaires</li>\r\n                                            <li>Protéger complètement votre ASUS Fonepad 7 LTE ME372CL tablette contre les pousières, les rayures et les chocs</li>\r\n                                       </ul>', 'IVSO Slim Smart Cover Housse pour ASUS Fonepad 7 LTE ME372CL Tablette<br/><br/>\r\n                                        Fabriqué spécialement pour votre ASUS Fonepad 7 LTE ME372CL tablette, cet étui unit la praticabilité à la beauté. C''est un produit élaboré en cuir de qualité. Sa doublure en microfibre vous assure le confort et vous offre une protection additionelle. Les entailles taillées précisement sont à votre disposition pour tous les contrôles et fonctions necessaires. Cet étui housse est capable de protéger durablement votre ASUS Fonepad 7 LTE ME372CL tablette.', '1234553', '24.99', 'JID00DZA8'),
(3, 1, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Asus Fonepad 7 LTE ME372CL-1B020A 17,8 cm (7'''') Tablette Tactile (Intel Atom Z2560, 1,6GHz, 1Go RAM,', '', '', '84934', '0.00', 'BDLKSD99S'),
(4, 1, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Asus MeMO Pad 8 ME181CX-1B018A Tablette tactile 8" 16 Go, Android, Wi-Fi, Blanc', '<ul>\r\n                                            <li>Ecran tactile 8 pouces\r\n                                          <li>Stockage et mémoire : disque dur 16 Go, RAM 1 Go\r\n                                            <li>Processeur : Intel Bay Trail T Z3745 1.33 Ghz\r\n                                           <li>Connectique : Wifi 802.11b/g/n, Bluetooth 4.0\r\n                                           <li>Système d''exploitation : Android 4.4 Kit Kat\r\n                                           <li>Nombre de ports : 1 x micro USB ; 1 x Audio jack\r\n                                            <li>Autonomie : 9 heures\r\n                                        </ul>', 'ASUS MeMO Pad 8 ME181CX<br/><br/>\r\n                                                        Design et simplicité d''utilisation<br/>\r\n                                                        La tablette ASUS MeMO Pad 8 ME181CX est pensée pour les personnes exigeantes. Son châssis 8" est étonnamment léger, et elle intègre des fonctionnalités et technologies habituellement retrouvées sur des tablettes haut de gamme. La tablette ASUS MeMO Pad 8 ME181CX combine un châssis glossy élégant à un écran HD 1280 x 800.<br/><br/>\r\n                                                        Autonomie prolongée<br/>\r\n                                                        Avec une autonomie pouvant aller jusqu''à 9 heures, la tablette ASUS MeMO Pad 8 ME181CX vous permet de vous divertir tout au long de la journée. Vous pourrez surfer sur internet, jouer à des jeux ou encore regarder des vidéos.<br/><br/>\r\n                                                        Angle panoramique<br/>\r\n                                                        L''écran de la tablette ASUS MeMO Pad 8 ME181CX dispose de la technologie IPS qui assure un angle de vision panoramique de 178°. Grâce à lui, les personnes légèrement excentrées pourront parfaitement profiter de la même qualité d''images et de couleurs que les personnes en face de la tablette.', '8493445', '149.17', 'DSSS890Q'),
(5, 3, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Asus MeMO Pad 8 ME181CX-1B018A Tablette tactile 8" 16 Go, Android, Wi-Fi, Blanc', '<ul>\r\n                                            <li>A23 1,2 GHz Dual Core. Google Android 4.4 du système d''exploitation. 800 x 480 16:9 écran tactile capacitif.\r\n                                             <li>512 Mo de RAM. 8 Go de stockage interne (env. 5 Go de stockage utilisable) extensible jusqu''à 32 Go\r\n                                             <li>Compatibilité WiFi. Bluetooth. Compatibilité 3G (dongle externe requise).\r\n                                             <li>Prise en charge des jeux 3D avec G Capteurs\r\n                                             <li>Caméras double (avant face à la caméra - face 0.3MP caméra de recul - 0.3MP)\r\n                                       </ul>', 'Présentation de la nouvelle Time2Touch 7" Dual Core Android PC tablette avec Bluetooth<br/><br/>\r\n\r\n                                            Le plus récent ajout à notre "collection tablette 7 est notre meilleur modèle pour l''instant.<br/>\r\n                                            Avec son processeur Dual Core 1,2 GHz ultra-rapide et massif de 512 Mo de RAM, 8 Go de stockage interne et sur le stockage de 32 Go extensible, la connectivité Bluetooth, un gameplay brillant, écran haute définition magnifiquement magnifique, et avec le Google Playstore les possibilités sont infinies - parfait pour toute la famille<br/><br/>\r\n                                            \r\n                                            Afficher<br/> \r\n                                            Le super sensible 7 "tactile capacitif vous donne la liberté de naviguer sur la tablette avec facilité, rendant le visionnement de vos médias rapide et facile. L''brillamment coloré résolution de 800 x 480 permet à vos photos et des films à plus nette et plus brillante que jamais. <br/><br/>\r\n                                            \r\n                                            Applications <br/>\r\n                                            Exécution de la toute dernière 4.4 Kitkat Système d''exploitation Android, vous pouvez télécharger le 1000s d''applications disponibles pour vous sur le Play Store de Google, vous aurez l''embarras du choix et avec le processeur de 1,2 GHz, il n''a jamais été plus rapide! Jeux fonctionnent mieux que jamais, vous donnant un gameplay vraiment immersive.<br/><br/> \r\n                                            \r\n                                            connectivité <br/>\r\n                                            Ne jamais être en contact à nouveau avec la tablette Time2Touch avec son, capacité 3G WiFi intégré via un dongle externe, et maintenant pour la première fois la technologie Bluetooth inclus pour vous donner le plus de couverture pour vous garder de parler, de socialiser et jouer partout où vous allez.<br/><br/> \r\n                                            \r\n                                            Le forfait comprend: <br/>\r\n                                            Time2Touch SC744B 7 "Android 4.4 Tablet PC <br/>\r\n                                            Adaptateur secteur <br/>\r\n                                            Câble USB <br/>\r\n                                            Manuel d''instruction en Français en format PDF envoyé par e-mail le jour de l''expédition <br/>\r\n                                            12 mois de garantie\r\n                                  ', '278392', '99.99', 'IOIOO989'),
(6, 1, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pack complet Tablette + Housse + Carte Micro SD 16 Go : Asus MeMO Pad 7 ME176CX-1B057A Tablette tact', '<ul>\r\n                                           <li>Ecran tactile 7 pouces - 1280 X 800\r\n                                             <li>Stockage et mémoire : disque dur 8 Go, RAM 1 Go\r\n                                             <li>Intel Bay Trail T Z3745 1.33 Ghz\r\n                                             <li>Carte Graphique : Non\r\n                                      </ul>', 'ME176CX-1B057A/Android 1GB 8GB 7" Red', '98654', '149.00', 'SIO893'),
(7, 4, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'LG Gpad V480 Tablette tactile 8" Blanc (16 Go, Android, WiFi)', '<ul>\r\n                                          <li>Ecran tactile 8 pouces\r\n                                             <li>Stockage et mémoire : disque dur 16 Go, RAM 16 Go\r\n                                             <li>Processeur Quad Core 1,2 Ghz\r\n                                             <li>Carte Graphique : WXGA\r\n                                             <li>1 port(s) USB 2.0; 1 prise(s) jack\r\n                                         </ul>', '<b>Description du produit</b><br/>\r\n                                        Tablette Tactile 8" Android 16Gb<br/>\r\n                                        <b>Points forts</b><br/>\r\n                                        <ul><li> 16Gb de mémoire<li>Android KitKat 4.4.2</li><li>Ecran Multipoint</li><li>Appareil photo 5mp</li><li>Knock Code</li><li>Bluetooth 4.0</li><li>MicroSD jusqu''à 64Gb</li><li>Caméra HD</li><li>Lecteur MP3</li><li>Formats supportés:MP3, AAC, AAC+, eAAC+, AMR, WAV, OGG, WMA</li><li>GPS / AGPS</li><li>Sortie TV : Slimport / Miracast</li></ul>', '89237908', '141.58', 'LGJSD23'),
(8, 1, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Asus MeMO Pad 7 ME572C-1A013A Tablette tactile 7" Noir (Intel Moorefield, 16 Go, Android, WiFi)', '<ul>\r\n                                            <li>Ecran tactile 7 pouces - 1920 X 1200\r\n                                            <li>Stockage et mémoire : disque dur 16 Go, RAM 2 Go\r\n                                            <li>Intel Moorefield 1.8 Ghz\r\n                                            <li>Carte Graphique : Non\r\n                                       </ul>', 'Tablette Asus ME572C-1A013A 7" Tactile Noire', '98898976', '0.00', 'ASMEMO7');

-- --------------------------------------------------------

--
-- Structure de la table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
`id` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `enable` bit(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `product_image`
--

INSERT INTO `product_image` (`id`, `id_product`, `enable`, `name`) VALUES
(1, 1, b'0', 'product/img1b.jpg'),
(2, 1, b'0', 'product/img2b.jpg'),
(3, 1, b'0', 'product/img3b.jpg'),
(4, 1, b'0', 'product/img4b.jpg'),
(5, 1, b'0', 'product/img5b.jpg'),
(6, 1, b'0', 'product/img6b.jpg'),
(7, 1, b'0', 'product/img7b.jpg'),
(8, 2, b'0', 'product/img2_1.jpg'),
(9, 2, b'0', 'product/img2_2.jpg'),
(10, 2, b'0', 'product/img2_3.jpg'),
(11, 2, b'0', 'product/img2_4.jpg'),
(12, 2, b'0', 'product/img2_5.jpg'),
(13, 2, b'0', 'product/img2_6.jpg'),
(14, 2, b'0', 'product/img2_7.jpg'),
(15, 3, b'0', 'product/img3_1.jpg'),
(16, 3, b'0', 'product/img3_2.jpg'),
(17, 3, b'0', 'product/img3_3.jpg'),
(18, 3, b'0', 'product/img3_4.jpg'),
(19, 3, b'0', 'product/img3_5.jpg'),
(20, 4, b'0', 'product/img4_1.jpg'),
(21, 4, b'0', 'product/img4_2.jpg'),
(22, 4, b'0', 'product/img4_3.jpg'),
(23, 4, b'0', 'product/img4_4.jpg'),
(24, 4, b'0', 'product/img4_5.jpg'),
(25, 4, b'0', 'product/img4_6.jpg'),
(26, 5, b'0', 'product/img5_1.jpg'),
(27, 5, b'0', 'product/img5_2.jpg'),
(28, 5, b'0', 'product/img5_3.jpg'),
(29, 5, b'0', 'product/img5_4.jpg'),
(30, 5, b'0', 'product/img5_5.jpg'),
(31, 5, b'0', 'product/img5_6.jpg'),
(32, 6, b'0', 'product/img6_1.jpg'),
(33, 6, b'0', 'product/img6_2.jpg'),
(34, 6, b'0', 'product/img6_3.jpg'),
(35, 6, b'0', 'product/img6_4.jpg'),
(36, 6, b'0', 'product/img6_5.jpg'),
(37, 6, b'0', 'product/img6_6.jpg'),
(38, 6, b'0', 'product/img6_7.jpg'),
(39, 6, b'0', 'product/img6_8.jpg'),
(40, 7, b'0', 'product/img7_1.jpg'),
(41, 7, b'0', 'product/img7_2.jpg'),
(42, 7, b'0', 'product/img7_3.jpg'),
(43, 7, b'0', 'product/img7_4.jpg'),
(44, 8, b'0', 'product/img8_1.jpg'),
(45, 8, b'0', 'product/img8_2.jpg'),
(46, 8, b'0', 'product/img8_3.jpg'),
(47, 8, b'0', 'product/img8_4.jpg'),
(48, 8, b'0', 'product/img8_5.jpg'),
(49, 8, b'0', 'product/img8_6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`id` int(10) unsigned NOT NULL,
  `id_order_status` int(10) unsigned NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enable` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `id_question` int(10) unsigned NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL,
  `enable` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question_helpful`
--

CREATE TABLE IF NOT EXISTS `question_helpful` (
`id` int(10) unsigned NOT NULL,
  `id_question` int(10) unsigned NOT NULL,
  `helpful` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `refund_offer`
--

CREATE TABLE IF NOT EXISTS `refund_offer` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `refund_offer`
--

INSERT INTO `refund_offer` (`id`, `name`, `amount`, `url`) VALUES
(1, '30 euros remboursés pour l''achat d''une tablette LG GPad', '30', '');

-- --------------------------------------------------------

--
-- Structure de la table `refund_offer_by_offer`
--

CREATE TABLE IF NOT EXISTS `refund_offer_by_offer` (
  `id_refund_offer` int(10) unsigned NOT NULL,
  `id_offer` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `refund_offer_by_offer`
--

INSERT INTO `refund_offer_by_offer` (`id_refund_offer`, `id_offer`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`id` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date_create` datetime NOT NULL,
  `enable` int(10) unsigned NOT NULL,
  `rate` decimal(10,2) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `review`
--

INSERT INTO `review` (`id`, `id_user`, `id_product`, `title`, `comment`, `date_create`, `enable`, `rate`) VALUES
(1, 1, 1, 'GENIAL', 'Formidable de combiner tablette et téléphone; le fonctionnement est très pratique, tout est à portée de main.\r\nle réseau est bon et capte bien, le wi-fi aussi.\r\nle prix est très raisonnable compte tenu des capacités générales de l''appareil.\r\nPetite info importante: bien utiliser la micro carte sim et non pas la "Nano", comme je l''avais fait.\r\nj''ai eu d''énormes difficultés à la récupérer, une fois insérée.\r\nSinon, amazon toujours au top, livraison sans souci. bravo', '0000-00-00 00:00:00', 1, '4.00');

-- --------------------------------------------------------

--
-- Structure de la table `review_helpful`
--

CREATE TABLE IF NOT EXISTS `review_helpful` (
`id` int(10) unsigned NOT NULL,
  `id_review` int(10) unsigned NOT NULL,
  `helpful` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `right`
--

CREATE TABLE IF NOT EXISTS `right` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `right`
--

INSERT INTO `right` (`id`, `name`, `description`) VALUES
(1, 'Access Setup', 'Give access at the user at the Setup Manager'),
(2, 'Access Merchant', 'Give access at the user at the Merchant Manager'),
(3, 'Access Brand', 'Give access at the user at the Brand Manager'),
(4, 'Access Product', 'Give access at the user at the Product Manager'),
(5, 'Access Offer', 'Give access at the user at the Offer Manager'),
(6, 'Access Vat', 'Give access at the user at the Vat Manager'),
(7, 'Access User', 'Give access at the user at the User Manager'),
(8, 'Access Country', 'Give access at the user at the Country Manager'),
(9, 'Access Categories', 'Give access at the user at the Categories Manager'),
(10, 'Access Attributes', 'Give access at the user at the Attributes Manager'),
(11, 'Access Search Attributes', 'Give access at the user at the search Attributes Manager');

-- --------------------------------------------------------

--
-- Structure de la table `search_attribute`
--

CREATE TABLE IF NOT EXISTS `search_attribute` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `label_for_all` varchar(100) NOT NULL,
  `id_category` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `search_attribute`
--

INSERT INTO `search_attribute` (`id`, `name`, `label_for_all`, `id_category`) VALUES
(1, 'TV', 'Toutes les tailles', 93),
(2, 'Barres de son par prix', 'Toutes les barres de son', 96),
(3, 'Home cinéma par technologie', 'Tous les systèmes', 97),
(4, 'Home cinéma par fonction', 'Toutes les fonctions', 97),
(5, 'Lecteurs enregistreurs Blu-Ray/DVD', '', 97);

-- --------------------------------------------------------

--
-- Structure de la table `search_attribute_rule`
--

CREATE TABLE IF NOT EXISTS `search_attribute_rule` (
`id` int(10) unsigned NOT NULL,
  `id_search_attribute` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('attribute','offer_field') NOT NULL,
  `id_by_type` varchar(100) NOT NULL,
  `value_min` int(10) unsigned NOT NULL,
  `value_max` int(10) unsigned NOT NULL,
  `value` varchar(2500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `search_attribute_rule`
--

INSERT INTO `search_attribute_rule` (`id`, `id_search_attribute`, `name`, `type`, `id_by_type`, `value_min`, `value_max`, `value`) VALUES
(1, 1, 'Moins de 30"', 'attribute', '1', 0, 0, 'a:4:{i:0;s:8:"7 pouces";i:1;s:8:"9 pouces";i:2;s:9:"10 pouces";i:3;s:8:"7 pouces";}'),
(2, 1, 'De 31" à 45"', 'attribute', '1', 0, 0, 'a:0:{}'),
(3, 1, 'De 46" à 55"', 'attribute', '1', 0, 0, 'a:0:{}'),
(4, 1, '56" et plus', 'attribute', '1', 0, 0, 'a:0:{}'),
(5, 2, 'Moins de 100€', 'offer_field', 'price', 0, 100, ''),
(6, 2, 'Entre 100€ et 200€', 'offer_field', 'price', 100, 200, ''),
(7, 2, 'Entre 200€ et 500€', 'offer_field', 'price', 200, 500, ''),
(8, 2, '500€ et plus', 'offer_field', 'price', 500, 9999999, ''),
(9, 3, 'Home cinéma 2.1', 'attribute', '1', 0, 0, 'Home cinéma 2.1'),
(10, 3, 'Home cinéma 5.1', 'attribute', '1', 0, 0, 'Home cinéma 5.1'),
(11, 4, 'Home cinéma avec lecteur DVD', 'attribute', '1', 0, 0, 'Home cinéma avec lecteur DVD'),
(12, 4, 'Home cinéma avec lecteur Blu-ray', 'attribute', '1', 0, 0, 'Home cinéma avec lecteur Blu-ray'),
(13, 5, 'Lecteurs 3D', 'attribute', '1', 0, 0, 'Lecteurs 3D'),
(14, 5, 'Lecteurs Blu-Ray et enregistreurs', 'attribute', '1', 0, 0, 'Lecteurs Blu-Ray et enregistreurs'),
(15, 5, 'Lecteurs DVD et enregistreurs', 'attribute', '1', 0, 0, 'Lecteurs DVD et enregistreurs'),
(16, 5, 'Lecteurs DVD portables', 'attribute', '1', 0, 0, 'Lecteurs DVD portables');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `name`) VALUES
(1, 'Helium Premium'),
(2, 'Garantie Panne'),
(3, 'Garantie Casse et Vol');

-- --------------------------------------------------------

--
-- Structure de la table `service_application`
--

CREATE TABLE IF NOT EXISTS `service_application` (
`id` int(10) unsigned NOT NULL,
  `id_service` int(10) unsigned NOT NULL,
  `id_country` int(10) unsigned NOT NULL,
  `id_vat` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `discount_authorized` bit(1) NOT NULL,
  `enable` bit(1) NOT NULL,
  `url_cgu` varchar(255) NOT NULL,
  `type_selling` enum('cart','shipping','paiment','hide') NOT NULL,
  `auto_add` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `service_application`
--

INSERT INTO `service_application` (`id`, `id_service`, `id_country`, `id_vat`, `name`, `discount_authorized`, `enable`, `url_cgu`, `type_selling`, `auto_add`) VALUES
(1, 1, 1, 1, 'Helium Premium', b'1', b'1', 'http://localhost:82/premium', 'shipping', b'1'),
(2, 2, 1, 1, 'Garantie Panne', b'0', b'1', 'http://localhost:82/garantie-panne', 'cart', b'1'),
(3, 3, 1, 1, 'Garantie Casse et Vol', b'0', b'1', 'http://localhost:82/garantie-casse-et-vol', 'cart', b'1');

-- --------------------------------------------------------

--
-- Structure de la table `service_association`
--

CREATE TABLE IF NOT EXISTS `service_association` (
`id` int(10) unsigned NOT NULL,
  `id_service_application` int(10) unsigned NOT NULL,
  `id_service_price` int(10) unsigned NOT NULL,
  `id_service_price_range` int(10) unsigned NOT NULL,
  `id_service_period` int(10) unsigned NOT NULL,
  `type` enum('category','offer','merchant') NOT NULL,
  `id_type` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `service_association`
--

INSERT INTO `service_association` (`id`, `id_service_application`, `id_service_price`, `id_service_price_range`, `id_service_period`, `type`, `id_type`) VALUES
(1, 1, 1, 2, 0, 'offer', 1),
(2, 2, 2, 3, 1, 'offer', 1),
(3, 2, 3, 3, 2, 'offer', 1),
(4, 2, 4, 3, 3, 'offer', 1),
(5, 2, 5, 3, 4, 'offer', 1),
(6, 3, 6, 3, 1, 'offer', 1),
(7, 3, 7, 3, 2, 'offer', 1);

-- --------------------------------------------------------

--
-- Structure de la table `service_period`
--

CREATE TABLE IF NOT EXISTS `service_period` (
`id` int(10) unsigned NOT NULL,
  `type` enum('day','year','month') NOT NULL,
  `value` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `service_period`
--

INSERT INTO `service_period` (`id`, `type`, `value`) VALUES
(1, 'year', 1),
(2, 'year', 2),
(3, 'year', 3),
(4, 'year', 5);

-- --------------------------------------------------------

--
-- Structure de la table `service_price`
--

CREATE TABLE IF NOT EXISTS `service_price` (
`id` int(10) unsigned NOT NULL,
  `price_type` enum('percent','amount') NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `cost` decimal(10,2) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `service_price`
--

INSERT INTO `service_price` (`id`, `price_type`, `price`, `cost`) VALUES
(1, 'amount', '40.83', '0.00'),
(2, 'amount', '12.03', '2.03'),
(3, 'amount', '22.57', '12.57'),
(4, 'amount', '31.25', '21.25'),
(5, 'amount', '39.93', '29.93'),
(6, 'amount', '15.96', '5.96'),
(7, 'amount', '28.73', '18.73');

-- --------------------------------------------------------

--
-- Structure de la table `service_price_range`
--

CREATE TABLE IF NOT EXISTS `service_price_range` (
`id` int(10) unsigned NOT NULL,
  `min` decimal(10,0) unsigned NOT NULL,
  `max` decimal(10,0) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `service_price_range`
--

INSERT INTO `service_price_range` (`id`, `min`, `max`) VALUES
(1, '0', '100'),
(2, '0', '999999'),
(3, '167', '208');

-- --------------------------------------------------------

--
-- Structure de la table `shipping_address`
--

CREATE TABLE IF NOT EXISTS `shipping_address` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`) VALUES
(1, 'admin', '', 'admin@hotmail.fr', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `user_merchant`
--

CREATE TABLE IF NOT EXISTS `user_merchant` (
  `id_user` int(10) unsigned NOT NULL,
  `id_merchant` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_right`
--

CREATE TABLE IF NOT EXISTS `user_right` (
  `id_user` int(10) unsigned NOT NULL,
  `id_right` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_right`
--

INSERT INTO `user_right` (`id_user`, `id_right`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `user_visit_offer`
--

CREATE TABLE IF NOT EXISTS `user_visit_offer` (
  `id_offer` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_visit_offer`
--

INSERT INTO `user_visit_offer` (`id_offer`, `id_user`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vat`
--

CREATE TABLE IF NOT EXISTS `vat` (
`id` int(10) unsigned NOT NULL,
  `id_country` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `vat_percent` decimal(10,3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `vat`
--

INSERT INTO `vat` (`id`, `id_country`, `name`, `vat_percent`) VALUES
(1, 1, 'Fr Normal', '1.200'),
(2, 1, 'Fr Intermediaite', '1.100'),
(3, 1, 'Fr Reduce', '1.055'),
(4, 1, 'Fr Medicinal', '1.021');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `attribute`
--
ALTER TABLE `attribute`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attribute_category`
--
ALTER TABLE `attribute_category`
 ADD PRIMARY KEY (`id_attribute`,`id_category`), ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `attribute_offer`
--
ALTER TABLE `attribute_offer`
 ADD PRIMARY KEY (`id_attribute`,`id_offer`), ADD KEY `id_offer` (`id_offer`), ADD KEY `id_attribute_value` (`id_attribute_value`);

--
-- Index pour la table `attribute_value`
--
ALTER TABLE `attribute_value`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `billing_address`
--
ALTER TABLE `billing_address`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cart_status`
--
ALTER TABLE `cart_status`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `channel`
--
ALTER TABLE `channel`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `currency`
--
ALTER TABLE `currency`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `discount`
--
ALTER TABLE `discount`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `merchant`
--
ALTER TABLE `merchant`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offer`
--
ALTER TABLE `offer`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`), ADD KEY `id_merchant` (`id_merchant`), ADD KEY `id_offer_status` (`id_offer_status`);

--
-- Index pour la table `offer_category`
--
ALTER TABLE `offer_category`
 ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `offer_status`
--
ALTER TABLE `offer_status`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offer_vat_country`
--
ALTER TABLE `offer_vat_country`
 ADD PRIMARY KEY (`id_offer`,`id_country`), ADD KEY `id_country` (`id_country`), ADD KEY `id_vat` (`id_vat`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_detail`
--
ALTER TABLE `order_detail`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_detail_unit`
--
ALTER TABLE `order_detail_unit`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_status`
--
ALTER TABLE `order_status`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`), ADD KEY `id_main_category` (`id_main_category`);

--
-- Index pour la table `product_image`
--
ALTER TABLE `product_image`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`), ADD KEY `id_product` (`id_product`), ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `question_helpful`
--
ALTER TABLE `question_helpful`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `refund_offer`
--
ALTER TABLE `refund_offer`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `refund_offer_by_offer`
--
ALTER TABLE `refund_offer_by_offer`
 ADD PRIMARY KEY (`id_refund_offer`,`id_offer`), ADD KEY `id_offer` (`id_offer`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`), ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `review_helpful`
--
ALTER TABLE `review_helpful`
 ADD PRIMARY KEY (`id`), ADD KEY `id_review` (`id_review`);

--
-- Index pour la table `right`
--
ALTER TABLE `right`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `search_attribute`
--
ALTER TABLE `search_attribute`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `search_attribute_rule`
--
ALTER TABLE `search_attribute_rule`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service_application`
--
ALTER TABLE `service_application`
 ADD PRIMARY KEY (`id`), ADD KEY `id_vat` (`id_vat`);

--
-- Index pour la table `service_association`
--
ALTER TABLE `service_association`
 ADD PRIMARY KEY (`id`), ADD KEY `id_service_application` (`id_service_application`);

--
-- Index pour la table `service_period`
--
ALTER TABLE `service_period`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service_price`
--
ALTER TABLE `service_price`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service_price_range`
--
ALTER TABLE `service_price_range`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shipping_address`
--
ALTER TABLE `shipping_address`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tax`
--
ALTER TABLE `tax`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_merchant`
--
ALTER TABLE `user_merchant`
 ADD PRIMARY KEY (`id_user`,`id_merchant`);

--
-- Index pour la table `user_right`
--
ALTER TABLE `user_right`
 ADD PRIMARY KEY (`id_user`,`id_right`);

--
-- Index pour la table `user_visit_offer`
--
ALTER TABLE `user_visit_offer`
 ADD PRIMARY KEY (`id_offer`,`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `vat`
--
ALTER TABLE `vat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attribute`
--
ALTER TABLE `attribute`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `attribute_value`
--
ALTER TABLE `attribute_value`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `billing_address`
--
ALTER TABLE `billing_address`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cart_status`
--
ALTER TABLE `cart_status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT pour la table `channel`
--
ALTER TABLE `channel`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `currency`
--
ALTER TABLE `currency`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `discount`
--
ALTER TABLE `discount`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `merchant`
--
ALTER TABLE `merchant`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `offer`
--
ALTER TABLE `offer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `offer_category`
--
ALTER TABLE `offer_category`
MODIFY `id_category` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `offer_status`
--
ALTER TABLE `offer_status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order_detail`
--
ALTER TABLE `order_detail`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order_detail_unit`
--
ALTER TABLE `order_detail_unit`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order_status`
--
ALTER TABLE `order_status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `product_image`
--
ALTER TABLE `product_image`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `purchase`
--
ALTER TABLE `purchase`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `question_helpful`
--
ALTER TABLE `question_helpful`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `refund_offer`
--
ALTER TABLE `refund_offer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `review_helpful`
--
ALTER TABLE `review_helpful`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `right`
--
ALTER TABLE `right`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `search_attribute`
--
ALTER TABLE `search_attribute`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `search_attribute_rule`
--
ALTER TABLE `search_attribute_rule`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `service_application`
--
ALTER TABLE `service_application`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `service_association`
--
ALTER TABLE `service_association`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `service_period`
--
ALTER TABLE `service_period`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `service_price`
--
ALTER TABLE `service_price`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `service_price_range`
--
ALTER TABLE `service_price_range`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `shipping_address`
--
ALTER TABLE `shipping_address`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tax`
--
ALTER TABLE `tax`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `vat`
--
ALTER TABLE `vat`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `attribute_category`
--
ALTER TABLE `attribute_category`
ADD CONSTRAINT `attribute_category_ibfk_1` FOREIGN KEY (`id_attribute`) REFERENCES `attribute` (`id`),
ADD CONSTRAINT `attribute_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `attribute_offer`
--
ALTER TABLE `attribute_offer`
ADD CONSTRAINT `attribute_offer_ibfk_1` FOREIGN KEY (`id_attribute`) REFERENCES `attribute` (`id`),
ADD CONSTRAINT `attribute_offer_ibfk_2` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id`),
ADD CONSTRAINT `attribute_offer_ibfk_3` FOREIGN KEY (`id_attribute_value`) REFERENCES `attribute_value` (`id`);

--
-- Contraintes pour la table `offer`
--
ALTER TABLE `offer`
ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`id_merchant`) REFERENCES `merchant` (`id`),
ADD CONSTRAINT `offer_ibfk_3` FOREIGN KEY (`id_offer_status`) REFERENCES `offer_status` (`id`);

--
-- Contraintes pour la table `offer_vat_country`
--
ALTER TABLE `offer_vat_country`
ADD CONSTRAINT `offer_vat_country_ibfk_1` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id`),
ADD CONSTRAINT `offer_vat_country_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`),
ADD CONSTRAINT `offer_vat_country_ibfk_3` FOREIGN KEY (`id_vat`) REFERENCES `vat` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_main_category`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `product_image`
--
ALTER TABLE `product_image`
ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`);

--
-- Contraintes pour la table `refund_offer_by_offer`
--
ALTER TABLE `refund_offer_by_offer`
ADD CONSTRAINT `refund_offer_by_offer_ibfk_1` FOREIGN KEY (`id_refund_offer`) REFERENCES `refund_offer` (`id`),
ADD CONSTRAINT `refund_offer_by_offer_ibfk_2` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `review_helpful`
--
ALTER TABLE `review_helpful`
ADD CONSTRAINT `review_helpful_ibfk_1` FOREIGN KEY (`id_review`) REFERENCES `review` (`id`);

--
-- Contraintes pour la table `service_application`
--
ALTER TABLE `service_application`
ADD CONSTRAINT `service_application_ibfk_1` FOREIGN KEY (`id_vat`) REFERENCES `vat` (`id`);

--
-- Contraintes pour la table `service_association`
--
ALTER TABLE `service_association`
ADD CONSTRAINT `service_association_ibfk_1` FOREIGN KEY (`id_service_application`) REFERENCES `service_application` (`id`);

--
-- Contraintes pour la table `user_visit_offer`
--
ALTER TABLE `user_visit_offer`
ADD CONSTRAINT `user_visit_offer_ibfk_1` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id`),
ADD CONSTRAINT `user_visit_offer_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
--
-- Base de données :  `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=39 ;

--
-- Contenu de la table `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(8, 'scrum', 'role', 'id', '', '', '_', ''),
(9, 'scrum', 'role', 'name', '', '', '_', ''),
(10, 'scrum', 'statut', 'id_role', '', '', '_', ''),
(11, 'scrum', 'role', 'type', '', '', '_', ''),
(12, 'scrum', 'statut_permission', 'id', '', '', '_', ''),
(13, 'scrum', 'statut_permission', 'id_statut', '', '', '_', ''),
(14, 'scrum', 'statut_permission', 'id_role', '', '', '_', ''),
(15, 'scrum', 'project', 'id', '', '', '_', ''),
(16, 'scrum', 'project', 'type', '', '', '_', ''),
(17, 'scrum', 'project', 'name', '', '', '_', ''),
(18, 'scrum', 'project', 'content', '', '', '_', ''),
(19, 'scrum', 'project', 'parent_id', '', '', '_', ''),
(23, 'scrum', 'user', 'id', '', '', '_', ''),
(21, 'scrum', 'team', 'id', '', '', '_', ''),
(22, 'scrum', 'team', 'name', '', '', '_', ''),
(24, 'scrum', 'user', 'id_team', '', '', '_', ''),
(25, 'scrum', 'user', 'lastname', '', '', '_', ''),
(26, 'scrum', 'user', 'firstname', '', '', '_', ''),
(27, 'scrum', 'project', 'id_user_assign', '', '', '_', ''),
(28, 'scrum', 'board', 'id', '', '', '_', ''),
(29, 'scrum', 'board', 'name', '', '', '_', ''),
(30, 'scrum', 'board', 'id_role', '', '', '_', ''),
(31, 'scrum', 'board', 'id_user', '', '', '_', ''),
(32, 'scrum', 'board_part', 'id', '', '', '_', ''),
(33, 'scrum', 'board_part', 'id_board', '', '', '_', ''),
(34, 'scrum', 'board_part', 'name', '', '', '_', ''),
(35, 'scrum', 'board_part', 'id_statut', '', '', '_', ''),
(36, 'scrum', 'board_part', 'order', '', '', '_', ''),
(37, 'scrum', 'user', 'login', '', '', '_', ''),
(38, 'scrum', 'user', 'password', '', '', '_', '');

-- --------------------------------------------------------

--
-- Structure de la table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Contenu de la table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"scrum","table":"user"},{"db":"scrum","table":"project"},{"db":"scrum","table":"board_part"},{"db":"scrum","table":"statut"},{"db":"scrum","table":"board"},{"db":"scrum","table":"statut_permission"},{"db":"scrum","table":"statut_link"},{"db":"scrum","table":"role"},{"db":"scrum","table":"team"},{"db":"helium","table":"category"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Contenu de la table `pma_relation`
--

INSERT INTO `pma_relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('scrum', 'statut', 'id_role', 'scrum', 'role', 'id');

-- --------------------------------------------------------

--
-- Structure de la table `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Contenu de la table `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'helium', 'category', '{"sorted_col":"`category`.`id` ASC"}', '2015-04-04 15:22:39');

-- --------------------------------------------------------

--
-- Structure de la table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Contenu de la table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2014-12-01 15:09:50', '{"lang":"fr","collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Base de données :  `scrum`
--

-- --------------------------------------------------------

--
-- Structure de la table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `board`
--

INSERT INTO `board` (`id`, `name`, `id_role`, `id_user`) VALUES
(2, 'Board Product Owner', 2, 2),
(3, 'Board Scrum Master', 1, 1);

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
  `type` enum('theme','epic','user_story','task') NOT NULL DEFAULT 'user_story',
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `id_user_assign` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `parent_id`, `type`, `name`, `content`, `id_user_assign`) VALUES
(2, 0, 'theme', 'qsdsd', '', 1);

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
(14, 'Development', 1),
(15, 'Development done', 1),
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
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `id_team` int(10) unsigned NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `id_team`, `lastname`, `firstname`, `login`, `password`) VALUES
(1, 1, 'Paquet', 'Judicaël', 'las', 'd2a2d089807d14b1791b1db62b5500b9'),
(2, 1, 'Maxime', 'Bean', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`id`), ADD KEY `id_role` (`id_role`), ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `board_part`
--
ALTER TABLE `board_part`
 ADD PRIMARY KEY (`id`), ADD KEY `id_board` (`id_board`), ADD KEY `id_statut` (`id_statut`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`), ADD KEY `type` (`type`), ADD KEY `parent_id` (`parent_id`), ADD KEY `id_user_assign` (`id_user_assign`);

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
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `id_team` (`id_team`);

--
-- AUTO_INCREMENT pour les tables exportées
--

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user_assign`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `id_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Base de données :  `test`
--
--
-- Base de données :  `webauth`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
