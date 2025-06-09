-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 02 juin 2025 à 11:28
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
-- Base de données : `asunicaco`
--

-- --------------------------------------------------------

--
-- Structure de la table `featurednews`
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
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(252) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` text NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `expiration_date` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `university` int(11) NOT NULL,
  `theme` varchar(56) NOT NULL DEFAULT 'Tout',
  `image` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `title`, `summary`, `content`, `publish_date`, `expiration_date`, `id_user`, `university`, `theme`, `image`, `date_added`, `date_updated`, `date_deleted`) VALUES
(6, 'Atelier sur l\'organisation et le fonctionnement des écoles doctorales', NULL, 'Du 10 au 12 mars 2025, l\'atelier sur l\'organisation et le fonctionnement des écoles doctorales en République Démocratique du Congo s\'est tenu à Kinshasa. À l\'issue de cet événement, l\'Université Don Bosco de Lubumbashi a été distinguée et retenue parmi un groupe de huit universités congolaises. Ces institutions ont été sélectionnées pour entreprendre une démarche d\'auto-évaluation institutionnelle.\r\nCette évaluation sera effectuée durant l\'année académique 2024-2025, conformément au référentiel établi par l\'Agence Nationale d\'Assurance Qualité de l\'Enseignement Supérieur Universitaire (ANAQ-ESU).', '2025-06-02 07:27:11', NULL, NULL, 4, 'Tout', 'ecole_doc_udbl.jpg', '2025-06-02 07:27:11', '2025-06-02 07:27:11', NULL),
(7, 'Représentation brillante de l\'UCC à Lille en France', NULL, 'Pascaline KABEMBA, doctorante en 2e année en Communications sociales à l’UCC, a participé ce 22 mai 2025 à la 19e Journée des jeunes chercheur·e·s en SIC organisée par le laboratoire Gériico de l’Université de Lille 🇫🇷. Son intervention portait sur :\r\n« Aux sources africaines des modèles de communication : la palabre africaine ». Elle a interrogé la manière dont les Sciences de l’Information et de la Communication abordent les crises qui frappent l’Afrique depuis les années 60, en critiquant les limites des paradigmes occidentaux souvent inadaptés aux réalités africaines. Pascaline a proposé la palabre africaine comme modèle de communication endogène efficace, ancré dans le dialogue, le consensus et les valeurs communautaires. 🪘🤝 Elle appelle à une reconnaissance des pratiques communicationnelles africaines et à une relecture critique des paradigmes pour mieux comprendre et prévenir les crises sur le continent. \r\nFélicitations à elle pour ce plaidoyer courageux en faveur des savoirs africains !', '2025-06-02 07:28:13', NULL, NULL, 11, 'Tout', 'representation_lille_ucc.jpg', '2025-06-02 07:28:13', '2025-06-02 07:28:13', NULL),
(8, 'Visite du Professeur Lukas Pairon à l’UCC : Echanges autour de la recherche doctorale', NULL, 'Dans le cadre de la coopération interuniversitaire, la Faculté d’Économie et Développement de l\'UCC a accueilli, ce jeudi 29 mai 2025, le Professeur Dr Lukas Pairon de l’Université de Gand (Belgique). Lors d’un échange enrichissant avec les assistants de la faculté, le Professeur Pairon a partagé des pistes concrètes sur les perspectives de recherche doctorale.\r\nIl a insisté sur l’importance de dégager du temps pour la recherche, de multiplier les échanges réguliers avec des personnes ressources du domaine, et de capitaliser sur leur expérience professionnelle afin de mener des recherches ancrées dans les réalités sociales.\r\nSatisfaits de cette rencontre inspirante, les assistants ont exprimé leur profonde gratitude à Madame la Doyenne pour cette initiative particulièrement bénéfique', '2025-06-02 07:33:05', NULL, NULL, 11, 'Tout', 'coorpération_ucc.jpeg', '2025-06-02 07:33:05', '2025-06-02 07:33:05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `province`
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
-- Déchargement des données de la table `province`
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
-- Structure de la table `university`
--

CREATE TABLE `university` (
  `id_university` int(11) NOT NULL,
  `id_province` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `ville` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(24) DEFAULT NULL,
  `website` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `faculties` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `university`
--

INSERT INTO `university` (`id_university`, `id_province`, `name`, `ville`, `description`, `address`, `email`, `phone`, `website`, `logo`, `faculties`, `date_added`, `date_updated`, `date_deleted`) VALUES
(2, 1, 'Université Maria Malkia (UMM)', 'Lubumbashi', NULL, '126 Avenue Mgr J.F de Hemptine (ex Tabora), Commune de Lubumbashi, RDC - Lubumbashi', ' info@univsersitemariamalkia.com ', '+243896563608', 'https://universitemariamalkia.com/', NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(3, 1, 'Institut Supérieur Interdiocésain Monseigneur Mulolwa (ISIM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(4, 1, 'Université Don Bosco de Lubumbashi (UDBL)', NULL, 'L\' Université Don Bosco de Lubumbashi est un établissement d\'enseignement supérieur et universitaire privé catholique des salésiens de Don Bosco de la province Maria Assunta de l\'Afrique Centrale; née de la fusion des instituts et écoles supérieurs :\r\n\r\n- École Supérieure d\'Informatique Salama (ESIS)\r\n- École Supérieure de Gouvernance Politique et Économique (ECOPO)\r\n- Institut Supérieur de philosophie Saint Jean Bosco (ISPh)\r\n- Institut de théologie Saint François de Sales (ITSFS)', '05, AV. FEMMES KATANGAISES, LUBUMBASHI - RDC', 'infos@udbl.ac.cd', NULL, 'https://udbl.ac.cd/', NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(5, 1, 'Institut Supérieur des Arts et Métiers Marie Auxiliatrice (ISAMM)', 'Lubumbashi', NULL, '	\r\n02, Av. Marie Auxiliatrice , Golf Plateau Karavia , Lubumbashi, Haut – Katanga', 'isamm.educ.2020@gmail.com', '+(243)975360903 ', 'https://isammarieauxiliatrice.org/', NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(6, 1, 'Institut Facultaire Théophile Reyn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(7, 1, 'ISTM ZAWADI de Lubumbashi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(8, 1, 'Institut Supérieur des Techniques Médicales Saint Joseph (ISTM Saint Joseph) LIKASI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:05:29', '2025-05-29 14:05:29', NULL),
(9, 2, 'Université de l’Uélé', NULL, NULL, NULL, NULL, NULL, 'https://uniuele.ac.cd/', NULL, NULL, '2025-05-29 14:06:08', '2025-05-29 14:06:08', NULL),
(10, 3, 'Université Jean XXIII de Kolwezi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:06:37', '2025-05-29 14:06:37', NULL),
(11, 5, 'Université Catholique du Congo (UCC)', 'Kinshasa', NULL, NULL, NULL, NULL, 'https://ucc.ac.cd/', NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(12, 5, 'Université la Salle de Kinshasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(13, 5, 'Université Loyola du Congo', 'Kinshasa', NULL, 'C/Mont Ngafula B.P. 3724 Kinshasa-Gombe', 'info@uloyola.cd', NULL, 'https://uloyola.cd/', NULL, NULL, '2025-05-29 14:07:51', '2025-05-29 14:07:51', NULL),
(15, 5, 'Institut Supérieur de Théologie Saint Eugène de Mazenod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(16, 5, 'Université Omnia Omnibus', NULL, NULL, NULL, NULL, NULL, 'https://www.universiteomniaomnibus.com/', NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(17, 5, 'Institut Facultaire de Développement (IFAD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(18, 5, 'Institut Panafricain Cardinal Martino (IPCM)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(20, 5, 'Institut Supérieur d’Informatique Chaminade (ISIC)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:00', '2025-05-29 14:08:00', NULL),
(22, 6, 'Université Notre-Dame de Lomami', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:08:56', '2025-05-29 14:08:56', NULL),
(23, 7, 'Université Catholique du Graben (UCG)', NULL, NULL, NULL, NULL, NULL, 'https://www.ucgraben.ac.cd/', NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(24, 7, 'Institut supérieur des arts et métiers/ISAM Goma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(25, 7, 'Institut Supérieur Sapientia (ISS)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:09:44', '2025-05-29 14:09:44', NULL),
(26, 7, 'Université Catholique La Sapientia de Goma (UCS-Goma)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:13:22', '2025-05-29 14:13:22', NULL),
(27, 7, 'Université de l\'Assomption au Congo', NULL, NULL, NULL, NULL, NULL, 'https://uaconline.edu.cd/', NULL, NULL, '2025-05-29 14:13:22', '2025-05-29 14:13:22', NULL),
(28, 8, 'Université Notre-Dame de Tshumbe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 14:13:49', '2025-05-29 14:13:49', NULL),
(29, 9, 'Université Catholique de Bukavu (UCB)', NULL, NULL, NULL, NULL, NULL, 'https://ucbukavu.ac.cd/', NULL, NULL, '2025-05-29 14:14:20', '2025-05-29 14:14:20', NULL),
(30, 4, 'Université Notre-Dame du Kasayi', NULL, NULL, NULL, NULL, NULL, 'https://www.uka.ac.cd/', NULL, NULL, '2025-05-29 14:49:26', '2025-05-29 14:49:26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
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
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `access`, `date_added`, `date_updated`, `date_deleted`) VALUES
(1, 'admin_1', 'mdp', 'admin1@auc-congo.cd', 'admin', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL),
(2, 'editor_1', 'mdp', 'editor1@auc-congo.cd', 'editor', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL),
(3, 'viewer_1', 'mdp', 'viewer1@auc-congo.cd', 'viewer', '2025-04-16 08:39:40', '2025-04-16 08:39:40', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `featurednews`
--
ALTER TABLE `featurednews`
  ADD PRIMARY KEY (`id_featured`),
  ADD KEY `id_news` (`id_news`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `fk_univ` (`university`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`);

--
-- Index pour la table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id_university`),
  ADD KEY `id_province` (`id_province`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `featurednews`
--
ALTER TABLE `featurednews`
  MODIFY `id_featured` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `university`
--
ALTER TABLE `university`
  MODIFY `id_university` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `featurednews`
--
ALTER TABLE `featurednews`
  ADD CONSTRAINT `featurednews_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_univ` FOREIGN KEY (`university`) REFERENCES `university` (`id_university`),
  ADD CONSTRAINT `fk_university` FOREIGN KEY (`university`) REFERENCES `university` (`id_university`),
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`id_province`) REFERENCES `province` (`id_province`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
