-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2024 at 11:48 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portifolio-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `projetos`
--

DROP TABLE IF EXISTS `projetos`;
CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `url_imagem` varchar(255) DEFAULT NULL,
  `url_projeto` varchar(255) DEFAULT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `link_do_codigo_fonte` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projetos`
--

INSERT INTO `projetos` (`id`, `titulo`, `descricao`, `url_imagem`, `url_projeto`, `data_criacao`, `link_do_codigo_fonte`) VALUES
(2, 'Casa de Alvanaria Modelo Americano', 'dfefgf', 'uploads/67544af438b87_Captura de tela 2024-06-12 124100.png', 'http://localhost/Portifolio%20Pessoal/inserir_projeto.php', '2024-12-07 13:17:40', 'http://localhost/Portifolio%20Pessoal/inserir_projeto.php'),
(3, 'Casa duplex', 'xxxxxxxxxxxxxxxxxxxx', 'uploads/67544b441763b_Annotation 2024-12-07 145053.png', 'http://localhost/Portifolio%20Pessoal/inserir_projeto.php', '2024-12-07 13:19:00', 'http://localhost/Portifolio%20Pessoal/inserir_projeto.php');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(1, 'osvaldo_achar', '$2y$10$1yZKbx4r4Cc7w9Kz894pZOkyDtoJvfy3cY669sD/pHZtuxogUHUD2', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
