<?php
session_start();
include 'koneksi.php';
$query = "select max(idSambutan) as id from sambutan";
$action = mysql_query($query);
while ($data = mysql_fetch_array($action)) {
	$id = $data['id']+1;
}
include '../layout/header.php';
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 my-3 p-3 mx-auto bg-white shadow rounded">
				<h2 class="text-center">Buat Artikel</h2>
				<form action="sambutan_aksi_input.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" name="title" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Isi</label>
						<textarea class="ckeditor" id="ckeditor" name="isi" required></textarea>
					</div>
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
<?php }
include '../layout/footer.php';
?>