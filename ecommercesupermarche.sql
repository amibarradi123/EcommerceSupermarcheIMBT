-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Creato il: Mag 26, 2022 alle 23:34
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercesupermarche`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categories`
--

CREATE TABLE `categories` (
  `Id_Categorie` int(10) NOT NULL,
  `Nom_Catégorie` varchar(20) NOT NULL,
  `Photo_Categorie` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categories`
--

INSERT INTO `categories` (`Id_Categorie`, `Nom_Catégorie`, `Photo_Categorie`) VALUES
(1, 'Fruits & Legumes', ''),
(2, 'Snacks', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `clients`
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
-- Struttura della tabella `codepromo`
--

CREATE TABLE `codepromo` (
  `Id_CodePromo` int(10) NOT NULL,
  `CodePromo` varchar(30) NOT NULL,
  `Pourcentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `commandes`
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
-- Struttura della tabella `commentaires`
--

CREATE TABLE `commentaires` (
  `Id_Commentaire` int(10) NOT NULL,
  `Text_Commentaire` varchar(100) NOT NULL,
  `Id_Client` int(10) NOT NULL,
  `Id_Produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `details_commande`
--

CREATE TABLE `details_commande` (
  `Id_Commande` int(10) NOT NULL,
  `Id_Produit` int(10) NOT NULL,
  `Quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `fournisseurs`
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
-- Struttura della tabella `images_produit`
--

CREATE TABLE `images_produit` (
  `Id_Image` int(10) NOT NULL,
  `url_Image` varchar(30) NOT NULL,
  `Id_Produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `images_produit`
--

INSERT INTO `images_produit` (`Id_Image`, `url_Image`, `Id_Produit`) VALUES
(1, 'biscuit.jpg', 1),
(2, 'biscuit1.jpg', 1),
(3, 'tomate.webp', 2),
(4, 'tomate1.webp', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `livraisons`
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
-- Struttura della tabella `livreurs`
--

CREATE TABLE `livreurs` (
  `Id_Livreur` int(10) NOT NULL,
  `Nom_Livreur` varchar(30) NOT NULL,
  `Tel_Livreur` varchar(20) NOT NULL,
  `Email_Livreur` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `modepaiement`
--

CREATE TABLE `modepaiement` (
  `Id_ModePaiement` int(10) NOT NULL,
  `ModePaiement` enum('Paiement à la livraison','Carte Bancaire','Virement','PayPal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `modepaiement`
--

INSERT INTO `modepaiement` (`Id_ModePaiement`, `ModePaiement`) VALUES
(1, 'Paiement à la livraison'),
(2, 'Carte Bancaire'),
(3, 'Virement'),
(4, 'PayPal');

-- --------------------------------------------------------

--
-- Struttura della tabella `produits`
--

CREATE TABLE `produits` (
  `Id_Produit` int(10) NOT NULL,
  `Nom_Produit` varchar(20) NOT NULL,
  `Prix_Produit` float NOT NULL,
  `Quantite_Produit` int(10) NOT NULL,
  `Date_Pub_Produit` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Id_Categorie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `produits`
--

INSERT INTO `produits` (`Id_Produit`, `Nom_Produit`, `Prix_Produit`, `Quantite_Produit`, `Date_Pub_Produit`, `Id_Categorie`) VALUES
(1, 'Biscuits', 20, 300, '0000-00-00 00:00:00.000000', 2),
(2, 'Tomates', 4, 1000, '0000-00-00 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `Id_Utilisateur` int(10) NOT NULL,
  `Nom_Utilisateur` varchar(20) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `MotDePasse` varchar(300) NOT NULL,
  `Etat` int(10) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id_Categorie`);

--
-- Indici per le tabelle `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_Client`);

--
-- Indici per le tabelle `codepromo`
--
ALTER TABLE `codepromo`
  ADD PRIMARY KEY (`Id_CodePromo`);

--
-- Indici per le tabelle `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`Id_Commande`),
  ADD KEY `commande_client` (`Id_Client`),
  ADD KEY `commande_promo` (`CodePromo`),
  ADD KEY `Paiement_Commande` (`ModePaiement`);

--
-- Indici per le tabelle `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Id_Commentaire`),
  ADD KEY `commentaire_produit` (`Id_Client`),
  ADD KEY `commentaire_produit1` (`Id_Produit`);

--
-- Indici per le tabelle `details_commande`
--
ALTER TABLE `details_commande`
  ADD KEY `Produit_Commandes` (`Id_Commande`),
  ADD KEY `Produit_Commandes1` (`Id_Produit`);

--
-- Indici per le tabelle `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`Id_Fournisseur`);

