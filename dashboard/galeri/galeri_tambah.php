<?php
session_start();
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
<br>
	<form action="galeri_aksi_input.php" method="post">
		<h1 align="center">Input Data Galeri</h1>
		<br>
		<table border="0">
			<tr>
				<td><label for="pathVideo">Video</label></td>
				<td>:</td>
				<td><input type="text" name="video" id="video" class="input1" placeholder="video" required /></td>
			</tr>
			<tr>
				<td><label for="pathImg">Gambar</label></td>
				<td>:</td>
				<td><input type="text" name="gbr" id="gbr" class="input1" placeholder="gambar" required /></td>
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