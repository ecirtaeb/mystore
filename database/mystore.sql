-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 24 Mai 2018 à 16:30
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL COMMENT 'index panier',
  `id_user` int(4) NOT NULL COMMENT 'identifiant user',
  `id_product` int(4) NOT NULL COMMENT 'index produit',
  `quantity` int(2) NOT NULL COMMENT 'quantité'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL COMMENT 'id',
  `name` varchar(250) NOT NULL COMMENT 'nom produit',
  `price` int(11) NOT NULL COMMENT 'prix en centimes',
  `description` mediumtext NOT NULL COMMENT 'description',
  `photo` varchar(250) NOT NULL DEFAULT 'nophoto.png' COMMENT 'photo',
  `quantity` int(11) NOT NULL COMMENT 'quantité',
  `is_active` tinyint(1) NOT NULL COMMENT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Produits';

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES
(1, 'rateau', 50, 'rateau bleu', 'nophoto.png', 50, 1),
(2, 'bouée canard', 50, 'bouée canard gonflable jaune...canard\r\n', 'boueecanard.png', 50, 1),
(3, 'lot arrosoirs', 20, 'lot de 2 arrosoirs en plastique', 'arrosoir.png', 50, 1),
(4, 'château de sable modèle 1', 15, 'Château à construire livré avec sac de sable et plan.\r\nPhoto non contractuelle.', 'chateau1.png', 50, 1),
(5, 'pelle', 1500, 'pelle verte', 'nophoto.png', 50, 1),
(6, 'seau', 22, 'seau bleu décors requin pour faire peur aux enfants', 'seaurequin.png', 75, 0),
(7, 'seau', 8000, 'seau métal décors Minie', 'seaumetal.png', 75, 1),
(8, 'seau', 8000, 'set seau jaune', 'set1.png', 75, 0),
(9, 'château de sable modèle 2', 25, 'kit comprenant un sac de sable et le plan de construction\r\nPhoto non contractuelle', 'chateau2.png', 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL COMMENT 'identifiant user',
  `firstname` varchar(255) NOT NULL COMMENT 'nom',
  `lastname` varchar(255) NOT NULL COMMENT 'prénom',
  `email` varchar(255) NOT NULL COMMENT 'mail',
  `password` varchar(255) NOT NULL COMMENT 'mot de passe',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `is_active`) VALUES
(1, 'Béatrice', 'N', 'beatrice@mail.fr', 'pouet', 1),
(2, 'Barnabé', 'NABE', 'bnabe@toto.fr', 'mdp', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'index panier';
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identifiant user', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