--
-- Indici per le tabelle `images_produit`
--
ALTER TABLE `images_produit`
  ADD PRIMARY KEY (`Id_Image`),
  ADD KEY `image_produit` (`Id_Produit`);

--
-- Indici per le tabelle `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`Id_Livraison`),
  ADD KEY `commande_livraison` (`Id_Commande`),
  ADD KEY `livreur_commande` (`Id_Livreur`);

--
-- Indici per le tabelle `livreurs`
--
ALTER TABLE `livreurs`
  ADD PRIMARY KEY (`Id_Livreur`);

--
-- Indici per le tabelle `modepaiement`
--
ALTER TABLE `modepaiement`
  ADD PRIMARY KEY (`Id_ModePaiement`);

--
-- Indici per le tabelle `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_Produit`),
  ADD KEY `Produit_Categorie` (`Id_Categorie`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_Utilisateur`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categories`
--
ALTER TABLE `categories`
  MODIFY `Id_Categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `codepromo`
--
ALTER TABLE `codepromo`
  MODIFY `Id_CodePromo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `commandes`
--
ALTER TABLE `commandes`
  MODIFY `Id_Commande` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Id_Commentaire` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `images_produit`
--
ALTER TABLE `images_produit`
  MODIFY `Id_Image` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `Id_Livraison` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `livreurs`
--
ALTER TABLE `livreurs`
  MODIFY `Id_Livreur` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `modepaiement`
--
ALTER TABLE `modepaiement`
  MODIFY `Id_ModePaiement` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `produits`
--
ALTER TABLE `produits`
  MODIFY `Id_Produit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `Id_Utilisateur` int(10) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `Paiement_Commande` FOREIGN KEY (`ModePaiement`) REFERENCES `modepaiement` (`Id_ModePaiement`),
  ADD CONSTRAINT `commande_client` FOREIGN KEY (`Id_Client`) REFERENCES `clients` (`Id_Client`),
  ADD CONSTRAINT `commande_promo` FOREIGN KEY (`CodePromo`) REFERENCES `codepromo` (`Id_CodePromo`);

--
-- Limiti per la tabella `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaire_produit` FOREIGN KEY (`Id_Client`) REFERENCES `clients` (`Id_Client`),
  ADD CONSTRAINT `commentaire_produit1` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Limiti per la tabella `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `Produit_Commandes` FOREIGN KEY (`Id_Commande`) REFERENCES `commandes` (`Id_Commande`),
  ADD CONSTRAINT `Produit_Commandes1` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Limiti per la tabella `images_produit`
--
ALTER TABLE `images_produit`
  ADD CONSTRAINT `image_produit` FOREIGN KEY (`Id_Produit`) REFERENCES `produits` (`Id_Produit`);

--
-- Limiti per la tabella `livraisons`
--
ALTER TABLE `livraisons`
  ADD CONSTRAINT `commande_livraison` FOREIGN KEY (`Id_Commande`) REFERENCES `commandes` (`Id_Commande`),
  ADD CONSTRAINT `livreur_commande` FOREIGN KEY (`Id_Livreur`) REFERENCES `livreurs` (`Id_Livreur`);

--
-- Limiti per la tabella `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `Produit_Categorie` FOREIGN KEY (`Id_Categorie`) REFERENCES `categories` (`Id_Categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
