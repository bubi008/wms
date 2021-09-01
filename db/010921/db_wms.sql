-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 03:17 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_wms`
--
CREATE DATABASE IF NOT EXISTS `db_wms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_wms`;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `idcsv` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `nominal` decimal(19,2) DEFAULT NULL,
  `uraian` varchar(45) DEFAULT NULL,
  `virtual_account` varchar(45) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `stok` decimal(1,0) NOT NULL DEFAULT '2',
  PRIMARY KEY (`idcsv`),
  KEY `virtual_account` (`virtual_account`),
  KEY `virtual_account_2` (`virtual_account`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`idcsv`, `tanggal`, `nama`, `nominal`, `uraian`, `virtual_account`, `created`, `modified`, `stok`) VALUES
(1, '2021-08-03', NULL, '32000000.00', 'Lelang JWCY5N ', NULL, NULL, NULL, '1'),
(3, '2021-08-03', NULL, '4977500.00', '20200331000541018978 037201213364925 Ret 0372', NULL, NULL, NULL, '2'),
(4, '2020-03-30', 'Nurul Ulum Fauz ', '1055300.00', 'BRIVA2613420021941754SMS Nurul Ulum Fauz  ', 'BRIVA2613420021941754', NULL, NULL, '2'),
(5, '2020-03-30', 'Kjayadi', '843530.00', 'BRIVA2613420031662908IBNKjayadi YL8DU7  ', '2613420031662908I', NULL, NULL, '1'),
(6, '2020-03-30', NULL, '6696840.00', 'BRIVA2613420030752608IBNKjayadi AYJXOM  ', NULL, NULL, NULL, '1'),
(7, '2020-03-30', NULL, '952300.00', 'BRIVA2613420031964612SMS Nurul Ulum Fauz  ', NULL, NULL, NULL, '2'),
(8, '2020-03-29', NULL, '3200000.00', 'ATMLTRBCA 0009835242613420021535260 TRF PRIMA', NULL, NULL, NULL, '2'),
(9, '2020-03-29', 'Supardi ', '5000000.00', 'BRIVA2613420030148747ATM Supardi MX43T6  ', '2613420030148747', NULL, NULL, '2'),
(10, '2020-03-29', NULL, '3200000.00', 'BRIVA2613420020931989IBNKE-Auction DJKN  ', NULL, NULL, NULL, '2'),
(11, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420032669033IBNKhardiady AYJXOM  ', NULL, NULL, NULL, '2'),
(12, '2020-03-29', NULL, '5000000.00', 'BRIVA2613420021032331ATM Asriady MX43T6  ', NULL, NULL, NULL, '1'),
(13, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420030852984IBNKDedy ma&#39;ruf  ', NULL, NULL, NULL, '2'),
(14, '2020-03-29', NULL, '5000000.00', '2613420031562280#000000002577#MP #TRFHMB  LN ', NULL, NULL, NULL, '2'),
(15, '2020-03-29', NULL, '3200000.00', '2613420020830669#000000007022#MP #TRFHMB  LN ', NULL, NULL, NULL, '2'),
(16, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420030855197IBNKAGUSMAN AYJXOM  ', NULL, NULL, NULL, '2'),
(17, '2020-03-29', NULL, '5000000.00', 'BRIVA2613420030857108ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(18, '2020-03-29', NULL, '3200000.00', 'BRIVA2613420020830693ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(19, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420032568511ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(20, '2020-03-29', NULL, '5000000.00', '2613420021838131#000000009876#ATM #TRFLA TRF ', NULL, NULL, NULL, '2'),
(21, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420020428897ATM ZULKIFLI MX43T6  ', NULL, NULL, NULL, '2'),
(22, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420021233377IBNKhardiady MX43T6  ', NULL, NULL, NULL, '2'),
(23, '2020-03-28', NULL, '3200000.00', 'BRIVA2613420022847639IBNKjayadi JWCY5N  ', NULL, NULL, NULL, '2'),
(24, '2020-03-28', NULL, '1489600.00', 'BRIVA2613420030752608IBNKjayadi AYJXOM  ', NULL, NULL, NULL, '2'),
(25, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420030450349IBNKjayadi MX43T6  ', NULL, NULL, NULL, '2'),
(26, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420030651708ATM MUHAMMAD NUR WA  ', NULL, NULL, NULL, '2'),
(27, '2020-03-27', NULL, '1489600.00', 'BRIVA2613420031763278ATM Sumarwing AYJXO  ', NULL, NULL, NULL, '2'),
(28, '2020-03-27', NULL, '5000000.00', 'BRIVA2613420022545210ATM Sumarwing MX43T  ', NULL, NULL, NULL, '2'),
(29, '2020-03-27', NULL, '3200000.00', 'BRIVA2613420021838922ATM Sumarwing JWCY5  ', NULL, NULL, NULL, '2'),
(34, '2020-03-30', NULL, '1055300.00', 'BRIVA2613420021941754SMS Nurul Ulum Fauz  ', NULL, NULL, NULL, '2'),
(35, '2020-03-30', NULL, '843530.00', 'BRIVA2613420031662908IBNKjayadi YL8DU7  ', NULL, NULL, NULL, '2'),
(36, '2020-03-30', NULL, '6696840.00', 'BRIVA2613420030752608IBNKjayadi AYJXOM  ', NULL, NULL, NULL, '2'),
(37, '2020-03-30', NULL, '952300.00', 'BRIVA2613420031964612SMS Nurul Ulum Fauz  ', NULL, NULL, NULL, '2'),
(38, '2020-03-29', NULL, '3200000.00', 'ATMLTRBCA 0009835242613420021535260 TRF PRIMA', NULL, NULL, NULL, '2'),
(39, '2020-03-29', NULL, '5000000.00', 'BRIVA2613420030148747ATM Supardi MX43T6  ', NULL, NULL, NULL, '2'),
(40, '2020-03-29', NULL, '3200000.00', 'BRIVA2613420020931989IBNKE-Auction DJKN  ', NULL, NULL, NULL, '2'),
(41, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420032669033IBNKhardiady AYJXOM  ', NULL, NULL, NULL, '2'),
(42, '2020-03-29', NULL, '5000000.00', 'BRIVA2613420021032331ATM Asriady MX43T6  ', NULL, NULL, NULL, '2'),
(43, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420030852984IBNKDedy ma&#39;ruf  ', NULL, NULL, NULL, '2'),
(44, '2020-03-29', NULL, '5000000.00', '2613420031562280#000000002577#MP #TRFHMB  LN ', NULL, NULL, NULL, '2'),
(45, '2020-03-29', NULL, '3200000.00', '2613420020830669#000000007022#MP #TRFHMB  LN ', NULL, NULL, NULL, '2'),
(46, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420030855197IBNKAGUSMAN AYJXOM  ', NULL, NULL, NULL, '2'),
(47, '2020-03-29', NULL, '5000000.00', 'BRIVA2613420030857108ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(48, '2020-03-29', NULL, '3200000.00', 'BRIVA2613420020830693ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(49, '2020-03-29', NULL, '1489600.00', 'BRIVA2613420032568511ATM ANDI ARIFUDDIN  ', NULL, NULL, NULL, '2'),
(50, '2020-03-29', NULL, '5000000.00', '2613420021838131#000000009876#ATM #TRFLA TRF ', NULL, NULL, NULL, '2'),
(51, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420020428897ATM ZULKIFLI MX43T6  ', NULL, NULL, NULL, '2'),
(52, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420021233377IBNKhardiady MX43T6  ', NULL, NULL, NULL, '2'),
(53, '2020-03-28', NULL, '3200000.00', 'BRIVA2613420022847639IBNKjayadi JWCY5N  ', NULL, NULL, NULL, '2'),
(54, '2020-03-28', NULL, '1489600.00', 'BRIVA2613420030752608IBNKjayadi AYJXOM  ', NULL, NULL, NULL, '2'),
(55, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420030450349IBNKjayadi MX43T6  ', NULL, NULL, NULL, '2'),
(56, '2020-03-28', NULL, '5000000.00', 'BRIVA2613420030651708ATM MUHAMMAD NUR WA  ', NULL, NULL, NULL, '2'),
(57, '2020-03-27', NULL, '1489600.00', 'BRIVA2613420031763278ATM Sumarwing AYJXO  ', NULL, NULL, NULL, '2'),
(58, '2020-03-27', NULL, '5000000.00', 'BRIVA2613420022545210ATM Sumarwing MX43T  ', NULL, NULL, NULL, '2'),
(59, '2020-03-27', NULL, '3200000.00', 'BRIVA2613420021838922ATM Sumarwing JWCY5  ', NULL, NULL, NULL, '2'),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `e-lelang`
--

CREATE TABLE IF NOT EXISTS `e-lelang` (
  `virtual_account` varchar(45) NOT NULL DEFAULT '',
  `kode_lelang` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `nominal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`virtual_account`),
  KEY `virtual_account` (`virtual_account`),
  KEY `virtual_account_2` (`virtual_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `focus_pn`
--

CREATE TABLE IF NOT EXISTS `focus_pn` (
  `id` int(11) NOT NULL,
  `kode_bkpn` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `nominal` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `uraian`) VALUES
(1, 'Kepala Seksi Hukum dan Informasi'),
(2, 'Bendahara Penerimaan'),
(3, 'Verifikator');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`) VALUES
(1, 'Uang Jaminan Lelang'),
(2, 'Pelunasan Lelang'),
(3, 'Setoran'),
(4, 'Lain-lain'),
(5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_rekening`
--

CREATE TABLE IF NOT EXISTS `jenis_rekening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jenis_rekening`
--

INSERT INTO `jenis_rekening` (`id`, `uraian`) VALUES
(1, 'RPL Penampungan Lelang'),
(2, 'RPL Penampungan Piutang'),
(3, 'RPL Penampungan Lelang Valas'),
(4, 'RPL Penampungan Piutang Valas');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelompok` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_transaksi`
--

CREATE TABLE IF NOT EXISTS `master_transaksi` (
  `id_master` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank_idcsv` int(11) NOT NULL,
  `nota_penerimaan_id` int(11) NOT NULL,
  `rekening_id` int(11) NOT NULL,
  `jenis_rekening_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `pejabat_id` int(11) NOT NULL,
  `e-lelang_id` int(11) NOT NULL,
  `focus_pn_id` int(11) NOT NULL,
  `kelompok_id` int(11) NOT NULL,
  `subjenis_id` int(11) NOT NULL,
  `nota_pengeluaran_id` int(255) NOT NULL,
  `jumlah_transaksi` decimal(1,0) DEFAULT NULL,
  `nominal` decimal(65,0) DEFAULT NULL,
  `uraian` text,
  `tanggal_idcsv` date DEFAULT NULL,
  `nama_jenis` text,
  PRIMARY KEY (`id_master`,`bank_idcsv`,`nota_penerimaan_id`,`rekening_id`,`jenis_rekening_id`,`jenis_id`,`pejabat_id`,`e-lelang_id`,`focus_pn_id`,`kelompok_id`,`subjenis_id`,`nota_pengeluaran_id`) USING BTREE,
  KEY `nota_penerimaan_id` (`nota_penerimaan_id`),
  KEY `pejabat_id` (`pejabat_id`),
  KEY `subjenis_id` (`subjenis_id`),
  KEY `kelompok_id` (`kelompok_id`),
  KEY `nota_pengeluaran_id` (`nota_pengeluaran_id`),
  KEY `jenis_rekening_id` (`jenis_rekening_id`),
  KEY `bank_idcsv` (`bank_idcsv`),
  KEY `pejabat_id_2` (`pejabat_id`),
  KEY `rekening_id` (`rekening_id`),
  KEY `jenis_id` (`jenis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_transaksi`
--

INSERT INTO `master_transaksi` (`id_master`, `name`, `bank_idcsv`, `nota_penerimaan_id`, `rekening_id`, `jenis_rekening_id`, `jenis_id`, `pejabat_id`, `e-lelang_id`, `focus_pn_id`, `kelompok_id`, `subjenis_id`, `nota_pengeluaran_id`, `jumlah_transaksi`, `nominal`, `uraian`, `tanggal_idcsv`, `nama_jenis`) VALUES
(0, '', 1, 3846, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', '32000000', 'Lelang JWCY5N ', '2021-08-03', 'U'),
(0, '', 5, 3846, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', '843530', 'BRIVA2613420031662908IBNKjayadi YL8DU7  ', '2020-03-30', 'a'),
(0, '', 6, 3846, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', '6696840', 'BRIVA2613420030752608IBNKjayadi AYJXOM  ', '2020-03-30', 'g'),
(0, '', 12, 3846, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', '5000000', 'BRIVA2613420021032331ATM Asriady MX43T6  ', '2020-03-29', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE IF NOT EXISTS `menu1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`id`, `nama`, `url`) VALUES
(1, 'Transaksi', NULL),
(2, 'Monitoring dan Laporan', NULL),
(3, 'Lainnya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE IF NOT EXISTS `menu2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu1id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmenu2889618` (`menu1id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`id`, `nama`, `url`, `menu1id`) VALUES
(1, 'Beranda', 'beranda', 1),
(2, 'Lelang', 'lelang', 1),
(3, 'Piutang Negara', 'piutang_negara', 1),
(4, 'Monitoring', 'beranda', 1),
(5, 'Laporan', '', 2),
(6, 'Laporan Bendahara Penerimaan', 'laporan', 2),
(7, 'Referensi', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu3`
--

CREATE TABLE IF NOT EXISTS `menu3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu2id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmenu3890581` (`menu2id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `menu3`
--

INSERT INTO `menu3` (`id`, `nama`, `url`, `menu2id`) VALUES
(1, 'Penerimaan', '', 2),
(2, 'Pengeluaran', '', 2),
(3, 'Pembukuan', '', 2),
(4, 'Penerimaan', '', 3),
(5, 'Pengeluaran', '', 3),
(6, 'Pembukuan', '', 3),
(7, 'Ketepatan Waktu', NULL, 4),
(8, 'Nota Penerimaan Belum Dikeluarka', 'penerimaan_belum', 5),
(9, 'Buku Kas Umum', NULL, 6),
(10, 'Nota Belum dibukukan di SAKTI', 'penerimaan_sakti', 5),
(11, 'Daftar Uang Jaminan Lelang', 'daftar_ujl', 6),
(12, 'KPKNL', 'ref_kpknl', 7),
(13, 'User', 'user', 7),
(14, 'Jenis Rekening', 'jenis_rek', 7),
(15, 'Jabatan', 'jabatan', 7),
(16, 'Subjenis', 'subjenis', 7),
(17, 'Jenis Transaksi', 'jenis', 7),
(18, 'Rekening', 'rekening', 7);

-- --------------------------------------------------------

--
-- Table structure for table `menu4`
--

CREATE TABLE IF NOT EXISTS `menu4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu3id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmenu4891544` (`menu3id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu4`
--

INSERT INTO `menu4` (`id`, `nama`, `url`, `menu3id`) VALUES
(1, 'Data Rekening', 'bank', 1),
(2, 'Nota Penerimaan', 'penerimaan', 1),
(3, 'Pengesahan Nota', 'pengesahan', 1),
(4, 'Pembukuan', NULL, 1),
(5, 'Nota Pengeluaran', '', 2),
(6, 'Pengesahan Nota', NULL, 2),
(7, 'Ketepatan Waktu Setor PNBP', NULL, 7),
(8, 'Ketepatan Waktu Setor Dana Pihak', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `menu5`
--

CREATE TABLE IF NOT EXISTS `menu5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `menu4id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmenu5892507` (`menu4id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nota_penerimaan`
--

CREATE TABLE IF NOT EXISTS `nota_penerimaan` (
  `id_np` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(45) DEFAULT NULL,
  `jenis_nota` text,
  `tanggal_nota` date DEFAULT NULL,
  `nominal` decimal(19,2) DEFAULT NULL,
  `nota_pengeluaran_id` int(11) NOT NULL,
  PRIMARY KEY (`id_np`,`nota_pengeluaran_id`),
  KEY `id` (`id_np`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `nota_penerimaan`
--

INSERT INTO `nota_penerimaan` (`id_np`, `nomor`, `jenis_nota`, `tanggal_nota`, `nominal`, `nota_pengeluaran_id`) VALUES
(46, '3846', 'Uang Jaminan Lelang', '2021-08-31', '44540370.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nota_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `nota_pengeluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(45) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nominal` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE IF NOT EXISTS `pejabat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `jabatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`jabatan_id`),
  KEY `id` (`id`),
  KEY `jabatan_id` (`jabatan_id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `bank` varchar(45) DEFAULT NULL,
  `izin_buka` varchar(45) DEFAULT NULL,
  `izin_tutup` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `nomor`, `nama`, `bank`, `izin_buka`, `izin_tutup`, `status`) VALUES
(1, '22850941', 'REKENING PENAMPUNGAN LELANG KPKNL BANDUNG', 'BNI', NULL, NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `subjenis`
--

CREATE TABLE IF NOT EXISTS `subjenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subjenis` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjenis`
--

INSERT INTO `subjenis` (`id`, `nama_subjenis`) VALUES
(1, 'Uang Jaminan Lelang'),
(2, 'Pelunasan Lelang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `kd_kantor` varchar(8) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `role`, `kd_kantor`) VALUES
('1', 'Muhamad Sidik', 'sidik', 'sidik', 'Verifikator', ''),
('2', 'Amis Sha', 'amir', 'amir', 'Kelapa Seksi HI', ''),
('3', 'Doni Shabudin', 'doni', 'doni', 'Bendahara Penerimaan', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu2`
--
CREATE TABLE IF NOT EXISTS `view_menu2` (
`id` int(11)
,`nama` varchar(32)
,`url` varchar(32)
,`jumlah` bigint(21)
,`menu1id` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu3`
--
CREATE TABLE IF NOT EXISTS `view_menu3` (
`id` int(11)
,`nama` varchar(32)
,`url` varchar(32)
,`jumlah` bigint(21)
,`menu2id` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_menu4`
--
CREATE TABLE IF NOT EXISTS `view_menu4` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu2` AS select `menu2`.`id` AS `id`,`menu2`.`nama` AS `nama`,`menu2`.`url` AS `url`,count(`menu3`.`id`) AS `jumlah`,`menu2`.`menu1id` AS `menu1id` from (`menu2` left join `menu3` on((`menu2`.`id` = `menu3`.`menu2id`))) group by `menu2`.`id`,`menu2`.`nama`,`menu2`.`url`,`menu2`.`menu1id`;

-- --------------------------------------------------------

--
-- Structure for view `view_menu3`
--
DROP TABLE IF EXISTS `view_menu3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu3` AS select `menu3`.`id` AS `id`,`menu3`.`nama` AS `nama`,`menu3`.`url` AS `url`,count(`menu4`.`id`) AS `jumlah`,`menu3`.`menu2id` AS `menu2id` from (`menu3` left join `menu4` on((`menu3`.`id` = `menu4`.`menu3id`))) group by `menu3`.`id`,`menu3`.`nama`,`menu3`.`url`,`menu3`.`menu2id`;

-- --------------------------------------------------------

--
-- Structure for view `view_menu4`
--
DROP TABLE IF EXISTS `view_menu4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_menu4` AS select `menu4`.`id` AS `id`,`menu4`.`nama` AS `nama`,`menu4`.`url` AS `url`,count(`menu5`.`id`) AS `jumlah`,`menu4`.`menu3id` AS `menu3id` from (`menu4` left join `menu5` on((`menu4`.`id` = `menu5`.`menu4id`))) group by `menu4`.`id`,`menu4`.`nama`,`menu4`.`url`,`menu4`.`menu3id`;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
