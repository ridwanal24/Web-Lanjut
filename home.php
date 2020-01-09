<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
?>

<div class="row my-5 text-center">
  <div class="col-12 mx-auto">
  
  <div class=" jumbotron bg-white rounded shadow">
  <h1 class="display-4">Sambutan</h1>
  <p class="lead" align="justify"><small>Assalamu'alaikum Warahmatullahi Wabarakaatuh.
Salam sejahtera dan tetap semangat. Selamat datang di website ini 
Sebagai media informasi dan komunikasi web ini dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik, orang tua, masyarakat dan stakeholder. Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah. Melaksanakan amanah sebagai pimpinan di sini, harapan untuk menjadikan sekolah besar dengan bertabur prestasi baik akademik maupun non akademik terus meningkat. Sekolah yang akan melahirkan generasi yang kreatif, inovatif, religius yang berwawasan lingkungan serta mengabdi kepada bangsa dan negara.
<br>
Semoga Allah SWT meridhoinya dan masyarakat dapat mengambil manfaat yang sebesar-besarnya dengan segala usaha dan upaya sini.
<br>Wassalamu'alaikum Warohmatullahi Wabarokatuh.</small></p>
</div>

  </div>
</div>

<!-- Page Article -->
<div class="row m-0 mt-5 text-center">
  <div id="artikel" class="col-6 rounded mx-auto bg-white shadow">
    <h5 class="text-muted text-left my-3">ARTIKEL</h5>
    <hr>
    <?php
    $query = "SELECT * from artikel ORDER BY date desc limit 2";
    $action = mysql_query($query);
    while ($data = mysql_fetch_array($action)) {
      /*File Artikel*/
      $artikel = fopen("dashboard/artikel/".$data['text'], "r");
      $artikel = fread($artikel, 250);
      /*End of File Artikel*/
      
      /*Set Tanggal*/
      $date = date_create($data['date']);
      $date = date_format($date,"d/m/Y");
      /*End of Set Tanggal*/
      ?>

      <div class="row mt-3 text-left">
        <div class="col-12">
          <p class="font-weight-bold h4"><a href="artikel_open.php?id=<?php echo $data['idArtikel'];?>"><?php echo $data['judul']; ?></a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="dashboard/artikel/artikel/img/<?php echo $data['idArtikel'];?>.png" class="img-fluid mx-auto">
        </div>
        <div class="col-6 text-left">
          <p><small><?php echo $artikel; ?>... <a href="artikel_open.php?id=<?php echo $data['idArtikel'];?>">Read more>></a> </small></p>
        </div>
      </div>
      <div class="text-left font-italic text-muted">Posted on : <?php echo $date; ?></div>
      <hr>
      <?php
    }
    ?>
  </div>
  <!-- End of Page Article -->
  
  <div class="col-4 bg-white shadow rounded">
    <div class="">
      
      <h5 class="p-0 pt-3 px-3 text-muted">PENGUMUMAN</h5>
      <div class="text-left card-body p-0 pl-3">
        <hr>
        <?php
        $query = "SELECT * FROM pengumuman";
        $action = mysql_query($query);

        while ($data=mysql_fetch_array($action)) { ?>
          <small>
            <?php

            $string = strip_tags($data['title']);
            if (strlen($string) > 75) {

              $stringCut = substr($string, 0, 75);
              $endPoint = strrpos($stringCut, ' ');

              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
              $string .= '...<br> <a href="detail_pengumuman.php?id='.$data["id_pengumuman"].'">Read More>></a>';
              echo $string;
            }else{
              $string .= '...<br> <a href="detail_pengumuman.php?id='.$data["id_pengumuman"].'">Read More>></a>';
              echo $string;
            }
            ?>
          </small>
          <hr>
        <?php }
        ?>
      </div>
      </div>
  
  </div>
</div>
<!-- /.row -->

<!--<div class="row mt-5">
  <div class="col-6 bg-white shadow mx-auto rounded p-3">
    <h5 class="text-muted">FASILITAS</h5>
    <hr>
  </div>
  <div class="col-4"></div>
</div>-->
<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>