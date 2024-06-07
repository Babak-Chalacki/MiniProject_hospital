-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2024 at 05:37 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `pesonnelcode` int NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `username`, `password`, `gender`, `email`, `pesonnelcode`, `bio`) VALUES
(3, 'babak chalaki', 'myname', '6a204bd89f3c8348afd5c77c717a097a', 'male', 'asdasd@gmail.com', 1243143, '                                                         \r\n                         قلب        \r\n                                                  \r\n                        \r\n                                              \r\n                        '),
(5, 'babak_chalaki', 'babak_chalaki', '81dc9bdb52d04dc20036dbd8313ed055', 'male ', 'babak@gmail.com', 12345, '                         دل                \r\n                                                  \r\n                        \r\n                                              \r\n                        '),
(8, 'mamad_reza', 'mamad_reza', '27e6041337bc596c258ec504103e7eea', 'female ', 'badba@gmail.com', 123456, '                                                   \r\n                          *                                                                                                          \r\n                       /  متخصص ریه                \r\n                     \r\n                                              \r\n                                                  \r\n                        \r\n                                              \r\n                                                  \r\n                        \r\n                                              \r\n                                                  \r\n                        \r\n                                              \r\n                                                  \r\n                        \r\n                                              \r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `date` date NOT NULL,
  `skills` varchar(90) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `user_id`, `doctor_id`, `time`, `date`, `skills`) VALUES
(8, 3, 8, '            12 pm', '2024-06-12', '                                                                                          '),
(7, 3, 8, '            16 pm', '2023-09-06', 'جراح قلب '),
(3, 3, 5, '            11 am', '2024-06-11', 'جراح قلب'),
(4, 3, 3, '            7 am', '2024-06-10', 'جراح قلب'),
(6, 3, 8, '            21 pm', '2024-06-04', 'جراح چشم ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mobile` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `gender`, `email`, `mobile`) VALUES
(2, 'babak', 'babak_chalaki', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 'baba@gmail.com', 2147483647),
(3, 'babak', 'babak_chalakii', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 'babsa@gmail.com', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
