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
	<form action="profil_aksi_input.php" method="post">
		<h1 align="center">Input Profil Sekolah</h1>
		<br>
		<table border="0">
            <tr>
				<td><label for="nip">NIP</label></td>
				<td> : </td>
				<td><input type="text" name="nip" id="nip" class="input1" placeholder="NIP" value=""/></td>
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