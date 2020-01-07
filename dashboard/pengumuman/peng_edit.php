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
	<form action="peng_aksi_edit.php" method="post" enctype="multipart/form-data">
		<?php 
		include "koneksi.php";
		$id_pengumuman=$_GET['id_pengumuman'];
		$query=mysql_query("select * from pengumuman where id_pengumuman='$id_pengumuman'");
		while($row=mysql_fetch_array($query)){
			$tanggal=$row['tanggal'];
			$posting=$row['posting'];
			$kategori=$row['kategori'];
			$title=$row['title'];
			$descp=$row['descp'];
		}
	?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"><input type="hidden" name="id_pengumuman" value="<?php echo $id_pengumuman;?>" /></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Edit Data Pengumuman</h1>
					<div class="row">
					<div class="form-group col-6">
						<label>Id Pengumuman</label>
						<input class="form-control" type="text" placeholder="Nomor Pengumuman" name="id_pengumuman" value="<?php echo $id_pengumuman; ?>" disabled>
					</div>
						<div class="form-group col-6">
							<label>Tanggal</label>
							<input type="text" name="tanggal" placeholder="tanggal"  disabled="disabled" value="<?php echo $tanggal;?>" required />
						</div>
					</div>
					</div>
					<div class="form-group">
						<label>Posting</label>
						<select name="posting" class="input5" required>
							<option value="" selected="selected">--Pilih Posting
							<option value="Akademik"<?php if ($posting=="Akademik") { echo "selected=\"selected\""; } ?>>Akademik</option>
							<option value="Bendahara"<?php if ($posting=="Bendahara") { echo "selected=\"selected\""; } ?>>Bendahara</option>
							<option value="Humas"<?php if ($posting=="Humas") { echo "selected=\"selected\""; } ?>>Humas</option>
						</select>
						</div>
						<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="input5" required>
							<option value="" selected="selected">--Pilih Kategori
							<option value="Informasi"<?php if ($kategori=="Informasi") { echo "selected=\"selected\""; } ?>>Informasi</option>
							<option value="Himbauan"<?php if ($kategori=="Himbauan") { echo "selected=\"selected\""; } ?>>Himbauan</option>
							<option value="Penting"<?php if ($kategori=="Penting") { echo "selected=\"selected\""; } ?>>Penting</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Pengumuman</label>
							<input class="form-control" placeholder="Nama Pengumuman" name="title" required value="<?php echo $title;?>">
						</div>
						<div class="form-group">
							<label>Isi Pengumuman</label>
							<textarea class="ckeditor" placeholder="Isi Pengumuman" name="descp" required <?php echo $descp;?>></textarea>
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

			<!-- ==================================== -->

			
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