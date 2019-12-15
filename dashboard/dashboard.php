<?php
session_start();
include 'layout/header.php';
echo "<br>";
if ((!isset($_SESSION['status'])) AND ($_SESSION['status']!="admin")) {
	echo "<center>Silahkan login sebagai admin </center>";
	?>
	<center><a href="../index.php"><button type="button" class="btn btn-primary text-light">LOGIN</button></a></center>
	<?php
}else if ((isset($_SESSION['status'])) AND ($_SESSION['status']=="admin")){
	?>

<!-- 	<div class="container-fluid">
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
	</div> -->
 	<div class="container-fluid">
 		<div class="row text-center">
<!-- Baris Mulai -->
  	<div class="col-md-1"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/guru.png" alt="">
        <div class="card-body">
          <a class="btn btn-primary card-title" href="guru/">Data Guru</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/siswa.png" alt="">
        <div class="card-body">
          <a class="btn btn-primary card-title" href="siswa/">Data Siswa</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/fasilitas.png" alt="">
        <div class="card-body">
          <a class="btn btn-primary" href="">Fasilitas</a>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
</div>
<!-- Baris Stop -->
<br>
<!-- Baris Mulai 2-->
  	<div class="row text-center">
  	<div class="col-md-1"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/pengumuman.png" alt="">
        <div class="card-body">
          <a class="btn btn-primary card-title" href="">Pengumuman</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/artikel" alt="">
        <div class="card-body">
        	<br>
        	<br>
        	<br>
          <a class="btn btn-primary card-title" href="siswa/">Artikel</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/galeri" alt="">
        <div class="card-body">
          <a class="btn btn-primary" href="">Galeri</a>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
<!-- Baris Stop 2-->

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