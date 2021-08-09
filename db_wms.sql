-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 05 Agu 2021 pada 15.51
-- Versi server: 5.7.26
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu1`
--

CREATE TABLE `menu1` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu1`
--

INSERT INTO `menu1` (`id`, `nama`, `url`) VALUES
(1, 'Level1-a', NULL),
(2, 'Level1-b', NULL),
(3, 'Level1-c', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu2`
--

CREATE TABLE `menu2` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu1id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu2`
--

INSERT INTO `menu2` (`id`, `nama`, `url`, `menu1id`) VALUES
(1, 'Beranda', 'beranda', 1),
(2, 'Penerimaan', 'penerimaan', 1),
(3, 'Pengeluaran', NULL, 1),
(4, 'Referensi', 'referensi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu3`
--

CREATE TABLE `menu3` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu2id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu3`
--

INSERT INTO `menu3` (`id`, `nama`, `url`, `menu2id`) VALUES
(1, 'Lelang', 'lelang', 2),
(2, 'Piutang Negara', 'piutang-negara', 2),
(3, 'Pengambilan Data', NULL, 3),
(4, 'Pembuatan Nota', NULL, 3),
(5, 'Pengesahan Nota', NULL, 3),
(6, 'Pembukuan', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu4`
--

CREATE TABLE `menu4` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu3id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu4`
--

INSERT INTO `menu4` (`id`, `nama`, `url`, `menu3id`) VALUES
(1, 'Impor Data', NULL, 1),
(3, 'Perekaman Nota', NULL, 1),
(4, 'Pengesahan Nota', NULL, 1),
(5, 'Pembukuan', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu5`
--

CREATE TABLE `menu5` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu4id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_menu2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu2` (
`id` int(11)
,`nama` varchar(32)
,`url` varchar(32)
,`jumlah` bigint(21)
,`menu1id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_menu3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu3` (
`id` int(11)
,`nama` varchar(32)
,`url` varchar(32)
,`jumlah` bigint(21)
,`menu2id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_menu4`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_menu4` (
`id` int(11)
,`nama` varchar(32)
,`url` varchar(32)
,`jumlah` bigint(21)
,`menu3id` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu2`
--
DROP TABLE IF EXISTS `view_menu2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu2`  AS  select `menu2`.`id` AS `id`,`menu2`.`nama` AS `nama`,`menu2`.`url` AS `url`,count(`menu3`.`id`) AS `jumlah`,`menu2`.`menu1id` AS `menu1id` from (`menu2` left join `menu3` on((`menu2`.`id` = `menu3`.`menu2id`))) group by `menu2`.`id`,`menu2`.`nama`,`menu2`.`url`,`menu2`.`menu1id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu3`
--
DROP TABLE IF EXISTS `view_menu3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu3`  AS  select `menu3`.`id` AS `id`,`menu3`.`nama` AS `nama`,`menu3`.`url` AS `url`,count(`menu4`.`id`) AS `jumlah`,`menu3`.`menu2id` AS `menu2id` from (`menu3` left join `menu4` on((`menu3`.`id` = `menu4`.`menu3id`))) group by `menu3`.`id`,`menu3`.`nama`,`menu3`.`url`,`menu3`.`menu2id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_menu4`
--
DROP TABLE IF EXISTS `view_menu4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu4`  AS  select `menu4`.`id` AS `id`,`menu4`.`nama` AS `nama`,`menu4`.`url` AS `url`,count(`menu5`.`id`) AS `jumlah`,`menu4`.`menu3id` AS `menu3id` from (`menu4` left join `menu5` on((`menu4`.`id` = `menu5`.`menu4id`))) group by `menu4`.`id`,`menu4`.`nama`,`menu4`.`url`,`menu4`.`menu3id` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu2889618` (`menu1id`);

--
-- Indeks untuk tabel `menu3`
--
ALTER TABLE `menu3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu3890581` (`menu2id`);

--
-- Indeks untuk tabel `menu4`
--
ALTER TABLE `menu4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu4891544` (`menu3id`);

--
-- Indeks untuk tabel `menu5`
--
ALTER TABLE `menu5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu5892507` (`menu4id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu1`
--
ALTER TABLE `menu1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menu2`
--
ALTER TABLE `menu2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu3`
--
ALTER TABLE `menu3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu4`
--
ALTER TABLE `menu4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `menu5`
--
ALTER TABLE `menu5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu2`
--
ALTER TABLE `menu2`
  ADD CONSTRAINT `FKmenu2889618` FOREIGN KEY (`menu1id`) REFERENCES `menu1` (`id`);

--
-- Ketidakleluasaan untuk tabel `menu3`
--
ALTER TABLE `menu3`
  ADD CONSTRAINT `FKmenu3890581` FOREIGN KEY (`menu2id`) REFERENCES `menu2` (`id`);

--
-- Ketidakleluasaan untuk tabel `menu4`
--
ALTER TABLE `menu4`
  ADD CONSTRAINT `FKmenu4891544` FOREIGN KEY (`menu3id`) REFERENCES `menu3` (`id`);

--
-- Ketidakleluasaan untuk tabel `menu5`
--
ALTER TABLE `menu5`
  ADD CONSTRAINT `FKmenu5892507` FOREIGN KEY (`menu4id`) REFERENCES `menu4` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
