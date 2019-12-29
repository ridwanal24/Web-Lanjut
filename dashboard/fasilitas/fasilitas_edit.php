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
			$username=$_GET['username'];
			$query=mysql_query("SELECT * FROM fasilitas where username='$username'");
			?>
			<h1 align="center">Edit Data Fasilitas</h1>
			<br>
			<table border="0">
				<?php
				while($row=mysql_fetch_array($query)){
					$username=$row['username'];
					$pass=$row['pass'];
					?>
					<tr>
						<td><input type="hidden" name="username" value="<?php echo $row['username'];?>" /></td>
					</tr>
					<tr>
						<td><label for="masjid">Masjid</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="masjid" id="masjid" class="input1" placeholder="masjid" value="<?php echo $row['masjid'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="aula">Aula</label></td>
						<td> : </td>
						<td><input type="text" name="aula" id="aula" class="input1" placeholder="aula" value="<?php echo $row['aula'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="kantin">Kantin</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="kantin" id="kantin" class="input1" placeholder="kantin" value="<?php echo $row['kantin'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="perpustakaan">Perpustakaan</label></td>
						<td> : </td>
						<td><input type="text" name="perpustakaan" id="perpustakaan" class="input1" placeholder="perpustakaan" value="<?php echo $row['perpustakaan'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="bengkel listrik">Bengkel Listrik</label></td>
						<td> : </td>
						<td><input type="text" name="bengkel listrik" id="bengkel listrik" class="input1" placeholder="bengkel listrik" value="<?php echo $row['bengkel listrik'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="labolatorium komputer">Labolatorium Komputer</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="labolatorium komputer" id="labolatorium komputer" class="input1" placeholder="labolatorium komputer" value="<?php echo $row['labolatorium komputer'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang kelas">Ruang Kelas</label></td>
						<td> : </td>
						<td><input type="text" name="ruang kelas" id="ruang kelas" class="input1" placeholder="ruang kelas" value="<?php echo $row['ruang kelas'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="ruang kesehatan">Ruang Kesehatan</label></td>
						<td> : </td>
						<td><input type="text" name="ruang kesehatan" id="ruang kesehatan" class="input1" placeholder="ruang kesehatan" value="<?php echo $row['ruang kesehatan'];?>" required /></td>
					</tr>
					<tr>
					<tr>
						<td><label for="kantin">Kantin</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="kantin" id="kantin" class="input1" placeholder="kantin" value="<?php echo $row['kantin'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="perpustakaan">Perpustakaan</label></td>
						<td> : </td>
						<td><input type="text" name="perpustakaan" id="perpustakaan" class="input1" placeholder="perpustakaan" value="<?php echo $row['perpustakaan'];?>" required /></td>
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