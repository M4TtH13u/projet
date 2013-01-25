-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 25 Janvier 2013 à 20:55
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`numEtudiant`, `anneeRedouble`, `idPromo`, `idUtil`) VALUES
(1, 0, 2, 5),
(2, 0, 1, 6),
(3, 0, 1, 7),
(4, 0, 1, 8),
(5, 0, 2, 9),
(6, 0, 1, 10),
(7, 0, 2, 11),
(8, 0, 1, 12),
(9, 0, 2, 13),
(10, 0, 1, 14),
(11, 0, 1, 15),
(12, 0, 2, 16),
(13, 0, 1, 17),
(14, 0, 2, 18),
(15, 0, 2, 19),
(16, 0, 1, 20),
(17, 0, 1, 21),
(18, 0, 1, 22),
(19, 0, 2, 23),
(20, 0, 1, 24),
(21, 0, 2, 25),
(22, 0, 2, 26),
(23, 0, 1, 27),
(24, 0, 2, 28),
(25, 0, 1, 29),
(26, 0, 1, 30),
(27, 0, 1, 31),
(28, 0, 1, 32),
(29, 0, 1, 33),
(30, 0, 1, 34),
(31, 0, 1, 35),
(32, 0, 2, 36),
(33, 0, 1, 37),
(34, 0, 1, 38),
(35, 0, 1, 39),
(36, 0, 2, 40),
(37, 0, 1, 41),
(38, 0, 1, 42),
(39, 0, 1, 43),
(40, 0, 1, 44),
(41, 0, 1, 45),
(42, 0, 2, 46),
(43, 0, 2, 47),
(44, 0, 1, 48),
(45, 0, 2, 49),
(46, 0, 1, 50),
(47, 0, 1, 51),
(48, 0, 1, 52),
(49, 0, 1, 53),
(50, 0, 2, 54),
(51, 0, 2, 55),
(52, 0, 1, 56),
(53, 0, 1, 57),
(54, 0, 1, 58),
(55, 0, 1, 59),
(56, 0, 2, 60),
(57, 0, 2, 61),
(58, 0, 2, 62),
(59, 0, 1, 63),
(60, 0, 2, 64),
(61, 0, 1, 65),
(62, 0, 2, 66),
(63, 0, 2, 67),
(64, 0, 1, 68),
(65, 0, 1, 69),
(66, 0, 1, 70),
(67, 0, 1, 71),
(68, 0, 1, 72),
(69, 0, 1, 73),
(70, 0, 2, 74),
(71, 0, 1, 75),
(72, 0, 2, 76),
(73, 0, 1, 77),
(74, 0, 1, 78),
(75, 0, 1, 79),
(76, 0, 2, 80),
(77, 0, 1, 81),
(78, 0, 1, 82),
(79, 0, 2, 83),
(80, 0, 1, 84),
(81, 0, 1, 85),
(82, 0, 1, 86),
(83, 0, 2, 87),
(84, 0, 1, 88),
(85, 0, 2, 89),
(86, 0, 2, 90),
(87, 0, 1, 91),
(88, 0, 2, 92),
(89, 0, 1, 93),
(90, 0, 1, 94),
(91, 0, 1, 95),
(92, 0, 2, 96),
(93, 0, 1, 97),
(94, 0, 1, 98),
(95, 0, 1, 99),
(96, 0, 1, 100),
(97, 0, 1, 101),
(98, 0, 2, 102),
(99, 0, 2, 103),
(100, 0, 2, 104),
(101, 0, 1, 105),
(102, 0, 1, 106),
(103, 0, 2, 107),
(104, 0, 1, 108),
(105, 0, 2, 109),
(106, 0, 1, 110),
(107, 0, 1, 111),
(108, 0, 1, 112),
(109, 0, 1, 113),
(110, 0, 2, 114),
(111, 0, 2, 115),
(112, 0, 1, 116),
(113, 0, 1, 117),
(114, 0, 2, 118),
(115, 0, 2, 119),
(116, 0, 1, 120),
(117, 0, 2, 121),
(118, 0, 2, 122),
(119, 0, 1, 123),
(120, 0, 1, 124),
(121, 0, 1, 125),
(122, 0, 1, 126),
(123, 0, 1, 127),
(124, 0, 2, 128),
(125, 0, 1, 129),
(126, 0, 1, 130),
(127, 0, 2, 131),
(128, 0, 1, 132),
(129, 0, 2, 133),
(130, 0, 1, 134),
(131, 0, 1, 135),
(132, 0, 1, 136),
(133, 0, 1, 137),
(134, 0, 1, 138),
(135, 0, 1, 139),
(136, 0, 2, 140),
(137, 0, 2, 141),
(138, 0, 1, 142),
(139, 0, 1, 143),
(140, 0, 1, 144),
(141, 0, 1, 145),
(142, 0, 2, 146),
(143, 0, 1, 147),
(144, 0, 1, 148),
(145, 0, 2, 149),
(146, 0, 2, 150),
(147, 0, 2, 151),
(148, 0, 2, 152),
(149, 0, 1, 153),
(150, 0, 1, 154),
(151, 0, 2, 155),
(152, 0, 2, 156),
(153, 0, 2, 157),
(154, 0, 1, 158),
(155, 0, 2, 159),
(156, 0, 1, 160),
(157, 0, 1, 161),
(158, 0, 1, 162),
(159, 0, 1, 163),
(160, 0, 2, 164);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `examen`
--

