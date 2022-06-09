-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 09:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `sd`
--

CREATE TABLE `sd` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sd`
--

INSERT INTO `sd` (`id`, `nama`, `deskripsi`, `link`, `gambar`) VALUES
(2, 'Belajar Menghitung.', 'Pelajari hal dasar tentang tata cara berhitung', 'https://www.inews.id/news/nasional/belajar-berhitung-anak-sd-ini-7-cara-cepat-yang-mudah-dan-tepat', 'sd.png'),
(30, 'Belajar membaca', 'Buku untuk latihan membaca', 'https://www.researchgate.net/publication/325907945_Belajar_Membaca_dan_Menulis_untuk_TK_dan_kelas_1_SD', 'sd.png'),
(31, 'Buku Perkalian.', 'Buku untuk belajar perkalian', 'https://id.wikihow.com/Mengajari-Tabel-Perkalian-ke-Anak', 'sd.png');

-- --------------------------------------------------------

--
-- Table structure for table `sma`
--

CREATE TABLE `sma` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sma`
--

INSERT INTO `sma` (`id`, `nama`, `deskripsi`, `link`, `gambar`) VALUES
(1, 'Siap UTBK', 'rangkuman untuk persiapan UTBK', 'https://www.scribd.com/document/537071216/Kitab-Utbk-2022', 'sma.png'),
(5, 'Buku Ekonomi', 'Buku ekonomi untuk kelas 10', 'https://mirror.unpad.ac.id/bse/Kurikulum_2006/10_SMA/Kelas10_ekonomi_ismawanto.pdf', 'sma.png'),
(6, 'Sejarah Indonesia', 'Buku sejarah indonesia', 'https://perpusmanja.files.wordpress.com/2019/01/buku-siswa-kelas-11-sejarah-indonesia-smt-2.pdf', 'sma.png');

-- --------------------------------------------------------

--
-- Table structure for table `smp`
--

CREATE TABLE `smp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smp`
--

INSERT INTO `smp` (`id`, `nama`, `deskripsi`, `link`, `gambar`) VALUES
(1, 'Seni Budaya.', 'Buku ini mencakup tentang seni dan perbudayaan indonesia kelas 8', 'https://epaper.myedisi.com/bse/42104/index.html', 'smp.gif'),
(5, 'Ilmu pengetahuan sosial', 'Buku IPS untuk kelas 8', 'https://www.smpmadani07.sch.id/upload/file/88799359bsipskelas82017.pdf', 'smp.gif'),
(6, 'Pelajaran pengetahuan alam', 'Buku IPA untuk kelas 8', 'http://repositori.kemdikbud.go.id/7018/1/buku%20siswa%20IPA%20semester%201.pdf', 'smp.gif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(8, 'jiong', '$2y$10$8M0CxRG1ruhRLwU7msqKSu7YC8qLblVAKxxTK0ZHKHdARyAk5Bbfq', 'user'),
(9, 'maula', '$2y$10$AVEUPDDWECavJB0K3v/QGukk5KJSJh7R1XWK9LI0La9.AR2gH65SK', 'admin'),
(11, 'sadam', '$2y$10$J7Scl44mLrT2vBBRhgSXjuMl6yIClVEKlS7uHkkG/cYWysafJWHnG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sma`
--
ALTER TABLE `sma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sd`
--
ALTER TABLE `sd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sma`
--
ALTER TABLE `sma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smp`
--
ALTER TABLE `smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
