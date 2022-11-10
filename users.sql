-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 nov. 2022 à 15:43
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dash`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `matricule` varchar(100) DEFAULT NULL,
  `etat` int(100) NOT NULL DEFAULT 1,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime DEFAULT NULL,
  `date_suppression` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `role`, `mdp`, `image`, `matricule`, `etat`, `date_inscription`, `date_modification`, `date_suppression`) VALUES
(73, 'fatou', 'BA', 'fatou@gmail.com', 'administrateur', '$2y$10$YI28R46a6iRYfhU7dd9e/.N4gIfWxRESj4sKLdlofWdbf99AZhFwy', 'OIP (1).jpg', 'TP-2022-73', 0, '2022-11-08 22:18:04', NULL, '2022-11-10 02:24:48'),
(74, 'Joséphine', 'DIOP', 'jose@gmail.com', 'utilisateur', '$2y$10$eNlTJk.dfCXYKz0D7Dw8bOS4hLDiaZMVmwTMhhUVLNhWPGfMf5B0m', 'images.jpg', 'TP-2022-74', 1, '2022-11-09 12:32:07', NULL, '2022-11-10 12:34:41'),
(75, 'Mimi', 'TOURE', 'mimi@gmail.com', 'administrateur', '$2y$10$59532nIIdU8GAwzQnHHV2.etp4uccgLA3GKxixzITWWO/MzIrufQi', 'hijab.jpg', 'TP-2022-75', 1, '2022-11-09 12:35:31', NULL, '2022-11-09 02:33:50'),
(76, 'abdou', 'NGOM', 'abdou@gmail.com', 'administrateur', '$2y$10$vQIy5y8LGXhbpIFEEiZYvekRqNDY0eSyHOrjpmkbKIMMl.4PbZ0we', 'OIP.jpg', 'TP-2022-76', 1, '2022-11-09 13:21:47', NULL, '2022-11-09 02:46:12'),
(77, 'adama', 'Dieye', 'adama@gail.com', 'utilisateur', '$2y$10$tG078jbv4XOjYQJvelROHejFejyY8KtgChtxMSmezF6Ly3/bD5XKS', NULL, 'TP-2022-77', 1, '2022-11-09 13:49:27', NULL, NULL),
(78, 'Issa', 'NDIAYE', 'issa@gmail.com', 'administrateur', '$2y$10$bdZgbP7XVG8mQ7aYDrBvPeWvfVNcjz9bqTOcH.Jq340SuXDGcWf/e', 'R.jpg', 'TP-2022-78', 1, '2022-11-09 13:50:00', NULL, NULL),
(86, 'aissatou', 'ba', 'satou@gmail.com', 'utilisateur', '$2y$10$VpIt0nu7inpO7Nv3GpxPmerlZ2jDFE4xHB0kVd19AdKzJB5SRTbKO', 'Capture d’écran (1).png', 'TP-2022-86', 1, '2022-11-09 23:46:39', NULL, NULL),
(87, 'tapha', 'GUEYE', 'tapha@gmail.com', 'administrateur', '$2y$10$PIWW7BXzXFnsgq5gJs3Yc.XN2xoapeSAeSsz6JaMlApfK4yvB8mvm', 'télécharger.jpg', 'TP-2022-87', 1, '2022-11-10 08:51:30', NULL, NULL),
(88, 'lamine', 'SARR', 'lamine@gmail.com', 'utilisateur', '$2y$10$SQPTuCnGAmgXlyqDV7f87eUtcWlS1uM.JQKKH0EiUlo8buv/rjRgK', 'télécharger.jpg', 'TP-2022-88', 1, '2022-11-10 09:24:28', NULL, NULL),
(89, 'alioune', 'Badji', 'alioune@gmail.com', 'administrateur', '$2y$10$xWdgU12cVIuocaasSQj4fOsxpxgfHtt3wdg3k1.K3EoJqVEZQOX/W', 'télécharger.jpg', 'TP-2022-89', 1, '2022-11-10 09:28:22', NULL, NULL),
(90, 'lamine', 'SECK', 'lamine30@gmail.com', 'administrateur', '$2y$10$9HqxkKWPJV/WTCfd7yCY4eVbL4Pb9ZWyM5.IZfqG5q.a/23tIINoK', '14040.jpg', 'TP-2022-90', 1, '2022-11-10 10:04:45', NULL, NULL),
(91, 'fatima', 'HANNE', 'fati@gmail.com', 'administrateur', '$2y$10$2kRHcsmdG87bpGDag.nPz.PTpJfue7rawTGPqX.XnMF9Q4xUt.qxS', '14040.jpg', 'TP-2022-91', 1, '2022-11-10 10:07:21', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
