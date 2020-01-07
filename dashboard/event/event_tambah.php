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
	<form action="event_aksi_input.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Kegiatan</h1>
					<div class="row">
					<div class="form-group col-6">
						<label>Id Kegiatan</label>
						<input class="form-control" type="text" placeholder="Nomor Kegiatan" name="id_event" required>
					</div>
					<div class="form-group col-6">
							<label>Tanggal</label>
							<input class="form-control" type="date" placeholder="Tanggal" name="tanggal" required>
						</div>
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
								<option value="Lomba">Lomba</option>
								<option value="Seminar">Seminar</option>
								<option value="Pensi">Pensi</option>
								<option value="Bakti Sosial">Bakti Sosial</option>
							</select>
						</div>
						<div class="row">
						<div class="form-group col-6">
							<label>Foto</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file" required>
								<label class="custom-file-label">Pilih File</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nama Kegiatan</label>
						<textarea class="form-control" name="title" placeholder="Nama Kegiatan" required></textarea>
					</div>
					<div class="form-group">
						<label>Isi Kegiatan</label>
						<textarea class="ckeditor" type="text" placeholder="Isi Kegiatan" name="descp" required></textarea>
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

<?php
}else{
	?>
	<br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include '../layout/footer.php';
?>