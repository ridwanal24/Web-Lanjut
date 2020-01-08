<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
 <head>
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<br><br><br>
	<form action="event_aksi_edit.php" method="post" enctype="multipart/form-data">
			<?php 
			include "koneksi.php";
			$id_event=$_GET['id_event'];
			$query=mysql_query("select * from kegiatan where id_event='$id_event'");
				while($row=mysql_fetch_array($query)){
					$tanggal=$row['tanggal'];
					$kategori=$row['kategori'];
					$posting=$row['posting'];
					$image=$row['image'];
					$title=$row['title'];
					$descp=$row['descp'];
				}
			?>
			<!-- ==================================== -->
			
			<div class="container-fluid">
			<div class="row">
				<div class="col-2"><input type="hidden" name="id_event" value="<?php echo $id_event;?>" /></div>
				<div class="col-8 bg-white shadow rounded p-3">
					<h1 align="center" class="text-muted">Edit Data Kegiatan</h1>
					<div class="row">
					<div class="form-group col-6">
						<label>Id Kegiatan</label>
						<input class="form-control" type="text" placeholder="Nomor Kegiatan" name="id_event" value="<?php echo $id_event; ?>" disabled>
					</div>
						<div class="form-group col-6">
							<label>Tanggal</label>
							<input class="form-control" type="text" placeholder="Tanggal" name="tanggal" value="<?php echo $tanggal;?>" required>
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
						<label>Posting</label>
						<select name="posting" class="form-control" required>
							<option value="" selected="selected">--Pilih Posting
								<option value="Akademik"<?php if ($posting=="Akademik") { echo "selected=\"selected\""; } ?>>Akademik</option>
								<option value="Bendahara"<?php if ($posting=="Bendahara") { echo "selected=\"selected\""; } ?>>Bendahara</option>
								<option value="Humas"<?php if ($posting=="Humas") { echo "selected=\"selected\""; } ?>>Humas</option>
						</select>
						</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control" required>
							<option value="" selected="selected">--Pilih Kategori
								<option value="Lomba"<?php if ($kategori=="Lomba") { echo "selected=\"selected\""; } ?>>Lomba</option>
								<option value="Seminar"<?php if ($kategori=="Seminar") { echo "selected=\"selected\""; } ?>>Seminar</option>
								<option value="Pensi"<?php if ($kategori=="Pensi") { echo "selected=\"selected\""; } ?>>Pensi</option>
								<option value="Bakti Sosial"<?php if ($kategori=="Bakti Sosial") { echo "selected=\"selected\""; } ?>>Bakti sosial</option>
						</select>
						</div>
						<div class="form-group">
							<label>Nama Kegiatan</label>
							<input class="form-control" placeholder="Nama Kegiatan" name="title" required value="<?php echo $title;?>">
						</div>
						<div class="form-group">
							<label>Isi Kegiatan</label>
							<textarea class="ckeditor" placeholder="Isi Kegiatan" name="descp" required <?php echo $descp;?> </textarea>
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