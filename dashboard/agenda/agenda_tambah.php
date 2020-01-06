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
	<form action="agenda_aksi_input.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Agenda</h1>
					<div class="row">
					<div class="form-group col-6">
						<label>Id Agenda</label>
						<input class="form-control" type="text" placeholder="Nomor Agenda" name="id_agenda" required>
					</div>
					<div class="form-group col-6">
							<label>Tanggal</label>
							<input class="form-control" type="date" placeholder="Tanggal" name="tanggal" required>
						</div>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control" required>
							<option value="" selected="selected">--Pilih Kategori
								<option value="Kunjungan Industri">Kunjungan Industri</option>
								<option value="Praktek Kerja Lapangan">Praktek Kerja Lapangan</option>
								<option value="Jambore Nasional">Jambore Nasional</option>
								<option value="Tour Wisata">Tour Wisata</option>
							</select>
						</div>
						<div class="row">
						<div class="form-group col-6">
							<label>Foto</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="image" required>
								<label class="custom-file-label">Pilih File</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nama Agenda</label>
						<textarea class="form-control" name="title" placeholder="Nama Agenda" required></textarea>
					</div>
					<div class="form-group">
						<label>Isi Agenda</label>
						<textarea class="ckeditor" type="text" placeholder="Isi Agenda" name="descp" required></textarea>
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