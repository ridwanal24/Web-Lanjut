-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 03:16 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `descp`, `tanggal`, `kategori`, `image`) VALUES
(1, 'aa', '<p><strong>Peserta Magang:</strong><br />\r\n1. Wajib Membawa Laptop.<br />\r\n2. Membawa Surat Rekomendasi Dari Sekolah<br />\r\n3. Tidak Mendapat Gajiâ€Š&mdash;â€ŠUang Transortasiâ€Š&mdash;â€ŠUang Makan.<br />\r\n4. Tidak Mendapat Penginapan, bagi yang tinggal di luar kota.<br />\r\n5. Durasi Magang selama 3 Bulan, Mulai Senin hingga Jumat dan libur di Hari Besar / Tanggal Merah<br />\r\n6. Mulai Pukul 08:00 sampai Pukul 16:00</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Materi Magang/Prakerin<br />\r\n&ndash; Pondasi Internet Marketing<br />\r\n&ndash; Riset Online<br />\r\n&ndash; Video Marketing<br />\r\n&ndash; Social Media Marketing<br />\r\n&ndash; Fb Marketing<br />\r\n&ndash; Blog Marketing</p>\r\n\r\n<p>Siswa Program Magang harus mentaati Tata Tertib:<br />\r\n1. Pakaian<br />\r\nBagi Siswa SMK diwajibkan memakai baju seragam sekolah atau baju seragam praktek (menurut sekolah masing-masing) dan harus memasukkan bajunya ke dalam bagi putra.<br />\r\n2. Perilaku<br />\r\nPerilaku selama di lingkungan magang, mahasiswa magang harus jujur, bertanggung jawab, berlaku sopan, disiplin, dan mematuhi semua tata tertib program magang.<br />\r\n3. Kehadiran<br />\r\n3.1 Siswa magang harus hadir tepat waktu sebagaimana yang dijadwalkan<br />\r\nmulai Pukul 08:00 sampai Pukul 16:00<br />\r\n3.2 Siswa Sakit Wajib membawa surat Dokter<br />\r\nApabila Siswa Alpa (Tanpa Keterangan), Mengganti Hari atau Mengerjakan Tugas tambahan</p>\r\n\r\n<p>Bagi Siswa kerja praktek/magang yang melanggar tata tertib dan ketentuan yang berlaku tersebut di atas akan dikenakan sanksi sebagai berikut&nbsp;:<br />\r\n&bull; Peringatan lisan atau tidak diperbolehkan masuk praktek dan magang.<br />\r\n&bull; Pemutusan kerja praktek/magang dengan surat peringatan ke Sekolah yang bersangkutan dan tanpa diberikan sertifikat.</p>\r\n\r\n<p>Hubungi&nbsp;:</p>\r\n\r\n<p>Ibu Nita Hayuta</p>\r\n\r\n<p>WA : 082-220-228-118</p>\r\n', '2020-01-01', 'Kunjungan Industri', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idArtikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `text` varchar(2000) DEFAULT NULL,
  `pathImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idArtikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idArtikel`, `judul`, `text`, `pathImage`) VALUES
