<?php
include 'layout/header.php';
?>
<div class="container-fluid">

	<!-- Tab Switch -->
	<ul style="margin-top: 50px;" class="nav fixed-top nav-pills bg-white mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="pills-profil-tab" data-toggle="pill" href="#profil" role="tab" aria-controls="pills-home" aria-selected="true">Umum</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-visi-misi-tab" data-toggle="pill" href="#visi-misi" role="tab" aria-controls="pills-profile" aria-selected="false">Visi & Misi</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
		</li>
	</ul>

	<!-- End of Tab Switch -->

	<!-- Tab Content -->
	<div class="tab-content" id="pills-tabContent">
		<!-- Konten 1 -->
		<div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 bg-white my-5 p-5 shadow rounded">
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
		<!-- End of Konten 1 -->
		
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
	</div>
	<!-- Ed of Tab Content -->

</div>
<?php
include 'layout/footer.php';
?>