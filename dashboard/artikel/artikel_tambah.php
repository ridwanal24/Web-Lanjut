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
	<form action="artikel_aksi_input.php" method="post">
		<h1 align="center">Input Data Artikel</h1>
		<br>
		<table border="0">
			<tr>
				<td><label for="judul">Judul</label></td>
				<td>:</td>
				<td><input type="text" name="judul" id="judul" class="input1" placeholder="judul"/></td>
			</tr>
            <tr>
				<td><label for="text">Isi</label></td>
				<td>:</td>
				<td><textarea name="text" id="text" class="input1" placeholder="isi" value="<?php echo $row['text'];?>"></textarea></td>
			</tr>
			<tr>
				<td><label for="pathImage">Gambar</label></td>
				<td>:</td>
				<td><input type="file" accept="image/*" name="gbr" id="gbr" class="input1" placeholder="gambar"/></td>
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