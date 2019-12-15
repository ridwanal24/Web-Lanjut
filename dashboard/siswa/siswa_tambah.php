<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
<!-- <html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Data Siswa Sekolahku</title>
 <link rel="stylesheet" href="css/guru.css">

</head>
<body> -->
	<br>
	<form action="siswa_aksi_input.php" method="post">
		<h1 align="center">Input Data Guru</h1>
		<br>
		<table border="0">
			<tr>
				<td><label for="nis">NIS</label></td>
				<td>:</td>
				<td><input type="text" name="nis" id="nis" class="input1" placeholder="nis" required /></td>
			</tr>
			<tr>
				<td><label for="nama_siswa">Nama Siswa</label></td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama_siswa" class="input1" placeholder="nama siswa" required /></td>
			</tr>
			<tr>
				<td><label for="tempat_lahir">Tempat Lahir</label></td>
				<td>:</td>
				<td><input type="text" name="tempatLahir" id="tempat_lahir" class="input1" placeholder="tempat lahir" required /></td>
			</tr>
			<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
			<td>:</td>
			<td><input type="date" name="tglLahir" id="tanggal_lahir" class="input1" placeholder="tanggal lahir" required /></td>
		</tr>
		<tr>
			<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
			<td>:</td>
			<td><input type="radio" name="gender" value="Laki-laki" id="jenis_kelamin" required/><label class="" for="">Laki-laki </label>
				<input type="radio" name="gender" value="Perempuan" id="jenis_kelamin" required/><label class="" for="">Perempuan </label></td>
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
					<td><label for="kelas">Kelas</label></td>
					<td>:</td>
					<td><select name="kelas" class="input5" required>
						<option value="" selected="selected">--Pilih Kelas
							<option value="1">10 TKJ</option>
							<option value="2">11 TKJ</option>
							<option value="3">12 TKJ</option>
							<option value="4">10 TIPTL</option>
							<option value="5">11 TIPTL</option>
							<option value="6">12 TIPTL</option>
						</select></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td ><input type="submit" class="btn btn-primary" value="Simpan" />
							<input type="reset" class="btn btn-danger" value="Batal" />
						</td>
					</tr>
				</table>
			</form>
			<br>
		<!-- </body>
			</html> -->
		<?php }
		include '../layout/footer.php';
		?>