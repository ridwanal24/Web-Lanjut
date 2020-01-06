<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<br><br><br>
	<form action="guru_aksi_input.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Guru</h1>
					<div class="form-group">
						<label>NIP</label>
						<input class="form-control col-4" type="text" placeholder="Nomor Induk Pegawai" name="nip" required>
					</div>
					<div class="form-group">
						<label>Nama Guru</label>
						<input class="form-control" type="text" placeholder="Nama Guru" name="nama_guru" required>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Tempat Lahir</label>
							<input class="form-control" type="text" placeholder="Tempat Lahir" name="tempat_lahir" required>
						</div>
						<div class="form-group col-6">
							<label>Tanggal Lahir</label>
							<input class="form-control" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
						</div>
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
						<label class="">Jenis Kelamin</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
							<label class="form-check-label">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
							<label class="form-check-label">Perempuan</label>
						</div>
					</div>
					<div class="form-group">
						<label>Agama</label>
						<select name="agama" class="form-control" required>
							<option value="" selected="selected">--Pilih Agama
								<option value="Islam">Islam</option>
								<option value="Kristen Katholik">Kristen Katholik</option>
								<option value="Kristen Protestan">Kristen Protestan</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
							</select>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<select name="kode_jabatan" class="form-control" required>
								<option value="" selected="selected">--Pilih Jabatan
								<?php
								include "koneksi.php";
									$sql="SELECT * FROM jabatan";
									$hasil_query=mysql_query($sql);
								while($baris=mysql_fetch_object($hasil_query))
									{
									echo"<option value=$baris->kode_jabatan>$baris->kode_jabatan</option>";
									}
									?>
								</select>
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