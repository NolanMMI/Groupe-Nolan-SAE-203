-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 08 juin 2024 à 18:52
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
-- Base de données : `fastnote`
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
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `id_notes` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`id_notes`, `id_eleve`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78);

-- --------------------------------------------------------

--
-- Structure de la table `attribue`
--

CREATE TABLE `attribue` (
  `id_mod` varchar(50) NOT NULL,
  `id_devoir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `devoirs`
--

CREATE TABLE `devoirs` (
  `id_devoir` int(11) NOT NULL,
  `nom_devoir` varchar(50) DEFAULT NULL,
  `date_devoir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `donne`
--

CREATE TABLE `donne` (
  `id_notes` int(11) NOT NULL,
  `id_devoir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `donne1`
--

CREATE TABLE `donne1` (
  `id_prof` int(11) NOT NULL,
  `id_devoir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Structure de la table `module1`
--

CREATE TABLE `module1` (
  `id_mod` varchar(50) NOT NULL,
  `nom_mod` varchar(50) NOT NULL,
  `id_mod_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id_notes` int(11) NOT NULL,
  `coeff` int(11) DEFAULT NULL,
  `date_note` date DEFAULT NULL,
  `note` int(11) DEFAULT NULL CHECK (`note` between 0 and 20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id_notes`, `coeff`, `date_note`, `note`) VALUES
(1, 2, '2024-06-08', 13),
(2, 2, '2024-06-08', 14),
(3, 2, '2024-06-08', 12),
(4, 2, '2024-06-08', 19),
(5, 2, '2024-06-08', 16),
(6, 2, '2024-06-08', 1),
(7, 2, '2024-06-08', 3),
(8, 2, '2024-06-08', 10),
(9, 2, '2024-06-08', 2),
(10, 2, '2024-06-08', 2),
(11, 2, '2024-06-08', 3),
(12, 2, '2024-06-08', 8),
(13, 2, '2024-06-08', 10),
(14, 2, '2024-06-08', 8),
(15, 2, '2024-06-08', 10),
(16, 2, '2024-06-08', 4),
(17, 2, '2024-06-08', 14),
(18, 2, '2024-06-08', 14),
(19, 2, '2024-06-08', 7),
(20, 2, '2024-06-08', 16),
(21, 2, '2024-06-08', 17),
(22, 2, '2024-06-08', 16),
(23, 2, '2024-06-08', 9),
(24, 2, '2024-06-08', 17),
(25, 2, '2024-06-08', 19),
(26, 2, '2024-06-08', 0),
(27, 2, '2024-06-08', 6),
(28, 2, '2024-06-08', 8),
(29, 2, '2024-06-08', 5),
(30, 2, '2024-06-08', 1),
(31, 2, '2024-06-08', 11),
(32, 2, '2024-06-08', 11),
(33, 2, '2024-06-08', 0),
(34, 2, '2024-06-08', 11),
(35, 2, '2024-06-08', 13),
(36, 2, '2024-06-08', 12),
(37, 2, '2024-06-08', 20),
(38, 2, '2024-06-08', 4),
(39, 2, '2024-06-08', 2),
(40, 2, '2024-06-08', 0),
(41, 2, '2024-06-08', 13),
(42, 2, '2024-06-08', 2),
(43, 2, '2024-06-08', 16),
(44, 2, '2024-06-08', 12),
(45, 2, '2024-06-08', 9),
(46, 2, '2024-06-08', 12),
(47, 2, '2024-06-08', 14),
(48, 2, '2024-06-08', 11),
(49, 2, '2024-06-08', 12),
(50, 2, '2024-06-08', 10),
(51, 2, '2024-06-08', 13),
(52, 2, '2024-06-08', 14),
(53, 2, '2024-06-08', 10),
(54, 2, '2024-06-08', 8),
(55, 2, '2024-06-08', 13),
(56, 2, '2024-06-08', 20),
(57, 2, '2024-06-08', 18),
(58, 2, '2024-06-08', 10),
(59, 2, '2024-06-08', 19),
(60, 2, '2024-06-08', 3),
(61, 2, '2024-06-08', 0),
(62, 2, '2024-06-08', 12),
(63, 2, '2024-06-08', 19),
(64, 2, '2024-06-08', 18),
(65, 2, '2024-06-08', 11),
(66, 2, '2024-06-08', 4),
(67, 2, '2024-06-08', 6),
(68, 2, '2024-06-08', 19),
(69, 2, '2024-06-08', 15),
(70, 2, '2024-06-08', 17),
(71, 2, '2024-06-08', 0),
(72, 2, '2024-06-08', 14),
(73, 2, '2024-06-08', 7),
(74, 2, '2024-06-08', 15),
(75, 2, '2024-06-08', 12),
(76, 2, '2024-06-08', 13),
(77, 2, '2024-06-08', 11),
(78, 2, '2024-06-08', 17);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `id_prof` int(11) NOT NULL,
  `nom_prof` varchar(50) DEFAULT NULL,
  `prenom_prof` varchar(50) DEFAULT NULL,
  `login_prof` varchar(50) DEFAULT NULL,
  `motdepasse_prof` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `nom_prof`, `prenom_prof`, `login_prof`, `motdepasse_prof`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont', 'osivger'),
(2, 'Martin', 'Sophie', 'sophie.martin', 'alwtrnm'),
(3, 'Bernard', 'Luc', 'luc.bernard', 'qazwsxv'),
(4, 'Durand', 'Marie', 'marie.durand', 'edcrfvt'),
(5, 'Petit', 'Paul', 'paul.petit', 'ygbhujn');

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
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`id_notes`,`id_eleve`),
  ADD KEY `id_eleve` (`id_eleve`);

--
-- Index pour la table `attribue`
--
ALTER TABLE `attribue`
  ADD PRIMARY KEY (`id_mod`,`id_devoir`),
  ADD KEY `id_devoir` (`id_devoir`);

--
-- Index pour la table `devoirs`
--
ALTER TABLE `devoirs`
  ADD PRIMARY KEY (`id_devoir`);

--
-- Index pour la table `donne`
--
ALTER TABLE `donne`
  ADD PRIMARY KEY (`id_notes`,`id_devoir`),
  ADD KEY `id_devoir` (`id_devoir`);

--
-- Index pour la table `donne1`
--
ALTER TABLE `donne1`
  ADD PRIMARY KEY (`id_prof`,`id_devoir`),
  ADD KEY `id_devoir` (`id_devoir`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id_eleve`);

--
-- Index pour la table `module1`
--
ALTER TABLE `module1`
  ADD PRIMARY KEY (`id_mod`),
  ADD KEY `id_mod_1` (`id_mod_1`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_notes`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id_prof`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_mod`),
  ADD KEY `id_prof` (`id_prof`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devoirs`
--
ALTER TABLE `devoirs`
  MODIFY `id_devoir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_notes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_ibfk_1` FOREIGN KEY (`id_notes`) REFERENCES `notes` (`id_notes`),
  ADD CONSTRAINT `appartient_ibfk_2` FOREIGN KEY (`id_eleve`) REFERENCES `eleves` (`id_eleve`);

--
-- Contraintes pour la table `attribue`
--
ALTER TABLE `attribue`
  ADD CONSTRAINT `attribue_ibfk_1` FOREIGN KEY (`id_mod`) REFERENCES `module1` (`id_mod`),
  ADD CONSTRAINT `attribue_ibfk_2` FOREIGN KEY (`id_devoir`) REFERENCES `devoirs` (`id_devoir`);

--
-- Contraintes pour la table `donne`
--
ALTER TABLE `donne`
  ADD CONSTRAINT `donne_ibfk_1` FOREIGN KEY (`id_notes`) REFERENCES `notes` (`id_notes`),
  ADD CONSTRAINT `donne_ibfk_2` FOREIGN KEY (`id_devoir`) REFERENCES `devoirs` (`id_devoir`);

--
-- Contraintes pour la table `donne1`
--
ALTER TABLE `donne1`
  ADD CONSTRAINT `donne1_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `prof` (`id_prof`),
  ADD CONSTRAINT `donne1_ibfk_2` FOREIGN KEY (`id_devoir`) REFERENCES `devoirs` (`id_devoir`);

--
-- Contraintes pour la table `module1`
--
ALTER TABLE `module1`
  ADD CONSTRAINT `module1_ibfk_1` FOREIGN KEY (`id_mod_1`) REFERENCES `ressources` (`id_mod`);

--
-- Contraintes pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `ressources_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `prof` (`id_prof`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
