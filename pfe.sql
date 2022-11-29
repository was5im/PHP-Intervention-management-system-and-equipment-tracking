-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 déc. 2020 à 20:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

DROP TABLE IF EXISTS `agences`;
CREATE TABLE IF NOT EXISTS `agences` (
  `A_id` varchar(24) NOT NULL,
  `U_id` varchar(24) NOT NULL,
  `DR_id` varchar(24) NOT NULL,
  `Aname` text NOT NULL,
  `Uname` text NOT NULL,
  `A_code` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`A_id`),
  KEY `U_id` (`U_id`),
  KEY `DR_id` (`DR_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`A_id`, `U_id`, `DR_id`, `Aname`, `Uname`, `A_code`, `date`) VALUES
('076', '0761', '691', 'El Hadjar site Sider', 'Badri Amine', '706', '2020-09-27'),
('077', '0771', '691', 'Annaba site Asmidal', 'Gharbi Mohamed', 'fff', '2020-09-27'),
('085', '0851', '691', 'Skikda st Sonatrach', 'Laraba Oussama', 'aaa', '2020-09-27'),
('335', '3351', '691', 'Agence annaba-est', 'Rahim Anis', '333', '2020-09-27');

-- --------------------------------------------------------

--
-- Structure de la table `cimetiere`
--

DROP TABLE IF EXISTS `cimetiere`;
CREATE TABLE IF NOT EXISTS `cimetiere` (
  `C_id` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `Cmarque` text NOT NULL,
  `Cname` text NOT NULL,
  `Ccpu` text NOT NULL,
  `Cram` text NOT NULL,
  `Ctram` text NOT NULL,
  `Cdisk` text NOT NULL,
  `Ctdisk` text NOT NULL,
  `Cdplus` text NOT NULL,
  `CdateA` date NOT NULL,
  `CdateS` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`C_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cimetiere`
--

INSERT INTO `cimetiere` (`C_id`, `id`, `Cmarque`, `Cname`, `Ccpu`, `Cram`, `Ctram`, `Cdisk`, `Ctdisk`, `Cdplus`, `CdateA`, `CdateS`) VALUES
('1EZGS3', '676', 'DELL', 'XPS', 'Intel i9', '16GB', 'DDR4L-SDRAM', '1TB', 'HDD', 'OUI', '2020-08-26', '2020-09-01 20:55:19'),
('45F56D', '1101', 'Lenovo', 'Latitud177H', 'intel i9', '16GB', 'DDR4-SDRAM', '1 TB', 'HDD', 'NON', '2020-08-31', '2020-09-01 18:39:03'),
('45F56E', '042', 'HP', 'Latitud145P', '', '', '', '', 'HDD', 'NON', '2020-08-31', '2020-09-09 18:53:34'),
('45F56F', '042', 'Hp', 'Lb2017', '', '', '', '', 'HDD', 'NON', '2020-08-31', '2020-09-25 20:46:02'),
('45F56K', '1101', 'Hp', 'Lb2017', 'intel i7', '8GB', 'DDR3-SDRAM', '1 TB', 'HDD', 'NON', '2020-08-31', '2020-09-01 18:39:04'),
('45FDGR', '724', 'DELL', 'XPS13', 'intel i7', '8GB', 'DDR3-SDRAM', '500 GB', 'SSD', 'NON', '2020-09-27', '2020-09-27 21:16:48'),
('45FE4F', '724', 'DELL', 'XPS15', 'intel i9', '16GB', 'DDR4-SDRAM', '256 GB', 'SSD', 'NON', '2020-09-27', '2020-10-26 08:13:45'),
('a', 'a', 'a', 'a', '', '8GB', 'DDR4L-SDRAM', '500GB', 'HDD', 'NON', '2020-09-01', '2020-09-01 20:25:25'),
('AAAA', '2000', 'TOUCHIBA', 'SRC2333', 'Intel i5', '8GB', 'DDR4L-SDRAM', '1TB', 'SSD', 'NON', '2020-09-14', '2020-09-14 23:15:23'),
('AFDV33', '1101', 'DELL', 'LATITUDE', 'Intel i5', '16GB', 'DDR4L-SDRAM', '500GB', 'SSD', 'NON', '2020-08-29', '2020-09-01 18:39:05'),
('FFFR', '042', 'Dell', 'Xaps', 'Intel i5', '8GB', 'DDR4L-SDRAM', '500GB', 'HDD', 'NON', '2020-08-31', '2020-09-25 20:46:03'),
('FG009G', '724', 'DELL', 'Latitud9240', 'intel i7', '8GB', 'DDR3-SDRAM', '500 GB', 'HDD', 'NON', '2020-09-27', '2020-10-26 08:13:54'),
('FHR567', '724', 'Lenovo', 'Ideapad', 'intel i9', '16GB', 'DDR4-SDRAM', '1 TB', 'SSD', 'NON', '2020-09-27', '2020-10-24 19:48:30'),
('GFT67HY', '001', 'LENOVO', 'THINKPAD', 'Intel i9', '16GB', 'DDR4L-SDRAM', '1TB', 'HDD', 'OUI', '2020-08-31', '2020-10-26 08:13:54'),
('GHT67YH', '691', 'HP', 'SPECTER', 'Intel i7', '16GB', 'DDR3L-SDRAM', '500GB', 'SSD', 'OUI', '2020-08-20', '2020-10-26 08:13:55'),
('H56GH', '100', 'Hp', 'Specter360', '', '8GB', '', '', 'SSD', 'NON', '2020-09-27', '2020-10-26 08:13:55'),
('SADZD', '1101', 'DELL', 'XPS', 'Intel i5', '8GB', 'DDR3L-SDRAM', '500GB', 'SSD', 'NON', '2020-09-02', '2020-09-25 20:46:07'),
('ZR5GGD3', '1101', 'APPLE', 'MACBOOK PRO', 'Intel i7', '8GB', 'DDR4L-SDRAM', '500GB', 'SSD', 'NON', '2020-08-29', '2020-09-27 21:14:19');

-- --------------------------------------------------------

--
-- Structure de la table `directions`
--

DROP TABLE IF EXISTS `directions`;
CREATE TABLE IF NOT EXISTS `directions` (
  `D_id` varchar(24) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `Dname` text NOT NULL,
  `Uname` text NOT NULL,
  `D_code` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`D_id`),
  KEY `U_id` (`U_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `directions`
--

INSERT INTO `directions` (`D_id`, `U_id`, `Dname`, `Uname`, `D_code`, `date`) VALUES
('444', '4441', 'DGA COMMERCIALE', 'Madani chakib', 'chakib', '2020-10-31');

-- --------------------------------------------------------

--
-- Structure de la table `direction_r`
--

DROP TABLE IF EXISTS `direction_r`;
CREATE TABLE IF NOT EXISTS `direction_r` (
  `DR_id` varchar(11) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `Dname` text NOT NULL,
  `Uname` text NOT NULL,
  `DR_code` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`DR_id`),
  KEY `U_id` (`U_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `direction_r`
--

INSERT INTO `direction_r` (`DR_id`, `U_id`, `Dname`, `Uname`, `DR_code`, `date`) VALUES
('691', '6911', 'Direction Regionale Annaba', 'faycal abdou', 'faycal', '2020-08-14');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `D_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `id_inter` varchar(11) COLLATE utf8_bin NOT NULL,
  `objet` text CHARACTER SET utf8 NOT NULL,
  `descreption` text CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL,
  `pdf` text CHARACTER SET utf8 NOT NULL,
  `dateR` datetime NOT NULL,
  `Solution` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`id`, `D_id`, `id_inter`, `objet`, `descreption`, `date`, `pdf`, `dateR`, `Solution`) VALUES
(36, '691', '31111', 'azerty', 'hhhhh', '2020-10-26 09:01:01', 'document/interventions/description5f96904d47473.pdf', '2020-10-28 14:00:39', 'c rÃ©glÃ©'),
(34, '724', '11111', 'Panne Ecrant', 'j&#039;ai l&#039;&eacute;crant qui s&#039;alume pas', '2020-09-27 21:47:22', 'document/interventions/description5f71086a73587.pdf', '2020-09-27 21:48:27', 'il suffit just de bien branchÃ© le cable HDMI'),
(35, '335', '31111', 'SOFTWARE', 'SALUT TT LE MONDE DE BEA', '2020-10-26 08:54:08', 'document/interventions/description5f968eb081458.pdf', '2020-10-26 08:55:22', 'salut c mehdi'),
(33, '691', '11111', 'Hardware', 'j&#039;ai cass&eacute; par erreur le boutton de d&eacute;marage au niveau du boitier', '2020-09-27 18:52:04', 'document/interventions/description5f70df5497f66.pdf', '2020-09-27 22:00:26', 'c rÃ©glÃ©'),
(32, '691', '31111', 'Software', 'j&#039;ai un probleme au niveau de d&eacute;marage de ma machine ', '2020-09-27 18:49:44', 'document/interventions/description5f70dec876253.pdf', '2020-10-25 22:11:23', ''),
(37, '077', '0', 'Reparation Imprimante', 'Nous vous prions de bien vouloir nous depecher un technicien en maintenance afin de remettre en etat de fonctionement de plusieurs imprimantes en pannes  ', '2020-10-31 09:17:23', 'document/interventions/description5f9d2ba37cdc2.pdf', '1111-11-11 11:11:11', '//'),
(38, '077', '0', 'Installation Antivirus', 'Nous vous prions de bien vouloir nous installer un antivirus sur les ordinateurs  ', '2020-10-31 09:29:26', 'document/interventions/description5f9d2e767bcee.pdf', '1111-11-11 11:11:11', '//');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `M_id` varchar(50) NOT NULL,
  `id` varchar(24) NOT NULL,
  `marque` text NOT NULL,
  `Mname` text NOT NULL,
  `cpu` text NOT NULL,
  `ram` text NOT NULL,
  `Tram` text NOT NULL,
  `disk` text NOT NULL,
  `Tdisk` text NOT NULL,
  `Dplus` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`M_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`M_id`, `id`, `marque`, `Mname`, `cpu`, `ram`, `Tram`, `disk`, `Tdisk`, `Dplus`, `date`) VALUES
('45F56D', '1111', 'Lenovo01', 'Thinkpad', '', '16GB', '', '', 'SSD', 'NON', '2020-10-26'),
('45F56K', '1111', 'Hp', 'Specter X1', 'intel i7', '8GB', 'DDR3-SDRAM', '1 TB', 'HDD', 'NON', '2020-10-26'),
('45FDGR', '1111', 'DELL', 'XPS13', 'intel i7', '8GB', 'DDR3-SDRAM', '500 GB', 'SSD', 'NON', '2020-10-26'),
('45FE4F', '1111', 'DELL', 'XPS15', 'intel i9', '16GB', 'DDR4-SDRAM', '256 GB', 'SSD', 'NON', '2020-10-26'),
('FG009G', '1111', 'DELL', 'Latitud9240', '', '8GB', '', '', 'SSD', 'NON', '2020-10-26'),
('FHR567', '1111', 'Lenovo', 'Ideapad', 'intel i9', '16GB', 'DDR4-SDRAM', '1 TB', 'SSD', 'NON', '2020-10-26'),
('H56GH', '1111', 'Hp', 'Specter360', 'intel i7', '8GB', 'DDR3-SDRAM', '1 TB', 'SSD', 'NON', '2020-10-26'),
('RTX3070', '077', 'HP', 'Specter', 'Intel i7', '8GB', 'DDR4L-SDRAM', '500GB', 'SSD', 'NON', '2020-10-31'),
('RTX3080', '077', 'dell', 'dell', 'Intel i5', '8GB', 'DDR3L-SDRAM', '500GB', 'HDD', 'NON', '2020-10-31');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `S_id` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `Smarque` text NOT NULL,
  `Sname` text NOT NULL,
  `Scpu` text NOT NULL,
  `Sram` text NOT NULL,
  `Stram` text NOT NULL,
  `Sdisk` text NOT NULL,
  `Stdisk` text NOT NULL,
  `Sdplus` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`S_id`, `id`, `Smarque`, `Sname`, `Scpu`, `Sram`, `Stram`, `Sdisk`, `Stdisk`, `Sdplus`, `date`) VALUES
('45F56K', '1101', 'Hp', 'Specter X1', '', '16GB', 'DDR4L-SDRAM', '1TB', 'HDD', 'NON', '2020-09-27'),
('45FDGR', '1101', 'DELL', 'XPS13', '', '8GB', '', '', 'SSD', 'OUI', '2020-09-27'),
('45FE4F', '1101', 'DELL', 'XPS15', 'intel i9', '16GB', 'DDR4-SDRAM', '256 GB', 'SSD', 'NON', '2020-09-27'),
('FG009G', '1101', 'DELL', 'Latitud9240', 'intel i7', '8GB', 'DDR3-SDRAM', '500 GB', 'HDD', 'NON', '2020-09-27');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `U_id` varchar(11) NOT NULL,
  `id` varchar(24) NOT NULL,
  `DR_id` varchar(24) NOT NULL,
  `Uname` text NOT NULL,
  `Dname` text NOT NULL,
  `type` text NOT NULL,
  `U_code` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`U_id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`U_id`, `id`, `DR_id`, `Uname`, `Dname`, `type`, `U_code`, `date`) VALUES