INSERT INTO `examen` (`idExam`, `libelle`, `idMat`, `date`, `idType`) VALUES
(1, 'DS1 BDD', 1, '2012-09-24', 1),
(2, 'DS', 8, '2013-01-11', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`idMat`, `libelle`, `coefMat`, `idMod`, `idProf`) VALUES
(1, 'PHP-BDD', 7, 1, 1),
(2, 'Series', 10, 3, 2),
(3, 'Electromagnetisme', 3, 4, 6),
(4, 'electronique', 3, 4, 7),
(5, 'Francais-Philosophie', 2, 5, 3),
(6, 'Anglais', 2, 2, 4),
(7, 'Kholles d''anglais', 2, 2, 5),
(8, 'Programmation', 4, 7, 1),
(9, 'mathematiques', 10, 9, 8),
(10, 'physique', 6, 10, 6),
(11, 'Automatique', 3, 10, 7),
(12, 'francais', 2, 11, 3),
(13, 'anglais', 2, 8, 4),
(14, 'C++', 7, 1, 9),
(15, 'TIPE', 3, 6, 9),
(16, 'Analyse dans Rn', 10, 3, 2),
(17, 'TIPE', 3, 12, 9);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `idMod` int(2) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) NOT NULL,
  `idPromo` int(2) NOT NULL,
  PRIMARY KEY (`idMod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`idMod`, `libelle`, `idPromo`) VALUES
(1, 'Informatique-CPI2', 2),
(2, 'Langues-CPI2', 2),
(3, 'Mathematiques-CPI2', 2),
(4, 'Physique-CPI2', 2),
(5, 'Relations Humaines-CPI2', 2),
(6, 'Tranverse-CPI2', 2),
(7, 'Informatique-CPI1', 1),
(8, 'Langues-CPI1', 1),
(9, 'Mathematiques-CPI1', 1),
(10, 'Physique-CPI1', 1),
(11, 'Relations Humaines-CPI1', 1),
(12, 'Tranverse-CPI1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `numEtudiant` int(10) NOT NULL,
  `idExam` int(3) NOT NULL,
  `note` float NOT NULL,
  PRIMARY KEY (`numEtudiant`,`idExam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participe`
--

INSERT INTO `participe` (`numEtudiant`, `idExam`, `note`) VALUES
(1, 1, 11.5),
(7, 1, 14.5),
(9, 1, 12),
(12, 1, 14.5),
(14, 1, 7),
(15, 1, 14.5),
(19, 1, 13),
(21, 1, 17.5),
(22, 1, 10.5),
(24, 1, 17),
(32, 1, 15.5),
(36, 1, 7.5),
(42, 1, 15),
(43, 1, 16),
(45, 1, 18.5),
(50, 1, 13.5),
(51, 1, 16),
(56, 1, 14),
(57, 1, 13.5),
(58, 1, 15),
(60, 1, 16),
(62, 1, 14.5),
(63, 1, 15.5),
(70, 1, 12.5),
(72, 1, 3.5),
(76, 1, 16.5),
(79, 1, 7),
(83, 1, 13),
(85, 1, 14.5),
(86, 1, 12),
(88, 1, 18),
(92, 1, 14),
(98, 1, 17.5),
(99, 1, 11.5),
(100, 1, 18.5),
(103, 1, 15),
(105, 1, 16.5),
(110, 1, 13.5),
(111, 1, 15.5),
(114, 1, 18.5),
(115, 1, 16.5),
(117, 1, 14.5),
(118, 1, 12.5),
(124, 1, 14.5),
(127, 1, 18),
(129, 1, 18.5),
(136, 1, 17),
(137, 1, 15),
(142, 1, 5.5),
(145, 1, 19),
(146, 1, 12.5),
(147, 1, 18),
(148, 1, 17),
(151, 1, 15.5),
(152, 1, 17),
(153, 1, -1),
(155, 1, 13),
(160, 1, 14.5);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `idProf` int(2) NOT NULL AUTO_INCREMENT,
  `numBureau` varchar(10) NOT NULL DEFAULT 'INCONNU',
  `telBureau` int(10) NOT NULL DEFAULT '0',
  `idUtil` int(2) NOT NULL,
  PRIMARY KEY (`idProf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`idProf`, `numBureau`, `telBureau`, `idUtil`) VALUES
