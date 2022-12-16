-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 15 déc. 2022 à 08:33
-- Version du serveur : 5.7.24
-- Version de PHP : 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bap_mousdik`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(1, 'actualités1', 'Lorem ipsum dolor sit amet. Sed deserunt quod ab modi ullam ut repellat architecto qui quia possimus aut ipsam', '2022-12-14 09:23:21'),
(2, 'actualités2', 'Lorem ipsum dolor sit amet. Sed deserunt quod ab modi ullam ut repellat architecto qui quia possimus aut ipsam', '2022-12-15 09:23:21'),
(3, 'actualités3', 'Lorem ipsum dolor sit amet. Sed deserunt quod ab modi ullam ut repellat architecto qui quia possimus aut ipsam', '2022-12-16 09:23:21'),
(4, 'actualités4', 'Lorem ipsum dolor sit amet. Sed deserunt quod ab modi ullam ut repellat architecto qui quia possimus aut ipsam', '2022-12-15 09:23:21'),
(5, 'actualités5', 'Lorem ipsum dolor sit amet. Sed deserunt quod ab modi ullam ut repellat architecto qui quia possimus aut ipsam', '2022-12-20 09:23:21');

-- --------------------------------------------------------

--
-- Structure de la table `piano`
--

CREATE TABLE `piano` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piano`
--

INSERT INTO `piano` (`id`, `name`, `price`, `brand`, `img`, `date`) VALUES
(9, 'piano1', '500', 'Yamaha', 'ameno.png', '2022-12-15 09:08:05'),
(10, 'piano2', '99999', 'Yamaha', 'ameno.png', '2022-12-15 09:08:24'),
(13, 'piano5', '6000', 'Yamaha', 'ameno.png', '2022-12-15 09:09:36'),
(14, 'piano3', '1200', 'Yamaha', 'ameno.png', '2022-12-15 09:13:45'),
(15, 'piano4', '3', 'Yamaha', 'ameno.png', '2022-12-15 09:14:05');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `name`, `message`, `score`, `date`) VALUES
(8, 'avis1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 1, '2022-12-15 09:10:19'),
(9, 'avis2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '2022-12-15 09:10:26'),
(10, 'avis3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 3, '2022-12-15 09:10:36'),
(11, 'avis4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 4, '2022-12-15 09:10:42'),
(12, 'avis5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 5, '2022-12-15 09:10:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piano`
--
ALTER TABLE `piano`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `piano`
--
ALTER TABLE `piano`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
