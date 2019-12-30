<?php
session_start();
include 'koneksi.php';
include 'layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<head>
 <link rel="stylesheet" href="css/agenda.css">
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<form action="agenda_aksi_input.php" class="" method="post" enctype="multipart/form-data">
		<h1 align="center">Input Data Agenda</h1>
		<table border="0">
		<tr>
		<td><label for="id_agenda">Id</label></td>
		<td>:</td>
		<td><input type="text" name="id_agenda" id="id_agenda" class="input1" placeholder="Diisi oleh system" disabled="disabled" /></td>
		</tr>
		<tr>
		<td><label for="tanggal">Tanggal</label></td>
		<td>:</td>
		<td><input type="date" name="tanggal" id="tanggal" class="input1"/></td>
		</tr>
		<tr>
		<td><label for="kategori">Kategori</label></td>
		<td>:</td>
		<td><select name="kategori" class="input5" required>
		<option value="" selected="selected">--Pilih Kategori
		<option value="Kunjungan Industri">Kunjungan Industri</option>
		<option value="Praktek Kerja Lapangan">Praktek Kerja Lapangan</option>
		<option value="Jambore Nasional">Jambore Nasional</option>
		<option value="Tour Wisata">Tour Wisata</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="Image">Gambar</label></td>
		<td>:</td>
		<td><input type="file" name="image" id="image" class="input1" required /></td>
		</tr>
		<tr>
		<td><label for="title">Judul Agenda</label></td>
		<td>:</td>
		<td><input type="text" name="title" id="title" class="input1" placeholder="Judul Agenda" required /></td>
		</tr>
		<td><label for="descp">Isi Agenda</label></td>
		<td>:</td>
		<td><textarea type="text" name="descp" id="descp" class="ckeditor" placeholder="Isi Agenda" required ></textarea></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Simpan" />
		<input type="reset" class="btn1" value="Batal" />
		</td>
		</tr>
		</table>
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
include 'layout/footer.php';
?>