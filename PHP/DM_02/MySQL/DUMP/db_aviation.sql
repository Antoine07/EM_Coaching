-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 10 fév. 2022 à 07:54
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `db_aviation`
--

-- --------------------------------------------------------

--
-- Structure de la table `compagnies`
--

CREATE TABLE `compagnies` (
  `comp` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','unpublished','draft') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `street` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numStreet` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `compagnies`
--

INSERT INTO `compagnies` (`comp`, `status`, `street`, `city`, `name`, `numStreet`) VALUES
('CHI', 'draft', 'chine street', 'Pekin', 'CHINA Air', 19),
('FRE1', 'draft', 'beaubourg', 'France', 'Air France', 17),
('FRE2', 'draft', 'paris', 'France', 'Air Electric', 22),
('ITA', 'draft', 'mapoli', 'Rome', 'Italia Air', 20),
('SIN', 'draft', 'pasir', 'Singapour', 'SIN A', 15);

-- --------------------------------------------------------

--
-- Structure de la table `dump_pilots`
--

CREATE TABLE `dump_pilots` (
  `certificate` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus` smallint(5) UNSIGNED DEFAULT NULL,
  `numFlying` decimal(7,1) DEFAULT NULL,
  `compagny` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plane` enum('A380','A320','A340') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `birth_date` datetime DEFAULT NULL,
  `next_flight` datetime DEFAULT NULL,
  `num_jobs` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dump_pilots`
--

INSERT INTO `dump_pilots` (`certificate`, `bonus`, `numFlying`, `compagny`, `name`, `plane`, `created`, `birth_date`, `next_flight`, `num_jobs`) VALUES
('ct-10', 500, '90.0', 'FRE1', 'Tom', 'A320', '2021-11-18 12:14:10', '1978-02-04 00:00:00', '2020-12-04 09:50:52', 10),
('ct-100', 500, '200.0', 'SIN', 'Yi', 'A340', '2021-11-18 12:14:10', '1978-02-04 00:00:00', '2020-12-04 09:50:52', 10),
('ct-16', 500, '190.0', 'SIN', 'Yan', 'A340', '2021-11-18 12:14:10', '1998-01-04 00:00:00', '2020-05-08 12:50:52', 30),
('ct-6', 500, '20.0', 'FRE1', 'Jhon', 'A320', '2021-11-18 12:14:10', '2000-01-04 00:00:00', '2020-12-04 12:50:52', 13);

-- --------------------------------------------------------

--
-- Structure de la table `new_compagnies`
--

CREATE TABLE `new_compagnies` (
  `comp` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','unpublished','draft') COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `street` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numStreet` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `new_compagnies`
--

INSERT INTO `new_compagnies` (`comp`, `status`, `street`, `city`, `name`, `numStreet`) VALUES
('FRE1', 'draft', 'beaubourg', 'France', 'Air France', 17),
('FRE2', 'draft', 'paris', 'France', 'Air Electric', 22),
('ITA', 'draft', 'mapoli', 'Rome', 'Italia Air', 20),
('SIN', 'draft', 'pasir', 'Singapour', 'SIN A', 15),
('CHI', 'draft', 'chine street', 'Pekin', 'CHINA Air', 19);

-- --------------------------------------------------------

--
-- Structure de la table `pilots`
--

CREATE TABLE `pilots` (
  `certificate` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus` smallint(5) UNSIGNED DEFAULT NULL,
  `numFlying` decimal(7,1) DEFAULT NULL,
  `compagny` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plane` enum('A380','A320','A340') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `birth_date` datetime DEFAULT NULL,
  `next_flight` datetime DEFAULT NULL,
  `num_jobs` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pilots`
--

INSERT INTO `pilots` (`certificate`, `bonus`, `numFlying`, `compagny`, `name`, `plane`, `created`, `birth_date`, `next_flight`, `num_jobs`) VALUES
('ct-10', 500, '90.0', 'FRE1', 'Tom', 'A320', '2021-11-18 12:14:10', '1978-02-04 00:00:00', '2020-12-04 09:50:52', 10),
('ct-100', 500, '200.0', 'SIN', 'Yi', 'A340', '2021-11-18 12:14:10', '1978-02-04 00:00:00', '2020-12-04 09:50:52', 10),
('ct-16', 500, '190.0', 'SIN', 'Yan', 'A340', '2021-11-18 12:14:10', '1998-01-04 00:00:00', '2020-05-08 12:50:52', 30),
('ct-6', 500, '20.0', 'FRE1', 'Jhon', 'A320', '2021-11-18 12:14:10', '2000-01-04 00:00:00', '2020-12-04 12:50:52', 13),
('ct-7', 500, '80.0', 'CHI', 'Pierre', 'A380', '2022-02-09 19:10:55', '1978-02-04 00:00:00', '2020-12-04 12:50:52', 30);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compagnies`
--
ALTER TABLE `compagnies`
  ADD PRIMARY KEY (`comp`);

--
-- Index pour la table `pilots`
--
ALTER TABLE `pilots`
  ADD PRIMARY KEY (`certificate`),
  ADD KEY `fk_pilots_compagny_compagnies` (`compagny`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pilots`
--
ALTER TABLE `pilots`
  ADD CONSTRAINT `fk_pilots_compagny_compagnies` FOREIGN KEY (`compagny`) REFERENCES `compagnies` (`comp`) ON DELETE CASCADE;
