-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 26 Novembre 2012 à 16:16
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `numEtudiant` int(10) NOT NULL AUTO_INCREMENT,
  `anneeRedouble` tinyint(1) NOT NULL DEFAULT '0',
  `idPromo` int(2) NOT NULL,
  `idUtil` int(5) NOT NULL,
  PRIMARY KEY (`numEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `idExam` int(3) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  `idMat` int(2) NOT NULL,
  `date` date NOT NULL,
  `idType` int(2) NOT NULL,
  PRIMARY KEY (`idExam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `idMat` int(2) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  `coefMat` int(2) NOT NULL,
  `idMod` int(2) NOT NULL,
  `idProf` int(2) NOT NULL,
  PRIMARY KEY (`idMat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `idMod` int(2) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  `idPromo` int(2) NOT NULL,
  PRIMARY KEY (`idMod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Structure de la table `module`
--

INSERT INTO `module` (`idMod`, `libelle`, `idPromo`) VALUES 
(1,'informatique',2),
(2,'langues',2),
(3,'mathématiques',2),
(4,'physique',2),
(5,'relations humaines',2),
(6,'transverse',2),
(7,'informatique',1),
(8,'langues',1),
(9,'mathématiques',1),
(10,'physique',1),
(11,'relations humaines',1),
(12,'transverse',1);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `numEtudiant` int(10) NOT NULL,
  `idExam` int(3) NOT NULL,
  `note` int(2) NOT NULL,
  PRIMARY KEY (`numEtudiant`,`idExam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `idProf` int(2) NOT NULL AUTO_INCREMENT,
  `numBureau` varchar(5) NOT NULL,
  `telBureau` int(10) NOT NULL,
  `idUtil` int(2) NOT NULL,
  PRIMARY KEY (`idProf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`idProf`, `numBureau`, `telBureau`, `idUtil`) VALUES
(1, 'CY301', '0134852653', 200),
(2, 'TG302', '0165452545', 201),
(3, 'TG305', '0136654745', 202),
(4, 'TG201', '0154855226', 203),
(5, 'TG103', '0125699532', 204),
(6, 'AUCUN', '0125458516', 205),
(7, 'CY204', '0145956418', 206);


-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `idPromo` int(2) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`idPromo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `promo`
--

INSERT INTO `promo` (`idPromo`, `libelle`) VALUES
(1, 'CPI1'),
(2, 'CPI2');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `idRole` int(2) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`idRole`, `libelle`) VALUES
(1, 'visiteur'),
(2, 'étudiant'),
(3, 'professeur'),
(4, 'administrateur');


-- --------------------------------------------------------

--
-- Structure de la table `typexam`
--

CREATE TABLE IF NOT EXISTS `typexam` (
  `idType` int(2) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `coef` int(2) NOT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typexam`
--

INSERT INTO `typexam` (`idType`, `libelle`, `coef`) VALUES
(1, 'Devoir Surveillé', 4),
(2, 'Interrogation', 2),
(3, 'DM', 1),
(4, 'TP', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtil` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `idRole` int(2) NOT NULL,
  PRIMARY KEY (`idUtil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




INSERT INTO `utilisateur` (`idUtil`, `login`, `pass`, `nom`, `prenom`, `idRole`) VALUES
(1, 'lesieurchr', 'E22944:lesie', 'Lesieur', 'Christophe', 4),
(2, 'hiraclides', 'E34222:hirac', 'Hiraclides', 'Nicolas', 4),
(3, 'kowaleswsk', 'E36046:kowal', 'Kowalewski', 'Matthieu', 4),
(4, 'vanniertho', 'E83516:vanni', 'Vannier', 'Thommas', 4),
(5, 'abidalrola', 'eleve', 'Abidal', 'Roland', 2),
(6, 'adamolijon', 'eleve', 'Adamoli', 'Jonathan', 2),
(7, 'agasseroma', 'eleve', 'Agasse', 'Romain', 2),
(8, 'agnolinnic', 'eleve', 'Agnolin', 'Nicolas', 2),
(9, 'aitmohandh', 'eleve', 'Ait -Mohand', 'Hilal', 2),
(10, 'alganrobin', 'eleve', 'Algan', 'Robin', 2),
(11, 'alvesduart', 'eleve', 'Alves Duarté', 'Vincent', 2),
(12, 'amarokevin', 'eleve', 'Amaro', 'Kévin', 2),
(13, 'arkatyani', 'eleve', 'Arkat', 'Yani', 2),
(14, 'aubertingu', 'eleve', 'Aubertin', 'Guillaume', 2),
(15, 'auchermaxi', 'eleve', 'Aucher', 'Maxime', 2),
(16, 'balafrejan', 'eleve', 'Balafrej', 'Anis', 2),
(17, 'barayanis', 'eleve', 'Bara', 'Yanis', 2),
(18, 'bardalan', 'eleve', 'Bard', 'Alan', 2),
(19, 'bargainant', 'eleve', 'Bargain', 'Antoine', 2),
(20, 'benkemounm', 'eleve', 'Benkemoun', 'Mehdi', 2),
(21, 'bertheanto', 'eleve', 'Berthe', 'Antoine', 2),
(22, 'beurotteju', 'eleve', 'Beurotte', 'Julien', 2),
(23, 'bianchiale', 'eleve', 'Bianchi', 'Alexandre', 2),
(24, 'binetalexa', 'eleve', 'Binet', 'Alexandre', 2),
(25, 'blanchetad', 'eleve', 'Blanchet', 'Adrien', 2),
(26, 'brasackevi', 'eleve', 'Brasac', 'Kévin', 2),
(27, 'brelarnaud', 'eleve', 'Brel', 'Arnaud', 2),
(28, 'bretonnier', 'eleve', 'Bretonnière', 'Anne', 2),
(29, 'budimbuesu', 'eleve', 'Budimbu-Esuku', 'Michel', 2),
(30, 'buissartni', 'eleve', 'Buissart', 'Nicolas', 2),
(31, 'carreracle', 'eleve', 'Carrera', 'Clément', 2),
(32, 'chachouamo', 'eleve', 'Chachoua', 'Mounir', 2),
(33, 'chachouasa', 'eleve', 'Chachoua', 'Samir', 2),
(34, 'chamoiniva', 'eleve', 'Chamoin', 'Ivan', 2),
(35, 'cheniounir', 'eleve', 'Cheniouni', 'Rayane', 2),
(36, 'clapieflor', 'eleve', 'Clapie', 'Florent', 2),
(37, 'clementale', 'eleve', 'Clement', 'Alexandre', 2),
(38, 'cordinaseb', 'eleve', 'Cordina', 'Sébastien', 2),
(39, 'dasilvamat', 'eleve', 'Da Silva', 'Mathilde', 2),
(40, 'dahmanisou', 'eleve', 'Dahmani', 'Souheil', 2),
(41, 'dalimalik', 'eleve', 'Dali', 'Malik', 2),
(42, 'demollerat', 'eleve', 'De Mollerat Du Jeu', 'Thibaut', 2),
(43, 'debbahyass', 'eleve', 'Debbah', 'Yassine', 2),
(44, 'demaillybe', 'eleve', 'Demailly', 'Benjamin', 2),
(45, 'demirdikra', 'eleve', 'Demir', 'Dikran', 2),
(46, 'derailclem', 'eleve', 'Derail', 'Clémence', 2),
(47, 'deshayesch', 'eleve', 'Deshayes-Chossart', 'Jérôme', 2),
(48, 'diasguilla', 'eleve', 'Dias', 'Guillaume', 2),
(49, 'doshugo', 'eleve', 'Dos', 'Hugo', 2),
(50, 'duhamelale', 'eleve', 'Duhamel', 'Alexandre', 2),
(51, 'duquocvale', 'eleve', 'Duquoc', 'Valérian', 2),
(52, 'duretantoi', 'eleve', 'Duret', 'Antoine', 2),
(53, 'dziedzinlr', 'eleve', 'Dziedzinl', 'Richard', 2),
(54, 'ennebatibe', 'eleve', 'Ennebati', 'Benaïssa', 2),
(55, 'famelartva', 'eleve', 'Famelart', 'Valentin', 2),
(56, 'fosserohan', 'eleve', 'Foss?', 'Rohan', 2),
(57, 'fougniesgr', 'eleve', 'Fougnies', 'Gr2goire', 2),
(58, 'franciseve', 'eleve', 'Francis', 'Everest', 2),
(59, 'frenetbour', 'eleve', 'Frenet-Bourgoin', 'Guillaume', 2),
(60, 'geffrayero', 'eleve', 'Geffraye', 'Romain', 2),
(61, 'geoffroyfl', 'eleve', 'Geoffroy', 'Florian', 2),
(62, 'germainxav', 'eleve', 'Germain', 'Xavier', 2),
(63, 'gobinarthu', 'eleve', 'Gobin', 'Arthur', 2),
(64, 'graillejea', 'eleve', 'Graille', 'Jean-Baptiste', 2),
(65, 'greniermax', 'eleve', 'Grenier', 'Maxime', 2),
(66, 'grillamour', 'eleve', 'Grill', 'Amoury', 2),
(67, 'grodkevin', 'eleve', 'Grod', 'Kevin', 2),
(68, 'guillonpie', 'eleve', 'Guillon', 'Pierrick', 2),
(69, 'gunthernic', 'eleve', 'Gunther', 'Nicolas', 2),
(70, 'hamlasalah', 'eleve', 'Hamla', 'Salah', 2),
(71, 'henrymarle', 'eleve', 'Henry', 'Marlène', 2),
(72, 'hologanpie', 'eleve', 'Hologan', 'Pierre-Alexandre', 2),
(73, 'huilletpau', 'eleve', 'Huillet', 'Paul', 2),
(74, 'hyacinthec', 'eleve', 'Hyacinthe', 'Clément', 2),
(75, 'jemlisafa', 'eleve', 'Jemli', 'Safa', 2),
(76, 'joretbasti', 'eleve', 'Joret', 'Bastien', 2),
(77, 'labidiraph', 'eleve', 'Labidi', 'Raphaël', 2),
(78, 'lairthomas', 'eleve', 'Lair', 'Thomas', 2),
(79, 'laperouses', 'eleve', 'Laperouse', 'Sean', 2),
(80, 'lasriothma', 'eleve', 'Lasri', 'Othman', 2),
(81, 'laurentmat', 'eleve', 'Laurent', 'Matthieu', 2),
(82, 'lazzarinob', 'eleve', 'Lazzarino', 'Benjamin', 2),
(83, 'lebouterja', 'eleve', 'Le Bouter', 'Jacques', 2),
(84, 'ledretkevi', 'eleve', 'Le Dret', 'Kevin', 2),
(85, 'ledujuliet', 'eleve', 'Le Du', 'Juliette', 2),
(86, 'letiecloic', 'eleve', 'Le Tiec', 'Loïc', 2),
(87, 'lebelvish', 'eleve', 'LEBEL', 'Vishnu', 2),
(88, 'levi', 'eleve', 'LEBEL', 'VISHNU', 2),
(89, 'lemassonbr', 'eleve', 'Lemasson', 'Brian', 2),
(90, 'lepicardce', 'eleve', 'Lepicard', 'Céline', 2),
(91, 'leroymathi', 'eleve', 'Leroy', 'Mathilde', 2),
(92, 'lesignacda', 'eleve', 'Lesignac', 'Damien', 2),
(93, 'maazaouiyo', 'eleve', 'Maazaoui', 'Yousri', 2),
(94, 'manryauxan', 'eleve', 'Manry', 'Auxane', 2),
(95, 'martinpier', 'eleve', 'Martin', 'Pierre', 2),
(96, 'marzouksam', 'eleve', 'Marzouk', 'Sami', 2),
(97, 'massotfran', 'eleve', 'Massot', 'François', 2),
(98, 'mauduiteme', 'eleve', 'Mauduit', 'Emeric', 2),
(99, 'mayanjosea', 'eleve', 'Mayan', 'José-Alexandre', 2),
(100, 'mercierlau', 'eleve', 'Mercier', 'Laura', 2),
(101, 'mesbahygab', 'eleve', 'Mesbahy', 'Gabriel', 2),
(102, 'michalakst', 'eleve', 'Michalak', 'Stanislas', 2),
(103, 'michonmatt', 'eleve', 'Michon', 'Matthieu', 2),
(104, 'mongodinma', 'eleve', 'Mongodin', 'Maxime', 2),
(105, 'morannynic', 'eleve', 'Moranny', 'Nicolas', 2),
(106, 'morinmarwa', 'eleve', 'Morin', 'Marwan', 2),
(107, 'moubarakha', 'eleve', 'Moubarak', 'Hannoun', 2),
(108, 'mulleraloi', 'eleve', 'M?ller', 'Alo', 2),
(109, 'nguonmicka', 'eleve', 'Nguon', 'Mickäel', 2),
(110, 'nguyennico', 'eleve', 'Nguyen', 'Nicolas', 2),
(111, 'nguyentun', 'eleve', 'Nguyen', 'Tung-Trac', 2),
(112, 'nicolasque', 'eleve', 'Nicolas', 'Quentin', 2),
(113, 'noretsebas', 'eleve', 'Noret', 'Sebastien', 2),
(114, 'normandgui', 'eleve', 'Normand', 'Guillaume', 2),
(115, 'noshymicka', 'eleve', 'Noshy', 'Mickael', 2),
(116, 'onddercan', 'eleve', 'Ondder', 'Can', 2),
(117, 'oueriemime', 'eleve', 'Oueriemi', 'Mehdy', 2),
(118, 'ozoufguill', 'eleve', 'Ozouf', 'Guillaume', 2),
(119, 'papillonth', 'eleve', 'Papillon', 'Thomas', 2),
(120, 'parayjulie', 'eleve', 'Paray', 'Julie', 2),
(121, 'passinaygu', 'eleve', 'Passinay', 'Guillaume', 2),
(122, 'peignonmel', 'eleve', 'Peignon', 'Melvyn', 2),
(123, 'peleszezak', 'eleve', 'Peleszezak', 'Laetitia', 2),
(124, 'phinithflo', 'eleve', 'Phinith', 'Florian', 2),
(125, 'pinquieray', 'eleve', 'Pinquier', 'Aymeric', 2),
(126, 'prosperire', 'eleve', 'Prosperi', 'Rémi', 2),
(127, 'ptaceknico', 'eleve', 'Ptacek', 'Nicolas', 2),
(128, 'pelekhinep', 'eleve', 'Pélékhine', 'Pierre', 2),
(129, 'raberinjul', 'eleve', 'Raberin', 'Julien', 2),
(130, 'ragotpaul', 'eleve', 'Ragot', 'Paul', 2),
(131, 'ranaivoson', 'eleve', 'Ranaivoson', 'Dialinandrianina', 2),
(132, 'rasamoelis', 'eleve', 'Rasamoelison', 'Lawrencio', 2),
(133, 'raynaudfla', 'eleve', 'Raynaud', 'Flavien', 2),
(134, 'rosaalexis', 'eleve', 'Rosa', 'Alexis', 2),
(135, 'rostaingan', 'eleve', 'Rostaing', 'Antonin', 2),
(136, 'roykeny', 'eleve', 'Roy', 'Keny', 2),
(137, 'roymatthie', 'eleve', 'Roy', 'Matthieu', 2),
(138, 'sambandamg', 'eleve', 'Sambandam', 'Ghislain', 2),
(139, 'sarreauoli', 'eleve', 'Sarreau', 'Olivier', 2),
(140, 'savinthiba', 'eleve', 'Savin', 'Thibault', 2),
(141, 'schmittthi', 'eleve', 'Schmitt', 'Thibaut', 2),
(142, 'schollaert', 'eleve', 'Schollaert', 'Thomas', 2),
(143, 'sedougasab', 'eleve', 'Sedouga', 'Sabrina', 2),
(144, 'sereteponi', 'eleve', 'Seret', 'Eponine', 2),
(145, 'simoussapa', 'eleve', 'Si;Moussa', 'Paul', 2),
(146, 'simonvince', 'eleve', 'Simon', 'Vincent', 2),
(147, 'simonnatha', 'eleve', 'Simon', 'Nathaniel', 2),
(148, 'simonivinc', 'eleve', 'Simoni', 'Vincent', 2),
(149, 'sylveriuss', 'eleve', 'Sylverius', 'Surya', 2),
(150, 'tajosselin', 'eleve', 'Ta', 'Josselin', 2),
(151, 'tabogamarc', 'eleve', 'Taboga', 'Marc', 2),
(152, 'testiermar', 'eleve', 'Testier', 'Marc-Antoine', 2),
(153, 'thayaparan', 'eleve', 'Thayaparan', 'Jeevithan', 2),
(154, 'thebaultvi', 'eleve', 'Thebault', 'Victor', 2),
(155, 'thibaudale', 'eleve', 'Thibaud', 'Alexandre', 2),
(156, 'thomasdemo', 'eleve', 'THOMAS DE MONTPREVIL', 'HENRI', 2),
(157, 'torrepierr', 'eleve', 'Torre', 'Pierre', 2),
(158, 'tourneuxce', 'eleve', 'Tourneux', 'Celeste', 2),
(159, 'transylvai', 'eleve', 'Tran', 'Sylvain', 2),
(160, 'tschupparn', 'eleve', 'Tschupp', 'Arnaud', 2),
(161, 'vandiniflo', 'eleve', 'Vandini', 'Florian', 2),
(162, 'vansadiara', 'eleve', 'Vansadia', 'Rajdip', 2),
(163, 'villaincle', 'eleve', 'Villain', 'Clément', 2),
(164, 'zambazamba', 'eleve', 'Zamba-Zamba', 'Fady', 2),
(200, 'vda', 'prof', 'Daniel', 'Valérie', 3),
(201, 'ae', 'prof', 'El Janati', 'Abdessalam', 3),
(202, 'bge', 'prof', 'George', 'Bartholomew', 3),
(203, 'bpt', 'prof', 'Perrault', 'Brigitte', 3),
(204, 'mhp', 'prof', 'Buston', 'Marie-Hélène', 3),
(205, 'rhm', 'prof', 'Hammoum', 'Rachid', 3),
(206, 'ga', 'prof', 'Almouzni', 'Guy', 3);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;