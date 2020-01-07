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
 <link rel="stylesheet" href="css/guru.css">

</head>
<body> -->
	<br>
	<form action="galeri_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="guru_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$id=$_GET['idGaleri'];
			$query=mysql_query("SELECT pathImg from galeri where idGaleri='$id'");
			?>
			<h1 align="center">Edit Data Galeri</h1>
			<br>
			<table border="0">
				<?php
				while($row=mysql_fetch_array($query)){
					$pathImg=$row['pathImg'];
					?>
					<tr>
						<td><label for="pathImg">Gambar</label></td>
						<td> : </td>
						<td><input type="file" accept="image/*" name="gbr" id="gbr" class="input1" placeholder="gambar" value="<?php echo $row['pathImg'];?>"/></td>
					</tr>
				    <tr>
					    <td></td>
					    <td></td>
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