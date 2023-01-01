-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 10:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `role` int(2) NOT NULL,
  `NID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gender`, `address`, `path`, `role`, `NID`) VALUES
(1, 'System Admin', 'admin@unsika.ac.id', '$2y$10$8u3PGdIol1aiwphfDzwtQeQFvnvoe49Pn2Ik32wH3HdgYgc3iDzbS', 1, 'Telukjambe, Karawang Timur, Karawang', 'profil1.jpg', 1, '0'),
(2, 'Dosen', 'dosen@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 1, 'Karawang', '', 2, '0'),
(3, 'Mahasiswa', 'mahasiswa@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 0, 'Semarang', '', 3, '1810631160119'),
(4, 'Arnisa Stefanie, ST, MT.', 'arnisa@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0029128501'),
(5, 'Dian Budhi Santoso, S.T., M.Eng.', 'dian@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 1, 'Karawang', '', 2, '0020069102'),
(6, 'Dr. Ir. Yuliarman Saragih, MT.', 'yuliarman@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 1, 'Bekasi', '', 2, '0301077101'),
(7, 'Ibrahim, ST, MT.', 'ibrahim@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0306127206'),
(8, 'Insani Abdi Bangsa, ST., M.Sc', 'insani@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0021079301'),
(9, 'Ir. Lela Nurpulaela, MT.', 'lela@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0425086501'),
(10, 'Rahmat Hidayat, A.Md.T, S.Pd., M.Pd', 'rahmat@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 1, 'Karawang', '', 2, '0019038902'),
(11, 'Reni Rahmadewi, ST, MT.', 'reni@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0001068301'),
(12, 'Ulinnuha Latifa, S.T., M.T.', 'ulinnuha@unsika.ac.id', '$2y$10$WP.PGQpVtjWKWxCVUR37SOsJLc2.0XGofknM5mW41uBppX8k1TEfW', 2, 'Karawang', '', 2, '0011099102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
