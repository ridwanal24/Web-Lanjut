<?php
session_start();
include '../layout/header.php';
include 'check_id.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
	<br>
	<form action="siswa_aksi_input.php" method="post" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Siswa</h1>
					<div class="form-group">
						<label>NIS</label>
						<input class="form-control col-4" type="text" placeholder="Nomor Induk Siswa" name="nis" value="<?php echo $nis; ?>" required>
					</div>
					<div class="form-group">
						<label>Nama Siswa</label>
						<input class="form-control" type="text" placeholder="Nama Siswa" name="nama" required>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Tempat Lahir</label>
							<input class="form-control" type="text" placeholder="Tempat Lahir" name="tempatLahir" required>
						</div>
						<div class="form-group col-6">
							<label>Tanggal Lahir</label>
							<input class="form-control" type="date" placeholder="Tanggal Lahir" name="tglLahir" required>
						</div>
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
						<label class="">Jenis Kelamin</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="Laki-laki" required>
							<label class="form-check-label">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="Perempuan" required>
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
							<label>Kelas</label>
							<select name="kelas" class="form-control" required>
								<option value="" selected="selected">--Pilih Kelas
									<option value="1">10 TKJ</option>
									<option value="2">11 TKJ</option>
									<option value="3">12 TKJ</option>
									<option value="4">10 TIPTL</option>
									<option value="5">11 TIPTL</option>
									<option value="6">12 TIPTL</option>
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
		<!-- </body>
			</html> -->
		<?php }
		include '../layout/footer.php';
		?>