<?php
session_start();
include '../layout/header.php';
include 'koneksi.php';
/*Get Data from Database*/
$id = $_GET['idSambutan'];

/*End of Get Data from Database*/

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses halaman ini, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{

	$query = "select * from sambutan where idSambutan=$id";
	$action = mysql_query($query);
	while ($data = mysql_fetch_array($action)) {
		$title = $data['judul'];
		$deskripsi = $data['deskripsi'];
		$sambutan = fopen($data["sambutan/text/".$data['idSambutan'], "r");
		$text = fread($sambutan, filesize($data['text']));
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 my-3 p-3 mx-auto bg-white shadow rounded">
					<h2 class="text-center">Edit Sambutan</h2>
					<form action="sambutan_aksi_edit.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
						</div>
						<div class="form-group">
							<label>Text</label>
							<textarea class="text" id="text" name="text" required><?php echo $text;?></textarea>
						</div>
						<input class="btn btn-primary float-right" type="submit" value="Post" name="submit">		
					</form>
				</div>
			</div>
		</div>
		<script src="../../assets/ckeditor/ckeditor.js"></script>
	<?php }
} 
include '../layout/footer.php';
?>