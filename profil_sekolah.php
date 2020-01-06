<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
$query ="select nama_guru from guru where kode_jabatan = 1";
$show = mysql_query($query);
while ($result=mysql_fetch_array($show)) {
    $kepala_sekolah = $result['nama_guru'];
}
?>
<div class="container-fluid">
	<!-- Switch -->
	<ul class="nav nav-tabs fixed-bottom bg-light" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#visi-misi" role="tab" aria-controls="profile" aria-selected="false">Visi & Misi</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#tujuan" role="tab" aria-controls="contact" aria-selected="false">Tujuan Pendidikan</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#siswa" role="tab" aria-controls="contact" aria-selected="false">Jumlah Siswa</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#fasilitas" role="tab" aria-controls="contact" aria-selected="false">Fasilitas</a>
		</li>
	</ul>
	<!-- End of Switch -->

	<!-- Content Group -->
	<div class="tab-content" id="myTabContent">
		<!-- Content 1 -->
		<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white p-5 my-5 shadow rounded">
					<p class="h2 text-center">PROFIL SEKOLAH</p>
					<img class="mx-auto d-block" src="assets/img/tutwuri.png">
					<p class="text-center my-3">Alamat : Kp.Cileutik Rt 08 Rw 02 Desa Bojongtipar
					Kecamatan Jampangtengah Kabupaten Sukabumi 43171</p>
					<h3 class="text-center">DINAS PENDIDIKAN KABUPATEN</h3>
					<h3 class="text-center">PEMERINTAH KABUPATEN SUKABUMI<br>
						UPTD PENDIDIKAN<br>
						SEKOLAH MENENGAH KEJURUAN CILEUTIK<br>
					KECAMATAN JAMPANG TENGAH</h3>
					<div class="row my-5">
						<div class="col-md-4">
							Nama Sekolah <br>
							Kepala Sekolah <br>
							Alamat<br>
							Nomor Telepon/HP<br>
							Mulai Operasional<br>
							Luas Tanah<br>
							Luas Bangunan<br>
							Status Tanah<br>
							Status Bangunan<br>
							Akreditasi<br>
						</div>
						<div class="col-md-8">
							: SMK NEGERI 1 CILEUNTIK<br>
							: <?php echo $kepala_sekolah; ?><br>
							: Kp. Cileutik, Bojongtipar, Jampang Tengah, Sukabumi, Jawa Barat 43171<br>
							: 08176483797<br>
							: 1978<br>
							: 2082 m<sup>2</sup><br>
							: 504 m<sup>2</sup><br>
							: Milik Sendiri<br>
							: Milik Sendiri<br>
							: A
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<!-- End of Content 1 -->

		<!-- Content 2 -->
		<div class="tab-pane fade" id="visi-misi" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white p-5 my-5 shadow rounded">
					<h2 class="text-center">VISI & MISI</h2>
					<h3 class="mt-5">VISI</h3>
					<p>Menciptakan kualitas insan berprestasi, berbudaya dan bertaqwa kepada tuhan yang maha esa sebagai pedoman hidup</p>
					<h3 class="mt-5">MISI</h3>
					<p>
						<ul>
							<li>Melaksanakan pembelajaran aktif, kreatif, efektif dan menyenangkan untuk mengembangkan potensi keilmuan peserta didik.</li>
							<li>Menumbuhkan semangat berprestasi kepada seluruh warga sekolah.</li>
							<li>Membimbing dan mengembangkan bakat dan minat peserta didik.</li>
							<li>Terlaksananya program ekstrakurikuler untuk menghasilkan siswa yang berprestasi dan bermanfaat bagi kehidupan sehari-hari.</li>
							<li>Mengembangkan hasil karya yang dimiliki peserta didik.</li>
							<li>Meningkatkan kesadaran untuk memelihara lingkungan.</li>
						</ul>
					</p>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<!-- End of Content 2 -->		

		<!-- Content 3 -->
		<div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white p-5 my-5 shadow rounded">
					<h2 class="text-center">TUJUAN</h2>
					<ul class="mt-5">
						<li>Meningkatkan prestasi akademik dan mutu lulusan untuk melanjutkan pendidikan pada jenjang yang lebih tinggi.</li>
						<li>Membentuk peserta didik memiliki keimanan dan ketagwaan serta budi pekerti luhur sesuai nilai-nilai karakter bangsa.</li>
						<li>Mempersiapkan peserta didik dengan ilmu pengetahuan, teknologi, sosial, budaya dan seni yang berorientasi prestasi sebagai bekal menghadapi kehidupan masa depan.</li>
						<li>Mengembangkan kemampuan peserta didik dalam berfikir logis, kreatif, inovatif, berprakarsa dan mandiri untuk mampu membangun kehidupan dalam masyarakat.</li>
						<li>Membekali peserta didik pengetahuan untuk mampu berprestasi dalam kegiatan olimpiada lokal, nasional maupun internasional.</li>
						<li>Membekali peserta didik memiliki kemampuan mengapresiasikan seni dan budaya baik lokal, Nasional maupun Global.</li>
						<li>Meningkatkan apresiasi dan kecintaan peserta didik terhadap keunggulan lokal kota Yogyakarta sebagai kota Budaya.</li>
						<li>Mengembangkan kultur dan budaya sekolah yang sehat baik secara fisik maupun mental melalui penanaman nilai-nilai agama, kultur masyarakat, kebangsaan, dan pengelolaan lingkungan sekolah.</li>
						<li>Mengembangkan etos kerja dan profesionalitas warga sekolah dan pelayanan pendidikan yang berorientasi pada mutu.</li>
						<li>Mengembangkan layanan pendidikan berbasis teknologi informasi dan komunikasi untuk peningkatan mutu penyelenggaraan dan pelayanan pendidikan yang efektif dan efisien.</li>
					</ul>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<!-- End of Content 3 -->		


		<!-- Content 4 -->
		<?php
		$query_x = "SELECT COUNT(kelas.nama) as jumlah, kelas.nama as kelas, jurusan.nama as jurusan FROM `siswa` join kelas on kelas.idKelas=siswa.idKelas JOIN jurusan on jurusan.idJurusan=kelas.idJurusan  where kelas.nama='10' GROUP BY jurusan.nama";
		$query_xi = "SELECT COUNT(kelas.nama) as jumlah, kelas.nama as kelas, jurusan.nama as jurusan FROM `siswa` join kelas on kelas.idKelas=siswa.idKelas JOIN jurusan on jurusan.idJurusan=kelas.idJurusan  where kelas.nama='11' GROUP BY jurusan.nama";
		$query_xii = "SELECT COUNT(kelas.nama) as jumlah, kelas.nama as kelas, jurusan.nama as jurusan FROM `siswa` join kelas on kelas.idKelas=siswa.idKelas JOIN jurusan on jurusan.idJurusan=kelas.idJurusan  where kelas.nama='12' GROUP BY jurusan.nama";
		$count="select count(*) as jumlah from siswa";

		?>
		<div class="tab-pane fade" id="siswa" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white p-5 my-5 shadow rounded">
					<h2 class="text-center">JUMLAH SISWA</h2>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Kelas</th>
								<th scope="col">Jurusan</th>
								<th scope="col">Jumlah Siswa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$show=mysql_query($query_x);
							while ($result=mysql_fetch_array($show)) {

								?>
								<tr>
									<td><?php echo $result['kelas']; ?></td>
									<td><?php echo $result['jurusan']; ?></td>
									<td><?php echo $result['jumlah']; ?></td>
								</tr>
								<?php
							}
							?>

							<?php
							$show=mysql_query($query_xi);
							while ($result=mysql_fetch_array($show)) {

								?>
								<tr>
									<td><?php echo $result['kelas']; ?></td>
									<td><?php echo $result['jurusan']; ?></td>
									<td><?php echo $result['jumlah']; ?></td>
								</tr>
								<?php
							}
							?>

							<?php
							$show=mysql_query($query_xii);
							while ($result=mysql_fetch_array($show)) {

								?>
								<tr>
									<td><?php echo $result['kelas']; ?></td>
									<td><?php echo $result['jurusan']; ?></td>
									<td><?php echo $result['jumlah']; ?></td>
								</tr>
								<?php
							}
							$show=mysql_query($count);
							while ($result=mysql_fetch_array($show)) {
								?>
								<tr>
									<td colspan="2" class="text-right"><b>Total Jumlah Siswa</b></td>
									<td><?php echo $result['jumlah']; ?></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<!-- End of Content 4 -->		

		<!-- Content 5 -->
		<?php
		$query="select nama,jumlah,idFasilitas from fasilitas";

		?>
		<div class="tab-pane fade" id="fasilitas" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white p-5 my-5 shadow rounded">
					<h2 class="text-center">DAFTAR FASILITAS</h2>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Fasilitas</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$show=mysql_query($query);
							while ($result=mysql_fetch_array($show)) {

								?>
								<tr>
									<td><?php echo $result['nama']; ?></td>
									<td><?php echo $result['jumlah']; ?></td>
									<td><a class="btn btn-primary" href="fasilitas.php#<?php echo $result['idFasilitas'];?>">Detail</a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<!-- End of Content 5 -->		

	</div>
	<!-- End of Content Group -->


	<!-- Ed of Tab Content -->
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>