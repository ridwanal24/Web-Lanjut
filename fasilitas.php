<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';

$query="select * from fasilitas";
$aksi=mysql_query($query);
?>

<!-- Page Content -->
<div class="container">
<br>
<p class="h1 text-center">FASILITAS</p>
<br>

  <!-- Page Features -->
  <div class="row text-center">
<?php
while ($result=mysql_fetch_array($aksi)) {
$foto=$result['idFasilitas'];

//Lokasi Image
$path="assets/img/fasilitas/".$foto.".png";

//Jika file ada
if (file_exists($path)) {
  $path=$path;
}else{
  //Jika file tidak ada
  $path="assets/img/fasilitas/default.png";
}

?>  
<!--     <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Ruang Kelas</h4>
          <p class="card-text">Ruang kelas dilengkapi pendingin ruangan (AC) dan didesain agar anak merasa nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa. Selain meja-kursi, disediakan karpet untuk kegiatan circle time dan pembelajaran di dalam kelas. Letak meja dan kursi dapat dirubah sesuai dengan kebutuhan pembelajaran. Masing-masing kelas dilengkapi dengan Library Corner untuk menunjang program membaca siswa.</p>
        </div>
      </div>
    </div> 

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="http://placehold.it/500x325" alt="">
        <div class="card-body">
          <h4 class="card-title">Laboratorium Komputer</h4>
          <p class="card-text">Laboratorium computer SSH dilengkapi dengan sejumlah computer atau PC Quad Core dengan jaringan internet yang jumlahnya setara dengan jumlah siswa per kelasnya dengan ruangan ber-AC.</p>
        </div>
      </div>
    </div> -->

    <div class="col-lg-3 col-md-6 mb-4" id="<?php echo $result['idFasilitas']; ?>">
      <div class="card h-100">
        <img class="card-img-top" src="<?php echo $path; ?>" alt="">
        <div class="card-body">
          <h4 class="card-title"><?php echo $result['nama']; ?></h4>
          <p class="card-text"><?php echo $result['deskripsi']; ?></p>
        </div>
      </div>
    </div>
<?php
}
?>  
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>