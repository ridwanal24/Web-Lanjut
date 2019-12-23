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
	<form action="ekstra_aksi_input.php" method="post">
		<h1 align="center">Input Data Ekstrakurikuler</h1>
		<br>
		<table border="0">
            <tr>
				<td><label for="nama">Ekstrakurikuler</label></td>
				<td> : </td>
				<td><input type="text" name="nama" id="nama" class="input1" placeholder="nama ekstrakurikuler" value=""/></td>
			</tr>
			<tr>
				<td><label for="deskripsi">Deskripsi</label></td>
				<td> : </td>
				<td><textarea name="deskripsi" id="deskripsi" class="input2" rows="5" cols="30" placeholder="deskripsi" required></textarea></td>
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