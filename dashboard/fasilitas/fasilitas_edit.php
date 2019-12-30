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
 <title>Data Siswa MI Wahid Hasyim</title>
 <link rel="stylesheet" href="css/fasilitas.css">

</head>
<body> -->
	<br>
	<form action="fasilitas_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="fasilitas_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$id=$_GET['idFasilitas'];
			$query=mysql_query("SELECT * FROM idFasilitas where idFasilitas='$id'");
			?>
			<h1 align="center">Edit Data Fasilitas</h1>
			<br>
			<table border="0">
				<?php
				while($row=mysql_fetch_array($query)){
					$nama=$row['nama'];
					$jumlah=$row['jumlah'];
					$deskripsi=$row['deskripsi'];
					
					?>
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
						<td><input type="submit" class="btn btn-primary" value="Update" /></td>
					</tr>
				<?php } ?>
			</table>
		</form>
		<br>

<!-- </body>
	</html> -->
<?php } 
include '../layout/footer.php';
?>