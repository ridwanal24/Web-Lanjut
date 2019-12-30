-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 02:41 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `descp` varchar(10000) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `descp`, `tanggal`, `kategori`, `image`) VALUES
(17, 'PRAKTEK KERJA LAPANGAN GEL.1', '<p>Peserta Magang:<br />\r\n1. Wajib Membawa Laptop.<br />\r\n2. Membawa Surat Rekomendasi Dari Sekolah<br />\r\n3. Tidak Mendapat Gajiâ€Š&mdash;â€ŠUang Transortasiâ€Š&mdash;â€ŠUang Makan.<br />\r\n4. Tidak Mendapat Penginapan, bagi yang tinggal di luar kota.<br />\r\n5. Durasi Magang selama 3 Bulan, Mulai Senin hingga Jumat dan libur di Hari Besar / Tanggal Merah<br />\r\n6. Mulai Pukul 08:00 sampai Pukul 16:00</p>\r\n\r\n<p>Materi Magang/Prakerin<br />\r\n&ndash; Pondasi Internet Marketing<br />\r\n&ndash; Riset Online<br />\r\n&ndash; Video Marketing<br />\r\n&ndash; Social Media Marketing<br />\r\n&ndash; Fb Marketing<br />\r\n&ndash; Blog Marketing</p>\r\n\r\n<p>Siswa Program Magang harus mentaati Tata Tertib:<br />\r\n1. Pakaian<br />\r\nBagi Siswa SMK diwajibkan memakai baju seragam sekolah atau baju seragam praktek (menurut sekolah masing-masing) dan harus memasukkan bajunya ke dalam bagi putra.<br />\r\n2. Perilaku<br />\r\nPerilaku selama di lingkungan magang, mahasiswa magang harus jujur, bertanggung jawab, berlaku sopan, disiplin, dan mematuhi semua tata tertib program magang.<br />\r\n3. Kehadiran<br />\r\n3.1 Siswa magang harus hadir tepat waktu sebagaimana yang dijadwalkan<br />\r\nmulai Pukul 08:00 sampai Pukul 16:00<br />\r\n3.2 Siswa Sakit Wajib membawa surat Dokter<br />\r\nApabila Siswa Alpa (Tanpa Keterangan), Mengganti Hari atau Mengerjakan Tugas tambahan</p>\r\n\r\n<p>Bagi Siswa kerja praktek/magang yang melanggar tata tertib dan ketentuan yang berlaku tersebut di atas akan dikenakan sanksi sebagai berikut&nbsp;:<br />\r\n&bull; Peringatan lisan atau tidak diperbolehkan masuk praktek dan magang.<br />\r\n&bull; Pemutusan kerja praktek/magang dengan surat peringatan ke Sekolah yang bersangkutan dan tanpa diberikan sertifikat.</p>\r\n\r\n<p>Hubungi&nbsp;:</p>\r\n\r\n<p>Ibu Nita Hayuta</p>\r\n\r\n<p>WA : 082-220-228-118</p>\r\n', '2020-01-07', 'Praktek Kerja Lapang', 'pkl.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
