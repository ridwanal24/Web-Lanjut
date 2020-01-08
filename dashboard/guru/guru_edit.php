<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<br><br><br>
	<form action="guru_aksi_edit.php" method="post" enctype="multipart/form-data">
			<?php 
			include "koneksi.php";
			$nip=$_GET['nip'];
			$query=mysql_query("select * from guru where nip='$nip'");
				while($row=mysql_fetch_array($query)){
					$nama_guru=$row['nama_guru'];
					$tempat_lahir=$row['tempat_lahir'];
					$tanggal_lahir=$row['tanggal_lahir'];
					$image=$row['image'];
					$alamat=$row['alamat'];
					$jenis_kelamin=$row['jenis_kelamin'];
					$agama=$row['agama'];
					$img = $row['image'];
					$kode_jabatan=$row['kode_jabatan'];
				}
			?>
			<!-- ==================================== -->
			
			<div class="container-fluid">
			<div class="row">
				<div class="col-2"><input type="hidden" name="nip" value="<?php echo $nip;?>" /></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Edit Data Guru</h1>
					<div class="form-group">
						<label>NIP</label>
						<input class="form-control col-4" type="text" placeholder="Nomor Induk Siswa" name="nip" value="<?php echo $nip; ?>" disabled>
					</div>
					<div class="form-group">
						<label>Nama Guru</label>
						<input class="form-control" type="text" placeholder="Nama Guru" name="nama_guru" value="<?php echo $nama_guru;?>" required>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Tempat Lahir</label>
							<input class="form-control" type="text" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" required>
						</div>
						<div class="form-group col-6">
							<label>Tanggal Lahir</label>
							<input class="form-control" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" required>
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
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="L" required <?php if($jenis_kelamin=="L"){echo "checked=\"checked\"";}?> >
							<label class="form-check-label">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jenis_kelamin" value="P" required <?php if($jenis_kelamin=="P"){echo "checked=\"checked\"";}?>  >
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
							<label>Jabatan</label>
							<select name="kode_jabatan" class="form-control" required>
								<option value="" selected="selected">--Pilih Jabatan
								<?php
								$hasil_query=mysql_query("SELECT * FROM jabatan");
								while($baris=mysql_fetch_array($hasil_query))
								{
								echo"<option value='{$baris['kode_jabatan']}'".($kode_jabatan == $baris['kode_jabatan']?" selected":"").">{$baris['jabatan']}</option>";
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

			<!-- ==================================== -->

			
		</form>
		<br>

	<?php
}else{
	?>
	<br>
	<center>Silahkan Login Terlebih Dahulu</center>
	<br>
	<center><a href="../login_siswa.php"><button type="button" class="btn btn-primary text-light">LOGIN SISWA</button></a></center>
	<br>
	<center><a href="../login_guru.php"><button type="button" class="btn btn-primary text-light">LOGIN GURU</button></a></center>
	<br>
	<?php
}
include '../layout/footer.php';
?>