(1, 'IQ Tinggi Tak Selalu Berarti Cerdas Luar Biasa. Ini 6 Fakta Tentang Tes IQ yang Harus Kamu Tahu', '1. Fungsi asli tes IQ bukanlah mengukur kecerdasan. Melainkan untuk melihat kesesuaian antara umur dengan kepribadian\r\n2. Sekarang tes IQ digunakan untuk mengukur kecerdasan. Padahal dulu IQ digunakan untuk mengukur keterbelakangan mental\r\n3. Ada yang jago matematika, ada yang jago menggambar. Otak manusia tak bisa ditentukan kecerdasannya dalam kerangka hitam-putih saja\r\n4. Katanya kalau IQ-nya tinggi, soal apapun bisa dikerjakan dengan cepat. Padahal Einstein yang secerdas itu pun terkenal lamban menjawab pertanyaan\r\n5. Hasil IQ tak selalu tepat dan menggambarkan “apa adanya” dirimu. Bahkan score IQ bisa berubah-ubah setiap waktu\r\n7. IQ bisa menentukan kesuksesan seseorang di masa depan itu mitos semata. Butuh lebih dari sekadar IQ tinggi untuk bisa berjaya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE IF NOT EXISTS `ekstra` (
  `idEkstra` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idEkstra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ekstra`
--

INSERT INTO `ekstra` (`idEkstra`, `nama`, `deskripsi`) VALUES
(1, 'OSISa', 'organisasi ini dibentuk di dalam sekolah, beranggotakan siswa di sekolah, dibina oleh guru di sekolah, dan bekerja demi kebaikan sekolah.');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `idFasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFasilitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `fasilitas`
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

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `idGaleri` int(11) NOT NULL AUTO_INCREMENT,
  `pathVideo` varchar(100) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idGaleri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=660100006 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idGaleri`, `pathVideo`, `pathImg`) VALUES
(660100001, NULL, './assets/img/galeri/classroom.jpg'),
(660100002, NULL, './assets/img/galeri/high_school.jpg'),
(660100003, NULL, './assets/img/galeri/computer_eng.jpg'),
(660100004, NULL, './assets/img/galeri/electrician.jpg'),
(660100005, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `kode_jabatan` int(11) DEFAULT NULL,
  `agama` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `idJabatan` (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `pass`, `kode_jabatan`, `agama`, `image`) VALUES
(100001, 'Muhammad Ruslan', 'Jalan Kuningan No. 2 Depok Sleman', 'L', '2019-12-25', 'Bantul', 1234, 4, 'Kristen Protestan', ''),
(100002, 'Justin Beiber', 'Karang Tengah, Tulungagung, Jawa', 'L', '1912-11-11', 'Semarang', NULL, 1, 'Islam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `kode_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `jabatan`) VALUES
(1, 'Kepala Sekolah'),
(2, 'Guru Bahasa'),
(3, 'Guru Olahraga'),
(4, 'Guru Seni'),
(5, 'Guru Musik'),
(6, 'Guru Agama');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `idJurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`idJurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`idJurusan`, `nama`) VALUES
(1, 'Teknik Komputer Jaringan'),
(2, 'Teknik Instalasi Pemanfaatan Tenaga Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_event` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `descp` varchar(10000) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `posting` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_event`, `title`, `descp`, `tanggal`, `posting`, `kategori`, `image`) VALUES
(2, 'aa', '<p><em><strong>bb</strong></em></p>\r\n', '2020-01-07 21:08:20', 'Akademik', 'Lomba', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `idKelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `idJurusan` int(11) DEFAULT NULL,
  PRIMARY KEY (`idKelas`),
  KEY `idJurusan` (`idJurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idKelas`, `nama`, `idJurusan`) VALUES
(1, '10', 1),
(2, '11', 1),
(3, '12', 1),
(4, '10', 2),
(5, '11', 2),
(6, '12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE IF NOT EXISTS `kritiksaran` (
  `idkritik` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bintang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`idkritik`, `nama`, `isi`, `date`, `status`, `bintang`) VALUES
(8, 'Andika Pratama Suryajana', 'Ketertiban yang sangat dijunjung tinggi disekolah ini membuat kegiatan belajar mengajar menjadi optimal.', '2019-12-22 12:23:58', 'Pengunjung', 'yes'),
(9, 'Zahratun Nafisah', 'Saya mau pinjam buku di perpustakaan menggunakan sistem online. Tapi terkendala masalah koneksi wifi yang tidak stabil di jam-jam istirahat. tolong di benahi pak/bu', '2019-12-22 12:25:38', 'Siswa', 'yes'),
(10, 'Meta Adilla', 'Walaupun hidup seribu tahun kalau tak sembahyang apa gunanya', '2019-12-22 12:26:27', 'Siswa', 'no'),
(11, 'Meta Adilla', 'Ketika ke kantin sekolah, kumerasa ada yang memperhatikan dari pojokan gelap di sebelah utara penjual lotek. Mohon berikan penjelasan yang pasti soalnya waktu ku cek tidak ada siapapun disana. Dan ini terjadi hampir setiap kali ke kantin sekolah.', '2019-12-22 12:28:31', 'Siswa', 'no'),
(12, 'Budi Setiawan Sang Trader Profesional', 'Saya menggunakan fasilitas wifi disekolah ini untuk mengerjakan tugas, nyari informasi, pinjam buku, main saham, upload foto, update status, update blog, dan lain-lain. Tapi terkendala dengan kelas saya yang tidak terjangkau wifi sama sekali.', '2019-12-22 12:31:34', 'Pengunjung', 'no'),
(0, 'Uzumaki Naruto', 'Kononononono', '2019-12-23 04:55:04', 'Pengunjung', 'no'),
(0, 'Tutu', 'aaa', '2019-12-23 14:54:57', 'Pengunjung', 'no'),
(0, 'Zahratun Nafisah', 'hbhgjkg', '2019-12-23 14:55:20', 'Siswa', 'no'),
(0, 'Zahratun Nafisah', 'hbhgjkg', '2019-12-23 14:55:20', 'Siswa', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE IF NOT EXISTS `matapelajaran` (
  `idMapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`idMapel`, `nama`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Bahasa Inggris'),
(4, 'Sejarah Indonesia'),
(5, 'Kimia'),
(6, 'Fisika');

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
(1, 'aa', '<p>aab</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n', '2020-01-07 16:52:43', 'Akademik', 'Informasi'),
(2, 'aa', '<p style="text-align: right;">bb</p>\r\n', '2020-01-07 17:04:38', 'Akademik', 'Informasi'),
(9, 'KEGIATAN PRA MASA PENGENALAN LINGKUNGAN SEKOLAH TAHUN 2019', 'Dalam rangka mengikuti kegiatan Pra Masa Pengenalan Lingkungan Sekolah / Pra-MPLS, dihimbau kepada seluruh Peserta Didik yang diterima di SMA Negeri 2 Balige Tahun Pembelajaran 2019/2020 supaya hadir pada:  Hari/Tanggal : Sabtu, 06 Juli 2019 Pukul : 07.30 WIB Tempat : Lapangan Upacara SMAN 2 Balige Pakaian :  Baju kaos warna putih lengan panjang atau pendek berkerah Celana training sport Sepatu olahraga Potongan rambut sesuai dengan petunjuk di Papan Pengumuman Sekolah Membawa Angket yang sudah diisi, format hasil wawancara, air minum secukupnya, serta peralatan dengan ketentuan terlampir.     Demikian kami sampaikan pengumuman ini. Atas perhatian dan kehadirannya kami sampaikan terimakasih.', '2019-12-15 18:27:43', 'Akademik', 'Informasi'),
(10, 'PERUBAHAN JADWAL DAN SESI UJIAN PPDB 2019 SMAN 2 BALIGE JALUR TESTING', 'Informasi kepada semua Calon Peserta Didik yang yang mendaftar melalui Jalur Testing PPDB SMAN 2 Balige tahun 2019. Saat ini pembagian jadwal ujian dan sesi yang tadinya dilakukan oleh Kantor Cabang Dinas Pendidikan Balige diambil alih oleh Dinas Pendidikan Provinsi Sumatera Utara.  Calon Peserta Didik dapat melihat perubahan jadwal dan sesi ujian melalui web ppdb.disdik.sumutprov.go.id dengan login menggunakan akun masing-masing.  Mohon maaf atas ketidaknyamanan ini.  Demikian disampaikan. Terimakasih.', '2019-12-15 21:07:51', 'Humas', 'Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `profilsekolah`
--

CREATE TABLE IF NOT EXISTS `profilsekolah` (
  `idProfil` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProfil`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilsekolah`
--

INSERT INTO `profilsekolah` (`idProfil`, `nip`) VALUES
(1, 100002);

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE IF NOT EXISTS `sambutan` (
  `idSambutan` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`idSambutan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `tglLahir` date NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `idKelas` int(11) DEFAULT NULL,
  `pass` int(11) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pathImg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `idKelas` (`idKelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=901 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `gender`, `tglLahir`, `tempatLahir`, `idKelas`, `pass`, `agama`, `pathImg`) VALUES
(615, 'Muhammad Arsyad', 'Banua Kepayang', 'L', '2003-04-25', 'Barabai', 1, 1234, 'Islam', NULL),
(616, 'Dinda Nurwulan Agustin', 'Banua Kepayang', 'P', '2003-08-24', 'HST', 1, 1234, 'Islam', NULL),
(617, 'Nursifa Salsabila', 'Banua Kepayang', 'P', '2003-06-23', 'HST', 1, 1234, 'Islam', NULL),
(618, 'Meta Adilla', 'Banua Kepayang', 'P', '2003-06-01', 'Banua Kepayang', 1, 1234, 'Islam', NULL),
(619, 'Norlatifah Azlina', 'Banua Kepayang', 'P', '2003-09-21', 'HST', 1, 1234, 'Islam', NULL),
(620, 'Dhea Azizah', 'Banua Kepayang', 'P', '2003-01-27', 'Barabai', 1, 1234, 'Islam', NULL),
(621, 'Dicky Septiawan', 'Banua Kepayang', 'L', '2003-09-17', 'Barabai', 1, 1234, 'Islam', NULL),
(622, 'Aisyah Asura', 'Banua Kepayang', 'P', '2003-01-29', 'HST', 1, 1234, 'Islam', NULL),
(623, 'Aulia Rahmadana', 'Banua Kepayang', 'P', '2003-02-11', 'HST', 1, 1234, 'Islam', NULL),
(624, 'Imelda Selvia Ningrum', 'Banua Kepayang', 'P', '2003-07-08', 'HST', 1, 1234, 'Islam', NULL),
(625, 'Muhammad Fauzan', 'Banua Kepayang', 'L', '2003-01-22', 'HST', 2, 1234, 'Islam', NULL),
(626, 'M. Resky Fadillah', 'Banua Kepayang', 'L', '2003-06-18', 'HST', 2, 1234, 'Islam', NULL),
(627, 'M. Ridha Paratama', 'Banua Kepayang', 'L', '2003-06-24', 'Amuntai', 2, 1234, 'Islam', NULL),
(628, 'M. Akbar Fadillah', 'Banua Kepayang', 'L', '2003-05-08', 'Banjarmasin', 2, 1234, 'Islam', NULL),
(629, 'Nor Muhammad Muhibbin', 'Banua Kepayang', 'L', '2003-08-08', 'HST', 2, 1234, 'Islam', NULL),
(630, 'Nadia Azmi Haliza', 'Banua Kepayang', 'P', '2003-12-21', 'Balikpapan', 2, 1234, 'Islam', NULL),
(631, 'Norlatifah', 'Banua Kepayang', 'P', '2003-12-17', 'HST', 2, 1234, 'Islam', NULL),
(632, 'Siti Fatimah', 'Banua Kepayang', 'P', '2003-10-26', 'HST', 2, 1234, 'Islam', NULL),
(633, 'Suaibatul Aslamiah', 'Banua Kepayang', 'P', '2003-07-18', 'HST', 2, 1234, 'Islam', NULL),
(634, 'Wina Amalia', 'Banua Kepayang', 'P', '2003-11-17', 'HST', 2, 1234, 'Islam', NULL),
(635, 'Muhammad Haiqi', 'Banua Kepayang', 'L', '2003-03-12', 'Banjarmasin', 2, 1234, 'Islam', NULL),
(636, 'Vivi Ariyanti', 'Banua Kepayang', 'P', '2002-11-04', 'HST', 3, 1234, 'Islam', NULL),
(637, 'Siti Zhofirah', 'Banua Kepayang', 'P', '2002-12-29', 'HST', 3, 1234, 'Islam', NULL),
(638, 'Arya Pranata', 'Banua Kepayang', 'L', '2002-09-11', 'Pangkalanbun', 3, 1234, 'Islam', NULL),
(639, 'Nor Maulina', 'Banua Kepayang', 'P', '2002-03-08', 'HST', 3, 1234, 'Islam', NULL),
(640, 'Laura Fahrianisa', 'Banua Kepayang', 'P', '2002-01-15', 'HST', 3, 1234, 'Islam', NULL),
(641, 'Nurul Aulia', 'Banua Kepayang', 'P', '2002-10-15', 'HST', 3, 1234, 'Islam', NULL),
(642, 'Muhammad Riswan Alfianor', 'Banua Kepayang', 'L', '2002-08-23', 'HST', 3, 1234, 'Islam', NULL),
(643, 'Siti Nurhaliza', 'Banua Kepayang', 'P', '2002-10-08', 'HST', 3, 1234, 'Islam', NULL),
(644, 'Aulia Nurhidayah', 'Banua Kepayang', 'P', '2002-12-05', 'Bahaur Hulu', 3, 1234, 'Islam', NULL),
(645, 'Nor Aidi', 'Banua Kepayang', 'L', '2003-03-10', 'Tabalong', 3, 1234, 'Islam', NULL),
(646, 'Jahratun Nisa', 'Banua Kepayang', 'P', '2002-02-25', 'Banjarmasin', 3, 1234, 'Islam', NULL),
(647, 'Muhammad Risky', 'Banua Kepayang', 'L', '2002-09-06', 'HST', 4, 1234, 'Islam', NULL),
(648, 'Nur Asyifa', 'Banua Kepayang', 'P', '2002-11-01', 'HST', 4, 1234, 'Islam', NULL),
(649, 'Sarifatul Asmaniah', 'Banua Kepayang', 'P', '2002-09-07', 'HST', 4, 1234, 'Islam', NULL),
(650, 'Muhammad Rifky', 'Banua Kepayang', 'L', '2002-05-06', 'HST', 4, 1234, 'Islam', NULL),
(651, 'M. Reno Ramadhani', 'Banua Kepayang', 'L', '2002-09-15', 'HST', 4, 1234, 'Islam', NULL),
(652, 'Aini Shahib', 'Banua Kepayang', 'L', '2002-07-10', 'HST', 4, 1234, 'Islam', NULL),
(653, 'Muhammad Naufal', 'Banua Kepayang', 'L', '2002-03-27', 'Bawan', 4, 1234, 'Islam', NULL),
(654, 'Akhmad Riyadi', 'Banua Kepayang', 'L', '2002-03-27', 'Amuntai', 4, 1234, 'Islam', NULL),
(655, 'Nazwa Nor Maghfirah', 'Banua Kepayang', 'P', '2002-04-21', 'HST', 4, 1234, 'Islam', NULL),
(656, 'Riska Aprilia Suswanti', 'Banua Kepayang', 'P', '2002-04-04', 'Banjarmasin', 4, 1234, 'Islam', NULL),
(657, 'Syaidatun Asiyah', 'Banua Kepayang', 'P', '2002-10-29', 'HST', 4, 1234, 'Islam', NULL),
(658, 'Muhammad Fateh Al-Mubarak', 'Banua Kepayang', 'L', '2001-07-07', 'HST', 5, 1234, 'Islam', NULL),
(659, 'Fathul Janah', 'Banua Kepayang', 'P', '2001-03-18', 'Banjarmasin', 5, 1234, 'Islam', NULL),
(660, 'Aulia Rahmah', 'Banua Kepayang', 'P', '2001-08-08', 'HST', 5, 1234, 'Islam', NULL),
(661, 'Mariyana', 'Banua Kepayang', 'P', '2001-09-07', 'HST', 5, 1234, 'Islam', NULL),
(662, 'M. Saufi', 'Banua Kepayang', 'L', '2001-04-30', 'HST', 5, 1234, 'Islam', NULL),
(663, 'Raudatu Sifa', 'Banua Kepayang', 'P', '2001-05-12', 'Banjarmasin', 5, 1234, 'Islam', NULL),
(664, 'M. Yusan Edo Ridani', 'Banua Kepayang', 'L', '2001-06-05', 'Gambut', 5, 1234, 'Islam', NULL),
(665, 'Rudi Hermansyah', 'Banua Kepayang', 'L', '2001-11-21', 'HST', 5, 1234, 'Islam', NULL),
(666, 'Nor Zulfa Adhia a', 'Banua Kepayang', 'P', '2001-10-31', 'HST', 5, 1234, 'Islam', NULL),
(667, 'Zahratun Nafisah', 'Banua Kepayang', 'P', '2001-10-29', 'HST', 5, 1234, 'Islam', NULL),
(668, 'Akhmad Fahriannor', 'Banua Kepayang', 'L', '2001-04-21', 'HST', 5, 1234, 'Islam', NULL),
(669, 'M. Nazrillah Arrazah', 'Banua Kepayang', 'L', '2001-06-25', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(670, 'Muhammad Sahdi', 'Banua Kepayang', 'L', '2001-07-06', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(671, 'Nor Nabila Putri', 'Banua Kepayang', 'P', '2001-07-07', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(672, 'M. Ridho Muttaqin', 'Banua Kepayang', 'L', '2001-05-08', 'HST', 6, 1234, 'Islam', NULL),
(673, 'Romaysha Natasya', 'Banua Kepayang', 'P', '2001-02-01', 'Martapura', 6, 1234, 'Islam', NULL),
(674, 'Nurmayani Apriliana', 'Banua Kepayang', 'P', '2001-04-08', 'HST', 6, 1234, 'Islam', NULL),
(675, 'Ahmad Hanafi', 'Banua Kepayang', 'L', '2001-03-12', 'HST', 6, 1234, 'Islam', NULL),
(676, 'Nisna Rahayu', 'Banua Kepayang', 'P', '2001-03-26', 'HST', 6, 1234, 'Islam', NULL),
(677, 'Maulida Hasanah', 'Banua Kepayang', 'P', '2001-02-19', 'Banua Kepayang', 6, 1234, 'Islam', NULL),
(678, 'M. Hamzah', 'Banua Kepayang', 'L', '2001-10-24', 'HST', 6, 1234, 'Islam', NULL),
(679, 'Nur Asyifa', 'Banua Kepayang', 'P', '2001-05-03', 'HST', 6, 1234, 'Islam', NULL),
(680, 'M. Gustiansyah Ramadani', 'Banua Kepayang', 'L', '2001-08-21', 'Tapus Dalam', 6, 1234, 'Islam', NULL),
(900, 'Uzumaki Naruto', 'Danau Itomori, Itomori, Prefektur Gifu', 'L', '2002-10-10', 'Itomori', 1, NULL, 'Islam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tugasmapel`
--

CREATE TABLE IF NOT EXISTS `tugasmapel` (
  `nip` int(11) DEFAULT NULL,
  `idMapel` int(11) DEFAULT NULL,
  KEY `nip` (`nip`),
  KEY `idMapel` (`idMapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasmapel`
--

INSERT INTO `tugasmapel` (`nip`, `idMapel`) VALUES
(100001, 1),
(100001, 2),
(100001, 3),
(100001, 1),
(100001, 2),
(100001, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`);

--
-- Constraints for table `profilsekolah`
--
ALTER TABLE `profilsekolah`
  ADD CONSTRAINT `profilsekolah_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idKelas`) REFERENCES `kelas` (`idKelas`);

--
-- Constraints for table `tugasmapel`
--
ALTER TABLE `tugasmapel`
  ADD CONSTRAINT `tugasmapel_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `tugasmapel_ibfk_2` FOREIGN KEY (`idMapel`) REFERENCES `matapelajaran` (`idMapel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
