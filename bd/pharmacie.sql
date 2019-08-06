-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 06 août 2019 à 10:20
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `IdCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libeleCategorie` varchar(255) NOT NULL,
  PRIMARY KEY (`IdCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Fournisseur`
--

CREATE TABLE IF NOT EXISTS `Fournisseur` (
  `IdFounisseur` int(11) NOT NULL AUTO_INCREMENT,
  `Laboratoire` varchar(255) NOT NULL,
  `descriptionLab` longtext NOT NULL,
  `Telephone` varchar(127) NOT NULL,
  PRIMARY KEY (`IdFounisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Livraison`
--

CREATE TABLE IF NOT EXISTS `Livraison` (
  `IdFounisseur` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `dateL` date NOT NULL,
  `quant` int(11) NOT NULL,
  PRIMARY KEY (`IdFounisseur`,`idproduit`,`dateL`),
  KEY `fkLivraisonProduit` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE IF NOT EXISTS `Produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `libele` varchar(255) NOT NULL,
  `prixunitaire` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `IdCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idproduit`),
  KEY `IdCategorie` (`IdCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Livraison`
--
ALTER TABLE `Livraison`
  ADD CONSTRAINT `fkLivraisonFournisseur` FOREIGN KEY (`IdFounisseur`) REFERENCES `Fournisseur` (`IdFounisseur`),
  ADD CONSTRAINT `fkLivraisonProduit` FOREIGN KEY (`idproduit`) REFERENCES `Produit` (`idproduit`);

--
-- Contraintes pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD CONSTRAINT `fkProduitCategorie` FOREIGN KEY (`IdCategorie`) REFERENCES `Categorie` (`IdCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
