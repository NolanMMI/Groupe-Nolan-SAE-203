-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 15 juin 2024 à 21:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tessst`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) DEFAULT NULL,
  `nom_admin` varchar(50) DEFAULT NULL,
  `prenom_admin` varchar(50) DEFAULT NULL,
  `login_admin` varchar(50) DEFAULT NULL,
  `motdepasse_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `login_admin`, `motdepasse_admin`) VALUES
(1, 'Judor', 'Eric', 'eric.judor', 'aadmin');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id_eleve` int(11) NOT NULL,
  `age_eleve` int(11) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `TP` varchar(50) DEFAULT NULL,
  `login_eleve` varchar(50) DEFAULT NULL,
  `motdepasse_eleve` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id_eleve`, `age_eleve`, `nom`, `prenom`, `TP`, `login_eleve`, `motdepasse_eleve`) VALUES
(1, 18, 'Lefevre', 'Alice', 'A', 'alice.lefevre', 'mnqzyad'),
(2, 19, 'Michel', 'Jade', 'A', 'jade.michel', 'plokiju'),
(3, 18, 'Dumas', 'Lina', 'A', 'lina.dumas', 'bvgfezr'),
(4, 20, 'Perrin', 'Eva', 'A', 'eva.perrin', 'cnmvtyk'),
(5, 18, 'Roussel', 'Léa', 'A', 'lea.roussel', 'sdfgnhj'),
(6, 20, 'Richard', 'Elisa', 'A', 'elisa.richard', 'xswzaqe'),
(7, 18, 'Bonnet', 'Charlotte', 'A', 'charlotte.bonnet', 'polkmij'),
(8, 19, 'Moulin', 'Sophie', 'A', 'sophie.moulin', 'uhbvgfr'),
(9, 18, 'Faure', 'Sonia', 'A', 'sonia.faure', 'xsdtrfv'),
(10, 19, 'Duval', 'Mathilde', 'A', 'mathilde.duval', 'mlokijn'),
(11, 18, 'Lemoine', 'Victoria', 'A', 'victoria.lemoine', 'awsxedc'),
(12, 19, 'Blanc', 'Maxime', 'A', 'maxime.blanc', 'plmnkij'),
(13, 18, 'Lemoine', 'Camille', 'A', 'camille.lemoine', 'qazwsxe'),
(14, 19, 'Morel', 'Hugo', 'B', 'hugo.morel', 'yhnmklo'),
(15, 18, 'David', 'Léo', 'B', 'leo.david', 'tgbvfrc'),
(16, 20, 'Lacroix', 'Thomas', 'B', 'thomas.lacroix', 'xswcder'),
(17, 18, 'Vidal', 'Noah', 'B', 'noah.vidal', 'vfrtgbn'),
(18, 19, 'Garcia', 'Énzo', 'B', 'enzo.garcia', 'nhyjuki'),
(19, 18, 'Chevalier', 'Valentin', 'B', 'valentin.chevalier', 'tyhgvrf'),
(20, 20, 'Carpentier', 'Léna', 'B', 'lena.carpentier', 'mkijuhb'),
(21, 18, 'Guillot', 'Ethan', 'B', 'ethan.guillot', 'qazplmo'),
(22, 19, 'Dufour', 'Jules', 'B', 'jules.dufour', 'okijmnh'),
(23, 18, 'Lemoine', 'Baptiste', 'B', 'baptiste.lemoine', 'wsxdcfv'),
(24, 19, 'Gautier', 'Sarah', 'B', 'sarah.gautier', 'rfvbgtu'),
(25, 18, 'Girard', 'Chloé', 'C', 'chloe.girard', 'aqswedc'),
(26, 19, 'Bertrand', 'Clara', 'C', 'clara.bertrand', 'ijuhygv'),
(27, 18, 'Gautier', 'Sarah', 'C', 'sarah.gautier', 'esdfgrh'),
(28, 20, 'Leclerc', 'Manon', 'C', 'manon.leclerc', 'plmnbhj'),
(29, 18, 'Martinez', 'Inès', 'C', 'ines.martinez', 'tgbnhuj'),
(30, 19, 'Clement', 'Louise', 'C', 'louise.clement', 'rtyhvgt'),
(31, 18, 'Menard', 'Nina', 'C', 'nina.menard', 'zaxscvb'),
(32, 20, 'Barbier', 'Isabelle', 'C', 'isabelle.barbier', 'qazxcvb'),
(33, 18, 'Leroy', 'Olivier', 'C', 'olivier.leroy', 'rfvnhju'),
(34, 19, 'Lemoine', 'Victoria', 'C', 'victoria.lemoine', 'plokimn'),
(35, 18, 'Dumas', 'Lina', 'C', 'lina.dumas', 'yhnmijk'),
(36, 19, 'Lambert', 'Lucas', 'D', 'lucas.lambert', 'azwsxdq'),
(37, 20, 'Moreau', 'Nathan', 'D', 'nathan.moreau', 'polimnb'),
(38, 18, 'Blanc', 'Maxime', 'D', 'maxime.blanc', 'frvgtuh'),
(39, 19, 'Faure', 'Sonia', 'D', 'sonia.faure', 'zasxwdc'),
(40, 18, 'Bonnet', 'Charlotte', 'D', 'charlotte.bonnet', 'qawsedf'),
(41, 19, 'Michel', 'Jade', 'D', 'jade.michel', 'zxsaqwe'),
(42, 18, 'Dupuis', 'Marion', 'D', 'marion.dupuis', 'frvgtbh'),
(43, 20, 'Moulin', 'Sophie', 'D', 'sophie.moulin', 'lopkijn'),
(44, 18, 'Leclerc', 'Manon', 'D', 'manon.leclerc', 'mlpokij'),
(45, 19, 'Moreau', 'Nathan', 'D', 'nathan.moreau', 'aqzswde'),
(46, 18, 'Bertrand', 'Clara', 'D', 'clara.bertrand', 'cvfrtgb'),
(47, 20, 'Michel', 'Jade', 'D', 'jade.michel', 'polimnj'),
(48, 18, 'Carpentier', 'Léna', 'D', 'lena.carpentier', 'rfvbgtc'),
(49, 19, 'Petit', 'Paul', 'D', 'paul.petit', 'wsdcvfg'),
(50, 18, 'Vidal', 'Noah', 'D', 'noah.vidal', 'zaqxwsd'),
(51, 19, 'Garcia', 'Énzo', 'D', 'enzo.garcia', 'lokimnj'),
(52, 18, 'Lemoine', 'Victoria', 'E', 'victoria.lemoine', 'aqwsxed'),
(53, 19, 'Bernard', 'Luc', 'E', 'luc.bernard', 'tgbyhnm'),
(54, 18, 'Dupuis', 'Marion', 'E', 'marion.dupuis', 'plmokij'),
(55, 20, 'Durand', 'Marie', 'E', 'marie.durand', 'plmokij'),
(56, 18, 'Blanc', 'Maxime', 'E', 'maxime.blanc', 'polikmn'),
(57, 19, 'Faure', 'Sonia', 'E', 'sonia.faure', 'aqswedc'),
(58, 18, 'Bonnet', 'Charlotte', 'E', 'charlotte.bonnet', 'rfvgtbh'),
(59, 20, 'Michel', 'Jade', 'E', 'jade.michel', 'polikmn'),
(60, 18, 'Dupuis', 'Marion', 'E', 'marion.dupuis', 'mlpokij'),
(61, 19, 'Moreau', 'Nathan', 'E', 'nathan.moreau', 'aqwsxed'),
(62, 18, 'Bertrand', 'Clara', 'E', 'clara.bertrand', 'zaqxwsd'),
(63, 20, 'Michel', 'Jade', 'E', 'jade.michel', 'rfvgtbh'),
(64, 18, 'Carpentier', 'Léna', 'E', 'lena.carpentier', 'polikmn'),
(65, 19, 'Petit', 'Paul', 'E', 'paul.petit', 'mlpokij'),
(66, 18, 'Vidal', 'Noah', 'E', 'noah.vidal', 'aqwsxed'),
(67, 19, 'Garcia', 'Énzo', 'E', 'enzo.garcia', 'zaqxwsd'),
(68, 18, 'Lemoine', 'Victoria', 'E', 'victoria.lemoine', 'polikmn'),
(69, 19, 'Bernard', 'Luc', 'E', 'luc.bernard', 'aqwsxed'),
(70, 18, 'Dupuis', 'Marion', 'E', 'marion.dupuis', 'rfvgtbh'),
(71, 20, 'Durand', 'Marie', 'E', 'marie.durand', 'polikmn'),
(72, 18, 'Blanc', 'Maxime', 'E', 'maxime.blanc', 'mlpokij'),
(73, 19, 'Faure', 'Sonia', 'E', 'sonia.faure', 'zaqxwsd'),
(74, 18, 'Bonnet', 'Charlotte', 'E', 'charlotte.bonnet', 'aqwsxed'),
(75, 20, 'Michel', 'Jade', 'E', 'jade.michel', 'rfvgtbh'),
(76, 18, 'Dupuis', 'Marion', 'E', 'marion.dupuis', 'polikmn'),
(77, 19, 'Moreau', 'Nathan', 'E', 'nathan.moreau', 'mlpokij'),
(78, 18, 'Bertrand', 'Clara', 'E', 'clara.bertrand', 'aqwsxed'),
(79, 20, 'Michel', 'Jade', 'E', 'jade.michel', 'rfvgtbh'),
(80, 18, 'Carpentier', 'Léna', 'E', 'lena.carpentier', 'polikmn');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coeff` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id`, `name`, `coeff`) VALUES
(1, 'sae 203', 1),
(2, 'sae 203', 2);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `id_eleve`, `evaluation_id`, `note`) VALUES
(1, 1, 1, 12),
(2, 2, 1, 13),
(3, 3, 1, 12),
(4, 4, 1, 12),
(5, 5, 1, 12),
(6, 6, 1, 12),
(7, 7, 1, 12),
(8, 8, 1, 12),
(9, 9, 1, 12),
(10, 10, 1, 12),
(11, 11, 1, 12),
(12, 12, 1, 12),
(13, 13, 1, 12),
(14, 1, 2, 12),
(15, 2, 2, 12),
(16, 3, 2, 15),
(17, 4, 2, 12),
(18, 5, 2, 12),
(19, 6, 2, 12),
(20, 7, 2, 12),
(21, 8, 2, 12),
(22, 9, 2, 12),
(23, 10, 2, 12),
(24, 11, 2, 12),
(25, 12, 2, 12),
(26, 13, 2, 12);

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id_mod` varchar(50) NOT NULL,
  `nom_mod` varchar(50) NOT NULL,
  `id_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`id_mod`, `nom_mod`, `id_prof`) VALUES
('AV', 'Audiovisuel', 4),
('FR', 'Français', 2),
('INFO', 'Informatique', 3),
('MATH', 'Mathématiques', 1),
('MK', 'Marketing', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
