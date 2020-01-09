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
	<form action="galeri_aksi_input.php" method="post" enctype="multipart/form-data">
		<h1 align="center">Input Data Galeri</h1>
		<br>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 my-3 p-3 mx-auto bg-white shadow rounded">
				<form action="artikel_aksi_input.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="file" class="form-control-file">
					</div>
					<input class="btn btn-primary float-right" type="submit" value="Post" name="submit">		
				</form>
			</div>
		</div>
	</div>
	<script src="../../assets/ckeditor/ckeditor.js"></script>
			<br>
		<!-- </body>
			</html> -->
<?php }
    include '../layout/footer.php';
?>