-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 04 Mars 2019 à 10:22
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hitsongwriter`
--

-- --------------------------------------------------------

--
-- Structure de la table `compositionCategory`
--

CREATE TABLE `compositionCategory` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `firstDegree` varchar(50) NOT NULL,
  `secondDegree` varchar(50) NOT NULL,
  `thirdDegree` varchar(50) NOT NULL,
  `fourthDegree` varchar(50) NOT NULL,
  `fifthDegree` varchar(50) NOT NULL,
  `sixthDegree` varchar(50) NOT NULL,
  `seventhDegree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `compositionCategory`
--

INSERT INTO `compositionCategory` (`id`, `categoryName`, `firstDegree`, `secondDegree`, `thirdDegree`, `fourthDegree`, `fifthDegree`, `sixthDegree`, `seventhDegree`) VALUES
(1, 'cMajorScale', 'cMajor', 'dMinor', 'eMinor', 'fMajor', 'gMajor', 'aMinor', 'bDiminished');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `note` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `popularProgressions`
--

CREATE TABLE `popularProgressions` (
  `id` int(11) NOT NULL,
  `progressionName` varchar(50) NOT NULL,
  `scaleDegrees` varchar(50) NOT NULL,
  `id_compositionCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `savedProgressions`
--

CREATE TABLE `savedProgressions` (
  `id` int(11) NOT NULL,
  `scaleName` varchar(50) NOT NULL,
  `firstChosenDegree` varchar(50) NOT NULL,
  `secondChosenDegree` varchar(50) NOT NULL,
  `thirdChosenDegree` varchar(50) NOT NULL,
  `fourthChosenDegree` varchar(50) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_compositionCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `savedProgressions`
--

INSERT INTO `savedProgressions` (`id`, `scaleName`, `firstChosenDegree`, `secondChosenDegree`, `thirdChosenDegree`, `fourthChosenDegree`, `id_users`, `id_compositionCategory`) VALUES
(1, 'do_majeur', 'mi_mineur', 'la_mineur', 'do_majeur', 'fa_majeur', 2, 1),
(2, 'do_majeur', 'la_mineur', 'do_majeur', 'fa_majeur', 're_mineur', 16, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `id_roles_defines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `lastName`, `firstName`, `mail`, `userName`, `password`, `id_roles_defines`) VALUES
(2, 'SCHWAL', 'Hans', 'hansschwal.pro@gmail.com', 'Admin', '$2y$10$7rNg3kRbzIymRIEN9JokbOCHwwhGQ3xrdKRIAKk9y3XN1VK/cX9FW', 1),
(3, 'Scellier', 'Valentin', 'valenting@toulon.fr', 'Valou83', '$2y$10$V0O3mnsGLnduAt3WIiryauSMUZzdly.OGurDmL274ZFSmewzMBcVm', 2),
(4, 'Angier', 'Ousmane', 'ousmane.angier@wallah.fr', 'Gabigabs', '$2y$10$GoaKL8H1I56CrlcLqmzDy.ssUBLpjpbWHhhwPtuIDc1oB3YG.en2u', 2),
(6, 'Vallois', 'Nicolas', 'nico.vallois@dukestyle.com', 'DukeStyle', '$2y$10$16/32AhCgYl5.yWgRlbu0OC4Szw.p5qfxA.O8EKn3BWOp.Z/dtURS', 2),
(7, 'Yorke', 'Thom', 'thom.yorke@radiohead.com', 'Thom', '$2y$10$qMe15fsrIfnfr/5z3M.f1.K0sjA8K0TRBqM.AxoE7PC7rtsGly2iK', 2),
(9, 'Personne', 'Nicolas', 'nicolas.personne@roux.com', 'Leroux', '$2y$10$PSPyAeqsuWuVmP3RCk4m3uXY9lcQfwDTbniXad9EohNuQm4CfIdQe', 2),
(10, 'Blettner', 'Benoit', 'benoit.blettner@bolchevik.com', 'LebolchoduhuitzÃ©ro', '$2y$10$M1q.vhG8hkYL.GgHp8S0keVdZBs0B0VgU2VTQoHhRjM5caAC21GAK', 2),
(11, 'Denet', 'Jean-philippe', 'jp.denet@lamanu.com', 'Jipi', '$2y$10$0N2369ANNUnEI8Rzjef3luFSlADgDlL.VO9y6pXpIdDBjsl6u1MRe', 2),
(12, 'Camara', 'Amadou', 'amadou.camara@lamanu.com', 'Amadou', '$2y$10$JnjEU/GbWkc5H1FUIvqe0.dKos/GlBxktU1jUbjoNOMJi2ZnwwXBy', 2),
(13, 'Manson', 'Charles', 'charles.manson@cielodrive.com', 'Charlie', '$2y$10$Dv4t1DqnkhpeObw8kwXRqub/KDnU.U0EVMb7bR0B1T91ipL28r9mK', 2),
(14, 'Poutine', 'Vladimir', 'vladimir.poutine@goulag.ru', 'Vladimirou', '$2y$10$QGcIdjlvNpjGfwjU7UyeBOr34nham9EbIlxo/0cWQi3365p5wV2q6', 2),
(15, 'Louvet', 'Sarah', 'sarah.louvet@novei.fr', 'Sarah', '$2y$10$ufopMkHumE1ZOj9RUKcmx.5F03OqiZadj/ek5.Q7itv7.ymK2nH66', 2),
(16, 'Shinoda', 'Mike', 'mike.shinoda@linkinpark.com', 'Mike', '$2y$10$LblXRX0LGl9lrzg/zMxvXe5AEvU41UVsLvi5BKJR2TfpzCVl8UUm6', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `compositionCategory`
--
ALTER TABLE `compositionCategory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `popularProgressions`
--
ALTER TABLE `popularProgressions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `popularProgressions_compositionCategory_FK` (`id_compositionCategory`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `savedProgressions`
--
ALTER TABLE `savedProgressions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `savedProgressions_users_FK` (`id_users`),
  ADD KEY `savedProgressions_compositionCategory0_FK` (`id_compositionCategory`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roles_FK` (`id_roles_defines`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `compositionCategory`
--
ALTER TABLE `compositionCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `popularProgressions`
--
ALTER TABLE `popularProgressions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `savedProgressions`
--
ALTER TABLE `savedProgressions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `popularProgressions`
--
ALTER TABLE `popularProgressions`
  ADD CONSTRAINT `popularProgressions_compositionCategory_FK` FOREIGN KEY (`id_compositionCategory`) REFERENCES `compositionCategory` (`id`);

--
-- Contraintes pour la table `savedProgressions`
--
ALTER TABLE `savedProgressions`
  ADD CONSTRAINT `savedProgressions_compositionCategory0_FK` FOREIGN KEY (`id_compositionCategory`) REFERENCES `compositionCategory` (`id`),
  ADD CONSTRAINT `savedProgressions_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_FK` FOREIGN KEY (`id_roles_defines`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
