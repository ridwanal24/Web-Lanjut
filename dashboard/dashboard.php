<?php
session_start();
include 'layout/header.php';

if (!isset($_SESSION['status'])) {
	echo "<center>Silahkan login dulu</center>";
}else{
	?>
	<div class="container-fluid">
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action active">
						<center><h5>Dashboard Admin</h5></center>
					</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Data Siswa</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Data Guru</a>
					<a href="#" class="list-group-item list-group-item-action">Kelola Daftar Fasilitas</a>
					<a href="#" class="list-group-item list-group-item-action disabled">Kelola Apapun Itu</a>
				</div>
			</div>
			<div class="col-md-8">			
			</div>
		</div>
	</div>
	<br>
	<?php
}
include 'layout/footer.php';
?>