(1, 'INCONNU', 0, 200),
(2, 'INCONNU', 0, 201),
(3, 'INCONNU', 0, 202),
(4, 'INCONNU', 0, 203),
(5, 'INCONNU', 0, 204),
(6, 'INCONNU', 0, 205),
(7, 'CY307', 0, 206),
(8, 'INCONNU', 0, 207),
(9, 'INCONNU', 0, 208),
(10, 'INCONNU', 0, 209),
(11, 'INCONNU', 0, 210);

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
  `pass` varchar(32) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `idRole` int(2) NOT NULL,
  PRIMARY KEY (`idUtil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtil`, `login`, `pass`, `nom`, `prenom`, `idRole`) VALUES
(1, 'lesieurchr', '2fd8997d8309ccacdf59b6b87768747f', 'Lesieur', 'Christophe', 4),
(2, 'hiraclides', 'a232467fb61e4ca9f06f9190ba7f57e1', 'Hiraclides', 'Nicolas', 4),
(3, 'kowaleswsk', '38d5b4ec7e5561f4e509c93e846bd921', 'Kowalewski', 'Matthieu', 4),
(4, 'vanniertho', 'fec3ada4bbefc7de72da2c964fa638c0', 'Vannier', 'Thommas', 4),
(5, 'abidalrola', 'c16da4ad70df593520193184381b9f21', 'Abidal', 'Roland', 2),
(6, 'adamolijon', 'c16da4ad70df593520193184381b9f21', 'Adamoli', 'Jonathan', 2),
(7, 'agasseroma', 'c16da4ad70df593520193184381b9f21', 'Agasse', 'Romain', 2),
(8, 'agnolinnic', 'c16da4ad70df593520193184381b9f21', 'Agnolin', 'Nicolas', 2),
(9, 'aitmohandh', 'c16da4ad70df593520193184381b9f21', 'Ait -Mohand', 'Hilal', 2),
(10, 'alganrobin', 'c16da4ad70df593520193184381b9f21', 'Algan', 'Robin', 2),
(11, 'alvesduart', 'c16da4ad70df593520193184381b9f21', 'Alves Duarte', 'Vincent', 2),
(12, 'amarokevin', 'c16da4ad70df593520193184381b9f21', 'Amaro', 'Kevin', 2),
(13, 'arkatyani', 'c16da4ad70df593520193184381b9f21', 'Arkat', 'Yani', 2),
(14, 'aubertingu', 'c16da4ad70df593520193184381b9f21', 'Aubertin', 'Guillaume', 2),
(15, 'auchermaxi', 'c16da4ad70df593520193184381b9f21', 'Aucher', 'Maxime', 2),
(16, 'balafrejan', 'c16da4ad70df593520193184381b9f21', 'Balafrej', 'Anis', 2),
(17, 'barayanis', 'c16da4ad70df593520193184381b9f21', 'Bara', 'Yanis', 2),
(18, 'bardalan', 'c16da4ad70df593520193184381b9f21', 'Bard', 'Alan', 2),
(19, 'bargainant', 'c16da4ad70df593520193184381b9f21', 'Bargain', 'Antoine', 2),
(20, 'benkemounm', 'c16da4ad70df593520193184381b9f21', 'Benkemoun', 'Mehdi', 2),
(21, 'bertheanto', 'c16da4ad70df593520193184381b9f21', 'Berthe', 'Antoine', 2),
(22, 'beurotteju', 'c16da4ad70df593520193184381b9f21', 'Beurotte', 'Julien', 2),
(23, 'bianchiale', 'c16da4ad70df593520193184381b9f21', 'Bianchi', 'Alexandre', 2),
(24, 'binetalexa', 'c16da4ad70df593520193184381b9f21', 'Binet', 'Alexandre', 2),
(25, 'blanchetad', 'c16da4ad70df593520193184381b9f21', 'Blanchet', 'Adrien', 2),
(26, 'brasackevi', 'c16da4ad70df593520193184381b9f21', 'Brassac', 'Kevin', 2),
(27, 'brelarnaud', 'c16da4ad70df593520193184381b9f21', 'Brel', 'Arnaud', 2),
(28, 'bretonnier', 'c16da4ad70df593520193184381b9f21', 'Bretonniere', 'Anne', 2),
(29, 'budimbuesu', 'c16da4ad70df593520193184381b9f21', 'Budimbu-Esuku', 'Michel', 2),
(30, 'buissartni', 'c16da4ad70df593520193184381b9f21', 'Buissart', 'Nicolas', 2),
(31, 'carreracle', 'c16da4ad70df593520193184381b9f21', 'Carrera', 'Clement', 2),
(32, 'chachouamo', 'c16da4ad70df593520193184381b9f21', 'Chachoua', 'Mounir', 2),
(33, 'chachouasa', 'c16da4ad70df593520193184381b9f21', 'Chachoua', 'Samir', 2),
(34, 'chamoiniva', 'c16da4ad70df593520193184381b9f21', 'Chamoin', 'Ivan', 2),
(35, 'cheniounir', 'c16da4ad70df593520193184381b9f21', 'Cheniouni', 'Rayane', 2),
(36, 'clapieflor', 'c16da4ad70df593520193184381b9f21', 'Clapie', 'Florent', 2),
(37, 'clementale', 'c16da4ad70df593520193184381b9f21', 'Clement', 'Alexandre', 2),
(38, 'cordinaseb', 'c16da4ad70df593520193184381b9f21', 'Cordina', 'Sebastien', 2),
(39, 'dasilvamat', 'c16da4ad70df593520193184381b9f21', 'Da Silva', 'Mathilde', 2),
(40, 'dahmanisou', 'c16da4ad70df593520193184381b9f21', 'Dahmani', 'Souheil', 2),
(41, 'dalimalik', 'c16da4ad70df593520193184381b9f21', 'Dali', 'Malik', 2),
(42, 'demollerat', 'c16da4ad70df593520193184381b9f21', 'De Mollerat Du Jeu', 'Thibaut', 2),
(43, 'debbahyass', 'c16da4ad70df593520193184381b9f21', 'Debbah', 'Yassine', 2),
(44, 'demaillybe', 'c16da4ad70df593520193184381b9f21', 'Demailly', 'Benjamin', 2),
(45, 'demirdikra', 'c16da4ad70df593520193184381b9f21', 'Demir', 'Dikran', 2),
(46, 'derailclem', 'c16da4ad70df593520193184381b9f21', 'Derail', 'Clemence', 2),
(47, 'deshayesch', 'c16da4ad70df593520193184381b9f21', 'Deshayes-Chossart', 'Jerome', 2),
(48, 'diasguilla', 'c16da4ad70df593520193184381b9f21', 'Dias', 'Guillaume', 2),
(49, 'doshugo', 'c16da4ad70df593520193184381b9f21', 'Dos', 'Hugo', 2),
(50, 'duhamelale', 'c16da4ad70df593520193184381b9f21', 'Duhamel', 'Alexandre', 2),
(51, 'duquocvale', 'c16da4ad70df593520193184381b9f21', 'Duquoc', 'Valerian', 2),
(52, 'duretantoi', 'c16da4ad70df593520193184381b9f21', 'Duret', 'Antoine', 2),
(53, 'dziedzinlr', 'c16da4ad70df593520193184381b9f21', 'Dziedzinl', 'Richard', 2),
(54, 'ennebatibe', 'c16da4ad70df593520193184381b9f21', 'Ennebati', 'Benaissa', 2),
(55, 'famelartva', 'c16da4ad70df593520193184381b9f21', 'Famelart', 'Valentin', 2),
(56, 'fosserohan', 'c16da4ad70df593520193184381b9f21', 'Fosse', 'Rohan', 2),
(57, 'fougniesgr', 'c16da4ad70df593520193184381b9f21', 'Fougnies', 'Gregoire', 2),
(58, 'franciseve', 'c16da4ad70df593520193184381b9f21', 'Francis', 'Everest', 2),
(59, 'frenetbour', 'c16da4ad70df593520193184381b9f21', 'Frenet-Bourgoin', 'Guillaume', 2),
(60, 'geffrayero', 'c16da4ad70df593520193184381b9f21', 'Geffraye', 'Romain', 2),
(61, 'geoffroyfl', 'c16da4ad70df593520193184381b9f21', 'Geoffroy', 'Florian', 2),
(62, 'germainxav', 'c16da4ad70df593520193184381b9f21', 'Germain', 'Xavier', 2),
(63, 'gobinarthu', 'c16da4ad70df593520193184381b9f21', 'Gobin', 'Arthur', 2),
(64, 'graillejea', 'c16da4ad70df593520193184381b9f21', 'Graille', 'Jean-Baptiste', 2),
(65, 'greniermax', 'c16da4ad70df593520193184381b9f21', 'Grenier', 'Maxime', 2),
(66, 'grillamour', 'c16da4ad70df593520193184381b9f21', 'Grill', 'Amoury', 2),
(67, 'grodkevin', 'c16da4ad70df593520193184381b9f21', 'Grod', 'Kevin', 2),
(68, 'guillonpie', 'c16da4ad70df593520193184381b9f21', 'Guillon', 'Pierrick', 2),
(69, 'gunthernic', 'c16da4ad70df593520193184381b9f21', 'Gunther', 'Nicolas', 2),
(70, 'hamlasalah', 'c16da4ad70df593520193184381b9f21', 'Hamla', 'Salah', 2),
(71, 'henrymarle', 'c16da4ad70df593520193184381b9f21', 'Henry', 'Marlene', 2),
(72, 'hologanpie', 'c16da4ad70df593520193184381b9f21', 'Hologan', 'Pierre-Alexandre', 2),
(73, 'huilletpau', 'c16da4ad70df593520193184381b9f21', 'Huillet', 'Paul', 2),
(74, 'hyacinthec', 'c16da4ad70df593520193184381b9f21', 'Hyacinthe', 'Clement', 2),
(75, 'jemlisafa', 'c16da4ad70df593520193184381b9f21', 'Jemli', 'Safa', 2),
(76, 'joretbasti', 'c16da4ad70df593520193184381b9f21', 'Joret', 'Bastien', 2),
(77, 'labidiraph', 'c16da4ad70df593520193184381b9f21', 'Labidi', 'Raphael', 2),
(78, 'lairthomas', 'c16da4ad70df593520193184381b9f21', 'Lair', 'Thomas', 2),
(79, 'laperouses', 'c16da4ad70df593520193184381b9f21', 'Laperouse', 'Sean', 2),
(80, 'lasriothma', 'c16da4ad70df593520193184381b9f21', 'Lasri', 'Othman', 2),
(81, 'laurentmat', 'c16da4ad70df593520193184381b9f21', 'Laurent', 'Matthieu', 2),
(82, 'lazzarinob', 'c16da4ad70df593520193184381b9f21', 'Lazzarino', 'Benjamin', 2),
(83, 'lebouterja', 'c16da4ad70df593520193184381b9f21', 'Le Bouter', 'Jacques', 2),
(84, 'ledretkevi', 'c16da4ad70df593520193184381b9f21', 'Le Dret', 'Kevin', 2),
(85, 'ledujuliet', 'c16da4ad70df593520193184381b9f21', 'Le Du', 'Juliette', 2),
(86, 'letiecloic', 'c16da4ad70df593520193184381b9f21', 'Le Tiec', 'Loic', 2),
(87, 'lebelvish', 'c16da4ad70df593520193184381b9f21', 'Lebel', 'Vishnu', 2),
(88, 'levi', 'c16da4ad70df593520193184381b9f21', 'Lebel', 'Vishnu', 2),
(89, 'lemassonbr', 'c16da4ad70df593520193184381b9f21', 'Lemasson', 'Brian', 2),
(90, 'lepicardce', 'c16da4ad70df593520193184381b9f21', 'Lepicard', 'Celine', 2),
(91, 'leroymathi', 'c16da4ad70df593520193184381b9f21', 'Leroy', 'Mathilde', 2),
(92, 'lesignacda', 'c16da4ad70df593520193184381b9f21', 'Lesignac', 'Damien', 2),
(93, 'maazaouiyo', 'c16da4ad70df593520193184381b9f21', 'Maazaoui', 'Yousri', 2),
(94, 'manryauxan', 'c16da4ad70df593520193184381b9f21', 'Manry', 'Auxane', 2),
(95, 'martinpier', 'c16da4ad70df593520193184381b9f21', 'Martin', 'Pierre', 2),
(96, 'marzouksam', 'c16da4ad70df593520193184381b9f21', 'Marzouk', 'Sami', 2),
(97, 'massotfran', 'c16da4ad70df593520193184381b9f21', 'Massot', 'Francois', 2),
(98, 'mauduiteme', 'c16da4ad70df593520193184381b9f21', 'Mauduit', 'Emeric', 2),
(99, 'mayanjosea', 'c16da4ad70df593520193184381b9f21', 'Mayan', 'Jose-Alexandre', 2),
(100, 'mercierlau', 'c16da4ad70df593520193184381b9f21', 'Mercier', 'Laura', 2),
(101, 'mesbahygab', 'c16da4ad70df593520193184381b9f21', 'Mesbahy', 'Gabriel', 2),
(102, 'michalakst', 'c16da4ad70df593520193184381b9f21', 'Michalak', 'Stanislas', 2),
(103, 'michonmatt', 'c16da4ad70df593520193184381b9f21', 'Michon', 'Matthieu', 2),
(104, 'mongodinma', 'c16da4ad70df593520193184381b9f21', 'Mongodin', 'Maxime', 2),
(105, 'morannynic', 'c16da4ad70df593520193184381b9f21', 'Moranny', 'Nicolas', 2),
(106, 'morinmarwa', 'c16da4ad70df593520193184381b9f21', 'Morin', 'Marwan', 2),
(107, 'moubarakha', 'c16da4ad70df593520193184381b9f21', 'Moubarak', 'Hannoun', 2),
(108, 'mulleraloi', 'c16da4ad70df593520193184381b9f21', 'Muller', 'Alo', 2),
(109, 'nguonmicka', 'c16da4ad70df593520193184381b9f21', 'Nguon', 'Mickael', 2),
(110, 'nguyennico', 'c16da4ad70df593520193184381b9f21', 'Nguyen', 'Nicolas', 2),
(111, 'nguyentun', 'c16da4ad70df593520193184381b9f21', 'Nguyen', 'Tung-Trac', 2),
(112, 'nicolasque', 'c16da4ad70df593520193184381b9f21', 'Nicolas', 'Quentin', 2),
(113, 'noretsebas', 'c16da4ad70df593520193184381b9f21', 'Noret', 'Sebastien', 2),
(114, 'normandgui', 'c16da4ad70df593520193184381b9f21', 'Normand', 'Guillaume', 2),
(115, 'noshymicka', 'c16da4ad70df593520193184381b9f21', 'Noshy', 'Mickael', 2),
(116, 'onddercan', 'c16da4ad70df593520193184381b9f21', 'Ondder', 'Can', 2),
(117, 'oueriemime', 'c16da4ad70df593520193184381b9f21', 'Oueriemi', 'Mehdy', 2),
(118, 'ozoufguill', 'c16da4ad70df593520193184381b9f21', 'Ozouf', 'Guillaume', 2),
(119, 'papillonth', 'c16da4ad70df593520193184381b9f21', 'Papillon', 'Thomas', 2),
(120, 'parayjulie', 'c16da4ad70df593520193184381b9f21', 'Paray', 'Julie', 2),
(121, 'passinaygu', 'c16da4ad70df593520193184381b9f21', 'Passinay', 'Guillaume', 2),
(122, 'peignonmel', 'c16da4ad70df593520193184381b9f21', 'Peignon', 'Melvyn', 2),
(123, 'peleszezak', 'c16da4ad70df593520193184381b9f21', 'Peleszezak', 'Laetitia', 2),
(124, 'phinithflo', 'c16da4ad70df593520193184381b9f21', 'Phinith', 'Florian', 2),
(125, 'pinquieray', 'c16da4ad70df593520193184381b9f21', 'Pinquier', 'Aymeric', 2),
(126, 'prosperire', 'c16da4ad70df593520193184381b9f21', 'Prosperi', 'Remi', 2),
(127, 'ptaceknico', 'c16da4ad70df593520193184381b9f21', 'Ptacek', 'Nicolas', 2),
(128, 'pelekhinep', 'c16da4ad70df593520193184381b9f21', 'Pelekhine', 'Pierre', 2),
(129, 'raberinjul', 'c16da4ad70df593520193184381b9f21', 'Raberin', 'Julien', 2),
(130, 'ragotpaul', 'c16da4ad70df593520193184381b9f21', 'Ragot', 'Paul', 2),
(131, 'ranaivoson', 'c16da4ad70df593520193184381b9f21', 'Ranaivoson', 'Dialinandrianina', 2),
(132, 'rasamoelis', 'c16da4ad70df593520193184381b9f21', 'Rasamoelison', 'Lawrencio', 2),
(133, 'raynaudfla', 'c16da4ad70df593520193184381b9f21', 'Raynaud', 'Flavien', 2),
(134, 'rosaalexis', 'c16da4ad70df593520193184381b9f21', 'Rosa', 'Alexis', 2),
(135, 'rostaingan', 'c16da4ad70df593520193184381b9f21', 'Rostaing', 'Antonin', 2),
(136, 'roykeny', 'c16da4ad70df593520193184381b9f21', 'Roy', 'Keny', 2),
(137, 'roymatthie', 'c16da4ad70df593520193184381b9f21', 'Roy', 'Matthieu', 2),
(138, 'sambandamg', 'c16da4ad70df593520193184381b9f21', 'Sambandam', 'Ghislain', 2),
(139, 'sarreauoli', 'c16da4ad70df593520193184381b9f21', 'Sarreau', 'Olivier', 2),
(140, 'savinthiba', 'c16da4ad70df593520193184381b9f21', 'Savin', 'Thibault', 2),
(141, 'schmittthi', 'c16da4ad70df593520193184381b9f21', 'Schmitt', 'Thibaut', 2),
(142, 'schollaert', 'c16da4ad70df593520193184381b9f21', 'Schollaert', 'Thomas', 2),
(143, 'sedougasab', 'c16da4ad70df593520193184381b9f21', 'Sedouga', 'Sabrina', 2),
(144, 'sereteponi', 'c16da4ad70df593520193184381b9f21', 'Seret', 'Eponine', 2),
(145, 'simoussapa', 'c16da4ad70df593520193184381b9f21', 'Si Moussa', 'Paul', 2),
(146, 'simonvince', 'c16da4ad70df593520193184381b9f21', 'Simon', 'Vincent', 2),
(147, 'simonnatha', 'c16da4ad70df593520193184381b9f21', 'Simon', 'Nathaniel', 2),
(148, 'simonivinc', 'c16da4ad70df593520193184381b9f21', 'Simoni', 'Vincent', 2),
(149, 'sylveriuss', 'c16da4ad70df593520193184381b9f21', 'Sylverius', 'Surya', 2),
(150, 'tajosselin', 'c16da4ad70df593520193184381b9f21', 'Ta', 'Josselin', 2),
(151, 'tabogamarc', 'c16da4ad70df593520193184381b9f21', 'Taboga', 'Marc', 2),
(152, 'testiermar', 'c16da4ad70df593520193184381b9f21', 'Testier', 'Marc-Antoine', 2),
(153, 'thayaparan', 'c16da4ad70df593520193184381b9f21', 'Thayaparan', 'Jeevithan', 2),
(154, 'thebaultvi', 'c16da4ad70df593520193184381b9f21', 'Thebault', 'Victor', 2),
(155, 'thibaudale', 'c16da4ad70df593520193184381b9f21', 'Thibaud', 'Alexandre', 2),
(156, 'thomasdemo', 'c16da4ad70df593520193184381b9f21', 'Thomas De Montprevil', 'Henri', 2),
(157, 'torrepierr', 'c16da4ad70df593520193184381b9f21', 'Torre', 'Pierre', 2),
(158, 'tourneuxce', 'c16da4ad70df593520193184381b9f21', 'Tourneux', 'Celeste', 2),
(159, 'transylvai', 'c16da4ad70df593520193184381b9f21', 'Tran', 'Sylvain', 2),
(160, 'tschupparn', 'c16da4ad70df593520193184381b9f21', 'Tschupp', 'Arnaud', 2),
(161, 'vandiniflo', 'c16da4ad70df593520193184381b9f21', 'Vandini', 'Florian', 2),
(162, 'vansadiara', 'c16da4ad70df593520193184381b9f21', 'Vansadia', 'Rajdip', 2),
(163, 'villaincle', 'c16da4ad70df593520193184381b9f21', 'Villain', 'Clement', 2),
(164, 'zambazamba', 'c16da4ad70df593520193184381b9f21', 'Zamba-Zamba', 'Fady', 2),
(200, 'Georgebart', 'd450c5dbcc10db0749277efc32f15f9f', 'George', 'Bartholomew', 3),
(201, 'Eljanatiab', 'd450c5dbcc10db0749277efc32f15f9f', 'El Janati', 'Abdessalam', 3),
(202, 'Perraultbr', 'd450c5dbcc10db0749277efc32f15f9f', 'Perrault', 'Brigitte', 3),
(203, 'Bustonmari', 'd450c5dbcc10db0749277efc32f15f9f', 'Buston', 'Marie-Helene', 3),
(204, 'Danielvale', 'd450c5dbcc10db0749277efc32f15f9f', 'Daniel', 'Valerie', 3),
(205, 'Hammoumrac', 'd450c5dbcc10db0749277efc32f15f9f', 'Hammoum', 'Rachid', 3),
(206, 'Almouznigu', 'd450c5dbcc10db0749277efc32f15f9f', 'Almouzni', 'Guy', 3),
(207, 'Baskiotisd', 'd450c5dbcc10db0749277efc32f15f9f', 'Baskiotis', 'Despina', 3),
(208, 'Bornhofens', 'd450c5dbcc10db0749277efc32f15f9f', 'Bornhofen', 'Stefan', 3),
(209, 'Lamouriine', 'd450c5dbcc10db0749277efc32f15f9f', 'Lamouri', 'Ines', 3),
(210, 'Sabramaher', 'd450c5dbcc10db0749277efc32f15f9f', 'Sabra', 'Maher', 3),
(211, 'eleve', 'c16da4ad70df593520193184381b9f21', 'eleve', 'eleve', 2),
(212, 'prof', 'd450c5dbcc10db0749277efc32f15f9f', 'prof', 'prof', 3),
(213, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 4),
(217, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
