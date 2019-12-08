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
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action active">
						<center><h5>Dashboard Admin</h5></center>
					</a>
					<a href="guru/index.php" class="list-group-item list-group-item-action">Kelola Data Guru</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Data Siswa</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Daftar Fasilitas</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Apapun Itu</a>
				</div>
			</div>
			<div class="col-md-8">			
			
			</div>
		</div>
	</div>
	<br>
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