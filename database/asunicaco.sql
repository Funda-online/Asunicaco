-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2025 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asunicaco`
--

-- --------------------------------------------------------

--
-- Table structure for table `featurednews`
--

CREATE TABLE `featurednews` (
  `id_featured` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `expiration_date` date DEFAULT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(252) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `publish_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `expiration_date` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL,
  `theme` varchar(56) NOT NULL DEFAULT 'Tout',
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `summary`, `content`, `publish_date`, `expiration_date`, `id_user`, `entity`, `theme`, `image`, `date_added`, `date_updated`, `date_deleted`) VALUES
(4, 'Vernissage spécial de Mélanges', 'En l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU', '🎓 Vernissage spécial de Mélanges 🎉\r\nEn l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU\r\n🗓️ Vendredi 30 mai – 🕗 Dès 08h45\r\n📍 UCC, Limete/Amphithéâtre\r\n📚 Témoignages – Enchères – Cocktail\r\n👉 Venez nombreux !', '2025-06-01 16:25:29', '2025-06-10', NULL, 1, 'Tout', '2.jpeg', '2025-06-01 16:25:29', '2025-06-01 16:25:29', NULL),
(5, 'Vernissage spécial de Mélanges', 'En l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU', '🎓 Vernissage spécial de Mélanges 🎉\r\nEn l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU\r\n🗓️ Vendredi 30 mai – 🕗 Dès 08h45\r\n📍 UCC, Limete/Amphithéâtre\r\n📚 Témoignages – Enchères – Cocktail\r\n👉 Venez nombreux !', '2025-06-01 16:25:29', '2025-06-10', NULL, 1, 'Tout', '1.jpg', '2025-06-01 16:25:29', '2025-06-01 16:25:29', NULL),
(6, 'Vernissage spécial de Mélanges', 'En l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU', '🎓 Vernissage spécial de Mélanges 🎉\r\nEn l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU\r\n🗓️ Vendredi 30 mai – 🕗 Dès 08h45\r\n📍 UCC, Limete/Amphithéâtre\r\n📚 Témoignages – Enchères – Cocktail\r\n👉 Venez nombreux !', '2025-06-01 16:25:29', '2025-06-10', NULL, 1, 'Tout', 'act1.jpg', '2025-06-01 16:25:29', '2025-06-01 16:25:29', NULL),
(7, 'Vernissage spécial de Mélanges', 'En l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU', '🎓 Vernissage spécial de Mélanges 🎉\r\nEn l’honneur des Prof. Abbé Jean-Félix MOLE et Prof. Jean-Michel KUMBU\r\n🗓️ Vendredi 30 mai – 🕗 Dès 08h45\r\n📍 UCC, Limete/Amphithéâtre\r\n📚 Témoignages – Enchères – Cocktail\r\n👉 Venez nombreux !', '2025-06-01 16:25:29', '2025-06-10', NULL, 1, 'Tout', '5.jpg', '2025-06-01 16:25:29', '2025-06-01 16:25:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_province` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `committee` text DEFAULT NULL,
  `type` enum('province','central') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `name`, `description`, `phone`, `address`, `committee`, `type`, `date_added`, `date_updated`, `date_deleted`) VALUES
(1, 'Haut-Katanga', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(2, 'Haut-Uélé', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(3, 'Lualaba', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(4, 'Kasaï Central', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(5, 'Kinshasa', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(6, 'Lomami', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(7, 'Nord-Kivu', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(8, 'Sankuru', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL),
(9, 'Sud-Kivu', NULL, NULL, NULL, NULL, 'province', '2025-05-29 14:03:41', '2025-05-29 14:03:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id_university` int(11) NOT NULL,
  `id_province` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `ville` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `website` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `faculties` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id_university`, `id_province`, `name`, `ville`, `description`, `address`, `email`, `phone`, `website`, `logo`, `faculties`, `date_added`, `date_updated`, `date_deleted`) VALUES
(2, 1, 'Université Maria Malkia (UMM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(3, 1, 'Institut Supérieur Interdiocésain Monseigneur Mulolwa (ISIM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(4, 1, 'Université Don Bosco de Lubumbashi (UDBL)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(5, 1, 'Institut Supérieur des Arts et Métiers Marie Auxiliatrice (ISAMM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(6, 1, 'Institut Facultaire Théophile Reyn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(7, 1, 'ISTM ZAWADI de Lubumbashi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(8, 1, 'Institut Supérieur des Techniques Médicales Saint Joseph (ISTM Saint Joseph) LIKASI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(9, 2, 'Université de l’Uélé', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:06:08', '2025-05-29 14:06:08', NULL),
(10, 3, 'Université Jean XXIII de Kolwezi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:06:37', '2025-05-29 14:06:37', NULL),
(11, 5, 'Université Catholique du Congo (UCC)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(12, 5, 'Université la Salle de Kinshasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(13, 5, 'Université Loyola du Congo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(15, 5, 'Institut Supérieur de Théologie Saint Eugène de Mazenod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(16, 5, 'Université Omnia Omnibus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(17, 5, 'Institut Facultaire de Développement (IFAD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(18, 5, 'Institut Panafricain Cardinal Martino (IPCM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(20, 5, 'Institut Supérieur d’Informatique Chaminade (ISIC)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(22, 6, 'Université Notre-Dame de Lomami', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:56', '2025-05-29 14:08:56', NULL),
(23, 7, 'Université Catholique du Graben (UCG)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(24, 7, 'Institut supérieur des arts et métiers/ISAM Goma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(25, 7, 'Institut Supérieur Sapientia (ISS)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(26, 7, 'Université Catholique La Sapientia de Goma (UCS-Goma)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:13:22', '2025-05-29 14:13:22', NULL),
(27, 7, 'Université de l\'Assomption au Congo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:13:22', '2025-05-29 14:13:22', NULL),
(28, 8, 'Université Notre-Dame de Tshumbe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:13:49', '2025-05-29 14:13:49', NULL),
(29, 9, 'Université Catholique de Bukavu (UCB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:14:20', '2025-05-29 14:14:20', NULL),
(30, 4, 'Université Notre-Dame du Kasayi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:49:26', '2025-05-29 14:49:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `access` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `access`, `date_added`, `date_updated`, `date_deleted`) VALUES
(1, 'admin_1', 'mdp', 'admin1@auc-congo.cd', 'admin', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL),
(2, 'editor_1', 'mdp', 'editor1@auc-congo.cd', 'editor', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL),
(3, 'viewer_1', 'mdp', 'viewer1@auc-congo.cd', 'viewer', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featurednews`
--
ALTER TABLE `featurednews`
  ADD PRIMARY KEY (`id_featured`),
  ADD KEY `id_news` (`id_news`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `fk_prov` (`entity`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id_university`),
  ADD KEY `id_province` (`id_province`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featurednews`
--
ALTER TABLE `featurednews`
  MODIFY `id_featured` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id_university` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `featurednews`
--
ALTER TABLE `featurednews`
  ADD CONSTRAINT `featurednews_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_prov` FOREIGN KEY (`entity`) REFERENCES `province` (`id_province`),
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`id_province`) REFERENCES `province` (`id_province`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
