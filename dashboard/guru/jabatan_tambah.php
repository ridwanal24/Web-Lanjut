<?php
session_start();
include 'koneksi.php';
include '../layout/header.php';
if (isset( $_SESSION['status'])) {
	# code...

?>
<head>
<link rel="stylesheet" href="css/guru.css">
</head>
	<form action="jabatan_aksi_input.php" class="posting" method="post">
		<h1 align="center">Input Data Jabatan</h1>
		<table border="0">
		<tr>
		<td><label for="kode_jabatan">Kode Jabatan</label></td>
		<td>:</td>
		<td><input type="text" name="kode_jabatan" id="kode_jabatan" class="input1" placeholder="kode jabatan" required /></td>
		</tr>
		<tr>
		<td><label for="jabatan">Jabatan</label></td>
		<td>:</td>
		<td><input type="text" name="jabatan" id="jabatan" class="input1" placeholder="jabatan" required /></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Simpan" />
		<input type="reset" class="btn1" value="Batal" /></td>
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
include '../layout/footer.php';
?>