-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 mai 2018 à 19:18
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mystore`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nom article',
  `price` int(11) NOT NULL COMMENT 'prix en centimes',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'description',
  `photo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'photo',
  `quantity` int(11) NOT NULL COMMENT 'quantité en stock',
  `is_active` tinyint(1) NOT NULL COMMENT 'flag actif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='articles à vendre';

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES
(1, 'Bouée canard', 1500, 'Bouée gonflable, forme canard, jaune', 'boueecanard.png', 10, 1),
(2, 'bateau', 1500, 'Bateau plastique, voile rouge + figurine', 'bateau.png', 5, 1),
(3, 'chateau de sable modele 1', 2000, 'Château de sable à construire, livré avec sac de sable et plan', 'chateau1.png', 5, 1),
(4, 'chateau de sable modele 2', 2000, 'Château de sable à construire, livré avec sac de sable et plan', 'chateau2.png', 5, 1),
(5, 'chateau de sable modele 3', 2000, 'Château de sable à construire, livré avec sac de sable et plan', 'chateau3.png', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
