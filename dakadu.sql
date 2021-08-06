-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 06:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dakadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokpajak_pajakdaerah`
--

CREATE TABLE `dokpajak_pajakdaerah` (
  `id_dokpajak_pajakdaerah` bigint(20) UNSIGNED NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dokpajak_pph`
--

CREATE TABLE `dokpajak_pph` (
  `id_dokpajak_pph` bigint(20) UNSIGNED NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokpajak_pph`
--

INSERT INTO `dokpajak_pph` (`id_dokpajak_pph`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal_input`, `keterangan`) VALUES
(5, 'Untitled.pdf', 'background.jpg', 'Untitled.pdf', '', '', '2021-08-04', 'sdfghjk'),
(6, 'background.jpg', 'background.jpg', 'q.jpg', '', '', '2021-08-04', 'adsad frevisi');

-- --------------------------------------------------------

--
-- Table structure for table `dokpajak_ppndn`
--

CREATE TABLE `dokpajak_ppndn` (
  `id_dokpajak_ppndn` bigint(20) UNSIGNED NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokpajak_ppndn`
--

INSERT INTO `dokpajak_ppndn` (`id_dokpajak_ppndn`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal_input`, `keterangan`) VALUES
(4, '', '', 'Untitled.fig', '', '', '2021-08-04', 'ertyuio');

-- --------------------------------------------------------

--
-- Table structure for table `dokspj`
--

CREATE TABLE `dokspj` (
  `id_dokspj` bigint(20) UNSIGNED NOT NULL,
  `kode_arsip` varchar(100) NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokspj`
--

INSERT INTO `dokspj` (`id_dokspj`, `kode_arsip`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal_input`, `keterangan`) VALUES
(2, 'Option 3', 'Untitled.pdf', 'q.jpg', 'background.jpg', 'Untitled.fig', 'Untitled.pdf', '2021-08-05', 'cek inputan 1'),
(3, 'Belanja Insentif bagi ASN (5.02.5.02.0.001.2.02.01.5.1.01.03.01.0006.)', '', '', '', '', '', '2021-08-05', 'cek 2');

-- --------------------------------------------------------

--
-- Table structure for table `lk`
--

