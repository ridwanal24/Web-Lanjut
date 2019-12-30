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
 <link rel="stylesheet" href="css/fasilitas.css">

</head>
<body> -->
	<br>
	<form action="fasilitas_aksi_input.php" method="post">
		<h1 align="center">Input Data Fasilitas</h1>
		<br>
		<table border="0">
					<tr>
						<td><label for="nama">Nama</label></td>
						<td>:</td>
						<td><input type="text" accept="nama" name="nama" id="nama" class="input1" placeholder="nama"/></td>
					</tr>
					<tr>
						<td><label for="jumlah">Jumlah</label></td>
						<td>:</td>
						<td><input type="text" accept="jumlah" name="jumlah" id="jumlah" class="input1" placeholder="jumlah"/></td>
					</tr>
					<tr>
						<td><label for="deskripsi">Deskripsi</label></td>
						<td>:</td>
						<td><input type="text" accept="deskripsi" name="deskripsi" id="deskripsi" class="input1" placeholder="deskripsi"/></td>
					</tr>
					<tr>
					</tr>
					<tr>
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