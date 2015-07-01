-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2014 at 04:04 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `no_id` int(5) NOT NULL AUTO_INCREMENT,
  `id_dudi` varchar(5) NOT NULL,
  `nis` int(4) NOT NULL,
  `tgl` date NOT NULL,
  `masuk` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- RELATIONS FOR TABLE `absensi`:
--   `id_dudi`
--       `du_di` -> `id_dudi`
--   `nis`
--       `siswa` -> `nis`
--

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`no_id`, `id_dudi`, `nis`, `tgl`, `masuk`, `keterangan`) VALUES
(1, 'TL001', 7529, '2014-02-04', 'Ya', 'Masuk bekerja'),
(2, 'TL001', 7511, '2014-02-04', 'Ya', 'Masuk bekerja'),
(3, 'TL001', 7515, '2014-02-04', 'Ya', 'Masuk bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `du_di`
--

CREATE TABLE IF NOT EXISTS `du_di` (
  `id_dudi` varchar(5) NOT NULL,
  `nama_dudi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `id_jurusan` varchar(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_dudi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `du_di`:
--   `id_jurusan`
--       `jurusan` -> `id_jurusan`
--

--
-- Dumping data for table `du_di`
--

INSERT INTO `du_di` (`id_dudi`, `nama_dudi`, `alamat`, `foto`, `email`, `tentang`, `id_jurusan`, `username`, `password`, `level`) VALUES
('AE001', 'Abadi Elektrik', 'Jl. Jawa Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('DA001', 'Darma Abadi', 'Jl. Dr. Wahidin Nayontaan Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('DP001', 'Dinas DPU Kota Pekalongan', 'Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('DR001', 'DR Servis', 'Jl. Manunggal Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('PP001', 'PT. Pisma Putra Textil', 'Jl. Raya Pait Kab. Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('PX001', 'PT. Primatexco Indonesia', 'Jl. Urip Sumoharjo Sambong Batang\r\n', '', '', '', 'TITL', '', '', ''),
('SM001', 'PT. SMSI', 'Jl. Hos Cokroaminoto Landungsari Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('ES001', 'PT. Esa Sagara Autotara', 'Jl. Dr. Sutomo No. 149 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('WT001', 'Wijaya Teknik', 'Kemplong Wiradesa Kab. Pekalongan\r\n', '', '', '', 'TITL', '', '', ''),
('GM001', 'Bengkel Gajah Mada', 'Jl Dr. Sutomo Pekalongan \r\n', '', '', '', 'TKR', '', '', ''),
('MM001', 'Medono Motor', 'Jl. Mangga Blok B Perum Binagriya Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MM002', 'Bengkel Mandiri Motor', 'Jl. Dr. Cipto No 89 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MN001', 'Bengkel Marno', 'Jl. Sedap Malam Ambo wetan  Ulujami Pemalang\r\n', '', '', '', 'TKR', '', '', ''),
('MD001', 'Bengkel Mobil Dono', 'Jl. KH. Dahlan Tirto Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MM003', 'Bengkel Mobil Marco Motor', 'Jl. Ketandan Wiradesa \r\n', '', '', '', 'TKR', '', '', ''),
('MF001', 'Bengkel Motor Fajar', 'Jl. Kurinci Pedosugih Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MS001', 'Bengkel Motor Suyud', 'Jl. Gajah Mada Barat Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MY001', 'Bengkel Motor Yusup', 'Jl. Hasyim Azhari Kepatihan Wiradesa\r\n', '', '', '', 'TKR', '', '', ''),
('CW001', 'CV. Cendana Wangi', 'Kedungwuni Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('CK001', 'PT. Cahaya Kencana Sakti', 'Jl. KHM. Mansyur no 26 B Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('IA001', 'PT. Indo Agung Surya Motor', 'Jl. Dr. Sutomo no 65 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('YA001', 'PT. Yamaha Agung Motor', 'Jl. Raya Podo No. 78 Kedungwuni Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('YA002', 'PT. Yamaha Agung Motor', 'Jl. Gajah Mada No. 15 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('SM002', 'Sabar Motor', 'Jl. Wilis No. 50 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('TM001', 'Taruna Motor', 'Jl. Raya Wiradesa Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('WM001', 'Winarto Motor', 'Jl. Salak Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('YO001', 'Yamaha Orion', 'Jl. Bandung Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('IM001', 'Ikhsan Mobil', 'Jl. Kalisalak Karangdadap Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('AS001', 'Bengkel Aneka Sakti Motor', 'Kauman Batang\r\n', '', '', '', 'TKR', '', '', ''),
('BB001', 'Bengkel Barokah', 'Baros Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('CM001', 'Bengkel Cukup Mandiri', 'Jl. Gentong Wungu Sragi Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('MS002', 'Bengkel Mobil Santo', 'Jl. Raya Wonopringgo Kedungwuni Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('HM001', 'Bengkel Harjo Motor', 'Tangkil Buaran Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('BL001', 'Bengkel Listyo', 'Jl. Kincan Jati Bening RT. 01 RW. 02 Bekasi \r\n', '', '', '', 'TKR', '', '', ''),
('OK001', 'Bengkel Mobil OK', 'Jl. Raya Gabus Pekalongan', '', '', '', 'TKR', '', '', ''),
('MM004', 'Bengkel Mulya Motor', 'Silirejo Tirto Kab. Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('RJ001', 'Bengkel Ragil Jaya Motor', 'Jl. Jend. Sudirman Timur, Pemalang\r\n', '', '', '', 'TKR', '', '', ''),
('BS001', 'Bengkel Syukron', 'Jl. Raya Bojong\r\n', '', '', '', 'TKR', '', '', ''),
('AI001', 'PT. Astra Isuzu', 'Jl. KH. Mas Mansyur Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('KJ001', 'PT. Kejora Jaya Raya', 'Jl. Sumatra No. 19 Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('YC001', 'PT. Yamaha Central', 'Jl. Gajah Mada Pekalongan\r\n', '', '', '', 'TKR', '', '', ''),
('HM002', 'Harapan Maju', 'Jl. WR. Supratman Gg Selar No. 18\r\n', '', '', '', 'TP', '', '', ''),
('PP002', 'PT. Pisma Putra Textile', 'Jl. Raya Pait Kab. Pekalongan\r\n', '', '', '', 'TP', '', '', ''),
('BB002', 'Bengkel Bima', 'Jl. Mansyur Pekalongan\r\n', '', '', '', 'TP', '', '', ''),
('PX002', 'PT. Primatexco Indonesia', 'Jl. Urip Sumoharjo Sambong, Batang\r\n', '', '', '', 'TP', '', '', ''),
('RH001', 'Bengkel Las & Bubut "Rohmat"', 'Rowoyoso Wonokerto\r\n', '', '', '', 'TP', '', '', ''),
('BE001', 'Bengkel Bubut Endol', 'Kebulen\r\n', '', '', '', 'TP', '', '', ''),
('PJ001', 'PT. Pajitex', 'Pekalongan', '', '', '', 'TP', '', '', ''),
('WR001', 'Wisnu Rekso Motor', 'Jl. Dr. Sutomo Pekalongan\r\n', '', '', '', 'TP', '', '', ''),
('PK001', 'PT. Prima Komponen Indonesia', 'Blok F No. 2 Serpong, Tangerang Selatan\r\n', '', '', '', 'TP', '', '', ''),
('RK001', 'CV. Cipta Indo Rekin (REKINO)', 'Jl. Dharma Bhakti No. 164 Medono, Pekalongan\r\n', '', '', '', 'TP', '', '', ''),
('SX001', 'PT. Sukorintex', 'Kandeman, Batang', '', '', '', 'TP', '', '', ''),
('BZ001', 'Blitzstar', 'Jl. Dr. Sutomo Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('MU001', 'BMT Mitra Umat\n', 'Jl. Jlamprang Krapyak Kidul\n', '', '', '', 'RPL', '', '', ''),
('KP001', 'BPMP2AKB/KPP Pratama', 'Pekalongan', '', '', '', 'RPL', '', '', ''),
('CC001', 'Centra Comp', 'Jl. Kartini Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('DK001', 'Dindukcapil Kajen', 'Kajen Kab. Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('DD001', 'Disperindagkop', 'Jl. Majapahit Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('JK001', 'Jitu Komputer', 'Jl. Kartini Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('KK001', 'Kantor Kecamatan Pekalongan Selatan', 'Pekalongan', '', '', '', 'RPL', '', '', ''),
('JT001', 'PT. Jamsostek', 'Pekalongan', '', '', '', 'RPL', '', '', ''),
('PX003', 'PT. Pajitex', 'Warungasem  Batang\r\n', '', '', '', 'RPL', '', '', ''),
('PX004', 'PT. Pismatex', 'Bligo Buaran Kab. Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('PI001', 'PT. Primatexco Indonesia', 'Jl. Urip Sumoharjo Sambong Batang\r\n', '', '', '', 'RPL', '', '', ''),
('BS002', 'Bengkel Salasa', 'Kuripan Pekalongan\r\n', '', '', '', 'PBO', '', '', ''),
('DP002', 'Dion Pratama', 'Jl. Singosari Semarang\r\n', '', '', '', 'PBO', '', '', ''),
('DP003', 'DTM Project', 'Jl. Pamularsih Semarang\r\n', '', '', '', 'PBO', '', '', ''),
('MP001', 'Mandiri Perkasa', 'Jl. Karya Bhakti Medono Pekalongan\r\n', '', '', '', 'PBO', '', '', ''),
('ES002', 'PT. Esa Sagara Autotara', 'Jl. Dr. Sutomo No. 149 Pekalongan', '', '', '', 'PBO', '', '', ''),
('HP001', 'PT. Honda Pekalongan', 'Jl. Dr. Sutomo Pekalongan\r\n', '', '', '', 'PBO', '', '', ''),
('NK001', 'PT. Nasmoco Kaligawe', 'Jl. Raya Kaligawe Semarang\r\n', '', '', '', 'PBO', '', '', ''),
('NP001', 'PT. Nasmoco Pekalongan', 'Jl. Raya Kalibanger Pekalongan\r\n', '', '', '', 'PBO', '', '', ''),
('SI001', 'PT. Sukorejo Indah Textile', 'Jl. Raya Kandeman Km. 4,5 Batang\r\n', '', '', '', 'RPL', '', '', ''),
('OC001', 'Orion Computer', 'Jl. R.A. Kartini\r\n', '', '', '', 'RPL', '', '', ''),
('EC00', 'E-Com', 'Jl. Dr. Soetomo Pekalongan\r\n', '', '', '', 'RPL', '', '', ''),
('RF001', 'PT. Royal Fashion', 'Jl. Soekarno Hatta Desa Jatijajar Kec. Bergas Kab. Semarang\r\n', '', '', '', 'RPL', '', '', ''),
('TL001', 'PT. Telkom Pekalongan', 'Jl. Merak No. 2, Pekalongan', 'Chrysanthemum.jpg', 'telkomspeedy@telkom.co.id', '', 'RPL', 'telkom', 'telkom123', 'perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`no_id`, `nama`, `email`, `website`, `komentar`, `waktu`) VALUES
(1, 'Johan Saputra', 'johansaputra@gmail.com', 'johannes.com', 'Selamat malam, numpang komentar di website yang super menarik ini.', 'Jum''at, 21 Maret 2014 | 12:56'),
(2, 'Andrian Mahendra', 'mahendrian@yahoo.com', 'mahendrian.org', 'Bagus juga nih ide pembuatan sistem informasi prakerin berbasis web, salam sukses dan semoga jaya selalu.', 'Jum''at, 21 Maret 2014 | 12:58'),
(3, 'Al-Umam Nipponizer', 'ngeposta@gmail.com', 'ngeposta.blogspot.com', 'Website yang penuh misteri, tapi cukup memikat hati dan mata para pengunjungnya.', 'Jum''at, 21 Maret 2014 | 12:59'),
(4, 'Shirley Munich', 'shirlenich@gmail.com', 'munich17.com', 'Nice website, the display is great and fresh in everything.', 'Jum''at, 21 Maret 2014 | 13:55');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` char(10) NOT NULL,
  `nip` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jenisklm` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `guru`:
--   `id_jenisklm`
--       `jenisklm` -> `id_jenisklm`
--

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `id_jenisklm`, `tmp_lahir`, `tgl_lahir`, `alamat`, `email`, `foto`, `no_telpon`, `username`, `password`, `level`) VALUES
('J', '1202027', 'Drs. Khusaeni', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AF', '1202030', 'Lily Azizah, S.Pd', 'P', '', '0000-00-00', '', '', '', '081547255476', '', '', ''),
('U', '1202020', 'Fatkhur Rozak, ST', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('C', '1202049', 'Towijaya, ST', 'L', '', '0000-00-00', '', '', '', '085642226640', '', '', ''),
('H', '1202025', 'Drs. Indrato', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('G', '1202039', 'Omar Khayyam E. A, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('I', '1202002', 'Drs. Abdul Ghofar', 'L', '', '0000-00-00', '', '', '', '085742211350', '', '', ''),
('AM', '1202026', 'Khudidah, S.Pd.', 'P', '', '0000-00-00', '', '', '', '085746254477', '', '', ''),
('O', '1202012', 'Arsyid Edy, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('Q', '1202048', 'Sutantiyo Krsiworo, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('M', '1202044', 'Siti Masyitoh', 'P', '', '0000-00-00', '', '', '', '', '', '', ''),
('AA', '1202007', 'Ahmad Saefullah, S.Pd.', 'L', '', '0000-00-00', '', '', '', '085642711455', '', '', ''),
('V', '1202010', 'Drs. Anwar Sahidi', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AQ', '1202046', 'Drs. Sulistiyono', 'L', '', '0000-00-00', '', '', '', '087830844751', '', '', ''),
('AN', '1202037', 'Drs. Mujazin', 'L', '', '0000-00-00', '', '', '', '085741223354', '', '', ''),
('R', '1202013', 'Bagus Supriyadi I. W, S.P', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AE', '1202029', 'Lies Triati Nur, SH.', 'P', '', '0000-00-00', '', '', '', '087830547894', '', '', ''),
('T', '1202006', 'Agus Sunarto, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AT', '1202050', 'Urip Taufiq A, S.Pd.', 'L', '', '0000-00-00', '', '', '', '085642588779', '', '', ''),
('AR', '1202047', 'Sunardi, Drs.', 'L', '', '0000-00-00', '', '', '', '087857441255', '', '', ''),
('S', '1202001', 'Abdul Ghofar Muchsin', 'P', '', '0000-00-00', '', '', '', '085741122330', '', '', ''),
('AL', '1202043', 'Septriono, S.Pd.', 'L', '', '0000-00-00', '', '', '', '081547788210', '', '', ''),
('N', '1202028', 'Kusnawan, ST.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('K', '1202008', 'Ahmad Sugeng, S.Ag.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AP', '1202011', 'Arif Setiyawan, S.Pd.', 'L', '', '0000-00-00', '', '', '', '085746544781', '', '', ''),
('L', '1202004', 'Agus Arifiyanto', 'L', '', '0000-00-00', '', '', '', '085641123154', '', '', ''),
('W', '1202016', 'Budi Prasojo, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AD', '1202009', 'Ali Khamid, S.Pd.', 'L', '', '0000-00-00', '', '', '', '057425417748', '', '', ''),
('AW', '1202034', 'Mochamad Habibi, S.Si', 'L', '', '0000-00-00', '', '', '', '085741155881', '', '', ''),
('AI', '1202019', 'Endri Ernawati', 'P', '', '0000-00-00', '', '', '', '081254788990', '', '', ''),
('AV', '1202036', 'Muhamad Fatkhul Amin, ST.', 'L', '', '0000-00-00', '', '', '', '085642577889', '', '', ''),
('AY', '1202031', 'Lis Daryatun, S.Pd.', 'P', '', '0000-00-00', '', '', '', '085742155477', '', '', ''),
('AX', '1202003', 'Adi Sucipto, ST.', 'L', 'Pekalongan', '1988-01-01', '', 'acepby@gmail.com', 'Tulips.jpg', '085741221455', 'adi', 'adi123', 'guru'),
('AZ', '1202042', 'Sendang Wijayanti, S.Pd.', 'P', '', '0000-00-00', '', '', '', '085741125998', '', '', ''),
('X', '1202018', 'Dimas Kurniawan, S.Or', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('Y', '1202033', 'M. Syafwallah Al Aziz R', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('BA', '1202052', 'Yuli Emita, S.Pd', 'P', '', '0000-00-00', '', '', '', '085741110054', '', '', ''),
('AG', '1202005', 'Agus Riyadi, ST.', 'L', '', '0000-00-00', '', '', '', '085641122456', '', '', ''),
('AK', '1202038', 'Musthofa, S.Pd.T', 'L', '', '0000-00-00', '', '', '', '085741122354', '', '', ''),
('AJ', '1202024', 'Imam Zaenudin, S.Pd.', 'L', '', '0000-00-00', '', '', '', '087835544780', '', '', ''),
('P', '1202041', 'Salman Alfarizi, S.Pd', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('AS', '1202022', 'Hafiz Gulam, S.Pd.', 'L', '', '0000-00-00', '', '', '', '081548244775', '', '', ''),
('AU', '1202040', 'Rini Rismayanti, S.Pd.', 'P', '', '0000-00-00', '', '', '', '085642511448', '', '', ''),
('BB', '1202017', 'Dimas Ardiansyah, S.Pd.', 'L', '', '0000-00-00', '', '', '', '085878654321', '', '', ''),
('BC', '1202032', 'M. Fikri Hidayatullah', 'L', '', '0000-00-00', '', '', '', '087838880214', '', '', ''),
('BD', '1202023', 'Halim Suwahyo, S.Pd.', 'L', '', '0000-00-00', '', '', '', '081854440213', '', '', ''),
('D', '1202014', 'Bambang Kuntoro, S.Pd.', 'L', '', '0000-00-00', '', '', '', '085742627289', '', '', ''),
('A', '1202051', 'Drs. Wardhiyanto', 'L', '', '0000-00-00', '', '', '', '085742564554', '', '', ''),
('B', '1202021', 'Drs. Ghozali', 'L', '', '0000-00-00', '', '', '', '085642000124', '', '', ''),
('E', '1202045', 'Sugeng Sutikno, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('F', '1202015', 'Bambang Mugiono, S.Pd.', 'L', '', '0000-00-00', '', '', '', '', '', '', ''),
('Z', '1202035', 'Muhajirin', 'L', '', '0000-00-00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenisklm`
--

CREATE TABLE IF NOT EXISTS `jenisklm` (
  `id_jenisklm` varchar(2) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jenisklm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisklm`
--

INSERT INTO `jenisklm` (`id_jenisklm`, `keterangan`) VALUES
('L', 'Laki - Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_harian`
--

CREATE TABLE IF NOT EXISTS `jurnal_harian` (
  `no_id` int(5) NOT NULL AUTO_INCREMENT,
  `nis` int(4) NOT NULL,
  `tgl` date NOT NULL,
  `nama_keg` text NOT NULL,
  `uraian` text NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- RELATIONS FOR TABLE `jurnal_harian`:
--   `nis`
--       `siswa` -> `nis`
--

--
-- Dumping data for table `jurnal_harian`
--

INSERT INTO `jurnal_harian` (`no_id`, `nis`, `tgl`, `nama_keg`, `uraian`) VALUES
(1, 7529, '2013-01-08', 'Pelatihan internet sehat ala DNS Nawala', 'Menjadi tutor dalam pelaksanaan kegiatan pelatihan internet sehat ala DNS Nawala<br>'),
(2, 7511, '2013-02-05', 'Entry data modem setter ke database', ''),
(3, 7515, '2013-03-04', 'Pelatihan internet BLC (Broadband Learning Center)', ''),
(5, 7529, '2013-01-09', 'Pelatihan Pembuatan E-mail via Yahoo!', 'Menjadi tutor dalam pelaksanaan kegiatan pelatihan pembuatan e-mail via Yahoo! di Brebes<br>'),
(6, 7529, '2013-01-10', 'Pelatihan Membuat Blog/Web Untuk Bisnis Online', 'Menjadi asisten dalam pelaksanaan kegiatan pelatihan membuat blog/web untuk bisnis online<br>');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(4) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
('TITL', 'TEKNIK INSTALASI TENAGA LISTRIK'),
('TP', 'TEKNIK PEMESINAN'),
('TKR', 'TEKNIK KENDARAAN RINGAN'),
('PBO', 'PERBAIKAN BODI OTOMOTIF'),
('RPL', 'REKAYASA PERANGKAT LUNAK');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_jurusan` varchar(4) NOT NULL,
  `jml_siswa` int(5) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `kelas`:
--   `id_jurusan`
--       `jurusan` -> `id_jurusan`
--

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `jml_siswa`) VALUES
('TI001', '2 TITL', 'TITL', 23),
('TP001', '2 TP', 'TP', 31),
('MO001', '2 TKR-1', 'TKR', 40),
('MO002', '2 TKR-2', 'TKR', 39),
('MO003', '2 TKR-3', 'TKR', 34),
('BO001', '2 PBO-1', 'PBO', 27),
('BO002', '2 PBO-2', 'PBO', 35),
('RP001', '2 RPL-1', 'RPL', 35),
('RP002', '2 RPL-2', 'RPL', 36);

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE IF NOT EXISTS `keluhan` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`no_id`, `nama`, `email`, `pesan`, `waktu`) VALUES
(1, 'Muhamad Khoirul Umam', 'ngeposta@gmail.com', 'Saya sudah merasa sangat nyaman berada di PT. Telkom, oleh karena itu saya tidak mau dipindah tugaskan ke du/di yang lain.', 'Jum''at, 21 Maret 2014 | 13:26');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE IF NOT EXISTS `monitoring` (
  `id_monitoring` int(5) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `id_pembimbing` int(5) NOT NULL,
  `id_dudi` varchar(5) NOT NULL,
  `jns_keg` text NOT NULL,
  `kritik_saran` text NOT NULL,
  PRIMARY KEY (`id_monitoring`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `monitoring`:
--   `id_dudi`
--       `du_di` -> `id_dudi`
--   `id_pembimbing`
--       `pembimbing` -> `id_pembimbing`
--

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `tgl`, `id_pembimbing`, `id_dudi`, `jns_keg`, `kritik_saran`) VALUES
(1, '2013-01-03', 1031, 'TL001', 'Pelatihan BLC (Broadband Learning Center)', ''),
(2, '2013-01-09', 1021, 'DK001', 'Entry Data Penduduk Terbaru ke Database', 'Sudah baik, mohon di pertahankan.<br>'),
(4, '2014-03-03', 1021, 'DK001', 'Melayani Pembuatan KTP Massal', 'Cukup baik, mohon lebih rajin dan giat lagi dalam bekerja.<br>');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sikap`
--

CREATE TABLE IF NOT EXISTS `nilai_sikap` (
  `no_id` int(5) NOT NULL AUTO_INCREMENT,
  `nis` int(4) NOT NULL,
  `nilai_angka` int(5) NOT NULL,
  `nilai_huruf` varchar(2) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `nilai_sikap`:
--   `nis`
--       `siswa` -> `nis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing`
--

CREATE TABLE IF NOT EXISTS `pembimbing` (
  `id_pembimbing` int(5) NOT NULL,
  `id_guru` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pembimbing`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pembimbing`:
--   `id_guru`
--       `guru` -> `id_guru`
--

--
-- Dumping data for table `pembimbing`
--

INSERT INTO `pembimbing` (`id_pembimbing`, `id_guru`) VALUES
(1012, 'AN'),
(1011, 'AM'),
(1003, 'AD'),
(1004, 'AE'),
(1005, 'AF'),
(1006, 'AG'),
(1007, 'AI'),
(1008, 'AJ'),
(1009, 'AK'),
(1010, 'AL'),
(1001, 'A'),
(1002, 'AA'),
(1013, 'AP'),
(1014, 'AQ'),
(1015, 'AR'),
(1016, 'AS'),
(1017, 'AT'),
(1018, 'AU'),
(1019, 'AV'),
(1020, 'AW'),
(1021, 'AX'),
(1022, 'AY'),
(1023, 'AZ'),
(1024, 'B'),
(1025, 'BA'),
(1026, 'BB'),
(1027, 'BC'),
(1028, 'BD'),
(1029, 'C'),
(1030, 'D'),
(1031, 'AT');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE IF NOT EXISTS `penempatan` (
  `no_id` int(5) NOT NULL AUTO_INCREMENT,
  `nis` int(4) NOT NULL,
  `id_pembimbing` int(5) NOT NULL,
  `id_dudi` varchar(5) NOT NULL,
  `id_periode` varchar(5) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- RELATIONS FOR TABLE `penempatan`:
--   `id_dudi`
--       `du_di` -> `id_dudi`
--   `id_pembimbing`
--       `pembimbing` -> `id_pembimbing`
--   `id_periode`
--       `periode` -> `id_periode`
--   `nis`
--       `siswa` -> `nis`
--

--
-- Dumping data for table `penempatan`
--

INSERT INTO `penempatan` (`no_id`, `nis`, `id_pembimbing`, `id_dudi`, `id_periode`) VALUES
(1, 7529, 1031, 'TL001', 'P3001'),
(2, 7511, 1031, 'TL001', 'P3001'),
(3, 7515, 1031, 'TL001', 'P3001'),
(6, 7517, 1021, 'DK001', 'P3001'),
(7, 7526, 1021, 'DK001', 'P3001'),
(8, 7533, 1021, 'DK001', 'P3001'),
(9, 7538, 1021, 'DK001', 'P3001');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id_periode` varchar(5) NOT NULL,
  `nama_periode` varchar(30) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `thn_angkatan` varchar(10) NOT NULL,
  `jml_kelas` int(4) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `nama_periode`, `tgl_berangkat`, `tgl_kembali`, `thn_angkatan`, `jml_kelas`) VALUES
('P1001', 'Periode I', '2012-07-19', '2012-09-19', '2012/2013', 2),
('P2001', 'Periode II', '2012-10-22', '2013-01-04', '2012/2013', 2),
('P3001', 'Periode III', '2013-01-07', '2013-04-09', '2012/2013', 3),
('P4001', 'Periode IV', '2013-04-12', '2013-06-12', '2012/2013', 2);

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE IF NOT EXISTS `polling` (
  `sangat_bagus` int(11) NOT NULL,
  `bagus` int(11) NOT NULL,
  `sedang` int(11) NOT NULL,
  `tidak_tahu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`sangat_bagus`, `bagus`, `sedang`, `tidak_tahu`) VALUES
(15, 6, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE IF NOT EXISTS `post_data` (
  `id_post` int(10) NOT NULL AUTO_INCREMENT,
  `judul_post` text NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- RELATIONS FOR TABLE `post_data`:
--   `id_kategori`
--       `post_kategori` -> `id_kategori`
--

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`id_post`, `judul_post`, `konten`, `id_kategori`, `oleh`, `waktu`) VALUES
(26, 'Pameran Inovatif Dan Kreativitas Di Gedung Eks. Karesidenan Pekalongan', '<div class="article-content">\r\n	<p>\r\n		SMK Muhammadiyah Pekalongan&nbsp; dalam rangka menyemarakkan Hari Teknologi Nasional di Kota Pekalongan mengikutsertakan berbagai hasil karyanya di Ajang Pameran Inovatif dan Kreatifitas di Gedung Eks Karesidenan Pekalongan. Kegiatan yang dilaksanakan di Arena Budaya Jetayu Pekalongan pada tanggal 2 &ndash; 6 Oktober 2013.</p>\r\n	<p>\r\n		SMK Muhammmadiyah Pekalongan diminta oleh SKPD di Kota Pekalongan untuk turut memamerkan hasil karya yang selama ini diciptakan. LPPM Kramatsari, Dinas Pendidkan, Dinas Sosial, Bapeda, Dinas Komunikasi dan Informasi serta BPPT untuk menempatkan hasil karya tersebut seseuai kepersertaan dalam lomba maupun bidang yang ada.</p>\r\n	<p>\r\n		SMK Muhammadiyah Pekalongan mengikutsertakan karya berupa alat-alat :Disminator Sampah Plastik, Sablon otomatis, Wajan Electrik Modern, Pelorot batik, Kuas Batik modern, Rekor MURI perakitan seribu Lampu Hemat Energi, Solar sell, dan eksebisi ROBOTIKA MOEDIKAL.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 1, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:43'),
(25, 'Elearning Untuk Ujian Tengah Semester (UTS)', '<div class="article-content">\r\n	<p>\r\n		Tes Tengah Semester ganjil tahun pelajaran 2013/2014 ini menjadi sesuatu yang berbeda dilaksanakan di SMK Muhammmadiyah Pekalongan. Dengan mengambil sampir semua bagian tes memanfaatkan teknologi e-learning. Ujian tes dilakukan secara on line di lab computer yang dimiliki sekolah untuk siswa kelas satu dan dua.</p>\r\n	<p>\r\n		Dengan memanfaatkan e-learning dari program Moodle ini memberikan kesempatan siswa&nbsp; untuk diuji kemampuannya sesuai SK dan KD yang telah diberikan setengah semeseter sebelumnya. Dengan menggunakan elearning ini sekolah diringankan untuk pengelolaan soal, koreksi, dan pengolahan nilai. Diharapkan siswa dengan menggunakan elearning ini siswa akan langsung mengetahui hasil nilai yang diperoleh sesuai KKM&nbsp; atau belum. Kemandirian siswa dilatih untuk menyelesaikan soal sendiri dengan waktu yang telah diprogram.</p>\r\n	<p>\r\n		Pelaksanan ini terus disempurnakan untuk dapat diperoleh hasil yang lebih baik. Dengan kuantitas dan kualitas yang terus baik dengan demikian elearning&nbsp; dapat sesuai dengan tujuan yang diharapkan.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:41'),
(27, 'Pelantikan Kepala Sekolah Baru', '<div class="article-content">\r\n	<p>\r\n		Sabtu, 21 Oktober 2013 bertempat di Aula SMK Muhammadiyah Pekalongan dengan disaksikan oleh semua guru dan karyawan serta tamu undangan dari Pimpinan Wilayah Muhammadiyah Jawa Tengah dan PDM Kota pekalongan melantik Drs. HM Ghozali sebagai Kepala Sekolah baru SMK Muhammadiyah Pekalongan periode 2013-2017 menggantikan Drs. Indrato, M.Si. Dengan mengucapkan janji dalam pengangkatan sebagai Kepala Sekolah ini akan mengemban amanat baru yang sebelum adalah guru Kimia di SMK Muhammadiyah pekalongan. Beliau sebelumnya pernah menjabat sebagai Pimpinan Daerah Muhammadiyah Kota Pekalongan.</p>\r\n	<p>\r\n		Dengan semangat baru, dengan kepala sekolah baru, manajement SMK Muhammadiyah akan dibawa dengan kemajuan yang terus menuju peningkatan mutu yang lebih baik. Sementara untuk wakil kepala sekolah masih dijabat oleh pejabat yang lama/sebelumnya.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:44'),
(28, 'SMK Muhammadiyah Pekalongan Panitia Teknis LKS Nasional Bid. Listrik ', '<p>\r\n	Untuk ke Tiga kalinya Guru-guru Kompetensi keahlian Teknik Instalasi Tenaga Listrik menjadi panitia teknis Lomba Keterampilan Siswa (LKS) Tingkat Nasional yang diselenggarakan di Jakarta, Taman Mini Indonesia Indah (TMII) 23 &ndash; 28 September 2013. LKS Tingkat Nasional ke XXI ini sebagai ajang kompetisi siswa SMK sesuai dengan kompetensi dan keahlian yang ada. Yang selanjutnya sebagai ajang seleksi untuk nantinya maju Lomba Keterampilan ke Tingkat yang lebih tinggi (asia tenggara ataupun dunia).</p>\r\n<p>\r\n	LKS Tingkat Nasional ke XXI ini diikuti seluruh peserta dari semua propinsi se Indonesia. Menempati anjungan Propinsi Daerah Istimewa Aceh (Nangro Aceh Darusalam) ini berada di bawah rumah adat yang ada di TMII.</p>\r\n', 2, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:47'),
(29, '5 Jawara Menuju LKS Daerah Tahun 2013 ', '<p>\r\n	Imam Fathoni mewakili T. Instalai Tenaga Listrik, Suro Budi Roso mewakili T.Kendaraan Ringan, Abdul Basid mewakili T. Pemesinan, M. Mubarok mewakili T. Perbaikan Bodu Otomotif, dan Bayu Aji Nugroho mewakili T. Rekayasa Perangkat Lunak. 5 jawara dari SMK Muhammadiyah Pekalongan ini akan mengukti LKS Tingkat Daerah tahun 2013 ini di Purwokerto. Kegiatan yang dilaksankan 16 &ndash; 20 Sepetember 2013 ini dilaksanakan di beberapa SMK di eks karisidenan Kedu.</p>\r\n<p>\r\n	Selamat berjuang siswa &ndash; siswa SMK Muhammadiyah Pekalongan raih prestasi seperti tahun sebelumnya untuk mengukir sejarah bagi pribadi maupun sekolah. Semangat.</p>\r\n', 1, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:48'),
(30, 'Kemeriahan Forum Silahturahmi (FORTASI) IPM Dan MOS ', '<p>\r\n	Masa Orientasi Siswa (MOS) Baru dilaksanakan dari hari Senin hingga Kamis (13 s.d 16 Juli 2009). Ajang ini dibuat berbeda dengan pelaksanaan kegiatan orientasi di sekolah lain. Kegiatan ini selain berorientasi&nbsp; mengenalkan siswa terhadap lingkungan SMK Muhammadiyah juga mengeksplorasi&nbsp; bakat dan minat siswa serta pendataan diri siswa baik yang berprestasi maupun tidak. Kegiatan yang dimulai pukul 06.00 selesai hingga jam 3 sore.</p>\r\n<p>\r\n	Kegiatan pagi sebelum materi diisi oleh Ikatan Pemuda Muhammadiyah (IPM) ranting SMK Muhammadiyah yang berisikan pengenalan IPM dan kedisiplinan. IPM juga memberikan tugas &ndash; tugas kepada siswa baru dalam rangka penggalangan dana untuk kegiatan social saat kemah PTQ.<br />\r\n	Hal lain yang menarik dalam masa orientasi di SMK Muhammadiyah, siswa baru diberikan kegiatan OUT BOND. Kegiatan OUT BOND dilaksanakan dilingkungan kampus dimana tersedia wall climbing, lapangan dan olah raga.</p>\r\n<p>\r\n	Kegiatan OUT BOND untuk siswa baru yang terdiri dari climbing, flying fox dan permainan tali serta lingkaran.&nbsp; Banyak siswa yang merasa takut untuk memanjat wall climbing yang berketinggian 15 meter. Apalagi meluncur dari ketinggi 15 meter dengan pengaman tambang.<br />\r\n	Sebagai Sekolah Rintisan Bertaraf Internasional kegiatan orientasi ini ditekankan pula masalah kedisiplinan. Baik dalam bentuk baris berbaris maupun dalam bentuk permainan OUT BOND. Selain itu, sebagai bentuk motivasi menumbuhkembangkan pemikiran siswa baru, diberikan materi budaya inovasi. Dengan materi ini diharapkan siswa memilki kemampuan untuk memunculkan ide serta kreatifitasnya.</p>\r\n<p>\r\n	Kegiatan yang wajib bagi siswa baru SMK Muhammadiyah adalah kegiatan keislaman. Dimana suasana islami yang penuh kedisiplinan dalam beribadah ini yang ditekankan selama belajar. Sholat dhuhur dan ashar berjamaah sebagai latihan siswa untuk taat ibadah.</p>\r\n', 1, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:50'),
(31, 'Radio Komunitas IPM Ranting SMK Muhammadiyah Kota Pekalongan', '<p>\r\n	Ikatan Pelajar Muhammadiyah (IPM) Ranting SMK Muhammadiyah Kota Pekalongan adalah tempat ajang kreatif dan inovasi. Ini menjadi ciri yang melekat bagi pengurusa IPM di SMK yang menjadi Rintisan Sekolah Bertaraf Internasional. Ciri itu tampak pada kegiatan Kepenyiaran yang di punggawai oleh aktivis IPM.</p>\r\n<p>\r\n	Ajang kreatifitas IPM oleh siswa &ndash; siswi SMK Muhammadiyah tidak saja dilakukan secara nyata di lapangan. Ajang kreatifitas siswa bisa dilakukan secara tidak langsung dengan memanfaatkan teknologi yang berkembang saat ini. Apalagi di jaman teknologi informasi yang cepat ini maka sangat mudah dan murah membuat sebuah ajang kreatifitas yang menarik.<br />\r\n	<br />\r\n	Untuk itu, siswa &ndash; siswi&nbsp; SMK Muhammadiyah Pekalongan, dengan ketua IPM Ahmad Rodhi tidak ingin ketinggalan untuk menapaki teknologi yang sudah ada. Dengan membuat ajang yang menarik dan membangun pribadi siswa. Dibuatlah sebuah pemancar radio yang mengambil jalur FM. Berdirilah Radio Komunitas Siswa SMK Muhammadiyah Pekalongan yang diberi nama Moedikal FM.<br />\r\n	Nama Moedikal artinya Moehammadiyah di Pekalongan. Radio yang mengambil frekuensi 107.7 MHz hadir hamper tiap hari. Dipilihnya frekuensi ini sesuai dengan aturan Komisi Penyiaran Indonesia (KPI) tentang frekuensi udara bahwa untuk radio komunitas diperkenankan pada frekuensi 107.7 &ndash; 108 Mhz dengan daya tidak lebih 50 Watt. Sehingga pancarannya masih sebatas wilayah Pekalongan saja. Bahkan untuk pekalongan wilayah ujung timur agak sulit menerima siaran ini.<br />\r\n	<br />\r\n	Stasiun Radio yang menempati ruang Ikatan Pelajar Muhammadiyah (IPM) ranting SMK Muhammadiyah di Jl AMD barat stadion kraton. Dengan ruang yang sederhana dan kelengkapan pemancar, mixer serta radio terus mengudara.<br />\r\n	Berdiri sejak bulan Juni 2007 mengalami pasang surut dalam kegiatan siswa. Di kelola di bawah naungan IPM ini terus mengudara. On air tanpa penyiar di mulai jam 07.00 pagi dan mulai jam 14,00 mulai dengan penyiar. Siaran radio turun dari udara jelang magrib. Sesekali Moedikal FM mengudara Non stop dari pagi hingga malam dengan sajian lagu-lagu non stop dengan pilihan lagu Indonesia Pop Hits.<br />\r\n	<br />\r\n	Ahmad Ridho, sebagai Ketua IPM sekaligus yang memunggawai radio ini berharap radio dapat terus mengudara dan eksis sebagai ajang kreatifitas siswa. Sebagai ajang kreatifitas dan komunitasnya siswa-siswi di pekalongan ini tak heran jika setiap siarannya selalu di penuhi dengan dering HP yang selalu SMS.<br />\r\n	Kenyataan di lapangan, membanggakan bagi penyiar Moedikal FM menjadi ajang silahturahmi bagi siswa &ndash; siswi di sekolah seputar pekalongan bahkan para alumninya pun turut serta. Ini tampat dari banyaknya SMS yang masuk setiap hari saat siaran. (Anida &amp; Urip)</p>\r\n', 1, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:53'),
(32, 'Milad Pandu Hizbul Wathan (HW) 18 Nopember 2008 ', '<p>\r\n	<span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">Pa</span><span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">n</span><span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">du Hizbul Wa</span><span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">than (HW) lahir karena potensinya sebuah kepanduan untuk membe</span><span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">ntuk watak dan fisik pemuda sebagai generasi penerus bangsa. Hal ini sudah dirasakan</span><span style="font-size: 10pt; line-height: 150%; font-family: Verdana;"> oleh pendiri Muhammadiyah sekaligus penggagas berdirinya pandu HW 18 Nopember 1918, 90 tahun yang lalu.</span> <span style="font-size: 10pt; line-height: 150%; font-family: Verdana;">Pada Hari Rabu, 19 Nopember yang lalu Qobilah SMK Muhammadiyah melaksanakan Milad HW dengan melaksanakan kegiatan-kegiatan : upacara bendera, donor darah sukarela, bakti lingkungan, ceramah &ldquo;bahayanya merokok, lomba-lomba (lari 100m, kaligrafi dan pidato) serta diramaikan dengan pentas seni Moedikal Band. </span></p>\r\n', 3, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:57'),
(33, 'SMK Muhammadiyah Pekalongan - OSRAM : Hari Hemat Energi Listrik ', '<p align="justify">\r\n	HarI Hemat Energi Listrik<span> untuk semua. Hemat energi listrik di rumah dan di sekolah. Kegiatan kerja sama dengan OSRAM dan gtz Jerman. SMK Muhammadiyah Pekalongan bekerja sama dengan OSRAM dan gtz Jerman akan dilaksanakan tanggal 12 JANUARI 2011 Hari Rabu mulai jam 10 s.d selesai yang akan diikuti oleh siswa kelas 1 semua.Acara yang akan berlangsung di AULA Lantai II ini diikuti kelas 1. Acara menampilkan pentas seni dan gelas teknologi tepat guna. Hasil karya teknologi tepat guna yang akan di pamerkan adalah KUSJIRO, alat sablon otomatis, pemanas lilin pembatikan CAP serta simulasi energi listrik dengan solar sel. </span></p>\r\n<p align="justify">\r\n	<span>Acara yang telah dilakukan adalah kegiatan kompetisi matematika OSRAM, penukaran lampu bolam menjadi SL OSRAM. Acara ini akan dipaparan hemat energi listrik serta penyerahan hadiah kompetisi OSRAM serta kenang-kenangan berupa buku agenda dan googy bag. </span></p>\r\n<p align="justify">\r\n	Kegiatan ini akan dihadiri oleh Dinas Pendidikan,&nbsp; Pimampinan Daerah Muhammadiyah Pekalongan serta rombongan dari OSRAM.</p>\r\n<p align="justify">\r\n	Serta seluruh guru dan karyawan. Pembagian agenda dan goody bag untuk siswa, karyawan dan guru serta civitas akademika SMK Muhammadiyah.</p>\r\n', 2, 'Admin SMK Moedikal', 'Minggu, 16 Maret 2014 | 03:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_kategori`
--

CREATE TABLE IF NOT EXISTS `post_kategori` (
  `id_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post_kategori`
--

INSERT INTO `post_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Artikel'),
(2, 'Berita'),
(3, 'Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jenisklm` varchar(2) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `id_jurusan` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `siswa`:
--   `id_jenisklm`
--       `jenisklm` -> `id_jenisklm`
--   `id_jurusan`
--       `jurusan` -> `id_jurusan`
--   `id_kelas`
--       `kelas` -> `id_kelas`
--

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `id_jenisklm`, `id_kelas`, `tmp_lahir`, `tgl_lahir`, `foto`, `alamat`, `no_telpon`, `id_jurusan`, `email`, `username`, `password`, `level`) VALUES
(7257, 'ALI NAJMI', 'L', 'TI001', '-', '0000-00-00', '', 'Jl. Truntum No. 16 Klego, Pekalongan', '', 'TITL', '', '', '', ''),
(7259, 'ANDRIYANTO', 'L', 'TI001', '-', '0000-00-00', '', 'Poncol RT. 01 RW. 10, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7260, 'ERIK FIRMANSYAH', 'L', 'TI001', '-', '0000-00-00', '', 'Jl. Rajawali Timur No. 09 Bugisan, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7261, 'FIRMAN SETYAWAN PRABOWO', 'L', 'TI001', '-', '0000-00-00', '', 'Noyontaan 11 RT. 03 RW. 03 No. 16, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7263, 'IMAM FATONI', 'L', 'TI001', '-', '0000-00-00', '', 'Jl. Labuhan RT. 01 RW. 07 Degayu, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7264, 'KURNIANSYAH RIZKY HARJONO', 'L', 'TI001', '-', '0000-00-00', '', 'Mayangan RT. 19 RW. 07 Wiradesa, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7265, 'MOCHAMAD AL AMIN', 'L', 'TI001', '-', '0000-00-00', '', 'Kandang Panjang RT. 01 RW. 06, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7266, 'MOH. ADI RIYANTO', 'L', 'TI001', '-', '0000-00-00', '', 'Samborejo RT. 04 RW. 02 Tirto, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7267, 'MOHAMMAD NANDA RIZQIANTO', 'L', 'TI001', '-', '0000-00-00', '', 'Sapuro RT. 03 RW. 04 Sapuro, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7268, 'MOKHAMAD NAZARUDDIN', 'L', 'TI001', '-', '0000-00-00', '', 'Jlamprang RT. 02 RW. 06 No. 11, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7269, 'MUH. SIDIQ FAISAL', 'L', 'TI001', '-', '0000-00-00', '', 'Desa Pesucen RT. 08 RW. 04 Pesucen, Pemalang\r\n', '', 'TITL', '', '', '', ''),
(7270, 'MUHAMMAD AMRI SAPUTRA', 'L', 'TI001', '-', '0000-00-00', '', '-', '', 'TITL', '', '', '', ''),
(7271, 'MUHAMMAD ARIFIN', 'L', 'TI001', '-', '0000-00-00', '', 'Slamaran Pantai RT. 09 RW. 01 Krapyak Lor, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7272, 'MUHAMMAD BURHANUDIN', 'L', 'TI001', '-', '0000-00-00', '', 'Kranding RT. 03 RW. 05 Jeruksari, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7273, 'MUHAMMAD FAHMI ABDURRAHMAN', 'L', 'TI001', '-', '0000-00-00', '', 'Perum Wirosari 3 A3 RT. 02 RW. 09 Sambong, Batang\r\n', '', 'TITL', '', '', '', ''),
(7274, 'MUHAMMAD NADIFUL UMAM', 'L', 'TI001', '-', '0000-00-00', '', 'Jl. Sulawesi RT. 03 RW. 04 Kergon, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7276, 'NAILIS SA''ADAH', 'P', 'TI001', '-', '0000-00-00', '', 'Banyurip Alit RT. 03 RW. 02 Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7277, 'PANJI SULYADI', 'L', 'TI001', '-', '0000-00-00', '', 'Jl. Garuda RT. 05 Rw. 01 Bener Wiradesa, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7278, 'ROMADHON DANA BACHTIAR', 'L', 'TI001', '-', '0000-00-00', '', 'Desa Bebel RT. 10 RW. 03 Bebel, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7279, 'SUROWIJOYO', 'L', 'TI001', '-', '0000-00-00', '', 'Slamaran Pantai RT. 01 RW. 03 Krapyak Lor Pekalongan \r\n', '', 'TITL', '', '', '', ''),
(7280, 'WAHYU ARIF RAHMAWAN', 'L', 'TI001', '-', '0000-00-00', '', 'Panjang Baru RT. 02 RW. 02 Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7281, 'WINADA SAPARUDIN', 'L', 'TI001', '-', '0000-00-00', '', 'Denasari Wetan RT. 02 RW. 01 Batang\r\n', '', 'TITL', '', '', '', ''),
(7282, 'YUDHI PRAMONO', 'L', 'TI001', '-', '0000-00-00', '', 'Hos Cokroaminoto RT. 01 RW. 01 Kuripan Lor, Pekalongan\r\n', '', 'TITL', '', '', '', ''),
(7320, 'ADIB AHMADA', 'L', 'MO001', '-', '0000-00-00', '', 'Poncol 8 No. 15, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7321, 'ADIMA RIDWAN', 'L', 'MO001', '-', '0000-00-00', '', 'Rajawali Utara Bugisan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7322, 'DANANG TRI ATMOJO', 'L', 'MO001', '-', '0000-00-00', '', 'Untung Surapati RT. 03 RW. 08 No. 18 Tegalrejo, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7323, 'EKO WASONO', 'L', 'MO001', '-', '0000-00-00', '', 'Tratebang RT. 08 RW. 03, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7324, 'ERWIN HADI GUNAWAN', 'L', 'MO001', '-', '0000-00-00', '', 'Pesaren RT. 02 RW. 01 No. 27, Batang\r\n', '', 'TKR', '', '', '', ''),
(7325, 'FRIAN FAKHRI OKTAVIANTO', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Wiroto No. 124 RT. 01 RW. 02 Dadirejo Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7326, 'HABIBULLAH', 'L', 'MO001', '-', '0000-00-00', '', 'Tegal Dowo RT. 05 RW. 02 No. 28 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7327, 'IMAM SAPUTRA', 'L', 'MO001', '-', '0000-00-00', '', 'Tegal Dowo RT. 01 RW. 01 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7328, 'ISMAIL', 'L', 'MO001', '-', '0000-00-00', '', 'Noyontaan Gg. 1 RT. 01 RW. 01 No. 37, Pekalongan \r\n', '', 'TKR', '', '', '', ''),
(7329, 'JEVRY PRAFIYANO', 'L', 'MO001', '-', '0000-00-00', '', 'Bumirejo RT. 02 RW. 01 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7330, 'KAMALUDDIN', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Teuku Umar RT. 03 RW. 02 No. 004 Pasir Sari, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7331, 'KHILMI ASYAUKANI', 'L', 'MO001', '-', '0000-00-00', '', '-', '', 'TKR', '', '', '', ''),
(7332, 'M. ANGGA NURFATAH', 'L', 'MO001', '-', '0000-00-00', '', 'Wonokerto Kulon RT. 03 RW. 13 Wonokerto, pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7333, 'M. BAGUS FAHMI AJI', 'L', 'MO001', '-', '0000-00-00', '', 'Karang Jompo RT. 02 RW. 05 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7334, 'M. KHOLID SYAIFULLAH', 'L', 'MO001', '-', '0000-00-00', '', 'Sampangan RT. 06 RW. 01 No. 5 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7335, 'MAULANA AINUL YAQIN', 'L', 'MO001', '-', '0000-00-00', '', 'Setono Gg .3 RT. 01 RW. 09 No. 40 Dekoro, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7336, 'MOCHAMAD AAN APRILIANTO', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Veteran Gg. 1B RT. 02 RW. 01 No.13 Kraton Lor, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7337, 'MOCHAMMAD SADEWA', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Bahagia RT. 05 RW. 02 No. 31 Kraton Kidul, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7028, 'MOHAMAD SYAIFUDIN', 'L', 'MO001', '-', '0000-00-00', '', 'Rowosari RT. 6 RW. 1 Ulujami, Pemalang\r\n', '', 'TKR', '', '', '', ''),
(7338, 'MUCHAMMAD CHANAFI SOFYAN', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Sulawesi Kergon RT. 05 RW. 06 No. 28 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7339, 'MUCHAMMAD ILMAN TEGAR ''AAFIYATA', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Kh. Ahmad Dahlan RT. 03 RW. 05 No. 44 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7340, 'MUH. NAUFAL AZHAR RAMADHAN', 'L', 'MO001', '-', '0000-00-00', '', 'Bojong Wetan RT. 01 RW. 01 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7341, 'MUHAMMAD ALFIYANTO', 'L', 'MO001', '-', '0000-00-00', '', 'Dekoro RT. 04 RW. 11 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7342, 'MUHAMMAD BAHARUDIN ROBANI', 'L', 'MO001', '-', '0000-00-00', '', 'Waru Lor RT. 12 RW. 07 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7343, 'MUHAMMAD FARID YUSUF', 'L', 'MO001', '-', '0000-00-00', '', 'Setono Timur RT. 03 RW. 04 No. 136B Kel. Dekoro, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7344, 'MUHAMMAD HIDAYANTO', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Damar 1 No. 33 RT. 01 RW. 10 Slamaran, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7345, 'MUHAMMAD ISLAHUDIN', 'L', 'MO001', '-', '0000-00-00', '', 'Tegal Dowo RT. 05 RW. 02 No. 01 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7346, 'MUHAMMAD NURUL FAHMI', 'L', 'MO001', '-', '0000-00-00', '', 'Krapyak Kidul Gg. 8 RT. 03 RW. 02 No. 13 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7347, 'MUHAMMAD SYAQQIF ARSALA', 'L', 'MO001', '-', '0000-00-00', '', 'Setono Gg. 2 RT. 03 RW. 03 Dekoro, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7348, 'NUR FAKHAIRURROHMAN', 'L', 'MO001', '-', '0000-00-00', '', 'Wiroditan Bojong RT. 11 RW. 03 No. A23 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7349, 'ONGKY NUARI', 'L', 'MO001', '-', '0000-00-00', '', 'Soekarno-Hatta RT. 01 RW. 04 Wonokerto Wetan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7350, 'RENDRA PAMUNGKAS HADY SAPUTRA', 'L', 'MO001', '-', '0000-00-00', '', 'Bina Griya RT. 01 RW. 02 No. 366 Tegalrejo, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7351, 'SLAMET NURDIN', 'L', 'MO001', '-', '0000-00-00', '', 'Waru Lor RT. 07 RW. 04 No. 11 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7352, 'SURO BUDI ROSO', 'L', 'MO001', '-', '0000-00-00', '', 'Salamanis RT. 04 RW. 06 No. 1 Kandang Panjang, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7353, 'TEGUH BUDI HARJO', 'L', 'MO001', '-', '0000-00-00', '', 'Werdi RT. 07 RW. 03 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7354, 'TOTOK CATUR PRATAMA', 'L', 'MO001', '-', '0000-00-00', '', 'Kauman RT. 03 RW. 03 No. 22 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7355, 'TRI SETIYANTO', 'L', 'MO001', '-', '0000-00-00', '', 'Setono Dekoro RT. 02 RW. 05 No. 04 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7356, 'TRI WINOTO', 'L', 'MO001', '-', '0000-00-00', '', 'Jl. Laks. Yos Sudarso RT. 09 RW. 02 Wonokerto Kulon, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7357, 'ZAENAL ABIDIN', 'L', 'MO001', '-', '0000-00-00', '', 'Bener RT. 18 RW. 04 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7358, 'ABDUL SALIM', 'L', 'MO002', '-', '0000-00-00', '', 'Kyai Asam RT. 02 RW. 03 No. 27 Pabean, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7359, 'BAGUS EKO PRABOWO', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Patriot Gg. 1 RT. 01 RW. 01 No. 11 Dukuh, Pekalongan', '', 'TKR', '', '', '', ''),
(7360, 'CHAIRUL IMAM', 'L', 'MO002', '-', '0000-00-00', '', 'Sukorejo RT. 01 RW. 02 No. 08 Pekalongan', '', 'TKR', '', '', '', ''),
(7361, 'DEKA DANYAWAN', 'L', 'MO002', '-', '0000-00-00', '', 'Perum Limas Indah RT. 03 RW. 13 No. 01 Krapyak Lor, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7362, 'EKO HIDAYATURROHMAN', 'L', 'MO002', '-', '0000-00-00', '', 'Dekoro, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7363, 'FAJAR SURI HIDAYATULLAH', 'L', 'MO002', '-', '0000-00-00', '', 'Madukara Legenuk RT. 03 RW. 07 No. 43 Sukorejo, Pemalang\r\n', '', 'TKR', '', '', '', ''),
(7364, 'FATKHUL ROKHIM', 'L', 'MO002', '-', '0000-00-00', '', 'Panjang Wetan RT. 03 RW. 06 No. 57 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7365, 'FIRMAN FEBRYANSYAH', 'L', 'MO002', '-', '0000-00-00', '', 'Kunti Utara RT. 03 RW. 08 No. 05 Panjang Baru, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7366, 'HAMZAH UMAR', 'L', 'MO002', '-', '0000-00-00', '', 'Dekoro RT. 03 RW. 04 No. 163 Kec. Pekalongan Timur, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7367, 'IBNU WALID HELMY', 'L', 'MO002', '', '0000-00-00', '', 'Jl. Brigjend Slamet R. RT. 03 RW. 02 Kalipucang Kulon, Batang\r\n', '', 'TKR', '', '', '', ''),
(7368, 'IRFAN MAULANA', 'L', 'MO002', '-', '0000-00-00', '', 'Panjang Wetan RT. 05 RW. 06 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7369, 'KHAMDAN', 'L', 'MO002', '-', '0000-00-00', '', 'Banyurip Alit RT. 01 RW. 04 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7370, 'M. AJI ALFARIZI', 'L', 'MO002', '', '0000-00-00', '', 'Tapak Siring RT. 01 RW. 06 Poncol, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7371, 'M. DIDIK MUSTAGHFIRIN', 'L', 'MO002', '-', '0000-00-00', '', 'Banyurip Alit Gg. 4 RT. 03 RW. 04 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7372, 'M. FADLI ZDIL IKROM', 'L', 'MO002', '', '0000-00-00', '', 'Labuhan RT. 06 RW. 03 No. 82 Degayu Utara, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7373, 'M. FATIH HUDIN', 'L', 'MO002', '-', '0000-00-00', '', 'Jl.Hayam Wuruk RT. 02 RW. 03 No. 11 Kauman, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7374, 'M. LUCKY RIVALDO', 'L', 'MO002', '-', '0000-00-00', '', 'Perum. Sekararum RT. 03 RW. 08 No. 04 Sapuro, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7375, 'MASHADI KHAMAMI', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Jokotingkir RT. 05 RW. 05 Degayu, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7376, 'MOCH. JOHAN PRAKOSO', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Tondano RT. 05 RW. 04 NO. 11 Poncol, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7377, 'MOCHAMAD NABIL SAPUTRA', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Sulawesi RT. 04 RW. 02 No. 16 Bendan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7378, 'MOHAMAD ADITIYA ALIYANI', 'L', 'MO002', '-', '0000-00-00', '', 'Tangkil Tengah RT. 14 RW. 07 No. 0527 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7379, 'MUCHAMAD HIDAYAT', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Selat Karimata RT. 01 Rw. 01 No. 9 Bandengan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7380, 'MUHAMAD SAJIDIN', 'L', 'MO002', '-', '0000-00-00', '', 'Werdi Banjar Anyar RT. 17 RW. 08 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7381, 'MUHAMAD UMAR', 'L', 'MO002', '-', '0000-00-00', '', 'Jagalan Rowosari RT. 04 Rw. 04 No. 57 Ulujami, Pemalang\r\n', '', 'TKR', '', '', '', ''),
(7382, 'MUHAMMAD ALIFUDIN', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Meranti V/47 RT. 03 RW. 11 Krapyak Lor, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7383, 'MUHAMMAD FAIZIN', 'L', 'MO002', '-', '0000-00-00', '', 'Kradenan Gg. 4 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7384, 'MUHAMMAD MA''SUM', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Truntum RT. 01 RW. 01 No. 51 Klego, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7385, 'MUHAMMAD MUZAMMIL', 'L', 'MO002', '-', '0000-00-00', '', 'Kebonsari RT. 01 RW. 02 No. 0012 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7386, 'MUHAMMAD NUR KHOLIS', 'L', 'MO002', '-', '0000-00-00', '', 'Kusuma Bangsa RT. 07 RW. 07 No. 05 Panjang Baru, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7387, 'MUHAMMAD RIZQI', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Jlamprang RT. 04 RW. 01 Krapyak Lor, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7388, 'NABILLA FIERDAUSYA MAHARANI', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Selat Karimata RT. 04 RW. 03 No. 8 Bandengan Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7389, 'RIDWAN SUTOPO', 'L', 'MO002', '-', '0000-00-00', '', '-', '', 'TKR', '', '', '', ''),
(7112, 'RIZQIE ARDIANTO NUGROHO', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Irian Gg. 69 RT. 04 RW. 04 No. 26c Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7390, 'SIDIK MASDUKI', 'L', 'MO002', '-', '0000-00-00', '', 'Krapyak Lor Gg. Sasak 1 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7391, 'SOFI ROZIYANTO', 'L', 'MO002', '-', '0000-00-00', '', 'Blimbing Wuluh Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7392, 'SYAIFUL ANWAR', 'L', 'MO002', '-', '0000-00-00', '', 'Salamanis RT. 02 RW. 06 No. 21 Kandang Panjang, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7393, 'SYEH ABDULLAH MUCHGENI', 'L', 'MO002', '-', '0000-00-00', '', 'Jl. Teratai No. 59A Poncol, Pekalongan', '', 'TKR', '', '', '', ''),
(7394, 'WAHYU UMAMI', 'L', 'MO002', '-', '0000-00-00', '', 'Panjang Wetan Gg. 12 RT. 06 RW. 03 No. 26 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7395, 'ZAKI ARSLAN ABDOLLAH', 'L', 'MO002', '-', '0000-00-00', '', 'Petukangan RT. 03 RW. 01 No. 47 Wiradesa, Pekalongan \r\n', '', 'TKR', '', '', '', ''),
(7283, 'ADI ARYANTO', 'L', 'TP001', '-', '0000-00-00', '', 'Pesanggrahan RT. 01 RW. 01 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7284, 'ADI HERMANSYAH', 'L', 'TP001', '-', '0000-00-00', '', 'Wonokerto Kulon RT. 07 RW. 02 Wonokerto Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7286, 'AL HUDA RESTU HADI PRABOWO', 'L', 'TP001', '-', '0000-00-00', '', 'Krapyak Lor Gg. I RT. 01 RW. 02 No. 15 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7287, 'ARI WIBOWO', 'L', 'TP001', '-', '0000-00-00', '', 'Wonokerto Kulon RT. 02 RW. 02 Wonokerto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7288, 'ASKHORI', 'L', 'TP001', '-', '0000-00-00', '', 'Dadirejo Tirto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7290, 'BENNY AZHAR RAMANDHANI', 'L', 'TP001', '-', '0000-00-00', '', 'Api-Api RT. 06 RW. 03 Wonokerto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7292, 'EKO WAHYU YOVIANTO', 'L', 'TP001', '-', '0000-00-00', '', 'Bener RT. 25 Rw. 05 Wiradesa, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7293, 'ERLANGGA WIDYA ASMORO', 'L', 'TP001', '-', '0000-00-00', '', 'Sapuro RT. 04 RW. 04 No. 16A Sapuro, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7294, 'FACHRUL RAHMAN', 'L', 'TP001', '-', '0000-00-00', '', 'Wonokerto Wetan RT. 01 RW. 04 Wonokerto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7295, 'FIRMAN LISTYANTO', 'L', 'TP001', '-', '0000-00-00', '', 'Salam Manis RT. 07 RW. 10 No. 119 Kandang Panjang, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7296, 'KHAIRUL ANAM', 'L', 'TP001', '-', '0000-00-00', '', 'Kauman RT. 15 RW. 08 Wiradesa, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7297, 'KHAIRUL ANWAR', 'L', 'TP001', '-', '0000-00-00', '', 'Karang Jompo RT. 02 RW. 05 Tirto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7299, 'M. ABDUL ROZAK', 'L', 'TP001', '-', '0000-00-00', '', 'Wiradesa RT. 21 RW. 05 Wiradesa, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7300, 'M. ALI MUSFI', 'L', 'TP001', '-', '0000-00-00', '', 'Rowoyoso RT. 09 RW. 03 Kec. Wonokerto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7301, 'M. FIKRI MAULANA', 'L', 'TP001', '-', '0000-00-00', '', 'Krapyak Lor Stembok RT. 04 RW. 01 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7302, 'M. IKHWANUL KIROM', 'L', 'TP001', '-', '0000-00-00', '', 'Banyurip Alit Gg. 3B RT. 04 RW. 02 No. 14 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7303, 'M. KHOIRUL ANAM', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. Meranti 5 Slamaran RT. 01 RW. 11 No. 12 Krapyak Lor, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7304, 'MOHAMAD RISKI', 'L', 'TP001', '-', '0000-00-00', '', 'Desa Semut RT. 05 RW. 09 No. 09 Semut, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7305, 'MUHAMAD MUBAROQ', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. Yos Sudarso RT. 18 RW. 05 No. 981 Bebel, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7306, 'MUHAMMAD AL HAMDANI', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. KH. Dewantara No. 86 Landung Sari, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7307, 'MUHAMMAD ARIF RACHMAN', 'L', 'TP001', '-', '0000-00-00', '', 'Podosugih Gg. H. Palal RT. 03 RW. 02 No. 39 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7308, 'MUHAMMAD BA''ITS', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. Urip Sumoharjo 065 RT. 03 RW. 06 No. 177 Medono, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7309, 'MUHAMMAD FIRDAUS', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. Tengku Umar RT. 01 RW. 01 Tirto, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7310, 'MUHAMMAD GHOZI HAIDAR', 'L', 'MO001', '-', '0000-00-00', '', 'Bandar RT. 04 RW. 01 Batang\r\n', '', 'TP', '', '', '', ''),
(7311, 'MUHAMMAD KHUSAENI', 'L', 'TP001', '-', '0000-00-00', '', 'Ketandan RT. 16 RW. 03 Wiradesa, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7312, 'MUHAMMAD RISKYANTO', 'L', 'TP001', '-', '0000-00-00', '', 'Mayangan RT. 08 RW. 03 Wiradesa, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7313, 'NURUN NAJIB', 'L', 'TP001', '-', '0000-00-00', '', 'Jl. Untung Suropati RT. 04 RW. 05 No. 01 Tegalrejo, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7315, 'ROIZAN HIKMAN SHOFIAR', 'L', 'TP001', '-', '0000-00-00', '', 'Gumawang RT. 06 RW. 02 No. 181 Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7316, 'SAMSUL ARIFIN', 'L', 'TP001', '-', '0000-00-00', '', 'Kergon RT. 04 RW. 06 Kergon, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7317, 'SHOKHIBUL KHAFID', 'L', 'TP001', '-', '0000-00-00', '', 'Desa Api-Api Pagedangan RT.02 RW.01 Api-Api Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7492, 'MOH. IQBAL MAULANA PUTRA', 'L', 'TP001', '-', '0000-00-00', '', 'Graha Tirto Asri RT. 07 RW. 04 No. 29 Tanjung, Pekalongan\r\n', '', 'TP', '', '', '', ''),
(7506, 'A. NUR ROFIQ', 'L', 'RP001', '-', '0000-00-00', '', 'Pesaren Warungasem RT. 04 RW. 02 Batang\r\n', '', 'RPL', '', '', '', ''),
(7541, 'ABDUL HALIM HIDAYATULLAH', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Jlamprang RT. 01 RW. 06 No. 0273 Krapyak Lor, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7508, 'ADY SLAMET ABDULRAHMAN', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Cemara RT. 02 RW. 11 No. 15 Slamaran Krapyak Lor, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7509, 'ANITA KUSTIANI', 'P', 'RP001', '-', '0000-00-00', '', 'Kandang Panjang 2A RT. 04 RW. 04 No. 16 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7510, 'AYU JE JE SETIARINI', 'P', 'RP001', '-', '0000-00-00', '', 'Jl. Pantaisari 2 RT. 03 RW. 10 No. 10 Panjang Baru, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7511, 'BAYU AJI NUGROHO', 'L', 'RP001', '-', '0000-00-00', '', 'Perumahan Patriot Mas RT. 07 RW. 01 Dukuh, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7512, 'DEDI ARIF SETIAWAN', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Veteran RT. 03 RW. 03 No. 5 Kraton Lor Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7513, 'DEFFI ANDRIYANI', 'P', 'RP001', '-', '0000-00-00', '', 'Pecakaran RT. 01 RW. 01 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7514, 'DEVI ROSALIA SEPTIANA', 'P', 'RP001', '-', '0000-00-00', '', 'Cokrah Gandu RT. 03 RW. 01 Dadirejo Barat, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7232, 'DONA DWI SURYA PRATAMA', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Buyutsari RT. 3 RW. 2 Karangmalang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7233, 'DONI DWI SURYO PRATOMO', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Buyutsari RT. 3 RW. 2 Karangmalang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7515, 'FAIZAL DINAR AL FAQIH', 'L', 'RP001', '-', '0000-00-00', '', 'Kandang Panjang RT. 05 RW. 03 No. 12 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7516, 'FIAN ALFARIZ JULI EKA SAPUTRA', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. WR. Supratman RT. 05 RW. 13 No. 55 Panjang Wetan, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7517, 'FIKRIE YOGI PRASMANTO', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Rasamala Raya RT. 04 RW. 12 No. 36 Krapyak Lor, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7518, 'FITRI NURAINI', 'P', 'RP001', '-', '0000-00-00', '', 'Kauman RT. 08 RW. 04 Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7519, 'FU''ADIL KIROM', 'L', 'RP001', '-', '0000-00-00', '', 'Panjang Wetan Gg. 1 RT. 02 RW. 07 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7520, 'HILMAN AHMAD', 'L', 'RP001', '-', '0000-00-00', '', 'Jl. Kemakmuran RT. 02 RW. 04 No. 34 Kraton Kidul, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7522, 'LABIBAH', 'P', 'RP001', '-', '0000-00-00', '', 'Gajahmada No. 74 Kramatsari, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7239, 'LUTFI IWAN ANGGORO', 'L', 'RP001', '-', '0000-00-00', '', 'Paweden RT. 3 RW. 1 No. 11 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7523, 'MALAA INNANI ALTI', 'P', 'RP001', '-', '0000-00-00', '', 'Jl. Yos Sudarso RT. 10 RW. 04 Kepatihan Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7524, 'MOH RIZAL MUZAKI', 'L', 'RP001', '-', '0000-00-00', '', 'Cokrah RT. 01 RW. 03 Jeruksari, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7525, 'MOHAMMAD RIZKI AMRI', 'L', 'RP001', '-', '0000-00-00', '', 'Pesona Griya Panjang RT. 03 RW. 11 No. J5 Kandang Panjang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7526, 'MUCHAMAD SUBECHI', 'L', 'RP001', '-', '0000-00-00', '', 'Desa Pacar RT. 01 RW. 03 Tirto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7527, 'MUHAMMAD IKHSAN HIDAYAT', 'L', 'RP001', '-', '0000-00-00', '', 'Watusalam Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7528, 'MUHAMMAD IMAM MAKHRUS', 'L', 'RP001', '-', '0000-00-00', '', 'Kauman RT. 08 RW. 04 Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7529, 'MUHAMMAD KHOIRUL UMAM', 'L', 'RP001', 'Pekalongan', '1995-12-08', 'Jellyfish.jpg', 'Simbang Wetan Gg. 10 RT. 12 RW. 04 Pekalongan', '085741118205', 'RPL', 'ngeposta@gmail.com', 'umam', 'umam123', 'siswa'),
(7530, 'PRAYOGA BRAJA ALAMSYAH', 'L', 'RP001', '-', '0000-00-00', '', 'Pantai Dewi Slamaran Rt. 01 Rw. 09 No. 1 Degayu, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7531, 'RATNA ULFA ARTATI', 'P', 'RP001', '-', '0000-00-00', '', 'Cangkring RT. 03 RW. 08 No. 44 Panjang Baru, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7532, 'SITI AL AMANAH', 'P', 'RP001', '-', '0000-00-00', '', 'Pantaisari RT. 01 RW. 10 No. 16 Panjangbaru, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7533, 'SYAILENDRA ADHI PRATAMA', 'L', 'RP001', '-', '0000-00-00', '', 'Boyoteluk RT. 01 RW. 03 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7535, 'UKI YULIA MAHARANY', 'P', 'RP001', '-', '0000-00-00', '', 'Api-Api RT. 09 RW. 04 Dadaptulak Wonokerto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7537, 'WIDYA ASTY SAPUTRI', 'P', 'RP001', '-', '0000-00-00', '', 'Pencongan RT. 23 RW .05 No. 338 Bener Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7538, 'WIWIN SETYO AJI', 'L', 'RP001', '-', '0000-00-00', '', 'Bebel RT. 09 RW. 03 No. 424 Wonokerto Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7539, 'WULAN SARI', 'P', 'RP001', '-', '0000-00-00', '', 'Kandang Panjang Gg. 1C RT. 05 RW. 05 No. 26 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7540, 'ZAHIR KHASANI', 'L', 'RP001', '-', '0000-00-00', '', 'Mayangan RT. 25 RW. 09 No. 535 Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7396, 'ABDUL AZIZ', 'P', 'MO003', '-', '0000-00-00', '', 'Pringlangu Gg. 3 RT. 04 RW. 05 No. 41A Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7397, 'ABDUL KHARIS', 'L', 'MO003', '-', '0000-00-00', '', 'Wiyoro Wetan RT. 02 RW. 05 No. 08 Ulujami Pemalang\r\n', '', 'TKR', '', '', '', ''),
(7398, 'ADE IGO AIRLANGGA', 'L', 'MO003', '-', '0000-00-00', '', 'Mulyorejo RT. 09 RW. 03 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7399, 'ADI SEPTYAN KAMALUDIN', 'L', 'MO003', '-', '0000-00-00', '', 'Bondansari 1 RT. 01 RW. 01 No. 0018 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7400, 'AGUS TRI MULYO', 'L', 'MO003', '-', '0000-00-00', '', 'Dadirejo Barat RT.03 RW.01 Wiradesa pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7401, 'AHMAD FAIZIN', 'L', 'MO003', '-', '0000-00-00', '', 'Bendan Gg. 8 No. 20 RT. 05 RW. 05 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7402, 'AHMAD RIFQI MAULANA', 'L', 'MO003', '-', '0000-00-00', '', 'Waru Lor RT. 02 RW. 01 Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7403, 'AJI NUGROHO', 'L', 'MO003', '-', '0000-00-00', '', 'Waru Lor RT. 13 RW. 08 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7404, 'ANGGI DWI SURYO', 'L', 'MO003', '-', '0000-00-00', '', 'Werdi Kludan RT. 02 RW. 01 Werdi, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7406, 'ARGI PRADIPTA ABIMANYU', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Paugeran Antasari RT. 02 RW. 01 Gamer, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7409, 'DANY KAHFABHI', 'L', 'MO003', '-', '0000-00-00', '', 'Bener RT. 21 RW. 04 No. 436 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7410, 'DINANTO AL YUSUF', 'L', 'MO003', '-', '0000-00-00', '', 'Bondansari RT. 01 RW. 02 No. 24 Karang Malang, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7411, 'FATKHUL MIRZA', 'L', 'MO003', '-', '0000-00-00', '', 'Mulyorejo RT. 07 RW. 03 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7412, 'GUGUN HERYANTO', 'L', 'MO003', '-', '0000-00-00', '', 'Jeruksari RT. 01 RW. 05 No. 494 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7414, 'IKHSAN MAULANA', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Pantura RT. 11 RW. 06 Kauman Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7415, 'KHOTIBUL UMAM', 'L', 'MO003', '-', '0000-00-00', '', 'Waru Lor RT. 09 RW. 11 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7416, 'LISTIONO SAPUTRO', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Sriwijaya RT. 02 RW. IX No. 05 Bendan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7417, 'M. IRHAM AS''AD', 'L', 'MO003', '-', '0000-00-00', '', 'Simbang Wetan RT. 14 RW. 04 No. 32 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7418, 'M. SYAHRUL IKHSANI', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Otto Iskandar Dinata RT. 01 RW. 01 No. 141 Sokorejo, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7419, 'MOCH. AZMI MALA', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. KH. Wahid Hasyim RT. 05 RW. 02 Kauman, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7421, 'MUHAMAD RIZKY', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Jlamprang No. 08 Krapyak Lor, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7422, 'MUHAMMAD ABDUL MUIZ', 'L', 'MO003', '-', '0000-00-00', '', 'Yos Sudarso RT. 12 RW. 06 No. 397 Kemplong Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7423, 'MUHAMMAD DWI RAHAYU HASMORO', 'L', 'MO003', '-', '0000-00-00', '', 'Pekuncen RT. 06 RW. 04 No. 273 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7424, 'MUHAMMAD FIRDAUS', 'L', 'MO003', '-', '0000-00-00', '', 'Rengas RT. 06 RW. 03 No. 21 Kedungwuni, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7425, 'MUHAMMAD HADI DINANA', 'L', 'MO003', '-', '0000-00-00', '', 'Wonoyoso Buaran, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7426, 'MUHAMMAD SURYA HADI', 'L', 'MO003', '-', '0000-00-00', '', 'Banyurip Ageng RT. 04 RW. 04 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7427, 'NOVIARI', 'L', 'MO003', '-', '0000-00-00', '', 'Sapugarut Buaran No. 489 Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7428, 'NUR SAFUDIN', 'L', 'MO003', '-', '0000-00-00', '', 'Kauman RT. 02 RW. 01 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7429, 'OKTA NUR IMAM', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Limas 1 Baru RT. 04 RW. 05 No. 21 Krapyak Kidul, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7430, 'RISKY ADI KURNIAWAN', 'L', 'MO003', '-', '0000-00-00', '', 'Buaran Indah RT. 02 RW. 08 No. 65 Keradenan, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7431, 'RIZAL ALI ABDULLAH', 'L', 'MO003', '-', '0000-00-00', '', 'Perumahan BRD No. 06 Buaran, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7432, 'SUJATMOKO', 'L', 'MO003', '-', '0000-00-00', '', 'Pandanarum RT. 05 RW .02 Tirto, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7433, 'WAHYU PRASETYO PUTRO', 'L', 'MO003', '-', '0000-00-00', '', 'Mayangan RT .24 RW. 08 No. 54 Wiradesa, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7434, 'YUDIANTO', 'L', 'MO003', '-', '0000-00-00', '', 'Jl. Paugeran Antasari RT. 02 RW. 01 Gamer, Pekalongan\r\n', '', 'TKR', '', '', '', ''),
(7441, 'DANI SAIFUNN NIDA', 'L', 'BO001', '-', '0000-00-00', '', 'Bendan RT. 02 RW. 08 No. 03 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7453, 'MUHAMAD KURNIAWAN', 'L', 'BO001', '-', '0000-00-00', '', 'Jeruk Sari RT. 01 RW. 03 No. 66 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7463, 'SALAAMATUS SA''DIYAH', 'P', 'BO001', '-', '0000-00-00', '', 'Perum Limas Baru RT .05 RW. 05 No. 05 Krapyak, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7438, 'AL QORNI NUDIANSYAH', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Angkatan 66 RT. 08 RW. 03 No. 01 Kramatsari, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7450, 'M. REZA FIRMANSYAH', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Terate Gg. 5 RT. 03 RW. 03 No. 20 Poncol, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7452, 'MUHAMAD KHAERUDIN', 'L', 'BO001', '-', '0000-00-00', '', 'Tratebang RT. 06 RW. 02 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7454, 'MUHAMAD MILZAM', 'L', 'BO001', '-', '0000-00-00', '', 'Krapyak Lor Pagirikan RT. 02 RW. 01 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7455, 'MUHAMMAD HERMANTO', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Jokotingkir RT. 02 RW. 05 No. 29 Degayu, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7462, 'RIYANTO', 'L', 'BO001', '-', '0000-00-00', '', 'Teratai RT. 05 RW. 02 Tratebang, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7464, 'SLAMET ROMADHON', 'L', 'BO001', '-', '0000-00-00', '', 'Poncol Gg. Anggrek RT. 01 RW. 12 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7437, 'AINU ROHMAN', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Dr .Wahidin RT. 03 RW. 04 No. 03 Noyontaan, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7449, 'M. MALIK FUAD', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Sutan Syahrir RT. 05 RW. 08 Pasirsari, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7458, 'NAZARUDIN', 'L', 'BO001', '-', '0000-00-00', '', 'Wonokerto Kulon, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7435, 'ABDUL BASID', 'L', 'BO001', '-', '0000-00-00', '', 'Desa Sijambe RT. 07 RW. 02 No. 024 Wiradesa, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7460, 'QEIS IMRAN', 'L', 'BO001', '-', '0000-00-00', '', 'Salamanis RT. 02 RW. 10 No. 154 Kandang Panjang, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7185, 'ZIKO RANDI SINDI', 'L', 'BO001', '-', '0000-00-00', '', 'Panjang Wetan RT. 5 RW. 3 No. 24 A Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7451, 'MOCH. LUTFI ROUSAN ROZI RAMBE', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Veteran Dukuh Barat RT. 03 RW. 01 No.6A Dukuh, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7466, 'ZAENAL MUTAQIN', 'L', 'BO001', '-', '0000-00-00', '', 'Pesanggrahan Lor RT. 03 RW. 01 No. 84 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7444, 'HERI MULYANTO', 'L', 'BO001', '-', '0000-00-00', '', 'Dadirejo Suruh RT. 02 RW. 08 Dadirejo Timur, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7456, 'MUKHAMAD RIDLO', 'L', 'BO001', '-', '0000-00-00', '', 'Yosorejo RT. 04 RW. 03 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7445, 'HISYAM ABDURRAHMAN RISA', 'L', 'BO001', '-', '0000-00-00', '', 'Jl. Tunas RT. 01 RW. 10 Tirto, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7447, 'KHOERUL AZAM', 'L', 'BO001', '-', '0000-00-00', '', 'Krapyak Kidul Gg. 5A RT. 01 RW. 03 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7457, 'MUSLIMIN', 'L', 'BO001', '-', '0000-00-00', '', 'Ketandan RT. 02 RW. 01 Wiradesa, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7465, 'TEGUH PUJI PRIYONO', 'L', 'BO001', '-', '0000-00-00', '', '-', '', 'PBO', '', '', '', ''),
(7440, 'ASHIH KUMAR', 'L', 'BO001', '-', '0000-00-00', '', 'Kimangun Sarkoro RT. 02 RW. 12 No. 34 Dekoro, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7448, 'KHOIRUL MU''MININ', 'L', 'BO001', '-', '0000-00-00', '', 'Degayu RT. 02 RW. 05 No. 28 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7461, 'RICKY SUWANDY YUSUF', 'L', 'BO001', '-', '0000-00-00', '', 'Kramatsari RT. 05 RW. 04 No. 18A Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7542, 'ABDUL KHAKIM', 'L', 'RP002', '-', '0000-00-00', '', 'Klego Gg. 9 Timur RT. 04 RW. 08 Klego Timur, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7507, 'ABUBAKAR FAHRI', 'L', 'RP002', '-', '0000-00-00', '', 'Keputran Gg. I No. 9 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7543, 'ADI SUBUHADIR', 'L', 'RP002', '-', '0000-00-00', '', 'Kebulen Gg. 4 No. 25 RT. 01 RW. 06 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7544, 'AFIF HARDIYANTO ACHMAD', 'L', 'RP002', '-', '0000-00-00', '', 'Boyongsari Cangkring RT. 03 RW. 08 No.44 Panjang Baru, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7545, 'AGUS BUDI IRWANSYAH', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. KH. Ahmad Dahlan RT. 03 RW. 03 No. 06 Tirto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7546, 'AINURIFKY FADLI AULIA', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Kencono Wungu 12 RT. 05 RW. 10 No. 12 Kandang Panjang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7547, 'ANDRI ANAS', 'L', 'RP002', '-', '0000-00-00', '', 'Landungsari Gg. 1C RT. 02 RW. 01 No. 29 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7550, 'ARUM MURTADHO', 'L', 'RP002', '-', '0000-00-00', '', 'Dekoro Setono RT. 04 RW. 08 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7551, 'ASILAH NABILAH', 'P', 'RP002', '-', '0000-00-00', '', 'Clumprit RT. 02 RW. 08 Degayu, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7552, 'BAGUS MANIK SADEWA', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Dr. Sutomo RT. 03 RW. 03 No. 01 Karangmalang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7553, 'BIMA PRASTYA SAPUTRA', 'L', 'RP002', '-', '0000-00-00', '', 'Kihajar Dewantoro RT. 03 RW. 01 No. 64 Landungsari, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7554, 'BUDI PURNOMO', 'L', 'RP002', '-', '0000-00-00', '', 'Rowoyoso RT. 19 RW. 22 Buntek Wonokerto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7555, 'DANI ANDRI SUPRAPTO', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Truntum RT. 06 RW. 01 No. 05 Klego, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7556, 'DWIKI NURDIANSYAH', 'L', 'RP002', '-', '0000-00-00', '', 'Panjang Wetan RT. 04 RW. 05 No. 21 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7557, 'ELSA EGAWATI', 'P', 'RP002', '-', '0000-00-00', '', 'Dukuh Kranding RT. 01 RW. 05 Jeruksari, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7558, 'FRANS DIAZ PRATAMA', 'L', 'RP002', '-', '0000-00-00', '', 'Perum Podosugih RT. 01 RW. 08 No. 7 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7559, 'HANIF ADHIALASA', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Raya Pekajangan 132 RT. 01 RW. 04 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7560, 'HASAN HUSAINI', 'L', 'RP002', '-', '0000-00-00', '', 'Limas Raya RT. 03 RW. 03 No. 10AC Krapyak, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7561, 'IRMA INDRIYANI', 'P', 'RP002', '-', '0000-00-00', '', 'Samborejo RT. 05 RW. 02 No. 45 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7562, 'LUBENA LISTANTINA', 'P', 'RP002', '-', '0000-00-00', '', 'Jl. Urip Sumoharjo RT. 06 RW. 08 No. 110 Medono Sengon, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7563, 'MA''RIFAH', 'P', 'RP002', '-', '0000-00-00', '', 'Pacar RT. 03 RW. 02 No. 40 Tirto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7564, 'MOCH. IMAM FARISI', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Otto Iskandar Dinata RT. 01 RW. 04 Soko, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7565, 'MOHAMMAD AKHWAN YULIANTO', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Rajawali Utara RT. 04 RW. 05 No. 95 Panjang Wetan, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7566, 'MOHAMMAD ERRYCO YUSSUFY', 'L', 'RP002', '-', '0000-00-00', '', 'Panjang Indah RT. 02 RW. 11 No. 01 Panjang Baru, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7567, 'MUHAMMAD AZIZ', 'L', 'RP002', '-', '0000-00-00', '', 'JL. Pelita 3 RT. 02 RW. 05 No.42 Jenggot Wetan, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7568, 'MUHAMMAD FAQIH IQBAL', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Labuhan RT. 05 RW. 01 No. 129 Degayu, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7569, 'MUHAMMAD YUSUF BAHTIAR', 'L', 'RP002', '-', '0000-00-00', '', 'Gumawang RT. 10 RW. 04 No. 341 Wiradesa, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7570, 'MUKHAMAD ABDUL WAKHID', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Otto Iskandar Dinata RT. 03 RW. 04 No. 301 Soko, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7571, 'NA''IMATUN SYAKIROH', 'P', 'RP002', '-', '0000-00-00', '', 'Simbang Wetan RT. 18 RW. 06 Buaran, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7572, 'NILLA SANDRA FITRIYANI', 'P', 'RP002', '-', '0000-00-00', '', 'Jl. Kusuma Bangsa RT. 05 RW. 05 No. 36 Kandang Panjang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7573, 'NURJANAH', 'P', 'RP002', '-', '0000-00-00', '', 'Jl. Gajahmada Barat RT. 01 RW. 02 No. 28 Tirto, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7574, 'RUSLAN ABDUL GHANI', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Raya Baros RT. 01 RW. 02 No. 0214 Baros, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7575, 'RYAN PRISHIANSYAH', 'L', 'RP002', '-', '0000-00-00', '', 'Pangkah RT. 04 RW. 02 No. 09 Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7576, 'SUSILO HASBI ASHIDIQI', 'L', 'RP002', '-', '0000-00-00', '', 'Desa Jeruksari RT. 03 RW. 05 Pekalongan', '', 'RPL', '', '', '', ''),
(7534, 'TRI PRASOJO', 'L', 'RP002', '-', '0000-00-00', '', 'Jl. Bondansari RT. 01 RW. 02 No. 21 Karangmalang, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7536, 'VITO APRILLIYANTINO', 'L', 'RP002', '-', '0000-00-00', '', 'Tengeng Wetan RT. 03 RW. 05 Siwalan, Pekalongan\r\n', '', 'RPL', '', '', '', ''),
(7467, 'ABDUL SHOLEH', 'L', 'BO002', '-', '0000-00-00', '', 'Cokroh Gandu RT. 01 RW. 01 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7468, 'ACHMAD DAROJI', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Pantai Sari RT. 02 RW. 10 No. 17 Panjang Baru, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7469, 'ACHMAD FAIZIN', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. WR. Supratman RT. 06 RW. 04 No. 03 Panjang Wetan, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7470, 'ACHMAD MUQORROBIN', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Selat Karimata RT. 02 RW. 02 Bandengan, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7471, 'ADI SUJIWO', 'L', 'BO002', '-', '0000-00-00', '', 'Keputran Ledok RT. 05 RW. 03 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7472, 'AGUS KURNIAWAN', 'L', 'BO002', '-', '0000-00-00', '', 'Krapyak Lor Gg. 5 RT. 03 RW. 04 No. 87 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7473, 'AGUS MAHFUD', 'L', 'BO002', '-', '0000-00-00', '', 'Pasir Sari RT. 01 RW. 05 No. 166 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7474, 'AHMAD BAHRUN', 'L', 'BO002', '-', '0000-00-00', '', 'Sijambe RT. 02 RW. 08 No. 25 Wiradesa, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7475, 'AHMAD ISMAIL', 'L', 'BO002', '-', '0000-00-00', '', 'Karang Jompo Tirto, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7477, 'ARI AGUS SETIAWAN', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Pelita 2 Bumirejo, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7478, 'BUDHI PRAYOGI', 'L', 'BO002', '-', '0000-00-00', '', 'Kandang Panjang RT. 01 RW. 05 No. 45 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7479, 'DEDY HARYADI', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Pattimura RT. 10 RW. 02 No. 7 Sijambe, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7481, 'DWI ARDIYANTO FEDAYANA', 'L', 'BO002', '-', '0000-00-00', '', 'Dusun Mingkrik Moga RT. 01 RW. 01 Mandiraja, Pemalang\r\n', '', 'PBO', '', '', '', ''),
(7482, 'FAHRI ABIDIN', 'L', 'BO002', '-', '0000-00-00', '', 'Untung Suropati RT. 01 RW. 08 No. 13 Tegalrejo, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7483, 'FATKHU ROHMAN', 'L', 'BO002', '-', '0000-00-00', '', 'Simbang Kulon RT. 02 RW. 01 No. 60 Buaran, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7484, 'GALANG PRADIKA YUDHA', 'L', 'BO002', '-', '0000-00-00', '', 'Perum RSS B25 RT. 01 RW. 09 Kandang Panjang, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7486, 'IKBAL SOFYAN', 'L', 'BO002', '-', '0000-00-00', '', 'Kemplong RT. 09 RW. 04 Wiradesa, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7487, 'IRVAN FEBRIANTO', 'L', 'BO002', '-', '0000-00-00', '', 'Wonokerto Wetan RT. 02 RW. 04 No. 500 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7488, 'KHOIRURRIZKI', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Jlamprang RT. 01 RW. 02 No. 14 Klego, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7489, 'M. DJATI ANGGONO', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Sidomulyo Gg. 5 RT. 02 RW. 01 No. 01 Pasir Sari, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7490, 'M. FAKHRUL HUSAIN', 'L', 'BO002', '-', '0000-00-00', '', 'Pecakaran RT. 05 RW. 10 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7491, 'MAIDI', 'L', 'BO002', '-', '0000-00-00', '', 'Karang Jompo RT. 02 Rw. 05 No. 12 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7493, 'MUHAMAD HARISUDDIN', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Tondano RT. 12 RW. 11 No. 05 Poncol, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7494, 'MUHAMMAD DARUL ULUM', 'L', 'BO002', '-', '0000-00-00', '', 'Kramatsari Gg. 30 RT. 03 RW. 02 No. 71 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7495, 'MUHAMMAD HISBULLAH', 'L', 'BO002', '-', '0000-00-00', '', 'Bener RT. 15 RW. 03 Wiradesa, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7496, 'MUHAMMAD NUR IMAM', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Patriot RT. 03 RW. 02 No. 152 Bandengan, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7497, 'RAMADIANSYAH', 'L', 'BO002', '-', '0000-00-00', '', 'Warungasem RT. 02 RW. 01 Batang\r\n', '', 'PBO', '', '', '', ''),
(7498, 'RIYAN TRIADI', 'L', 'BO002', '-', '0000-00-00', '', 'Tirto RT. 03 RW. 01 Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7499, 'SATRIO RAMBU ANARKHI', 'L', 'BO002', '-', '0000-00-00', '', 'Ambowetan Ulujami, Pemalang\r\n', '', 'PBO', '', '', '', ''),
(7500, 'SIGIT ADI PURWANTO', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Sulawesi Kergo, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7501, 'SUDARMAN', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. Kusuma Bangsa No. 30 Panjang Baru, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7502, 'SULAEMAN MUNTAHA', 'L', 'BO002', '-', '0000-00-00', '', 'Pisma Griya Permai RT. 15 RW. 08 No. 16 Kemplong, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7503, 'TINO DWI NUARI', 'L', 'BO002', '-', '0000-00-00', '', 'Jl. KH. Saman Hudi RT. 03 RW. 05 No. 17 Pasirsari, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7504, 'YOGA AJI PRABOWO', 'L', 'BO002', '-', '0000-00-00', '', 'Yos Sudarso RT. 09 RW. 02 Wonokerto, Pekalongan\r\n', '', 'PBO', '', '', '', ''),
(7505, 'ZUHUD MUHAJIR', 'L', 'BO002', '-', '0000-00-00', '', 'Perum Prima Asri No. 35 RT. 04 RW. 09 Sambong, Batang\r\n', '', 'PBO', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama_dpn` varchar(50) NOT NULL,
  `nama_blkng` varchar(50) NOT NULL,
  `id_jenisklm` varchar(2) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `user`:
--   `id_jenisklm`
--       `jenisklm` -> `id_jenisklm`
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_dpn`, `nama_blkng`, `id_jenisklm`, `tgl_lahir`, `foto`, `tentang`, `username`, `password`, `email`, `level`) VALUES
('Root', 'Superuser', 'L', '2014-03-10', '', '', 'root', 'root123', 'cyberanime@yahoo.co.id', 'superuser'),
('Admin', 'SMK Moedikal', 'L', '1995-12-08', 'Hydrangeas.jpg', '', 'admin', 'admin123', 'adminsmkmuh@gmail.com', 'admin'),
('Al-Umam', 'Nipponizer', 'L', '1995-12-08', '', '', 'alumam', 'alumam123', 'ngeposta@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_absensi`
--
CREATE TABLE IF NOT EXISTS `view_absensi` (
`no_id` int(5)
,`id_dudi` varchar(5)
,`nama_dudi` varchar(50)
,`nis` int(4)
,`nama` varchar(50)
,`tgl` date
,`masuk` varchar(10)
,`keterangan` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dudi`
--
CREATE TABLE IF NOT EXISTS `view_dudi` (
`id_dudi` varchar(5)
,`nama_dudi` varchar(50)
,`alamat` text
,`nm_jurusan` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_kelas`
--
CREATE TABLE IF NOT EXISTS `view_kelas` (
`id_kelas` varchar(5)
,`nama_kelas` varchar(10)
,`jml_siswa` int(5)
,`nm_jurusan` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_monitoring`
--
CREATE TABLE IF NOT EXISTS `view_monitoring` (
`id_monitoring` int(5)
,`tgl` date
,`id_guru` varchar(10)
,`nama_dudi` varchar(50)
,`alamat` text
,`jns_keg` text
,`kritik_saran` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pembimbing`
--
CREATE TABLE IF NOT EXISTS `view_pembimbing` (
`id_pembimbing` int(5)
,`id_guru` varchar(10)
,`nip` char(15)
,`nama` varchar(50)
,`id_jenisklm` varchar(50)
,`no_telpon` varchar(12)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_penempatan`
--
CREATE TABLE IF NOT EXISTS `view_penempatan` (
`no_id` int(5)
,`nis` int(4)
,`nama` varchar(50)
,`id_jenisklm` varchar(2)
,`id_guru` varchar(10)
,`id_dudi` varchar(5)
,`nama_dudi` varchar(50)
,`nama_periode` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_post`
--
CREATE TABLE IF NOT EXISTS `view_post` (
`id_post` int(10)
,`judul_post` text
,`nama_kategori` varchar(50)
,`oleh` varchar(50)
,`waktu` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_siswa`
--
CREATE TABLE IF NOT EXISTS `view_siswa` (
`nis` int(4)
,`nama` varchar(50)
,`id_jenisklm` varchar(2)
,`nama_kelas` varchar(10)
,`nm_jurusan` varchar(50)
,`foto` varchar(100)
,`alamat` text
,`no_telpon` varchar(12)
,`email` varchar(50)
,`username` varchar(30)
,`password` varchar(30)
);
-- --------------------------------------------------------

--
-- Structure for view `view_absensi`
--
DROP TABLE IF EXISTS `view_absensi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_absensi` AS select `absensi`.`no_id` AS `no_id`,`du_di`.`id_dudi` AS `id_dudi`,`du_di`.`nama_dudi` AS `nama_dudi`,`siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`absensi`.`tgl` AS `tgl`,`absensi`.`masuk` AS `masuk`,`absensi`.`keterangan` AS `keterangan` from ((`absensi` join `du_di`) join `siswa`) where ((`absensi`.`id_dudi` = `du_di`.`id_dudi`) and (`absensi`.`nis` = `siswa`.`nis`));

-- --------------------------------------------------------

--
-- Structure for view `view_dudi`
--
DROP TABLE IF EXISTS `view_dudi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dudi` AS select `du_di`.`id_dudi` AS `id_dudi`,`du_di`.`nama_dudi` AS `nama_dudi`,`du_di`.`alamat` AS `alamat`,`jurusan`.`nm_jurusan` AS `nm_jurusan` from (`du_di` join `jurusan`) where (`du_di`.`id_jurusan` = `jurusan`.`id_jurusan`);

-- --------------------------------------------------------

--
-- Structure for view `view_kelas`
--
DROP TABLE IF EXISTS `view_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kelas` AS select `kelas`.`id_kelas` AS `id_kelas`,`kelas`.`nama_kelas` AS `nama_kelas`,`kelas`.`jml_siswa` AS `jml_siswa`,`jurusan`.`nm_jurusan` AS `nm_jurusan` from (`kelas` join `jurusan`) where (`kelas`.`id_jurusan` = `jurusan`.`id_jurusan`);

-- --------------------------------------------------------

--
-- Structure for view `view_monitoring`
--
DROP TABLE IF EXISTS `view_monitoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_monitoring` AS select `monitoring`.`id_monitoring` AS `id_monitoring`,`monitoring`.`tgl` AS `tgl`,`pembimbing`.`id_guru` AS `id_guru`,`du_di`.`nama_dudi` AS `nama_dudi`,`du_di`.`alamat` AS `alamat`,`monitoring`.`jns_keg` AS `jns_keg`,`monitoring`.`kritik_saran` AS `kritik_saran` from ((`monitoring` join `pembimbing`) join `du_di`) where ((`monitoring`.`id_pembimbing` = `pembimbing`.`id_pembimbing`) and (`monitoring`.`id_dudi` = `du_di`.`id_dudi`));

-- --------------------------------------------------------

--
-- Structure for view `view_pembimbing`
--
DROP TABLE IF EXISTS `view_pembimbing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembimbing` AS select `pembimbing`.`id_pembimbing` AS `id_pembimbing`,`pembimbing`.`id_guru` AS `id_guru`,`guru`.`nip` AS `nip`,`guru`.`nama` AS `nama`,`guru`.`id_jenisklm` AS `id_jenisklm`,`guru`.`no_telpon` AS `no_telpon` from (`pembimbing` join `guru`) where (`pembimbing`.`id_guru` = `guru`.`id_guru`);

-- --------------------------------------------------------

--
-- Structure for view `view_penempatan`
--
DROP TABLE IF EXISTS `view_penempatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_penempatan` AS select `penempatan`.`no_id` AS `no_id`,`siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`id_jenisklm` AS `id_jenisklm`,`pembimbing`.`id_guru` AS `id_guru`,`du_di`.`id_dudi` AS `id_dudi`,`du_di`.`nama_dudi` AS `nama_dudi`,`periode`.`nama_periode` AS `nama_periode` from ((((`penempatan` join `siswa`) join `pembimbing`) join `du_di`) join `periode`) where ((`penempatan`.`nis` = `siswa`.`nis`) and (`penempatan`.`id_pembimbing` = `pembimbing`.`id_pembimbing`) and (`penempatan`.`id_dudi` = `du_di`.`id_dudi`) and (`penempatan`.`id_periode` = `periode`.`id_periode`));

-- --------------------------------------------------------

--
-- Structure for view `view_post`
--
DROP TABLE IF EXISTS `view_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_post` AS select `post_data`.`id_post` AS `id_post`,`post_data`.`judul_post` AS `judul_post`,`post_kategori`.`nama_kategori` AS `nama_kategori`,`post_data`.`oleh` AS `oleh`,`post_data`.`waktu` AS `waktu` from (`post_data` join `post_kategori`) where (`post_data`.`id_kategori` = `post_kategori`.`id_kategori`);

-- --------------------------------------------------------

--
-- Structure for view `view_siswa`
--
DROP TABLE IF EXISTS `view_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_siswa` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`id_jenisklm` AS `id_jenisklm`,`kelas`.`nama_kelas` AS `nama_kelas`,`jurusan`.`nm_jurusan` AS `nm_jurusan`,`siswa`.`foto` AS `foto`,`siswa`.`alamat` AS `alamat`,`siswa`.`no_telpon` AS `no_telpon`,`siswa`.`email` AS `email`,`siswa`.`username` AS `username`,`siswa`.`password` AS `password` from ((`siswa` join `kelas`) join `jurusan`) where ((`siswa`.`id_kelas` = `kelas`.`id_kelas`) and (`siswa`.`id_jurusan` = `jurusan`.`id_jurusan`));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