CREATE TABLE `lk` (
  `id_lk` bigint(20) UNSIGNED NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lk`
--

INSERT INTO `lk` (`id_lk`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal_input`, `keterangan`) VALUES
(5, 'Untitled.pdf', 'background.jpg', 'q.jpg', 'Untitled.pdf', 'background.jpg', '2021-08-04', 'cek cek lk inputan'),
(6, 'Untitled.pdf', 'background.jpg', '', '', '', '2021-08-04', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-07-30-164711', 'App\\Database\\Migrations\\Rkadpa', 'default', 'App', 1627664011, 1),
(3, '2021-07-31-062228', 'App\\Database\\Migrations\\Lk', 'default', 'App', 1627712630, 3),
(4, '2021-08-02-142423', 'App\\Database\\Migrations\\User', 'default', 'App', 1627914895, 4),
(5, '2021-08-03-153137', 'App\\Database\\Migrations\\InputSpjPpndn', 'default', 'App', 1628004918, 5),
(6, '2021-08-03-153137', 'App\\Database\\Migrations\\InputPajakPpndn', 'default', 'App', 1628005235, 6),
(7, '2021-08-03-154730', 'App\\Database\\Migrations\\InputPajakPpndn', 'default', 'App', 1628005663, 7),
(8, '2021-08-03-154914', 'App\\Database\\Migrations\\InputDokpajakPpdn', 'default', 'App', 1628005757, 8),
(9, '2021-08-03-155300', 'App\\Database\\Migrations\\InputDokpajakPpndn', 'default', 'App', 1628006026, 9),
(10, '2021-08-03-155709', 'App\\Database\\Migrations\\InputDokpajakPph', 'default', 'App', 1628006266, 10),
(11, '2021-08-03-155949', 'App\\Database\\Migrations\\InputDokpajakPajakdaerah', 'default', 'App', 1628006429, 11),
(18, '2021-08-04-075253', 'App\\Database\\Migrations\\User', 'default', 'App', 1628063584, 12),
(19, '2021-08-04-164212', 'App\\Database\\Migrations\\Dokspj', 'default', 'App', 1628095534, 13);

-- --------------------------------------------------------

--
-- Table structure for table `rkadpa`
--

CREATE TABLE `rkadpa` (
  `id_rkadpa` bigint(20) UNSIGNED NOT NULL,
  `foto1` text DEFAULT NULL,
  `foto2` text DEFAULT NULL,
  `foto3` text DEFAULT NULL,
  `foto4` text DEFAULT NULL,
  `foto5` text DEFAULT NULL,
  `tanggal_input` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rkadpa`
--

INSERT INTO `rkadpa` (`id_rkadpa`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `tanggal_input`, `keterangan`) VALUES
(1, 'cek1.jpg', 'cek2.jpg', 'cek3.jpg', NULL, NULL, '2021-07-31', 'test program'),
(3, 'Untitled.pdf', 'Untitled.pdf', '', '', '', '2021-07-10', 'cek 3'),
(4, 'Untitled.pdf', 'background.jpg', '', '', '', '2021-07-31', 'ccek 3'),
(14, 'Untitled.pdf', 'background.jpg', '', '', '', '2021-08-04', 'asddasdaddd'),
(15, 'Untitled.pdf', 'q.jpg', '', '', '', '2021-08-04', 'dasdddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(60) NOT NULL,
  `info_user` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username_user`, `password_user`, `info_user`) VALUES
(1, 'Pegawai', 'kipecek', '$2y$10$9/0xd7tyap2DwCwLQSdx3.XGb0XOxIX6YKoZtMW.bGxmFdOBTvQae', NULL),
(2, 'Administrator', 'admin', '$2y$10$LpZBt9TmindItBvpa/XEgeXEtIiSlay8qkzW96DMeRVHHQvNLH9B.', NULL),
(8, 'cek', 'cekcek', '123', 'Pegawai'),
(9, 'cek', 'cek', 'cek', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokpajak_pajakdaerah`
--
ALTER TABLE `dokpajak_pajakdaerah`
  ADD PRIMARY KEY (`id_dokpajak_pajakdaerah`);

--
-- Indexes for table `dokpajak_pph`
--
ALTER TABLE `dokpajak_pph`
  ADD PRIMARY KEY (`id_dokpajak_pph`);

--
-- Indexes for table `dokpajak_ppndn`
--
ALTER TABLE `dokpajak_ppndn`
  ADD PRIMARY KEY (`id_dokpajak_ppndn`);

--
-- Indexes for table `dokspj`
--
ALTER TABLE `dokspj`
  ADD PRIMARY KEY (`id_dokspj`);

--
-- Indexes for table `lk`
--
ALTER TABLE `lk`
  ADD PRIMARY KEY (`id_lk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rkadpa`
--
ALTER TABLE `rkadpa`
  ADD PRIMARY KEY (`id_rkadpa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokpajak_pajakdaerah`
--
ALTER TABLE `dokpajak_pajakdaerah`
  MODIFY `id_dokpajak_pajakdaerah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokpajak_pph`
--
ALTER TABLE `dokpajak_pph`
  MODIFY `id_dokpajak_pph` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokpajak_ppndn`
--
ALTER TABLE `dokpajak_ppndn`
  MODIFY `id_dokpajak_ppndn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokspj`
--
ALTER TABLE `dokspj`
  MODIFY `id_dokspj` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lk`
--
ALTER TABLE `lk`
  MODIFY `id_lk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rkadpa`
--
ALTER TABLE `rkadpa`
  MODIFY `id_rkadpa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
