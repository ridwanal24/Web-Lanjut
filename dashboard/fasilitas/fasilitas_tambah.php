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
 <link rel="stylesheet" href="css/admin.css">

</head>
<body> -->
	<br>
	<form action="admin_aksi_input.php" method="post">
		<h1 align="center">Input Data Admin</h1>
		<br>
		<table border="0">
			<tr>
				<td><label for="username">Username</label></td>
				<td>:</td>
				<td><input type="username" name="username" id="username" class="input1" placeholder="username" required /></td>
			</tr>
			<tr>
				<td><label for="pass">Password</label></td>
				<td>:</td>
				<td><input type="password" name="pass" id="pass" class="input1" placeholder="pass" required /></td>
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