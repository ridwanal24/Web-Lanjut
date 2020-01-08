<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>

	<br>
	<form action="siswa_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="guru_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$nis=$_GET['nis'];
			$query=mysql_query("SELECT siswa.nama,nis,alamat,gender,tglLahir,tempatLahir,agama, idKelas as kelas ,pathImg FROM siswa where nis='$nis'");
				while($row=mysql_fetch_array($query)){
					$jenis_kelamin=$row['gender'];
					$agama=$row['agama'];
					$kelas=$row['kelas'];
					$nis=$row['nis'];
					$nama=$row['nama'];
					$tempatLahir=$row['tempatLahir'];
					$tglLahir=$row['tglLahir'];
					$alamat=$row['alamat'];
					$img = $row['pathImg'];
				}
			?>
			<!-- ==================================== -->
			
			<div class="container-fluid">
			<div class="row">
				<div class="col-2"><input type="hidden" name="nis" value="<?php echo $nis;?>" /></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Input Data Siswa</h1>
					<div class="form-group">
						<label>NIS</label>
						<input class="form-control col-4" type="text" placeholder="Nomor Induk Siswa" name="nis" value="<?php echo $nis; ?>" disabled>
					</div>
					<div class="form-group">
						<label>Nama Siswa</label>
						<input class="form-control" type="text" placeholder="Nama Siswa" name="nama" value="<?php echo $nama;?>" required>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Tempat Lahir</label>
							<input class="form-control" type="text" placeholder="Tempat Lahir" name="tempatLahir" value="<?php echo $tempatLahir;?>" required>
						</div>
						<div class="form-group col-6">
							<label>Tanggal Lahir</label>
							<input class="form-control" type="date" placeholder="Tanggal Lahir" name="tglLahir" value="<?php echo $tglLahir;?>" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Foto</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file">
								<label class="custom-file-label"><?php
									if (empty($img)) {
										echo 'Pilih File';
									} else {
										echo 'Foto Sudah Ada';
									}
								?></label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="">Jenis Kelamin</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="Laki-laki" required <?php if($jenis_kelamin=="L"){echo "checked=\"checked\"";}?> >
							<label class="form-check-label">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="Perempuan" required <?php if($jenis_kelamin=="P"){echo "checked=\"checked\"";}?>  >
							<label class="form-check-label">Perempuan</label>
						</div>
					</div>
					<div class="form-group">
						<label>Agama</label>
						<select name="agama" class="form-control" required>
							<option value="" selected="selected">--Pilih Agama
								<option value="Islam" <?php if ($agama=="Islam") { echo "selected=\"selected\""; } ?> >Islam</option>
								<option value="Kristen Katholik" <?php if ($agama=="Kristen Katholik") { echo "selected=\"selected\""; } ?> >Kristen Katholik</option>
								<option value="Kristen Protestan" <?php if ($agama=="Kristen Protestan") { echo "selected=\"selected\""; } ?> >Kristen Protestan</option>
								<option value="Hindu" <?php if ($agama=="Hindu") { echo "selected=\"selected\""; } ?> >Hindu</option>
								<option value="Budha" <?php if ($agama=="Budha") { echo "selected=\"selected\""; } ?> >Budha</option>
							</select>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Alamat Lengkap"><?php echo $alamat; ?></textarea>
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<select name="kelas" class="form-control" required>
								<option value="" selected="selected">--Pilih Kelas
									<option value="1" <?php if ($kelas=="1") { echo "selected=\"selected\""; } ?> >10 TKJ</option>
									<option value="2" <?php if ($kelas=="2") { echo "selected=\"selected\""; } ?> >11 TKJ</option>
									<option value="3" <?php if ($kelas=="3") { echo "selected=\"selected\""; } ?> >12 TKJ</option>
									<option value="4" <?php if ($kelas=="4") { echo "selected=\"selected\""; } ?> >10 TIPTL</option>
									<option value="5" <?php if ($kelas=="5") { echo "selected=\"selected\""; } ?> >11 TIPTL</option>
									<option value="6" <?php if ($kelas=="6") { echo "selected=\"selected\""; } ?> >12 TIPTL</option>
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

			<!-- ==================================== -->

			
		</form>
		<br>

<!-- </body>
	</html> -->
<?php } 
include '../layout/footer.php';
?>