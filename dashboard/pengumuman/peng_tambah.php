<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<head>
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<br><br><br>
	<form action="peng_aksi_input.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Pengumuman</h1>
					<div class="form-group">
						<label>Id Pengumuman</label>
						<input class="form-control col-4" type="text" placeholder="Nomor Pengumuman" name="id_pengumuman" required>
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input class="form-control" type="date" placeholder="Tanggal" name="tanggal" >
					</div>
					<div class="form-group">
						<label>Posting</label>
						<select name="posting" class="form-control" required>
							<option value="" selected="selected">--Pilih Posting
							<option value="Akademik">Akademik</option>
							<option value="Bendahara">Bendahara</option>
							<option value="Humas">Humas</option>
							</select>
						</div>
						<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control" required>
						<option value="" selected="selected">--Pilih Kategori
						<option value="Informasi">Informasi</option>
						<option value="Himbauan">Himbauan</option>
						<option value="Penting">Penting</option>
							</select>
						</div>
						<div class="form-group">
						<label>Judul</label>
						<input class="form-control" type="text" placeholder="Judul Pengumuman" name="title" required>
						</div>
						<div class="form-group">
						<label>Isi Pengumuman</label>
						<textarea class="ckeditor" type="text" placeholder="Isi Pengumuman" name="descp" required></textarea>
						</div>
								<div class="row my-3">
									<div class="col-9"></div>
									<div class="col-3">
										<input type="submit" class="btn btn-primary mx-1" value="Simpan" />
										<input type="reset" class="btn btn-danger mx-1" value="Batal" />	
									</div>
								</div>
							</div>
						</div>
						<div class="col-2"></div>
					</div>		
				</div>
			</form>
			<br>
	<?php
}else{
	?>
	<br><br><br><br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="../../login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="../../login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include '../layout/footer.php';
?>