-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 10:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `menu1`
--

CREATE TABLE `menu1` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`id`, `nama`, `url`) VALUES
(1, 'Verifikator', NULL),
(2, 'Otorisator', NULL),
(3, 'Bendahara Penerimaan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE `menu2` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu1id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`id`, `nama`, `url`, `menu1id`) VALUES
(1, 'Beranda', 'beranda', 1),
(2, 'Penerimaan', 'penerimaan', 1),
(3, 'Pengeluaran', NULL, 1),
(4, 'Referensi', 'referensi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu3`
--

CREATE TABLE `menu3` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu2id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu3`
--

INSERT INTO `menu3` (`id`, `nama`, `url`, `menu2id`) VALUES
(1, 'Lelang', 'lelang', 2),
(2, 'Piutang Negara', 'piutang-negara', 2),
(3, 'Pengambilan Data', NULL, 3),
(4, 'Pembuatan Nota', NULL, 3),
(5, 'Pengesahan Nota', NULL, 3),
(6, 'Pembukuan', NULL, 3),
(7, 'Kantor', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu4`
--

CREATE TABLE `menu4` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu3id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu4`
--

INSERT INTO `menu4` (`id`, `nama`, `url`, `menu3id`) VALUES
(1, 'Impor Data', NULL, 1),
(3, 'Perekaman Nota', NULL, 1),
(4, 'Pengesahan Nota', NULL, 1),
(5, 'Pembukuan', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu5`
--

CREATE TABLE `menu5` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu4id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu2`
-- (See below for the actual view)
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
-- Stand-in structure for view `view_menu3`
-- (See below for the actual view)
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
-- Stand-in structure for view `view_menu4`
-- (See below for the actual view)
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
-- Structure for view `view_menu2`
--
DROP TABLE IF EXISTS `view_menu2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu2`  AS SELECT `menu2`.`id` AS `id`, `menu2`.`nama` AS `nama`, `menu2`.`url` AS `url`, count(`menu3`.`id`) AS `jumlah`, `menu2`.`menu1id` AS `menu1id` FROM (`menu2` left join `menu3` on(`menu2`.`id` = `menu3`.`menu2id`)) GROUP BY `menu2`.`id`, `menu2`.`nama`, `menu2`.`url`, `menu2`.`menu1id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_menu3`
--
DROP TABLE IF EXISTS `view_menu3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu3`  AS SELECT `menu3`.`id` AS `id`, `menu3`.`nama` AS `nama`, `menu3`.`url` AS `url`, count(`menu4`.`id`) AS `jumlah`, `menu3`.`menu2id` AS `menu2id` FROM (`menu3` left join `menu4` on(`menu3`.`id` = `menu4`.`menu3id`)) GROUP BY `menu3`.`id`, `menu3`.`nama`, `menu3`.`url`, `menu3`.`menu2id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_menu4`
--
DROP TABLE IF EXISTS `view_menu4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu4`  AS SELECT `menu4`.`id` AS `id`, `menu4`.`nama` AS `nama`, `menu4`.`url` AS `url`, count(`menu5`.`id`) AS `jumlah`, `menu4`.`menu3id` AS `menu3id` FROM (`menu4` left join `menu5` on(`menu4`.`id` = `menu5`.`menu4id`)) GROUP BY `menu4`.`id`, `menu4`.`nama`, `menu4`.`url`, `menu4`.`menu3id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu2889618` (`menu1id`);

--
-- Indexes for table `menu3`
--
ALTER TABLE `menu3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu3890581` (`menu2id`);

--
-- Indexes for table `menu4`
--
ALTER TABLE `menu4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu4891544` (`menu3id`);

--
-- Indexes for table `menu5`
--
ALTER TABLE `menu5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmenu5892507` (`menu4id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu1`
--
ALTER TABLE `menu1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu2`
--
ALTER TABLE `menu2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu3`
--
ALTER TABLE `menu3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu4`
--
ALTER TABLE `menu4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu5`
--
ALTER TABLE `menu5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu2`
--
ALTER TABLE `menu2`
  ADD CONSTRAINT `FKmenu2889618` FOREIGN KEY (`menu1id`) REFERENCES `menu1` (`id`);

--
-- Constraints for table `menu3`
--
ALTER TABLE `menu3`
  ADD CONSTRAINT `FKmenu3890581` FOREIGN KEY (`menu2id`) REFERENCES `menu2` (`id`);

--
-- Constraints for table `menu4`
--
ALTER TABLE `menu4`
  ADD CONSTRAINT `FKmenu4891544` FOREIGN KEY (`menu3id`) REFERENCES `menu3` (`id`);

--
-- Constraints for table `menu5`
--
ALTER TABLE `menu5`
  ADD CONSTRAINT `FKmenu5892507` FOREIGN KEY (`menu4id`) REFERENCES `menu4` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
