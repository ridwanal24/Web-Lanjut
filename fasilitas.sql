-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2019 pada 05.16
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sekolahmu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
`idFasilitas` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`idFasilitas`, `nama`, `jumlah`, `pathImg`, `deskripsi`) VALUES
(1, 'Masjid', 1, NULL, 'Masjid cukup untuk seluruh siswa dan guru maupun karyawan sekolah untuk menunaikan ibadah. Diadakan secara rutin sholat zuhur berjamaah dan sholat Jum''at.'),
(2, 'Aula', 1, NULL, 'Aula digunakan untuk agenda penting semisal musyawarah antara guru dengan orang tua wali, pembekalan UN, pentas seni, dan lain sebagainya.'),
(3, 'Kantin', 1, NULL, 'Kantin sangat dijaga kebersihannya. Makanan yang tersedia cukup bervariasi sehingga membuat siswa bisa tenang sejenak setelah belajar seharian.'),
(4, 'Perpustakaan', 1, NULL, 'Sudah menerapkan perpustakaan online, sehingga proses peminjaman buku serta pengembalian dan pengecekan buku lebih cepat.'),
(5, 'Bengkel Listrik', 1, NULL, 'Memiliki peralatan yang memadai untuk melakukan pengukuran arus listrik, praktik instalasi, pemanfaatan listrik untuk kebutuhan idustri, dan lain-lain.'),
(6, 'Labolatorium Komputer', 3, NULL, 'Lab ber AC dan memiliki komputer yang cukup agar para siswa bersemangat dalam belajar merakit pc, praktek jaringan, dan lain lain.'),
(7, 'Ruang Kelas', 6, NULL, 'Ruang kelas dilengkapi pendingin ruangan (AC) dan didesain agar anak merasa nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa. Selain meja-kursi, disediakan karpet untuk kegiatan circle time dan pembelajaran di dalam kelas.'),
(8, 'Ruang Kesehatan', 1, NULL, 'Demi mengantisipasi adanya siswa yang kurang sehat saat di sekolah, ruang kesehatan dilengkapi dengan obat-obatan, P3K, ranjang dan ruangan ber-AC.'),
(9, 'Lapangan Olahraga', 1, NULL, 'Lapangan olahraga telah didesain untuk beragam pelajaran olahraga seperti bola basket, footsal, volley dan atletik. Lapangan yang luas dan sarana olahraga yang beragam memberi peluang lebih besar untuk dapat mengembangkan motorik kasar dan bakat anak.'),
(10, 'Taman', 1, NULL, 'Demi memastikan para siswa bermain dengan aman dan dapat mengeksplore kemampuan motorik secara baik. Sekolah menyediakan taman bermain khusus untuk para siswa.'),
(11, 'Keamanan', 1, NULL, 'Sekolah ini dilengkapi oleh personil keamanan yang professional (Satpam). Dengan kelengkapan keamanan tersebut, mampu menciptakan keamanan dan kenyamanan kegiatan pembelajaran maupun kenyamanan lingkungan.'),
(12, 'Koperasi Sekolah', 1, NULL, 'Koperasi sekolah tempat siswa manajemen pemasaran praktik, Koperasi sekolah menjual barang-barang kebutuhan siswa dan guru Dunia bisnis adalah dunia yang menjanjikan masa depan yang lebih baik.'),
(13, 'Tempat Parkir Sekolah', 1, NULL, 'Penataan tempat parkir sekolah merupakan pekerjaan rumah bagi waka sarpras yang harus di evaluasi setiap tahun. Setiap hari anak-anak membawa sepeda motor bertambah kapasitasnya.'),
(14, 'Toilet', 1, NULL, 'Toilet kegunaan utamanya sebagai tempat pembuangan kotoran, yaitu urin dan feses.'),
(15, 'Ruang OSIS', 1, NULL, 'Tempat yang digunakan untuk pertemuan / berkumpulnya anggota OSIS.'),
(16, 'Ruang Guru', 1, NULL, 'Tempat yang digunakan untuk ruang para guru beristirahat atau mengerjakan tugas mereka. Ruang guru juga bisa di pakai untuk menyimpan dokumen - dokumen penting tentang anak didik mereka.'),
(17, 'Ruang BP/BK', 1, NULL, 'Tempat yang digunakan untuk proses pemberian bantuan yang dilakukan melalui wawancara konseling (face to face) oleh seorang ahli (disebut konselor) kepada individu yang sedang mengalami sesuatu masalah.'),
(18, 'Ruang Tata Usaha', 1, NULL, 'Tempat yang digunakan untuk bagian dari unit pelaksana teknis penyelenggaraan sistem administrasi dan informasi pendidikan di sekolah.'),
(19, 'Ruang Kepala Sekolah/KPKNA', 1, NULL, 'Tempat yang digunakan sebagai tempat kepala sekolah beristirahat, mengerjakan suatu tugas tentang sekolah, atau menyimpan arsip-arsip penting sekolah.'),
(20, 'Ruang Gudang', 1, NULL, 'Ruangan yang digunakan untuk menyimpan berbagai macam barang.'),
(21, 'Lapangan Upacara', 1, NULL, 'Tempat dimana semua kegiatan sekolah dilakukan disana, seperti upacara rutin hari Senin, latihan upacara, kegiatan pramuka rutin hari Jumat, kegiatan ekstra kurikuler,dll.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
 ADD PRIMARY KEY (`idFasilitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
MODIFY `idFasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
