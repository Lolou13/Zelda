-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 07 fév. 2024 à 11:05
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Zelda`
--

-- --------------------------------------------------------

--
-- Structure de la table `potions`
--

CREATE TABLE `potions` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `potionsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `potions`
--

INSERT INTO `potions` (`id`, `nom`, `descr`, `potionsID`) VALUES
(1, 'SPICY ELIXIR  ', 'Une elixir qui permet pendant un certains temps d\'obtenir une resitance au froid, sa durée et son efficacité depend de la facon de la preparer.\r\n', 1),
(2, 'ELECTRO ELIXIR ', 'Elexir qui permet pendant un temps d\'obtenir une resistance à l\'électricité, sa durée et son niveau de resistance depend des ingredients utilisés.', 2),
(3, 'FIREPROOF ELIXIR', 'Cette elixir permet a son utilisateur de prevenir des brulures et permet une grande resistance aux temperatures elevés', 3),
(4, 'FAIRY TONIC', 'Une des rares elixir qui ne peut etre melange avec d\'autres ingredients que l\'ame d\'un fée ,elle permet de restaurer une vie.', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `potions`
--
ALTER TABLE `potions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `potionsID` (`potionsID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `potions`
--
ALTER TABLE `potions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `potions`
--
ALTER TABLE `potions`
  ADD CONSTRAINT `potions_ibfk_1` FOREIGN KEY (`potionsID`) REFERENCES `pictures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
