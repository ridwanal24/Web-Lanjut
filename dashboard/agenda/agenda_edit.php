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
	<form action="agenda_aksi_edit.php" method="post" enctype="multipart/form-data">
			<?php 
			include "koneksi.php";
			$id_agenda=$_GET['id_agenda'];
			$query=mysql_query("select * from agenda where id_agenda='$id_agenda'");
				while($row=mysql_fetch_array($query)){
					$tanggal=$row['tanggal'];
					$kategori=$row['kategori'];
					$image=$row['image'];
					$title=$row['title'];
					$descp=$row['descp'];
				}
			?>
			<!-- ==================================== -->
			
			<div class="container-fluid">
			<div class="row">
				<div class="col-2"><input type="hidden" name="id_agenda" value="<?php echo $id_agenda;?>" /></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Edit Data Agenda</h1>
					<div class="row">
					<div class="form-group col-6">
						<label>Id Agenda</label>
						<input class="form-control" type="text" placeholder="Nomor Agenda" name="id_agenda" value="<?php echo $id_agenda; ?>" disabled>
					</div>
						<div class="form-group col-6">
							<label>Tanggal</label>
							<input class="form-control" type="date" placeholder="Tanggal" name="tanggal" value="<?php echo $tanggal;?>" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<label>Foto</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file" value="<?php echo $image;?>" >
								<label class="custom-file-label">Pilih File</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control" required>
							<option value="" selected="selected">--Pilih Kategori
							<option value="Kunjungan Industri"<?php if ($kategori=="Kunjungan Industri") { echo "selected=\"selected\""; } ?>>Kunjungan Industri</option>
							<option value="Praktek Kerja Lapangan"<?php if ($kategori=="Praktek Kerja Lapangan") { echo "selected=\"selected\""; } ?>>Praktek Kerja Lapangan</option>
							<option value="Jambore Nasional"<?php if ($kategori=="Jambore Nasional") { echo "selected=\"selected\""; } ?>>Jambore Nasional</option>
							<option value="Tour Wisata"<?php if ($kategori=="Tour Wisata") { echo "selected=\"selected\""; } ?>>Tour Wisata</option>
						</select>
						</div>
						<div class="form-group">
							<label>Nama Agenda</label>
							<input class="form-control" placeholder="Nama Agenda" name="title" required value="<?php echo $title;?>">
						</div>
						<div class="form-group">
							<label>Isi Agenda</label>
							<textarea class="ckeditor" placeholder="Isi Agenda" name="descp" required <?php echo $descp;?> </textarea>
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