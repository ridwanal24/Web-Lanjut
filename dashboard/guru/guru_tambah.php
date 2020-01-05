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
<form action="guru_aksi_input.php" class="" method="post" enctype="multipart/form-data">
		<h1 align="center">Input Data Guru</h1>
		<table border="0">
		<tr>
		<td><label for="nip">NIP</label></td>
		<td>:</td>
		<td><input type="text" name="nip" id="nip" class="input1" placeholder="nip" required /></td>
		</tr>
		<tr>
		<td><label for="nama_siswa">Nama Guru</label></td>
		<td>:</td>
		<td><input type="text" name="nama_guru" id="nama_guru" class="input1" placeholder="nama guru" required /></td>
		</tr>
		<tr>
		<td><label for="Image">Gambar</label></td>
		<td>:</td>
		<td><input type="file" name="image" id="image" class="input1"  /></td>
		</tr>
		<tr>
		<td><label for="tempat_lahir">Tempat Lahir</label></td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" id="tempat_lahir" class="input1" placeholder="tempat lahir" required /></td>
		</tr>
		<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="input1" placeholder="tanggal lahir" required /></td>
		</tr>
		<tr>
		<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
		<td>:</td>
		<td><input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin" required/><label class="" for="">Laki-laki </label>
		<input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin" required/><label class="" for="">Perempuan </label></td>
		</tr>
		<tr>
		<td><label for="agama">Agama</label></td>
		<td>:</td>
		<td><select name="agama" class="input5" required>
		<option value="" selected="selected">--Pilih Agama
		<option value="Islam">Islam</option>
		<option value="Kristen Katholik">Kristen Katholik</option>
		<option value="Kristen Protestan">Kristen Protestan</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		</select></td>
		</tr>
		<tr>
		<td><label for="alamat">Alamat</label></td>
		<td>:</td>
		<td><textarea name="alamat" id="alamat" class="input2" rows="5" cols="30" placeholder="alamat" required></textarea></td>
		</tr>
		<tr>
		<td><label for="kode_jabatan">Jabatan</label></td>
		<td>:</td>
		<td><select name="kode_jabatan" class="input5" required>
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
		</select></td>
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
include '../layout/footer.php';
?>