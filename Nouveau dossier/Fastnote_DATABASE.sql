CREATE DATABASE fastnote

CREATE TABLE notes(
   id_notes INT,
   coeff INT,
   date_note DATE,
   PRIMARY KEY(id_notes)
);

CREATE TABLE prof(
   id_prof INT,
   nom_prof VARCHAR(50),
   prenom_prof VARCHAR(50),
   login_prof VARCHAR(50),
   motdepasse_prof VARCHAR(50),
   PRIMARY KEY(id_prof)
);

CREATE TABLE eleves(
   id_eleve INT,
   age_eleve INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50),
   TP VARCHAR(50),
   login_eleve VARCHAR(50),
   motdepasse_eleve VARCHAR(50),
   PRIMARY KEY(id_eleve)
);

CREATE TABLE devoirs(
   id_devoir INT,
   nom_devoir VARCHAR(50),
   date_devoir DATE,
   PRIMARY KEY(id_devoir)
);

CREATE TABLE module1(
   id_mod VARCHAR(50),
   nom_mod VARCHAR(50) NOT NULL,
   id_prof INT NOT NULL,
   PRIMARY KEY(id_mod),
   FOREIGN KEY(id_prof) REFERENCES prof(id_prof)
);

CREATE TABLE UE(
   id_mod VARCHAR(50),
   nom_mod VARCHAR(50) NOT NULL,
   id_mod_1 VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_mod),
   FOREIGN KEY(id_mod_1) REFERENCES module1(id_mod)
);

CREATE TABLE appartient(
   id_notes INT,
   id_eleve INT,
   PRIMARY KEY(id_notes, id_eleve),
   FOREIGN KEY(id_notes) REFERENCES notes(id_notes),
   FOREIGN KEY(id_eleve) REFERENCES eleves(id_eleve)
);

CREATE TABLE attribue(
   id_mod VARCHAR(50),
   id_devoir INT,
   PRIMARY KEY(id_mod, id_devoir),
   FOREIGN KEY(id_mod) REFERENCES UE(id_mod),
   FOREIGN KEY(id_devoir) REFERENCES devoirs(id_devoir)
);

CREATE TABLE donne(
   id_notes INT,
   id_devoir INT,
   PRIMARY KEY(id_notes, id_devoir),
   FOREIGN KEY(id_notes) REFERENCES notes(id_notes),
   FOREIGN KEY(id_devoir) REFERENCES devoirs(id_devoir)
);

CREATE TABLE donne1(
   id_prof INT,
   id_devoir INT,
   PRIMARY KEY(id_prof, id_devoir),
   FOREIGN KEY(id_prof) REFERENCES prof(id_prof),
   FOREIGN KEY(id_devoir) REFERENCES devoirs(id_devoir)
);


INSERT INTO prof (id_prof, nom_prof, prenom_prof, login_prof, motdepasse_prof) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont', 'osivger'),
(2, 'Martin', 'Sophie', 'sophie.martin', 'alwtrnm'),
(3, 'Bernard', 'Luc', 'luc.bernard', 'qazwsxv'),
(4, 'Durand', 'Marie', 'marie.durand', 'edcrfvt'),
(5, 'Petit', 'Paul', 'paul.petit', 'ygbhujn');

