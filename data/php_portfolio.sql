-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 avr. 2022 à 01:24
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_portfolio`
-- Aithor : ALBAN OKOBY

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `langue` varchar(100) NOT NULL,
  `button` varchar(20) NOT NULL,
  `annee_exp` int(2) NOT NULL,
  `projet_termine` int(3) NOT NULL,
  `clt_satisfait` int(11) NOT NULL,
  `formations_organisees` int(11) NOT NULL,
  `certification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `title`, `name`, `age`, `qualification`, `post`, `langue`, `button`, `annee_exp`, `projet_termine`, `clt_satisfait`, `formations_organisees`, `certification`) VALUES
(1, 'A propos de moi', 'Alban Emmanuel Okoby', 25, 'Licence', 'Informaticien développeur/ Formateur web freelance, Prof de Maths de collège', 'Français, Anglais informatique.', 'Mon CV ', 2, 7, 20, 5, 11);

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `annee` varchar(25) NOT NULL,
  `post` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`id`, `annee`, `post`, `description`) VALUES
(1, '2017-2018', 'Baccalauréat Scientifique', 'Etudes des sciences dans leurs généralités (Maths, Physique-Chimie et Science et Technologies'),
(2, 'Septembre 2018 ', 'Etudes Informatique et Sciences Numérique à UVCI', 'Je fais une entrée dans la prestigieuse Université Virtuelle de Côte d\'Ivoire (UVCI) où j\'appréhende les NTics. Formé aux algorithmes et aux méthodologies de résolution automatique de problèmes. \r\n'),
(3, 'Janvier 2019', 'Modérateur/Intégrateur web', 'Je fais la gestion de page web et de réseaux sociaux pour startup ou particulier. \r\nJe continue de monter en compétence par l\'expérience et commence la gestion de page web (Ecrire des articles de blog, filtrer et modérer le contenu utilisateur ).'),
(4, 'Février 2019', 'Développeur web front junior\r\n', 'ça y est ! je développe des templates plus ou moins basiques (des One pages responsive, des More pages respo ..)'),
(5, 'Avril 2020', 'Développeur web PHP', 'Mieux installé en interface et au responsive, je fais du PHP en le backend pour la gestion des données Côté serveur.'),
(6, 'Mars 2021', 'Développeur Stack PHP/Symfony', 'Je développe des applications web plus facilement et de manière pro, on ne pouvait pas trouver mieux que ce Framework !'),
(7, 'Décembre 2021', 'Développeur Stack React Js/Symfony', 'J\'utilise le couplet Symfony/React pour développer des application Web de meilleures qualité, ainsi l\'expérience utilisateur est de taille.');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `button` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `title`, `name`, `post`, `description`, `button`) VALUES
(1, 'Hello world', 'Alban Emmanuel Okoby', 'Informaticien développeur/ Formateur web freelance, Prof de Maths de collège', 'Si ce n\'est que magnifique ! Que dire d\'autre.\r\n\" Partager un savoir, une ligne de code pour un monde de plus en plus meilleur \"', 'A propos ');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `nom_projet` varchar(10) NOT NULL,
  `img_projet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `nom_projet`, `img_projet`) VALUES
(1, 'Qr Code', 'lg.PNG'),
(2, 'Chat App', 'chatapp.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio_title`
--

CREATE TABLE `portfolio_title` (
  `title` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio_title`
--

INSERT INTO `portfolio_title` (`title`) VALUES
('Mes réalisations');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
