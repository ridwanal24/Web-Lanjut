<?php
session_start();
include 'layout/header.php';
include 'koneksi.php';
?>

<!-- Page Article -->
<div class="row m-0 mt-5 text-center">
  <div id="artikel" class="col-6 rounded mx-auto bg-white shadow">
    <?php
    $query = "SELECT * from artikel limit 2";
    $action = mysql_query($query);
    while ($data = mysql_fetch_array($action)) {
      $artikel = fopen("dashboard/artikel/".$data['text'], "r");
      $artikel = fread($artikel, 250);
      ?>

      <div class="row mt-3 text-left">
        <div class="col-12">
          <p class="font-weight-bold h4"><?php echo $data['judul']; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="dashboard/artikel/artikel/img/<?php echo $data['idArtikel'];?>.png" class="img-fluid mx-auto">
        </div>
        <div class="col-6 text-left">
          <p><small><?php echo $artikel; ?>...</small></p>
        </div>
      </div>
      <div class="text-left font-italic text-muted">Posted on :</div>
      <hr>
      <?php
    }
    ?>
  </div>
  <!-- End of Page Article -->
  
  <div class="col-4 bg-white shadow rounded">
    <div class="bg-white rounded">
      <h5 class="p-0 pt-3 px-3">Pengumuman</h5>
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

<br>
<br>
<br>
<?php
include 'layout/footer.php';
?>