('11011', '1101', '0', 'Wassim Behiani', 'Direction des systemes d\'informations', 'DR', 'admin', '2020-08-14'),
('41111', '1101', '0', 'Laraba Oussama', 'Direction des systemes d\'information', 'TS', 'ous', '2020-09-27'),
('4441', '444', '0', 'Madani chakib', 'DGA COMMERCIALE', 'EMP', 'chakib', '2020-10-31'),
('3351', '335', '691', 'Rahim Anis', 'Agence annaba-est', 'EMP', '333', '2020-09-27'),
('11111', '1111', '0', 'EL-moubarek Faycal', 'Direction des systemes d\'informations', 'TS', 'faycal', '2020-09-16'),
('6911', '691', '0', 'faycal abdou', 'Direction Regionale Annaba', 'COR', 'faycal', '2020-08-14'),
('0771', '077', '691', 'Gharbi Mohamed', 'Annaba site Asmidal', 'EMP', 'fff', '2020-09-27'),
('31111', '1101', '0', 'Behiani Mohamed', 'Direction des systemes d\'information', 'TS', 'wassim', '2020-09-27'),
('0761', '076', '691', 'Badri Amine', 'El Hadjar site Sider', 'EMP', '706', '2020-09-27'),
('0851', '085', '691', 'Laraba Oussama', 'Skikda st Sonatrach', 'EMP', 'aaa', '2020-09-27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
