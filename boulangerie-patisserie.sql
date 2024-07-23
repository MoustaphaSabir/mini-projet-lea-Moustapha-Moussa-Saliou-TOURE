-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 juil. 2024 à 11:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boulangerie-patisserie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `id_niveau_1` int(11) NOT NULL,
  `id_niveau_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name`, `id_niveau_1`, `id_niveau_2`) VALUES
(1, 'boulangerie', 1, 0),
(2, 'nosPainsSpeciaux', 1, 1),
(3, 'nosbaguettesSpeciales', 1, 2),
(4, 'chocolaterie', 2, 0),
(5, 'chocolaterieRealise', 2, 1),
(6, 'chocolaterieConfiserie', 2, 2),
(7, 'patisserie', 3, 0),
(8, 'patisserieExclusive', 3, 1),
(9, 'patisserieClassiques', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `titre_image` varchar(255) NOT NULL,
  `description_image` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `url_image`, `titre_image`, `description_image`, `id_categorie`) VALUES
(1, '/images/imagesBoulangerie/boulangerie_seigle-feuillete-1.jpg', 'Le pavé nordik', ' Farine de blé, farine de seigle, orge et céréales\r\n', 2),
(2, '/images/imagesBoulangerie/boulangerie_le-pavé-du-boulanger.jpg         ', 'Le pavé du boulanger', 'Farine de blé, farine de seigle, céréales et levain\r\n', 2),
(3, '/images/imagesBoulangerie/boulangerie_le-maïs.jpg', 'Le pain du soleil', 'Farine de blé, de maïs, graines de tournesol', 2),
(4, '/images/imagesBoulangerie/boulangerie_le-nordik.jpg', 'Le pain 6 céréales', 'Farine de blé, de seigle et d’avoine, mélange de graines', 2),
(5, '/images/imagesBoulangerie/boulangerie_le-mueslie.jpg', 'Le muesli', 'Pain de mie avec un mélange de fruits secs et fruits confits', 2),
(6, '/images/imagesBoulangerie/boulangerie_le-chia-peps.jpg', 'Le chia pep’s', 'farine de blé, farine de maïs, graines de courge, de tournesol et de chia', 2),
(7, '/images/imagesBaguettes/boulangerie_la-cesame (1).jpg', 'La sésame', 'Baguette de tradition roulée dans du sésame', 3),
(8, '/images/imagesBaguettes/boulangerie_la-croustilliante.jpg', 'La croustillante', 'Baguette pétrie avec de la semoule de blé dur', 3),
(9, '/images/imagesBaguettes/boulangerie_la-graine.jpg', 'La graine', ' Baguette de tradition avec un mélange de graines', 3),
(10, '/images/imagesBaguettes/boulangerie_la-cesame (1).jpg', 'La pavot', 'Baguette de tradition avec un mélange de graines', 3),
(11, '/images/chocolaterie_tablette-praline-maison-v2.jpg', 'Tablette praliné maison', 'Découvrez notre tablette praliné fait maison, une véritable gourmandise pour les amateurs de chocolat et de praliné', 5),
(12, '/images/chocolaterie_rocher-pralines.jpg', 'Rochers praliné', 'Ces délicieuses bouchées sont le fruit d\'un savoir-faire artisanal ', 5),
(13, '/images/chocolaterie_ganache-framboise.jpg', 'chocolaterie service', 'Chocolats classiques : Ganaches, pralinés, truffes, et plus encore', 5),
(14, '/images/chocolaterie_service3.jpg', 'Ganache fruits de la passion', 'une création artisanale qui marie à la perfection le goût riche et velouté du chocolat avec la fraîcheur fruitée de la framboise', 5),
(15, '/images/chocolaterie_orangettes_citronettes.jpg', 'Orangettes citronettes', 'Riche du chocolat noir à la fraîcheur des zestes d\'agrumes', 5),
(16, '/images/twister-resize.jpg', 'Twister-resize', 'une véritable explosion de saveurs et de textures dans chaque bouchée', 5),
(17, '/images/chocolaterie_caramel-mou.jpg', 'caramel-mou', 'Offrez-vous une pause gourmande avec notre Twister-Resize et laissez-vous emporter par une expérience chocolatée irrésistible', 6),
(18, '/images/Pate_de_fruit2.jpg', 'Pate de fruit', 'Offrez-vous ou offrez à vos proches une expérience gourmande unique avec nos pâtes de fruit fait maison', 6),
(19, '/images/imagesPatisserieExclusives/choco-creme-brulee-1.jpg', 'Choco creme brule', 'Mousse chocolat 70% de cacao insert crème brulée', 8),
(20, '/images/imagesPatisserieExclusives/concorde-1.jpg', 'Le Concorde', 'Une mousse au chocolat avec une meringue légère au chocolat.', 8),
(21, '/images/imagesPatisserieExclusives/patisserie_pistache-framboise.jpg', 'La Pistache-framboise', 'Pistache avec crémeux framboise et biscuit financier', 8),
(22, '/images/imagesPatisserieExclusives/patisserie_chouuquette.jpg', 'La Chouuquette', 'Chouquette garnie à la mousse vanille', 8),
(23, '/images/imagesPatisserieExclusives/patisserie_le-signature-3.jpg', 'La signature', 'Mousse au chocolat 70% de cacao, croustillant praliné, crémeux au chocolat et caramel coulant.\r\n', 8),
(24, '/images/imagesPatisserieExclusives/patisserie_ecureuil.jpg', 'Ecureil', 'Mousse au chocolat avec lit de caramel et croustillant praliné', 8),
(26, '/images/imagesPatisserieClassiques/patisserie_religieuses.jpg', 'Les religieuses', '', 9),
(34, '/images/imagesPatisserieExclusives/patisserie_le-ritzy.jpg', 'Le ritzy', 'Mousse ananas et mousse passion, marmelade d’ananas flambé au rhum et croustillant praliné', 8),
(38, '/images/imagesPatisserieExclusives/patisserie_le-royal.jpg', 'Le royal', 'Mousse au chocolat 55% de cacao, croustillant praliné', 8),
(39, '/images/imagesPatisserieClassiques/patisserie_meringue-chocolat.jpg', 'La tarte aux citron chocolat', '', 9),
(40, '/images/imagesPatisserieClassiques/patisserie_macarons.jpg', 'Les macarons', '', 9),
(41, '/images/imagesPatisserieClassiques/patisserie_tarte-profiterole.jpg', 'La tarte profiteroles', '', 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
