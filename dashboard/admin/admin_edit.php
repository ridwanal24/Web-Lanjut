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
 <link rel="stylesheet" href="css/admin.css">

</head>
<body> -->
	<br>
	<form action="admin_aksi_edit.php" method="post" enctype="multipart/form-data">
		<!-- 	<form action="admin_aksi_edit.php" class="content" method="post" enctype="multipart/form-data"> -->
			<?php 
			include "koneksi.php";
			$username=$_GET['username'];
			$query=mysql_query("SELECT * FROM admin where username='$username'");
			?>
			<h1 align="center">Edit Data Admin</h1>
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
						<td><label for="username">Username</label></td>
						<td width="20px"> : </td>
						<td><input type="text" name="username" id="username" class="input1" placeholder="username" value="<?php echo $row['username'];?>" required /></td>
					</tr>
					<tr>
						<td><label for="pass">Password</label></td>
						<td> : </td>
						<td><input type="text" name="pass" id="pass" class="input1" placeholder="pass" value="<?php echo $row['pass'];?>" required /></td>
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