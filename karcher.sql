-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 08 nov. 2022 à 13:17
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `karcher`
--

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `year` int(11) NOT NULL,
  `time_limit` date NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `image`, `model`, `brand`, `description`, `year`, `time_limit`, `price`) VALUES
(1, 'https://public.aramisauto.com/cdn-cgi/image/width=276,quality=85,f=auto/https://storage.googleapis.com/aramis_vehicles/production/stock/vo/578943/image/360/peugeot-3008-allure-20221019180444-578943-100001-medium.jpg', 'Dacia Duster', 'Dacia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut feugiat est, vitae vulputate justo. Mauris fermentum molestie sem egestas posuere. Aliquam quis dignissim tortor. Donec commodo eros enim. Mauris quis fringilla sapien. Curabitur bibendum iaculis tempor. Maecenas lobortis volutpat ex vitae gravida. Nunc bibendum, diam quis semper vestibulum, eros quam eleifend elit, eu condimentum magna tellus non nunc. Morbi consequat quis tellus quis pharetra. Fusce vestibulum volutpat ex tempus vehicula. Aliquam erat volutpat. Proin aliquam malesuada urna ut tempor.', 2022, '2023-12-20', 21.191),
(2, 'https://public.aramisauto.com/cdn-cgi/image/width=276,quality=85,f=auto/https://storage.googleapis.com/aramis_vehicles/production/stock/vo/578943/image/360/peugeot-3008-allure-20221019180444-578943-100001-medium.jpg', 'Peugeot 208', 'Peugeot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut feugiat est, vitae vulputate justo. Mauris fermentum molestie sem egestas posuere. Aliquam quis dignissim tortor. Donec commodo eros enim. Mauris quis fringilla sapien. Curabitur bibendum iaculis tempor. Maecenas lobortis volutpat ex vitae gravida. Nunc bibendum, diam quis semper vestibulum, eros quam eleifend elit, eu condimentum magna tellus non nunc. Morbi consequat quis tellus quis pharetra. Fusce vestibulum volutpat ex tempus vehicula. Aliquam erat volutpat. Proin aliquam malesuada urna ut tempor.', 2016, '2022-11-09', 9780),
(3, 'https://public.aramisauto.com/cdn-cgi/image/width=276,quality=85,f=auto/https://storage.googleapis.com/aramis_vehicles/production/stock/vo/578943/image/360/peugeot-3008-allure-20221019180444-578943-100001-medium.jpg', 'Peugeot 3008', 'Peugeot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut feugiat est, vitae vulputate justo. Mauris fermentum molestie sem egestas posuere. Aliquam quis dignissim tortor. Donec commodo eros enim. Mauris quis fringilla sapien. Curabitur bibendum iaculis tempor. Maecenas lobortis volutpat ex vitae gravida. Nunc bibendum, diam quis semper vestibulum, eros quam eleifend elit, eu condimentum magna tellus non nunc. Morbi consequat quis tellus quis pharetra. Fusce vestibulum volutpat ex tempus vehicula. Aliquam erat volutpat. Proin aliquam malesuada urna ut tempor.', 2018, '2022-11-24', 22310);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Damien', 'Fleurot', 'Fleurot.damien@gmail.com', 'Le meilleur avant rouslan'),
(2, 'Rouslan', 'Abaev', 'Abaev.rouslan@gogole.com', 'le plus fort en chocapic'),
(3, 'Laura', 'Bacime', 'Bacime.Laura@gmail.com', 'La meilleur avant rouslan aussi :)');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
