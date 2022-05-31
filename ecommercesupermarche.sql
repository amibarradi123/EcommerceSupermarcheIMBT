-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 31 mai 2022 à 15:38
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommercesupermarche`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `Id_Categorie` int(10) NOT NULL,
  `Nom_Catégorie` varchar(20) NOT NULL,
  `Photo_Categorie` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`Id_Categorie`, `Nom_Catégorie`, `Photo_Categorie`) VALUES
(1, 'Fruits & Legumes', ''),
(2, 'Snacks', '');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Id_Client` int(10) NOT NULL,
  `Nom_Client` varchar(20) NOT NULL,
  `Prenom_Client` varchar(20) NOT NULL,
  `DateNaissance_Client` date NOT NULL,
  `Tel_Client` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `codepromo`
--

CREATE TABLE `codepromo` (
  `Id_CodePromo` int(10) NOT NULL,
  `CodePromo` varchar(30) NOT NULL,
  `Pourcentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `Id_Commande` int(10) NOT NULL,
  `Date_Commande` date NOT NULL,
  `Adresse_Liv_Commande` varchar(100) NOT NULL,
  `Montant_Commande` float NOT NULL,
  `Id_Client` int(10) NOT NULL,
  `Etat_Commande` enum('En attente','En cours','Valide') NOT NULL COMMENT 'en attente : commande incomplete\r\nEn cours : complete mais pas encore validé',
  `CodePromo` int(10) NOT NULL,
  `ModePaiement` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `Id_Commentaire` int(10) NOT NULL,
  `Text_Commentaire` varchar(100) NOT NULL,
  `Id_Client` int(10) NOT NULL,
  `Id_Produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `Id_Commande` int(10) NOT NULL,
  `Id_Produit` int(10) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `Id_Fournisseur` int(10) NOT NULL,
  `Nom_Fournisseur` varchar(20) NOT NULL,
  `Prenom_Fournisseur` varchar(20) NOT NULL,
  `DateNaissance_Fournisseur` date NOT NULL,
  `Tel_Fournisseur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images_produit`
--

CREATE TABLE `images_produit` (
  `Id_Image` int(10) NOT NULL,
  `url_Image` varchar(30) NOT NULL,
  `Id_Produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images_produit`
--

INSERT INTO `images_produit` (`Id_Image`, `url_Image`, `Id_Produit`) VALUES
(1, 'biscuit.jpg', 1),
(2, 'biscuit1.jpg', 1),
(3, 'tomate.webp', 2),
(4, 'tomate1.webp', 2);

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `Id_Livraison` int(10) NOT NULL,
  `Date_Livraison` date NOT NULL,
  `Adesse_Livraison` varchar(100) NOT NULL,
  `Id_Livreur` int(10) NOT NULL,
  `Id_Commande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `livreurs`
--

CREATE TABLE `livreurs` (
  `Id_Livreur` int(10) NOT NULL,
  `Nom_Livreur` varchar(30) NOT NULL,
  `Tel_Livreur` varchar(20) NOT NULL,
  `Email_Livreur` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `modepaiement`
--

CREATE TABLE `modepaiement` (
  `Id_ModePaiement` int(10) NOT NULL,
  `ModePaiement` enum('Paiement à la livraison','Carte Bancaire','Virement','PayPal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modepaiement`
--

INSERT INTO `modepaiement` (`Id_ModePaiement`, `ModePaiement`) VALUES
(1, 'Paiement à la livraison'),
(2, 'Carte Bancaire'),
(3, 'Virement'),
(4, 'PayPal');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id_Produit` int(10) NOT NULL,
  `Nom_Produit` varchar(20) NOT NULL,
  `Prix_Produit` float NOT NULL,
  `Quantite_Produit` int(10) NOT NULL,
  `Date_Pub_Produit` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `Id_Categorie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id_Produit`, `Nom_Produit`, `Prix_Produit`, `Quantite_Produit`, `Date_Pub_Produit`, `Id_Categorie`) VALUES
(1, 'Biscuits', 20, 300, '0000-00-00 00:00:00.000000', 2),
(2, 'Tomates', 4, 1000, '0000-00-00 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_Utilisateur` int(10) NOT NULL,
  `Nom_Utilisateur` varchar(20) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `MotDePasse` varchar(300) NOT NULL,
  `Etat` int(10) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'benami', 'maziine@icloud.com', NULL, '$2y$10$nSaU4GVqIhieudIZnc4jAuUEuuUvTDzyEFeHW4sx0z3cCs/XA4DdS', 'user', NULL, '2022-05-31 14:23:09', '2022-05-31 14:23:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id_Categorie`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_Client`);

--
-- Index pour la table `codepromo`
--
ALTER TABLE `codepromo`
  ADD PRIMARY KEY (`Id_CodePromo`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`Id_Commande`),
  ADD KEY `commande_client` (`Id_Client`),
  ADD KEY `commande_promo` (`CodePromo`),
  ADD KEY `Paiement_Commande` (`ModePaiement`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Id_Commentaire`),
  ADD KEY `commentaire_produit` (`Id_Client`),
  ADD KEY `commentaire_produit1` (`Id_Produit`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD KEY `Produit_Commandes` (`Id_Commande`),
  ADD KEY `Produit_Commandes1` (`Id_Produit`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`Id_Fournisseur`);

--
-- Index pour la table `images_produit`
--
ALTER TABLE `images_produit`
  ADD PRIMARY KEY (`Id_Image`),
  ADD KEY `image_produit` (`Id_Produit`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`Id_Livraison`),
  ADD KEY `commande_livraison` (`Id_Commande`),
  ADD KEY `livreur_commande` (`Id_Livreur`);

--
-- Index pour la table `livreurs`
--
ALTER TABLE `livreurs`
  ADD PRIMARY KEY (`Id_Livreur`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modepaiement`
--
ALTER TABLE `modepaiement`
  ADD PRIMARY KEY (`Id_ModePaiement`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_Produit`),
  ADD KEY `Produit_Categorie` (`Id_Categorie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_Utilisateur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id_Categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `codepromo`
--
ALTER TABLE `codepromo`
  MODIFY `Id_CodePromo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `Id_Commande` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Id_Commentaire` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_produit`
--
ALTER TABLE `images_produit`
  MODIFY `Id_Image` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `Id_Livraison` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livreurs`
--
ALTER TABLE `livreurs`
  MODIFY `Id_Livreur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `modepaiement`
--
ALTER TABLE `modepaiement`
  MODIFY `Id_ModePaiement` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `Id_Produit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_Utilisateur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `Paiement_Commande` FOREIGN KEY (`ModePaiement`) REFERENCES `modepaiement` (`Id_ModePaiement`),
  ADD CONSTRAINT `commande_client` FOREIGN KEY (`Id_Client`) REFERENCES `clients` (`Id_Client`),
  ADD CONSTRAINT `commande_promo` FOREIGN KEY (`CodePromo`) REFERENCES `codepromo` (`Id_CodePromo`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaire_produit` FOREIGN KEY (`Id_Client`) REFERENCES `clients` (`Id_Client`),
  ADD CONSTRAINT `commentaire_produit1` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `Produit_Commandes` FOREIGN KEY (`Id_Commande`) REFERENCES `commandes` (`Id_Commande`),
  ADD CONSTRAINT `Produit_Commandes1` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Contraintes pour la table `images_produit`
--
ALTER TABLE `images_produit`
  ADD CONSTRAINT `image_produit` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Contraintes pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD CONSTRAINT `commande_livraison` FOREIGN KEY (`Id_Commande`) REFERENCES `commandes` (`Id_Commande`),
  ADD CONSTRAINT `livreur_commande` FOREIGN KEY (`Id_Livreur`) REFERENCES `livreurs` (`Id_Livreur`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `Produit_Categorie` FOREIGN KEY (`Id_Categorie`) REFERENCES `categories` (`Id_Categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
