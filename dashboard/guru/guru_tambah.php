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
	<form action="guru_aksi_input.php" method="post">
		<h1 align="center">Input Data Guru</h1>
		<br>
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
					<td><label for="jabatan">Jabatan</label></td>
					<td>:</td>
					<td><select name="jabatan" class="input5" required>
						<option value="" selected="selected">--Pilih Jabatan
							<option value="Guru Bahasa">Guru Bahasa</option>
							<option value="Guru Olahraga">Guru Olahraga</option>
							<option value="Guru Seni">Guru Seni</option>
							<option value="Guru Musik">Guru Musik</option>
							<option value="Guru Agama">Guru Agama</option>
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