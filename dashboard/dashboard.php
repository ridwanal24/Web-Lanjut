<?php
session_start();
include 'layout/header.php';
echo "<br>";
if ((!isset($_SESSION['status'])) && ($_SESSION['status']!="admin")) {
	echo "<center>Silahkan login sebagai admin </center>";
	?>
	<center><a href="../index.php"><button type="button" class="btn btn-primary text-light">LOGIN</button></a></center>
	<?php
}else if ((isset($_SESSION['status'])) && ($_SESSION['status']=="admin")){
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="text-center col-md-10">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action disabled active">
						Dashboard Admin
					</a>
					<a href="guru/" class="list-group-item list-group-item-action">Kelola Data Guru</a>
					<a href="siswa/" class="list-group-item list-group-item-action">Kelola Data Siswa</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Data Admin</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Gallery</a>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<?php
}else{
	echo "<center>Silahkan login sebagai admin </center>";
	?>
	<center><a href="../index.php"><button type="button" class="btn btn-primary text-light">LOGIN</button></a></center>
	<?php
}
echo "<br>";
include 'layout/footer.php';
?>