-- Insertion des Ã©lÃ¨ves
INSERT INTO eleves (id_eleve, age_eleve, nom, prenom, TP, login_eleve, motdepasse_eleve) VALUES
-- Groupe TP A
(1, 18, 'Lefevre', 'Alice', 'A', 'alice.lefevre', 'mnqzyad'),
(2, 19, 'Michel', 'Jade', 'A', 'jade.michel', 'plokiju'),
(3, 18, 'Dumas', 'Lina', 'A', 'lina.dumas', 'bvgfezr'),
(4, 20, 'Perrin', 'Eva', 'A', 'eva.perrin', 'cnmvtyk'),
(5, 18, 'Roussel', 'LÃ©a', 'A', 'lea.roussel', 'sdfgnhj'),
(6, 20, 'Richard', 'Elisa', 'A', 'elisa.richard', 'xswzaqe'),
(7, 18, 'Bonnet', 'Charlotte', 'A', 'charlotte.bonnet', 'polkmij'),
(8, 19, 'Moulin', 'Sophie', 'A', 'sophie.moulin', 'uhbvgfr'),
(9, 18, 'Faure', 'Sonia', 'A', 'sonia.faure', 'xsdtrfv'),
(10, 19, 'Duval', 'Mathilde', 'A', 'mathilde.duval', 'mlokijn'),
(11, 18, 'Lemoine', 'Victoria', 'A', 'victoria.lemoine', 'awsxedc'),
(12, 19, 'Blanc', 'Maxime', 'A', 'maxime.blanc', 'plmnkij'),
(13, 18, 'Lemoine', 'Camille', 'A', 'camille.lemoine', 'qazwsxe'),
-- Groupe TP B
(14, 19, 'Morel', 'Hugo', 'B', 'hugo.morel', 'yhnmklo'),
(15, 18, 'David', 'LÃ©o', 'B', 'leo.david', 'tgbvfrc'),
(16, 20, 'Lacroix', 'Thomas', 'B', 'thomas.lacroix', 'xswcder'),
(17, 18, 'Vidal', 'Noah', 'B', 'noah.vidal', 'vfrtgbn'),
(18, 19, 'Garcia', 'Ã‰nzo', 'B', 'enzo.garcia', 'nhyjuki'),
(19, 18, 'Chevalier', 'Valentin', 'B', 'valentin.chevalier', 'tyhgvrf'),
(20, 20, 'Carpentier', 'LÃ©na', 'B', 'lena.carpentier', 'mkijuhb'),
(21, 18, 'Guillot', 'Ethan', 'B', 'ethan.guillot', 'qazplmo'),
(22, 19, 'Dufour', 'Jules', 'B', 'jules.dufour', 'okijmnh'),
(23, 18, 'Lemoine', 'Baptiste', 'B', 'baptiste.lemoine', 'wsxdcfv'),
(24, 19, 'Gautier', 'Sarah', 'B', 'sarah.gautier', 'rfvbgtu'),
-- Groupe TP C
(25, 18, 'Girard', 'ChloÃ©', 'C', 'chloe.girard', 'aqswedc'),
(26, 19, 'Bertrand', 'Clara', 'C', 'clara.bertrand', 'ijuhygv'),
(27, 18, 'Gautier', 'Sarah', 'C', 'sarah.gautier', 'esdfgrh'),
(28, 20, 'Leclerc', 'Manon', 'C', 'manon.leclerc', 'plmnbhj'),
(29, 18, 'Martinez', 'InÃ¨s', 'C', 'ines.martinez', 'tgbnhuj'),
(30, 19, 'Clement', 'Louise', 'C', 'louise.clement', 'rtyhvgt'),
(31, 18, 'Menard', 'Nina', 'C', 'nina.menard', 'zaxscvb'),
(32, 20, 'Barbier', 'Isabelle', 'C', 'isabelle.barbier', 'qazxcvb'),
(33, 18, 'Leroy', 'Olivier', 'C', 'olivier.leroy', 'rfvnhju'),
(34, 19, 'Lemoine', 'Victoria', 'C', 'victoria.lemoine', 'plokimn'),
(35, 18, 'Dumas', 'Lina', 'C', 'lina.dumas', 'yhnmijk'),
-- Groupe TP D
(36, 19, 'Lambert', 'Lucas', 'D', 'lucas.lambert', 'azwsxdq'),
(37, 20, 'Moreau', 'Nathan', 'D', 'nathan.moreau', 'polimnb'),
(38, 18, 'Blanc', 'Maxime', 'D', 'maxime.blanc', 'frvgtuh'),
(39, 19, 'Gonzalez', 'Alexis', 'D', 'alexis.gonzalez', 'wsxcdef'),
(40, 18, 'Robert', 'RaphaÃ«l', 'D', 'raphael.robert', 'qawsxed'),
(41, 20, 'Fleury', 'Lorenzo', 'D', 'lorenzo.fleury', 'mlokijn'),
(42, 18, 'Besson', 'Nicolas', 'D', 'nicolas.besson', 'nhyjuio'),
(43, 19, 'Perrier', 'Ã‰lise', 'D', 'elise.perrier', 'dfvbrty'),
(44, 18, 'Gauthier', 'Antoine', 'D', 'antoine.gauthier', 'sedcvfr'),
(45, 19, 'Pires', 'Arthur', 'D', 'arthur.pires', 'plmokij'),
-- Groupe TP E
(46, 18, 'Roux', 'Emma', 'E', 'emma.roux', 'kmnijuh'),
(47, 20, 'Masson', 'Juliette', 'E', 'juliette.masson', 'qaswedf'),
(48, 18, 'Fernandez', 'Mia', 'E', 'mia.fernandez', 'tgbnhyj'),
(49, 19, 'Charpentier', 'Adam', 'E', 'adam.charpentier', 'asdwplm'),
(50, 18, 'Fischer', 'AnaÃ¯s', 'E', 'anais.fischer', 'pokijuh'),
(51, 20, 'Aubert', 'Amandine', 'E', 'amandine.aubert', 'sedrfvt'),
(52, 18, 'Fernandez', 'Mia', 'E', 'mia.fernandez', 'aqwsxed'),
(53, 19, 'Guillot', 'Ethan', 'E', 'ethan.guillot', 'wsedrfv'),
(54, 18, 'Bourdon', 'Aline', 'E', 'aline.bourdon', 'plmnbgq'),
(55, 19, 'Royer', 'ZoÃ©', 'E', 'zoe.royer', 'zqawsde'),
-- Groupe TP F
(56, 20, 'Fournier', 'Louis', 'F', 'louis.fournier', 'rfvbgty'),
(57, 18, 'Renaud', 'Mathis', 'F', 'mathis.renaud', 'plokmij'),
(58, 20, 'Marchand', 'Antoine', 'F', 'antoine.marchand', 'qazwsxe'),
(59, 18, 'Legrand', 'Yanis', 'F', 'yanis.legrand', 'sedrfty'),
(60, 19, 'Nguyen', 'Gabriel', 'F', 'gabriel.nguyen', 'nhyujik'),
(61, 18, 'Carlier', 'Max', 'F', 'max.carlier', 'xswcdtr'),
(62, 19, 'Guillon', 'Matthieu', 'F', 'matthieu.guillon', 'rfvnmjh'),
(63, 18, 'Deschamps', 'Alexandre', 'F', 'alexandre.deschamps', 'olpihut'),
(64, 20, 'Vidal', 'Evan', 'F', 'evan.vidal', 'plokmnh'),
(65, 18, 'Lemoine', 'Victoria', 'F', 'victoria.lemoine', 'nhyujol'),
(66, 19, 'Dupuy', 'Simon', 'F', 'simon.dupuy', 'rfvtgbn'),
(67, 20, 'Lucas', 'Aaron', 'F', 'aaron.lucas', 'qawsxed'),
(68, 18, 'Chauvin', 'Camille', 'F', 'camille.chauvin', 'wsxedcr'),
(69, 19, 'Tessier', 'Bastien', 'F', 'bastien.tessier', 'nhyujol'),
(70, 18, 'Roy', 'Pauline', 'F', 'pauline.roy', 'azwsxdf'),
(71, 19, 'Adam', 'Lilou', 'F', 'lilou.adam', 'rfvtgby'),
(72, 18, 'Meyer', 'Jules', 'F', 'jules.meyer', 'polimjk'),
(73, 19, 'Baron', 'ThÃ©o', 'F', 'theo.baron', 'wsxdcfr'),
(74, 18, 'Guillot', 'Camille', 'F', 'camille.guillot', 'rfvtgby'),
(75, 20, 'Blanchard', 'ClÃ©ment', 'F', 'clement.blanchard', 'wsedrft'),
(76, 18, 'Marin', 'Alice', 'F', 'alice.marin', 'qazplmo'),
(77, 19, 'Buisson', 'Ã‰loÃ¯se', 'F', 'eloise.buisson', 'xswcder'),
(78, 20, 'Lemoine', 'Paul', 'F', 'paul.lemoine', 'sedrfty'),
(79, 18, 'Pruvost', 'Justine', 'F', 'justine.pruvost', 'aqwzsxc'),
(80, 19, 'Delmas', 'NoÃ©mie', 'F', 'noemie.delmas', 'rfvtgbn');