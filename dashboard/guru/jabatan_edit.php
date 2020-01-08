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
<body>
<br><br><br>
	<form action="jabatan_aksi_edit.php" class="" method="post">
		<?php 
		include "koneksi.php";
		$kode_jabatan=$_GET['kode_jabatan'];
		$query=mysql_query("select * from jabatan where kode_jabatan='$kode_jabatan'");
		?>
		<h1 align="center">Edit Data Jabatan</h1>
		<table border="0">
		<br>
		<?php
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
		<td><input type="hidden" name="kode_jabatan" value="<?php echo $row['kode_jabatan'];?>" /></td>
		</tr>
		<tr>
		<td><label for="kode_jabatan">Kode Jabatan</label></td>
		<td>:</td>
		<td><input type="text" name="kode_jabatan" id="kode_jabatan" class="input1" placeholder="kode jabatan" disabled="disabled" value="<?php echo $row['kode_jabatan'];?>" required /></td>
		</tr>
		<tr>
		<td><label for="jabatan">Jabatan</label></td>
		<td>:</td>
		<td><input type="text" name="jabatan" id="jabatan" class="input1" placeholder="jabatan" value="<?php echo $row['jabatan'];?>" required /></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn" value="Simpan" /></td>
		</tr>
		<?php } ?>
		</table>
	</form>
	<?php
}else{
	?>
	<br>
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