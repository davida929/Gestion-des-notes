-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Jul 23, 2024 at 07:46 AM
-- Server version: 9.0.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `devoir`
--

CREATE TABLE `devoir` (
  `id` int NOT NULL,
  `matr_ens` char(10) DEFAULT NULL,
  `titre` char(32) DEFAULT NULL,
  `classe` char(32) DEFAULT NULL,
  `dateNotes` date DEFAULT NULL,
  `niveu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `devoir`
--

INSERT INTO `devoir` (`id`, `matr_ens`, `titre`, `classe`, `dateNotes`, `niveu`) VALUES
(14, 'C12', 'Examen S1', 'MIA G1', '2024-07-10', 'Licence 1'),
(15, 'C12', 'devoir surveille 1', 'SMPC 2', '2024-07-10', 'Licence 3');

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `matr` char(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `genre` varchar(32) NOT NULL,
  `dateNaissance` date NOT NULL,
  `tel` varchar(16) NOT NULL,
  `mail` varchar(32) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`matr`, `nom`, `prenom`, `genre`, `dateNaissance`, `tel`, `mail`, `password`) VALUES
('236', 'Ozuna', 'Satori', 'Femme', '2006-12-10', '03264345767', 'davida@gmail.com', '2005'),
('A23', 'Test', 'test', 'Femme', '2024-07-02', '0346422007', 'test@test.com', 'test'),
('C12', 'DAVIDA', 'Berto', 'Femme', '2005-12-04', '0346422007', 'berto@gmail.com', 'berto'),
('V12', 'rjee', 'lahy', 'Homme', '2024-07-17', 'ihilhklh', 'rjee@rjee.com', 'rjee');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `code_massar` char(32) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`code_massar`, `nom`, `prenom`) VALUES
('1', 'Andral', 'Be Christopher'),
('2', 'Rjjee', 'Lahy'),
('3', 'Avicii', 'Lonely'),
('34', 'Andral', 'Be Christopher'),
('SM12', 'Mohammed', 'Chinny'),
('SM14', 'Abdoul', 'Yashraf'),
('SM15', 'Avicii', 'Rita Ora');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int NOT NULL,
  `id_devoir` int DEFAULT NULL,
  `id_etu` char(32) DEFAULT NULL,
  `note` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `id_devoir`, `id_etu`, `note`) VALUES
(20, 14, '1', 18),
(21, 14, '2', 20),
(22, 14, '3', 16),
(26, 15, 'SM15', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devoir`
--
ALTER TABLE `devoir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matr_ens` (`matr_ens`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`matr`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`code_massar`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_devoir` (`id_devoir`),
  ADD KEY `id_etu` (`id_etu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devoir`
--
ALTER TABLE `devoir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devoir`
--
ALTER TABLE `devoir`
  ADD CONSTRAINT `devoir_ibfk_1` FOREIGN KEY (`matr_ens`) REFERENCES `enseignant` (`matr`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`id_devoir`) REFERENCES `devoir` (`id`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`id_etu`) REFERENCES `etudiants` (`code_massar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
