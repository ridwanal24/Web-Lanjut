<?php
session_start();
include 'layout/header.php';
echo "<br>";
if ((!isset($_SESSION['status'])) AND ($_SESSION['status']!="Admin")) {
	echo "<center>Silahkan login sebagai admin </center>";
	?>
	<center><a href="../index.php"><button type="button" class="btn btn-primary text-light">LOGIN</button></a></center>
	<?php
}else if ((isset($_SESSION['status'])) AND ($_SESSION['status']=="Admin")){
	?>

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
          <a class="btn btn-primary" href="fasilitas/">Fasilitas</a>
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
          <a class="btn btn-primary card-title" href="artikel/">Artikel</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/galeri" alt="">
        <div class="card-body">
          <a class="btn btn-primary" href="galeri/">Galeri</a>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
<!-- Baris Stop 2-->

<br>
<!-- Baris Mulai 3-->
        <div class="row text-center">
    <div class="col-md-1"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/admin.png" alt="">
        <div class="card-body">
          <a class="btn btn-primary card-title" href="admin/">Admin</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/kritik_saran.png" alt="">
        <div class="card-body">
          <br>
          <br>
          <br>
          <a class="btn btn-primary card-title" href="kritik_saran/">Kritik & Saran</a>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>
    <div class="col-md-2 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/galeri" alt="">
        <div class="card-body">
          <a class="btn btn-primary" href="galeri/">Galeri</a>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
 	</div>
<!-- Baris Stop 3-->
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