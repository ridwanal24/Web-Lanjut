-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 05:31 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pengumuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `descp` varchar(10000) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `posting` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `title`, `descp`, `tanggal`, `posting`, `kategori`) VALUES
(9, 'KEGIATAN PRA MASA PENGENALAN LINGKUNGAN SEKOLAH TAHUN 2019', 'Dalam rangka mengikuti kegiatan Pra Masa Pengenalan Lingkungan Sekolah / Pra-MPLS, dihimbau kepada seluruh Peserta Didik yang diterima di SMA Negeri 2 Balige Tahun Pembelajaran 2019/2020 supaya hadir pada:  Hari/Tanggal : Sabtu, 06 Juli 2019 Pukul : 07.30 WIB Tempat : Lapangan Upacara SMAN 2 Balige Pakaian :  Baju kaos warna putih lengan panjang atau pendek berkerah Celana training sport Sepatu olahraga Potongan rambut sesuai dengan petunjuk di Papan Pengumuman Sekolah Membawa Angket yang sudah diisi, format hasil wawancara, air minum secukupnya, serta peralatan dengan ketentuan terlampir.     Demikian kami sampaikan pengumuman ini. Atas perhatian dan kehadirannya kami sampaikan terimakasih.', '2019-12-15 18:27:43', 'Akademik', 'Informasi'),
(10, 'PERUBAHAN JADWAL DAN SESI UJIAN PPDB 2019 SMAN 2 BALIGE JALUR TESTING', 'Informasi kepada semua Calon Peserta Didik yang yang mendaftar melalui Jalur Testing PPDB SMAN 2 Balige tahun 2019. Saat ini pembagian jadwal ujian dan sesi yang tadinya dilakukan oleh Kantor Cabang Dinas Pendidikan Balige diambil alih oleh Dinas Pendidikan Provinsi Sumatera Utara.  Calon Peserta Didik dapat melihat perubahan jadwal dan sesi ujian melalui web ppdb.disdik.sumutprov.go.id dengan login menggunakan akun masing-masing.  Mohon maaf atas ketidaknyamanan ini.  Demikian disampaikan. Terimakasih.', '2019-12-15 21:07:51', 'Humas', 'Informasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
