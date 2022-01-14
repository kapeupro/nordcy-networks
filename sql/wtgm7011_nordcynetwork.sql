-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 13 jan. 2022 à 12:46
-- Version du serveur :  10.3.32-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wtgm7011_nordcynetwork`
--

-- --------------------------------------------------------

--
-- Structure de la table `nordcynetwork_data`
--

CREATE TABLE `nordcynetwork_data` (
  `id` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `headerLength` varchar(20) DEFAULT NULL,
  `service` varchar(20) DEFAULT NULL,
  `identification` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `flagsCode` varchar(20) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `protocolName` varchar(20) DEFAULT NULL,
  `protocolFlagsCode` varchar(20) DEFAULT NULL,
  `checksumStatus` varchar(20) DEFAULT NULL,
  `checksumCode` varchar(20) DEFAULT NULL,
  `protocolPortsFrom` varchar(20) DEFAULT NULL,
  `protocolPortsDest` varchar(20) DEFAULT NULL,
  `protocolType` varchar(20) DEFAULT NULL,
  `protocolCode` varchar(20) DEFAULT NULL,
  `headerChecksum` varchar(20) DEFAULT NULL,
  `ipFrom` varchar(20) DEFAULT NULL,
  `ipDest` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `nordcynetwork_user`
--

CREATE TABLE `nordcynetwork_user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(250) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `nordcynetwork_data`
--
ALTER TABLE `nordcynetwork_data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nordcynetwork_user`
--
ALTER TABLE `nordcynetwork_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nordcynetwork_data`
--
ALTER TABLE `nordcynetwork_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nordcynetwork_user`
--
ALTER TABLE `nordcynetwork_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
